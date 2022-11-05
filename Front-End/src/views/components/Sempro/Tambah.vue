<template>
  <div class="container-fluid">
    <div class="page-header min-height-200 border-radius-xl mt-4" style="
      background-image: url('https://images.unsplash.com/photo-1531512073830-ba890ca4eba2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80');
      ">
      <span class="mask bg-gradient-success opacity-6"></span>
      <router-link :to="{name:'Sempro'}" class="btn btn-light mx-4 material-icons me-2" type="button">
        arrow_back</router-link>
    </div>
    <div class="row">
      <div class="col-xxl-12">
        <div class="card card-body mx-3 mx-md-4 mt-n6">
          <div class="card-header align-items-center d-flex">
            <h4 class="card-title mb-0 flex-grow-1">Daftar Sempro</h4>
          </div>
          <!-- end card header -->
          <div class="card-body">
            <p class="text-muted">Form Daftar Sempro</p>
            <div class="live-preview">
              <form @submit.prevent="">
                <div class="row mb-3 ">
                  <div class="col-lg-3 my-2">
                    <label for="nameInput" class="form-label">Nama Mahasiswa</label>
                  </div>
                  <div class="col-lg-9 my-1">
                    <input id="name" type="text" placeholder="Masukkan Nama Mahasiswa"
                      class="input-group border border-info rounded py-2 px-2 text-sm" name="name" size="md" Required />
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-lg-3 my-2">
                    <label for="nameInput" class="form-label">NIM</label>
                  </div>
                  <div class="col-lg-9 my-1">
                    <input id="nim" type="text" v-on:keypress="NumbersOnly" placeholder="Masukkan NIM"
                      class="input-group border border-info rounded py-2 px-2 text-sm" name="nim" size="md" />
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-lg-3 my-2">
                    <label for="nameInput" class="form-label">Proposal</label>
                  </div>
                  <div class="col-lg-9 my-1">
                    <input id="name" type="file" label="" name="proposal"
                      class="input-group border border-info rounded py-2 px-2 text-sm" size="md" />
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-lg-3 my-2">
                    <label for="nameInput" class="form-label">Slide Presentasi / Poster</label>
                  </div>
                  <div class="col-lg-9 my-1">
                    <input id="slide" type="file" label="" name="slide"
                      class="input-group border border-info rounded py-2 px-2 text-sm" size="md" />
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-lg-3 my-2">
                    <label for="nameInput" class="form-label">Persetujuan Dosen Pembimbing Utama</label>
                  </div>
                  <div class="col-lg-9 my-1">
                    <input id="berkas1" type="file" label=""
                      class="input-group border border-info rounded py-2 px-2 text-sm" name="Berkas1" size="md" />
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-lg-3 my-2">
                    <label for="nameInput" class="form-label">Persetujuan Dosen Pembimbing Pendamping</label>
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
// import { mapMutations } from "vuex";

export default {
  name: "tambah",
  components: {
    // MaterialInput,
    MaterialButton,
  },

  // var demo = new Vue({
  // el: '#demo',
  // //data: data,
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