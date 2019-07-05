<?php
  function update_recent_products($products_id) {
  $current_products = $_SESSION['recent_products'];
	$new_products = array();
	$new_products[] = $products_id;
	$product_count = 0;
	foreach ($current_products as $product) {
	  if ($product != $products_id) {
		if ((defined('RECENT_VIEWED_PRODUCTS_MAXIMUM') && ((RECENT_VIEWED_PRODUCTS_MAXIMUM - 1) > $product_count)) || !defined('RECENT_VIEWED_PRODUCTS_MAXIMUM') || !zen_not_null(RECENT_VIEWED_PRODUCTS_MAXIMUM)) {
		  $product_count++;
		  $new_products[] = $product;
		} else {
		  break;
		}
	  }
	}
	return $new_products;
  }

  if (!isset($_SESSION['recent_products'])) {
	$_SESSION['recent_products'] = array();
  }

  if (isset($_GET['products_id']) && zen_not_null($_GET['products_id'])) {
	$products_id = (int)$_GET['products_id'];
	$_SESSION['recent_products'] = update_recent_products($products_id);
  }