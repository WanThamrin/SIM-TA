<template>
  <aside
    id="sidenav-main"
    class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 ms-3"
    :class="`${
     isAbsolute ? 'me-3 rotate-caret fixed-end' : 'fixed-start ms-3'
    } ${sidebarType}`"
  >
    <div class="sidenav-header">
      <!-- <i
        class="top-0 p-3 cursor-pointer fas fa-times text-secondary opacity-5 position-absolute end-0 d-none d-xl-none"
        aria-hidden="true"
        id="iconSidenav"
      ></i> -->
      <a href="/">
        <img
          :src="
            sidebarType === 'bg-white' ||
            (sidebarType === 'bg-transparent' && !isDarkMode)
              ? logoDark
              : logo
          "
          class="navbar-logo-img h-100 m-4 mx-auto d-block "
          alt="main_logo"
        />
        <!-- <span class="ms-2 font-weight-bold text-white"
          >SIM-TA</span
        > -->
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2" />
    <sidenav-list />
  </aside>
</template>
<script>
import SidenavList from "./SidenavList.vue";
import logo from "@/assets/img/SIM-TA.png";
import logoDark from "@/assets/img/SIM-TA.png";
import { mapState } from "vuex";

export default {
  name: "index",
  components: {
    SidenavList,
  },
  data() {
    return {
      logo,
      logoDark,
    };
  },
  computed: {
    ...mapState([ "sidebarType", "isDarkMode"]),
  },
};
</script>
