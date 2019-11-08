<?php


use Core\SuperArticle;

class BlogArticle extends SuperArticle
{


    public function create(array $data)
    {
        // TODO: Implement create() method.
        $this->notify('Заметка опубликована!');
    }
}