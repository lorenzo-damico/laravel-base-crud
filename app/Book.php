<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
      "title",
      "author",
      "pages",
      "edition",
      "year",
      "isbn",
      "genre",
      "image"
    ];
}
