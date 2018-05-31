<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
		<header>
				<h1>Отзыв - <?=$arResult["NAME"]?> - <?=$arResult["PROPERTIES"]["COMPANY"]["VALUE"]?></h1>
		</header>
		<hr>
<div class="review-block">
<div class="review-text">
<div class="review-text-cont"><?=$arResult["DETAIL_TEXT"]?></div>
<div class="review-autor">
<?=$arResult["NAME"]?>, <?=$arResult["DISPLAY_ACTIVE_FROM"]?>, <?=$arResult["PROPERTIES"]["POSITION"]["VALUE"]?>, <?=$arResult["PROPERTIES"]["COMPANY"]["VALUE"]?>.
</div>
</div>
<div style="clear: both;" class="review-img-wrap">
	<img src="	<?if ($arResult["DETAIL_PICTURE"]):?><?=$arResult["DETAIL_PICTURE"]["SRC"]?>"<?else:?><?=SITE_TEMPLATE_PATH."/img/no_photo.jpg"?><?endif;?>"
	 alt="img"></div>
</div>
<?$arCount = count($arResult["PROPERTIES"]["DOCUMENTS"]["VALUE"])?>
<?if ($arResult["PROPERTIES"]["DOCUMENTS"]["VALUE"]):?>
<div class="exam-review-doc">
<p>Документы:</p>

<?for($i= 0; $i < $arCount; $i++):?>
	<div class="exam-review-item-doc"><img class="rew-doc-ico" src="<?=SITE_TEMPLATE_PATH?>/img/icons/pdf_ico_40.png"><a href="<?=CFile::GetPath($arResult["PROPERTIES"]["DOCUMENTS"]["VALUE"][$i])?>">Файл <?=$i + 1?></a></div>
<?endfor;?>

</div>
<?endif;?>
<hr>
