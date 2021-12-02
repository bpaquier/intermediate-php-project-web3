<?php

namespace App\Entity;

class Post {
    private $id;
    private $title;
    private $image;
    private $date;
    private $author_id;
    private $content;
    private $author_lastName;
    private $author_firstName;


    public function getId () {
        return $this->id;
    }

    public function getTitle () {
        return $this->title;
    }
    public function getImage () {
        return $this->image;
    }
    public function getDate () {
        return $this->date;
    }
    public function getAuthorId () {
        return $this->author_id;
    }
    public function getContent () {
        return $this->content;
    }
}