<?php

class IndexController extends Controller
{
	
	public function Index()
	{
		// Set layout stuff
		$data['htmlTitle'] = 'Brickhouse MVC';
		$this->layout(array('view'=>'master','data'=>$data));
		unset($data);
		
		// Set view stuff
		$data['test'] = 'Sonny Buns!';
		$this->view(array('container'=>'main','view'=>'index','data' => $data));
	}
	
}