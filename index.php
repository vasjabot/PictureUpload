<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Title");


$path_to_prev = getPathToPrevPicBySymbolCode("warranty", "articles", "news");
$path_to_det = getPathToDetailPicBySymbolCode("warranty", "articles", "news");

$id_prev = getIdPrevPicBySymbolCode("warranty", "articles", "news");
$id_det = getIdDetailPicBySymbolCode("warranty", "articles", "news");




print_r($path_to_prev);
echo nl2br("\r\n");
print_r($path_to_det);
echo nl2br("\r\n");

print_r($id_prev);
echo nl2br("\r\n");
print_r($id_det);
echo nl2br("\r\n");


if($USER->GetID()==9349)
{
	print_r('userId == 9349');
?>

<form method = "post" enctype = 'multipart/form-data'>
<?echo CFile::InputFile("IMAGE_ID", 20, $id_det);?>
<input type="submit" value="���������">
</form>
<?
	//print_r(strlen($str_IMAGE_ID));
	//print_r($str_IMAGE_ID);

	if (strlen($str_IMAGE_ID)>0)
	{
		print_r(strlen($str_IMAGE_ID));
        ?><br><?echo CFile::ShowImage($str_IMAGE_ID, 200, 200, "border=0", "", true);
	}


}



?><?$APPLICATION->IncludeComponent(
	"bitrix:catalog", 
	"articles", 
	array(
		"ACTION_VARIABLE" => "action",
		"ADD_ELEMENT_CHAIN" => "Y",
		"ADD_PICT_PROP" => "-",
		"ADD_PROPERTIES_TO_BASKET" => "N",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "N",
		"BASKET_URL" => "",
		"BIG_DATA_RCM_TYPE" => "bestsell",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000",
		"CACHE_TYPE" => "N",
		"COMMON_ADD_TO_BASKET_ACTION" => "ADD",
		"COMMON_SHOW_CLOSE_POPUP" => "N",
		"COMPATIBLE_MODE" => "Y",
		"CONVERT_CURRENCY" => "N",
		"DETAIL_ADD_DETAIL_TO_SLIDER" => "N",
		"DETAIL_ADD_TO_BASKET_ACTION" => array(
			0 => "BUY",
		),
		"DETAIL_ADD_TO_BASKET_ACTION_PRIMARY" => array(
			0 => "BUY",
		),
		"DETAIL_BACKGROUND_IMAGE" => "-",
		"DETAIL_BLOG_EMAIL_NOTIFY" => "Y",
		"DETAIL_BLOG_URL" => "articles_comments",
		"DETAIL_BLOG_USE" => "Y",
		"DETAIL_BROWSER_TITLE" => "-",
		"DETAIL_CHECK_SECTION_ID_VARIABLE" => "N",
		"DETAIL_DETAIL_PICTURE_MODE" => array(
		),
		"DETAIL_DISPLAY_NAME" => "Y",
		"DETAIL_DISPLAY_PREVIEW_TEXT_MODE" => "E",
		"DETAIL_FB_USE" => "N",
		"DETAIL_IMAGE_RESOLUTION" => "1by1",
		"DETAIL_MAIN_BLOCK_PROPERTY_CODE" => array(
		),
		"DETAIL_META_DESCRIPTION" => "-",
		"DETAIL_META_KEYWORDS" => "-",
		"DETAIL_PRODUCT_INFO_BLOCK_ORDER" => "sku,props",
		"DETAIL_PRODUCT_PAY_BLOCK_ORDER" => "rating,price,priceRanges,quantityLimit,quantity,buttons",
		"DETAIL_PROPERTY_CODE" => array(
			0 => "TITLE_H2",
			1 => "",
		),
		"DETAIL_SET_CANONICAL_URL" => "N",
		"DETAIL_SET_VIEWED_IN_COMPONENT" => "N",
		"DETAIL_SHOW_MAX_QUANTITY" => "N",
		"DETAIL_SHOW_SLIDER" => "N",
		"DETAIL_STRICT_SECTION_CHECK" => "Y",
		"DETAIL_USE_COMMENTS" => "Y",
		"DETAIL_USE_VOTE_RATING" => "Y",
		"DETAIL_VK_USE" => "N",
		"DETAIL_VOTE_DISPLAY_AS_RATING" => "vote_avg",
		"DISABLE_INIT_JS_IN_COMPONENT" => "N",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DETAIL_IMG_HEIGHT" => "280",
		"DISPLAY_DETAIL_IMG_WIDTH" => "280",
		"DISPLAY_IMG_HEIGHT" => "225",
		"DISPLAY_IMG_WIDTH" => "180",
		"DISPLAY_MORE_PHOTO_HEIGHT" => "280",
		"DISPLAY_MORE_PHOTO_WIDTH" => "280",
		"DISPLAY_TOP_PAGER" => "N",
		"ELEMENT_SORT_FIELD" => "sort",
		"ELEMENT_SORT_FIELD2" => "id",
		"ELEMENT_SORT_ORDER" => "asc",
		"ELEMENT_SORT_ORDER2" => "desc",
		"FILE_404" => "",
		"FILTER_VIEW_MODE" => "VERTICAL",
		"GIFTS_DETAIL_BLOCK_TITLE" => "�������� ���� �� ��������",
		"GIFTS_DETAIL_HIDE_BLOCK_TITLE" => "N",
		"GIFTS_DETAIL_PAGE_ELEMENT_COUNT" => "4",
		"GIFTS_DETAIL_TEXT_LABEL_GIFT" => "�������",
		"GIFTS_MAIN_PRODUCT_DETAIL_BLOCK_TITLE" => "�������� ���� �� �������, ����� �������� �������",
		"GIFTS_MAIN_PRODUCT_DETAIL_HIDE_BLOCK_TITLE" => "N",
		"GIFTS_MAIN_PRODUCT_DETAIL_PAGE_ELEMENT_COUNT" => "4",
		"GIFTS_MESS_BTN_BUY" => "�������",
		"GIFTS_SECTION_LIST_BLOCK_TITLE" => "������� � ������� ����� �������",
		"GIFTS_SECTION_LIST_HIDE_BLOCK_TITLE" => "N",
		"GIFTS_SECTION_LIST_PAGE_ELEMENT_COUNT" => "4",
		"GIFTS_SECTION_LIST_TEXT_LABEL_GIFT" => "�������",
		"GIFTS_SHOW_DISCOUNT_PERCENT" => "Y",
		"GIFTS_SHOW_IMAGE" => "Y",
		"GIFTS_SHOW_NAME" => "Y",
		"GIFTS_SHOW_OLD_PRICE" => "Y",
		"GROUPS_OF_PROP_IBLOCK_ID" => "",
		"GROUPS_OF_PROP_IBLOCK_TYPE" => "news",
		"HIDE_NOT_AVAILABLE" => "N",
		"HIDE_NOT_AVAILABLE_OFFERS" => "N",
		"IBLOCK_ID" => "18",
		"IBLOCK_TYPE" => "news",
		"INCLUDE_SUBSECTIONS" => "N",
		"INSTANT_RELOAD" => "N",
		"LABEL_PROP" => array(
		),
		"LABEL_PROP_MOBILE" => "",
		"LABEL_PROP_POSITION" => "top-left",
		"LAZY_LOAD" => "N",
		"LINE_ELEMENT_COUNT" => "3",
		"LINK_ELEMENTS_URL" => "",
		"LINK_IBLOCK_ID" => "",
		"LINK_IBLOCK_TYPE" => "",
		"LINK_PROPERTY_SID" => "",
		"LIST_BROWSER_TITLE" => "-",
		"LIST_ENLARGE_PRODUCT" => "PROP",
		"LIST_ENLARGE_PROP" => "-",
		"LIST_META_DESCRIPTION" => "-",
		"LIST_META_KEYWORDS" => "-",
		"LIST_PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons,compare",
		"LIST_PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'9','BIG_DATA':false},{'VARIANT':'9','BIG_DATA':false},{'VARIANT':'9','BIG_DATA':false},{'VARIANT':'9','BIG_DATA':false},{'VARIANT':'9','BIG_DATA':false},{'VARIANT':'9','BIG_DATA':false},{'VARIANT':'9','BIG_DATA':false},{'VARIANT':'9','BIG_DATA':false},{'VARIANT':'9','BIG_DATA':false},{'VARIANT':'9','BIG_DATA':false},{'VARIANT':'9','BIG_DATA':false},{'VARIANT':'9','BIG_DATA':false},{'VARIANT':'9','BIG_DATA':false},{'VARIANT':'9','BIG_DATA':false},{'VARIANT':'9','BIG_DATA':false},{'VARIANT':'9','BIG_DATA':false},{'VARIANT':'9','BIG_DATA':false},{'VARIANT':'9','BIG_DATA':false},{'VARIANT':'9','BIG_DATA':false},{'VARIANT':'9','BIG_DATA':false}]",
		"LIST_PROPERTY_CODE" => array(
			0 => "TITLE_H2",
			1 => "",
		),
		"LIST_PROPERTY_CODE_MOBILE" => array(
		),
		"LIST_SHOW_SLIDER" => "N",
		"LIST_SLIDER_INTERVAL" => "3000",
		"LIST_SLIDER_PROGRESS" => "N",
		"LOAD_ON_SCROLL" => "N",
		"MESSAGE_404" => "",
		"MESS_BTN_ADD_TO_BASKET" => "",
		"MESS_BTN_BUY" => "",
		"MESS_BTN_COMPARE" => "",
		"MESS_BTN_DETAIL" => "",
		"MESS_BTN_SUBSCRIBE" => "",
		"MESS_COMMENTS_TAB" => "�����������",
		"MESS_DESCRIPTION_TAB" => "��������",
		"MESS_NOT_AVAILABLE" => "",
		"MESS_PRICE_RANGES_TITLE" => "����",
		"MESS_PROPERTIES_TAB" => "��������������",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "������",
		"PAGE_ELEMENT_COUNT" => "20",
		"PARTIAL_PRODUCT_PROPERTIES" => "N",
		"PATH_TO_SHIPPING" => "#SITE_DIR#about/delivery/",
		"PRICE_CODE" => array(
		),
		"PRICE_VAT_INCLUDE" => "N",
		"PRICE_VAT_SHOW_VALUE" => "N",
		"PRODUCT_ID_VARIABLE" => "id",
		"PRODUCT_PROPERTIES" => array(
		),
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",
		"PRODUCT_SUBSCRIPTION" => "N",
		"SECTIONS_HIDE_SECTION_NAME" => "N",
		"SECTIONS_SHOW_PARENT_NAME" => "N",
		"SECTIONS_VIEW_MODE" => "LINE",
		"SECTION_ADD_TO_BASKET_ACTION" => "ADD",
		"SECTION_BACKGROUND_IMAGE" => "-",
		"SECTION_COUNT_ELEMENTS" => "N",
		"SECTION_ID_VARIABLE" => "SECTION_ID",
		"SECTION_TOP_DEPTH" => "1",
		"SEF_FOLDER" => "/",
		"SEF_MODE" => "Y",
		"SET_LAST_MODIFIED" => "Y",
		"SET_STATUS_404" => "Y",
		"SET_TITLE" => "Y",
		"SHARPEN" => "30",
		"SHOW_404" => "Y",
		"SHOW_DEACTIVATED" => "N",
		"SHOW_DISCOUNT_PERCENT" => "N",
		"SHOW_MAX_QUANTITY" => "N",
		"SHOW_OLD_PRICE" => "N",
		"SHOW_PRICE_COUNT" => "1",
		"SHOW_TOP_ELEMENTS" => "N",
		"SIDEBAR_DETAIL_SHOW" => "N",
		"SIDEBAR_PATH" => "",
		"SIDEBAR_SECTION_SHOW" => "N",
		"TEMPLATE_THEME" => "blue",
		"TOP_ADD_TO_BASKET_ACTION" => "ADD",
		"TOP_ELEMENT_COUNT" => "9",
		"TOP_ELEMENT_SORT_FIELD" => "sort",
		"TOP_ELEMENT_SORT_FIELD2" => "id",
		"TOP_ELEMENT_SORT_ORDER" => "asc",
		"TOP_ELEMENT_SORT_ORDER2" => "desc",
		"TOP_LINE_ELEMENT_COUNT" => "3",
		"TOP_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"USER_CONSENT" => "N",
		"USER_CONSENT_ID" => "0",
		"USER_CONSENT_IS_CHECKED" => "N",
		"USER_CONSENT_IS_LOADED" => "N",
		"USE_ALSO_BUY" => "N",
		"USE_BIG_DATA" => "N",
		"USE_COMMON_SETTINGS_BASKET_POPUP" => "N",
		"USE_COMPARE" => "N",
		"USE_ELEMENT_COUNTER" => "N",
		"USE_ENHANCED_ECOMMERCE" => "N",
		"USE_FILTER" => "N",
		"USE_GIFTS_DETAIL" => "N",
		"USE_GIFTS_MAIN_PR_SECTION_LIST" => "N",
		"USE_GIFTS_SECTION" => "N",
		"USE_MAIN_ELEMENT_SECTION" => "N",
		"USE_PRICE_COUNT" => "N",
		"USE_PRODUCT_QUANTITY" => "N",
		"USE_REVIEW" => "N",
		"USE_SALE_BESTSELLERS" => "N",
		"USE_STORE" => "N",
		"COMPONENT_TEMPLATE" => "articles",
		"SEF_URL_TEMPLATES" => array(
			"sections" => "",
			"section" => "#SECTION_CODE_PATH#/",
			"element" => "#SECTION_CODE_PATH#/#ELEMENT_CODE#/",
			"compare" => "",
			"smart_filter" => "",
		)
	),
	false
);
?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>