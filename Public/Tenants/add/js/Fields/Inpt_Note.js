import InputBuilder from '../../../../javascript/Inputs/InputBuilder.js'

const validation = {
    required: true,
    min_len: {
        active: false,
        value: 1
    },
    max_len: {
        active: false,
        value: 5
    },
    type: 'string',
}

export default new InputBuilder('note', 'add-section', {})
