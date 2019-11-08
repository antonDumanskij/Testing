<?php


namespace Core\Base;


use Core\Decoration;

interface Update
{
    public function updateAuthor();
    public function updateDescription();
    public function updateColor(Decoration $decoration);
}