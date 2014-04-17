<?php
	include widget_config_form('title');	
	widget_config_extra_begin();		
	include widget_config_form( 'file', array(
		'name'		=>	'icon',
		'caption'	=>	'icon (20x20)'
		)
	);
	include widget_config_form('css');
	widget_config_extra_end();