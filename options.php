<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 * By default it uses the theme name, in lowercase and without spaces, but this can be changed if needed.
 * If the identifier changes, it'll appear as if the options have been reset.
 * 
 */

function optionsframework_option_name() {

	// get the theme name from the stylesheet 
	$themename = get_option( 'stylesheet' );
	$themename = preg_replace("/\W/", "_", strtolower($themename) );
	
	$optionsframework_settings = get_option('optionsframework');
	$optionsframework_settings['id'] = $themename;
	update_option('optionsframework', $optionsframework_settings);
	
	//echo $themename;
}





function optionsframework_options() {
	

	
	//Background Defaults
	
	$background_defaults = array('color' => '', 'image' => '', 'repeat' => 'repeat','position' => 'top center','attachment'=>'scroll');
	
	$options = array();
	

						
						
						
	// General options						
					
	$options[] = array( "name" => "General",
                    "type" => "heading");
					
	$options[] = array( "name" => "Custom Logo",
					"desc" => "Upload a logo for your theme, or specify the image address of your online logo. (Logo size: 200px x 35px)",
					"id" => "logo",
					"std" => "",
					"type" => "upload");	
					
	$options[] = array( "name" => "Custom Favicon",
					"desc" => "Upload a 16px x 16px Png/Gif image that will represent your website's favicon.",
					"id" => "custom_favicon",
					"std" => "",
					"type" => "upload"); 
					
					
                                               
	$options[] = array( "name" => "Tracking Code",
					"desc" => "Paste your Google Analytics (or other) tracking code here. This will be added into the footer template of your theme.",
					"id" => "google_analytics",
					"std" => "",
					"type" => "textarea");

	$options[] = array( "name" => "Footer Link1",
                    "desc" => "Add your twitter profile link here.",
                    "id" => "twitter_link",
                    "std" => "",
                    "type" => "text");  
					                                                        
	$options[] = array( "name" => "Footer Link2",
                    "desc" => "Add your Google+ profile link here.",
                    "id" => "google_link",
                    "std" => "",
                    "type" => "text");  				
						
	



//images for slider 

	$options[] = array( "name" => "Add Slider Images",
						"type" => "heading");	
						
	$options[] = array( "name" => "Slide Image 1",
						"desc" => "This creates a full size uploader that previews the image.",
						"id" => "slider-image1",
						"type" => "upload");	
						
	$options[] = array( 
						"desc" => "Link to this image.",
						"id" => "slider-link1",
						"std" => "Link goes here",
						"class" => "mini",
						"type" => "text");
								
	$options[] = array( 
						"desc" => "Describe this slider image.",
						"id" => "slider-desc1",
						"std" => "Short description please",
						"type" => "text");




	$options[] = array( "name" => "Slide Image 2",
						"desc" => "This creates a full size uploader that previews the image.",
						"id" => "slider-image2",
						"type" => "upload");
						
	$options[] = array( 
						"desc" => "Link to this image.",
						"id" => "slider-link2",
						"std" => "Link goes here",
						"class" => "mini",
						"type" => "text");
								
	$options[] = array( 
						"desc" => "Describe this slider image.",
						"id" => "slider-desc2",
						"std" => "Short description please",
						"type" => "text");						
						
						
						
	$options[] = array( "name" => "Slider Image 3",
						"desc" => "This creates a full size uploader that previews the image.",
						"id" => "slider-image3",
						"type" => "upload");
						
	$options[] = array( 
						"desc" => "Link to this image.",
						"id" => "slider-link3",
						"std" => "Link goes here",
						"class" => "mini",
						"type" => "text");
								
	$options[] = array( 
						"desc" => "Describe this slider image.",
						"id" => "slider-desc3",
						"std" => "Short description please",
						"type" => "text");
						
						
												

	$options[] = array( "name" => "Slider Image 4",
						"desc" => "This creates a full size uploader that previews the image.",
						"id" => "slider-image4",
						"type" => "upload");	
	
	
	$options[] = array( 
						"desc" => "Link to this image.",
						"id" => "slider-link4",
						"std" => "Link goes here",
						"class" => "mini",
						"type" => "text");
								
	$options[] = array( 
						"desc" => "Describe this slider image.",
						"id" => "slider-desc4",
						"std" => "Short description please",
						"type" => "text");
						
						
	//about us 
	$options[] = array( "name" => "About us",
						"type" => "heading");	
							
	$options[] = array( "name" => "Just a couple of lines here",
						"desc" => "About your company or product or whatever else you wish to announce to the world.",
						"id" => "about_us_excerpt",
						"type" => "text"); 	
						
	$options[] = array( "name" => "Tell people everything about your company",
						"desc" => "About your company or product or whatever else you wish to announce to the world.",
						"id" => "about_us_content",
						"type" => "textarea"); 						
	//contact us options 
		
	$options[] = array( "name" => "Contact Us",
						"type" => "heading");
							
	$options[] = array( "name" => "Your Email Address",
						"desc" => "This is Important. The following form will be mailed to the address you insert here.",
						"id" => "contact-email-address",
						"std" => "",
						"type" => "text");	
						
												
	$options[] = array( "name" => "Briefly describe where your office is located",
						"desc" => "",
						"id" => "address-head",
						"std" => "e.g. Our London Office",
						"type" => "text");
						
	$options[] = array( "name" => "Your company name",
						"desc" => "",
						"id" => "address-head1",
						"std" => "e.g. Simple Usable LTD.",
						"type" => "text");						
													
	$options[] = array( "name" => "Company Address",
						"desc" => "Address line1 & line2 should separated by `br` tag ",
						"id" => "address-body1",
						"std" => "",
						"type" => "textarea"); 
						
	$options[] = array( "name" => "Contact Number",
						"desc" => "Your office contact number",
						"id" => "address-body2",
						"std" => "",
						"type" => "text");	
					
							
	$options[] = array( "name" => "Fax Number",
						"desc" => "Your office FAX number",
						"id" => "address-body3",
						"std" => "",
						"type" => "text");					

						
										
						
//advance options
	
							
	$options[] = array( "name" => "Manage Styles",
						"type" => "heading");

	$options[] = array( "name" => "Theme Background Image",
						"desc" => "Upload an image for the site background. Image options will be available upon upload.",
						"id" => "bg_img",
						"std" => "", 
						"type" => "background");
												
	$options[] = array( "name" => "Typography",
						"desc" => "Specify the body font properties",
						"id" => "typography",
						"std" => array('size' => '14px','face' => 'verdana','style' => 'bold italic','color' => '#CCCCCC'),
						"type" => "typography");
						
	$options[] = array( "name" => "Text Color",
						"desc" => "Default text color is selected.",
						"id" => "text_color",
						"std" => "",
						"type" => "color");	
						
	$options[] = array( "name" => "Link Color",
						"desc" => "Default link color is selected.",
						"id" => "links_color",
						"std" => "",
						"type" => "color");	
																	
						
	$options[] = array( "name" => "Main Navigation Link Color",
						"desc" => "Default link color is selected. This color will be applied to the main navigation links only.",
						"id" => "nav_link_color",
						"std" => "",
						"type" => "color");
												
						

						
												
												
												
						
	return $options;
}