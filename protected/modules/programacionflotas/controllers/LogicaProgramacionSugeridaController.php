<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class LogicaProgramacionSugeridaController extends Controller
{

	public function actionIndex()
	{

            //$this->render('index', array());
            $P_NumeroMensajerosProgramados = 8;
            $P_IdReportePedidosxPdv = 13;
                    
            $logica = new LogicaProgramacionSugerida($P_NumeroMensajerosProgramados, $P_IdReportePedidosxPdv);
            
            $this->render('index', array('logica'=>$logica));
	}
}
?>

