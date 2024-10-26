<template>
  <div class="container-fluid mt-4">
    <div class="row mac-demo">
      <div class="col-12 col-sm-4 offset-sm-1">
        <h1>Mac</h1>
      </div>
      <div class="col-12 col-sm-6 d-sm-flex justify-content-sm-end">
        <h3 style="width: 250px; flex-wrap: wrap">
          Bạn làm được là Mac làm được
        </h3>
      </div>
      <div
        class="col-12 col-sm-12 d-flex d-sm-flex justify-content-center justify-content-sm-center"
      >
        <div class="wp-video">
          <div class="video-container">
            <video
              id="myVideo"
              controls
              autoplay
              loop
              muted
              style="width: 100%; height: 100%; object-fit: cover"
            >
              <source
                src="../../../assets/videos/macbook-demo.mp4"
                type="video/mp4"
              />
            </video>
          </div>
          <div
            @click="controlVideo()"
            style="
              width: 50px;
              height: 50px;
              position: absolute;
              right: 5%;
              bottom: 5%;
              border: 1px solid white;
              border-radius: 50%;

              background-color: gray;
            "
          >
            <i
              class="fa-solid fa-play icon-play hide"
              style="font-size: 25px; position: absolute; top: 25%; left: 34%"
            ></i>
            <i
              class="fa-solid fa-pause icon-pause"
              style="font-size: 25px; position: absolute; top: 25%; left: 34%"
            ></i>
          </div>
        </div>
      </div>
    </div>
    <div class="row mac-about">
      <div class="col-12 col-sm-4 offset-sm-1  mb-4">
        <h1>Tìm hiểu về Mac.</h1>
      </div>
      <div
        class="gallery col-12 col-sm-12 d-flex d-sm-flex justify-content-center justify-content-sm-center mb-4"
      >
        <div class="wp-gallery" ref="scrollContainer">
          <div class="item">
            <div style="width: 100%; height: 800px ;">
              <img
                src="../../../assets/images/airpod-pro-thumb.png"
                alt=""
                style="
                  width: 100%;
                  height: 100%;
                  object-fit: fill;
                  border-radius: 15px;
                "
              />
            </div>
            <div
              class="title"
              style="position: absolute; top: 30px; left: 30px"
            >
              <h3>Bat dau</h3>
              <h2>De su dung</h2>
            </div>
          </div>
          <div class="item">
            <div style="width: 100%; height: 800px">
              <img
                src="../../../assets/images/airpod-pro-thumb.png"
                alt=""
                style="
                  width: 100%;
                  height: 100%;
                  object-fit: fill;
                  border-radius: 15px;
                "
              />
            </div>
            <div
              class="title"
              style="position: absolute; top: 30px; left: 30px"
            >
              <h3>Bat dau</h3>
              <h2>De su dung</h2>
            </div>
          </div>
          <div class="item">
            <div style="width: 100%; height: 800px">
              <img
                src="../../../assets/images/airpod-pro-thumb.png"
                alt=""
                style="
                  width: 100%;
                  height: 100%;
                  object-fit: fill;
                  border-radius: 15px;
                "
              />
            </div>
            <div
              class="title"
              style="position: absolute; top: 30px; left: 30px"
            >
              <h3>Bat dau</h3>
              <h2>De su dung</h2>
            </div>
          </div>
          <div class="item">
            <div style="width: 100%; height: 800px">
              <img
                src="../../../assets/images/airpod-pro-thumb.png"
                alt=""
                style="
                  width: 100%;
                  height: 100%;
                  object-fit: fill;
                  border-radius: 15px;
                "
              />
            </div>
            <div
              class="title"
              style="position: absolute; top: 30px; left: 30px"
            >
              <h3>Bat dau</h3>
              <h2>De su dung</h2>
            </div>
          </div>
          <div class="item">
            <div style="width: 100%; height: 800px">
              <img
                src="../../../assets/images/airpod-pro-thumb.png"
                alt=""
                style="
                  width: 100%;
                  height: 100%;
                  object-fit: fill;
                  border-radius: 15px;
                "
              />
            </div>
            <div
              class="title"
              style="position: absolute; top: 30px; left: 30px"
            >
              <h3>Bat dau</h3>
              <h2>De su dung</h2>
            </div>
          </div>
          <div class="item">
            <div style="width: 100%; height: 800px">
              <img
                src="../../../assets/images/airpod-pro-thumb.png"
                alt=""
                style="
                  width: 100%;
                  height: 100%;
                  object-fit: fill;
                  border-radius: 15px;
                "
              />
            </div>
            <div
              class="title"
              style="position: absolute; top: 30px; left: 30px"
            >
              <h3>Bat dau</h3>
              <h2>De su dung</h2>
            </div>
          </div>
          <div class="item">
            <div style="width: 100%; height: 800px">
              <img
                src="../../../assets/images/airpod-pro-thumb.png"
                alt=""
                style="
                  width: 100%;
                  height: 100%;
                  object-fit: fill;
                  border-radius: 15px;
                "
              />
            </div>
            <div
              class="title"
              style="position: absolute; top: 30px; left: 30px"
            >
              <h3>Bat dau</h3>
              <h2>De su dung</h2>
            </div>
          </div>
        </div>
 
      </div>

      <div class="btn-move col-sm-11 col-4 d-sm-flex justify-content-sm-end mb-4">
          <i
            class="fa-regular fa-circle-left"
            style="font-size: 40px; margin-left: 10px;"
            @click="handleBack()"
          ></i>
          <i
            class="fa-regular fa-circle-right"
            style="font-size: 40px;margin-left: 10px;"
            @click="handleNext()"
          ></i>
        </div>
    </div>
    <div class="row mac-products">
      <div class="col-12 col-sm-4 offset-sm-1">
        <h1>Khám phá sản phẩm</h1>
      </div>
          <list-product/>
    </div>
  </div>
