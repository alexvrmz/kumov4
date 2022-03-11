<?php

	session_start(); // --- Validar sesión ---
	//error_reporting(0);

	if(!isset($_SESSION['usuario'])){
		header("location:acceso?accion=entrar"); // --- llevame a login si no hay sesión ---
	} else{
		header("location:app?accion=escritorio"); // --- llevame si hay sesión ---
	}

?>