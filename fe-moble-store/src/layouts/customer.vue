<template>
    <div>
        <the-header/> 
        <router-view></router-view>
        <the-footer/>
    </div>
</template>

<script>
import TheHeader from '../components/TheHeader.vue';
import TheFooter from '../components/TheFooter.vue';
// import CustomerHomeIndex from '../pages/customers/home/index.vue';
export default {
    components:{
        TheHeader,
        TheFooter
        // CustomerHomeIndex
    }
}
</script>

<style>

</style>