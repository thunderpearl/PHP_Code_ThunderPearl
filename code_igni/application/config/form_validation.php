
<?php

// This array has to be of this name only.
$config =  [

		'add_articles_rules' =>	[
												[

												'field' => 'title', // fields are basically names in form.
												'label' => 'Article Title',
												'rules' => 'required|alpha_dash'   // alpha_dash is for setting rule or alpha-numeric values.
								                ],

								                [
								                'field' => 'body',
								                'label' => 'Article Body',
								                'rules' => 'required',
								                ]

				                ],


		'admin_login'	=>      [

												[
												'field' => 'username',
												'label' => 'User Name',
												'rules' => 'required|alpha|trim',
												],

												[
												'field' => 'password',
												'label' => 'Password',
												'rules' => 'required',
												]
							    ]
];

?>
