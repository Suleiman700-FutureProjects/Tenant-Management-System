
export default class Loading {

    title = 'Loading'
    html = ''

    constructor(_title, _html) {
        this.title = _title
        this.html = _html
    }

    /**
     * Set title
     * @param _title {String}
     */
    set title(_title) {
        this.title = _title
    }

    /**
     * Set html
     * @param _html {String}
     */
    set html(_html) {
        this.html = _html
    }

    /**
     * Show loading
     */
    show() {
        Swal.fire({
            title: this.title,
            html: this.html,
            timerProgressBar: true,
            didOpen: () => {
                Swal.showLoading()
            }
        })
    }

    /**
     * Close modal
     */
    close() {
        Swal.close()
    }
}