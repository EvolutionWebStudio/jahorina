<section class="row page">
		<div class="large-12 columns login-form-wrapper">
			<h2>Prijava na administratorski panel</h2>
			<br/>
			<div class="large-4 columns push-4">
				<form name="login" action="<?php echo site_url('prijavi') ?>" method="post">	
					<input name="username" type="text" id="myusername" placeholder="Korisničko ime" required>
					<input name="password" type="password" id="mypassword" placeholder="Lozinka" required>
					<div class="large6 columns push-3">
						<button type="submit" name="Submit" class="small radius secondary">Prijava</button>
					</div>
				</form>
			</div>
		</div>
</section>
				