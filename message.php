<?php
require 'app\interfaces\MessageInterface.php';

use App\Interfaces\MessageInterface as MessageInterface;

class Message implements MessageInterface {

	protected $message;

	public function __construct($message = '') {
		$this->_message = $message;
	}
	
	public function getMessage() {
		return $this->_message;
	}
}


class WelcomeMessage 
{
	private $greetings;
	public function __construct(Message $greetings) {
		$this->greetings = $greetings;
	}
	public function getGreetings() {		
		return $this->greetings->getMessage();
	}
}
$message = new Message('Welcome Buddy!');
$welcomeGreetings = new WelcomeMessage($message);
echo $welcomeGreetings->getGreetings();