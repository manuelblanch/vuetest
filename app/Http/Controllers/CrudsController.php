<?php

namespace App\Http\Controllers;

use App\Crud;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Faker\Generator;

class CrudsController extends Controller
{

  public function create {
    $crud = new Crud();
    $crud->name = $faker->lexify('test1');
    $crud->color = $faker->boolean ? 'on' : 'off';
    $crud->save();

  return response($crud->jsonSerialize(), Response::HTTP_CREATED);
  }
}
