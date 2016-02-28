<a onclick="nota();">aqui suena!</a>

<form id="frecuencia" method="post" action="index.php">
  
<select size="1" name="nota">
<option>Selecciona un tono</option><option>Do</option> <option>Reb</option> <option>Re</option><option>Mib</option>
<option>Mi</option> <option>Fa</option><option>Solb</option> <option>Sol</option> <option>Lab</option><option>La</option>
</select>

    <select size="1" name="altura">
<option>Selecciona una altura</option><option>1</option> <option>2</option> <option>3</option><option>4</option>
<option>5</option> <option>6</option><option>7</option> <option>8</option>
</select>

    
    <select size="1" name="duracion">
<option>Selecciona una duracion</option><option>cuadrada</option> <option>redonda</option> <option>blanca</option><option>negra</option>
<option>corchea</option> <option>semi-corchea</option><option>fusa</option> <option>semi-fusa</option> <option>negra-tresillo</option><option>corchea-tresillo</option>
</select>
<input type="submit" value="enviar"></form>
<?php
//********GENERA SONIDO CON ALTURAS
$afinacion=440;



$altura=$_POST['altura'];
//echo $altura;
//$altura=5;
$nota=$_POST['nota'];
//echo $nota;
//$nota="do";
//$duracion=$_POST['duracion'];
$duracion=0.90;



//Genera primera octava
/*
if($nota=="do"){$frecuencia=261.626;}
elseif($nota=="reb"){$frecuencia=$afinacion*5/4;}
elseif($nota=="re"){$frecuencia=$afinacion*4/3;}
elseif($nota=="mib"){$frecuencia=$afinacion*3/2-$afinacion*16/15;}
elseif($nota=="mi"){$frecuencia=$afinacion*3/2;}
elseif($nota=="fa"){$frecuencia=$afinacion*5/3-$afinacion*16/15;}
elseif($nota=="solb"){$frecuencia=$afinacion*5/3;} 
elseif($nota=="sol"){$frecuencia=$afinacion*15/8-$afinacion*16/15;}
elseif($nota=="lab"){$frecuencia=$afinacion*15/8;}
elseif($nota=="la"){$frecuencia=$afinacion;}
elseif($nota=="sib"){$frecuencia=$afinacion*16/15;}
elseif($nota=="si"){$frecuencia=$afinacion*9/8;} */
$frecuencia = 261.626;
if($nota=="Do"){$frecuencia=261.626;}
elseif($nota=="Reb"){$frecuencia=$afinacion*5/4/2;}
elseif($nota=="Re"){$frecuencia=$afinacion*4/3/2;}
elseif($nota=="Mib"){$frecuencia=311.127;}
elseif($nota=="Mi"){$frecuencia=$afinacion*3/2/2;}
elseif($nota=="Fa"){$frecuencia=349.228;}
elseif($nota=="Solb"){$frecuencia=$afinacion*5/3/2;}
elseif($nota=="Sol"){$frecuencia=391.995;}
elseif($nota=="Lab"){$frecuencia=$afinacion*15/8/2;}
elseif($nota=="La"){$frecuencia=$afinacion;}
elseif($nota=="Sib"){$frecuencia=$afinacion*16/15;}
elseif($nota=="Si"){$frecuencia=$afinacion*9/8;}
//genera demas octavas
if($altura==1){$frecuencia= $frecuencia/2/2;}
if($altura==2){$frecuencia= $frecuencia/2;}
if($altura==3){$frecuencia= $frecuencia;}
if($altura==4){$frecuencia= $frecuencia*2;}
if($altura==5){$frecuencia= $frecuencia*2*2;}
if($altura==6){$frecuencia= $frecuencia*2*2*2;}
if($altura==7){$frecuencia= $frecuencia*2*2*2*2;}
if($altura==8){$frecuencia= $frecuencia*2*2*2*2*2;}
//echo $frecuencia;
 
    
echo '<script> 	
			function notado() {
				
				var osc = context.createOscillator(); 
				var gn = context.createGain();
				gn.gain.value = 0.0;
    			osc.connect(gn);
    			gn.connect(context.destination);
				osc.frequency.value = '.$frecuencia.';
				
			gn.gain.linearRampToValueAtTime(0.1, context.currentTime + 0); 
                        
			gn.gain.linearRampToValueAtTime(0.0, context.currentTime + '.$duracion.');   
				osc.start(0);
			
                               
                    
                }</script>
                  ';
if(isset($frecuencia)){
echo 'Haz seleccionado la frecuencia: '.$frecuencia;}
?>
 <script> 
function nota(){  
                 setTimeout(notado,0); 
                 setTimeout(notado,1000); 
                  }
                             </script>