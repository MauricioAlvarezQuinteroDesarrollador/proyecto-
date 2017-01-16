<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

  <input type="text" id="numero" placeholder="ingresar numero">

  <button id="ingresar">Ingresar</button>

  <div id="numeros_ingresados">
  	Numeros ingresados : <span></span>
  </div>

  <button id="btn_combinacion">Generar combinacion </button>
 	<p id="combinacion"></p>

</body>
<script type="text/javascript" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous" src="//code.jquery.com/jquery-3.1.1.min.js"></script>
<script type="text/javascript">

$(document).ready(function(){

	$("#ingresar").click(function(){
		var numero=$("#numero").val();
		if(numero>=0){
			array5.push(numero);
			numero=array5.toString();
			$("#numeros_ingresados span").html(numero);
			$("#numero").val("");
		}else{
			alert("solo numeros mayores a 0")
		}
	});
	$("#numero").keydown(filterNumbers)
	$("#btn_combinacion").click(generarCombinacion);

});
var array5=[];
var array1=[50, 2, 1, 9];
 var array2=[420, 42, 423];
 var array3=[5,51,56,20,25];

 var i,j,aux,auxComp;
 var pos;// para validar las letas
 var k;
 
 var arrayFinal;
function generarCombinacion(){
	arrayFinal=array5;
	if(array5.length<=1){
		alert("ingresar por lo menos dos numero para generar combinacion")
		return;
	}
for ( i = 0; i < arrayFinal.length; i++) {
	j=i;

	pos=0;
	aux=arrayFinal[i];
	auxComp=arrayFinal[i].toString().charAt(pos);
	console.log("iteracion: "+i);

	while(j>0 && auxComp>= arrayFinal[j-1].toString().charAt(pos)){
		console.log("valor j:"+j)
		if(auxComp==arrayFinal[j-1].toString().charAt(pos)){ 
			pos+=1;
			while(pos<aux.toString().length ){
				console.log("pos:"+pos)
				try{ 
					if(aux.toString().length>arrayFinal[j-1].toString().length){
						if(aux.toString().charAt(pos)=="" || arrayFinal[j-1].toString().charAt(pos)==""){
							throw ('no hay numero');
						}
					}else if(aux.toString().length<arrayFinal[j-1].toString().length){

						if(arrayFinal[j].toString().charAt(pos+1)==""){
							throw ('no hay numero');
						}
					}

					var auxComp2=aux.toString().charAt(pos); 
					if(auxComp2>arrayFinal[j-1].toString().charAt(pos)){
						console.log(i+"cambio pos"+j)
						arrayFinal[j]=arrayFinal[j-1];
						arrayFinal[j-1]=aux;
						console.log(arrayFinal);
					} 
				}catch(error){
					var reem;
					if(aux.toString().length>arrayFinal[j-1].toString().length){
						reem=aux.toString();
						if(reem.charAt(pos)>reem.charAt(0)){

							arrayFinal[j]=arrayFinal[j-1];
							arrayFinal[j-1]=aux;

						}
					}else{
						reem=arrayFinal[j-1].toString();
						if(reem.charAt(pos)<reem.charAt(0)){

							arrayFinal[j]=arrayFinal[j-1];
							arrayFinal[j-1]=aux;
						}
					}

  //continue;
				  console.log(i+error+"j:"+j+"--"+arrayFinal[j])
				}
			pos++; 
			}
		pos=0;
		}else{

			arrayFinal[j]=arrayFinal[j-1];
			arrayFinal[j-1]=aux;
		} 
  		//arrayFinal[j]=arrayFinal[j-1];
        j--;
	}


	console.log("array final:"+arrayFinal)
	console.log("-------------------------------------")

	};
 //console.log(arrayFinal);
 
 $("#combinacion").html(replaceAll(arrayFinal.toString(),",",""));
}
 
function replaceAll( text, busca, reemplaza ){

  while (text.toString().indexOf(busca) != -1)

      text = text.toString().replace(busca,reemplaza);

  return text;

}
 

function filterNumbers(event){
     if(event.shiftKey)
      event.preventDefault();
     if (event.keyCode == 46 || event.keyCode == 8 || event.keyCode==9) { }
     else {
          if (event.keyCode < 95) {
            if (event.keyCode < 48 || event.keyCode > 57) 
                  event.preventDefault();
          }
          else{
              if (event.keyCode < 96 || event.keyCode > 105) 
                  event.preventDefault();
          }
     }
  }


</script>
</html>