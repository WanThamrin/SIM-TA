<template>
  <div class="container-fluid">
    <div class="page-header min-height-200 border-radius-xl mt-4" style="
    background-image: url('https://images.unsplash.com/photo-1531512073830-ba890ca4eba2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80');
    ">
      <span class="mask bg-gradient-success opacity-6"></span>
      <router-link :to="{ name: 'Profile' }" class="btn btn-light mx-4 material-icons me-2" type="button">
        arrow_back</router-link>
    </div>
    <div class="row">
      <div class="col-xxl-12">
        <div class="card card-body mx-3 mx-md-4 mt-n6">
          <div class="card-header align-items-center d-flex">
            <h4 class="card-title mb-0 flex-grow-1">Edit Tugas Akhir</h4>
          </div>
          <!-- end card header -->
          <div class="card-body">
            <p class="text-muted">Edit Tugas Akhir</p>
            <div class="live-preview">
              <form @submit.prevent="store()">
                <div v-if="isLogin">
                  <material-alert class="font-weight-light" color="danger" dismissible>
                    <span class="text-sm">{{ this.messageError }}</span>
                  </material-alert>
                </div>
                <div class="row mb-3 ">
                  <div class="col-lg-3 my-2">
                    <label for="nameInput" class="form-label">Nama Mahasiswa</label>
                  </div>
                  <div class="text-info col-lg-9 my-1  py-2 px-2 font-weight-bolder">
                    {{ profiles.name }}
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-lg-3 my-2">
                    <label for="nameInput" class="form-label">NIM</label>
                  </div>
                  <div class="text-info col-lg-9 my-1 py-2 px-2 font-weight-bolder">
                    {{ profiles.number }}
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-lg-3 my-2">
                    <label for="validationCustom01" class="form-label">Judul Tugas Akhir</label>
                  </div>
                  <div class="col-lg-9 my-1">
                    <input id="validationCustom01" type="text" placeholder="Masukkan Judul TA"
                      class="input-group border border-info rounded py-2 px-2 text-sm" v-model="tugas.judul"
                      size="md" :required="true" />
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-lg-3 my-2">
                    <label for="nameInput" class="form-label">Abstrak </label>
                  </div>
                  <div class="col-lg-9 my-1">
                    <textarea placeholder="Masukkan Keterangan Singkat mengenai Judul" v-model="tugas.abstrak"
                      class="input-group border border-info rounded py-2 px-2 text-sm" size="md" :required="true"> 
                     </textarea>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-lg-3 my-2">
                    <label for="nameInput" class="form-label">Kata Kunci</label>
                  </div>
                  <div class="col-lg-9 my-1">
                    <input id="name" type="text" placeholder="Masukkan Kata Kunci"
                      class="input-group border border-info rounded py-2 px-2 text-sm" v-model="tugas.keyword"
                      size="md" :required="true"/>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-lg-3 my-3">
                    <label for="nameInput" class="form-label">Dosen Pembimbing Utama</label>
                  </div>
                  <div class="col-lg-9 my-2 ">
                    <select v-model="tugas.dospem1" @change="checkDospem()"
                      class="border border-info rounded py-2 px-2 text-sm" :required="true">
                      <option v-for="(dosen, index) in dosens" :key="index" :value="dosen.id">{{ dosen.name }}</option>
                      <option class="d-lg-none">aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</option>
                    </select>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-lg-3 my-2">
                    <label for="nameInput" class="form-label">Dosen Pembimbing Pendamping</label>
                  </div>
                  <div class="col-lg-9 my-2">
                    <select v-model="tugas.dospem2" @change="checkDospem()"
                      class="border border-info rounded py-2 px-2 text-sm" :required="true">
                      <option v-for="(dosen, index) in dosens" :key="index" :value="dosen.id">{{ dosen.name }}</option>
                      <option class="d-lg-none">aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</option>
                    </select>
                  </div>
                </div>
                <div class="text-end">
                  <MaterialButton class="mx-3" variant="outline" size="md" type="cancel" 
                   @click="$router.push({ name: 'Profile' })"
                    >Cancel</MaterialButton>
                  <MaterialButton size="md" name="submit" type="submit" 
                  >Update</MaterialButton>
                </div>
              </form>
            </div>
            <!-- <div class="d-none code-view"></div> -->
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import axios from 'axios';
// import $ from 'jquery'; 
import Swal from 'sweetalert2';

import MaterialButton from "@/components/MaterialButton.vue";
// import MaterialAlert from "@/components/MaterialAlert.vue";


export default {
  name: "tables",
  data() {
    return {
      profiles: {},
      tugas: {},
      dosens: {},
    };
  },

  components: {
    MaterialButton,
  },

  methods: {
    checkDospem() {
      if (this.tugas.dospem1 == this.tugas.dospem2) {
        Swal.fire(
          "Error!",
          "Dosen Pembimbing Tidak Boleh Sama!",
          "error"
        ).then((result) => {
          if (result.value) {
            this.tugas.dospem2 = null
          }
        });
        this.tugas.dospem2 = null
      }
    },


    getNama() {
      let token = localStorage.getItem("token")
      axios.get('http://127.0.0.1:8000/api/me',
        { headers: { "Authorization": `Bearer ${token}` } })
        .then((result) => {
          this.profiles = result.data.data
          this.tugas = result.data.tugas_akhir
          console.log(this.profiles)
        }).catch((err) => {
          console.log(err.response)
        })
    },

getDosen() {
  let token = localStorage.getItem("token")
  axios.get('http://127.0.0.1:8000/api/get-dosen',
    { headers: { "Authorization": `Bearer ${token}` } })
    .then((result) => {
      this.dosens = result.data.data
      console.log(this.dosens)
    }).catch((err) => {
      console.log(err.response)
    })
},

    store() {
      let token = localStorage.getItem("token")
      // console.log(this.bebanBimbingan)
      axios.post(
        'http://127.0.0.1:8000/api/regis-ta/update-by-user',
        this.tugas,
        { headers: { Authorization: `Bearer ${token}` } })

      .then((result) => {
        console.log(result),
        Swal.fire(
            'Tugas akhir berhasil diupdate',
            'success')
     
      }).catch((err) => {
          console.log(err.response.data)
        });
  }
},

  mounted() {
    this.getNama()
    this.getDosen()
  },
  // },
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