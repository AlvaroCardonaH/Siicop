<?php if ($model !== null):?>
<table border="1">

	<tr>
		<th width="80px">
		      IdReportePedidosxPdv		</th>
 		<th width="80px">
		      FechaInicio		</th>
 		<th width="80px">
		      FechaFinal		</th>
 		<th width="80px">
		      IdFlota		</th>
 		<th width="80px">
		      CodigoEstadoReporte		</th>
 		<th width="80px">
		      IdUsuarioGraba		</th>
 		<th width="80px">
		      FechaGraba		</th>
 		<th width="80px">
		      CodigoEstadoRegistro		</th>
 	</tr>
	<?php foreach($model as $row): ?>
	<tr>
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
			<?php echo $row->IdFlota; ?>
		</td>
       		<td>
			<?php echo $row->CodigoEstadoReporte; ?>
		</td>
       		<td>
			<?php echo $row->IdUsuarioGraba; ?>
		</td>
       		<td>
			<?php echo $row->FechaGraba; ?>
		</td>
       		<td>
			<?php echo $row->CodigoEstadoRegistro; ?>
		</td>
       	</tr>
     <?php endforeach; ?>
</table>
<?php endif; ?>
