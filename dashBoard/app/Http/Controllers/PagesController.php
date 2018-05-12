<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
      public function getIndex(){
      return view('welcome');
    }
    public function getForcasting(){
      return view('pages.forcasting');
    }
    /*
    public function getCampaign(){
      $first = 'Kwak';
      $last = 'Haeun';
      $full = $first . " ". $last;
      $email = 'blessing@nhnent.com';
      return view('pages.campaign_management') -> withFull($full) -> withEmail($email);
    }*/
    public function getReport(){
      return view("pages.report");
    }
    public function getOpt(){
      return view("pages.optimized_board");
    }
}
