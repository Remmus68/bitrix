<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?

//var_dump($arResult['ITEMS'][0]['FIELD_CODE']);

?>

<div class="container">
    <div class="row">

        <? foreach ($arResult['ITEMS'] as $aItem): ?>

        <span class="col-sm">
            <div>
                <?
                $iAuthorId = $aItem['DISPLAY_PROPERTIES']['AUTHOR']['VALUE'];
                ?>
                <img src="<?= $arResult['PICTURES'][$aItem['ID']]['src'] ?>">
                <div><?= $aItem['DISPLAY_PROPERTIES']['AUTHOR']['LINK_ELEMENT_VALUE'][$iAuthorId]['NAME'] ?></div>
            </div>
        </span>

        <? endforeach; ?>

    </div>
</div>