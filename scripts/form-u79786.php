<?php 
/* 	
If you see this text in your browser, PHP is not configured correctly on this hosting provider. 
Contact your hosting provider regarding PHP configuration for your site.

PHP file generated by Adobe Muse CC 2017.0.4.363
*/

require_once('form_process.php');

$form = array(
	'subject' => 'LDFIT Personal Training Form Submission',
	'heading' => 'New Form Submission',
	'success_redirect' => '',
	'resources' => array(
		'checkbox_checked' => 'Checked',
		'checkbox_unchecked' => 'Unchecked',
		'submitted_from' => 'Form submitted from website: %s',
		'submitted_by' => 'Visitor IP address: %s',
		'too_many_submissions' => 'Too many recent submissions from this IP',
		'failed_to_send_email' => 'Failed to send email',
		'invalid_reCAPTCHA_private_key' => 'Invalid reCAPTCHA private key.',
		'invalid_reCAPTCHA2_private_key' => 'Invalid reCAPTCHA 2.0 private key.',
		'invalid_reCAPTCHA2_server_response' => 'Invalid reCAPTCHA 2.0 server response.',
		'invalid_field_type' => 'Unknown field type \'%s\'.',
		'invalid_form_config' => 'Field \'%s\' has an invalid configuration.',
		'unknown_method' => 'Unknown server request method'
	),
	'email' => array(
		'from' => 'lauriedelgadofit@email.com',
		'to' => 'lauriedelgadofit@email.com'
	),
	'fields' => array(
		'Email' => array(
			'order' => 2,
			'type' => 'email',
			'label' => 'Email',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Email\' is required.',
				'format' => 'Field \'Email\' has an invalid email.'
			)
		),
		'custom_U79841' => array(
			'order' => 4,
			'type' => 'string',
			'label' => 'Custom',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Custom\' is required.'
			)
		),
		'custom_U79792' => array(
			'order' => 3,
			'type' => 'string',
			'label' => 'Custom',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Custom\' is required.'
			)
		),
		'custom_U79828' => array(
			'order' => 5,
			'type' => 'string',
			'label' => 'Custom',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Custom\' is required.'
			)
		),
		'custom_U79814' => array(
			'order' => 1,
			'type' => 'string',
			'label' => 'Name',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Name\' is required.'
			)
		),
		'custom_U79824' => array(
			'order' => 8,
			'type' => 'string',
			'label' => 'Message',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Message\' is required.'
			)
		),
		'custom_U79788' => array(
			'order' => 11,
			'type' => 'string',
			'label' => 'Message',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Message\' is required.'
			)
		),
		'custom_U79819' => array(
			'order' => 9,
			'type' => 'string',
			'label' => 'Custom',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Custom\' is required.'
			)
		),
		'custom_U79845' => array(
			'order' => 10,
			'type' => 'string',
			'label' => 'Custom',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Custom\' is required.'
			)
		),
		'custom_U79809' => array(
			'order' => 12,
			'type' => 'string',
			'label' => 'Message',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Message\' is required.'
			)
		),
		'custom_U79800' => array(
			'order' => 7,
			'type' => 'radiogroup',
			'label' => 'Radio Button Group',
			'required' => true,
			'optionItems' => array(
				'GAIN MUSCLE MASS',
				'LOSE EXCESS BODY FAT'
			),
			'errors' => array(
				'required' => 'Field \'Radio Button Group\' is required.',
				'format' => 'Field \'Radio Button Group\' has an invalid value.'
			)
		),
		'custom_U79832' => array(
			'order' => 6,
			'type' => 'radiogroup',
			'label' => 'Radio Button Group',
			'required' => true,
			'optionItems' => array(
				'MALE',
				'FEMALE'
			),
			'errors' => array(
				'required' => 'Field \'Radio Button Group\' is required.',
				'format' => 'Field \'Radio Button Group\' has an invalid value.'
			)
		)
	)
);

process_form($form);
?>
