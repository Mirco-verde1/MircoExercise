<?php

namespace App;
use Carbon\Carbon;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
   public function author(){
    return $this->belongsTo(Author::class);
   }

   public function getItDateAttribute(){
    $itDate = Carbon::createFromFormat('Y-m-d', $this->year)->format('d-m-Y');
    return $itDate;
   }
}
