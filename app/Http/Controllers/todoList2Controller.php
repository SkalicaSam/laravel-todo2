<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ListItem;


class todoList2Controller extends Controller
{
    //
    public function index(){
        //return view('welcome2', ['listItems' => ListItem::all()]);
        //return view('welcome2', ['listItems' => ListItem::where('is_complete','>', 0)->get()]);
        return view('welcome2', ['listItems' => ListItem::where('is_complete', 0)->get()]);
        
    }



    public function saveItem(Request $request){
        
        $newListItem = new ListItem;  // create new list of items
        $newListItem->name = $request->listItem; // to get values to listItem
        $newListItem->is_complete = 0;
        $newListItem->save(); 





        return view('welcome', ['listItems' => ListItem::all()]);
    }

    public function saveItem2(Request $request){
        
        $newListItem = new ListItem;  // create new list of items
        $newListItem->name = $request->listItem1; // to get values to listItem
        $newListItem->is_complete = $request->listItem2;
        $newListItem->save(); 





        //return view('welcome2', ['listItems' => ListItem::all()]);
        return redirect('/');
    }

    public function markCompleteMethod($id){
        // \Log::info($id);
        // $listItem = ListItem::find($id);
        // \Log::info($listItem);
        $listItem = ListItem::find($id);
        $listItem->is_complete = 1;
        $listItem->save();
        return redirect('/');
    }


    // public function saveItem(Request $request){
    //     Log::info(json_encode($request->all())); 
    //     // to see all what is posting in 
    //     // C:\xampp\htdocs\laravel_projects_demos\todo2\storage\logs
    //     return view('welcome');
    // }

    // public function saveItem(){
    //     return view('welcome');
    // }
}
