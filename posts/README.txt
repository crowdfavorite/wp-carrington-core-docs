## posts/

### Overview

The files in this directory are "top level" templates for pages in WordPress that show multiple posts at once. These files should call `the_header()`, `the_sidebar()`, `the_footer()` and `cfct_loop()` to include the other parts of the page.

The file from this directory that will be used is chosen based on the current page context.

You can explicitly decide which _loop/_ to use from these templates by passing it in as so:

	cfct_template_file('loop', 'example');

which would use _loop/example.php_ for the loop.

A "default" template is required, and will be used when there are no other templates that match a given context. This could be because no other templates have been created, or because the context doesn't match the templates that are available.


### Supported Override Filenames

- posts-default.php (or default.php)
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

- *posts-default.php* - Used when there are no other templates that match for a given context.
- *author-{username}.php* - Used to show posts authored by a specific user. For example, a template with a file name of _author-jsmith.php_ would be used posts by user _jsmith_. Any WordPress username can take the place of {username} in the file name.
- *cat-{slug}.php* - Used to show posts in a given category. The category is matched by the "slug" - for example posts in category "General" (with a category slug of "general") could use a template of _cat-general.php_.
- *tag-{slug}.php* - Used to show posts for a given tag. The tag is matched by the "slug" - for example a post tagged with "News" (with a tag slug of "news") could use a template of _tag-news.php_.
- *author.php* - Used for showing posts by an author.
- *category.php* - Used for showing posts by category.
- *search.php* - Used for showing search results.
- *tag.php* - Used for showing posts by tag.