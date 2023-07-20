import axios from "axios";

import LocalStorageService from "@/services/LocalStorageService"
const localStorageService = LocalStorageService.getService()

const $axios = axios.create({
    timeout: 3600,
    withCredentials: true,
});

$axios.interceptors.request.use(config => {
        const token = localStorageService.getAccessToken();
        if (token) {
            config.headers['Authorization'] = 'Bearer ' + token;
        }
        return config;
    },
    error => {
        console.log(error)
        Promise.reject(error)
    }
);

export default $axios;
