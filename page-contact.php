<?php
/**
*
* Template name: Contact
* Template Post Type:  page
*/
get_header();
$bg = get_field('background_image');
$colOne = get_field('col_1');
$colTwo = get_field('col_2');
$colTree = get_field('col_3');
$colFour = get_field('col_4');

while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" class="hentry">
    <div class="wraper-bg">
        <div class="bg" style="background-image:url(<?php echo $bg; ?>);">
            <div class="bg-wraper">
                <div class="container">
                    <div class="cont">
                        <div class="row">
                            <?php get_template_part( 'templates-parts/header/header', 'title' ); ?>
                        </div>
                        <div class="row cont row-col">
                            <div class="left">
                                <div class="col">
                                    <?php if($colOne) { ?>
                                    <?php echo $colOne; ?>
                                    <?php } ?>
                                </div>
                                <div class="col">
                                    <?php if($colTwo) { ?>
                                    <?php echo $colTwo; ?>
                                    <?php } ?>
                                </div>

                                <div class="col">
                                    <?php if($colFour) { ?>
                                    <?php echo $colFour; ?>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="right">
                                <div class="col">
                                    <?php if($colTree) { ?>
                                    <?php echo $colTree; ?>
                                    <?php } ?>
                                </div>
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
