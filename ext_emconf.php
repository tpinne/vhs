<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "vhs".
 *
 * Auto generated 02-12-2012 19:22
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array(
	'title' => 'VHS: Fluid ViewHelpers',
	'description' => 'A collection of ViewHelpers to perform rendering tasks which are not natively supported by Fluid - for example: advanced formatters, math calculators, specialized conditions and Iterator/Array calculators and processors',
	'category' => 'misc',
	'author' => 'Claus Due',
	'author_email' => 'claus@wildside.dk',
	'author_company' => 'Wildside A/S',
	'shy' => '',
	'dependencies' => 'cms,extbase,fluid',
	'conflicts' => '',
	'priority' => '',
	'module' => '',
	'state' => 'stable',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'version' => '1.3.0',
	'constraints' => array(
		'depends' => array(
			'typo3' => '4.5-0.0.0',
			'cms' => '',
			'extbase' => '',
			'fluid' => '',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'suggests' => array(
	),
	'_md5_values_when_last_written' => 'a:108:{s:12:"ext_icon.gif";s:4:"68b4";s:9:"README.md";s:4:"835c";s:38:"Classes/ViewHelpers/CaseViewHelper.php";s:4:"49eb";s:43:"Classes/ViewHelpers/ConditionViewHelper.php";s:4:"1d0a";s:40:"Classes/ViewHelpers/SwitchViewHelper.php";s:4:"47d0";s:69:"Classes/ViewHelpers/Condition/AbstractClientInformationViewHelper.php";s:4:"1605";s:51:"Classes/ViewHelpers/Condition/BackendViewHelper.php";s:4:"4b91";s:51:"Classes/ViewHelpers/Condition/BrowserViewHelper.php";s:4:"f87f";s:47:"Classes/ViewHelpers/Condition/CliViewHelper.php";s:4:"cf8e";s:50:"Classes/ViewHelpers/Condition/ExtendViewHelper.php";s:4:"3b8d";s:52:"Classes/ViewHelpers/Condition/FrontendViewHelper.php";s:4:"109f";s:50:"Classes/ViewHelpers/Condition/SystemViewHelper.php";s:4:"9079";s:61:"Classes/ViewHelpers/Extension/AbstractExtensionViewHelper.php";s:4:"ff80";s:48:"Classes/ViewHelpers/Extension/IconViewHelper.php";s:4:"11df";s:50:"Classes/ViewHelpers/Extension/LoadedViewHelper.php";s:4:"45cb";s:57:"Classes/ViewHelpers/Extension/Path/AbsoluteViewHelper.php";s:4:"bcfa";s:57:"Classes/ViewHelpers/Extension/Path/RelativeViewHelper.php";s:4:"a67b";s:58:"Classes/ViewHelpers/Extension/Path/ResourcesViewHelper.php";s:4:"59ab";s:61:"Classes/ViewHelpers/Extension/Path/SiteRelativeViewHelper.php";s:4:"42ad";s:47:"Classes/ViewHelpers/Form/RequiredViewHelper.php";s:4:"a1c0";s:45:"Classes/ViewHelpers/Form/SelectViewHelper.php";s:4:"2162";s:54:"Classes/ViewHelpers/Form/Select/OptgroupViewHelper.php";s:4:"7a5a";s:52:"Classes/ViewHelpers/Form/Select/OptionViewHelper.php";s:4:"7095";s:50:"Classes/ViewHelpers/Format/EliminateViewHelper.php";s:4:"6f1b";s:45:"Classes/ViewHelpers/Format/HideViewHelper.php";s:4:"41de";s:49:"Classes/ViewHelpers/Format/MarkdownViewHelper.php";s:4:"721b";s:50:"Classes/ViewHelpers/Format/PlaintextViewHelper.php";s:4:"b76f";s:48:"Classes/ViewHelpers/Format/ReplaceViewHelper.php";s:4:"f97d";s:50:"Classes/ViewHelpers/Format/SubstringViewHelper.php";s:4:"5d34";s:45:"Classes/ViewHelpers/Format/TidyViewHelper.php";s:4:"d74a";s:45:"Classes/ViewHelpers/Format/TrimViewHelper.php";s:4:"1a4e";s:48:"Classes/ViewHelpers/Format/UcfirstViewHelper.php";s:4:"b15f";s:58:"Classes/ViewHelpers/Format/Placeholder/ImageViewHelper.php";s:4:"d935";s:59:"Classes/ViewHelpers/Format/Placeholder/LipsumViewHelper.php";s:4:"f1ba";s:59:"Classes/ViewHelpers/Format/Url/SanitizeStringViewHelper.php";s:4:"41b2";s:59:"Classes/ViewHelpers/Iterator/AbstractIteratorViewHelper.php";s:4:"fd16";s:51:"Classes/ViewHelpers/Iterator/ContainsViewHelper.php";s:4:"2593";s:50:"Classes/ViewHelpers/Iterator/ExplodeViewHelper.php";s:4:"d3c5";s:48:"Classes/ViewHelpers/Iterator/FirstViewHelper.php";s:4:"5ed8";s:50:"Classes/ViewHelpers/Iterator/ImplodeViewHelper.php";s:4:"351f";s:50:"Classes/ViewHelpers/Iterator/IndexOfViewHelper.php";s:4:"1a41";s:47:"Classes/ViewHelpers/Iterator/LastViewHelper.php";s:4:"8f6b";s:47:"Classes/ViewHelpers/Iterator/LoopViewHelper.php";s:4:"ba71";s:47:"Classes/ViewHelpers/Iterator/NextViewHelper.php";s:4:"9559";s:51:"Classes/ViewHelpers/Iterator/PreviousViewHelper.php";s:4:"ddce";s:48:"Classes/ViewHelpers/Iterator/SliceViewHelper.php";s:4:"6d69";s:47:"Classes/ViewHelpers/Iterator/SortViewHelper.php";s:4:"6dc0";s:59:"Classes/ViewHelpers/Math/AbstractMultipleMathViewHelper.php";s:4:"e5ff";s:57:"Classes/ViewHelpers/Math/AbstractSingleMathViewHelper.php";s:4:"379e";s:46:"Classes/ViewHelpers/Math/AverageViewHelper.php";s:4:"ebe0";s:43:"Classes/ViewHelpers/Math/CeilViewHelper.php";s:4:"af0b";s:43:"Classes/ViewHelpers/Math/CubeViewHelper.php";s:4:"4167";s:48:"Classes/ViewHelpers/Math/CubicRootViewHelper.php";s:4:"c736";s:47:"Classes/ViewHelpers/Math/DivisionViewHelper.php";s:4:"a960";s:44:"Classes/ViewHelpers/Math/FloorViewHelper.php";s:4:"1643";s:46:"Classes/ViewHelpers/Math/MaximumViewHelper.php";s:4:"7cd0";s:45:"Classes/ViewHelpers/Math/MedianViewHelper.php";s:4:"4990";s:46:"Classes/ViewHelpers/Math/MinimumViewHelper.php";s:4:"35cf";s:45:"Classes/ViewHelpers/Math/ModuloViewHelper.php";s:4:"1966";s:44:"Classes/ViewHelpers/Math/PowerViewHelper.php";s:4:"5b32";s:46:"Classes/ViewHelpers/Math/ProductViewHelper.php";s:4:"76a4";s:44:"Classes/ViewHelpers/Math/RangeViewHelper.php";s:4:"93b6";s:44:"Classes/ViewHelpers/Math/RoundViewHelper.php";s:4:"19a3";s:49:"Classes/ViewHelpers/Math/SquareRootViewHelper.php";s:4:"4452";s:45:"Classes/ViewHelpers/Math/SquareViewHelper.php";s:4:"64a2";s:47:"Classes/ViewHelpers/Math/SubtractViewHelper.php";s:4:"e4b5";s:42:"Classes/ViewHelpers/Math/SumViewHelper.php";s:4:"5ffd";s:46:"Classes/ViewHelpers/Media/ExistsViewHelper.php";s:4:"a9af";s:51:"Classes/ViewHelpers/Once/AbstractOnceViewHelper.php";s:4:"9956";s:45:"Classes/ViewHelpers/Once/CookieViewHelper.php";s:4:"b710";s:47:"Classes/ViewHelpers/Once/InstanceViewHelper.php";s:4:"973a";s:46:"Classes/ViewHelpers/Once/SessionViewHelper.php";s:4:"1984";s:47:"Classes/ViewHelpers/Once/StandardViewHelper.php";s:4:"14e2";s:50:"Classes/ViewHelpers/Page/AbsoluteUrlViewHelper.php";s:4:"698a";s:51:"Classes/ViewHelpers/Page/AbstractMenuViewHelper.php";s:4:"13a2";s:57:"Classes/ViewHelpers/Page/AbstractRelocationViewHelper.php";s:4:"769b";s:49:"Classes/ViewHelpers/Page/BreadCrumbViewHelper.php";s:4:"4171";s:45:"Classes/ViewHelpers/Page/FooterViewHelper.php";s:4:"f473";s:45:"Classes/ViewHelpers/Page/HeaderViewHelper.php";s:4:"5b47";s:51:"Classes/ViewHelpers/Page/LanguageMenuViewHelper.php";s:4:"e2a3";s:43:"Classes/ViewHelpers/Page/MenuViewHelper.php";s:4:"02f0";s:46:"Classes/ViewHelpers/Page/SiteUrlViewHelper.php";s:4:"3176";s:53:"Classes/ViewHelpers/Page/Content/FooterViewHelper.php";s:4:"7ca1";s:50:"Classes/ViewHelpers/Page/Content/GetViewHelper.php";s:4:"400c";s:53:"Classes/ViewHelpers/Page/Content/RenderViewHelper.php";s:4:"d8c2";s:50:"Classes/ViewHelpers/Page/Header/LinkViewHelper.php";s:4:"015d";s:50:"Classes/ViewHelpers/Page/Header/MetaViewHelper.php";s:4:"7af1";s:51:"Classes/ViewHelpers/Page/Header/TitleViewHelper.php";s:4:"a9e8";s:47:"Classes/ViewHelpers/Random/NumberViewHelper.php";s:4:"1f00";s:47:"Classes/ViewHelpers/Random/StringViewHelper.php";s:4:"c500";s:55:"Classes/ViewHelpers/Render/AbstractRenderViewHelper.php";s:4:"7815";s:46:"Classes/ViewHelpers/Render/CacheViewHelper.php";s:4:"788e";s:47:"Classes/ViewHelpers/Render/InlineViewHelper.php";s:4:"8cd7";s:48:"Classes/ViewHelpers/Render/RequestViewHelper.php";s:4:"6804";s:49:"Classes/ViewHelpers/Render/TemplateViewHelper.php";s:4:"38a2";s:59:"Classes/ViewHelpers/Security/AbstractSecurityViewHelper.php";s:4:"a7e3";s:48:"Classes/ViewHelpers/Security/AllowViewHelper.php";s:4:"3985";s:47:"Classes/ViewHelpers/Security/DenyViewHelper.php";s:4:"9545";s:43:"Classes/ViewHelpers/Site/NameViewHelper.php";s:4:"7448";s:42:"Classes/ViewHelpers/Site/UrlViewHelper.php";s:4:"512a";s:41:"Classes/ViewHelpers/Var/GetViewHelper.php";s:4:"7c44";s:43:"Classes/ViewHelpers/Var/IssetViewHelper.php";s:4:"2db1";s:41:"Classes/ViewHelpers/Var/SetViewHelper.php";s:4:"e944";s:48:"Classes/ViewHelpers/Var/TyposcriptViewHelper.php";s:4:"b6e0";s:43:"Classes/ViewHelpers/Var/UnsetViewHelper.php";s:4:"e594";s:76:"Tests/Unit/ViewHelpers/Condition/AbstractClientInformationViewHelperTest.php";s:4:"b610";s:58:"Tests/Unit/ViewHelpers/Condition/BrowserViewHelperTest.php";s:4:"27cc";s:57:"Tests/Unit/ViewHelpers/Condition/SystemViewHelperTest.php";s:4:"bd34";}',
);

?>