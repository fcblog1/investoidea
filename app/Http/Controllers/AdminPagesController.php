<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\User;
use Mail;
use Illuminate\Support\Facades\DB;
use App\Rules\ValidImageSize;
use Charts;

class AdminPagesController extends Controller
{
  public function addproject(){
    return view('adminPages.addproject');
  }

  public function insertproject(Request $request){
    $project = new Project;

    $totalFileSize = array_sum($_FILES['images']['size']);

    $this->validate($request,array(
      'pname'=>'required| max:255',
      'desc'=>'required',
      'link' => 'required',
      'images.*' => ['required', new ValidImageSize],
      'images.0' =>'required',
    ),
    [
      'pname.required' => 'Project name is required',
      'desc.required' => 'Description is required',
      'link.required' => 'permalink is required',
      'images.0.required' => 'image must get uploaded'
    ]);


    $project->name = $request->pname;

    $project->description = $request->desc;
    // $project->min_amt = $request->amt;

    if($request->hasFile('images')){

      foreach($request->images as $image){

        $filename_extension = $image->getClientOriginalExtension();
        $img_name = rand().'.'.$filename_extension;
        $list_img[] = $img_name;
        $image->move('images/',$img_name);

      }
      $list_img = join(',', array_filter($list_img));

      $project->images = $list_img;

    }

    $project->link = $request->link;
    $project->save();
    return redirect()->route('addproject')->with('success','successfully inserted !');

  }

  public function listproject(){
    $projects = Project::paginate(1);
    return view('adminPages.listproject')->with('projects',$projects);
  }

  public function editproject($id){

    $projects = Project::find($id);
    // dd($projects->images);
    $arr_img = explode(',',$projects->images);

    return view('adminPages.editproject')->with('projects',$projects)->with('arr_img', $arr_img);
  }

  public function delete($id){
    $project = Project::find($id);
    $img = explode(',',$project->images);
    foreach($img as $pic ) {
      $image_path = "images/".$pic;

      if (file_exists($image_path)) {
        @unlink($image_path);
      }
    }
    $project->delete();
    return redirect()->route('listproject')->with('success','successfully deleted !');

  }
  public function img_delete($id,$img){
    $all_img = Project::find($id);
    // dd($all_img->images);
    $arr_img = explode(',',$all_img->images);
    $index = array_search($img, $arr_img);
    if($index !== false){
      unset($arr_img[$index]);
    }
    $new_arr_img = implode(',',$arr_img);
    Project::where('id', $id)
    ->update([
      'images' => $new_arr_img
    ]);

    $image_path = "images/".$img;

    if (file_exists($image_path)) {
      @unlink($image_path);
    }
    return back()->with('success','Successfully deleted');
  }

  public function viewinvestor(){

    $investors = DB::table('users')->where('admin',0)
    ->leftJoin('investments','investments.user_id','=','users.id')
    ->select('users.id','users.name', DB::raw("SUM(investments.amount) as total_amt"))
    ->groupBy('users.id','users.name')
    ->paginate(1);


    return view('adminPages.viewinvestor',compact('investors'));
  }

  public function investordetails($id){


    $details = DB::table('users')->where('users.id', $id)
    ->join('investments','investments.user_id','=','users.id')
    ->join('projects','projects.id','=','investments.project_id')
    ->select('users.id','projects.name', DB::raw("SUM(amount) as total_amt"))
    ->groupBy('users.id','users.name','projects.name')
    ->get();

    $labels = array();
    $value = array();
    foreach ($details as $data) {

      $labels[] = $data->name;
      $value[] = $data->total_amt;
    }
    $arr['labels']=$labels;
    $arr['value']=$value;





    $pie  =	 Charts::create('pie', 'highcharts')
    ->title('Total Investment')
    ->labels($arr['labels'])
    ->values($arr['value'])
    ->dimensions(1000,500)
    ->responsive(true);

    return view('adminPages.investordetails',compact('details','pie'));
  }



  public function updateproject(Request $request, $id){

    $new_images= array();

    if($request->hasFile('update_images')){
      // $new_images = json_decode($request->`update_images);
      // dd($new_images);

      foreach($request->update_images as $image){

        $filename_extension = $image->getClientOriginalExtension();
        $img_name = rand().'.'.$filename_extension;
        $new_images[] = $img_name;
        $image->move('images/',$img_name);

      }
      $new_images = join(',', array_filter($new_images));

    }

    if(empty($new_images))
    {
      $new_images = $request->hidden_img_arr;

    }

    else{

      $new_images .= ','. $request->hidden_img_arr ;
    }

    Project::where('id', $id)
    ->update([
      'name' =>  $request->updatepname,
      'description' => $request->updatedesc ,
      'images' => $new_images,
      'link'  => $request->updatelink
    ]);

    return back()->with('success','Successfully Updated');

  }
}
