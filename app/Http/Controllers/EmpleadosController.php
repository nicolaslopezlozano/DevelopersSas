<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmpleadosController extends Controller
{
    public function listaDeLosEmpleados(){
        $data = file_get_contents("ejemplo.json");
        $empleados = json_decode($data, true);
        return $empleados;
}
    public function salarioDeLosEmpleados($min,$max){
        $salarios=array();
        $data = file_get_contents("ejemplo.json");
        $empleados = json_decode($data, true);

        foreach($empleados as $item){
            $salario = $item["salary"];
            if($salario>=$min && $salario<=$max){
                array_push($salarios,$item);
            }
        }
        return $salarios;
    }
    public function emailEmpleados($email){
        $email_empleados=array();
        $data = file_get_contents("ejemplo.json");
        $empleados = json_decode($data, true);

        foreach($empleados as $item){
            $correo_email = $item["email"];
            if($email == $correo_email){
                array_push($email_empleados,$item);
            }
        }
        return $email_empleados;
    }

}
