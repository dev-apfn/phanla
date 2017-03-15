<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Enterprise;

class EnterpriseController extends Controller
{
     public function index()
     {
          $enterprises = Enterprise::all();

          return view('pages.enterprise.all', compact('enterprises'));
     }

     public function create(Request $request)
     {
          # Create new enterprise
          $enterprise = new Enterprise();
          $enterprise->name = $request->name;
          $enterprise->location = $request->location;
          $enterprise->coordinates = $request->latitude.','.$request->longitude;
          $enterprise->phone = $request->phone;
          $enterprise->email = $request->email;
          $enterprise->description = $request->description;
          $enterprise->save();

          return redirect('/enterprises')->with('operation', 'The enterprise has been successfully added!');
     }
}
