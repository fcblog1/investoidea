<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Investment;
use Illuminate\Support\Facades\DB;
use User;
use App\Rules\ValidAmount;

class InvestmentController extends Controller
{

  public function pendinginvestor(){
    $pendings = DB::table('users')
    ->where('approve',0)
    ->whereNotNull('email_verified_at')->paginate(1);

    return view('adminPages.pendinginvestor')->with('pendings', $pendings);
  }

  public function store(Request $request){

    $this->validate($request,array(
          'amount'=>['required', new ValidAmount],
      ));



    $invest = new Investment;
    $invest->user_id = auth()->user()->id;
    $invest->project_id = $request->project_id;
    $invest->amount = $request->amount;
    $invest->save();

    return redirect()->route('viewproject')->with('success','investmest success');

  }

}
