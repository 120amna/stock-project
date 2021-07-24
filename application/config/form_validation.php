<?php
$config=
[
	'form_validation_rules'=>
	[
		[
			'field' => 'name',
			'label' => 'NAME',
			'rules' => 'required|alpha'
		],
		[
			'field' => 'userName',
			'label' => 'USER NAME',
			'rules' => 'required|alpha'
		],
		[
			'field' => 'email',
			'label' => 'EMAIL',
			'rules' => 'required|valid_email|is_unique[users.email]'
		],
		[
			'field' => 'password',
			'label' => 'PASSWORD',
			'rules' => 'required|max_length[12]'
		]
	],
		'login_form_validation'=>
		[
			[
				'field'=> 'userName',
				'label' => 'USER NAME',
				'rules' => 'required|alpha'
			],
			[
				'field' => 'password',
				'label' => 'PASSWORD',
				'rules' => 'required|max_length[12]'
			]
	],
	'product_itemas_validation'=>
	[
		[
			'field' => 'title',
			'label' => 'TITLE',
			'rules' => 'required|alpha'
		],
		[
			'field' => 'description',
			'label' => 'DESCRIPTION',
			'rules' => 'required|alpha'
		],
		[
			'field' => 'price',
			'label' => 'PRICE',
			'rules' => 'required|integer'
		]
	],
	'product_edit_form_validation'=>
	[
		[
			'field' => 'title',
			'label' => 'Title',
			'rules' => 'required|alpha'
		],
		[
			'field' => 'description',
			'label' => 'Description',
			'rules' => 'required|alpha'
		],
		[
			'field' => 'price',
			'label' => 'Price',
			'rules' => 'required|integer'
		]
	],
];
?>