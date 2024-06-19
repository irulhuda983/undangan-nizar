<script setup>
import { useRouter, useRoute } from 'vue-router'

import HomeIcon from '@/assets/icons/Home.vue'
import InviteIcon from '@/assets/icons/Invite.vue'
import TemplateIcon from '@/assets/icons/Template.vue'
import SignoutIcon from '@/assets/icons/Signout.vue'

const route = useRoute()

</script>

<template>
    <!-- 8859FF -->
    <div class="w-full h-full box-boder flex flex-row lg:flex-col items-center justify-between relative bg-slate-900 text-white">
        <!-- logo -->
        <div class="w-full h-[72px] flex-none flex items-center justify-center">
            <div class="rounded-lg w-16 to-orange-200 flex items-center justify-center text-4xl text-indigo-500 font-bold">
                <img src="http://localhost:8000/assets/img/logo.png" alt="" class="w-full">
            </div>
        </div>
        <!-- end logo -->

        <div class="w-full h-full lg:flex-1 flex items-center justify-center flex-row lg:flex-col">
            <div class="w-full box-border flex items-center justify-center flex-col">
                <router-link
                    :to="{ name: 'home' }"
                    class="flex items-center justify-center mb-8"
                    :class="route.meta.menu == 'home' ? 'text-sky-400' : 'text-slate-400 hover:text-slate-300' "
                >
                    <div class="w-6 h-6">
                        <HomeIcon/>
                    </div>
                </router-link>

                <router-link
                    :to="{ name: 'invite' }"
                    class="flex items-center justify-center mb-8"
                    :class="route.meta.menu == 'invite' ? 'text-sky-400' : 'text-slate-400 hover:text-slate-300' "
                >
                    <div class="w-6 h-6">
                        <InviteIcon/>
                    </div>
                </router-link>

                <router-link
                    :to="{ name: 'templates' }"
                    class="flex items-center justify-center mb-8"
                    :class="route.meta.menu == 'templates' ? 'text-sky-400' : 'text-slate-400 hover:text-slate-300' "
                >
                    <div class="w-6 h-6">
                        <TemplateIcon/>
                    </div>
                </router-link>
            </div>
        </div>

        <div class="w-full flex items-center justify-center py-6 box-border">
            <button
                class="flex items-center justify-center text-slate-400 hover:text-slate-300"
            >
                <div class="w-5 h-5">
                    <SignoutIcon/>
                </div>
            </button>
        </div>
    </div>
</template>