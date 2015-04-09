<?php

function pk_banner($pk_category){
    if($pk_category != null){
//    debug($pk_category);
    $pkhtml = '<ul id="slider1">';
    query_posts(array('post_type'=>'banner','posts_per_page'=>6, 'pagina'=>$pk_category));
    while(have_posts()){ the_post();
    $pkhtml =$pkhtml.'<li style="background:url('.pk_thumbnail($post_id).') top center no-repeat; background-size:cover;"></li>';
    }
    $pkhtml = $pkhtml.'</ul>';
    return $pkhtml;    
    }
    
}