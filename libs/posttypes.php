<?php

add_action( 'init', 'dreamauto_init_posttypes');

function dreamauto_init_posttypes(){
    $cars_args = array(
        'labels' => array(
            'name' => 'Samochody',
            'singular_name' => 'Samochody',
            'all_items' => 'Wszystkie samochody',
            'add_new' => 'Dodaj nowy samochód',
            'add_new_item' => 'Dodaj nowy samochód',
            'edit_item' => 'Edytuj samochód',
            'new_item' => 'Nowy samochód',
            'view_item' => 'Zobacz samochód',
            'search_items' => 'Szukaj w samochodach',
            'not_found' =>  'Nie znaleziono żadnych samochodów',
            'not_found_in_trash' => 'Nie znaleziono żadnych samochodów w koszu', 
            'parent_item_colon' => ''
        ),
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true, 
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => true,
        'menu_position' => 5,
        'supports' => array(
            'title','author','excerpt','custom-fields', 'revisions',
        ),
        'has_archive' => true,
    );
    add_post_type_support('cars', 'fields',array(
        'field' => 'value',
    ) );
    register_post_type( 'cars', $cars_args );
   
}
add_action( 'init', 'dreamauto_init_taxonomies');





function dreamauto_init_taxonomies(){
    register_taxonomy(
        'elements',
        array('cars'),
        array(
            'hierarchical' => true,
            'labels' => array(
                'name' => 'Wyposażenie samochodu',
                'singular_name' => 'Wyposażenie samochodu',
                'search_items' =>  'Wyszukaj element wyposażenia',
                'popular_items' => 'Najpopularniejsze elementy wyposażenia',
                'all_items' => 'Wszystkie elementy wyposażenia',
                'most_used_items' => null,
                'parent_item' => null,
                'parent_item_colon' => null,
                'edit_item' => 'Edytuj element wyposażenia', 
                'update_item' => 'Aktualizuj element wyposażenia',
                'add_new_item' => 'Dodaj nowy element wyposażenia',
                'new_item_name' => 'Nazwa nowego elementu wyposażenia',
                'separate_items_with_commas' => 'Oddziel elementy przecinkiem',
                'add_or_remove_items' => 'Dodaj lub usuń elementy wyposażenia',
                'choose_from_most_used' => 'Wybierz spośród najczęścież używanych elementów wyposażenia',
                'menu_name' => 'Wyposażenie samochodu',
            ),
            'show_ui' => true,
            'update_count_callback' => '_update_post_term_count',
            'query_var' => true,
            'rewrite' => array('slug' => 'element' )
    ));
    register_taxonomy(
        'typ_oferty',
        array('cars'),
        array(
            'hierarchical' => true,
            'labels' => array(
                'name' => 'Typ oferty',
                'singular_name' => 'Typ oferty',
                'search_items' =>  'Wyszukaj typ oferty',
                'popular_items' => 'Najpopularniejsze typ oferty',
                'all_items' => 'Wszystkie typ oferty',
                'most_used_items' => null,
                'parent_item' => null,
                'parent_item_colon' => null,
                'edit_item' => 'Edytuj typ oferty', 
                'update_item' => 'Aktualizuj typ oferty',
                'add_new_item' => 'Dodaj nowy typ oferty',
                'new_item_name' => 'Nazwa nowego typ oferty',
                'separate_items_with_commas' => 'Oddziel typ oferty przecinkiem',
                'add_or_remove_items' => 'Dodaj lub usuń typ oferty',
                'choose_from_most_used' => 'Wybierz spośród najczęścież używanych typ oferty',
                'menu_name' => 'Typ oferty',
            ),
            'show_ui' => true,
            'update_count_callback' => '_update_post_term_count',
            'query_var' => true,
            'rewrite' => array('slug' => 'typ_oferty' )
    ));
}

?>