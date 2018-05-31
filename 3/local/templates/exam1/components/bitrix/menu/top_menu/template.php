<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if (!empty($arResult)):?>

<nav class="nav">
<div class="inner-wrap">
<div class="menu-block popup-wrap">
<a href="" class="btn-menu btn-toggle"></a>
<div class="menu popup-block">
<ul class="">

<?
$previousLevel = 0;
$curLi = 0;
foreach($arResult as $arItem):?>
<?$curLi++?>
	<?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
		<?=str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
	<?endif?>

	<?if ($arItem["IS_PARENT"]):?>

		<?if ($arItem["DEPTH_LEVEL"] == 1):?>

			<li <?if ($curLi == 1) echo 'class = "main-page"'?>><a <?if (isset($arItem["PARAMS"]["text_color"])):?>class="<?=$arItem["PARAMS"]["text_color"]?>"<?endif;?> href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
				<ul>
		<?else:?>

			<li <?if ($curLi == 1) echo 'class = "main-page"'?>><a <?if (isset($arItem["PARAMS"]["text_color"])):?>class="<?=$arItem["PARAMS"]["text_color"]?>"<?endif;?> href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
				<ul>
		<?endif?>

				<?if (isset($arItem["PARAMS"]["menu_text"])):?>
					<div class="menu-text"><?=$arItem["PARAMS"]["menu_text"]?>	</div>
				<?endif;?>

	<?else:?>

		<?if ($arItem["PERMISSION"] > "D"):?>

			<?if ($arItem["DEPTH_LEVEL"] == 1):?>
				<li <?if ($curLi == 1) echo 'class = "main-page"'?>><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
			<?else:?>
				<li <?if ($curLi == 1) echo 'class = "main-page"'?>><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
			<?endif?>

		<?endif?>

	<?endif?>

	<?$previousLevel = $arItem["DEPTH_LEVEL"];?>

<?endforeach?>

<?if ($previousLevel > 1)://close last item tags?>
	<?=str_repeat("</ul></li>", ($previousLevel-1) );?>
<?endif?>

</ul>
<div class="menu-clear-left"></div>
<?endif?>

<a href="" class="btn-close"></a>
</div>
<div class="menu-overlay"></div>
</div>
</div>
</nav>
