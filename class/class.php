<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/**
 *
 */
class ClassComponents extends CBitrixComponent
{
  function var1(){
    $arResult['var1'] = 'Отработал метод var1 компонета test';
    return $arResult;
  }
  public function executeComponent(){
    $this->arResult = array_merge($this->arResult, $this->var1());
    $this->includeComponentTemplate();
  }
}

?>
