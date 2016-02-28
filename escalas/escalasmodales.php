<form method="POST" action="/lamux3/" >
  <?php
 /*   for($i=0;$i<12;$i++){
        echo'<select size="1" name="tuser'.$i.'">
<option>Selecciona un tono</option><option>Do</option> <option>Reb</option> <option>Re</option><option>Mib</option>
<option>Mi</option> <option>Fa</option><option>Solb</option> <option>Sol</option> <option>Lab</option><option>La</option>
</select>';}*/
?>
    
    <select size="1" name="tuser" onchange="this.form.submit();">
<option>Selecciona un tono</option><option>Do</option> <option>Reb</option> <option>Re</option><option>Mib</option>
<option>Mi</option> <option>Fa</option><option>Solb</option> <option>Sol</option> <option>Lab</option><option>La</option>
</select>
</form>  
<?php

if(!empty($tuser))
{
?>
<div id="tablaescala" >
    <tabla><tr><td>
<div id="escalalidia" onclick="escala();" ><?$escalalidia= $tituloescalalidia."|| ".$nom[$ton["I"]]." || ".$nom[$ton["II"]]." || ".
$nom[$ton["III"]]." || ".$nom[$ton["Vb"]]." || ".$nom[$ton["V"]]." || ".$nom[$ton["VI"]]." || ".
$nom[$ton["VII"]]." || ";
echo "<H3>".$escalalidia."</h3>";?></div>

<div id="escalajonica" onclick="escala();"><?$escalajonica= $tituloescalajonica."|| ".$nom[$ton["I"]]." || ".$nom[$ton["II"]]." || ".
$nom[$ton["III"]]." || ".$nom[$ton["IV"]]." || ".$nom[$ton["V"]]." || ".$nom[$ton["VI"]]." || ".
$nom[$ton["VII"]]." || ";
echo "<H3>".$escalajonica."</h3>";?></div><?

?><div id="escaladominante" onclick="escala()";><?$escaladominante= $tituloescaladominante."|| ".$nom[$ton["I"]]." || ".$nom[$ton["II"]]." || ".
$nom[$ton["III"]]." || ".$nom[$ton["IV"]]." || ".$nom[$ton["V"]]." || ".$nom[$ton["VI"]]." || ".
$nom[$ton["VIIb"]]." || ";
echo "<H3>".$escaladominante."</h3>";?></div><?

?><div id="escaladorica"><?$escaladorica= $tituloescaladorica." || ".$nom[$ton["I"]]." || ".$nom[$ton["II"]]." || ".
$nom[$ton["IIIb"]]." || ".$nom[$ton["IV"]]." || ".$nom[$ton["V"]]." || ".$nom[$ton["VI"]]." || ".
$nom[$ton["VIIb"]]." || ";
echo "<H3>".$escaladorica."</h3>"; ?></div><?

?><div id="escalaeolica"><?$escalaeolica= $tituloescalaeolica." || ".$nom[$ton["I"]]." || ".$nom[$ton["II"]]." || ".
$nom[$ton["IIIb"]]." || ".$nom[$ton["IV"]]." || ".$nom[$ton["V"]]." || ".$nom[$ton["VIb"]]." || ".
$nom[$ton["VIIb"]]." || ";
echo "<H3>".$escalaeolica."</h3>";   ?></div><?

?><div id="escalafrigia"><?$escalafrigia= $tituloescalafrigia." || ".$nom[$ton["I"]]." || ".$nom[$ton["IIb"]]." || ".
$nom[$ton["IIIb"]]." || ".$nom[$ton["IV"]]." || ".$nom[$ton["V"]]." || ".$nom[$ton["VIb"]]." || ".
$nom[$ton["VIIb"]]." || ";
echo "<H3>".$escalafrigia."</h3>"; ?></div><?

?><div id="escalalocria"><?$escalalocria= $tituloescalalocria." || ".$nom[$ton["I"]]." || ".$nom[$ton["II"]]." || ".
$nom[$ton["IIIb"]]." || ".$nom[$ton["IV"]]." || ".$nom[$ton["Vb"]]." || ".$nom[$ton["VIb"]]." || ".
$nom[$ton["VIIb"]]." || ";
echo "<H3>".$escalalocria."</h3></div></tr></tr></tbody></table>  </div>";

}
?> 

              
