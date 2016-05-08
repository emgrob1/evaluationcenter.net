<?php

class SignupController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {

    }
	
	
	
	public function registerAction()
	{

		$user = new Membership();

		// Store and check for errors
		
		$success = $user->save(
			$this->request->getPost(),
			array('firstname','lastname', 'email','comment')
		);

		if ($success) {
			echo "Thanks for registering!";
			
			echo '<br/><br/>Review Registed Users: '.$this->tag->linkTo('membership','<br>Review Users'); 
			
			
		} else {
			echo "Sorry, the following problems were generated: ";
			foreach ($user->getMessages() as $message) {
				echo $message->getMessage(), "<br/>";
				var_dump($user);
			}
		}

		$this->view->disable();
	}
}

