
import API from './API.js';
import Tbl_Tenants from './Table/Tbl_Tenants.js';

// Get tenants from DB
const tenants_data = await API.get_tenants([], [], 0)
if (tenants_data['tenants'].length) {
    // Tbl_Tenants.clear_rows() // Clear table
    for (const tenant of tenants_data['tenants']) {
        Tbl_Tenants.add_row(tenant) // Add rows
    }
}
else {
    console.log('empty')
}
