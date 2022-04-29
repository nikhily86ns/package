<?php

namespace Simplexi\Greetr;

class Greetr
{
    public function greet(String $sName)
    {
        return 'Hi ' . $sName . '! How are You doing today ?';
    }

    public function demo($id)
    {
        return 'Hi Your Roll Number is '. $id; 
    }
}