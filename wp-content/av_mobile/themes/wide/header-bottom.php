<div class="page-wrapper">

	<header id="header-title-logo">
	<?php if( av_mobile_show_search() ) { ?>
			<div id="search-toggle" class="search-toggle tappable" role="button"><!--icon-search--></div>
	<?php } ?>
		<a href="<?php bloginfo( 'url' ); ?>" class="header-center tappable">
			<h1 class="heading-font"><?php bloginfo( 'site_title' ); ?></h1>
		</a>
		<?php if ( av_mobile_has_menu() ) { ?>
		<div id="menu-toggle" class="show-hide-toggle tappable" data-effect-target="menu" role="button"><!--icon-reorder--></div>
		<?php } ?>
	</header>

	<?php if( av_mobile_show_search() ) { ?>
	<div id="search-dropper">
		<div id="wptouch-search-inner">
			<form method="get" id="searchform" action="<?php echo home_url(); ?>">
				<input type="text" name="s" id="search-text" placeholder="<?php _e( 'Search this website', AVLANG ); ?>&hellip;" />
				<input name="submit" type="submit" id="search-submit" value="<?php _e( 'Search', AVLANG ); ?>" class="button-dark" />
			</form>
		</div>
	</div>
	<?php } ?>

	<div id="menu" class="wptouch-menu show-hide-menu">

		<?php if ( av_mobile_has_menu() ) { av_mobile_show_menu(); } ?>

		<?php if (  av_mobile_show_login() ) { ?>
			<ul class="menu-tree login-link">
				<li>
				<?php if ( !is_user_logged_in() ) { ?>
				<a class="login-toggle tappable no-ajax" href="#">
					<i class="icon-key"></i> Login
				</a>
			<?php } else { ?>
				<a href="<?php echo wp_logout_url( $_SERVER['REQUEST_URI'] ); ?>" class="tappable" title="<?php _e( 'Logout', AVLANG ); ?>">
					<i class="icon-user"></i>
					<?php _e( 'Logout', AVLANG ); ?>
				</a>
			<?php } ?>
				</li>
			</ul>
		<?php } ?>

	</div>

<?php if ( is_archive() ) { ?>
	<div class="post-page-head-area wide">
		<?php av_mobile_archive_title_text(); ?>
	</div>
<?php } ?>