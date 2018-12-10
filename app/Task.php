<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['name', 'value', 'date_launch']; //todos os campos para serem inclusos no BD (tem que ser o mesmo nome que definiu na MIGRATION)
}
