
export default class InputBuilder {
    constructor(_id, _parent_id) {
        this.parent_id = _parent_id
        this.id = _id
    }

    /**
     * Enable or disable the select
     * @param _option {Boolean}
     */
    enabled(_option) {
        document.querySelector(`#${this.parent_id} input#${this.id}`).disabled = !_option
    }

    on_input() {
        document.querySelector(`#${this.parent_id} input#${this.id}`).addEventListener('change', () => {
            console.log('on input')
        })
    }

    clear() {
        $(`#${this.parent_id} input#${this.id}`).val('').trigger('change')
    }

    /**
     * Get input value
     * @returns {String}
     */
    get_value() {
        const value = $(`#${this.parent_id} input#${this.id}`).val()
        return value
    }

    /**
     * Mark input with error
     * @param _option {Boolean}
     */
    mark_error(_option) {
        if (_option) {
            document.querySelector(`#${this.parent_id} input#${this.id}`).style = 'border: 1px solid red'
        }
        else {
            document.querySelector(`#${this.parent_id} input#${this.id}`).style = ''
        }
    }

}