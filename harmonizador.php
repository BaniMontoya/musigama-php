
<form name="form" method="post" action="index.php">
    <input name="tmelo" value="">
<input type="submit" value="hamronizar!" >    
</form>
<table>
<?php


 $tmelo= $_POST['tmelo']; 

 
 
if (strpos($tmelo, "a") !== false) { 
	//esta dentro
	echo "<div id='arreglo'>".$tmelo."<hr /></div>";
} 

for($i=0;$i<=$tmelo;$i++){ 
    
  if (strpos($tmelo[$i], "1") !== false){
      echo $tmelo[$i]; 
      
      if($tmelo2[$i]>12){
          
          $tmelo2[$i]=$tmelo[$i]-12+2;
          
          } 
          
          echo "<tr><td>".$tmelo[$i]."</td> || <td>".$tmelo2[$i]."</td></tr>";
          
          
          }
    
  
  
  
  
  elseif (strpos($tmelo[$i], "2") !== false){echo $tmelo[$i]; $tmelo2[$i]=$tmelo[$i]+3;echo "<tr><td>".$tmelo[$i]."</td> || <td>".$tmelo2[$i]."</td></tr>";}
    
    elseif (strpos($tmelo[$i], "3") !== false){echo $tmelo[$i]; $tmelo2[$i]=$tmelo[$i]+4;echo "<tr><td>".$tmelo[$i]."</td> || <td>".$tmelo2[$i]."</td></tr>";}
    
    elseif (strpos($tmelo[$i], "4") !== false){echo $tmelo[$i]; $tmelo2[$i]=$tmelo[$i]+5;echo "<tr><td>".$tmelo[$i]."</td> || <td>".$tmelo2[$i]."</td></tr>";}
    
    elseif (strpos($tmelo[$i], "5") !== false){echo $tmelo[$i]; $tmelo2[$i]=$tmelo[$i]+6;echo "<tr><td>".$tmelo[$i]."</td> || <td>".$tmelo2[$i]."</td></tr>";}
    
    elseif (strpos($tmelo[$i], "6") !== false){echo $tmelo[$i]; $tmelo2[$i]=$tmelo[$i]+7;echo "<tr><td>".$tmelo[$i]."</td> || <td>".$tmelo2[$i]."</td></tr>";}
    
    elseif (strpos($tmelo[$i], "7") !== false){echo $tmelo[$i]; $tmelo2[$i]=$tmelo[$i]+8;echo "<tr><td>".$tmelo[$i]."</td> || <td>".$tmelo2[$i]."</td></tr>";}
    
    elseif (strpos($tmelo[$i], "8") !== false){echo $tmelo[$i]; $tmelo2[$i]=$tmelo[$i]+9;echo "<tr><td>".$tmelo[$i]."</td> || <td>".$tmelo2[$i]."</td></tr>";}
    
    elseif (strpos($tmelo[$i], "9") !== false){echo $tmelo[$i]; $tmelo2[$i]=$tmelo[$i]+10;echo "<tr><td>".$tmelo[$i]."</td> || <td>".$tmelo2[$i]."</td></tr>";}
    
    elseif (strpos($tmelo[$i], "10") !== false){echo $tmelo[$i]; $tmelo2[$i]=$tmelo[$i]+11;echo "<tr><td>".$tmelo[$i]."</td> || <td>".$tmelo2[$i]."</td></tr>";}
    
    elseif (strpos($tmelo[$i], "11") !== false){echo $tmelo[$i]; $tmelo2[$i]=$tmelo[$i]+12;echo "<tr><td>".$tmelo[$i]."</td> || <td>".$tmelo2[$i]."</td></tr>";}
    
    elseif (strpos($tmelo[$i], "12") !== false){echo $tmelo[$i]; $tmelo2[$i]=$tmelo[$i]+13;echo "<tr><td>".$tmelo[$i]."</td> || <td>".$tmelo2[$i]."</td></tr>";}
    
}


 


?></table>