import Alert from '../../../javascript/Alert/Alert.js';
import Requests from '../../../javascript/Requests/Requests.js';

import Inpt_Firstname from './Fields/Inpt_Firstname.js';
import Inpt_Lastname from './Fields/Inpt_Lastname.js';
import Inpt_Phone from './Fields/Inpt_Phone.js';
import Inpt_Email from './Fields/Inpt_Email.js';
import Inpt_IDCard from './Fields/Inpt_IDCard.js';
import Inpt_RentalDate from './Fields/Inpt_RentalDate.js';
import Inpt_RentalTime from './Fields/Inpt_RentalTime.js';
import Inpt_Note from './Fields/Inpt_Note.js';

class AddTenant {
    constructor() {}

    async add() {
        // Validate fields
        const fields = [Inpt_Firstname, Inpt_Lastname, Inpt_Phone, Inpt_Email, Inpt_IDCard, Inpt_RentalDate, Inpt_RentalTime, Inpt_Note]

        let valid = true
        for (const field of fields) {
            const field_valid = field.validate()['valid']
            if (!field_valid) {
                field.mark_error(true)
                valid = false
            }
        }
        if (!valid) return

        Alert.set_class('primary')
        Alert.set_text('Please Wait...', true)

        const data = {
            firstname: Inpt_Firstname.get_value(),
            lastname: Inpt_Lastname.get_value(),
            phone: Inpt_Phone.get_value(),
            email: Inpt_Email.get_value(),
            id_card: Inpt_IDCard.get_value(),
            rental_date: Inpt_RentalDate.get_value(),
            rental_time: Inpt_RentalTime.get_value(),
            note: Inpt_Note.get_value(),
        }

        const request = new Requests('./add/php/post.php', 'POST', data, 'add_tenant')
        const response = await request.send_request()
        console.log(response)

        console.log(data)
    }
}

export default new AddTenant()