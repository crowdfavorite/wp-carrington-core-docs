## posts/

The files in this directory are "top level" templates for pages in WordPress that show multiple posts at once. These files should call `the_header()`, `the_sidebar()`, `the_footer()` and `cfct_loop()` to include the other parts of the page.

The file from this directory that will be used is chosen based on the current page context.

You can explicitly decide which _loop/_ to use from these templates by passing it in as so:

	cfct_template_file('loop', 'example');

which would use _loop/example.php_ for the loop.

{context-general}