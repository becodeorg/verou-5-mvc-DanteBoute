<?php

declare(strict_types=1);

class Article
{
    private int $id;
    public string $title;
    public ?string $description;
    public ?string $publishDate;

    public function __construct(int $id, string $title, ?string $description, ?string $publishDate)
    {
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
        $this->publishDate = $publishDate;
    }

    public function getId(){
        return $this->id;
    }

    public function formatPublishDate($format = 'd-m-Y')
{
    return date($format, strtotime($this->publishDate));
}

}