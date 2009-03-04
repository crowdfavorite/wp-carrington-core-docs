## image/

### Overview

This directory holds templates for images/attachments.

A "default" template is required, and will be used when there are no other templates that match a given comment. This could be because no other templates have been created, or because the context doesn't match the templates that are available.


### Supported Override Filenames

- attachment-default.php (or default.php)
- single-author-{username}.php
- single-cat-{slug}.php
- single-role-{rolename}.php
- single-tag-{slug}.php


### File Descriptions

Standard context file naming will work for files in this directory. Here are some specific examples. The post the image is attached to is used to determine context.

- *default.php* - Used when there are no other templates that match for a given context.
- *single-author-{username}.php* - Used if a post authored by a specific user. For example, a template with a file name of _author-jsmith.php_ would be used posts by user _jsmith_. Any WordPress username can take the place of {username} in the file name.
- *single-cat-{slug}.php* - Used if a post in a given category. The category is matched by the "slug" - for example posts in category "General" (with a category slug of "general") could use a template of _cat-general.php_.
- *single-tag-{slug}.php* - Used when a post has a given tag. The tag is matched by the "slug" - for example a post tagged with "News" (with a tag slug of "news") could use a template of _tag-news.php_.

