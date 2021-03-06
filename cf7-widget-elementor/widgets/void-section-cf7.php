<?php
namespace voidelement\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Group_Control_Image_Size;
use Elementor\Utils;


if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Elementor Style for header
 *
 *
 * @since 1.0.0
 */

class void_cf7 extends Widget_Base {

	// public function __construct( $data = [], $args = null ) {
	// 	parent::__construct( $data, $args );
	// 	$this->add_style_depends('void-cf7-elementor-js');
	// 	$this->add_script_depends('void-cf7-elementor-css');
	// }

	//this name is added to plugin.php of the root folder

	public function get_name() {
		return 'void-section-cf7';
	}

	public function get_title() {
		return 'Void Contact From 7';   // title to show on elementor
	}

	public function get_icon() {
		return 'eicon-mail';    //   eicon-posts-ticker-> eicon ow asche icon to show on elelmentor
	}

	public function get_categories() {
		return [ 'void-elements' ];    // category of the widget
	}

	public function is_reload_preview_required() {
		return true;
	}

	/**
	 * A list of scripts that the widgets is depended in
	 * @since 1.3.0
	 **/
protected function _register_controls() {
		
//start of a control box
		$this->start_controls_section(
			'section_content',
			[
				'label' => esc_html__( 'Contact Form 7', 'void' ),   //section name for controler view
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'cf7',
			[
				'label' => esc_html__( 'Select Contact Form', 'void' ),
                'description' => esc_html__('Contact form 7 - plugin must be installed and there must be some contact forms made with the contact form 7','void'),
				'type' => Controls_Manager::SELECT2,
				'multiple' => false,
				'label_block' => 1,
				'options' => get_contact_form_7_posts(),
			]
		);

		$this->add_control(
			'void_cf7_form_action_edit',
			[
				'type' => \Elementor\Controls_Manager::RAW_HTML,
				'raw' => sprintf( '<a href="#" id="void-cf7-edit-form-btn" style="color:#d30c5c; float: right;">Edit form</a>', 'void' ),
				'content_classes' => 'void-cf7-edit-form-btn',
			]
		);

		$this->add_control(
			'void_cf7_form_action_add',
			[
				'type' => \Elementor\Controls_Manager::RAW_HTML,
				'raw' => sprintf( '<a href="#" id="void-cf7-add-form-btn" style="color:#d30c5c; float: right;">+ Add new form</a>', 'void' ),
				'content_classes' => 'void-cf7-add-form-btn',
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'section_stype',
			[
				'label' => esc_html__( 'Style Contact Form', 'void' ),   //section name for controler view
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'cf7_direct_css',
			[
				'label' => __( 'Global CSS For all fields', 'void' ),
				'description' => __( 'This is the global css for all fields of cf7. It will not effect the other fileds but if you want to define things such as color, background color use this.', 'void' ),
				'type' => Controls_Manager::TEXTAREA,
				'placeholder' => 'color:#000;',
				'selectors' => [
					'{{WRAPPER}} ' => '{{VALUE}}',
				],
			]
		);

		$this->add_control(
			'alllabel',
			[
				'label' => __( 'All Label CSS', 'void' ),
				'description' => __( 'Changes might not sometimes show in the live preview but check in the front end to see the changes.', 'void' ),
				'type' => Controls_Manager::TEXTAREA,
				'placeholder' => 'color:#fff;',
				'selectors' => [
					'{{WRAPPER}} label' => '{{VALUE}}',
				],
			]
		);	
		$this->add_control(
			'allinput',
			[
				'label' => __( 'All Input CSS', 'void' ),
				'description' => __( 'Changes might not sometimes show in the live preview but check in the front end to see the changes.', 'void' ),
				'type' => Controls_Manager::TEXTAREA,
				'placeholder' => 'width:100%;
							      background:red;',
				'selectors' => [
					'{{WRAPPER}} input' => 'height:auto;',
					'{{WRAPPER}} input' => '{{VALUE}}',
					
				],
			]
		);

		$this->add_control(
			'textinput',
			[
				'label' => __( 'Input Type Text CSS', 'void' ),
				'description' => __( 'Changes might not sometimes show in the live preview but check in the front end to see the changes.', 'void' ),
				'type' => Controls_Manager::TEXTAREA,
				'placeholder' => 'width:100%;
							      background:red;',
				'selectors' => [
					'{{WRAPPER}} .wpcf7-text' => 'height:auto;',
					'{{WRAPPER}} .wpcf7-text' => '{{VALUE}}',
				],
			]
		);	
		$this->add_control(
			'textarea',
			[
				'label' => __( 'Textarea CSS', 'void' ),
				'description' => __( 'Changes might not sometimes show in the live preview but check in the front end to see the changes.', 'void' ),
				'type' => Controls_Manager::TEXTAREA,
				'placeholder' => 'height:100px; 
								  width:100%;',
				'selectors' => [
					'{{WRAPPER}} textarea' => 'height:auto;',
					'{{WRAPPER}} textarea' => '{{VALUE}}',
				],
			]
		);

		$this->add_control(
			'checkbox',
			[
				'label' => __( 'Checkbox/ Radio CSS', 'void' ),
				'type' => Controls_Manager::TEXTAREA,
				'placeholder' => 'display: block;',
				'selectors' => [
					'{{WRAPPER}} .wpcf7-list-item' => '{{VALUE}}',
				],
			]
		);	

		$this->add_control(
			'selectcss',
			[
				'label' => __( 'Dropdown/ Select Box css', 'void' ),
				'type' => Controls_Manager::TEXTAREA,
				'placeholder' => 'width: 100;',
				'selectors' => [
					'{{WRAPPER}} select' => '{{VALUE}}',
				],
			]
		);	
		$this->add_control(
			'selectoptionscss',
			[
				'label' => __( 'Select Options Css', 'void' ),
				'type' => Controls_Manager::TEXTAREA,
				'placeholder' => 'color: red;',
				'selectors' => [
					'{{WRAPPER}} select option' => '{{VALUE}}',
				],
			]
		);		

		$this->add_control(
			'file',
			[
				'label' => __( 'File CSS', 'void' ),
				'type' => Controls_Manager::TEXTAREA,
				'placeholder' => 'display: block;',
				'selectors' => [
					'{{WRAPPER}} input[type="file"]' => '{{VALUE}}',
				],
			]
		);	
		$this->add_control(
			'date',
			[
				'label' => __( 'Date CSS', 'void' ),
				'type' => Controls_Manager::TEXTAREA,
				'placeholder' => 'display: block;',
				'selectors' => [
					'{{WRAPPER}} .wpcf7-date' => '{{VALUE}}',
				],
			]
		);	
		$this->add_control(
			'inputsubmit',
			[
				'label' => __( 'Submit Button CSS', 'void' ),
				'description' => __( 'Changes might not sometimes show in the live preview but check in the front end to see the changes.', 'void' ),
				'type' => Controls_Manager::TEXTAREA,
				'placeholder' => 'width:100%;
							      background:red;',
				'selectors' => [
					'{{WRAPPER}} input[type="submit"]' => '{{VALUE}}',
				],
			]
		);		
		$this->add_control(
			'inputsubmithover',
			[
				'label' => __( 'Submit Button Hover CSS', 'void' ),
				'type' => Controls_Manager::TEXTAREA,
				'placeholder' => 'background:#fff;',
				'selectors' => [
					'{{WRAPPER}} input[type="submit"]:hover' => '{{VALUE}}',
				],
			]
		);

		$this->add_control(
			'responce',
			[
				'label' => __( 'Responce CSS', 'void' ),
				'type' => Controls_Manager::TEXTAREA,
				'placeholder' => 'color:red;',
				'selectors' => [
					'{{WRAPPER}} .wpcf7-response-output' => '{{VALUE}}',
				],
			]
		);


		$this->end_controls_section();



		$this->start_controls_section(
			'section_redirect',
			[
				'label' => esc_html__( 'After Submit Redirect Setting', 'void' ),   //section name for controler view
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
	
		$this->add_control(
			'cf7_redirect_external',
			[
				'label' => __( 'On Success External URL Redirect', 'void' ),
				'description' => esc_html__('Insert the external URL where you want users to redirect to when the contact form is submitted and is successful. Leave Blank to Disable','void'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'https://voidcoders.com', 'void' ),
				'label_block' => 1,
			]
		);

		$this->add_control(
			'cf7_redirect_page',
			[
				'label' => esc_html__( 'On Success Internal Redirect', 'void' ),
                'description' => esc_html__('Select a page within the site which you want users to redirect to when the contact form is submitted and is successful. Leave Blank to Disable','void'),
				'type' => Controls_Manager::SELECT2,
				'multiple' => false,
				'label_block' => 1,
				'options' => void_get_all_pages(),
				'condition' =>
				[
					'cf7_redirect_external' => '',
				],	
			]
		);

	
		$this->end_controls_section();
	}


	protected function render() {				//to show on the fontend 
		static $v_veriable=0;

		$settings = $this->get_settings();

        if(!empty($settings['cf7'])){
    	   echo'<div class="void-cf7-form-widget-wrapper elementor-shortcode void-cf7-'.$v_veriable.'" data-void-cf7-contact-form-id="'. $settings['cf7'] .'">';
                echo do_shortcode('[contact-form-7 id="'.$settings['cf7'].'"]');    
           echo '</div>';  
    	}

		if(!empty($settings['cf7_redirect_page']) || !empty($settings['cf7_redirect_external']) ) {  ?>
 			<script>
 			        var theform = document.querySelector('.void-cf7-<?php echo $v_veriable; ?>');
						theform.addEventListener( 'wpcf7mailsent', function( event ) {
					    location = '<?php 
					    if( !empty($settings['cf7_redirect_external']) ){
							echo $settings['cf7_redirect_external'];
					    }else{
					    	 echo get_permalink( $settings['cf7_redirect_page'] );
					    }
					    ?>';
					}, false );
			</script>

		<?php  $v_veriable++;
 		}
    }
}
