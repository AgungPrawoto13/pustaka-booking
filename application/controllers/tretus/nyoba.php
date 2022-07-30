<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use RestServer\RestController;

class nyoba extends RestController{

	function __construct()
	{
		parent::__construct();
	}

	public function users_get()
	{
		$users = array(array('id'=>0, 'name'=>'asu', 'email'=>'asu@gmail.com'),
					   array('id'=>0, 'name'=>'anjim', 'email'=>'anjim@gmial.com'));

		$id = $this->get('id');

		if($id === null)
		{
			if($users)
			{
				$this->response($users,200);
			}else{
				$this->response(array('status'=>false,
									  'message'=>'No users were found'),404);
			}
		} else{
			if(array_key_exists($id, $users))
			{
				$this->response($users[$id],200);
			}else{
				$this->response(array('status'=>false,
									  'message'=>'No such user found'),404);
			}
		}
	}
}