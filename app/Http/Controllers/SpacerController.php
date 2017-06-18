<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Spacer1;
class SpacerController extends Controller
{
    public function update_spacer1(Request $request , $id){
      $spacer = Spacer1::find($id);
      $this->validate($request , array(
        'quote' => 'max:100',
        'author' => 'max:50',
        'background' => 'max:20'
      ));
      $spacer->quote = $request->input('quote');
      $spacer->author = $request->input('author');
      $spacer->background = $request->input('background');

      $spacer->save();

      return redirect()->route('spacer1');
    }
}
