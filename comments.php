

<div id="commentaires" class="comments">
    <?php if ( have_comments() ) : ?>
 
    
        <ol class="commentlist">
            <?php
            	// La fonction qui liste les commentaires
                wp_list_comments( array(
                    'style'       => 'ol',
                    'short_ping'  => true,
                    'avatar_size' => 74,
                ) );
            ?>
        </ol>
        
    <?php 
    	// S'il n'y a pas de commentaires
    	else : 
    ?>
        <p class="comments__none">
            Il n'y a pas de commentaires pour le moment. Soyez le premier à participer !
    	</p>
    <?php endif; ?>
 
    <?php comment_form(); // Le formulaire d'ajout de commentaire ?>
</div>