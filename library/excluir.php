<?php

function exclude($cat) {
//    $id = get_cat_ID('conocenos');
    $id = get_term_by('name', $cat, 'tipo');
//    debug($id->term_id);
    $query_posts = query_posts(array('post_type' => 'galeria', 'posts_per_page' => 9,
        'tax_query' => array(
            'relation' => 'AND',
            array(
                'taxonomy' => 'tipo',
                'field' => 'id',
                'terms' => array($id->term_id),
                'operator' => 'NOT IN'
            )
        )
    ));
    return $query_posts;
}

function tipo_rand() {
    $idcat = get_term_by('name', 'portafolio', 'tipo');
    $counter = 0;
    $max = 13;
    $terms = get_terms('tipo', array('order' => 'rand', 'parent' => $idcat->term_id));
    shuffle($terms);
    foreach ($terms as $term) {
        $counter++;
        if ($counter <= $max) {
            return $term;
//	  	echo '<p><a href="' . get_category_link( $term->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $term->name ) . '" ' . '>' . $term->name.'</a></p> ';
//                    debug($term->slug,false);
        }
    }
}

function exclude_tipo($slug){
    $idcat = get_term_by('name', 'portafolio', 'tipo');
    $counter = 0;
    $max = 13;
    $terms = get_terms('tipo', array('order' => 'rand', 'parent' => $idcat->term_id));
    shuffle($terms);
    foreach ($terms as $term) {
        $counter++;
        if ($counter <= $max) {
            if($slug != $term->slug){
            return $term;
            }
//	  	echo '<p><a href="' . get_category_link( $term->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $term->name ) . '" ' . '>' . $term->name.'</a></p> ';
//                    debug($term->slug,false);
        }
    }
}
