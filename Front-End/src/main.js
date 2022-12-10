import "bootstrap/dist/css/bootstrap.min.css"
import { createApp } from "vue";
import App from "./App.vue";
import store from "./store";
import router from "./router";
import "./assets/css/nucleo-icons.css";
import "./assets/css/nucleo-svg.css";
import MaterialDashboard from "./material-dashboard";

var is_admin = null;
var is_superadmin = null;
var role = null;
if (localStorage.profile){
    // alert('as wpeee d')
    const test = JSON.parse(localStorage.profile)
    is_admin = test.is_admin;
    is_superadmin = test.is_superadmin;
    role = test.role;
    // alert(is_superadmin, 'asd')
}

const appInstance = createApp(App);



appInstance.provide("is_admin", is_admin)
appInstance.provide("is_superadmin", is_superadmin)
appInstance.provide("role", role)

appInstance.use(store);
appInstance.use(router);
appInstance.use(MaterialDashboard);
appInstance.mount("#app");
