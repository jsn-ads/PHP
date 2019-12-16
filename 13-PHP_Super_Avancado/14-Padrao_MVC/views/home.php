<h1>Notícias</h1>

<?php foreach($posts as $post): ?>
    <?php echo utf8_encode($post['noticias']); ?>
    <hr/>
<?php endforeach; ?>