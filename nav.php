<?php
 $page = scandir("page");
 $file = array_diff($page, array('.', '..'));
?>
<nav><ul>
    <?php foreach($file as $t) :?>
    <li><a href="?test=<?=$t?>"><?=$t?></a></li>
    <?php endforeach ?>
</ul>
</nav>