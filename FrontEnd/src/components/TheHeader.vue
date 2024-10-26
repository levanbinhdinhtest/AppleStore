<template>
  <div>
    <div class="container-fluid bg-dark p-3">
      <div
        class="row d-sm-flex justify-content-sm-center align-items-sm-center mb-0"
      >
        <div
          class="col-9 col-sm-1 d-sm-flex justify-content-sm-center align-items-sm-center"
        >
          <i class="fa-brands fa-apple text-light fs-5"></i>
        </div>

        <div
          v-for="item in items"
          :key="item.key"
          class="d-none d-sm-flex col-sm-1 justify-content-sm-center align-items-sm-center mr-2"
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

        <div
          class="d-none col-sm-1 col-1 col-sm-1 d-sm-none d-md-flex justify-content-sm-center align-items-sm-center justify-content-end"
        >
          <img
            v-if="isLoggedIn"
            :src="userInfo.avatar"
            alt="Avatar"
            class="rounded-circle"
            width="30"
            height="30"
          />
          <i v-else class="fa-solid fa-user text-light fs-5"></i>
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
        <a-menu>
          <a-menu-item v-if="!isLoggedIn">
            <router-link class="btn text-dark text-decoration-none fs-6"
              >Login</router-link
            >
          </a-menu-item>
          <a-menu-item v-else>
            <a @click="logout()" class="btn text-dark text-decoration-none fs-6"
              >Log Out</a
            >
          </a-menu-item>
        </a-menu>
      </a-drawer>
    </div>
  </div>
</template>

<script>
import { onMounted } from "vue";
import { reactive, ref } from "vue";
import { useRouter } from "vue-router";
import { useRoute } from "vue-router";
import axios from "axios";
export default {
  setup() {
    const router = useRouter();
    const isLoggedIn = ref(false);
    const userInfo = reactive({
      avatar: "",
      username: "",
    });
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
        key: "6",
        label: "Airpod",
        title: "Airpod",
        name: "customers-airpod",
      },
      {
        key: "7",
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
    // Kiểm tra trạng thái đăng nhập khi component được mount
    onMounted(() => {
      const storedUsername = localStorage.getItem("username");
      if (storedUsername !== "") {
        const storedAvatar = localStorage.getItem("avatar");
        isLoggedIn.value = true;
        userInfo.username = storedUsername;
        userInfo.avatar = storedAvatar;
      } else {
        isLoggedIn.value = false;
      }
    });
    const logout = () => {
      axios
        .get("http://127.0.0.1:8000/api/logout")
        .then((response) => {
          if (response.status === 200) {
            // Xóa thông tin người dùng khỏi localStorage
            localStorage.removeItem("username");
            localStorage.removeItem("avatar"); // Thêm dòng này để xóa avatar
            isLoggedIn.value = false;
            userInfo.avatar = ""; // Đặt lại avatar thành chuỗi rỗng
            userInfo.username = ""; // Đặt lại username thành chuỗi rỗng
          }
        })
        .catch((error) => {
          console.log(error);
        });
    };

    return {
      items,
      open,
      showDrawer,
      onClose,
      isLoggedIn,
      userInfo,
      logout,
    };
  },
};
</script>

<style></style>
