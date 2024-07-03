<form action="Pag_3.4.php" >
<fieldset class="container thumbnail">
<legend class="legend1"><u>
3-Diagnosticos prenatales:</u></legend>
<label>A-¿Esta usted embrazada?</label>
<input type="radio" name="sn" value="1">si<input type="radio" name="sn" value="2">no <br>
<label>meses de embarazo</label>
<input type="month" name="DP_Me" class="form-control w-50">
<label>¿esta en control?</label><input type="text" name="DP_EsCo" class="form-control w-50"><br>
<label>¿donde?</label><input type="text" name="DP_Do" class="form-control w-50"><br>
<label>B-¿Vive en su hogar otra persona que este embarazada?  </label><input type="radio" name="em" value="2"> si 
<input type="radio" name="em" value="1"> no
<h4>en caso de ser afirmavo completa el siguiente cuadro:</h4>
<table class="table border table-striped table-bordered table-hover">
<tr>
<td>Apellidos y nombres</td>
<td>parentesco</td>
<td>n° de hijos menores de 6 años que viven en el hogar.</td>
<td>dirección</td>
<td>teléfono</td>
</tr>
<tr>
<td><input type="text" name="DP_AN1" style="width:120px"></td>
<td><input type="text" name="DP_Par1" style="width:120px"></td>
<td><input type="number" name="DP_NHM_1" style="width:120px"></td>
<td><input type="text" name="DP_Di1" style="width:120px"></td>
<td><input type="text" name="DP_Te1" style="width:120px"
></td>
</tr>
<tr>
<td><input type="text" name="DP_AN2" style="width:120px"></td>
<td><input type="text" name="DP_Par2" style="width:120px"
></td>
<td><input type="text" name="DP_NHM_2" style="width:120px"></td>
<td><input type="text" name="DP_Di2" style="width:120px"></td>
<td><input type="text" name="DP_Te2" style="width:120px"></td>
</tr>
<tr>
<td><input type="text" name="DP_AN3" style="width:120px"></td>
<td><input type="text" name="DP_Par3" style="width:120px"></td>
<td><input type="text" name="DP_NHM_3" style="width:120px"></td>
<td><input type="text" name="DP_Di3" style="width:120px"></td>
<td><input type="text" name="DP_Te3" style="width:120px"></td>
</tr>

</table>
<h3>documentos presentados</h3>
<table class="table border table-striped table-bordered table-hover">
<tr>
<td>documentos</td><td>copias</td>
</tr>
<tr>
<td>partida de nacimiento</td>
<td><input type="number" name="DoPr_PN" style="width:120px"></td>
</tr>
<tr>
<td>copia de la cédula de la madre</td>
<td><input type="number" name="DoPr_CCMa" style="width:120px"></td>
</tr>
<tr>
<td>copia de la cédula del padre</td>
<td><input type="text" name="DoPr_CCPa" style="width:120px"></td>
</tr>
<tr>
<td>4 fotos tipo carnet</td>
<td> <input type="text" name="DoPr_FTC" style="width:120px"></td>
</tr>
<tr>
<td>copias del certificado de vacunas</td>
<td><input type="text" name="DoPr_CCV" style="width:120px"></td>
</tr>
</table>
<button type="submit" class="btn btn-primary">guardar </button>
<button type="reset" class="btn btn-danger">borrar </button>
</fieldset>
</form>
