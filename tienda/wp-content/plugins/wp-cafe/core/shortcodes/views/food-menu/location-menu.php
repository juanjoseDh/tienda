<?php

global $woocommerce;

if ( is_object(WC()->cart) && WC()->cart->cart_contents_count == 0) {
    $cart_empty = 1;
}else{
    $cart_empty = 0;
}

?>
<div id="location_change" class="location_modal hide_field location_change">
    <div class="modal-content">
        <div>
            <?php echo esc_html__("By changing your current location, You will 
                    lose your selected item from the cart.","wpcafe");?>
        </div>
        <button class="change_yes wpc-btn wpc-btn-primary"><?php echo esc_html__( "Yes", "wpcafe" );?></button>
        <button class="change_no wpc-btn wpc-btn-primary"><?php echo esc_html__( "No", "wpcafe" );?></button>
    </div>
</div>
<!-- render html -->
<div class="food_location" data-cart_empty="<?php echo esc_attr( $cart_empty );?>">
        <?php
        if ( !empty( $products ) ) { 
            include \Wpcafe::plugin_dir() . "widgets/wpc-menus-list/style/${style}.php";

        }else{
            ?>
                <div><?php esc_html_e( 'No menu found' , 'wpcafe')?></div>
            <?php
        }
        ?>
</div>
