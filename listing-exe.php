<?php
function change_no_format($no){
    $number = str_replace(",","",$no);
    return str_replace("$","",$number);
}
$item_per_page = 25;
if (count($_GET)==1 && isset($_GET['pg'])) {
    
    $total_records = total_listings();
    $total_page = ceil($total_records / $item_per_page);
    if(!isset($_GET['pg'])){
        $page =1;
    }else{
        $page = $_GET['pg'];
    }
    $page_first_result = ($page-1) * $item_per_page;  
    $listings = get_approved_inventory_listing_list($page_first_result,$item_per_page);
} else {
    if(isset($_GET['max_sale_price'])){
        $_GET['max_sale_price'] = change_no_format($_GET['max_sale_price']);
    }
    if(isset($_GET['min_sale_price'])){
        $_GET['min_sale_price'] = change_no_format($_GET['min_sale_price']);
    }
    $total_records = total_searched_listings($_GET);
    $total_page = ceil($total_records / $item_per_page);
    if(!isset($_GET['pg']) || $_GET['pg'] == 1){
        $page =1;
        $page_url = $_SERVER['REQUEST_URI'];
    }else{
        $page = $_GET['pg'];
    }
    $page_first_result = ($page-1) * $item_per_page; 
    $listings = get_searched_listing_list($_GET,$page_first_result,$item_per_page);
}
