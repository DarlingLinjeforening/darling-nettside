<template>
    <section class="md:max-w-[75%] md:my-0 md:mx-auto">
    <div class="m-3 md:w-[75%]">
        <HeaderComp text="Jobs" h="1" width="5em"/>
    </div>
        <JobsComp />
    </section>
</template>

<script>
import JobsComp from '../components/JobOffers/JobsComp.vue'
import HeaderComp from '../components/HeaderComp.vue'

    export default {
        components: {JobsComp, HeaderComp}
    }
</script>
