<template>
    <div class="flex flex-col gap-4 text-center rounded px-6 py-4 shadow-md bg-gray-900">
        <h2 class="text-xl">Finance</h2>

        <div class="text-[16px]">
            <div class="flex flex-col items-center gap-2">

                <div class="flex gap-2">
                    <div class="flex flex-col rounded gap-2 px-4 py-2 bg-green-500">
                        <p>Income</p>
                        <span class="font-semibold">$5.694.00</span>
                    </div>

                    <div class="flex flex-col rounded gap-2 px-4 py-2 bg-red-500">
                        <p>Expenses</p>
                        <span class="font-semibold">-$293.00</span>
                    </div>
                </div>

                <div class="flex flex-col rounded gap-2 px-4 py-2 bg-blue-500">
                    <p>Total</p>
                    <span class="font-semibold">$5.401.00</span>
                </div>
            </div>
        </div>

        <span>Last finance creation: 12 min ago</span>
    </div>
</template>