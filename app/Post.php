<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
   protected $fillable =['title','content','image','date',];  //userが変更可能なものを記述
   //protected $guarded =['country_id'];      //userが変更不可なものを記述
}
