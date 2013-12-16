<?php if($posts) foreach($posts as $post): ?>
    <div>
        <div class="">
            <a href="<?php echo site_url('vijest/'.$post->id) ?>"><h1><?php  echo $post->name; ?></h1></a>
        </div>
        <div class="">
            <p><?php echo $post->description; ?></p>
        </div>
    </div>
<?php endforeach; ?>