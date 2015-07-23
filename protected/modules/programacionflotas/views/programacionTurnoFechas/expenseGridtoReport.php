<?php if ($model !== null):?>
<table border="1">

	<tr>
		<th width="80px">
		      IdProgramacionTurnoFecha		</th>
 		<th width="80px">
		      IdProgramacionTurno		</th>
 		<th width="80px">
		      FechaInicio		</th>
 		<th width="80px">
		      FechaFinal		</th>
 	</tr>
	<?php foreach($model as $row): ?>
	<tr>
        		<td>
			<?php echo $row->IdProgramacionTurnoFecha; ?>
		</td>
       		<td>
			<?php echo $row->IdProgramacionTurno; ?>
		</td>
       		<td>
			<?php echo $row->FechaInicio; ?>
		</td>
       		<td>
			<?php echo $row->FechaFinal; ?>
		</td>
       	</tr>
     <?php endforeach; ?>
</table>
<?php endif; ?>
