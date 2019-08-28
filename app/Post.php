<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Post extends Eloquent
{
    protected $conllection = "mongodb"; //lien ket ket csdl
    protected $guarded = []; //co the tuong tac duoc tat ca truong du lieu
}
