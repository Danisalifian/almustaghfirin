<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    //Table name
    protected $table = 'videos';
    //Primary key
    public $primarykey = 'id';
    //Timestamps
    public $timestamp = true;
}
