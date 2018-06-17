<?php 
$this->load->view("admin/includes/header") ;
$this->load->view("admin/includes/adminMenu") ;
			if(isset($content)){
				print $content;
			}
$this->load->view("admin/includes/footer_includes");
 ?>

