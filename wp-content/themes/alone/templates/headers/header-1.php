<?php
$header_options = alone_builder_options_header();
extract($header_options);

$header_class_arr = array( basename( __FILE__, '.php' ), $alone_header_logo_align, $alone_header_full_content, $alone_header_menu_position, $alone_logo_retina );
$header_container_class_arr = array( $alone_absolute_header, $alone_sticky_header );
$header_class_container = !empty($alone_header_full_content) ? 'container-fluid' : 'container';

// echo '<pre>'; print_r($alone_header_settings); echo '</pre>';
?>
<header class="bt-header <?php echo esc_attr( implode( ' ',  $header_class_arr ) ); ?>" itemscope="itemscope" itemtype="http://schema.org/WPHeader">
	<!-- Header top bar -->
	<?php if ( $alone_enable_header_top_bar == 'yes' ) { ?>
	<div class="bt-header-top-bar">
		<div class="<?php echo esc_attr($header_class_container); ?>">
			<div class="row">
				<?php alone_top_bar(); ?>
			</div>
		</div>
	</div>
	<?php } ?>

	<!-- Header main menu -->
	<div class="bt-header-main">
		<div class="bt-container-logo bt-vertical-align-middle">
			<div class="header-top-bar">
				<div class="left-side" style="margin-left: 15px">
					<a href="/"><img src="https://migrantcenter.org/wp-content/uploads/2017/10/MCFHR-logo-500x500.png"  border="0" alt="MCHR" class="logo-main"
						style="margin: 10px; width: 100px;" /></a>
				</div>
				<div class="left-side header-site-title">
					<a href="/">Migrant Center For Human Rights</a>
				</div>
				<div class="right-side" style="margin-top: 40px;">
					<a id="btn-donate" class="btn-style1" href="/donate"
						style="margin-right: 10px;">DONATE</a>
					<div id="google_translate_element" style="margin-right: 20px;"></div>
					<script type="text/javascript">
					function googleTranslateElementInit() {
					  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
					}
					</script>
				</div>
			</div>
		</div>
		<div class="bt-header-container <?php echo esc_attr( implode( ' ', $header_container_class_arr ) ); ?>">
			<div class="<?php echo esc_attr($header_class_container); ?>">
				<div class="bt-container-menu bt-vertical-align-middle">
					<div class="bt-nav-wrap" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement" role="navigation">
						<?php fw_theme_nav_menu( 'primary' ); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
