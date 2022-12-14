<template>
  <div class="container-fluid">
    <div class="page-header min-height-200 border-radius-xl mt-4" style="
      background-image: url('https://images.unsplash.com/photo-1531512073830-ba890ca4eba2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80');
     ">
      <span class="mask bg-gradient-success opacity-6"></span>
      <router-link :to="{name:'Sidang'}" class="btn btn-light mx-4 material-icons me-2" type="button">
        arrow_back</router-link>
    </div>
    <div class="row">
      <div class="col-xxl-12">
        <div class="card card-body mx-3 mx-md-4 mt-n6">
          <div class="card-header align-items-center d-flex">
            <h4 class="card-title mb-0 flex-grow-1">Daftar Sidang Tugas Akhir</h4>
          </div>
          <!-- end card header -->
          <div class="card-body">
            <p class="text-muted">Form Daftar Sidang Tugas Akhir</p>
            <div class="live-preview">
              <form @submit.prevent="store()">
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
                  <div class="text-info col-lg-9 my-1  py-2 px-2 font-weight-bolder">
                    {{ profiles.number }}
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-lg-3 my-2">
                    <label for="nameInput" class="form-label" >Laporan Tugas Akhir</label>
                  </div>
                  <div class="col-lg-9 my-1">
                    <input id="laporan" type="file" label="" name="laporan" @change="fileChange($event, 'laporan')"
                      class="input-group border border-info rounded py-2 px-2 text-sm" size="md" :required="true" />
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-lg-3 my-2">
                    <label for="nameInput" class="form-label">Lembar Konsultasi Bimbingan
                      <h2 class="text-danger text-sm">Form. TA-006</h2>
                    </label>
                  </div>
                  <div class="col-lg-9 my-1">
                    <input id="bimbingan" type="file" label="" name="bimbingan" @change="fileChange1($event, 'bimbingan')"
                      class="input-group border border-info rounded py-2 px-2 text-sm" size="md" :required="true" />
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-lg-3 my-2"> 
                    <label for="nameInput" class="form-label">Formulir Persetujuan Sidang
                      <h2 class="text-danger text-sm">Form. TA-007</h2>
                    </label>
                  </div>
                  <div class="col-lg-9 my-1">
                    <input id="berkas1" type="file" label="" @change="fileChange2($event, 'validasi_sidang1')"
                      class="input-group border border-info rounded py-2 px-2 text-sm" name="Berkas1" size="md" :required="true" />
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-lg-3 my-2">
                    <label for="nameInput" class="form-label">Formulir Permohonan Sidang
                      <h2 class="text-danger text-sm">Form. TA-008</h2>
                    </label>
                  </div>
                  <div class="col-lg-9 my-1">
                    <input id="berkas2" type="file" label=""  @change="fileChange3($event, 'validasi_sidang2')"
                      class="input-group border border-info rounded py-2 px-2 text-sm" name="Berkas2" size="md" :required="true" />
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-lg-3 my-2">
                    <label for="nameInput" class="form-label">Formulir Kehadiran Seminar Proposal
                      <h2 class="text-danger text-sm">Form. TA-012</h2>
                    </label>
                  </div>
                  <div class="col-lg-9 my-1">
                    <input id="berkas2" type="file" label=""  @change="fileChange4($event, 'validasi_sempro')"
                      class="input-group border border-info rounded py-2 px-2 text-sm" name="Berkas3" size="md"  :required="true"/>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-lg-3 my-2">
                    <label for="nameInput" class="form-label">BUKTI Similarity
                      <h2 class="text-danger text-sm">Form. TA-009</h2>
                    </label>
                  </div>
                  <div class="col-lg-9 my-1">
                    <input id="berkas2" type="file" label=""  @change="fileChange5($event, 'bukti')"
                      class="input-group border border-info rounded py-2 px-2 text-sm" name="Berkas4" size="md"  :required="true"/>
                  </div>
                </div>
                <div class="text-end">
                  <MaterialButton class="mx-3" variant="outline" size="md" type="cancel">Cancel</MaterialButton>
                  <MaterialButton size="md" type="submit">Submit</MaterialButton>
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
import Swal from 'sweetalert2';

import $ from 'jquery';


// import MaterialInput from "@/components/MaterialInput.vue";
import MaterialButton from "@/components/MaterialButton.vue";
// import { mapMutations } from "vuex";

export default {
  name: "Tambah-Sidang",
  data(){
    return{
      profiles:{},
      Semhas:{}
    };
  },

  components: {
    // MaterialInput,
    MaterialButton,
  },

  // var demo = new Vue({
  // el: '#demo',
  // //data: data,
  methods: {
    getNama() {
      let token = localStorage.getItem("token")
      axios.get('http://127.0.0.1:8000/api/me',
        { headers: { "Authorization": `Bearer ${token}` } })
        .then((result) => {
          this.profiles = result.data.data
          console.log(this.profiles)
        }).catch((err) => {
          console.log(err.response)
        })
    },

    store() {
      let token = localStorage.getItem("token")
      const fd = new FormData();
      $.each(this.Semhas, function (key, value) {
        fd.append(key, value);
      });

      axios.post(
        'http://127.0.0.1:8000/api/semhas',
        fd, {
        headers: {
          Authorization: `Bearer ${token}`,
          'Content-Type': 'multipart/form-data'
        }
      })
        .then(() => {
          this.$router.push({
            name: 'Sidang'
          })
          Swal.fire(
            'Pendaftaran telah dilakukan',
            'success')

        }).catch((err) => {
          console.log(err.response.data)
        });
    },
    fileChange(event, laporan) {
      if (event) {
        $('.preview_' + laporan).attr('src', URL.createObjectURL(event.target.files[0]));
      }
      this.Semhas[laporan] = event.target.files[0];
    },
    fileChange1(event, bimbingan) {
      if (event) {
        $('.preview_' + bimbingan).attr('src', URL.createObjectURL(event.target.files[0]));
      }
      this.Semhas[bimbingan] = event.target.files[0];
    },
    fileChange2(event, validasi_sidang1) {
      if (event) {
        $('.preview_' + validasi_sidang1).attr('src', URL.createObjectURL(event.target.files[0]));
      }
      this.Semhas[validasi_sidang1] = event.target.files[0];
    },
    fileChange3(event, validasi_sidang2) {
      if (event) {
        $('.preview_' + validasi_sidang2).attr('src', URL.createObjectURL(event.target.files[0]));
      }
      this.Semhas[validasi_sidang2] = event.target.files[0];
    },
    fileChange4(event, validasi_sempro) {
      if (event) {
        $('.preview_' + validasi_sempro).attr('src', URL.createObjectURL(event.target.files[0]));
      }
      this.Semhas[validasi_sempro] = event.target.files[0];
    },
    fileChange5(event, bukti) {
      if (event) {
        $('.preview_' + bukti).attr('src', URL.createObjectURL(event.target.files[0]));
      }
      this.Semhas[bukti] = event.target.files[0];
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