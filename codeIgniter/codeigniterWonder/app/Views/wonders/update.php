<h2><?= esc($title) ?></h2>
 
<a href="<?php base_url('wonders/')?>">Volver al listado de Wonders</a>
<br><br><br>
 
<?php if (! empty($wonders) && is_array($wonders)):?>
 
    <form action="./updated/<?= esc($wonders['id']) ?>"  method="post">
        <?= csrf_field() ?>
 
        <label for="wonder">Wonder</label>
        <input type="input" name="wonder" value="<?= esc($wonders['wonder']) ?>">
        <br>
 
        <label for="location">Location</label>
        <input type="input" name="location" value="<?= esc($wonders['location']) ?>">
        <br>
 
        <input type="submit" name="submit" value="Update wonder item">
    </form>
 
<?php endif ?>