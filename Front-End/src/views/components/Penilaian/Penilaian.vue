<template>
  <div class="container-fluid py-4">
    <div class="row align-items-center">
      <div class="col-lg-4 col-sm-8">
        <div class="nav-wrapper position-relative end-0">
          <ul class="nav nav-pills nav-fill p-1" role="tablist">
            <li class="nav-item">
              <a class="nav-link mb-0 px-0 py-1 active active" data-bs-toggle="tab" href="#sempro" role="tab"
                aria-selected="true">Seminar Proposal</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#semhas" role="tab"
                aria-selected="false">Seminar Hasil</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="row my-4">
      <div class="tab-content col-12">
        <div class="tab-pane active fade show card my-4" id="sempro" role="tabpanel">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-info shadow-success border-radius-lg pt-4 pb-3">
              <h6 class="text-white text-capitalize ps-3">Data Mahasiswa Seminar Proposal</h6>
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
                      Pembimbing I
                    </th>
                    <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                      Pembimbing II
                    </th>
                    <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                      Penguji I
                    </th>
                    <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                      Penguji II
                    </th>
                    <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                      Jadwal
                    </th>
                    <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-5"> </th>
                    <th class="text-dark opacity-2"></th>
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
                            11181050
                          </p>
                        </div>
                      </div>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-sm font-weight-medium">SIM-TA</span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-sm font-weight-bold">John Michael S.Kom M.Kom</span>
                    </td>
                    <td class="align-middle text-center text-sm">
                      <span class="text-sm font-weight-bold">Sisca Sabyan S.Kom M.Kom</span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-sm font-weight-bold">John Michael S.Kom M.Kom</span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-sm font-weight-bold">Sisca Sabyan S.Kom M.Kom</span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-sm font-weight-medium">21/06/2020 (13.00-16.00)</span>
                    </td>
                    <td class="align-item-center">
                      <a class="btn btn-link text-dark mb-0 px-0 ms-4" href="javascript:;">
                        <router-link :to="{ name: 'Nilai' }"><i
                            class="fas fa-duotone fa-hashtag text-success me-0 fa-lg me-2" aria-hidden="true"></i>NILAI
                        </router-link>
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
                            11191050
                          </p>
                        </div>
                      </div>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-sm font-weight-normal">Cyber Security</span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-sm font-weight-bold">John Michael S.Kom M.Kom</span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-sm font-weight-bold">Sisca Sabyan S.Kom M.Kom</span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-sm font-weight-bold">John Michael S.Kom M.Kom</span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-sm font-weight-bold">Sisca Sabyan S.Kom M.Kom</span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-sm font-weight-medium">21/06/2020 (13.00-16.00)</span>
                    </td>
                    <td class="align-item-center">
                      <a class="btn btn-link text-dark mb-0 px-0 ms-4" href="javascript:;">
                        <router-link :to="{ name: 'Nilai' }"><i
                            class="fas fa-duotone fa-hashtag text-primary me-0 fa-lg me-2" aria-hidden="true"></i>NILAI
                        </router-link>
                      </a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="tab-pane fade show card my-4" id="semhas" role="tabpanel">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-info shadow-success border-radius-lg pt-4 pb-3">
              <h6 class="text-white text-capitalize ps-3">Data Mahasiswa Seminar Hasil</h6>
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
                      Pembimbing I
                    </th>
                    <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                      Pembimbing II
                    </th>
                    <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                      Penguji I
                    </th>
                    <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                      Penguji II
                    </th>
                    <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                      Jadwal
                    </th>
                    <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-5"> </th>
                    <th class="text-dark opacity-2"></th>
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
                          <h6 class="mb-0 text-sm">John AWWWW</h6>
                          <p class="text-sm text-secondary mb-0">
                            11181050
                          </p>
                        </div>
                      </div>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-sm font-weight-medium">SIM-TA</span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-sm font-weight-bold">John Michael S.Kom M.Kom</span>
                    </td>
                    <td class="align-middle text-center text-sm">
                      <span class="text-sm font-weight-bold">Sisca Sabyan S.Kom M.Kom</span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-sm font-weight-bold">John Michael S.Kom M.Kom</span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-sm font-weight-bold">Sisca Sabyan S.Kom M.Kom</span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-sm font-weight-medium">21/06/2020 (13.00-16.00)</span>
                    </td>
                    <td class="align-item-center">
                      <a class="btn btn-link text-dark mb-0 px-0 ms-4" href="javascript:;">
                        <router-link :to="{ name: 'Nilai' }"><i
                            class="fas fa-duotone fa-hashtag text-success me-0 fa-lg me-2" aria-hidden="true"></i>NILAI
                        </router-link>
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
                          <h6 class="mb-0 text-sm">Sisca UWWWW</h6>
                          <p class="text-sm text-secondary mb-0">
                            11191050
                          </p>
                        </div>
                      </div>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-sm font-weight-normal">Cyber Security</span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-sm font-weight-bold">John Michael S.Kom M.Kom</span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-sm font-weight-bold">Sisca Sabyan S.Kom M.Kom</span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-sm font-weight-bold">John Michael S.Kom M.Kom</span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-sm font-weight-bold">Sisca Sabyan S.Kom M.Kom</span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-sm font-weight-medium">21/06/2020 (13.00-16.00)</span>
                    </td>
                    <td class="align-item-center">
                      <a class="btn btn-link text-dark mb-0 px-0 ms-4" href="javascript:;">
                        <router-link :to="{ name: 'Nilai' }"><i
                            class="fas fa-duotone fa-hashtag text-primary me-0 fa-lg me-2" aria-hidden="true"></i>NILAI
                        </router-link>
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
  name: "Penilaian",
  mounted() {
    setNavPills();
  }
};
</script>
  