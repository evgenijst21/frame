<?
	namespace Project\Models;
	use \Core\Model;
	
	class Login extends Model
	{
		function createLogin() {
			return $this->findMany("SELECT * FROM users WHERE id > 0");
		}


	}