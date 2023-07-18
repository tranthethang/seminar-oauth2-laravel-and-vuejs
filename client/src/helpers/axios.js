import axios from "axios";

const axiosHelper = axios.create({
  baseURL: "",
  timeout: 3600,
  proxy: {
    "^/api": {
      target: "http://localhost:8000",
      ws: false,
      changeOrigin: true,
    },
  },
});

export { axiosHelper };
