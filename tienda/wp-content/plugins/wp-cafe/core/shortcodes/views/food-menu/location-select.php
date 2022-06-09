<?php
// food location list
use WpCafe\Utils\Wpc_Utilities;

$food_location  = Wpc_Utilities::get_location_data ( esc_html__("Select food location", "wpcafe") , esc_html__("No location is set", "wpcafe"),"id" );
?>
    <!-- select location -->
    <form>
        <select id="filter_location" name="filter_location" class="filter-location <?php echo esc_attr($location_alignment); ?>">
            <?php foreach ( $food_location as $key => $value ) { ?>
                <option value="<?php echo esc_attr($key); ?>"><?php echo sprintf( esc_html__("%s","wpcafe") , $value ) ?></option>
            <?php } ?>
        </select>
    </form>

    <?php 
        include_once \WpCafe::plugin_dir() . "core/shortcodes/views/food-menu/location-menu.php";
    ?>
</div>
