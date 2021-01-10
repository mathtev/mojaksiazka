<?php
session_start();


require_once 'Repository.php';
require_once __DIR__.'/../models/Book.php';

class BookRepository extends Repository
{
    public function getBook(int $id): ?Book
    {
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM public.books WHERE id = :id
        ');
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        $book = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($book == false) {
            return null;
        }

        return new Book(
            $book['title'],
            $book['description'],
            $book['image']
        );
    }

    public function addBook(Book $book): void
    {
        $stmt = $this->database->connect()->prepare('
            INSERT INTO books (title, description, image, hearts, id)
            VALUES (?, ?, ?, ?, ?)
        ');

        $stmt->execute([
            $book->getTitle(),
            $book->getDescription(),
            $book->getImage(),
            $book->getHearts(),
            $book->getId(),
        ]);
    }

    public function getBooks(): array
    {
        $result = [];

        $stmt = $this->database->connect()->prepare('
            SELECT * FROM books;
        ');
        $stmt->execute();
        $books = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($books as $book) {
            $result[] = new Book(
                $book['title'],
                $book['description'],
                $book['image'],
                $book['hearts'],
                $book['id']
            );
        }

        return $result;
    }

    public function getBookByTitle(string $searchString)
    {
        $searchString = '%' . strtolower($searchString) . '%';

        $stmt = $this->database->connect()->prepare('
            SELECT * FROM books WHERE LOWER(title) LIKE :search
        ');
        $stmt->bindParam(':search', $searchString, PDO::PARAM_STR);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function giveHeart(int $id)
    {
        $isPressed = 0;
        $userId = $_SESSION['userId'];

        $conn  = $this->database->connect();
        $conn->beginTransaction();
        $temp = $conn->query("SELECT * FROM users_books WHERE id_book = '$id' AND id_user = '$userId'");

        if ($temp->rowCount()==0) {
            $isPressed = 1;
            $stmt = $conn->prepare('
            UPDATE books SET "hearts" = "hearts" + 1 WHERE id = :id
         ');
            $stmt2 = $conn->prepare('
            INSERT INTO users_books (id_user, id_book)
            VALUES (?, ?)
        ');
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            $stmt2->execute([
                $userId,
                $id
            ]);
        } else {
            $stmt = $conn->prepare('
            UPDATE books SET "hearts" = "hearts" - 1 WHERE id = :id
         ');
            $conn->query("DELETE FROM users_books WHERE id_book = '$id' AND id_user = '$userId'");
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
        }
        $conn->commit();

        return $isPressed;
    }
}

