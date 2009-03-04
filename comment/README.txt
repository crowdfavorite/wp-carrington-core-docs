## comment/

### Overview

This directory holds templates for displaying a comment in it's entirety. These templates do not hold the comment loop, or the "Comments" title or the form to allow commenting; they just show a single comment.

Typically these templates will be brought in to a template in _comments/_, but can also be used to display single comments as needed.

A "default" template is required, and will be used when there are no other templates that match a given comment. This could be because no other templates have been created, or because the comment in question doesn't match the templates that are available.


### Supported Override Filenames

- comment-default.php (or default.php)
- ping.php
- author.php
- user-{username}.php
- role-{role}.php


### File Descriptions

- *comment-default.php* - Used when there are no other templates that match for a given comment.
- *ping.php* - Used if the comment is a pingback or a trackback.
- *author.php* - Used when the author of the post leaves a comment.
- *user-{username}.php* - Used when a user with that username leaves a comment. For example, a template with a file name of _user-jsmith.php_ would be used for a comment by user _jsmith_. Any WordPres username can take the place of {username} in the file name.
- *role-{role}.php* - Used when a comment is made by a user with a certain role. For example, a template with a file name of _role-subscriber.php_ would be used for a user with a role of "subscriber" (typical for a registered commentor who is not an author or an admin). Any WordPress role can take the place of {role} in the file name.
