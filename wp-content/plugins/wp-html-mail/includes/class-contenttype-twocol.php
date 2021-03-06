<?php if ( ! defined( 'ABSPATH' ) ) exit;

final class Haet_MB_ContentType_TwoCol extends Haet_MB_ContentType
{

	private static $instance;

	/**
	 * @var string
	 */
	protected $_name  = 'twocol';

	/**
	 * @var string
	 */
	protected $_nicename = '';

	/**
	 * @var int
	 */
	protected $_priority = 10;

	/**
	 * @var bool
	 * contenttype can be used once per email
	 */
	protected $_once = false;
	
	/**
	 * @var string
	 */
	protected $_icon = 'dashicons-text';

	
	public static function instance(){
		if (!isset(self::$instance) && !(self::$instance instanceof Haet_MB_ContentType_TwoCol)) {
			self::$instance = new Haet_MB_ContentType_TwoCol();
		}

		return self::$instance;
	}




	public function __construct(){
		$this->_nicename = __('Two Columns','haet_mail');
		parent::__construct();
	}




	public function enqueue_scripts_and_styles($page){
    	if( false !== strpos($page, 'post.php')){
	        wp_enqueue_script( 'haet_mb_contenttype_'.$this->_name.'_js',  HAET_MAIL_URL.'/js/contenttype-twocol.js', array( 'jquery' ) );

	        wp_localize_script( 
	            'haet_mb_contenttype_'.$this->_name.'_js', 
	            'translations',
	            array( 
	                '..' 			=> __('..','haet_mail'),
	            )
	        );
	    }
	}




	public function admin_render_contentelement_template( $current_email ){
		$this->admin_print_element_start(); ?>
		<div class="mb-contentelement-content one-half">
			<div class="mb-edit-wysiwyg">
				<textarea name="col1"></textarea>
				<div class="mb-content-preview">
				</div>
			</div>
		</div>
		<div class="mb-contentelement-content one-half">
			<div class="mb-edit-wysiwyg">
				<textarea name="col2"></textarea>
				<div class="mb-content-preview">
				</div>
			</div>
		</div>
		<?php
		$this->admin_print_element_end();
	}


	public function print_content( $element_content, $settings ){
		$html = '';
		if( isset($element_content->content) ):
			$html .= '
				<table class="content-twocol" style="table-layout:fixed; width:100%">
					<tr>
						<td class="one-half" style="width:50%">
							'.$element_content->content->col1.'
						</td>
						<td class="one-half" style="width:50%">
							'.$element_content->content->col2.'
						</td>
					</tr>
				</table>';
		endif;

		$html = apply_filters( 'haet_mail_print_content_'.$this->_name, $html, $element_content, $settings );

		echo $html;
	}
}



function Haet_MB_ContentType_TwoCol()
{
	return Haet_MB_ContentType_TwoCol::instance();
}

Haet_MB_ContentType_TwoCol();