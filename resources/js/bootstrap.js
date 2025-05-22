import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

//axios.defaults.withCredentials = false;
//axios.defaults.withXSRFToken = false;

//axios.get('/sanctum/csrf-cookie').then(response => {
    // Login...
//});