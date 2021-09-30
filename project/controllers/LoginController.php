<? 
namespace Project\Controllers;
use \Core\Controller;
use Project\Models\Login;



class LoginController extends Controller
{
    public function create() {
        $this->title = 'Вход';
        $reg = new Login;

        if (isset($_POST['submit'])) {
            foreach($reg->createLogin() as $reg) {
                if($reg['email'] == $_POST['email'] || $reg['password'] ==  password_hash($_POST['password'], PASSWORD_DEFAULT)){
                    $_SESSION['email'] = $_POST['email'];
                    break;
                }
            }
        }
        $data = [];


        return $this->render('login', $data);
    }		

    public function destroy() {
        unset($_SESSION['email']);
        header('Location: http://frame/');
    }
}