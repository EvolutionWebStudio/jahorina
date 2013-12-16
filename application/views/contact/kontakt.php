<section class="main-content">
	<div class="title-bar">
		<h2><?php echo $page->title; ?></h2>
	</div>
	<article class="clearfix">
		<div class="row">
			<div class="large-12 columns contact-map" id="map" ></div>
			
			<div class="large-5 columns">
				<div class="row">
					<br/><br/>
					<div class="large-3 columns">Adresa:</div>
					<div class="large-9 columns"><?php echo $param->address; ?></div>
					<br/><br/>
					<div class="large-3 columns">Email:</div>
					<div class="large-9 columns"><?php echo $param->email; ?></div>
					<br/><br/>
					<div class="large-3 columns">Telefon:</div>
					<div class="large-9 columns"><?php echo $param->phone; ?></div>
					<br/><br/>
					<div class="large-3 columns">Mobilni:</div>
					<div class="large-9 columns"><?php echo $param->mobile; ?></div>
				</div>
			</div>
			
			<div class="large-7 columns">
				<form action="<?php echo site_url("page/kontaktiraj") ?>" class="contact-form">
					<label>Vaše ime</label>
					<input type="text" name="ime" required/>
		
					<label>Vaš email</label>
					<input type="email" name="email" required/>
		
					<label>Poruka</label>
					<div class="textarea">
						<textarea name="poruka" cols="30" rows="10" required></textarea>
					</div>
		
					<div class="small-12 columns submit-button-wrapper">
						<input class="button small secondary radius" type="submit" value="Pošaljite">
					</div>
					
					<input type="reset" id="reset" />
				</form>
			</div>
		</div>
	</article>
</section>