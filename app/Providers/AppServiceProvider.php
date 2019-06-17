<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Theme;

class AppServiceProvider extends ServiceProvider
{
  /**
  * Bootstrap any application services.
  *
  * @return void
  */
  public function boot()
  {
    Schema::defaultStringLength(191);

    view()->composer('userlayouts.master', function($view)
    {

      $titles = Theme::where('name','title')->get();
      $title=$titles[0]->value;

      $back_color = Theme::where('name','nav_back')->get();
      $nav_back = $back_color[0]->value;

      $side_fontcolor = Theme::where('name','nav_font')->get();
      $nav_font_color=$side_fontcolor[0]->value;

      $logos = Theme::where('name', 'logo')->get();

      $des = Theme::where('name','meta_desc')->get();
      $meta_des=$des[0]->value;

      $key = Theme::where('name','meta_key')->get();
      $meta_key=$key[0]->value;

      $ogimg = Theme::where('name','og')->get();
      $og=$ogimg[0]->value;

      $view->with('title', $title)
      ->with('nav_back',$nav_back)
      ->with('nav_fontcol',$nav_font_color)
      ->with('logos', $logos)
      ->with('meta_des',$meta_des)
      ->with('meta_key',$meta_key)
      ->with('og',$og);

    });


    view()->composer('adminlayouts.master', function($view)
    {
      $back_color = Theme::where('name','sideback')->get();
      $background=$back_color[0]->value;

      $side_fontcolor = Theme::where('name','side_fontcolor')->get();
      $side_font_color=$side_fontcolor[0]->value;

      $titles = Theme::where('name','title')->get();
      $title=$titles[0]->value;

      $logos = Theme::where('name', 'logo')->get();

      $view->with('background', $background)
      ->with('side_font',$side_font_color)
      ->with('title',$title)
      ->with('logos', $logos);
    });

    view()->composer('layouts.app', function($view)
    {
      $titles = Theme::where('name','title')->get();
      $title=$titles[0]->value;
        $logos = Theme::where('name', 'logo')->get();
      $view->with('title',$title)
      ->with('logos', $logos);

    });


    // view()->composer('login', function($view)
    // {
    //   $logos = Theme::where('name', 'logo')->get();
    //   $titles = Theme::where('name','title')->get();
    //   $title = $titles[0]->value;
    //   $view->with('title')
    //
    // });
    //
    // view()->composer('register', function($view)
    // {
    //   $titles = Theme::where('name','title')->get();
    //   $title = $titles[0]->value;
    // });

  }

  /**
  * Register any application services.
  *
  * @return void
  */
  public function register()
  {
    //
  }
}
