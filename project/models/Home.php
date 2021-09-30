<?
	namespace Project\Models;
	use \Core\Model;
	
	class Home extends Model
	{
		function getById($id) {
			return $this->findOne("SELECT * FROM articles WHERE id=$id");
		}
		
		function Article() {
			return $this->findMany("SELECT * FROM articles INNER JOIN categoryes ON articles.category_id = categoryes.id");
		}

		function getDescCount() {
			return $this->findMany("SELECT * FROM articles INNER JOIN categoryes ON articles.category_id = categoryes.id ORDER BY counter DESC LIMIT 3");
		}

		function getDescDate() {
			return $this->findMany("SELECT * FROM articles INNER JOIN categoryes ON articles.category_id = categoryes.id ORDER BY date DESC LIMIT 2");
		}

		

	}
