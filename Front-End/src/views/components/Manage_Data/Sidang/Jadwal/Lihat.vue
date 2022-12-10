<template>
  <div class="container-fluid">
    <div class="page-header min-height-200 border-radius-xl mt-4" style="
    background-image: url('https://images.unsplash.com/photo-1537498425277-c283d32ef9db?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nnx8Y29tcHV0ZXJ8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60');
    ">
      <span class="mask bg-gradient-warning opacity-6"></span>
      <router-link :to="{name:'ManageData'}" class="btn btn-light mx-4 material-icons me-2" type="button">
        arrow_back</router-link>
    </div>
    <div class="row">
      <div class="col-xxl-12">
        <div class="card card-body mx-3 mx-md-4 mt-n6">
          <div class="card-header align-items-center d-flex">
            <h4 class="card-title mb-0 flex-grow-1">Data Jadwal Sidang Mahasiswa</h4>
          </div>
          <!-- end card header -->
          <div class="card-body">
            <p class="text-muted">Data Jadwal Sidang Mahasiswa</p>
            <div class="live-preview">
              <form @submit.prevent="">
                <div class="row mb-3 ">
                  <div class="col-lg-3 my-2">
                    <label for="nameInput" class="form-label">Nama Mahasiswa</label>
                  </div>
                  <div class="col-lg-9 my-2  text-align-center">
                    <h6 class="mb-0 text-md  my-1 ">{{ Semhas.user.name }}</h6>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-lg-3 my-2">
                    <label for="nameInput" class="form-label">NIM</label>
                  </div>
                  <div class="col-lg-9 my-2">
                    <h6 class="mb-0 text-md my-1">{{ Semhas.user.number }}</h6>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-lg-3 my-2">
                    <label for="nameInput" class="form-label">Judul Tugas Akhir</label>
                  </div>
                  <div class="col-lg-9 my-1">
                    <h6 class="mb-0 text-md  my-1">{{ Semhas.t_a.keyword }}</h6>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-lg-3 my-2">
                    <label for="nameInput" class="form-label">Dosen Pembimbing Utama</label>
                  </div>
                  <div class="col-lg-9 my-1">
                    <h6 class="mb-0 text-md  my-1">{{Semhas.t_a.dosen1.name}}</h6>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-lg-3 my-2">
                    <label for="nameInput" class="form-label">Dosen Pembimbing Pendamping</label>
                  </div>
                  <div class="col-lg-9 my-1">
                    <h6 class="mb-0 text-md  my-1">{{Semhas.t_a.dosen2.name}}</h6>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-lg-3 my-2">
                    <label for="nameInput" class="form-label">Dosen Peguji I</label>
                  </div>
                  <div class="col-lg-9 my-1">
                    <h6 class="mb-0 text-md  my-1">{{Semhas.t_a.dosen3.name}}</h6>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-lg-3 my-2">
                    <label for="nameInput" class="form-label">Dosen Peguji II</label>
                  </div>
                  <div class="col-lg-9 my-1">
                    <h6 class="mb-0 text-md  my-1">{{Semhas.t_a.dosen4.name}}</h6>
                  </div>
                </div>
                <div class="row justify-content-evenly mb-3">
                  <div class="col-lg-3 my-2">
                    <label for="nameInput" class="form-label ">Jadwal Seminar Proposal</label>
                  </div>
                  <div class="col-lg my-1">
                    <h6 class="mb-0 text-md  my-1">{{Semhas.user.jadwal_semhas.hari}}</h6>
                  </div>
                  <div class="col-lg my-2">
                    <label for="nameInput" class="form-label text-danger">Jam Mulai</label>
                  </div>
                  <div class="col-lg my-1">
                    <h6 class="mb-0 text-md  my-1">{{Semhas.user.jadwal_semhas.jam_mulai}}</h6>
                  </div>
                  <div class="col-lg my-2">
                    <label for="nameInput" class="form-label text-danger">Jam Akhir</label>
                  </div>
                  <div class="col-lg my-1">
                    <h6 class="mb-0 text-md  my-1">{{Semhas.user.jadwal_semhas.jam_akhir}}</h6>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-lg-3 my-2">
                    <label for="nameInput" class="form-label">Status Ruangan</label>
                  </div>
                  <div class="col-lg-8 my-2">
                    <h6 class="mb-0 text-md  my-1">{{Semhas.user.jadwal_semhas.type}}</h6>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-lg-3 my-2">
                    <label for="nameInput" class="form-label">Keterangan Mengenai Status Ruangan
                      <h2 class="text-danger text-sm">ex. Gedung G202</h2>
                    </label>
                  </div>
                  <div class="col-lg-9 my-2">
                    <h6 class="mb-0 text-md  my-1">{{Semhas.user.jadwal_semhas.ruangan}}</h6>
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
// import MaterialInput from "@/components/MaterialInput.vue";
import axios from 'axios';

// import MaterialButton from "@/components/MaterialButton.vue";
// import { mapMutations } from "vuex";

export default {
  name: "Semhas-LihatJad",
  data() {
    return {
      Semhas: {  
        user:{
          jadwal_semhas:{}
        },
        t_a:{
          dosen1:{},
          dosen2:{},
          dosen3:{},
          dosen4:{},
        },
      },
      
    };
  },
  components: {
    // MaterialInput,
    // MaterialButton,
  },

  methods:{
  getSemhas() {
      let token = localStorage.getItem("token")
      axios.get('http://127.0.0.1:8000/api/semhas/'+ this.$route.params.id,
        { headers: { Authorization: `Bearer ${token}` } })
        .then((result) => {
          this.Semhas = result.data.data
          console.log(this.Semhas)
        }).catch((err) => {
          console.log(err.response)

        })
    },

 },

 mounted() {
    this.getSemhas();


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