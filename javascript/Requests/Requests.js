
export default class Requests {

    constructor(_path, _type, _data, _model) {
        this.path = _path
        this.type = _type
        this.data = _data
        this.model = _model
    }

    async send_request() {
        let res

        // Send request
        await $.ajax(this.path, {
            type: this.type,  // http method
            data: {
                data: this.data,
                model: this.model
            },
            success: function (data, status, xhr) {
                res = data
            },
            error: function (jqXhr, textStatus, errorMessage) {
                $('p').append('Error' + errorMessage);
            }
        });

        return res
    }

}