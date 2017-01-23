<?php if ( !empty( $_SERVER['SCRIPT_FILENAME'] ) && 'comments.php' == basename( $_SERVER['SCRIPT_FILENAME'] ) ) { ?>
		die ( 'Please do not load this page directly. Thanks!' );
<?php } ?>

<?php if ( post_password_required() ) { return; } ?>

<?php if ( have_comments() ) { ?>

	<h3 id="responses" class="heading-font">
		<?php comments_number( __( 'no responses', AVLANG ), __( '1 response', AVLANG ), __( '% responses', AVLANG ) ); ?>
	</h3>

	<ol class="commentlist">
		<?php wp_list_comments( 'type=comment&avatar_size=80&max_depth=3&per_page=5&callback=av_mobile_display_comment' ); ?>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) { ?>
				<?php if ( get_previous_comments_link() ) { ?>
					<li id="load-previous-comments" class="load-more-comments-wrap">
						<?php previous_comments_link( __( 'Load Previous Comments&hellip;', AVLANG ) ); ?>
					</li>
				<?php } ?>
				<?php if ( get_next_comments_link() ) { ?>
					<li id="load-next-comments" class="load-more-comments-wrap">
						<?php next_comments_link( __( 'Load Next Comments&hellip;', AVLANG ) ); ?>
					</li>
				<?php } ?>
		<?php } ?>
	</ol>

<?php } else { ?>

	<?php if ( comments_open() ) { ?>
		<!-- If comments are open, but there are no comments -->
 	<?php } else { ?>
		<p class="nocomments"><?php _e( 'Comments are closed', AVLANG ); ?></p>
 	<?php }?>

<?php } ?>

<!--  End of dealing with the comments, now the comment form -->

<?php if ( comments_open() ) { ?>
	<div id="respond">
		<div class="cancel-comment-reply">
			<?php cancel_comment_reply_link( __( 'Cancel', AVLANG ) ); ?>
		</div>	
	
		<h3><?php comment_form_title( __( 'Leave a Reply', AVLANG ), __( 'Leave a Reply to %s', AVLANG ) ); ?></h3>
	
	<?php if ( get_option( 'comment_registration' ) && !is_user_logged_in() ) { ?>
		<p><?php echo sprintf( __( 'You must be %slogged in%s to post a comment.', AVLANG ), '<a class="login-req" href="' . wp_login_url( get_permalink() ) . '">', '</a>' ); ?></p>
	<?php } else { ?>
		<form action="<?php bloginfo( 'wpurl' ); ?>/wp-comments-post.php" method="post" id="commentform">
	
			<?php comment_id_fields(); ?>
				
			<?php if ( is_user_logged_in() ) { ?>
				<p><?php _e( 'Logged in as', AVLANG ); ?> <?php echo $user_identity; ?>. <a href="<?php echo wp_logout_url( $_SERVER['REQUEST_URI'] ); ?>" title="Log out"><?php _e( 'Log out', AVLANG ); ?> &raquo;</a></p>
			
			<?php } else { ?>

				<p>
					<label for="author"><?php _e( 'Name', AVLANG ); ?><?php if ( $req ) echo "*"; ?></label>
					<input type="text" name="author" id="author" value="<?php echo esc_attr( $comment_author ); ?>" size="22" <?php if ( $req ) echo "aria-required='true'"; ?> />
				</p>
			
				<p>
					<label for="email"><?php _e( 'E-Mail', AVLANG ); ?><?php if ( $req ) echo "*"; ?></label>
					<input type="email" autocapitalize="off" name="email" id="email" value="<?php echo esc_attr( $comment_author_email ); ?>" size="22" <?php if ( $req ) echo "aria-required='true'"; ?> tabindex="11" />
				</p>
			
				<p>
					<label for="url"><?php _e( 'Website', AVLANG ); ?></label>
					<input type="url" autocapitalize="off" name="url" id="url" value="<?php echo esc_attr($comment_author_url); ?>" size="22" />
				</p>
			
			<?php } ?>
			
			<p>
				<label><?php _e( 'Comment', AVLANG ); ?></label>
				<textarea name="comment" id="comment"></textarea>
			</p>
		
			<p><button name="submit" type="submit" id="submit"><?php _e( 'Publish', AVLANG ); ?></button></p>
			
			<?php do_action( 'comment_form', $post->ID ); ?>
	
		</form>
	<?php } ?>
	
	</div><!-- #respond // end dealing with the comment form -->
	
<?php }