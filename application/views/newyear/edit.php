<div class="small-12 columns">
    <h3>Nova vijest</h3>
    <form method="post"  enctype="multipart/form-data" accept-charset="utf-8" action="<?php echo site_url("newyear/update"); ?>">
        <div class="small-9 columns">
            <label title="Sažet i primamljiv naslov. Da se ne ponavlja kao neki drugi. Da stane u maksimalno dva reda.">Naslov</label>
            <input type="text" name="naslov" value="<?php echo $post->name; ?>" required/>
        </div>

        <div class="small-3 columns">
            <br/>
            <label title="Da li je članak objavljen na sajtu ili je vidljiv samo administratoru.">
                <input type="checkbox" name="status" value="1" <?php if ($post->published) echo "checked"; ?>/> <strong> Objavljena ponuda</strong>
            </label>
        </div>
        <div class="small-12 columns">
            <div class="small-3 columns">
                <label title="Cijena po osobi.">Cijena</label>
                <input type="text" name="cijena" value="<?php echo $post->price; ?>" required/>
            </div>

            <div class="small-3 columns">
                <label title="Broj telefona za rezervaciju">Telefon</label>
                <input type="text" name="telefon" value="<?php echo $post->phone; ?>" required/>
            </div>
            <div class="small-3 columns">
                <label title="Broj telefona za rezervaciju.">Mobilni</label>
                <input type="text" name="mobilni" value="<?php echo $post->mobile; ?>" required/>
            </div>
            <div class="small-3 columns">
                <label title="Email.">Email</label>
                <input type="text" name="email" value="<?php echo $post->email; ?>" required/>
            </div>
        </div>
        <div class="small-12 columns">
            <textarea class="ckeditor" name="sadrzaj-clanka"><?php echo $post->description; ?></textarea>
            </br>
        </div>

        <input type="hidden" name="id" value="<?php echo $post->id; ?>" />
        <div class="small-12 columns submit-button">
            <input class="button small" type="submit" value="Sačuvaj">
        </div>
    </form>
</div>