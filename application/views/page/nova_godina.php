<?php if($posts) foreach($posts as $post): ?>
    <div>
        <div class="container_12">
            <a href="<?php echo site_url('vijest/'.$post->id) ?>"><h1><?php  echo $post->name; ?></h1></a>
        </div>
        <div class="container_12">
            <p><?php echo $post->description; ?></p>
        </div>
    </div>
<?php endforeach; ?>