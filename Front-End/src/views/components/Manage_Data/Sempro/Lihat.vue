<template>
  <div class="container-fluid">
    <div class="page-header min-height-200 border-radius-xl mt-4" style="
     background-image: url('https://images.unsplash.com/photo-1531512073830-ba890ca4eba2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80');
     ">
      <span class="mask bg-gradient-success opacity-6"></span>
      <router-link :to="{name:'ManageData'}" class="btn btn-light mx-4 material-icons me-2" type="button">
        arrow_back</router-link>
    </div>
    <div class="row">
      <div class="col-xxl-12">
        <div class="card card-body mx-3 mx-md-4 mt-n6">
          <div class="card-header align-items-center d-flex">
            <h4 class="card-title mb-0 flex-grow-1">Daftar Seminar Proposal</h4>
          </div>
          <!-- end card header -->
          <div class="card-body">
            <p class="text-muted">Form Daftar Seminar Proposal</p>
            <div class="live-preview">
              <form @submit.prevent="">
                <div class="row mb-3 ">
                  <div class="col-lg-3 my-2">
                    <label for="nameInput" class="form-label">Nama Mahasiswa</label>
                  </div>
                  <div class="text-info col-lg-9 my-1  py-2 px-2 font-weight-bolder">
                    {{ Sempro.user.name }}
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-lg-3 my-2">
                    <label for="nameInput" class="form-label">NIM</label>
                  </div>
                  <div class="text-info col-lg-9 my-1  py-2 px-2 font-weight-bolder">
                    {{ Sempro.user.number }}
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-lg-3 my-2">
                    <label for="nameInput" class="form-label" >Proposal</label>
                  </div>
                  <div class="col-lg-9 my-1">
                    <a class="text-md my-2"  :href="'http://127.0.0.1:8000/Sempro/proposal/'+ Sempro.proposal" target="_blank">
                      {{Sempro.proposal}}</a>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-lg-3 my-2">
                    <label for="nameInput" class="form-label">Slide Presentasi / Poster</label>
                  </div>
                  <div class="col-lg-9 my-1">
                    <a class="text-md my-2"  :href="'http://127.0.0.1:8000/Sempro/slide/'+ Sempro.slide" target="_blank">
                      {{Sempro.slide}}</a>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-lg-3 my-2"> 
                    <label for="nameInput" class="form-label">Persetujuan Dosen Pembimbing Utama</label>
                  </div>
                  <div class="col-lg-9 my-1">
                    <a class="text-md my-2"  :href="'http://127.0.0.1:8000/Sempro/validasi_dospem1/'+ Sempro.validasi_dospem1" target="_blank">
                      {{Sempro.validasi_dospem1}}</a>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-lg-3 my-2">
                    <label for="nameInput" class="form-label">Persetujuan Dosen Pembimbing Pendamping</label>
                  </div>
                  <div class="col-lg-9 my-1">
                    <a class="text-md my-2"  :href="'http://127.0.0.1:8000/Sempro/validasi_dospem2/'+ Sempro.validasi_dospem2" target="_blank">
                      {{Sempro.validasi_dospem2}}</a>
                  </div>
                </div>
           
              </form>
            </div>
            <div class="d-none code-view"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import axios from 'axios';
// import $ from 'jquery';


// import MaterialInput from "@/components/MaterialInput.vue";
// import MaterialButton from "@/components/MaterialButton.vue";
// import { mapMutations } from "vuex";

export default {
  name: "lihat-sempro",
  data(){
    return{
      Sempro:{
        user:{}
      }
    };
  },

  components: {
    // MaterialInput,
    // MaterialButton,
  },

  // var demo = new Vue({
  // el: '#demo',
  // //data: data,
  methods: {
    getNama() {
      let token = localStorage.getItem("token")
      axios.get('http://127.0.0.1:8000/api/sempro/' + this.$route.params.id,
        { headers: { "Authorization": `Bearer ${token}` } })
        .then((result) => {
          this.Sempro = result.data.data
          console.log(this.Sempro)
        }).catch((err) => {
          console.log(err.response)
        })
    },
  },

  mounted() {
    this.getNama()
  },

  // beforeMount() {
  //     this.toggleEveryDisplay();
  //     this.toggleHideConfig();
  //     // body.classList.remove("bg-gray-100");
  // },
  // beforeUnmount() {
  //     this.toggleEveryDisplay();
  //     this.toggleHideConfig();
  //     // body.classList.add("bg-gray-100");
  // },
  // methods: {
  //     ...mapMutations(["toggleEveryDisplay", "toggleHideConfig"]),
  // },
};
</script>