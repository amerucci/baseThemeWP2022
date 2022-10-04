<?php

//On déclare la zone que l'on souhaite créer
function widgets()
{
	register_sidebar(
		array(
			//On donne un nom à la zone de notre widget qui apparaîtra dans votre administration Wordpress
			'name' => 'Pre-footer Gauche',
			//Identifiant unique de votre zone qui vous permettra par la suite de l'appeler en front
			'id' => 'pre-footer-gauche',
			//On choisi la balise HTML qui va entourer notre widget
			'before_widget' => '<div class="col50">',
			'after_widget' => '</div>',
		)
	);

	register_sidebar(
		array(
			//On donne un nom à la zone de notre widget qui apparaîtra dans votre administration Wordpress
			'name' => 'Pre-footer Droit',
			//Identifiant unique de votre zone qui vous permettra par la suite de l'appeler en front
			'id' => 'pre-footer-droit',
			//On choisi la balise HTML qui va entourer notre widget
			'before_widget' => '<div class="col50">',
			'after_widget' => '</div>',
			//On choisi la balise HTML qui va entourer le titre de notre widget
			'before_title' => '<p class="titreduwidget">',
			'after_title' => '</p>'
		)
	);

	register_sidebar(
		array(
			//On donne un nom à la zone de notre widget qui apparaîtra dans votre administration Wordpress
			'name' => 'Copyright',
			//Identifiant unique de votre zone qui vous permettra par la suite de l'appeler en front
			'id' => 'copyright',
			//On ajoute une description à notre zone
			'description' => 'Ajouter un widget de type texte dans lequel vous saisirez vos horaires dans cette zone',
			//On choisi la balise HTML qui va entourer notre widget
			'before_widget' => '<div>',
			'after_widget' => '</div>',
			//On choisi la balise HTML qui va entourer le titre de notre widget
			'before_title' => '<p class="titreduwidget">',
			'after_title' => '</p>'
		)
	);

	register_sidebar(
		array(
			//On donne un nom à la zone de notre widget qui apparaîtra dans votre administration Wordpress
			'name' => 'Auteur du site',
			//Identifiant unique de votre zone qui vous permettra par la suite de l'appeler en front
			'id' => 'author',
			//On ajoute une description à notre zone
			'description' => 'Ajouter un widget de type texte dans lequel vous saisirez vos horaires dans cette zone',
			//On choisi la balise HTML qui va entourer notre widget
			'before_widget' => '<div>',
			'after_widget' => '</div>',
			//On choisi la balise HTML qui va entourer le titre de notre widget
			'before_title' => '<p class="titreduwidget">',
			'after_title' => '</p>'
		)
	);


	register_sidebar(
		array(
			//On donne un nom à la zone de notre widget qui apparaîtra dans votre administration Wordpress
			'name' => 'karolos',
			//Identifiant unique de votre zone qui vous permettra par la suite de l'appeler en front
			'id' => 'karolossss',
			//On ajoute une description à notre zone
			'description' => 'Ajouter un widget de type texte dans lequel vous saisirez vos horaires dans cette zone',
			//On choisi la balise HTML qui va entourer notre widget
			'before_widget' => '<div>',
			'after_widget' => '</div>',
			//On choisi la balise HTML qui va entourer le titre de notre widget
			'before_title' => '<p class="titreduwidget">',
			'after_title' => '</p>'
		)
	);
}
//On lance l'action avec le hook widget_init pour qu'il puisse exécuter notre fonction et ajouter notre zone aux widgets
add_action('widgets_init', 'widgets');


function mesMenusWordpress()
{
	register_nav_menus(
		array(
			'header-menu' => __('Zone menu header'),
			'footer-menu' => __('Zone menu footer'),
		)
	);
}

add_action('init', 'mesMenusWordpress');

/*
* On utilise une fonction pour créer notre custom post type 'projets'
*/

function custom_post_type_projets()
{

	// On rentre les différentes dénominations de notre custom post type qui seront affichées dans l'administration
	$labels = array(
		// Le nom au pluriel
		'name'                => _x('Tous nos item (Titre de la page)', 'Post Type General Name'),
		// Le nom au singulier
		'singular_name'       => _x('Projet', 'Post Type Singular Name'),
		// Le libellé affiché dans le menu
		'menu_name'           => __('CPT Personnalisé'),
		// Les différents libellés de l'administration
		'all_items'           => __('Tous les items'),
		'view_item'           => __('Voir la projet'),
		'add_new_item'        => __('Ajouter un nouveau item'),
		'add_new'             => __('Ajouter un item'),
		'edit_item'           => __('Editer un projet'),
		'update_item'         => __('Modifier un projet'),
		'search_items'        => __('Rechercher un projet'),
		'not_found'           => __('Aucun projet trouvé'),
		'not_found_in_trash'  => __('Aucun projet trouvé dans le panier à projet'),
	);

	// On peut définir ici d'autres options pour notre custom post type

	$args = array(
		'label'               => __('items'),
		'description'         => __('Tout sur les projets'),
		'labels'              => $labels,
		// On définit les options disponibles dans l'éditeur de notre custom post type ( un titre, un auteur...)
		'supports'            => array('title', 'editor', 'thumbnail', 'revisions', 'custom-fields',),
		/* 
		* Différentes options supplémentaires
		*/
		'show_in_rest' => true,
		'hierarchical'        => false,
		'public'              => true,
		'has_archive'         => true,
		'rewrite'			  => array('slug' => 'items'),

	);

	// On enregistre notre custom post type qu'on nomme ici "projets" et ses arguments
	register_post_type('items', $args);
}

add_action('init', 'custom_post_type_projets', 0);
