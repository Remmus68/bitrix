<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

class Posts extends  CBitrixComponent {
    public function  executeComponent()
    {
        $this->arParams['TEST'] = 'add param';

        $aFilter = [
            'IBLOCK_ID' => 5,
            'ACTIVE' => 'Y',
        ];

        $aSelect = [
            'ID',
            'CODE',
            'NAME',
            'DETAIL_PICTURE',
            'DETAIL_TEXT',
            'PROPERTY_LIKE',
        ];

        $oPosts = \CIBlockElement::GetList([], $aFilter, false, false, $aSelect);

        $aPosts = [];

        while ($aPost = $oPosts->Fetch()) {
            $aPosts[] = $aPost;
        }

        $this->arResult = $aPosts;
        $this->IncludeComponentTemplate();
    }
}
