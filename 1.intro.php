<?php

// PHP is server side scripting language especially used web development. Needs a server to run php apps (Apache2 or Nginx).

// php tags
// Normal tags and short echo tags
$expression = true;
$highlight = true;
$arr = ['apple', 'banana', 'grapes', 'mango'];
?>

<?php echo "something" ?>

<?= "php short echo tags" ?>

<?php if ($expression == true): ?>
    This will show if the expression is true.
<?php else: ?>
    Otherwise this will show.
<?php endif; ?>

<h5>Fruits List</h5>
<ul>
<?php foreach($arr as $key => $value):?>
    <li id="<?= $key?>"><?=$value?></li>
<?php endforeach;?>
</ul>

<p<?php if ($highlight): ?> class="highlight"<?php endif;?>>This is a paragraph.</p>