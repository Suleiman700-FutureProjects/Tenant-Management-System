
import ButtonBuilder from '../../../../javascript/Buttons/ButtonBuilder.js';

const Callback = () => {
    // Go to list page
    location.href = './list.php';
}

export default new ButtonBuilder('cancel', 'add-section', Callback)
