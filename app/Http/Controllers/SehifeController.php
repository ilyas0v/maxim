<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slide;
use App\Spacer1;
use App\WhoWeAre;
use App\Staff;
class SehifeController extends Controller
{
    public function index(){
        $slides = Slide::all();
        $spacer1 = Spacer1::find(1);
        $whoweare = WhoWeAre::find(1);
        $staff = Staff::all();
        return view('main')->withSlides($slides)->withSpacer1($spacer1)->withWhoweare($whoweare)->withStaff($staff);
    }




    public function slides(){
      $slides = Slide::all();
      return view('admin.slides')->withSlides($slides);
    }



    public function spacer1(){
      $spacer1 = Spacer1::find(1);
      return view('admin.spacer1')->withSpacer1($spacer1);
    }

    public function whoweare(){
      $whoweare = WhoWeAre::find(1);
      $staff = Staff::all();
      return view('admin.whoweare')->withWhoweare($whoweare)->withStaff($staff);
    }



    public function admin(){
        return view('admin.index');
    }


}
