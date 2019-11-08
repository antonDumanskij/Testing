<?php

namespace Core\Base;


use Core\Decoration;

interface Get
{
    public function getId();
    public function getAuthor();
    public function getDescription();
    public function getColorId(Decoration $decoy);
    public function getColor(Decoration $decoy);
}