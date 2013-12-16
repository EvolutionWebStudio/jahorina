<div class="small-12 columns">
    <ul class="article-list small-12 columns">


        <?php if ($posts){ foreach ($posts as $post): ?>
            <li class="clearfix">
                <p class="article-list-title"><?php echo $post->name; ?></p>
                <div class="admin-options">
                    <a class="ui-button-small button-edit" title="Izmjeni ponudu"  href="<?php echo site_url("newyear/edit/$post->id") ?>">Izmjeni vijest</a>
                    <a class="ui-button-small button-delete" title="Izbriši ponudu" href="<?php echo site_url("newyear/delete/$post->id") ?>">Obriši vijest</a>
                </div>
            </li>
        <?php endforeach; } else echo "Nema rezultata!";?>
    </ul>
</div>