<?=render('includes.header'); ?>
<?=render('includes.nli_navbar'); ?>
<div class="container">
	<div class="content" style="display:none">
		<div class="page-header">
			<h1>Login</h1>
		</div>
		<div class="row">
			<div class="span4">
				<form class="well" action="<?=Url::to('login/checklogin'); ?>" method="post" accept-charset="utf-8">
					<div class="input-prepend">
						<span class="add-on"><i class="icon-envelope"></i></span>
						<input type="text" class="input-large" name="email" placeholder="Email" required maxlength="40" autofocus />
					</div>
					<div class="input-prepend">
						<span class="add-on"><i class="icon-lock"></i></span>
						<input type="password" class="input-large" name="pwd" placeholder="Password" required maxlength="20" />
					</div>
					<button type="submit" class="btn btn-primary btn-large">
					<i class="icon-home icon-white"></i> Login</button>
				</form>
			</div>
		</div>
		<? if ($error == TRUE): ?>
		<div class="row">
			<div class="span4">
				<div class="alert alert-error">
					<strong>Login</strong> failed!.
				</div>
			</div>
		</div>
		<? else: ?>
		<div class="row">
			<div class="span4">
				<div class="alert alert-info">
					<p><strong>You</strong> are not logged in!</p>
					<small>No Account? </small>
					<a href="#" class="btn btn-info"><i class="icon-arrow-right icon-white"></i> sign up now</a>
				</div>
			</div>
		</div>
		<? endif; ?>
	</div>
	<?=HTML::script('js/jquery.js'); ?>
	<script>
	$(document).ready(function() {
		$(".content").fadeIn(1000);
	});
	</script>
	<footer>
		<p>&copy; 2012 built with Laravel 3.2.5 and Twitter Bootstrap 2.1.0</p>
	</footer>
</div><!-- /container -->
</body>
</html>
