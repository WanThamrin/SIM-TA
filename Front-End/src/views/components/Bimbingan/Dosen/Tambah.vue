<template>
  <div class="container-fluid">
    <div class="page-header min-height-200 border-radius-xl mt-4" style="
    background-image: url('https://t3.ftcdn.net/jpg/02/90/89/76/360_F_290897614_7RdAsk2GmumcGWZ2qklmV74hKlNmznSx.jpg');
    ">
      <span class="mask bg-gradient-info opacity-2"></span>
      <router-link :to="{ name: 'Profile' }" class="btn btn-light mx-4 material-icons me-2" type="button">
        arrow_back</router-link>
    </div>
    <div class="row">
      <div class="col-xxl-12">
        <div class="card card-body mx-3 mx-md-4 mt-n6">
          <div class="card-header align-items-center d-flex">
            <h4 class="card-title mb-0 flex-grow-1">Lengkapi Data</h4>
          </div>
          <!-- end card header -->
          <div class="card-body">
            <p class="text-muted">Form Lengkapi Data Profile</p>
            <div class="live-preview">
              <form @submit.prevent="store()">
                <div class="row mb-3 ">
                  <div class="col-lg-3 my-2">
                    <label for="nameInput" class="form-label">Nama Dosen</label>
                  </div>
                  <div class="text-info col-lg-9 my-1  py-2 px-2 font-weight-bolder">
                    {{ profiles.name }}
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-lg-3 my-2">
                    <label for="nameInput" class="form-label">NIP</label>
                  </div>
                  <div class="text-info col-lg-9 my-1  py-2 px-2 font-weight-bolder">
                    {{ profiles.number }}
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-lg-3 my-2">
                    <label for="nameInput" class="form-label">Note
                      <h2 class="text-danger text-sm">ex. Link Grup WhatsApp Bimbingan</h2>
                    </label>
                  </div>
                  <div class="col-lg-9 my-2">
                    <!-- <input id="status" type="text"  placeholder="Masukkan status"
                      class="input-group border border-info rounded py-2 px-2 text-sm"/>
                     -->
                     <input id="note" type="text" label="" name="note"
                     class="input-group border border-info rounded py-2 px-2 text-sm"  v-model="isDosen.note">
                  </div>
                </div>
                <div class="text-end">
                  <MaterialButton class="mx-3" variant="outline" size="md" type="cancel">Cancel</MaterialButton>
                  <MaterialButton size="md" type="submit">Submit</MaterialButton>
                </div>
              </form>
            </div>
            {{profiles}}
            <div class="d-none code-view"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import axios from 'axios';

import MaterialButton from "@/components/MaterialButton.vue";
// import { mapMutations } from "vuex";

export default {
  name: "tambah-dosen",
  // inject: ['is_admin','is_superadmin','role'],

  data() {
    return {
      profiles: {},
      isDosen : {}
    };
  },

  components: {
    // MaterialInput,
    MaterialButton,
  },

  methods: {
    getNama() {
      let token = localStorage.getItem("token")
      axios.get('http://127.0.0.1:8000/api/me',
        { headers: { "Authorization": `Bearer ${token}` } })
        .then((result) => {
          this.profiles = result.data.data
          this.isDosen = result.data.dosen
          console.log(this.isDosen)
        }).catch((err) => {
          console.log(err.response)
        })
    },

    store() {
      let token = localStorage.getItem("token")
      axios.post(
        'http://127.0.0.1:8000/api/dosen-update-profile',
        this.isDosen,
        { headers: { Authorization: `Bearer ${token}` } })

        .then((result) => {
          console.log(result)
          this.$router.push({
            name: 'Profile'
          })

        }).catch((err) => {
          console.log(err.response.data)
        });
    },

    NumbersOnly(evt) {
      evt = (evt) ? evt : window.event;
      var charCode = (evt.which) ? evt.which : evt.keyCode;
      if ((charCode > 31 && (charCode < 48 || charCode > 57)) && charCode !== 46) {
        evt.preventDefault();;
      } else {
        return true;
      }
    }
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