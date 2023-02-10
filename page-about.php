<?php
/**
*
* Template name: About us
* Template Post Type:  page
*/
get_header();
$bg = get_field('background_image');
$colOne = get_field('col_1');
$colOneTitle = get_field('title');
$colTwo = get_field('col_2');
$colTwoTitle = get_field('title_two');

while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" class="hentry">
    <div class="wraper-bg">
        <div class="bg" style="background-image:url(<?php echo $bg; ?>);">
            <div class="bg-wraper">
                <div class="container">
                    <div class="cont">
                        <div class="row">
                        </div>
                        <div class="row cont row-col">
                            <div class="left">
                                <h1 class="h1"><?php echo $colOneTitle?></h1>
                                <?php if($colOne) { ?>
                                <?php echo $colOne; ?>
                                <?php } ?>
                            </div>
                            <div class="right">
                                <h2 class="h1"><?php echo $colTwoTitle?></h2>
                                <?php if($colTwo ) { ?>
                                <?php echo $colTwo ; ?>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</article>
<?php endwhile;
get_footer();
