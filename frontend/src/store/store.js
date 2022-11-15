import { createStore } from 'vuex'
import router from '@/router';

const store = createStore({
    state: {
        user: 'asdas',
        ListPerson: ''
    },
    actions: {
        async loginUser({ commit }, usuario) {
            try {
                const result = await axios.post("/api/login", {
                    email: usuario.email,
                    contrasena: usuario.contrasena,
                });
                if (result.data.mesage === "YES") {
                    const userAuth = result
                    localStorage.setItem('userAuth', JSON.stringify(userAuth))
                    router.push('/')
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'Inicio Con exito',
                        showConfirmButton: false,
                        timer: 1000
                    })
                }
            } catch (error) {
                console.log(error);
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: error,
                    footer: 'Credenciales Incorrecta'
                })
            }
        },
        async getPerson({ commit }) {

            try {
                const result = await axios.get("/api/list-person")
                const DataPerson = result.data.data
                commit('setListPerson', DataPerson)
                localStorage.setItem('ListsPerson', JSON.stringify(DataPerson))

            } catch (error) {
                console.log("object", error);
            }
        },
        async filterDate({ commit }, filter) {
            console.log(filter);
            try {
                const result = await axios.post("/api/list-person-date", {
                    filter: filter
                })
                const DataPerson = result.data.data
                commit('setListPerson', DataPerson)
                localStorage.setItem('ListsPerson', JSON.stringify(DataPerson))

            } catch (error) {
                console.log("object", error);
            }
        }

    },
    mutations: {
        setListPerson(state, payload) {
            state.ListPerson = payload
        },
    }
})

export default store

