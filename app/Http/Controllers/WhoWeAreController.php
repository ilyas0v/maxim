<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\WhoWeAre;
use App\Staff;
class WhoWeAreController extends Controller
{
    public function update_yazilar(Request $request,$id){
      $whoweare = WhoWeAre::find($id);
      $this->validate($request , array(
        'title' => 'max:100',
        'subtitle' => 'max:100',
        'text'  => "max:300"
        ));

      $whoweare->title = $request->input('title');
      $whoweare->subtitle = $request->input('subtitle');
      $whoweare->text = $request->input('text');

      $whoweare->save();
      return redirect()->route('whoweare');
    }


    public function delete_staff_member($id){
      $sm = Staff::find($id);
      $sm->delete();
      return redirect()->route('whoweare');
    }

    public function update_staff_member(Request $request , $id){
      $sm = Staff::find($id);
      if($request->image==null){
        $this->validate($request , array(
          'name_surname' => 'max:30',
          'job' => 'max:20'
          ));
          $sm->name_surname = $request->input('name_surname');
          $sm->job = $request->input('job');
          $sm->save();
          return redirect()->route('whoweare');
      }

      echo "<h1>shekil yuklemek heleki mumkun deyil. :/ </h1>";
    }

    public function add_staff_member(Request $request){
      $sm = new Staff;
      if($request->image==null){
        $this->validate($request , array(
          'name_surname' => 'max:30',
          'job' => 'max:20'
          ));
          $sm->name_surname = $request->name_surname;
          $sm->job = $request->job;
          $sm->save();
          return redirect()->route('whoweare');
      }
    }


}
