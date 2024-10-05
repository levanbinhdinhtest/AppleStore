<template>
    <div class="list-product d-sm-flex">
    <div
      v-for="(mac, index) in products"
      :key="index"
      class="col-sm-3 col-12"
    >
      <!-- Lắng nghe sự kiện `select-mac` từ component con -->
      <item-product
        :mac="mac"
      />
    </div>
  </div>
</template>

<script>
import axios from "axios";
import { ref } from "vue";
import ItemProduct from "./ItemProduct.vue";

export default {
  components: {
    ItemProduct
  },
  setup() {
    const products = ref([]);
    
    const getMac = () => {
      axios
        .get("http://127.0.0.1:8000/api/customers/products/macbook")
        .then(function (response) {
          products.value = response.data;  // Gán dữ liệu sản phẩm từ AP
        })
        .catch(function (error) {
          console.log(error);
        });
    };

    getMac();  // Lấy danh sách sản phẩm khi component được khởi tạo

    return {
      products,
    };
  },
};
</script>