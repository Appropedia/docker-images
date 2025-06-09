$wgArticlePath = '/$1';

$wgLogos = [
	'1x' => '/logos/Appropedia-1x.png',
	'icon' => '/logos/Appropedia-icon.svg',
	'wordmark' => [
		'src' => '/logos/Appropedia-wordmark.svg',
		'width' => 135,
		'height' => 20
	],
	'tagline' => [
		'src' => '/logos/Appropedia-tagline.svg',
		'width' => 135,
		'height' => 15
	]
];
$wgAppleTouchIcon = '/logos/apple-touch-icon.png';

$wgFileExtensions = [
	'png', 'jpg', 'jpeg', 'gif', 'webp', // Image formats
	'eps', 'svg', 'scad', 'FCStd', 'fcstd', 'f3d', // Vector and 3D formats
	'stl', 'blend', // Hardware design formats
	'gcode', 'mpt', 'mpf', 'nc', 'ncc', // Gcode
	'mp4', 'ogg', 'doc', 'xls', 'xlsx', 'ppt', 'mp3', 'pdf', 'odt', 'ods', 'odp', 'odg', 'odb', 'ogv', '3mf', 'txt', 'zip' // Other formats
];
$wgTrustedMediaFormats[] = 'application/sla';

$wgMimeDetectorCommand = "file --brief --mime"; // Trying to fix MIME error for SCAD files

$wgNoFollowLinks = false;

$wgEmergencyContact = "support@appropedia.org";
$wgPasswordSender = "noreply@appropedia.org";

## To enable image uploads, make sure the 'images' directory
## is writable, then set this to true:
$wgEnableUploads = true;
$wgUseImageMagick = true;
$wgMaxShellMemory = 0;

##################
#   NAMESPACES   #
##################

define( 'NS_PRELOAD', 2000 );
define( 'NS_PRELOAD_TALK', 2001 );

$wgExtraNamespaces = [
	NS_PRELOAD => 'Preload',
	NS_PRELOAD_TALK => 'Preload_talk',
];

$wgNamespaceAliases = [
	'U' => NS_USER,
	'A' => NS_PROJECT,
	'H' => NS_HELP,
	'C' => NS_CATEGORY,
];

$wgNamespacesWithSubpages = [
	NS_MAIN => true,
	NS_TALK => true,
	NS_USER => true,
	NS_USER_TALK => true,
	NS_PROJECT => true,
	NS_PROJECT_TALK => true,
	NS_FILE_TALK => true,
	NS_MEDIAWIKI => true,
	NS_MEDIAWIKI_TALK => true,
	NS_TEMPLATE => true,
	NS_TEMPLATE_TALK => true,
	NS_HELP => true,
	NS_HELP_TALK => true,
	NS_CATEGORY_TALK => true,
	274 => true, // Widget namespace
];

$wgNamespacesToBeSearchedDefault = [
	NS_MAIN => true,
	NS_USER => true,
	NS_TEMPLATE => true,
	NS_PROJECT => true,
	NS_HELP => true,
	NS_CATEGORY => true,
];

$wgSitemapNamespaces = [
	NS_MAIN,
	NS_USER,
	NS_FILE,
	NS_PROJECT,
	NS_CATEGORY,
];

$wgExtraSignatureNamespaces = [
	NS_PROJECT,
];

#############
#   SKINS   #
#############

$wgVectorResponsive = true;
$wgVectorMaxWidthOptions['exclude']['mainpage'] = false;

$wgDefaultUserOptions['vector-main-menu-pinned'] = 0;
$wgDefaultUserOptions['vector-page-tools-pinned'] = 0;
$wgDefaultUserOptions['vector-appearance-pinned'] = 0;

##################
#   EXTENSIONS   #
##################

/**
 * Extensions in this section are developed by the Wikimedia Foundation and enabled in Wikipedia or other Wikimedia sites
 * so their future is probably assured
 */

wfLoadExtension( 'WikiEditor' );

wfLoadExtension( 'CodeEditor' );

wfLoadExtension( 'CategoryTree' );

wfLoadExtension( 'Cite' );

wfLoadExtension( 'Echo' );

wfLoadExtension( 'Nuke' );

wfLoadExtension( 'TemplateSandbox' );

wfLoadExtension( 'SandboxLink' );

wfLoadExtension( 'Quiz' );

wfLoadExtension( 'Math' );

wfLoadExtension( 'MultimediaViewer' );

wfLoadExtension( 'SyntaxHighlight_GeSHi' );

wfLoadExtension( 'Linter' );

wfLoadExtension( 'ImageMap' );

wfLoadExtension( 'InputBox' );

wfLoadExtension( 'PdfHandler' );

wfLoadExtension( 'cldr' );

wfLoadExtension( 'TemplateData' );

wfLoadExtension( 'TextExtracts' );

wfLoadExtension( 'Gadgets' );

wfLoadExtension( 'Elastica' );

wfLoadExtension( 'CirrusSearch' );
$wgSearchType = 'CirrusSearch';
$wgCirrusSearchExtraFieldsInSearchResults = [ 'category', 'heading' ];

