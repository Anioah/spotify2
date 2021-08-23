<template>

    <div class="min-h-screen flex  sm:justify-center items-center sm:pt-0">
       
        

        <div class="w-full sm:max-w-md  px-4 py-6 bg-black shadow-md overflow-hidden sm:rounded-lg">
             
        <div class="flex flex-row items-center justify-center pt-4 mb-4">
            <slot name="logo" />
            
        </div>
            <slot />
        </div>
    </div>
</template>
