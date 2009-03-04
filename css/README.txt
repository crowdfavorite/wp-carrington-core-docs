## css/

### Overview

This directory is used to organize your CSS files. You can reference these files using the built-in WordPress `bloginfo()` function like so:

	<link rel="stylesheet" type="text/css" 
		href="<?php bloginfo('template_directory'); ?>/css/base.css" />
