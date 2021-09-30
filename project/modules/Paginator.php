<? 
namespace Project\modules;
use \Core\Model;

class Paginator extends Model
{   
    
    function getByArticle($where, $math) {
        return $this->findMany("SELECT * FROM articles INNER JOIN categoryes ON articles.category_id = categoryes.id ORDER BY date DESC LIMIT $where,$math");
    }

    function countElement($table) {
        return $this->count("SELECT COUNT(*) as count FROM $table");
    }

    function paginator($table, int $math, int $params = 1) {
        $howMathPage = ceil($this->countElement($table) / $math);
        $where = ($params - 1) * $math;
        $article = $this->getByArticle($where, $math);

        return [$howMathPage, $article];
    }
}









?>