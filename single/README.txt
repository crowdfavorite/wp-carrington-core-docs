## single/

This directory holds top level templates for "single" post pages. These files should call `the_header()`, `the_sidebar()`, `the_footer()`, `cfct_loop()` and `cfct_comments()` to include the other parts of the page.

All General Context template filenames apply here, but in reality only single.php and single-{Post Context}.php files will be used as the General Context must fall to "single" to look for templates here.

{context-general}