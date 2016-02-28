<?php
echo'<h1>music workstation solo ritmo</h1><br>';
?>
<br>
<form action="index.php" method="post" id="form_editor">
    <table>
        <tr >  <?php 
         for($j=1;$j<=4;$j++){echo'<tr>';
        for($i=1;$i<=16;$i++){
            $w=$i.$j;
            echo'<td><select size="1" name="'.$w.'" id="'.$w.'">
                <option>0</option>
<option>Do</option> <option>Reb</option> <option>Re</option><option>Mib</option>
<option>Mi</option> <option>Fa</option><option>Solb</option> <option>Sol</option> <option>Lab</option><option>La</option>
<option>Sib</option><option>Si</option>
</select></td>';
            
       
$afinacion_wsm=440;
//$altura_wsm=$_POST['altura'];
//echo $altura_wsm;
$altura_wsm=3;
//$nota_wsm=$_POST['nota'];

//echo $nota_wsm;
//$nota_wsm="Do";
$nota_wsm=$_POST[$w];
//$duracion_wsm=$_POST['duracion'];
$duracion_wsm=0.25;


if($nota_wsm=="Do"){$frecuencia_wsm=261.626;}
elseif($nota_wsm=="0"){$frecuencia_wsm=0;}
elseif($nota_wsm=="Reb"){$frecuencia_wsm=$afinacion_wsm*5/4/2;}
elseif($nota_wsm=="Re"){$frecuencia_wsm=$afinacion_wsm*4/3/2;}
elseif($nota_wsm=="Mib"){$frecuencia_wsm=311.127;}
elseif($nota_wsm=="Mi"){$frecuencia_wsm=$afinacion_wsm*3/2/2;}
elseif($nota_wsm=="Fa"){$frecuencia_wsm=349.228;}
elseif($nota_wsm=="Solb"){$frecuencia_wsm=$afinacion_wsm*5/3/2;}
elseif($nota_wsm=="Sol"){$frecuencia_wsm=391.995;}
elseif($nota_wsm=="Lab"){$frecuencia_wsm=$afinacion_wsm*15/8/2;}
elseif($nota_wsm=="La"){$frecuencia_wsm=$afinacion_wsm;}
elseif($nota_wsm=="Sib"){$frecuencia_wsm=$afinacion_wsm*16/15;}
elseif($nota_wsm=="Si"){$frecuencia_wsm=$afinacion_wsm*9/8;}
if(isset($_POST['nota'.$w])){
echo '<br>en nota sale'.$nota_wsm;
echo '<br>en frecuencia sale'.$frecuencia_wsm;

echo '<br>en $altura_wsm sale'.$altura_wsm;}
//genera demas octavas
if($altura_wsm==1){$frecuencia_wsm= $frecuencia_wsm/2/2;}
if($altura_wsm==2){$frecuencia_wsm= $frecuencia_wsm/2;}
if($altura_wsm==3){$frecuencia_wsm= $frecuencia_wsm;}
if($altura_wsm==4){$frecuencia_wsm= $frecuencia_wsm*2;}
if($altura_wsm==5){$frecuencia_wsm= $frecuencia_wsm*2*2;}
if($altura_wsm==6){$frecuencia_wsm= $frecuencia_wsm*2*2*2;}
if($altura_wsm==7){$frecuencia_wsm= $frecuencia_wsm*2*2*2*2;}
if($altura_wsm==8){$frecuencia_wsm= $frecuencia_wsm*2*2*2*2*2;}
echo '<h1>'.$frecuencia_wsm.'</h1>';
 
    
echo '<script> 	
			function nota'.$w.'() {
			
				var osc'.$w.' = context.createOscillator(); 
				var gn'.$w.' = context.createGain();
				gn'.$w.'.gain.value = 0.0;
    			osc'.$w.'.connect(gn'.$w.');
    			gn'.$w.'.connect(context.destination);
				osc'.$w.'.frequency.value = '.$frecuencia_wsm.';
				
			gn'.$w.'.gain.linearRampToValueAtTime(0.1, context.currentTime + 0); 
                        
			gn'.$w.'.gain.linearRampToValueAtTime(0.0, context.currentTime + '.$duracion_wsm.');  
				osc'.$w.'.start(0);
			
                    
                }</script>';     
       
echo'
 <script> 

function notaf'.$w.'(){  
                 setTimeout(nota'.$w.',0); 
                  }
                             </script>
      <td>                       
<a onclick="notaf'.$w.'();">'.$_POST[$w].'</a></td>';
$bmp=60;
$u=$i*10000;
$y=$u/$bmp;
$y=$y;
$tiempo=$tiempo." setTimeout(nota$w,$y);";
}echo'</tr>';

}

?> </tr>
        
        
 <script> 
function nota_todo(){  <?php
echo $tiempo;
?>
                  }
                             </script>
      <td>                       
<a onclick="nota_todo();">Tocar todo</a></td>
        
        <input type="submit" vale="enviar">
        
    </table>
    
    
</form>

<?php


?>