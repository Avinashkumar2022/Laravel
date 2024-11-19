<?php

namespace App\Http\Controllers;

abstract class Controller
{
    function getUser(){
        return "Avinash and Anshu";
    }
    function getview(){
        return view("user");
    }
    function aboutUser(){
        return "Hello my name is Avinash";
    }

    function getUserName($name){
        return "Hello my name is ".$name;
    }
}
