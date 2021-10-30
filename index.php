<?php

$users = [
	['user' => 'Sera', 'role' => 'Gérante', 'accessLevel' => 'normalUser'],
	['user' => 'Iary', 'role' => 'Agent de saisi', 'accessLevel' => 'normalUser'],
	['user' => 'Solo', 'role' => 'Eleveur', 'accessLevel' => 'normalUser'],
	['user' => 'Fitz', 'role' => 'Developpeur', 'accessLevel' => 'admin'],
	['user' => 'Tiny', 'role' => 'Manager', 'accessLevel' => 'moderator'],
];

$chikenNumber = [];

$chickenAge = [];

$chickenWeight =[];

$chikenGroup = [
	[
		'goupeNumber' => 001,
		'arrivalDate' => 28/10/2021,
		'chickenOrdered' => 100,
		'chickenDead' => 3,
		'chickenNumber' => 'chickenOrdered' - 'chickenDead',
		'chickenAge' => $chickenAge,
		'chickenWeight' => $chickenWeight,
		'chickenHealthState' => ['Healthy', 'Sick'],
	],
];