import Inpt_Username from './Inputs/Inpt_Username.js';
import Inpt_Password from './Inputs/Inpt_Password.js';
import Requests from '/javascript/Requests/Requests.js';

class Login {
    constructor() {}

    async do_login() {
        const valid_username = Inpt_Username.validate()['valid']
        const valid_password = Inpt_Password.validate()['valid']

        Inpt_Username.mark_error(!valid_username)
        Inpt_Password.mark_error(!valid_password)

        if (valid_username && valid_password) {
            const username = Inpt_Username.get_value() // Get username
            const password = Inpt_Password.get_value() // Get password

            const request_data = {
                username,
                password
            }
            const request = new Requests('./php/post.php', 'POST', request_data, 'do_login')
            const response = await request.send_request()
            console.log(response)

        }
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