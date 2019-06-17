<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Theme;
use Illuminate\Support\Facades\DB;

class SettingController extends Controller
{
  public function viewsetting(){

    $titles = Theme::where('name','title')->get();
    $title = $titles[0]->value;

    $desc = Theme::where('name','meta_desc')->get();
    $meta_desc = $desc[0]->value;

    $key = Theme::where('name','meta_key')->get();
    $meta_key=$key[0]->value;

    $ogimg = Theme::where('name','og')->get();
    $og = $ogimg[0]->value;
    // dd($og);

    $logos = Theme::where('name', 'logo')->get();
    $logo = $logos[0]->value;

    $back_color = Theme::where('name','sideback')->get();
   $background=$back_color[0]->value;

   $nav_back_color = Theme::where('name','nav_back')->get();
   $nav_back=$nav_back_color[0]->value;

   $side_fontcolor = Theme::where('name','side_fontcolor')->get();
   $side_font_color=$side_fontcolor[0]->value;

   $nav_fontcolor = Theme::where('name','nav_font')->get();
   $nav_font=$nav_fontcolor[0]->value;

    $projects = Project::all()->first();

    return view('adminPages.viewsetting',compact('projects' , 'title','meta_desc','meta_key','og','logo',
    'background','nav_back','side_font_color','nav_font'));
  }

  public function updatesetting(Request $request){

    if($request->hasfile('update_logo')){
      $logo = $request->file('update_logo');
      $topextension = $logo->getClientOriginalExtension();
      $topbanname = rand() . '.' . $topextension;
      $logo->move('images/logo',$topbanname);
      DB::table('themes')
      ->where('name', 'logo')
      ->update(['value' => $topbanname]);

    }

    Theme::where('name', 'title')->update([
      'value' => $request->title
    ]);

    Theme::where('name', 'meta_desc')->update([
      'value' => $request->meta_desc
    ]);

    Theme::where('name', 'meta_key')->update([
      'value' => $request->meta_key
    ]);

    Theme::where('name', 'sideback')->update([
     'value' => $request->sideback_color
   ]);

   Theme::where('name', 'side_fontcolor')->update([
     'value' => $request->side_fontcolor
   ]);

   Theme::where('name', 'nav_back')->update([
     'value' => $request->navbar_backcolor
   ]);

   Theme::where('name', 'nav_font')->update([
     'value' => $request->navbar_fontcolor
   ]);

    if($request->hasfile('og')){
      $og = $request->file('og');

      $ogextension = $og->getClientOriginalExtension();
      $ogbanname = rand() . '.' . $ogextension;
      $og->move('images/logo',$ogbanname);
      DB::table('themes')
      ->where('name', 'og')
      ->update(['value' => $ogbanname]);

    }

    $amt = $request->amount;
    DB::table('projects')->update(['min_amt' => $amt]);
    return redirect()->back()->with('success','Updated Successfully');

  }
}
