<template>
    <Head title="Numbers" />
    <div class="flex h-screen justify-center items-center">
        <div class="overflow-y-auto h-96 w-96">
            <div class="p-6 max-w-lg bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 ">
                <div class="grid grid-cols-1 divide-y">
                    <h5 class="m-2 text-center text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Números de 1 a 200</h5>
                    <small class="text-center text-sm text-gray-900 dark:text-white">Para cada número que for múltiplo de de 4 será impresso "XXX"  e para cada número múltiplo de 7 será impresso "YYY", quando for multiplo pelos dois, será impresso: "XXXYYY".</small>
                    <div class="pt-4">
                        <TableNumbers :numbers="numbers" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    import { defineComponent } from 'vue'
    import { Head } from '@inertiajs/inertia-vue3';
    import TableNumbers from './Components/TableNumbers.vue';

    export default defineComponent({
        components: {
            Head,
            TableNumbers
        },

        props: {
            numbers: Array,
        }
    })
</script>