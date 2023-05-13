<?php

namespace App\Service;

class Slugify
{
    public function slugify(string $title): string
    {
        return strtolower(str_replace(' ', '-', $title));
    }
}
