<?php 
class RicardoMartins_Bettergrids_Block_Adminhtml_Catalog_Product_Edit_Tab_Crosssell
	extends Mage_Adminhtml_Block_Catalog_Product_Edit_Tab_Crosssell
{
	public function __construct(){
		parent::__construct();
        $this->setId('cross_sell_product_grid');
        $this->setDefaultSort('entity_id');
        $this->setUseAjax(true);
        if ($this->_getProduct()->getId()) {
            $this->setDefaultFilter(array());
            $this->setDefaultLimit(200);
        }
        if ($this->isReadonly()) {
            $this->setFilterVisibility(false);
        }
	}
}