<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GiveawayParticipant extends Model
{
    public function user()  {
      return $this->belongsTo('App\User');
    }

    public function giveaway()  {
      return $this->belongsTo('App\Giveaway');
    }
}
