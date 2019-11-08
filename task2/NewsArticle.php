<?php


use Core\SuperArticle;

class NewsArticle extends SuperArticle
{


    public function create(array $data)
    {
        // TODO: Implement create() method.
        $this->notify('Спасибо за новость!');
    }
}