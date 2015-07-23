<?php if ($model !== null):?>
<table border="1">

	<tr>
		<th width="80px">
		      IdProgramacionTurnoMensajero		</th>
 		<th width="80px">
		      IdProgramacionTurnoFecha		</th>
 		<th width="80px">
		      NumeroTurno		</th>
 		<th width="80px">
		      HoraInicio		</th>
 		<th width="80px">
		      HoraFinal		</th>
 		<th width="80px">
		      Documento		</th>
 		<th width="80px">
		      NombreCompleto		</th>
 		<th width="80px">
		      DiferenciaHoras		</th>
 		<th width="80px">
		      HoraFinalAnterior		</th>
 	</tr>
	<?php foreach($model as $row): ?>
	<tr>
        		<td>
			<?php echo $row->IdProgramacionTurnoMensajero; ?>
		</td>
       		<td>
			<?php echo $row->IdProgramacionTurnoFecha; ?>
		</td>
       		<td>
			<?php echo $row->NumeroTurno; ?>
		</td>
       		<td>
			<?php echo $row->HoraInicio; ?>
		</td>
       		<td>
			<?php echo $row->HoraFinal; ?>
		</td>
       		<td>
			<?php echo $row->Documento; ?>
		</td>
       		<td>
			<?php echo $row->NombreCompleto; ?>
		</td>
       		<td>
			<?php echo $row->DiferenciaHoras; ?>
		</td>
       		<td>
			<?php echo $row->HoraFinalAnterior; ?>
		</td>
       	</tr>
     <?php endforeach; ?>
</table>
<?php endif; ?>
