<?php
//Suponiendo estas variables

$es_un_michi_grande = true;
$le_gusta_comer = true;
$sabe_volar = false;
$tiene_2_patas = false;

// ¿Cuál es el resultado según las tablas de verdad?

$es_un_michi_grande && $le_gusta_comer = true;
$es_un_michi_grande || $sabe_volar = false;
$sabe_volar || $tiene_2_patas = false;
!$le_gusta_comer = true;
!$le_gusta_comer || $es_un_michi_grande = true;

?>