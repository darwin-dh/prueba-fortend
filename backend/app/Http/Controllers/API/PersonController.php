<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Person;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Cast\Object_;

use function PHPUnit\Framework\isEmpty;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)

    {

        $response = Person::all();
        return response()->json(['data' => $response]);
    }
    //filter
    public function filterdate(Request $request)
    {

        $desc = $request->filter;
        if ($desc == 'desc') {
            $desc = 'asc';
        } else {
            $desc = 'asc';
        }

        $response = Person::getDescAsc($desc);
        return response()->json(['data' => $response]);
    }
    public function search(Request $request)
    {
        //
        $id = $request->id;
        $response = Person::where('id', $id)->get();
        foreach ($response as $item) {
            $item = (object) $item;
        }
        return response()->json(['data' => $item]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function save(Request $request)
    {
        $name = $request->name;
        $lastname = $request->lastname;
        $telephone = $request->telephone;
        $email = $request->email;
        $age = $request->age;
        $dni = $request->dni;
        $sexo = $request->sexo;
        $marital_status = $request->marital_status;
        $nationality = $request->nationality;
        $residence = $request->residence;
        $educational_level = $request->educational_level;
        $actual_charge = $request->actual_charge;

        $pedidos = new Person();
        $pedidos->guardar(
            $name,
            $lastname,
            $telephone,
            $email,
            $age,
            $dni,
            $sexo,
            $marital_status,
            $nationality,
            $residence,
            $educational_level,
            $actual_charge,
        );
        return response()->json([
            'mesage' => 'YES',
            'data' => $pedidos
        ]);
    }

    public function update(Request $request)
    {
        $id = $request->id;
        $name = $request->name;
        $lastname = $request->lastname;

        $telephone = $request->telephone;
        $email = $request->email;
        $age = $request->age;
        $dni = $request->dni;
        $sexo = $request->sexo;
        $marital_status = $request->marital_status;
        $nationality = $request->nationality;
        $residence = $request->residence;
        $educational_level = $request->educational_level;
        $actual_charge = $request->actual_charge;

        $person = Person::findOrFail($id);
        $personmod = Person::modificar(
            $person,
            $name,
            $lastname,
            $telephone,
            $email,
            $age,
            $dni,
            $sexo,
            $marital_status,
            $nationality,
            $residence,
            $educational_level,
            $actual_charge,
        );
        return response()->json([
            'mesage' => 'YES',
            'data' => $personmod
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->id;
        $person = Person::find($id);
        $person->delete();
        if ($person) {
            return response()->json(['data' => 'YES']);
        }
    }
}
