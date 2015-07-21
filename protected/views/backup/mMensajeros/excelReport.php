<?php if ($model !== null):?>
<table border="1">

	<tr>
		<th width="80px">
		      IdMensajero		</th>
 		<th width="80px">
		      Documento		</th>
 		<th width="80px">
		      PrimerNombre		</th>
 		<th width="80px">
		      SegundoNombre		</th>
 		<th width="80px">
		      PrimerApellido		</th>
 		<th width="80px">
		      SegundoApellido		</th>
 		<th width="80px">
		      IdFlota		</th>
 		<th width="80px">
		      IdUsuarioGraba		</th>
 		<th width="80px">
		      FechaGraba		</th>
 		<th width="80px">
		      IdUsuarioUltimaModifica		</th>
 		<th width="80px">
		      FechaUltimaModifica		</th>
 		<th width="80px">
		      CodigoEstadoRegistro		</th>
 	</tr>
	<?php foreach($model as $row): ?>
	<tr>
        		<td>
			<?php echo $row->IdMensajero; ?>
		</td>
       		<td>
			<?php echo $row->Documento; ?>
		</td>
       		<td>
			<?php echo $row->PrimerNombre; ?>
		</td>
       		<td>
			<?php echo $row->SegundoNombre; ?>
		</td>
       		<td>
			<?php echo $row->PrimerApellido; ?>
		</td>
       		<td>
			<?php echo $row->SegundoApellido; ?>
		</td>
       		<td>
			<?php echo $row->IdFlota; ?>
		</td>
       		<td>
			<?php echo $row->IdUsuarioGraba; ?>
		</td>
       		<td>
			<?php echo $row->FechaGraba; ?>
		</td>
       		<td>
			<?php echo $row->IdUsuarioUltimaModifica; ?>
		</td>
       		<td>
			<?php echo $row->FechaUltimaModifica; ?>
		</td>
       		<td>
			<?php echo $row->CodigoEstadoRegistro; ?>
		</td>
       	</tr>
     <?php endforeach; ?>
</table>
<?php endif; ?>
