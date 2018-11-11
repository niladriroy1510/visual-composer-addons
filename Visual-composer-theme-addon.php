<?php



///////////////////Start gallery Short code//////////

/*

[your_gallery param="foo"]
   [single_img]
   [single_img]
   [single_img]
[/your_gallery]

*/




function gallery_image_one() {

vc_map( array(
    "name" => __("Your Gallery", "my-text-domain"),
    "base" => "your_gallery",
    "as_parent" => array('only' => 'single_img'), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
    "content_element" => true,
    "show_settings_on_create" => false,
    "is_container" => true,
    "params" => array(
        // add params same as with any other content element
        array(
            "type" => "textfield",
            "heading" => __("Extra class name", "my-text-domain"),
            "param_name" => "el_class",
            "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "my-text-domain")
        )
    ),
    "js_view" => 'VcColumnView'
) );

 
 
 
}
add_action( 'vc_before_init', 'gallery_image_one' );


//////////



function gallery_image_two() {

vc_map( array(
    "name" => __("Gallery Image", "my-text-domain"),
    "base" => "single_img",
    "content_element" => true,
    "as_child" => array('only' => 'your_gallery'), // Use only|except attributes to limit parent (separate multiple values with comma)
    "params" => array(
        // add params same as with any other content element
        array(
            "type" => "textfield",
            "heading" => __("Extra class name", "my-text-domain"),
            "param_name" => "el_class",
            "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "my-text-domain")
        )
    )
) );


//Your "container" content element should extend WPBakeryShortCodesContainer class to inherit all required functionality
if ( class_exists( 'WPBakeryShortCodesContainer' ) ) {
    class WPBakeryShortCode_Your_Gallery extends WPBakeryShortCodesContainer {
    }
}
if ( class_exists( 'WPBakeryShortCode' ) ) {
    class WPBakeryShortCode_Single_Img extends WPBakeryShortCode {
    }
}



}
add_action( 'vc_before_init', 'gallery_image_two' );





///////////////////End gallery Short code//////////















function All_type_input() {

vc_map(array(
        "name"  => __("All Type","tex domain"),
        "base"     =>"All_type",
        "category"=> __("All Type","text domain"),
        "params"   =>array(
                			
				array(
					"type" => "textarea_html",
					"holder" => "div",
					"class" => "",
					"heading" => __( "Content two", "my-text-domain" ),
					"param_name" => "content", // Important: Only one textarea_html param per content element allowed and it should have "content" as a "param_name"
					"value" => __( "<p>I am test text block. Click edit button to change this text.</p>", "my-text-domain" ),
					"description" => __( "Enter your content.", "my-text-domain" )
				 ),
				 
				 
				array(
                    "type"       =>"textfield",
                    "heading"    => __("text field","text domain"),
                    "param_name" =>"textfield",
                    "value"      => __("text field","text domain"),
                    "description"=> __("select slide count. if you want to show unlimited. type -1","text domain"),
                ),
				array(
                    "type"       =>"textarea",
                    "heading"    => __("text area","text domain"),
                    "param_name" =>"textarea",
                    "value"      => __("text area","text domain"),
                    "description"=> __("select slide count. if you want to show unlimited. type -1","text domain"),
                ),
//////////////////
	
				array(
                    "type"       =>"dropdown",
                    "heading"    => __("drop down","text domain"),
                    "param_name" =>"dropdown",
					"std"        => __("true","text domain"),
                    "value"     =>array(
                        "yes"       =>"true",
                        "no"        =>"false"
                    ),
                    "description"=> __("select slide count. if you want to show unlimited. type -1","text domain"),
                ),
				array(
                    "type"       =>"attach_image",
                    "heading"    => __("attach image","text domain"),
                    "param_name" =>"attach_image",
                    "value"     => __("attach image","text domain"),
                    "description"=> __("Single image selection","text domain"),
                ),
				array(
                    "type"       =>"attach_images",
                    "heading"    => __("attach images","text domain"),
                    "param_name" =>"attach_images",
                    "value"     => __("attach image","text domain"),
                    "description"=> __("Multiple images selection","text domain"),
                ),
				array(
                    "type"       =>"posttypes",
                    "heading"    => __("post types","text domain"),
                    "param_name" =>"posttypes",
                    "value"     => __("post types","text domain"),
                    "description"=> __("Multiple images selection","text domain"),
                ),
/////////////////////				


				array(
                    "type"       =>"colorpicker",
                    "heading"    => __("color picker","text domain"),
                    "param_name" =>"colorpicker",
                    "value"     => __("color picker","text domain"),
                    "description"=> __("Multiple images selection","text domain"),
                ),
				array(
                    "type"       =>"exploded_textarea",
                    "heading"    => __("exploded textarea","text domain"),
                    "param_name" =>"exploded_textarea",
                    "value"     => __("exploded textarea","text domain"),
                    "description"=> __("Multiple images selection","text domain"),
                ),
				array(
                    "type"       =>"widgetised_sidebars",
                    "heading"    => __("widgetised sidebars","text domain"),
                    "param_name" =>"widgetised_sidebars",
                    "value"     => __("exploded textarea","text domain"),
                    "description"=> __("Multiple images selection","text domain"),
                ),
				array(
                    "type"       =>"textarea_raw_html",
                    "heading"    => __("textarea raw html","text domain"),
                    "param_name" =>"textarea_raw_html",
                    "value"     => __("textarea raw html","text domain"),
                    "description"=> __("Multiple images selection","text domain"),
                ),
				array(
                    "type"       =>"vc_link",
                    "heading"    => __("vc link","text domain"),
                    "param_name" =>"vc_link",
					'dependency' => array(
						'element' => 'link',
						'value' => array( 'custom' )
					),
                    "value"     => __("vc link","text domain"),
                    "description"=> __("Multiple images selection","text domain"),
                ),
				array(
					'type' => 'vc_link',
					'heading' => __( 'URL (Link)', 'js_composer' ),
					'param_name' => 'url',
					'dependency' => array(
						'element' => 'link',
						'value' => array( 'custom' )
					),
					'description' => __( 'Add custom link.', 'js_composer' ),
				),
				
				


    )
 ));
}
add_action( 'vc_before_init', 'All_type_input' );









