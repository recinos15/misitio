<?php
//about theme info
add_action( 'admin_menu', 'product_comparison_woocommerce_gettingstarted' );
function product_comparison_woocommerce_gettingstarted() {
	add_theme_page( esc_html__('About Product Comparison Woocommerce ', 'product-comparison-woocommerce'), esc_html__('About Product Comparison Woocommerce ', 'product-comparison-woocommerce'), 'edit_theme_options', 'product_comparison_woocommerce_guide', 'product_comparison_woocommerce_mostrar_guide');
}

// Add a Custom CSS file to WP Admin Area
function product_comparison_woocommerce_admin_theme_style() {
	wp_enqueue_style('product-comparison-woocommerce-custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/getstart/getstart.css');
	wp_enqueue_script('product-comparison-woocommerce-tabs', esc_url(get_template_directory_uri()) . '/inc/getstart/js/tab.js');
}
add_action('admin_enqueue_scripts', 'product_comparison_woocommerce_admin_theme_style');

//guidline for about theme
function product_comparison_woocommerce_mostrar_guide() { 
	//custom function about theme customizer
	$product_comparison_woocommerce_return = add_query_arg( array()) ;
	$product_comparison_woocommerce_theme = wp_get_theme( 'product-comparison-woocommerce' );
?>

<div class="wrapper-info">
    <div class="col-left">
    	<h2><?php esc_html_e( 'Welcome to Product Comparison Woocommerce ', 'product-comparison-woocommerce' ); ?> <span class="version"><?php esc_html_e( 'Version', 'product-comparison-woocommerce' ); ?>: <?php echo esc_html($product_comparison_woocommerce_theme['Version']);?></span></h2>
    	<p><?php esc_html_e('All our WordPress themes are modern, minimalist, 100% responsive, seo-friendly,feature-rich, and multipurpose that best suit designers, bloggers and other professionals who are working in the creative fields.','product-comparison-woocommerce'); ?></p>
    </div>
	<div class="col-right">
    	<div class="logo">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/final-logo.png" alt="" />
		</div>
		<div class="update-now">
			<h4><?php esc_html_e('Buy Product Comparison Woocommerce at 20% Discount','product-comparison-woocommerce'); ?></h4>
			<h4><?php esc_html_e('Use Coupon','product-comparison-woocommerce'); ?> ( <span><?php esc_html_e('vwpro20','product-comparison-woocommerce'); ?></span> ) </h4>
			<div class="info-link">
				<a href="<?php echo esc_url(PRODUCT_COMPARISON_WOOCOMMERCE_BUY_NOW ); ?>" target="_blank"> <?php esc_html_e( 'Upgrade to Pro', 'product-comparison-woocommerce' ); ?></a>
			</div>
		</div>
	</div>

    <div class="tab-sec">
    	<div class="tab">
			<button class="tablinks" onclick="product_comparison_woocommerce_open_tab(event, 'lite_theme')"><?php esc_html_e( 'Setup With Customizer', 'product-comparison-woocommerce' ); ?></button>
			<button class="tablinks" onclick="product_comparison_woocommerce_open_tab(event, 'block_pattern')"><?php esc_html_e( 'Setup With Block Pattern', 'product-comparison-woocommerce' ); ?></button>
			<button class="tablinks" onclick="product_comparison_woocommerce_open_tab(event, 'gutenberg_editor')"><?php esc_html_e( 'Setup With Gutunberg Block', 'product-comparison-woocommerce' ); ?></button>
			<button class="tablinks" onclick="product_comparison_woocommerce_open_tab(event, 'product_addons_editor')"><?php esc_html_e( 'Woocommerce Product Addons', 'product-comparison-woocommerce' ); ?></button>
			<button class="tablinks" onclick="product_comparison_woocommerce_open_tab(event, 'theme_pro')"><?php esc_html_e( 'Get Premium', 'product-comparison-woocommerce' ); ?></button>
  			<button class="tablinks" onclick="product_comparison_woocommerce_open_tab(event, 'free_pro')"><?php esc_html_e( 'Support', 'product-comparison-woocommerce' ); ?></button>
		</div>

		<?php
			$product_comparison_woocommerce_plugin_custom_css = '';
			if(class_exists('Ibtana_Visual_Editor_Menu_Class')){
				$product_comparison_woocommerce_plugin_custom_css ='display: block';
			}
		?>
		<div id="lite_theme" class="tabcontent open">
			<?php if(!class_exists('Ibtana_Visual_Editor_Menu_Class')){ 
				$plugin_ins = Product_Comparison_Woocommerce_Plugin_Activation_Settings::get_instance();
				$product_comparison_woocommerce_actions = $plugin_ins->recommended_actions;
				?>
				<div class="product-comparison-woocommerce-recommended-plugins">
				    <div class="product-comparison-woocommerce-action-list">
				        <?php if ($product_comparison_woocommerce_actions): foreach ($product_comparison_woocommerce_actions as $key => $product_comparison_woocommerce_actionValue): ?>
				                <div class="product-comparison-woocommerce-action" id="<?php echo esc_attr($product_comparison_woocommerce_actionValue['id']);?>">
			                        <div class="action-inner">
			                            <h3 class="action-title"><?php echo esc_html($product_comparison_woocommerce_actionValue['title']); ?></h3>
			                            <div class="action-desc"><?php echo esc_html($product_comparison_woocommerce_actionValue['desc']); ?></div>
			                            <?php echo wp_kses_post($product_comparison_woocommerce_actionValue['link']); ?>
			                            <a class="ibtana-skip-btn" get-start-tab-id="lite-theme-tab" href="javascript:void(0);"><?php esc_html_e('Skip','product-comparison-woocommerce'); ?></a>
			                        </div>
				                </div>
				            <?php endforeach;
				        endif; ?>
				    </div>
				</div>
			<?php } ?>
			<div class="lite-theme-tab" style="<?php echo esc_attr($product_comparison_woocommerce_plugin_custom_css); ?>">
				<h3><?php esc_html_e( 'Lite Theme Information', 'product-comparison-woocommerce' ); ?></h3>
				<hr class="h3hr">
				<p><?php esc_html_e('Product Comparison Woocommerce is a versatile and user-friendly website template designed for websites that want to offer product comparison functionality. Its a purpose-built theme for e-commerce businesses, bloggers, and affiliate marketers looking to enhance their customers shopping experience. This theme is specifically crafted to streamline the process of comparing different products on an online store. It provides a visually appealing and organized layout that makes it easy for visitors to compare features, prices, and other essential details of various products side by side. This theme can be used by anyone running a WooCommerce-powered website, regardless of their technical expertise. Whether you provide affiliate marketing, affiliates, amazon affiliate, price comparison, product review, review, price review, product comparison, items review, price compare, product compare, affiliate woocommerce this theme is the best option. Its user-friendly interface allows even beginners to set up and manage product comparison tables effortlessly. It offers customization options, allowing site owners to match their brands look and feel. Visually, the Product Comparison Woocommerce theme is clean, responsive, and optimized for mobile devices. It ensures a seamless experience for users on various screen sizes. The themes design focuses on clarity, making it simple for customers to evaluate and make informed purchasing decisions. The Product Comparison Woocommerce WordPress theme is a valuable tool for e-commerce businesses and bloggers aiming to offer product comparison features on their websites. Its user-friendly, visually appealing, and designed to enhance the shopping experience for all types of users, making it a valuable asset for anyone looking to boost their online sales and customer satisfaction. Demo: https://www.vwthemes.net/product-comparison-woocommerce/','product-comparison-woocommerce'); ?></p>
			  	<div class="col-left-inner">
			  		<h4><?php esc_html_e( 'Theme Documentation', 'product-comparison-woocommerce' ); ?></h4>
					<p><?php esc_html_e( 'If you need any assistance regarding setting up and configuring the Theme, our documentation is there.', 'product-comparison-woocommerce' ); ?></p>
					<div class="info-link">
						<a href="<?php echo esc_url( PRODUCT_COMPARISON_WOOCOMMERCE_FREE_THEME_DOC ); ?>" target="_blank"> <?php esc_html_e( 'Documentation', 'product-comparison-woocommerce' ); ?></a>
					</div>
					<hr>
					<h4><?php esc_html_e('Theme Customizer', 'product-comparison-woocommerce'); ?></h4>
					<p> <?php esc_html_e('To begin customizing your website, start by clicking "Customize".', 'product-comparison-woocommerce'); ?></p>
					<div class="info-link">
						<a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e('Customizing', 'product-comparison-woocommerce'); ?></a>
					</div>
					<hr>
					<h4><?php esc_html_e('Having Trouble, Need Support?', 'product-comparison-woocommerce'); ?></h4>
					<p> <?php esc_html_e('Our dedicated team is well prepared to help you out in case of queries and doubts regarding our theme.', 'product-comparison-woocommerce'); ?></p>
					<div class="info-link">
						<a href="<?php echo esc_url( PRODUCT_COMPARISON_WOOCOMMERCE_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Support Forum', 'product-comparison-woocommerce'); ?></a>
					</div>
					<hr>
					<h4><?php esc_html_e('Reviews & Testimonials', 'product-comparison-woocommerce'); ?></h4>
					<p> <?php esc_html_e('All the features and aspects of this WordPress Theme are phenomenal. I\'d recommend this theme to all.', 'product-comparison-woocommerce'); ?></p>
					<div class="info-link">
						<a href="<?php echo esc_url( PRODUCT_COMPARISON_WOOCOMMERCE_REVIEW ); ?>" target="_blank"><?php esc_html_e('Reviews', 'product-comparison-woocommerce'); ?></a>
					</div>

					<div class="link-customizer">
						<h3><?php esc_html_e( 'Link to customizer', 'product-comparison-woocommerce' ); ?></h3>
						<hr class="h3hr">
						<div class="first-row">
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-buddicons-buddypress-logo"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=custom_logo') ); ?>" target="_blank"><?php esc_html_e('Upload your logo','product-comparison-woocommerce'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-format-gallery"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=product_comparison_woocommerce_post_settings') ); ?>" target="_blank"><?php esc_html_e('Post settings','product-comparison-woocommerce'); ?></a>
								</div>
							</div>

							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-slides"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=product_comparison_woocommerce_banner') ); ?>" target="_blank"><?php esc_html_e('Banner Settings','product-comparison-woocommerce'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-category"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=product_comparison_woocommerce_best_product_section') ); ?>" target="_blank"><?php esc_html_e('Best Product Section','product-comparison-woocommerce'); ?></a>
								</div>
							</div>
						
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-menu"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=nav_menus') ); ?>" target="_blank"><?php esc_html_e('Menus','product-comparison-woocommerce'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-screenoptions"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=widgets') ); ?>" target="_blank"><?php esc_html_e('Footer Widget','product-comparison-woocommerce'); ?></a>
								</div>
							</div>
							
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-admin-generic"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=product_comparison_woocommerce_left_right') ); ?>" target="_blank"><?php esc_html_e('General Settings','product-comparison-woocommerce'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-text-page"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=product_comparison_woocommerce_footer') ); ?>" target="_blank"><?php esc_html_e('Footer Text','product-comparison-woocommerce'); ?></a>
								</div>
							</div>
						</div>
					</div>
			  	</div>
				<div class="col-right-inner">
					<h3 class="page-template"><?php esc_html_e('How to set up Home Page Template','product-comparison-woocommerce'); ?></h3>
				  	<hr class="h3hr">
					<p><?php esc_html_e('Follow these instructions to setup Home page.','product-comparison-woocommerce'); ?></p>
                  	<p><span class="strong"><?php esc_html_e('1. Create a new page :','product-comparison-woocommerce'); ?></span><?php esc_html_e(' Go to ','product-comparison-woocommerce'); ?>
					  	<b><?php esc_html_e(' Dashboard >> Pages >> Add New Page','product-comparison-woocommerce'); ?></b></p>
                  	<p><?php esc_html_e('Name it as "Home" then select the template "Custom Home Page".','product-comparison-woocommerce'); ?></p>
                  	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/home-page-template.png" alt="" />
                  	<p><span class="strong"><?php esc_html_e('2. Set the front page:','product-comparison-woocommerce'); ?></span><?php esc_html_e(' Go to ','product-comparison-woocommerce'); ?>
					  	<b><?php esc_html_e(' Settings >> Reading ','product-comparison-woocommerce'); ?></b></p>
				  	<p><?php esc_html_e('Select the option of Static Page, now select the page you created to be the homepage, while another page to be your default page.','product-comparison-woocommerce'); ?></p>
                  	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/set-front-page.png" alt="" />
                  	<p><?php esc_html_e(' Once you are done with setup, then follow the','product-comparison-woocommerce'); ?> <a class="doc-links" href="<?php echo esc_url( PRODUCT_COMPARISON_WOOCOMMERCE_FREE_THEME_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation','product-comparison-woocommerce'); ?></a></p>
			  	</div>
			</div>
		</div>

		<div id="block_pattern" class="tabcontent">
			<?php if(!class_exists('Ibtana_Visual_Editor_Menu_Class')){
				$plugin_ins = product_comparison_woocommerce_Plugin_Activation_Settings::get_instance();
				$product_comparison_woocommerce_actions = $plugin_ins->recommended_actions;
				?>
				<div class="product-comparison-woocommerce-recommended-plugins">
				    <div class="product-comparison-woocommerce-action-list">
				        <?php if ($product_comparison_woocommerce_actions): foreach ($product_comparison_woocommerce_actions as $key => $product_comparison_woocommerce_actionValue): ?>
				                <div class="product-comparison-woocommerce-action" id="<?php echo esc_attr($product_comparison_woocommerce_actionValue['id']);?>">
			                        <div class="action-inner">
			                            <h3 class="action-title"><?php echo esc_html($product_comparison_woocommerce_actionValue['title']); ?></h3>
			                            <div class="action-desc"><?php echo esc_html($product_comparison_woocommerce_actionValue['desc']); ?></div>
			                            <?php echo wp_kses_post($product_comparison_woocommerce_actionValue['link']); ?>
			                            <a class="ibtana-skip-btn" href="javascript:void(0);" get-start-tab-id="gutenberg-editor-tab"><?php esc_html_e('Skip','product-comparison-woocommerce'); ?></a>
			                        </div>
				                </div>
				            <?php endforeach;
				        endif; ?>
				    </div>
				</div>
			<?php } ?>
			<div class="gutenberg-editor-tab" style="<?php echo esc_attr($product_comparison_woocommerce_plugin_custom_css); ?>">
				<div class="block-pattern-img">
				  	<h3><?php esc_html_e( 'Block Patterns', 'product-comparison-woocommerce' ); ?></h3>
					<hr class="h3hr">
					<p><?php esc_html_e('Follow the below instructions to setup Home page with Block Patterns.','product-comparison-woocommerce'); ?></p>
	              	<p><b><?php esc_html_e('Click on Below Add new page button >> Click on "+" Icon ','product-comparison-woocommerce'); ?></b></p>
	              	<div class="product-comparison-woocommerce-pattern-page">
				    	<a href="javascript:void(0)" class="vw-pattern-page-btn button-primary button"><?php esc_html_e('Add New Page','product-comparison-woocommerce'); ?></a>
				    </div>
				    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/block-pattern1.png" alt="" />
				    <p><b><?php esc_html_e('Click on Patterns Tab >> Click on Theme Name >> Click on Section >> Publish.','product-comparison-woocommerce'); ?></b></p>
	              	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/block-pattern.png" alt="" />
	            </div>

	            <div class="block-pattern-link-customizer">
					<h3><?php esc_html_e( 'Link to customizer', 'product-comparison-woocommerce' ); ?></h3>
					<hr class="h3hr">
					<div class="first-row">
						<div class="row-box">
							<div class="row-box1">
								<span class="dashicons dashicons-buddicons-buddypress-logo"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=custom_logo') ); ?>" target="_blank"><?php esc_html_e('Upload your logo','product-comparison-woocommerce'); ?></a>
							</div>
							<div class="row-box2">
								<span class="dashicons dashicons-format-gallery"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=product_comparison_woocommerce_post_settings') ); ?>" target="_blank"><?php esc_html_e('Post settings','product-comparison-woocommerce'); ?></a>
							</div>
						</div>
						<div class="row-box">
							<div class="row-box1">
								<span class="dashicons dashicons-menu"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=nav_menus') ); ?>" target="_blank"><?php esc_html_e('Menus','product-comparison-woocommerce'); ?></a>
							</div>

							<div class="row-box2">
								<span class="dashicons dashicons-text-page"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=product_comparison_woocommerce_footer') ); ?>" target="_blank"><?php esc_html_e('Footer Text','product-comparison-woocommerce'); ?></a>
							</div>
						</div>

						<div class="row-box">
							<div class="row-box1">
								<span class="dashicons dashicons-admin-generic"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=product_comparison_woocommerce_left_right') ); ?>" target="_blank"><?php esc_html_e('General Settings','product-comparison-woocommerce'); ?></a>
							</div>
							 <div class="row-box2">
								<span class="dashicons dashicons-screenoptions"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=widgets') ); ?>" target="_blank"><?php esc_html_e('Footer Widget','product-comparison-woocommerce'); ?></a>
							</div>
						</div>
					</div>
				</div>
	     	</div>
		</div>
		
		<div id="gutenberg_editor" class="tabcontent">
			<?php if(!class_exists('Ibtana_Visual_Editor_Menu_Class')){ 
			$plugin_ins = Product_Comparison_Woocommerce_Plugin_Activation_Settings::get_instance();
			$product_comparison_woocommerce_actions = $plugin_ins->recommended_actions;
			?>
				<div class="product-comparison-woocommerce-recommended-plugins">
				    <div class="product-comparison-woocommerce-action-list">
				        <?php if ($product_comparison_woocommerce_actions): foreach ($product_comparison_woocommerce_actions as $key => $product_comparison_woocommerce_actionValue): ?>
				                <div class="product-comparison-woocommerce-action" id="<?php echo esc_attr($product_comparison_woocommerce_actionValue['id']);?>">
			                        <div class="action-inner plugin-activation-redirect">
			                            <h3 class="action-title"><?php echo esc_html($product_comparison_woocommerce_actionValue['title']); ?></h3>
			                            <div class="action-desc"><?php echo esc_html($product_comparison_woocommerce_actionValue['desc']); ?></div>
			                            <?php echo wp_kses_post($product_comparison_woocommerce_actionValue['link']); ?>
			                        </div>
				                </div>
				            <?php endforeach;
				        endif; ?>
				    </div>
				</div>
			<?php }else{ ?>
				<h3><?php esc_html_e( 'Gutunberg Blocks', 'product-comparison-woocommerce' ); ?></h3>
				<hr class="h3hr">
				<div class="product-comparison-woocommerce-pattern-page">
			    	<a href="<?php echo esc_url( admin_url( 'admin.php?page=ibtana-visual-editor-templates' ) ); ?>" class="vw-pattern-page-btn ibtana-dashboard-page-btn button-primary button"><?php esc_html_e('Ibtana Settings','product-comparison-woocommerce'); ?></a>
			    </div>

			    <div class="link-customizer-with-guternberg-ibtana">
	              	<div class="link-customizer-with-block-pattern">
						<h3><?php esc_html_e( 'Link to customizer', 'product-comparison-woocommerce' ); ?></h3>
						<hr class="h3hr">
						<div class="first-row">
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-buddicons-buddypress-logo"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=custom_logo') ); ?>" target="_blank"><?php esc_html_e('Upload your logo','product-comparison-woocommerce'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-format-gallery"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=product_comparison_woocommerce_post_settings') ); ?>" target="_blank"><?php esc_html_e('Post settings','product-comparison-woocommerce'); ?></a>
								</div>
							</div>
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-menu"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=nav_menus') ); ?>" target="_blank"><?php esc_html_e('Menus','product-comparison-woocommerce'); ?></a>
								</div>
								
								<div class="row-box2">
									<span class="dashicons dashicons-text-page"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=product_comparison_woocommerce_footer') ); ?>" target="_blank"><?php esc_html_e('Footer Text','product-comparison-woocommerce'); ?></a>
								</div>
							</div>
							
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-admin-generic"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=product_comparison_woocommerce_left_right') ); ?>" target="_blank"><?php esc_html_e('General Settings','product-comparison-woocommerce'); ?></a>
								</div>
								 <div class="row-box2">
									<span class="dashicons dashicons-screenoptions"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=widgets') ); ?>" target="_blank"><?php esc_html_e('Footer Widget','product-comparison-woocommerce'); ?></a>
								</div> 
							</div>
						</div>
					</div>	
				</div>
			<?php } ?>
		</div>

		<div id="product_addons_editor" class="tabcontent">
				<?php if(!class_exists('IEPA_Loader')){
				$plugin_ins = product_comparison_woocommerce_Plugin_Activation_Woo_Products::get_instance();
				$product_comparison_woocommerce_actions = $plugin_ins->recommended_actions;
				?>
				<div class="product-comparison-woocommerce-recommended-plugins">
				    <div class="product-comparison-woocommerce-action-list">
				        <?php if ($product_comparison_woocommerce_actions): foreach ($product_comparison_woocommerce_actions as $key => $product_comparison_woocommerce_actionValue): ?>
				                <div class="product-comparison-woocommerce-action" id="<?php echo esc_attr($product_comparison_woocommerce_actionValue['id']);?>">
			                        <div class="action-inner plugin-activation-redirect">
			                            <h3 class="action-title"><?php echo esc_html($product_comparison_woocommerce_actionValue['title']); ?></h3>
			                            <div class="action-desc"><?php echo esc_html($product_comparison_woocommerce_actionValue['desc']); ?></div>
			                            <?php echo wp_kses_post($product_comparison_woocommerce_actionValue['link']); ?>
			                        </div>
				                </div>
				            <?php endforeach;
				        endif; ?>
				    </div>
				</div>
			<?php }else{ ?>
				<h3><?php esc_html_e( 'Woocommerce Products Blocks', 'product-comparison-woocommerce' ); ?></h3>
				<hr class="h3hr">
				<div class="product-comparison-woocommerce-pattern-page">
					<p><?php esc_html_e('Follow the below instructions to setup Products Templates.','product-comparison-woocommerce'); ?></p>
					<p><b><?php esc_html_e('1. First you need to activate these plugins','product-comparison-woocommerce'); ?></b></p>
						<p><?php esc_html_e('1. Ibtana - WordPress Website Builder ','product-comparison-woocommerce'); ?></p>
						<p><?php esc_html_e('2. Ibtana - Ecommerce Product Addons.','product-comparison-woocommerce'); ?></p>
						<p><?php esc_html_e('3. Woocommerce','product-comparison-woocommerce'); ?></p>

					<p><b><?php esc_html_e('2. Go To Dashboard >> Ibtana Settings >> Woocommerce Templates','product-comparison-woocommerce'); ?></b></p>
	              	<div class="product-comparison-woocommerce-pattern-page">
			    		<a href="<?php echo esc_url( admin_url( 'admin.php?page=ibtana-visual-editor-woocommerce-templates&ive_wizard_view=parent' ) ); ?>" class="vw-pattern-page-btn ibtana-dashboard-page-btn button-primary button"><?php esc_html_e('Woocommerce Templates','product-comparison-woocommerce'); ?></a>
			    	</div>
	              	<p><?php esc_html_e('You can create a template as you like.','product-comparison-woocommerce'); ?></p>
			    </div>
			<?php } ?>
		</div>

		<div id="theme_pro" class="tabcontent">
		  	<h3><?php esc_html_e( 'Premium Theme Information', 'product-comparison-woocommerce' ); ?></h3>
			<hr class="h3hr">
		    <div class="col-left-pro">
		    	<p><?php esc_html_e('The Price Comparison WordPress Theme is a superior website template tailored specifically for crafting unparalleled price comparison sites. Designed with both seasoned affiliate marketers and dynamic e-commerce business owners in mind, this theme is the optimal choice for those wishing to showcase affiliate products from platforms like Amazon, eBay, Flipkart, Walmart, and more. It’s a dynamic, feature-rich theme that boasts price comparison on single product pages for leading platforms, ensuring users have access to the most current pricing data. Additionally, users will appreciate the separate product comparison section that highlights all detailed product attributes, providing a thorough comparison experience. Another standout feature is the tab menu functionality, which elevates site navigation, enabling users to swiftly move between sections. Beyond its advanced capabilities, this theme emanates professionalism, instilling a sense of reliability and credibility in visitors, crucial for boosting user confidence and conversions. Furthermore, the Price Comparison WordPress Theme guarantees regular updates for compatibility with the latest WordPress iterations, ensuring your site remains secure and efficient. Plus, our dedicated customer support is always at the ready to assist with any customization or technical challenges.','product-comparison-woocommerce'); ?></p>
		    	<div class="pro-links">
			    	<a href="<?php echo esc_url( PRODUCT_COMPARISON_WOOCOMMERCE_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'product-comparison-woocommerce'); ?></a>
					<a href="<?php echo esc_url( PRODUCT_COMPARISON_WOOCOMMERCE_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Buy Pro', 'product-comparison-woocommerce'); ?></a>
					<a href="<?php echo esc_url( PRODUCT_COMPARISON_WOOCOMMERCE_PRO_DOC ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'product-comparison-woocommerce'); ?></a>
				</div>
		    </div>
		    <div class="col-right-pro">
		    	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/responsive.png" alt="" />
		    </div>
		    <div class="featurebox">
			    <h3><?php esc_html_e( 'Theme Features', 'product-comparison-woocommerce' ); ?></h3>
				<hr class="h3hr">
				<div class="table-image">
					<table class="tablebox">
						<thead>
							<tr>
								<th></th>
								<th><?php esc_html_e('Free Themes', 'product-comparison-woocommerce'); ?></th>
								<th><?php esc_html_e('Premium Themes', 'product-comparison-woocommerce'); ?></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><?php esc_html_e('Theme Customization', 'product-comparison-woocommerce'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Responsive Design', 'product-comparison-woocommerce'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Logo Upload', 'product-comparison-woocommerce'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Social Media Links', 'product-comparison-woocommerce'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Product Slider Settings', 'product-comparison-woocommerce'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Number of Product Slides', 'product-comparison-woocommerce'); ?></td>
								<td class="table-img"><?php esc_html_e('3', 'product-comparison-woocommerce'); ?></td>
								<td class="table-img"><?php esc_html_e('Unlimited', 'product-comparison-woocommerce'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Template Pages', 'product-comparison-woocommerce'); ?></td>
								<td class="table-img"><?php esc_html_e('3', 'product-comparison-woocommerce'); ?></td>
								<td class="table-img"><?php esc_html_e('10', 'product-comparison-woocommerce'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Home Page Template', 'product-comparison-woocommerce'); ?></td>
								<td class="table-img"><?php esc_html_e('1', 'product-comparison-woocommerce'); ?></td>
								<td class="table-img"><?php esc_html_e('1', 'product-comparison-woocommerce'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Theme sections', 'product-comparison-woocommerce'); ?></td>
								<td class="table-img"><?php esc_html_e('2', 'product-comparison-woocommerce'); ?></td>
								<td class="table-img"><?php esc_html_e('10', 'product-comparison-woocommerce'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Contact us Page Template', 'product-comparison-woocommerce'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('1', 'product-comparison-woocommerce'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Blog Templates & Layout', 'product-comparison-woocommerce'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('3(Full width/Left/Right Sidebar)', 'product-comparison-woocommerce'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Mega Menu', 'product-comparison-woocommerce'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Color Pallete For Particular Sections', 'product-comparison-woocommerce'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Global Color Option', 'product-comparison-woocommerce'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Section Reordering', 'product-comparison-woocommerce'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Demo Importer', 'product-comparison-woocommerce'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Allow To Set Site Title, Tagline, Logo', 'product-comparison-woocommerce'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Enable Disable Options On All Sections, Logo', 'product-comparison-woocommerce'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Full Documentation', 'product-comparison-woocommerce'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Latest WordPress Compatibility', 'product-comparison-woocommerce'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Woo-Commerce Compatibility', 'product-comparison-woocommerce'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Support 3rd Party Plugins', 'product-comparison-woocommerce'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Secure and Optimized Code', 'product-comparison-woocommerce'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Exclusive Functionalities', 'product-comparison-woocommerce'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Section Enable / Disable', 'product-comparison-woocommerce'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Section Google Font Choices', 'product-comparison-woocommerce'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Gallery', 'product-comparison-woocommerce'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Simple & Mega Menu Option', 'product-comparison-woocommerce'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Support to add custom CSS / JS ', 'product-comparison-woocommerce'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Shortcodes', 'product-comparison-woocommerce'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Custom Background, Colors, Header, Logo & Menu', 'product-comparison-woocommerce'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Premium Membership', 'product-comparison-woocommerce'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Budget Friendly Value', 'product-comparison-woocommerce'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Priority Error Fixing', 'product-comparison-woocommerce'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Custom Feature Addition', 'product-comparison-woocommerce'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('All Access Theme Pass', 'product-comparison-woocommerce'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Seamless Customer Support', 'product-comparison-woocommerce'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('WordPress 6.4 or later', 'product-comparison-woocommerce'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('PHP 8.2 or 8.3', 'product-comparison-woocommerce'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('MySQL 5.6 (or greater) | MariaDB 10.0 (or greater)', 'product-comparison-woocommerce'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td></td>
								<td class="table-img"></td>
								<td class="update-link"><a href="<?php echo esc_url( PRODUCT_COMPARISON_WOOCOMMERCE_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Upgrade to Pro', 'product-comparison-woocommerce'); ?></a></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>

		<div id="free_pro" class="tabcontent">
		  	<div class="col-3">
		  		<h4><span class="dashicons dashicons-star-filled"></span><?php esc_html_e('Pro Version', 'product-comparison-woocommerce'); ?></h4>
				<p> <?php esc_html_e('To gain access to extra theme options and more interesting features, upgrade to pro version.', 'product-comparison-woocommerce'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( PRODUCT_COMPARISON_WOOCOMMERCE_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Get Pro', 'product-comparison-woocommerce'); ?></a>
				</div>
		  	</div>
		  	<div class="col-3">
		  		<h4><span class="dashicons dashicons-cart"></span><?php esc_html_e('Pre-purchase Queries', 'product-comparison-woocommerce'); ?></h4>
				<p> <?php esc_html_e('If you have any pre-sale query, we are prepared to resolve it.', 'product-comparison-woocommerce'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( PRODUCT_COMPARISON_WOOCOMMERCE_CONTACT ); ?>" target="_blank"><?php esc_html_e('Question', 'product-comparison-woocommerce'); ?></a>
				</div>
		  	</div>
		  	<div class="col-3">
		  		<h4><span class="dashicons dashicons-admin-customizer"></span><?php esc_html_e('Child Theme', 'product-comparison-woocommerce'); ?></h4>
				<p> <?php esc_html_e('For theme file customizations, make modifications in the child theme and not in the main theme file.', 'product-comparison-woocommerce'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( PRODUCT_COMPARISON_WOOCOMMERCE_CHILD_THEME ); ?>" target="_blank"><?php esc_html_e('About Child Theme', 'product-comparison-woocommerce'); ?></a>
				</div>
		  	</div>

		  	<div class="col-3">
		  		<h4><span class="dashicons dashicons-admin-comments"></span><?php esc_html_e('Frequently Asked Questions', 'product-comparison-woocommerce'); ?></h4>
				<p> <?php esc_html_e('We have gathered top most, frequently asked questions and answered them for your easy understanding. We will list down more as we get new challenging queries. Check back often.', 'product-comparison-woocommerce'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( PRODUCT_COMPARISON_WOOCOMMERCE_FAQ ); ?>" target="_blank"><?php esc_html_e('View FAQ','product-comparison-woocommerce'); ?></a>
				</div>
		  	</div>

		  	<div class="col-3">
		  		<h4><span class="dashicons dashicons-sos"></span><?php esc_html_e('Support Queries', 'product-comparison-woocommerce'); ?></h4>
				<p> <?php esc_html_e('If you have any queries after purchase, you can contact us. We are eveready to help you out.', 'product-comparison-woocommerce'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( PRODUCT_COMPARISON_WOOCOMMERCE_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Contact Us', 'product-comparison-woocommerce'); ?></a>
				</div>
		  	</div>
		</div>
	</div>
</div>

<?php } ?>