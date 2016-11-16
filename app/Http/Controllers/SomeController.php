<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


	


class SomeController extends Controller
{
	
	

	
    public function testfunction()
    {
    	
    	$numero1=$this->validarTexto($_POST["text1"]);
    	$numero2=$this->validarTexto($_POST["text2"]);
    	
    	//echo $numero2;
    	if($numero1==-1 || $numero2==-1){
    		$total="zero";
    	}else{
    		$total=$numero1+$numero2;
    	}
        return response()->json(['res' => $total]);
    }

    function validarTexto($s){    	
    	$num_peq = array (
	        'zero' => 0,
	        'one'=> 1,
	        'two'=> 2,
	        'three'=> 3,
	        'four'=> 4,
	        'five'=> 5,
	        'six'=> 6,
	        'seven'=> 7,
	        'eight'=> 8,
	        'nine'=> 9,
	        'ten'=> 10,
	        'eleven'=> 11,
	        'twelve'=> 12,
	        'thirteen'=> 13,
	        'fourteen'=> 14,
	        'fifteen'=> 15,
	        'sixteen'=> 16,
	        'seventeen'=> 17,
	        'eighteen'=> 18,
	        'nineteen'=> 19,
	        'twenty'=> 20,
	        'thirty'=> 30,
	        'forty'=> 40,
	        'fifty'=> 50,
	        'sixty'=> 60,
	        'seventy'=> 70,
	        'eighty'=> 80,
	        'ninety'=> 90
	    );
	    $num_grande = array(
		    'thousand'=>     1000,
		    'million'=>      1000000,
		    'billion'=>      1000000000,
		    'trillion'=>     1000000000000,
		    'quadrillion'=>  1000000000000000,
		    'quintillion'=>  1000000000000000000,
		    'sextillion'=>   1000000000000000000000,
		    'septillion'=>   1000000000000000000000000,
		    'octillion'=>    1000000000000000000000000000,
		    'nonillion'=>    1000000000000000000000000000000,
		    'decillion'=>    1000000000000000000000000000000000,
		);
    	
    
    	$array = preg_split("/[\s]+/", $s);
    	
    	
	     
	    $n = 0;
	    $g = 0;
	    $error=false;
	    
	   //print_r($array);
	    foreach ($array as $dato) {
			//$this->posicion($valor);
			if(!empty($dato)){    
	    
			    $dato=strtolower($dato);

			    if($dato!="and"){ 
			    	
			        //echo ($num_peq[$dato]);
			       
			        if (array_key_exists($dato, $num_peq)) {
			        	
			        	$x = $num_peq[$dato];
			            $g = $g + $x;			            
			        }
			        else if ($dato == "hundred") {
			            $g = $g * 100;        
			        }
			        else {			            
			            if (array_key_exists($dato, $num_grande)) {
			            	$x = $num_grande[$dato];
			                $n = $n + $g * $x;            
			                $g = 0;
			            }
			            else {			            	
			                $error=true;	                 
			            }
			        }
			    }else if(sizeof($array) != 4){
			    	
			        $error=true;			        
			    }
			}    
		}
	   
	    if(!$error)
	        return $n + $g;
	    else
	        return -1;
	        
    }

    
}
