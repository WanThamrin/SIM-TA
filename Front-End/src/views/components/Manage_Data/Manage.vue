<template>
  <!-- #berkas-berkas mahasiswa yang terdaftar Tugas Akhir -->
  <div class="container-fluid py-4">
    <div class="row">
      <div class="col-12 py-2">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-success shadow-success border-radius-lg pt-4 pb-3">
              <h6 class="text-white text-capitalize ps-3">Daftar Mahasiswa Tugas Akhir</h6>
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
                      keyword
                    </th>
                    <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                      Status
                    </th>

                    <!-- <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                      
                    </th> -->
                    <th class="text-center text-dark opacity-2"></th>
                  </tr>
                </thead>
                <tbody>
                  <!-- v-for="(RegisTA, index) in RegisTAs.data" :key="index" -->
                  <tr v-for="(Final, index) in Finals.data" :key="index">
                    <td>
                      <div class="d-flex px-2 py-1">
                        <div>
                          <img src="@/assets/img/user.jpg" class="avatar avatar-sm me-3 border-radius-lg" alt="user1" />
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm">{{ Final.name }}</h6>
                          <p class="text-sm text-secondary mb-0">
                            {{ Final.email }}
                          </p>
                        </div>
                      </div>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-sm font-weight-normal">{{ Final.number }}</span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-sm font-weight-normal">{{ Final.judul }}</span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-sm font-weight-normal">{{ Final.keyword }}</span>
                    </td>
                    <td class="text-center">
                      <a class="btn btn-link text-dark mb-0" href="javascript:;">
                        <router-link :to="{ name: 'Detail-Data', params: { id: Final.id } }"><i
                            class="fas fa-regular fa-eye text-gradient-dark fa-lg" aria-hidden="true"></i>
                        </router-link>
                      </a>
                      <!-- <a class="btn btn-link text-dark mb-0 " href="javascript:;">
                        <router-link :to="{ name: '' }"><i class="fas fa-pencil-alt text-dark me-0 fa-lg"
                            aria-hidden="true"></i>
                        </router-link>
                      </a> -->
                      <a class="btn btn-link mb-0 " href="javascript:;" @click.prevent="del(Final.id)">
                        <i class="far fa-trash-alt me-0 fa-lg" aria-hidden="true"></i>
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
  <!-- #berkas-berkas mahasiswa -->
  <div class="container-fluid py-4">
    <div class="row align-items-center">
      <div class="">
        <h5>Data Berkas-Berkas Mahasiswa</h5>
        <div class="nav-wrapper position-relative col-lg-4 col-sm-8 mb-4 end-0">
          <ul class="nav nav-pills nav-fill p-1" role="tablist">
            <li class="nav-item">
              <a @click="getFileSempro()" class="nav-link mb-0 px-0 py-1 active active" data-bs-toggle="tab"
                href="#getFile-sempro" role="tab" aria-selected="false">Seminar Proposal</a>
            </li>
            <li class="nav-item">
              <a @click="getFileSidang()" class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#getFile-sidang"
                role="tab" aria-selected="false">Sidang TA</a>
            </li>
          </ul>
        </div>
        <div class="tab-content row my-4">
          <div class="tab-pane card fade show col-12  active my-4" id="getFile-sempro" role="tabpanel"
            aria-labelledby="getFile-sempro">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-light shadow-success border-radius-lg pt-4 pb-3">
                <h6 class="text-dark text-capitalize ps-3 ml-2">Seminar Proposal</h6>
                <!-- <div class="text-end">
                  <router-link :to="{ name: '' }" class="btn btn-info my-0 me-4 py-1 px-2" type="button">
                    <i class="fas fa-file-export m-0 p-0 me-2"></i> Export Data
                  </router-link>
                </div> -->
              </div>

            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive  p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                        Nama Mahasiswa
                      </th>
                      <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                        Judul TA
                      </th>
                      <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-5"> Action
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr v-for="(Sempro, index) in Sempros.data" :key="index">
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="@/assets/img/user.jpg" class="avatar avatar-sm me-3 border-radius-lg"
                              alt="user2" />
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{ Sempro.user.name }}</h6>
                            <p class="text-sm text-secondary mb-0">
                              {{ Sempro.user.number }}
                            </p>
                          </div>
                        </div>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-sm font-weight-normal">{{ Sempro.t_a.keyword }}</span>
                        <!-- <span v-if="Sempro.t_a.keyword == null"
                        class="badge badge-sm bg-gradient-light text-dark">-</span> -->
                      </td>
                      <!-- , params: { id: Sempro.id } -->
                      <td class="text-center">
                        <a class="btn btn-link text-dark mb-0" href="javascript:;" data-bs-toggle="modal"
                          data-bs-target="#Berkas">
                          <!-- Button trigger modal -->
                          <router-link :to="{ name: '', params: { id: Sempro.id } }"><i
                              class="fas fa-eye text-dark me-0 fa-lg" aria-hidden="true"></i>
                          </router-link>
                        </a>
                        <a class="btn btn-link text-dark mb-0 " href="javascript:;">
                          <router-link :to="{ name: 'EditSempro', params: { id: Sempro.id } }"><i class="fas fa-pencil-alt text-dark me-0 fa-lg"
                              aria-hidden="true"></i>
                          </router-link>
                        </a>
                        <a class="btn btn-link mb-0 " href="javascript:;">
                          <i class="far fa-trash-alt me-0 fa-lg" aria-hidden="true"></i>
                        </a>
                      </td>
                    </tr>
                    <!-- Modal -->
                    <div class="modal fade" id="Berkas" tabindex="-1" aria-labelledby="BerkasLabel" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="BerkasLabel">Modal title</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <div class="live-preview">
                              
                                <div class="row mb-3 ">
                                  <div class="col-lg-3 my-2">
                                    <label for="nameInput" class="form-label">Nama Mahasiswa</label>
                                  </div>
                                  <div class="text-info col-lg-9 my-1  py-2 px-2 font-weight-bolder">
                                    {{Sempros.name}}
                                  </div>
                                </div>
                                <div class="row mb-3">
                                  <div class="col-lg-3 my-2">
                                    <label for="nameInput" class="form-label">NIM</label>
                                  </div>
                                  <div class="text-info col-lg-9 my-1  py-2 px-2 font-weight-bolder">

                                  </div>
                                </div>
                                <div class="row mb-3">
                                  <div class="col-lg-3 my-2">
                                    <label for="nameInput" class="form-label">Proposal</label>
                                  </div>
                                  <div class="col-lg-9 my-1">
                                    <button class="btn btn-link" onclick="window.open()">
                                      <span><i class="fas fa-file-pdf text-md me-2"
                                          aria-hidden="true"><br />PDF</i></span>
                                      <!-- {{ DocSemhas.file ? DocSemhas.file.name : '' }} -->
                                    </button>
                                  </div>
                                </div>
                                <div class="row mb-3">
                                  <div class="col-lg-3 my-2">
                                    <label for="nameInput" class="form-label">Slide Presentasi / Poster</label>
                                  </div>
                                  <div class="col-lg-9 my-1">
                                    <button class="btn btn-link" onclick="window.open()">
                                      <span><i class="fas fa-file-pdf text-md me-2"
                                          aria-hidden="true"><br />PDF</i></span>
                                      <!-- {{ DocSemhas.file ? DocSemhas.file.name : '' }} -->
                                    </button>
                                  </div>
                                </div>
                                <div class="row mb-3">
                                  <div class="col-lg-3 my-2">
                                    <label for="nameInput" class="form-label">Persetujuan Dosen Pembimbing Utama</label>
                                  </div>
                                  <div class="col-lg-9 my-1">
                                    <button class="btn btn-link" onclick="window.open()">
                                      <span><i class="fas fa-file-pdf text-md me-2"
                                          aria-hidden="true"><br />PDF</i></span>
                                      <!-- {{ DocSemhas.file ? DocSemhas.file.name : '' }} -->
                                    </button>
                                  </div>
                                </div>
                                <div class="row mb-3">
                                  <div class="col-lg-3 my-2">
                                    <label for="nameInput" class="form-label">Persetujuan Dosen Pembimbing
                                      Pendamping</label>
                                  </div>
                                  <div class="col-lg-9 my-1">
                                    <button class="btn btn-link" onclick="window.open()">
                                      <span><i class="fas fa-file-pdf text-md me-2"
                                          aria-hidden="true"><br />PDF</i></span>
                                      <!-- {{ DocSemhas.file ? DocSemhas.file.name : '' }} -->
                                    </button>
                                  </div>
                                </div>
                             
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class=" tab-pane card col-12 my-4" id="getFile-sidang" role="tabpanel" aria-labelledby="getFile-sidang">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-light shadow-success border-radius-lg pt-4 pb-3">
                <h6 class="text-dark text-capitalize ps-3 ml-2">Data Berkas Sidang </h6>
                <!-- <div class="text-end">
                  <router-link :to="{ name: '' }" class="btn btn-info my-0 me-4 py-1 px-2" type="button">
                    <i class="fas fa-file-export m-0 p-0 me-2"></i> Export Data
                  </router-link>
                </div> -->
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
                        Judul TA
                      </th>
                      <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-5"> Action
                      </th>
                      <!-- <th class="text-dark opacity-2"></th> -->
                    </tr>
                  </thead>
                  <tbody>
                    <tr v-for="(Sidang, index) in Sidangs.data" :key="index">
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="@/assets/img/user.jpg" class="avatar avatar-sm me-3 border-radius-lg"
                              alt="user2" />
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{ Sidang.user.name }}</h6>
                            <p class="text-sm text-secondary mb-0">
                              {{ Sidang.user.number }}
                            </p>
                          </div>
                        </div>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-sm font-weight-normal">{{ Sidang.t_a.keyword }}</span>
                        <!-- <span v-if="Sidang.t_a.keyword == null"
                        class="badge badge-sm bg-gradient-light text-dark">-</span> -->
                      </td>
                      <!-- !-- , params: { id: Sempro.id } -->
                      <td class="text-center">
                        <a class="btn btn-link text-dark mb-0" href="javascript:;" data-bs-toggle="modal"
                          data-bs-target="#BerkasSidang">
                          <!-- Button trigger modal -->
                          <router-link :to="{ name: '', params: { id: Sidang.id } }"><i
                              class="fas fa-eye text-dark me-0 fa-lg" aria-hidden="true"></i>
                          </router-link>
                        </a>
                        <a class="btn btn-link text-dark mb-0 " href="javascript:;">
                          <router-link :to="{ name: '' }"><i class="fas fa-pencil-alt text-dark me-0 fa-lg"
                              aria-hidden="true"></i>
                          </router-link>
                        </a>
                        <a class="btn btn-link mb-0 " href="javascript:;">
                          <i class="far fa-trash-alt me-0 fa-lg" aria-hidden="true"></i>
                        </a>
                      </td>
                    </tr>
                    <!-- Modal -->
                    <div class="modal fade" id="BerkasSidang" tabindex="-1" aria-labelledby="BerkasSidangLabel"
                      aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="BerkasLabel">Berkas Sidang Mahasiswa </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <div class="live-preview">
                              <form @submit.prevent="">
                                <div class="row mb-3 ">
                                  <div class="col-lg-3 my-2">
                                    <label for="nameInput" class="form-label">Nama Mahasiswa</label>
                                  </div>
                                  <div class="text-info col-lg-9 my-1  py-2 px-2 font-weight-bolder">

                                  </div>
                                </div>
                                <div class="row mb-3">
                                  <div class="col-lg-3 my-2">
                                    <label for="nameInput" class="form-label">NIM</label>
                                  </div>
                                  <div class="text-info col-lg-9 my-1  py-2 px-2 font-weight-bolder">

                                  </div>
                                </div>
                                <div class="row mb-3">
                                  <div class="col-lg-3 my-2">
                                    <label for="nameInput" class="form-label">Laporan Tugas Akhir</label>
                                  </div>
                                  <div class="col-lg-9 my-1">
                                    <button class="btn btn-link" onclick="window.open()">
                                      <span><i class="fas fa-file-pdf text-md me-2"
                                          aria-hidden="true"><br />PDF</i></span>
                                      <!-- {{ DocSemhas.file ? DocSemhas.file.name : '' }} -->
                                    </button>
                                  </div>
                                </div>
                                <div class="row mb-3">
                                  <div class="col-lg-3 my-2">
                                    <label for="nameInput" class="form-label">Lembar Konsultasi Bimbingan
                                      <h2 class="text-danger text-sm">Form. TA-006</h2>
                                    </label>
                                  </div>
                                  <div class="col-lg-9 my-1">
                                    <button class="btn btn-link" onclick="window.open()">
                                      <span><i class="fas fa-file-pdf text-md me-2"
                                          aria-hidden="true"><br />PDF</i></span>
                                      <!-- {{ DocSemhas.file ? DocSemhas.file.name : '' }} -->
                                    </button>
                                  </div>
                                </div>
                                <div class="row mb-3">
                                  <div class="col-lg-3 my-2">
                                    <label for="nameInput" class="form-label">Formulir Persetujuan Sidang
                                      <h2 class="text-danger text-sm">Form. TA-007</h2>
                                    </label>
                                  </div>
                                  <div class="col-lg-9 my-1">
                                    <button class="btn btn-link" onclick="window.open()">
                                      <span><i class="fas fa-file-pdf text-md me-2"
                                          aria-hidden="true"><br />PDF</i></span>
                                      <!-- {{ DocSemhas.file ? DocSemhas.file.name : '' }} -->
                                    </button>
                                  </div>
                                </div>
                                <div class="row mb-3">
                                  <div class="col-lg-3 my-2">
                                    <label for="nameInput" class="form-label">Formulir Permohonan Sidang
                                      <h2 class="text-danger text-sm">Form. TA-008</h2>
                                    </label>
                                  </div>
                                  <div class="col-lg-9 my-1">
                                    <button class="btn btn-link" onclick="window.open()">
                                      <span><i class="fas fa-file-pdf text-md me-2"
                                          aria-hidden="true"><br />PDF</i></span>
                                      <!-- {{ DocSemhas.file ? DocSemhas.file.name : '' }} -->
                                    </button>
                                  </div>
                                </div>
                                <div class="row mb-3">
                                  <div class="col-lg-3 my-2">
                                    <label for="nameInput" class="form-label">Formulir Kehadiran Seminar Proposal
                                      <h2 class="text-danger text-sm">Form. TA-012</h2>
                                    </label>
                                  </div>
                                  <div class="col-lg-9 my-1">
                                    <button class="btn btn-link" onclick="window.open()">
                                      <span><i class="fas fa-file-pdf text-md me-2"
                                          aria-hidden="true"><br />PDF</i></span>
                                      <!-- {{ DocSemhas.file ? DocSemhas.file.name : '' }} -->
                                    </button>
                                  </div>
                                </div>
                                <div class="row mb-3">
                                  <div class="col-lg-3 my-2">
                                    <div class="col-lg-3 my-2">
                                      <label for="nameInput" class="form-label">BUKTI TANDA TERIMA PENDAFTARAN SIDANG
                                        <h2 class="text-danger text-sm">Form. TA-009</h2>
                                      </label>
                                    </div>
                                    <div class="col-lg-9 my-1">
                                      <button class="btn btn-link" onclick="window.open()">
                                        <span><i class="fas fa-file-pdf text-md me-2"
                                            aria-hidden="true"><br />PDF</i></span>
                                        <!-- {{ DocSemhas.file ? DocSemhas.file.name : '' }} -->
                                      </button>
                                    </div>
                                  </div>
                                </div>
                              </form>
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- #Data Jadwal mahasiswa -->
  <div class="container-fluid py-4">
    <div class="row align-items-center">
      <div class="">
        <h5>Data Jadwal Mahasiswa</h5>
        <div class="nav-wrapper position-relative col-lg-4 col-sm-8 mb-4 end-0">
          <ul class="nav nav-pills nav-fill p-1" role="tablist">
            <li class="nav-item">
              <a @click="getSempro()" class="nav-link mb-0 px-0 py-1 active active" data-bs-toggle="tab"
                href="#get-sempro" role="tab" aria-selected="false">Seminar Proposal</a>
            </li>
            <li class="nav-item">
              <a @click="getSidang()" class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#get-sidang" role="tab"
                aria-selected="false">Sidang TA</a>
            </li>
          </ul>
        </div>
        <div class="tab-content row my-4">
          <div class="tab-pane card fade show col-12  active my-4" id="get-sempro" role="tabpanel"
            aria-labelledby="get-sempro">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-light shadow-success border-radius-lg pt-4 pb-3">
                <h6 class="text-dark text-capitalize ps-3 ml-2">Data Jadwal Seminar Proposal Mahasiswa</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive  p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                        Nama Mahasiswa
                      </th>
                      <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                        Judul TA
                      </th>
                      <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                        Jadwal
                      </th>
                      <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                        Status
                      </th>
                      <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-5"> Action
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr v-for="(Sempro, index) in Sempros.data" :key="index">
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="@/assets/img/user.jpg" class="avatar avatar-sm me-3 border-radius-lg"
                              alt="user2" />
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{ Sempro.user.name }}</h6>
                            <p class="text-sm text-secondary mb-0">
                              {{ Sempro.user.number }}
                            </p>
                          </div>
                        </div>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-sm font-weight-normal">{{ Sempro.t_a.keyword }}</span>
                        <!-- <span v-if="Sempro.t_a.keyword == null"
                        class="badge badge-sm bg-gradient-light text-dark">-</span> -->
                      </td>

                      <td class="align-middle text-center">
                        <span class="badge badge-sm bg-gradient-light text-dark"
                          v-if="Sempro.user.jadwal_sempro === null">-</span>
                        <span class="badge badge-sm bg-gradient-light text-dark" v-else>{{
                            Sempro.user.jadwal_sempro.hari
                        }} ({{ Sempro.user.jadwal_sempro.jam_mulai }}-{{
    Sempro.user.jadwal_sempro.jam_akhir
}})</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="badge badge-sm bg-gradient-light text-dark"
                          v-if="Sempro.user.jadwal_sempro === null">-</span>
                        <span class="badge badge-sm bg-gradient-light text-dark" v-else>{{
                            Sempro.user.jadwal_sempro.type
                        }} ({{ Sempro.user.jadwal_sempro.ruangan }})</span>
                      </td>
                      <td class="text-center">
                        <a class="btn btn-link text-dark mb-0" href="javascript:;">
                          <router-link :to="{ name: 'JadSempro', params: { id: Sempro.id } }"><i
                              class="fas fa-calendar fa-lg" aria-hidden="true"></i>
                          </router-link>
                        </a>
                        <a class="btn btn-link text-dark mb-0 " href="javascript:;">
                          <router-link :to="{ name: '' }"><i class="fas fa-pencil-alt text-dark me-0 fa-lg"
                              aria-hidden="true"></i>
                          </router-link>
                        </a>
                        <a class="btn btn-link mb-0 " href="javascript:;">
                          <i class="far fa-trash-alt me-0 fa-lg" aria-hidden="true"></i>
                        </a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class=" tab-pane card col-12 my-4" id="get-sidang" role="tabpanel" aria-labelledby="get-sidang">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-light shadow-success border-radius-lg pt-4 pb-3">
                <h6 class="text-dark text-capitalize ps-3 ml-2">Data Jadwal Sidang Mahasiswa</h6>

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
                        Judul TA
                      </th>
                      <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                        Jadwal
                      </th>
                      <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                        Status
                      </th>
                      <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-5"> Action
                      </th>
                      <!-- <th class="text-dark opacity-2"></th> -->
                    </tr>
                  </thead>
                  <tbody>
                    <tr v-for="(Sidang, index) in Sidangs.data" :key="index">
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="@/assets/img/user.jpg" class="avatar avatar-sm me-3 border-radius-lg"
                              alt="user2" />
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{ Sidang.user.name }}</h6>
                            <p class="text-sm text-secondary mb-0">
                              {{ Sidang.user.number }}
                            </p>
                          </div>
                        </div>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-sm font-weight-normal">{{ Sidang.t_a.keyword }}</span>
                        <!-- <span v-if="Sidang.t_a.keyword == null"
                        class="badge badge-sm bg-gradient-light text-dark">-</span> -->
                      </td>
                      <td class="align-middle text-center">
                        <span class="badge badge-sm bg-gradient-light text-dark"
                          v-if="Sidang.user.jadwal_semhas === null">-</span>
                        <span class="badge badge-sm bg-gradient-light text-dark" v-else>{{
                            Sidang.user.jadwal_semhas.hari
                        }} ({{ Sidang.user.jadwal_semhas.jam_mulai }}-{{
    Sidang.user.jadwal_semhas.jam_akhir
}})</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="badge badge-sm bg-gradient-light text-dark"
                          v-if="Sidang.user.jadwal_semhas === null">-</span>
                        <span class="badge badge-sm bg-gradient-light text-dark" v-else>{{
                            Sidang.user.jadwal_semhas.type
                        }} ({{ Sidang.user.jadwal_semhas.ruangan }})</span>
                      </td>
                      <td class="text-center">
                        <a class="btn btn-link text-dark mb-0" href="javascript:;">
                          <router-link :to="{ name: 'CreateSidang', params: { id: Sidang.id } }"><i
                              class="fas fa-calendar text-gradient-dark fa-lg" aria-hidden="true"></i>
                          </router-link>
                        </a>
                        <a class="btn btn-link text-dark mb-0 " href="javascript:;">
                          <router-link :to="{ name: '' }"><i class="fas fa-pencil-alt text-dark me-0 fa-lg"
                              aria-hidden="true"></i>
                          </router-link>
                        </a>
                        <a class="btn btn-link mb-0 " href="javascript:;">
                          <i class="far fa-trash-alt me-0 fa-lg" aria-hidden="true"></i>
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
  </div>
