import Inpt_Username from './Inputs/Inpt_Username.js';
import Inpt_Password from './Inputs/Inpt_Password.js';

class Login {
    constructor() {}

    do_login() {
        const username = Inpt_Username.get_value() // Get username
        const password = Inpt_Password.get_value() // Get password

        const is_valid = this.validate(username, password)

        
    }

    /**
     * Validate inputs before sending login request
     * @param _username {String}
     * @param _password {String}
     * @returns {boolean}
     */
    validate(_username, _password) {
        let is_valid = true

        // Validate username
        if (!_username.trim().length) {
            Inpt_Username.mark_error(true)
            is_valid = false
        }
        else {
            Inpt_Username.mark_error(false)
        }

        // Validate password
        if (!_password.trim().length) {
            Inpt_Password.mark_error(true)
            is_valid = false
        }
        else {
            Inpt_Password.mark_error(false)
        }

        return is_valid
    }
}

export default new Login()