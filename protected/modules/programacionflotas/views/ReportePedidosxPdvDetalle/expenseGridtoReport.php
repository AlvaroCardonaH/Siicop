<?php if ($model !== null):?>
<table border="1">

	<tr>
		<th width="80px">
		      IdReportePedidosxPdvDetalle		</th>
 		<th width="80px">
		      IdReportePedidosxPdv		</th>
 		<th width="80px">
		      NumeroDeRegistro		</th>
 		<th width="80px">
		      CodigoPdv		</th>
 		<th width="80px">
		      NombrePdv		</th>
 		<th width="80px">
		      Caja		</th>
 		<th width="80px">
		      Factura		</th>
 		<th width="80px">
		      Valor		</th>
 		<th width="80px">
		      NombreMensajero		</th>
 		<th width="80px">
		      CelularMensajero		</th>
 		<th width="80px">
		      NombreCliente		</th>
 		<th width="80px">
		      DireccionCliente		</th>
 		<th width="80px">
		      TelefonoCliente		</th>
 		<th width="80px">
		      EstadoPedido		</th>
 		<th width="80px">
		      CausalEntrega		</th>
 		<th width="80px">
		      FechaPos		</th>
 		<th width="80px">
		      FechaAceptacion		</th>
 		<th width="80px">
		      TiempoEspera		</th>
 		<th width="80px">
		      FechaEntrega		</th>
 		<th width="80px">
		      TiempoTotalMinutos		</th>
 		<th width="80px">
		      IdRuta		</th>
 		<th width="80px">
		      CodigoEstadoRegistro		</th>
 		<th width="80px">
		      EsDiaFestivo		</th>
 	</tr>
	<?php foreach($model as $row): ?>
	<tr>
        		<td>
			<?php echo $row->IdReportePedidosxPdvDetalle; ?>
		</td>
       		<td>
			<?php echo $row->IdReportePedidosxPdv; ?>
		</td>
       		<td>
			<?php echo $row->NumeroDeRegistro; ?>
		</td>
       		<td>
			<?php echo $row->CodigoPdv; ?>
		</td>
       		<td>
			<?php echo $row->NombrePdv; ?>
		</td>
       		<td>
			<?php echo $row->Caja; ?>
		</td>
       		<td>
			<?php echo $row->Factura; ?>
		</td>
       		<td>
			<?php echo $row->Valor; ?>
		</td>
       		<td>
			<?php echo $row->NombreMensajero; ?>
		</td>
       		<td>
			<?php echo $row->CelularMensajero; ?>
		</td>
       		<td>
			<?php echo $row->NombreCliente; ?>
		</td>
       		<td>
			<?php echo $row->DireccionCliente; ?>
		</td>
       		<td>
			<?php echo $row->TelefonoCliente; ?>
		</td>
       		<td>
			<?php echo $row->EstadoPedido; ?>
		</td>
       		<td>
			<?php echo $row->CausalEntrega; ?>
		</td>
       		<td>
			<?php echo $row->FechaPos; ?>
		</td>
       		<td>
			<?php echo $row->FechaAceptacion; ?>
		</td>
       		<td>
			<?php echo $row->TiempoEspera; ?>
		</td>
       		<td>
			<?php echo $row->FechaEntrega; ?>
		</td>
       		<td>
			<?php echo $row->TiempoTotalMinutos; ?>
		</td>
       		<td>
			<?php echo $row->IdRuta; ?>
		</td>
       		<td>
			<?php echo $row->CodigoEstadoRegistro; ?>
		</td>
       		<td>
			<?php echo $row->EsDiaFestivo; ?>
		</td>
       	</tr>
     <?php endforeach; ?>
</table>
<?php endif; ?>
