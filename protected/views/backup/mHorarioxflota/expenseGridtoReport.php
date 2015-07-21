<?php if ($model !== null):?>
<table border="1">

	<tr>
		<th width="80px">
		      IdHorarioxFlota		</th>
 		<th width="80px">
		      IdFlota		</th>
 		<th width="80px">
		      IdHorario		</th>
 		<th width="80px">
		      NumeroPosicion		</th>
 		<th width="80px">
		      EstaHabilitada		</th>
 		<th width="80px">
		      EsHoraPico		</th>
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
			<?php echo $row->IdHorarioxFlota; ?>
		</td>
       		<td>
			<?php echo $row->IdFlota; ?>
		</td>
       		<td>
			<?php echo $row->IdHorario; ?>
		</td>
       		<td>
			<?php echo $row->NumeroPosicion; ?>
		</td>
       		<td>
			<?php echo $row->EstaHabilitada; ?>
		</td>
       		<td>
			<?php echo $row->EsHoraPico; ?>
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
