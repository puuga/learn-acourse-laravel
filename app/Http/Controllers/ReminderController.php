<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Reminder;
use App\ReminderType;

class ReminderController extends Controller
{
  public function index() {
    // $foo = new ReminderType;
    // $foo->type_name = "Important";
    // $foo->save();
    //
    // $boo = new ReminderType;
    // $boo->type_name = "Super Ultimate Important";
    // $boo->save();


    $reminders = Reminder::all();
    $reminderTypes = ReminderType::all();

    // dd($reminders);

    return view('home', [
      'reminders' => $reminders,
      'reminderTypes' => $reminderTypes,
    ]);
  }

  public function store(Request $request) {
    if ($request->has('body')) {
      $reminder = new Reminder;
      // $reminder->user_id = null;
      $reminder->reminder_type_id = $request->reminderType;
      $reminder->body = $request->body;
      $reminder->did_finish = false;

      $reminder->save();
    }
    return back()->with("status", "OK, and don't forget!");
  }

  public function delete($id='0') {
    if ($id !== '0') {
      $reminder = Reminder::find($id);
      $reminder->delete();
    }
    return back()->with("status", "Good job!");
  }
}
