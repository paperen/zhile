<?php get_messagebox(); ?>
<form class="form-horizontal form-login" method="post" action="<?php echo module_url('common/user/login'); ?>">
	<div class="control-group">
		<label class="control-label" for="email">邮箱</label>
		<div class="controls">
			<input type="text" id="email" name="email" class="input-xlarge">
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="password">密码</label>
		<div class="controls">
			<input type="password" id="password" name="password" class="input-xlarge">
		</div>
	</div>
	<div class="control-group">
		<div class="controls">
			<label class="checkbox">
				<input type="checkbox" name="remember"> 记住我
			</label>
			<hr>
			<button type="submit" class="btn btn-success btn-large">登 陆</button>
		</div>
	</div>
	<!--__TOKEN__-->
</form>