<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;

class PersonController extends Controller
{
    function addPerson(Request $request) {
        
        $data = Person::create([
            'name_person' => $request->name_person,
            'city_id' => $request->city_id,
            'point' => $request->point,
        ]);

        $result["message"] = "Data Person Created" ;
        $result["result"] = $data;
        return $result;
    }


    public function getAllPerson()
    {
        $person = Person::join('tb_city','tb_person.city_id','=','tb_city.id')
                            ->orderBy('tb_city.id','asc')
                            ->orderBy('tb_person.point','asc')
                            ->get(['tb_person.rank','tb_person.name_person','tb_city.name','tb_person.point']);
        // return response()->json($person);

        $result["message"] = "success" ;
        $result["result"] = $person;
        return $result;
    }

    public function deletePerson($rank){
        $data = Person::find($rank);
        $data->delete();
        return response()->json('Removed successfully.');
    }
}
