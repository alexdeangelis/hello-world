<?php
/*
 *	Credit - Ultimate Addons for Beaver Builder by Brainstormforce - http://ultimatebeaver.com
 */

if (!class_exists('GF_Toggle_Button')) {
    class GF_Toggle_Button {
        function __construct() {
            add_action('fl_builder_control_gf-toggle-button', array($this, 'gf_toggle_button'), 1, 4);
            add_action( 'wp_enqueue_scripts', array( $this, 'toggle_button_scripts' ) );
        }

        function toggle_button_scripts() {
            if (class_exists('FLBuilderModel') && FLBuilderModel::is_builder_active()) {
                wp_enqueue_style('gf-toggle-button', plugins_url('css/gf-toggle-button.css', __FILE__));
                wp_enqueue_script('gf-toggle-button', plugins_url('js/gf-toggle-button.js', __FILE__), array('jquery'), '', true);
            }
        }

        function gf_toggle_button($name, $value, $field) {

            $button_options = array();

            $preview = isset($field['preview']) ? json_encode($field['preview']) : json_encode(array('type' => 'refresh'));
            $preview = " data-preview='" . $preview . "'";

            $toggle = isset($field['toggle']) ? " data-toggle='" . json_encode($field['toggle']) . "'" : '';
            
            $label_width = isset($field['width']) ? $field['width'] : '';
            
            if (array_key_exists('options', $field)) {

                $options = $field['options'];

                foreach ($options as $option_value => $option_label) {
                    $button_options[$option_value] = $option_label;
                }
            }
            else {
                // Default values for options
                $button_options['yes'] = __('Yes', 'gf-grid-module');
                $button_options['no'] = __('No', 'gf-grid-module');
            }

            $output = "<div class='gf-toggle-button fl-field' data-type='select'" . $preview . ">";

            /* Dynamic Styling */
            $output .= '<style>';
            if ($label_width != '') {
                $output .= '.gf_toggle_button_label.' . $name . '{';
                $output .= 'width: ' . $label_width . ';';
                $output .= '}';
            }
            $output .= '</style>';

            $count = 1;
            foreach ($button_options as $field_value => $field_label) {
                $field_index = 'gf_toggle_' . $count;

                $output .= $this->get_input_field($name, $value, $field_value, $field_label, $field_index);

                $count = $count + 1;

            }

            $output .= '<select class="gf_toggle_button_select gf_button_' . $name . '" style="display:none;" name="' . $name . '"' . $toggle . '>';

            foreach ($button_options as $option_value => $option_label) {

                $selected = '';
                if ($value == $option_value) {
                    $selected = ' selected="selected"';
                }
                $output .= '<option value="' . $option_value . '" ' . $selected . '>' . $option_label . '</option>';
            }
            $output .= '</select>';

            $output .= '</div>';

            echo $output;
        }

        function get_input_field($field_name, $chosen_value, $field_value, $field_label, $index) {

            $checked = '';
            if ($chosen_value == $field_value) {
                $checked = 'checked';
            }

            $html = '<input type="radio" class="gf_toggle_button_radio ' . $field_name . '" id="' . $field_name . '_' . $index . '" name="' . $field_name . '" value="' . $field_value . '" ' . $checked . '/>';

            $html .= '<label class="gf_toggle_button_label ' . $field_name . '" for="' . $field_name . '_' . $index . '">' . $field_label . '</label>';

            return $html;
        }
    }

    new GF_Toggle_Button();
}
