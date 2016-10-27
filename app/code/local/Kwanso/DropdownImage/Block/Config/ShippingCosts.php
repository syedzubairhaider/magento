<?php
class Kwanso_DropdownImage_Block_Config_ShippingCosts 
    extends Mage_Adminhtml_Block_System_Config_Form_Field_Array_Abstract
{
    public function _prepareToRender()
    {
        // $this->addColumn('from_price', array(
        //     'label' => Mage::helper('Kwanso_DropdownImage')->__('From Price'),
        //     'style' => 'width:100px',
        // ));
        // $this->addColumn('cost', array(
        //     'label' => Mage::helper('Kwanso_DropdownImage')->__('Shipping Cost'),
        //     'style' => 'width:100px',
        // ));

        // $this->_addAfter = false;
        // $this->_addButtonLabel = Mage::helper('Kwanso_DropdownImage')->__('Add');
    }
}