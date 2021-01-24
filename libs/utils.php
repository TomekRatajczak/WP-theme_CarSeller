<?php

	function printPostCategories($post_id, array $categories = array()){
        $terms_list = array();
        foreach($categories as $cname){
            $tmp = get_the_terms($post_id, $cname);
            if(is_array($tmp)){
                $terms_list = array_merge($terms_list, $tmp);
            }
        }
        
        if($terms_list){
            foreach($terms_list as $term){
                echo '<span style="
                display: inline-block;
                        margin-right: 6px;
                        margin-bottom: 6px;
                        padding: 5px;
                        border: 1px solid #2b2d42;
                        background-color: #2b2d42;
                        color: #edf2f4;
                ">'.$term->name.' </span>';
            }
        }
    }

    function printCarelementsCategories($post_id){
        printPostCategories($post_id, array('elements'));
    }    

	function the_excerpt_max_charlength($charlength) {
		echo cutText(get_the_excerpt(), $charlength);
	}


    function cutText($text, $maxLength){
        
        $maxLength++;

        $return = '';
        if (mb_strlen($text) > $maxLength) {
            $subex = mb_substr($text, 0, $maxLength - 5);
            $exwords = explode(' ', $subex);
            $excut = - ( mb_strlen($exwords[count($exwords) - 1]) );
            if ($excut < 0) {
                $return = mb_substr($subex, 0, $excut);
            } else {
                $return = $subex;
            }
            $return .= '[...]';
        } else {
            $return = $text;
        }
        
        return $return;
    }


function fetchRecentComments($limit = 3) {

	 global $wpdb;
        //dla bezpieczeństwa
		$limit = (int)$limit;
		
        $res = $wpdb->get_results("
            SELECT C.*, P.post_title
                FROM {$wpdb->comments} C
                    LEFT JOIN {$wpdb->posts} P ON C.comment_post_ID = P.ID
                WHERE comment_approved = 1
                ORDER BY comment_date_gmt DESC
                LIMIT {$limit}
        ");
                
        return $res;

}

function getQueryParams(){
        global $query_string;
        $parts = explode('&', $query_string);
        
        $return = array();
        foreach($parts as $part){
            $tmp = explode('=', $part);
            $return[$tmp[0]] = trim(urldecode($tmp[1]));
        }
        
        return $return;
    }  

function getQuerySingleParam($name){
        $qparams = getQueryParams();
        
        if(isset($qparams[$name])){
            return $qparams[$name];
        }
        
        return NULL;
    }

function getCurrentPageUrl(){
        $pageURL = 'http';
        
	if(isset($_SERVER["HTTPS"])){
            if($_SERVER["HTTPS"] == "on") {
                $pageURL .= "s";
            }
	}
        
	$pageURL .= "://";
        
	if($_SERVER["SERVER_PORT"] != "80"){
            $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
	}else{
            $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
	}
        
	return $pageURL;
    }

?>