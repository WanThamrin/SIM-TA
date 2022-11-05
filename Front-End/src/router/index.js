import { createRouter, createWebHistory } from "vue-router";
import Dashboard from "../views/Dashboard.vue";
import Tables from "../views/components/Bimbingan/Tables.vue";
import Bimbingan from "../views/components/Bimbingan/Bimbingan.vue";
import EditMatkul from "../views/components/Bimbingan/Matkul/edit.vue";
import EditRiset from "../views/components/Bimbingan/Riset/edit.vue";
import Detail from "../views/components/Bimbingan/Dosen/Detail.vue";
import Info from "../views/components/Pengumuman/Info/Info.vue";
import EditInfo from "../views/components/Pengumuman/Info/edit.vue";
import EyeInfo from "../views/components/Pengumuman/Info/EyeInfo.vue";
import Doc from "../views/components/Pengumuman/Dokumen/Doc.vue";
import EyeDoc from "../views/components/Pengumuman/Dokumen/EyeDoc.vue";
import Sempro from "../views/components/Sempro/Sempro.vue";
import Tambah from "../views/components/Sempro/Tambah.vue";
import Edit from "../views/components/Sempro/Edit.vue";
import Matkul from "../views/components/Bimbingan/Matkul/Matkul.vue";
import Riset from "../views/components/Bimbingan/Riset/Riset.vue";
import Semhas from "../views/components/Semhas/Semhas.vue";
import Penilaian from "../views/components/Penilaian/Penilaian.vue";
import Nilai from "../views/components/Penilaian/Nilai.vue";
import Relasi from "../views/components/Relasi/Relasi.vue";
import Lihat from "../views/components/Relasi/Lihat.vue";
import Yudisium from "../views/components/Yudisium/Yudisium.vue";
import Billing from "../views/Billing.vue";
import Notifications from "../views/Notifications.vue";
import Profile from "../views/Profile.vue"; 
import SignIn from "../views/SignIn.vue";
import SignUp from "../views/SignUp.vue";

const routes = [
  {
    path: "/",
    name: "/",
    redirect: "/dashboard",
  },
  {
    path: "/dashboard",
    name: "Dashboard",
    component: Dashboard,
  },
  {
    path: "/tables",
    name: "Tables",
    component: Tables,
  },
  {
    path: "/bimbingan",
    name: "Bimbingan",
    component: Bimbingan,
  },
  {
    path: "/edit-matkul/:id",
    name: "Edit-Matkul",
    component: EditMatkul,
  },
  {
    path: "/edit-riset/:id",
    name: "Edit-Riset",
    component: EditRiset,
  },
  {
    path: "/matkul",
    name: "Matkul",
    component: Matkul,
  },
  {
    path: "/detail",
    name: "Detail",
    component: Detail,
  },
  {
    path: "/riset",
    name: "Riset",
    component: Riset,
  },
  {
    path: "/Info",
    name: "Info",
    component: Info,
  },
  {
    path: "/edit-Info/:id",
    name: "Edit-Info",
    component: EditInfo,
  },
  {
    path: "/EyeInfo",
    name: "EyeInfo",
    component: EyeInfo,
  },
  {
    path: "/Doc",
    name: "Doc",
    component: Doc,
  },
  {
    path: "/EyeDoc",
    name: "EyeDoc",
    component: EyeDoc,
  },
  {
    path: "/sempro",
    name: "Sempro",
    component: Sempro,
  },
  {
    path: "/tambah",
    name: "Tambah",
    component: Tambah,
  },
  {
    path: "/edit",
    name: "Edit",
    component: Edit,
  },
  {
    path: "/semhas",
    name: "Semhas",
    component: Semhas,
  },
  {
    path: "/penilaian",
    name: "Penilaian",
    component: Penilaian,
  },
  {
    path: "/nilai",
    name: "Nilai",
    component: Nilai,
  },
  {
    path: "/relasi",
    name: "Relasi",
    component: Relasi,
  },
  {
    path: "/lihat",
    name: "Lihat",
    component: Lihat,
  },
  {
    path: "/yudisium",
    name: "Yudisium",
    component: Yudisium,
  },
  {
    path: "/billing",
    name: "Billing",
    component: Billing,
  },

  {
    path: "/notifications",
    name: "Notifications",
    component: Notifications,
  },
  {
    path: "/profile",
    name: "Profile",
    component: Profile,
  },
  {
    path: "/sign-in",
    name: "SignIn",
    component: SignIn,
  },
  {
    path: "/sign-up",
    name: "SignUp",
    component: SignUp,
  },

];

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes,
  linkActiveClass: "active",
});

export default router;
