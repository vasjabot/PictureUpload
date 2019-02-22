<?
require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog.php");


function getArrByTypeIblock($TypeIblock)
{
	$rsIBlockList = GetIBlockList($TypeIblock);
    $temp_arr = array();
    while($arIBlock = $rsIBlockList->GetNext())
    {
        if($arIBlock['CODE'] == $SymbolCodeIblock)
        {
            foreach($arIBlock as $key => $value)
            {
                $temp_arr[$key] = $value;
            }
        }
    }
	return $temp_arr;
}


function getArProps($SymbolCodeElement, $SymbolCodeIblock, $TypeIblock)
{
	$temp_arr = getArrByTypeIblock($TypeIblock);
    $rsElement = CIBlockElement::GetList(
                    array(),
                    array("CODE"=> $SymbolCodeElement, "IBLOCK_ID" => $temp_arr['IBLOCK_ID'] ),
                    false,
                    false,
                    array()
                      );
					$resArPROPS = array();
                    while($ar_props = $rsElement->Fetch())
                    {
						$resArPROPS = $ar_props;
                    }
    return $resArPROPS;
}




function getPathToPrevPicBySymbolCode($SymbolCodeElement, $SymbolCodeIblock, $TypeIblock)
{
	$resArPROPS = getArProps($SymbolCodeElement, $SymbolCodeIblock, $TypeIblock);
	$Path_to_prev_picture = CFile::GetPath($resArPROPS["PREVIEW_PICTURE"]);
    return $Path_to_prev_picture;
}


function getPathToDetailPicBySymbolCode($SymbolCodeElement, $SymbolCodeIblock, $TypeIblock)
{
	$resArPROPS = getArProps($SymbolCodeElement, $SymbolCodeIblock, $TypeIblock);
	$Path_to_detail_picture = CFile::GetPath($resArPROPS["DETAIL_PICTURE"]);
	return $Path_to_detail_picture;
}

function getIdDetailPicBySymbolCode($SymbolCodeElement, $SymbolCodeIblock, $TypeIblock)
{
	$resArPROPS = getArProps($SymbolCodeElement, $SymbolCodeIblock, $TypeIblock);
	return $resArPROPS["DETAIL_PICTURE"];
}

function getIdPrevPicBySymbolCode($SymbolCodeElement, $SymbolCodeIblock, $TypeIblock)
{
	$resArPROPS = getArProps($SymbolCodeElement, $SymbolCodeIblock, $TypeIblock);
	return $resArPROPS["PREVIEW_PICTURE"];
}




?>