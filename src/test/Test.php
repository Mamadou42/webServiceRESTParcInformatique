<?php
require_once "../../bootstrap.php";
/**
 * CREATION DE PLAIGNANT
 */
$c = new Concerne();
$c =setNom("Diouf");
$c =setPrenom("Modou");
$c =setAdresse("Dakar");
$c =setTelephone("+221 77 456 89 45");
/**
 * DISCRIMINATOR
 */
$c =setCin("Diouf");

$entityManager->persist($c);
$entityManager->flush();
?>