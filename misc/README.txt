## misc/

### Overview

This directory holds page fragments and snippets that you may want to use across multiple template files.

These files can be included in other theme files using the following code:

	<?php cfct_misc('nav-posts'); ?>

Where `nav-posts.php` is the name of the file in the _misc/_ directory that you want to include.


### Supported Override Filenames

- (none)


### File Descriptions

- *banner.php* - This is used by Carrington to display a message that is passed to it.
- *nav-posts.php* - This is standard paging for posts pages.

