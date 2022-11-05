<template>
  <div class="container-fluid">
    <div class="page-header min-height-200 border-radius-xl mt-4" style="
      background-image: url('https://images.unsplash.com/photo-1537498425277-c283d32ef9db?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nnx8Y29tcHV0ZXJ8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60');
      ">
      <span class="mask bg-gradient-warning opacity-6"></span>
      <router-link :to="{name:'Sempro'}" class="btn btn-light mx-4 material-icons me-2" type="button">
        arrow_back</router-link>
    </div>
    <div class="row">
      <div class="col-xxl-12">
        <div class="card card-body mx-3 mx-md-4 mt-n6">
          <div class="card-header align-items-center d-flex">
            <h4 class="card-title mb-0 flex-grow-1">Edit Daftar Seminar Proposal</h4>
          </div>
          <!-- end card header -->
          <div class="card-body">
            <p class="text-muted">Form Edit Seminar Proposal</p>
            <div class="live-preview">
              <form @submit.prevent="">
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
                          name="Judul TA"
                          size="md"
                        /> -->
                    <h6 class="mb-0 text-md  my-1">SIM-TA</h6>
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
                    <h6 class="mb-0 text-md  my-1">John Michael S.Kom M.Kom</h6>
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
                    <h6 class="mb-0 text-md  my-1">Sisca Sabyan S.Kom M.Kom</h6>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-lg-3 my-2">
                    <label for="nameInput" class="form-label">Dosen Penguji Utama</label>
                  </div>
                  <div class="col-lg-9 my-1">
                    <select v-model="selected" class="border border-info rounded py-2 px-2 text-sm">
                      <option disabled value="">Pilih Salah Satu</option>
                      <option>John Michael</option>
                      <option>Awwwwwwwww</option>
                      <option>Sisca Khol</option>
                      <option class="d-lg-none">aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</option>
                    </select>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-lg-3 my-2">
                    <label for="nameInput" class="form-label">Dosen Penguji Pendamping</label>
                  </div>
                  <div class="col-lg-9 my-1">
                    <select v-model="selected" class="border border-info rounded py-2 px-2 text-sm">
                      <option disabled value="">Pilih Salah Satu</option>
                      <option>John Michael</option>
                      <option>Awwwwwwwww</option>
                      <option>Sisca Khol</option>
                      <option class="d-lg-none">aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</option>
                    </select>
                  </div>
                </div>
                <div class="row justify-content-evenly mb-3">
                  <div class="col-lg-3 my-2">
                    <label for="nameInput" class="form-label ">Jadwal Seminar Proposal</label>
                  </div>
                  <div class="col-lg my-1">
                    <input id="jadwal" type="date" min="today" label="" name="jadwal" size="md"
                      class="border border-info rounded py-2 px-2 text-sm">
                    <!-- <h6 class="mb-0 text-md  my-1">Sisca Sabyan S.Kom M.Kom</h6> -->
                  </div>
                  <div class="col-lg my-2">
                    <label for="nameInput" class="form-label text-danger">Jam Mulai</label>
                  </div>
                  <div class="col-lg my-1">
                    <input id="jadwal" type="time" label="" name="jadwal" size="md"
                      class="border border-info rounded py-2 px-2 text-sm">
                    <!-- <h6 class="mb-0 text-md  my-1">Sisca Sabyan S.Kom M.Kom</h6> -->
                  </div>
                  <div class="col-lg my-2">
                    <label for="nameInput" class="form-label text-danger">Jam Akhir</label>
                  </div>
                  <div class="col-lg my-1">
                    <input id="jadwal" type="time" label="" name="jadwal" size="md"
                      class="border border-info rounded py-2 px-2 text-sm">
                    <!-- <h6 class="mb-0 text-md  my-1">Sisca Sabyan S.Kom M.Kom</h6> -->
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-lg-3 my-2">
                    <label for="nameInput" class="form-label">Status Ruangan</label>
                  </div>
                  <div class="col-lg-8 my-2">
                    <div class="form-check-inline">
                      <input class="form-check-input border border-info py-2 px-2 text-sm" type="radio"
                        name="flexRadioDefault" id="flexRadioDefault1">
                      <label class="form-check-label" for="flexRadioDefault1">
                        Online (Dalam jaringan)
                      </label>
                    </div>
                    <div class="form-check-inline">
                      <input class="form-check-input border border-info py-2 px-2 text-sm" type="radio"
                        name="flexRadioDefault" id="flexRadioDefault2" checked>
                      <label class="form-check-label" for="flexRadioDefault2">
                        Offline (Luar jaringan)
                      </label>
                    </div>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-lg-3 my-2">
                    <label for="nameInput" class="form-label">Keterangan Mengenai Status Ruangan
                      <h2 class="text-danger text-sm">ex. Gedung G202</h2>
                    </label>
                  </div>
                  <div class="col-lg-9 my-2">
                    <input id="Keterangan" type="text" placeholder="Masukkan Keterangan" class="input-group border border-info rounded py-2 px-2 text-sm" name="Keterangan"  :isRequired="true"
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
import MaterialButton from "@/components/MaterialButton.vue";
// import { mapMutations } from "vuex";

export default {
  name: "edit",
  components: {
    // MaterialInput,
    MaterialButton,
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