<?php

class Book {
    private $title;
    private $description;
    private $image;
    private $hearts;
    private $rating;
    private $id;

    public function __construct($title, $description, $image, $hearts=0, $id=null)
    {
        $this->title = $title;
        $this->description = $description;
        $this->image = $image;
        $this->hearts = $hearts;
        $this->id = $id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image)
    {
        $this->image = $image;
    }

    public function getHearts()
    {
        return $this->hearts;
    }

    public function setHearts($hearts): void
    {
        $this->hearts = $hearts;
    }

    public function getRating()
    {
        return $this->rating;
    }

    public function setRating($rating): void
    {
        $this->rating = $rating;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id): void
    {
        $this->id = $id;
    }
}