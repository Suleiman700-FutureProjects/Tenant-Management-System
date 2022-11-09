<?php

ob_start();
session_start();

class Session
{
    private $LOGIN_SESSION_NAME = "TENANT_SESSION_";
    private $SESSION_IS_LOGGED = "TENANT_SESSION_isLogged";
    private $SESSION_USER_ID = "TENANT_SESSION_userID";
    private $SESSION_USERNAME = "TENANT_SESSION_username";

    /**
     * Set logged state
     * @param bool $_state
     * @return void
     */
    public function set_logged(Bool $_state) {
        $_SESSION[$this->SESSION_IS_LOGGED] = $_state;
    }

    /**
     * Get logged state
     * @return bool
     */
    public function get_logged(): Bool {
        if (isset($_SESSION[$this->SESSION_IS_LOGGED]) && $_SESSION[$this->SESSION_IS_LOGGED]) return true;
        else return false;
    }

    /**
     * Set user ID session data
     * @param Int $_user_id
     * @return void
     */
    public function set_user_id(Int $_user_id) {
        $_SESSION[$this->SESSION_USER_ID] = $_user_id;
    }

    /**
     * Set username session data
     * @param String $_username
     * @return void
     */
    public function set_username(String $_username) {
        $_SESSION[$this->SESSION_USERNAME] = $_username;
    }

    /**
     * Destroy all logged sessions
     * @return void
     */
    public function destroy_logged_session() {
        unset($_SESSION[$this->SESSION_IS_LOGGED]);
        unset($_SESSION[$this->SESSION_USER_ID]);
        unset($_SESSION[$this->SESSION_USERNAME]);
    }
}
