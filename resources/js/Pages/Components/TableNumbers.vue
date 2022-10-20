<template>
    <div class="overflow-x-auto relative">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="py-3 px-6">Número</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="number in numbers" class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <td scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ number }}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>
<script>
    import { defineComponent } from 'vue'

    export default defineComponent({
        props: {
            numbers: Array,
        }
    })
</script>