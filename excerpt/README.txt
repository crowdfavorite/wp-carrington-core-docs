## excerpt/

### Overview

(This information is very similar to the _content/_)

This directory holds the templates for displaying a the excerpt for a post. Typically this will include the title and some sub-set of meta information (date, categories, tags, author, etc.) and the full output of `the_content()`.

Commonly these templates are included by templates in the _loop/_; but are also useful for bringing in an atomic post representation via AJAX or placing one within another template.

A "default" template is required, and will be used when there are no other templates that match a given comment. This could be because no other templates have been created, or because the comment in question doesn't match the templates that are available.

You can create templates to be used with posts/pages given various conditions. For example, you might want to give all posts in a certain category some specific styling rules. Or perhaps posts with a certain custom field or by a specific author. This is accomplished by creating templates with file names that match these conditions, then placing them in the _content/_ directory. All templates other than _default.php_ are optional.

The order in which these conditions are checked defaults to the following:

1. author
2. meta
3. category
4. role
5. tag
6. page types (author, category, tag, single, search, etc.)
7. default

however this order can be overridden with a plugin using the `cfct_content_match_order` hook.

Once a template match has been found, no other processing is done.


### Supported Override Filenames

- excerpt-default.php (or default.php)
- archive.php
- author-{username}.php
- cat-{slug}.php
- meta-{key}-{value}.php
- page.php
- role-{rolename}.php
- tag-{slug}.php


### File Descriptions

(This information is the same as the _content/_)

- *excerpt-default.php* - Used when there are no other templates that match for a given post/page.
- *author-{username}.php* - Used when a user with that username authors a post/page. For example, a template with a file name of _author-jsmith.php_ would be used for a poat/page by user _jsmith_. Any WordPres username can take the place of {username} in the file name.
- *meta-{key}-{value}.php* - Used when there is a custom field for the post/page matching the key and value listed in the file name. This is useful if you want to be able to flag posts as "featured" or similar, and give those posts some custom treatment. In this example, you could add a custom field of "featured" with a value of "yes" to a post/page and it would use a template of _meta-featured-yes.php_ if that template exists.
- *cat-{slug}.php* - Used when a post is in a given category. The category is matched by the "slug" - for example a post in category "General" (with a category slug of "general") could use a template of _cat-general.php_.
- *role-{role}.php* - Used when a post/page is authored by a user with a particular role. The {role} is an all lowercase representation of the role string - for example, an author with an "Administrator" role might use a template of _role-administrator.php_. This is primarily useful if you have a set of authors that are given a Contributor role; or a Guest Columnist role or similar. Any WordPress role can take the place of {role} in the file name.
- *tag-{slug}.php* - Used when a post has a certain tag applied to it. The tag is matched by the "slug" - for example a post with tag "Reference" (with a category slug of "reference") could use a template of _tag-reference.php_.
- *author.php* - Used when the content is being displayed on an "author" page (a page listing posts by author).
- *category.php* - Used when the content is being displayed on a "category" page (a page listing posts by category).
- *tag.php* - Used when the content is being displayed on an "tag" page (a page listing posts by tags).
- *page.php* - Used when the content is being displayed is a page (not a post).
- *single.php* - Used when the content is being displayed on an "single" page (a page showing only one post).
- *search.php* - Used when the content is being displayed are search results (a page listing posts matching a user search).
- *home.php* - Used when the page being displayed is the home page.
