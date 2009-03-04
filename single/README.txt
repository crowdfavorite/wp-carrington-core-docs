## single/

### Overview

This directory holds top level templates for "single" post pages. These files should call `the_header()`, `the_sidebar()`, `the_footer()`, `cfct_loop()` and `cfct_comments()` to include the other parts of the page.

A "default" template is required, and will be used when there are no other templates that match a given comment. This could be because no other templates have been created, or because the context doesn't match the templates that are available.


### Supported Override Filenames

- single-default.php (or default.php)
- author-{username}.php
- cat-{slug}.php
- role-{rolename}.php
- tag-{slug}.php


### File Descriptions

Standard context file naming will work for files in this directory. Here are some specific examples.

- *default.php* - Used when there are no other templates that match for a given context.
- *author-{username}.php* - Used to show a post authored by a specific user. For example, a template with a file name of _author-jsmith.php_ would be used posts by user _jsmith_. Any WordPress username can take the place of {username} in the file name.
- *cat-{slug}.php* - Used to show a post in a given category. The category is matched by the "slug" - for example posts in category "General" (with a category slug of "general") could use a template of _cat-general.php_.
- *tag-{slug}.php* - Used when a post has a given tag. The tag is matched by the "slug" - for example a post tagged with "News" (with a tag slug of "news") could use a template of _tag-news.php_.

