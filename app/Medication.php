<?php namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Medication extends Model {

	//

  protected $fillable = [

    'name',
    'mg',
    'take_at'

  ];


  public function setTakeAtAttribute($take_at)
  {
      $this->attributes['take_at'] = Carbon::parse($take_at);
  }

}
