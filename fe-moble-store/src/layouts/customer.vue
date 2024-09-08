<template>
    <div>
        <the-header/> 
        <router-view></router-view>
    </div>
</template>

<script>
import TheHeader from '../components/TheHeader.vue';
// import CustomerHomeIndex from '../pages/customers/home/index.vue';
export default {
    components:{
        TheHeader,
        // CustomerHomeIndex
    }
}
</script>

<style>

</style>