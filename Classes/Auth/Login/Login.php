<?php

require_once '../../../Config/DB.php';
require_once '../../../Classes/Session/Session.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);

class Login
{
    private $username;
    private $password;

    public function __construct() {

    }

    /**
     * Set username
     * @param String $_username
     * @return void
     */
    public function set_username(String $_username) {
        $this->username = $_username;
    }

    /**
     * Set password
     * @param String $_password
     * @return void
     */
    public function set_password(String $_password) {
        $this->password = $_password;
    }

    /**
     * Do login
     * @return array
     */
    public function do_login(): Array {
        global $conn;

        $res = array(
            'user_found' => false,
            'valid_credentials' => false,
        );

        $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
        //echo $conn->error;
        $stmt->bind_param("s", $this->username);
        $stmt->execute();
        $result = $stmt->get_result();


        // User found
        if ($result->num_rows) {
            $res['user_found'] = true;

            // fetch data
            $user_data = $result->fetch_assoc();

            // Verify hashed password
            $db_hashed_password = $user_data['password'];
            if(password_verify($this->password, $db_hashed_password)) {
                $res['valid_credentials'] = true;

                $Session = new Session();
                $Session->set_logged(true);
                $Session->set_username($user_data['username']);
                $Session->set_user_id($user_data['id']);
            }
        }

        return $res;
    }
}
