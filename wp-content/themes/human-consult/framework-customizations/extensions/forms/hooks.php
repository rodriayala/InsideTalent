<?php if (!defined('FW')) die('Forbidden');

/** @internal */
if ( ! function_exists( 'human_consult_action_theme_fw_ext_forms_include_custom_builder_items' ) ) :
function human_consult_action_theme_fw_ext_forms_include_custom_builder_items() {
	require_once  get_template_directory() .'/framework-customizations/extensions/forms/includes/builder-items/date-time/class-fw-option-type-form-builder-item-date-time.php';
}
endif;
add_action('fw_option_type_form_builder_init', 'human_consult_action_theme_fw_ext_forms_include_custom_builder_items');