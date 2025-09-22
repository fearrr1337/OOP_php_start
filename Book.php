<?php

class Book {
    protected $title, $author, $publicationYear, $publisher, $language, $pages;

    public function __construct($title, $author, $publicationYear, $publisher, $language, $pages)
    {
        $this->title = $title;
        $this->author = $author;
        $this->publicationYear = $publicationYear;
        $this->publisher = $publisher;
        $this->language = $language;
        $this->pages = $pages;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getAuthor() {
        return $this->author;
    }

    public function getPublicationYear() {
        return $this->publicationYear;
    }

    public function getPublisher() {
        return $this->publisher;
    }

    public function getLanguage() {
        return $this->language;
    }

    public function getPage() {
        return $this->pages;
    }
}

class EBook extends Book {
    private $fileSize;
    public function __construct($title, $author, $publicationYear, $publisher, $language, $pages, $fileSize)
    {
        parent::__construct($title, $author, $publicationYear, $publisher, $language, $pages);
        $this->fileSize = $fileSize;
    }
    public function getFileSize() {
        return $this->fileSize;
    }
    public function displayInfo() {
        echo "Название: " . $this->getTitle() . "\nАвтор: " . $this->getAuthor() . "\nГод публикации: " . $this->getPublicationYear() . "\nИздатель: " . $this->getPublisher() .
            "\nЯзык: " . $this->getLanguage() . "\nСтраницы: " . $this->getPage() . "\n" . "Размер(мб): " . $this->getFileSize() . "\n";
    }
}

$Ebook1 = new EBook('Собачье сердце', 'Михаил Булгаков', 2025, "АЗБУКА-КЛАССИКА", "Русский", 256, 10);
$Ebook1->displayInfo();
