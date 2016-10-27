<?php
class Kwanso_Personalize_Block_Config_Costs 
    extends Mage_Adminhtml_Block_System_Config_Form_Field_Array_Abstract
{
 protected $magentoOptions;

    public function __construct()
    {
        // create columns
        $this->addColumn('magento', array(
            'label' => Mage::helper('adminhtml')->__('Magento colour attribute'),
            'size' => 5,
        ));
        $this->addColumn('hex', array(
            'label' => Mage::helper('adminhtml')->__('Hex code'),
            'size' => 10,
        ));
         $this->addColumn('val', array(
            'label' => Mage::helper('adminhtml')->__('value'),
            'size' => 10,
        ));
        $this->_addAfter = false;
        $this->_addButtonLabel = Mage::helper('adminhtml')->__('Add value');

        parent::__construct();
        $this->setTemplate('kwanso/array_dropdown.phtml');

        // custom options, from 'color' attribute
        // $attribute = Mage::getSingleton('eav/config')->getAttribute('catalog_product', 'color');
        // if ($attribute->usesSource()) {
        //     $magentoAttributes = $attribute->getSource()->getAllOptions(false);
        // }

        $this->magentoOptions = array();
        // foreach ($magentoAttributes as $att => $innerArray) {
        //     $this->magentoOptions[$innerArray['value']] = $innerArray['label'];
        // }
        $methods = Mage::getSingleton('shipping/config')->getActiveCarriers();

$shipMethodCollection = new Varien_Data_Collection();
foreach ($methods as $shippingCode => $shippingModel)
{
    $shippingTitle = Mage::getStoreConfig('carriers/'.$shippingCode.'/title');
$this->magentoOptions[$shippingCode]=$shippingTitle;

}
        asort($this->magentoOptions); // sort labels alphabetically
    }

    protected function _renderCellTemplate($columnName)
    {
        if (empty($this->_columns[$columnName])) {
            throw new Exception('Wrong column name specified.');
        }
        $column = $this->_columns[$columnName];
        $inputName = $this->getElement()->getName() . '[#{_id}][' . $columnName . ']';

        if ($columnName == 'magento')
         {
            $rendered = '<select name="' . $inputName . '">';
            foreach ($this->magentoOptions as $att => $name) {
                $rendered .= '<option value="' . $att . '">' . $name . '</option>';
            }
            $rendered .= '</select>';
        } else {
            return '<input type="text" name="' . $inputName . '" value="#{' . $columnName . '}" ' . ($column['size'] ? 'size="' . $column['size'] . '"' : '') . '/>';
        }

        return $rendered;
    }
}
?>

