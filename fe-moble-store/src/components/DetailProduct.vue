<template>
  <div>
    <div class="detail-mac d-sm-flex s-flex" style="width: 100%">
      <div class="image" style="width: 500px; height: 400px">
        <img
          :src="mac.image"
          alt=""
          style="width: 100%; height: 100%; object-fit: contain"
        />
      </div>
      <div class="information" style="width: inherit">
        <h2 class="">{{ mac.name }}</h2>
        <p style="font-size: 15px">Số lượng còn : {{ mac.stock }}</p>
        <p class="text-danger fs-2 p-2 bg-light">{{ mac.price }}$</p>
        <div>
          <h4>Mô tả :</h4>
          <p class="pl-4 fs-6">
            {{ mac.description }}
          </p>
        </div>
        <div>
          <h5 style="display: inline">Tags : </h5>
          <router-link to="">{{ mac.category_id }}</router-link>
        </div>
        <div class="btn-modal d-sm-flex d-flex justify-content-sm-end justify-content-center mt-4">
          <a-button class="btn-add mr-2 bg-light" html-type="submit" style="border: 1px dashed #dc3545">
          <span class="text-danger">Add to cart</span>
        </a-button>
        <a-button  class="btn-add bg-danger" html-type="submit" style="outline: none; border: none;">
          <span class="text-white">Buy Now</span>
        </a-button>
        </div>

      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    mac: {
      type: Object,
    },
  },
};
</script>

<style></style>
