<template>
    <div class=" w-full h-full bg-white">
        <div class=" absolute w-full h-auto flex flex-row">
            <div class="flex-1"></div>
            <div class="mx-auto h-auto">
                <div class=" mr-24 mt-32 w-auto h-auto">
                    <div class="border rounded-full p-2">
                        <input class=" py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:placeholder-transparent" id="username" type="text" placeholder="Search">                   
                        <button class=" text-white font-bold p-2 rounded-full focus:outline-none">
                            <img src="../../../public/fonts/cari.png" class=" w-4 h-4" alt="Cari">
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class=" absolute w-full h-auto">
            <div id="bg_Navbar" class=" rounded-full h-16 text-black flex flex-row bg-daskom-abu-muda m-10 font-bebas text-lg">
                <div id="logo_dsk" class=" w-1/2 h-full flex">
                    <a href="#" class="w-auto h-12 my-auto flex flex-row hover:no-underline hover:text-black">
                        <div class=" w-auto h-12 my-auto ml-2 flex flex-row bg-white rounded-full">
                            <img src="/fonts/daskom.svg" class=" w-16" alt="LOGO"> 
                            <div class=" my-auto w-24">
                                DASKOM BLOG
                            </div> 
                        </div>
                    </a>
                </div>
                <div id="menu_dsb" class=" w-1/2 flex flex-row text-daskom-abu-tua">
                    <div class="flex-1"></div>
                    <div class=" w-auto h-auto my-auto mr-10 hover:text-black">
                        HOME
                    </div>
                    <div class=" w-auto h-auto my-auto mr-10 hover:text-black">
                        ARTICLES
                    </div>
                    <div class=" w-auto h-auto my-auto mr-10 hover:text-black">
                        ABOUT
                    </div>
                    <div class=" w-auto h-auto my-auto mr-10 hover:text-black">
                        CONTACTS
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>