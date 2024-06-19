<template>
    <div class="w-full box-border">
        <div class="w-full flex items-center justify-between">
            <h1 class="font-bold text-lg mb-5">Last Transaction</h1>
            <h1>Pilih</h1>
        </div>

        <div class="w-full box-border">
            <table class="table w-full bg-white border">
                <thead>
                    <tr>
                        <th class="p-2 lg:p-2.5 pt-3 whitespace-nowrap capitalize border-y font-semibold text-xs text-start">No</th>
                        <th class="p-2 lg:p-2.5 pt-3 whitespace-nowrap capitalize border-y font-semibold text-xs text-start">Nama Undangan</th>
                        <th class="p-2 lg:p-2.5 pt-3 whitespace-nowrap capitalize border-y font-semibold text-xs text-start">Created At</th>
                        <th class="p-2 lg:p-2.5 pt-3 whitespace-nowrap capitalize border-y font-semibold text-xs text-start">Expired At</th>
                        <th class="p-2 lg:p-2.5 pt-3 whitespace-nowrap capitalize border-y font-semibold text-xs text-start">Status</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td class="p-2 lg:p-2.5 pt-3 whitespace-nowrap capitalize border-b font-semibold text-xs">No</td>
                        <td class="p-2 lg:p-2.5 pt-3 whitespace-nowrap capitalize border-b font-semibold text-xs">Nama Undangan</td>
                        <td class="p-2 lg:p-2.5 pt-3 whitespace-nowrap capitalize border-b font-semibold text-xs">created at</td>
                        <td class="p-2 lg:p-2.5 pt-3 whitespace-nowrap capitalize border-b font-semibold text-xs">expired at</td>
                        <td class="p-2 lg:p-2.5 pt-3 whitespace-nowrap capitalize border-b font-semibold text-xs">
                            <span class="mr-2 rounded-full bg-emerald-400/20 px-4 py-1 text-xs font-semibold text-emerald-400">Active</span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>