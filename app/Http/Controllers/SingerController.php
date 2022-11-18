<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song;
use App\Models\Singer;
class SingerController extends Controller
{
   public function add_singer(){
    $singer=new Singer();
    $singer->name='Bikki';
    $singer->save();

    $songids=[1,3,5];
    $singer->songs()->attach($songids);
   }
}
