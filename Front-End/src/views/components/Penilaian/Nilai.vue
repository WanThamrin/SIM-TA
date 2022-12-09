<template>
  <div class="container-fluid">
    <div class="page-header min-height-200 border-radius-xl mt-4"
      style="background-image: url('https://images.unsplash.com/photo-1537498425277-c283d32ef9db?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nnx8Y29tcHV0ZXJ8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60');">
      <span class="mask bg-gradient-warning opacity-6"></span>
      <router-link :to="{ name: 'Penilaian' }" class="btn btn-light mx-4 material-icons me-2" type="button">
        arrow_back</router-link>
    </div>
    <div class="row">
      <div class="col-xxl-12">
        <div class="card card-body mx-3 mx-md-4 mt-n6">
          <div class="card-header align-items-center d-flex">
            <h4 class="card-title mb-0 flex-grow-1">Penilaian Seminar Mahasiswa</h4>
          </div>
          <!-- end card header -->
          <div class="card-body">
            <p class="text-muted font-weight-bold">Form Penilaian Seminar</p>
            <div class="live-preview">
              <form @submit.prevent="store(Sempros.id)">
                <div class="row mb-3 ">
                  <div class="col-lg-3 my-2">
                    <label for="nameInput" class="form-label">Nama Mahasiswa :</label>
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
                    <h6 class="mb-0 text-md  my-1 ">{{ Sempros.user.name }}</h6>
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
                    <h6 class="mb-0 text-md my-1">{{ Sempros.user.number }}</h6>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-lg-3 my-2">
                    <label for="nameInput" class="form-label">Proposal</label>
                  </div>
                  <div class="col-lg my-1">
                    <!-- <material-input
                          id="name"
                          type="text"
                          label=""
                          name="Proposal"
                          size="md"
                        /> -->
                    <a class="text-md my-2" :href="'http://127.0.0.1:8000/Sempro/proposal/' + Sempros.proposal"
                      target="_blank">
                      {{ Sempros.proposal }}</a>
                  </div>
                </div>
                <div class="row justify-content-evenly mb-3">
                  <div class="col-lg my-2 ">
                    <label for="nameInput" class="form-label text-success">Dosen Pembimbing Utama</label>
                  </div>
                  <div class="col-lg my-1">
                    <!-- <material-input
                          id="slide"
                          type="text"
                          label=""
                          name="dospem1"
                          size="md"
                        /> -->
                    <h6 class="mb-0 text-md  my-1">{{ Sempros.t_a.dosen1.name }}</h6>
                  </div>
                  <div class="col-lg my-2">
                    <label for="nameInput" class="form-label text-success">Dosen Pembimbing Pendamping</label>
                  </div>
                  <div class="col-lg my-1">
                    <!-- <material-input
                          id="slide"
                          type="text"
                          label=""
                          name="dospem2"
                          size="md"
                        /> -->
                    <h6 class="mb-0 text-md  my-1">{{ Sempros.t_a.dosen2.name }}</h6>
                  </div>
                </div>
                <div class="row justify-content-evenly mb-3">
                  <div class="col-lg my-2 ">
                    <label for="nameInput" class="form-label text-success">Dosen Penguji I</label>
                  </div>
                  <div class="col-lg my-1">
                    <!-- <material-input
                          id="slide"
                          type="text"
                          label=""
                          name="dospeng1"
                          size="md"v-if="Sempros.t_a.dosen3=== null"
                        /> -->
                    <span class="badge badge-sm bg-gradient-light text-dark" v-if="Sempros.t_a.dosen3 === null"> -
                    </span>
                    <span class="mb-0 text-md  my-1" v-else>{{ Sempros.t_a.dosen3.name }}</span>
                  </div>
                  <div class="col-lg my-2">
                    <label for="nameInput" class="form-label text-success">Dosen Penguji II</label>
                  </div>
                  <div class="col-lg my-1">
                    <!-- <material-input
                          id="slide"
                          type="text"
                          label=""
                          name="dospeng2"
                          size="md"
                        /> -->
                    <span class="badge badge-sm bg-gradient-light text-dark" v-if="Sempros.t_a.dosen4 === null"> -
                    </span>
                    <span class="mb-0 text-md  my-1" v-else>{{ Sempros.t_a.dosen4.name }}</span>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-lg-3 my-2">
                    <label for="nameInput" class="form-label">Jadwal Seminar Proposal</label>
                  </div>
                  <div class="col-lg-9 my-1">
                    <!-- <input
                          id="jadwal"
                          type="datetime-local"
                          label=""
                          name="jadwal"
                          size="md"
                        > -->
                        <span class="badge badge-sm bg-gradient-light text-dark" v-if="Sempros.user.jadwal_sempro === null"> -
                    </span>
                    <h6 class="mb-0 text-md  my-1" v-else> {{ Sempros.user.jadwal_sempro.hari }} ;
                      Pukul {{ Sempros.user.jadwal_sempro.jam_mulai }} s.d {{ Sempros.user.jadwal_sempro.jam_akhir }}</h6>
                  </div>
                </div>
                <div class="row my-3 font-weight-bold"> Masukkan Nilai Sesuai Komponen Penilaian</div>
                <div class="row mb-3">
                  <div class="col-md-3 offset-md-3">
                    <label for="nameInput" class="form-label">Media Presentasi / Power Point</label>
                    <h3 class="text-danger text-sm mx-2">Presentase 20%</h3>
                  </div>
                  <div class="col my-3">
                    <input id="nilai1" type="number" placeholder="00" min="1" max="100" v-on:keypress="NumbersOnly"
                      v-on:change="hitungNilaiPresentasi" class="border border-info rounded py-2 px-2 text-sm"
                      v-model="NilaiSempro.nilai1" name="nilai1">
                    <span class="text-info mx-2">/ 100%</span>
                    <!-- <h6 class="mb-0 text-md  my-1"> Rabu, 13/07/2022 ; Pukul 14.00 s.d 16.00</h6> -->
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-md-3 offset-md-3">
                    <label for="nameInput" class="form-label">Komunikasi dalam Presentasi</label>
                    <h3 class="text-danger text-sm mx-2">Presentase 40%</h3>
                  </div>
                  <div class="col my-3">
                    <input id="nilai2" type="number" placeholder="00" min="1" max="100" v-on:keypress="NumbersOnly"
                      v-on:change="hitungNilaiPresentasi" class="border border-info rounded py-2 px-2 text-sm"
                      v-model="NilaiSempro.nilai2" name="nilai2">
                    <span class="text-info mx-2">/ 100%</span>
                    <!-- <h6 class="mb-0 text-md  my-1"> Rabu, 13/07/2022 ; Pukul 14.00 s.d 16.00</h6> -->
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-md-3 offset-md-3">
                    <label for="nameInput" class="form-label">Penguasaan Materi</label>
                    <h3 class="text-danger text-sm mx-2">Presentase 40%</h3>
                  </div>
                  <div class="col my-3">
                    <input id="nilai3" type="number" placeholder="00" min="1" max="100" v-on:keypress="NumbersOnly"
                      v-on:change="hitungNilaiPresentasi" class="border border-info rounded py-2 px-2 text-sm"
                      v-model="NilaiSempro.nilai3" name="nilai3">
                    <span class="text-info mx-2">/ 100%</span>
                    <!-- <h6 class="mb-0 text-md  my-1"> Rabu, 13/07/2022 ; Pukul 14.00 s.d 16.00</h6> -->
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-md-3 offset-md-3">
                    <label for="nameInput" class="form-label">Total Nilai Presentasi</label>
                    <h3 class="text-danger text-sm mx-2">Presentase 100%</h3>
                  </div>
                  <div class="col my-3">
                    <input id="nilaipresentasi" readonly type="number" placeholder="00" min="1" max="100"
                      v-on:keypress="NumbersOnly" class="border border-info rounded py-2 px-2 text-sm"
                      v-model="NilaiSempro.nilai_presentasi" name="nilaipresentasi">
                    <span class="text-info mx-2">/ 100%</span>
                    <!-- <h6 class="mb-0 text-md  my-1"> Rabu, 13/07/2022 ; Pukul 14.00 s.d 16.00</h6> -->
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-md-3 offset-md-3">
                    <label for="nameInput" class="form-label">Isi Proposal TA</label>
                    <h3 class="text-danger text-sm mx-2">Presentase 60%</h3>
                  </div>
                  <div class="col my-3">
                    <input id="nilai4" type="number" placeholder="00" min="1" max="100" v-on:keypress="NumbersOnly"
                      v-on:change="hitungNilaiLaporan" class="border border-info rounded py-2 px-2 text-sm"
                      v-model="NilaiSempro.nilai4" name="nilai4">
                    <span class="text-info mx-2">/ 100%</span>
                    <!-- <h6 class="mb-0 text-md  my-1"> Rabu, 13/07/2022 ; Pukul 14.00 s.d 16.00</h6> -->
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-md-3 offset-md-3">
                    <label for="nameInput" class="form-label">Struktur dan Tata Cara Penulisan Proposal</label>
                    <h3 class="text-danger text-sm mx-2">Presentase 40%</h3>
                  </div>
                  <div class="col my-3">
                    <input id="nilai5" type="number" placeholder="00" min="1" max="100" v-on:keypress="NumbersOnly"
                      v-on:change="hitungNilaiLaporan" class="border border-info rounded py-2 px-2 text-sm"
                      v-model="NilaiSempro.nilai5" name="nilai5">
                    <span class="text-info mx-2">/ 100%</span>
                    <!-- <h6 class="mb-0 text-md  my-1"> Rabu, 13/07/2022 ; Pukul 14.00 s.d 16.00</h6> -->
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-md-3 offset-md-3">
                    <label for="nameInput" class="form-label">Total Nilai Laporan</label>
                    <h3 class="text-danger text-sm mx-2">Presentase 100%</h3>
                  </div>
                  <div class="col my-3">
                    <input id="nilailaporan" readonly type="number" placeholder="00" min="1" max="100"
                      v-on:keypress="NumbersOnly" class="border border-info rounded py-2 px-2 text-sm"
                      v-model="NilaiSempro.nilai_laporan" name="nilailaporan">
                    <span class="text-info mx-2">/ 100%</span>
                    <!-- <h6 class="mb-0 text-md  my-1"> Rabu, 13/07/2022 ; Pukul 14.00 s.d 16.00</h6> -->
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-lg-3 my-2  ">
                    <label for="nameInput" class="form-label font-weight-bold">Catatan (Keterangan Singkat mengenai
                      Penilaian)</label>
                  </div>
                  <div class="col-lg-9 my-1">
                    <textarea id="note_nilai" type="textarea" placeholder="Masukkan Catatan"
                      class="input-group border border-info rounded py-2 px-2 text-sm" v-model="NilaiSempro.note"
                      name="note_nilai" size="md"></textarea>
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
// import $ from 'jquery'; 

