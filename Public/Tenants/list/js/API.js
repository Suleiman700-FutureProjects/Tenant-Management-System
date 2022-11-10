import Requests from '../../../javascript/Requests/Requests.js';

class API {
    constructor() {}

    /**
     * Get tenants
     * @param _ids {Object} > Send to get specific tenants by their ids
     * @param _cols {Object} > Send to get specific tenants columns
     * @param _limit {Number} > Set 0 for unlimited
     * @returns {Object}
     */
    async get_tenants(_ids, _cols, _limit=0) {
        const data = {
            ids: _ids,
            cols: _cols,
            limit: _limit
        }
        const request = new Requests('./list/php/data.php', 'GET', data, 'get_tenants')
        const response = await request.send_request()
        return response
    }
}

export default new API()