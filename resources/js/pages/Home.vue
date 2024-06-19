<script setup>
import OverviewCard from '@/partials/home/Overview.vue'
import LastTransaction from '@/partials/home/LastTransaction.vue'

</script>


<template>
    <div class="w-full box-border overflow-x-hidden p-4">
        <!-- card top -->
        <OverviewCard />
        <LastTransaction />
    </div>
</template>