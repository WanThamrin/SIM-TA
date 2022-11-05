<template>
  <div class="container-fluid">
    <div class="page-header min-height-200 border-radius-xl mt-4" style="
      background-image: url('https://images.unsplash.com/photo-1537498425277-c283d32ef9db?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nnx8Y29tcHV0ZXJ8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60');
      ">
      <span class="mask bg-gradient-warning opacity-6"></span>
      <router-link :to="{name:'Penilaian'}" class="btn btn-light mx-4 material-icons me-2" type="button">
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
              <form @submit.prevent="">
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
                    <h6 class="mb-0 text-md  my-1 ">John Michael</h6>
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
                    <h6 class="mb-0 text-md my-1">11181050</h6>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-lg-3 my-2">
                    <label for="nameInput" class="form-label">Proposal</label>
                  </div>
                  <div class="col-lg-9 my-1">
                    <!-- <material-input
                          id="name"
                          type="text"
                          label=""
                          name="Proposal"
                          size="md"
                        /> -->
                    <h6 class="mb-0 text-md  my-1">SIM-TA</h6>
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
                    <h6 class="mb-0 text-md  my-1">John Michael S.Kom M.Kom</h6>
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
                    <h6 class="mb-0 text-md  my-1">Sisca Sabyan S.Kom M.Kom</h6>
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
                          size="md"
                        /> -->
                    <h6 class="mb-0 text-md  my-1">John Michael S.Kom M.Kom</h6>
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
                    <h6 class="mb-0 text-md  my-1">Sisca Sabyan S.Kom M.Kom</h6>
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
                    <h6 class="mb-0 text-md  my-1"> Rabu, 13/07/2022 ; Pukul 14.00 s.d 16.00</h6>
                  </div>
                </div>
                <div class="row my-3 font-weight-bold"> Masukkan Nilai Sesuai Komponen Penilaian</div>
                <div class="row mb-3">
                  <div class="col-md-3 offset-md-3">
                    <label for="nameInput" class="form-label">Media Presentasi / Power Point</label>
                    <h3 class="text-danger text-sm mx-2">Presentase 20%</h3>
                  </div>
                  <div class="col my-3">
                    <input id="nilai" type="number" placeholder="00" min="1" max="100" v-on:keypress="NumbersOnly"  class="border border-info rounded py-2 px-2 text-sm" name="nilai">
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
                    <input id="nilai" type="number" placeholder="00" min="1" max="100" v-on:keypress="NumbersOnly"  class="border border-info rounded py-2 px-2 text-sm" name="nilai">
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
                    <input id="nilai" type="number" placeholder="00" min="1" max="100" v-on:keypress="NumbersOnly"  class="border border-info rounded py-2 px-2 text-sm" name="nilai">
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
                    <input id="nilai" type="number" placeholder="00" min="1" max="100" v-on:keypress="NumbersOnly"  class="border border-info rounded py-2 px-2 text-sm" name="nilai">
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
                    <input id="nilai" type="number" placeholder="00" min="1" max="100" v-on:keypress="NumbersOnly"  class="border border-info rounded py-2 px-2 text-sm" name="nilai">
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
                    <Textarea id="note_nilai" type="textarea" placeholder="Masukkan Catatan" class="input-group border border-info rounded py-2 px-2 text-sm" name="note_nilai"
                      size="md" />
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
// import MaterialInput from "@/components/MaterialInput.vue";
import MaterialButton from "@/components/MaterialButton.vue";
// import MaterialTextarea from "../../../components/MaterialTextarea.vue";
// import { mapMutations } from "vuex";

export default {
  name: "nilai",
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
    }
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