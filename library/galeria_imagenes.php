<?php 
function catch_that_imagearray() {
    global $post, $posts;
    $first_img = '';
    ob_start();
    ob_end_clean();
    $matches=array();
    $strArrayEliminar = array('<img src=', '\'', '"');
//	$strContenidoPagina = file_get_contents($url);
	if(preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $strResultado, PREG_SET_ORDER)){
	  $r=0;
            foreach ($strResultado as $ExitResultado){
	    $matches[$r]= str_replace($strArrayEliminar,'',$ExitResultado[0])."\n";
            $r++;
	  }
	}
    
    
//    $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
    $output2 = preg_match_all('/<img.+alt=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches2);
//    $images = $matches;
    $imagesname = $matches2[1];
//    $first_img = $matches;
    $images2 = array();
    $images2['urls'] = $strResultado;
    $images2['titles'] = $imagesname;
// no image found display default image instead
    return $images2;
}
?>