<?php

$config = [
	'user/signup' = [
		[
			'field' => 'name',
			'label' => 'Name',
			'rules' => 'required',
		],
		[
			'field' => 'email',
			'label' => 'Email',
			'rules' => 'required|valid_email',
		],
		[
			'field' => 'dob',
			'label' => 'Date of Birth',
			'rules' => 'required',
		],
		[
			'field' => 'password',
			'label' => 'Password',
			'rules' => 'required|min_length[10]',
		],
		[
			'field' => 'password_confirm',
			'label' => 'Confirm Password',
			'rules' => 'required|matches[password]'
		]
	]
]

?>
