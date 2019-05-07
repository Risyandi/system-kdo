<div class="container-fluid">
	<img src="../assets/img/jakarta-backround.JPG" id="background-img">
	<div id="form-login">
		<div class="logo-login"><img id="images-logo" src="../assets/img/logo-pemadam.png"></div>
	<div id="title-form">seksi sarana sudin penanggulangan kebakaran dan penyelamatan jakarta pusat</div>
	<div id="field-input">
		<form action="<?=site_url('auth/process') ?>" method="post">
		<div>
			<input type="text" name="username" placeholder="Username" class="lg" required />
		</div>
		<div style="margin-top: 10px;">
				<input type="password" name="password" placeholder="Password" class="lg" required />
			</div>
			<div style="margin-top: 20px;">
					<input type="submit" name="login" value="Login" class="btn" />
				</div>				
			</form>
		</div>
	</div>
</div>