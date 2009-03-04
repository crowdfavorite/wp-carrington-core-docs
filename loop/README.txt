## loop/

### Overview

This directory contains files that do "the loop". Generally the files in this directory will be included in a file from the _posts/_ or _pages/_ directory, and they will in turn include templates from the _content/_ or _excerpt/_ directories.

For example, you might want posts on a search results page to display differently that posts on an archive page. Here is how that page would be built:

1. A page is identified as a search page - Carrington looks for a _posts/search.php_ file and will fall back on a _posts/default.php_ file if none is found.
2. The _posts/search.php_ file will include the header, footer and sidebar - and will also include a call to `cfct_loop()` to include a loop.
3. Since we don't want to show the full posts in search results, the _posts/search.php_ explicitly asks for a file from the _excerpt/_ directory to display the posts in the search results. It will use _excerpt/search.php_ if that file exists, or fall back on _excerpt/default.php_ if the custom file does not exist.


### Supported Override Filenames

- loop-default.php (or default.php)
- archive.php
- author.php
- author-{username}.php
- category.php
- cat-{slug}.php
- home.php
- page.php
- role-{rolename}.php
- search.php
- single.php
- tag.php
- tag-{slug}.php


### File Descriptions

Standard context file naming will work for files in this directory. Here are some specific examples.

Included is the "default" loop (_default.php_) and the "search" loop (_search.php_). Create as many loops as you like to create custom displays for various pages.