</template>

<script>
import { onMounted, ref, onUnmounted } from "vue";
import ListProduct from '../../../components/ListProduct.vue';
export default {
  components:{
    ListProduct
  },
  setup() {
    let video;
    let iconPlay;
    let iconPause;
    const scrollContainer = ref(null);
    onMounted(() => {
      video = document.getElementById("myVideo");
      iconPlay = document.querySelector(".icon-play");
      iconPause = document.querySelector(".icon-pause");
      if (scrollContainer.value) {
        scrollContainer.value.addEventListener("wheel", handleScroll);
      }
    });
    const handleScroll = (evt) => {
      //Ngăn chặn hành vi mặc định của sự kiện cuộn. Trong trường hợp này,
      //  nó ngăn trang cuộn lên/xuống mà thay vào đó sẽ cuộn theo chiều ngang.
      //Thuộc deltaYtính trả về giá trị dương khi cuộn xuống và giá trị âm khi cuộn lên, ngược lại là 0.
      evt.preventDefault();
      if (scrollContainer.value) {
        // Tăng hoặc giảm số pixel tùy theo chiều cuộn

        scrollContainer.value.scrollLeft += evt.deltaY;
      }
    };
    const handleNext = () => {
      scrollContainer.value.style.scrollBehavior = "smooth";
      scrollContainer.value.scrollLeft += 900;
    };
    const handleBack = () => {
      scrollContainer.value.style.scrollBehavior = "smooth";
      scrollContainer.value.scrollLeft -= 900;
    };

    function controlVideo() {
      if (video.paused) {
        video.play();
        iconPause.classList.remove("hide");
        iconPlay.classList.add("hide");
      } else {
        video.pause();
        iconPause.classList.add("hide");
        iconPlay.classList.remove("hide");
      }
    }
    onUnmounted(() => {
      if (scrollContainer.value) {
        scrollContainer.value.removeEventListener("wheel", handleScroll);
      }
    });

    return {
      controlVideo,
      scrollContainer,
      handleNext,
      handleBack,
    };
  },
};
</script>

<style>
/* Khung chứa video */
.video-container {
  width: 100%;
  height: 800px; /* Chiều cao khung */
  border: 5px solid white; /* Đường viền xung quanh video */
  border-radius: 20px; /* Làm bo tròn các góc của khung */
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Đổ bóng cho khung */
  padding: 0;
  overflow: hidden;
}

/* Video cũng được bo tròn */
.video-container video {
  width: 100%;
}
/* Ẩn thanh điều khiển mặc định của video */
video::-internal-media-controls-overlay-cast-button {
  display: none;
}

video::-webkit-media-controls {
  display: none !important;
}
.hide {
  display: none;
}
.wp-video {
  width: 80%;
  position: relative;
  transition: 0.5s;
}
.wp-video:hover {
  width: 90%;
}
.gallery{
  /* flex-direction: column; */
}
.wp-gallery {
  display: flex;
  overflow-x: scroll;
  overflow-y: hidden;
  width: 80%; /* Chiều rộng của khung chứa các item */
  /* scroll-behavior: smooth; */
  white-space: nowrap; /* Đảm bảo các item không bị xuống dòng */
  /* height: 870px;
  scrollbar-width: none; */
}
.wp-gallery div {
  flex: none;
}

.item {
  flex: 0 0 auto; /* Đảm bảo các item không co lại và luôn giữ kích thước gốc */
  margin-right: 20px; /* Khoảng cách giữa các item */
  width: 23%;
  position: relative;
  /* border: 1px solid red; */
  border-radius: 15px;
  transition: 0.5s;
}
.item:hover {
  transform: scale(1.02); /* Phóng to 5% */
  margin-right: 10px; /* Khoảng cách giữa các item */
  transition: 0.4s;
}
.active-item {
  border: 1px solid red;
}
.wp-gallery::-webkit-scrollbar {
  display: none;
}
.row{
  margin-bottom: 50px;
}
</style>
