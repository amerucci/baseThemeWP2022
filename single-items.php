
<?php

include("header.php");

?>


<h1 class="pagetitleh1">
    <?php the_title(); ?>
</h1>

<div class="container">

    <div class="contenu">
        <?php the_content(); ?>
    </div>
    <div class="extra">
 
    </div>

</div>

<div class="post-comments">
<?php comments_template(); ?>
</div>

<?php


include("footer.php");
