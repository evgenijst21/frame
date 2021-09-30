<? 
namespace Project\Controllers;
use \Core\Controller;
use Project\Models\Register;



class RegisterController extends Controller
{
    public function create() {
        $this->title = 'Регистрация';
        $reg = new Register;
        $text = NULL;

        if (isset($_POST['submit'])) {

            $exam = $reg->examination($_POST['email']);
            

            if (isset($exam['id'])){
                $text = 'Данный email уже зарегестрирован';
                $data = ['text' => $text];
            } 
            else 
            {
                $pass = password_hash($_POST['password'], PASSWORD_DEFAULT);
                $reg->createUser($_POST['name'], $_POST['surname'], $pass, $_POST['email']);
                $_SESSION['email'] = $_POST['email'];
                $data = ['text' => $text];
                header('Location: http://frame/');
            }
        }
        $data = ['text' => $text];


        return $this->render('register', $data);





    }		
}