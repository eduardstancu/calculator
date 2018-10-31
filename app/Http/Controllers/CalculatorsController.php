<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Foundation\Http\FormRequest;

class CalculatorsController extends BaseController
{
    public function index()
    {   
        $myResult="";
        return view('/calculator')->with('myResult',$myResult);
    }

    public function calculate(Request $request)
    {
        // the numbers are saved in variable to be used in calculations
        $varA = $request->input('var_a');
        $varB = $request->input('var_b');


        switch ($request->input('action')) {
            case 'sum':
                return view('/calculator')->with('myResult',$this->sum($varA,$varB));
                break;
    
            case 'difference':
                return view('/calculator')->with('myResult',$this->diff($varA,$varB));
                break;
    
            case 'multiply':
                return view('/calculator')->with('myResult',$this->multipl($varA,$varB));
                break;

            case 'divide';
                return view('/calculator')->with('myResult',$this->divide($varA,$varB));
                break;
        }
    }

    private function sum($varA,$varB)
    {
        return $varA+$varB;
    }

    private function diff($varA,$varB)
    {
        return $varA-$varB;
    }

    private function multipl($varA,$varB)
    {
        return $varA*$varB;
    }

    private function divide($varA,$varB)
    {
        return $varA/$varB;
    }
}
