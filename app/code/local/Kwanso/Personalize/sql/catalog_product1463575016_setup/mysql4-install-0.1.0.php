<?php
		$installer = $this;
		$installer->startSetup();
		
$installer->addAttribute("catalog_product", "personalize", array(

 	'group'             => 'default',
    'label'             => 'My Attribute Date',
	'input' => 'boolean',
	'type' => 'int',
    'backend'           => 'eav/entity_attribute_backend_datetime',
    'frontend'          => '',
    'visible'           => true,
    'required'          => false,
    'user_defined'      => true,
    'searchable'        => false,
    'filterable'        => false,
    'comparable'        => false,
    'visible_on_front'  => true,
    'visible_in_advanced_search' => false,
    'unique'            => false,
    'global'            => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,

	));
		$installer->endSetup();
			 