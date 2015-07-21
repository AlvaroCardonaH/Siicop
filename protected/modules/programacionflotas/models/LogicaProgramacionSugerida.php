<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class LogicaProgramacionSugerida {
    
    private $NumeroMensajerosProgramados;
    private $IdReportePedidosxPdv;
    
    public function getNumeroMensajerosProgramados (){
        return $this->NumeroMensajerosProgramados;
    }
    
    public function getIdreportePedidosxPdv(){
        return $this->IdReportePedidosxPdv;
    }
    
    public function LogicaProgramacionSugerida($P_NumeroMensajerosProgramados, $P_IdReportePedidosxPdv){
        $this->NumeroMensajerosProgramados = $P_NumeroMensajerosProgramados;
        $this->IdReportePedidosxPdv = $P_IdReportePedidosxPdv;
        $this->LogicaProgramacionSugeridaNormal();
    }
    
    public function LogicaProgramacionSugeridaNormal(){
                    
        $connection=Yii::app()->db; 
        
        $query = 'CREATE TEMPORARY TABLE Temp_ProgramacionSugerida (IdProgramacionSugerida INT, 
		IdHorario INT, NroMensajero INT, NumeroPosicion INT, HoraInicio VARCHAR(5), 
		HoraFinal VARCHAR(5), Valor INT)';
        $command = $connection->createCommand($query);
        $command->execute();
        
        $query = 'CREATE TEMPORARY TABLE Temp_HorasMensajero 
		(IdProgramacionSugerida INT, Tmp_NroMensajero INT, Tmp_TotalHoras INT)';
        $command = $connection->createCommand($query);
        $command->execute();

        $query = 'CREATE TEMPORARY TABLE Temp_MensajerosHorario 
		(IdProgramacionSugerida INT, IdHorario INT, Promedio_Mensajeros_Hora INT,
                 Tmp_TotalMensajeros INT)';
        
        $command = $connection->createCommand($query);
        $command->execute();
        
        $Ln_NumeroHoras = 8;
        $Ln_IdProgramacionSugerida=0;
        
        while ($Ln_NumeroHoras <= 8) {
            
            $Ln_IdProgramacionSugerida ++;
            
            $this->inicializarTotalesMensajero($connection, $Ln_IdProgramacionSugerida);
                                    
            $necesidades_normal = ResumenClasificacionDias::getNecesidadesClasificacionDia($this->IdReportePedidosxPdv, 1);
            
            $Ln_TotalMensajerosHora = 0;
            if ($necesidades_normal){
                foreach($necesidades_normal as $reg){
                    
                    if ($Ln_TotalMensajerosHora < $reg->Promedio_Mensajeros_Hora_Normal){
                        
                        $Ln_Mensajero = 1;
                        while (($Ln_Mensajero <= $this->NumeroMensajerosProgramados) &&
                                ($Ln_TotalMensajerosHora < $reg->Promedio_Mensajeros_Hora_Normal)){
                            
                        }
                    }

                }
            } // Necesidades x Hora
            
            $Ln_NumeroHoras++;
        }
    }

    public function inicializarTotalesHorario ($necesidades, $P_IdProgramacionSugerida){
        
        foreach($necesidades as $reg){
            
            $temp = $connection->createCommand()->insert('Temp_MensajerosHorario', array(
                    'IdProgramacionSugerida' => $P_IdProgramacionSugerida,
                    'IdHorario' => $reg->IdHorario,
                    'Promedio_Mensajeros_Hora' => $reg->Promedio_Mensajeros_Hora_Normal,
                    'Tmp_TotalMensajeros' => 0,
                ));
            
        }
        
    }
    
    public function inicializarTotalesMensajero ($connection, $P_IdProgramacionSugerida){
        
        for($numero = 1; $numero <= $this->NumeroMensajerosProgramados; $numero++){
            
            $temp = $connection->createCommand()->insert('Temp_HorasMensajero', array(
                    'IdProgramacionSugerida' => $P_IdProgramacionSugerida,
                    'Tmp_NroMensajero' => $numero,
                    'Tmp_TotalHoras' => 0,
                ));
            
        }
        
    }
    
    public function calcularMensajerosAsignadosxHora ($connection, $P_IdProgramacionSugerida, $P_NumeroPosicion){
        $balance = $connection->createCommand()
            ->select('IFNULL(SUM(Valor),0) AS TotalMensajerosHora')
            ->from('Temp_ProgramacionSugerida')
            ->where('IdProgramacionSugerida =' . $P_IdProgramacionSugerida . ' AND ' . 'NumeroPosicion = '. $P_NumeroPosicion)
            ->queryRow();   
        
        return $balance;
    }    
        
}

?>

