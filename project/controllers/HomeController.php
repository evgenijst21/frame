<? 
namespace Project\Controllers;
use \Core\Controller;
use Project\Models\Home;
use Project\modules\Paginator;


class HomeController extends Controller
	{
		public function index() {
			$this->title = 'Главная';
			$home = new Home;

			$pagination = (new Paginator) -> paginator('articles', 2, 1);
			$descArticle = $home->getDescCount();
			$descDate = $home->getDescDate();
			$articles = $home->Article(); 
			$data = ['articl' => $pagination[1], 'articles' => $articles, 'descArticle' => $descArticle, 'descDate' => $descDate, 'title' => $this->title, 'page' => $pagination[0]];

			
			return $this->render('home', $data);
		}

		public function page($params){
			$this->title = 'Главная';
			$home = new Home;
			$pagination = (new Paginator) -> paginator('articles', 2, $params['page']);

			$descArticle = $home->getDescCount();
			$descDate = $home->getDescDate();
			$articles = $home->Article();
			$data = ['articl' => $pagination[1],'articles' => $articles, 'descArticle' => $descArticle, 'descDate' => $descDate, 'title' => $this->title, 'page' => $pagination[0]];

			
			return $this->render('home', $data);
		}
	}
