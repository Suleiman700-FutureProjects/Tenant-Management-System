
import ButtonBuilder from '../../../../javascript/Buttons/ButtonBuilder.js';
import AddTenant from '../AddTenant.js'

const Callback = () => {
    AddTenant.add()
}

export default new ButtonBuilder('save', 'add-section', Callback)
