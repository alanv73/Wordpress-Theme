<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package uppercase
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'The page you requested was not found, but...', 'uppercase' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<img id="hhgimg" src="assets/images/hhg.png" alt="">
					<img id="panicimg" src="wp-content/themes/Wordpress-Theme/assets/images/panic2.png" alt="">
					<p><?php esc_html_e( 'Maybe you can hitch a ride on one of the links below', 'uppercase' );
					echo '<br/>';
					esc_html_e( 'or check the Guide using our convenient search box', 'uppercase' ); ?></p>

					<?php
					get_search_form();

					the_widget( 'WP_Widget_Recent_Posts' );
					?>

					<div class="widget widget_categories">
						<h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'uppercase' ); ?></h2>
						<ul>
							<?php
							wp_list_categories( array(
								'orderby'    => 'count',
								'order'      => 'DESC',
								'show_count' => 1,
								'title_li'   => '',
								'number'     => 10,
							) );
							?>
						</ul>
					</div><!-- .widget -->

					<?php
					/* translators: %1$s: smiley */
					$uppercase_archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'uppercase' ), convert_smilies( ':)' ) ) . '</p>';
					the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$uppercase_archive_content" );

					the_widget( 'WP_Widget_Tag_Cloud' );
					?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
