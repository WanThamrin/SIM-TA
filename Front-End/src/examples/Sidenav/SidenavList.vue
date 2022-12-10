<template>
  <div class="w-auto h-auto collapse navbar-collapse max-height-vh-100 h-100" id="sidenav-collapse-main">
    <ul class="navbar-nav">
      <li class="mt-3 nav-item">
        <h6 class="text-xs ps-4 text-uppercase font-weight-bolder text-white">
          _______________
        </h6>
      </li>
      <li class="nav-item">
        <sidenav-collapse url="#" :aria-controls="''" v-bind:collapse="false" collapseRef="dashboard"
          navText="Dashboard">
          <template v-slot:icon>
            <i class="material-icons-round opacity-10 fs-5">dashboard</i>
          </template>
        </sidenav-collapse>
      </li>
      <li class="nav-item">
        <sidenav-collapse url="#" :aria-controls="''" v-bind:collapse="false" collapseRef="bimbingan"
          navText="Bimbingan">
          <template v-slot:icon>
            <i class="material-icons-round opacity-10 fs-5">collections_bookmark</i>
          </template>
        </sidenav-collapse>
      </li>
      <!-- <li class="nav-item dropdown">
        <sidenav-collapse url="#" :aria-controls="''" v-bind:collapse="false" collapseRef="Other"
          navText="Other">
          <template v-slot:icon>
            <i class="material-icons-round opacity-10 fs-5">collections_bookmark</i>
      
          </template>
          
        </sidenav-collapse>
      </li> -->
      <li class="nav-item">
        <sidenav-collapse url="#" :aria-controls="''" v-bind:collapse="false" collapseRef="sempro"
          navText="Seminar Proposal">
          <template v-slot:icon>
            <i class="material-icons-round opacity-10 fs-5">cast_for_education</i>
          </template>
        </sidenav-collapse>
      </li>
      <li class="nav-item">
        <sidenav-collapse url="#" :aria-controls="''" v-bind:collapse="false" collapseRef="sidang"
          navText="Sidang Tugas Akhir">
          <template v-slot:icon>
            <i class="material-icons-round opacity-10 fs-5">school</i>
          </template>
        </sidenav-collapse>
      </li>
      
      <li class="nav-item" v-if="is_superadmin && role == 'dosen' || role == 'user' || role == 'dosen'">
        <sidenav-collapse url="#" :aria-controls="''" v-bind:collapse="false" collapseRef="penilaian"
          navText="Penilaian">
          <template v-slot:icon>
            <i class="material-icons-round opacity-10 fs-5">assignment_turned_in</i>
          </template>
        </sidenav-collapse>
      </li>
      <li class="nav-item" v-if="is_superadmin">
        <sidenav-collapse url="#" :aria-controls="''" v-bind:collapse="false" collapseRef="relasi" 
        navText="Relasi">
          <template v-slot:icon>
            <i class="material-icons-round opacity-10 fs-5">groups_3</i>
          </template>
        </sidenav-collapse>
      </li>
      {{is_superadmin}} {{is_admin}} {{role}}
      <li class="nav-item">
        <sidenav-collapse url="#" :aria-controls="''" v-bind:collapse="false" collapseRef="notifications"
          navText="Pengumuman">
          <template v-slot:icon>
            <i class="material-icons-round opacity-10 fs-5">notifications</i>
          </template>
        </sidenav-collapse>
      </li>
      <li class="mt-3 nav-item">
        <h6 class="text-xs ps-4 text-uppercase font-weight-bolder text-white">
          ACCOUNT PAGES
        </h6>
      </li>
      <li class="nav-item">
        <sidenav-collapse url="#" :aria-controls="''" v-bind:collapse="false" collapseRef="profile" 
        navText="Profil">
          <template v-slot:icon>
            <i class="material-icons-round opacity-10 fs-5">person</i>
          </template>
        </sidenav-collapse>
      </li>
      <li class="nav-item">
        <sidenav-collapse url="#" :aria-controls="''" v-bind:collapse="false" collapseRef="manage-data" navText="Manage Data">
          <template v-slot:icon>
            <i class="material-icons-round opacity-10 fs-5">description</i>
          </template>
        </sidenav-collapse>
      </li>
      <li class="nav-item">
        <sidenav-collapse url="#" :aria-controls="''" v-bind:collapse="false" collapseRef="manage" navText="Manage User">
          <template v-slot:icon>
            <i class="material-icons-round opacity-10 fs-5">manage_accounts</i>
          </template>
        </sidenav-collapse>
      </li>
      <li class="nav-item">
        <sidenav-collapse url="#" :aria-controls="''" v-bind:collapse="false" collapseRef="sign-in" @click="logout()" navText="Sign Out">
          <template v-slot:icon>
            <i class="material-icons-round opacity-10 fs-5" >logout</i>
          </template>
        </sidenav-collapse>
      </li>
      {{is_admin}}
      <!-- <li class="nav-item">
        <sidenav-collapse
          url="/"
          :aria-controls="''"
          v-bind:collapse="false"
          collapseRef="sign-up"
          navText="SignUp"
        >
          <template v-slot:icon>
            <i class="material-icons-round opacity-10 fs-5">assignment</i>
          </template>
        </sidenav-collapse>
      </li> -->
    </ul>
  </div>
</template>
<script>
import SidenavCollapse from "./SidenavCollapse.vue";

export default {
  name: "SidenavList",
  props: {
    cardBg: String
  },
  inject: ['is_admin','is_superadmin','role'],
  data() {
    return {
      title: "SIM-TA",
      controls: "dashboard",
      isActive: "active"
    };
  },

  methods: {
    logout() {
      console.log("logout")
      // localStorage.removeItem('profile')
      localStorage.removeItem('token')
      this.getData()
      this.$router.push('/')
      
    }
  },

  components: {
    SidenavCollapse
  }
};
</script>
