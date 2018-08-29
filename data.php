<?php

$pages = [
	[
		'slug' => 'meet-the-panel',
		'name' => 'meet the panel'
	],
	[
		'slug' => 'guidelines',
		'name' => 'guidelines'
	],
	[
		'slug' => 'project-examples',
		'name' => 'project examples'
	],
	[
		'slug' => 'about-8vc',
		'name' => 'about 8vc'
	]
];

if ($_SERVER['REQUEST_URI'] !== '/') {
	$currentPage = array_values(array_filter($pages, function($page) {
		return strpos($_SERVER['REQUEST_URI'], $page['slug']) !== false;
	}))[0];
}


$panelMembers = [
	[
		'img' => 'https://placeimg.com/272/326/people',
		'name' => 'Ashton Eaton',
		'title' => '2x Olympic Gold Medalist, Decathlon'
	],
	[
		'img' => 'https://placeimg.com/272/326/people',
		'name' => 'Ashton Eaton',
		'title' => '2x Olympic Gold Medalist, Decathlon'
	],
	[
		'img' => 'https://placeimg.com/272/326/people',
		'name' => 'Ashton Eaton',
		'title' => '2x Olympic Gold Medalist, Decathlon'
	],
	[
		'img' => 'https://placeimg.com/272/326/people',
		'name' => 'Ashton Eaton',
		'title' => '2x Olympic Gold Medalist, Decathlon'
	],
	[
		'img' => 'https://placeimg.com/272/326/people',
		'name' => 'Ashton Eaton',
		'title' => '2x Olympic Gold Medalist, Decathlon'
	],
	[
		'img' => 'https://placeimg.com/272/326/people',
		'name' => 'Ashton Eaton',
		'title' => '2x Olympic Gold Medalist, Decathlon'
	],
	[
		'img' => 'https://placeimg.com/272/326/people',
		'name' => 'Ashton Eaton',
		'title' => '2x Olympic Gold Medalist, Decathlon'
	],
	[
		'img' => 'https://placeimg.com/272/326/people',
		'name' => 'Ashton Eaton',
		'title' => '2x Olympic Gold Medalist, Decathlon'
	],
	[
		'img' => 'https://placeimg.com/272/326/people',
		'name' => 'Ashton Eaton',
		'title' => '2x Olympic Gold Medalist, Decathlon'
	],
];