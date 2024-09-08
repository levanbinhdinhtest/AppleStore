<template>
  <div>
    <div class="container-fluid bg-dark p-3">
      <div
        class="row d-sm-flex justify-content-sm-center align-items-sm-center"
      >
        <div
          class="col-9 col-sm-1 d-sm-flex justify-content-sm-center align-items-sm-center"
        >
          <i class="fa-brands fa-apple text-light fs-5"></i>
        </div>
        <div
          v-for="item in items"
          :key="item.key"
          class="d-none d-sm-flex col-sm-1 justify-content-sm-center align-items-sm-center"
        >
          <router-link
            :to="{ name: item.name }"
            class="text-white text-decoration-none fs-6"
          >
            {{ item.label }}
          </router-link>
        </div>
        <div
          class="col-sm-1 d-flex col-1 col-sm-1 d-sm-flex justify-content-sm-center align-items-sm-center justify-content-end"
        >
          <i class="fa-solid fa-magnifying-glass text-light fs-5"></i>
        </div>
        <div
          class="col-sm-1 d-flex col-1 col-sm-1 d-sm-flex justify-content-sm-center align-items-sm-center justify-content-end"
        >
          <i class="fa-solid fa-bag-shopping text-light fs-5"></i>
        </div>
        <div class="d-flex col-1 d-sm-none justify-content-end">
          <i class="fa-solid fa-bars text-light fs-5" @click="showDrawer()"></i>
        </div>
      </div>
      <a-drawer
        :open="open"
        title="Categories"
        placement="left"
        @close="onClose"
      >
        <a-menu v-for="item in items" :key="item.key" class="">
          <a-menu-item>
            <router-link
              :to="{ name: item.name }"
              class="btn text-dark text-decoration-none fs-6"
            >
              {{ item.label }}
            </router-link>
          </a-menu-item>
        </a-menu>
      </a-drawer>
    </div>
  </div>
</template>

<script>
import { reactive, ref } from "vue";
export default {
  setup() {
    const open = ref(false);
    const items = reactive([
      {
        key: "1",
        label: "Home",
        title: "Home",
        name: "customers-home",
      },
      {
        key: "2",
        label: "Iphone",
        title: "Iphone",
        name: "customers-iphone",
      },
      {
        key: "3",
        label: "Ipad",
        title: "Ipad",
        name: "customers-ipad",
      },
      {
        key: "4",
        label: "Macbook",
        title: "Macbook",
        name: "customers-mac",
      },
      {
        key: "5",
        label: "Watch",
        title: "Watch",
        name: "customers-watch",
      },
      {
        key: "5",
        label: "Airpod",
        title: "Airpod",
        name: "customers-airpod",
      },
      {
        key: "5",
        label: "Contact",
        title: "Contact",
        name: "customers-contact",
      },
    ]);
    const showDrawer = () => {
      open.value = true;
    };
    const onClose = () => {
  open.value = false;
};

    return {
      items,
      open,
      showDrawer,
      onClose
    };
  },
};
</script>

<style></style>
