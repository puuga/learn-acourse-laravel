<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReminderType extends Model
{
    //
    public function reminders()
    {
        return $this->hasMany('App\Reminder');
    }
}
