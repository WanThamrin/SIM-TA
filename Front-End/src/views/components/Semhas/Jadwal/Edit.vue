<template>
  <div class="container-fluid">
    <div class="page-header min-height-200 border-radius-xl mt-4" style="
   background-image: url('https://images.unsplash.com/photo-1537498425277-c283d32ef9db?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nnx8Y29tcHV0ZXJ8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60');
    ">
      <span class="mask bg-gradient-warning opacity-6"></span>
      <router-link :to="{name:'Sidang'}" class="btn btn-light mx-4 material-icons me-2" type="button">
        arrow_back</router-link>
    </div>
    <div class="row">
      <div class="col-xxl-12">
        <div class="card card-body mx-3 mx-md-4 mt-n6">
          <div class="card-header align-items-center d-flex">
            <h4 class="card-title mb-0 flex-grow-1">Edit Sidang Tugas Akhir</h4>
          </div>
          <!-- end card header -->
          <div class="card-body">
            <p class="text-muted">Form Sidang Tugas Akhir</p>
            <div class="live-preview">
              <form @submit.prevent="update()">
                <!-- <input type="text" label="" name="users_id" size="md"
                      class="border border-info rounded py-2 px-2 text-sm"  v-model="JadwalSempros.users_id" > -->
                <div class="row mb-3 ">
                  <div class="col-lg-3 my-2">
                    <label for="nameInput" class="form-label">Nama Mahasiswa</label>
                  </div>
                  <div class="col-lg-9 my-2  text-align-center">
                    <!-- <material-input
                          id="name"
                          type="text"
                          label="Masukkan Nama Mahasiswa"
                          name="name"
                          size="md"
                          Required
                        /> -->
                    <h6 class="mb-0 text-md  my-1 ">{{ Sidangs.user.name }}</h6>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-lg-3 my-2">
                    <label for="nameInput" class="form-label">NIM</label>
                  </div>
                  <div class="col-lg-9 my-2">
                    <!-- <material-input
                          id="nim"
                          type="text"
                          label="Masukkan NIM"
                          name="nim"
                          size="md"
                        /> -->
                    <h6 class="mb-0 text-md my-1">{{ Sidangs.user.number }}</h6>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-lg-3 my-2">
                    <label for="nameInput" class="form-label">Judul Tugas Akhir</label>
                  </div>
                  <div class="col-lg-9 my-1">
                    <!-- <material-input
                          id="name"
                          type="text"
                          label=""
                          name="Judul TA"
                          size="md"
                        /> -->
                    <h6 class="mb-0 text-md  my-1">{{ Sidangs.t_a.keyword }}</h6>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-lg-3 my-2">
                    <label for="nameInput" class="form-label">Dosen Pembimbing Utama</label>
                  </div>
                  <div class="col-lg-9 my-1">
                    <!-- <material-input
                          id="slide"
                          type="text"
                          label=""
                          name="slide"
                          size="md"
                        /> -->
                    <h6 class="mb-0 text-md  my-1">{{Sidangs.t_a.dosen1.name}}</h6>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-lg-3 my-2">
                    <label for="nameInput" class="form-label">Dosen Pembimbing Pendamping</label>
                  </div>
                  <div class="col-lg-9 my-1">
                    <!-- <material-input
                          id="slide"
                          type="text"
                          label=""
                          name="slide"
                          size="md"
                        /> -->
                    <h6 class="mb-0 text-md  my-1">{{Sidangs.t_a.dosen2.name}}</h6>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-lg-3 my-2">
                    <label for="nameInput" class="form-label">Dosen Penguji Utama</label>
                  </div>
                  <div class="col-lg-9 my-1">
                    <!-- <material-input
                          id="slide"
                          type="text"
                          label=""
                          name="slide"
                          size="md"
                        /> -->
                    <h6 class="mb-0 text-md  my-1">{{Sidangs.t_a.dosen3.name}}</h6>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-lg-3 my-2">
                    <label for="nameInput" class="form-label">Dosen Penguji Pendamping</label>
                  </div>
                  <div class="col-lg-9 my-1">
                    <!-- <material-input
                          id="slide"
                          type="text"
                          label=""
                          name="slide"
                          size="md"
                        /> -->
                    <h6 class="mb-0 text-md  my-1">{{Sidangs.t_a.dosen4.name}}</h6>
                  </div>
                </div>
                <div class="row justify-content-evenly mb-3">
                  <div class="col-lg-3 my-2">
                    <label for="nameInput" class="form-label ">Jadwal Sidang Tugas Akhir</label>
                  </div>
                  <div class="col-lg my-1">
                    <input id="jadwal" type="date" min="today" label="" name="jadwal" size="md" :required="true"
                      class="border border-info rounded py-2 px-2 text-sm" v-model="JadwalSidangs.hari">
                    <!-- <h6 class="mb-0 text-md  my-1">Sisca Sabyan S.Kom M.Kom</h6> -->
                  </div>
                  <div class="col-lg my-2">
                    <label for="nameInput" class="form-label text-danger">Jam Mulai</label>
                  </div>
                  <div class="col-lg my-1">
                    <input id="jadwal" type="time" label="" name="jadwal" size="md" :required="true"
                      class="border border-info rounded py-2 px-2 text-sm" v-model="JadwalSidangs.jam_mulai">
                    <!-- <h6 class="mb-0 text-md  my-1">Sisca Sabyan S.Kom M.Kom</h6> -->
                  </div>
                  <div class="col-lg my-2">
                    <label for="nameInput" class="form-label text-danger">Jam Akhir</label>
                  </div>
                  <div class="col-lg my-1">
                    <input id="jadwal" type="time" label="" name="jadwal" size="md" :required="true"
                      class="border border-info rounded py-2 px-2 text-sm"  v-model="JadwalSidangs.jam_akhir">
                    <!-- <h6 class="mb-0 text-md  my-1">Sisca Sabyan S.Kom M.Kom</h6> -->
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-lg-3 my-2">
                    <label for="nameInput" class="form-label">Status Ruangan</label>
                  </div>
                  <div class="col-lg-8 my-2">
                    <select v-model="JadwalSidangs.type" class="border border-info rounded py-2 px-2 text-sm">
                      <!-- <option v-for="(dosen, index) in dosens" :key="index" :value="dosen.id">{{ dosen.name }}</option> -->
                      <option class="d-lg-none">aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</option>
                      <option class="" value="daring">Dalam Jaringan (Daring)</option>
                      <option class="" value="luring">Luar Jaringan (Luring)</option>
                    </select>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-lg-3 my-2">
                    <label for="nameInput" class="form-label">Keterangan Mengenai Status Ruangan
                      <h2 class="text-danger text-sm">ex. Gedung G202</h2>
                    </label>
                  </div>
                  <div class="col-lg-9 my-2">
                    <input id="Keterangan" type="text" placeholder="Masukkan Keterangan"  :required="true"
                    class="input-group border border-info rounded py-2 px-2 text-sm" name="Keterangan" 
                    v-model="JadwalSidangs.ruangan" :isRequired="true"
                       />
                  </div>
                </div>

                <div class="text-end mt-6">
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
// import MaterialInput from "@/components/MaterialInput.vue";
import axios from 'axios';
import Swal from 'sweetalert2';


