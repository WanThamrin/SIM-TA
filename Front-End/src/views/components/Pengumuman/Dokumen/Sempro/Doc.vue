<template>
  <div class="container-fluid">
    <div class="page-header min-height-200 border-radius-xl mt-4" style="
      background-image: url('https://images.unsplash.com/photo-1531512073830-ba890ca4eba2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80');
      ">
      <span class="mask bg-gradient-success opacity-6"></span>
      <router-link :to="{name:'Notifications'}" class="btn btn-light mx-4 material-icons me-2" type="button">
        arrow_back</router-link>
    </div>
    <div class="row">
      <div class="col-xxl-12">
        <div class="card card-body mx-3 mx-md-4 mt-n6">
          <div class="card-header align-items-center d-flex">
            <h4 class="card-title mb-0 flex-grow-1">Daftar Dokumen</h4>
          </div>
          <!-- end card header -->
          <div class="card-body">
            <p class="text-muted">Form Daftar Dokumen</p>
            <div class="live-preview">
              <form @submit.prevent="store()">
                <div class="row mb-3 ">
                  <div class="col-lg-3 my-2">
                    <label for="nameInput" class="form-label">Judul Dokumen
                      <h2 class="text-danger text-sm">ex. Persetujuan Dosen Pembimbing</h2>
                    </label>
                  </div>
                  <div class="col-lg-9 my-1">
                    <input id="judul" type="text" placeholder="Masukkan Judul Dokumen" class="input-group border border-info rounded py-2 px-2 text-sm" name="nama_riset" :isRequired="true"
                      v-model="DocSempro.judul" />
                      
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-lg-3 my-2">
                    <label for="nameInput" class="form-label">Keyword
                      <h2 class="text-danger text-sm">ex. Form A1</h2>
                    </label>
                  </div>
                  <div class="col-lg-9 my-2">
                    <input id="keyword" type="text" placeholder="Masukkan Keyword" class="input-group border border-info rounded py-2 px-2 text-sm" name="keyword"  :isRequired="true"
                      v-model="DocSempro.keyword" />
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-lg-3 my-2">
                    <label for="nameInput" class="form-label">File Tambahan</label>
                  </div>
                  <div class="col-lg-9 my-1">
                    <input id="file" type="file" class="input-group border border-info rounded py-2 px-2 text-sm"  name="file" :isRequired="true"
                    @change="fileChange($event, 'file')"/>
                  </div>
                </div>
                <!-- <div class="row mb-3">
                  <div class="col-lg-3 my-2">
                    <label for="nameInput" class="form-label">Keterangan singkat mengenai Dokumen
                      <h2 class="text-danger text-sm">ex. Pembukaan Pendaftaran Seminar Proposal ....</h2>
                    </label>
                  </div>
                  <div class="col-lg-9 my-1">
                    <textarea id="note" type="textarea" placeholder="Masukkan Keterangan" class="input-group border border-info rounded py-2 px-2 text-sm" name="note"  :isRequired="true"
                      v-model="Doc.note" />
                  </div>
                </div> -->
                <div class="text-end">
                  <MaterialButton class="mx-3" variant="outline" size="md" type="cancel">Cancel</MaterialButton>
                  <MaterialButton size="md" type="submit">Submit</MaterialButton>
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
import Swal from 'sweetalert2';
import axios from "axios";
import $ from 'jquery';

// import MaterialInput from "@/components/MaterialInput.vue";
import MaterialButton from "@/components/MaterialButton.vue";
// import MaterialTextarea from "@/components/MaterialTextarea.vue";
// import { mapMutations } from "vuex";

export default {
  name: "Doc-Sempro",
  components: {
    // MaterialInput,
    MaterialButton,
    // MaterialTextarea
  },
  data() {
    return {
      DocSempro: {},
    }
  },
  methods: {
    store() {
      const fd = new FormData();
      $.each(this.DocSempro, function (key, value) {
        fd.append(key, value);
      });

      axios.post(
        'http://127.0.0.1:8000/api/doc-sempro',
        fd, {
        headers: {
          'Content-Type': 'multipart/form-data'
        }
      })
        .then(() => {
          this.$router.push({
            name: 'Notifications'
          })
          Swal.fire(
            'Form Berkas akan di Publish',
            'success')

        }).catch((err) => {
          console.log(err.response.data)
        });
    },
    fileChange(event, name) {
      if (event) {
        $('.preview_' + name).attr('src', URL.createObjectURL(event.target.files[0]));
      }
      this.DocSempro[name] = event.target.files[0];
    },
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