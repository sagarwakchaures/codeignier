<?php
class Checkurl {

   
	
	function Check(){		
		$CI = &get_instance();
		$route = $CI->router->fetch_method();
		$arr = ['login','register'];		  
		if($CI->session->userdata('is_logged_in')){
		  $session_userdata = $CI->session->userdata('is_logged_in');		 
		  if(in_array($route,$arr)){ 	
			 redirect('/news');
		  }		
		}else{		
			if(!in_array($route,$arr)){ 	
			 redirect(site_url('user/login'));
		    }				 
		}		
    }
    
   
}
?>