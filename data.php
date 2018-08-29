<?php

$pages = [
	[
		'slug' => 'meet-the-panel',
		'name' => 'meet the panel',
		'headline' => 'ADVOCATING CHANGE GLOBAL IMPACT FPO',
		'blurb' => 'Our panel consists of entrepreneurs, technologists, and industry influencers.',
		'banner' => 'panel-bg.jpg'
	],
	[
		'slug' => 'guidelines',
		'name' => 'guidelines',
		'headline' => 'CONTEST  GUIDELINES',
		'blurb' => '',
		'banner' => 'guidelines-bg.jpg'
	],
	[
		'slug' => 'project-examples',
		'name' => 'project examples',
		'headline' => 'CREATIVE IDEAS IMPROVING LIVES',
		'blurb' => 'We are inspired by the following projects creating positive impact in the world today.',
		'banner' => 'projects-bg.jpg'
	],
	[
		'slug' => 'about-8vc',
		'name' => 'about 8vc',
		'headline' => 'ENABLING COMMUNITY TRANSFORMATION',
		'blurb' => '',
		'banner' => 'about-bg.jpg'
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