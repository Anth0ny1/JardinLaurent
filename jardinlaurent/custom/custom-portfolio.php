<?php
add_action('init', 'my_custom_portfolio');
function my_custom_portfolio(){

register_post_type(
  'portfolio',
  array(
    'label' => 'portfolio',
    'labels' => array(
      'name' => 'portfolio',
      'singular_name' => 'portfolio',
      'all_items' => 'Toutes les portfolio',
      'add_new_item' => 'Ajouter une portfolio',
      'edit_item' => 'Éditer une portfolio',
      'new_item' => 'Nouvelle portfolio',
      'view_item' => 'Voir les portfolio',
      'search_items' => 'Rechercher parmi les portfolio',
      'not_found' => 'Pas d\'portfolio trouvé',
      'not_found_in_trash'=> 'Pas d\'portfolio dans la corbeille'
      ),
    'public' => true,
    'capability_type' => 'post',
    'supports' => array(
      'title',
      'editor',
      'thumbnail'
    ),
    'has_archive' => true,
    'menu_position' => 82,
    'menu_icon' => 'dashicons-format-gallery',
    // 'rewrite' => array(
    //   'slug' => 'taxonomy-marque',
    // )
  )
);
// register_taxonomy(
//   'marque',
//   'occasion',
//   array(
//     'label' => 'marque',
//     'labels' => array(
//     'name' => 'marque',
//     'singular_name' => 'marque',
//     'all_items' => 'Tous les marque',
//     'edit_item' => 'Éditer la marque',
//     'view_item' => 'Voir la marque',
//     'update_item' => 'Mettre à jour la marque',
//     'add_new_item' => 'Ajouter une marque',
//     'new_item_name' => 'nouvelle marque',
//     'search_items' => 'Rechercher parmi les marque',
//     'popular_items' => 'marque les plus utilisés'
//   ),
//   'hierarchical' => true
//   )
// );
// register_taxonomy_for_object_type( 'marque', 'occasion' );
}
