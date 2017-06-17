<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
get_header(); ?>
        <?php get_template_part('heromain')?>
        <div class="container content-sm">
            <div class="row">
                <?php get_template_part('details'); ?>
                <div class="col-md-3">
                    <?php get_template_part('keyevents'); ?>
                    <?php get_template_part('admission'); ?>
                    <?php get_template_part('campus'); ?>
                    <?php get_template_part('relatedprograms'); ?>
                    <?php get_template_part('gallery'); ?>
                </div>
             </div>
        </div>
<?php 
get_footer();   ?>
