<?php
/**
 * Title Info Customizer Control
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) :
	exit;
endif;

// Exit if Colon_Title_Info_Control exists and WP_Customize_Control does not exsist.
if ( class_exists('Colon_Title_Info_Control') && ! class_exists( 'WP_Customize_Control' ) ) :
	return null;
endif;

/**
 * This class is used for showing the title of the controls in the Customizer.
 *
 * @access public
 */
class Colon_Title_Info_Control extends WP_Customize_Control {

	/**
	 * The type of customize control.
	 *
	 * @access public
	 * @var    string
	 */
	public $type = 'colon-title';


	/**
	 *  Render the content via PHP.
	 *
	 * @access public
	 * @return void
	 */
	public function render_content() {
		?>
			<p class="customizer-custom-title-info-text">
				<?php echo esc_html( $this->label ); ?>
			</p>
		<?php
	}
}
