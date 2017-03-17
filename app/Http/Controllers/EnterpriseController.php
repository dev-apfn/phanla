<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Enterprise;

class EnterpriseController extends Controller
{
     /**
     * Get all enterprises
     *
     * @return [type] [description]
     */
     public function index() {
          $enterprises = Enterprise::all();

          return view('pages.enterprise.all', compact('enterprises'));
     }

     /**
     * Load create enterprise
     *
     * @return [type] [description]
     */
     public function loadCreate() {
          return view('pages.enterprise.create');
     }

     /**
     * Create an enterprise
     *
     * @param  Request $request [description]
     * @return [type]           [description]
     */
     public function create(Request $request)
     {
          # Validation
          $this->validate($request, [
               'name' => 'required|max:255',
               'location' => 'required|max:255',
               'latitude' => 'required|max:255',
               'longitude' => 'required|max:255',
               'phone' => 'required|max:255',
               'email' => 'required|max:255',
               'description' => 'required|max:255',
          ]);

          # Enterprise post is valid, store in database
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

     /**
     * Load edit enterprise
     *
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
     public function loadEdit($id) {
          $enterprise = Enterprise::find($id);
          return view('pages.enterprise.edit', compact('enterprise'));
     }


     public function edit(Request $request, $id) {
          # Validation
          $this->validate($request, [
               'name' => 'required|max:255',
               'location' => 'required|max:255',
               'latitude' => 'required|max:255',
               'longitude' => 'required|max:255',
               'phone' => 'required|max:255',
               'email' => 'required|max:255',
               'description' => 'required|max:255',
          ]);

          # Enterprise post is valid, store in database
          $enterprise = Enterprise::find($id);
          $enterprise->name = $request->name;
          $enterprise->location = $request->location;
          $enterprise->coordinates = $request->latitude.','.$request->longitude;
          $enterprise->phone = $request->phone;
          $enterprise->email = $request->email;
          $enterprise->description = $request->description;
          $enterprise->save();

          return redirect('/enterprises')->with('operation', 'The enterprise was successfully updated!');
     }

     /**
      * Load view enterprise
      *
      * @param  [type] $id [description]
      * @return [type]     [description]
      */
     public function view($id) {
          $enterprise = Enterprise::withTrashed()->find($id);
          return view('pages.enterprise.view', compact('enterprise'));
     }

     /**
      * Deactivate an enterprise
      *
      * @param  Request $request [description]
      * @return [type]           [description]
      */
     public function deactivate(Request $request) {
          $enterprise = Enterprise::find($request->id);
          $enterprise->delete();

          return redirect('/enterprises')->with('operation', 'The enterprise was successfully deactivated!');
     }

     /**
      * Get all deactivated enterprises
      *
      * @return [type] [description]
      */
     public function inactive() {
          $enterprises = Enterprise::onlyTrashed()->get();
          return view('pages.enterprise.inactive', compact('enterprises'));
     }

     public function restore(Request $request) {
          $enterprise = Enterprise::onlyTrashed()->find($request->id);
          $enterprise->restore();

          return redirect('/enterprises')->with('operation', 'The enterprise was successfully restored!');;
     }
}
