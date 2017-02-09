<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reminder extends Model
{
    //
    public function reminderType()
    {
        return $this->belongsTo('App\ReminderType');
    }
}
