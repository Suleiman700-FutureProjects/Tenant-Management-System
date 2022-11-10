
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
        const email = _tenant_data['email']

        $(`#${this.id}`).find('tbody')
            .append($('<tr>')
                .append(
                    $('<th>').text(id),
                    $('<td>').text(name),
                    $('<td>').text(phone),
                    $('<td>').text(email),
                    $('<td>').text('ACTION SHOULD BE ADDED HERE'),
                )
            );
    }
}

export default new Tbl_Tenants()