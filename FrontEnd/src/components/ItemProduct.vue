<template>
  <div>
    <div @click="showModal()" class="card" style="border: none;cursor: pointer;">
      <div class="wp-image">
        <img class="card-img-top" :src="mac.image" alt="Card image cap" />
      </div>
      <div class="card-body text-center">
        <h2 class="card-title" style="">{{ mac.name }}</h2>
        <p class="card-text" style="height: 100px;overflow: hidden;">{{ mac.description }}</p>
        <span class="card-text">{{ mac.price }}$</span>
        <div class="btn-buy">
          <router-link
            style="text-decoration: none"
            :to="{ name: 'customers-home' }"
          >
            <button>Add to cart</button>
          </router-link>
        </div>
      </div>
      <a-modal :open="open" title="Macbook" width="900px" @ok="handleOk" @cancel="handleOk">
        <detail-product
        :mac="mac"/>
      </a-modal>
    </div>
  </div>
</template>

<script>
import { ref } from "vue";
import DetailProduct from "./DetailProduct.vue";
export default {
  components:{
    DetailProduct
  },
  props: {
    mac: {
      type: Object, // `mac` phải là object, không phải array
      required: true,
    },
  },
  setup() {
    const open = ref(false);
    const showModal = () => {
      open.value = true;
    };
    const handleOk = (e) => {
      console.log(e);
      open.value = false;
    };
    return {
      open,
      showModal,
      handleOk,
    };
  },
};
</script>

<style>
.wp-image {
  width: 400px;
  height: 400px;
  position: relative;
  left: 10%;
  transition: all 0.5s ease;
}
.card-img-top {
  width: 100%;
  height: 100%;
  object-fit: contain;
}
.card:hover .wp-image {
  transform: scale(1.03); /* Phóng to 3% */
}
.ant-btn{
  display: none;
}
.btn-add{
  display: block;
}
.card-title {
  font-size: clamp(1.2rem, 3vw, 2.5rem);/* Tối thiểu 1rem, tối đa 2.5rem, và điều chỉnh theo viewport(3% của chiều rộng màn hình) */
}

@media (max-width: 768px) {
  .card-title {
    font-size: 1.5rem; /* Thay đổi với màn hình nhỏ hơn */
  }
}
</style>
