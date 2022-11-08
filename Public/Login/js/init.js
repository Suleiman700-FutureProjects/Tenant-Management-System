// Initialize buttons
import Btn_Login from './Buttons/Btn_Login.js';
import ButtonHandler from '../../javascript/Buttons/ButtonHandler.js';

const buttons = [Btn_Login]
ButtonHandler.declareClicksEvents(buttons)

// Initialize inputs
import Inpt_Username from './Inputs/Inpt_Username.js';
import Inpt_Password from './Inputs/Inpt_Password.js';
import InputHandler from '../../javascript/Inputs/InputHandler.js';
const inputs = [Inpt_Username, Inpt_Password]
InputHandler.declareInputsEvents(inputs)
