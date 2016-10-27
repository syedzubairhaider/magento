<?php
$installer = $this;
$installer->startSetup();

$installer->addAttribute("quote", "product_image_url", array("type"=>"varchar"));
$installer->addAttribute("order", "product_image_url", array("type"=>"varchar"));
$installer->addAttribute("quote", "product_submission_image_url", array("type"=>"varchar"));
$installer->addAttribute("order", "product_submission_image_url", array("type"=>"varchar"));
$installer->endSetup();
	 