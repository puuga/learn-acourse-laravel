<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReminderController extends Controller
{
  public function home() {
    $reminders = [
      'Buy Milk',
      'Book movie',
      'Go hang out',
    ];
    return view('home', ['reminders' => $reminders]);
  }
}
