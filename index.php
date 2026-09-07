<?php

require_once "Book.php";
require_once "Member.php";
require_once "DigitalBook.php";

// Membuat beberapa object Book
$book1 = new Book();
$book1->title = "Pemrograman Web";

$book2 = new Book();
$book2->title = "Belajar PHP";

$book3 = new Book();
$book3->title = "Belajar Framework";

// Membuat object Member
$member1 = new Member();
$member1->memberId = "M001";
$member1->name = "Nasywa Salsabila";

// Menampilkan informasi buku
echo "=== INFORMASI BUKU ===<br>";
echo $book1->getInfo() . "<br>";
echo $book2->getInfo() . "<br>";
echo $book3->getInfo() . "<br>";

// Menampilkan informasi member
echo "<br>=== INFORMASI MEMBER ===<br>";
echo $member1->getInfo() . "<br>";

// Simulasi peminjaman
echo "<br>=== PEMINJAMAN BUKU ===<br>";
echo $member1->borrowBook($book2) . "<br>";