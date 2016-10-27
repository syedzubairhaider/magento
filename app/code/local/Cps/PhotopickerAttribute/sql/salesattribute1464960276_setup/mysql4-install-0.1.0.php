<?php
$installer = $this;
$installer->startSetup();

$installer->addAttribute("quote_item", "product_image_url", array("type"=>"varchar"));
$installer->addAttribute("order_item", "product_image_url", array("type"=>"varchar"));
$installer->addAttribute("quote_item", "product_submission_image_url", array("type"=>"varchar"));
$installer->addAttribute("quote_item", "product_submission_image_url", array("type"=>"varchar"));
$installer->endSetup();
	 