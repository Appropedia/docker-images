#Configure foreign file repos so that images and other files are fetched from appropedia.org.
$wgForeignFileRepos[] = [
	'class' => ForeignAPIRepo::class,
	'name' => 'appropedia',
	'apibase' => 'https://www.appropedia.org/w/api.php',
	'scriptDirUrl' => 'https://www.appropedia.org/w',
	'articleUrl' => 'https://www.appropedia.org/$1',
	'descBaseUrl' => 'https://www.appropedia.org/File:',
	'hashLevels' => 2,
	'fetchDescription' => true,
	'descriptionCacheExpiry' => 0,
	'apiThumbCacheExpiry' => 0,
	'transformVia404' => false,
];

