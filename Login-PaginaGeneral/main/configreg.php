<?php
// consulta para extraer los datos de la tabla genero
$genero = "SELECT * FROM genero ORDER BY Id_Genero";
$resultado = $conecta->query($genero);
// consulta para extraer los datos de la tabla grupo
$grupo = "SELECT * FROM grupos ORDER BY Grupo";
$resultado1 = $conecta->query($grupo);
// consulta para extraer los datos de la tabla carera
$carrera = "SELECT * FROM carrera ORDER BY Id_Carrera";
$resultado2 = $conecta->query($carrera);
// consulta para extraer los datos de la tabla alumnos
$alum = "SELECT * FROM alumnos ORDER BY Id_Alumno";
$resultado3 = $conecta->query($alum);
// consulta para extraer los datos de la tabla plantel
$plantel = "SELECT * FROM plantel ORDER BY Id_Plantel";
$resultado4 = $conecta->query($plantel);
// consulta para extraer los datos de la tabla plantel
$usuario1 = "SELECT * FROM usuarios ORDER BY Id_Usuario";
$resultado5 = $conecta->query($usuario1);
 ?>
