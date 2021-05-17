<?php
	function gwp_customize_register($wp_customize){

		$base_priority = 190;

	    $wp_customize->add_section('theme_settings', array(
			'title' 		=> __('Theme Settings','gaudium'),
			'description' 	=> sprintf(__('','gaudium')),
			'priority' 		=> $base_priority+=10
		));

		$priority = 1;

		$wp_customize->add_setting('logo_type', array(
			'default' 		=> _x('0','gaudium'),
			'type' 			=> 'theme_mod'
		));

		$wp_customize->add_control('logo_type', array(
			'label' 		=> __('Logo Type','gaudium'),
			'type'			=> 'select',
			'choices'		=> array(
				'0'			=> __('Select'),
				'text'		=> __('Text'),
				'image'		=> __('Image'),
			),
			'section' 		=> 'theme_settings',
			'priority' 		=> $priority++
		));	

		$wp_customize->add_setting('logo_text', array(
			'default' 		=> _x('Gaudium','gaudium'),
			'type' 			=> 'theme_mod'
		));

		$wp_customize->add_control('logo_text', array(
			'label' 		=> __('Logo Text','gaudium'),
			'section' 		=> 'theme_settings',
			'priority' 		=> $priority++
		));

		$wp_customize->add_setting('logo_url', array(
			'default' 		=> '',
			'type' 			=> 'theme_mod'
		));

		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'logo_url', array(
			'label' 		=> __('Logo Image','gaudium'),
			'section' 		=> 'theme_settings',
			'active_callback'	=> function() {
				return (get_theme_mod('logo_type') == 'image');
			},
			'settings'		=> 'logo_url',
			'priority' 		=> $priority++
		)));

	    $wp_customize->add_section('social', array(
			'title' 		=> __('Social Links','gaudium'),
			'description' 	=> sprintf(__('','gaudium')),
			'priority' 		=> $base_priority++
		));

		$priority = 1;

		$wp_customize->add_setting('activate_social', array(
			'default' 		=> _x('0','gaudium'),
			'type' 			=> 'theme_mod'
		));

		$wp_customize->add_control('activate_social', array(
			'label' 		=> __('Social Links','gaudium'),
			'type'			=> 'select',
			'choices'		=> array(
				'0'			=> __('Select'),
				'-0'		=> __('Hide Social Links'),
				'1'			=> __('Show Social Links'),
			),
			'section' 		=> 'social',
			'priority' 		=> $priority++
		));

		$wp_customize->add_setting('facebook_link', array(
			'default' 			=> _x('','gaudium'),
			'sanitize_callback' => 'esc_url_raw',
			'type' 				=> 'theme_mod',
		));

		$wp_customize->add_control('facebook_link', array(
			'label' 		=> __('Facebook Link','gaudium'),
			'section' 		=> 'social',
			'priority' 		=> $priority++
		));

		$wp_customize->add_setting('twitter_link', array(
			'default' 			=> _x('','gaudium'),
			'sanitize_callback' => 'esc_url_raw',
			'type' 				=> 'theme_mod'
		));

		$wp_customize->add_control('twitter_link', array(
			'label' 		=> __('Twitter Link','gaudium'),
			'section' 		=> 'social',
			'priority' 		=> $priority++
		));
		$wp_customize->add_setting('instagram_link', array(
			'default' 			=> _x('','gaudium'),
			'sanitize_callback' => 'esc_url_raw',
			'type' 				=> 'theme_mod'
		));

		$wp_customize->add_control('instagram_link', array(
			'label' 		=> __('Instagram Link','gaudium'),
			'section' 		=> 'social',
			'priority' 		=> $priority++
		));
		$wp_customize->add_setting('linkedin_link', array(
			'default' 			=> _x('','gaudium'),
			'sanitize_callback' => 'esc_url_raw',
			'type' 				=> 'theme_mod'
		));

		$wp_customize->add_control('linkedin_link', array(
			'label' 		=> __('LinkedIn Link','gaudium'),
			'section' 		=> 'social',
			'priority' 		=> $priority++
		));

		$wp_customize->add_setting('googleplus_link', array(
			'default' 			=> _x('','gaudium'),
			'sanitize_callback' => 'esc_url_raw',
			'type' 				=> 'theme_mod'
		));

		$wp_customize->add_control('googleplus_link', array(
			'label' 		=> __('Google+ Link','gaudium'),
			'section' 		=> 'social',
			'priority' 		=> $priority++
		));

		$wp_customize->add_setting('pinterest_link', array(
			'default' 			=> _x('','gaudium'),
			'sanitize_callback' => 'esc_url_raw',
			'type' 				=> 'theme_mod'
		));

		$wp_customize->add_control('pinterest_link', array(
			'label' 		=> __('Pinterest Link','gaudium'),
			'section' 		=> 'social',
			'priority' 		=> $priority++
		));
		
		$wp_customize->add_setting('dribbble_link', array(
			'default' 			=> _x('','gaudium'),
			'sanitize_callback' => 'esc_url_raw',
			'type' 				=> 'theme_mod'
		));

		$wp_customize->add_control('dribbble_link', array(
			'label' 		=> __('Dribbble Link','gaudium'),
			'section' 		=> 'social',
			'priority' 		=> $priority++
		));

		$wp_customize->add_section('blog', array(
			'title' 		=> __('Blog','gaudium'),
			'description' 	=> sprintf(__('Options for the blog','gaudium')),
			'priority' 		=> $base_priority+=10
		));

		$priority = 1;

		$wp_customize->add_setting('blog_pagination', array(
			'default' 		=> _x('0','gaudium'),
			'type' 			=> 'theme_mod'
		));

		$wp_customize->add_control('blog_pagination', array(
			'label' 		=> __('Blog pagination','gaudium'),
			'type'			=> 'select',
			'choices'		=> array(
				'0'						=> __('Select'),
				'-0'					=> __('No pagination'),
				'load-more'				=> __('Load More Button'),
				'default-pager'			=> __('Default Pager'),
				'aligned-pager'			=> __('Aligned Pager'),
				'pagination-sm'			=> __('Small Pagination'),
				'pagination-md'			=> __('Default Pagination'),
				'pagination-lg'			=> __('Large Pagination'),
			),
			'section' 		=> 'blog',
			'priority' 		=> $priority++
		));

		$wp_customize->add_setting('blog_container', array(
			'default' 		=> _x('0','gaudium'),
			'type' 			=> 'theme_mod'
		));

		$wp_customize->add_control('blog_container', array(
			'label' 		=> __('Container','gaudium'),
			'type'			=> 'select',
			'choices'		=> array(
				'0'				=> __('Select'),
				'boxed'			=> __('Boxed'),
				'fluid'			=> __('Fluid'),
			),
			'section' 		=> 'blog',
			'priority' 		=> $priority++
		));

		$wp_customize->add_setting('blog_layout', array(
			'default' 		=> _x('0','gaudium'),
			'type' 			=> 'theme_mod'
		));

		$wp_customize->add_control('blog_layout', array(
			'label' 		=> __('Blog Layout','gaudium'),
			'type'			=> 'select',
			'choices'		=> array(
				'0'						=> __('Select'),
				'default'				=> __('Default'),
				'landscape'				=> __('Landscape'),
				'portrait'				=> __('Portrait'),
				'masonry'				=> __('Masonry'),
				'mosaic'				=> __('Mosaic'),
			),
			'section' 		=> 'blog',
			'priority' 		=> $priority++
		));

		$wp_customize->add_setting('blog_cols', array(
			'default' 		=> _x('0','gaudium'),
			'type' 			=> 'theme_mod'
		));

		$wp_customize->add_control('blog_cols', array(
			'label' 		=> __('Masonry Column Layout','gaudium'),
			'description'	=> __('Select a layout option, e.g. 2 for a 2 column layout, etc.'),
			'type'			=> 'select',
			'choices'		=> array(
				'0'			=> __('Select'),
				'1'			=> __('1'),
				'2'			=> __('2'),
				'3'			=> __('3'),
				'4'			=> __('4'),
			),
			'section' 		=> 'blog',
			'priority' 		=> $priority++
		));

		$wp_customize->add_setting('blog_sidebar', array(
			'default' 		=> _x('0','gaudium'),
			'type' 			=> 'theme_mod'
		));

		$wp_customize->add_control('blog_sidebar', array(
			'label' 		=> __('Masonry Sidebar','gaudium'),
			'description'	=> __('The sidebar is hidden in mosaic, optional in masonry and shown in other layouts.'),
			'type'			=> 'select',
			'choices'		=> array(
				'0'				=> __('Select'),
				'-0'			=> __('Hide'),
				'1'				=> __('Show'),
			),
			'section' 		=> 'blog',
			'priority' 		=> $priority++
		));

		$wp_customize->add_setting('blog_load', array(
			'default' 		=> _x('0','gaudium'),
			'type' 			=> 'theme_mod'
		));

		$wp_customize->add_control('blog_load', array(
			'label' 		=> __('Number of posts to load','gaudium'),
			'section' 		=> 'blog',
			'priority' 		=> $priority++
		));

	    $wp_customize->add_section('portfolio', array(
			'title' 		=> __('Portfolio','gaudium'),
			'description' 	=> sprintf(__('Options for portfolio','gaudium')),
			'priority' 		=> $base_priority+=10
		));

		$priority = 1;

		$wp_customize->add_setting('portfolio_title', array(
			'default' 		=> _x('Portfolio','gaudium'),
			'type' 			=> 'theme_mod'
		));

		$wp_customize->add_control('portfolio_title', array(
			'label' 		=> __('Portfolio Title','gaudium'),
			'section' 		=> 'portfolio',
			'priority' 		=> $priority++
		));

		$wp_customize->add_setting('portfolio_title_position', array(
			'default' 		=> _x('0','gaudium'),
			'type' 			=> 'theme_mod'
		));

		$wp_customize->add_control('portfolio_title_position', array(
			'label' 		=> __('Portfolio Title Position','gaudium'),
			'type'			=> 'select',
			'choices'		=> array(
				'0'				=> __('Select'),
				'left'			=> __('Left'),
				'center'		=> __('Center'),
				'right'			=> __('Right'),
			),
			'section' 		=> 'portfolio',
			'priority' 		=> $priority++
		));

		$wp_customize->add_setting('portfolio_show_tags', array(
			'default' 		=> _x('0','gaudium'),
			'type' 			=> 'theme_mod'
		));

		$wp_customize->add_control('portfolio_show_tags', array(
			'label' 		=> __('Show Project Tags','gaudium'),
			'type'			=> 'select',
			'choices'		=> array(
				'0'			=> __('Select'),
				'-0'		=> __('Hide'),
				'1'			=> __('Show'),
			),
			'section' 		=> 'portfolio',
			'priority' 		=> $priority++
		));

		$wp_customize->add_setting('portfolio_tags_position', array(
			'default' 		=> _x('0','gaudium'),
			'type' 			=> 'theme_mod'
		));

		$wp_customize->add_control('portfolio_tags_position', array(
			'label' 		=> __('Project Tags Position','gaudium'),
			'type'			=> 'select',
			'choices'		=> array(
				'0'				=> __('Select'),
				'left'			=> __('Left'),
				'center'		=> __('Center'),
				'right'			=> __('Right'),
			),
			'section' 		=> 'portfolio',
			'priority' 		=> $priority++
		));

		$wp_customize->add_setting('portfolio_cols', array(
			'default' 		=> _x('0','gaudium'),
			'type' 			=> 'theme_mod'
		));

		$wp_customize->add_control('portfolio_cols', array(
			'label' 		=> __('Column Layout','gaudium'),
			'description'	=> __('Select a layout option, e.g. 4 for 4 column layout, etc.'),
			'type'			=> 'select',
			'choices'		=> array(
				'0'			=> __('Select'),
				'1'			=> __('1'),
				'2'			=> __('2'),
				'3'			=> __('3'),
				'4'			=> __('4'),
			),
			'section' 		=> 'portfolio',
			'priority' 		=> $priority++
		));

		$wp_customize->add_setting('portfolio_gutters', array(
			'default' 		=> _x('0','gaudium'),
			'type' 			=> 'theme_mod'
		));

		$wp_customize->add_control('portfolio_gutters', array(
			'label' 		=> __('Gutters','gaudium'),
			'type'			=> 'select',
			'choices'		=> array(
				'0'			=> __('Select'),
				'-0'		=> __('Gutters'),
				'1'			=> __('No gutters'),
			),
			'section' 		=> 'portfolio',
			'priority' 		=> $priority++
		));

		$wp_customize->add_setting('portfolio_pagination', array(
			'default' 		=> _x('0','gaudium'),
			'type' 			=> 'theme_mod'
		));

		$wp_customize->add_control('portfolio_pagination', array(
			'label' 		=> __('Load More','gaudium'),
			'type'			=> 'select',
			'choices'		=> array(
				'0'						=> __('Select'),
				'-0'					=> __('No pagination'),
				'load-more'				=> __('Load More Button'),
				'default-pager'			=> __('Default Pager'),
				'aligned-pager'			=> __('Aligned Pager')
			),
			'section' 		=> 'portfolio',
			'priority' 		=> $priority++
		));

		$wp_customize->add_setting('portfolio_container', array(
			'default' 		=> _x('0','gaudium'),
			'type' 			=> 'theme_mod'
		));

		$wp_customize->add_control('portfolio_container', array(
			'label' 		=> __('Container','gaudium'),
			'type'			=> 'select',
			'choices'		=> array(
				'0'				=> __('Select'),
				'boxed'			=> __('Boxed'),
				'fluid'			=> __('Fluid'),
			),
			'section' 		=> 'portfolio',
			'priority' 		=> $priority++
		));

		$wp_customize->add_setting('portfolio_layout', array(
			'default' 		=> _x('0','gaudium'),
			'type' 			=> 'theme_mod'
		));

		$wp_customize->add_control('portfolio_layout', array(
			'label' 		=> __('Thumbnail Layout','gaudium'),
			'type'			=> 'select',
			'choices'		=> array(
				'0'				=> __('Select'),
				'default'		=> __('Default'),
				'landscape'		=> __('Landscape'),
				'portrait'		=> __('Portrait'),
				'masonry'		=> __('Masonry'),
				'mosaic'		=> __('Mosaic'),
			),
			'section' 		=> 'portfolio',
			'priority' 		=> $priority++
		));

		$wp_customize->add_setting('portfolio_load', array(
			'default' 		=> _x('0','gaudium'),
			'type' 			=> 'theme_mod'
		));

		$wp_customize->add_control('portfolio_load', array(
			'label' 		=> __('Number of items to load','gaudium'),
			'section' 		=> 'portfolio',
			'priority' 		=> $priority++
		));

		$wp_customize->add_panel('blocks_panel', array(
		      	'title' 		=> __('Blocks','gaudium'),
		      	'description' 	=> esc_html__( 'Customize stage slides.' ),
		      	'priority' 		=> $base_priority+=10
		   	)
		);

		$section_priority = 1;

		$wp_customize->add_section('blocks_settings', array(
			'title' 		=> __('Blocks','gaudium'),
			'panel'			=> 'blocks_panel',
			'description' 	=> sprintf(__('Options for blocks','gaudium')),
			'priority' 		=> $section_priority++
		));

		$priority = 1;

		$wp_customize->add_setting('blocks_number', array(
			'default' 		=> _x('0','gaudium'),
			'type' 			=> 'theme_mod'
		));

		$wp_customize->add_control('blocks_number', array(
			'label' 		=> __('Number of Blocks','gaudium'),
			'description'	=> __('Requires PUBLISH and RELOAD.','gaudium'),
			'section' 		=> 'blocks_settings',
			'priority' 		=> $priority++
		));

		for($i = 0; $i < intval(get_theme_mod('blocks_number')); $i++) {

			$wp_customize->add_section('block_'.$i, array(
				'title' 		=> __('Block ','gaudium').($i+1).__('  Settings','gaudium'),
				'panel'			=> 'blocks_panel',
				'description' 	=> sprintf(__('Options for blocks','gaudium')),
				'priority' 		=> $section_priority++
			));

			$priority = 1;

			$wp_customize->add_setting('block_'.$i.'_position', array(
				'default' 		=> _x('0','gaudium'),
				'type' 			=> 'theme_mod'
			));

			$wp_customize->add_control('block_'.$i.'_position', array(
				'label' 		=> __('Block Position','gaudium'),
				'type'			=> 'select',
				'choices'		=> array(
					'0'						=> __('Select'),
					'common-header'			=> __('Header'),
					'common-top'			=> __('Top'),
					'common-middle-top'		=> __('Middle Top'),
					'common-middle-bottom'	=> __('Middle Bottom'),
					'common-bottom'			=> __('Bottom'),
				),
				'section' 		=> 'block_'.$i,
				'priority' 		=> $priority++
			));

			$wp_customize->add_setting('block_'.$i.'_height', array(
				'default' 		=> _x('0','gaudium'),
				'type' 			=> 'theme_mod'
			));

			$wp_customize->add_control('block_'.$i.'_height', array(
				'label' 		=> __('Block Height','gaudium'),
				'section' 		=> 'block_'.$i,
				'priority' 		=> $priority++
			));

			$wp_customize->add_setting('block_'.$i.'_title', array(
				'default' 		=> _x('','gaudium'),
				'type' 			=> 'theme_mod'
			));

			$wp_customize->add_control('block_'.$i.'_title', array(
				'label' 		=> __('Block Title','gaudium'),
				'section' 		=> 'block_'.$i,
				'priority' 		=> $priority++
			));

			$wp_customize->add_setting('block_'.$i.'_title_position', array(
				'default' 		=> _x('0','gaudium'),
				'type' 			=> 'theme_mod'
			));

			$wp_customize->add_control('block_'.$i.'_title_position', array(
				'label' 		=> __('Block Title','gaudium'),
				'type'			=> 'select',
				'choices'		=> array(
					'0'			=> __('Select'),
					'left'		=> __('Left'),
					'center'	=> __('Center'),
					'right'		=> __('Right'),
				),
				'section' 		=> 'block_'.$i,
				'priority' 		=> $priority++
			));

			$wp_customize->add_setting('block_'.$i.'_title_bottom_space', array(
				'default' 		=> _x('0','gaudium'),
				'type' 			=> 'theme_mod'
			));

			$wp_customize->add_control('block_'.$i.'_title_bottom_space', array(
				'label' 		=> __('Block Title Bottom','gaudium'),
				'description'	=> __('Add/remove bottom space.'),
					'type'			=> 'select',
					'choices'	=> array(
						'0'		=> __('Select'),
						'-0'	=> __('Reset'),
						'-'		=> __('0'),
						'1'		=> __('1'),
						'2'		=> __('2'),
						'3'		=> __('3'),
						'4'		=> __('4'),
						'5'		=> __('5'),
						'6'		=> __('6'),
						'7'		=> __('7'),
						'8'		=> __('8'),
						'9'		=> __('9'),
						'10'	=> __('10'),
						'11'	=> __('11'),
						'12'	=> __('12'),
						'13'	=> __('13'),
						'14'	=> __('14'),
						'15'	=> __('15'),
						'16'	=> __('16'),
						'17'	=> __('17'),
						'18'	=> __('18'),
						'19'	=> __('19'),
						'20'	=> __('20'),
						'21'	=> __('21'),
						'22'	=> __('22'),
						'23'	=> __('23'),
						'24'	=> __('24'),
						'25'	=> __('25'),
						'26'	=> __('26'),
						'27'	=> __('27'),
						'28'	=> __('28'),
						'29'	=> __('29'),
						'30'	=> __('30'),
						'31'	=> __('31'),
						'32'	=> __('32'),
						'33'	=> __('33'),
						'34'	=> __('34'),
						'35'	=> __('35'),
						'36'	=> __('36'),
						'37'	=> __('37'),
						'38'	=> __('38'),
						'39'	=> __('39'),
						'40'	=> __('40'),
					),
				'section' 		=> 'block_'.$i,
				'priority' 		=> $priority++
			));

			$wp_customize->add_setting('block_'.$i.'_container', array(
				'default' 		=> _x('0','gaudium'),
				'type' 			=> 'theme_mod'
			));

			$wp_customize->add_control('block_'.$i.'_container', array(
				'label' 		=> __('Container','gaudium'),
				'type'			=> 'select',
				'choices'		=> array(
					'0'			=> __('Select'),
					'boxed'		=> __('Boxed'),
					'fluid'		=> __('Fluid'),
				),
				'section' 		=> 'block_'.$i,
				'priority' 		=> $priority++
			));

			$wp_customize->add_setting('block_'.$i.'_divider', array(
				'default' 		=> _x('0','gaudium'),
				'type' 			=> 'theme_mod'
			));

			$wp_customize->add_control('block_'.$i.'_divider', array(
				'label' 		=> __('Divider','gaudium'),
				'type'			=> 'select',
				'choices'		=> array(
					'0'						=> __('Select'),
					'-0'					=> __('No divider'),
					'divider'				=> __('Divider'),
					'divider-no-padding'	=> __('Divider (No Padding)'),
				),
				'section' 		=> 'block_'.$i,
				'priority' 		=> $priority++
			));

			$wp_customize->add_setting('block_'.$i.'_bg', array(
				'default' 		=> _x('0','gaudium'),
				'type' 			=> 'theme_mod'
			));

			$wp_customize->add_control('block_'.$i.'_bg', array(
				'label' 		=> __('Background Color','gaudium'),
				'type'			=> 'select',
				'choices'		=> array(
					'0'		=> __('Select'),
					'1'		=> __('White'),
					'2'		=> __('Light'),
					'3'		=> __('Dark'),
				),
				'section' 		=> 'block_'.$i,
				'priority' 		=> $priority++
			));

			$wp_customize->add_setting('block_'.$i.'_gutters', array(
				'default' 		=> _x('0','gaudium'),
				'type' 			=> 'theme_mod'
			));

			$wp_customize->add_control('block_'.$i.'_gutters', array(
				'label' 		=> __('Gutters','gaudium'),
				'type'			=> 'select',
				'choices'		=> array(
					'0'		=> __('Select'),
					'-0'	=> __('Gutters'),
					'1'		=> __('No gutters'),
				),
				'section' 		=> 'block_'.$i,
				'priority' 		=> $priority++
			));

			$wp_customize->add_setting('block_'.$i.'_type', array(
				'default' 		=> _x('0','gaudium'),
				'type' 			=> 'theme_mod'
			));
			
			$wp_customize->add_control('block_'.$i.'_type', array(
				'label' 		=> __('Block Type','gaudium'),
				'description'	=> __('Requires PUBLISH and RELOAD.','gaudium'),
				'type'			=> 'select',
				'choices'		=> array(
					'0'					=> __('Select'),
					'custom'			=> __('Custom'),
					'blog'				=> __('Recent Posts'),
					'portfolio'			=> __('Recent Projects'),
				),
				'section' 		=> 'block_'.$i,
				'priority' 		=> $priority++
			));

			if(get_theme_mod('block_'.$i.'_type') == 'portfolio') {
				$wp_customize->add_setting('block_'.$i.'_portfolio_show_tags', array(
					'default' 		=> _x('0','gaudium'),
					'type' 			=> 'theme_mod'
				));

				$wp_customize->add_control('block_'.$i.'_portfolio_show_tags', array(
					'label' 		=> __('Show Project Tags','gaudium'),
					'type'			=> 'select',
					'choices'		=> array(
						'0'			=> __('Select'),
						'-0'		=> __('Hide'),
						'1'			=> __('Show'),
					),
					'section' 		=> 'block_'.$i,
					'priority' 		=> $priority++
				));

				$wp_customize->add_setting('block_'.$i.'_portfolio_tags_position', array(
					'default' 		=> _x('0','gaudium'),
					'type' 			=> 'theme_mod'
				));

				$wp_customize->add_control('block_'.$i.'_portfolio_tags_position', array(
					'label' 		=> __('Project Tags Position','gaudium'),
					'type'			=> 'select',
					'choices'		=> array(
						'0'				=> __('Select'),
						'left'			=> __('Left'),
						'center'		=> __('Center'),
						'right'			=> __('Right'),
					),
					'section' 		=> 'block_'.$i,
					'priority' 		=> $priority++
				));
				$wp_customize->add_setting('block_'.$i.'_portfolio_gutters', array(
					'default' 		=> _x('0','gaudium'),
					'type' 			=> 'theme_mod'
				));

				$wp_customize->add_control('block_'.$i.'_portfolio_gutters', array(
					'label' 		=> __('Gutters','gaudium'),
					'type'			=> 'select',
					'choices'		=> array(
						'0'			=> __('Select'),
						'-0'		=> __('Gutters'),
						'1'			=> __('No gutters'),
					),
					'section' 		=> 'block_'.$i,
					'priority' 		=> $priority++
				));
				$wp_customize->add_setting('block_'.$i.'_portfolio_container', array(
					'default' 		=> _x('0','gaudium'),
					'type' 			=> 'theme_mod'
				));

				$wp_customize->add_control('block_'.$i.'_portfolio_container', array(
					'label' 		=> __('Container','gaudium'),
					'type'			=> 'select',
					'choices'		=> array(
						'0'				=> __('Select'),
						'boxed'			=> __('Boxed'),
						'fluid'			=> __('Fluid'),
					),
					'section' 		=> 'block_'.$i,
					'priority' 		=> $priority++
				));

				$wp_customize->add_setting('block_'.$i.'_portfolio_layout', array(
					'default' 		=> _x('0','gaudium'),
					'type' 			=> 'theme_mod'
				));

				$wp_customize->add_control('block_'.$i.'_portfolio_layout', array(
					'label' 		=> __('Thumbnail Layout','gaudium'),
					'type'			=> 'select',
					'choices'		=> array(
						'0'				=> __('Select'),
						'default'		=> __('Default'),
						'landscape'		=> __('Landscape'),
						'portrait'		=> __('Portrait'),
						'masonry'		=> __('Masonry'),
						'mosaic'		=> __('Mosaic'),
					),
					'section' 		=> 'block_'.$i,
					'priority' 		=> $priority++
				));
			}
			if(get_theme_mod('block_'.$i.'_type') == 'portfolio' ||
		       get_theme_mod('block_'.$i.'_type') == 'blog') {
				$wp_customize->add_setting('block_'.$i.'_number_posts', array(
					'default' 		=> _x('0','gaudium'),
					'type' 			=> 'theme_mod'
				));
				
				$wp_customize->add_control('block_'.$i.'_number_posts', array(
					'label' 		=> __('Number of Posts','gaudium'),
					'description'	=> __('Requires PUBLISH and RELOAD.','gaudium'),
					'section' 		=> 'block_'.$i,
					'priority' 		=> $priority++
				));

				$wp_customize->add_setting('block_'.$i.'_load_more', array(
					'default' 		=> _x('0','gaudium'),
					'type' 			=> 'theme_mod'
				));
				
				$wp_customize->add_control('block_'.$i.'_load_more', array(
					'label' 		=> __('Load More Button','gaudium'),
					'type'			=> 'select',
					'choices'		=> array(
						'0'			=> 'Select',
						'-0'		=> 'Hide',
						'1'			=> 'Show',
					),
					'section' 		=> 'block_'.$i,
					'priority' 		=> $priority++
				));

				$wp_customize->add_setting('block_'.$i.'_load', array(
					'default' 		=> _x('0','gaudium'),
					'type' 			=> 'theme_mod'
				));
				
				$wp_customize->add_control('block_'.$i.'_load', array(
					'label' 		=> __('Number of Posts to Load','gaudium'),
					'section' 		=> 'block_'.$i,
					'priority' 		=> $priority++
				));

				$wp_customize->add_setting('block_'.$i.'_layout', array(
					'default' 		=> _x('0','gaudium'),
					'type' 			=> 'theme_mod'
				));
				
				$wp_customize->add_control('block_'.$i.'_layout', array(
					'label' 		=> __('Layout','gaudium'),
					'type'			=> 'select',
					'choices'		=> array(
						'0'		=> __('Select'),
						'3'		=> __('4 Columns'),
						'4'		=> __('3 Columns'),
						'6'		=> __('2 Columns'),
						'12'	=> __('1 Column'),
					),
					'section' 		=> 'block_'.$i,
					'priority' 		=> $priority++
				));
			}

			$wp_customize->add_setting('block_'.$i.'_number_images', array(
				'default' 		=> _x('0','gaudium'),
				'type' 			=> 'theme_mod'
			));
			
			$wp_customize->add_control('block_'.$i.'_number_images', array(
				'label' 		=> __('Number of Images','gaudium'),
				'description'	=> __('Requires PUBLISH and RELOAD.','gaudium'),
				'section' 		=> 'block_'.$i,
				'priority' 		=> $priority++
			));

			for($j = 0; $j < intval(get_theme_mod('block_'.$i.'_number_images')); $j++) {

				$wp_customize->add_setting('block_'.$i.'_image_'.$j.'_xs_url', array(
					'default' 		=> '',
					'type' 			=> 'theme_mod'
				));

				$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'block_'.$i.'_image_'.$j.'_xs_url', array(
					'label' 		=> __('XSmall Screen (Only) Image ','gaudium').($j+1),
					'section' 		=> 'block_'.$i,
					'settings'		=> 'block_'.$i.'_image_'.$j.'_xs_url',
					'priority' 		=> $priority++
				)));

				$wp_customize->add_setting('block_'.$i.'_image_'.$j.'_url', array(
					'default' 		=> '',
					'type' 			=> 'theme_mod'
				));

				$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'block_'.$i.'_image_'.$j.'_url', array(
					'label' 		=> __('XSmall Screen Image ','gaudium').($j+1),
					'section' 		=> 'block_'.$i,
					'settings'		=> 'block_'.$i.'_image_'.$j.'_url',
					'priority' 		=> $priority++
				)));

				$wp_customize->add_setting('block_'.$i.'_image_'.$j.'_sm_url', array(
					'default' 		=> '',
					'type' 			=> 'theme_mod'
				));

				$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'block_'.$i.'_image_'.$j.'_sm_url', array(
					'label' 		=> __('Small Screen Image ','gaudium').($j+1),
					'section' 		=> 'block_'.$i,
					'settings'		=> 'block_'.$i.'_image_'.$j.'_sm_url',
					'priority' 		=> $priority++
				)));

				$wp_customize->add_setting('block_'.$i.'_image_'.$j.'_md_url', array(
					'default' 		=> '',
					'type' 			=> 'theme_mod'
				));

				$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'block_'.$i.'_image_'.$j.'_md_url', array(
					'label' 		=> __('Medium Screen Image ','gaudium').($j+1),
					'section' 		=> 'block_'.$i,
					'settings'		=> 'block_'.$i.'_image_'.$j.'_md_url',
					'priority' 		=> $priority++
				)));

				$wp_customize->add_setting('block_'.$i.'_image_'.$j.'_lg_url', array(
					'default' 		=> '',
					'type' 			=> 'theme_mod'
				));

				$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'block_'.$i.'_image_'.$j.'_lg_url', array(
					'label' 		=> __('Large Screen Image ','gaudium').($j+1),
					'section' 		=> 'block_'.$i,
					'settings'		=> 'block_'.$i.'_image_'.$j.'_lg_url',
					'priority' 		=> $priority++
				)));

				$wp_customize->add_setting('block_'.$i.'_image_'.$j.'_bg', array(
					'default' 		=> _x('0','gaudium'),
					'type' 			=> 'theme_mod'

				));

				$wp_customize->add_control('block_'.$i.'_image_'.$j.'_bg', array(
					'label' 		=> __('Image ','gaudium').($j+1).__(' Background Color','gaudium'),
					'description'	=> __('Background color, e.g. #e4e4e4'),
					'section' 		=> 'block_'.$i,
					'priority' 		=> $priority++
				));

				$wp_customize->add_setting('block_'.$i.'_image_'.$j.'_top_xs_space', array(
					'default' 		=> _x('0','gaudium'),
					'type' 			=> 'theme_mod'
				));

				$wp_customize->add_control('block_'.$i.'_image_'.$j.'_top_xs_space', array(
					'label' 		=> __('XSmall Screen Top','gaudium'),
					'description'	=> __('Add space to top on extra-small and larger screens, i.e. mobile devices. Select 0 to deactivate.'),
					'type'			=> 'select',
					'choices'	=> array(
									'0'		=> __('Select'),
									'-0'	=> __('Reset'),
									'1'		=> __('1'),
									'2'		=> __('2'),
									'3'		=> __('3'),
									'4'		=> __('4'),
									'5'		=> __('5'),
									'6'		=> __('6'),
									'7'		=> __('7'),
									'8'		=> __('8'),
									'9'		=> __('9'),
									'10'	=> __('10'),
									'11'	=> __('11'),
									'12'	=> __('12'),
									'13'	=> __('13'),
									'14'	=> __('14'),
									'15'	=> __('15'),
									'16'	=> __('16'),
									'17'	=> __('17'),
									'18'	=> __('18'),
									'19'	=> __('19'),
									'20'	=> __('20'),
									'21'	=> __('21'),
									'22'	=> __('22'),
									'23'	=> __('23'),
									'24'	=> __('24'),
									'25'	=> __('25'),
									'26'	=> __('26'),
									'27'	=> __('27'),
									'28'	=> __('28'),
									'29'	=> __('29'),
									'30'	=> __('30'),
									'31'	=> __('31'),
									'32'	=> __('32'),
									'33'	=> __('33'),
									'34'	=> __('34'),
									'35'	=> __('35'),
									'36'	=> __('36'),
									'37'	=> __('37'),
									'38'	=> __('38'),
									'39'	=> __('39'),
									'40'	=> __('40'),
								),
					'section' 		=> 'block_'.$i,
					'priority' 		=> $priority++
				));

				$wp_customize->add_setting('block_'.$i.'_image_'.$j.'_bottom_xs_space', array(
					'default' 		=> _x('0','gaudium'),
					'type' 			=> 'theme_mod'
				));

				$wp_customize->add_control('block_'.$i.'_image_'.$j.'_bottom_xs_space', array(
					'label' 		=> __('XSmall Screen Bottom','gaudium'),
					'description'	=> __('Add space to bottom on extra-small and larger screens, i.e. mobile devices. Select 0 to deactivate.'),
					'type'			=> 'select',
					'choices'	=> array(
									'0'		=> __('Select'),
									'-0'	=> __('Reset'),
									'1'		=> __('1'),
									'2'		=> __('2'),
									'3'		=> __('3'),
									'4'		=> __('4'),
									'5'		=> __('5'),
									'6'		=> __('6'),
									'7'		=> __('7'),
									'8'		=> __('8'),
									'9'		=> __('9'),
									'10'	=> __('10'),
									'11'	=> __('11'),
									'12'	=> __('12'),
									'13'	=> __('13'),
									'14'	=> __('14'),
									'15'	=> __('15'),
									'16'	=> __('16'),
									'17'	=> __('17'),
									'18'	=> __('18'),
									'19'	=> __('19'),
									'20'	=> __('20'),
									'21'	=> __('21'),
									'22'	=> __('22'),
									'23'	=> __('23'),
									'24'	=> __('24'),
									'25'	=> __('25'),
									'26'	=> __('26'),
									'27'	=> __('27'),
									'28'	=> __('28'),
									'29'	=> __('29'),
									'30'	=> __('30'),
									'31'	=> __('31'),
									'32'	=> __('32'),
									'33'	=> __('33'),
									'34'	=> __('34'),
									'35'	=> __('35'),
									'36'	=> __('36'),
									'37'	=> __('37'),
									'38'	=> __('38'),
									'39'	=> __('39'),
									'40'	=> __('40'),
								),
					'section' 		=> 'block_'.$i,
					'priority' 		=> $priority++
				));

				$wp_customize->add_setting('block_'.$i.'_image_'.$j.'_bg_size', array(
					'default' 		=> _x('0','gaudium'),
					'type' 			=> 'theme_mod'
				));

				$wp_customize->add_control('block_'.$i.'_image_'.$j.'_bg_size', array(
					'label' 		=> __('Image ','gaudium').($j+1).__(' Background Size','gaudium'),
					'type'			=> 'select',
					'choices'		=> array(
						'0'			=> __('Select'),
						'-0'		=> __('Custom'),
						'auto'		=> __('Auto'),
						'cover'		=> __('Cover'),
						'contain'	=> __('Contain'),
					),
					'section' 		=> 'block_'.$i,
					'priority' 		=> $priority++
				));

				$wp_customize->add_setting('block_'.$i.'_image_'.$j.'_layout', array(
					'default' 		=> _x('0','gaudium'),
					'type' 			=> 'theme_mod'
				));

				$wp_customize->add_control('block_'.$i.'_image_'.$j.'_layout', array(
					'label' 		=> __('Image ','gaudium').($j+1).__(' Layout','gaudium'),
					'type'			=> 'select',
					'choices'		=> array(
						'0'				=> __('Select'),
						'default'		=> __('Default'),
						'landscape'		=> __('Landscape'),
						'portrait'		=> __('Portrait'),
						'vr'		    => __('Vertical Rhythm'),
					),
					'section' 		=> 'block_'.$i,
					'priority' 		=> $priority++
				));

				$wp_customize->add_setting('block_'.$i.'_image_'.$j.'_xs_width', array(
					'default' 		=> _x('0','gaudium'),
					'type' 			=> 'theme_mod'
				));

				$wp_customize->add_control('block_'.$i.'_image_'.$j.'_xs_width', array(
					'label' 		=> __('XSmall Screen Image ','gaudium').($j+1).__(' Width','gaudium'),
					'description'	=> __('Enter value in px, % or em, e.g. 500px'),
					'section' 		=> 'block_'.$i,
					'priority' 		=> $priority++
				));

				$wp_customize->add_setting('block_'.$i.'_image_'.$j.'_width', array(
					'default' 		=> _x('0','gaudium'),
					'type' 			=> 'theme_mod'
				));

				$wp_customize->add_control('block_'.$i.'_image_'.$j.'_width', array(
					'label' 		=> __('Small Screen Image ','gaudium').($j+1).__(' Width','gaudium'),
					'description'	=> __('Enter value in px, % or em, e.g. 500px'),
					'section' 		=> 'block_'.$i,
					'priority' 		=> $priority++
				));

				$wp_customize->add_setting('block_'.$i.'_image_'.$j.'_md_width', array(
					'default' 		=> _x('0','gaudium'),
					'type' 			=> 'theme_mod'
				));

				$wp_customize->add_control('block_'.$i.'_image_'.$j.'_md_width', array(
					'label' 		=> __('Medium Screen Image ','gaudium').($j+1).__(' Width','gaudium'),
					'description'	=> __('Enter value in px, % or em, e.g. 500px'),
					'section' 		=> 'block_'.$i,
					'priority' 		=> $priority++
				));

				$wp_customize->add_setting('block_'.$i.'_image_'.$j.'_lg_width', array(
					'default' 		=> _x('0','gaudium'),
					'type' 			=> 'theme_mod'
				));

				$wp_customize->add_control('block_'.$i.'_image_'.$j.'_lg_width', array(
					'label' 		=> __('Large Screen Image ','gaudium').($j+1).__(' Width','gaudium'),
					'description'	=> __('Enter value in px, % or em, e.g. 500px'),
					'section' 		=> 'block_'.$i,
					'priority' 		=> $priority++
				));

				$wp_customize->add_setting('block_'.$i.'_image_'.$j.'_xs_height', array(
					'default' 		=> _x('0','gaudium'),
					'type' 			=> 'theme_mod'
				));

				$wp_customize->add_control('block_'.$i.'_image_'.$j.'_xs_height', array(
					'label' 		=> __('XSmall Screen Image ','gaudium').($j+1).__(' Height','gaudium'),
					'description'	=> __('Enter value in px, % or em, e.g. 500px'),
					'section' 		=> 'block_'.$i,
					'priority' 		=> $priority++
				));
				
				$wp_customize->add_setting('block_'.$i.'_image_'.$j.'_height', array(
					'default' 		=> _x('0','gaudium'),
					'type' 			=> 'theme_mod'
				));

				$wp_customize->add_control('block_'.$i.'_image_'.$j.'_height', array(
					'label' 		=> __('Small Screen Image ','gaudium').($j+1).__(' Height','gaudium'),
					'description'	=> __('Enter value in px, % or em, e.g. 500px'),
					'section' 		=> 'block_'.$i,
					'priority' 		=> $priority++
				));

				$wp_customize->add_setting('block_'.$i.'_image_'.$j.'_md_height', array(
					'default' 		=> _x('0','gaudium'),
					'type' 			=> 'theme_mod'
				));

				$wp_customize->add_control('block_'.$i.'_image_'.$j.'_md_height', array(
					'label' 		=> __('Medium Screen Image ','gaudium').($j+1).__(' Height','gaudium'),
					'description'	=> __('Enter value in px, % or em, e.g. 500px'),
					'section' 		=> 'block_'.$i,
					'priority' 		=> $priority++
				));

				$wp_customize->add_setting('block_'.$i.'_image_'.$j.'_lg_height', array(
					'default' 		=> _x('0','gaudium'),
					'type' 			=> 'theme_mod'
				));

				$wp_customize->add_control('block_'.$i.'_image_'.$j.'_lg_height', array(
					'label' 		=> __('Large Screen Image ','gaudium').($j+1).__(' Height','gaudium'),
					'description'	=> __('Enter value in px, % or em, e.g. 500px'),
					'section' 		=> 'block_'.$i,
					'priority' 		=> $priority++
				));

				$wp_customize->add_setting('block_'.$i.'_image_'.$j.'_box_xs_width', array(
					'default' 		=> _x('0','gaudium'),
					'type' 			=> 'theme_mod'
				));

				$wp_customize->add_control('block_'.$i.'_image_'.$j.'_box_xs_width', array(
					'label' 		=> __('XSmall Screen Image ','gaudium').($j+1).__(' Box Width','gaudium'),
					'description'	=> __('Enter value in px, % or em, e.g. 500px'),
					'section' 		=> 'block_'.$i,
					'priority' 		=> $priority++
				));

				$wp_customize->add_setting('block_'.$i.'_image_'.$j.'_box_width', array(
					'default' 		=> _x('0','gaudium'),
					'type' 			=> 'theme_mod'
				));

				$wp_customize->add_control('block_'.$i.'_image_'.$j.'_box_width', array(
					'label' 		=> __('Small Screen Image ','gaudium').($j+1).__(' Box Width','gaudium'),
					'description'	=> __('Enter value in px, % or em, e.g. 500px'),
					'section' 		=> 'block_'.$i,
					'priority' 		=> $priority++
				));

				$wp_customize->add_setting('block_'.$i.'_image_'.$j.'_box_md_width', array(
					'default' 		=> _x('0','gaudium'),
					'type' 			=> 'theme_mod'
				));

				$wp_customize->add_control('block_'.$i.'_image_'.$j.'_box_md_width', array(
					'label' 		=> __('Medium Screen Image ','gaudium').($j+1).__(' Box Width','gaudium'),
					'description'	=> __('Enter value in px, % or em, e.g. 500px'),
					'section' 		=> 'block_'.$i,
					'priority' 		=> $priority++
				));

				$wp_customize->add_setting('block_'.$i.'_image_'.$j.'_box_lg_width', array(
					'default' 		=> _x('0','gaudium'),
					'type' 			=> 'theme_mod'
				));

				$wp_customize->add_control('block_'.$i.'_image_'.$j.'_box_lg_width', array(
					'label' 		=> __('Large Screen Image ','gaudium').($j+1).__(' Box Width','gaudium'),
					'description'	=> __('Enter value in px, % or em, e.g. 500px'),
					'section' 		=> 'block_'.$i,
					'priority' 		=> $priority++
				));

				$wp_customize->add_setting('block_'.$i.'_image_'.$j.'_box_xs_height', array(
					'default' 		=> _x('0','gaudium'),
					'type' 			=> 'theme_mod'
				));

				$wp_customize->add_control('block_'.$i.'_image_'.$j.'_box_xs_height', array(
					'label' 		=> __('XSmall Screen Image ','gaudium').($j+1).__(' Box Height','gaudium'),
					'description'	=> __('Enter value in px, % or em, e.g. 500px'),
					'section' 		=> 'block_'.$i,
					'priority' 		=> $priority++
				));

				$wp_customize->add_setting('block_'.$i.'_image_'.$j.'_box_height', array(
					'default' 		=> _x('0','gaudium'),
					'type' 			=> 'theme_mod'
				));

				$wp_customize->add_control('block_'.$i.'_image_'.$j.'_box_height', array(
					'label' 		=> __('Small Screen Image ','gaudium').($j+1).__(' Box Height','gaudium'),
					'description'	=> __('Enter value in px, % or em, e.g. 500px'),
					'section' 		=> 'block_'.$i,
					'priority' 		=> $priority++
				));

				$wp_customize->add_setting('block_'.$i.'_image_'.$j.'_box_md_height', array(
					'default' 		=> _x('0','gaudium'),
					'type' 			=> 'theme_mod'
				));

				$wp_customize->add_control('block_'.$i.'_image_'.$j.'_box_md_height', array(
					'label' 		=> __('Medium Screen Image ','gaudium').($j+1).__(' Box Height','gaudium'),
					'description'	=> __('Enter value in px, % or em, e.g. 500px'),
					'section' 		=> 'block_'.$i,
					'priority' 		=> $priority++
				));

				$wp_customize->add_setting('block_'.$i.'_image_'.$j.'_box_lg_height', array(
					'default' 		=> _x('0','gaudium'),
					'type' 			=> 'theme_mod'
				));

				$wp_customize->add_control('block_'.$i.'_image_'.$j.'_box_lg_height', array(
					'label' 		=> __('Large Screen Image ','gaudium').($j+1).__(' Box Height','gaudium'),
					'description'	=> __('Enter value in px, % or em, e.g. 500px'),
					'section' 		=> 'block_'.$i,
					'priority' 		=> $priority++
				));

				$wp_customize->add_setting('block_'.$i.'_image_'.$j.'_box_xs_x', array(
					'default' 		=> _x('0','gaudium'),
					'type' 			=> 'theme_mod'
				));

				$wp_customize->add_control('block_'.$i.'_image_'.$j.'_box_xs_x', array(
					'label' 		=> __('XSmall Screen Image ','gaudium').($j+1).__(' Box Left Position','gaudium'),
					'description'	=> __('Enter value in px, % or em, e.g. 500px'),
					'section' 		=> 'block_'.$i,
					'priority' 		=> $priority++
				));

				$wp_customize->add_setting('block_'.$i.'_image_'.$j.'_box_x', array(
					'default' 		=> _x('0','gaudium'),
					'type' 			=> 'theme_mod'
				));

				$wp_customize->add_control('block_'.$i.'_image_'.$j.'_box_x', array(
					'label' 		=> __('Small Screen Image ','gaudium').($j+1).__(' Box Left Position','gaudium'),
					'description'	=> __('Enter value in px, % or em, e.g. 500px'),
					'section' 		=> 'block_'.$i,
					'priority' 		=> $priority++
				));

				$wp_customize->add_setting('block_'.$i.'_image_'.$j.'_box_md_x', array(
					'default' 		=> _x('0','gaudium'),
					'type' 			=> 'theme_mod'
				));

				$wp_customize->add_control('block_'.$i.'_image_'.$j.'_box_md_x', array(
					'label' 		=> __('Medium Screen Image ','gaudium').($j+1).__(' Box Left Position','gaudium'),
					'description'	=> __('Enter value in px, % or em, e.g. 500px'),
					'section' 		=> 'block_'.$i,
					'priority' 		=> $priority++
				));

				$wp_customize->add_setting('block_'.$i.'_image_'.$j.'_box_lg_x', array(
					'default' 		=> _x('0','gaudium'),
					'type' 			=> 'theme_mod'
				));

				$wp_customize->add_control('block_'.$i.'_image_'.$j.'_box_lg_x', array(
					'label' 		=> __('Large Screen Image ','gaudium').($j+1).__(' Box Left Position','gaudium'),
					'description'	=> __('Enter value in px, % or em, e.g. 500px'),
					'section' 		=> 'block_'.$i,
					'priority' 		=> $priority++
				));

				$wp_customize->add_setting('block_'.$i.'_image_'.$j.'_box_xs_y', array(
					'default' 		=> _x('0','gaudium'),
					'type' 			=> 'theme_mod'
				));

				$wp_customize->add_control('block_'.$i.'_image_'.$j.'_box_xs_y', array(
					'label' 		=> __('XSmall Screen Image ','gaudium').($j+1).__(' Box Top Position','gaudium'),
					'description'	=> __('Enter value in px, % or em, e.g. 500px'),
					'section' 		=> 'block_'.$i,
					'priority' 		=> $priority++
				));

				$wp_customize->add_setting('block_'.$i.'_image_'.$j.'_box_y', array(
					'default' 		=> _x('0','gaudium'),
					'type' 			=> 'theme_mod'
				));

				$wp_customize->add_control('block_'.$i.'_image_'.$j.'_box_y', array(
					'label' 		=> __('Small Screen Image ','gaudium').($j+1).__(' Box Top Position','gaudium'),
					'description'	=> __('Enter value in px, % or em, e.g. 500px'),
					'section' 		=> 'block_'.$i,
					'priority' 		=> $priority++
				));

				$wp_customize->add_setting('block_'.$i.'_image_'.$j.'_box_md_y', array(
					'default' 		=> _x('0','gaudium'),
					'type' 			=> 'theme_mod'
				));

				$wp_customize->add_control('block_'.$i.'_image_'.$j.'_box_md_y', array(
					'label' 		=> __('Medium Screen Image ','gaudium').($j+1).__(' Box Top Position','gaudium'),
					'description'	=> __('Enter value in px, % or em, e.g. 500px'),
					'section' 		=> 'block_'.$i,
					'priority' 		=> $priority++
				));

				$wp_customize->add_setting('block_'.$i.'_image_'.$j.'_box_lg_y', array(
					'default' 		=> _x('0','gaudium'),
					'type' 			=> 'theme_mod'
				));

				$wp_customize->add_control('block_'.$i.'_image_'.$j.'_box_lg_y', array(
					'label' 		=> __('Large Screen Image ','gaudium').($j+1).__(' Box Top Position','gaudium'),
					'description'	=> __('Enter value in px, % or em, e.g. 500px'),
					'section' 		=> 'block_'.$i,
					'priority' 		=> $priority++
				));

				$wp_customize->add_setting('block_'.$i.'_image_'.$j.'_styles_xs', array(
					'default' 		=> _x('0','gaudium'),
					'type' 			=> 'theme_mod'
				));

				$wp_customize->add_control('block_'.$i.'_image_'.$j.'_styles_xs', array(
					'label' 		=> __('XSmall Screen Image ','gaudium').($j+1).__(' Styles','gaudium'),
					'description'	=> __('Enter styles, e.g. max-width: 50%;'),
					'section' 		=> 'block_'.$i,
					'priority' 		=> $priority++
				));
				
				$wp_customize->add_setting('block_'.$i.'_image_'.$j.'_styles', array(
					'default' 		=> _x('0','gaudium'),
					'type' 			=> 'theme_mod'
				));

				$wp_customize->add_control('block_'.$i.'_image_'.$j.'_styles', array(
					'label' 		=> __('Small Screen Image ','gaudium').($j+1).__(' Styles','gaudium'),
					'description'	=> __('Enter styles, e.g. max-width: 50%;'),
					'section' 		=> 'block_'.$i,
					'priority' 		=> $priority++
				));

				$wp_customize->add_setting('block_'.$i.'_image_'.$j.'_styles_md', array(
					'default' 		=> _x('0','gaudium'),
					'type' 			=> 'theme_mod'
				));

				$wp_customize->add_control('block_'.$i.'_image_'.$j.'_styles_md', array(
					'label' 		=> __('Medium Screen Image ','gaudium').($j+1).__(' Styles','gaudium'),
					'description'	=> __('Enter styles, e.g. max-width: 50%;'),
					'section' 		=> 'block_'.$i,
					'priority' 		=> $priority++
				));

				$wp_customize->add_setting('block_'.$i.'_image_'.$j.'_styles_lg', array(
					'default' 		=> _x('0','gaudium'),
					'type' 			=> 'theme_mod'
				));

				$wp_customize->add_control('block_'.$i.'_image_'.$j.'_styles_lg', array(
					'label' 		=> __('Large Screen Image ','gaudium').($j+1).__(' Styles','gaudium'),
					'description'	=> __('Enter styles, e.g. max-width: 50%;'),
					'section' 		=> 'block_'.$i,
					'priority' 		=> $priority++
				));

				$wp_customize->add_setting('block_'.$i.'_image_'.$j.'_bg_position', array(
					'default' 		=> _x('0','gaudium'),
					'type' 			=> 'theme_mod'
				));

				$wp_customize->add_control('block_'.$i.'_image_'.$j.'_bg_position', array(
					'label' 		=> __('Image ','gaudium').($j+1).__(' Background Position','gaudium'),
					'type'			=> 'select',
					'choices'		=> array(
						'0'			=> __('Select'),
						'-0'		=> __('Custom'),
						'center'	=> __('Center'),
						'left 0'	=> __('Left'),
						'right 0'	=> __('Right'),
						'bottom'	=> __('Bottom'),
						'top'		=> __('Top'),
					),
					'section' 		=> 'block_'.$i,
					'priority' 		=> $priority++
				));

				$wp_customize->add_setting('block_'.$i.'_image_'.$j.'_xs_x', array(
					'default' 		=> _x('0','gaudium'),
					'type' 			=> 'theme_mod'
				));

				$wp_customize->add_control('block_'.$i.'_image_'.$j.'_xs_x', array(
					'label' 		=> __('XSmall Screen Image ','gaudium').($j+1).__(' Left Position','gaudium'),
					'section' 		=> 'block_'.$i,
					'priority' 		=> $priority++
				));

				$wp_customize->add_setting('block_'.$i.'_image_'.$j.'_x', array(
					'default' 		=> _x('0','gaudium'),
					'type' 			=> 'theme_mod'
				));

				$wp_customize->add_control('block_'.$i.'_image_'.$j.'_x', array(
					'label' 		=> __('Image ','gaudium').($j+1).__(' Left Position','gaudium'),
					'section' 		=> 'block_'.$i,
					'priority' 		=> $priority++
				));

				$wp_customize->add_setting('block_'.$i.'_image_'.$j.'_xs_y', array(
					'default' 		=> _x('0','gaudium'),
					'type' 			=> 'theme_mod'
				));

				$wp_customize->add_control('block_'.$i.'_image_'.$j.'_xs_y', array(
					'label' 		=> __('XSmall Screen Image ','gaudium').($j+1).__(' Top Position','gaudium'),
					'description'	=> __('Enter value in px, % or em, e.g. 100px'),
					'section' 		=> 'block_'.$i,
					'priority' 		=> $priority++
				));

				$wp_customize->add_setting('block_'.$i.'_image_'.$j.'_y', array(
					'default' 		=> _x('0','gaudium'),
					'type' 			=> 'theme_mod'
				));

				$wp_customize->add_control('block_'.$i.'_image_'.$j.'_y', array(
					'label' 		=> __('Image ','gaudium').($j+1).__(' Top Position','gaudium'),
					'description'	=> __('Enter value in px, % or em, e.g. 100px'),
					'section' 		=> 'block_'.$i,
					'priority' 		=> $priority++
				));

				$wp_customize->add_setting('block_'.$i.'_image_'.$j.'_repeat', array(
					'default' 		=> _x('0','gaudium'),
					'type' 			=> 'theme_mod'
				));

				$wp_customize->add_control('block_'.$i.'_image_'.$j.'_repeat', array(
					'label' 		=> __('Image ','gaudium').($j+1).__(' Repeat','gaudium'),
					'type'			=> 'select',
					'choices' 		=> array(
						'0' 			=> __('Select'),
					    'repeat' 		=> __('Repeat'),
					    'no-repeat' 	=> __('No repeat'),
					),
					'section' 		=> 'block_'.$i,
					'priority' 		=> $priority++
				));

				$wp_customize->add_setting('block_'.$i.'_image_'.$j.'_speed', array(
					'default' 		=> _x('0','gaudium'),
					'type' 			=> 'theme_mod',
				));

				$wp_customize->add_control('block_'.$i.'_image_'.$j.'_speed', array(
					'label' 		=> __('Image ','gaudium').($j+1).__(' speed','gaudium'),
					'description'	=> __('Speed from 0.0 (static) to 1.0 (fixed).'),
					'section' 		=> 'block_'.$i,
					'priority' 		=> $priority++
				));
			}

			$wp_customize->add_setting('block_'.$i.'_content_number', array(
				'default' 		=> _x('0','gaudium'),
				'type' 			=> 'theme_mod'
			));

			$wp_customize->add_control('block_'.$i.'_content_number', array(
				'label' 		=> __('Number of Content Blocks','gaudium'),
				'description'	=> __('Requires PUBLISH and RELOAD.','gaudium'),
				'section' 		=> 'block_'.$i,
				'priority' 		=> $priority++
			));

			for($j = 0; $j < intval(get_theme_mod('block_'.$i.'_content_number')); $j++) {

				$wp_customize->add_setting('block_'.$i.'_content_'.$j.'_cols', array(
					'default' 		=> _x('0','gaudium'),
					'type' 			=> 'theme_mod'
				));

				$wp_customize->add_control('block_'.$i.'_content_'.$j.'_cols', array(
					'label' 		=> __('Content Columns','gaudium'),
					'description'	=> __('Number of columns for this content block, e.g. 3 for a 4-column layout, 4 for a 3-column layout or 6 a 2-column layout.'),
					'type'			=> 'select',
					'choices'		=> array(
						'0'		=> __('Select'),
						'1'		=> __('1'),
						'2'		=> __('2'),
						'3'		=> __('3'),
						'4'		=> __('4'),
						'5'		=> __('5'),
						'6'		=> __('6'),
						'7'		=> __('7'),
						'8'		=> __('8'),
						'9'		=> __('9'),
						'10'	=> __('10'),
						'11'	=> __('11'),
						'12'	=> __('12'),
					),
					'section' 		=> 'block_'.$i,
					'priority' 		=> $priority++
				));

				$wp_customize->add_setting('block_'.$i.'_content_'.$j.'_cols_push', array(
					'default' 		=> _x('0','gaudium'),
					'type' 			=> 'theme_mod'
				));

				$wp_customize->add_control('block_'.$i.'_content_'.$j.'_cols_push', array(
					'label' 		=> __('Push Content','gaudium'),
					'description'	=> __('Number of columns to shift the content block to the right. Select 0 to deactivate.'),
					'type'			=> 'select',
					'choices'		=> array(
						'0'		=> __('Select'),
						'-0'	=> __('Reset'),
						'1'		=> __('1'),
						'2'		=> __('2'),
						'3'		=> __('3'),
						'4'		=> __('4'),
						'5'		=> __('5'),
						'6'		=> __('6'),
						'7'		=> __('7'),
						'8'		=> __('8'),
						'9'		=> __('9'),
						'10'	=> __('10'),
						'11'	=> __('11'),
						'12'	=> __('12'),
					),
					'section' 		=> 'block_'.$i,
					'priority' 		=> $priority++
				));

				$wp_customize->add_setting('block_'.$i.'_content_'.$j.'_cols_pull', array(
					'default' 		=> _x('0','gaudium'),
					'type' 			=> 'theme_mod'
				));

				$wp_customize->add_control('block_'.$i.'_content_'.$j.'_cols_pull', array(
					'label' 		=> __('Pull Content','gaudium'),
					'description'	=> __('Number of columns to shift the content block to the left. Select 0 to deactivate.'),
					'type'			=> 'select',
					'choices'		=> array(
						'0'		=> __('Select'),
						'-0'	=> __('Reset'),
						'1'		=> __('1'),
						'2'		=> __('2'),
						'3'		=> __('3'),
						'4'		=> __('4'),
						'5'		=> __('5'),
						'6'		=> __('6'),
						'7'		=> __('7'),
						'8'		=> __('8'),
						'9'		=> __('9'),
						'10'	=> __('10'),
						'11'	=> __('11'),
						'12'	=> __('12'),
					),
					'section' 		=> 'block_'.$i,
					'priority' 		=> $priority++
				));

				$wp_customize->add_setting('block_'.$i.'_content_'.$j.'_top_xs_space', array(
					'default' 		=> _x('0','gaudium'),
					'type' 			=> 'theme_mod'
				));

				$wp_customize->add_control('block_'.$i.'_content_'.$j.'_top_xs_space', array(
					'label' 		=> __('XSmall Screen Top','gaudium'),
					'description'	=> __('Add space to top on extra-small and larger screens, i.e. mobile devices. Select 0 to deactivate.'),
					'type'			=> 'select',
					'choices'	=> array(
							'0'		=> __('Select'),
							'-0'	=> __('Reset'),
							'1'		=> __('1'),
							'2'		=> __('2'),
							'3'		=> __('3'),
							'4'		=> __('4'),
							'5'		=> __('5'),
							'6'		=> __('6'),
							'7'		=> __('7'),
							'8'		=> __('8'),
							'9'		=> __('9'),
							'10'	=> __('10'),
							'11'	=> __('11'),
							'12'	=> __('12'),
							'13'	=> __('13'),
							'14'	=> __('14'),
							'15'	=> __('15'),
							'16'	=> __('16'),
							'17'	=> __('17'),
							'18'	=> __('18'),
							'19'	=> __('19'),
							'20'	=> __('20'),
							'21'	=> __('21'),
							'22'	=> __('22'),
							'23'	=> __('23'),
							'24'	=> __('24'),
							'25'	=> __('25'),
							'26'	=> __('26'),
							'27'	=> __('27'),
							'28'	=> __('28'),
							'29'	=> __('29'),
							'30'	=> __('30'),
							'31'	=> __('31'),
							'32'	=> __('32'),
							'33'	=> __('33'),
							'34'	=> __('34'),
							'35'	=> __('35'),
							'36'	=> __('36'),
							'37'	=> __('37'),
							'38'	=> __('38'),
							'39'	=> __('39'),
							'40'	=> __('40'),
						),
					'section' 		=> 'block_'.$i,
					'priority' 		=> $priority++
				));

				$wp_customize->add_setting('block_'.$i.'_content_'.$j.'_top_sm_space', array(
					'default' 		=> _x('0','gaudium'),
					'type' 			=> 'theme_mod'
				));

				$wp_customize->add_control('block_'.$i.'_content_'.$j.'_top_sm_space', array(
					'label' 		=> __('Small Screen Top','gaudium'),
					'description'	=> __('Add space to top on small and larger screens.'),
					'type'			=> 'select',
					'choices'	=> array(
							'0'		=> __('Select'),
							'-0'	=> __('Reset'),
							'1'		=> __('1'),
							'2'		=> __('2'),
							'3'		=> __('3'),
							'4'		=> __('4'),
							'5'		=> __('5'),
							'6'		=> __('6'),
							'7'		=> __('7'),
							'8'		=> __('8'),
							'9'		=> __('9'),
							'10'	=> __('10'),
							'11'	=> __('11'),
							'12'	=> __('12'),
							'13'	=> __('13'),
							'14'	=> __('14'),
							'15'	=> __('15'),
							'16'	=> __('16'),
							'17'	=> __('17'),
							'18'	=> __('18'),
							'19'	=> __('19'),
							'20'	=> __('20'),
							'21'	=> __('21'),
							'22'	=> __('22'),
							'23'	=> __('23'),
							'24'	=> __('24'),
							'25'	=> __('25'),
							'26'	=> __('26'),
							'27'	=> __('27'),
							'28'	=> __('28'),
							'29'	=> __('29'),
							'30'	=> __('30'),
							'31'	=> __('31'),
							'32'	=> __('32'),
							'33'	=> __('33'),
							'34'	=> __('34'),
							'35'	=> __('35'),
							'36'	=> __('36'),
							'37'	=> __('37'),
							'38'	=> __('38'),
							'39'	=> __('39'),
							'40'	=> __('40'),
						),
					'section' 		=> 'block_'.$i,
					'priority' 		=> $priority++
				));

				$wp_customize->add_setting('block_'.$i.'_content_'.$j.'_top_md_space', array(
					'default' 		=> _x('0','gaudium'),
					'type' 			=> 'theme_mod'
				));

				$wp_customize->add_control('block_'.$i.'_content_'.$j.'_top_md_space', array(
					'label' 		=> __('Medium Screen Top','gaudium'),
					'description'	=> __('Add space to top on medium and larger screens.'),
					'type'			=> 'select',
					'choices'	=> array(
							'0'		=> __('Select'),
							'-0'	=> __('Reset'),
							'1'		=> __('1'),
							'2'		=> __('2'),
							'3'		=> __('3'),
							'4'		=> __('4'),
							'5'		=> __('5'),
							'6'		=> __('6'),
							'7'		=> __('7'),
							'8'		=> __('8'),
							'9'		=> __('9'),
							'10'	=> __('10'),
							'11'	=> __('11'),
							'12'	=> __('12'),
							'13'	=> __('13'),
							'14'	=> __('14'),
							'15'	=> __('15'),
							'16'	=> __('16'),
							'17'	=> __('17'),
							'18'	=> __('18'),
							'19'	=> __('19'),
							'20'	=> __('20'),
							'21'	=> __('21'),
							'22'	=> __('22'),
							'23'	=> __('23'),
							'24'	=> __('24'),
							'25'	=> __('25'),
							'26'	=> __('26'),
							'27'	=> __('27'),
							'28'	=> __('28'),
							'29'	=> __('29'),
							'30'	=> __('30'),
							'31'	=> __('31'),
							'32'	=> __('32'),
							'33'	=> __('33'),
							'34'	=> __('34'),
							'35'	=> __('35'),
							'36'	=> __('36'),
							'37'	=> __('37'),
							'38'	=> __('38'),
							'39'	=> __('39'),
							'40'	=> __('40'),
						),
					'section' 		=> 'block_'.$i,
					'priority' 		=> $priority++
				));

				$wp_customize->add_setting('block_'.$i.'_content_'.$j.'_top_lg_space', array(
					'default' 		=> _x('0','gaudium'),
					'type' 			=> 'theme_mod'
				));

				$wp_customize->add_control('block_'.$i.'_content_'.$j.'_top_lg_space', array(
					'label' 		=> __('Large Screen Top','gaudium'),
					'description'	=> __('Add space to top on large screens.'),
					'type'			=> 'select',
					'choices'	=> array(
							'0'		=> __('Select'),
							'-0'	=> __('Reset'),
							'1'		=> __('1'),
							'2'		=> __('2'),
							'3'		=> __('3'),
							'4'		=> __('4'),
							'5'		=> __('5'),
							'6'		=> __('6'),
							'7'		=> __('7'),
							'8'		=> __('8'),
							'9'		=> __('9'),
							'10'	=> __('10'),
							'11'	=> __('11'),
							'12'	=> __('12'),
							'13'	=> __('13'),
							'14'	=> __('14'),
							'15'	=> __('15'),
							'16'	=> __('16'),
							'17'	=> __('17'),
							'18'	=> __('18'),
							'19'	=> __('19'),
							'20'	=> __('20'),
							'21'	=> __('21'),
							'22'	=> __('22'),
							'23'	=> __('23'),
							'24'	=> __('24'),
							'25'	=> __('25'),
							'26'	=> __('26'),
							'27'	=> __('27'),
							'28'	=> __('28'),
							'29'	=> __('29'),
							'30'	=> __('30'),
							'31'	=> __('31'),
							'32'	=> __('32'),
							'33'	=> __('33'),
							'34'	=> __('34'),
							'35'	=> __('35'),
							'36'	=> __('36'),
							'37'	=> __('37'),
							'38'	=> __('38'),
							'39'	=> __('39'),
							'40'	=> __('40'),
						),
					'section' 		=> 'block_'.$i,
					'priority' 		=> $priority++
				));

				$wp_customize->add_setting('block_'.$i.'_content_'.$j.'_bottom_xs_space', array(
					'default' 		=> _x('0','gaudium'),
					'type' 			=> 'theme_mod'
				));

				$wp_customize->add_control('block_'.$i.'_content_'.$j.'_bottom_xs_space', array(
					'label' 		=> __('XSmall Screen Bottom','gaudium'),
					'description'	=> __('Add space to bottom on extra-small and larger screens, i.e. mobile devices. Select 0 to deactivate.'),
					'type'			=> 'select',
					'choices'	=> array(
							'0'		=> __('Select'),
							'-0'	=> __('Reset'),
							'1'		=> __('1'),
							'2'		=> __('2'),
							'3'		=> __('3'),
							'4'		=> __('4'),
							'5'		=> __('5'),
							'6'		=> __('6'),
							'7'		=> __('7'),
							'8'		=> __('8'),
							'9'		=> __('9'),
							'10'	=> __('10'),
							'11'	=> __('11'),
							'12'	=> __('12'),
							'13'	=> __('13'),
							'14'	=> __('14'),
							'15'	=> __('15'),
							'16'	=> __('16'),
							'17'	=> __('17'),
							'18'	=> __('18'),
							'19'	=> __('19'),
							'20'	=> __('20'),
							'21'	=> __('21'),
							'22'	=> __('22'),
							'23'	=> __('23'),
							'24'	=> __('24'),
							'25'	=> __('25'),
							'26'	=> __('26'),
							'27'	=> __('27'),
							'28'	=> __('28'),
							'29'	=> __('29'),
							'30'	=> __('30'),
							'31'	=> __('31'),
							'32'	=> __('32'),
							'33'	=> __('33'),
							'34'	=> __('34'),
							'35'	=> __('35'),
							'36'	=> __('36'),
							'37'	=> __('37'),
							'38'	=> __('38'),
							'39'	=> __('39'),
							'40'	=> __('40'),
						),
					'section' 		=> 'block_'.$i,
					'priority' 		=> $priority++
				));

				$wp_customize->add_setting('block_'.$i.'_content_'.$j.'_bottom_sm_space', array(
					'default' 		=> _x('0','gaudium'),
					'type' 			=> 'theme_mod'
				));

				$wp_customize->add_control('block_'.$i.'_content_'.$j.'_bottom_sm_space', array(
					'label' 		=> __('Small Screen Bottom','gaudium'),
					'description'	=> __('Add space to bottom on small and larger screens.'),
					'type'			=> 'select',
					'choices'	=> array(
							'0'		=> __('Select'),
							'-0'	=> __('Reset'),
							'1'		=> __('1'),
							'2'		=> __('2'),
							'3'		=> __('3'),
							'4'		=> __('4'),
							'5'		=> __('5'),
							'6'		=> __('6'),
							'7'		=> __('7'),
							'8'		=> __('8'),
							'9'		=> __('9'),
							'10'	=> __('10'),
							'11'	=> __('11'),
							'12'	=> __('12'),
							'13'	=> __('13'),
							'14'	=> __('14'),
							'15'	=> __('15'),
							'16'	=> __('16'),
							'17'	=> __('17'),
							'18'	=> __('18'),
							'19'	=> __('19'),
							'20'	=> __('20'),
							'21'	=> __('21'),
							'22'	=> __('22'),
							'23'	=> __('23'),
							'24'	=> __('24'),
							'25'	=> __('25'),
							'26'	=> __('26'),
							'27'	=> __('27'),
							'28'	=> __('28'),
							'29'	=> __('29'),
							'30'	=> __('30'),
							'31'	=> __('31'),
							'32'	=> __('32'),
							'33'	=> __('33'),
							'34'	=> __('34'),
							'35'	=> __('35'),
							'36'	=> __('36'),
							'37'	=> __('37'),
							'38'	=> __('38'),
							'39'	=> __('39'),
							'40'	=> __('40'),
						),
					'section' 		=> 'block_'.$i,
					'priority' 		=> $priority++
				));

				$wp_customize->add_setting('block_'.$i.'_content_'.$j.'_bottom_md_space', array(
					'default' 		=> _x('0','gaudium'),
					'type' 			=> 'theme_mod'
				));

				$wp_customize->add_control('block_'.$i.'_content_'.$j.'_bottom_md_space', array(
					'label' 		=> __('Medium Screen Bottom','gaudium'),
					'description'	=> __('Add space to bottom on medium and larger screens.'),
					'type'			=> 'select',
					'choices'	=> array(
							'0'		=> __('Select'),
							'-0'	=> __('Reset'),
							'1'		=> __('1'),
							'2'		=> __('2'),
							'3'		=> __('3'),
							'4'		=> __('4'),
							'5'		=> __('5'),
							'6'		=> __('6'),
							'7'		=> __('7'),
							'8'		=> __('8'),
							'9'		=> __('9'),
							'10'	=> __('10'),
							'11'	=> __('11'),
							'12'	=> __('12'),
							'13'	=> __('13'),
							'14'	=> __('14'),
							'15'	=> __('15'),
							'16'	=> __('16'),
							'17'	=> __('17'),
							'18'	=> __('18'),
							'19'	=> __('19'),
							'20'	=> __('20'),
							'21'	=> __('21'),
							'22'	=> __('22'),
							'23'	=> __('23'),
							'24'	=> __('24'),
							'25'	=> __('25'),
							'26'	=> __('26'),
							'27'	=> __('27'),
							'28'	=> __('28'),
							'29'	=> __('29'),
							'30'	=> __('30'),
							'31'	=> __('31'),
							'32'	=> __('32'),
							'33'	=> __('33'),
							'34'	=> __('34'),
							'35'	=> __('35'),
							'36'	=> __('36'),
							'37'	=> __('37'),
							'38'	=> __('38'),
							'39'	=> __('39'),
							'40'	=> __('40'),
						),
					'section' 		=> 'block_'.$i,
					'priority' 		=> $priority++
				));

				$wp_customize->add_setting('block_'.$i.'_content_'.$j.'_bottom_lg_space', array(
					'default' 		=> _x('0','gaudium'),
					'type' 			=> 'theme_mod'
				));

				$wp_customize->add_control('block_'.$i.'_content_'.$j.'_bottom_lg_space', array(
					'label' 		=> __('Large Screen Bottom','gaudium'),
					'description'	=> __('Add space to bottom on large screens.'),
					'type'			=> 'select',
					'choices'	=> array(
							'0'		=> __('Select'),
							'-0'	=> __('Reset'),
							'1'		=> __('1'),
							'2'		=> __('2'),
							'3'		=> __('3'),
							'4'		=> __('4'),
							'5'		=> __('5'),
							'6'		=> __('6'),
							'7'		=> __('7'),
							'8'		=> __('8'),
							'9'		=> __('9'),
							'10'	=> __('10'),
							'11'	=> __('11'),
							'12'	=> __('12'),
							'13'	=> __('13'),
							'14'	=> __('14'),
							'15'	=> __('15'),
							'16'	=> __('16'),
							'17'	=> __('17'),
							'18'	=> __('18'),
							'19'	=> __('19'),
							'20'	=> __('20'),
							'21'	=> __('21'),
							'22'	=> __('22'),
							'23'	=> __('23'),
							'24'	=> __('24'),
							'25'	=> __('25'),
							'26'	=> __('26'),
							'27'	=> __('27'),
							'28'	=> __('28'),
							'29'	=> __('29'),
							'30'	=> __('30'),
							'31'	=> __('31'),
							'32'	=> __('32'),
							'33'	=> __('33'),
							'34'	=> __('34'),
							'35'	=> __('35'),
							'36'	=> __('36'),
							'37'	=> __('37'),
							'38'	=> __('38'),
							'39'	=> __('39'),
							'40'	=> __('40'),
						),
					'section' 		=> 'block_'.$i,
					'priority' 		=> $priority++
				));

				$wp_customize->add_setting('block_'.$i.'_content_'.$j, array(
					'default' 		=> _x('','gaudium'),
					'type' 			=> 'theme_mod'
				));

				$wp_customize->add_control('block_'.$i.'_content_'.$j, array(
					'label' 		=> __('Content','gaudium'),
					'description'   => __('Supports text or code.','gaudium'),
					'type'			=> 'textarea',
					'section' 		=> 'block_'.$i,
					'priority' 		=> $priority++
				));

				$wp_customize->add_setting('block_'.$i.'_content_'.$j.'_speed', array(
					'default' 		=> _x('0','gaudium'),
					'type' 			=> 'theme_mod'
				));

				$wp_customize->add_control('block_'.$i.'_content_'.$j.'_speed', array(
					'label' 		=> __('Content Speed','gaudium'),
					'description' 	=> __('Speed from 0.0 (static) to 1.0 (fixed).','gaudium'),
					'section' 		=> 'block_'.$i,
					'priority' 		=> $priority++
				));

				$wp_customize->add_setting('block_'.$i.'_content_'.$j.'_number_images', array(
					'default' 		=> _x('0','gaudium'),
					'type' 			=> 'theme_mod'
				));
				
				$wp_customize->add_control('block_'.$i.'_content_'.$j.'_number_images', array(
					'label' 		=> __('Number of Images','gaudium'),
					'description'	=> __('Requires PUBLISH and RELOAD.','gaudium'),
					'section' 		=> 'block_'.$i,
					'priority' 		=> $priority++
				));
				
				for($k = 0; $k < intval(get_theme_mod('block_'.$i.'_content_'.$j.'_number_images')); $k++) {

					$wp_customize->add_setting('block_'.$i.'_content_'.$j.'_image_'.$k.'_url', array(
						'default' 		=> '',
						'type' 			=> 'theme_mod'
					));

					$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'block_'.$i.'_content_'.$j.'_image_'.$k.'_url', array(
						'label' 		=> __('Image ','gaudium').($k+1),
						'section' 		=> 'block_'.$i,
						'settings'		=> 'block_'.$i.'_content_'.$j.'_image_'.$k.'_url',
						'priority' 		=> $priority++
					)));

					$wp_customize->add_setting('block_'.$i.'_content_'.$j.'_image_'.$k.'_sm_url', array(
						'default' 		=> '',
						'type' 			=> 'theme_mod'
					));

					$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'block_'.$i.'_content_'.$j.'_image_'.$k.'_sm_url', array(
						'label' 		=> __('Small Screen Image ','gaudium').($k+1),
						'section' 		=> 'block_'.$i,
						'settings'		=> 'block_'.$i.'_content_'.$j.'_image_'.$k.'_sm_url',
						'priority' 		=> $priority++
					)));

					$wp_customize->add_setting('block_'.$i.'_content_'.$j.'_image_'.$k.'_md_url', array(
						'default' 		=> '',
						'type' 			=> 'theme_mod'
					));

					$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'block_'.$i.'_content_'.$j.'_image_'.$k.'_md_url', array(
						'label' 		=> __('Medium Screen Image ','gaudium').($k+1),
						'section' 		=> 'block_'.$i,
						'settings'		=> 'block_'.$i.'_content_'.$j.'_image_'.$k.'_md_url',
						'priority' 		=> $priority++
					)));

					$wp_customize->add_setting('block_'.$i.'_content_'.$j.'_image_'.$k.'_lg_url', array(
						'default' 		=> '',
						'type' 			=> 'theme_mod'
					));

					$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'block_'.$i.'_content_'.$j.'_image_'.$k.'_lg_url', array(
						'label' 		=> __('Large Screen Image ','gaudium').($k+1),
						'section' 		=> 'block_'.$i,
						'settings'		=> 'block_'.$i.'_content_'.$j.'_image_'.$k.'_lg_url',
						'priority' 		=> $priority++
					)));

					$wp_customize->add_setting('block_'.$i.'_content_'.$j.'_image_'.$k.'_bg', array(
						'default' 		=> _x('0','gaudium'),
						'type' 			=> 'theme_mod'

					));

					$wp_customize->add_control('block_'.$i.'_content_'.$j.'_image_'.$k.'_bg', array(
						'label' 		=> __('Image ','gaudium').($k+1).__(' Background Color','gaudium'),
						'description'	=> __('Background color, e.g. #e4e4e4'),
						'section' 		=> 'block_'.$i,
						'priority' 		=> $priority++
					));

					$wp_customize->add_setting('block_'.$i.'_content_'.$j.'_image_'.$k.'_bg_size', array(
						'default' 		=> _x('0','gaudium'),
						'type' 			=> 'theme_mod'
					));

					$wp_customize->add_control('block_'.$i.'_content_'.$j.'_image_'.$k.'_bg_size', array(
						'label' 		=> __('Image ','gaudium').($k+1).__(' Background Size','gaudium'),
						'type'			=> 'select',
						'choices'		=> array(
							'0'			=> __('Select'),
							'-0'		=> __('Custom'),
							'auto'		=> __('Auto'),
							'cover'		=> __('Cover'),
							'contain'	=> __('Contain'),
						),
						'section' 		=> 'block_'.$i,
						'priority' 		=> $priority++
					));

					$wp_customize->add_setting('block_'.$i.'_content_'.$j.'_image_'.$k.'_layout', array(
						'default' 		=> _x('0','gaudium'),
						'type' 			=> 'theme_mod'
					));

					$wp_customize->add_control('block_'.$i.'_content_'.$j.'_image_'.$k.'_layout', array(
						'label' 		=> __('Image ','gaudium').($k+1).__(' Layout','gaudium'),
						'type'			=> 'select',
						'choices'		=> array(
							'0'				=> __('Select'),
							'default'		=> __('Default'),
							'landscape'		=> __('Landscape'),
							'portrait'		=> __('Portrait'),
							'vr'		    => __('Vertical Rhythm'),
						),
						'section' 		=> 'block_'.$i,
						'priority' 		=> $priority++
					));

					$wp_customize->add_setting('block_'.$i.'_content_'.$j.'_image_'.$k.'_xs_width', array(
						'default' 		=> _x('0','gaudium'),
						'type' 			=> 'theme_mod'
					));

					$wp_customize->add_control('block_'.$i.'_content_'.$j.'_image_'.$k.'_xs_width', array(
						'label' 		=> __('XSmall Screen Image ','gaudium').($k+1).__(' Width','gaudium'),
						'description'	=> __('Enter value in px, % or em, e.g. 500px'),
						'section' 		=> 'block_'.$i,
						'priority' 		=> $priority++
					));

					$wp_customize->add_setting('block_'.$i.'_content_'.$j.'_image_'.$k.'_width', array(
						'default' 		=> _x('0','gaudium'),
						'type' 			=> 'theme_mod'
					));

					$wp_customize->add_control('block_'.$i.'_content_'.$j.'_image_'.$k.'_width', array(
						'label' 		=> __('Small Screen Image ','gaudium').($k+1).__(' Width','gaudium'),
						'description'	=> __('Enter value in px, % or em, e.g. 500px'),
						'section' 		=> 'block_'.$i,
						'priority' 		=> $priority++
					));

					$wp_customize->add_setting('block_'.$i.'_content_'.$j.'_image_'.$k.'_md_width', array(
						'default' 		=> _x('0','gaudium'),
						'type' 			=> 'theme_mod'
					));

					$wp_customize->add_control('block_'.$i.'_content_'.$j.'_image_'.$k.'_md_width', array(
						'label' 		=> __('Medium Screen Image ','gaudium').($k+1).__(' Width','gaudium'),
						'description'	=> __('Enter value in px, % or em, e.g. 500px'),
						'section' 		=> 'block_'.$i,
						'priority' 		=> $priority++
					));

					$wp_customize->add_setting('block_'.$i.'_content_'.$j.'_image_'.$k.'_lg_width', array(
						'default' 		=> _x('0','gaudium'),
						'type' 			=> 'theme_mod'
					));

					$wp_customize->add_control('block_'.$i.'_content_'.$j.'_image_'.$k.'_lg_width', array(
						'label' 		=> __('Large Screen Image ','gaudium').($k+1).__(' Width','gaudium'),
						'description'	=> __('Enter value in px, % or em, e.g. 500px'),
						'section' 		=> 'block_'.$i,
						'priority' 		=> $priority++
					));

					$wp_customize->add_setting('block_'.$i.'_content_'.$j.'_image_'.$k.'_xs_height', array(
						'default' 		=> _x('0','gaudium'),
						'type' 			=> 'theme_mod'
					));

					$wp_customize->add_control('block_'.$i.'_content_'.$j.'_image_'.$k.'_xs_height', array(
						'label' 		=> __('XSmall Screen Image ','gaudium').($k+1).__(' Height','gaudium'),
						'description'	=> __('Enter value in px, % or em, e.g. 500px'),
						'section' 		=> 'block_'.$i,
						'priority' 		=> $priority++
					));

					$wp_customize->add_setting('block_'.$i.'_content_'.$j.'_image_'.$k.'_height', array(
						'default' 		=> _x('0','gaudium'),
						'type' 			=> 'theme_mod'
					));

					$wp_customize->add_control('block_'.$i.'_content_'.$j.'_image_'.$k.'_height', array(
						'label' 		=> __('Small Screen Image ','gaudium').($k+1).__(' Height','gaudium'),
						'description'	=> __('Enter value in px, % or em, e.g. 500px'),
						'section' 		=> 'block_'.$i,
						'priority' 		=> $priority++
					));

					$wp_customize->add_setting('block_'.$i.'_content_'.$j.'_image_'.$k.'_md_height', array(
						'default' 		=> _x('0','gaudium'),
						'type' 			=> 'theme_mod'
					));

					$wp_customize->add_control('block_'.$i.'_content_'.$j.'_image_'.$k.'_md_height', array(
						'label' 		=> __('Medium Screen Image ','gaudium').($k+1).__(' Height','gaudium'),
						'description'	=> __('Enter value in px, % or em, e.g. 500px'),
						'section' 		=> 'block_'.$i,
						'priority' 		=> $priority++
					));

					$wp_customize->add_setting('block_'.$i.'_content_'.$j.'_image_'.$k.'_lg_height', array(
						'default' 		=> _x('0','gaudium'),
						'type' 			=> 'theme_mod'
					));

					$wp_customize->add_control('block_'.$i.'_content_'.$j.'_image_'.$k.'_lg_height', array(
						'label' 		=> __('Large Screen Image ','gaudium').($k+1).__(' Height','gaudium'),
						'description'	=> __('Enter value in px, % or em, e.g. 500px'),
						'section' 		=> 'block_'.$i,
						'priority' 		=> $priority++
					));

					$wp_customize->add_setting('block_'.$i.'_content_'.$j.'_image_'.$k.'_box_xs_width', array(
						'default' 		=> _x('0','gaudium'),
						'type' 			=> 'theme_mod'
					));

					$wp_customize->add_control('block_'.$i.'_content_'.$j.'_image_'.$k.'_box_xs_width', array(
						'label' 		=> __('XSmall Screen Image ','gaudium').($k+1).__(' Box Width','gaudium'),
						'description'	=> __('Enter value in px, % or em, e.g. 500px'),
						'section' 		=> 'block_'.$i,
						'priority' 		=> $priority++
					));

					$wp_customize->add_setting('block_'.$i.'_content_'.$j.'_image_'.$k.'_box_width', array(
						'default' 		=> _x('0','gaudium'),
						'type' 			=> 'theme_mod'
					));

					$wp_customize->add_control('block_'.$i.'_content_'.$j.'_image_'.$k.'_box_width', array(
						'label' 		=> __('Small Screen Image ','gaudium').($k+1).__(' Box Width','gaudium'),
						'description'	=> __('Enter value in px, % or em, e.g. 500px'),
						'section' 		=> 'block_'.$i,
						'priority' 		=> $priority++
					));

					$wp_customize->add_setting('block_'.$i.'_content_'.$j.'_image_'.$k.'_box_md_width', array(
						'default' 		=> _x('0','gaudium'),
						'type' 			=> 'theme_mod'
					));

					$wp_customize->add_control('block_'.$i.'_content_'.$j.'_image_'.$k.'_box_md_width', array(
						'label' 		=> __('Medium Screen Image ','gaudium').($k+1).__(' Box Width','gaudium'),
						'description'	=> __('Enter value in px, % or em, e.g. 500px'),
						'section' 		=> 'block_'.$i,
						'priority' 		=> $priority++
					));

					$wp_customize->add_setting('block_'.$i.'_content_'.$j.'_image_'.$k.'_box_lg_width', array(
						'default' 		=> _x('0','gaudium'),
						'type' 			=> 'theme_mod'
					));

					$wp_customize->add_control('block_'.$i.'_content_'.$j.'_image_'.$k.'_box_lg_width', array(
						'label' 		=> __('Large Screen Image ','gaudium').($k+1).__(' Box Width','gaudium'),
						'description'	=> __('Enter value in px, % or em, e.g. 500px'),
						'section' 		=> 'block_'.$i,
						'priority' 		=> $priority++
					));

					$wp_customize->add_setting('block_'.$i.'_content_'.$j.'_image_'.$k.'_box_xs_height', array(
						'default' 		=> _x('0','gaudium'),
						'type' 			=> 'theme_mod'
					));

					$wp_customize->add_control('block_'.$i.'_content_'.$j.'_image_'.$k.'_box_xs_height', array(
						'label' 		=> __('XSmall Screen Image ','gaudium').($k+1).__(' Box Height','gaudium'),
						'description'	=> __('Enter value in px, % or em, e.g. 500px'),
						'section' 		=> 'block_'.$i,
						'priority' 		=> $priority++
					));

					$wp_customize->add_setting('block_'.$i.'_content_'.$j.'_image_'.$k.'_box_height', array(
						'default' 		=> _x('0','gaudium'),
						'type' 			=> 'theme_mod'
					));

					$wp_customize->add_control('block_'.$i.'_content_'.$j.'_image_'.$k.'_box_height', array(
						'label' 		=> __('Small Screen Image ','gaudium').($k+1).__(' Box Height','gaudium'),
						'description'	=> __('Enter value in px, % or em, e.g. 500px'),
						'section' 		=> 'block_'.$i,
						'priority' 		=> $priority++
					));

					$wp_customize->add_setting('block_'.$i.'_content_'.$j.'_image_'.$k.'_box_md_height', array(
						'default' 		=> _x('0','gaudium'),
						'type' 			=> 'theme_mod'
					));

					$wp_customize->add_control('block_'.$i.'_content_'.$j.'_image_'.$k.'_box_md_height', array(
						'label' 		=> __('Medium Screen Image ','gaudium').($k+1).__(' Box Height','gaudium'),
						'description'	=> __('Enter value in px, % or em, e.g. 500px'),
						'section' 		=> 'block_'.$i,
						'priority' 		=> $priority++
					));

					$wp_customize->add_setting('block_'.$i.'_content_'.$j.'_image_'.$k.'_box_lg_height', array(
						'default' 		=> _x('0','gaudium'),
						'type' 			=> 'theme_mod'
					));

					$wp_customize->add_control('block_'.$i.'_content_'.$j.'_image_'.$k.'_box_lg_height', array(
						'label' 		=> __('Large Screen Image ','gaudium').($k+1).__(' Box Height','gaudium'),
						'description'	=> __('Enter value in px, % or em, e.g. 500px'),
						'section' 		=> 'block_'.$i,
						'priority' 		=> $priority++
					));

					$wp_customize->add_setting('block_'.$i.'_content_'.$j.'_image_'.$k.'_box_xs_x', array(
						'default' 		=> _x('0','gaudium'),
						'type' 			=> 'theme_mod'
					));

					$wp_customize->add_control('block_'.$i.'_content_'.$j.'_image_'.$k.'_box_xs_x', array(
						'label' 		=> __('XSmall Screen Image ','gaudium').($k+1).__(' Box Left Position','gaudium'),
						'description'	=> __('Enter value in px, % or em, e.g. 500px'),
						'section' 		=> 'block_'.$i,
						'priority' 		=> $priority++
					));

					$wp_customize->add_setting('block_'.$i.'_content_'.$j.'_image_'.$k.'_box_x', array(
						'default' 		=> _x('0','gaudium'),
						'type' 			=> 'theme_mod'
					));

					$wp_customize->add_control('block_'.$i.'_content_'.$j.'_image_'.$k.'_box_x', array(
						'label' 		=> __('Small Screen Image ','gaudium').($k+1).__(' Box Left Position','gaudium'),
						'description'	=> __('Enter value in px, % or em, e.g. 500px'),
						'section' 		=> 'block_'.$i,
						'priority' 		=> $priority++
					));

					$wp_customize->add_setting('block_'.$i.'_content_'.$j.'_image_'.$k.'_box_md_x', array(
						'default' 		=> _x('0','gaudium'),
						'type' 			=> 'theme_mod'
					));

					$wp_customize->add_control('block_'.$i.'_content_'.$j.'_image_'.$k.'_box_md_x', array(
						'label' 		=> __('Medium Screen Image ','gaudium').($k+1).__(' Box Left Position','gaudium'),
						'description'	=> __('Enter value in px, % or em, e.g. 500px'),
						'section' 		=> 'block_'.$i,
						'priority' 		=> $priority++
					));

					$wp_customize->add_setting('block_'.$i.'_content_'.$j.'_image_'.$k.'_box_lg_x', array(
						'default' 		=> _x('0','gaudium'),
						'type' 			=> 'theme_mod'
					));

					$wp_customize->add_control('block_'.$i.'_content_'.$j.'_image_'.$k.'_box_lg_x', array(
						'label' 		=> __('Large Screen Image ','gaudium').($k+1).__(' Box Left Position','gaudium'),
						'description'	=> __('Enter value in px, % or em, e.g. 500px'),
						'section' 		=> 'block_'.$i,
						'priority' 		=> $priority++
					));

					$wp_customize->add_setting('block_'.$i.'_content_'.$j.'_image_'.$k.'_box_xs_y', array(
						'default' 		=> _x('0','gaudium'),
						'type' 			=> 'theme_mod'
					));

					$wp_customize->add_control('block_'.$i.'_content_'.$j.'_image_'.$k.'_box_xs_y', array(
						'label' 		=> __('XSmall Screen Image ','gaudium').($k+1).__(' Box Top Position','gaudium'),
						'description'	=> __('Enter value in px, % or em, e.g. 500px'),
						'section' 		=> 'block_'.$i,
						'priority' 		=> $priority++
					));

					$wp_customize->add_setting('block_'.$i.'_content_'.$j.'_image_'.$k.'_box_y', array(
						'default' 		=> _x('0','gaudium'),
						'type' 			=> 'theme_mod'
					));

					$wp_customize->add_control('block_'.$i.'_content_'.$j.'_image_'.$k.'_box_y', array(
						'label' 		=> __('Small Screen Image ','gaudium').($k+1).__(' Box Top Position','gaudium'),
						'description'	=> __('Enter value in px, % or em, e.g. 500px'),
						'section' 		=> 'block_'.$i,
						'priority' 		=> $priority++
					));

					$wp_customize->add_setting('block_'.$i.'_content_'.$j.'_image_'.$k.'_box_md_y', array(
						'default' 		=> _x('0','gaudium'),
						'type' 			=> 'theme_mod'
					));

					$wp_customize->add_control('block_'.$i.'_content_'.$j.'_image_'.$k.'_box_md_y', array(
						'label' 		=> __('Medium Screen Image ','gaudium').($k+1).__(' Box Top Position','gaudium'),
						'description'	=> __('Enter value in px, % or em, e.g. 500px'),
						'section' 		=> 'block_'.$i,
						'priority' 		=> $priority++
					));

					$wp_customize->add_setting('block_'.$i.'_content_'.$j.'_image_'.$k.'_box_lg_y', array(
						'default' 		=> _x('0','gaudium'),
						'type' 			=> 'theme_mod'
					));

					$wp_customize->add_control('block_'.$i.'_content_'.$j.'_image_'.$k.'_box_lg_y', array(
						'label' 		=> __('Large Screen Image ','gaudium').($k+1).__(' Box Top Position','gaudium'),
						'description'	=> __('Enter value in px, % or em, e.g. 500px'),
						'section' 		=> 'block_'.$i,
						'priority' 		=> $priority++
					));

					$wp_customize->add_setting('block_'.$i.'_content_'.$j.'_image_'.$k.'_styles_xs', array(
						'default' 		=> _x('0','gaudium'),
						'type' 			=> 'theme_mod'
					));

					$wp_customize->add_control('block_'.$i.'_content_'.$j.'_image_'.$k.'_styles_xs', array(
						'label' 		=> __('Xsmall Screen Image ','gaudium').($k+1).__(' Styles','gaudium'),
						'description'	=> __('Enter styles, e.g. max-width: 50%;'),
						'section' 		=> 'block_'.$i,
						'priority' 		=> $priority++
					));

					$wp_customize->add_setting('block_'.$i.'_content_'.$j.'_image_'.$k.'_styles', array(
						'default' 		=> _x('0','gaudium'),
						'type' 			=> 'theme_mod'
					));

					$wp_customize->add_control('block_'.$i.'_content_'.$j.'_image_'.$k.'_styles', array(
						'label' 		=> __('Small Screen Image ','gaudium').($k+1).__(' Styles','gaudium'),
						'description'	=> __('Enter styles, e.g. max-width: 50%;'),
						'section' 		=> 'block_'.$i,
						'priority' 		=> $priority++
					));

					$wp_customize->add_setting('block_'.$i.'_content_'.$j.'_image_'.$k.'_styles_md', array(
						'default' 		=> _x('0','gaudium'),
						'type' 			=> 'theme_mod'
					));

					$wp_customize->add_control('block_'.$i.'_content_'.$j.'_image_'.$k.'_styles_md', array(
						'label' 		=> __('Medium Screen Image ','gaudium').($k+1).__(' Styles','gaudium'),
						'description'	=> __('Enter styles, e.g. max-width: 50%;'),
						'section' 		=> 'block_'.$i,
						'priority' 		=> $priority++
					));

					$wp_customize->add_setting('block_'.$i.'_content_'.$j.'_image_'.$k.'_styles_lg', array(
						'default' 		=> _x('0','gaudium'),
						'type' 			=> 'theme_mod'
					));

					$wp_customize->add_control('block_'.$i.'_content_'.$j.'_image_'.$k.'_styles_lg', array(
						'label' 		=> __('Large Screen Image ','gaudium').($k+1).__(' Styles','gaudium'),
						'description'	=> __('Enter styles, e.g. max-width: 50%;'),
						'section' 		=> 'block_'.$i,
						'priority' 		=> $priority++
					));
					
					$wp_customize->add_setting('block_'.$i.'_content_'.$j.'_image_'.$k.'_bg_position', array(
						'default' 		=> _x('0','gaudium'),
						'type' 			=> 'theme_mod'
					));

					$wp_customize->add_control('block_'.$i.'_content_'.$j.'_image_'.$k.'_bg_position', array(
						'label' 		=> __('Image ','gaudium').($k+1).__(' Background Position','gaudium'),
						'type'			=> 'select',
						'choices'		=> array(
							'0'			=> __('Select'),
							'-0'		=> __('Custom'),
							'center'	=> __('Center'),
							'left 0'	=> __('Left'),
							'right 0'	=> __('Right'),
							'bottom'	=> __('Bottom'),
							'top'		=> __('Top'),
						),
						'section' 		=> 'block_'.$i,
						'priority' 		=> $priority++
					));

					$wp_customize->add_setting('block_'.$i.'_content_'.$j.'_image_'.$k.'_xs_x', array(
						'default' 		=> _x('0','gaudium'),
						'type' 			=> 'theme_mod'
					));

					$wp_customize->add_control('block_'.$i.'_content_'.$j.'_image_'.$k.'_xs_x', array(
						'label' 		=> __('XSmall Screen Image ','gaudium').($k+1).__(' Left Position','gaudium'),
						'section' 		=> 'block_'.$i,
						'priority' 		=> $priority++
					));

					$wp_customize->add_setting('block_'.$i.'_content_'.$j.'_image_'.$k.'_x', array(
						'default' 		=> _x('0','gaudium'),
						'type' 			=> 'theme_mod'
					));

					$wp_customize->add_control('block_'.$i.'_content_'.$j.'_image_'.$k.'_x', array(
						'label' 		=> __('Image ','gaudium').($k+1).__(' Left Position','gaudium'),
						'section' 		=> 'block_'.$i,
						'priority' 		=> $priority++
					));

					$wp_customize->add_setting('block_'.$i.'_content_'.$j.'_image_'.$k.'_xs_y', array(
						'default' 		=> _x('0','gaudium'),
						'type' 			=> 'theme_mod'
					));

					$wp_customize->add_control('block_'.$i.'_content_'.$j.'_image_'.$k.'_xs_y', array(
						'label' 		=> __('XSmall Screen Image ','gaudium').($k+1).__(' Top Position','gaudium'),
						'description'	=> __('Enter value in px, % or em, e.g. 100px'),
						'section' 		=> 'block_'.$i,
						'priority' 		=> $priority++
					));

					$wp_customize->add_setting('block_'.$i.'_content_'.$j.'_image_'.$k.'_y', array(
						'default' 		=> _x('0','gaudium'),
						'type' 			=> 'theme_mod'
					));

					$wp_customize->add_control('block_'.$i.'_content_'.$j.'_image_'.$k.'_y', array(
						'label' 		=> __('Image ','gaudium').($k+1).__(' Top Position','gaudium'),
						'description'	=> __('Enter value in px, % or em, e.g. 100px'),
						'section' 		=> 'block_'.$i,
						'priority' 		=> $priority++
					));

					$wp_customize->add_setting('block_'.$i.'_content_'.$j.'_image_'.$k.'_repeat', array(
						'default' 		=> _x('0','gaudium'),
						'type' 			=> 'theme_mod'
					));

					$wp_customize->add_control('block_'.$i.'_content_'.$j.'_image_'.$k.'_repeat', array(
						'label' 		=> __('Image ','gaudium').($k+1).__(' Repeat','gaudium'),
						'type'			=> 'select',
						'choices' 		=> array(
							'0' 			=> __('Select'),
						    'repeat' 		=> __('Repeat'),
						    'no-repeat' 	=> __('No repeat'),
						),
						'section' 		=> 'block_'.$i,
						'priority' 		=> $priority++
					));

					$wp_customize->add_setting('block_'.$i.'_content_'.$j.'_image_'.$k.'_speed', array(
						'default' 		=> _x('0','gaudium'),
						'type' 			=> 'theme_mod',
					));

					$wp_customize->add_control('block_'.$i.'_content_'.$j.'_image_'.$k.'_speed', array(
						'label' 		=> __('Image ','gaudium').($k+1).__(' speed','gaudium'),
						'description'	=> __('Speed from 0.0 (static) to 1.0 (fixed).'),
						'section' 		=> 'block_'.$i,
						'priority' 		=> $priority++
					));
				}
			}
		}

		$wp_customize->add_section('page_type_selector', array(
			'title' 		=> __('Select Page Type','gaudium'),
			'description' 	=> sprintf(__('Select page type to customize. Requires PUBLISH and RELOAD.','gaudium')),
			'priority' 		=> $base_priority+=10
		));

		$priority = 1;

		$wp_customize->add_setting('page_type_select', array(
			'default' 		=> _x('0','gaudium'),
			'type' 			=> 'theme_mod'
		));

		$page_types = gwp_get_page_types();
		$page_type_select = gwp_get_page_type_select($page_types);
		$wp_customize->add_control('page_type_select', array(
			'label' 		=> __('Page Type','gaudium'),
			'description'	=> __('Requires PUBLISH and RELOAD'),
			'type'			=> 'select',
			'choices'		=> $page_type_select,
			'section' 		=> 'page_type_selector',
			'priority' 		=> $priority++
		));

		foreach($page_types as $page_type_key => $page_type_name) {
			if(get_theme_mod('page_type_select') == $page_type_key) {

				$wp_customize->add_section($page_type_key.'_settings', array(
					'title' 		=> __($page_type_name.': Settings','gaudium'),
					'description' 	=> sprintf(__('Settings','gaudium')),
					'priority' 		=> $base_priority+=10
				));

				$priority = 1;

				$wp_customize->add_setting($page_type_key.'_page_title_bg', array(
					'default' 		=> _x('0','gaudium'),
					'type' 			=> 'theme_mod'
				));

				$wp_customize->add_control($page_type_key.'_page_title_bg', array(
					'label' 		=> __('Page Title Background','gaudium'),
					'type'			=> 'select',
					'choices'		=> array(
						'0'				=> __('Select'),
						'white'			=> __('White'),
						'light'			=> __('Light')
					),
					'section' 		=> $page_type_key.'_settings',
					'priority' 		=> $priority++
				));

				$wp_customize->add_setting($page_type_key.'_page_title_number_images', array(
					'default' 		=> _x('0','gaudium'),
					'type' 			=> 'theme_mod'
				));
				
				$wp_customize->add_control($page_type_key.'_page_title_number_images', array(
					'label' 		=> __('Number of Images','gaudium'),
					'description'	=> __('Requires PUBLISH and RELOAD.','gaudium'),
					'section' 		=> $page_type_key.'_settings',
					'priority' 		=> $priority++
				));

				for($j = 0; $j < intval(get_theme_mod($page_type_key.'_page_title_number_images')); $j++) {
					
					$wp_customize->add_setting($page_type_key.'_page_title_image_'.$j.'_xs_url', array(
						'default' 		=> '',
						'type' 			=> 'theme_mod'
					));

					$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, $page_type_key.'_page_title_image_'.$j.'_xs_url', array(
						'label' 		=> __('XSmall Screen (Only) Image ','gaudium').($j+1),
						'section' 		=> $page_type_key.'_settings',
						'settings'		=> $page_type_key.'_page_title_image_'.$j.'_xs_url',
						'priority' 		=> $priority++
					)));

					$wp_customize->add_setting($page_type_key.'_page_title_image_'.$j.'_url', array(
						'default' 		=> '',
						'type' 			=> 'theme_mod'
					));

					$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, $page_type_key.'_page_title_image_'.$j.'_url', array(
						'label' 		=> __('XSmall Screen Image ','gaudium').($j+1),
						'section' 		=> $page_type_key.'_settings',
						'settings'		=> $page_type_key.'_page_title_image_'.$j.'_url',
						'priority' 		=> $priority++
					)));

					$wp_customize->add_setting($page_type_key.'_page_title_image_'.$j.'_sm_url', array(
						'default' 		=> '',
						'type' 			=> 'theme_mod'
					));

					$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, $page_type_key.'_page_title_image_'.$j.'_sm_url', array(
						'label' 		=> __('Small Screen Image ','gaudium').($j+1),
						'section' 		=> $page_type_key.'_settings',
						'settings'		=> $page_type_key.'_page_title_image_'.$j.'_sm_url',
						'priority' 		=> $priority++
					)));

					$wp_customize->add_setting($page_type_key.'_page_title_image_'.$j.'_md_url', array(
						'default' 		=> '',
						'type' 			=> 'theme_mod'
					));

					$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, $page_type_key.'_page_title_image_'.$j.'_md_url', array(
						'label' 		=> __('Medium Screen Image ','gaudium').($j+1),
						'section' 		=> $page_type_key.'_settings',
						'settings'		=> $page_type_key.'_page_title_image_'.$j.'_md_url',
						'priority' 		=> $priority++
					)));

					$wp_customize->add_setting($page_type_key.'_page_title_image_'.$j.'_lg_url', array(
						'default' 		=> '',
						'type' 			=> 'theme_mod'
					));

					$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, $page_type_key.'_page_title_image_'.$j.'_lg_url', array(
						'label' 		=> __('Large Screen Image ','gaudium').($j+1),
						'section' 		=> $page_type_key.'_settings',
						'settings'		=> $page_type_key.'_page_title_image_'.$j.'_lg_url',
						'priority' 		=> $priority++
					)));

					$wp_customize->add_setting($page_type_key.'_page_title_image_'.$j.'_bg', array(
						'default' 		=> _x('0','gaudium'),
						'type' 			=> 'theme_mod'

					));

					$wp_customize->add_control($page_type_key.'_page_title_image_'.$j.'_bg', array(
						'label' 		=> __('Image ','gaudium').($j+1).__(' Background Color','gaudium'),
						'description'	=> __('Background color, e.g. #e4e4e4'),
						'section' 		=> $page_type_key.'_settings',
						'priority' 		=> $priority++
					));

					$wp_customize->add_setting($page_type_key.'_page_title_image_'.$j.'_top_xs_space', array(
						'default' 		=> _x('0','gaudium'),
						'type' 			=> 'theme_mod'
					));

					$wp_customize->add_control($page_type_key.'_page_title_image_'.$j.'_top_xs_space', array(
						'label' 		=> __('XSmall Screen Top','gaudium'),
						'description'	=> __('Add space to top on extra-small and larger screens, i.e. mobile devices. Select 0 to deactivate.'),
						'type'			=> 'select',
						'choices'	=> array(
							'0'		=> __('Select'),
							'-0'	=> __('Reset'),
							'1'		=> __('1'),
							'2'		=> __('2'),
							'3'		=> __('3'),
							'4'		=> __('4'),
							'5'		=> __('5'),
							'6'		=> __('6'),
							'7'		=> __('7'),
							'8'		=> __('8'),
							'9'		=> __('9'),
							'10'	=> __('10'),
							'11'	=> __('11'),
							'12'	=> __('12'),
							'13'	=> __('13'),
							'14'	=> __('14'),
							'15'	=> __('15'),
							'16'	=> __('16'),
							'17'	=> __('17'),
							'18'	=> __('18'),
							'19'	=> __('19'),
							'20'	=> __('20'),
							'21'	=> __('21'),
							'22'	=> __('22'),
							'23'	=> __('23'),
							'24'	=> __('24'),
							'25'	=> __('25'),
							'26'	=> __('26'),
							'27'	=> __('27'),
							'28'	=> __('28'),
							'29'	=> __('29'),
							'30'	=> __('30'),
							'31'	=> __('31'),
							'32'	=> __('32'),
							'33'	=> __('33'),
							'34'	=> __('34'),
							'35'	=> __('35'),
							'36'	=> __('36'),
							'37'	=> __('37'),
							'38'	=> __('38'),
							'39'	=> __('39'),
							'40'	=> __('40'),
						),
						'section' 		=> $page_type_key.'_settings',
						'priority' 		=> $priority++
					));

					$wp_customize->add_setting($page_type_key.'_page_title_image_'.$j.'_bottom_xs_space', array(
						'default' 		=> _x('0','gaudium'),
						'type' 			=> 'theme_mod'
					));

					$wp_customize->add_control($page_type_key.'_page_title_image_'.$j.'_bottom_xs_space', array(
						'label' 		=> __('XSmall Screen Bottom','gaudium'),
						'description'	=> __('Add space to top on extra-small and larger screens, i.e. mobile devices. Select 0 to deactivate.'),
						'type'			=> 'select',
						'choices'	=> array(
							'0'		=> __('Select'),
							'-0'	=> __('Reset'),
							'1'		=> __('1'),
							'2'		=> __('2'),
							'3'		=> __('3'),
							'4'		=> __('4'),
							'5'		=> __('5'),
							'6'		=> __('6'),
							'7'		=> __('7'),
							'8'		=> __('8'),
							'9'		=> __('9'),
							'10'	=> __('10'),
							'11'	=> __('11'),
							'12'	=> __('12'),
							'13'	=> __('13'),
							'14'	=> __('14'),
							'15'	=> __('15'),
							'16'	=> __('16'),
							'17'	=> __('17'),
							'18'	=> __('18'),
							'19'	=> __('19'),
							'20'	=> __('20'),
							'21'	=> __('21'),
							'22'	=> __('22'),
							'23'	=> __('23'),
							'24'	=> __('24'),
							'25'	=> __('25'),
							'26'	=> __('26'),
							'27'	=> __('27'),
							'28'	=> __('28'),
							'29'	=> __('29'),
							'30'	=> __('30'),
							'31'	=> __('31'),
							'32'	=> __('32'),
							'33'	=> __('33'),
							'34'	=> __('34'),
							'35'	=> __('35'),
							'36'	=> __('36'),
							'37'	=> __('37'),
							'38'	=> __('38'),
							'39'	=> __('39'),
							'40'	=> __('40'),
						),
						'section' 		=> $page_type_key.'_settings',
						'priority' 		=> $priority++
					));

					$wp_customize->add_setting($page_type_key.'_page_title_image_'.$j.'_bg_size', array(
						'default' 		=> _x('0','gaudium'),
						'type' 			=> 'theme_mod'
					));

					$wp_customize->add_control($page_type_key.'_page_title_image_'.$j.'_bg_size', array(
						'label' 		=> __('Image ','gaudium').($j+1).__(' Background Size','gaudium'),
						'type'			=> 'select',
						'choices'		=> array(
							'0'			=> __('Select'),
							'-0'		=> __('Custom'),
							'auto'		=> __('Auto'),
							'cover'		=> __('Cover'),
							'contain'	=> __('Contain'),
						),
						'section' 		=> $page_type_key.'_settings',
						'priority' 		=> $priority++
					));

					$wp_customize->add_setting($page_type_key.'_page_title_image_'.$j.'_layout', array(
						'default' 		=> _x('0','gaudium'),
						'type' 			=> 'theme_mod'
					));

					$wp_customize->add_control($page_type_key.'_page_title_image_'.$j.'_layout', array(
						'label' 		=> __('Image ','gaudium').($j+1).__(' Layout','gaudium'),
						'type'			=> 'select',
						'choices'		=> array(
							'0'				=> __('Select'),
							'default'		=> __('Default'),
							'landscape'		=> __('Landscape'),
							'portrait'		=> __('Portrait'),
							'vr'		    => __('Vertical Rhythm'),
						),
						'section' 		=> $page_type_key.'_settings',
						'priority' 		=> $priority++
					));

					$wp_customize->add_setting($page_type_key.'_page_title_image_'.$j.'_xs_width', array(
						'default' 		=> _x('0','gaudium'),
						'type' 			=> 'theme_mod'
					));

					$wp_customize->add_control($page_type_key.'_page_title_image_'.$j.'_xs_width', array(
						'label' 		=> __('XSmall Screen Image ','gaudium').($j+1).__(' Width','gaudium'),
						'description'	=> __('Enter value in px, % or em, e.g. 500px'),
						'section' 		=> $page_type_key.'_settings',
						'priority' 		=> $priority++
					));

					$wp_customize->add_setting($page_type_key.'_page_title_image_'.$j.'_width', array(
						'default' 		=> _x('0','gaudium'),
						'type' 			=> 'theme_mod'
					));

					$wp_customize->add_control($page_type_key.'_page_title_image_'.$j.'_width', array(
						'label' 		=> __('Small Screen Image ','gaudium').($j+1).__(' Width','gaudium'),
						'description'	=> __('Enter value in px, % or em, e.g. 500px'),
						'section' 		=> $page_type_key.'_settings',
						'priority' 		=> $priority++
					));

					$wp_customize->add_setting($page_type_key.'_page_title_image_'.$j.'_md_width', array(
						'default' 		=> _x('0','gaudium'),
						'type' 			=> 'theme_mod'
					));

					$wp_customize->add_control($page_type_key.'_page_title_image_'.$j.'_md_width', array(
						'label' 		=> __('Medium Screen Image ','gaudium').($j+1).__(' Width','gaudium'),
						'description'	=> __('Enter value in px, % or em, e.g. 500px'),
						'section' 		=> $page_type_key.'_settings',
						'priority' 		=> $priority++
					));

					$wp_customize->add_setting($page_type_key.'_page_title_image_'.$j.'_lg_width', array(
						'default' 		=> _x('0','gaudium'),
						'type' 			=> 'theme_mod'
					));

					$wp_customize->add_control($page_type_key.'_page_title_image_'.$j.'_lg_width', array(
						'label' 		=> __('Large Screen Image ','gaudium').($j+1).__(' Width','gaudium'),
						'description'	=> __('Enter value in px, % or em, e.g. 500px'),
						'section' 		=> $page_type_key.'_settings',
						'priority' 		=> $priority++
					));

					$wp_customize->add_setting($page_type_key.'_page_title_image_'.$j.'_xs_height', array(
						'default' 		=> _x('0','gaudium'),
						'type' 			=> 'theme_mod'
					));

					$wp_customize->add_control($page_type_key.'_page_title_image_'.$j.'_xs_height', array(
						'label' 		=> __('XSmall Screen Image ','gaudium').($j+1).__(' Height','gaudium'),
						'description'	=> __('Enter value in px, % or em, e.g. 500px'),
						'section' 		=> $page_type_key.'_settings',
						'priority' 		=> $priority++
					));

					$wp_customize->add_setting($page_type_key.'_page_title_image_'.$j.'_height', array(
						'default' 		=> _x('0','gaudium'),
						'type' 			=> 'theme_mod'
					));

					$wp_customize->add_control($page_type_key.'_page_title_image_'.$j.'_height', array(
						'label' 		=> __('Small Screen Image ','gaudium').($j+1).__(' Height','gaudium'),
						'description'	=> __('Enter value in px, % or em, e.g. 500px'),
						'type'			=> 'select',
						'section' 		=> $page_type_key.'_settings',
						'priority' 		=> $priority++
					));

					$wp_customize->add_setting($page_type_key.'_page_title_image_'.$j.'_md_height', array(
						'default' 		=> _x('0','gaudium'),
						'type' 			=> 'theme_mod'
					));

					$wp_customize->add_control($page_type_key.'_page_title_image_'.$j.'_md_height', array(
						'label' 		=> __('Medium Screen Image ','gaudium').($j+1).__(' Height','gaudium'),
						'description'	=> __('Enter value in px, % or em, e.g. 500px'),
						'section' 		=> $page_type_key.'_settings',
						'priority' 		=> $priority++
					));

					$wp_customize->add_setting($page_type_key.'_page_title_image_'.$j.'_lg_height', array(
						'default' 		=> _x('0','gaudium'),
						'type' 			=> 'theme_mod'
					));

					$wp_customize->add_control($page_type_key.'_page_title_image_'.$j.'_lg_height', array(
						'label' 		=> __('Large Screen Image ','gaudium').($j+1).__(' Height','gaudium'),
						'description'	=> __('Enter value in px, % or em, e.g. 500px'),
						'type'			=> 'select',
						'choices'	=> array(
							'0'		=> __('Select'),
							'-0'	=> __('Reset'),
							'-'		=> __('0'),
							'1'		=> __('1'),
							'2'		=> __('2'),
							'3'		=> __('3'),
							'4'		=> __('4'),
							'5'		=> __('5'),
							'6'		=> __('6'),
							'7'		=> __('7'),
							'8'		=> __('8'),
							'9'		=> __('9'),
							'10'	=> __('10'),
							'11'	=> __('11'),
							'12'	=> __('12'),
							'13'	=> __('13'),
							'14'	=> __('14'),
							'15'	=> __('15'),
							'16'	=> __('16'),
							'17'	=> __('17'),
							'18'	=> __('18'),
							'19'	=> __('19'),
							'20'	=> __('20'),
							'21'	=> __('21'),
							'22'	=> __('22'),
							'23'	=> __('23'),
							'24'	=> __('24'),
							'25'	=> __('25'),
							'26'	=> __('26'),
							'27'	=> __('27'),
							'28'	=> __('28'),
							'29'	=> __('29'),
							'30'	=> __('30'),
							'31'	=> __('31'),
							'32'	=> __('32'),
							'33'	=> __('33'),
							'34'	=> __('34'),
							'35'	=> __('35'),
							'36'	=> __('36'),
							'37'	=> __('37'),
							'38'	=> __('38'),
							'39'	=> __('39'),
							'40'	=> __('40'),
						),
						'section' 		=> $page_type_key.'_settings',
						'priority' 		=> $priority++
					));

					$wp_customize->add_setting($page_type_key.'_page_title_image_'.$j.'_box_xs_width', array(
						'default' 		=> _x('0','gaudium'),
						'type' 			=> 'theme_mod'
					));

					$wp_customize->add_control($page_type_key.'_page_title_image_'.$j.'_box_xs_width', array(
						'label' 		=> __('XSmall Screen Image ','gaudium').($j+1).__(' Box Width','gaudium'),
						'description'	=> __('Enter value in px, % or em, e.g. 500px'),
						'section' 		=> $page_type_key.'_settings',
						'priority' 		=> $priority++
					));

					$wp_customize->add_setting($page_type_key.'_page_title_image_'.$j.'_box_width', array(
						'default' 		=> _x('0','gaudium'),
						'type' 			=> 'theme_mod'
					));

					$wp_customize->add_control($page_type_key.'_page_title_image_'.$j.'_box_width', array(
						'label' 		=> __('Small Screen Image ','gaudium').($j+1).__(' Box Width','gaudium'),
						'description'	=> __('Enter value in px, % or em, e.g. 500px'),
						'section' 		=> $page_type_key.'_settings',
						'priority' 		=> $priority++
					));

					$wp_customize->add_setting($page_type_key.'_page_title_image_'.$j.'_box_md_width', array(
						'default' 		=> _x('0','gaudium'),
						'type' 			=> 'theme_mod'
					));

					$wp_customize->add_control($page_type_key.'_page_title_image_'.$j.'_box_md_width', array(
						'label' 		=> __('Medium Screen Image ','gaudium').($j+1).__(' Box Width','gaudium'),
						'description'	=> __('Enter value in px, % or em, e.g. 500px'),
						'section' 		=> $page_type_key.'_settings',
						'priority' 		=> $priority++
					));

					$wp_customize->add_setting($page_type_key.'_page_title_image_'.$j.'_box_lg_width', array(
						'default' 		=> _x('0','gaudium'),
						'type' 			=> 'theme_mod'
					));

					$wp_customize->add_control($page_type_key.'_page_title_image_'.$j.'_box_lg_width', array(
						'label' 		=> __('Large Screen Image ','gaudium').($j+1).__(' Box Width','gaudium'),
						'description'	=> __('Enter value in px, % or em, e.g. 500px'),
						'section' 		=> $page_type_key.'_settings',
						'priority' 		=> $priority++
					));

					$wp_customize->add_setting($page_type_key.'_page_title_image_'.$j.'_box_xs_height', array(
						'default' 		=> _x('0','gaudium'),
						'type' 			=> 'theme_mod'
					));

					$wp_customize->add_control($page_type_key.'_page_title_image_'.$j.'_box_xs_height', array(
						'label' 		=> __('XSmall Screen Image ','gaudium').($j+1).__(' Box Height','gaudium'),
						'description'	=> __('Enter value in px, % or em, e.g. 500px'),
						'section' 		=> $page_type_key.'_settings',
						'priority' 		=> $priority++
					));

					$wp_customize->add_setting($page_type_key.'_page_title_image_'.$j.'_box_height', array(
						'default' 		=> _x('0','gaudium'),
						'type' 			=> 'theme_mod'
					));

					$wp_customize->add_control($page_type_key.'_page_title_image_'.$j.'_box_height', array(
						'label' 		=> __('Small Screen Image ','gaudium').($j+1).__(' Box Height','gaudium'),
						'description'	=> __('Enter value in px, % or em, e.g. 500px'),
						'section' 		=> $page_type_key.'_settings',
						'priority' 		=> $priority++
					));

					$wp_customize->add_setting($page_type_key.'_page_title_image_'.$j.'_box_md_height', array(
						'default' 		=> _x('0','gaudium'),
						'type' 			=> 'theme_mod'
					));

					$wp_customize->add_control($page_type_key.'_page_title_image_'.$j.'_box_md_height', array(
						'label' 		=> __('Medium Screen Image ','gaudium').($j+1).__(' Box Height','gaudium'),
						'description'	=> __('Enter value in px, % or em, e.g. 500px'),
						'section' 		=> $page_type_key.'_settings',
						'priority' 		=> $priority++
					));

					$wp_customize->add_setting($page_type_key.'_page_title_image_'.$j.'_box_lg_height', array(
						'default' 		=> _x('0','gaudium'),
						'type' 			=> 'theme_mod'
					));

					$wp_customize->add_control($page_type_key.'_page_title_image_'.$j.'_box_lg_height', array(
						'label' 		=> __('Large Screen Image ','gaudium').($j+1).__(' Box Height','gaudium'),
						'description'	=> __('Enter value in px, % or em, e.g. 500px'),
						'section' 		=> $page_type_key.'_settings',
						'priority' 		=> $priority++
					));

					$wp_customize->add_setting($page_type_key.'_page_title_image_'.$j.'_box_xs_x', array(
						'default' 		=> _x('0','gaudium'),
						'type' 			=> 'theme_mod'
					));

					$wp_customize->add_control($page_type_key.'_page_title_image_'.$j.'_box_xs_x', array(
						'label' 		=> __('XSmall Screen Image ','gaudium').($j+1).__(' Box Left Position','gaudium'),
						'description'	=> __('Enter value in px, % or em, e.g. 500px'),
						'section' 		=> $page_type_key.'_settings',
						'priority' 		=> $priority++
					));

					$wp_customize->add_setting($page_type_key.'_page_title_image_'.$j.'_box_x', array(
						'default' 		=> _x('0','gaudium'),
						'type' 			=> 'theme_mod'
					));

					$wp_customize->add_control($page_type_key.'_page_title_image_'.$j.'_box_x', array(
						'label' 		=> __('Small Screen Image ','gaudium').($j+1).__(' Box Left Position','gaudium'),
						'description'	=> __('Enter value in px, % or em, e.g. 500px'),
						'section' 		=> $page_type_key.'_settings',
						'priority' 		=> $priority++
					));

					$wp_customize->add_setting($page_type_key.'_page_title_image_'.$j.'_box_md_x', array(
						'default' 		=> _x('0','gaudium'),
						'type' 			=> 'theme_mod'
					));

					$wp_customize->add_control($page_type_key.'_page_title_image_'.$j.'_box_md_x', array(
						'label' 		=> __('Medium Screen Image ','gaudium').($j+1).__(' Box Left Position','gaudium'),
						'description'	=> __('Enter value in px, % or em, e.g. 500px'),
						'section' 		=> $page_type_key.'_settings',
						'priority' 		=> $priority++
					));

					$wp_customize->add_setting($page_type_key.'_page_title_image_'.$j.'_box_lg_x', array(
						'default' 		=> _x('0','gaudium'),
						'type' 			=> 'theme_mod'
					));

					$wp_customize->add_control($page_type_key.'_page_title_image_'.$j.'_box_lg_x', array(
						'label' 		=> __('Large Screen Image ','gaudium').($j+1).__(' Box Left Position','gaudium'),
						'description'	=> __('Enter value in px, % or em, e.g. 500px'),
						'section' 		=> $page_type_key.'_settings',
						'priority' 		=> $priority++
					));

					$wp_customize->add_setting($page_type_key.'_page_title_image_'.$j.'_box_xs_y', array(
						'default' 		=> _x('0','gaudium'),
						'type' 			=> 'theme_mod'
					));

					$wp_customize->add_control($page_type_key.'_page_title_image_'.$j.'_box_xs_y', array(
						'label' 		=> __('XSmall Screen Image ','gaudium').($j+1).__(' Box Top Position','gaudium'),
						'description'	=> __('Enter value in px, % or em, e.g. 500px'),
						'section' 		=> $page_type_key.'_settings',
						'priority' 		=> $priority++
					));

					$wp_customize->add_setting($page_type_key.'_page_title_image_'.$j.'_box_y', array(
						'default' 		=> _x('0','gaudium'),
						'type' 			=> 'theme_mod'
					));

					$wp_customize->add_control($page_type_key.'_page_title_image_'.$j.'_box_y', array(
						'label' 		=> __('Small Screen Image ','gaudium').($j+1).__(' Box Top Position','gaudium'),
						'description'	=> __('Enter value in px, % or em, e.g. 500px'),
						'section' 		=> $page_type_key.'_settings',
						'priority' 		=> $priority++
					));

					$wp_customize->add_setting($page_type_key.'_page_title_image_'.$j.'_box_md_y', array(
						'default' 		=> _x('0','gaudium'),
						'type' 			=> 'theme_mod'
					));

					$wp_customize->add_control($page_type_key.'_page_title_image_'.$j.'_box_md_y', array(
						'label' 		=> __('Medium Screen Image ','gaudium').($j+1).__(' Box Top Position','gaudium'),
						'description'	=> __('Enter value in px, % or em, e.g. 500px'),
						'section' 		=> $page_type_key.'_settings',
						'priority' 		=> $priority++
					));

					$wp_customize->add_setting($page_type_key.'_page_title_image_'.$j.'_box_lg_y', array(
						'default' 		=> _x('0','gaudium'),
						'type' 			=> 'theme_mod'
					));

					$wp_customize->add_control($page_type_key.'_page_title_image_'.$j.'_box_lg_y', array(
						'label' 		=> __('Large Screen Image ','gaudium').($j+1).__(' Box Top Position','gaudium'),
						'description'	=> __('Enter value in px, % or em, e.g. 500px'),
						'section' 		=> $page_type_key.'_settings',
						'priority' 		=> $priority++
					));

					$wp_customize->add_setting($page_type_key.'_page_title_image_'.$j.'_styles_xs', array(
						'default' 		=> _x('0','gaudium'),
						'type' 			=> 'theme_mod'
					));

					$wp_customize->add_control($page_type_key.'_page_title_image_'.$j.'_styles_xs', array(
						'label' 		=> __('XSmall Screen Image ','gaudium').($j+1).__(' Styles','gaudium'),
						'description'	=> __('Enter styles, e.g. max-width: 50%;'),
						'section' 		=> $page_type_key.'_settings',
						'priority' 		=> $priority++
					));

					$wp_customize->add_setting($page_type_key.'_page_title_image_'.$j.'_styles', array(
						'default' 		=> _x('0','gaudium'),
						'type' 			=> 'theme_mod'
					));

					$wp_customize->add_control($page_type_key.'_page_title_image_'.$j.'_styles', array(
						'label' 		=> __('Small Screen Image ','gaudium').($j+1).__(' Styles','gaudium'),
						'description'	=> __('Enter styles, e.g. max-width: 50%;'),
						'section' 		=> $page_type_key.'_settings',
						'priority' 		=> $priority++
					));

					$wp_customize->add_setting($page_type_key.'_page_title_image_'.$j.'_styles_md', array(
						'default' 		=> _x('0','gaudium'),
						'type' 			=> 'theme_mod'
					));

					$wp_customize->add_control($page_type_key.'_page_title_image_'.$j.'_styles_md', array(
						'label' 		=> __('Medium Screen Image ','gaudium').($j+1).__(' Styles','gaudium'),
						'description'	=> __('Enter styles, e.g. max-width: 50%;'),
						'section' 		=> $page_type_key.'_settings',
						'priority' 		=> $priority++
					));

					$wp_customize->add_setting($page_type_key.'_page_title_image_'.$j.'_styles_lg', array(
						'default' 		=> _x('0','gaudium'),
						'type' 			=> 'theme_mod'
					));

					$wp_customize->add_control($page_type_key.'_page_title_image_'.$j.'_styles_lg', array(
						'label' 		=> __('Large Screen Image ','gaudium').($j+1).__(' Styles','gaudium'),
						'description'	=> __('Enter styles, e.g. max-width: 50%;'),
						'section' 		=> $page_type_key.'_settings',
						'priority' 		=> $priority++
					));

					$wp_customize->add_setting($page_type_key.'_page_title_image_'.$j.'_bg_position', array(
						'default' 		=> _x('0','gaudium'),
						'type' 			=> 'theme_mod'
					));

					$wp_customize->add_control($page_type_key.'_page_title_image_'.$j.'_bg_position', array(
						'label' 		=> __('Image ','gaudium').($j+1).__(' Background Position','gaudium'),
						'type'			=> 'select',
						'choices'		=> array(
							'0'			=> __('Select'),
							'-0'		=> __('Custom'),
							'center'	=> __('Center'),
							'left 0'	=> __('Left'),
							'right 0'	=> __('Right'),
							'bottom'	=> __('Bottom'),
							'top'		=> __('Top'),
						),
						'section' 		=> $page_type_key.'_settings',
						'priority' 		=> $priority++
					));

					$wp_customize->add_setting($page_type_key.'_page_title_image_'.$j.'_xs_x', array(
						'default' 		=> _x('0','gaudium'),
						'type' 			=> 'theme_mod'
					));

					$wp_customize->add_control($page_type_key.'_page_title_image_'.$j.'_xs_x', array(
						'label' 		=> __('XSmall Screen Image ','gaudium').($j+1).__(' Left Position','gaudium'),
						'section' 		=> $page_type_key.'_settings',
						'priority' 		=> $priority++
					));

					$wp_customize->add_setting($page_type_key.'_page_title_image_'.$j.'_x', array(
						'default' 		=> _x('0','gaudium'),
						'type' 			=> 'theme_mod'
					));

					$wp_customize->add_control($page_type_key.'_page_title_image_'.$j.'_x', array(
						'label' 		=> __('Image ','gaudium').($j+1).__(' Left Position','gaudium'),
						'section' 		=> $page_type_key.'_settings',
						'priority' 		=> $priority++
					));

					$wp_customize->add_setting($page_type_key.'_page_title_image_'.$j.'_xs_y', array(
						'default' 		=> _x('0','gaudium'),
						'type' 			=> 'theme_mod'
					));

					$wp_customize->add_control($page_type_key.'_page_title_image_'.$j.'_xs_y', array(
						'label' 		=> __('XSmall Screen Image ','gaudium').($j+1).__(' Top Position','gaudium'),
						'description'	=> __('Enter value in px, % or em, e.g. 100px'),
						'section' 		=> $page_type_key.'_settings',
						'priority' 		=> $priority++
					));

					$wp_customize->add_setting($page_type_key.'_page_title_image_'.$j.'_y', array(
						'default' 		=> _x('0','gaudium'),
						'type' 			=> 'theme_mod'
					));

					$wp_customize->add_control($page_type_key.'_page_title_image_'.$j.'_y', array(
						'label' 		=> __('Image ','gaudium').($j+1).__(' Top Position','gaudium'),
						'description'	=> __('Enter value in px, % or em, e.g. 100px'),
						'section' 		=> $page_type_key.'_settings',
						'priority' 		=> $priority++
					));

					$wp_customize->add_setting($page_type_key.'_page_title_image_'.$j.'_repeat', array(
						'default' 		=> _x('0','gaudium'),
						'type' 			=> 'theme_mod'
					));

					$wp_customize->add_control($page_type_key.'_page_title_image_'.$j.'_repeat', array(
						'label' 		=> __('Image ','gaudium').($j+1).__(' Repeat','gaudium'),
						'type'			=> 'select',
						'choices' 		=> array(
							'0' 			=> __('Select'),
						    'repeat' 		=> __('Repeat'),
						    'no-repeat' 	=> __('No repeat'),
						),
						'section' 		=> $page_type_key.'_settings',
						'priority' 		=> $priority++
					));

					$wp_customize->add_setting($page_type_key.'_page_title_image_'.$j.'_speed', array(
						'default' 		=> _x('0','gaudium'),
						'type' 			=> 'theme_mod',
					));

					$wp_customize->add_control($page_type_key.'_page_title_image_'.$j.'_speed', array(
						'label' 		=> __('Image ','gaudium').($j+1).__(' speed','gaudium'),
						'description'	=> __('Speed from 0.0 (static) to 1.0 (fixed).'),
						'section' 		=> $page_type_key.'_settings',
						'priority' 		=> $priority++
					));
				}

				$wp_customize->add_panel($page_type_key.'_stage_panel',
				   	array(
				      	'title' 		=> __($page_type_name.': Stage','gaudium'),
				      	'description' 	=> esc_html__( 'Customize stage slides.' ),
				      	'priority' 		=> $base_priority+=10
				   	)
				);

				$section_priority = 1;

				$wp_customize->add_section($page_type_key.'_stage_settings', array(
					'title' 		=> __('Stage Settings','gaudium'),
					'description' 	=> sprintf(__('Options for stage','gaudium')),
					'panel'			=> $page_type_key.'_stage_panel',
					'priority' 		=> $section_priority++
				));

				$priority = 1;

				$wp_customize->add_setting($page_type_key.'_stage_number_slides', array(
					'default' 		=> _x('0','gaudium'),
					'type' 			=> 'theme_mod'
				));

				$wp_customize->add_control($page_type_key.'_stage_number_slides', array(
					'label' 		=> __('Number of Slides','gaudium'),
					'description'	=> __('Requires PUBLISH and RELOAD.','gaudium'),
					'section' 		=> $page_type_key.'_stage_settings',
					'priority' 		=> $priority++
				));
				
				for($i = 0; $i < intval(get_theme_mod($page_type_key.'_stage_number_slides')); $i++) {
					
					$wp_customize->add_section($page_type_key.'_stage_slide_'.$i, array(
						'title' 		=> __('Stage Slide ','gaudium').($i+1).__('  Settings','gaudium'),
						'description' 	=> sprintf(__('Options for this slide','gaudium')),
						'panel'			=> $page_type_key.'_stage_panel',
						'priority' 		=> $section_priority++
					));

					$priority = 1;

					$wp_customize->add_setting($page_type_key.'_stage_slide_'.$i.'_bg', array(
						'default' 		=> _x('0','gaudium'),
						'type' 			=> 'theme_mod'
					));

					$wp_customize->add_control($page_type_key.'_stage_slide_'.$i.'_bg', array(
						'label' 		=> __('Background Color','gaudium'),
						'section' 		=> $page_type_key.'_stage_slide_'.$i,
						'priority' 		=> $priority++
					));

					$wp_customize->add_setting($page_type_key.'_stage_slide_'.$i.'_gutters', array(
						'default' 		=> _x('0','gaudium'),
						'type' 			=> 'theme_mod'
					));

					$wp_customize->add_control($page_type_key.'_stage_slide_'.$i.'_gutters', array(
						'label' 		=> __('Gutters','gaudium'),
						'type'			=> 'select',
						'choices' 		=> array(
							'0'		=> __('Select'),
							'-0' 	=> __('Gutters'),
						    '1'    	=> __('No gutters'),
						),
						'section' 		=> $page_type_key.'_stage_slide_'.$i,
						'priority' 		=> $priority++
					));

					$wp_customize->add_setting($page_type_key.'_stage_slide_'.$i.'_number_images', array(
						'default' 		=> _x('0','gaudium'),
						'type' 			=> 'theme_mod'
					));
					
					$wp_customize->add_control($page_type_key.'_stage_slide_'.$i.'_number_images', array(
						'label' 		=> __('Number of Images','gaudium'),
						'description'	=> __('Requires PUBLISH and RELOAD.','gaudium'),
						'section' 		=> $page_type_key.'_stage_slide_'.$i,
						'priority' 		=> $priority++
					));
					for($j = 0; $j < intval(get_theme_mod($page_type_key.'_stage_slide_'.$i.'_number_images')); $j++) {

						$wp_customize->add_setting($page_type_key.'_stage_slide_'.$i.'_image_'.$j.'_xs_url', array(
							'default' 		=> '',
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, $page_type_key.'_stage_slide_'.$i.'_image_'.$j.'_xs_url', array(
							'label' 		=> __('XSmall Screen (Only) Image ','gaudium').($j+1),
							'section' 		=> $page_type_key.'_stage_slide_'.$i,
							'settings'		=> $page_type_key.'_stage_slide_'.$i.'_image_'.$j.'_xs_url',
							'priority' 		=> $priority++
						)));

						$wp_customize->add_setting('block_'.$i.'_image_'.$j.'_url', array(
							'default' 		=> '',
							'type' 			=> 'theme_mod'
						));
						$wp_customize->add_setting($page_type_key.'_stage_slide_'.$i.'_image_'.$j.'_url', array(
							'default' 		=> '',
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, $page_type_key.'_stage_slide_'.$i.'_image_'.$j.'_url', array(
							'label' 		=> __('XSmall Screen Image ','gaudium').($k+1),
							'section' 		=> $page_type_key.'_stage_slide_'.$i,
							'settings'		=> $page_type_key.'_stage_slide_'.$i.'_image_'.$j.'_url',
							'priority' 		=> $priority++
						)));

						$wp_customize->add_setting($page_type_key.'_stage_slide_'.$i.'_image_'.$j.'_sm_url', array(
							'default' 		=> '',
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, $page_type_key.'_stage_slide_'.$i.'_image_'.$j.'_sm_url', array(
							'label' 		=> __('Small Screen Image ','gaudium').($k+1),
							'section' 		=> $page_type_key.'_stage_slide_'.$i,
							'settings'		=> $page_type_key.'_stage_slide_'.$i.'_image_'.$j.'_sm_url',
							'priority' 		=> $priority++
						)));

						$wp_customize->add_setting($page_type_key.'_stage_slide_'.$i.'_image_'.$j.'_md_url', array(
							'default' 		=> '',
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, $page_type_key.'_stage_slide_'.$i.'_image_'.$j.'_md_url', array(
							'label' 		=> __('Medium Screen Image ','gaudium').($k+1),
							'section' 		=> $page_type_key.'_stage_slide_'.$i,
							'settings'		=> $page_type_key.'_stage_slide_'.$i.'_image_'.$j.'_md_url',
							'priority' 		=> $priority++
						)));

						$wp_customize->add_setting($page_type_key.'_stage_slide_'.$i.'_image_'.$j.'_lg_url', array(
							'default' 		=> '',
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, $page_type_key.'_stage_slide_'.$i.'_image_'.$j.'_lg_url', array(
							'label' 		=> __('Large Screen Image ','gaudium').($k+1),
							'section' 		=> $page_type_key.'_stage_slide_'.$i,
							'settings'		=> $page_type_key.'_stage_slide_'.$i.'_image_'.$j.'_lg_url',
							'priority' 		=> $priority++
						)));

						$wp_customize->add_control($page_type_key.'_stage_slide_'.$i.'_image_'.$j.'_bg', array(
							'label' 		=> __('Image ','gaudium').($j+1).__(' Background Color','gaudium'),
							'description'	=> __('Background color, e.g. #e4e4e4'),
							'section' 		=> $page_type_key.'_stage_slide_'.$i,
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($page_type_key.'_stage_slide_'.$i.'_image_'.$j.'_bg_size', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($page_type_key.'_stage_slide_'.$i.'_image_'.$j.'_bg_size', array(
							'label' 		=> __('Image ','gaudium').($j+1).__(' Background Size','gaudium'),
							'type'			=> 'select',
							'choices'		=> array(
								'0'			=> __('Select'),
								'-0'		=> __('Custom'),
								'auto'		=> __('Auto'),
								'cover'		=> __('Cover'),
								'contain'	=> __('Contain'),
							),
							'section' 		=> $page_type_key.'_stage_slide_'.$i,
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($page_type_key.'_stage_slide_'.$i.'_image_'.$j.'_layout', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($page_type_key.'_stage_slide_'.$i.'_image_'.$j.'_layout', array(
							'label' 		=> __('Image ','gaudium').($j+1).__(' Layout','gaudium'),
							'type'			=> 'select',
							'choices'		=> array(
								'0'				=> __('Select'),
								'default'		=> __('Default'),
								'landscape'		=> __('Landscape'),
								'portrait'		=> __('Portrait'),
								'vr'		    => __('Vertical Rhythm'),
							),
							'section' 		=> $page_type_key.'_stage_slide_'.$i,
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($page_type_key.'_stage_slide_'.$i.'_image_'.$j.'_xs_width', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($page_type_key.'_stage_slide_'.$i.'_image_'.$j.'_xs_width', array(
							'label' 		=> __('XSmall Screen Image ','gaudium').($j+1).__(' Width','gaudium'),
							'description'	=> __('Enter value in px, % or em, e.g. 500px'),
							'section' 		=> $page_type_key.'_stage_slide_'.$i,
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($page_type_key.'_stage_slide_'.$i.'_image_'.$j.'_width', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($page_type_key.'_stage_slide_'.$i.'_image_'.$j.'_width', array(
							'label' 		=> __('Small Screen Image ','gaudium').($j+1).__(' Width','gaudium'),
							'description'	=> __('Enter value in px, % or em, e.g. 500px'),
							'section' 		=> $page_type_key.'_stage_slide_'.$i,
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($page_type_key.'_stage_slide_'.$i.'_image_'.$j.'_md_width', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($page_type_key.'_stage_slide_'.$i.'_image_'.$j.'_md_width', array(
							'label' 		=> __('Medium Screen Image ','gaudium').($j+1).__(' Width','gaudium'),
							'description'	=> __('Enter value in px, % or em, e.g. 500px'),
							'section' 		=> $page_type_key.'_stage_slide_'.$i,
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($page_type_key.'_stage_slide_'.$i.'_image_'.$j.'_lg_width', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($page_type_key.'_stage_slide_'.$i.'_image_'.$j.'_lg_width', array(
							'label' 		=> __('Large Screen Image ','gaudium').($j+1).__(' Width','gaudium'),
							'description'	=> __('Enter value in px, % or em, e.g. 500px'),
							'section' 		=> $page_type_key.'_stage_slide_'.$i,
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($page_type_key.'_stage_slide_'.$i.'_image_'.$j.'_xs_height', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($page_type_key.'_stage_slide_'.$i.'_image_'.$j.'_xs_height', array(
							'label' 		=> __('XSmall Screen Image ','gaudium').($j+1).__(' Height','gaudium'),
							'description'	=> __('Enter value in px, % or em, e.g. 500px'),
							'section' 		=> $page_type_key.'_stage_slide_'.$i,
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($page_type_key.'_stage_slide_'.$i.'_image_'.$j.'_height', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($page_type_key.'_stage_slide_'.$i.'_image_'.$j.'_height', array(
							'label' 		=> __('Small Image ','gaudium').($j+1).__(' Height','gaudium'),
							'description'	=> __('Enter value in px, % or em, e.g. 500px'),
							'section' 		=> $page_type_key.'_stage_slide_'.$i,
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($page_type_key.'_stage_slide_'.$i.'_image_'.$j.'_md_height', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($page_type_key.'_stage_slide_'.$i.'_image_'.$j.'_md_height', array(
							'label' 		=> __('Medium Screen Image ','gaudium').($j+1).__(' Height','gaudium'),
							'description'	=> __('Enter value in px, % or em, e.g. 500px'),
							'section' 		=> $page_type_key.'_stage_slide_'.$i,
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($page_type_key.'_stage_slide_'.$i.'_image_'.$j.'_lg_height', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($page_type_key.'_stage_slide_'.$i.'_image_'.$j.'_lg_height', array(
							'label' 		=> __('Large Screen Image ','gaudium').($j+1).__(' Height','gaudium'),
							'description'	=> __('Enter value in px, % or em, e.g. 500px'),
							'section' 		=> $page_type_key.'_stage_slide_'.$i,
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($page_type_key.'_stage_slide_'.$i.'_image_'.$j.'_box_xs_width', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($page_type_key.'_stage_slide_'.$i.'_image_'.$j.'_box_xs_width', array(
							'label' 		=> __('XSmall Screen Image ','gaudium').($j+1).__(' Box Width','gaudium'),
							'description'	=> __('Enter value in px, % or em, e.g. 500px'),
							'section' 		=> $page_type_key.'_stage_slide_'.$i,
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($page_type_key.'_stage_slide_'.$i.'_image_'.$j.'_box_width', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($page_type_key.'_stage_slide_'.$i.'_image_'.$j.'_box_width', array(
							'label' 		=> __('Small Screen Image ','gaudium').($j+1).__(' Box Width','gaudium'),
							'description'	=> __('Enter value in px, % or em, e.g. 500px'),
							'section' 		=> $page_type_key.'_stage_slide_'.$i,
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($page_type_key.'_stage_slide_'.$i.'_image_'.$j.'_box_md_width', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($page_type_key.'_stage_slide_'.$i.'_image_'.$j.'_box_md_width', array(
							'label' 		=> __('Medium Screen Image ','gaudium').($j+1).__(' Box Width','gaudium'),
							'description'	=> __('Enter value in px, % or em, e.g. 500px'),
							'section' 		=> $page_type_key.'_stage_slide_'.$i,
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($page_type_key.'_stage_slide_'.$i.'_image_'.$j.'_box_lg_width', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($page_type_key.'_stage_slide_'.$i.'_image_'.$j.'_box_lg_width', array(
							'label' 		=> __('Large Screen Image ','gaudium').($j+1).__(' Box Width','gaudium'),
							'description'	=> __('Enter value in px, % or em, e.g. 500px'),
							'section' 		=> $page_type_key.'_stage_slide_'.$i,
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($page_type_key.'_stage_slide_'.$i.'_image_'.$j.'_box_xs_height', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($page_type_key.'_stage_slide_'.$i.'_image_'.$j.'_box_xs_height', array(
							'label' 		=> __('XSmall Screen Image ','gaudium').($j+1).__(' Box Height','gaudium'),
							'description'	=> __('Enter value in px, % or em, e.g. 500px'),
							'section' 		=> $page_type_key.'_stage_slide_'.$i,
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($page_type_key.'_stage_slide_'.$i.'_image_'.$j.'_box_height', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($page_type_key.'_stage_slide_'.$i.'_image_'.$j.'_box_height', array(
							'label' 		=> __('Small Screen Image ','gaudium').($j+1).__(' Box Height','gaudium'),
							'description'	=> __('Enter value in px, % or em, e.g. 500px'),
							'section' 		=> $page_type_key.'_stage_slide_'.$i,
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($page_type_key.'_stage_slide_'.$i.'_image_'.$j.'_box_md_height', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($page_type_key.'_stage_slide_'.$i.'_image_'.$j.'_box_md_height', array(
							'label' 		=> __('Medium Screen Image ','gaudium').($j+1).__(' Box Height','gaudium'),
							'description'	=> __('Enter value in px, % or em, e.g. 500px'),
							'section' 		=> $page_type_key.'_stage_slide_'.$i,
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($page_type_key.'_stage_slide_'.$i.'_image_'.$j.'_box_lg_height', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($page_type_key.'_stage_slide_'.$i.'_image_'.$j.'_box_lg_height', array(
							'label' 		=> __('Large Screen Image ','gaudium').($j+1).__(' Box Height','gaudium'),
							'description'	=> __('Enter value in px, % or em, e.g. 500px'),
							'section' 		=> $page_type_key.'_stage_slide_'.$i,
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($page_type_key.'_stage_slide_'.$i.'_image_'.$j.'_box_xs_x', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($page_type_key.'_stage_slide_'.$i.'_image_'.$j.'_box_xs_x', array(
							'label' 		=> __('XSmall Screen Image ','gaudium').($j+1).__(' Box Left Position','gaudium'),
							'description'	=> __('Enter value in px, % or em, e.g. 500px'),
							'section' 		=> $page_type_key.'_stage_slide_'.$i,
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($page_type_key.'_stage_slide_'.$i.'_image_'.$j.'_box_x', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($page_type_key.'_stage_slide_'.$i.'_image_'.$j.'_box_x', array(
							'label' 		=> __('Small Screen Image ','gaudium').($j+1).__(' Box Left Position','gaudium'),
							'description'	=> __('Enter value in px, % or em, e.g. 500px'),
							'section' 		=> $page_type_key.'_stage_slide_'.$i,
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($page_type_key.'_stage_slide_'.$i.'_image_'.$j.'_box_md_x', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($page_type_key.'_stage_slide_'.$i.'_image_'.$j.'_box_md_x', array(
							'label' 		=> __('Medium Screen Image ','gaudium').($j+1).__(' Box Left Position','gaudium'),
							'description'	=> __('Enter value in px, % or em, e.g. 500px'),
							'section' 		=> $page_type_key.'_stage_slide_'.$i,
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($page_type_key.'_stage_slide_'.$i.'_image_'.$j.'_box_lg_x', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($page_type_key.'_stage_slide_'.$i.'_image_'.$j.'_box_lg_x', array(
							'label' 		=> __('Large Screen Image ','gaudium').($j+1).__(' Box Left Position','gaudium'),
							'description'	=> __('Enter value in px, % or em, e.g. 500px'),
							'section' 		=> $page_type_key.'_stage_slide_'.$i,
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($page_type_key.'_stage_slide_'.$i.'_image_'.$j.'_box_xs_y', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($page_type_key.'_stage_slide_'.$i.'_image_'.$j.'_box_xs_y', array(
							'label' 		=> __('XSmall Screen Image ','gaudium').($j+1).__(' Box Top Position','gaudium'),
							'description'	=> __('Enter value in px, % or em, e.g. 500px'),
							'section' 		=> $page_type_key.'_stage_slide_'.$i,
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($page_type_key.'_stage_slide_'.$i.'_image_'.$j.'_box_y', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($page_type_key.'_stage_slide_'.$i.'_image_'.$j.'_box_y', array(
							'label' 		=> __('Small Screen Image ','gaudium').($j+1).__(' Box Top Position','gaudium'),
							'description'	=> __('Enter value in px, % or em, e.g. 500px'),
							'section' 		=> $page_type_key.'_stage_slide_'.$i,
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($page_type_key.'_stage_slide_'.$i.'_image_'.$j.'_box_md_y', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($page_type_key.'_stage_slide_'.$i.'_image_'.$j.'_box_md_y', array(
							'label' 		=> __('Medium Screen Image ','gaudium').($j+1).__(' Box Top Position','gaudium'),
							'description'	=> __('Enter value in px, % or em, e.g. 500px'),
							'section' 		=> $page_type_key.'_stage_slide_'.$i,
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($page_type_key.'_stage_slide_'.$i.'_image_'.$j.'_box_lg_y', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($page_type_key.'_stage_slide_'.$i.'_image_'.$j.'_box_lg_y', array(
							'label' 		=> __('Large Screen Image ','gaudium').($j+1).__(' Box Top Position','gaudium'),
							'description'	=> __('Enter value in px, % or em, e.g. 500px'),
							'section' 		=> $page_type_key.'_stage_slide_'.$i,
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($page_type_key.'_stage_slide_'.$i.'_image_'.$j.'_styles_xs', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($page_type_key.'_stage_slide_'.$i.'_image_'.$j.'_styles_xs', array(
							'label' 		=> __('XSmall Screen Image ','gaudium').($j+1).__(' Styles','gaudium'),
							'description'	=> __('Enter styles, e.g. max-width: 50%;'),
							'section' 		=> $page_type_key.'_stage_slide_'.$i,
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($page_type_key.'_stage_slide_'.$i.'_image_'.$j.'_styles', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($page_type_key.'_stage_slide_'.$i.'_image_'.$j.'_styles', array(
							'label' 		=> __('Small Screen Image ','gaudium').($j+1).__(' Styles','gaudium'),
							'description'	=> __('Enter styles, e.g. max-width: 50%;'),
							'section' 		=> $page_type_key.'_stage_slide_'.$i,
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($page_type_key.'_stage_slide_'.$i.'_image_'.$j.'_styles_md', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($page_type_key.'_stage_slide_'.$i.'_image_'.$j.'_styles_md', array(
							'label' 		=> __('Medium Screen Image ','gaudium').($j+1).__(' Styles','gaudium'),
							'description'	=> __('Enter styles, e.g. max-width: 50%;'),
							'section' 		=> $page_type_key.'_stage_slide_'.$i,
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($page_type_key.'_stage_slide_'.$i.'_image_'.$j.'_styles_lg', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($page_type_key.'_stage_slide_'.$i.'_image_'.$j.'_styles_lg', array(
							'label' 		=> __('Large  Screen Image ','gaudium').($j+1).__(' Styles','gaudium'),
							'description'	=> __('Enter styles, e.g. max-width: 50%;'),
							'section' 		=> $page_type_key.'_stage_slide_'.$i,
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($page_type_key.'_stage_slide_'.$i.'_image_'.$j.'_bg_position', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($page_type_key.'_stage_slide_'.$i.'_image_'.$j.'_bg_position', array(
							'label' 		=> __('Image ','gaudium').($j+1).__(' Background Position','gaudium'),
							'type'			=> 'select',
							'choices'		=> array(
								'0'			=> __('Select'),
								'-0'		=> __('Custom'),
								'center'	=> __('Center'),
								'left 0'	=> __('Left'),
								'right 0'	=> __('Right'),
								'bottom'	=> __('Bottom'),
								'top'		=> __('Top'),
							),
							'section' 		=> $page_type_key.'_stage_slide_'.$i,
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($page_type_key.'_stage_slide_'.$i.'_image_'.$j.'_xs_x', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($page_type_key.'_stage_slide_'.$i.'_image_'.$j.'_xs_x', array(
							'label' 		=> __('XSmall Screen Image ','gaudium').($j+1).__(' Left Position','gaudium'),
							'section' 		=> $page_type_key.'_stage_slide_'.$i,
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($page_type_key.'_stage_slide_'.$i.'_image_'.$j.'_x', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($page_type_key.'_stage_slide_'.$i.'_image_'.$j.'_x', array(
							'label' 		=> __('Image ','gaudium').($j+1).__(' Left Position','gaudium'),
							'section' 		=> $page_type_key.'_stage_slide_'.$i,
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($page_type_key.'_stage_slide_'.$i.'_image_'.$j.'_xs_y', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($page_type_key.'_stage_slide_'.$i.'_image_'.$j.'_xs_y', array(
							'label' 		=> __('XSmall Screen Image ','gaudium').($j+1).__(' Top Position','gaudium'),
							'description'	=> __('Enter value in px, % or em, e.g. 100px'),
							'section' 		=> $page_type_key.'_stage_slide_'.$i,
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($page_type_key.'_stage_slide_'.$i.'_image_'.$j.'_y', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($page_type_key.'_stage_slide_'.$i.'_image_'.$j.'_y', array(
							'label' 		=> __('Image ','gaudium').($j+1).__(' Top Position','gaudium'),
							'description'	=> __('Enter value in px, % or em, e.g. 100px'),
							'section' 		=> $page_type_key.'_stage_slide_'.$i,
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($page_type_key.'_stage_slide_'.$i.'_image_'.$j.'_repeat', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($page_type_key.'_stage_slide_'.$i.'_image_'.$j.'_repeat', array(
							'label' 		=> __('Image ','gaudium').($j+1).__(' Repeat','gaudium'),
							'type'			=> 'select',
							'choices' 		=> array(
								'0' 			=> __('Select'),
							    'repeat' 		=> __('Repeat'),
							    'no-repeat' 	=> __('No repeat'),
							),
							'section' 		=> $page_type_key.'_stage_slide_'.$i,
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($page_type_key.'_stage_slide_'.$i.'_image_'.$j.'_speed', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod',
						));

						$wp_customize->add_control($page_type_key.'_stage_slide_'.$i.'_image_'.$j.'_speed', array(
							'label' 		=> __('Image ','gaudium').($j+1).__(' speed','gaudium'),
							'description'	=> __('Speed from 0.0 (static) to 1.0 (fixed).'),
							'section' 		=> $page_type_key.'_stage_slide_'.$i,
							'priority' 		=> $priority++
						));
					}

					$wp_customize->add_setting($page_type_key.'_stage_slide_'.$i.'_content_number', array(
						'default' 		=> _x('0','gaudium'),
						'type' 			=> 'theme_mod'
					));

					$wp_customize->add_control($page_type_key.'_stage_slide_'.$i.'_content_number', array(
						'label' 		=> __('Number of Content Blocks.','gaudium'),
						'description'	=> __('Requires PUBLISH and RELOAD.','gaudium'),
						'section' 		=> $page_type_key.'_stage_slide_'.$i,
						'priority' 		=> $priority++
					));

					for($j = 0; $j < intval(get_theme_mod($page_type_key.'_stage_slide_'.$i.'_content_number')); $j++) {

						$wp_customize->add_setting($page_type_key.'_stage_slide_'.$i.'_content_'.$j.'_cols', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($page_type_key.'_stage_slide_'.$i.'_content_'.$j.'_cols', array(
							'label' 		=> __('Content Columns','gaudium'),
							'description'	=> __('Number of columns for this content block, e.g. 3 for a 4-column layout, 4 for a 3-column layout or 6 a 2-column layout.'),
							'type'			=> 'select',
							'choices'		=> array(
								'0'		=> __('Select'),
								'1'		=> __('1'),
								'2'		=> __('2'),
								'3'		=> __('3'),
								'4'		=> __('4'),
								'5'		=> __('5'),
								'6'		=> __('6'),
								'7'		=> __('7'),
								'8'		=> __('8'),
								'9'		=> __('9'),
								'10'	=> __('10'),
								'11'	=> __('11'),
								'12'	=> __('12'),
							),
							'section' 		=> $page_type_key.'_stage_slide_'.$i,
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($page_type_key.'_stage_slide_'.$i.'_content_'.$j.'_cols_push', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($page_type_key.'_stage_slide_'.$i.'_content_'.$j.'_cols_push', array(
							'label' 		=> __('Push Content','gaudium'),
							'description'	=> __('Number of columns to shift the content block to the right. Select 0 to deactivate.'),
							'type'			=> 'select',
							'choices'		=> array(
								'0'		=> __('Select'),
								'-0'	=> __('Reset'),
								'1'		=> __('1'),
								'2'		=> __('2'),
								'3'		=> __('3'),
								'4'		=> __('4'),
								'5'		=> __('5'),
								'6'		=> __('6'),
								'7'		=> __('7'),
								'8'		=> __('8'),
								'9'		=> __('9'),
								'10'	=> __('10'),
								'11'	=> __('11'),
								'12'	=> __('12'),
							),
							'section' 		=> $page_type_key.'_stage_slide_'.$i,
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($page_type_key.'_stage_slide_'.$i.'_content_'.$j.'_cols_pull', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($page_type_key.'_stage_slide_'.$i.'_content_'.$j.'_cols_pull', array(
							'label' 		=> __('Pull Content','gaudium'),
							'description'	=> __('Number of columns to shift the content block to the left. Select 0 to deactivate.'),
							'type'			=> 'select',
							'choices'		=> array(
								'0'		=> __('Select'),
								'-1'	=> __('Reset'),
								'1'		=> __('1'),
								'2'		=> __('2'),
								'3'		=> __('3'),
								'4'		=> __('4'),
								'5'		=> __('5'),
								'6'		=> __('6'),
								'7'		=> __('7'),
								'8'		=> __('8'),
								'9'		=> __('9'),
								'10'	=> __('10'),
								'11'	=> __('11'),
								'12'	=> __('12'),
							),
							'section' 		=> $page_type_key.'_stage_slide_'.$i,
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($page_type_key.'_stage_slide_'.$i.'_content_'.$j.'_top_xs_space', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($page_type_key.'_stage_slide_'.$i.'_content_'.$j.'_top_xs_space', array(
							'label' 		=> __('XSmall Screen Top','gaudium'),
							'description'	=> __('Add space to top on all extra-small screens, i.e. mobile devices. Select 0 to deactivate.'),
							'type'			=> 'select',
							'choices'	=> array(
								'0'		=> __('Select'),
								'-0'	=> __('Reset'),
								'1'		=> __('1'),
								'2'		=> __('2'),
								'3'		=> __('3'),
								'4'		=> __('4'),
								'5'		=> __('5'),
								'6'		=> __('6'),
								'7'		=> __('7'),
								'8'		=> __('8'),
								'9'		=> __('9'),
								'10'	=> __('10'),
								'11'	=> __('11'),
								'12'	=> __('12'),
								'13'	=> __('13'),
								'14'	=> __('14'),
								'15'	=> __('15'),
								'16'	=> __('16'),
								'17'	=> __('17'),
								'18'	=> __('18'),
								'19'	=> __('19'),
								'20'	=> __('20'),
								'21'	=> __('21'),
								'22'	=> __('22'),
								'23'	=> __('23'),
								'24'	=> __('24'),
								'25'	=> __('25'),
								'26'	=> __('26'),
								'27'	=> __('27'),
								'28'	=> __('28'),
								'29'	=> __('29'),
								'30'	=> __('30'),
								'31'	=> __('31'),
								'32'	=> __('32'),
								'33'	=> __('33'),
								'34'	=> __('34'),
								'35'	=> __('35'),
								'36'	=> __('36'),
								'37'	=> __('37'),
								'38'	=> __('38'),
								'39'	=> __('39'),
								'40'	=> __('40'),
							),
							'section' 		=> $page_type_key.'_stage_slide_'.$i,
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($page_type_key.'_stage_slide_'.$i.'_content_'.$j.'_top_sm_space', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($page_type_key.'_stage_slide_'.$i.'_content_'.$j.'_top_sm_space', array(
							'label' 		=> __('Small Screen Top','gaudium'),
							'description'	=> __('Add space to top on small and larger screens.'),
							'type'			=> 'select',
							'choices'	=> array(
								'0'		=> __('Select'),
								'-0'	=> __('Reset'),
								'1'		=> __('1'),
								'2'		=> __('2'),
								'3'		=> __('3'),
								'4'		=> __('4'),
								'5'		=> __('5'),
								'6'		=> __('6'),
								'7'		=> __('7'),
								'8'		=> __('8'),
								'9'		=> __('9'),
								'10'	=> __('10'),
								'11'	=> __('11'),
								'12'	=> __('12'),
								'13'	=> __('13'),
								'14'	=> __('14'),
								'15'	=> __('15'),
								'16'	=> __('16'),
								'17'	=> __('17'),
								'18'	=> __('18'),
								'19'	=> __('19'),
								'20'	=> __('20'),
								'21'	=> __('21'),
								'22'	=> __('22'),
								'23'	=> __('23'),
								'24'	=> __('24'),
								'25'	=> __('25'),
								'26'	=> __('26'),
								'27'	=> __('27'),
								'28'	=> __('28'),
								'29'	=> __('29'),
								'30'	=> __('30'),
								'31'	=> __('31'),
								'32'	=> __('32'),
								'33'	=> __('33'),
								'34'	=> __('34'),
								'35'	=> __('35'),
								'36'	=> __('36'),
								'37'	=> __('37'),
								'38'	=> __('38'),
								'39'	=> __('39'),
								'40'	=> __('40'),
							),
							'section' 		=> $page_type_key.'_stage_slide_'.$i,
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($page_type_key.'_stage_slide_'.$i.'_content_'.$j.'_top_md_space', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($page_type_key.'_stage_slide_'.$i.'_content_'.$j.'_top_md_space', array(
							'label' 		=> __('Medium Screen Top','gaudium'),
							'description'	=> __('Add space to top on medium and larger screens.'),
							'type'			=> 'select',
							'choices'	=> array(
								'0'		=> __('Select'),
								'-0'	=> __('Reset'),
								'1'		=> __('1'),
								'2'		=> __('2'),
								'3'		=> __('3'),
								'4'		=> __('4'),
								'5'		=> __('5'),
								'6'		=> __('6'),
								'7'		=> __('7'),
								'8'		=> __('8'),
								'9'		=> __('9'),
								'10'	=> __('10'),
								'11'	=> __('11'),
								'12'	=> __('12'),
								'13'	=> __('13'),
								'14'	=> __('14'),
								'15'	=> __('15'),
								'16'	=> __('16'),
								'17'	=> __('17'),
								'18'	=> __('18'),
								'19'	=> __('19'),
								'20'	=> __('20'),
								'21'	=> __('21'),
								'22'	=> __('22'),
								'23'	=> __('23'),
								'24'	=> __('24'),
								'25'	=> __('25'),
								'26'	=> __('26'),
								'27'	=> __('27'),
								'28'	=> __('28'),
								'29'	=> __('29'),
								'30'	=> __('30'),
								'31'	=> __('31'),
								'32'	=> __('32'),
								'33'	=> __('33'),
								'34'	=> __('34'),
								'35'	=> __('35'),
								'36'	=> __('36'),
								'37'	=> __('37'),
								'38'	=> __('38'),
								'39'	=> __('39'),
								'40'	=> __('40'),
							),
							'section' 		=> $page_type_key.'_stage_slide_'.$i,
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($page_type_key.'_stage_slide_'.$i.'_content_'.$j.'_top_lg_space', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($page_type_key.'_stage_slide_'.$i.'_content_'.$j.'_top_lg_space', array(
							'label' 		=> __('Large Screen Top','gaudium'),
							'description'	=> __('Add space to top on large screens.'),
							'type'			=> 'select',
							'choices'	=> array(
								'0'		=> __('Select'),
								'-0'	=> __('Reset'),
								'1'		=> __('1'),
								'2'		=> __('2'),
								'3'		=> __('3'),
								'4'		=> __('4'),
								'5'		=> __('5'),
								'6'		=> __('6'),
								'7'		=> __('7'),
								'8'		=> __('8'),
								'9'		=> __('9'),
								'10'	=> __('10'),
								'11'	=> __('11'),
								'12'	=> __('12'),
								'13'	=> __('13'),
								'14'	=> __('14'),
								'15'	=> __('15'),
								'16'	=> __('16'),
								'17'	=> __('17'),
								'18'	=> __('18'),
								'19'	=> __('19'),
								'20'	=> __('20'),
								'21'	=> __('21'),
								'22'	=> __('22'),
								'23'	=> __('23'),
								'24'	=> __('24'),
								'25'	=> __('25'),
								'26'	=> __('26'),
								'27'	=> __('27'),
								'28'	=> __('28'),
								'29'	=> __('29'),
								'30'	=> __('30'),
								'31'	=> __('31'),
								'32'	=> __('32'),
								'33'	=> __('33'),
								'34'	=> __('34'),
								'35'	=> __('35'),
								'36'	=> __('36'),
								'37'	=> __('37'),
								'38'	=> __('38'),
								'39'	=> __('39'),
								'40'	=> __('40'),
							),
							'section' 		=> $page_type_key.'_stage_slide_'.$i,
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($page_type_key.'_stage_slide_'.$i.'_content_'.$j.'_bottom_xs_space', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($page_type_key.'_stage_slide_'.$i.'_content_'.$j.'_bottom_xs_space', array(
							'label' 		=> __('XSmall Screen Bottom','gaudium'),
							'description'	=> __('Add space to top on extra-small and larger screens, i.e. mobile devices. Select 0 to deactivate.'),
							'type'			=> 'select',
							'choices'	=> array(
								'0'		=> __('Select'),
								'-0'	=> __('Reset'),
								'1'		=> __('1'),
								'2'		=> __('2'),
								'3'		=> __('3'),
								'4'		=> __('4'),
								'5'		=> __('5'),
								'6'		=> __('6'),
								'7'		=> __('7'),
								'8'		=> __('8'),
								'9'		=> __('9'),
								'10'	=> __('10'),
								'11'	=> __('11'),
								'12'	=> __('12'),
								'13'	=> __('13'),
								'14'	=> __('14'),
								'15'	=> __('15'),
								'16'	=> __('16'),
								'17'	=> __('17'),
								'18'	=> __('18'),
								'19'	=> __('19'),
								'20'	=> __('20'),
								'21'	=> __('21'),
								'22'	=> __('22'),
								'23'	=> __('23'),
								'24'	=> __('24'),
								'25'	=> __('25'),
								'26'	=> __('26'),
								'27'	=> __('27'),
								'28'	=> __('28'),
								'29'	=> __('29'),
								'30'	=> __('30'),
								'31'	=> __('31'),
								'32'	=> __('32'),
								'33'	=> __('33'),
								'34'	=> __('34'),
								'35'	=> __('35'),
								'36'	=> __('36'),
								'37'	=> __('37'),
								'38'	=> __('38'),
								'39'	=> __('39'),
								'40'	=> __('40'),
							),
							'section' 		=> $page_type_key.'_stage_slide_'.$i,
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($page_type_key.'_stage_slide_'.$i.'_content_'.$j.'_bottom_sm_space', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($page_type_key.'_stage_slide_'.$i.'_content_'.$j.'_bottom_sm_space', array(
							'label' 		=> __('Small Screen Bottom','gaudium'),
							'description'	=> __('Add space to bottom on small and larger screens.'),
							'type'			=> 'select',
							'choices'	=> array(
								'0'		=> __('Select'),
								'-0'	=> __('Reset'),
								'1'		=> __('1'),
								'2'		=> __('2'),
								'3'		=> __('3'),
								'4'		=> __('4'),
								'5'		=> __('5'),
								'6'		=> __('6'),
								'7'		=> __('7'),
								'8'		=> __('8'),
								'9'		=> __('9'),
								'10'	=> __('10'),
								'11'	=> __('11'),
								'12'	=> __('12'),
								'13'	=> __('13'),
								'14'	=> __('14'),
								'15'	=> __('15'),
								'16'	=> __('16'),
								'17'	=> __('17'),
								'18'	=> __('18'),
								'19'	=> __('19'),
								'20'	=> __('20'),
								'21'	=> __('21'),
								'22'	=> __('22'),
								'23'	=> __('23'),
								'24'	=> __('24'),
								'25'	=> __('25'),
								'26'	=> __('26'),
								'27'	=> __('27'),
								'28'	=> __('28'),
								'29'	=> __('29'),
								'30'	=> __('30'),
								'31'	=> __('31'),
								'32'	=> __('32'),
								'33'	=> __('33'),
								'34'	=> __('34'),
								'35'	=> __('35'),
								'36'	=> __('36'),
								'37'	=> __('37'),
								'38'	=> __('38'),
								'39'	=> __('39'),
								'40'	=> __('40'),
							),
							'section' 		=> $page_type_key.'_stage_slide_'.$i,
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($page_type_key.'_stage_slide_'.$i.'_content_'.$j.'_bottom_md_space', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($page_type_key.'_stage_slide_'.$i.'_content_'.$j.'_bottom_md_space', array(
							'label' 		=> __('Medium Screen Bottom','gaudium'),
							'description'	=> __('Add space to bottom on medium and larger screens.'),
							'type'			=> 'select',
							'choices'	=> array(
								'0'		=> __('Select'),
								'-0'	=> __('Reset'),
								'1'		=> __('1'),
								'2'		=> __('2'),
								'3'		=> __('3'),
								'4'		=> __('4'),
								'5'		=> __('5'),
								'6'		=> __('6'),
								'7'		=> __('7'),
								'8'		=> __('8'),
								'9'		=> __('9'),
								'10'	=> __('10'),
								'11'	=> __('11'),
								'12'	=> __('12'),
								'13'	=> __('13'),
								'14'	=> __('14'),
								'15'	=> __('15'),
								'16'	=> __('16'),
								'17'	=> __('17'),
								'18'	=> __('18'),
								'19'	=> __('19'),
								'20'	=> __('20'),
								'21'	=> __('21'),
								'22'	=> __('22'),
								'23'	=> __('23'),
								'24'	=> __('24'),
								'25'	=> __('25'),
								'26'	=> __('26'),
								'27'	=> __('27'),
								'28'	=> __('28'),
								'29'	=> __('29'),
								'30'	=> __('30'),
								'31'	=> __('31'),
								'32'	=> __('32'),
								'33'	=> __('33'),
								'34'	=> __('34'),
								'35'	=> __('35'),
								'36'	=> __('36'),
								'37'	=> __('37'),
								'38'	=> __('38'),
								'39'	=> __('39'),
								'40'	=> __('40'),
							),
							'section' 		=> $page_type_key.'_stage_slide_'.$i,
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($page_type_key.'_stage_slide_'.$i.'_content_'.$j.'_bottom_lg_space', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($page_type_key.'_stage_slide_'.$i.'_content_'.$j.'_bottom_lg_space', array(
							'label' 		=> __('Large Screen Bottom','gaudium'),
							'description'	=> __('Add space to bottom on large screens.'),
							'type'			=> 'select',
							'choices'	=> array(
								'0'		=> __('Select'),
								'-0'	=> __('Reset'),
								'1'		=> __('1'),
								'2'		=> __('2'),
								'3'		=> __('3'),
								'4'		=> __('4'),
								'5'		=> __('5'),
								'6'		=> __('6'),
								'7'		=> __('7'),
								'8'		=> __('8'),
								'9'		=> __('9'),
								'10'	=> __('10'),
								'11'	=> __('11'),
								'12'	=> __('12'),
								'13'	=> __('13'),
								'14'	=> __('14'),
								'15'	=> __('15'),
								'16'	=> __('16'),
								'17'	=> __('17'),
								'18'	=> __('18'),
								'19'	=> __('19'),
								'20'	=> __('20'),
								'21'	=> __('21'),
								'22'	=> __('22'),
								'23'	=> __('23'),
								'24'	=> __('24'),
								'25'	=> __('25'),
								'26'	=> __('26'),
								'27'	=> __('27'),
								'28'	=> __('28'),
								'29'	=> __('29'),
								'30'	=> __('30'),
								'31'	=> __('31'),
								'32'	=> __('32'),
								'33'	=> __('33'),
								'34'	=> __('34'),
								'35'	=> __('35'),
								'36'	=> __('36'),
								'37'	=> __('37'),
								'38'	=> __('38'),
								'39'	=> __('39'),
								'40'	=> __('40'),
							),
							'section' 		=> $page_type_key.'_stage_slide_'.$i,
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($page_type_key.'_stage_slide_'.$i.'_content_'.$j, array(
							'default' 		=> _x('','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($page_type_key.'_stage_slide_'.$i.'_content_'.$j, array(
							'label' 		=> __('Content','gaudium'),
							'label' 		=> __('Supports text or code.','gaudium'),
							'type'			=> 'textarea',
							'section' 		=> $page_type_key.'_stage_slide_'.$i,
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($page_type_key.'_stage_slide_'.$i.'_content_'.$j.'_speed', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));
						
						$wp_customize->add_control($page_type_key.'_stage_slide_'.$i.'_content_'.$j.'_speed', array(
							'label' 		=> __('Content Speed','gaudium'),
							'description'	=> __('Speed from 0.0 (static) to 1.0 (fixed).','gaudium'),
							'section' 		=> $page_type_key.'_stage_slide_'.$i,
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($page_type_key.'_stage_slide_'.$i.'_content_'.$j.'_number_images', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));
						
						$wp_customize->add_control($page_type_key.'_stage_slide_'.$i.'_content_'.$j.'_number_images', array(
							'label' 		=> __('Number of Images','gaudium'),
							'description'	=> __('Requires PUBLISH and RELOAD.','gaudium'),
							'section' 		=> $page_type_key.'_stage_slide_'.$i,
							'priority' 		=> $priority++
						));
						
						for($k = 0; $k < intval(get_theme_mod($page_type_key.'_stage_slide_'.$i.'_content_'.$j.'_number_images')); $k++) {

							$wp_customize->add_setting($page_type_key.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_xs_url', array(
								'default' 		=> '',
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, $page_type_key.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_xs_url', array(
								'label' 		=> __('XSmall Screen (Only) Image ','gaudium').($k+1),
								'section' 		=> $page_type_key.'_stage_slide_'.$i,
								'settings'		=> $page_type_key.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_xs_url',
								'priority' 		=> $priority++
							)));

							$wp_customize->add_setting($page_type_key.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_url', array(
								'default' 		=> '',
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, $page_type_key.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_url', array(
								'label' 		=> __('XSmall Screen Image ','gaudium').($k+1),
								'section' 		=> $page_type_key.'_stage_slide_'.$i,
								'settings'		=> $page_type_key.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_url',
								'priority' 		=> $priority++
							)));

							$wp_customize->add_setting($page_type_key.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_sm_url', array(
								'default' 		=> '',
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, $page_type_key.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_sm_url', array(
								'label' 		=> __('Small Screen Image ','gaudium').($k+1),
								'section' 		=> $page_type_key.'_stage_slide_'.$i,
								'settings'		=> $page_type_key.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_sm_url',
								'priority' 		=> $priority++
							)));

							$wp_customize->add_setting($page_type_key.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_md_url', array(
								'default' 		=> '',
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, $page_type_key.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_md_url', array(
								'label' 		=> __('Medium Screen Image ','gaudium').($k+1),
								'section' 		=> $page_type_key.'_stage_slide_'.$i,
								'settings'		=> $page_type_key.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_md_url',
								'priority' 		=> $priority++
							)));

							$wp_customize->add_setting($page_type_key.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_lg_url', array(
								'default' 		=> '',
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, $page_type_key.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_lg_url', array(
								'label' 		=> __('Large Screen Image ','gaudium').($k+1),
								'section' 		=> $page_type_key.'_stage_slide_'.$i,
								'settings'		=> $page_type_key.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_lg_url',
								'priority' 		=> $priority++
							)));

							$wp_customize->add_setting($page_type_key.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_bg', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'

							));

							$wp_customize->add_control($page_type_key.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_bg', array(
								'label' 		=> __('Image ','gaudium').($k+1).__(' Background Color','gaudium'),
								'description'	=> __('Background color, e.g. #e4e4e4'),
								'section' 		=> $page_type_key.'_stage_slide_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($page_type_key.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_bg_size', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($page_type_key.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_bg_size', array(
								'label' 		=> __('Image ','gaudium').($j+1).__(' Background Size','gaudium'),
								'type'			=> 'select',
								'choices'		=> array(
									'0'			=> __('Select'),
									'-0'		=> __('Custom'),
									'auto'		=> __('Auto'),
									'cover'		=> __('Cover'),
									'contain'	=> __('Contain'),
								),
								'section' 		=> $page_type_key.'_stage_slide_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($page_type_key.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_layout', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($page_type_key.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_layout', array(
								'label' 		=> __('Image ','gaudium').($k+1).__(' Layout','gaudium'),
								'type'			=> 'select',
								'choices'		=> array(
									'0'				=> __('Select'),
									'default'		=> __('Default'),
									'landscape'		=> __('Landscape'),
									'portrait'		=> __('Portrait'),
									'vr'		    => __('Vertical Rhythm'),
								),
								'section' 		=> $page_type_key.'_stage_slide_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($page_type_key.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_xs_width', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($page_type_key.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_xs_width', array(
								'label' 		=> __('XSmall Screen Image ','gaudium').($k+1).__(' Width','gaudium'),
								'description'	=> __('Enter value in px, % or em, e.g. 500px'),
								'section' 		=> $page_type_key.'_stage_slide_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($page_type_key.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_width', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($page_type_key.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_width', array(
								'label' 		=> __('Image ','gaudium').($k+1).__(' Width','gaudium'),
								'description'	=> __('Enter value in px, % or em, e.g. 500px'),
								'section' 		=> $page_type_key.'_stage_slide_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($page_type_key.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_md_width', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($page_type_key.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_md_width', array(
								'label' 		=> __('Medium Screen Image ','gaudium').($k+1).__(' Width','gaudium'),
								'description'	=> __('Enter value in px, % or em, e.g. 500px'),
								'section' 		=> $page_type_key.'_stage_slide_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($page_type_key.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_lg_width', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($page_type_key.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_lg_width', array(
								'label' 		=> __('Large Screen Image ','gaudium').($k+1).__(' Width','gaudium'),
								'description'	=> __('Enter value in px, % or em, e.g. 500px'),
								'section' 		=> $page_type_key.'_stage_slide_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($page_type_key.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_xs_height', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($page_type_key.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_xs_height', array(
								'label' 		=> __('XSmall Screen Image ','gaudium').($k+1).__(' Height','gaudium'),
								'description'	=> __('Enter value in px, % or em, e.g. 500px'),
								'section' 		=> $page_type_key.'_stage_slide_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($page_type_key.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_height', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($page_type_key.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_height', array(
								'label' 		=> __('Small Image ','gaudium').($k+1).__(' Height','gaudium'),
								'description'	=> __('Enter value in px, % or em, e.g. 500px'),
								'section' 		=> $page_type_key.'_stage_slide_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($page_type_key.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_md_height', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($page_type_key.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_md_height', array(
								'label' 		=> __('Medium Screen Image ','gaudium').($k+1).__(' Height','gaudium'),
								'description'	=> __('Enter value in px, % or em, e.g. 500px'),
								'section' 		=> $page_type_key.'_stage_slide_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($page_type_key.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_lg_height', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($page_type_key.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_lg_height', array(
								'label' 		=> __('Large Screen Image ','gaudium').($k+1).__(' Height','gaudium'),
								'description'	=> __('Enter value in px, % or em, e.g. 500px'),
								'section' 		=> $page_type_key.'_stage_slide_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($page_type_key.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_box_xs_width', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($page_type_key.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_box_xs_width', array(
								'label' 		=> __('XSmall Screen Image ','gaudium').($k+1).__(' Box Width','gaudium'),
								'description'	=> __('Enter value in px, % or em, e.g. 500px'),
								'section' 		=> $page_type_key.'_stage_slide_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($page_type_key.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_box_width', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($page_type_key.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_box_width', array(
								'label' 		=> __('Small Screen Image ','gaudium').($k+1).__(' Box Width','gaudium'),
								'description'	=> __('Enter value in px, % or em, e.g. 500px'),
								'section' 		=> $page_type_key.'_stage_slide_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($page_type_key.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_box_md_width', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($page_type_key.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_box_md_width', array(
								'label' 		=> __('Medium Screen Image ','gaudium').($k+1).__(' Box Width','gaudium'),
								'description'	=> __('Enter value in px, % or em, e.g. 500px'),
								'section' 		=> $page_type_key.'_stage_slide_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($page_type_key.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_box_lg_width', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($page_type_key.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_box_lg_width', array(
								'label' 		=> __('Large Screen Image ','gaudium').($k+1).__(' Box Width','gaudium'),
								'description'	=> __('Enter value in px, % or em, e.g. 500px'),
								'section' 		=> $page_type_key.'_stage_slide_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($page_type_key.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_box_xs_height', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($page_type_key.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_box_xs_height', array(
								'label' 		=> __('XSmall Screen Image ','gaudium').($k+1).__(' Box Height','gaudium'),
								'description'	=> __('Enter value in px, % or em, e.g. 500px'),
								'section' 		=> $page_type_key.'_stage_slide_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($page_type_key.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_box_height', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($page_type_key.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_box_height', array(
								'label' 		=> __('Small Screen Image ','gaudium').($k+1).__(' Box Height','gaudium'),
								'description'	=> __('Enter value in px, % or em, e.g. 500px'),
								'section' 		=> $page_type_key.'_stage_slide_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($page_type_key.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_box_md_height', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($page_type_key.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_box_md_height', array(
								'label' 		=> __('Medium Screen Image ','gaudium').($k+1).__(' Box Height','gaudium'),
								'description'	=> __('Enter value in px, % or em, e.g. 500px'),
								'section' 		=> $page_type_key.'_stage_slide_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($page_type_key.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_box_lg_height', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($page_type_key.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_box_lg_height', array(
								'label' 		=> __('Large Screen Image ','gaudium').($k+1).__(' Box Height','gaudium'),
								'description'	=> __('Enter value in px, % or em, e.g. 500px'),
								'section' 		=> $page_type_key.'_stage_slide_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($page_type_key.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_box_xs_x', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($page_type_key.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_box_xs_x', array(
								'label' 		=> __('XSmall Screen Image ','gaudium').($k+1).__(' Box Left Position','gaudium'),
								'description'	=> __('Enter value in px, % or em, e.g. 500px'),
								'section' 		=> $page_type_key.'_stage_slide_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($page_type_key.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_box_x', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($page_type_key.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_box_x', array(
								'label' 		=> __('Small Screen Image ','gaudium').($k+1).__(' Box Left Position','gaudium'),
								'description'	=> __('Enter value in px, % or em, e.g. 500px'),
								'section' 		=> $page_type_key.'_stage_slide_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($page_type_key.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_box_md_x', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($page_type_key.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_box_md_x', array(
								'label' 		=> __('Medium Screen Image ','gaudium').($k+1).__(' Box Left Position','gaudium'),
								'description'	=> __('Enter value in px, % or em, e.g. 500px'),
								'section' 		=> $page_type_key.'_stage_slide_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($page_type_key.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_box_lg_x', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($page_type_key.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_box_lg_x', array(
								'label' 		=> __('Large Screen Image ','gaudium').($k+1).__(' Box Left Position','gaudium'),
								'description'	=> __('Enter value in px, % or em, e.g. 500px'),
								'section' 		=> $page_type_key.'_stage_slide_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($page_type_key.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_box_xs_y', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($page_type_key.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_box_xs_y', array(
								'label' 		=> __('XSmall Screen Image ','gaudium').($k+1).__(' Box Top Position','gaudium'),
								'description'	=> __('Enter value in px, % or em, e.g. 500px'),
								'section' 		=> $page_type_key.'_stage_slide_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($page_type_key.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_box_y', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($page_type_key.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_box_y', array(
								'label' 		=> __('Small Screen Image ','gaudium').($k+1).__(' Box Top Position','gaudium'),
								'description'	=> __('Enter value in px, % or em, e.g. 500px'),
								'section' 		=> $page_type_key.'_stage_slide_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($page_type_key.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_box_md_y', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($page_type_key.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_box_md_y', array(
								'label' 		=> __('Medium Screen Image ','gaudium').($k+1).__(' Box Top Position','gaudium'),
								'description'	=> __('Enter value in px, % or em, e.g. 500px'),
								'section' 		=> $page_type_key.'_stage_slide_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($page_type_key.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_box_lg_y', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($page_type_key.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_box_lg_y', array(
								'label' 		=> __('Large Screen Image ','gaudium').($k+1).__(' Box Top Position','gaudium'),
								'description'	=> __('Enter value in px, % or em, e.g. 500px'),
								'section' 		=> $page_type_key.'_stage_slide_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($page_type_key.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_styles_xs', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($page_type_key.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_styles_xs', array(
								'label' 		=> __('XSmall Screen Image ','gaudium').($k+1).__(' Styles','gaudium'),
								'description'	=> __('Enter styles, e.g. max-width: 50%;'),
								'section' 		=> $page_type_key.'_stage_slide_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($page_type_key.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_styles', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($page_type_key.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_styles', array(
								'label' 		=> __('Small Screen Image ','gaudium').($k+1).__(' Styles','gaudium'),
								'description'	=> __('Enter styles, e.g. max-width: 50%;'),
								'section' 		=> $page_type_key.'_stage_slide_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($page_type_key.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_styles_md', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($page_type_key.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_styles_md', array(
								'label' 		=> __('Medium Screen Image ','gaudium').($k+1).__(' Styles','gaudium'),
								'description'	=> __('Enter styles, e.g. max-width: 50%;'),
								'section' 		=> $page_type_key.'_stage_slide_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($page_type_key.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_styles_lg', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($page_type_key.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_styles_lg', array(
								'label' 		=> __('Large Screen Image ','gaudium').($k+1).__(' Styles','gaudium'),
								'description'	=> __('Enter styles, e.g. max-width: 50%;'),
								'section' 		=> $page_type_key.'_stage_slide_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($page_type_key.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_bg_position', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($page_type_key.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_bg_position', array(
								'label' 		=> __('Image ','gaudium').($k+1).__(' Background Position','gaudium'),
								'type'			=> 'select',
								'choices'		=> array(
									'0'			=> __('Select'),
									'-0'		=> __('Custom'),
									'center'	=> __('Center'),
									'left 0'	=> __('Left'),
									'right 0'	=> __('Right'),
									'bottom'	=> __('Bottom'),
									'top'		=> __('Top'),
								),
								'section' 		=> $page_type_key.'_stage_slide_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($page_type_key.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_xs_x', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($page_type_key.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_xs_x', array(
								'label' 		=> __('XSmall Screen Image ','gaudium').($k+1).__(' Left Position','gaudium'),
								'section' 		=> $page_type_key.'_stage_slide_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($page_type_key.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_x', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($page_type_key.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_x', array(
								'label' 		=> __('Image ','gaudium').($k+1).__(' Left Position','gaudium'),
								'section' 		=> $page_type_key.'_stage_slide_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($page_type_key.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_xs_y', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($page_type_key.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_xs_y', array(
								'label' 		=> __('XSmall Screen Image ','gaudium').($k+1).__(' Top Position','gaudium'),
								'description'	=> __('Enter value in px, % or em, e.g. 100px'),
								'section' 		=> $page_type_key.'_stage_slide_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($page_type_key.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_y', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($page_type_key.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_y', array(
								'label' 		=> __('Image ','gaudium').($k+1).__(' Top Position','gaudium'),
								'description'	=> __('Enter value in px, % or em, e.g. 100px'),
								'section' 		=> $page_type_key.'_stage_slide_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($page_type_key.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_repeat', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($page_type_key.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_repeat', array(
								'label' 		=> __('Image ','gaudium').($k+1).__(' Repeat','gaudium'),
								'type'			=> 'select',
								'choices' 		=> array(
									'0' 			=> __('Select'),
								    'repeat' 		=> __('Repeat'),
								    'no-repeat' 	=> __('No repeat'),
								),
								'section' 		=> $page_type_key.'_stage_slide_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($page_type_key.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_speed', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod',
							));

							$wp_customize->add_control($page_type_key.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_speed', array(
								'label' 		=> __('Image ','gaudium').($k+1).__(' speed','gaudium'),
								'description'	=> __('Speed from 0.0 (static) to 1.0 (fixed).'),
								'section' 		=> $page_type_key.'_stage_slide_'.$i,
								'priority' 		=> $priority++
							));
						}
					}
				}

				$wp_customize->add_panel($page_type_key.'_blocks_panel', array(
			      	'title' 		=> __($page_type_name.': Blocks','gaudium'),
			      	'description' 	=> esc_html__( 'Set page type default settings (overwritten by page-specific block settings).' ),
			      	'priority' 		=> $base_priority+=10
				));

				$section_priority = 1;
	
				$wp_customize->add_section($page_type_key.'_blocks_settings', array(
					'title' 		=> __('Blocks','gaudium'),
					'panel'			=> $page_type_key.'_blocks_panel',
					'description' 	=> sprintf(__('Options for blocks','gaudium')),
					'priority' 		=> $section_priority++
				));

				$priority = 1;

				$wp_customize->add_setting($page_type_key.'_blocks_number', array(
					'default' 		=> _x('0','gaudium'),
					'type' 			=> 'theme_mod'
				));

				$wp_customize->add_control($page_type_key.'_blocks_number', array(
					'label' 		=> __('Number of Blocks','gaudium'),
					'description'	=> __('Requires PUBLISH and RELOAD.','gaudium'),
					'section' 		=> $page_type_key.'_blocks_settings',
					'priority' 		=> $priority++
				));

				for($i = 0; $i < intval(get_theme_mod($page_type_key.'_blocks_number')); $i++) {

					$wp_customize->add_section($page_type_key.'_block_'.$i, array(
						'title' 		=> __('Block ','gaudium').($i+1).__('  Settings','gaudium'),
						'panel'			=> $page_type_key.'_blocks_panel',
						'description' 	=> sprintf(__('Options for blocks','gaudium')),
						'priority' 		=> $section_priority++
					));

					$priority = 1;

					$wp_customize->add_setting($page_type_key.'_block_'.$i.'_position', array(
						'default' 		=> _x('0','gaudium'),
						'type' 			=> 'theme_mod'
					));

					$wp_customize->add_control($page_type_key.'_block_'.$i.'_position', array(
						'label' 		=> __('Block Position','gaudium'),
						'type'			=> 'select',
						'choices'		=> array(
							'0'						=> __('Select'),
							'header'				=> __('Header'),
							'top'					=> __('Top'),
							'middle-top'			=> __('Middle Top'),
							'middle-bottom'			=> __('Middle Bottom'),
							'bottom'				=> __('Bottom'),
						),
						'section' 		=> $page_type_key.'_block_'.$i,
						'priority' 		=> $priority++
					));

					$wp_customize->add_setting($page_type_key.'_block_'.$i.'_height', array(
						'default' 		=> _x('0','gaudium'),
						'type' 			=> 'theme_mod'
					));

					$wp_customize->add_control($page_type_key.'_block_'.$i.'_height', array(
						'label' 		=> __('Block Height','gaudium'),
						'section' 		=> $page_type_key.'_block_'.$i,
						'priority' 		=> $priority++
					));

					$wp_customize->add_setting($page_type_key.'_block_'.$i.'_title', array(
						'default' 		=> _x('','gaudium'),
						'type' 			=> 'theme_mod'
					));

					$wp_customize->add_control($page_type_key.'_block_'.$i.'_title', array(
						'label' 		=> __('Block Title','gaudium'),
						'section' 		=> $page_type_key.'_block_'.$i,
						'priority' 		=> $priority++
					));

					$wp_customize->add_setting($page_type_key.'_block_'.$i.'_title_position', array(
						'default' 		=> _x('0','gaudium'),
						'type' 			=> 'theme_mod'
					));

					$wp_customize->add_control($page_type_key.'_block_'.$i.'_title_position', array(
						'label' 		=> __('Block Title','gaudium'),
						'type'			=> 'select',
						'choices'		=> array(
							'0'			=> __('Select'),
							'left'		=> __('Left'),
							'center'	=> __('Center'),
							'right'		=> __('Right'),
						),
						'section' 		=> $page_type_key.'_block_'.$i,
						'priority' 		=> $priority++
					));

					$wp_customize->add_setting($page_type_key.'_block_'.$i.'_title_bottom_space', array(
						'default' 		=> _x('0','gaudium'),
						'type' 			=> 'theme_mod'
					));

					$wp_customize->add_control($page_type_key.'_block_'.$i.'_title_bottom_space', array(
						'label' 		=> __('Block Title Bottom','gaudium'),
						'description'	=> __('Add/remove bottom space.'),
							'type'			=> 'select',
							'choices'	=> array(
								'0'		=> __('Select'),
								'-0'	=> __('Reset'),
								'-'		=> __('0'),
								'1'		=> __('1'),
								'2'		=> __('2'),
								'3'		=> __('3'),
								'4'		=> __('4'),
								'5'		=> __('5'),
								'6'		=> __('6'),
								'7'		=> __('7'),
								'8'		=> __('8'),
								'9'		=> __('9'),
								'10'	=> __('10'),
								'11'	=> __('11'),
								'12'	=> __('12'),
								'13'	=> __('13'),
								'14'	=> __('14'),
								'15'	=> __('15'),
								'16'	=> __('16'),
								'17'	=> __('17'),
								'18'	=> __('18'),
								'19'	=> __('19'),
								'20'	=> __('20'),
								'21'	=> __('21'),
								'22'	=> __('22'),
								'23'	=> __('23'),
								'24'	=> __('24'),
								'25'	=> __('25'),
								'26'	=> __('26'),
								'27'	=> __('27'),
								'28'	=> __('28'),
								'29'	=> __('29'),
								'30'	=> __('30'),
								'31'	=> __('31'),
								'32'	=> __('32'),
								'33'	=> __('33'),
								'34'	=> __('34'),
								'35'	=> __('35'),
								'36'	=> __('36'),
								'37'	=> __('37'),
								'38'	=> __('38'),
								'39'	=> __('39'),
								'40'	=> __('40'),
							),
						'section' 		=> $page_type_key.'_block_'.$i,
						'priority' 		=> $priority++
					));

					$wp_customize->add_setting($page_type_key.'_block_'.$i.'_container', array(
						'default' 		=> _x('0','gaudium'),
						'type' 			=> 'theme_mod'
					));

					$wp_customize->add_control($page_type_key.'_block_'.$i.'_container', array(
						'label' 		=> __('Container','gaudium'),
						'type'			=> 'select',
						'choices'		=> array(
							'0'			=> __('Select'),
							'boxed'		=> __('Boxed'),
							'fluid'		=> __('Fluid'),
						),
						'section' 		=> $page_type_key.'_block_'.$i,
						'priority' 		=> $priority++
					));

					$wp_customize->add_setting($page_type_key.'_block_'.$i.'_divider', array(
						'default' 		=> _x('0','gaudium'),
						'type' 			=> 'theme_mod'
					));

					$wp_customize->add_control($page_type_key.'_block_'.$i.'_divider', array(
						'label' 		=> __('Divider','gaudium'),
						'type'			=> 'select',
						'choices'		=> array(
							'0'						=> __('Select'),
							'-0'					=> __('No divider'),
							'divider'				=> __('Divider'),
							'divider-no-padding'	=> __('Divider (No Padding)'),
						),
						'section' 		=> $page_type_key.'_block_'.$i,
						'priority' 		=> $priority++
					));

					$wp_customize->add_setting($page_type_key.'_block_'.$i.'_bg', array(
						'default' 		=> _x('0','gaudium'),
						'type' 			=> 'theme_mod'
					));

					$wp_customize->add_control($page_type_key.'_block_'.$i.'_bg', array(
						'label' 		=> __('Background Color','gaudium'),
						'type'			=> 'select',
						'choices'		=> array(
							'0'		=> __('Select'),
							'1'		=> __('White'),
							'2'		=> __('Light'),
							'3'		=> __('Dark'),
						),
						'section' 		=> $page_type_key.'_block_'.$i,
						'priority' 		=> $priority++
					));

					$wp_customize->add_setting($page_type_key.'_block_'.$i.'_gutters', array(
						'default' 		=> _x('0','gaudium'),
						'type' 			=> 'theme_mod'
					));

					$wp_customize->add_control($page_type_key.'_block_'.$i.'_gutters', array(
						'label' 		=> __('Gutters','gaudium'),
						'type'			=> 'select',
						'choices' 		=> array(
							'0' 	=> __('Select'),
							'-0' 	=> __('Gutters'),
						    '1'    	=> __('No gutters'),
						),
						'section' 		=> $page_type_key.'_block_'.$i,
						'priority' 		=> $priority++
					));

					$wp_customize->add_setting($page_type_key.'_block_'.$i.'_type', array(
						'default' 		=> _x('0','gaudium'),
						'type' 			=> 'theme_mod'
					));
					
					$wp_customize->add_control($page_type_key.'_block_'.$i.'_type', array(
						'label' 		=> __('Block Type','gaudium'),
						'description'	=> __('Requires PUBLISH and RELOAD.','gaudium'),
						'type'			=> 'select',
						'choices'		=> array(
							'0'					=> __('Select'),
							'custom'			=> __('Custom'),
							'blog'				=> __('Recent Posts'),
							'portfolio'			=> __('Recent Projects'),
						),
						'section' 		=> $page_type_key.'_block_'.$i,
						'priority' 		=> $priority++
					));

					if(get_theme_mod($page_type_key.'_block_'.$i.'_type') == 'portfolio') {
						$wp_customize->add_setting($page_type_key.'_block_'.$i.'_portfolio_show_tags', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($page_type_key.'_block_'.$i.'_portfolio_show_tags', array(
							'label' 		=> __('Show Project Tags','gaudium'),
							'type'			=> 'select',
							'choices'		=> array(
								'0'			=> __('Select'),
								'-0'		=> __('Hide'),
								'1'			=> __('Show'),
							),
							'section' 		=> $page_type_key.'_block_'.$i,
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($page_type_key.'_block_'.$i.'_portfolio_tags_position', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($page_type_key.'_block_'.$i.'_portfolio_tags_position', array(
							'label' 		=> __('Project Tags Position','gaudium'),
							'type'			=> 'select',
							'choices'		=> array(
								'0'				=> __('Select'),
								'left'			=> __('Left'),
								'center'		=> __('Center'),
								'right'			=> __('Right'),
							),
							'section' 		=> $page_type_key.'_block_'.$i,
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($page_type_key.'_block_'.$i.'_portfolio_gutters', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($page_type_key.'_block_'.$i.'_portfolio_gutters', array(
							'label' 		=> __('Gutters','gaudium'),
							'type'			=> 'select',
							'choices'		=> array(
								'0'		=> __('Select'),
								'-0' 	=> __('Gutters'),
							    '1'    	=> __('No gutters'),
							),
							'section' 		=> $page_type_key.'_block_'.$i,
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($page_type_key.'_block_'.$i.'_portfolio_container', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($page_type_key.'_block_'.$i.'_portfolio_container', array(
							'label' 		=> __('Container','gaudium'),
							'type'			=> 'select',
							'choices'		=> array(
								'0'				=> __('Select'),
								'boxed'			=> __('Boxed'),
								'fluid'			=> __('Fluid'),
							),
							'section' 		=> $page_type_key.'_block_'.$i,
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($page_type_key.'_block_'.$i.'_portfolio_layout', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($page_type_key.'_block_'.$i.'_portfolio_layout', array(
							'label' 		=> __('Thumbnail Layout','gaudium'),
							'type'			=> 'select',
							'choices'		=> array(
								'0'				=> __('Select'),
								'default'		=> __('Default'),
								'landscape'		=> __('Landscape'),
								'portrait'		=> __('Portrait'),
								'masonry'		=> __('Masonry'),
								'mosaic'		=> __('Mosaic'),
							),
							'section' 		=> $page_type_key.'_block_'.$i,
							'priority' 		=> $priority++
						));
					}
					if(get_theme_mod($page_type_key.'_block_'.$i.'_type') == 'portfolio' ||
				       get_theme_mod($page_type_key.'_block_'.$i.'_type') == 'blog') {
						$wp_customize->add_setting($page_type_key.'_block_'.$i.'_number_posts', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));
						
						$wp_customize->add_control($page_type_key.'_block_'.$i.'_number_posts', array(
							'label' 		=> __('Number of Posts','gaudium'),
							'description'	=> __('Requires PUBLISH and RELOAD.','gaudium'),
							'section' 		=> $page_type_key.'_block_'.$i,
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($page_type_key.'_block_'.$i.'_load_more', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));
						
						$wp_customize->add_control($page_type_key.'_block_'.$i.'_load_more', array(
							'label' 		=> __('Load More Button','gaudium'),
							'type'			=> 'select',
							'choices'		=> array(
								'0'			=> __('Select'),
								'-0'		=> __('Hide'),
								'1'			=> __('Show'),
							),
							'section' 		=> $page_type_key.'_block_'.$i,
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($page_type_key.'_block_'.$i.'_load', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));
						
						$wp_customize->add_control($page_type_key.'_block_'.$i.'_load', array(
							'label' 		=> __('Number of Posts to Load','gaudium'),
							'section' 		=> $page_type_key.'_block_'.$i,
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($page_type_key.'_block_'.$i.'_layout', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));
						
						$wp_customize->add_control($page_type_key.'_block_'.$i.'_layout', array(
							'label' 		=> __('Layout','gaudium'),
							'type'			=> 'select',
							'choices'		=> array(
								'0'		=> __('Select'),
								'3'		=> __('4 Columns'),
								'4'		=> __('3 Columns'),
								'6'		=> __('2 Columns'),
								'12'	=> __('1 Column'),
							),
							'section' 		=> $page_type_key.'_block_'.$i,
							'priority' 		=> $priority++
						));
					}
					$wp_customize->add_setting($page_type_key.'_block_'.$i.'_number_images', array(
						'default' 		=> _x('0','gaudium'),
						'type' 			=> 'theme_mod'
					));
					
					$wp_customize->add_control($page_type_key.'_block_'.$i.'_number_images', array(
						'label' 		=> __('Number of Images','gaudium'),
						'description'	=> __('Requires PUBLISH and RELOAD.','gaudium'),
						'section' 		=> $page_type_key.'_block_'.$i,
						'priority' 		=> $priority++
					));

					for($j = 0; $j < intval(get_theme_mod($page_type_key.'_block_'.$i.'_number_images')); $j++) {
						
						$wp_customize->add_setting($page_type_key.'_block_'.$i.'_image_'.$j.'_xs_url', array(
							'default' 		=> '',
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, $page_type_key.'_block_'.$i.'_image_'.$j.'_xs_url', array(
							'label' 		=> __('XSmall Screen (Only) Image ','gaudium').($j+1),
							'section' 		=> $page_type_key.'_block_'.$i,
							'settings'		=> $page_type_key.'_block_'.$i.'_image_'.$j.'_xs_url',
							'priority' 		=> $priority++
						)));

						$wp_customize->add_setting($page_type_key.'_block_'.$i.'_image_'.$j.'_url', array(
							'default' 		=> '',
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, $page_type_key.'_block_'.$i.'_image_'.$j.'_url', array(
							'label' 		=> __('XSmall Screen Image ','gaudium').($j+1),
							'section' 		=> $page_type_key.'_block_'.$i,
							'settings'		=> $page_type_key.'_block_'.$i.'_image_'.$j.'_url',
							'priority' 		=> $priority++
						)));

						$wp_customize->add_setting($page_type_key.'_block_'.$i.'_image_'.$j.'_sm_url', array(
							'default' 		=> '',
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, $page_type_key.'_block_'.$i.'_image_'.$j.'_sm_url', array(
							'label' 		=> __('Small Screen Image ','gaudium').($j+1),
							'section' 		=> $page_type_key.'_block_'.$i,
							'settings'		=> $page_type_key.'_block_'.$i.'_image_'.$j.'_sm_url',
							'priority' 		=> $priority++
						)));

						$wp_customize->add_setting($page_type_key.'_block_'.$i.'_image_'.$j.'_md_url', array(
							'default' 		=> '',
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, $page_type_key.'_block_'.$i.'_image_'.$j.'_md_url', array(
							'label' 		=> __('Medium Screen Image ','gaudium').($j+1),
							'section' 		=> $page_type_key.'_block_'.$i,
							'settings'		=> $page_type_key.'_block_'.$i.'_image_'.$j.'_md_url',
							'priority' 		=> $priority++
						)));

						$wp_customize->add_setting($page_type_key.'_block_'.$i.'_image_'.$j.'_lg_url', array(
							'default' 		=> '',
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, $page_type_key.'_block_'.$i.'_image_'.$j.'_lg_url', array(
							'label' 		=> __('Large Screen Image ','gaudium').($j+1),
							'section' 		=> $page_type_key.'_block_'.$i,
							'settings'		=> $page_type_key.'_block_'.$i.'_image_'.$j.'_lg_url',
							'priority' 		=> $priority++
						)));

						$wp_customize->add_setting($page_type_key.'_block_'.$i.'_image_'.$j.'_bg', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'

						));

						$wp_customize->add_control($page_type_key.'_block_'.$i.'_image_'.$j.'_bg', array(
							'label' 		=> __('Image ','gaudium').($j+1).__(' Background Color','gaudium'),
							'description'	=> __('Background color, e.g. #e4e4e4'),
							'section' 		=> $page_type_key.'_block_'.$i,
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($page_type_key.'_block_'.$i.'_image_'.$j.'_top_xs_space', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($page_type_key.'_block_'.$i.'_image_'.$j.'_top_xs_space', array(
							'label' 		=> __('XSmall Screen Top','gaudium'),
							'description'	=> __('Add space to top on extra-small and larger screens, i.e. mobile devices. Select 0 to deactivate.'),
							'type'			=> 'select',
							'choices'	=> array(
								'0'		=> __('Select'),
								'-0'	=> __('Reset'),
								'1'		=> __('1'),
								'2'		=> __('2'),
								'3'		=> __('3'),
								'4'		=> __('4'),
								'5'		=> __('5'),
								'6'		=> __('6'),
								'7'		=> __('7'),
								'8'		=> __('8'),
								'9'		=> __('9'),
								'10'	=> __('10'),
								'11'	=> __('11'),
								'12'	=> __('12'),
								'13'	=> __('13'),
								'14'	=> __('14'),
								'15'	=> __('15'),
								'16'	=> __('16'),
								'17'	=> __('17'),
								'18'	=> __('18'),
								'19'	=> __('19'),
								'20'	=> __('20'),
								'21'	=> __('21'),
								'22'	=> __('22'),
								'23'	=> __('23'),
								'24'	=> __('24'),
								'25'	=> __('25'),
								'26'	=> __('26'),
								'27'	=> __('27'),
								'28'	=> __('28'),
								'29'	=> __('29'),
								'30'	=> __('30'),
								'31'	=> __('31'),
								'32'	=> __('32'),
								'33'	=> __('33'),
								'34'	=> __('34'),
								'35'	=> __('35'),
								'36'	=> __('36'),
								'37'	=> __('37'),
								'38'	=> __('38'),
								'39'	=> __('39'),
								'40'	=> __('40'),
							),
							'section' 		=> $page_type_key.'_block_'.$i,
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($page_type_key.'_block_'.$i.'_image_'.$j.'_bottom_xs_space', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($page_type_key.'_block_'.$i.'_image_'.$j.'_bottom_xs_space', array(
							'label' 		=> __('XSmall Screen Bottom','gaudium'),
							'description'	=> __('Add space to top on extra-small and larger screens, i.e. mobile devices. Select 0 to deactivate.'),
							'type'			=> 'select',
							'choices'	=> array(
								'0'		=> __('Select'),
								'-0'	=> __('Reset'),
								'1'		=> __('1'),
								'2'		=> __('2'),
								'3'		=> __('3'),
								'4'		=> __('4'),
								'5'		=> __('5'),
								'6'		=> __('6'),
								'7'		=> __('7'),
								'8'		=> __('8'),
								'9'		=> __('9'),
								'10'	=> __('10'),
								'11'	=> __('11'),
								'12'	=> __('12'),
								'13'	=> __('13'),
								'14'	=> __('14'),
								'15'	=> __('15'),
								'16'	=> __('16'),
								'17'	=> __('17'),
								'18'	=> __('18'),
								'19'	=> __('19'),
								'20'	=> __('20'),
								'21'	=> __('21'),
								'22'	=> __('22'),
								'23'	=> __('23'),
								'24'	=> __('24'),
								'25'	=> __('25'),
								'26'	=> __('26'),
								'27'	=> __('27'),
								'28'	=> __('28'),
								'29'	=> __('29'),
								'30'	=> __('30'),
								'31'	=> __('31'),
								'32'	=> __('32'),
								'33'	=> __('33'),
								'34'	=> __('34'),
								'35'	=> __('35'),
								'36'	=> __('36'),
								'37'	=> __('37'),
								'38'	=> __('38'),
								'39'	=> __('39'),
								'40'	=> __('40'),
							),
							'section' 		=> $page_type_key.'_block_'.$i,
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($page_type_key.'_block_'.$i.'_image_'.$j.'_bg_size', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($page_type_key.'_block_'.$i.'_image_'.$j.'_bg_size', array(
							'label' 		=> __('Image ','gaudium').($j+1).__(' Background Size','gaudium'),
							'type'			=> 'select',
							'choices'		=> array(
								'0'			=> __('Select'),
								'-0'		=> __('Custom'),
								'auto'		=> __('Auto'),
								'cover'		=> __('Cover'),
								'contain'	=> __('Contain'),
							),
							'section' 		=> $page_type_key.'_block_'.$i,
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($page_type_key.'_block_'.$i.'_image_'.$j.'_layout', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($page_type_key.'_block_'.$i.'_image_'.$j.'_layout', array(
							'label' 		=> __('Image ','gaudium').($j+1).__(' Layout','gaudium'),
							'type'			=> 'select',
							'choices'		=> array(
								'0'				=> __('Select'),
								'default'		=> __('Default'),
								'landscape'		=> __('Landscape'),
								'portrait'		=> __('Portrait'),
								'vr'		    => __('Vertical Rhythm'),
							),
							'section' 		=> $page_type_key.'_block_'.$i,
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($page_type_key.'_block_'.$i.'_image_'.$j.'_xs_width', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($page_type_key.'_block_'.$i.'_image_'.$j.'_xs_width', array(
							'label' 		=> __('XSmall Screen Image ','gaudium').($j+1).__(' Width','gaudium'),
							'description'	=> __('Enter value in px, % or em, e.g. 500px'),
							'section' 		=> $page_type_key.'_block_'.$i,
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($page_type_key.'_block_'.$i.'_image_'.$j.'_width', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($page_type_key.'_block_'.$i.'_image_'.$j.'_width', array(
							'label' 		=> __('Small Screen Image ','gaudium').($j+1).__(' Width','gaudium'),
							'description'	=> __('Enter value in px, % or em, e.g. 500px'),
							'section' 		=> $page_type_key.'_block_'.$i,
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($page_type_key.'_block_'.$i.'_image_'.$j.'_md_width', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($page_type_key.'_block_'.$i.'_image_'.$j.'_md_width', array(
							'label' 		=> __('Medium Screen Image ','gaudium').($j+1).__(' Width','gaudium'),
							'description'	=> __('Enter value in px, % or em, e.g. 500px'),
							'section' 		=> $page_type_key.'_block_'.$i,
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($page_type_key.'_block_'.$i.'_image_'.$j.'_lg_width', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($page_type_key.'_block_'.$i.'_image_'.$j.'_lg_width', array(
							'label' 		=> __('Large Screen Image ','gaudium').($j+1).__(' Width','gaudium'),
							'description'	=> __('Enter value in px, % or em, e.g. 500px'),
							'section' 		=> $page_type_key.'_block_'.$i,
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($page_type_key.'_block_'.$i.'_image_'.$j.'_xs_height', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($page_type_key.'_block_'.$i.'_image_'.$j.'_xs_height', array(
							'label' 		=> __('XSmall Screen Image ','gaudium').($j+1).__(' Height','gaudium'),
							'description'	=> __('Enter value in px, % or em, e.g. 500px'),
							'section' 		=> $page_type_key.'_block_'.$i,
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($page_type_key.'_block_'.$i.'_image_'.$j.'_height', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($page_type_key.'_block_'.$i.'_image_'.$j.'_height', array(
							'label' 		=> __('Small Screen Image ','gaudium').($j+1).__(' Height','gaudium'),
							'description'	=> __('Enter value in px, % or em, e.g. 500px'),
							'section' 		=> $page_type_key.'_block_'.$i,
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($page_type_key.'_block_'.$i.'_image_'.$j.'_md_height', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($page_type_key.'_block_'.$i.'_image_'.$j.'_md_height', array(
							'label' 		=> __('Medium Screen Image ','gaudium').($j+1).__(' Height','gaudium'),
							'description'	=> __('Enter value in px, % or em, e.g. 500px'),
							'section' 		=> $page_type_key.'_block_'.$i,
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($page_type_key.'_block_'.$i.'_image_'.$j.'_lg_height', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($page_type_key.'_block_'.$i.'_image_'.$j.'_lg_height', array(
							'label' 		=> __('Large Screen Image ','gaudium').($j+1).__(' Height','gaudium'),
							'description'	=> __('Enter value in px, % or em, e.g. 500px'),
							'section' 		=> $page_type_key.'_block_'.$i,
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($page_type_key.'_block_'.$i.'_image_'.$j.'_box_xs_width', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($page_type_key.'_block_'.$i.'_image_'.$j.'_box_xs_width', array(
							'label' 		=> __('XSmall Screen Image ','gaudium').($j+1).__(' Box Width','gaudium'),
							'description'	=> __('Enter value in px, % or em, e.g. 500px'),
							'section' 		=> $page_type_key.'_block_'.$i,
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($page_type_key.'_block_'.$i.'_image_'.$j.'_box_width', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($page_type_key.'_block_'.$i.'_image_'.$j.'_box_width', array(
							'label' 		=> __('Small Screen Image ','gaudium').($j+1).__(' Box Width','gaudium'),
							'description'	=> __('Enter value in px, % or em, e.g. 500px'),
							'section' 		=> $page_type_key.'_block_'.$i,
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($page_type_key.'_block_'.$i.'_image_'.$j.'_box_md_width', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($page_type_key.'_block_'.$i.'_image_'.$j.'_box_md_width', array(
							'label' 		=> __('Medium Screen Image ','gaudium').($j+1).__(' Box Width','gaudium'),
							'description'	=> __('Enter value in px, % or em, e.g. 500px'),
							'section' 		=> $page_type_key.'_block_'.$i,
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($page_type_key.'_block_'.$i.'_image_'.$j.'_box_lg_width', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($page_type_key.'_block_'.$i.'_image_'.$j.'_box_lg_width', array(
							'label' 		=> __('Large Screen Image ','gaudium').($j+1).__(' Box Width','gaudium'),
							'description'	=> __('Enter value in px, % or em, e.g. 500px'),
							'section' 		=> $page_type_key.'_block_'.$i,
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($page_type_key.'_block_'.$i.'_image_'.$j.'_box_xs_height', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($page_type_key.'_block_'.$i.'_image_'.$j.'_box_xs_height', array(
							'label' 		=> __('Xsmall Screen Image ','gaudium').($j+1).__(' Box Height','gaudium'),
							'description'	=> __('Enter value in px, % or em, e.g. 500px'),
							'section' 		=> $page_type_key.'_block_'.$i,
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($page_type_key.'_block_'.$i.'_image_'.$j.'_box_height', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($page_type_key.'_block_'.$i.'_image_'.$j.'_box_height', array(
							'label' 		=> __('Small Screen Image ','gaudium').($j+1).__(' Box Height','gaudium'),
							'description'	=> __('Enter value in px, % or em, e.g. 500px'),
							'section' 		=> $page_type_key.'_block_'.$i,
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($page_type_key.'_block_'.$i.'_image_'.$j.'_box_md_height', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($page_type_key.'_block_'.$i.'_image_'.$j.'_box_md_height', array(
							'label' 		=> __('Medium Screen Image ','gaudium').($j+1).__(' Box Height','gaudium'),
							'description'	=> __('Enter value in px, % or em, e.g. 500px'),
							'section' 		=> $page_type_key.'_block_'.$i,
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($page_type_key.'_block_'.$i.'_image_'.$j.'_box_lg_height', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($page_type_key.'_block_'.$i.'_image_'.$j.'_box_lg_height', array(
							'label' 		=> __('Large Screen Image ','gaudium').($j+1).__(' Box Height','gaudium'),
							'description'	=> __('Enter value in px, % or em, e.g. 500px'),
							'section' 		=> $page_type_key.'_block_'.$i,
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($page_type_key.'_block_'.$i.'_image_'.$j.'_box_xs_x', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($page_type_key.'_block_'.$i.'_image_'.$j.'_box_xs_x', array(
							'label' 		=> __('XSmall Screen Image ','gaudium').($j+1).__(' Box Left Position','gaudium'),
							'description'	=> __('Enter value in px, % or em, e.g. 500px'),
							'section' 		=> $page_type_key.'_block_'.$i,
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($page_type_key.'_block_'.$i.'_image_'.$j.'_box_x', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($page_type_key.'_block_'.$i.'_image_'.$j.'_box_x', array(
							'label' 		=> __('Small Screen Image ','gaudium').($j+1).__(' Box Left Position','gaudium'),
							'description'	=> __('Enter value in px, % or em, e.g. 500px'),
							'section' 		=> $page_type_key.'_block_'.$i,
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($page_type_key.'_block_'.$i.'_image_'.$j.'_box_md_x', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($page_type_key.'_block_'.$i.'_image_'.$j.'_box_md_x', array(
							'label' 		=> __('Medium Screen Image ','gaudium').($j+1).__(' Box Left Position','gaudium'),
							'description'	=> __('Enter value in px, % or em, e.g. 500px'),
							'section' 		=> $page_type_key.'_block_'.$i,
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($page_type_key.'_block_'.$i.'_image_'.$j.'_box_lg_x', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($page_type_key.'_block_'.$i.'_image_'.$j.'_box_lg_x', array(
							'label' 		=> __('Large Screen Image ','gaudium').($j+1).__(' Box Left Position','gaudium'),
							'description'	=> __('Enter value in px, % or em, e.g. 500px'),
							'section' 		=> $page_type_key.'_block_'.$i,
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($page_type_key.'_block_'.$i.'_image_'.$j.'_box_xs_y', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($page_type_key.'_block_'.$i.'_image_'.$j.'_box_xs_y', array(
							'label' 		=> __('XSmall Screen Image ','gaudium').($j+1).__(' Box Top Position','gaudium'),
							'description'	=> __('Enter value in px, % or em, e.g. 500px'),
							'section' 		=> $page_type_key.'_block_'.$i,
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($page_type_key.'_block_'.$i.'_image_'.$j.'_box_y', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($page_type_key.'_block_'.$i.'_image_'.$j.'_box_y', array(
							'label' 		=> __('Small Screen Image ','gaudium').($j+1).__(' Box Top Position','gaudium'),
							'description'	=> __('Enter value in px, % or em, e.g. 500px'),
							'section' 		=> $page_type_key.'_block_'.$i,
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($page_type_key.'_block_'.$i.'_image_'.$j.'_box_md_y', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($page_type_key.'_block_'.$i.'_image_'.$j.'_box_md_y', array(
							'label' 		=> __('Medium Screen Image ','gaudium').($j+1).__(' Box Top Position','gaudium'),
							'description'	=> __('Enter value in px, % or em, e.g. 500px'),
							'section' 		=> $page_type_key.'_block_'.$i,
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($page_type_key.'_block_'.$i.'_image_'.$j.'_box_lg_y', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($page_type_key.'_block_'.$i.'_image_'.$j.'_box_lg_y', array(
							'label' 		=> __('Large Screen Image ','gaudium').($j+1).__(' Box Top Position','gaudium'),
							'description'	=> __('Enter value in px, % or em, e.g. 500px'),
							'section' 		=> $page_type_key.'_block_'.$i,
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($page_type_key.'_block_'.$i.'_image_'.$j.'_styles_xs', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($page_type_key.'_block_'.$i.'_image_'.$j.'_styles_xs', array(
							'label' 		=> __('XSmall Screen Image ','gaudium').($j+1).__(' Styles','gaudium'),
							'description'	=> __('Enter styles, e.g. max-width: 50%;'),
							'section' 		=> $page_type_key.'_block_'.$i,
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($page_type_key.'_block_'.$i.'_image_'.$j.'_styles', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($page_type_key.'_block_'.$i.'_image_'.$j.'_styles', array(
							'label' 		=> __('Small Screen Image ','gaudium').($j+1).__(' Styles','gaudium'),
							'description'	=> __('Enter styles, e.g. max-width: 50%;'),
							'section' 		=> $page_type_key.'_block_'.$i,
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($page_type_key.'_block_'.$i.'_image_'.$j.'_styles_md', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($page_type_key.'_block_'.$i.'_image_'.$j.'_styles_md', array(
							'label' 		=> __('Medium Screen Image ','gaudium').($j+1).__(' Styles','gaudium'),
							'description'	=> __('Enter styles, e.g. max-width: 50%;'),
							'section' 		=> $page_type_key.'_block_'.$i,
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($page_type_key.'_block_'.$i.'_image_'.$j.'_styles_lg', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($page_type_key.'_block_'.$i.'_image_'.$j.'_styles_lg', array(
							'label' 		=> __('Large Screen Image ','gaudium').($j+1).__(' Styles','gaudium'),
							'description'	=> __('Enter styles, e.g. max-width: 50%;'),
							'section' 		=> $page_type_key.'_block_'.$i,
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($page_type_key.'_block_'.$i.'_image_'.$j.'_bg_position', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($page_type_key.'_block_'.$i.'_image_'.$j.'_bg_position', array(
							'label' 		=> __('Image ','gaudium').($j+1).__(' Background Position','gaudium'),
							'type'			=> 'select',
							'choices'		=> array(
								'0'			=> __('Select'),
								'-0'		=> __('Custom'),
								'center'	=> __('Center'),
								'left 0'	=> __('Left'),
								'right 0'	=> __('Right'),
								'bottom'	=> __('Bottom'),
								'top'		=> __('Top'),
							),
							'section' 		=> $page_type_key.'_block_'.$i,
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($page_type_key.'_block_'.$i.'_image_'.$j.'_xs_x', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($page_type_key.'_block_'.$i.'_image_'.$j.'_xs_x', array(
							'label' 		=> __('XSmall Screen Image ','gaudium').($j+1).__(' Left Position','gaudium'),
							'section' 		=> $page_type_key.'_block_'.$i,
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($page_type_key.'_block_'.$i.'_image_'.$j.'_x', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($page_type_key.'_block_'.$i.'_image_'.$j.'_x', array(
							'label' 		=> __('Image ','gaudium').($j+1).__(' Left Position','gaudium'),
							'section' 		=> $page_type_key.'_block_'.$i,
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($page_type_key.'_block_'.$i.'_image_'.$j.'_xs_y', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($page_type_key.'_block_'.$i.'_image_'.$j.'_xs_y', array(
							'label' 		=> __('XSmall Screen Image ','gaudium').($j+1).__(' Top Position','gaudium'),
							'description'	=> __('Enter value in px, % or em, e.g. 100px'),
							'section' 		=> $page_type_key.'_block_'.$i,
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($page_type_key.'_block_'.$i.'_image_'.$j.'_y', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($page_type_key.'_block_'.$i.'_image_'.$j.'_y', array(
							'label' 		=> __('Image ','gaudium').($j+1).__(' Top Position','gaudium'),
							'description'	=> __('Enter value in px, % or em, e.g. 100px'),
							'section' 		=> $page_type_key.'_block_'.$i,
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($page_type_key.'_block_'.$i.'_image_'.$j.'_repeat', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($page_type_key.'_block_'.$i.'_image_'.$j.'_repeat', array(
							'label' 		=> __('Image ','gaudium').($j+1).__(' Repeat','gaudium'),
							'type'			=> 'select',
							'choices' 		=> array(
								'0' 			=> __('Select'),
							    'repeat' 		=> __('Repeat'),
							    'no-repeat' 	=> __('No repeat'),
							),
							'section' 		=> $page_type_key.'_block_'.$i,
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($page_type_key.'_block_'.$i.'_image_'.$j.'_speed', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod',
						));

						$wp_customize->add_control($page_type_key.'_block_'.$i.'_image_'.$j.'_speed', array(
							'label' 		=> __('Image ','gaudium').($j+1).__(' speed','gaudium'),
							'description'	=> __('Speed from 0.0 (static) to 1.0 (fixed).'),
							'section' 		=> $page_type_key.'_block_'.$i,
							'priority' 		=> $priority++
						));
					}

					$wp_customize->add_setting($page_type_key.'_block_'.$i.'_content_number', array(
						'default' 		=> _x('0','gaudium'),
						'type' 			=> 'theme_mod'
					));

					$wp_customize->add_control($page_type_key.'_block_'.$i.'_content_number', array(
						'label' 		=> __('Number of Content Blocks','gaudium'),
						'description'	=> __('Requires PUBLISH and RELOAD.','gaudium'),
						'section' 		=> $page_type_key.'_block_'.$i,
						'priority' 		=> $priority++
					));

					for($j = 0; $j < intval(get_theme_mod($page_type_key.'_block_'.$i.'_content_number')); $j++) {

						$wp_customize->add_setting($page_type_key.'_block_'.$i.'_content_'.$j.'_cols', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($page_type_key.'_block_'.$i.'_content_'.$j.'_cols', array(
							'label' 		=> __('Content Columns','gaudium'),
							'description'	=> __('Number of columns for this content block, e.g. 3 for a 4-column layout, 4 for a 3-column layout or 6 a 2-column layout.'),
							'type'			=> 'select',
							'choices'		=> array(
								'0'		=> __('Select'),
								'1'		=> __('1'),
								'2'		=> __('2'),
								'3'		=> __('3'),
								'4'		=> __('4'),
								'5'		=> __('5'),
								'6'		=> __('6'),
								'7'		=> __('7'),
								'8'		=> __('8'),
								'9'		=> __('9'),
								'10'	=> __('10'),
								'11'	=> __('11'),
								'12'	=> __('12'),
							),
							'section' 		=> $page_type_key.'_block_'.$i,
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($page_type_key.'_block_'.$i.'_content_'.$j.'_cols_push', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($page_type_key.'_block_'.$i.'_content_'.$j.'_cols_push', array(
							'label' 		=> __('Push Content','gaudium'),
							'description'	=> __('Number of columns to shift the content block to the right. Select 0 to deactivate.'),
							'type'			=> 'select',
							'choices'		=> array(
								'0'		=> __('Select'),
								'-0'	=> __('Reset'),
								'1'		=> __('1'),
								'2'		=> __('2'),
								'3'		=> __('3'),
								'4'		=> __('4'),
								'5'		=> __('5'),
								'6'		=> __('6'),
								'7'		=> __('7'),
								'8'		=> __('8'),
								'9'		=> __('9'),
								'10'	=> __('10'),
								'11'	=> __('11'),
								'12'	=> __('12'),
							),
							'section' 		=> $page_type_key.'_block_'.$i,
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($page_type_key.'_block_'.$i.'_content_'.$j.'_cols_pull', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($page_type_key.'_block_'.$i.'_content_'.$j.'_cols_pull', array(
							'label' 		=> __('Pull Content','gaudium'),
							'description'	=> __('Number of columns to shift the content block to the left. Select 0 to deactivate.'),
							'type'			=> 'select',
							'choices'		=> array(
								'0'		=> __('Select'),
								'-1'	=> __('Reset'),
								'1'		=> __('1'),
								'2'		=> __('2'),
								'3'		=> __('3'),
								'4'		=> __('4'),
								'5'		=> __('5'),
								'6'		=> __('6'),
								'7'		=> __('7'),
								'8'		=> __('8'),
								'9'		=> __('9'),
								'10'	=> __('10'),
								'11'	=> __('11'),
								'12'	=> __('12'),
							),
							'section' 		=> $page_type_key.'_block_'.$i,
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($page_type_key.'_block_'.$i.'_content_'.$j.'_top_xs_space', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($page_type_key.'_block_'.$i.'_content_'.$j.'_top_xs_space', array(
							'label' 		=> __('XSmall Screen Top','gaudium'),
							'description'	=> __('Add space to top on extra-small and larger screens, i.e. mobile devices. Select 0 to deactivate.'),
							'type'			=> 'select',
							'choices'	=> array(
								'0'		=> __('Select'),
								'-0'	=> __('Reset'),
								'1'		=> __('1'),
								'2'		=> __('2'),
								'3'		=> __('3'),
								'4'		=> __('4'),
								'5'		=> __('5'),
								'6'		=> __('6'),
								'7'		=> __('7'),
								'8'		=> __('8'),
								'9'		=> __('9'),
								'10'	=> __('10'),
								'11'	=> __('11'),
								'12'	=> __('12'),
								'13'	=> __('13'),
								'14'	=> __('14'),
								'15'	=> __('15'),
								'16'	=> __('16'),
								'17'	=> __('17'),
								'18'	=> __('18'),
								'19'	=> __('19'),
								'20'	=> __('20'),
								'21'	=> __('21'),
								'22'	=> __('22'),
								'23'	=> __('23'),
								'24'	=> __('24'),
								'25'	=> __('25'),
								'26'	=> __('26'),
								'27'	=> __('27'),
								'28'	=> __('28'),
								'29'	=> __('29'),
								'30'	=> __('30'),
								'31'	=> __('31'),
								'32'	=> __('32'),
								'33'	=> __('33'),
								'34'	=> __('34'),
								'35'	=> __('35'),
								'36'	=> __('36'),
								'37'	=> __('37'),
								'38'	=> __('38'),
								'39'	=> __('39'),
								'40'	=> __('40'),
							),
							'section' 		=> $page_type_key.'_block_'.$i,
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($page_type_key.'_block_'.$i.'_content_'.$j.'_top_sm_space', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($page_type_key.'_block_'.$i.'_content_'.$j.'_top_sm_space', array(
							'label' 		=> __('Small Screen Top','gaudium'),
							'description'	=> __('Add space to top on small and larger screens.'),
							'type'			=> 'select',
							'choices'	=> array(
								'0'		=> __('Select'),
								'-0'	=> __('Reset'),
								'1'		=> __('1'),
								'2'		=> __('2'),
								'3'		=> __('3'),
								'4'		=> __('4'),
								'5'		=> __('5'),
								'6'		=> __('6'),
								'7'		=> __('7'),
								'8'		=> __('8'),
								'9'		=> __('9'),
								'10'	=> __('10'),
								'11'	=> __('11'),
								'12'	=> __('12'),
								'13'	=> __('13'),
								'14'	=> __('14'),
								'15'	=> __('15'),
								'16'	=> __('16'),
								'17'	=> __('17'),
								'18'	=> __('18'),
								'19'	=> __('19'),
								'20'	=> __('20'),
								'21'	=> __('21'),
								'22'	=> __('22'),
								'23'	=> __('23'),
								'24'	=> __('24'),
								'25'	=> __('25'),
								'26'	=> __('26'),
								'27'	=> __('27'),
								'28'	=> __('28'),
								'29'	=> __('29'),
								'30'	=> __('30'),
								'31'	=> __('31'),
								'32'	=> __('32'),
								'33'	=> __('33'),
								'34'	=> __('34'),
								'35'	=> __('35'),
								'36'	=> __('36'),
								'37'	=> __('37'),
								'38'	=> __('38'),
								'39'	=> __('39'),
								'40'	=> __('40'),
							),
							'section' 		=> $page_type_key.'_block_'.$i,
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($page_type_key.'_block_'.$i.'_content_'.$j.'_top_md_space', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($page_type_key.'_block_'.$i.'_content_'.$j.'_top_md_space', array(
							'label' 		=> __('Medium Screen Top','gaudium'),
							'description'	=> __('Add space to top on medium and larger screens.'),
							'type'			=> 'select',
							'choices'	=> array(
								'0'		=> __('Select'),
								'-0'	=> __('Reset'),
								'1'		=> __('1'),
								'2'		=> __('2'),
								'3'		=> __('3'),
								'4'		=> __('4'),
								'5'		=> __('5'),
								'6'		=> __('6'),
								'7'		=> __('7'),
								'8'		=> __('8'),
								'9'		=> __('9'),
								'10'	=> __('10'),
								'11'	=> __('11'),
								'12'	=> __('12'),
								'13'	=> __('13'),
								'14'	=> __('14'),
								'15'	=> __('15'),
								'16'	=> __('16'),
								'17'	=> __('17'),
								'18'	=> __('18'),
								'19'	=> __('19'),
								'20'	=> __('20'),
								'21'	=> __('21'),
								'22'	=> __('22'),
								'23'	=> __('23'),
								'24'	=> __('24'),
								'25'	=> __('25'),
								'26'	=> __('26'),
								'27'	=> __('27'),
								'28'	=> __('28'),
								'29'	=> __('29'),
								'30'	=> __('30'),
								'31'	=> __('31'),
								'32'	=> __('32'),
								'33'	=> __('33'),
								'34'	=> __('34'),
								'35'	=> __('35'),
								'36'	=> __('36'),
								'37'	=> __('37'),
								'38'	=> __('38'),
								'39'	=> __('39'),
								'40'	=> __('40'),
							),
							'section' 		=> $page_type_key.'_block_'.$i,
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($page_type_key.'_block_'.$i.'_content_'.$j.'_top_lg_space', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($page_type_key.'_block_'.$i.'_content_'.$j.'_top_lg_space', array(
							'label' 		=> __('Large Screen Top','gaudium'),
							'description'	=> __('Add space to top on large screens.'),
							'type'			=> 'select',
							'choices'	=> array(
								'0'		=> __('Select'),
								'-0'	=> __('Reset'),
								'1'		=> __('1'),
								'2'		=> __('2'),
								'3'		=> __('3'),
								'4'		=> __('4'),
								'5'		=> __('5'),
								'6'		=> __('6'),
								'7'		=> __('7'),
								'8'		=> __('8'),
								'9'		=> __('9'),
								'10'	=> __('10'),
								'11'	=> __('11'),
								'12'	=> __('12'),
								'13'	=> __('13'),
								'14'	=> __('14'),
								'15'	=> __('15'),
								'16'	=> __('16'),
								'17'	=> __('17'),
								'18'	=> __('18'),
								'19'	=> __('19'),
								'20'	=> __('20'),
								'21'	=> __('21'),
								'22'	=> __('22'),
								'23'	=> __('23'),
								'24'	=> __('24'),
								'25'	=> __('25'),
								'26'	=> __('26'),
								'27'	=> __('27'),
								'28'	=> __('28'),
								'29'	=> __('29'),
								'30'	=> __('30'),
								'31'	=> __('31'),
								'32'	=> __('32'),
								'33'	=> __('33'),
								'34'	=> __('34'),
								'35'	=> __('35'),
								'36'	=> __('36'),
								'37'	=> __('37'),
								'38'	=> __('38'),
								'39'	=> __('39'),
								'40'	=> __('40'),
							),
							'section' 		=> $page_type_key.'_block_'.$i,
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($page_type_key.'_block_'.$i.'_content_'.$j.'_bottom_xs_space', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($page_type_key.'_block_'.$i.'_content_'.$j.'_bottom_xs_space', array(
							'label' 		=> __('XSmall Screen Bottom','gaudium'),
							'description'	=> __('Add space to top on extra-small and larger screens, i.e. mobile devices. Select 0 to deactivate.'),
							'type'			=> 'select',
							'choices'	=> array(
								'0'		=> __('Select'),
								'-0'	=> __('Reset'),
								'1'		=> __('1'),
								'2'		=> __('2'),
								'3'		=> __('3'),
								'4'		=> __('4'),
								'5'		=> __('5'),
								'6'		=> __('6'),
								'7'		=> __('7'),
								'8'		=> __('8'),
								'9'		=> __('9'),
								'10'	=> __('10'),
								'11'	=> __('11'),
								'12'	=> __('12'),
								'13'	=> __('13'),
								'14'	=> __('14'),
								'15'	=> __('15'),
								'16'	=> __('16'),
								'17'	=> __('17'),
								'18'	=> __('18'),
								'19'	=> __('19'),
								'20'	=> __('20'),
								'21'	=> __('21'),
								'22'	=> __('22'),
								'23'	=> __('23'),
								'24'	=> __('24'),
								'25'	=> __('25'),
								'26'	=> __('26'),
								'27'	=> __('27'),
								'28'	=> __('28'),
								'29'	=> __('29'),
								'30'	=> __('30'),
								'31'	=> __('31'),
								'32'	=> __('32'),
								'33'	=> __('33'),
								'34'	=> __('34'),
								'35'	=> __('35'),
								'36'	=> __('36'),
								'37'	=> __('37'),
								'38'	=> __('38'),
								'39'	=> __('39'),
								'40'	=> __('40'),
							),
							'section' 		=> $page_type_key.'_block_'.$i,
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($page_type_key.'_block_'.$i.'_content_'.$j.'_bottom_sm_space', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($page_type_key.'_block_'.$i.'_content_'.$j.'_bottom_sm_space', array(
							'label' 		=> __('Small Screen Bottom','gaudium'),
							'description'	=> __('Add space to bottom on small and larger screens.'),
							'type'			=> 'select',
							'choices'	=> array(
								'0'		=> __('Select'),
								'-0'	=> __('Reset'),
								'1'		=> __('1'),
								'2'		=> __('2'),
								'3'		=> __('3'),
								'4'		=> __('4'),
								'5'		=> __('5'),
								'6'		=> __('6'),
								'7'		=> __('7'),
								'8'		=> __('8'),
								'9'		=> __('9'),
								'10'	=> __('10'),
								'11'	=> __('11'),
								'12'	=> __('12'),
								'13'	=> __('13'),
								'14'	=> __('14'),
								'15'	=> __('15'),
								'16'	=> __('16'),
								'17'	=> __('17'),
								'18'	=> __('18'),
								'19'	=> __('19'),
								'20'	=> __('20'),
								'21'	=> __('21'),
								'22'	=> __('22'),
								'23'	=> __('23'),
								'24'	=> __('24'),
								'25'	=> __('25'),
								'26'	=> __('26'),
								'27'	=> __('27'),
								'28'	=> __('28'),
								'29'	=> __('29'),
								'30'	=> __('30'),
								'31'	=> __('31'),
								'32'	=> __('32'),
								'33'	=> __('33'),
								'34'	=> __('34'),
								'35'	=> __('35'),
								'36'	=> __('36'),
								'37'	=> __('37'),
								'38'	=> __('38'),
								'39'	=> __('39'),
								'40'	=> __('40'),
							),
							'section' 		=> $page_type_key.'_block_'.$i,
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($page_type_key.'_block_'.$i.'_content_'.$j.'_bottom_md_space', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($page_type_key.'_block_'.$i.'_content_'.$j.'_bottom_md_space', array(
							'label' 		=> __('Medium Screen Bottom','gaudium'),
							'description'	=> __('Add space to bottom on medium and larger screens.'),
							'type'			=> 'select',
							'choices'	=> array(
								'0'		=> __('Select'),
								'-0'	=> __('Reset'),
								'1'		=> __('1'),
								'2'		=> __('2'),
								'3'		=> __('3'),
								'4'		=> __('4'),
								'5'		=> __('5'),
								'6'		=> __('6'),
								'7'		=> __('7'),
								'8'		=> __('8'),
								'9'		=> __('9'),
								'10'	=> __('10'),
								'11'	=> __('11'),
								'12'	=> __('12'),
								'13'	=> __('13'),
								'14'	=> __('14'),
								'15'	=> __('15'),
								'16'	=> __('16'),
								'17'	=> __('17'),
								'18'	=> __('18'),
								'19'	=> __('19'),
								'20'	=> __('20'),
								'21'	=> __('21'),
								'22'	=> __('22'),
								'23'	=> __('23'),
								'24'	=> __('24'),
								'25'	=> __('25'),
								'26'	=> __('26'),
								'27'	=> __('27'),
								'28'	=> __('28'),
								'29'	=> __('29'),
								'30'	=> __('30'),
								'31'	=> __('31'),
								'32'	=> __('32'),
								'33'	=> __('33'),
								'34'	=> __('34'),
								'35'	=> __('35'),
								'36'	=> __('36'),
								'37'	=> __('37'),
								'38'	=> __('38'),
								'39'	=> __('39'),
								'40'	=> __('40'),
							),
							'section' 		=> $page_type_key.'_block_'.$i,
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($page_type_key.'_block_'.$i.'_content_'.$j.'_bottom_lg_space', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($page_type_key.'_block_'.$i.'_content_'.$j.'_bottom_lg_space', array(
							'label' 		=> __('Large Screen Bottom','gaudium'),
							'description'	=> __('Add space to bottom on large screens.'),
							'type'			=> 'select',
							'choices'	=> array(
								'0'		=> __('Select'),
								'-0'	=> __('Reset'),
								'1'		=> __('1'),
								'2'		=> __('2'),
								'3'		=> __('3'),
								'4'		=> __('4'),
								'5'		=> __('5'),
								'6'		=> __('6'),
								'7'		=> __('7'),
								'8'		=> __('8'),
								'9'		=> __('9'),
								'10'	=> __('10'),
								'11'	=> __('11'),
								'12'	=> __('12'),
								'13'	=> __('13'),
								'14'	=> __('14'),
								'15'	=> __('15'),
								'16'	=> __('16'),
								'17'	=> __('17'),
								'18'	=> __('18'),
								'19'	=> __('19'),
								'20'	=> __('20'),
								'21'	=> __('21'),
								'22'	=> __('22'),
								'23'	=> __('23'),
								'24'	=> __('24'),
								'25'	=> __('25'),
								'26'	=> __('26'),
								'27'	=> __('27'),
								'28'	=> __('28'),
								'29'	=> __('29'),
								'30'	=> __('30'),
								'31'	=> __('31'),
								'32'	=> __('32'),
								'33'	=> __('33'),
								'34'	=> __('34'),
								'35'	=> __('35'),
								'36'	=> __('36'),
								'37'	=> __('37'),
								'38'	=> __('38'),
								'39'	=> __('39'),
								'40'	=> __('40'),
							),
							'section' 		=> $page_type_key.'_block_'.$i,
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($page_type_key.'_block_'.$i.'_content_'.$j, array(
							'default' 		=> _x('','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($page_type_key.'_block_'.$i.'_content_'.$j, array(
							'label' 		=> __('Content','gaudium'),
							'description'   => __('Supports text or code.','gaudium'),
							'type'			=> 'textarea',
							'section' 		=> $page_type_key.'_block_'.$i,
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($page_type_key.'_block_'.$i.'_content_'.$j.'_speed', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($page_type_key.'_block_'.$i.'_content_'.$j.'_speed', array(
							'label' 		=> __('Content Speed','gaudium'),
							'description' 	=> __('Speed from 0.0 (static) to 1.0 (fixed).','gaudium'),
							'section' 		=> $page_type_key.'_block_'.$i,
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($page_type_key.'_block_'.$i.'_content_'.$j.'_number_images', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));
						
						$wp_customize->add_control($page_type_key.'_block_'.$i.'_content_'.$j.'_number_images', array(
							'label' 		=> __('Number of Images','gaudium'),
							'description'	=> __('Requires PUBLISH and RELOAD.','gaudium'),
							'section' 		=> $page_type_key.'_block_'.$i,
							'priority' 		=> $priority++
						));
						
						for($k = 0; $k < intval(get_theme_mod($page_type_key.'_block_'.$i.'_content_'.$j.'_number_images')); $k++) {

							$wp_customize->add_setting($page_type_key.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_xs_url', array(
								'default' 		=> '',
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, $page_type_key.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_xs_url', array(
								'label' 		=> __('XSmall Screen (Only) Image ','gaudium').($k+1),
								'section' 		=> $page_type_key.'_block_'.$i,
								'settings'		=> $page_type_key.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_xs_url',
								'priority' 		=> $priority++
							)));

							$wp_customize->add_setting($page_type_key.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_url', array(
								'default' 		=> '',
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, $page_type_key.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_url', array(
								'label' 		=> __('XSmall Screen Image ','gaudium').($k+1),
								'section' 		=> $page_type_key.'_block_'.$i,
								'settings'		=> $page_type_key.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_url',
								'priority' 		=> $priority++
							)));

							$wp_customize->add_setting($page_type_key.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_sm_url', array(
								'default' 		=> '',
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, $page_type_key.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_sm_url', array(
								'label' 		=> __('Small Screen Image ','gaudium').($k+1),
								'section' 		=> $page_type_key.'_block_'.$i,
								'settings'		=> $page_type_key.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_sm_url',
								'priority' 		=> $priority++
							)));

							$wp_customize->add_setting($page_type_key.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_md_url', array(
								'default' 		=> '',
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, $page_type_key.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_md_url', array(
								'label' 		=> __('Medium Screen Image ','gaudium').($k+1),
								'section' 		=> $page_type_key.'_block_'.$i,
								'settings'		=> $page_type_key.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_md_url',
								'priority' 		=> $priority++
							)));

							$wp_customize->add_setting($page_type_key.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_lg_url', array(
								'default' 		=> '',
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, $page_type_key.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_lg_url', array(
								'label' 		=> __('Large Screen Image ','gaudium').($k+1),
								'section' 		=> $page_type_key.'_block_'.$i,
								'settings'		=> $page_type_key.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_lg_url',
								'priority' 		=> $priority++
							)));

							$wp_customize->add_setting($page_type_key.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_bg', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'

							));

							$wp_customize->add_control($page_type_key.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_bg', array(
								'label' 		=> __('Image ','gaudium').($k+1).__(' Background Color','gaudium'),
								'description'	=> __('Background color, e.g. #e4e4e4'),
								'section' 		=> $page_type_key.'_block_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($page_type_key.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_bg_size', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($page_type_key.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_bg_size', array(
								'label' 		=> __('Image ','gaudium').($k+1).__(' Background Size','gaudium'),
								'type'			=> 'select',
								'choices'		=> array(
									'0'			=> __('Select'),
									'-0'		=> __('Custom'),
									'auto'		=> __('Auto'),
									'cover'		=> __('Cover'),
									'contain'	=> __('Contain'),
								),
								'section' 		=> $page_type_key.'_block_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($page_type_key.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_layout', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($page_type_key.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_layout', array(
								'label' 		=> __('Image ','gaudium').($k+1).__(' Layout','gaudium'),
								'type'			=> 'select',
								'choices'		=> array(
									'0'				=> __('Select'),
									'default'		=> __('Default'),
									'landscape'		=> __('Landscape'),
									'portrait'		=> __('Portrait'),
									'vr'		    => __('Vertical Rhythm'),
								),
								'section' 		=> $page_type_key.'_block_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($page_type_key.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_xs_width', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($page_type_key.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_xs_width', array(
								'label' 		=> __('XSmall Screen Image ','gaudium').($k+1).__(' Width','gaudium'),
								'description'	=> __('Enter value in px, % or em, e.g. 500px'),
								'section' 		=> $page_type_key.'_block_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($page_type_key.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_width', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($page_type_key.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_width', array(
								'label' 		=> __('Small Screen Image ','gaudium').($k+1).__(' Width','gaudium'),
								'description'	=> __('Enter value in px, % or em, e.g. 500px'),
								'section' 		=> $page_type_key.'_block_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($page_type_key.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_md_width', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($page_type_key.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_md_width', array(
								'label' 		=> __('Medium Screen Image ','gaudium').($k+1).__(' Width','gaudium'),
								'description'	=> __('Enter value in px, % or em, e.g. 500px'),
								'section' 		=> $page_type_key.'_block_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($page_type_key.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_lg_width', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($page_type_key.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_lg_width', array(
								'label' 		=> __('Large Screen Image ','gaudium').($k+1).__(' Width','gaudium'),
								'description'	=> __('Enter value in px, % or em, e.g. 500px'),
								'section' 		=> $page_type_key.'_block_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($page_type_key.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_xs_height', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($page_type_key.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_xs_height', array(
								'label' 		=> __('XSmall Screen Image ','gaudium').($k+1).__(' Height','gaudium'),
								'description'	=> __('Enter value in px, % or em, e.g. 500px'),
								'section' 		=> $page_type_key.'_block_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($page_type_key.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_height', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($page_type_key.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_height', array(
								'label' 		=> __('Small Screen Image ','gaudium').($k+1).__(' Height','gaudium'),
								'description'	=> __('Enter value in px, % or em, e.g. 500px'),
								'section' 		=> $page_type_key.'_block_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($page_type_key.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_md_height', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($page_type_key.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_md_height', array(
								'label' 		=> __('Medium Screen Image ','gaudium').($k+1).__(' Height','gaudium'),
								'description'	=> __('Enter value in px, % or em, e.g. 500px'),
								'section' 		=> $page_type_key.'_block_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($page_type_key.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_lg_height', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($page_type_key.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_lg_height', array(
								'label' 		=> __('Medium Screen Image ','gaudium').($k+1).__(' Height','gaudium'),
								'description'	=> __('Enter value in px, % or em, e.g. 500px'),
								'section' 		=> $page_type_key.'_block_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($page_type_key.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_box_xs_width', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($page_type_key.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_box_xs_width', array(
								'label' 		=> __('XSmall Screen Image ','gaudium').($k+1).__(' Box Width','gaudium'),
								'description'	=> __('Enter value in px, % or em, e.g. 500px'),
								'section' 		=> $page_type_key.'_block_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($page_type_key.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_box_width', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($page_type_key.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_box_width', array(
								'label' 		=> __('Small Screen Image ','gaudium').($k+1).__(' Box Width','gaudium'),
								'description'	=> __('Enter value in px, % or em, e.g. 500px'),
								'section' 		=> $page_type_key.'_block_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($page_type_key.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_box_md_width', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($page_type_key.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_box_md_width', array(
								'label' 		=> __('Medium Screen Image ','gaudium').($k+1).__(' Box Width','gaudium'),
								'description'	=> __('Enter value in px, % or em, e.g. 500px'),
								'section' 		=> $page_type_key.'_block_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($page_type_key.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_box_lg_width', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($page_type_key.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_box_lg_width', array(
								'label' 		=> __('Large Screen Image ','gaudium').($k+1).__(' Box Width','gaudium'),
								'description'	=> __('Enter value in px, % or em, e.g. 500px'),
								'section' 		=> $page_type_key.'_block_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($page_type_key.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_box_xs_height', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($page_type_key.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_box_xs_height', array(
								'label' 		=> __('XSmall Screen Image ','gaudium').($k+1).__(' Box Height','gaudium'),
								'description'	=> __('Enter value in px, % or em, e.g. 500px'),
								'section' 		=> $page_type_key.'_block_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($page_type_key.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_box_height', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($page_type_key.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_box_height', array(
								'label' 		=> __('Small Screen Image ','gaudium').($k+1).__(' Box Height','gaudium'),
								'description'	=> __('Enter value in px, % or em, e.g. 500px'),
								'section' 		=> $page_type_key.'_block_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($page_type_key.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_box_md_height', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($page_type_key.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_box_md_height', array(
								'label' 		=> __('Medium Screen Image ','gaudium').($k+1).__(' Box Height','gaudium'),
								'description'	=> __('Enter value in px, % or em, e.g. 500px'),
								'section' 		=> $page_type_key.'_block_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($page_type_key.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_box_lg_height', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($page_type_key.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_box_lg_height', array(
								'label' 		=> __('Large Screen Image ','gaudium').($k+1).__(' Box Height','gaudium'),
								'description'	=> __('Enter value in px, % or em, e.g. 500px'),
								'section' 		=> $page_type_key.'_block_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($page_type_key.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_box_xs_x', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($page_type_key.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_box_xs_x', array(
								'label' 		=> __('XSmall Screen Image ','gaudium').($k+1).__(' Box Left Position','gaudium'),
								'description'	=> __('Enter value in px, % or em, e.g. 500px'),
								'section' 		=> $page_type_key.'_block_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($page_type_key.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_box_x', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($page_type_key.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_box_x', array(
								'label' 		=> __('Small Screen Image ','gaudium').($k+1).__(' Box Left Position','gaudium'),
								'description'	=> __('Enter value in px, % or em, e.g. 500px'),
								'section' 		=> $page_type_key.'_block_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($page_type_key.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_box_md_x', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($page_type_key.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_box_md_x', array(
								'label' 		=> __('Medium Screen Image ','gaudium').($k+1).__(' Box Left Position','gaudium'),
								'description'	=> __('Enter value in px, % or em, e.g. 500px'),
								'section' 		=> $page_type_key.'_block_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($page_type_key.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_box_lg_x', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($page_type_key.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_box_lg_x', array(
								'label' 		=> __('Large Screen Image ','gaudium').($k+1).__(' Box Left Position','gaudium'),
								'description'	=> __('Enter value in px, % or em, e.g. 500px'),
								'section' 		=> $page_type_key.'_block_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($page_type_key.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_box_xs_y', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($page_type_key.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_box_xs_y', array(
								'label' 		=> __('XSmall Screen Image ','gaudium').($k+1).__(' Box Top Position','gaudium'),
								'description'	=> __('Enter value in px, % or em, e.g. 500px'),
								'section' 		=> $page_type_key.'_block_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($page_type_key.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_box_y', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($page_type_key.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_box_y', array(
								'label' 		=> __('Small Screen Image ','gaudium').($k+1).__(' Box Top Position','gaudium'),
								'description'	=> __('Enter value in px, % or em, e.g. 500px'),
								'section' 		=> $page_type_key.'_block_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($page_type_key.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_box_md_y', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($page_type_key.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_box_md_y', array(
								'label' 		=> __('Medium Screen Image ','gaudium').($k+1).__(' Box Top Position','gaudium'),
								'description'	=> __('Enter value in px, % or em, e.g. 500px'),
								'section' 		=> $page_type_key.'_block_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($page_type_key.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_box_lg_y', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($page_type_key.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_box_lg_y', array(
								'label' 		=> __('Large Screen Image ','gaudium').($k+1).__(' Box Top Position','gaudium'),
								'description'	=> __('Enter value in px, % or em, e.g. 500px'),
								'section' 		=> $page_type_key.'_block_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($page_type_key.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_styles_xs', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($page_type_key.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_styles_xs', array(
								'label' 		=> __('XSmall Screen Image ','gaudium').($k+1).__(' Styles','gaudium'),
								'description'	=> __('Enter styles, e.g. max-width: 50%;'),
								'section' 		=> $page_type_key.'_block_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($page_type_key.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_styles', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($page_type_key.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_styles', array(
								'label' 		=> __('Small Screen Image ','gaudium').($k+1).__(' Styles','gaudium'),
								'description'	=> __('Enter styles, e.g. max-width: 50%;'),
								'section' 		=> $page_type_key.'_block_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($page_type_key.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_styles_md', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($page_type_key.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_styles_md', array(
								'label' 		=> __('Medium Screen Image ','gaudium').($k+1).__(' Styles','gaudium'),
								'description'	=> __('Enter styles, e.g. max-width: 50%;'),
								'section' 		=> $page_type_key.'_block_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($page_type_key.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_styles_lg', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($page_type_key.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_styles_lg', array(
								'label' 		=> __('Large Screen Image ','gaudium').($k+1).__(' Styles','gaudium'),
								'description'	=> __('Enter styles, e.g. max-width: 50%;'),
								'section' 		=> $page_type_key.'_block_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($page_type_key.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_bg_position', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($page_type_key.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_bg_position', array(
								'label' 		=> __('Image ','gaudium').($k+1).__(' Background Position','gaudium'),
								'type'			=> 'select',
								'choices'		=> array(
									'0'			=> __('Select'),
									'-0'		=> __('Custom'),
									'center'	=> __('Center'),
									'left 0'	=> __('Left'),
									'right 0'	=> __('Right'),
									'bottom'	=> __('Bottom'),
									'top'		=> __('Top'),
								),
								'section' 		=> $page_type_key.'_block_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($page_type_key.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_xs_x', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($page_type_key.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_xs_x', array(
								'label' 		=> __('XSmall Screen Image ','gaudium').($k+1).__(' Left Position','gaudium'),
								'section' 		=> $page_type_key.'_block_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($page_type_key.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_x', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($page_type_key.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_x', array(
								'label' 		=> __('Image ','gaudium').($k+1).__(' Left Position','gaudium'),
								'section' 		=> $page_type_key.'_block_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($page_type_key.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_xs_y', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($page_type_key.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_xs_y', array(
								'label' 		=> __('XSmall Screen Image ','gaudium').($k+1).__(' Top Position','gaudium'),
								'description'	=> __('Enter value in px, % or em, e.g. 100px'),
								'section' 		=> $page_type_key.'_block_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($page_type_key.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_y', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($page_type_key.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_y', array(
								'label' 		=> __('Image ','gaudium').($k+1).__(' Top Position','gaudium'),
								'description'	=> __('Enter value in px, % or em, e.g. 100px'),
								'section' 		=> $page_type_key.'_block_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($page_type_key.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_repeat', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($page_type_key.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_repeat', array(
								'label' 		=> __('Image ','gaudium').($k+1).__(' Repeat','gaudium'),
								'type'			=> 'select',
								'choices' 		=> array(
									'0' 			=> __('Select'),
								    'repeat' 		=> __('Repeat'),
								    'no-repeat' 	=> __('No repeat'),
								),
								'section' 		=> $page_type_key.'_block_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($page_type_key.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_speed', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod',
							));

							$wp_customize->add_control($page_type_key.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_speed', array(
								'label' 		=> __('Image ','gaudium').($k+1).__(' speed','gaudium'),
								'description'	=> __('Speed from 0.0 (static) to 1.0 (fixed).'),
								'section' 		=> $page_type_key.'_block_'.$i,
								'priority' 		=> $priority++
							));
						}
					}
				}
			}
		}

		$wp_customize->add_section('page_selector', array(
			'title' 		=> __('Select Page','gaudium'),
			'description' 	=> sprintf(__('Select page to customize. Requires PUBLISH and RELOAD.','gaudium')),
			'priority' 		=> $base_priority+=10
		));

		$priority = 1;

		$taxonomies = gwp_get_taxonomies();

		foreach ($page_types as $key => $value) 
			{
			if (in_array(get_theme_mod('page_type_select', '0'), $taxonomies))
			{
				$args = array(
				    'taxonomy' 		=> get_theme_mod('page_type_select', '0'),
				    'hide_empty' 	=> false
				);
				$terms = get_terms($args);
				$ids = [];
				foreach($terms as $term) {
					array_push($ids, $term->term_id);
				}
				
			} else {

				$args = array(
				  'fields' 			=> 'ids',
				  'numberposts'		=> -1,
				  'post_type'		=> get_theme_mod('page_type_select', '0'),
				);
				$ids = get_posts($args);
			}

			$$key = array_fill_keys($ids, null);
			for($i = 0; $i < sizeof($ids); $i++) {
				if(in_array(get_theme_mod('page_type_select', '0'), $taxonomies)) {
					$$key[$ids[$i]] = $terms[$i]->name;
				} else {
					$$key[$ids[$i]] = get_the_title($ids[$i]);
				}
			}

			$wp_customize->add_setting('select_page', array(
				'default' 		=> _x('0','gaudium'),
				'type' 			=> 'theme_mod'
			));

			$wp_customize->add_control('select_page', array(
				'label' 		=> __('Select Page','gaudium'),
				'type'			=> 'select',
				'choices'		=> $$key,
				'section' 		=> 'page_selector',
				'priority' 		=> $priority++
			));
			
			foreach($ids as $id) {
				if((get_theme_mod('select_page') == $id &&
				   	get_theme_mod('page_type_select') == $key)) {


					if(in_array($key, $taxonomies)) {
						$page_title = get_term_by('id', $id, $key)->name;
					} else {
						$page_title = get_the_title($id);
					}
					
					$wp_customize->add_section($id.'_settings', array(
						'title' 		=> __($page_title.': Settings','gaudium'),
						'description' 	=> sprintf(__('Settings','gaudium')),
						'priority' 		=> $base_priority+=10
					));

					$priority = 1;

					$wp_customize->add_setting($id.'_page_title_bg', array(
						'default' 		=> _x('0','gaudium'),
						'type' 			=> 'theme_mod'
					));

					$wp_customize->add_control($id.'_page_title_bg', array(
						'label' 		=> __('Page Title Background','gaudium'),
						'type'			=> 'select',
						'choices'		=> array(
							'0'				=> __('Select'),
							'white'			=> __('White'),
							'light'			=> __('Light')
						),
						'section' 		=> $id.'_settings',
						'priority' 		=> $priority++
					));

					$wp_customize->add_setting($id.'_page_title_number_images', array(
						'default' 		=> _x('0','gaudium'),
						'type' 			=> 'theme_mod'
					));
					
					$wp_customize->add_control($id.'_page_title_number_images', array(
						'label' 		=> __('Number of Images','gaudium'),
						'description'	=> __('Requires PUBLISH and RELOAD.','gaudium'),
						'section' 		=> $id.'_settings',
						'priority' 		=> $priority++
					));

					for($j = 0; $j < intval(get_theme_mod($id.'_page_title_number_images')); $j++) {
						
						$wp_customize->add_setting($id.'_page_title_image_'.$j.'_xs_url', array(
							'default' 		=> '',
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, $id.'_page_title_image_'.$j.'_xs_url', array(
							'label' 		=> __('XSmall Screen (Only) Image ','gaudium').($j+1),
							'section' 		=> $id.'_settings',
							'settings'		=> $id.'_page_title_image_'.$j.'_xs_url',
							'priority' 		=> $priority++
						)));

						$wp_customize->add_setting($id.'_page_title_image_'.$j.'_url', array(
							'default' 		=> '',
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, $id.'_page_title_image_'.$j.'_url', array(
							'label' 		=> __('XSmall Screen Image ','gaudium').($j+1),
							'section' 		=> $id.'_settings',
							'settings'		=> $id.'_page_title_image_'.$j.'_url',
							'priority' 		=> $priority++
						)));

						$wp_customize->add_setting($id.'_page_title_image_'.$j.'_sm_url', array(
							'default' 		=> '',
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, $id.'_page_title_image_'.$j.'_sm_url', array(
							'label' 		=> __('Small Screen Image ','gaudium').($j+1),
							'section' 		=> $id.'_settings',
							'settings'		=> $id.'_page_title_image_'.$j.'_sm_url',
							'priority' 		=> $priority++
						)));

						$wp_customize->add_setting($id.'_page_title_image_'.$j.'_md_url', array(
							'default' 		=> '',
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, $id.'_page_title_image_'.$j.'_md_url', array(
							'label' 		=> __('Medium Screen Image ','gaudium').($j+1),
							'section' 		=> $id.'_settings',
							'settings'		=> $id.'_page_title_image_'.$j.'_md_url',
							'priority' 		=> $priority++
						)));

						$wp_customize->add_setting($id.'_page_title_image_'.$j.'_lg_url', array(
							'default' 		=> '',
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, $id.'_page_title_image_'.$j.'_lg_url', array(
							'label' 		=> __('Large Screen Image ','gaudium').($j+1),
							'section' 		=> $id.'_settings',
							'settings'		=> $id.'_page_title_image_'.$j.'_lg_url',
							'priority' 		=> $priority++
						)));

						$wp_customize->add_setting($id.'_page_title_image_'.$j.'_bg', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'

						));

						$wp_customize->add_control($id.'_page_title_image_'.$j.'_bg', array(
							'label' 		=> __('Image ','gaudium').($j+1).__(' Background Color','gaudium'),
							'description'	=> __('Background color, e.g. #e4e4e4'),
							'section' 		=> $id.'_settings',
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($id.'_page_title_image_'.$j.'_top_xs_space', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($id.'_page_title_image_'.$j.'_top_xs_space', array(
							'label' 		=> __('XSmall Screen Top','gaudium'),
							'description'	=> __('Add space to top on extra-small and larger screens, i.e. mobile devices. Select 0 to deactivate.'),
							'type'			=> 'select',
							'choices'	=> array(
								'0'		=> __('Select'),
								'-0'	=> __('Reset'),
								'1'		=> __('1'),
								'2'		=> __('2'),
								'3'		=> __('3'),
								'4'		=> __('4'),
								'5'		=> __('5'),
								'6'		=> __('6'),
								'7'		=> __('7'),
								'8'		=> __('8'),
								'9'		=> __('9'),
								'10'	=> __('10'),
								'11'	=> __('11'),
								'12'	=> __('12'),
								'13'	=> __('13'),
								'14'	=> __('14'),
								'15'	=> __('15'),
								'16'	=> __('16'),
								'17'	=> __('17'),
								'18'	=> __('18'),
								'19'	=> __('19'),
								'20'	=> __('20'),
								'21'	=> __('21'),
								'22'	=> __('22'),
								'23'	=> __('23'),
								'24'	=> __('24'),
								'25'	=> __('25'),
								'26'	=> __('26'),
								'27'	=> __('27'),
								'28'	=> __('28'),
								'29'	=> __('29'),
								'30'	=> __('30'),
								'31'	=> __('31'),
								'32'	=> __('32'),
								'33'	=> __('33'),
								'34'	=> __('34'),
								'35'	=> __('35'),
								'36'	=> __('36'),
								'37'	=> __('37'),
								'38'	=> __('38'),
								'39'	=> __('39'),
								'40'	=> __('40'),
							),
							'section' 		=> $id.'_settings',
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($id.'_page_title_image_'.$j.'_bottom_xs_space', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($id.'_page_title_image_'.$j.'_bottom_xs_space', array(
							'label' 		=> __('XSmall Screen Bottom','gaudium'),
							'description'	=> __('Add space to top on extra-small and larger screens, i.e. mobile devices. Select 0 to deactivate.'),
							'type'			=> 'select',
							'choices'	=> array(
								'0'		=> __('Select'),
								'-0'	=> __('Reset'),
								'1'		=> __('1'),
								'2'		=> __('2'),
								'3'		=> __('3'),
								'4'		=> __('4'),
								'5'		=> __('5'),
								'6'		=> __('6'),
								'7'		=> __('7'),
								'8'		=> __('8'),
								'9'		=> __('9'),
								'10'	=> __('10'),
								'11'	=> __('11'),
								'12'	=> __('12'),
								'13'	=> __('13'),
								'14'	=> __('14'),
								'15'	=> __('15'),
								'16'	=> __('16'),
								'17'	=> __('17'),
								'18'	=> __('18'),
								'19'	=> __('19'),
								'20'	=> __('20'),
								'21'	=> __('21'),
								'22'	=> __('22'),
								'23'	=> __('23'),
								'24'	=> __('24'),
								'25'	=> __('25'),
								'26'	=> __('26'),
								'27'	=> __('27'),
								'28'	=> __('28'),
								'29'	=> __('29'),
								'30'	=> __('30'),
								'31'	=> __('31'),
								'32'	=> __('32'),
								'33'	=> __('33'),
								'34'	=> __('34'),
								'35'	=> __('35'),
								'36'	=> __('36'),
								'37'	=> __('37'),
								'38'	=> __('38'),
								'39'	=> __('39'),
								'40'	=> __('40'),
							),
							'section' 		=> $id.'_settings',
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($id.'_page_title_image_'.$j.'_bg_size', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($id.'_page_title_image_'.$j.'_bg_size', array(
							'label' 		=> __('Image ','gaudium').($j+1).__(' Background Size','gaudium'),
							'type'			=> 'select',
							'choices'		=> array(
								'0'			=> __('Select'),
								'-0'		=> __('Custom'),
								'auto'		=> __('Auto'),
								'cover'		=> __('Cover'),
								'contain'	=> __('Contain'),
							),
							'section' 		=> $id.'_settings',
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($id.'_page_title_image_'.$j.'_layout', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($id.'_page_title_image_'.$j.'_layout', array(
							'label' 		=> __('Image ','gaudium').($j+1).__(' Layout','gaudium'),
							'type'			=> 'select',
							'choices'		=> array(
								'0'				=> __('Select'),
								'default'		=> __('Default'),
								'landscape'		=> __('Landscape'),
								'portrait'		=> __('Portrait'),
								'vr'		    => __('Vertical Rhythm'),
							),
							'section' 		=> $id.'_settings',
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($id.'_page_title_image_'.$j.'_xs_width', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($id.'_page_title_image_'.$j.'_xs_width', array(
							'label' 		=> __('XSmall Screen Image ','gaudium').($j+1).__(' Width','gaudium'),
							'description'	=> __('Enter value in px, % or em, e.g. 500px'),
							'section' 		=> $id.'_settings',
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($id.'_page_title_image_'.$j.'_width', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($id.'_page_title_image_'.$j.'_width', array(
							'label' 		=> __('Small Screen Image ','gaudium').($j+1).__(' Width','gaudium'),
							'description'	=> __('Enter value in px, % or em, e.g. 500px'),
							'section' 		=> $id.'_settings',
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($id.'_page_title_image_'.$j.'_md_width', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($id.'_page_title_image_'.$j.'_md_width', array(
							'label' 		=> __('Medium Screen Image ','gaudium').($j+1).__(' Width','gaudium'),
							'description'	=> __('Enter value in px, % or em, e.g. 500px'),
							'section' 		=> $id.'_settings',
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($id.'_page_title_image_'.$j.'_lg_width', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($id.'_page_title_image_'.$j.'_lg_width', array(
							'label' 		=> __('Large Screen Image ','gaudium').($j+1).__(' Width','gaudium'),
							'description'	=> __('Enter value in px, % or em, e.g. 500px'),
							'section' 		=> $id.'_settings',
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($id.'_page_title_image_'.$j.'_xs_height', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($id.'_page_title_image_'.$j.'_xs_height', array(
							'label' 		=> __('XSmall Screen Image ','gaudium').($j+1).__(' Height','gaudium'),
							'description'	=> __('Enter value in px, % or em, e.g. 500px'),
							'section' 		=> $id.'_settings',
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($id.'_page_title_image_'.$j.'_height', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($id.'_page_title_image_'.$j.'_height', array(
							'label' 		=> __('Small Screen Image ','gaudium').($j+1).__(' Height','gaudium'),
							'description'	=> __('Enter value in px, % or em, e.g. 500px'),
							'section' 		=> $id.'_settings',
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($id.'_page_title_image_'.$j.'_md_height', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($id.'_page_title_image_'.$j.'_md_height', array(
							'label' 		=> __('Medium Screen Image ','gaudium').($j+1).__(' Height','gaudium'),
							'description'	=> __('Enter value in px, % or em, e.g. 500px'),
							'section' 		=> $id.'_settings',
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($id.'_page_title_image_'.$j.'_lg_height', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($id.'_page_title_image_'.$j.'_lg_height', array(
							'label' 		=> __('Large Screen Image ','gaudium').($j+1).__(' Height','gaudium'),
							'description'	=> __('Enter value in px, % or em, e.g. 500px'),
							'section' 		=> $id.'_settings',
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($id.'_page_title_image_'.$j.'_box_xs_width', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($id.'_page_title_image_'.$j.'_box_xs_width', array(
							'label' 		=> __('XSmall Screen Image ','gaudium').($k+1).__(' Box Width','gaudium'),
							'description'	=> __('Enter value in px, % or em, e.g. 500px'),
							'section' 		=> $id.'_settings',
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($id.'_page_title_image_'.$j.'_box_width', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($id.'_page_title_image_'.$j.'_box_width', array(
							'label' 		=> __('Small Screen Image ','gaudium').($k+1).__(' Box Width','gaudium'),
							'description'	=> __('Enter value in px, % or em, e.g. 500px'),
							'section' 		=> $id.'_settings',
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($id.'_page_title_image_'.$j.'_box_md_width', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($id.'_page_title_image_'.$j.'_box_md_width', array(
							'label' 		=> __('Medium Screen Image ','gaudium').($k+1).__(' Box Width','gaudium'),
							'description'	=> __('Enter value in px, % or em, e.g. 500px'),
							'section' 		=> $id.'_settings',
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($id.'_page_title_image_'.$j.'_box_lg_width', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($id.'_page_title_image_'.$j.'_box_lg_width', array(
							'label' 		=> __('Large Screen Image ','gaudium').($k+1).__(' Box Width','gaudium'),
							'description'	=> __('Enter value in px, % or em, e.g. 500px'),
							'section' 		=> $id.'_settings',
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($id.'_page_title_image_'.$j.'_box_xs_height', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($id.'_page_title_image_'.$j.'_box_xs_height', array(
							'label' 		=> __('XSmall Screen Image ','gaudium').($k+1).__(' Box Height','gaudium'),
							'description'	=> __('Enter value in px, % or em, e.g. 500px'),
							'section' 		=> $id.'_settings',
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($id.'_page_title_image_'.$j.'_box_height', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($id.'_page_title_image_'.$j.'_box_height', array(
							'label' 		=> __('Small Screen Image ','gaudium').($k+1).__(' Box Height','gaudium'),
							'description'	=> __('Enter value in px, % or em, e.g. 500px'),
							'section' 		=> $id.'_settings',
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($id.'_page_title_image_'.$j.'_box_md_height', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($id.'_page_title_image_'.$j.'_box_md_height', array(
							'label' 		=> __('Medium Screen Image ','gaudium').($k+1).__(' Box Height','gaudium'),
							'description'	=> __('Enter value in px, % or em, e.g. 500px'),
							'section' 		=> $id.'_settings',
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($id.'_page_title_image_'.$j.'_box_lg_height', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($id.'_page_title_image_'.$j.'_box_lg_height', array(
							'label' 		=> __('Large Screen Image ','gaudium').($k+1).__(' Box Height','gaudium'),
							'description'	=> __('Enter value in px, % or em, e.g. 500px'),
							'section' 		=> $id.'_settings',
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($id.'_page_title_image_'.$j.'_box_xs_x', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($id.'_page_title_image_'.$j.'_box_xs_x', array(
							'label' 		=> __('XSmall Screen Image ','gaudium').($k+1).__(' Box Left Position','gaudium'),
							'description'	=> __('Enter value in px, % or em, e.g. 500px'),
							'section' 		=> $id.'_settings',
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($id.'_page_title_image_'.$j.'_box_x', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($id.'_page_title_image_'.$j.'_box_x', array(
							'label' 		=> __('Small Screen Image ','gaudium').($k+1).__(' Box Left Position','gaudium'),
							'description'	=> __('Enter value in px, % or em, e.g. 500px'),
							'section' 		=> $id.'_settings',
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($id.'_page_title_image_'.$j.'_box_md_x', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($id.'_page_title_image_'.$j.'_box_md_x', array(
							'label' 		=> __('Medium Screen Image ','gaudium').($k+1).__(' Box Left Position','gaudium'),
							'description'	=> __('Enter value in px, % or em, e.g. 500px'),
							'section' 		=> $id.'_settings',
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($id.'_page_title_image_'.$j.'_box_lg_x', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($id.'_page_title_image_'.$j.'_box_lg_x', array(
							'label' 		=> __('Large Screen Image ','gaudium').($k+1).__(' Box Left Position','gaudium'),
							'description'	=> __('Enter value in px, % or em, e.g. 500px'),
							'section' 		=> $id.'_settings',
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($id.'_page_title_image_'.$j.'_box_xs_y', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($id.'_page_title_image_'.$j.'_box_xs_y', array(
							'label' 		=> __('XSmall Screen Image ','gaudium').($k+1).__(' Box Top Position','gaudium'),
							'description'	=> __('Enter value in px, % or em, e.g. 500px'),
							'section' 		=> $id.'_settings',
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($id.'_page_title_image_'.$j.'_box_y', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($id.'_page_title_image_'.$j.'_box_y', array(
							'label' 		=> __('Small Screen Image ','gaudium').($k+1).__(' Box Top Position','gaudium'),
							'description'	=> __('Enter value in px, % or em, e.g. 500px'),
							'section' 		=> $id.'_settings',
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($id.'_page_title_image_'.$j.'_box_md_y', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($id.'_page_title_image_'.$j.'_box_md_y', array(
							'label' 		=> __('Medium Screen Image ','gaudium').($k+1).__(' Box Top Position','gaudium'),
							'description'	=> __('Enter value in px, % or em, e.g. 500px'),
							'section' 		=> $id.'_settings',
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($id.'_page_title_image_'.$j.'_box_lg_y', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($id.'_page_title_image_'.$j.'_box_lg_y', array(
							'label' 		=> __('Large Screen Image ','gaudium').($k+1).__(' Box Top Position','gaudium'),
							'description'	=> __('Enter value in px, % or em, e.g. 500px'),
							'section' 		=> $id.'_settings',
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($id.'_page_title_image_'.$j.'_styles_xs', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($id.'_page_title_image_'.$j.'_styles_xs', array(
							'label' 		=> __('XSmall Screen Image ','gaudium').($k+1).__(' Styles','gaudium'),
							'description'	=> __('Enter styles, e.g. max-width: 50%;'),
							'section' 		=> $id.'_settings',
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($id.'_page_title_image_'.$j.'_styles', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($id.'_page_title_image_'.$j.'_styles', array(
							'label' 		=> __('Small Screen Image ','gaudium').($k+1).__(' Styles','gaudium'),
							'description'	=> __('Enter styles, e.g. max-width: 50%;'),
							'section' 		=> $id.'_settings',
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($id.'_page_title_image_'.$j.'_styles_md', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($id.'_page_title_image_'.$j.'_styles_md', array(
							'label' 		=> __('Medium Screen Image ','gaudium').($k+1).__(' Styles','gaudium'),
							'description'	=> __('Enter styles, e.g. max-width: 50%;'),
							'section' 		=> $id.'_settings',
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($id.'_page_title_image_'.$j.'_styles_lg', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($id.'_page_title_image_'.$j.'_styles_lg', array(
							'label' 		=> __('Large Screen Image ','gaudium').($k+1).__(' Styles','gaudium'),
							'description'	=> __('Enter styles, e.g. max-width: 50%;'),
							'section' 		=> $id.'_settings',
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($id.'_page_title_image_'.$j.'_bg_position', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($id.'_page_title_image_'.$j.'_bg_position', array(
							'label' 		=> __('Image ','gaudium').($j+1).__(' Background Position','gaudium'),
							'type'			=> 'select',
							'choices'		=> array(
								'0'			=> __('Select'),
								'-0'		=> __('Custom'),
								'center'	=> __('Center'),
								'left 0'	=> __('Left'),
								'right 0'	=> __('Right'),
								'bottom'	=> __('Bottom'),
								'top'		=> __('Top'),
							),
							'section' 		=> $id.'_settings',
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($id.'_page_title_image_'.$j.'_xs_x', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($id.'_page_title_image_'.$j.'_xs_x', array(
							'label' 		=> __('XSmall Screen Image ','gaudium').($j+1).__(' Left Position','gaudium'),
							'section' 		=> $id.'_settings',
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($id.'_page_title_image_'.$j.'_x', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($id.'_page_title_image_'.$j.'_x', array(
							'label' 		=> __('Image ','gaudium').($j+1).__(' Left Position','gaudium'),
							'section' 		=> $id.'_settings',
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($id.'_page_title_image_'.$j.'_xs_y', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($id.'_page_title_image_'.$j.'_xs_y', array(
							'label' 		=> __('XSmall Screen Image ','gaudium').($j+1).__(' Top Position','gaudium'),
							'description'	=> __('Enter value in px, % or em, e.g. 100px'),
							'section' 		=> $id.'_settings',
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($id.'_page_title_image_'.$j.'_y', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($id.'_page_title_image_'.$j.'_y', array(
							'label' 		=> __('Image ','gaudium').($j+1).__(' Top Position','gaudium'),
							'description'	=> __('Enter value in px, % or em, e.g. 100px'),
							'section' 		=> $id.'_settings',
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($id.'_page_title_image_'.$j.'_repeat', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($id.'_page_title_image_'.$j.'_repeat', array(
							'label' 		=> __('Image ','gaudium').($j+1).__(' Repeat','gaudium'),
							'type'			=> 'select',
							'choices' 		=> array(
								'0' 			=> __('Select'),
							    'repeat' 		=> __('Repeat'),
							    'no-repeat' 	=> __('No repeat'),
							),
							'section' 		=> $id.'_settings',
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($id.'_page_title_image_'.$j.'_speed', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod',
						));

						$wp_customize->add_control($id.'_page_title_image_'.$j.'_speed', array(
							'label' 		=> __('Image ','gaudium').($j+1).__(' speed','gaudium'),
							'description'	=> __('Speed from 0.0 (static) to 1.0 (fixed).'),
							'section' 		=> $id.'_settings',
							'priority' 		=> $priority++
						));
					}

					if($key == 'portfolio_page') {

						$wp_customize->add_section($id.'_portfolio', array(
							'title' 		=> __($page_title.': Portfolio','gaudium'),
							'description' 	=> sprintf(__('Options for portfolio','gaudium')),
							'priority' 		=> $base_priority+=10
						));

						$priority = 1;

						$wp_customize->add_setting($id.'_portfolio_title', array(
							'default' 		=> _x('Portfolio','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($id.'_portfolio_title', array(
							'label' 		=> __('Portfolio Title','gaudium'),
							'section' 		=> $id.'_portfolio',
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($id.'_portfolio_title_position', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($id.'_portfolio_title_position', array(
							'label' 		=> __('Portfolio Title Position','gaudium'),
							'type'			=> 'select',
							'choices'		=> array(
								'0'				=> __('Select'),
								'left'			=> __('Left'),
								'center'		=> __('Center'),
								'right'			=> __('Right'),
							),
							'section' 		=> $id.'_portfolio',
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($id.'_portfolio_show_tags', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($id.'_portfolio_show_tags', array(
							'label' 		=> __('Show Project Tags','gaudium'),
							'type'			=> 'select',
							'choices'		=> array(
								'0'			=> __('Select'),
								'-0'		=> __('Hide'),
								'1'			=> __('Show'),
							),
							'section' 		=> $id.'_portfolio',
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($id.'_portfolio_tags_position', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($id.'_portfolio_tags_position', array(
							'label' 		=> __('Project Tags Position','gaudium'),
							'type'			=> 'select',
							'choices'		=> array(
								'0'				=> __('Select'),
								'left'			=> __('Left'),
								'center'		=> __('Center'),
								'right'			=> __('Right'),
							),
							'section' 		=> $id.'_portfolio',
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($id.'_portfolio_cols', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($id.'_portfolio_cols', array(
							'label' 		=> __('Column Layout','gaudium'),
							'description'	=> __('Select a layout option, e.g. 4 for 4 column layout, etc.'),
							'type'			=> 'select',
							'choices'		=> array(
								'0'			=> __('Select'),
								'1'			=> __('1'),
								'2'			=> __('2'),
								'3'			=> __('3'),
								'4'			=> __('4'),
							),
							'section' 		=> $id.'_portfolio',
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($id.'_portfolio_gutters', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($id.'_portfolio_gutters', array(
							'label' 		=> __('Gutters','gaudium'),
							'type'			=> 'select',
							'choices'		=> array(
								'0'		=> __('Select'),
								'-0' 	=> __('Gutters'),
							    '1'    	=> __('No gutters'),
							),
							'section' 		=> $id.'_portfolio',
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($id.'_portfolio_pagination', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($id.'_portfolio_pagination', array(
							'label' 		=> __('Load more','gaudium'),
							'type'			=> 'select',
							'choices'		=> array(
								'0'						=> __('Select'),
								'-0'					=> __('No pagination'),
								'load-more'				=> __('Load More Button'),
								'default-pager'			=> __('Default Pager'),
								'aligned-pager'			=> __('Aligned Pager'),
							),
							'section' 		=> $id.'_portfolio',
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($id.'_portfolio_container', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($id.'_portfolio_container', array(
							'label' 		=> __('Container','gaudium'),
							'type'			=> 'select',
							'choices'		=> array(
								'0'				=> __('Select'),
								'boxed'			=> __('Boxed'),
								'fluid'			=> __('Fluid'),
							),
							'section' 		=> $id.'_portfolio',
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($id.'_portfolio_layout', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($id.'_portfolio_layout', array(
							'label' 		=> __('Thumbnail Layout','gaudium'),
							'type'			=> 'select',
							'choices'		=> array(
								'0'				=> __('Select'),
								'default'		=> __('Default'),
								'landscape'		=> __('Landscape'),
								'portrait'		=> __('Portrait'),
								'masonry'		=> __('Masonry'),
								'mosaic'		=> __('Mosaic'),
							),
							'section' 		=> $id.'_portfolio',
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($id.'_portfolio_load', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($id.'_portfolio_load', array(
							'label' 		=> __('Number of items to load','gaudium'),
							'section' 		=> $id.'_portfolio',
							'priority' 		=> $priority++
						));
					}
					elseif($key == 'posts_page') {

						$wp_customize->add_section($id.'_blog', array(
							'title' 		=> __($page_title.': Blog','gaudium'),
							'description' 	=> sprintf(__('Options for the blog','gaudium')),
							'priority' 		=> $base_priority+=10
						));

						$priority = 1;

						$wp_customize->add_setting($id.'_blog_pagination', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($id.'_blog_pagination', array(
							'label' 		=> __('Blog pagination','gaudium'),
							'type'			=> 'select',
							'choices'		=> array(
								'0'						=> __('Select'),
								'-0'					=> __('No pagination'),
								'load-more'				=> __('Load More Button'),
								'default-pager'			=> __('Default Pager'),
								'aligned-pager'			=> __('Aligned Pager'),
								'pagination-sm'			=> __('Small Pagination'),
								'pagination-md'			=> __('Default Pagination'),
								'pagination-lg'			=> __('Large Pagination'),
							),
							'section' 		=> $id.'_blog',
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($id.'_blog_container', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($id.'_blog_container', array(
							'label' 		=> __('Container','gaudium'),
							'type'			=> 'select',
							'choices'		=> array(
								'0'				=> __('Select'),
								'boxed'			=> __('Boxed'),
								'fluid'			=> __('Fluid'),
							),
							'section' 		=> $id.'_blog',
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($id.'_blog_layout', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($id.'_blog_layout', array(
							'label' 		=> __('Blog Layout','gaudium'),
							'type'			=> 'select',
							'choices'		=> array(
								'0'						=> __('Select'),
								'default'				=> __('Default'),
								'landscape'				=> __('Landscape'),
								'portrait'				=> __('Portrait'),
								'masonry'				=> __('Masonry'),
								'mosaic'				=> __('Mosaic'),
							),
							'section' 		=> $id.'_blog',
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($id.'_blog_cols', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($id.'_blog_cols', array(
							'label' 		=> __('Masonry Column Layout','gaudium'),
							'description'	=> __('Select a layout option, e.g. 4 for 4 column layout, etc.'),
							'type'			=> 'select',
							'choices'		=> array(
								'0'			=> __('Select'),
								'1'			=> __('1'),
								'2'			=> __('2'),
								'3'			=> __('3'),
								'4'			=> __('4'),
							),
							'section' 		=> $id.'_blog',
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($id.'_blog_sidebar', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($id.'_blog_sidebar', array(
							'label' 		=> __('Masonry Sidebar','gaudium'),
							'description'	=> __('The sidebar is hidden in mosaic, optional in masonry and shown in other layouts.'),
							'type'			=> 'select',
							'choices'		=> array(
								'0'				=> __('Select'),
								'-0'			=> __('Hide'),
								'1'				=> __('Show'),
							),
							'section' 		=> $id.'_blog',
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($id.'_blog_load', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($id.'_blog_load', array(
							'label' 		=> __('Number of posts to load','gaudium'),
							'section' 		=> $id.'_blog',
							'priority' 		=> $priority++
						));
					}
	
					$wp_customize->add_panel($id.'_stage_panel',
					   	array(
					      	'title' 		=> __($page_title.': Stage','gaudium'),
					      	'description' 	=> esc_html__( 'Customize the stage slides.' ),
					      	'priority' 		=> $base_priority+=10
					   	)
					);

					$section_priority = 1;

					$wp_customize->add_section($id.'_stage_settings', array(
						'title' 		=> __('Stage Settings','gaudium'),
						'description' 	=> sprintf(__('Options for stage','gaudium')),
						'panel'			=> $id.'_stage_panel',
						'priority' 		=> $section_priority++
					));

					$priority = 1;

					$wp_customize->add_setting($id.'_stage_number_slides', array(
						'default' 		=> _x('0','gaudium'),
						'type' 			=> 'theme_mod'
					));

					$wp_customize->add_control($id.'_stage_number_slides', array(
						'label' 		=> __('Number of Slides','gaudium'),
						'description'	=> __('Requires PUBLISH and RELOAD.','gaudium'),
						'section' 		=> $id.'_stage_settings',
						'priority' 		=> $priority++
					));
					
					for($i = 0; $i < intval(get_theme_mod($id.'_stage_number_slides')); $i++) {
						
						$wp_customize->add_section($id.'_stage_slide_'.$i, array(
							'title' 		=> __('Stage Slide ','gaudium').($i+1).__('  Settings','gaudium'),
							'description' 	=> sprintf(__('Options for this slide','gaudium')),
							'panel'			=> $id.'_stage_panel',
							'priority' 		=> $section_priority++
						));

						$priority = 1;

						$wp_customize->add_setting($id.'_stage_slide_'.$i.'_bg', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($id.'_stage_slide_'.$i.'_bg', array(
							'label' 		=> __('Background Color','gaudium'),
							'section' 		=> $id.'_stage_slide_'.$i,
							'priority' 		=> $priority++
						));


						$wp_customize->add_setting($id.'_stage_slide_'.$i.'_gutters', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($id.'_stage_slide_'.$i.'_gutters', array(
							'label' 		=> __('Gutters','gaudium'),
							'type'			=> 'select',
							'choices' 		=> array(
								'0'		=> __('Select'),
								'-0' 	=> __('Gutters'),
							    '1'    	=> __('No gutters'),
							),
							'section' 		=> $id.'_stage_slide_'.$i,
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($id.'_stage_slide_'.$i.'_number_images', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));
						
						$wp_customize->add_control($id.'_stage_slide_'.$i.'_number_images', array(
							'label' 		=> __('Number of Images','gaudium'),
							'description'	=> __('Requires PUBLISH and RELOAD.','gaudium'),
							'section' 		=> $id.'_stage_slide_'.$i,
							'priority' 		=> $priority++
						));

						for($j = 0; $j < intval(get_theme_mod($id.'_stage_slide_'.$i.'_number_images')); $j++) {

							$wp_customize->add_setting($id.'_stage_slide_'.$i.'_image_'.$j.'_xs_url', array(
								'default' 		=> '',
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, $id.'_stage_slide_'.$i.'_image_'.$j.'_xs_url', array(
								'label' 		=> __('XSmall Screen (Only) Image ','gaudium').($j+1),
								'section' 		=> $id.'_stage_slide_'.$i,
								'settings'		=> $id.'_stage_slide_'.$i.'_image_'.$j.'_xs_url',
								'priority' 		=> $priority++
							)));

							$wp_customize->add_setting('block_'.$i.'_image_'.$j.'_url', array(
								'default' 		=> '',
								'type' 			=> 'theme_mod'
							));
							$wp_customize->add_setting($id.'_stage_slide_'.$i.'_image_'.$j.'_url', array(
								'default' 		=> '',
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, $id.'_stage_slide_'.$i.'_image_'.$j.'_url', array(
								'label' 		=> __('XSmall Screen Image ','gaudium').($k+1),
								'section' 		=> $id.'_stage_slide_'.$i,
								'settings'		=> $id.'_stage_slide_'.$i.'_image_'.$j.'_url',
								'priority' 		=> $priority++
							)));

							$wp_customize->add_setting($id.'_stage_slide_'.$i.'_image_'.$j.'_sm_url', array(
								'default' 		=> '',
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, $id.'_stage_slide_'.$i.'_image_'.$j.'_sm_url', array(
								'label' 		=> __('Small Screen Image ','gaudium').($k+1),
								'section' 		=> $id.'_stage_slide_'.$i,
								'settings'		=> $id.'_stage_slide_'.$i.'_image_'.$j.'_sm_url',
								'priority' 		=> $priority++
							)));

							$wp_customize->add_setting($id.'_stage_slide_'.$i.'_image_'.$j.'_md_url', array(
								'default' 		=> '',
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, $id.'_stage_slide_'.$i.'_image_'.$j.'_md_url', array(
								'label' 		=> __('Medium Screen Image ','gaudium').($k+1),
								'section' 		=> $id.'_stage_slide_'.$i,
								'settings'		=> $id.'_stage_slide_'.$i.'_image_'.$j.'_md_url',
								'priority' 		=> $priority++
							)));

							$wp_customize->add_setting($id.'_stage_slide_'.$i.'_image_'.$j.'_lg_url', array(
								'default' 		=> '',
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, $id.'_stage_slide_'.$i.'_image_'.$j.'_lg_url', array(
								'label' 		=> __('Large Screen Image ','gaudium').($k+1),
								'section' 		=> $id.'_stage_slide_'.$i,
								'settings'		=> $id.'_stage_slide_'.$i.'_image_'.$j.'_lg_url',
								'priority' 		=> $priority++
							)));

							$wp_customize->add_control($id.'_stage_slide_'.$i.'_image_'.$j.'_bg', array(
								'label' 		=> __('Image ','gaudium').($j+1).__(' Background Color','gaudium'),
								'description'	=> __('Background color, e.g. #e4e4e4'),
								'section' 		=> $id.'_stage_slide_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($id.'_stage_slide_'.$i.'_image_'.$j.'_bg_size', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($id.'_stage_slide_'.$i.'_image_'.$j.'_bg_size', array(
								'label' 		=> __('Image ','gaudium').($j+1).__(' Background Size','gaudium'),
								'type'			=> 'select',
								'choices'		=> array(
									'0'			=> __('Select'),
									'-0'		=> __('Custom'),
									'auto'		=> __('Auto'),
									'cover'		=> __('Cover'),
									'contain'	=> __('Contain'),
								),
								'section' 		=> $id.'_stage_slide_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($id.'_stage_slide_'.$i.'_image_'.$j.'_layout', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($id.'_stage_slide_'.$i.'_image_'.$j.'_layout', array(
								'label' 		=> __('Image ','gaudium').($j+1).__(' Layout','gaudium'),
								'type'			=> 'select',
								'choices'		=> array(
									'0'				=> __('Select'),
									'default'		=> __('Default'),
									'landscape'		=> __('Landscape'),
									'portrait'		=> __('Portrait'),
									'vr'		    => __('Vertical Rhythm'),
								),
								'section' 		=> $id.'_stage_slide_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($id.'_stage_slide_'.$i.'_image_'.$j.'_xs_width', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($id.'_stage_slide_'.$i.'_image_'.$j.'_xs_width', array(
								'label' 		=> __('XSmall Screen Image ','gaudium').($j+1).__(' Width','gaudium'),
								'description'	=> __('Enter value in px, % or em, e.g. 500px'),
								'section' 		=> $id.'_stage_slide_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($id.'_stage_slide_'.$i.'_image_'.$j.'_width', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($id.'_stage_slide_'.$i.'_image_'.$j.'_width', array(
								'label' 		=> __('Small Screen Image ','gaudium').($j+1).__(' Width','gaudium'),
								'description'	=> __('Enter value in px, % or em, e.g. 500px'),
								'section' 		=> $id.'_stage_slide_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($id.'_stage_slide_'.$i.'_image_'.$j.'_md_width', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($id.'_stage_slide_'.$i.'_image_'.$j.'_md_width', array(
								'label' 		=> __('Medium Screen Image ','gaudium').($j+1).__(' Width','gaudium'),
								'description'	=> __('Enter value in px, % or em, e.g. 500px'),
								'section' 		=> $id.'_stage_slide_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($id.'_stage_slide_'.$i.'_image_'.$j.'_lg_width', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($id.'_stage_slide_'.$i.'_image_'.$j.'_lg_width', array(
								'label' 		=> __('Large Screen Image ','gaudium').($j+1).__(' Width','gaudium'),
								'description'	=> __('Enter value in px, % or em, e.g. 500px'),
								'section' 		=> $id.'_stage_slide_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($id.'_stage_slide_'.$i.'_image_'.$j.'_xs_height', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($id.'_stage_slide_'.$i.'_image_'.$j.'_xs_height', array(
								'label' 		=> __('XSmall Screen Image ','gaudium').($j+1).__(' Height','gaudium'),
								'description'	=> __('Enter value in px, % or em, e.g. 500px'),
								'section' 		=> $id.'_stage_slide_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($id.'_stage_slide_'.$i.'_image_'.$j.'_height', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($id.'_stage_slide_'.$i.'_image_'.$j.'_height', array(
								'label' 		=> __('Small Screen Image ','gaudium').($j+1).__(' Height','gaudium'),
								'description'	=> __('Enter value in px, % or em, e.g. 500px'),
								'section' 		=> $id.'_stage_slide_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($id.'_stage_slide_'.$i.'_image_'.$j.'_md_height', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($id.'_stage_slide_'.$i.'_image_'.$j.'_md_height', array(
								'label' 		=> __('Medium Screen Image ','gaudium').($j+1).__(' Height','gaudium'),
								'description'	=> __('Enter value in px, % or em, e.g. 500px'),
								'section' 		=> $id.'_stage_slide_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($id.'_stage_slide_'.$i.'_image_'.$j.'_lg_height', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($id.'_stage_slide_'.$i.'_image_'.$j.'_lg_height', array(
								'label' 		=> __('Large Screen Image ','gaudium').($j+1).__(' Height','gaudium'),
								'description'	=> __('Enter value in px, % or em, e.g. 500px'),
								'section' 		=> $id.'_stage_slide_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($id.'_stage_slide_'.$i.'_image_'.$j.'_box_xs_width', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($id.'_stage_slide_'.$i.'_image_'.$j.'_box_xs_width', array(
								'label' 		=> __('XSmall Screen Image ','gaudium').($j+1).__(' Box Width','gaudium'),
								'description'	=> __('Enter value in px, % or em, e.g. 500px'),
								'section' 		=> $id.'_stage_slide_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($id.'_stage_slide_'.$i.'_image_'.$j.'_box_width', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($id.'_stage_slide_'.$i.'_image_'.$j.'_box_width', array(
								'label' 		=> __('Small Screen Image ','gaudium').($j+1).__(' Box Width','gaudium'),
								'description'	=> __('Enter value in px, % or em, e.g. 500px'),
								'section' 		=> $id.'_stage_slide_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($id.'_stage_slide_'.$i.'_image_'.$j.'_box_md_width', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($id.'_stage_slide_'.$i.'_image_'.$j.'_box_md_width', array(
								'label' 		=> __('Medium Screen Image ','gaudium').($j+1).__(' Box Width','gaudium'),
								'description'	=> __('Enter value in px, % or em, e.g. 500px'),
								'section' 		=> $id.'_stage_slide_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($id.'_stage_slide_'.$i.'_image_'.$j.'_box_lg_width', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($id.'_stage_slide_'.$i.'_image_'.$j.'_box_lg_width', array(
								'label' 		=> __('Large Screen Image ','gaudium').($j+1).__(' Box Width','gaudium'),
								'description'	=> __('Enter value in px, % or em, e.g. 500px'),
								'section' 		=> $id.'_stage_slide_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($id.'_stage_slide_'.$i.'_image_'.$j.'_box_xs_height', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($id.'_stage_slide_'.$i.'_image_'.$j.'_box_xs_height', array(
								'label' 		=> __('XSmall Screen Image ','gaudium').($j+1).__(' Box Height','gaudium'),
								'description'	=> __('Enter value in px, % or em, e.g. 500px'),
								'section' 		=> $id.'_stage_slide_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($id.'_stage_slide_'.$i.'_image_'.$j.'_box_height', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($id.'_stage_slide_'.$i.'_image_'.$j.'_box_height', array(
								'label' 		=> __('Image ','gaudium').($j+1).__(' Box Height','gaudium'),
								'description'	=> __('Enter value in px, % or em, e.g. 500px'),
								'section' 		=> $id.'_stage_slide_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($id.'_stage_slide_'.$i.'_image_'.$j.'_box_md_height', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($id.'_stage_slide_'.$i.'_image_'.$j.'_box_md_height', array(
								'label' 		=> __('Medium Screen Image ','gaudium').($j+1).__(' Box Height','gaudium'),
								'description'	=> __('Enter value in px, % or em, e.g. 500px'),
								'section' 		=> $id.'_stage_slide_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($id.'_stage_slide_'.$i.'_image_'.$j.'_box_lg_height', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($id.'_stage_slide_'.$i.'_image_'.$j.'_box_lg_height', array(
								'label' 		=> __('Large Screen Image ','gaudium').($j+1).__(' Box Height','gaudium'),
								'description'	=> __('Enter value in px, % or em, e.g. 500px'),
								'section' 		=> $id.'_stage_slide_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($id.'_stage_slide_'.$i.'_image_'.$j.'_box_xs_x', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($id.'_stage_slide_'.$i.'_image_'.$j.'_box_xs_x', array(
								'label' 		=> __('XSmall Screen Image ','gaudium').($j+1).__(' Box Left Position','gaudium'),
								'description'	=> __('Enter value in px, % or em, e.g. 500px'),
								'section' 		=> $id.'_stage_slide_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($id.'_stage_slide_'.$i.'_image_'.$j.'_box_x', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($id.'_stage_slide_'.$i.'_image_'.$j.'_box_x', array(
								'label' 		=> __('Small Screen Image ','gaudium').($j+1).__(' Box Left Position','gaudium'),
								'description'	=> __('Enter value in px, % or em, e.g. 500px'),
								'section' 		=> $id.'_stage_slide_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($id.'_stage_slide_'.$i.'_image_'.$j.'_box_md_x', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($id.'_stage_slide_'.$i.'_image_'.$j.'_box_md_x', array(
								'label' 		=> __('Medium Screen Image ','gaudium').($j+1).__(' Box Left Position','gaudium'),
								'description'	=> __('Enter value in px, % or em, e.g. 500px'),
								'section' 		=> $id.'_stage_slide_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($id.'_stage_slide_'.$i.'_image_'.$j.'_box_lg_x', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($id.'_stage_slide_'.$i.'_image_'.$j.'_box_lg_x', array(
								'label' 		=> __('Large Screen Image ','gaudium').($j+1).__(' Box Left Position','gaudium'),
								'description'	=> __('Enter value in px, % or em, e.g. 500px'),
								'section' 		=> $id.'_stage_slide_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($id.'_stage_slide_'.$i.'_image_'.$j.'_box_xs_y', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($id.'_stage_slide_'.$i.'_image_'.$j.'_box_xs_y', array(
								'label' 		=> __('XSmall Screen Image ','gaudium').($j+1).__(' Box Top Position','gaudium'),
								'description'	=> __('Enter value in px, % or em, e.g. 500px'),
								'section' 		=> $id.'_stage_slide_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($id.'_stage_slide_'.$i.'_image_'.$j.'_box_y', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($id.'_stage_slide_'.$i.'_image_'.$j.'_box_y', array(
								'label' 		=> __('Small Screen Image ','gaudium').($j+1).__(' Box Top Position','gaudium'),
								'description'	=> __('Enter value in px, % or em, e.g. 500px'),
								'section' 		=> $id.'_stage_slide_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($id.'_stage_slide_'.$i.'_image_'.$j.'_box_md_y', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($id.'_stage_slide_'.$i.'_image_'.$j.'_box_md_y', array(
								'label' 		=> __('Medium Screen Image ','gaudium').($j+1).__(' Box Top Position','gaudium'),
								'description'	=> __('Enter value in px, % or em, e.g. 500px'),
								'section' 		=> $id.'_stage_slide_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($id.'_stage_slide_'.$i.'_image_'.$j.'_box_lg_y', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($id.'_stage_slide_'.$i.'_image_'.$j.'_box_lg_y', array(
								'label' 		=> __('Large Screen Image ','gaudium').($j+1).__(' Box Top Position','gaudium'),
								'description'	=> __('Enter value in px, % or em, e.g. 500px'),
								'section' 		=> $id.'_stage_slide_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($id.'_stage_slide_'.$i.'_image_'.$j.'_styles_xs', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($id.'_stage_slide_'.$i.'_image_'.$j.'_styles_xs', array(
								'label' 		=> __('XSmall Screen Image ','gaudium').($j+1).__(' Styles','gaudium'),
								'description'	=> __('Enter styles, e.g. max-width: 50%;'),
								'section' 		=> $id.'_stage_slide_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($id.'_stage_slide_'.$i.'_image_'.$j.'_styles', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($id.'_stage_slide_'.$i.'_image_'.$j.'_styles', array(
								'label' 		=> __('Small Screen Image ','gaudium').($j+1).__(' Styles','gaudium'),
								'description'	=> __('Enter styles, e.g. max-width: 50%;'),
								'section' 		=> $id.'_stage_slide_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($id.'_stage_slide_'.$i.'_image_'.$j.'_styles_md', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($id.'_stage_slide_'.$i.'_image_'.$j.'_styles_md', array(
								'label' 		=> __('Medium Screen Image ','gaudium').($j+1).__(' Styles','gaudium'),
								'description'	=> __('Enter styles, e.g. max-width: 50%;'),
								'section' 		=> $id.'_stage_slide_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($id.'_stage_slide_'.$i.'_image_'.$j.'_styles_lg', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($id.'_stage_slide_'.$i.'_image_'.$j.'_styles_lg', array(
								'label' 		=> __('Large Screen Image ','gaudium').($j+1).__(' Styles','gaudium'),
								'description'	=> __('Enter styles, e.g. max-width: 50%;'),
								'section' 		=> $id.'_stage_slide_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($id.'_stage_slide_'.$i.'_image_'.$j.'_bg_position', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($id.'_stage_slide_'.$i.'_image_'.$j.'_bg_position', array(
								'label' 		=> __('Image ','gaudium').($j+1).__(' Background Position','gaudium'),
								'type'			=> 'select',
								'choices'		=> array(
									'0'			=> __('Select'),
									'-0'		=> __('Custom'),
									'center'	=> __('Center'),
									'left 0'	=> __('Left'),
									'right 0'	=> __('Right'),
									'bottom'	=> __('Bottom'),
									'top'		=> __('Top'),
								),
								'section' 		=> $id.'_stage_slide_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($id.'_stage_slide_'.$i.'_image_'.$j.'_xs_x', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($id.'_stage_slide_'.$i.'_image_'.$j.'_xs_x', array(
								'label' 		=> __('XSmall Screen Image ','gaudium').($j+1).__(' Left Position','gaudium'),
								'section' 		=> $id.'_stage_slide_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($id.'_stage_slide_'.$i.'_image_'.$j.'_x', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($id.'_stage_slide_'.$i.'_image_'.$j.'_x', array(
								'label' 		=> __('Image ','gaudium').($j+1).__(' Left Position','gaudium'),
								'section' 		=> $id.'_stage_slide_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($id.'_stage_slide_'.$i.'_image_'.$j.'_xs_y', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($id.'_stage_slide_'.$i.'_image_'.$j.'_xs_y', array(
								'label' 		=> __('XSmall Screen Image ','gaudium').($j+1).__(' Top Position','gaudium'),
								'description'	=> __('Enter value in px, % or em, e.g. 100px'),
								'section' 		=> $id.'_stage_slide_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($id.'_stage_slide_'.$i.'_image_'.$j.'_y', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($id.'_stage_slide_'.$i.'_image_'.$j.'_y', array(
								'label' 		=> __('Image ','gaudium').($j+1).__(' Top Position','gaudium'),
								'description'	=> __('Enter value in px, % or em, e.g. 100px'),
								'section' 		=> $id.'_stage_slide_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($id.'_stage_slide_'.$i.'_image_'.$j.'_repeat', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($id.'_stage_slide_'.$i.'_image_'.$j.'_repeat', array(
								'label' 		=> __('Image ','gaudium').($j+1).__(' Repeat','gaudium'),
								'type'			=> 'select',
								'choices' 		=> array(
									'0' 			=> __('Select'),
								    'repeat' 		=> __('Repeat'),
								    'no-repeat' 	=> __('No repeat'),
								),
								'section' 		=> $id.'_stage_slide_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($id.'_stage_slide_'.$i.'_image_'.$j.'_speed', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod',
							));

							$wp_customize->add_control($id.'_stage_slide_'.$i.'_image_'.$j.'_speed', array(
								'label' 		=> __('Image ','gaudium').($j+1).__(' speed','gaudium'),
								'description'	=> __('Speed from 0.0 (static) to 1.0 (fixed).'),
								'section' 		=> $id.'_stage_slide_'.$i,
								'priority' 		=> $priority++
							));
						}

						$wp_customize->add_setting($id.'_stage_slide_'.$i.'_content_number', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($id.'_stage_slide_'.$i.'_content_number', array(
							'label' 		=> __('Number of Content Blocks.','gaudium'),
							'description'	=> __('Requires PUBLISH and RELOAD.','gaudium'),
							'section' 		=> $id.'_stage_slide_'.$i,
							'priority' 		=> $priority++
						));

						for($j = 0; $j < intval(get_theme_mod($id.'_stage_slide_'.$i.'_content_number')); $j++) {

							$wp_customize->add_setting($id.'_stage_slide_'.$i.'_content_'.$j.'_cols', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($id.'_stage_slide_'.$i.'_content_'.$j.'_cols', array(
								'label' 		=> __('Content Columns','gaudium'),
								'description'	=> __('Number of columns for this content block, e.g. 3 for a 4-column layout, 4 for a 3-column layout or 6 a 2-column layout.'),
								'type'			=> 'select',
								'choices'		=> array(
									'0'		=> __('Select'),
									'1'		=> __('1'),
									'2'		=> __('2'),
									'3'		=> __('3'),
									'4'		=> __('4'),
									'5'		=> __('5'),
									'6'		=> __('6'),
									'7'		=> __('7'),
									'8'		=> __('8'),
									'9'		=> __('9'),
									'10'	=> __('10'),
									'11'	=> __('11'),
									'12'	=> __('12'),
								),
								'section' 		=> $id.'_stage_slide_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($id.'_stage_slide_'.$i.'_content_'.$j.'_cols_push', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($id.'_stage_slide_'.$i.'_content_'.$j.'_cols_push', array(
								'label' 		=> __('Push Content','gaudium'),
								'description'	=> __('Number of columns to shift the content block to the right. Select 0 to deactivate.'),
								'type'			=> 'select',
								'choices'		=> array(
									'0'		=> __('Select'),
									'-0'	=> __('Reset'),
									'1'		=> __('1'),
									'2'		=> __('2'),
									'3'		=> __('3'),
									'4'		=> __('4'),
									'5'		=> __('5'),
									'6'		=> __('6'),
									'7'		=> __('7'),
									'8'		=> __('8'),
									'9'		=> __('9'),
									'10'	=> __('10'),
									'11'	=> __('11'),
									'12'	=> __('12'),
								),
								'section' 		=> $id.'_stage_slide_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($id.'_stage_slide_'.$i.'_content_'.$j.'_cols_pull', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($id.'_stage_slide_'.$i.'_content_'.$j.'_cols_pull', array(
								'label' 		=> __('Pull Content','gaudium'),
								'description'	=> __('Number of columns to shift the content block to the left. Select 0 to deactivate.'),
								'type'			=> 'select',
								'choices'		=> array(
									'0'		=> __('Select'),
									'-0'	=> __('Reset'),
									'1'		=> __('1'),
									'2'		=> __('2'),
									'3'		=> __('3'),
									'4'		=> __('4'),
									'5'		=> __('5'),
									'6'		=> __('6'),
									'7'		=> __('7'),
									'8'		=> __('8'),
									'9'		=> __('9'),
									'10'	=> __('10'),
									'11'	=> __('11'),
									'12'	=> __('12'),
								),
								'section' 		=> $id.'_stage_slide_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($id.'_stage_slide_'.$i.'_content_'.$j.'_top_xs_space', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($id.'_stage_slide_'.$i.'_content_'.$j.'_top_xs_space', array(
								'label' 		=> __('XSmall Screen Top','gaudium'),
								'description'	=> __('Add space to top on extra-small and larger screens, i.e. mobile devices. Select 0 to deactivate.'),
								'type'			=> 'select',
								'choices'	=> array(
									'0'		=> __('Select'),
									'-0'	=> __('Reset'),
									'1'		=> __('1'),
									'2'		=> __('2'),
									'3'		=> __('3'),
									'4'		=> __('4'),
									'5'		=> __('5'),
									'6'		=> __('6'),
									'7'		=> __('7'),
									'8'		=> __('8'),
									'9'		=> __('9'),
									'10'	=> __('10'),
									'11'	=> __('11'),
									'12'	=> __('12'),
									'13'	=> __('13'),
									'14'	=> __('14'),
									'15'	=> __('15'),
									'16'	=> __('16'),
									'17'	=> __('17'),
									'18'	=> __('18'),
									'19'	=> __('19'),
									'20'	=> __('20'),
									'21'	=> __('21'),
									'22'	=> __('22'),
									'23'	=> __('23'),
									'24'	=> __('24'),
									'25'	=> __('25'),
									'26'	=> __('26'),
									'27'	=> __('27'),
									'28'	=> __('28'),
									'29'	=> __('29'),
									'30'	=> __('30'),
									'31'	=> __('31'),
									'32'	=> __('32'),
									'33'	=> __('33'),
									'34'	=> __('34'),
									'35'	=> __('35'),
									'36'	=> __('36'),
									'37'	=> __('37'),
									'38'	=> __('38'),
									'39'	=> __('39'),
									'40'	=> __('40'),
								),
								'section' 		=> $id.'_stage_slide_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($id.'_stage_slide_'.$i.'_content_'.$j.'_top_sm_space', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($id.'_stage_slide_'.$i.'_content_'.$j.'_top_sm_space', array(
								'label' 		=> __('Small Screen Top','gaudium'),
								'description'	=> __('Add space to top on small and larger screens.'),
								'type'			=> 'select',
								'choices'	=> array(
									'0'		=> __('Select'),
									'-0'	=> __('Reset'),
									'1'		=> __('1'),
									'2'		=> __('2'),
									'3'		=> __('3'),
									'4'		=> __('4'),
									'5'		=> __('5'),
									'6'		=> __('6'),
									'7'		=> __('7'),
									'8'		=> __('8'),
									'9'		=> __('9'),
									'10'	=> __('10'),
									'11'	=> __('11'),
									'12'	=> __('12'),
									'13'	=> __('13'),
									'14'	=> __('14'),
									'15'	=> __('15'),
									'16'	=> __('16'),
									'17'	=> __('17'),
									'18'	=> __('18'),
									'19'	=> __('19'),
									'20'	=> __('20'),
									'21'	=> __('21'),
									'22'	=> __('22'),
									'23'	=> __('23'),
									'24'	=> __('24'),
									'25'	=> __('25'),
									'26'	=> __('26'),
									'27'	=> __('27'),
									'28'	=> __('28'),
									'29'	=> __('29'),
									'30'	=> __('30'),
									'31'	=> __('31'),
									'32'	=> __('32'),
									'33'	=> __('33'),
									'34'	=> __('34'),
									'35'	=> __('35'),
									'36'	=> __('36'),
									'37'	=> __('37'),
									'38'	=> __('38'),
									'39'	=> __('39'),
									'40'	=> __('40'),
								),
								'section' 		=> $id.'_stage_slide_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($id.'_stage_slide_'.$i.'_content_'.$j.'_top_md_space', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($id.'_stage_slide_'.$i.'_content_'.$j.'_top_md_space', array(
								'label' 		=> __('Medium Screen Top','gaudium'),
								'description'	=> __('Add space to top on medium and larger screens.'),
								'type'			=> 'select',
								'choices'	=> array(
									'0'		=> __('Select'),
									'-0'	=> __('Reset'),
									'1'		=> __('1'),
									'2'		=> __('2'),
									'3'		=> __('3'),
									'4'		=> __('4'),
									'5'		=> __('5'),
									'6'		=> __('6'),
									'7'		=> __('7'),
									'8'		=> __('8'),
									'9'		=> __('9'),
									'10'	=> __('10'),
									'11'	=> __('11'),
									'12'	=> __('12'),
									'13'	=> __('13'),
									'14'	=> __('14'),
									'15'	=> __('15'),
									'16'	=> __('16'),
									'17'	=> __('17'),
									'18'	=> __('18'),
									'19'	=> __('19'),
									'20'	=> __('20'),
									'21'	=> __('21'),
									'22'	=> __('22'),
									'23'	=> __('23'),
									'24'	=> __('24'),
									'25'	=> __('25'),
									'26'	=> __('26'),
									'27'	=> __('27'),
									'28'	=> __('28'),
									'29'	=> __('29'),
									'30'	=> __('30'),
									'31'	=> __('31'),
									'32'	=> __('32'),
									'33'	=> __('33'),
									'34'	=> __('34'),
									'35'	=> __('35'),
									'36'	=> __('36'),
									'37'	=> __('37'),
									'38'	=> __('38'),
									'39'	=> __('39'),
									'40'	=> __('40'),
								),
								'section' 		=> $id.'_stage_slide_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($id.'_stage_slide_'.$i.'_content_'.$j.'_top_lg_space', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($id.'_stage_slide_'.$i.'_content_'.$j.'_top_lg_space', array(
								'label' 		=> __('Large Screen Top','gaudium'),
								'description'	=> __('Add space to top on large screens.'),
								'type'			=> 'select',
								'choices'	=> array(
									'0'		=> __('Select'),
									'-0'	=> __('Reset'),
									'1'		=> __('1'),
									'2'		=> __('2'),
									'3'		=> __('3'),
									'4'		=> __('4'),
									'5'		=> __('5'),
									'6'		=> __('6'),
									'7'		=> __('7'),
									'8'		=> __('8'),
									'9'		=> __('9'),
									'10'	=> __('10'),
									'11'	=> __('11'),
									'12'	=> __('12'),
									'13'	=> __('13'),
									'14'	=> __('14'),
									'15'	=> __('15'),
									'16'	=> __('16'),
									'17'	=> __('17'),
									'18'	=> __('18'),
									'19'	=> __('19'),
									'20'	=> __('20'),
									'21'	=> __('21'),
									'22'	=> __('22'),
									'23'	=> __('23'),
									'24'	=> __('24'),
									'25'	=> __('25'),
									'26'	=> __('26'),
									'27'	=> __('27'),
									'28'	=> __('28'),
									'29'	=> __('29'),
									'30'	=> __('30'),
									'31'	=> __('31'),
									'32'	=> __('32'),
									'33'	=> __('33'),
									'34'	=> __('34'),
									'35'	=> __('35'),
									'36'	=> __('36'),
									'37'	=> __('37'),
									'38'	=> __('38'),
									'39'	=> __('39'),
									'40'	=> __('40'),
								),
								'section' 		=> $id.'_stage_slide_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($id.'_stage_slide_'.$i.'_content_'.$j.'_bottom_xs_space', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($id.'_stage_slide_'.$i.'_content_'.$j.'_bottom_xs_space', array(
								'label' 		=> __('XSmall Screen Bottom','gaudium'),
								'description'	=> __('Add space to top on extra-small and larger screens, i.e. mobile devices. Select 0 to deactivate.'),
								'type'			=> 'select',
								'choices'	=> array(
									'0'		=> __('Select'),
									'-0'	=> __('Reset'),
									'1'		=> __('1'),
									'2'		=> __('2'),
									'3'		=> __('3'),
									'4'		=> __('4'),
									'5'		=> __('5'),
									'6'		=> __('6'),
									'7'		=> __('7'),
									'8'		=> __('8'),
									'9'		=> __('9'),
									'10'	=> __('10'),
									'11'	=> __('11'),
									'12'	=> __('12'),
									'13'	=> __('13'),
									'14'	=> __('14'),
									'15'	=> __('15'),
									'16'	=> __('16'),
									'17'	=> __('17'),
									'18'	=> __('18'),
									'19'	=> __('19'),
									'20'	=> __('20'),
									'21'	=> __('21'),
									'22'	=> __('22'),
									'23'	=> __('23'),
									'24'	=> __('24'),
									'25'	=> __('25'),
									'26'	=> __('26'),
									'27'	=> __('27'),
									'28'	=> __('28'),
									'29'	=> __('29'),
									'30'	=> __('30'),
									'31'	=> __('31'),
									'32'	=> __('32'),
									'33'	=> __('33'),
									'34'	=> __('34'),
									'35'	=> __('35'),
									'36'	=> __('36'),
									'37'	=> __('37'),
									'38'	=> __('38'),
									'39'	=> __('39'),
									'40'	=> __('40'),
								),
								'section' 		=> $id.'_stage_slide_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($id.'_stage_slide_'.$i.'_content_'.$j.'_bottom_sm_space', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($id.'_stage_slide_'.$i.'_content_'.$j.'_bottom_sm_space', array(
								'label' 		=> __('Small Screen Bottom','gaudium'),
								'description'	=> __('Add space to bottom on small and larger screens.'),
								'type'			=> 'select',
								'choices'	=> array(
									'0'		=> __('Select'),
									'-0'	=> __('Reset'),
									'1'		=> __('1'),
									'2'		=> __('2'),
									'3'		=> __('3'),
									'4'		=> __('4'),
									'5'		=> __('5'),
									'6'		=> __('6'),
									'7'		=> __('7'),
									'8'		=> __('8'),
									'9'		=> __('9'),
									'10'	=> __('10'),
									'11'	=> __('11'),
									'12'	=> __('12'),
									'13'	=> __('13'),
									'14'	=> __('14'),
									'15'	=> __('15'),
									'16'	=> __('16'),
									'17'	=> __('17'),
									'18'	=> __('18'),
									'19'	=> __('19'),
									'20'	=> __('20'),
									'21'	=> __('21'),
									'22'	=> __('22'),
									'23'	=> __('23'),
									'24'	=> __('24'),
									'25'	=> __('25'),
									'26'	=> __('26'),
									'27'	=> __('27'),
									'28'	=> __('28'),
									'29'	=> __('29'),
									'30'	=> __('30'),
									'31'	=> __('31'),
									'32'	=> __('32'),
									'33'	=> __('33'),
									'34'	=> __('34'),
									'35'	=> __('35'),
									'36'	=> __('36'),
									'37'	=> __('37'),
									'38'	=> __('38'),
									'39'	=> __('39'),
									'40'	=> __('40'),
								),
								'section' 		=> $id.'_stage_slide_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($id.'_stage_slide_'.$i.'_content_'.$j.'_bottom_md_space', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($id.'_stage_slide_'.$i.'_content_'.$j.'_bottom_md_space', array(
								'label' 		=> __('Medium Screen Bottom','gaudium'),
								'description'	=> __('Add space to bottom on medium and larger screens.'),
								'type'			=> 'select',
								'choices'	=> array(
									'0'		=> __('Select'),
									'-0'	=> __('Reset'),
									'1'		=> __('1'),
									'2'		=> __('2'),
									'3'		=> __('3'),
									'4'		=> __('4'),
									'5'		=> __('5'),
									'6'		=> __('6'),
									'7'		=> __('7'),
									'8'		=> __('8'),
									'9'		=> __('9'),
									'10'	=> __('10'),
									'11'	=> __('11'),
									'12'	=> __('12'),
									'13'	=> __('13'),
									'14'	=> __('14'),
									'15'	=> __('15'),
									'16'	=> __('16'),
									'17'	=> __('17'),
									'18'	=> __('18'),
									'19'	=> __('19'),
									'20'	=> __('20'),
									'21'	=> __('21'),
									'22'	=> __('22'),
									'23'	=> __('23'),
									'24'	=> __('24'),
									'25'	=> __('25'),
									'26'	=> __('26'),
									'27'	=> __('27'),
									'28'	=> __('28'),
									'29'	=> __('29'),
									'30'	=> __('30'),
									'31'	=> __('31'),
									'32'	=> __('32'),
									'33'	=> __('33'),
									'34'	=> __('34'),
									'35'	=> __('35'),
									'36'	=> __('36'),
									'37'	=> __('37'),
									'38'	=> __('38'),
									'39'	=> __('39'),
									'40'	=> __('40'),
								),
								'section' 		=> $id.'_stage_slide_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($id.'_stage_slide_'.$i.'_content_'.$j.'_bottom_lg_space', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($id.'_stage_slide_'.$i.'_content_'.$j.'_bottom_lg_space', array(
								'label' 		=> __('Large Screen Bottom','gaudium'),
								'description'	=> __('Add space to bottom on large screens.'),
								'type'			=> 'select',
								'choices'	=> array(
									'0'		=> __('Select'),
									'-0'	=> __('Reset'),
									'1'		=> __('1'),
									'2'		=> __('2'),
									'3'		=> __('3'),
									'4'		=> __('4'),
									'5'		=> __('5'),
									'6'		=> __('6'),
									'7'		=> __('7'),
									'8'		=> __('8'),
									'9'		=> __('9'),
									'10'	=> __('10'),
									'11'	=> __('11'),
									'12'	=> __('12'),
									'13'	=> __('13'),
									'14'	=> __('14'),
									'15'	=> __('15'),
									'16'	=> __('16'),
									'17'	=> __('17'),
									'18'	=> __('18'),
									'19'	=> __('19'),
									'20'	=> __('20'),
									'21'	=> __('21'),
									'22'	=> __('22'),
									'23'	=> __('23'),
									'24'	=> __('24'),
									'25'	=> __('25'),
									'26'	=> __('26'),
									'27'	=> __('27'),
									'28'	=> __('28'),
									'29'	=> __('29'),
									'30'	=> __('30'),
									'31'	=> __('31'),
									'32'	=> __('32'),
									'33'	=> __('33'),
									'34'	=> __('34'),
									'35'	=> __('35'),
									'36'	=> __('36'),
									'37'	=> __('37'),
									'38'	=> __('38'),
									'39'	=> __('39'),
									'40'	=> __('40'),
								),
								'section' 		=> $id.'_stage_slide_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($id.'_stage_slide_'.$i.'_content_'.$j, array(
								'default' 		=> _x('','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($id.'_stage_slide_'.$i.'_content_'.$j, array(
								'label' 		=> __('Content','gaudium'),
								'label' 		=> __('Supports text or code.','gaudium'),
								'type'			=> 'textarea',
								'section' 		=> $id.'_stage_slide_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($id.'_stage_slide_'.$i.'_content_'.$j.'_speed', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));
							
							$wp_customize->add_control($id.'_stage_slide_'.$i.'_content_'.$j.'_speed', array(
								'label' 		=> __('Content Speed','gaudium'),
								'description'	=> __('Speed from 0.0 (static) to 1.0 (fixed).','gaudium'),
								'section' 		=> $id.'_stage_slide_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($id.'_stage_slide_'.$i.'_content_'.$j.'_number_images', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));
							
							$wp_customize->add_control($id.'_stage_slide_'.$i.'_content_'.$j.'_number_images', array(
								'label' 		=> __('Number of Images','gaudium'),
								'description'	=> __('Requires PUBLISH and RELOAD.','gaudium'),
								'section' 		=> $id.'_stage_slide_'.$i,
								'priority' 		=> $priority++
							));
							
							for($k = 0; $k < intval(get_theme_mod($id.'_stage_slide_'.$i.'_content_'.$j.'_number_images')); $k++) {

								$wp_customize->add_setting($id.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_xs_url', array(
									'default' 		=> '',
									'type' 			=> 'theme_mod'
								));

								$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, $id.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_xs_url', array(
									'label' 		=> __('XSmall Screen (Only) Image ','gaudium').($k+1),
									'section' 		=> $id.'_stage_slide_'.$i,
									'settings'		=> $id.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_xs_url',
									'priority' 		=> $priority++
								)));

								$wp_customize->add_setting($id.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_url', array(
									'default' 		=> '',
									'type' 			=> 'theme_mod'
								));

								$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, $id.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_url', array(
									'label' 		=> __('XSmall Screen Image ','gaudium').($k+1),
									'section' 		=> $id.'_stage_slide_'.$i,
									'settings'		=> $id.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_url',
									'priority' 		=> $priority++
								)));

								$wp_customize->add_setting($id.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_sm_url', array(
									'default' 		=> '',
									'type' 			=> 'theme_mod'
								));

								$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, $id.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_sm_url', array(
									'label' 		=> __('Small Screen Image ','gaudium').($k+1),
									'section' 		=> $id.'_stage_slide_'.$i,
									'settings'		=> $id.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_sm_url',
									'priority' 		=> $priority++
								)));

								$wp_customize->add_setting($id.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_md_url', array(
									'default' 		=> '',
									'type' 			=> 'theme_mod'
								));

								$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, $id.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_md_url', array(
									'label' 		=> __('Medium Screen Image ','gaudium').($k+1),
									'section' 		=> $id.'_stage_slide_'.$i,
									'settings'		=> $id.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_md_url',
									'priority' 		=> $priority++
								)));

								$wp_customize->add_setting($id.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_lg_url', array(
									'default' 		=> '',
									'type' 			=> 'theme_mod'
								));

								$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, $id.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_lg_url', array(
									'label' 		=> __('Large Screen Image ','gaudium').($k+1),
									'section' 		=> $id.'_stage_slide_'.$i,
									'settings'		=> $id.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_lg_url',
									'priority' 		=> $priority++
								)));

								$wp_customize->add_setting($id.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_bg', array(
									'default' 		=> _x('0','gaudium'),
									'type' 			=> 'theme_mod'

								));

								$wp_customize->add_control($id.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_bg', array(
									'label' 		=> __('Image ','gaudium').($k+1).__(' Background Color','gaudium'),
									'description'	=> __('Background color, e.g. #e4e4e4'),
									'section' 		=> $id.'_stage_slide_'.$i,
									'priority' 		=> $priority++
								));

								$wp_customize->add_setting($id.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_bg_size', array(
									'default' 		=> _x('0','gaudium'),
									'type' 			=> 'theme_mod'
								));

								$wp_customize->add_control($id.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_bg_size', array(
									'label' 		=> __('Image ','gaudium').($j+1).__(' Background Size','gaudium'),
									'type'			=> 'select',
									'choices'		=> array(
										'0'			=> __('Select'),
										'-0'		=> __('Custom'),
										'auto'		=> __('Auto'),
										'cover'		=> __('Cover'),
										'contain'	=> __('Contain'),
									),
									'section' 		=> $id.'_stage_slide_'.$i,
									'priority' 		=> $priority++
								));

								$wp_customize->add_setting($id.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_layout', array(
									'default' 		=> _x('0','gaudium'),
									'type' 			=> 'theme_mod'
								));

								$wp_customize->add_control($id.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_layout', array(
									'label' 		=> __('Image ','gaudium').($k+1).__(' Layout','gaudium'),
									'type'			=> 'select',
									'choices'		=> array(
										'0'				=> __('Select'),
										'default'		=> __('Default'),
										'landscape'		=> __('Landscape'),
										'portrait'		=> __('Portrait'),
										'vr'		    => __('Vertical Rhythm'),
									),
									'section' 		=> $id.'_stage_slide_'.$i,
									'priority' 		=> $priority++
								));

								$wp_customize->add_setting($id.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_xs_width', array(
									'default' 		=> _x('0','gaudium'),
									'type' 			=> 'theme_mod'
								));

								$wp_customize->add_control($id.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_xs_width', array(
									'label' 		=> __('XSmall Screen Image ','gaudium').($k+1).__(' Width','gaudium'),
									'description'	=> __('Enter value in px, % or em, e.g. 500px'),
									'section' 		=> $id.'_stage_slide_'.$i,
									'priority' 		=> $priority++
								));

								$wp_customize->add_setting($id.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_width', array(
									'default' 		=> _x('0','gaudium'),
									'type' 			=> 'theme_mod'
								));

								$wp_customize->add_control($id.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_width', array(
									'label' 		=> __('Small Screen Image ','gaudium').($k+1).__(' Width','gaudium'),
									'description'	=> __('Enter value in px, % or em, e.g. 500px'),
									'section' 		=> $id.'_stage_slide_'.$i,
									'priority' 		=> $priority++
								));

								$wp_customize->add_setting($id.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_md_width', array(
									'default' 		=> _x('0','gaudium'),
									'type' 			=> 'theme_mod'
								));

								$wp_customize->add_control($id.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_md_width', array(
									'label' 		=> __('Medium Screen Image ','gaudium').($k+1).__(' Width','gaudium'),
									'description'	=> __('Enter value in px, % or em, e.g. 500px'),
									'section' 		=> $id.'_stage_slide_'.$i,
									'priority' 		=> $priority++
								));

								$wp_customize->add_setting($id.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_lg_width', array(
									'default' 		=> _x('0','gaudium'),
									'type' 			=> 'theme_mod'
								));

								$wp_customize->add_control($id.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_lg_width', array(
									'label' 		=> __('Large Screen Image ','gaudium').($k+1).__(' Width','gaudium'),
									'description'	=> __('Enter value in px, % or em, e.g. 500px'),
									'section' 		=> $id.'_stage_slide_'.$i,
									'priority' 		=> $priority++
								));

								$wp_customize->add_setting($id.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_xs_height', array(
									'default' 		=> _x('0','gaudium'),
									'type' 			=> 'theme_mod'
								));

								$wp_customize->add_control($id.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_xs_height', array(
									'label' 		=> __('XSmall Screen Image ','gaudium').($k+1).__(' Height','gaudium'),
									'description'	=> __('Enter value in px, % or em, e.g. 500px'),
									'section' 		=> $id.'_stage_slide_'.$i,
									'priority' 		=> $priority++
								));

								$wp_customize->add_setting($id.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_height', array(
									'default' 		=> _x('0','gaudium'),
									'type' 			=> 'theme_mod'
								));

								$wp_customize->add_control($id.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_height', array(
									'label' 		=> __('Small Screen Image ','gaudium').($k+1).__(' Height','gaudium'),
									'description'	=> __('Enter value in px, % or em, e.g. 500px'),
									'section' 		=> $id.'_stage_slide_'.$i,
									'priority' 		=> $priority++
								));

								$wp_customize->add_setting($id.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_md_height', array(
									'default' 		=> _x('0','gaudium'),
									'type' 			=> 'theme_mod'
								));

								$wp_customize->add_control($id.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_md_height', array(
									'label' 		=> __('Medium Screen Image ','gaudium').($k+1).__(' Height','gaudium'),
									'description'	=> __('Enter value in px, % or em, e.g. 500px'),
									'section' 		=> $id.'_stage_slide_'.$i,
									'priority' 		=> $priority++
								));

								$wp_customize->add_setting($id.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_md_height', array(
									'default' 		=> _x('0','gaudium'),
									'type' 			=> 'theme_mod'
								));

								$wp_customize->add_control($id.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_lg_height', array(
									'label' 		=> __('Large Screen Image ','gaudium').($k+1).__(' Height','gaudium'),
									'description'	=> __('Enter value in px, % or em, e.g. 500px'),
									'section' 		=> $id.'_stage_slide_'.$i,
									'priority' 		=> $priority++
								));

								$wp_customize->add_setting($id.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_box_xs_width', array(
									'default' 		=> _x('0','gaudium'),
									'type' 			=> 'theme_mod'
								));

								$wp_customize->add_control($id.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_box_xs_width', array(
									'label' 		=> __('XSmall Screen Image ','gaudium').($k+1).__(' Box Width','gaudium'),
									'description'	=> __('Enter value in px, % or em, e.g. 500px'),
									'section' 		=> $id.'_stage_slide_'.$i,
									'priority' 		=> $priority++
								));

								$wp_customize->add_setting($id.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_box_width', array(
									'default' 		=> _x('0','gaudium'),
									'type' 			=> 'theme_mod'
								));

								$wp_customize->add_control($id.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_box_width', array(
									'label' 		=> __('Small Screen Image ','gaudium').($k+1).__(' Box Width','gaudium'),
									'description'	=> __('Enter value in px, % or em, e.g. 500px'),
									'section' 		=> $id.'_stage_slide_'.$i,
									'priority' 		=> $priority++
								));

								$wp_customize->add_setting($id.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_box_md_width', array(
									'default' 		=> _x('0','gaudium'),
									'type' 			=> 'theme_mod'
								));

								$wp_customize->add_control($id.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_box_md_width', array(
									'label' 		=> __('Medium Screen Image ','gaudium').($k+1).__(' Box Width','gaudium'),
									'description'	=> __('Enter value in px, % or em, e.g. 500px'),
									'section' 		=> $id.'_stage_slide_'.$i,
									'priority' 		=> $priority++
								));

								$wp_customize->add_setting($id.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_box_lg_width', array(
									'default' 		=> _x('0','gaudium'),
									'type' 			=> 'theme_mod'
								));

								$wp_customize->add_control($id.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_box_lg_width', array(
									'label' 		=> __('Large Screen Image ','gaudium').($k+1).__(' Box Width','gaudium'),
									'description'	=> __('Enter value in px, % or em, e.g. 500px'),
									'section' 		=> $id.'_stage_slide_'.$i,
									'priority' 		=> $priority++
								));

								$wp_customize->add_setting($id.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_box_xs_height', array(
									'default' 		=> _x('0','gaudium'),
									'type' 			=> 'theme_mod'
								));

								$wp_customize->add_control($id.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_box_xs_height', array(
									'label' 		=> __('XSmall Screen Image ','gaudium').($k+1).__(' Box Height','gaudium'),
									'description'	=> __('Enter value in px, % or em, e.g. 500px'),
									'section' 		=> $id.'_stage_slide_'.$i,
									'priority' 		=> $priority++
								));

								$wp_customize->add_setting($id.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_box_height', array(
									'default' 		=> _x('0','gaudium'),
									'type' 			=> 'theme_mod'
								));

								$wp_customize->add_control($id.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_box_height', array(
									'label' 		=> __('Small Screen Image ','gaudium').($k+1).__(' Box Height','gaudium'),
									'description'	=> __('Enter value in px, % or em, e.g. 500px'),
									'section' 		=> $id.'_stage_slide_'.$i,
									'priority' 		=> $priority++
								));

								$wp_customize->add_setting($id.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_box_md_height', array(
									'default' 		=> _x('0','gaudium'),
									'type' 			=> 'theme_mod'
								));

								$wp_customize->add_control($id.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_box_md_height', array(
									'label' 		=> __('Medium Screen Image ','gaudium').($k+1).__(' Box Height','gaudium'),
									'description'	=> __('Enter value in px, % or em, e.g. 500px'),
									'section' 		=> $id.'_stage_slide_'.$i,
									'priority' 		=> $priority++
								));

								$wp_customize->add_setting($id.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_box_lg_height', array(
									'default' 		=> _x('0','gaudium'),
									'type' 			=> 'theme_mod'
								));

								$wp_customize->add_control($id.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_box_lg_height', array(
									'label' 		=> __('Large Screen Image ','gaudium').($k+1).__(' Box Height','gaudium'),
									'description'	=> __('Enter value in px, % or em, e.g. 500px'),
									'section' 		=> $id.'_stage_slide_'.$i,
									'priority' 		=> $priority++
								));

								$wp_customize->add_setting($id.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_box_xs_x', array(
									'default' 		=> _x('0','gaudium'),
									'type' 			=> 'theme_mod'
								));

								$wp_customize->add_control($id.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_box_xs_x', array(
									'label' 		=> __('XSmall Screen Image ','gaudium').($k+1).__(' Box Left Position','gaudium'),
									'description'	=> __('Enter value in px, % or em, e.g. 500px'),
									'section' 		=> $id.'_stage_slide_'.$i,
									'priority' 		=> $priority++
								));

								$wp_customize->add_setting($id.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_box_x', array(
									'default' 		=> _x('0','gaudium'),
									'type' 			=> 'theme_mod'
								));

								$wp_customize->add_control($id.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_box_x', array(
									'label' 		=> __('Small Screen Image ','gaudium').($k+1).__(' Box Left Position','gaudium'),
									'description'	=> __('Enter value in px, % or em, e.g. 500px'),
									'section' 		=> $id.'_stage_slide_'.$i,
									'priority' 		=> $priority++
								));

								$wp_customize->add_setting($id.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_box_md_x', array(
									'default' 		=> _x('0','gaudium'),
									'type' 			=> 'theme_mod'
								));

								$wp_customize->add_control($id.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_box_md_x', array(
									'label' 		=> __('Medium Screen Image ','gaudium').($k+1).__(' Box Left Position','gaudium'),
									'description'	=> __('Enter value in px, % or em, e.g. 500px'),
									'section' 		=> $id.'_stage_slide_'.$i,
									'priority' 		=> $priority++
								));

								$wp_customize->add_setting($id.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_box_lg_x', array(
									'default' 		=> _x('0','gaudium'),
									'type' 			=> 'theme_mod'
								));

								$wp_customize->add_control($id.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_box_lg_x', array(
									'label' 		=> __('Large Screen Image ','gaudium').($k+1).__(' Box Left Position','gaudium'),
									'description'	=> __('Enter value in px, % or em, e.g. 500px'),
									'section' 		=> $id.'_stage_slide_'.$i,
									'priority' 		=> $priority++
								));

								$wp_customize->add_setting($id.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_box_xs_y', array(
									'default' 		=> _x('0','gaudium'),
									'type' 			=> 'theme_mod'
								));

								$wp_customize->add_control($id.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_box_xs_y', array(
									'label' 		=> __('XSmall Screen Image ','gaudium').($k+1).__(' Box Top Position','gaudium'),
									'description'	=> __('Enter value in px, % or em, e.g. 500px'),
									'section' 		=> $id.'_stage_slide_'.$i,
									'priority' 		=> $priority++
								));

								$wp_customize->add_setting($id.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_box_y', array(
									'default' 		=> _x('0','gaudium'),
									'type' 			=> 'theme_mod'
								));

								$wp_customize->add_control($id.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_box_y', array(
									'label' 		=> __('Small Screen Image ','gaudium').($k+1).__(' Box Top Position','gaudium'),
									'description'	=> __('Enter value in px, % or em, e.g. 500px'),
									'section' 		=> $id.'_stage_slide_'.$i,
									'priority' 		=> $priority++
								));

								$wp_customize->add_setting($id.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_box_md_y', array(
									'default' 		=> _x('0','gaudium'),
									'type' 			=> 'theme_mod'
								));

								$wp_customize->add_control($id.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_box_md_y', array(
									'label' 		=> __('Medium Screen Image ','gaudium').($k+1).__(' Box Top Position','gaudium'),
									'description'	=> __('Enter value in px, % or em, e.g. 500px'),
									'section' 		=> $id.'_stage_slide_'.$i,
									'priority' 		=> $priority++
								));

								$wp_customize->add_setting($id.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_box_lg_y', array(
									'default' 		=> _x('0','gaudium'),
									'type' 			=> 'theme_mod'
								));

								$wp_customize->add_control($id.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_box_lg_y', array(
									'label' 		=> __('Large Screen Image ','gaudium').($k+1).__(' Box Top Position','gaudium'),
									'description'	=> __('Enter value in px, % or em, e.g. 500px'),
									'section' 		=> $id.'_stage_slide_'.$i,
									'priority' 		=> $priority++
								));

								$wp_customize->add_setting($id.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_styles_xs', array(
									'default' 		=> _x('0','gaudium'),
									'type' 			=> 'theme_mod'
								));

								$wp_customize->add_control($id.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_styles_xs', array(
									'label' 		=> __('XSmall Screen Image ','gaudium').($k+1).__(' Styles','gaudium'),
									'description'	=> __('Enter styles, e.g. max-width: 50%;'),
									'section' 		=> $id.'_stage_slide_'.$i,
									'priority' 		=> $priority++
								));

								$wp_customize->add_setting($id.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_styles', array(
									'default' 		=> _x('0','gaudium'),
									'type' 			=> 'theme_mod'
								));

								$wp_customize->add_control($id.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_styles', array(
									'label' 		=> __('Small Screen Image ','gaudium').($k+1).__(' Styles','gaudium'),
									'description'	=> __('Enter styles, e.g. max-width: 50%;'),
									'section' 		=> $id.'_stage_slide_'.$i,
									'priority' 		=> $priority++
								));

								$wp_customize->add_setting($id.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_styles_md', array(
									'default' 		=> _x('0','gaudium'),
									'type' 			=> 'theme_mod'
								));

								$wp_customize->add_control($id.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_styles_md', array(
									'label' 		=> __('Medium Screen Image ','gaudium').($k+1).__(' Styles','gaudium'),
									'description'	=> __('Enter styles, e.g. max-width: 50%;'),
									'section' 		=> $id.'_stage_slide_'.$i,
									'priority' 		=> $priority++
								));

								$wp_customize->add_setting($id.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_styles_lg', array(
									'default' 		=> _x('0','gaudium'),
									'type' 			=> 'theme_mod'
								));

								$wp_customize->add_control($id.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_styles_lg', array(
									'label' 		=> __('Large Screen Image ','gaudium').($k+1).__(' Styles','gaudium'),
									'description'	=> __('Enter styles, e.g. max-width: 50%;'),
									'section' 		=> $id.'_stage_slide_'.$i,
									'priority' 		=> $priority++
								));

								$wp_customize->add_setting($id.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_bg_position', array(
									'default' 		=> _x('0','gaudium'),
									'type' 			=> 'theme_mod'
								));

								$wp_customize->add_control($id.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_bg_position', array(
									'label' 		=> __('Image ','gaudium').($k+1).__(' Background Position','gaudium'),
									'type'			=> 'select',
									'choices'		=> array(
										'0'			=> __('Select'),
										'-0'		=> __('Custom'),
										'center'	=> __('Center'),
										'left 0'	=> __('Left'),
										'right 0'	=> __('Right'),
										'bottom'	=> __('Bottom'),
										'top'		=> __('Top'),
									),
									'section' 		=> $id.'_stage_slide_'.$i,
									'priority' 		=> $priority++
								));

								$wp_customize->add_setting($id.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_xs_x', array(
									'default' 		=> _x('0','gaudium'),
									'type' 			=> 'theme_mod'
								));

								$wp_customize->add_control($id.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_xs_x', array(
									'label' 		=> __('XSmall Screen Image ','gaudium').($k+1).__(' Left Position','gaudium'),
									'section' 		=> $id.'_stage_slide_'.$i,
									'priority' 		=> $priority++
								));

								$wp_customize->add_setting($id.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_x', array(
									'default' 		=> _x('0','gaudium'),
									'type' 			=> 'theme_mod'
								));

								$wp_customize->add_control($id.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_x', array(
									'label' 		=> __('Image ','gaudium').($k+1).__(' Left Position','gaudium'),
									'section' 		=> $id.'_stage_slide_'.$i,
									'priority' 		=> $priority++
								));

								$wp_customize->add_setting($id.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_xs_y', array(
									'default' 		=> _x('0','gaudium'),
									'type' 			=> 'theme_mod'
								));

								$wp_customize->add_control($id.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_xs_y', array(
									'label' 		=> __('XSmall Screen Image ','gaudium').($k+1).__(' Top Position','gaudium'),
									'description'	=> __('Enter value in px, % or em, e.g. 100px'),
									'section' 		=> $id.'_stage_slide_'.$i,
									'priority' 		=> $priority++
								));

								$wp_customize->add_setting($id.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_y', array(
									'default' 		=> _x('0','gaudium'),
									'type' 			=> 'theme_mod'
								));

								$wp_customize->add_control($id.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_y', array(
									'label' 		=> __('Image ','gaudium').($k+1).__(' Top Position','gaudium'),
									'description'	=> __('Enter value in px, % or em, e.g. 100px'),
									'section' 		=> $id.'_stage_slide_'.$i,
									'priority' 		=> $priority++
								));

								$wp_customize->add_setting($id.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_repeat', array(
									'default' 		=> _x('0','gaudium'),
									'type' 			=> 'theme_mod'
								));

								$wp_customize->add_control($id.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_repeat', array(
									'label' 		=> __('Image ','gaudium').($k+1).__(' Repeat','gaudium'),
									'type'			=> 'select',
									'choices' 		=> array(
										'0' 			=> __('Select'),
									    'repeat' 		=> __('Repeat'),
									    'no-repeat' 	=> __('No repeat'),
									),
									'section' 		=> $id.'_stage_slide_'.$i,
									'priority' 		=> $priority++
								));

								$wp_customize->add_setting($id.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_speed', array(
									'default' 		=> _x('0','gaudium'),
									'type' 			=> 'theme_mod',
								));

								$wp_customize->add_control($id.'_stage_slide_'.$i.'_content_'.$j.'_image_'.$k.'_speed', array(
									'label' 		=> __('Image ','gaudium').($k+1).__(' speed','gaudium'),
									'description'	=> __('Speed from 0.0 (static) to 1.0 (fixed).'),
									'section' 		=> $id.'_stage_slide_'.$i,
									'priority' 		=> $priority++
								));
							}
						}
					}

					if(in_array($key, $taxonomies)) {
						$id = str_replace('term_', '', $id);
						$page_title = get_term_by('id', $id, $key)->name;
						$id = 'term_'.$id;
					} else {
						$page_title = get_the_title($id);
					}

					$wp_customize->add_panel($id.'_blocks_panel', array(
					      	'title' 		=> __($page_title.': Blocks','gaudium'),
					      	'description' 	=> esc_html__( 'Customize stage slides.' ),
					      	'priority' 		=> $base_priority+=10
					   	)
					);

					$section_priority = 1;

					$wp_customize->add_section($id.'_blocks_settings', array(
						'title' 		=> __('Blocks','gaudium'),
						'panel'			=> $id.'_blocks_panel',
						'description' 	=> sprintf(__('Options for blocks','gaudium')),
						'priority' 		=> $section_priority++
					));

					$priority = 1;

					$wp_customize->add_setting($id.'_blocks_number', array(
						'default' 		=> _x('0','gaudium'),
						'type' 			=> 'theme_mod'
					));

					$wp_customize->add_control($id.'_blocks_number', array(
						'label' 		=> __('Number of Blocks','gaudium'),
						'description'	=> __('Requires PUBLISH and RELOAD.','gaudium'),
						'section' 		=> $id.'_blocks_settings',
						'priority' 		=> $priority++
					));

					for($i = 0; $i < intval(get_theme_mod($id.'_blocks_number')); $i++) {

						$wp_customize->add_section($id.'_block_'.$i, array(
							'title' 		=> __('Block ','gaudium').($i+1).__('  Settings','gaudium'),
							'panel'			=> $id.'_blocks_panel',
							'description' 	=> sprintf(__('Options for blocks','gaudium')),
							'priority' 		=> $section_priority++
						));

						$priority = 1;

						$wp_customize->add_setting($id.'_block_'.$i.'_position', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($id.'_block_'.$i.'_position', array(
							'label' 		=> __('Block Position','gaudium'),
							'type'			=> 'select',
							'choices'		=> array(
								'0'						=> __('Select'),
								'header'				=> __('Header'),
								'top'					=> __('Top'),
								'middle-top'			=> __('Middle Top'),
								'middle-bottom'			=> __('Middle Bottom'),
								'bottom'				=> __('Bottom'),
							),
							'section' 		=> $id.'_block_'.$i,
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($id.'_block_'.$i.'_height', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($id.'_block_'.$i.'_height', array(
							'label' 		=> __('Block Height','gaudium'),
							'section' 		=> $id.'_block_'.$i,
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($id.'_block_'.$i.'_title', array(
							'default' 		=> _x('','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($id.'_block_'.$i.'_title', array(
							'label' 		=> __('Block Title','gaudium'),
							'section' 		=> $id.'_block_'.$i,
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($id.'_block_'.$i.'_title_position', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($id.'_block_'.$i.'_title_position', array(
							'label' 		=> __('Block Title','gaudium'),
							'type'			=> 'select',
							'choices'		=> array(
								'0'			=> __('Select'),
								'left'		=> __('Left'),
								'center'	=> __('Center'),
								'right'		=> __('Right'),
							),
							'section' 		=> $id.'_block_'.$i,
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($id.'_block_'.$i.'_title_bottom_space', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($id.'_block_'.$i.'_title_bottom_space', array(
							'label' 		=> __('Block Title Bottom','gaudium'),
							'description'	=> __('Add/remove bottom space.'),
								'type'			=> 'select',
								'choices'	=> array(
									'0'		=> __('Select'),
									'-0'	=> __('Reset'),
									'-'		=> __('0'),
									'1'		=> __('1'),
									'2'		=> __('2'),
									'3'		=> __('3'),
									'4'		=> __('4'),
									'5'		=> __('5'),
									'6'		=> __('6'),
									'7'		=> __('7'),
									'8'		=> __('8'),
									'9'		=> __('9'),
									'10'	=> __('10'),
									'11'	=> __('11'),
									'12'	=> __('12'),
									'13'	=> __('13'),
									'14'	=> __('14'),
									'15'	=> __('15'),
									'16'	=> __('16'),
									'17'	=> __('17'),
									'18'	=> __('18'),
									'19'	=> __('19'),
									'20'	=> __('20'),
									'21'	=> __('21'),
									'22'	=> __('22'),
									'23'	=> __('23'),
									'24'	=> __('24'),
									'25'	=> __('25'),
									'26'	=> __('26'),
									'27'	=> __('27'),
									'28'	=> __('28'),
									'29'	=> __('29'),
									'30'	=> __('30'),
									'31'	=> __('31'),
									'32'	=> __('32'),
									'33'	=> __('33'),
									'34'	=> __('34'),
									'35'	=> __('35'),
									'36'	=> __('36'),
									'37'	=> __('37'),
									'38'	=> __('38'),
									'39'	=> __('39'),
									'40'	=> __('40'),
								),
							'section' 		=> $id.'_block_'.$i,
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($id.'_block_'.$i.'_container', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($id.'_block_'.$i.'_container', array(
							'label' 		=> __('Container','gaudium'),
							'type'			=> 'select',
							'choices'		=> array(
								'0'			=> __('Select'),
								'boxed'		=> __('Boxed'),
								'fluid'		=> __('Fluid'),
							),
							'section' 		=> $id.'_block_'.$i,
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($id.'_block_'.$i.'_divider', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($id.'_block_'.$i.'_divider', array(
							'label' 		=> __('Divider','gaudium'),
							'type'			=> 'select',
							'choices'		=> array(
								'0'						=> __('Select'),
								'-0'					=> __('No divider'),
								'divider'				=> __('Divider'),
								'divider-no-padding'	=> __('Divider (No Padding)'),
							),
							'section' 		=> $id.'_block_'.$i,
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($id.'_block_'.$i.'_bg', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($id.'_block_'.$i.'_bg', array(
							'label' 		=> __('Background Color','gaudium'),
							'type'			=> 'select',
							'choices'		=> array(
								'0'		=> __('Select'),
								'1'		=> __('White'),
								'2'		=> __('Light'),
								'3'		=> __('Dark'),
							),
							'section' 		=> $id.'_block_'.$i,
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($id.'_block_'.$i.'_gutters', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($id.'_block_'.$i.'_gutters', array(
							'label' 		=> __('Gutters','gaudium'),
							'type'			=> 'select',
							'choices' 		=> array(
								'0'		=> __('Select'),
								'-0' 	=> __('Gutters'),
							    '1'    	=> __('No gutters'),
							),
							'section' 		=> $id.'_block_'.$i,
							'priority' 		=> $priority++
						));

						$wp_customize->add_setting($id.'_block_'.$i.'_type', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));
						
						$wp_customize->add_control($id.'_block_'.$i.'_type', array(
							'label' 		=> __('Block Type','gaudium'),
							'description'	=> __('Requires PUBLISH and RELOAD.','gaudium'),
							'type'			=> 'select',
							'choices'		=> array(
								'0'					=> __('Select'),
								'custom'			=> __('Custom'),
								'blog'				=> __('Recent Posts'),
								'portfolio'			=> __('Recent Projects'),
							),
							'section' 		=> $id.'_block_'.$i,
							'priority' 		=> $priority++
						));

						if(get_theme_mod($id.'_block_'.$i.'_type') == 'portfolio') {
							$wp_customize->add_setting($id.'_block_'.$i.'_portfolio_show_tags', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($id.'_block_'.$i.'_portfolio_show_tags', array(
								'label' 		=> __('Show Project Tags','gaudium'),
								'type'			=> 'select',
								'choices'		=> array(
									'0'			=> __('Select'),
									'-0'		=> __('Hide'),
									'1'			=> __('Show'),
								),
								'section' 		=> $id.'_block_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($id.'_block_'.$i.'_portfolio_tags_position', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($id.'_block_'.$i.'_portfolio_tags_position', array(
								'label' 		=> __('Project Tags Position','gaudium'),
								'type'			=> 'select',
								'choices'		=> array(
									'0'				=> __('Select'),
									'left'			=> __('Left'),
									'center'		=> __('Center'),
									'right'			=> __('Right'),
								),
								'section' 		=> $id.'_block_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($id.'_block_'.$i.'_portfolio_gutters', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($id.'_block_'.$i.'_portfolio_gutters', array(
								'label' 		=> __('Gutters','gaudium'),
								'type'			=> 'select',
								'choices'		=> array(
									'0'			=> __('Select'),
									'-0'		=> __('Gutters'),
									'1'			=> __('No gutters'),
								),
								'section' 		=> $id.'_block_'.$i,
								'priority' 		=> $priority++
							));
							$wp_customize->add_setting($id.'_block_'.$i.'_portfolio_container', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($id.'_block_'.$i.'_portfolio_container', array(
								'label' 		=> __('Container','gaudium'),
								'type'			=> 'select',
								'choices'		=> array(
									'0'				=> __('Select'),
									'boxed'			=> __('Boxed'),
									'fluid'			=> __('Fluid'),
								),
								'section' 		=> $id.'_block_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($id.'_block_'.$i.'_portfolio_layout', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($id.'_block_'.$i.'_portfolio_layout', array(
								'label' 		=> __('Thumbnail Layout','gaudium'),
								'type'			=> 'select',
								'choices'		=> array(
									'0'				=> __('Select'),
									'default'		=> __('Default'),
									'landscape'		=> __('Landscape'),
									'portrait'		=> __('Portrait'),
									'masonry'		=> __('Masonry'),
									'mosaic'		=> __('Mosaic'),
								),
								'section' 		=> $id.'_block_'.$i,
								'priority' 		=> $priority++
							));
						}
						if(get_theme_mod($id.'_block_'.$i.'_type') == 'portfolio' ||
					       get_theme_mod($id.'_block_'.$i.'_type') == 'blog') {
							$wp_customize->add_setting($id.'_block_'.$i.'_number_posts', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));
							
							$wp_customize->add_control($id.'_block_'.$i.'_number_posts', array(
								'label' 		=> __('Number of Posts','gaudium'),
								'description'	=> __('Requires PUBLISH and RELOAD.','gaudium'),
								'section' 		=> $id.'_block_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($id.'_block_'.$i.'_load_more', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));
							
							$wp_customize->add_control($id.'_block_'.$i.'_load_more', array(
								'label' 		=> __('Load More Button','gaudium'),
								'type'			=> 'select',
								'choices'		=> array(
									'0'			=> __('Select'),
									'-0'		=> __('Hide'),
									'1'			=> __('Show'),
								),
								'section' 		=> $id.'_block_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($id.'_block_'.$i.'_load', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));
							
							$wp_customize->add_control($id.'_block_'.$i.'_load', array(
								'label' 		=> __('Number of Posts to Load','gaudium'),
								'section' 		=> $id.'_block_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($id.'_block_'.$i.'_layout', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));
							
							$wp_customize->add_control($id.'_block_'.$i.'_layout', array(
								'label' 		=> __('Layout','gaudium'),
								'type'			=> 'select',
								'choices'		=> array(
									'0'		=> __('Select'),
									'3'		=> __('4 Columns'),
									'4'		=> __('3 Columns'),
									'6'		=> __('2 Columns'),
									'12'	=> __('1 Column'),
								),
								'section' 		=> $id.'_block_'.$i,
								'priority' 		=> $priority++
							));
						}
						$wp_customize->add_setting($id.'_block_'.$i.'_number_images', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));
						
						$wp_customize->add_control($id.'_block_'.$i.'_number_images', array(
							'label' 		=> __('Number of Images','gaudium'),
							'description'	=> __('Requires PUBLISH and RELOAD.','gaudium'),
							'section' 		=> $id.'_block_'.$i,
							'priority' 		=> $priority++
						));

						for($j = 0; $j < intval(get_theme_mod($id.'_block_'.$i.'_number_images')); $j++) {
							
							$wp_customize->add_setting($id.'_block_'.$i.'_image_'.$j.'_xs_url', array(
								'default' 		=> '',
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, $id.'_block_'.$i.'_image_'.$j.'_xs_url', array(
								'label' 		=> __('XSmall Screen (Only) Image ','gaudium').($j+1),
								'section' 		=> $id.'_block_'.$i,
								'settings'		=> $id.'_block_'.$i.'_image_'.$j.'_xs_url',
								'priority' 		=> $priority++
							)));

							$wp_customize->add_setting($id.'_block_'.$i.'_image_'.$j.'_url', array(
								'default' 		=> '',
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, $id.'_block_'.$i.'_image_'.$j.'_url', array(
								'label' 		=> __('XSmall Screen Image ','gaudium').($j+1),
								'section' 		=> $id.'_block_'.$i,
								'settings'		=> $id.'_block_'.$i.'_image_'.$j.'_url',
								'priority' 		=> $priority++
							)));

							$wp_customize->add_setting($id.'_block_'.$i.'_image_'.$j.'_sm_url', array(
								'default' 		=> '',
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, $id.'_block_'.$i.'_image_'.$j.'_sm_url', array(
								'label' 		=> __('Small Screen Image ','gaudium').($j+1),
								'section' 		=> $id.'_block_'.$i,
								'settings'		=> $id.'_block_'.$i.'_image_'.$j.'_sm_url',
								'priority' 		=> $priority++
							)));

							$wp_customize->add_setting($id.'_block_'.$i.'_image_'.$j.'_md_url', array(
								'default' 		=> '',
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, $id.'_block_'.$i.'_image_'.$j.'_md_url', array(
								'label' 		=> __('Medium Screen Image ','gaudium').($j+1),
								'section' 		=> $id.'_block_'.$i,
								'settings'		=> $id.'_block_'.$i.'_image_'.$j.'_md_url',
								'priority' 		=> $priority++
							)));

							$wp_customize->add_setting($id.'_block_'.$i.'_image_'.$j.'_lg_url', array(
								'default' 		=> '',
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, $id.'_block_'.$i.'_image_'.$j.'_lg_url', array(
								'label' 		=> __('Large Screen Image ','gaudium').($j+1),
								'section' 		=> $id.'_block_'.$i,
								'settings'		=> $id.'_block_'.$i.'_image_'.$j.'_lg_url',
								'priority' 		=> $priority++
							)));

							$wp_customize->add_setting($id.'_block_'.$i.'_image_'.$j.'_bg', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'

							));

							$wp_customize->add_control($id.'_block_'.$i.'_image_'.$j.'_bg', array(
								'label' 		=> __('Image ','gaudium').($j+1).__(' Background Color','gaudium'),
								'description'	=> __('Background color, e.g. #e4e4e4'),
								'section' 		=> $id.'_block_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($id.'_block_'.$i.'_image_'.$j.'_top_xs_space', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($id.'_block_'.$i.'_image_'.$j.'_top_xs_space', array(
								'label' 		=> __('XSmall Screen Top','gaudium'),
								'description'	=> __('Add space to top on extra-small and larger screens, i.e. mobile devices. Select 0 to deactivate.'),
								'type'			=> 'select',
								'choices'	=> array(
									'0'		=> __('Select'),
									'-0'	=> __('Reset'),
									'1'		=> __('1'),
									'2'		=> __('2'),
									'3'		=> __('3'),
									'4'		=> __('4'),
									'5'		=> __('5'),
									'6'		=> __('6'),
									'7'		=> __('7'),
									'8'		=> __('8'),
									'9'		=> __('9'),
									'10'	=> __('10'),
									'11'	=> __('11'),
									'12'	=> __('12'),
									'13'	=> __('13'),
									'14'	=> __('14'),
									'15'	=> __('15'),
									'16'	=> __('16'),
									'17'	=> __('17'),
									'18'	=> __('18'),
									'19'	=> __('19'),
									'20'	=> __('20'),
									'21'	=> __('21'),
									'22'	=> __('22'),
									'23'	=> __('23'),
									'24'	=> __('24'),
									'25'	=> __('25'),
									'26'	=> __('26'),
									'27'	=> __('27'),
									'28'	=> __('28'),
									'29'	=> __('29'),
									'30'	=> __('30'),
									'31'	=> __('31'),
									'32'	=> __('32'),
									'33'	=> __('33'),
									'34'	=> __('34'),
									'35'	=> __('35'),
									'36'	=> __('36'),
									'37'	=> __('37'),
									'38'	=> __('38'),
									'39'	=> __('39'),
									'40'	=> __('40'),
								),
								'section' 		=> $id.'_block_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($id.'_block_'.$i.'_image_'.$j.'_bottom_xs_space', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($id.'_block_'.$i.'_image_'.$j.'_bottom_xs_space', array(
								'label' 		=> __('XSmall Screen Bottom','gaudium'),
								'description'	=> __('Add space to top on extra-small and larger screens, i.e. mobile devices. Select 0 to deactivate.'),
								'type'			=> 'select',
								'choices'	=> array(
									'0'		=> __('Select'),
									'-0'	=> __('Reset'),
									'1'		=> __('1'),
									'2'		=> __('2'),
									'3'		=> __('3'),
									'4'		=> __('4'),
									'5'		=> __('5'),
									'6'		=> __('6'),
									'7'		=> __('7'),
									'8'		=> __('8'),
									'9'		=> __('9'),
									'10'	=> __('10'),
									'11'	=> __('11'),
									'12'	=> __('12'),
									'13'	=> __('13'),
									'14'	=> __('14'),
									'15'	=> __('15'),
									'16'	=> __('16'),
									'17'	=> __('17'),
									'18'	=> __('18'),
									'19'	=> __('19'),
									'20'	=> __('20'),
									'21'	=> __('21'),
									'22'	=> __('22'),
									'23'	=> __('23'),
									'24'	=> __('24'),
									'25'	=> __('25'),
									'26'	=> __('26'),
									'27'	=> __('27'),
									'28'	=> __('28'),
									'29'	=> __('29'),
									'30'	=> __('30'),
									'31'	=> __('31'),
									'32'	=> __('32'),
									'33'	=> __('33'),
									'34'	=> __('34'),
									'35'	=> __('35'),
									'36'	=> __('36'),
									'37'	=> __('37'),
									'38'	=> __('38'),
									'39'	=> __('39'),
									'40'	=> __('40'),
								),
								'section' 		=> $id.'_block_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($id.'_block_'.$i.'_image_'.$j.'_bg_size', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($id.'_block_'.$i.'_image_'.$j.'_bg_size', array(
								'label' 		=> __('Image ','gaudium').($j+1).__(' Background Size','gaudium'),
								'type'			=> 'select',
								'choices'		=> array(
									'0'			=> __('Select'),
									'-0'		=> __('Custom'),
									'auto'		=> __('Auto'),
									'cover'		=> __('Cover'),
									'contain'	=> __('Contain'),
								),
								'section' 		=> $id.'_block_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($id.'_block_'.$i.'_image_'.$j.'_layout', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($id.'_block_'.$i.'_image_'.$j.'_layout', array(
								'label' 		=> __('Image ','gaudium').($j+1).__(' Layout','gaudium'),
								'type'			=> 'select',
								'choices'		=> array(
									'0'				=> __('Select'),
									'default'		=> __('Default'),
									'landscape'		=> __('Landscape'),
									'portrait'		=> __('Portrait'),
									'vr'		    => __('Vertical Rhythm'),
								),
								'section' 		=> $id.'_block_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($id.'_block_'.$i.'_image_'.$j.'_xs_width', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($id.'_block_'.$i.'_image_'.$j.'_xs_width', array(
								'label' 		=> __('XSmall Screen Image ','gaudium').($j+1).__(' Width','gaudium'),
								'description'	=> __('Enter value in px, % or em, e.g. 500px'),
								'section' 		=> $id.'_block_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($id.'_block_'.$i.'_image_'.$j.'_width', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($id.'_block_'.$i.'_image_'.$j.'_width', array(
								'label' 		=> __('Small Screen Image ','gaudium').($j+1).__(' Width','gaudium'),
								'description'	=> __('Enter value in px, % or em, e.g. 500px'),
								'section' 		=> $id.'_block_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($id.'_block_'.$i.'_image_'.$j.'_md_width', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($id.'_block_'.$i.'_image_'.$j.'_md_width', array(
								'label' 		=> __('Medium Screen Image ','gaudium').($j+1).__(' Width','gaudium'),
								'description'	=> __('Enter value in px, % or em, e.g. 500px'),
								'section' 		=> $id.'_block_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($id.'_block_'.$i.'_image_'.$j.'_lg_width', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($id.'_block_'.$i.'_image_'.$j.'_lg_width', array(
								'label' 		=> __('Large Screen Image ','gaudium').($j+1).__(' Width','gaudium'),
								'description'	=> __('Enter value in px, % or em, e.g. 500px'),
								'section' 		=> $id.'_block_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($id.'_block_'.$i.'_image_'.$j.'_xs_height', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($id.'_block_'.$i.'_image_'.$j.'_xs_height', array(
								'label' 		=> __('XSmall Screen Image ','gaudium').($j+1).__(' Height','gaudium'),
								'description'	=> __('Enter value in px, % or em, e.g. 500px'),
								'section' 		=> $id.'_block_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($id.'_block_'.$i.'_image_'.$j.'_height', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($id.'_block_'.$i.'_image_'.$j.'_height', array(
								'label' 		=> __('Small Screen Image ','gaudium').($j+1).__(' Height','gaudium'),
								'description'	=> __('Enter value in px, % or em, e.g. 500px'),
								'section' 		=> $id.'_block_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($id.'_block_'.$i.'_image_'.$j.'_md_height', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($id.'_block_'.$i.'_image_'.$j.'_md_height', array(
								'label' 		=> __('Medium Screen Image ','gaudium').($j+1).__(' Height','gaudium'),
								'description'	=> __('Enter value in px, % or em, e.g. 500px'),
								'section' 		=> $id.'_block_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($id.'_block_'.$i.'_image_'.$j.'_lg_height', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($id.'_block_'.$i.'_image_'.$j.'_lg_height', array(
								'label' 		=> __('Large Screen Image ','gaudium').($j+1).__(' Height','gaudium'),
								'description'	=> __('Enter value in px, % or em, e.g. 500px'),
								'section' 		=> $id.'_block_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($id.'_block_'.$i.'_image_'.$j.'_box_xs_width', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($id.'_block_'.$i.'_image_'.$j.'_box_xs_width', array(
								'label' 		=> __('XSmall Screen Image ','gaudium').($j+1).__(' Box Width','gaudium'),
								'description'	=> __('Enter value in px, % or em, e.g. 500px'),
								'section' 		=> $id.'_block_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($id.'_block_'.$i.'_image_'.$j.'_box_width', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($id.'_block_'.$i.'_image_'.$j.'_box_width', array(
								'label' 		=> __('Small Screen Image ','gaudium').($j+1).__(' Box Width','gaudium'),
								'description'	=> __('Enter value in px, % or em, e.g. 500px'),
								'section' 		=> $id.'_block_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($id.'_block_'.$i.'_image_'.$j.'_box_md_width', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($id.'_block_'.$i.'_image_'.$j.'_box_md_width', array(
								'label' 		=> __('Medium Screen Image ','gaudium').($j+1).__(' Box Width','gaudium'),
								'description'	=> __('Enter value in px, % or em, e.g. 500px'),
								'section' 		=> $id.'_block_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($id.'_block_'.$i.'_image_'.$j.'_box_lg_width', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($id.'_block_'.$i.'_image_'.$j.'_box_lg_width', array(
								'label' 		=> __('Large Screen Image ','gaudium').($j+1).__(' Box Width','gaudium'),
								'description'	=> __('Enter value in px, % or em, e.g. 500px'),
								'section' 		=> $id.'_block_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($id.'_block_'.$i.'_image_'.$j.'_box_xs_height', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($id.'_block_'.$i.'_image_'.$j.'_box_xs_height', array(
								'label' 		=> __('XSmall Screen Image ','gaudium').($j+1).__(' Box Height','gaudium'),
								'description'	=> __('Enter value in px, % or em, e.g. 500px'),
								'section' 		=> $id.'_block_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($id.'_block_'.$i.'_image_'.$j.'_box_height', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($id.'_block_'.$i.'_image_'.$j.'_box_height', array(
								'label' 		=> __('Small Screen Image ','gaudium').($j+1).__(' Box Height','gaudium'),
								'description'	=> __('Enter value in px, % or em, e.g. 500px'),
								'section' 		=> $id.'_block_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($id.'_block_'.$i.'_image_'.$j.'_box_md_height', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($id.'_block_'.$i.'_image_'.$j.'_box_md_height', array(
								'label' 		=> __('Medium Screen Image ','gaudium').($j+1).__(' Box Height','gaudium'),
								'description'	=> __('Enter value in px, % or em, e.g. 500px'),
								'section' 		=> $id.'_block_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($id.'_block_'.$i.'_image_'.$j.'_box_lg_height', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($id.'_block_'.$i.'_image_'.$j.'_box_lg_height', array(
								'label' 		=> __('Large Screen Image ','gaudium').($j+1).__(' Box Height','gaudium'),
								'description'	=> __('Enter value in px, % or em, e.g. 500px'),
								'section' 		=> $id.'_block_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($id.'_block_'.$i.'_image_'.$j.'_box_xs_x', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($id.'_block_'.$i.'_image_'.$j.'_box_xs_x', array(
								'label' 		=> __('XSmall Screen Image ','gaudium').($j+1).__(' Box Left Position','gaudium'),
								'description'	=> __('Enter value in px, % or em, e.g. 500px'),
								'section' 		=> $id.'_block_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($id.'_block_'.$i.'_image_'.$j.'_box_x', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($id.'_block_'.$i.'_image_'.$j.'_box_x', array(
								'label' 		=> __('Small Screen Image ','gaudium').($j+1).__(' Box Left Position','gaudium'),
								'description'	=> __('Enter value in px, % or em, e.g. 500px'),
								'section' 		=> $id.'_block_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($id.'_block_'.$i.'_image_'.$j.'_box_md_x', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($id.'_block_'.$i.'_image_'.$j.'_box_md_x', array(
								'label' 		=> __('Medium Screen Image ','gaudium').($j+1).__(' Box Left Position','gaudium'),
								'description'	=> __('Enter value in px, % or em, e.g. 500px'),
								'section' 		=> $id.'_block_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($id.'_block_'.$i.'_image_'.$j.'_box_lg_x', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($id.'_block_'.$i.'_image_'.$j.'_box_lg_x', array(
								'label' 		=> __('Large Screen Image ','gaudium').($j+1).__(' Box Left Position','gaudium'),
								'description'	=> __('Enter value in px, % or em, e.g. 500px'),
								'section' 		=> $id.'_block_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($id.'_block_'.$i.'_image_'.$j.'_box_xs_y', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($id.'_block_'.$i.'_image_'.$j.'_box_xs_y', array(
								'label' 		=> __('XSmall Screen Image ','gaudium').($j+1).__(' Box Top Position','gaudium'),
								'description'	=> __('Enter value in px, % or em, e.g. 500px'),
								'section' 		=> $id.'_block_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($id.'_block_'.$i.'_image_'.$j.'_box_y', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($id.'_block_'.$i.'_image_'.$j.'_box_y', array(
								'label' 		=> __('Small Screen Image ','gaudium').($j+1).__(' Box Top Position','gaudium'),
								'description'	=> __('Enter value in px, % or em, e.g. 500px'),
								'section' 		=> $id.'_block_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($id.'_block_'.$i.'_image_'.$j.'_box_md_y', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($id.'_block_'.$i.'_image_'.$j.'_box_md_y', array(
								'label' 		=> __('Medium Screen Image ','gaudium').($j+1).__(' Box Top Position','gaudium'),
								'description'	=> __('Enter value in px, % or em, e.g. 500px'),
								'section' 		=> $id.'_block_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($id.'_block_'.$i.'_image_'.$j.'_box_lg_y', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($id.'_block_'.$i.'_image_'.$j.'_box_lg_y', array(
								'label' 		=> __('Large Screen Image ','gaudium').($j+1).__(' Box Top Position','gaudium'),
								'description'	=> __('Enter value in px, % or em, e.g. 500px'),
								'section' 		=> $id.'_block_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($id.'_block_'.$i.'_image_'.$j.'_styles_xs', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($id.'_block_'.$i.'_image_'.$j.'_styles_xs', array(
								'label' 		=> __('XSmall Screen Image ','gaudium').($j+1).__(' Styles','gaudium'),
								'description'	=> __('Enter styles, e.g. max-width: 50%;'),
								'section' 		=> $id.'_block_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($id.'_block_'.$i.'_image_'.$j.'_styles', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($id.'_block_'.$i.'_image_'.$j.'_styles', array(
								'label' 		=> __('Small Screen Image ','gaudium').($j+1).__(' Styles','gaudium'),
								'description'	=> __('Enter styles, e.g. max-width: 50%;'),
								'section' 		=> $id.'_block_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($id.'_block_'.$i.'_image_'.$j.'_styles_md', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($id.'_block_'.$i.'_image_'.$j.'_styles_md', array(
								'label' 		=> __('Medium Screen Image ','gaudium').($j+1).__(' Styles','gaudium'),
								'description'	=> __('Enter styles, e.g. max-width: 50%;'),
								'section' 		=> $id.'_block_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($id.'_block_'.$i.'_image_'.$j.'_styles_lg', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($id.'_block_'.$i.'_image_'.$j.'_styles_lg', array(
								'label' 		=> __('Large Screen Image ','gaudium').($j+1).__(' Styles','gaudium'),
								'description'	=> __('Enter styles, e.g. max-width: 50%;'),
								'section' 		=> $id.'_block_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($id.'_block_'.$i.'_image_'.$j.'_bg_position', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($id.'_block_'.$i.'_image_'.$j.'_bg_position', array(
								'label' 		=> __('Image ','gaudium').($j+1).__(' Background Position','gaudium'),
								'type'			=> 'select',
								'choices'		=> array(
									'0'			=> __('Select'),
									'-0'		=> __('Custom'),
									'center'	=> __('Center'),
									'left 0'	=> __('Left'),
									'right 0'	=> __('Right'),
									'bottom'	=> __('Bottom'),
									'top'		=> __('Top'),
								),
								'section' 		=> $id.'_block_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($id.'_block_'.$i.'_image_'.$j.'_xs_x', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($id.'_block_'.$i.'_image_'.$j.'_xs_x', array(
								'label' 		=> __('XSmall Screen Image ','gaudium').($j+1).__(' Left Position','gaudium'),
								'section' 		=> $id.'_block_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($id.'_block_'.$i.'_image_'.$j.'_x', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($id.'_block_'.$i.'_image_'.$j.'_x', array(
								'label' 		=> __('Image ','gaudium').($j+1).__(' Left Position','gaudium'),
								'section' 		=> $id.'_block_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($id.'_block_'.$i.'_image_'.$j.'_xs_y', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($id.'_block_'.$i.'_image_'.$j.'_xs_y', array(
								'label' 		=> __('XSmall Screen Image ','gaudium').($j+1).__(' Top Position','gaudium'),
								'description'	=> __('Enter value in px, % or em, e.g. 100px'),
								'section' 		=> $id.'_block_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($id.'_block_'.$i.'_image_'.$j.'_y', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($id.'_block_'.$i.'_image_'.$j.'_y', array(
								'label' 		=> __('Image ','gaudium').($j+1).__(' Top Position','gaudium'),
								'description'	=> __('Enter value in px, % or em, e.g. 100px'),
								'section' 		=> $id.'_block_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($id.'_block_'.$i.'_image_'.$j.'_repeat', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($id.'_block_'.$i.'_image_'.$j.'_repeat', array(
								'label' 		=> __('Image ','gaudium').($j+1).__(' Repeat','gaudium'),
								'type'			=> 'select',
								'choices' 		=> array(
									'0' 			=> __('Select'),
								    'repeat' 		=> __('Repeat'),
								    'no-repeat' 	=> __('No repeat'),
								),
								'section' 		=> $id.'_block_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($id.'_block_'.$i.'_image_'.$j.'_speed', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod',
							));

							$wp_customize->add_control($id.'_block_'.$i.'_image_'.$j.'_speed', array(
								'label' 		=> __('Image ','gaudium').($j+1).__(' speed','gaudium'),
								'description'	=> __('Speed from 0.0 (static) to 1.0 (fixed).'),
								'section' 		=> $id.'_block_'.$i,
								'priority' 		=> $priority++
							));
						}

						$wp_customize->add_setting($id.'_block_'.$i.'_content_number', array(
							'default' 		=> _x('0','gaudium'),
							'type' 			=> 'theme_mod'
						));

						$wp_customize->add_control($id.'_block_'.$i.'_content_number', array(
							'label' 		=> __('Number of Content Blocks','gaudium'),
							'description'	=> __('Requires PUBLISH and RELOAD.','gaudium'),
							'section' 		=> $id.'_block_'.$i,
							'priority' 		=> $priority++
						));

						for($j = 0; $j < intval(get_theme_mod($id.'_block_'.$i.'_content_number')); $j++) {

							$wp_customize->add_setting($id.'_block_'.$i.'_content_'.$j.'_cols', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($id.'_block_'.$i.'_content_'.$j.'_cols', array(
								'label' 		=> __('Content Columns','gaudium'),
								'description'	=> __('Number of columns for this content block, e.g. 3 for a 4-column layout, 4 for a 3-column layout or 6 a 2-column layout.'),
								'type'			=> 'select',
								'choices'		=> array(
									'0'		=> __('Select'),
									'1'		=> __('1'),
									'2'		=> __('2'),
									'3'		=> __('3'),
									'4'		=> __('4'),
									'5'		=> __('5'),
									'6'		=> __('6'),
									'7'		=> __('7'),
									'8'		=> __('8'),
									'9'		=> __('9'),
									'10'	=> __('10'),
									'11'	=> __('11'),
									'12'	=> __('12'),
								),
								'section' 		=> $id.'_block_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($id.'_block_'.$i.'_content_'.$j.'_cols_push', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($id.'_block_'.$i.'_content_'.$j.'_cols_push', array(
								'label' 		=> __('Push Content','gaudium'),
								'description'	=> __('Number of columns to shift the content block to the right. Select 0 to deactivate.'),
								'type'			=> 'select',
								'choices'		=> array(
									'0'		=> __('Select'),
									'-0'	=> __('Reset'),
									'1'		=> __('1'),
									'2'		=> __('2'),
									'3'		=> __('3'),
									'4'		=> __('4'),
									'5'		=> __('5'),
									'6'		=> __('6'),
									'7'		=> __('7'),
									'8'		=> __('8'),
									'9'		=> __('9'),
									'10'	=> __('10'),
									'11'	=> __('11'),
									'12'	=> __('12'),
								),
								'section' 		=> $id.'_block_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($id.'_block_'.$i.'_content_'.$j.'_cols_pull', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($id.'_block_'.$i.'_content_'.$j.'_cols_pull', array(
								'label' 		=> __('Pull Content','gaudium'),
								'description'	=> __('Number of columns to shift the content block to the left. Select 0 to deactivate.'),
								'type'			=> 'select',
								'choices'		=> array(
									'0'		=> __('Select'),
									'-0'	=> __('Reset'),
									'1'		=> __('1'),
									'2'		=> __('2'),
									'3'		=> __('3'),
									'4'		=> __('4'),
									'5'		=> __('5'),
									'6'		=> __('6'),
									'7'		=> __('7'),
									'8'		=> __('8'),
									'9'		=> __('9'),
									'10'	=> __('10'),
									'11'	=> __('11'),
									'12'	=> __('12'),
								),
								'section' 		=> $id.'_block_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($id.'_block_'.$i.'_content_'.$j.'_top_xs_space', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($id.'_block_'.$i.'_content_'.$j.'_top_xs_space', array(
								'label' 		=> __('XSmall Screen Top','gaudium'),
								'description'	=> __('Add space to top on extra-small and larger screens, i.e. mobile devices. Select 0 to deactivate.'),
								'type'			=> 'select',
								'choices'	=> array(
									'0'		=> __('Select'),
									'-0'	=> __('Reset'),
									'1'		=> __('1'),
									'2'		=> __('2'),
									'3'		=> __('3'),
									'4'		=> __('4'),
									'5'		=> __('5'),
									'6'		=> __('6'),
									'7'		=> __('7'),
									'8'		=> __('8'),
									'9'		=> __('9'),
									'10'	=> __('10'),
									'11'	=> __('11'),
									'12'	=> __('12'),
									'13'	=> __('13'),
									'14'	=> __('14'),
									'15'	=> __('15'),
									'16'	=> __('16'),
									'17'	=> __('17'),
									'18'	=> __('18'),
									'19'	=> __('19'),
									'20'	=> __('20'),
									'21'	=> __('21'),
									'22'	=> __('22'),
									'23'	=> __('23'),
									'24'	=> __('24'),
									'25'	=> __('25'),
									'26'	=> __('26'),
									'27'	=> __('27'),
									'28'	=> __('28'),
									'29'	=> __('29'),
									'30'	=> __('30'),
									'31'	=> __('31'),
									'32'	=> __('32'),
									'33'	=> __('33'),
									'34'	=> __('34'),
									'35'	=> __('35'),
									'36'	=> __('36'),
									'37'	=> __('37'),
									'38'	=> __('38'),
									'39'	=> __('39'),
									'40'	=> __('40'),
								),
								'section' 		=> $id.'_block_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($id.'_block_'.$i.'_content_'.$j.'_top_sm_space', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($id.'_block_'.$i.'_content_'.$j.'_top_sm_space', array(
								'label' 		=> __('Small Screen Top','gaudium'),
								'description'	=> __('Add space to top on small and larger screens.'),
								'type'			=> 'select',
								'choices'	=> array(
									'0'		=> __('Select'),
									'-0'	=> __('Reset'),
									'1'		=> __('1'),
									'2'		=> __('2'),
									'3'		=> __('3'),
									'4'		=> __('4'),
									'5'		=> __('5'),
									'6'		=> __('6'),
									'7'		=> __('7'),
									'8'		=> __('8'),
									'9'		=> __('9'),
									'10'	=> __('10'),
									'11'	=> __('11'),
									'12'	=> __('12'),
									'13'	=> __('13'),
									'14'	=> __('14'),
									'15'	=> __('15'),
									'16'	=> __('16'),
									'17'	=> __('17'),
									'18'	=> __('18'),
									'19'	=> __('19'),
									'20'	=> __('20'),
									'21'	=> __('21'),
									'22'	=> __('22'),
									'23'	=> __('23'),
									'24'	=> __('24'),
									'25'	=> __('25'),
									'26'	=> __('26'),
									'27'	=> __('27'),
									'28'	=> __('28'),
									'29'	=> __('29'),
									'30'	=> __('30'),
									'31'	=> __('31'),
									'32'	=> __('32'),
									'33'	=> __('33'),
									'34'	=> __('34'),
									'35'	=> __('35'),
									'36'	=> __('36'),
									'37'	=> __('37'),
									'38'	=> __('38'),
									'39'	=> __('39'),
									'40'	=> __('40'),
								),
								'section' 		=> $id.'_block_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($id.'_block_'.$i.'_content_'.$j.'_top_md_space', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($id.'_block_'.$i.'_content_'.$j.'_top_md_space', array(
								'label' 		=> __('Medium Screen Top','gaudium'),
								'description'	=> __('Add space to top on medium and larger screens.'),
								'type'			=> 'select',
								'choices'	=> array(
									'0'		=> __('Select'),
									'-0'	=> __('Reset'),
									'1'		=> __('1'),
									'2'		=> __('2'),
									'3'		=> __('3'),
									'4'		=> __('4'),
									'5'		=> __('5'),
									'6'		=> __('6'),
									'7'		=> __('7'),
									'8'		=> __('8'),
									'9'		=> __('9'),
									'10'	=> __('10'),
									'11'	=> __('11'),
									'12'	=> __('12'),
									'13'	=> __('13'),
									'14'	=> __('14'),
									'15'	=> __('15'),
									'16'	=> __('16'),
									'17'	=> __('17'),
									'18'	=> __('18'),
									'19'	=> __('19'),
									'20'	=> __('20'),
									'21'	=> __('21'),
									'22'	=> __('22'),
									'23'	=> __('23'),
									'24'	=> __('24'),
									'25'	=> __('25'),
									'26'	=> __('26'),
									'27'	=> __('27'),
									'28'	=> __('28'),
									'29'	=> __('29'),
									'30'	=> __('30'),
									'31'	=> __('31'),
									'32'	=> __('32'),
									'33'	=> __('33'),
									'34'	=> __('34'),
									'35'	=> __('35'),
									'36'	=> __('36'),
									'37'	=> __('37'),
									'38'	=> __('38'),
									'39'	=> __('39'),
									'40'	=> __('40'),
								),
								'section' 		=> $id.'_block_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($id.'_block_'.$i.'_content_'.$j.'_top_lg_space', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($id.'_block_'.$i.'_content_'.$j.'_top_lg_space', array(
								'label' 		=> __('Large Screen Top','gaudium'),
								'description'	=> __('Add space to top on large screens.'),
								'type'			=> 'select',
								'choices'	=> array(
									'0'		=> __('Select'),
									'-0'	=> __('Reset'),
									'1'		=> __('1'),
									'2'		=> __('2'),
									'3'		=> __('3'),
									'4'		=> __('4'),
									'5'		=> __('5'),
									'6'		=> __('6'),
									'7'		=> __('7'),
									'8'		=> __('8'),
									'9'		=> __('9'),
									'10'	=> __('10'),
									'11'	=> __('11'),
									'12'	=> __('12'),
									'13'	=> __('13'),
									'14'	=> __('14'),
									'15'	=> __('15'),
									'16'	=> __('16'),
									'17'	=> __('17'),
									'18'	=> __('18'),
									'19'	=> __('19'),
									'20'	=> __('20'),
									'21'	=> __('21'),
									'22'	=> __('22'),
									'23'	=> __('23'),
									'24'	=> __('24'),
									'25'	=> __('25'),
									'26'	=> __('26'),
									'27'	=> __('27'),
									'28'	=> __('28'),
									'29'	=> __('29'),
									'30'	=> __('30'),
									'31'	=> __('31'),
									'32'	=> __('32'),
									'33'	=> __('33'),
									'34'	=> __('34'),
									'35'	=> __('35'),
									'36'	=> __('36'),
									'37'	=> __('37'),
									'38'	=> __('38'),
									'39'	=> __('39'),
									'40'	=> __('40'),
								),
								'section' 		=> $id.'_block_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($id.'_block_'.$i.'_content_'.$j.'_bottom_xs_space', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($id.'_block_'.$i.'_content_'.$j.'_bottom_xs_space', array(
								'label' 		=> __('XSmall Screen Bottom','gaudium'),
								'description'	=> __('Add space to top on extra-small and larger screens, i.e. mobile devices. Select 0 to deactivate.'),
								'type'			=> 'select',
								'choices'	=> array(
									'0'		=> __('Select'),
									'-0'	=> __('Reset'),
									'1'		=> __('1'),
									'2'		=> __('2'),
									'3'		=> __('3'),
									'4'		=> __('4'),
									'5'		=> __('5'),
									'6'		=> __('6'),
									'7'		=> __('7'),
									'8'		=> __('8'),
									'9'		=> __('9'),
									'10'	=> __('10'),
									'11'	=> __('11'),
									'12'	=> __('12'),
									'13'	=> __('13'),
									'14'	=> __('14'),
									'15'	=> __('15'),
									'16'	=> __('16'),
									'17'	=> __('17'),
									'18'	=> __('18'),
									'19'	=> __('19'),
									'20'	=> __('20'),
									'21'	=> __('21'),
									'22'	=> __('22'),
									'23'	=> __('23'),
									'24'	=> __('24'),
									'25'	=> __('25'),
									'26'	=> __('26'),
									'27'	=> __('27'),
									'28'	=> __('28'),
									'29'	=> __('29'),
									'30'	=> __('30'),
									'31'	=> __('31'),
									'32'	=> __('32'),
									'33'	=> __('33'),
									'34'	=> __('34'),
									'35'	=> __('35'),
									'36'	=> __('36'),
									'37'	=> __('37'),
									'38'	=> __('38'),
									'39'	=> __('39'),
									'40'	=> __('40'),
								),
								'section' 		=> $id.'_block_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($id.'_block_'.$i.'_content_'.$j.'_bottom_sm_space', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($id.'_block_'.$i.'_content_'.$j.'_bottom_sm_space', array(
								'label' 		=> __('Small Screen Bottom','gaudium'),
								'description'	=> __('Add space to bottom on small and larger screens.'),
								'type'			=> 'select',
								'choices'	=> array(
									'0'		=> __('Select'),
									'-0'	=> __('Reset'),
									'1'		=> __('1'),
									'2'		=> __('2'),
									'3'		=> __('3'),
									'4'		=> __('4'),
									'5'		=> __('5'),
									'6'		=> __('6'),
									'7'		=> __('7'),
									'8'		=> __('8'),
									'9'		=> __('9'),
									'10'	=> __('10'),
									'11'	=> __('11'),
									'12'	=> __('12'),
									'13'	=> __('13'),
									'14'	=> __('14'),
									'15'	=> __('15'),
									'16'	=> __('16'),
									'17'	=> __('17'),
									'18'	=> __('18'),
									'19'	=> __('19'),
									'20'	=> __('20'),
									'21'	=> __('21'),
									'22'	=> __('22'),
									'23'	=> __('23'),
									'24'	=> __('24'),
									'25'	=> __('25'),
									'26'	=> __('26'),
									'27'	=> __('27'),
									'28'	=> __('28'),
									'29'	=> __('29'),
									'30'	=> __('30'),
									'31'	=> __('31'),
									'32'	=> __('32'),
									'33'	=> __('33'),
									'34'	=> __('34'),
									'35'	=> __('35'),
									'36'	=> __('36'),
									'37'	=> __('37'),
									'38'	=> __('38'),
									'39'	=> __('39'),
									'40'	=> __('40'),
								),
								'section' 		=> $id.'_block_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($id.'_block_'.$i.'_content_'.$j.'_bottom_md_space', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($id.'_block_'.$i.'_content_'.$j.'_bottom_md_space', array(
								'label' 		=> __('Medium Screen Bottom','gaudium'),
								'description'	=> __('Add space to bottom on medium and larger screens.'),
								'type'			=> 'select',
								'choices'	=> array(
									'0'		=> __('Select'),
									'-0'	=> __('Reset'),
									'1'		=> __('1'),
									'2'		=> __('2'),
									'3'		=> __('3'),
									'4'		=> __('4'),
									'5'		=> __('5'),
									'6'		=> __('6'),
									'7'		=> __('7'),
									'8'		=> __('8'),
									'9'		=> __('9'),
									'10'	=> __('10'),
									'11'	=> __('11'),
									'12'	=> __('12'),
									'13'	=> __('13'),
									'14'	=> __('14'),
									'15'	=> __('15'),
									'16'	=> __('16'),
									'17'	=> __('17'),
									'18'	=> __('18'),
									'19'	=> __('19'),
									'20'	=> __('20'),
									'21'	=> __('21'),
									'22'	=> __('22'),
									'23'	=> __('23'),
									'24'	=> __('24'),
									'25'	=> __('25'),
									'26'	=> __('26'),
									'27'	=> __('27'),
									'28'	=> __('28'),
									'29'	=> __('29'),
									'30'	=> __('30'),
									'31'	=> __('31'),
									'32'	=> __('32'),
									'33'	=> __('33'),
									'34'	=> __('34'),
									'35'	=> __('35'),
									'36'	=> __('36'),
									'37'	=> __('37'),
									'38'	=> __('38'),
									'39'	=> __('39'),
									'40'	=> __('40'),
								),
								'section' 		=> $id.'_block_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($id.'_block_'.$i.'_content_'.$j.'_bottom_lg_space', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($id.'_block_'.$i.'_content_'.$j.'_bottom_lg_space', array(
								'label' 		=> __('Large Screen Bottom','gaudium'),
								'description'	=> __('Add space to bottom on large screens.'),
								'type'			=> 'select',
								'choices'	=> array(
									'0'		=> __('Select'),
									'-0'	=> __('Reset'),
									'1'		=> __('1'),
									'2'		=> __('2'),
									'3'		=> __('3'),
									'4'		=> __('4'),
									'5'		=> __('5'),
									'6'		=> __('6'),
									'7'		=> __('7'),
									'8'		=> __('8'),
									'9'		=> __('9'),
									'10'	=> __('10'),
									'11'	=> __('11'),
									'12'	=> __('12'),
									'13'	=> __('13'),
									'14'	=> __('14'),
									'15'	=> __('15'),
									'16'	=> __('16'),
									'17'	=> __('17'),
									'18'	=> __('18'),
									'19'	=> __('19'),
									'20'	=> __('20'),
									'21'	=> __('21'),
									'22'	=> __('22'),
									'23'	=> __('23'),
									'24'	=> __('24'),
									'25'	=> __('25'),
									'26'	=> __('26'),
									'27'	=> __('27'),
									'28'	=> __('28'),
									'29'	=> __('29'),
									'30'	=> __('30'),
									'31'	=> __('31'),
									'32'	=> __('32'),
									'33'	=> __('33'),
									'34'	=> __('34'),
									'35'	=> __('35'),
									'36'	=> __('36'),
									'37'	=> __('37'),
									'38'	=> __('38'),
									'39'	=> __('39'),
									'40'	=> __('40'),
								),
								'section' 		=> $id.'_block_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($id.'_block_'.$i.'_content_'.$j, array(
								'default' 		=> _x('','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($id.'_block_'.$i.'_content_'.$j, array(
								'label' 		=> __('Content','gaudium'),
								'description'   => __('Supports text or code.','gaudium'),
								'type'			=> 'textarea',
								'section' 		=> $id.'_block_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($id.'_block_'.$i.'_content_'.$j.'_speed', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));

							$wp_customize->add_control($id.'_block_'.$i.'_content_'.$j.'_speed', array(
								'label' 		=> __('Content Speed','gaudium'),
								'description' 	=> __('Speed from 0.0 (static) to 1.0 (fixed).','gaudium'),
								'section' 		=> $id.'_block_'.$i,
								'priority' 		=> $priority++
							));

							$wp_customize->add_setting($id.'_block_'.$i.'_content_'.$j.'_number_images', array(
								'default' 		=> _x('0','gaudium'),
								'type' 			=> 'theme_mod'
							));
							
							$wp_customize->add_control($id.'_block_'.$i.'_content_'.$j.'_number_images', array(
								'label' 		=> __('Number of Images','gaudium'),
								'description'	=> __('Requires PUBLISH and RELOAD.','gaudium'),
								'section' 		=> $id.'_block_'.$i,
								'priority' 		=> $priority++
							));
							
							for($k = 0; $k < intval(get_theme_mod($id.'_block_'.$i.'_content_'.$j.'_number_images')); $k++) {

								$wp_customize->add_setting($id.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_xs_url', array(
									'default' 		=> '',
									'type' 			=> 'theme_mod'
								));

								$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, $id.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_xs_url', array(
									'label' 		=> __('XSmall Screen (Only) Image ','gaudium').($k+1),
									'section' 		=> $id.'_block_'.$i,
									'settings'		=> $id.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_xs_url',
									'priority' 		=> $priority++
								)));

								$wp_customize->add_setting($id.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_url', array(
									'default' 		=> '',
									'type' 			=> 'theme_mod'
								));

								$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, $id.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_url', array(
									'label' 		=> __('XSmall Screen Image ','gaudium').($k+1),
									'section' 		=> $id.'_block_'.$i,
									'settings'		=> $id.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_url',
									'priority' 		=> $priority++
								)));

								$wp_customize->add_setting($id.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_sm_url', array(
									'default' 		=> '',
									'type' 			=> 'theme_mod'
								));

								$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, $id.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_sm_url', array(
									'label' 		=> __('Small Screen Image ','gaudium').($k+1),
									'section' 		=> $id.'_block_'.$i,
									'settings'		=> $id.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_sm_url',
									'priority' 		=> $priority++
								)));

								$wp_customize->add_setting($id.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_md_url', array(
									'default' 		=> '',
									'type' 			=> 'theme_mod'
								));

								$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, $id.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_md_url', array(
									'label' 		=> __('Medium Screen Image ','gaudium').($k+1),
									'section' 		=> $id.'_block_'.$i,
									'settings'		=> $id.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_md_url',
									'priority' 		=> $priority++
								)));

								$wp_customize->add_setting($id.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_lg_url', array(
									'default' 		=> '',
									'type' 			=> 'theme_mod'
								));

								$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, $id.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_lg_url', array(
									'label' 		=> __('Large Screen Image ','gaudium').($k+1),
									'section' 		=> $id.'_block_'.$i,
									'settings'		=> $id.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_lg_url',
									'priority' 		=> $priority++
								)));

								$wp_customize->add_setting($id.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_bg', array(
									'default' 		=> _x('0','gaudium'),
									'type' 			=> 'theme_mod'

								));

								$wp_customize->add_control($id.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_bg', array(
									'label' 		=> __('Image ','gaudium').($k+1).__(' Background Color','gaudium'),
									'description'	=> __('Background color, e.g. #e4e4e4'),
									'section' 		=> $id.'_block_'.$i,
									'priority' 		=> $priority++
								));

								$wp_customize->add_setting($id.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_bg_size', array(
									'default' 		=> _x('0','gaudium'),
									'type' 			=> 'theme_mod'
								));

								$wp_customize->add_control($id.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_bg_size', array(
									'label' 		=> __('Image ','gaudium').($k+1).__(' Background Size','gaudium'),
									'type'			=> 'select',
									'choices'		=> array(
										'0'			=> __('Select'),
										'-0'		=> __('Custom'),
										'auto'		=> __('Auto'),
										'cover'		=> __('Cover'),
										'contain'	=> __('Contain'),
									),
									'section' 		=> $id.'_block_'.$i,
									'priority' 		=> $priority++
								));

								$wp_customize->add_setting($id.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_layout', array(
									'default' 		=> _x('0','gaudium'),
									'type' 			=> 'theme_mod'
								));

								$wp_customize->add_control($id.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_layout', array(
									'label' 		=> __('Image ','gaudium').($k+1).__(' Layout','gaudium'),
									'type'			=> 'select',
									'choices'		=> array(
										'0'				=> __('Select'),
										'default'		=> __('Default'),
										'landscape'		=> __('Landscape'),
										'portrait'		=> __('Portrait'),
										'vr'		    => __('Vertical Rhythm'),
									),
									'section' 		=> $id.'_block_'.$i,
									'priority' 		=> $priority++
								));

								$wp_customize->add_setting($id.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_xs_width', array(
									'default' 		=> _x('0','gaudium'),
									'type' 			=> 'theme_mod'
								));

								$wp_customize->add_control($id.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_xs_width', array(
									'label' 		=> __('XSmall Screen Image ','gaudium').($k+1).__(' Width','gaudium'),
									'description'	=> __('Enter value in px, % or em, e.g. 500px'),
									'section' 		=> $id.'_block_'.$i,
									'priority' 		=> $priority++
								));

								$wp_customize->add_setting($id.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_width', array(
									'default' 		=> _x('0','gaudium'),
									'type' 			=> 'theme_mod'
								));

								$wp_customize->add_control($id.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_width', array(
									'label' 		=> __('Small Screen Image ','gaudium').($k+1).__(' Width','gaudium'),
									'description'	=> __('Enter value in px, % or em, e.g. 500px'),
									'section' 		=> $id.'_block_'.$i,
									'priority' 		=> $priority++
								));

								$wp_customize->add_setting($id.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_xs_height', array(
									'default' 		=> _x('0','gaudium'),
									'type' 			=> 'theme_mod'
								));

								$wp_customize->add_control($id.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_xs_height', array(
									'label' 		=> __('XSmall Screen Image ','gaudium').($k+1).__(' Height','gaudium'),
									'description'	=> __('Enter value in px, % or em, e.g. 500px'),
									'section' 		=> $id.'_block_'.$i,
									'priority' 		=> $priority++
								));

								$wp_customize->add_setting($id.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_height', array(
									'default' 		=> _x('0','gaudium'),
									'type' 			=> 'theme_mod'
								));

								$wp_customize->add_control($id.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_height', array(
									'label' 		=> __('Small Screen Image ','gaudium').($k+1).__(' Height','gaudium'),
									'description'	=> __('Enter value in px, % or em, e.g. 500px'),
									'section' 		=> $id.'_block_'.$i,
									'priority' 		=> $priority++
								));

								$wp_customize->add_setting($id.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_md_height', array(
									'default' 		=> _x('0','gaudium'),
									'type' 			=> 'theme_mod'
								));

								$wp_customize->add_control($id.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_md_height', array(
									'label' 		=> __('Medium Screen Image ','gaudium').($k+1).__(' Height','gaudium'),
									'description'	=> __('Enter value in px, % or em, e.g. 500px'),
									'section' 		=> $id.'_block_'.$i,
									'priority' 		=> $priority++
								));

								$wp_customize->add_setting($id.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_lg_height', array(
									'default' 		=> _x('0','gaudium'),
									'type' 			=> 'theme_mod'
								));

								$wp_customize->add_control($id.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_lg_height', array(
									'label' 		=> __('Large Screen Image ','gaudium').($k+1).__(' Height','gaudium'),
									'description'	=> __('Enter value in px, % or em, e.g. 500px'),
									'section' 		=> $id.'_block_'.$i,
									'priority' 		=> $priority++
								));

								$wp_customize->add_setting($id.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_box_xs_width', array(
									'default' 		=> _x('0','gaudium'),
									'type' 			=> 'theme_mod'
								));

								$wp_customize->add_control($id.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_box_xs_width', array(
									'label' 		=> __('XSmall Screen Image ','gaudium').($k+1).__(' Box Width','gaudium'),
									'description'	=> __('Enter value in px, % or em, e.g. 500px'),
									'section' 		=> $id.'_block_'.$i,
									'priority' 		=> $priority++
								));

								$wp_customize->add_setting($id.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_box_width', array(
									'default' 		=> _x('0','gaudium'),
									'type' 			=> 'theme_mod'
								));

								$wp_customize->add_control($id.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_box_width', array(
									'label' 		=> __('Small Screen Image ','gaudium').($k+1).__(' Box Width','gaudium'),
									'description'	=> __('Enter value in px, % or em, e.g. 500px'),
									'section' 		=> $id.'_block_'.$i,
									'priority' 		=> $priority++
								));

								$wp_customize->add_setting($id.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_box_md_width', array(
									'default' 		=> _x('0','gaudium'),
									'type' 			=> 'theme_mod'
								));

								$wp_customize->add_control($id.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_box_md_width', array(
									'label' 		=> __('Medium Screen Image ','gaudium').($k+1).__(' Box Width','gaudium'),
									'description'	=> __('Enter value in px, % or em, e.g. 500px'),
									'section' 		=> $id.'_block_'.$i,
									'priority' 		=> $priority++
								));

								$wp_customize->add_setting($id.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_box_lg_width', array(
									'default' 		=> _x('0','gaudium'),
									'type' 			=> 'theme_mod'
								));

								$wp_customize->add_control($id.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_box_lg_width', array(
									'label' 		=> __('Large Screen Image ','gaudium').($k+1).__(' Box Width','gaudium'),
									'description'	=> __('Enter value in px, % or em, e.g. 500px'),
									'section' 		=> $id.'_block_'.$i,
									'priority' 		=> $priority++
								));

								$wp_customize->add_setting($id.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_box_xs_height', array(
									'default' 		=> _x('0','gaudium'),
									'type' 			=> 'theme_mod'
								));

								$wp_customize->add_control($id.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_box_xs_height', array(
									'label' 		=> __('XSmall Screen Image ','gaudium').($k+1).__(' Box Height','gaudium'),
									'description'	=> __('Enter value in px, % or em, e.g. 500px'),
									'section' 		=> $id.'_block_'.$i,
									'priority' 		=> $priority++
								));

								$wp_customize->add_setting($id.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_box_height', array(
									'default' 		=> _x('0','gaudium'),
									'type' 			=> 'theme_mod'
								));

								$wp_customize->add_control($id.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_box_height', array(
									'label' 		=> __('Small Screen Image ','gaudium').($k+1).__(' Box Height','gaudium'),
									'description'	=> __('Enter value in px, % or em, e.g. 500px'),
									'section' 		=> $id.'_block_'.$i,
									'priority' 		=> $priority++
								));

								$wp_customize->add_setting($id.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_box_md_height', array(
									'default' 		=> _x('0','gaudium'),
									'type' 			=> 'theme_mod'
								));

								$wp_customize->add_control($id.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_box_md_height', array(
									'label' 		=> __('Medium Screen Image ','gaudium').($k+1).__(' Box Height','gaudium'),
									'description'	=> __('Enter value in px, % or em, e.g. 500px'),
									'section' 		=> $id.'_block_'.$i,
									'priority' 		=> $priority++
								));

								$wp_customize->add_setting($id.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_box_lg_height', array(
									'default' 		=> _x('0','gaudium'),
									'type' 			=> 'theme_mod'
								));

								$wp_customize->add_control($id.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_box_lg_height', array(
									'label' 		=> __('Large Screen Image ','gaudium').($k+1).__(' Box Height','gaudium'),
									'description'	=> __('Enter value in px, % or em, e.g. 500px'),
									'section' 		=> $id.'_block_'.$i,
									'priority' 		=> $priority++
								));

								$wp_customize->add_setting($id.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_box_xs_x', array(
									'default' 		=> _x('0','gaudium'),
									'type' 			=> 'theme_mod'
								));

								$wp_customize->add_control($id.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_box_xs_x', array(
									'label' 		=> __('XSmall Screen Image ','gaudium').($k+1).__(' Box Left Position','gaudium'),
									'description'	=> __('Enter value in px, % or em, e.g. 500px'),
									'section' 		=> $id.'_block_'.$i,
									'priority' 		=> $priority++
								));

								$wp_customize->add_setting($id.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_box_x', array(
									'default' 		=> _x('0','gaudium'),
									'type' 			=> 'theme_mod'
								));

								$wp_customize->add_control($id.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_box_x', array(
									'label' 		=> __('Small Screen Image ','gaudium').($k+1).__(' Box Left Position','gaudium'),
									'description'	=> __('Enter value in px, % or em, e.g. 500px'),
									'section' 		=> $id.'_block_'.$i,
									'priority' 		=> $priority++
								));

								$wp_customize->add_setting($id.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_box_md_x', array(
									'default' 		=> _x('0','gaudium'),
									'type' 			=> 'theme_mod'
								));

								$wp_customize->add_control($id.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_box_md_x', array(
									'label' 		=> __('Medium Screen Image ','gaudium').($k+1).__(' Box Left Position','gaudium'),
									'description'	=> __('Enter value in px, % or em, e.g. 500px'),
									'section' 		=> $id.'_block_'.$i,
									'priority' 		=> $priority++
								));

								$wp_customize->add_setting($id.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_box_lg_x', array(
									'default' 		=> _x('0','gaudium'),
									'type' 			=> 'theme_mod'
								));

								$wp_customize->add_control($id.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_box_lg_x', array(
									'label' 		=> __('Large Screen Image ','gaudium').($k+1).__(' Box Left Position','gaudium'),
									'description'	=> __('Enter value in px, % or em, e.g. 500px'),
									'section' 		=> $id.'_block_'.$i,
									'priority' 		=> $priority++
								));

								$wp_customize->add_setting($id.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_box_xs_y', array(
									'default' 		=> _x('0','gaudium'),
									'type' 			=> 'theme_mod'
								));

								$wp_customize->add_control($id.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_box_xs_y', array(
									'label' 		=> __('XSmall Screen Image ','gaudium').($k+1).__(' Box Top Position','gaudium'),
									'description'	=> __('Enter value in px, % or em, e.g. 500px'),
									'section' 		=> $id.'_block_'.$i,
									'priority' 		=> $priority++
								));

								$wp_customize->add_setting($id.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_box_y', array(
									'default' 		=> _x('0','gaudium'),
									'type' 			=> 'theme_mod'
								));

								$wp_customize->add_control($id.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_box_y', array(
									'label' 		=> __('Small Screen Image ','gaudium').($k+1).__(' Box Top Position','gaudium'),
									'description'	=> __('Enter value in px, % or em, e.g. 500px'),
									'section' 		=> $id.'_block_'.$i,
									'priority' 		=> $priority++
								));

								$wp_customize->add_setting($id.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_box_md_y', array(
									'default' 		=> _x('0','gaudium'),
									'type' 			=> 'theme_mod'
								));

								$wp_customize->add_control($id.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_box_md_y', array(
									'label' 		=> __('Medium Screen Image ','gaudium').($k+1).__(' Box Top Position','gaudium'),
									'description'	=> __('Enter value in px, % or em, e.g. 500px'),
									'section' 		=> $id.'_block_'.$i,
									'priority' 		=> $priority++
								));

								$wp_customize->add_setting($id.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_box_lg_y', array(
									'default' 		=> _x('0','gaudium'),
									'type' 			=> 'theme_mod'
								));

								$wp_customize->add_control($id.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_box_lg_y', array(
									'label' 		=> __('Large Screen Image ','gaudium').($k+1).__(' Box Top Position','gaudium'),
									'description'	=> __('Enter value in px, % or em, e.g. 500px'),
									'section' 		=> $id.'_block_'.$i,
									'priority' 		=> $priority++
								));

								$wp_customize->add_setting($id.'_block_'.$i.'_image_'.$j.'_styles_xs', array(
									'default' 		=> _x('0','gaudium'),
									'type' 			=> 'theme_mod'
								));

								$wp_customize->add_control($id.'_block_'.$i.'_image_'.$j.'_styles_xs', array(
									'label' 		=> __('XSmall Screen Image ','gaudium').($k+1).__(' Styles','gaudium'),
									'description'	=> __('Enter styles, e.g. max-width: 50%;'),
									'section' 		=> $id.'_block_'.$i,
									'priority' 		=> $priority++
								));

								$wp_customize->add_setting($id.'_block_'.$i.'_image_'.$j.'_styles', array(
									'default' 		=> _x('0','gaudium'),
									'type' 			=> 'theme_mod'
								));

								$wp_customize->add_control($id.'_block_'.$i.'_image_'.$j.'_styles', array(
									'label' 		=> __('Small Screen Image ','gaudium').($k+1).__(' Styles','gaudium'),
									'description'	=> __('Enter styles, e.g. max-width: 50%;'),
									'section' 		=> $id.'_block_'.$i,
									'priority' 		=> $priority++
								));

								$wp_customize->add_setting($id.'_block_'.$i.'_image_'.$j.'_styles_md', array(
									'default' 		=> _x('0','gaudium'),
									'type' 			=> 'theme_mod'
								));

								$wp_customize->add_control($id.'_block_'.$i.'_image_'.$j.'_styles_md', array(
									'label' 		=> __('Medium Screen Image ','gaudium').($k+1).__(' Styles','gaudium'),
									'description'	=> __('Enter styles, e.g. max-width: 50%;'),
									'section' 		=> $id.'_block_'.$i,
									'priority' 		=> $priority++
								));

								$wp_customize->add_setting($id.'_block_'.$i.'_image_'.$j.'_styles_lg', array(
									'default' 		=> _x('0','gaudium'),
									'type' 			=> 'theme_mod'
								));

								$wp_customize->add_control($id.'_block_'.$i.'_image_'.$j.'_styles_lg', array(
									'label' 		=> __('Large Screen Image ','gaudium').($k+1).__(' Styles','gaudium'),
									'description'	=> __('Enter styles, e.g. max-width: 50%;'),
									'section' 		=> $id.'_block_'.$i,
									'priority' 		=> $priority++
								));

								$wp_customize->add_setting($id.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_bg_position', array(
									'default' 		=> _x('0','gaudium'),
									'type' 			=> 'theme_mod'
								));

								$wp_customize->add_control($id.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_bg_position', array(
									'label' 		=> __('Image ','gaudium').($k+1).__(' Background Position','gaudium'),
									'type'			=> 'select',
									'choices'		=> array(
										'0'			=> __('Select'),
										'-0'		=> __('Custom'),
										'center'	=> __('Center'),
										'left 0'	=> __('Left'),
										'right 0'	=> __('Right'),
										'bottom'	=> __('Bottom'),
										'top'		=> __('Top'),
									),
									'section' 		=> $id.'_block_'.$i,
									'priority' 		=> $priority++
								));

								$wp_customize->add_setting($id.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_xs_x', array(
									'default' 		=> _x('0','gaudium'),
									'type' 			=> 'theme_mod'
								));

								$wp_customize->add_control($id.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_xs_x', array(
									'label' 		=> __('XSmall Screen Image ','gaudium').($k+1).__(' Left Position','gaudium'),
									'section' 		=> $id.'_block_'.$i,
									'priority' 		=> $priority++
								));

								$wp_customize->add_setting($id.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_x', array(
									'default' 		=> _x('0','gaudium'),
									'type' 			=> 'theme_mod'
								));

								$wp_customize->add_control($id.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_x', array(
									'label' 		=> __('Image ','gaudium').($k+1).__(' Left Position','gaudium'),
									'section' 		=> $id.'_block_'.$i,
									'priority' 		=> $priority++
								));

								$wp_customize->add_setting($id.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_xs_y', array(
									'default' 		=> _x('0','gaudium'),
									'type' 			=> 'theme_mod'
								));

								$wp_customize->add_control($id.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_xs_y', array(
									'label' 		=> __('XSmall Screen Image ','gaudium').($k+1).__(' Top Position','gaudium'),
									'description'	=> __('Enter value in px, % or em, e.g. 100px'),
									'section' 		=> $id.'_block_'.$i,
									'priority' 		=> $priority++
								));

								$wp_customize->add_setting($id.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_y', array(
									'default' 		=> _x('0','gaudium'),
									'type' 			=> 'theme_mod'
								));

								$wp_customize->add_control($id.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_y', array(
									'label' 		=> __('Image ','gaudium').($k+1).__(' Top Position','gaudium'),
									'description'	=> __('Enter value in px, % or em, e.g. 100px'),
									'section' 		=> $id.'_block_'.$i,
									'priority' 		=> $priority++
								));

								$wp_customize->add_setting($id.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_repeat', array(
									'default' 		=> _x('0','gaudium'),
									'type' 			=> 'theme_mod'
								));

								$wp_customize->add_control($id.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_repeat', array(
									'label' 		=> __('Image ','gaudium').($k+1).__(' Repeat','gaudium'),
									'type'			=> 'select',
									'choices' 		=> array(
										'0' 			=> __('Select'),
									    'repeat' 		=> __('Repeat'),
									    'no-repeat' 	=> __('No repeat'),
									),
									'section' 		=> $id.'_block_'.$i,
									'priority' 		=> $priority++
								));

								$wp_customize->add_setting($id.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_speed', array(
									'default' 		=> _x('0','gaudium'),
									'type' 			=> 'theme_mod',
								));

								$wp_customize->add_control($id.'_block_'.$i.'_content_'.$j.'_image_'.$k.'_speed', array(
									'label' 		=> __('Image ','gaudium').($k+1).__(' speed','gaudium'),
									'description'	=> __('Speed from 0.0 (static) to 1.0 (fixed).'),
									'section' 		=> $id.'_block_'.$i,
									'priority' 		=> $priority++
								));
							}
						}
					}
			 	}
			}
		}
	}
		
	add_action('customize_register', 'gwp_customize_register');


	