<script setup>
import { RouterView } from "vue-router"
import Navbar from "@/partials/template/Navbar.vue"
import Sidebar from "@/partials/template/Sidebar.vue"
</script>


<template>
    <div class="w-screen h-screen box-border overflow-x-hidden overflow-y-auto flex justufy-between relative bg-[#F0F2F5] text-[#1c1e21]">
        <div class="w-24 h-full box-border overflow-x-hidden flex-none">
            <Sidebar />
        </div>

        <div class="relative w-full h-screen overflow-x-hidden overflow-y-auto flex-1">
            <Navbar />
            <RouterView />
        </div>
    </div>
</template>