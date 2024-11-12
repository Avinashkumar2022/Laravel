<?php

namespace App\Http\Controllers;

abstract class Controller
{
    function getUser(){
        return "Avinash and Anshu";
    }
    function aboutUser(){
        return "Hello my name is Avinash";
    }
}
