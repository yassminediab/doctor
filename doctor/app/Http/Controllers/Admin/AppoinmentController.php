<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\AppoinmentRequest;
use Illuminate\Http\Request;

class AppoinmentController extends Controller
{
   public function addScdule(Request $request)
   {
       dd($request->all());
   }
}
