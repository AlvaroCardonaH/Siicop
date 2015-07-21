<?php if ($model !== null):?>
<table border="1">

	<tr>
		<th width="80px">
		      IdProgramacionSugerida		</th>
 		<th width="80px">
		      IdClasificacionDia		</th>
 		<th width="80px">
		      IdReportePedidosxPdv		</th>
 		<th width="80px">
		      FechaInicio		</th>
 		<th width="80px">
		      FechaFinal		</th>
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
 		<th width="80px">
		      DescripcionProgramacionSugerida		</th>
 	</tr>
	<?php foreach($model as $row): ?>
	<tr>
        		<td>
			<?php echo $row->IdProgramacionSugerida; ?>
		</td>
       		<td>
			<?php echo $row->IdClasificacionDia; ?>
		</td>
       		<td>
			<?php echo $row->IdReportePedidosxPdv; ?>
		</td>
       		<td>
			<?php echo $row->FechaInicio; ?>
		</td>
       		<td>
			<?php echo $row->FechaFinal; ?>
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
       		<td>
			<?php echo $row->DescripcionProgramacionSugerida; ?>
		</td>
       	</tr>
     <?php endforeach; ?>
</table>
<?php endif; ?>
