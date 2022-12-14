<template>
  <div class="container-fluid">
    <div class="page-header min-height-200 border-radius-xl mt-4" style="
     background-image: url('https://images.unsplash.com/photo-1531512073830-ba890ca4eba2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80');
      ">
      <span class="mask bg-gradient-success opacity-6"></span>
      <router-link :to="{ name: 'Penilaian' }" class="btn btn-light mx-4 material-icons me-2" type="button">
        arrow_back</router-link>
    </div>
    <div class="row">
      <div class="col-xxl-12">
        <div class="card card-body mx-3 mx-md-4 mt-n6">
          <div class="card-header align-items-center d-flex">
            <h4 class="card-title mb-0 flex-grow-1">Upload Revisi</h4>
          </div>
          <!-- end card header -->
          <div class="card-body">
            <p class="text-muted">Form Upload Revisi</p>
            <div class="live-preview">
                <div class="row mb-3">
                  <div class="col-lg-3 my-2">
                    <label for="nameInput" class="form-label">Keterangan singkat mengenai Revisi Proposal
                      <h2 class="text-danger text-sm">ex. Revisi Bab 1 ....</h2>
                    </label>
                  </div>
                  <div class="col-lg-9 my-2">
                    <!-- <input id="keyword" type="text" placeholder="Masukkan Keyword" class="input-group border border-info rounded py-2 px-2 text-sm" name="keyword"  :isRequired="true"
                      v-model="Info.keyword" /> -->
                    <h6 class="mb-0 text-md  my-1 ">{{ Revisi.note }}</h6>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-lg-3 my-2">
                    <label for="nameInput" class="form-label">File Tambahan</label>
                  </div>
                  <div class="col-lg-9 my-1">
                    <!-- <input id="file" type="file" class="input-group border border-info rounded py-2 px-2 text-sm"  name="file" :isRequired="true"
                    v-on="Info.file"/> -->
                    <a class="text-md my-2" :href="'http://127.0.0.1:8000/RevProposal/' + Revisi.file" target="_blank">
                      <span><i class="fas fa-file-pdf text-md me-2" aria-hidden="true">PDF</i></span>
                    </a>
                  </div>
                </div>
            </div>
            <!-- <div class="d-none code-view"></div> -->
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
  
<script>
import axios from "axios";
// import $ from 'jquery';

// import MaterialInput from "@/components/MaterialInput.vue";
// import MaterialButton from "@/components/MaterialButton.vue";
// import MaterialTextarea from "@/components/MaterialTextarea.vue";
// import { mapMutations } from "vuex";

export default {
  name: "Revisi-Nilai",
  components: {
    // MaterialInput,
    // MaterialButton,
    // MaterialTextarea
  },
  data() {
    return {
      Revisi: {},
    }
  },
  methods: {
    getRevisi() {
      let token = localStorage.getItem("token")

      axios.get(
        'http://127.0.0.1:8000/api/detail-proposal/' + this.$route.params.id,
        { headers: { Authorization: `Bearer ${token}` } })
        .then((result) => {
          this.Revisi = result.data.data
          console.log(result.data.data)

        }).catch((err) => {
          console.log(err)
        });
    },
  },
  mounted() {
    this.getRevisi()
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