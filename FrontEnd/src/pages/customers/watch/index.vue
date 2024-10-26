<template>
    <div>
      <h1>hjkh</h1>
    </div>
  </template>
  
  <script>
  import axios from "axios";
export default {
  setup() {
    const getWatch = () => {
      axios
        .get("http://127.0.0.1:8000/api/customers/products/watch")
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
    getWatch();
    return {
      getWatch,
    };
  },
};
  </script>
  
  <style>
  
  </style>