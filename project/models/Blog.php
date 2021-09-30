<?
	namespace Project\Models;
	use \Core\Model;
	
	class Blog extends Model
	{
		function getById($id) {
			return $this->findOne("SELECT * FROM articles WHERE id=$id");
		}

		function getByArticle($id) {
			return $this->findOne("SELECT * FROM articles INNER JOIN categoryes ON articles.category_id = categoryes.id WHERE articles.id = $id");
		}

		function entryInDB($id, $counter) {
			return $this->insert("UPDATE articles SET counter = $counter WHERE id = $id");
		}
		
	}