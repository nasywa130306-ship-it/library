<?php

class Member
{
    public $name;
    public $memberId;

    public function getInfo()
    {
        return $this->memberId . " - " . $this->name;
    }

    public function borrowBook($book)
    {
        return $this->name . " meminjam " . $book->title;
    }
}