wfLoadExtension( 'CheckUser' );
$wgGroupPermissions['sysop']['checkuser'] = true;
$wgGroupPermissions['sysop']['checkuser-log'] = true;
$wgGroupPermissions['sysop']['investigate'] = true;

wfLoadExtension( 'UniversalLanguageSelector' );
$wgULSLanguageDetection = false; // Important for our caching strategy

wfLoadExtension( 'PageImages' );
$wgPageImagesNamespaces[] = NS_USER;
$wgPageImagesExpandOpenSearchXml = true;

wfLoadExtension( 'Popups' );
$wgPopupsOptInDefaultState = '1';
$wgPopupsHideOptInOnPreferencesPage = true;
$wgPopupsReferencePreviewsBetaFeature = false;

wfLoadExtension( 'DiscussionTools' );
$wgFragmentMode = [ 'html5' ];
$wgLocaltimezone = 'UTC';

wfLoadExtension( 'Interwiki' );
$wgGroupPermissions['sysop']['interwiki'] = true;

wfLoadExtension( 'ParserFunctions' );
$wgPFEnableStringFunctions = true;

wfLoadExtension( 'CodeMirror' );
$wgDefaultUserOptions['usecodemirror'] = 1;
$wgCodeMirrorLineNumberingNamespaces = [];

wfLoadExtension( 'Scribunto' );
$wgScribuntoDefaultEngine = 'luastandalone';

wfLoadExtension( 'Thanks' );
$wgThanksConfirmationRequired = false;

