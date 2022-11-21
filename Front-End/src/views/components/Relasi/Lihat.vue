<template>
  <div class="container-fluid">
    <div class="page-header min-height-200 border-radius-xl mt-4" style="
          background-image: url('https://images.unsplash.com/photo-1531512073830-ba890ca4eba2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80');
        ">
      <span class="mask bg-gradient-success opacity-6"></span>
      <router-link :to="{name:'Relasi'}" class="btn btn-light mx-4 material-icons me-2" type="button">
        arrow_back</router-link>
    </div>
    <div class="card card-body mx-3 mx-md-4 mt-n6">
      <div class="row gx-4">
        <div class="col-auto">
          <div class="" style="width: 150px">
            <img src="@/assets/img/bruce-mars.jpg" alt="profile_image" class="shadow-sm w-100 border-radius-lg" />
          </div>
        </div>
        <div class="col-auto my-auto">
          <div class="h-100">
            <h5 class="mb-1">Richard Davis S.Kom,M.Kom</h5>
            <p class="mb-0 font-weight-normal text-sm"> Dosen Informatika </p>
            <h6 class="mb-1">Sertifikasi A</h6>
          </div>
        </div>
      </div>
    </div>
    <div class="row align-items-center mt-4">
      <div class="col-lg-4 col-sm-8">
        <div class="nav-wrapper position-relative end-0">
          <ul class="p-1 nav nav-pills nav-fill" role="tablist">
            <li class="nav-item">
              <a class="px-0 py-1 mb-0 nav-link active" data-bs-toggle="tab" href="javascript:;" role="tab"
                aria-selected="true">

                <span class="ms-1">Pembimbing I</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="px-0 py-1 mb-0 nav-link" data-bs-toggle="tab" href="javascript:;" role="tab"
                aria-selected="false">
                <span class="ms-1">Pembimbing II</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="px-0 py-1 mb-0 nav-link" data-bs-toggle="tab" href="javascript:;" role="tab"
                aria-selected="false">
                <span class="ms-1">Penguji I</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="px-0 py-1 mb-0 nav-link" data-bs-toggle="tab" href="javascript:;" role="tab"
                aria-selected="false">
                <span class="ms-1">Penguji II</span>
              </a>
            </li>
          </ul>

        </div>

      </div>
    </div>
    <div class="row">
      <div class="col-12 py-2">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-success shadow-success border-radius-lg pt-4 pb-3">
              <h6 class="text-white text-capitalize ps-3">Daftar Mahasiswa Bimbingan</h6>
              <div class="text-end">
                <router-link :to="{name:'/'}" class="btn btn-info my-0 me-4 py-1 px-2" type="button">
                  <i class="fas fa-plus m-0 p-0 me-2"></i> Tambah Mahasiswa
                </router-link>
              </div>
            </div>

          </div>
          <div class="card-body px-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                      Nama Mahasiswa
                    </th>
                    <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                      NIM
                    </th>
                    <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                      Judul TA
                    </th>
                    <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                      Status
                    </th>
                    <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-5">
                      Action
                    </th>
                    
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <div class="d-flex px-2 py-1">
                        <div>
                          <img src="@/assets/img/team-2.jpg" class="avatar avatar-sm me-3 border-radius-lg"
                            alt="user1" />
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm">John Michael</h6>
                          <p class="text-sm text-secondary mb-0">
                            john@student.co.id
                          </p>
                        </div>
                      </div>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-sm font-weight-normal">11181074</span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-sm font-weight-normal">SIM-TA</span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="badge badge-sm bg-gradient-light text-dark">Seminar Hasil</span>
                    </td>
                    <!-- <td class="align-middle text-center">
                      <span class="text-info text-sm font-weight-medium">23/08/2022</span>
                    </td> -->
                    <td class="text-center">
                      <a class="btn btn-link mb-0 px-0" href="javascript:;">
                        <i class="fas fa-trash fa-lg ml-2" aria-hidden="true"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="d-flex px-2 py-1">
                        <div>
                          <img src="@/assets/img/team-3.jpg" class="avatar avatar-sm me-3 border-radius-lg"
                            alt="user2" />
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm">Sisca Khol</h6>
                          <p class="text-sm text-secondary mb-0">
                            sisca@student.itk.ac.id
                          </p>
                        </div>
                      </div>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-sm font-weight-normal">11181090</span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-sm font-weight-normal">Cyber Security</span>
                    </td>
                    <!-- <td class="align-middle text-center">
                      <span class="badge badge-sm bg-gradient-light text-dark">-</span>
                    </td> -->
                    <td class="align-middle text-center">
                      <span class="badge badge-sm bg-gradient-light text-dark">Seminar Proposal</span>
                    </td>
                         <td class="text-center">
                      <a class="btn btn-link mb-0 px-0" href="javascript:;">
                        <i class="fas fa-trash fa-lg ml-2" aria-hidden="true"></i>
                      </a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
  
<script>
import setNavPills from "@/assets/js/nav-pills.js";
export default {
  name: "Lihat",
  mounted() {
    setNavPills();
  },
};
</script>
  