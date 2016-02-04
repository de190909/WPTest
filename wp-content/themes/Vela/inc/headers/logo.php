<?php 
    global $wyde_options;
?>
<span id="logo">
    <?php
    if( isset( $wyde_options['logo_image']['url'] ) && !empty( $wyde_options['logo_image']['url'] ) ){
                
        $logo = $wyde_options['logo_image']['url'];
        $logo_retina = isset($wyde_options['logo_image_retina']['url']) ? $wyde_options['logo_image_retina']['url'] : '';
        
        $sticky_logo =  $wyde_options['logo_image_sticky']['url'] ? $wyde_options['logo_image_sticky']['url'] : $wyde_options['logo_image']['url'];
        $sticky_retina = isset($wyde_options['logo_image_sticky_retina']['url']) ? $wyde_options['logo_image_sticky_retina']['url'] : '';

        $light_logo = '';
        if( isset($wyde_options['light_logo_image']) && !empty( $wyde_options['light_logo_image']['url'] ) ){
            $light_logo = $wyde_options['light_logo_image']['url'];
            $light_retina = isset($wyde_options['light_logo_image_retina']['url']) ? $wyde_options['light_logo_image_retina']['url'] : '';
        }



    ?>
    <a href="<?php echo esc_url( home_url() ); ?>">
        <img class="dark-logo" src="<?php echo esc_attr( $logo ); ?>"<?php echo ($logo_retina) ? ' data-retina="'. esc_attr($logo_retina).'"' : ''; ?> alt="<?php echo __('Logo', 'Flora'); ?>" />
        <img class="dark-sticky" src="<?php echo esc_attr( $sticky_logo ); ?>"<?php echo ($sticky_retina) ? ' data-retina="'. esc_attr($sticky_retina).'"' : ''; ?> alt="<?php echo __('Sticky Logo', 'Flora'); ?>" />
        <?php if( !empty($light_logo) ){ ?>
        <img class="light-logo" src="<?php echo esc_attr( $light_logo ); ?>"<?php echo ($light_retina) ? ' data-retina="'. esc_attr($light_retina).'"' : ''; ?> alt="<?php echo __('Logo', 'Flora'); ?>" />
        <?php } ?>
    </a>
    <?php
    }
    ?>
</span>