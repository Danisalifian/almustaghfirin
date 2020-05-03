<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    //Table name
    protected $table = 'photos';
    //Primary key
    public $primarykey = 'id';
    //Timestamps
    public $timestamp = true;
}
