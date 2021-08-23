<template>
    <div class="wrapper">
            <div class="cul">
                    <div class="icons">
                        <Icons></Icons>
                    </div>
                <div class="dashboard-config">
                    <Dashboard></Dashboard>
                </div>
                
            </div>
        
        <div style="background-color: #181818">
            <Flooter></Flooter>
        </div>
    </div>
</template>




<script>
import Dashboard from '@/Pages/Dashboard/dashboard.vue'
import Icons from '@/Pages/Icons/icons.vue'
import Flooter from '@/Pages/Flooter/flooter.vue'

    export default {
        components: {
            Dashboard,
            Icons,
            Flooter,
        },
    }
</script>