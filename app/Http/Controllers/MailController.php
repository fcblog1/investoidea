<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\User;

class MailController extends Controller
{
  public function approvalsend($id){

    $user = User::findOrFail($id);
          User::where('id', $id)
            ->update([
              'approve' => 1
            ]);

    Mail::send('mail', ['user' => $user], function ($m) use ($user) {
      $m->from('admin@gmail.com', $user->name);

      $m->to($user->email, $user->name)->subject('Your Account is Registered!');
    });
    return redirect()->back()->with('success','Email For approval is sent !');
  }
}
