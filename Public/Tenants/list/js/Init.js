
import API from './API.js';
import Loading from '../../../javascript/Loading/Loading.js';
import Tbl_Tenants from './Table/Tbl_Tenants.js';



async function init() {
// Get tenants from DB
    const tenants_data = await API.get_tenants([], [], 0)
    if (tenants_data['tenants'].length) {
        // Clear table
        Tbl_Tenants.clear_rows()

        for (const tenant of tenants_data['tenants']) {
            Tbl_Tenants.add_row(tenant) // Add rows
        }
    } else {
        console.log('empty')
    }
}

const loading = new Loading('Loading', 'Please Wait...')
loading.show()

await init()

loading.close()
