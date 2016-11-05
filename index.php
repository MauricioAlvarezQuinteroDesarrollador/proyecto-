<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<input type="text" id="numero_1" required  placeholder="ingresar numero">
	<input type="text" id="numero_2" required placeholder="ingresar numero">
	<input type="button" onclick="sumarNumeros()" value="sumar">
	
	<div>el resultado es: <span id="resultado"></span></div>

</body>

<script type="text/javascript">
function sumarNumeros(){

 var text1=document.getElementById('numero_1').value;
 var text2=document.getElementById('numero_2').value; 
 var numero1=texto_a_numero(text1);
 var numero2=texto_a_numero(text2);
 var total;
 if(numero1==-1 || numero2==-1){
 	total="Zero";
 }else{
 	total = numero1+numero2; 	
 }
 document.getElementById('resultado').innerHTML  = total;
}
var num_peq = {
    'zero': 0,
    'one': 1,
    'two': 2,
    'three': 3,
    'four': 4,
    'five': 5,
    'six': 6,
    'seven': 7,
    'eight': 8,
    'nine': 9,
    'ten': 10,
    'eleven': 11,
    'twelve': 12,
    'thirteen': 13,
    'fourteen': 14,
    'fifteen': 15,
    'sixteen': 16,
    'seventeen': 17,
    'eighteen': 18,
    'nineteen': 19,
    'twenty': 20,
    'thirty': 30,
    'forty': 40,
    'fifty': 50,
    'sixty': 60,
    'seventy': 70,
    'eighty': 80,
    'ninety': 90
};

var num_grande = {
    'thousand':     1000,
    'million':      1000000,
    'billion':      1000000000,
    'trillion':     1000000000000,
    'quadrillion':  1000000000000000,
    'quintillion':  1000000000000000000,
    'sextillion':   1000000000000000000000,
    'septillion':   1000000000000000000000000,
    'octillion':    1000000000000000000000000000,
    'nonillion':    1000000000000000000000000000000,
    'decillion':    1000000000000000000000000000000000,
};

 var n, g,error;


function texto_a_numero(s) {
	error=false;
    var  array = s.toString().split(/[\s]+/);
    //a = s.toString().split("");  
    n = 0;
    g = 0;
    array.forEach(posicion);
    if(!error)
    	return n + g;
    else
    	return -1;
}

function posicion(dato) {
	dato=dato.toLowerCase();
	if(dato!="and"){	 
	    var x = num_peq[dato];
	    if (x != null) {
	        g = g + x;
	    }
	    else if (dato == "hundred") {
	        g = g * 100;        
	    }
	    else {    	
	        x = num_grande[dato];
	        if (x != null) {
	            n = n + g * x;            
	            g = 0;
	        }
	        else { 
	        	error=true;
	            console.log("error: "+dato); 
	        }
	    }
    }
}

</script>
</html>