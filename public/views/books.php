<!DOCTYPE html>
<head>
    <script data-require="jquery@*" data-semver="2.1.4" src="https://code.jquery.com/jquery-2.1.4.js"></script>
    <script src="https://kit.fontawesome.com/36713509a2.js" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <link rel="stylesheet" type="text/css" href="public/css/queries/style.css">

    <title>BOOKS</title>
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />

    <script src="public/scripts/script.js"></script>
    <script type="text/javascript" src="./public/js/search.js" defer></script>
    <script type="text/javascript" src="./public/js/statistics.js" defer></script>
</head>

<body>
    <div class="base-container">
        <nav id="navigation">
            <img src="public/img/logo.svg">
            <ul>
                <li>
                    <i class="fas fa-book"></i>
                    <a href="#" class="navbutton">books</a>
                </li>
                <li>
                    <i class="fas fa-pen-alt"></i>
                    <a href="authors" class="navbutton">authors</a>
                </li>
                <li>
                    <i class="fas fa-scroll"></i>
                    <a href="lists" class="navbutton">lists</a>
                </li>
                <li>
                    <i class="fas fa-archive"></i>
                    <a href="#" class="navbutton">bookshelf</a>
                </li>
                <li>
                    <i class="fas fa-cog"></i>
                    <a href="#" class="navbutton">settings</a>
                </li>
            </ul>
        </nav>
        <main>
            <header class="big-screen-header">
                <div class="search-bar">
                    <input placeholder="Search for books">
                </div>
                <div class="user-details">
                    <a href="user">
                        <img src="public/img/uploads/user.png" alt="user img">
                    </a>
                    <a class="username" href="#">Username</a>
                    <a class="logout" href="login">Logout</a>
                </div>
            </header>
            <header class="small-screen-header">
                <div class="upper-header">
                    <div class="upper-list">
                        <i class="fas fa-list"></i>
                    </div>
                    <div class="upper-logo">
                        <img src="public/img/logo.svg">
                    </div>
                    <div class="user-details">
                        <a href="user">
                            <img src="public/img/uploads/user.png" alt="user img">
                        </a>
                    </div>
                </div>
                <div id="lower-header" class="lower-header">
                    <div class="search-bar">
                        <form>
                            <div class="form-content">
                                <input placeholder="Szukaj książek">
                                <i class="fas fa-search"></i>
                            </div>
                        </form>
                    </div>
                </div>
                
            </header>
            <section class="books-section">
                <div class="categories">
                    <h2>Category</h2>
                    <button>
                        <img src="public/img/uploads/Icon material-sort.svg">
                    </button>
                </div>
                <hr>
                <div class="books">
                    <?php foreach($books as $book): ?>
                        <div id="<?= $book->getId() ?>">
                            <a class="book-title snip" data-toggle="tooltip" title="book title" href="#">
                                <h2><?= $book->getTitle(); ?></h2>
                            </a>
                            <a class="book-cover" href="#">
                                <img src="public/img/uploads/books/<?= $book->getImage(); ?>" alt="book img">
                            </a>
                            <div class="social-section">
                                <i class="fas fa-heart"> <?= $book->getHearts(); ?></i>
                                <i class="fas fa-star"> 9/10</i>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </section>
        </main>
    </div>

</body>

<template id="book-template">
    <div id="">
        <a class="book-title snip" data-toggle="tooltip" title="book title" href="#">
            <h2>title</h2>
        </a>
        <a class="book-cover" href="#">
            <img src="" alt="book img">
        </a>
        <div class="social-section">
            <i class="fas fa-heart"> 0</i>
            <i class="fas fa-star"> 9/10</i>
        </div>
    </div>
</template>