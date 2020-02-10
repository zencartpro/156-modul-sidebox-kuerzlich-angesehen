<?php
/**
 * Side Box Template
 *
 * @package templateSystem
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart-pro.at/license/2_0.txt GNU Public License V2.0
 * @version $Id: tpl_recently_viewed.php 2020-02-10 09:56:41Z webchills $
 */
  $content = '';
  $content .= '<div id="' . str_replace('_', '-', $box_id . 'Content') . '" class="sideBoxContent">' . "\n";
  $content .= '<div class="wrapper">' . "\n";
  $content .= '<table class="recentlyviewed">' . "\n";
  foreach ($_SESSION['recent_products'] as $recent_product) {
	$link = zen_href_link(zen_get_info_page($recent_product), 'products_id=' . $recent_product);
	$content .= '<tr>' . "\n" . 
				  '<td></td>' . "\n" . 
				  '<td><div class="recent-products-name"><a href="' . $link . '">' . zen_get_products_name($recent_product, $_SESSION['languages_id']) . '</a></div></td>' . "\n" . 
				 '</tr>';
  }
  $content .= '</table>' . "\n";
  $content .= '</div>' . "\n";
  $content .= '</div>';