wfLoadExtension( 'VisualEditor' );
$wgVisualEditorAvailableNamespaces = [
	'User' => true,
	'File' => true,
	'Help' => true,
	'Project' => true,
	'Preload' => true,
	'Category' => true,
	'_merge_strategy' => 'array_plus'
];
$wgUploadDialog = [
	'fields' => [ 'description' => true, 'date' => false, 'categories' => false ],
	'licensemessages' => [ 'local' => 'generic-local', 'foreign' => 'generic-foreign' ],
	'comment' => [ 'local' => '', 'foreign' => '' ],
	'format' => [ 'description' => '$TEXT', 'ownwork' => 'Own work', 'license' => 'CC-BY-SA-4.0', 'uncategorized' => '', 'filepage' => '$DESCRIPTION

{{File data
| date = $DATE
| author = $AUTHOR
| source = $SOURCE
| license = $LICENSE
}}

$CATEGORIES' ]
];

wfLoadExtension( 'UploadWizard' );
$wgUploadNavigationUrl = '/Special:UploadWizard';
$wgUploadWizardConfig = [
	'tutorial' => [ 'skip' => true ],
	'alternativeUploadToolsPage' => false,
	'allCategoriesLink' => "$wgServer/Category:Files",
	'enableCategoryCheck' => false,
    'licensing' => [ 'ownWork' => [ 'licenses' => [ 'cc-by-sa-4.0', 'cc-by-4.0', 'cc-zero', 'gfdl' ] ] ]
];

/**
 * Extensions in this section are developed by the Appropedia Foundation
 * so their future depends on us
 */

wfLoadExtension( 'Appropedia' );

wfLoadExtension( 'SearchThumbs' );

wfLoadExtension( 'SearchParserFunction' );

wfLoadExtension( 'SemanticRESTAPI' );

wfLoadExtension( 'InterwikiExtracts' );

wfLoadExtension( 'Analytics' );
$wgAnalyticsCountPageViews = false;

wfLoadExtension( 'CloudflarePurge' );
$wgCloudflarePurgeZoneID = 'bbb48448ccc5d7ec398a051f37e1f763';
$wgCloudflarePurgeToken = 'c1AFAr0bXAxViUkvYN8u7t08FtRGnd5VaIAzrm-3';

wfLoadExtension( 'StandardWikitext' );
$wgStandardWikitextNamespaces = [ NS_MAIN, NS_PROJECT ];

wfLoadExtension( 'PageAuthors' );
$wgPageAuthorsMinBytesPerAuthor = 500;
$wgPageAuthorsIgnoreSummaryPatterns[] = '/Normalize.*/';
$wgPageAuthorsIgnoreUsers = [ 'Sophivorus', 'Emilio', 'PedroK', 'Irene92', 'Kathy Nativi' ];

wfLoadExtension( 'CategoryLockdown' );
$wgGroupPermissions['tolocar'] = $wgGroupPermissions['user'];
$wgGroupPermissions['medicalmakers'] = $wgGroupPermissions['user'];
$wgCategoryLockdown['Medical Makers Private']['read'] = 'medicalmakers';
$wgCategoryLockdown['Appropedia private']['read'] = 'sysop';
//$wgCategoryLockdown['Tolocar Private']['read'] = 'tolocar';
//$wgCategoryLockdown['Tibial Fracture Fixation']['edit'] = 'sysop';
//$wgCategoryLockdown['CrashSavers']['edit'] = 'sysop';
//$wgCategoryLockdown['AmoSmile']['edit'] = 'sysop';
//$wgCategoryLockdown['ALL SAFE']['edit'] = 'sysop';

//wfLoadExtension( 'WikiVideos' );
$wgGoogleCloudCredentials = '/home/appropedia/google-cloud-credentials.json';
$wgFFmpegLocation = '/home/appropedia/ffmpeg/ffmpeg';
$wgFFprobeLocation = '/home/appropedia/ffmpeg/ffprobe';

wfLoadExtension( 'ReadAloud' );
$wgReadAloudNamespaces = [ NS_MAIN, NS_PROJECT, NS_HELP ];
$wgReadAloudNearEdit = false;

wfLoadExtension( 'GoogleTranslate' );
$wgGoogleTranslateSave = true;
$wgGoogleTranslateSaveTitle = true;
$wgGoogleTranslateSaveNotice = "Automatic translation notice";
$wgGoogleTranslateSubpageLanguage = true;
$wgGoogleTranslateNamespaces = [ NS_MAIN, NS_PROJECT ];

wfLoadExtension( 'HTMLPurifier' );
$safeIframeRegexps = [
	'www\.youtube\.com/embed/',
	'player\.vimeo\.com/video/',
	'docs\.google\.com/forms/',
	'www\.civics\.cc/',
	'embed\.kumu\.io/',
	'map\.internetofproduction\.org/',
	'w\.soundcloud\.com/player/'
];
$wgHTMLPurifierConfig = [
	'Cache.SerializerPath' => $wgCacheDirectory,
	'Attr.EnableID' => true,
	'CSS.Trusted' => true,
	'Filter.ExtractStyleBlocks' => true,
	'Filter.ExtractStyleBlocks.TidyImpl' => false,
	'HTML.TargetBlank' => true,
	'HTML.SafeIframe' => true,
	'URI.SafeIframeRegexp' => '%^https?://(' . implode( '|', $safeIframeRegexps ) . ')%',
];
// Allow <figure>, <figcaption> and <video> tags
$wgHooks['HTMLPurifierBeforePurify'][] = function ( &$config ) {
	$def = $config->getHTMLDefinition( true );
    $def->addElement( 'figure', 'Block', 'Flow', 'Common', [ 'typeof' => 'Text' ] );
	$def->addElement( 'figcaption', 'Block', 'Flow', 'Common' );
	$def->addElement( 'video', 'Block', 'Flow', 'Common', [ 'src' => 'URI', 'width' => 'Length', 'height' => 'Length', 'controls' => 'Bool' ] );
};
// Reintroduce <style> tags of Extension:TemplateStyles
$wgHooks['HTMLPurifierAfterPurify'][] = function ( &$html, $purifier ) {
	$styles = $purifier->context->get( 'StyleBlocks' );
	foreach ( $styles as $style ) {
		$html .= "<style>$style</style>";
	}
};

/**
 * Extensions in this section are developed by neither the Wikimedia Foundation nor the Appropedia Foundation
 * so their future is uncertain and we should try to limit our dependence on them
 */

wfLoadExtension( 'QRLite' );

wfLoadExtension( 'UseResource' );

wfLoadExtension( 'QuickInstantCommons' );

wfLoadExtension( 'MyVariables' );

wfLoadExtension( 'Widgets' );

wfLoadExtension( 'PageLanguage' );

wfLoadExtension( 'ExternalData' );

wfLoadExtension( 'TemplateStyles' );

wfLoadExtension( 'NumberFormat' );

wfLoadExtension( 'NoTitle' );

wfLoadExtension( 'RottenLinks' );

wfLoadExtension( 'SemanticResultFormats' );

wfLoadExtension( 'Maps' );
$egMapsDefaultService = 'leaflet';

wfLoadExtension( 'EditAccount' );
$wgGroupPermissions['sysop']['editaccount'] = true;

wfLoadExtension( 'ReplaceText' );
$wgReplaceTextResultsLimit = 1000;
$wgGroupPermissions['sysop']['replacetext'] = true;

wfLoadExtension( 'UserMerge' );
$wgGroupPermissions['bureaucrat']['usermerge'] = true;

wfLoadExtension( 'CookieWarning' );
$wgCookieWarningEnabled = true;

wfLoadExtension( 'GoogleTagManager' );
$wgGoogleTagManagerContainerID = 'GTM-TL6R9GR';
$wgGoogleTagManagerSkipGroups = [ 'sysop' ];

wfLoadExtension( 'SemanticMediaWiki' );
$smwgNamespaceIndex = 104; // Must be BEFORE enableSemantics
enableSemantics( 'appropedia.org' );
$smwgEnabledEditPageHelp = false;
$smwgQMaxInlineLimit = 10000;
$smwgQDefaultLimit = 10000;
$smwgQueryProfiler = false; // Disable query profiling because it adds 500,000+ values to the database and we don't really use it
$wgDefaultUserOptions['smw-prefs-general-options-show-entity-issue-panel'] = 0; // Disable the issue panel because it costs an extra API request per page view
$wgFooterIcons['poweredby']['semanticmediawiki'] = false;

