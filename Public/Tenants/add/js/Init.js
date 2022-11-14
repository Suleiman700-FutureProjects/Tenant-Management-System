// Initialize buttons
import Btn_Cancel from './Buttons/Btn_Cancel.js';
import Btn_Save from './Buttons/Btn_Save.js';
import ButtonHandler from '../../../javascript/Buttons/ButtonHandler.js';

const buttons = [Btn_Cancel, Btn_Save]
ButtonHandler.declareClicksEvents(buttons)

// Initialize alert
import Alert from '../../../javascript/Alert/Alert.js';
Alert.set_id('alert-msg')

// Initialize fields
import Inpt_Firstname from './Fields/Inpt_Firstname.js';
import Inpt_Lastname from './Fields/Inpt_Lastname.js';
import Inpt_Phone from './Fields/Inpt_Phone.js';
import Inpt_Email from './Fields/Inpt_Email.js';
import Inpt_IDCard from './Fields/Inpt_IDCard.js';
import Inpt_RentalDate from './Fields/Inpt_RentalDate.js';
import Inpt_RentalTime from './Fields/Inpt_RentalTime.js';
import Inpt_Note from './Fields/Inpt_Note.js';
import InputHandler from '../../../javascript/Inputs/InputHandler.js';
const inputs = [Inpt_Firstname, Inpt_Lastname, Inpt_Phone, Inpt_Email, Inpt_IDCard, Inpt_RentalDate, Inpt_RentalTime, Inpt_Note]
InputHandler.declareInputsEvents(inputs)