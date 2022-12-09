<template>
  <div class="py-4 container-fluid">
    <div class="row mb-4">
      <h4 class="mb-4"> Selamat Datang di SIM-TA ,
        <span>{{ profiles.name }}</span>
      </h4>
      <div class="col-lg-12 position-relative z-index-2">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-6">
            <mini-statistics-card :title="{ text: 'Tugas Akhir', value: '20 Mahasiswa' }"
              detail="<span class='text-success text-sm font-weight-bolder'>+55%</span> than last week" :icon="{
                name: 'weekend',
                color: 'text-white',
                background: 'dark',
              }" />
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 mt-lg-0 mt-4">
            <mini-statistics-card :title="{ text: 'Seminar Proposal', value: '20 Mahasiswa' }"
              detail="<span class='text-success text-sm font-weight-bolder'>+3%</span> than last month" :icon="{
                name: 'cast_for_education',
                color: 'text-white',
                background: 'primary',
              }" />
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 mt-lg-0 mt-4">
            <mini-statistics-card :title="{ text: 'Seminar Hasil', value: '20 Mahasiswa' }"
              detail="<span class='text-danger text-sm font-weight-bolder'>-2%</span> than yesterday" :icon="{
                name: 'cast_for_education',
                color: 'text-white',
                background: 'success',
              }" />
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 mt-lg-0 mt-4">
            <mini-statistics-card :title="{ text: 'Wisuda', value: '20 Mahasiswa' }"
              detail="<span class='text-success text-sm font-weight-bolder'>+5%</span> Just updated" :icon="{
                name: 'school',
                color: 'text-white',
                background: 'info',
              }" />
          </div>
        </div>
        <!-- <div class="row mt-4">
          <div class="col-lg-4 col-md-6 mt-4">
            <chart-holder-card
              title="Website Views"
              subtitle="Last Campaign Performance"
              update="campaign sent 2 days ago"
            >
              <reports-bar-chart
                :chart="{
                  labels: ['M', 'T', 'W', 'T', 'F', 'S', 'S'],
                  datasets: {
                    label: 'Sales',
                    data: [50, 20, 10, 22, 50, 10, 40],
                  },
                }"
              />
            </chart-holder-card>
          </div>
          <div class="col-lg-4 col-md-6 mt-4">
            <chart-holder-card
              title="Daily Sales"
              subtitle="(<span class='font-weight-bolder'>+15%</span>) increase in today sales."
              update="updated 4 min ago"
              color="success"
            >
              <reports-line-chart
                :chart="{
                  labels: [
                    'Apr',
                    'May',
                    'Jun',
                    'Jul',
                    'Aug',
                    'Sep',
                    'Oct',
                    'Nov',
                    'Dec',
                  ],
                  datasets: {
                    label: 'Mobile apps',
                    data: [50, 40, 300, 320, 500, 350, 200, 230, 500],
                  },
                }"
              />
            </chart-holder-card>
          </div>
          <div class="col-lg-4 mt-4">
            <chart-holder-card
              title="Completed Tasks"
              subtitle="Last Campaign Performance"
              update="just updated"
              color="dark"
            >
              <reports-line-chart
                id="tasks-chart"
                :chart="{
                  labels: [
                    'Apr',
                    'May',
                    'Jun',
                    'Jul',
                    'Aug',
                    'Sep',
                    'Oct',
                    'Nov',
                    'Dec',
                  ],
                  datasets: {
                    label: 'Mobile apps',
                    data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
                  },
                }"
              />
            </chart-holder-card>
          </div>
        </div> -->
      </div>
    </div>

    <div class="row ">
      <div class=" card col-lg-8 col-md-6 mb-md-0 mb-4 my-4">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 text-center font-weight-bolder">
          <div class="bg-gradient-light shadow-success border-radius-lg pt-4 pb-3">
            <h5 class="text-black text-capitalize ps-3">Pengumuman</h5>
          </div>
        </div>
        <div class="card-body pt-4">
          <ul class="list-group">
            <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg"
              v-for="(Info, index) in Infos.data" :key="index">
              <div class="d-flex flex-column">
                <h6 class="mb-3 text-md">{{ Info.judul }}</h6>
                <span class="mb-2 text-md">
                  <span class="text-dark font-weight-bold ms-sm-2">{{ Info.keyword }}</span>
                </span>
                <span class="mb-2 text-md">
                  Waktu: 
                  <span class="text-dark m-2 ms-sm-2 font-weight-bold">{{ Info.time }}</span>
                </span>
                <span class="text-md">
                  Note:
                  <span class="text-dark ml-4 ms-sm-2 font-weight-bold">{{ Info.note }}</span>
                </span>
                <span class="text-md">
                  File:
                  <a class="btn btn-link text-sm mb-0" :href="'http://127.0.0.1:8000/info/'+Info.file" target="_blank" >
                    <i class="fas fa-file-pdf text-lg me-2" aria-hidden="true"><span
                      class="m-2">{{ Info.file }}</span></i>
                    
                  </a>
                </span>
              <!-- <a href= "http://127.0.0.1:8000/api/storage/app/public/Info/file_1670090385.pdf">aaaa</a> -->
              </div>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <timeline-list title="Progress" description="<i class='fa fa-arrow-up text-success' aria-hidden='true'></i>
        <span class='font-weight-bold'>24%</span> this month">
          <timeline-item :icon="{
            component: 'cast_for_education',
            class: 'text-success',
          }" title="Seminar Hasil" date-time="22 DEC 7:20 PM" />
          <TimelineItem :icon="{
            component: 'cast_for_education',
            class: 'text-danger',
          }" title="Seminar Proposal" date-time="21 DEC 11 PM" />
          <TimelineItem :icon="{
            component: 'collections_bookmark',
            class: 'text-info',
          }" title="Daftar Tugas Akhir" date-time="21 DEC 9:34 PM" />
        </timeline-list>
      </div>
    </div>
  </div>
