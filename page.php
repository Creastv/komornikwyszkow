<?php
get_header();

while ( have_posts() ) : the_post(); ?>

<article id="post-<?php the_ID(); ?>" class="hentry">
    <div class="co">
        <iframe class="responsive-iframe" src="http://localhost/evergo/wp-admin"></iframe>
    </div>
    <?php
	get_template_part( 'templates-parts/header/header', 'title' ); 
	 ?>
    <div class="entry-content">
        <?php
		the_content();
		?>
    </div>
    <footer class="entry-footer"></footer>
</article>

<?php endwhile;
get_footer();
