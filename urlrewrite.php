<?
$arUrlRewrite = array(
    array(
        "CONDITION"	=>	"#^/posts/([\\w-]+)([/\\?].*)#",
        "RULE"	=>	"CODE=\$1",
        "ID"	=>	"bitrix:news.detail",
        "PATH"	=>	"/posts/detail.php",
    ),
);

?>