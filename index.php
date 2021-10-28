<?php

$users = [
	['user' => 'Sera', 'role' => 'Gérante'],
	['user' => 'Iary', 'role' => 'Agent de saisi'],
	['user' => 'Solo', 'role' => 'Eleveur'],
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