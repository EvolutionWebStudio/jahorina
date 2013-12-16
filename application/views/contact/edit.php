<div class="small-12 columns">
	<h3>Izmjeni kontakt podatke</h3>
	<form method="post"  enctype="multipart/form-data" accept-charset="utf-8" action="<?php echo site_url("contact/update"); ?>">
		<div class="small-12 columns">
			<label title="">Adresa</label>
			<input type="text" name="address" value="<?php echo $param->address; ?>" />
			<label title="">Mobilni</label>
			<input type="text" name="mobile" value="<?php echo $param->mobile; ?>" />
			<label title="">Telefon</label>
			<input type="text" name="phone" value="<?php echo $param->phone; ?>" />
			<label title="">Email</label>
			<input type="text" name="email" value="<?php echo $param->email; ?>" />
			<label title="">Faks</label>
			<input type="text" name="faks" value="<?php echo $param->fax; ?>" />
		</div>
		<div class="small-12 columns">
			<textarea class="ckeditor" name="description"><?php echo $param->description; ?></textarea>
		</br>
		</div>
		
		
			<input type="hidden" name="id" value="<?php echo $param->id; ?>" /> 
		<div class="small-12 columns submit-button">
			<input class="button small" type="submit" value="Sačuvaj">
		</div>
	</form>
</div>