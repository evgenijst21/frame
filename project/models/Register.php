<?
	namespace Project\Models;
	use \Core\Model;
	
	class Register extends Model
	{
		function createUser($name, $surname, $password, $email) {
			return $this->insert("INSERT INTO users SET name='$name', surname='$surname', password='$password', email='$email'");
		}

		function examination($email) {
			return $this->findOne("SELECT id FROM users WHERE email='$email'");
		}


	}