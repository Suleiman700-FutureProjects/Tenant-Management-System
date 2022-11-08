
import ButtonBuilder from '../../../javascript/Buttons/ButtonBuilder.js';
import Login from '../Login.js'

const Callback = () => {
    Login.do_login()
}

export default new ButtonBuilder('login', 'login_div', Callback)
