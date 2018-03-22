<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<?$APPLICATION->ShowHead();?>
<link href="<?=SITE_TEMPLATE_PATH?>/common.css" type="text/css" rel="stylesheet" />
<link href="<?=SITE_TEMPLATE_PATH?>/colors.css" type="text/css" rel="stylesheet" />

	<title><?$APPLICATION->ShowTitle()?></title>
</head>
<body>
	<div id="page-wrapper">
	<div id="panel"><?$APPLICATION->ShowPanel();?></div>

    <? $APPLICATION->IncludeComponent(
        "bitrix:menu",
        "",
        [
            "ROOT_MENU_TYPE" => "top",
            "MAX_LEVEL" => "1",
            "CHILD_MENU_TYPE" => "top",
            "USE_EXT" => "Y",
            "DELAY" => "N",
            "ALLOW_MULTI_SELECT" => "Y",
            "MENU_CACHE_TYPE" => "N",
            "MENU_CACHE_TIME" => "3600",
            "MENU_CACHE_USE_GROUPS" => "Y",
            "MENU_CACHE_GET_VARS" => ""
        ]

    );?>

        <div class="container">
            <div class="header">
                <div id="logotip">
                    <a href="../skillup/posts.php">
                        <img src="image/logo.png" />
                    </a>
                </div>
                <div class="navigator">
                    <ul>
                        <li><a href="#">Лента</a></li>
                        <li><a href="#">Добавить запись</a></li>
                        <li><a href="#">О проекте</a></li>
                    </ul>
                    <form id="search">
                        <input type="text" name="request" placeholder="Поиск...">
                        <input type="submit" value="">
                    </form>
                </div>
            </div>