<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song;
use App\Models\Singer;

class SongController extends Controller
{
   public function add_song(){
    $song=new Song();
    $song->title='Godhuli';
    $song->save();
   } 

   //Get song based on singer-id
   public function show_song($id){
      $song=Singer::find($id)->songs;
      return $song;
   }

}
