<?php if ($model !== null):?>
<table border="1">

	<tr>
		<th width="80px">
		      IdProgramacionTurno		</th>
 		<th width="80px">
		      IdProgramacionSugerida		</th>
 		<th width="80px">
		      IdFlota		</th>
 		<th width="80px">
		      IdClasificacionDia		</th>
 		<th width="80px">
		      FechaInicial		</th>
 		<th width="80px">
		      FechaFinal		</th>
 	</tr>
	<?php foreach($model as $row): ?>
	<tr>
        		<td>
			<?php echo $row->IdProgramacionTurno; ?>
		</td>
       		<td>
			<?php echo $row->IdProgramacionSugerida; ?>
		</td>
       		<td>
			<?php echo $row->IdFlota; ?>
		</td>
       		<td>
			<?php echo $row->IdClasificacionDia; ?>
		</td>
       		<td>
			<?php echo $row->FechaInicial; ?>
		</td>
       		<td>
			<?php echo $row->FechaFinal; ?>
		</td>
       	</tr>
     <?php endforeach; ?>
</table>
<?php endif; ?>
