## css/

Organizational folder for holding theme image files. You can reference these files using the built-in WordPress `bloginfo()` function like so:

	<link rel="stylesheet" type="text/css" 
		href="<?php bloginfo('template_directory'); ?>/css/base.css" />

{no-engine}