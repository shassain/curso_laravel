<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        echo "estoy en index";
    }
    public function store(){
        return "estoy en el post";
    }
    public function update($id){
        return "estoy en el update:".$id;
    }
    public function show($parametro){
        return "estoy en el show:".$parametro;
    }
    public function edit($user){
        return "estoy en el edit:".$user;
    }
    public function destroy($id){
        return "estoy en el delete:".$id;
    }
    public function myfuncion(){
        return "mi propia funcion";
    }
}
