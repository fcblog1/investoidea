<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use Illuminate\Support\Facades\DB;
use Charts;


class UserPagesController extends Controller
{
  public function userdashboard(){
    return view('userPages.userdashboard');
  }

  public function viewproject(){
    $projects = Project::all();
    return view('userPages.viewproject')->with('projects', $projects);
  }

  public function readmore($id){

    $datas = DB::table('investments')->where('project_id', $id)
    ->join('users','users.id','=','investments.user_id')
    ->select('users.id','users.name', DB::raw("SUM(amount) as total_amt"))
    ->groupBy('users.id','users.name','project_id')
    ->get();
    
    $labels = array();
    $value = array();
    foreach ($datas as $data) {

      $labels[] = $data->name;
      $value[] = $data->total_amt;
    }
    $arr['labels']=$labels;
    $arr['value']=$value;


    $projects = Project::find($id);


      $pie  =	 Charts::create('pie', 'highcharts')
				    ->title('Total Investment')
				    ->labels($arr['labels'])
				    ->values($arr['value'])
				    ->dimensions(1000,500)
				    ->responsive(true);

    return view('userPages.readmore',compact('pie','projects','datas'));
  }

  public function userinvestment(){
    $investments = DB::table('investments')
    ->where('user_id',auth()->user()->id)
    ->join('projects', 'projects.id', '=', 'investments.project_id')
    ->select('projects.name',   DB::raw('SUM(investments.amount) as total_amt'))
    ->groupBy('projects.name')
             ->get();

             $labels = array();
             $value = array();
             foreach ($investments as $investment) {

               $labels[] = $investment->name;
               $value[] = $investment->total_amt;
             }
             $arr['labels']=$labels;
             $arr['value']=$value;

             $pie  =	 Charts::create('pie', 'highcharts')
                  ->title('My Investment')
                  ->labels($arr['labels'])
                  ->values($arr['value'])
                  ->dimensions(1000,500)
                  ->responsive(true);

    return view('userPages.userinvestment',compact('pie','investments'));
  }
}
