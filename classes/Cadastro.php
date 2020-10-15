<?php

/**
 * Class registration
 * handles the user registration
 */
class Cadastro
{
    /**
     * @var object $db_connection The database connection
     */
    private $db_connection = null;
    /**
     * @var array $errors Collection of error messages
     */
    public $errors = array();
    /**
     * @var array $messages Collection of success / neutral messages
     */
    public $messages = array();

    /**
     * the function "__construct()" automatically starts whenever an object of this class is created,
     * you know, when you do "$registration = new Registration();"
     */
    public function __construct()
    {
        if (isset($_POST["cadastro"])) {
            $this->cadastroUsuario();
        }
    }

    /**
     * handles the entire registration process. checks all error possibilities
     * and creates a new user in the database if everything is fine
     */
    private function cadastroUsuario()
    {
        if (empty($_POST['usuario'])) {
            $this->errors[] = "Não esqueça de preencher o campo de usuário";
        } elseif (empty($_POST['senha']) || empty($_POST['senhaconfirm'])) {
            $this->errors[] = "Você precisa de uma senha";
        } elseif ($_POST['senha'] !== $_POST['senhaconfirm']) {
            $this->errors[] = "As senhas não coincidem";
        } elseif (strlen($_POST['senha']) < 6) {
            $this->errors[] = "A senha deve ter ao menos 6 caracteres";
        } elseif (strlen($_POST['usuario']) > 64 || strlen($_POST['usuario']) < 2) {
            $this->errors[] = "O nome de usuário deve ter entre 2 a 64 caracteres";
        } //elseif (!preg_match('/^[a-z\d]{2,64}$/i', $_POST['usuario'])) {
           // $this->errors[] = "O nome de usuário deve ter apenas letras e números";
        //}
         elseif (empty($_POST['email'])) {
            $this->errors[] = "Não esqueça de preencher o e-mail";
        } elseif (strlen($_POST['email']) > 64) {
            $this->errors[] = "O e-mail não pode ter mais que 64 caracteres";
        }// elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
          //  $this->errors[] = "O seu e-mail não é válido";
        //} 
        elseif (!empty($_POST['usuario'])
            && strlen($_POST['usuario']) <= 64
            && strlen($_POST['usuario']) >= 2
            //&& preg_match('/^[a-z\d]{2,64}$/i', $_POST['usuario'])
            && !empty($_POST['email'])
            && strlen($_POST['email']) <= 64
            //&& filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)
            && !empty($_POST['senha'])
            && !empty($_POST['senhaconfirm'])
            && ($_POST['senha'] === $_POST['senhaconfirm'])
        ) {
            // create a database connection
            $this->db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

            // change character set to utf8 and check it
            if (!$this->db_connection->set_charset("utf8")) {
                $this->errors[] = $this->db_connection->error;
            }

            // if no connection errors (= working database connection)
            if (!$this->db_connection->connect_errno) {

                // escaping, additionally removing everything that could be (html/javascript-) code
                $usuario = $this->db_connection->real_escape_string(strip_tags($_POST['usuario'], ENT_QUOTES));
                $email = $this->db_connection->real_escape_string(strip_tags($_POST['email'], ENT_QUOTES));
                $nome = $_POST['nome'];

                $user_password = $_POST['senha'];

                // crypt the user's password with PHP 5.5's password_hash() function, results in a 60 character
                // hash string. the PASSWORD_DEFAULT constant is defined by the PHP 5.5, or if you are using
                // PHP 5.3/5.4, by the password hashing compatibility library
                $senha_hash = password_hash($user_password, PASSWORD_DEFAULT);

                // check if user or email address already exists
                $sql = "SELECT * FROM alunos WHERE usuario = '" . $usuario . "' OR email = '" . $email . "';";
                $query_check_usuario = $this->db_connection->query($sql);

                if ($query_check_usuario->num_rows == 1) {
                    $this->errors[] = "Já existe um registro com esse usuário/e-mail.";
                } else {
                    // write new user's data into database
                    $sql = "INSERT INTO alunos (usuario, senha_hash, email, nome)
                            VALUES('" . $usuario . "', '" . $senha_hash . "', '" . $email . "', '". $nome ."');";
                    $query_new_user_insert = $this->db_connection->query($sql);

                    // if user has been added successfully
                    if ($query_new_user_insert) {
                        $this->messages[] = "A sua conta foi criada com sucesso. Você agora pode acessar os cursos!";
                    } else {
                        $this->errors[] = "O seu cadastro falhou... Por favor, tente novamente mais tarde.";
                    }
                }
            } else {
                $this->errors[] = "Sorry, no database connection.";
            }
        } else {
            $this->errors[] = "An unknown error occurred.";
        }
    }
}
