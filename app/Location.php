<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
  protected $fillable = [


    'name',
    'street',
    'city',
    'state'

  ];

  public funtion employees() {
    return $this -> hasMany(Employee::class);
  }
}
