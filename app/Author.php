<?php

namespace App;

use Faker\Factory;


use Illuminate\Database\Eloquent\Model;
class Author extends Model
{

    public function getFullNameAttribute(){
      return $this->name . ' ' . $this->surname;
    }

}
