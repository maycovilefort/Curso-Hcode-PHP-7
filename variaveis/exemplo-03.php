<?php
////////////////////////////////////////////////////////
//Tipo de Dados - BÁSICO.

// Tipo String com aspas duplas.
	$nome = "Mayco";

// Tipo String com aspas simples.
	$site = 'www.vilefort.com.br';

// Tipo inteiro.
	$ano = 2018;
// Numeros com ponto flutuante.
	$salario = 5500.90;
// Tipo Booleano (Verdadeiro ou Falso).
	$bloqueado = false;

////////////////////////////////////////////////////////
//Tipo de Dados - COMPOSTO.

// Tipo Array.
	$frutas = array('abacaxi', 'laranja', 'maga');
// Tipo Objeto
	$nascimento = new DateTime();

////////////////////////////////////////////////////////
// Tipo de Dados - ESPECIAIS.

// Tipo Resource.
	$arquivos = fopen("exemplo-03.php", "r");
 // Tipo NULL (indica ausencia de valor).
	$nulo = NULL; // NULL <> VAZIO.