<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;
    protected  $table = "persons";
    protected  $id = "id";
    public static function getDescAsc($desc)
    {

        return Person::orderBy('updated_at',  $desc)->get();
    }

    public function guardar(
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
    ) {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->telephone = $telephone;
        $this->email = $email;
        $this->age = $age;
        $this->dni = $dni;
        $this->sexo = $sexo;
        $this->marital_status = $marital_status;
        $this->nationality = $nationality;
        $this->residence = $residence;
        $this->educational_level = $educational_level;
        $this->actual_charge = $actual_charge;
        if ($this->save()) {
            return $this;
        } else {
            throw new \Exception('Receta no Guardada');
        }
    }

    public static function modificar(
        Person $person,
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

    ) {
        $person->name = $name;
        $person->lastname = $lastname;
        $person->telephone = $telephone;
        $person->email = $email;
        $person->age = $age;
        $person->dni = $dni;
        $person->sexo = $sexo;
        $person->marital_status = $marital_status;
        $person->nationality = $nationality;
        $person->residence = $residence;
        $person->educational_level = $educational_level;
        $person->actual_charge = $actual_charge;

        if ($person->save()) {
            return $person;
        } else {
            throw new \Exception('Persona no Guardada');
        }
    }
}
