<?php

//funcion para verificar el horario de clases del instituto
function DiasInstituto(){
    $diasSemanales = date('N');
    return($diasSemanales>=1 && $diasSemanales<=5);
}
//funcion que representa el hilo del horario
function HiloHorario(){
    while(true){
        if(DiasInstituto()){
         $HoraActual = date('H;i');
         if($HoraActual == '18:00'){
            echo("Empezo la Clase");
            break;
         }
         if($HoraActual == '22:00'){
            echo("La Clase Termino");
            break;
         }
        }
   
    }
     sleep(60);  //se actualiza cada 60 segundos para verificar el horario
}
//$HorarioThread = new thread('HiloHorario');
$HorarioThread -> start(); //inicia el hilo creado
$HorarioThread -> join(); //espera que finalize