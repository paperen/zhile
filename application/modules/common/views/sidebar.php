<?php if( $uid ) { ?>
<div class="row-fluid">
	<div class="thumbnail span7"><img src="<?php echo $profile_image_url; ?>"></div>
	<div class="span4 sidebar_user_plane">
		<ul class="unstyled">
			<li><strong><?php echo $screen_name; ?></strong></li>
			<li><a href="<?php echo base_url('logout'); ?>" class="btn btn-small"><i class="icon icon-off"></i> 注销</a></li>
		</ul>
	</div>
</div>
<?php } else { ?>
<a href="<?php echo base_url('login'); ?>" class="btn btn-large btn-block btn-success"><i class="icon icon-white icon-user"></i> 登录</a>
<?php } ?>
