<?php

/**
 * The PageController is called when another Controller is not found and the site is set up to have database-driven dynamic pages.
 * 
 *
 * @package XDEV MVC
 * @author Charles Mastin
 * @author Joshua Rudd
 **/

class PageController extends Controller
{
	
	public function Index()
	{
		$this->layout(array('data'=>array('htmlTitle'=>'Genero Page')));
		$this->view(array('data'=>array('title'=>'fluffy the cat is cranky')));
	}
	
	public function Landing()
	{
		$this->layout(array('data'=>array('htmlTitle'=>'Landing Page')));
		$this->view(array('data'=>array('title'=>'Cornerstone','subtitle'=>'Worship Band','body'=>'Please contact so and so to schedule an audition.'),'container'=>'main'));
		$this->view(array('container'=>'sidebar','view'=>'/_modules/sample','data'=>array('testA'=>array('1','2','4'))));
	}
	
}
















