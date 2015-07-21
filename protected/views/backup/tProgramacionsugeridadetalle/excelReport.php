<?php if ($model !== null):?>
<table border="1">

	<tr>
		<th width="80px">
		      IdProgramacionSugeridaDetalle		</th>
 		<th width="80px">
		      IdProgramacionSugerida		</th>
 		<th width="80px">
		      NumeroMensajero		</th>
 		<th width="80px">
		      HoraCero		</th>
 		<th width="80px">
		      HoraUno		</th>
 		<th width="80px">
		      HoraDos		</th>
 		<th width="80px">
		      HoraTres		</th>
 		<th width="80px">
		      HoraCuatro		</th>
 		<th width="80px">
		      HoraCinco		</th>
 		<th width="80px">
		      HoraSeis		</th>
 		<th width="80px">
		      HoraSiete		</th>
 		<th width="80px">
		      HoraOcho		</th>
 		<th width="80px">
		      HoraNueve		</th>
 		<th width="80px">
		      HoraDiez		</th>
 		<th width="80px">
		      HoraOnce		</th>
 		<th width="80px">
		      HoraDoce		</th>
 		<th width="80px">
		      HoraTrece		</th>
 		<th width="80px">
		      HoraCatorce		</th>
 		<th width="80px">
		      HoraQuince		</th>
 		<th width="80px">
		      HoraDieciSeis		</th>
 		<th width="80px">
		      HoraDieciSiete		</th>
 		<th width="80px">
		      HoraDieciOcho		</th>
 		<th width="80px">
		      HoraDieciNueve		</th>
 		<th width="80px">
		      HoraVeinte		</th>
 		<th width="80px">
		      HoraVeintiUna		</th>
 		<th width="80px">
		      HoraVeintiDos		</th>
 		<th width="80px">
		      HoraVeintiTres		</th>
 		<th width="80px">
		      TotalHorasProgramadas		</th>
 	</tr>
	<?php foreach($model as $row): ?>
	<tr>
        		<td>
			<?php echo $row->IdProgramacionSugeridaDetalle; ?>
		</td>
       		<td>
			<?php echo $row->IdProgramacionSugerida; ?>
		</td>
       		<td>
			<?php echo $row->NumeroMensajero; ?>
		</td>
       		<td>
			<?php echo $row->HoraCero; ?>
		</td>
       		<td>
			<?php echo $row->HoraUno; ?>
		</td>
       		<td>
			<?php echo $row->HoraDos; ?>
		</td>
       		<td>
			<?php echo $row->HoraTres; ?>
		</td>
       		<td>
			<?php echo $row->HoraCuatro; ?>
		</td>
       		<td>
			<?php echo $row->HoraCinco; ?>
		</td>
       		<td>
			<?php echo $row->HoraSeis; ?>
		</td>
       		<td>
			<?php echo $row->HoraSiete; ?>
		</td>
       		<td>
			<?php echo $row->HoraOcho; ?>
		</td>
       		<td>
			<?php echo $row->HoraNueve; ?>
		</td>
       		<td>
			<?php echo $row->HoraDiez; ?>
		</td>
       		<td>
			<?php echo $row->HoraOnce; ?>
		</td>
       		<td>
			<?php echo $row->HoraDoce; ?>
		</td>
       		<td>
			<?php echo $row->HoraTrece; ?>
		</td>
       		<td>
			<?php echo $row->HoraCatorce; ?>
		</td>
       		<td>
			<?php echo $row->HoraQuince; ?>
		</td>
       		<td>
			<?php echo $row->HoraDieciSeis; ?>
		</td>
       		<td>
			<?php echo $row->HoraDieciSiete; ?>
		</td>
       		<td>
			<?php echo $row->HoraDieciOcho; ?>
		</td>
       		<td>
			<?php echo $row->HoraDieciNueve; ?>
		</td>
       		<td>
			<?php echo $row->HoraVeinte; ?>
		</td>
       		<td>
			<?php echo $row->HoraVeintiUna; ?>
		</td>
       		<td>
			<?php echo $row->HoraVeintiDos; ?>
		</td>
       		<td>
			<?php echo $row->HoraVeintiTres; ?>
		</td>
       		<td>
			<?php echo $row->TotalHorasProgramadas; ?>
		</td>
       	</tr>
     <?php endforeach; ?>
</table>
<?php endif; ?>