function ffff_integrateWithVC() {


vc_map(array(
        "name"  => __("Niladri slider","tex domain"),
        "base"     =>"stock_slides",
        "category"=> __("Niladri","text domain"),
        "params"   =>array(
                array(
                    "type"  =>"textfield",
                    "heading"  => __("count","text domain"),
                    "param_name"=>"count",
                    "value"         => __("3","text domain"),
                    "description"   => __("select slide count. if you want to show unlimited. type -1","text domain"),
                ),
                array(
                    "type"  =>"dropdown",
                    "heading"  => __("Enable loop?","text domain"),
                    "param_name"=>"loop",
                    "std"         => __("true","text domain"),
                    "value"     =>array(
                        "yes"       =>"true",
                        "no"        =>"false"
                    )
                   
                ),
            array(
                    "type"  =>"dropdown",
                    "heading"  => __("Enable autoplay?","text domain"),
                    "param_name"=>"autoplay",
                    "std"         => __("true","text domain"),
                    "value"     =>array(
                        "yes"       =>"true",
                        "no"        =>"false"
                    ),
                    "description"   => __("","text domain"),
                ),
            array(
                    "type"  =>"dropdown",
                    "heading"  => __("Slide Time","text domain"),
                    "param_name"=>"autoplaytimeout",
                    "std"         => __("5000","text domain"),
                    "value"     =>array(
                        "1 second"       =>"1000",
                        "2 seconds"       =>"2000",
                        "3 seconds"       =>"3000",
                        "4 seconds"       =>"4000",
                        "5 seconds"       =>"5000",
                        "6 seconds"       =>"6000",
                        "7 seconds"       =>"7000",
                        "8 seconds"       =>"8000",
                        "9 seconds"       =>"9000",
                        "10 seconds"       =>"10000",
                        "11 seconds"       =>"11000",
                        "12 seconds"       =>"12000",
                        "13 seconds"       =>"13000",
                        "14 seconds"       =>"14000",
                        "15 seconds"       =>"15000",
                    ),
                  
                ),
            array(
                    "type"  =>"dropdown",
                    "heading"  => __("Enable Navigation icon","text domain"),
                    "param_name"=>"nav",
                    "std"         => __("true","text domain"),
                    "value"     =>array(
                        "yes"       =>"true",
                        "no"        =>"false"
                    )
                  
                ),
            array(
                    "type"  =>"dropdown",
                    "heading"  => __("Enable Dots","text domain"),
                    "param_name"=>"dots",
                    "std"         => __("true","text domain"),
                    "value"     =>array(
                        "yes"       =>"true",
                        "no"        =>"false"
                    )
                    
                ),
				
///////


			array(
                    "type"       =>"checkbox",
                    "heading"    => __("check box","text domain"),
                    "param_name" =>"checkbox",
                    "value"     =>array(
                        "yes"       =>"true",
                        "no1"        =>"false",
                        "no2"        =>"false",
                        "no3"        =>"false",
                        "no"        =>"false"
                    ),
                    "description"=> __("Multiple images selection","text domain"),
                ),
				
	///////////
				
				array(
                    "type"       =>"loop",
                    "heading"    => __("loop","text domain"),
                    "param_name" =>"loop",
                    "description"=> __("Multiple images selection","text domain"),
                ),
				array(
                    "type"       =>"css_editor",
                    "heading"    => __("css editor","text domain"),
                    "param_name" =>"css_editor",
					"value"     => __("css editor","text domain"),
					'group' => __( 'Design options', 'my-text-domain' ),
                    "description"=> __("Multiple images selection","text domain"),
                ),
				
        )
    ));


}
add_action( 'vc_before_init', 'ffff_integrateWithVC' );









