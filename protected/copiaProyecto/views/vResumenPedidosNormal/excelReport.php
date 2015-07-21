<?php if ($model !== null):?>
<table border="1">

	<tr>
		<th width="80px">
		      IdSede		</th>
 		<th width="80px">
		      NombreSede		</th>
 		<th width="80px">
		      IdReportePedidosxPdv		</th>
 		<th width="80px">
		      IdFlota		</th>
 		<th width="80px">
		      NombreFlota		</th>
 		<th width="80px">
		      IdClasificacionDia		</th>
 		<th width="80px">
		      NombreClasificacionDia		</th>
 		<th width="80px">
		      NumeroPosicion		</th>
 		<th width="80px">
		      IdHorario		</th>
 		<th width="80px">
		      HoraInicio		</th>
 		<th width="80px">
		      HoraFinal		</th>
 		<th width="80px">
		      NumeroDiaSemana		</th>
 		<th width="80px">
		      NombreDiaSemana		</th>
 		<th width="80px">
		      NumeroServicios		</th>
 	</tr>
	<?php foreach($model as $row): ?>
	<tr>
        		<td>
			<?php echo $row->IdSede; ?>
		</td>
       		<td>
			<?php echo $row->NombreSede; ?>
		</td>
       		<td>
			<?php echo $row->IdReportePedidosxPdv; ?>
		</td>
       		<td>
			<?php echo $row->IdFlota; ?>
		</td>
       		<td>
			<?php echo $row->NombreFlota; ?>
		</td>
       		<td>
			<?php echo $row->IdClasificacionDia; ?>
		</td>
       		<td>
			<?php echo $row->NombreClasificacionDia; ?>
		</td>
       		<td>
			<?php echo $row->NumeroPosicion; ?>
		</td>
       		<td>
			<?php echo $row->IdHorario; ?>
		</td>
       		<td>
			<?php echo $row->HoraInicio; ?>
		</td>
       		<td>
			<?php echo $row->HoraFinal; ?>
		</td>
       		<td>
			<?php echo $row->NumeroDiaSemana; ?>
		</td>
       		<td>
			<?php echo $row->NombreDiaSemana; ?>
		</td>
       		<td>
			<?php echo $row->NumeroServicios; ?>
		</td>
       	</tr>
     <?php endforeach; ?>
</table>
<?php endif; ?>
