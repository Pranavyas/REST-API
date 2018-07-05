<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\insert;


class post extends Controller
{
    //

   
 

   public function show(){
        
        $post=insert::all();
        return $post;
    }


    public function delete($id){
        
        $post= insert::where('title','=',$id);
        $post->delete();

        $list= insert::latest()->get();

        return ($list);
    }

   public function insert($title,$task,$p,$date){

            insert::create([
    
            'title' => $title,
            'task'  => $task,
            'priority' => $p,
            'dt' =>  $date
    
           ]);

           $post= insert::latest()->get();

           return ($post);
    }

    public function edit($title,$edit){
        
        

       \DB::update("update inserts set title= '$edit' where title ='$title' ");
        
       $post= insert::latest()->get();

       return ($post);

    }

}