</template>
<script>
import axios from 'axios';
// import { onMounted, ref } from "vue";

import MiniStatisticsCard from "./components/MiniStatisticsCard.vue";
import TimelineList from "@/examples/Cards/TimelineList.vue";
import TimelineItem from "@/examples/Cards/TimelineItem.vue";
import logoXD from "@/assets/img/small-logos/logo-xd.svg";
import logoAtlassian from "@/assets/img/small-logos/logo-atlassian.svg";
import logoSlack from "@/assets/img/small-logos/logo-slack.svg";
import logoSpotify from "@/assets/img/small-logos/logo-spotify.svg";
import logoJira from "@/assets/img/small-logos/logo-jira.svg";
import logoInvision from "@/assets/img/small-logos/logo-invision.svg";
import team1 from "@/assets/img/team-1.jpg";
import team2 from "@/assets/img/team-2.jpg";
import team3 from "@/assets/img/team-3.jpg";
import team4 from "@/assets/img/team-4.jpg";
export default {
  name: "dashboard-default",
  data() {
    return {
      logoXD,
      team1,
      team2,
      team3,
      team4,
      logoAtlassian,
      logoSlack,
      logoSpotify,
      logoJira,
      logoInvision,
      profiles: {},
      Infos: {}
    };
  },

  methods: {
    getNama() {
      let token = localStorage.getItem("token")
      axios.get('http://127.0.0.1:8000/api/me',
        { headers: { "Authorization": `Bearer ${token}` } })
        .then((result) => {
          this.profiles = result.data.data
          console.log(this.profiles)
        }).catch((err) => {
          console.log(err.response)
        })
    },
    getInfo() {
      axios.get('http://127.0.0.1:8000/api/info')
        .then((result) => {
          this.Infos = result.data
          console.log(this.Infos)
        }).catch((err) => {
          console.log(err.response)
        })
    }
  },
  mounted() {
    this.getNama()
    this.getInfo()
  },

  components: {
    MiniStatisticsCard,
    TimelineList,
    TimelineItem,
  },
};
</script>
