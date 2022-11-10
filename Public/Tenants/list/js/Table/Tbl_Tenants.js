
class Tbl_Tenants {
    constructor() {
        this.id = 'table_tenants'
    }

    /**
     * Clear table rows
     */
    clear_rows() {
        $(`#${this.id} tbody tr`).remove();
    }

    /**
     * Count table rows
     * @returns {number}
     */
    count_rows() {
        return $(`#${this.id} tbody tr`).length;
    }

    /**
     * Add row to table
     * @param _tenant_data {Object}
     */
    add_row(_tenant_data) {
        console.log(_tenant_data)

        const id = this.count_rows()+1
        const name = `${_tenant_data['firstname']} ${_tenant_data['lastname']}`
        const phone = _tenant_data['phone']??'-'
        const email = _tenant_data['email']??'-'
        const action_btn = $('i').attr({'class': 'cil-pen'}).css({'cursor': 'pointer'}).click(() => {
            this.handle_edit_click(id)
        })

        $(`#${this.id}`).find('tbody')
            .append($('<tr>')
                .append(
                    $('<th>').text(id),
                    $('<td>').text(name),
                    $('<td>').text(phone),
                    $('<td>').text(email),
                    $('<td>').append(action_btn),
                )
            );
    }

    /**
     * Handle edit icon click
     * @param _tenant_id {number}
     */
    handle_edit_click(_tenant_id) {
        console.log(_tenant_id)
    }
}

export default new Tbl_Tenants()