<?php


namespace Core;


use Core\Base\Get;
use Core\Base\Update;

abstract class SuperArticle implements Get, Update
{
    abstract public function create(array $data);

    public function delete(int $id)
    {
    }


    public function getId()
    {
        // TODO: Implement getId() method.
    }

    public function getAuthor()
    {
        // TODO: Implement getAuthor() method.
    }

    public function getDescription()
    {
        // TODO: Implement getDescription() method.
    }

    public function getColorId(Decoration $decoration)
    {
        // TODO: Implement getColorId() method.
    }

    public function getColor(Decoration $decoration)
    {
        // TODO: Implement getColor() method.
    }


    public function updateAuthor()
    {
        // TODO: Implement updateAuthor() method.
    }

    public function updateDescription()
    {
        // TODO: Implement updateDescription() method.
    }

    public function updateColor(Decoration $decoration)
    {
        // TODO: Implement updateColor() method.
    }

    public function notify(string $mess){
        echo $mess;
    }
}