<?php
	//Array asociativo
	$familia = array('Juan' => 'Sinuhe' ,'Altulo' => 'Azucena' );
	echo 'Juan papa de '.$familia['Juan'].' y Altulo marido de '.$familia['Altulo'].'<br>';
	//Array multidimensional
	$usuarios= array('Mario',array(23, array('Hombre','Mujer')));
	echo $usuarios[1][1][0].'<br>';
	echo $usuarios[1][1][1].'<br>';
	echo $usuarios[1][0].'<br>';
	echo $usuarios[0].'<br>';

?>