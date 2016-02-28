<?php

echo $_POST['tuser'];
// recoge tuser y convierte a numero
if($_POST['tuser']=="Do"){$tuser= "1";} elseif($_POST['tuser']=="Reb"){$tuser= "2";}
elseif($_POST['tuser']=="Re"){$tuser= "3";} elseif($_POST['tuser']=="Mib"){$tuser= "4";}
elseif($_POST['tuser']=="Mi"){$tuser= "5";} elseif($_POST['tuser']=="Fa"){$tuser= "6";}
elseif($_POST['tuser']=="Solb"){$tuser= "7";}elseif($_POST['tuser']=="Sol"){$tuser= "8";}
elseif($_POST['tuser']=="Lab"){$tuser= "9";} elseif($_POST['tuser']=="La"){$tuser= "10";}
elseif($_POST['tuser']=="Sib"){$tuser= "11";} elseif($_POST['tuser']=="Si"){$tuser= "12";}

//contruye escala cromatica
$ton = array("I"=> $tuser,"IIb"=> $tuser+1,"II"=> $tuser+2, "IIIb"=> $tuser+3,"III"=>$tuser+4,"IV"=> $tuser+5,
 "IVb"=> $tuser+6,"V"=> $tuser+7,"VIb"=> $tuser+8, "VI"=> $tuser+9,"VIIb"=> $tuser+10,"VII"=> $tuser+11);

// muestra contenido solo si el campo tuser no esta vacio
$ton = array("I"=> $tuser,"IIb"=> $tuser+1,"II"=> $tuser+2, "IIIb"=> $tuser+3,"III"=>$tuser+4,"IV"=> $tuser+5,
 "IVb"=> $tuser+6,"V"=> $tuser+7,"VIb"=> $tuser+8, "VI"=> $tuser+9,"VIIb"=> $tuser+10,"VII"=> $tuser+11);
// construye sonido de nota



    
// le resta 12 si es mayor que 12

if($ton["I"]>12){$ton["I"]=$ton["I"]-12;}if($ton["II"]>12){$ton["II"]=$ton["II"]-12;}
if($ton["III"]>12){$ton["III"]=$ton["III"]-12;} if($ton["IV"]>12){$ton["IV"]=$ton["IV"]-12;}
if($ton["V"]>12){$ton["V"]=$ton["V"]-12;} if($ton["VI"]>12){$ton["VI"]=$ton["VI"]-12;}
if($ton["VII"]>12){$ton["VII"]=$ton["VII"]-12;} if($ton["IIb"]>12){$ton["IIb"]=$ton["IIb"]-12;}
if($ton["IIIb"]>12){$ton["IIIb"]=$ton["IIIb"]-12;} if($ton["Vb"]>12){$ton["Vb"]=$ton["Vb"]-12;}
if($ton["VIb"]>12){$ton["VIb"]=$ton["VIb"]-12;} if($ton["VIIb"]>12){$ton["VIIb"]=$ton["VIIb"]-12;}

// Convierte Numero a Nota
$nom = array(
"1"=>"Do", "2"=>"Reb", "3"=>"Re", "4"=>"Mib", "5"=>"Mi", "6"=>"Fa",
"7"=>"Solb", "8"=>"Sol", "9"=>"Lab", "10"=>"La","11"=>"Sib", "12"=>"Si");

//ajuste para Vb (#4)nota de escala lidia
if($tuser==1)  {$nom[$ton["Vb"]]="Fa#";}if($tuser==2)  {$nom[$ton["Vb"]]="Sol";}
if($tuser==3)  {$nom[$ton["Vb"]]="Sol#";}if($tuser==4)  {$nom[$ton["Vb"]]="La";}
if($tuser==5)  {$nom[$ton["Vb"]]="La#";}if($tuser==6)  {$nom[$ton["Vb"]]="Si";}
if($tuser==7)  {$nom[$ton["Vb"]]="Do";}if($tuser==8)  {$nom[$ton["Vb"]]="Do#";}
if($tuser==9)  {$nom[$ton["Vb"]]="Re";}if($tuser==10)  {$nom[$ton["Vb"]]="Re#";}
if($tuser==11)  {$nom[$ton["Vb"]]="Mi";}if($tuser==12)  {$nom[$ton["Vb"]]="Fa";}

//enarmonia
if($tuser==8)  {$nom[$ton["VII"]]="Fa#";}
if($tuser==3)  {$nom[$ton["VII"]]="Do#"; $nom[$ton["III"]]="Fa#";}
if($tuser==10) {$nom[$ton["VII"]]="Sol#";$nom[$ton["III"]]="Do#"; $nom[$ton["VI"]]="Fa#";}
if($tuser==5)  {$nom[$ton["VII"]]="Re#"; $nom[$ton["III"]]="Sol#"; $nom[$ton["VI"]]="Do#"; $nom[$ton["II"]]="Fa#";}
if($tuser==12) {$nom[$ton["VII"]]="La#"; $nom[$ton["III"]]="Re#"; $nom[$ton["VI"]]="Sol#"; $nom[$ton["II"]]="Do#";}


// Titulo escala
$tituloescalalidia="<h4>Escala de ".$_POST['tuser']." Mayor #4 o ".$_POST['tuser']."  Lidia</h4>";
$tituloescalajonica="<h4>Escala de ".$_POST['tuser']." Mayor o ".$_POST['tuser']." Jonica</h4>";
$tituloescaladominante="<h4>Escala de ".$_POST['tuser']."Mayor b7 o ".$_POST['tuser']." Dominante</h4>";
$tituloescaladorica="<h4>Escala de ".$_POST['tuser']." Menor b6 o ".$_POST['tuser']."  Dorica</h4>";
$tituloescalaeolica="<h4>Escala de ".$_POST['tuser']." Menor o ".$_POST['tuser']."  Eolica</h4>";
$tituloescalafrigia="<h4>Escala de ".$_POST['tuser']." Menor b6 2b o ".$_POST['tuser']."  Frigia</h4>";
$tituloescalalocria="<h4>Escala de ".$_POST['tuser']." Menor b6 2b 5b o ".$_POST['tuser']."  Locria</h4>";

include('escalas/escalasmodales.php');


?>



