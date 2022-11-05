<template>
  <div class="py-4 container-fluid">
    <div class="row mb-4">
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
            <mini-statistics-card :title="{ text: 'Yudisium', value: '20 Mahasiswa' }"
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
        <div class="table-responsive p-0 my-4">
          <table class="table align-items-center mb-0">
            <thead>
              <tr>
                <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                  Judul Pengumuman
                </th>
                <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                  Keyword Pengumuman
                </th>
                <!-- <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                  Status
                </th> -->
                <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                  Waktu
                </th>
                <!-- <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                      Info
                    </th>
                    <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                      Penguji II
                    </th>
                    <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-7">
                      Jadwal
                    </th> -->
                <th class="text-center text-uppercase text-dark text-sm font-weight-bolder opacity-5"> File </th>
                <!-- <th class="text-dark opacity-2"></th> -->
              </tr>
            </thead>
            <tbody>
              <tr>
                <!-- <td class="align-middle text-center">
                  <span class="text-sm font-weight-medium">{{ Info.id }}</span>
                </td> -->
                <td>
                  <div class="text-center px-2 py-1">
                    <div class="d-flex flex-column justify-content-center">
                      <h6 class="mb-0 text-sm">Jadwal Pembukaan Seminar Hasil</h6>
                      <!-- <p class="text-sm text-secondary mb-0">
                            
                          </p> -->
                    </div>
                  </div>
                </td>
                <td class="align-middle text-center">
                  <span class="text-sm font-weight-medium">Seminar Hasil</span>
                </td>
                <!-- <td class="align-middle text-center">
                  <span class="badge badge-sm bg-gradient-success">{{ Info.status }}</span>
                </td> -->
                <td class="align-middle text-center">
                  <span class="text-secondary text-sm font-weight-medium">Jumat (16.00)</span>
                </td>
                <td class="align-middle text-center">
                  <button class="btn btn-link text-danger text-sm mb-0 px-0 ms-4">
                    <i class="fas fa-file-pdf text-lg me-1" aria-hidden="true"></i>
                    pdf
                  </button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <!-- <project-card
          title="Pengumuman"
          description="<i class='fa fa-check text-info' aria-hidden='true'></i> <span class='font-weight-bold ms-1'>30 done</span> this month"
          :headers="['Companies', 'Members', 'Budget', 'Progress']"
          :projects="[
            {
              logo: logoXD,
              title: 'Material XD Material XD Version',
              members: [team1, team2, team3, team4],
              budget: '$14,000',
              progress: { percentage: 60, color: 'info' },
            },
            {
              logo: logoAtlassian,
              title: 'Add Progress Track',
              members: [team2, team4],
              budget: '$3,000',
              progress: { percentage: 10, color: 'info' },
            },
            {
              logo: logoSlack,
              title: 'Fix Platform Errors',
              members: [team3, team1],
              budget: 'Not set',
              progress: { percentage: 100, color: 'success' },
            },
            {
              logo: logoSpotify,
              title: 'Launch our Mobile App',
              members: [team4, team3, team4, team1],
              budget: '$20,500',
              progress: { percentage: 100, color: 'success' },
            },
            {
              logo: logoJira,
              title: 'Add the New Pricing Page',
              members: [team4],
              budget: '$500',
              progress: { percentage: 25, color: 'info' },
            },
            {
              logo: logoJira,
              title: 'Redesign New Online Shop',
              members: [team1, team4],
              budget: '$2,000',
              progress: { percentage: 40, color: 'info' },
            },
          ]"
        /> -->
      </div>
      <div class="col-lg-4 col-md-6">
        <timeline-list class="h-100" title="Progress" description="<i class='fa fa-arrow-up text-success' aria-hidden='true'></i>
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
// import ChartHolderCard from "./components/ChartHolderCard.vue";
// import ReportsBarChart from "@/examples/Charts/ReportsBarChart.vue";
// import ReportsLineChart from "@/examples/Charts/ReportsLineChart.vue";
import MiniStatisticsCard from "./components/MiniStatisticsCard.vue";
// import ProjectCard from "./components/ProjectCard.vue";
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
    };
  },
  components: {
    // ChartHolderCard,
    // ReportsBarChart,
    // ReportsLineChart,
    MiniStatisticsCard,
    // ProjectCard,
    TimelineList,
    TimelineItem,
  },
};
</script>
