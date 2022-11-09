import Inpt_Username from './Inputs/Inpt_Username.js';
import Inpt_Password from './Inputs/Inpt_Password.js';
import Btn_Login from './Buttons/Btn_Login.js';
import Requests from '../../javascript/Requests/Requests.js';
import Alert from '../../javascript/Alert/Alert.js';

class Login {
    constructor() {}

    async do_login() {
        Btn_Login.enabled(false)
        Alert.set_class('primary')
        Alert.set_text('Please Wait...', true)

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
            if (response['state']) {
                if (response['login_state']['user_found'] && response['login_state']['valid_credentials']) {
                    setTimeout(() => {
                        Alert.set_class('success')
                        Alert.set_text('Logged successfully', false)
                        Btn_Login.enabled(true)
                        window.location.href = "../Dashboard/index.php";
                    }, 1000)
                }
                else {
                    setTimeout(() => {
                        Alert.set_class('danger')
                        Alert.set_text('Wrong username or password!', false)
                        Btn_Login.enabled(true)
                    }, 1000)
                    // Swal.fire({
                    //     title: 'Error!',
                    //     text: 'Wrong username or password',
                    //     icon: 'error',
                    //     confirmButtonText: 'Close'
                    // })
                }
            }

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
