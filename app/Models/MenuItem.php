<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    public $timestamps = true;

    protected $table = 'menu_items';

    protected $fillable = [
        'name', 'name', 'url', 'parent_id'
    ];
}
