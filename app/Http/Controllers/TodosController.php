<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todos;





class TodosController extends Controller
{
    public function liste(){
        return view("home", ["todos" => Todos::all()]);
    }

   public function saveTodo(Request $request){
    $texte = $request->input('texte');

    if($texte){
      $todo = new Todos();
      $todo->texte = $texte;
      $todo->termine = 0;
      $todo->save();
    }

    return redirect()->action('TodosController@liste');
    }
    public function markAsDone($id){
        $todo  = Todos::find($id);
        if($todo){
            $todo->termine = 1;
            $todo->save();
        }
        return redirect()->action('TodosController@liste');
    }
    
    public function deleteTodo($id){
        $todo  = Todos::find($id);
        if($todo){
            $todo->delete();
        }

        return redirect()->action('TodosController@liste');
    }

}