///////////////////////////////











function own_test_vc_addon() {


vc_map(array(
        "name"  => __("Niladri Priyanka","tex domain"),
        "base"     =>"niladri-priyanka",
        "category"=> __("Priyanka","text domain"),
        "params"   =>array(
                array(
                    "type"  =>"textfield",
                    "heading"  => __("Priyanka Niladri Love story","text domain"),
                    "param_name"=>"this-is-id",
                    "value"         => __("3","text domain"),
                    "description"   => __("Please write priyanka niladri love story","text domain"),
                ),
				
				array(
					"type" => "textfield",
					"holder" => "div",
					"class" => "",
					"heading" => __( "Text", "my-text-domain" ),
					"param_name" => "foo",
					"value" => __( "Default param value", "my-text-domain" ),
					"description" => __( "Description for foo param.", "my-text-domain" )
				 ),
				 array(
					"type" => "colorpicker",
					"class" => "",
					"heading" => __( "Text color", "my-text-domain" ),
					"param_name" => "color",
					"value" => '#FF0000', //Default Red color
					"description" => __( "Choose text color", "my-text-domain" )
				 ),
				 array(
					"type" => "textarea_html",
					"holder" => "div",
					"class" => "",
					"heading" => __( "Content", "my-text-domain" ),
					"param_name" => "content", // Important: Only one textarea_html param per content element allowed and it should have "content" as a "param_name"
					"value" => __( "<p>I am test text block. Click edit button to change this text.</p>", "my-text-domain" ),
					"description" => __( "Enter your content.", "my-text-domain" )
				 ),
				
			/////////////
			
			array(
				'type' => 'iconpicker',
				'heading' => __( 'Icon', 'js_composer' ),
				'group' => __( 'Dola options', 'my-text-domain' ),
				'param_name' => 'icon_openiconic',
				'settings' => array(
					'emptyIcon' => false, // default true, display an "EMPTY" icon?
					'type' => 'openiconic',
					'iconsPerPage' => 200, // default 100, how many icons per/page to display
				),
				'dependency' => array(
					'element' => 'icon_type',
					'value' => 'openiconic',
				),
				'description' => __( 'Select icon from library.', 'js_composer' ),
			),
			
		/////////////////	
			
		array(
            'type' => 'css_editor',
            'heading' => __( 'Css', 'my-text-domain' ),
            'param_name' => 'css',
            'group' => __( 'Design options', 'my-text-domain' ),
        ),
                        
            
        )
    ));


}
add_action( 'vc_before_init', 'own_test_vc_addon' );



//////////////////////


function default_notice_travego() {
	
	vc_map(array(
        "name"  => __("Default Notice","tex domain"),
        "base"     =>"codeonce_extract",
        "category"=> __("Notice","text domain"),
        "params"   =>array(
                array(
                    "type"  =>"textfield",
                    "heading"  => __("Input your text","text domain"),
                    "param_name"=>"content",
                    "value"         => __("Please write priyanka niladri love story","text domain"),
                    "description"   => __("Please write priyanka niladri love story","text domain"),
                ),
				array(
                    "type"  =>"colorpicker",
                    "heading"  => __("Please select your color","text domain"),
                    "param_name"=>"color",
                    "value"         => __("red","text domain"),
                    "description"   => __("Please write priyanka niladri love story","text domain"),
                ),
				array(
                    "type"  =>"colorpicker",
                    "heading"  => __("Please select your background","text domain"),
                    "param_name"=>"background",
                    "value"         => __("green","text domain"),
                    "description"   => __("Please write priyanka niladri love story","text domain"),
                ),
				array(
                    "type"  =>"textfield",
                    "heading"  => __("Please select your padding","text domain"),
                    "param_name"=>"padding",
                    "value"         => __("10px","text domain"),
                    "description"   => __("Please write priyanka niladri love story","text domain"),
                ),
				
				array(
					'type' => 'css_editor',
					'heading' => __( 'Css', 'my-text-domain' ),
					'param_name' => 'css',
					'group' => __( 'Design options', 'my-text-domain' ),
				),
           
	  )
    ));
	
	
}
add_action( 'vc_before_init', 'default_notice_travego' );