</template>
  
<script>
import axios from 'axios';

import setNavPills from "@/assets/js/nav-pills.js";

export default {
  name: "ManageData",
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
          dosen4: {},

        }

      },
      Finals: {},

      FileSempros: {},

      Sidangs: {
        user: {},
        t_a: {}
      },

      Berkas:{}
    }

  },

  methods: {
    getSempro() {
      let token = localStorage.getItem("token")
      axios.get('http://127.0.0.1:8000/api/sempro',
        { headers: { Authorization: `Bearer ${token}` } })
        .then((result) => {
          this.Sempros = result.data,
            console.log(this.Sempros)
        }).catch((err) => {
          console.log(err.response)

        })
    },

    // getBerkas() {
    //   let token = localStorage.getItem("token")
    //   axios.get('http://127.0.0.1:8000/api/sempro/'+id,
    //     { headers: { Authorization: `Bearer ${token}` } })
    //     .then((result) => {
    //       this.Berkas = result.data,
    //         console.log(this.Berkas)
    //     }).catch((err) => {
    //       console.log(err.response)

    //     })
    // },

    getFinal() {
      let token = localStorage.getItem("token")
      axios.get('http://127.0.0.1:8000/api/get-data',
        { headers: { Authorization: `Bearer ${token}` } })
        .then((result) => {
          this.Finals = result.data,
            console.log(this.Finals)
        }).catch((err) => {
          console.log(err.response)

        })
    },

    getDokumen() {
      let token = localStorage.getItem("token")
      axios.get('http://127.0.0.1:8000/api/sempro/' + this.$route.params.id,
        { headers: { Authorization: `Bearer ${token}` } })
        .then((result) => {
          this.FileSempros = result.data.data
          console.log(this.FileSempros)
        }).catch((err) => {
          console.log(err.response)

        })
    },
    getSidang() {
      let token = localStorage.getItem("token")
      axios.get('http://127.0.0.1:8000/api/semhas',
        { headers: { Authorization: `Bearer ${token}` } })
        .then((result) => {
          this.Sidangs = result.data,
            console.log(this.Sidangs)
        }).catch((err) => {
          console.log(err.response)

        })
    },

    del(id) {
      let token = localStorage.getItem("token")
      axios.delete(
        'http://127.0.0.1:8000/api/get-data/' + id,
        { headers: { Authorization: `Bearer ${token}` } })
        .then(() => {
          this.Finals.value.splice(this.Finals.value.indexOf(id), 1);
          this.del()
          this.$router.go()
        }).catch((err) => {
          console.log(err.response.data);
        });
    }
  },
  mounted() {
    this.getSempro()
    this.getSidang()
    this.getFinal()
    // this.getSupDosen()

    setNavPills();
  }
};
</script>

  