import MaterialButton from "@/components/MaterialButton.vue";
// import { mapMutations } from "vuex";

export default {
  name: "CreateSidang",
  data() {
    return {
      Sidangs: {  
        user:{},
        t_a:{
          dosen1:{},
          dosen2:{},
          dosen3:{},
          dosen4:{}
        },
      },
      JadwalSidangs: {
        sidangId : this.$route.params.id
      },
      
    };
  },
  components: {
    // MaterialInput,
    MaterialButton,
  },

  methods:{
  getSidang() {
      let token = localStorage.getItem("token")
      axios.get('http://127.0.0.1:8000/api/semhas/'+ this.$route.params.id,
        { headers: { Authorization: `Bearer ${token}` } })
        .then((result) => {
          this.Sidangs = result.data.data
          this.JadwalSidangs = result.data.data.user.jadwal_semhas
            console.log(this.Sidangs)
        }).catch((err) => {
          console.log(err.response)

        })
    },

    update() {
      let token = localStorage.getItem("token")
      axios.post(
        'http://127.0.0.1:8000/api/jadwal-semhas-update',
        this.JadwalSidangs,
        { headers: { Authorization: `Bearer ${token}` } })

        .then((result) => {
          console.log(result)
          this.$router.push({
            name: 'Sidang'
          })
          Swal.fire(
            'Edit Penjadwalan telah dilakukan', 'Done',
            'success')

        }).catch((err) => {
          console.log(err.response.data)
        });
    }
 },

 mounted() {
    this.getSidang();

  }


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