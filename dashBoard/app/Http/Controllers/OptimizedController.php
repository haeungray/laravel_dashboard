<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class OptimizedController extends Controller
{
  public function index(){
    return view("pages.view");
  }
  public function search(Request $request){

    if ($request -> ajax())
    {
      $output="";
      $target = DB::table("adv_company") -> where("name", "LIKE",'%'.$request->search.'%')->get();
      if($target)
      {
          foreach($target as $key => $customer)
          {
            $output.='<tr>'.
                    '<td>'.$customer->name.'</td>'.
                    '<td>'.$customer->biz_num.'</td>'.
                    '<td>'.$customer->person_in_charge_name.'</td>'.
                    '<td>'.$customer->agency_id.'</td>'.
                    '</tr>';
          }
      return Response($output);
      }
    }
  }
}
