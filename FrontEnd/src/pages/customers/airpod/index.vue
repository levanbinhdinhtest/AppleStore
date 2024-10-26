<template>
  <div>dat la airpod</div>
</template>

<script>
import axios from "axios";
export default {
  setup() {
    const getAirpods = () => {
      axios
        .get("http://127.0.0.1:8000/api/customers/products/airpods")
        .then(function (response) {
          console.log(response);
        })
        .catch(function (error) {
          console.log(error);
        });
    };
    //co the dung async await de thay then catch
    //     const getAllListApi = async ()=>{
    //     const res = await axios({
    //         method: "GET",
    //         url: "https://667ed50ff2cb59c38dc72c56.mockapi.io/todolist"
    //     });
    //     return res.data;
    // }
    getAirpods();
    return {
      getAirpods,
    };
  },
};
</script>

<style></style>
