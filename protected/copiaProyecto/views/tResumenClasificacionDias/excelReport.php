<?php if ($model !== null):?>
<table border="1">

	<tr>
		<th width="80px">
		      IdReportePedidosxPdv		</th>
 		<th width="80px">
		      IdClasificacionDia		</th>
 		<th width="80px">
		      NumeroPosicion		</th>
 		<th width="80px">
		      IdHorario		</th>
 		<th width="80px">
		      HoraInicio		</th>
 		<th width="80px">
		      HoraFinal		</th>
 		<th width="80px">
		      Lunes_Servicios		</th>
 		<th width="80px">
		      Numero_Mensajeros_Lunes		</th>
 		<th width="80px">
		      Martes_Servicios		</th>
 		<th width="80px">
		      Numero_Mensajeros_Martes		</th>
 		<th width="80px">
		      Miercoles_Servicios		</th>
 		<th width="80px">
		      Numero_Mensajeros_Miercoles		</th>
 		<th width="80px">
		      Jueves_Servicios		</th>
 		<th width="80px">
		      Numero_Mensajeros_Jueves		</th>
 		<th width="80px">
		      Viernes_Servicios		</th>
 		<th width="80px">
		      Numero_Mensajeros_Viernes		</th>
 		<th width="80px">
		      Sabado_Servicios		</th>
 		<th width="80px">
		      Numero_Mensajeros_Sabado		</th>
 		<th width="80px">
		      Domingo_Servicios		</th>
 		<th width="80px">
		      Numero_Mensajeros_Domingo		</th>
 		<th width="80px">
		      ClienteFiel_Servicios		</th>
 		<th width="80px">
		      Numero_Mensajeros_ClienteFiel		</th>
 		<th width="80px">
		      Promedio_Mensajeros_Hora_Normal		</th>
 		<th width="80px">
		      Promedio_Mensajeros_Hora_Festivo		</th>
 	</tr>
	<?php foreach($model as $row): ?>
	<tr>
        		<td>
			<?php echo $row->IdReportePedidosxPdv; ?>
		</td>
       		<td>
			<?php echo $row->IdClasificacionDia; ?>
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
			<?php echo $row->Lunes_Servicios; ?>
		</td>
       		<td>
			<?php echo $row->Numero_Mensajeros_Lunes; ?>
		</td>
       		<td>
			<?php echo $row->Martes_Servicios; ?>
		</td>
       		<td>
			<?php echo $row->Numero_Mensajeros_Martes; ?>
		</td>
       		<td>
			<?php echo $row->Miercoles_Servicios; ?>
		</td>
       		<td>
			<?php echo $row->Numero_Mensajeros_Miercoles; ?>
		</td>
       		<td>
			<?php echo $row->Jueves_Servicios; ?>
		</td>
       		<td>
			<?php echo $row->Numero_Mensajeros_Jueves; ?>
		</td>
       		<td>
			<?php echo $row->Viernes_Servicios; ?>
		</td>
       		<td>
			<?php echo $row->Numero_Mensajeros_Viernes; ?>
		</td>
       		<td>
			<?php echo $row->Sabado_Servicios; ?>
		</td>
       		<td>
			<?php echo $row->Numero_Mensajeros_Sabado; ?>
		</td>
       		<td>
			<?php echo $row->Domingo_Servicios; ?>
		</td>
       		<td>
			<?php echo $row->Numero_Mensajeros_Domingo; ?>
		</td>
       		<td>
			<?php echo $row->ClienteFiel_Servicios; ?>
		</td>
       		<td>
			<?php echo $row->Numero_Mensajeros_ClienteFiel; ?>
		</td>
       		<td>
			<?php echo $row->Promedio_Mensajeros_Hora_Normal; ?>
		</td>
       		<td>
			<?php echo $row->Promedio_Mensajeros_Hora_Festivo; ?>
		</td>
       	</tr>
     <?php endforeach; ?>
</table>
<?php endif; ?>
