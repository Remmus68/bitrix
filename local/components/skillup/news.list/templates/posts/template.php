<?php
//var_dump($arResult);
?>
<div class="container">
    <div class="row">

        <? foreach ($arResult as $aPost): ?>

            <div class="col-5">
                <div>
                    <?= $aPost['NAME'] ?>
                </div>
                <div>
                    &hearts;<?= $aPost['PROPERTY_LIKES_VALUE'] ?>
                </div>
                <div>
                    <span>Описание:</span><?= $aPost['DETAIL_TEXT'] ?>
                </div>
                <a href=" <?=$aPost['DETAIL_PAGE_URL']?>">Детальная</a>
            </div>

        <? endforeach; ?>

    </div>
</div>
