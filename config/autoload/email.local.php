<?php
return array(
		'email' => array(
				'credentials' => array(
						'from_mail' => 'seletoalimentos@seletoalimentos.com.br',
						'from_name' => 'Cafe Seleto',
				),
				//use smtp or sendmail
				'transport' => 'sendmail',
				'smtp' => array(
						'host' => 'smtp.seletoalimentos.com.br',
						'port' => 587,
						'connection_class' => 'login',
						'connection_config' => array(
								'ssl'      => 'tls',
								'username' => 'seletoalimentos@seletoalimentos.com.br',
								'password' => 'saGM*2013'
						),
				),
		),
);