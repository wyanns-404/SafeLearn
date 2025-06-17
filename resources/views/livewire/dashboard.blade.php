<div>
    <!-- row 1 -->
    <div class="flex flex-wrap -mx-3">

        <div class="w-full px-6 mx-auto">
            <div class="relative flex items-center p-0 mt-6 overflow-hidden bg-center bg-cover min-h-75 rounded-2xl"
                style="background-image: url('../assets/img/curved-images/curved0.jpg'); background-position-y: 50%">
                <span class="absolute inset-y-0 w-full h-full bg-center bg-cover bg-gradient-fuchsia opacity-60"></span>
            </div>
            <div
                class="relative flex flex-col flex-auto min-w-0 p-4 mx-6 -mt-16 overflow-hidden break-words border-0 shadow-blur rounded-2xl bg-white/80 bg-clip-border backdrop-blur-2xl backdrop-saturate-200">
                <div class="flex flex-wrap -mx-3">
                    <div class="flex-none w-auto max-w-full px-3 my-auto">
                        <div class="h-full">
                            <h5 class="mb-1">Welcome, {{ $user->name }}</h5>
                            <p class="mb-0 font-semibold leading-normal text-size-sm">
                                Lorem ipsum dolor sit, amet
                                consectetur adipisicing elit.</p>
                        </div>
                    </div>

                    <div class="w-full max-w-full px-3 mx-auto mt-4 sm:my-auto sm:mr-0 md:w-1/2 md:flex-none lg:w-4/12">
                        <div class="relative right-0">
                            <ul class="relative flex flex-wrap p-1 list-none bg-transparent rounded-xl">
                                <li class="z-30 flex-auto text-center">
                                    <a class="inline-block w-full px-6 py-3 my-4 font-bold text-center text-white uppercase align-middle transition-all ease-in border-0 rounded-lg select-none shadow-soft-md bg-150 bg-x-25 leading-pro text-size-xs bg-gradient-fuchsia hover:shadow-soft-2xl hover:scale-102"
                                        href="#">Upgrade to premium</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Kursus -->
        <div class="flex-none w-full max-w-full px-3 mt-6">
            <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border">
                <div class="p-4 pb-0 mb-0 bg-white rounded-t-2xl">
                    <h6 class="mb-1">Kursus</h6>
                    <p class="leading-normal text-size-sm">Berikut kursus yang tersedia</p>
                </div>
                <div class="flex-auto p-4">
                    <div class="flex flex-wrap -mx-3">
                        {{--  --}}
                        <div class="w-full max-w-full px-3 mb-6 md:w-6/12 md:flex-none xl:mb-0 xl:w-3/12">
                            <div class="relative flex flex-col min-w-0 break-words bg-transparent border-0 shadow-none rounded-2xl bg-clip-border">
                                <div class="relative">
                                    <a class="block shadow-xl rounded-2xl">
                                        <img src="../assets/img/home-decor-1.jpg" alt="img-blur-shadow"
                                            class="max-w-full shadow-soft-2xl rounded-2xl" />
                                    </a>
                                </div>
                                <div class="flex-auto px-1 pt-6">
                                    <a href="javascript:;">
                                        <h5>Modern</h5>
                                    </a>
                                    <p class="mb-6 leading-normal text-size-sm">As Uber works through a huge amount of
                                        internal
                                        management turmoil.</p>
                                    <div class="flex items-center justify-center">
                                        <button type="button" class="w-full inline-block px-8 py-2 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none cursor-pointer leading-pro ease-soft-in text-size-xs hover:scale-102 active:shadow-soft-xs tracking-tight-soft border-fuchsia-500 text-fuchsia-500 hover:border-fuchsia-500 hover:bg-transparent hover:text-fuchsia-500 hover:opacity-75 hover:shadow-none active:bg-fuchsia-500 active:text-white active:hover:bg-transparent active:hover:text-fuchsia-500">
                                            View Course
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{--  --}}
                        
                    </div>
                </div>
            </div>
            
        </div>
    </div>

    <!-- Harga DLL 2 -->
    <div class="flex flex-wrap mt-6 -mx-3">
        <div class="w-full px-3 mb-6 lg:mb-0 lg:w-7/12 lg:flex-none">
            <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                <div class="flex-auto p-4">
                    <div class="flex flex-wrap -mx-3">
                        <div class="max-w-full px-3 lg:w-1/2 lg:flex-none">
                            <div class="flex flex-col h-full">
                                <p class="pt-2 mb-1 font-semibold"><s>Rp.300.000,00</s></p>
                                <h5 class="font-bold">Rp.149.000,00</h5>
                                <p class="mb-12">Upgrade To Premium, Akses Penuh Semua Kursus, dari warna, kartu, tipografi hingga elemen kompleks, Anda akan menemukand
                                    dokumentasi lengkap.</p>
                                <a class="inline-block w-full px-6 py-3 my-4 font-bold text-center text-white uppercase align-middle transition-all ease-in border-0 rounded-lg select-none shadow-soft-md bg-150 bg-x-25 leading-pro text-size-xs bg-gradient-fuchsia hover:shadow-soft-2xl hover:scale-102"
                                    href="https://www.creative-tim.com/product/soft-ui-dashboard-pro-tall"
                                    target="_blank">BELI SEKARANG</a>
                            </div>
                        </div>
                        <div class="max-w-full px-3 mt-12 ml-auto text-center lg:mt-0 lg:w-5/12 lg:flex-none">
                            <div class="h-full bg-gradient-fuchsia rounded-xl">
                                <img src="../assets/img/shapes/waves-white.svg"
                                    class="absolute top-0 hidden w-1/2 h-full lg:block" alt="waves" />
                                <div class="relative flex items-center justify-center h-full">
                                    <img class="relative z-20 w-full pt-6"
                                        src="../assets/img/illustrations/rocket-white.png" alt="rocket" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full max-w-full px-3 lg:w-5/12 lg:flex-none">
            <div
                class="border-black/12.5 shadow-soft-xl relative flex h-full min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border p-4">
                <div class="relative h-full overflow-hidden bg-cover rounded-xl"
                    style="background-image: url('../assets/img/ivancik.jpg')">
                    <span
                        class="absolute top-0 left-0 w-full h-full bg-center bg-cover bg-gradient-dark-gray opacity-80"></span>
                    <div class="relative z-10 flex flex-col flex-auto h-full p-4">
                        <h5 class="pt-2 mb-6 font-bold text-white">Work with the rockets</h5>
                        <p class="text-white">Wealth creation is an evolutionarily recent positive-sum game. It is
                            all about who take the opportunity first. Lorem ipsum dolor sit amet, consectetur
                            adipisicing elit.
                            Est vel dolorem voluptatem doloremque commodi beatae excepturi ut at.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
