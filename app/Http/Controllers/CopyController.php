<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Copy;
use App\Models\User;
use Illuminate\Http\Request;

class CopyController extends Controller
{
    public function index()
    {
        //visszatér az összes Copy-kel
        $copies = response()->json(Copy::all());
        return $copies;
    }
    public function show($id)
    {
        $Copy = response()->json(Copy::find($id));
        return $Copy;
    }


    public function destroy($id){
        Copy::find($id)->delete;
    }

    public function store(Request $request){
        $Copy = new Copy();
        $Copy->book_id = $request->book_id;
        $Copy->user_id = $request->user_id;
        $Copy->status = $request->status;
        
        $Copy->save();
    }
    public function update(Request $request, $id) {
        $Copy = Copy::find($id);
        $Copy->book_id = $request->book_id;
        $Copy->user_id = $request->user_id;
        $Copy->status = $request->status;
        $Copy->save();
    }
    public function newView(){
        $users = User::all();
        $books = Book::all();
        return view('copy.new', ['users' => $users, 'books'=>$books]);
    }
    public function editView($id){
        $users = User:: all();
        $books = Book::all();
        $copy  =Copy::find($id);
        return view('copy.edit', ['users'=>$users, 'books'=> $books, 'copy' => $copy]);
    }
    public function listView(){
        $copies = Copy::all();
        return view('copy.list', ['copies' => $copies]);
    }
}