// import MaterialInput from "@/components/MaterialInput.vue";
import MaterialButton from "@/components/MaterialButton.vue";
// import MaterialTextarea from "../../../components/MaterialTextarea.vue";
// import { mapMutations } from "vuex";

export default {
  name: "nilai",
  data() {
    return {
      Sempros: {
        user: {
          jadwal_sempro: {}
        },
        t_a: {
          dosen1: {},
          dosen2: {},
          dosen3: {},
          dosen4: {}
        }
      },
      NilaiSempro: {
        nilai1: 0,
        nilai2: 0,
        nilai3: 0,
        nilai4: 0,
        nilai5: 0,
        note: '',
        nilai_presentasi: 0,
        nilai_laporan: 0
      },
      // valSempros: {},

    };
  },
  components: {
    // MaterialInput,
    MaterialButton,
    // MaterialTextarea
  },
  methods: {
    NumbersOnly(evt) {
      evt = (evt) ? evt : window.event;
      var charCode = (evt.which) ? evt.which : evt.keyCode;
      if ((charCode > 31 && (charCode < 48 || charCode > 57)) && charCode !== 46) {
        evt.preventDefault();;
      } else {
        return true;
      }
    },
    getSempro() {
      let token = localStorage.getItem("token")
      axios.get('http://127.0.0.1:8000/api/nilai-sempro/' + this.$route.params.id,
        { headers: { Authorization: `Bearer ${token}` } })
        .then((result) => {
          this.Sempros = result.data.data.user;
          if (!result.data.data.nilai) {
            this.NilaiSempro.nilai1 = 0;
            this.NilaiSempro.nilai2 = 0;
            this.NilaiSempro.nilai3 = 0;
            this.NilaiSempro.nilai4 = 0;
            this.NilaiSempro.nilai5 = 0;
            this.NilaiSempro.nilai_presentasi = 0;
            this.NilaiSempro.nilai_laporan = 0;
          } else {
            this.NilaiSempro = result.data.data.nilai;

          }
          this.hitungNilaiPresentasi();
          this.hitungNilaiLaporan();
        }).catch((err) => {
          console.log(err.response)

        })
    },

    store(id) {
      let token = localStorage.getItem("token")
      console.log(id)
      axios.put(
        'http://127.0.0.1:8000/api/nilai-sempro/' + id,
        this.NilaiSempro,
        { headers: { Authorization: `Bearer ${token}` } })

        .then((result) => {
          console.log(result)
          this.$router.push({
            name: 'Penilaian'
          })

        }).catch((err) => {
          console.log(err.response.data)
        });
    },

    hitungNilaiPresentasi() {
      this.NilaiSempro.nilai_presentasi = this.NilaiSempro.nilai1 * 0.2 + this.NilaiSempro.nilai2 * 0.4 + this.NilaiSempro.nilai3 * 0.4
    },

    hitungNilaiLaporan() {
      this.NilaiSempro.nilai_laporan = this.NilaiSempro.nilai4 * 0.6 + this.NilaiSempro.nilai5 * 0.4
    }
  },

  mounted() {
    this.getSempro();
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