import {defineStore} from 'pinia'

export const useCommonStore = defineStore({
    id: 'common',
    state: () => ({
        user: null,
        loading: false,
    }),
    getters: {
        getProfile: (state) => {
            return state?.user;
        },
    },
    actions: {
        async setProfile(payload) {
            this.user = payload;
        },
    }
})