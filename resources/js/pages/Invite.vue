<template>
    <div class="w-full box-border overflow-x-hidden bg-white h-full pt-[54px]">
        <div class="w-full px-4 py-2 border-b flex items-center justify-between">
            <div class="w-3/4 box-border flex items-center space-x-3 mb-2 lg:mb-0 pr-2">
                <input type="text" placeholder="Cari Undangan" class="w-full lg:w-96 rounded box-border px-4 py-2 bg-[#EFF2F5] text-gray-600 text-xs outline-none">

                <select class="hidden lg:block rounded box-border px-4 py-2 bg-[#EFF2F5] text-[#A6B0C3] text-xs font-semibold outline-none cursor-pointer">
                    <option value="">Kecamatan</option>
                </select>
            </div>

            <div class="w-1/4 flex items-center justify-end">
                <div class="font-semibold text-xs p-2 rounded cursor-pointer hover:bg-[#EFF2F5] hover:text-gray-900">
                    1 - 10 dari 100
                </div>

                page
            </div>
        </div>
        <div class="w-full box-border px-4">
            <table class="w-full box-border text-xs">
                <thead>
                    <tr>
                        <th class="w-8 p-2 lg:p-2.5 pt-3 whitespace-nowrap capitalize border-y font-semibold">No</th>
                        <th class="p-2 lg:p-2.5 pt-3 whitespace-nowrap capitalize border-y font-semibold text-xs text-start">Nama Undangan</th>
                        <th class="p-2 lg:p-2.5 pt-3 whitespace-nowrap capitalize border-y font-semibold text-xs text-start">Created At</th>
                        <th class="p-2 lg:p-2.5 pt-3 whitespace-nowrap capitalize border-y font-semibold text-xs text-start">Expired At</th>
                        <th class="p-2 lg:p-2.5 pt-3 whitespace-nowrap capitalize border-y font-semibold text-xs text-start">Status</th>
                        <th class="p-2 lg:p-2.5 pt-3 whitespace-nowrap capitalize border-y font-semibold text-xs text-start"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="i in 100" :key="i">
                        <td class="p-2 lg:p-2.5 pt-3 whitespace-nowrap capitalize border-b font-semibold text-xs">{{ i }}</td>
                        <td class="p-2 lg:p-2.5 pt-3 whitespace-nowrap capitalize border-b font-semibold text-xs">Nama Undangan</td>
                        <td class="p-2 lg:p-2.5 pt-3 whitespace-nowrap capitalize border-b font-semibold text-xs">created at</td>
                        <td class="p-2 lg:p-2.5 pt-3 whitespace-nowrap capitalize border-b font-semibold text-xs">expired at</td>
                        <td class="p-2 lg:p-2.5 pt-3 whitespace-nowrap capitalize border-b font-semibold text-xs">
                            <span class="mr-2 rounded-full bg-emerald-400/20 px-4 py-1 text-xs font-semibold text-emerald-400">Active</span>
                        </td>
                        <td class="p-2 lg:p-2.5 pt-3 whitespace-nowrap capitalize border-b font-semibold text-xs">Aksi</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>