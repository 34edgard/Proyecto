<?php
echo "  
<form action='inscripción_fin.php'>

<fieldset class='container thumbnail'>
  
<legend class='legend'><u>
1-datos de la institución:</u></legend>
<label>nombre de plamtel: J.I.B 'Republica del Uruguay'.</label>
<label>direccion: calle Mariño con calle Barreto, sector Centro.</label><br>
<label>teléfono: 0424-6432889.</label>
<label>Ubicación: Sector Centro, Maturin-Monagas.</label>
<label>año escolar: $AE-$AE2</label>
<br>

  
<legend class='legend'><u>
2-datos del niño o niña:</u></legend>

<label class='control-label'>apellidos:$DN_Ap </label>

<label class='control-label'>nombres: $DN_Nb</label>

<label class='control-label'>fecha de nacimiento: $DN_F</label>

<label class='control-label'>lugar: $DN_Lu</label>

<label class='control-label'>municipio: $DN_Mu </label>

<label class='control-label'>estado: $DN_Ed </label>

<label class='control-label'>nacionalidad: $DN_Na</label>

<label class='control-label'>edad: $DN_Ed</label>
<label class='control-label' >meses:$DN_Me</label>
<label class='control-label'>sexo: </label>$DN_Se

<label class='control-label'>direccion:$DN_Di
</label>

<label class='control-label'>teléfono: $DN_Te</label>
  
<h4>procedencia:</h4> <label  class='control-label'>hogar: $DN_PH</label>
<label class='control-label'>Del mismo plantel: $DN_PODMP</label>

<label class='control-label'>de otro plantel: $DN_POOP</label>

<label class='control-label'>Multihogar:
$DN_POMu</label>

<label class='control-label'>hogar de cuidado: $DN_POHC</label>

<label class='control-label'>guardería: $DN_POGu</label>

<label class='control-label'>otro: $DN_PO</label>
.
<label class='control-label'>
Talla de camisa: $DN_Ca</label>

<label class='control-label'>
pantalón
$DN_Pa</label>

<label class='control-label'>
zapato $DN_za</label>

<label class='control-label'>
peso $DN_Pe</label>

<label class='control-label'>
talla $DN_Ta</label>

<label class='control-label'>
circunferencia braquial.
$DN_CB</label>
  
  <legend ><u>3-Datos familiares:</u></legend><br>


<label><h3>Apellidos y nombres de la Madre:</h3></label>$DF_ANMA<br>
<label>C.I:</label>$DF_CIMA<br>

<label>fecha de nacimiento</label>$DF_FNMA<br>

<label>Edad</label>$DF_EdMA<br>

<label>nacionalidad</label$DF_NaMa<br>

<label>nivel de instruccion:</label>$DF_NIMa<br>

<label>ocupación</label>$DF_OcMa<br>

<label>dirección de habitación</label>$DF_DHMa<br>

<label>dirección de trabajo</label>$DF_DTMa<br>

<label>teléfono</label>$DF_TeMa<br>

<label>Apellidos y nombres del padre:</label>$DF_ANPa<br

<label>C.I:</label>$DF_CIPa<br>

<label>fecha de nacimiento</label>$DF_FNPa<br>

<label>Edad</label>$DF_EdPa<br>

<label>nacionalidad</label>$DF_NaPa<br>
<label>nivel de instruccion:</label>$DF_NIPa<br>
<label>ocupación</label>$DF_OcPa<br>

<label>dirección de habitación</label>$DF_DHPa<br>

<label>dirección de trabajo</label>$DF_DTPa<br>

<label>teléfono</label>$DF_TePa<br>

<label>n° de hermanos Menores de 6 año</label>$DF_NHM6APa<br>

<label>edad</label>$DF_EdNPa<br>

<label>Apellidos y nombres del representante:</label>$DF_NARe<br>

<label>C.I:</label>$DF_CIRe<br>

<label>fecha de nacimiento</label>$DF_FNRe<br>

<label>Edad</label>$DF_EdRe<br>

<label>nacionalidad</label>$DF_NaRe<br>

<label>nivel de instruccion:</label>$DF_NIRe<br>
<label>ocupación</label>$DF_OcRe<br>

<label>dirección de habitación</label>$DF_DHRe<br>

<label>dirección de trabajo</label> $DF_DTRe<br>

<label>teléfono</label>$DF_TeRe<br>

<label>n° de hermanos Menores de 6 año</label>$DF_NHM6ARe<br>

<label>edad</label>$DF_EdNRe<br>

<legend class='legend1'><u>
4-Diagnosticos prenatales:</u></legend>
<label>A-¿Esta usted embrazada?</label>
si $sn1 no $sn2 <br>
<label>meses de embarazo</label>
$DP_Me
<label>¿esta en control?</label> $DP_EsCo<br>

<label>¿donde?</label>$DP_Do<br>
<label>B-¿Vive en su hogar otra persona que este embarazada?  </label> si $em1 no $em2 <br>
<h4>en caso de ser afirmavo completa el siguiente cuadro:</h4>
<table class='table border table-striped table-bordered table-hover'>
<tr>
<td>Apellidos y nombres</td>
<td>parentesco</td>
<td>n° de hijos menores de 6 años que viven en el hogar.</td>
<td>dirección</td>
<td>teléfono</td>
</tr>
<tr>
<td>$DP_AN1</td>
<td>$DP_Par1</td>
<td>$DP_NHM_1</td>
<td>$DP_Di1</td>
<td>$DP_Te1</td>
</tr>
<tr>
<td>$DP_AN2</td>
<td>$DP_Par2</td>
<td>$DP_NHM_2</td>
<td>$DP_Di2</td>
<td>$DP_Te2</td>
</tr>
<tr>
<td>$DP_AN3</td>
<td>$DP_Par3</td>
<td>$DP_NHM_3</td>
<td>$DP_Di3</td>
<td>$DP_Te3</td>

</tr>

</table>
<h3>documentos presentados</h3>
<table class='table border table-striped table-bordered table-hover'>
<tr>
<td>documentos</td><td>copias</td>
</tr>
<tr>
<td>partida de nacimiento</td>
<td>$DoPr_PN</td>
</tr>
<tr>
<td>copia de la cédula de la madre</td>
<td>$DoPr_CCMa</td>
</tr>
<tr>
<td>copia de la cédula del padre</td>
<td>$DoPr_CCPa</td>
</tr>
<tr>
<td>4 fotos tipo carnet</td>
<td> $DoPr_FTC</td>
</tr>
<tr>
<td>copias del certificado de vacunas</td>
<td>$DoPr_CCV</td>
</tr>
</table>
<button type='submit' class='btn btn-primary'>guardar </button>
<button type='reset' class='btn btn-danger'>borrar </button>

</fieldset>

</form>";

  
  
  
  ?>
