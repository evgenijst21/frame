<?
namespace Project\Controllers;
use \Core\Controller;
use Project\Models\Blog;
use Project\Models\Home;


class BlogController extends Controller
	{
		public function single($params) {
			$model = new Blog;

			$home = new Home;

			$descArticle = $home->getDescCount();
			$descDate = $home->getDescDate();
			$articles = $home->Article(); 
			$sin = $model->getByArticle($params['id']);
			
			if (!isset($_SESSION[$sin['title']])) {
				$_SESSION[$sin['title']] = 1;
			} else {
				$_SESSION[$sin['title']] = $_SESSION[$sin['title']] + 1;
			}
            $model->entryInDB($sin['id'], $_SESSION[$sin['title']]);


			$this->title = $sin['title'];
			$data = ['articles' => $articles, 'descArticle' => $descArticle, 'descDate' => $descDate, 'sin' => $sin, 'title' => $this->title, 'counter' => $_SESSION[$sin['title']]];

			
			return $this->render('blog_single', $data);
		}
	}