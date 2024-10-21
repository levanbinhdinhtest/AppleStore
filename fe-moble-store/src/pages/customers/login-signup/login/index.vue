<template>
  <div class="container-fluid login-page" style="height: 90vh">
    <div class="row d-sm-flex" style="height: 100%">
      <div class="col-sm-6 col-12" style="padding: 0">
        <img
          src="../../../../assets/images/backgrounglogin.jpg"
          alt=""
          style="width: 100%; height: 100%; object-fit: cover"
        />
      </div>
      <div class="col-sm-6 col-12">
        <div class="login-form" style="width: 100%">
          <div class="wp-form" style="width: 100%">
            <form action="post" @submit.prevent="postLogin()">
              <h3 class="col-sm-4 offset-sm-4">Login</h3>
              <div class="account form-group col-sm-4 col-12 offset-sm-4">
                <input
                  type="text"
                  name="account"
                  id="account"
                  placeholder="Nhập tài khoản"
                  style="width: 100%"
                  v-model="users.username"
                />
              </div>
              <div class="password form-group col-sm-4 col-12 offset-sm-4">
                <input
                  type="password"
                  name="password"
                  id="password"
                  placeholder="Nhập mật khẩu"
                  style="width: 100%"
                  v-model="users.password"
                />
              </div>
              <div
                class="submit form-group col-sm-12 d-sm-flex justify-content-sm-center col-12 d-flex justify-content-center"
              >
                <button
                  type="submit"
                  style="
                    font-size: 20px;
                    border-radius: 15px;
                    padding: 5px 30px;
                  "
                  class="btn btn-secondary"
                >
                  Login
                </button>
              </div>
              <router-link
                class="col-sm-12 d-sm-flex justify-content-sm-center col-12 d-flex justify-content-center text-info"
                style="font-size: 20px"
                >or,sign up</router-link
              >
            </form>
          </div>
        </div>
      </div>
    </div>

  </div>
</template>

<script>
import { ref, reactive } from "vue";
import { useRouter } from "vue-router";
import { useRoute } from "vue-router";
import axios from "axios";
export default {
  setup() {
    const router = useRouter();
    const route = useRoute();
    const users = reactive({
      username: "",
      password: "",
    });
    const postLogin = () => {
  axios.post("http://127.0.0.1:8000/api/customers/login", users)
    .then((response) => {
      if (response.status === 200) {
        try {
          localStorage.setItem('username', response.data.username);  // Lưu username
          getUserLogin(); // Gọi để lấy avatar
          router.push({ name: "customers-home" });
        } catch (error) {
          console.log(error);
        }
      } else {
        console.log("Thông tin đăng nhập không hợp lệ");
      }
    })
    .catch((error) => {
      console.log(error);
    });
};

const getUserLogin = (username) => {
  //const username = localStorage.getItem('username');
  if (username) {
    axios.get(`http://127.0.0.1:8000/api/customers/home/${username}`)
      .then((response) => {
        localStorage.setItem('avatar', response.data.avatar);  // Lưu avatar
      })
      .catch((error) => {
        console.log(error);
      });
  } else {
    console.log('Không tìm thấy username trong localStorage');
  }
};

  

    return {
      users,
      postLogin,
      getUserLogin

    };
  },
};
</script>

<style scoped>
/* Các styles khác nếu cần */
/* .login-form{
  position: relative;
} */
.wp-form {
  margin-top: 25%;
}
input {
  padding: 5px 10px;
  border-radius: 10px;
}
a:hover {
  text-decoration: none;
}
@media only screen and (max-width: 768px) {
  /* Các kiểu CSS cho màn hình điện thoại ở đây */
  .login-page {
    margin-bottom: 20px;
  }
}
</style>
