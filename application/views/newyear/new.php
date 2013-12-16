<div class="small-12 columns">
    <h3>Nova vijest</h3>
    <form method="post"  enctype="multipart/form-data" accept-charset="utf-8" action="<?php echo site_url("newyear/save"); ?>">
        <div class="small-9 columns">
            <label title="Sažet i primamljiv naslov. Da se ne ponavlja kao neki drugi. Da stane u maksimalno dva reda.">Naslov</label>
            <input type="text" name="naslov" required/>
        </div>

        <div class="small-3 columns">
            <label title="Cijena po osobi.">Cijena</label>
            <input type="text" name="cijena" required/>
        </div>

        <div class="small-3 columns">
            <label title="Broj telefona za rezervaciju">Telefon</label>
            <input type="text" name="telefon" required/>
        </div>
        <div class="small-3 columns">
            <label title="Broj telefona za rezervaciju.">Mobilni</label>
            <input type="text" name="mobilni" required/>
        </div>
        <div class="small-3 columns">
            <label title="Email.">Email</label>
            <input type="text" name="email" required/>
        </div>

        <div class="small-12 columns">
            <textarea class="ckeditor" name="sadrzaj-clanka"></textarea>
            </br>
        </div>

        <div class="small-12 columns submit-button">
            <input class="button small" type="submit" value="Sačuvaj">
        </div>
    </form>
</div>