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
                    {{ Sidang.user.name }}
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-lg-3 my-2">
                    <label for="nameInput" class="form-label">NIM</label>
                  </div>
                  <div class="text-info col-lg-9 my-1  py-2 px-2 font-weight-bolder">
                    {{ Sidang.user.number }}
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-lg-3 my-2">
                    <label for="nameInput" class="form-label" >Laporan</label>
                  </div>
                  <div class="col-lg-9 my-1">
                    <a class="text-md my-2"  :href="'http://127.0.0.1:8000/Semhas/laporan/'+ Sidang.laporan" target="_blank">
                      {{Sidang.laporan}}</a>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-lg-3 my-2">
                    <label for="nameInput" class="form-label">Form Bimbingan</label>
                  </div>
                  <div class="col-lg-9 my-1">
                    <a class="text-md my-2"  :href="'http://127.0.0.1:8000/Semhas/bimbingan/'+ Sidang.bimbingan" target="_blank">
                      {{Sidang.bimbingan}}</a>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-lg-3 my-2"> 
                    <label for="nameInput" class="form-label">Form Validasi Permohonan Sidang</label>
                  </div>
                  <div class="col-lg-9 my-1">
                    <a class="text-md my-2"  :href="'http://127.0.0.1:8000/Semhas/validasi_sidang1/'+ Sidang.validasi_sidang1" target="_blank">
                      {{Sidang.validasi_sidang1}}</a>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-lg-3 my-2">
                    <label for="nameInput" class="form-label">Form Validasi Perijinan Sidang</label>
                  </div>
                  <div class="col-lg-9 my-1">
                    <a class="text-md my-2"  :href="'http://127.0.0.1:8000/Semhas/validasi_sidang2/'+ Sidang.validasi_sidang2" target="_blank">
                      {{Sidang.validasi_sidang2}}</a>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-lg-3 my-2">
                    <label for="nameInput" class="form-label">Form Validasi Kehadiran Seminar Proposal</label>
                  </div>
                  <div class="col-lg-9 my-1">
                    <a class="text-md my-2"  :href="'http://127.0.0.1:8000/Semhas/validasi_sempro/'+ Sidang.validasi_sempro" target="_blank">
                      {{Sidang.validasi_sempro}}</a>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-lg-3 my-2">
                    <label for="nameInput" class="form-label">Form Bukti Similarity</label>
                  </div>
                  <div class="col-lg-9 my-1">
                    <a class="text-md my-2"  :href="'http://127.0.0.1:8000/Semhas/bukti/'+ Sidang.bukti" target="_blank">
                      {{Sidang.bukti}}</a>
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
  name: "lihat-sidang",
  data(){
    return{
      Sidang:{
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
      axios.get('http://127.0.0.1:8000/api/semhas/' + this.$route.params.id,
        { headers: { "Authorization": `Bearer ${token}` } })
        .then((result) => {
          this.Sidang = result.data.data
          console.log(this.Sidang)
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