<?php

$pages = [
	[
		'slug' => 'meet-the-panel',
		'name' => 'meet the panel',
		'headline' => 'Meet the Panel',
		'blurb' => 'Competitors will be judged by a diverse group of technologists, philanthropists, industry leaders and visionaries.',
		'banner' => 'panel-bg.jpg',
		'mobile-position' => 'center'
	],
	[
		'slug' => 'guidelines',
		'name' => 'guidelines',
		'headline' => 'CONTEST  GUIDELINES',
		'blurb' => '',
		'banner' => 'guidelines-bg.jpg',
		'mobile-position' => 'center left'
	],
	[
		'slug' => 'project-examples',
		'name' => 'project examples',
		'headline' => 'CREATIVE IDEAS IMPROVING LIVES',
		'blurb' => 'We are inspired by these four great examples of innovative, sustainable projects giving a thoughtful helping hand and positively impacting our communities.',
		'banner' => 'projects-bg.jpg',
		'mobile-position' => 'center left'
	],
	[
		'slug' => 'about-8vc',
		'name' => 'about 8vc',
		'headline' => 'ENABLING COMMUNITY TRANSFORMATION',
		'blurb' => '',
		'banner' => 'about-bg.jpg',
		'mobile-position' => 'center left'
	]
];

$panelMembers = [
	[
		'img' => 'ashton.jpg',
		'name' => 'Ashton Eaton',
		'title' => '2x Olympic Gold Medalist, Decathlon',
		'link' => 'https://en.wikipedia.org/wiki/Ashton_Eaton'
	],
	[
		'img' => 'ashton_k.jpg',
		'name' => 'Ashton Kutcher',
		'title' => 'Actor<br>Founder, Thorn<br>General Partner, Sound Ventures',
		'link' => 'https://twitter.com/aplusk'
	],
	[
		'img' => 'bhaskar.jpg',
		'name' => 'Bhaskar Ghosh',
		'title' => 'Partner and CTO, 8VC',
		'link' => 'https://8vc.com/team/bhaskar-ghosh/'
	],
	[
		'img' => 'jerry.jpg',
		'name' => 'Jerry Yang',
		'title' => 'Founder, AME Cloud Ventures <br /> Founder, Yahoo!',
		'link' => 'https://en.wikipedia.org/wiki/Jerry_Yang'
	],
	[
		'img' => 'joe.jpg',
		'name' => 'Joe Lonsdale',
		'title' => 'General Partner, 8VC',
		'link' => 'https://8vc.com/team/joe-lonsdale/'
	],
	[
		'img' => 'julie.jpg',
		'name' => 'Julie Cordua',
		'title' => 'CEO at Thorn: Digital Defenders of Children',
		'link' => 'https://www.wearethorn.org/about-our-fight-against-sexual-exploitation-of-children/staff/'
	],
	[
		'img' => 'kimmy.jpg',
		'name' => 'Kimmy Scotti',
		'title' => 'Partner, 8VC',
		'link' => 'https://8vc.com/team/kimmy-scotti/'
	],
	[
		'img' => 'phaedra.jpg',
		'name' => 'Phaedra Ellis-Lamkins',
		'title' => 'Co-founder at Promise',
		'link' => 'https://joinpromise.com/'
	],
	[
		'img' => 'scott.jpg',
		'name' => 'Scott Cook',
		'title' => 'Founder, Intuit <br />Early Board Member, eBay <br />Board Member, P&G',
		'link' => 'https://www.intuit.com/company/executives/'
	],
];

$projects = [
	[
		'name' => 'Strive for College',
		'url' => 'striveforcollege.org',
		'logo' => 'strive.png',
		'blurb' => 'Strive for College uses technology deliver 1-on-1 mentoring sessions to financially handicapped students. Strive pairs formerly underprivileged people who beat the odds and attended great universities with similarly positioned high school students to whom they can offer advice. Strive is an excellent example of a project with high “return on investment” (ROI) - experienced, successful volunteers can drastically improve student outcomes in short amounts of time.'
	],
	[
		'name' => 'Thorn',
		'url' => 'wearethorn.org',
		'logo' => 'thorn.png',
		'blurb' => 'Ashton Kutcher’s Thorn harnesses a technology called Spotlight to identify and rescue victims of sexual trafficking. Thorn serves over 5,000 law enforcement officers in all 50 states and over 18 countries, and represents the tireless efforts of 20+ international NGO partners, 40+ technology company partners, and hundreds of volunteers.'
	],
	[
		'name' => 'OneHope Foundation',
		'url' => 'onehopefoundation.org',
		'logo' => 'onehope.png',
		'blurb' => 'The OneHope Foundation is a vineyard and wine vendor that pledges to give a fixed percentage of its earnings to worthy causes. OneHope’s cause-centric commerce model has funded the planting of 52,011 trees in reforestation projects, provided 16,719 people with clean drinking water, provided 1,088,492 hungry children with healthy meals, and aided a variety of other crucial humanitarian projects.'
	],
	[
		'name' => 'Prime5',
		'url' => 'prime5.org',
		'logo' => 'prime.png',
		'blurb' => 'Deion Sanders started Prime5 to address inner-city problems including debt, chronic unemployment, educational failure, family breakdown, addiction and trauma. Prime5 has been active in Dallas, TX, where it works with a variety of “catalyst” community organizations which help members of underserved communities achieve financial empowerment, employment, and entrepreneurship, conduct programming for at-risk youth, and establish recovery communities.'
	]
];

if ($_SERVER['REQUEST_URI'] !== '/') {
	$currentPage = array_values(array_filter($pages, function($page) {
		return strpos($_SERVER['REQUEST_URI'], $page['slug']) !== false;
	}))[0];
}
