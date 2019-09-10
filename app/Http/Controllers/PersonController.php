<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;
use App\Http\Resources\PersonResource;
use App\Http\Resources\PersonResourceCollection;

class PersonController extends Controller
{
    public function show(Person $person): PersonResource
    {
            
            return new PersonResource($person);
    }

    public function index(): PersonResourceCollection
    {
        return new PersonResourceCollection(Person::paginate());
    }
    public function store(Request $request) 
    {
        $request->validate([
                'firstName'=>'required',
                'lastName'=>'required',
                'email'=>'required',
                'phone'=>'required',
                'city'=>'required',
        ]);

        $person = Person::create($request->all());
        return new PersonResource($person);
    }

    public function update(Person $person, Request $request):PersonResource
    {

        $request->validate([
            'firstName'=>'required',
            'lastName'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'city'=>'required',
    ]);

            $person->update($request->all());

        return new PersonResource($person);
    }

    public function destroy(Person $person) 
    {
        $person->delete();
        return response()->json();
    }
}
