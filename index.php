<?php

// Kickstart the framework
$f3=require('lib/base.php');

$f3->set('DEBUG',1);
if ((float)PCRE_VERSION<7.9)
	trigger_error('PCRE version is out of date');

// Load configuration
$f3->config('config.ini');

$f3->set('AUTOLOAD', 'app/claseabstracta/;app/clasesobjetos/;app/encapsulacion/;app/herencia/;app/interfaz/;app/polimorfismo/;');

$f3->route('GET /',
	function($f3) {
      echo "Programacion Orientada a Objetos";
	}
);

$f3->route('GET /test/clases','TestClases->index');
$f3->route('GET /test/herencia','TestHerencia->index');
$f3->route('GET /test/interfaz','TestInterfaz->index');
$f3->route('GET /test/encapsulacion','TestEncapsulacion->index');
$f3->route('GET /test/abstracta','TestClaseAbstracta->index');
$f3->route('GET /test/polimorfismo','TestPolimorfismo->index');
$f3->run();
