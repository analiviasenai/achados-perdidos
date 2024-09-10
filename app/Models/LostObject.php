<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


// nessa parte do código estamos definindo quais atributos podem ser preenchidos em massa
class LostObject extends Model
{
    protected $fillable = ['name','description','location','lost_date'];
    use HasFactory;
}
