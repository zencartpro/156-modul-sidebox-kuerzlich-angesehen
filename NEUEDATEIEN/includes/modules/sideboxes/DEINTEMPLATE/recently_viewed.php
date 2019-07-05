<?php
// test if box should display
$show_recently_viewed = (is_array($_SESSION['recent_products']) && count($_SESSION['recent_products']) > 0);
    
if ($show_recently_viewed == true) {
$title_link = false;
require $template->get_template_dir('tpl_recently_viewed.php',DIR_WS_TEMPLATE, $current_page_base,'sideboxes'). '/tpl_recently_viewed.php';
$title =  BOX_HEADING_RECENTLY_VIEWED;
require $template->get_template_dir($column_box_default, DIR_WS_TEMPLATE, $current_page_base,'common') . '/' . $column_box_default;
}