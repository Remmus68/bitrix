<?php

$aSize = [
    'width' => 200,
    'height' => 200,
];

foreach ($arResult['ITEMS'] as &$aItem) {
    processPosts($aItem, $aSize);
}

function processPosts(&$aPost, $aSize) {
    $aPicture = \CFile::ResizeImageGet($aPost['DETAIL_PICTURE'], $aSize, BX_RESIZE_IMAGE_EXACT, true);
    $aPost['DETAIL_PICTURE'] = $aPicture;

    $iAuthorId = $aPost['DISPLAY_PROPERTIES']['AUTHOR']['VALUE'];
    $aPost['AUTHOR'] = $aPost['DISPLAY_PROPERTIES']['AUTHOR']['LINK_ELEMENT_VALUE'][$iAuthorId]['NAME'];
}

