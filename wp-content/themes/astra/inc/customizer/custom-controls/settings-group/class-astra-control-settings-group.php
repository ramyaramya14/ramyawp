<?php
/**
 * Customizer Control: Settings Group
 *
 * @package     Astra
 * @author      Astra
 * @copyright   Copyright (c) 2020, Astra
 * @link        https://wpastra.com/
 * @since       2.0.0
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'Astra_Control_Settings_Group' ) && class_exists( 'WP_Customize_Control' ) ) :

	/**
	 * A Settings group control.
	 */
	class Astra_Control_Settings_Group extends WP_Customize_Control {


		/**
		 * The control type.
		 *
		 * @access public
		 * @var string
		 */
		public $type = 'ast-settings-group';

		/**
		 * The text to display.
		 *
		 * @access public
		 * @var string
		 */
		public $text = '';

		/**
		 * The control name.
		 *
		 * @access public
		 * @var string
		 */
		public $name = '';

		/**
		 * The control value.
		 *
		 * @access public
		 * @var string
		 */
		public $tab = '';

		/**
		 * The fields for group.
		 *
		 * @access public
		 * @var string
		 */
		public $ast_fields = '';

		/**
		 * The control type.
		 *
		 * @access public
		 * @var string
		 */
		public $help = '';

		/**
		 * Refresh the parameters passed to the JavaScript via JSON.
		 *
		 * @see WP_Customize_Control::to_json()
		 */
		public function to_json() {
			parent::to_json();

			$this->json['label'] = esc_html( $this->label );
			$this->json['text']  = $this->text;
			$this->json['help']  = $this->help;
			$this->json['name']  = $this->name;

			$config = array();

			if ( isset( Astra_Customizer::$group_configs[ $this->name ]['tabs'] ) ) {
				$tab = array_keys( Astra_Customizer::$group_configs[ $this->name ]['tabs'] );

				foreach ( $tab as $key => $value ) {

					$config['tabs'][ $value ] = wp_list_sort( Astra_Customizer::$group_configs[ $this->name ]['tabs'][ $value ], 'priority' );
				}
			} else {
				if ( isset( Astra_Customizer::$group_configs[ $this->name ] ) ) {
					$config = wp_list_sort( Astra_Customizer::$group_configs[ $this->name ], 'priority' );
				}
			}

			$this->json['ast_fields'] = $config;
		}

		/**
		 * Render the control's content.
		 *
		 * @see WP_Customize_Control::render_content()
		 */
		protected function render_content() {}
	}

endif;
