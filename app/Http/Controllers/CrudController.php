<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CrudController extends Controller
{
    public function showData()
    {
      return view ('show_data');
    }
    public function addData()
    {
      return view ('add_data');
    }
    public function storeData(Request $request)
    {
      $rules = [
        'name'=>'required|max:10',
        'email'=>'required|email',

      ];
    $cm=[
      'name.required'=>'Enter your name',
      'name.max'=>'Please contain 10 char',
      'email.required'=>'Please contain 10 char',
      'email.email'=>'Please contain valid  mail',
    ];

      $this->validate($request,$rules,$cm);
      return $request->all();
    }
}
