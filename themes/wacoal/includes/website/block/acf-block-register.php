<?php
/**
 * Common Gutenberg ACF Block register file.
 * php version 7.4
 *
 * @category Wacoal
 * @package  Wacoal
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     Wacoal
 */

 /**
  * Function used to register the custom acf gutenberg blocks.
  *
  * @return $array gutenberg block
  */
function Wacoal_Acf_init()
{
    if (function_exists('acf_register_block') ) {
        acf_register_block(
            array(
            'name'            => 'wacoal-data-with-image',
            'title'           => __('Wacoal data with image'),
            'description'     => __('A custom Wacoal Image block.'),
            'render_callback' => 'Wacoal_Data_Image_Block_Render_callback',
            'category'        => 'wacoal',
            'icon'            => 'welcome-widgets-menus',
            'keywords'        => array( 'wacoal-data-image' ),
            'example'         => array(
                'attributes' => array(
                    'mode'   => 'preview',
                    'data'   => array(
                    'image'  => "Your image is here",
                      'image_caption'        => "Your image_caption is here"
                    )
                )
            )
            )
        );
        acf_register_block(
            array(
            'name'            => 'wacoal-quotes',
            'title'           => __('Wacoal Quotes'),
            'description'     => __('A custom quotes block.'),
            'render_callback' => 'Wacoal_Quotes_Block_Render_callback',
            'category'        => 'wacoal',
            'icon'            => 'format-quote',
            'keywords'        => array( 'testimonial', 'quote' ),
            )
        );
        acf_register_block_type(
            array(
            'name'            => 'wacoal-product-gallery',
            'title'           => __('Product Gallery'),
            'description'     => __('A custom product gallery block.'),
            'render_callback' => 'Wacoal_Gallery_Block_Render_callback',
            'category'        => 'wacoal',
            'icon'            => 'format-gallery',
            'keywords'        => array( 'product-gallery', 'gallery' ),
            )
        );
        acf_register_block_type(
            array(
            'name'            => 'wacoal-image-carousel',
            'title'           => __('Image Gallery - Full Bleed'),
            'description'     => __('A custom Image Gallery block.'),
            'render_callback' => 'Wacoal_Image_Carousel_Render_callback',
            'category'        => 'wacoal',
            'icon'            => 'embed-photo',
            'keywords'        => array( 'image-carousel', 'gallery' ),
            )
        );
        acf_register_block_type(
            array(
            'name'            => 'wacoal-text-only-list-format',
            'title'           => __('List - Numbered Text Only (Left & Right)'),
            'description'     => __('A custom Text Only List block.'),
            'render_callback' => 'Wacoal_Text_Only_List_Format_Render_callback',
            'category'        => 'wacoal',
            'icon'            => 'list-view',
            'keywords'        => array( 'list-format' ),
            )
        );
        acf_register_block(
            array(
            'name'            => 'wacoal-subhead-description',
            'title'           => __('Subhead Description'),
            'description'     => __('A custom subhead description block.'),
            'render_callback' => 'Wacoal_Subhead_Description_Render_callback',
            'category'        => 'wacoal',
            'icon'            => 'archive',
            'keywords'        => array( 'title', 'description' ),
            )
        );
        acf_register_block(
            array(
            'name'            => 'wacoal-question-answer',
            'title'           => __('Q&A'),
            'description'     => __('A custom question answer block.'),
            'render_callback' => 'Wacoal_Question_Answer_Render_callback',
            'category'        => 'wacoal',
            'icon'            => 'editor-help',
            'keywords'        => array( 'question', 'answer' ),
            )
        );
        acf_register_block(
            array(
            'name'            => 'wacoal-image',
            'title'           => __('Image - Full Bleed'),
            'description'     => __('A custom image block.'),
            'render_callback' => 'Wacoal_Image_Render_callback',
            'category'        => 'wacoal',
            'icon'            => 'format-image',
            'keywords'        => array( 'text', 'link', 'image' ),
            )
        );
        acf_register_block(
            array(
            'name'            => 'wacoal-size-chart-table',
            'title'           => __('Wacoal Size Chart table'),
            'description'     => __('A custom size chart table block.'),
            'render_callback' => 'Wacoal_Size_Chart_Table_Block_Render_callback',
            'category'        => 'wacoal',
            'icon'            => 'editor-table',
            'keywords'        => array( 'size-chart' ),
            )
        );
        acf_register_block(
            array(
            'name'            => 'wacoal-video',
            'title'           => __('Video - Horizontal'),
            'description'     => __('A custom video block.'),
            'render_callback' => 'Wacoal_Video_Block_Render_callback',
            'category'        => 'wacoal',
            'icon'            => 'format-video',
            'keywords'        => array( 'video' ),
            )
        );
        acf_register_block(
            array(
            'name'            => 'wacoal-video-with-image',
            'title'           => __('Wacoal Video and Image'),
            'description'     => __('A custom video and image block.'),
            'render_callback' => 'Wacoal_Video_Image_Block_Render_callback',
            'category'        => 'wacoal',
            'icon'            => 'format-video',
            'keywords'        => array( 'video' ),
            )
        );
        acf_register_block(
            array(
            'name'            => 'wacoal-horizontal-line',
            'title'           => __('Divider Line'),
            'description'     => __('A custom divider line block.'),
            'render_callback' => 'Wacoal_Horizontal_Block_Render_callback',
            'category'        => 'wacoal',
            'icon'            => 'minus',
            'keywords'        => array( 'line' ),
            )
        );
        acf_register_block(
            array(
            'name'            => 'wacoal-bullet-content-block',
            'title'           => __('Checklist'),
            'description'     => __('A custom checklist block.'),
            'render_callback' => 'Wacoal_Bullet_Content_Block_Render_callback',
            'category'        => 'wacoal',
            'icon'            => 'id-alt',
            'keywords'        => array( 'line' ),
            )
        );
        acf_register_block(
            array(
            'name'            => 'wacoal-reminder-block',
            'title'           => __('Reminder'),
            'description'     => __('A custom reminder block.'),
            'render_callback' => 'Wacoal_Reminder_Block_Render_callback',
            'category'        => 'wacoal',
            'icon'            => 'id-alt',
            'keywords'        => array( 'line' ),
            )
        );
        acf_register_block(
            array(
            'name'            => 'wacoal-tip-block',
            'title'           => __('Wacoal Tip Block'),
            'description'     => __('A custom tip block.'),
            'render_callback' => 'Wacoal_Note_Block_Render_callback',
            'category'        => 'wacoal',
            'icon'            => 'id-alt',
            'keywords'        => array( 'line' ),
            )
        );
        acf_register_block(
            array(
            'name'            => 'wacoal-product-list-with-shop-button-block',
            'title'           => __('List - Image + Title + Button (Left & Right)'),
            'description'     => __('A custom Product List block.'),
            'render_callback' => 'Wacoal_Product_List_Block_Render_callback',
            'category'        => 'wacoal',
            'icon'            => 'list-view',
            'keywords'        => array( 'list-format' ),
            )
        );
        acf_register_block_type(
            array(
            'name'            => 'wacoal-single-product',
            'title'           => __('Wacoal Single Product'),
            'description'     => __('A custom single product block.'),
            'render_callback' => 'Wacoal_Single_Product_Block_Render_callback',
            'category'        => 'wacoal',
            'icon'            => 'format-gallery',
            'keywords'        => array( 'product', 'gallery' ),
            )
        );

        acf_register_block(
            array(
            'name'            => 'wacoal-center-paragraph',
            'title'           => __('Wacoal Center Paragraph'),
            'description'     => __('A custom center paragraph block.'),
            'render_callback' => 'Wacoal_Center_Para_Render_callback',
            'category'        => 'wacoal',
            'icon'            => 'archive',
            'keywords'        => array( 'title', 'description' ),
            )
        );

        acf_register_block(
            array(
            'name'            => 'wacoal-medium-image-format',
            'title'           => __('Image - Medium'),
            'description'     => __('A custom Image - Medium block.'),
            'render_callback' => 'Wacoal_Medium_Img_Format_Render_callback',
            'category'        => 'wacoal',
            'icon'            => 'archive',
            'keywords'        => array( 'button', 'content' ),
            )
        );

        acf_register_block(
            array(
            'name'            => 'wacoal-button-format',
            'title'           => __('Button'),
            'description'     => __('A custom Button block.'),
            'render_callback' => 'Wacoal_Button_Format_Render_callback',
            'category'        => 'wacoal',
            'icon'            => 'archive',
            'keywords'        => array( 'button', 'content' ),
            )
        );

        acf_register_block(
            array(
            'name'            => 'wacoal-text-image-format',
            'title'           => __('List - Text + Image (Left & Right)'),
            'description'     => __('A custom text image list format block.'),
            'render_callback' => 'Wacoal_List_Text_Image_Render_callback',
            'category'        => 'wacoal',
            'icon'            => 'archive',
            'keywords'        => array( 'list', 'content' ),
            )
        );

        acf_register_block(
            array(
            'name'            => 'wacoal-statement-image-format',
            'title'           => __('List - Title + Statement + Body + Image (Left & Right)'),
            'description'     => __('A custom list format block.'),
            'render_callback' => 'Wacoal_List_Statement_Image_Render_callback',
            'category'        => 'wacoal',
            'icon'            => 'archive',
            'keywords'        => array( 'list', 'content' ),
            )
        );

        acf_register_block(
            array(
            'name'            => 'wacoal-banner-image-format',
            'title'           => __('Banner Image'),
            'description'     => __('A custom banner image block.'),
            'render_callback' => 'Wacoal_Banner_Image_Render_callback',
            'category'        => 'wacoal',
            'icon'            => 'archive',
            'keywords'        => array( 'image', 'content' ),
            )
        );

        acf_register_block(
            array(
            'name'            => 'wacoal-number-list-format',
            'title'           => __('List - Number + Title + Subhead + Copy'),
            'description'     => __('A custom List block.'),
            'render_callback' => 'Wacoal_Number_Title_Render_callback',
            'category'        => 'wacoal',
            'icon'            => 'archive',
            'keywords'        => array( 'image', 'content' ),
            )
        );

        acf_register_block(
            array(
            'name'            => 'wacoal-customer-review-format',
            'title'           => __('Wacoal Customer Review Block'),
            'description'     => __('A custom customer review format block.'),
            'render_callback' => 'Wacoal_Customer_Review_Render_callback',
            'category'        => 'wacoal',
            'icon'            => 'archive',
            'keywords'        => array( 'image', 'content' ),
            )
        );

        acf_register_block(
            array(
            'name'            => 'wacoal-conclusion-summary-description',
            'title'           => __('Conclusion Summary Description'),
            'description'     => __('A custom conclusion summary description block.'),
            'render_callback' => 'Wacoal_Conclusion_Summary_Desc_Render_callback',
            'category'        => 'wacoal',
            'icon'            => 'archive',
            'keywords'        => array('content'),
            )
        );

        acf_register_block(
            array(
            'name'            => 'wacoal-image-bullets-list',
            'title'           => __('Wacoal Title Image Bullets List Block'),
            'description'     => __('A custom title image bullets list format block.'),
            'render_callback' => 'Wacoal_Title_Img_Bullets_List_Block_Render_callback',
            'category'        => 'wacoal',
            'icon'            => 'archive',
            'keywords'        => array('list', 'content'),
            )
        );

        acf_register_block(
            array(
            'name'            => 'wacoal-body-para',
            'title'           => __('Body Intro Paragraph'),
            'description'     => __('A custom Body Intro Paragraph Block'),
            'render_callback' => 'Wacoal_Body_Intro_Paragraph_Block_Render_callback',
            'category'        => 'wacoal',
            'icon'            => 'archive',
            'keywords'        => array('list', 'content'),
            )
        );

        acf_register_block(
            array(
            'name'            => 'wacoal-benton-text_image-list',
            'title'           => __('Benton Text + Image (Left & Right)'),
            'description'     => __('A custom Benton Text + Image List Block'),
            'render_callback' => 'Wacoal_Benton_Text_Image_List_Block_Render_callback',
            'category'        => 'wacoal',
            'icon'            => 'archive',
            'keywords'        => array('list', 'content'),
            )
        );

        acf_register_block(
            array(
            'name'            => 'wacoal-bordered-image-list',
            'title'           => __('List - Benton Title + Button + Bordered Image (Left & Right)'),
            'description'     => __('A custom Bordered Image List Block'),
            'render_callback' => 'Wacoal_Bordered_Image_List_Block_Render_callback',
            'category'        => 'wacoal',
            'icon'            => 'archive',
            'keywords'        => array('list', 'content'),
            )
        );

        acf_register_block(
            array(
            'name'            => 'wacoal-tip-list',
            'title'           => __('List - Text + Image + Tip (Left & Right)'),
            'description'     => __('A custom Tip List Block'),
            'render_callback' => 'Wacoal_Tip_List_Block_Render_callback',
            'category'        => 'wacoal',
            'icon'            => 'archive',
            'keywords'        => array('list', 'content'),
            )
        );

        // ---- Below blocks are remove from development as per client request

        // acf_register_block_type(
        //     array(
        //     'name'            => 'wacoal-text-image-list-format',
        //     'title'           => __('Wacoal Text Image List Format'),
        //     'description'     => __('A custom List format block.'),
        //     'render_callback' => 'Wacoal_Text_Img_List_Format_Render_callback',
        //     'category'        => 'wacoal',
        //     'icon'            => 'list-view',
        //     'keywords'        => array( 'list-format' ),
        //     )
        // );
    }
}

add_action('acf/init', 'Wacoal_Acf_init');

