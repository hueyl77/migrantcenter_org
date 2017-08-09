<?php
$_FW = defined( 'FW' );
$header_options = alone_builder_options_header();
extract($header_options);

$alone_logo_settings = defined( 'FW' ) ? fw_get_db_customizer_option( 'logo_settings' ) : array();
$alone_logo_retina = defined( 'FW' ) ? fw_akg('logo/image/retina_logo', $alone_logo_settings) : '';// $alone_logo_settings['logo']['image']['retina_logo'];
$header_class_arr = array( basename( __FILE__, '.php' ), $alone_logo_retina, 'fw-menu-position-right', $alone_absolute_header );
?>
<header class="bt-header-mobi <?php echo esc_attr( implode( ' ',  $header_class_arr ) ); ?>" itemscope="itemscope" itemtype="http://schema.org/WPHeader">
	<!-- Header main menu -->
	<div class="bt-header-mobi-main">
		<div class="container">
			<div class="bt-container-logo bt-vertical-align-middle">
				<table class="borderless" style="width: 100%;">
					<tr>
						<td>
							<a href="/"><img src="/wp-content/uploads/2017/08/mc4hr-logo.png"
							style="width: 80px; margin-top: 10px;" border="0"
							alt="MCHR" /></a>
						</td>
						<td style="text-align: center;">
							<a href="/">MIGRANT CENTER FOR HUMAN RIGHTS</a>
						</td>
					</tr>
				</table>
			</div><!--
			--><div class="bt-container-menu bt-vertical-align-middle" style="width: 100%;">
				<div class="bt-nav-wrap" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement" role="navigation">
					<?php
					if( ! $_FW ) { ?>
						<div class="default-mobi-menu-wrap" data-default-menu-mobi-handle>
							<button class="button-toggle-ui" style="max-width: 70%; min-width: 70%; background: #0d430d; border: none;"><?php _e('Menu', 'alone'); ?></button>
							<a class="btn-style2" href="/contact-us">DONATE</a>
							<?php fw_theme_nav_menu( 'mobi_menu' ); ?>
						</div>
					<?php } else {
						fw_theme_nav_menu( 'mobi_menu' );
					}
					?>
				</div>
			</div>
		</div>
	</div>
</header>
