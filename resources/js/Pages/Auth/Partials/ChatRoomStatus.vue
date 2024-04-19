<template>
    <div class="flex flex-col gap-4 text-center rounded px-6 py-4 shadow-md bg-gray-900">
        <h2 class="text-xl">ChatRoom</h2>

        <div class="flex flex-col gap-4">
            <span>3 Users online</span>

            <div class="flex gap-5 rounded py-2 px-2 overflow-x-auto bg-gray-800">
                <div class="flex items-center gap-2 min-w-fit">
                    <div class="w-2 h-2 rounded-full bg-green-500"></div>
                    <span>Maria Hernandez</span>
                </div>

                <div class="flex items-center gap-2 min-w-fit">
                    <div class="w-2 h-2 rounded-full bg-green-500"></div>
                    <span>Steve Jobs</span>
                </div>

                <div class="flex items-center gap-2 min-w-fit">
                    <div class="w-2 h-2 rounded-full bg-green-500"></div>
                    <span>Elon Musk</span>
                </div>
            </div>

            <span>Last message sent: 2 min ago</span>
        </div>
    </div>
</template>
