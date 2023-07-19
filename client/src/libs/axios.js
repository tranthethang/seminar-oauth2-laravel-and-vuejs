import axios from "axios";

const $axios = axios.create({
    timeout: 3600,
    withCredentials: true,
});

export default $axios;
