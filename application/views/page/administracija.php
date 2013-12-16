<div class="small-12 columns">
    <ul class="article-list small-12 columns">


        <?php if ($pages){ foreach ($pages as $post): ?>
            <li class="clearfix">
                <p class="article-list-title"><?php echo $post->title; ?></p>
                <div class="admin-options">
                    <a class="ui-button-small button-edit" title="Izmjeni ponudu"  href="<?php echo site_url("page/edit/$post->id") ?>">Izmjeni vijest</a>
                </div>
            </li>
        <?php endforeach; } else echo "Nema rezultata!";?>
    </ul>
</div>