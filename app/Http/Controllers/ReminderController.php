<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReminderController extends Controller
{
  public function index() {
    $reminders = DB::table('reminders')->get();
    return view('home', ['reminders' => $reminders]);
  }

  public function store(Request $request) {
    if ($request->has('body')) {
      DB::table('reminders')->insert([
        'body' => $request->body,
        'did_finish' => false
      ]);
    }
    return back()->with("status", "OK, and don't forget!");
  }

  public function delete($id='0') {
    if ($id !== '0') {
      DB::table('reminders')->where('id', $id)->delete();
    }
    return back()->with("status", "Good job!");
  }
}
