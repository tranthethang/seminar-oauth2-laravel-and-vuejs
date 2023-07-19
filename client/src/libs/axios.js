import axios from "axios";

const $axios = axios.create({
    baseURL: "",
    timeout: 3600,
    proxy: {
        "^/api": {
            target: "http://localhost:8008",
            ws: false,
            changeOrigin: true,
        },
    },
});

export default $axios;
