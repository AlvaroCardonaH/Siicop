<?php if ($model !== null):?>
<table border="1">

	<tr>
		<th width="80px">
		      IdFechaFestivo		</th>
 		<th width="80px">
		      FechaFestivo		</th>
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
			<?php echo $row->IdFechaFestivo; ?>
		</td>
       		<td>
			<?php echo $row->FechaFestivo; ?>
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
