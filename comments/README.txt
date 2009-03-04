## comments/

### Overview

This directory holds templates for displaying the comment loop and the comment form - what is typically called in by WordPress's `comment_template()` function.

This level of abstraction us useful to be able to load in the comments and new comment form for a post/page via AJAX if desired.

A "default" template is required, and will be used when there are no other templates that match a given comment. This could be because no other templates have been created, or because the context doesn't match the templates that are available.


### Supported Override Filenames

- comments-default.php (or default.php)
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

- *default.php* - Used when there are no other templates that match for a given page/post.
- *author-{username}.php* - Used when the post/page is authored by a specific user. For example, a template with a file name of _author-jsmith.php_ would be used for a post/page by user _jsmith_. Any WordPres username can take the place of {username} in the file name.
- *home.php* - Used for the home page.
- *page.php* - Used for pages that do not match any other contextual templates.

