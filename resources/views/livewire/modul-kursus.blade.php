<div class="flex flex-wrap -mx-3">
    <!-- Start Kursus -->
    <div class="flex-none w-full max-w-full px-3 mt-0">
        <div class="relative flex flex-col mb-6 bg-white shadow-soft-xl rounded-2xl p-6">
            <h1 class="text-center text-3xl lg:text-4xl font-bold text-gray-800">
                Daftar Modul Pembelajaran
            </h1>

            <!-- Box Deskripsi & Search -->
            <div class="mt-8 bg-gradient-fuchsia rounded-xl p-6">
                <div class="flex flex-col justify-between">
                    <!-- Deskripsi -->
                    <div class="text-center md:text-left mb-6 md:mb-0">
                        <h2 class="font-bold text-xl text-white mb-2">
                            Modul Belajar
                        </h2>
                        <p class="text-sm text-white mx-auto md:mx-0">
                            Pilih salah satu modul untuk melihat materi pembelajaran yang tersedia.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Daftar Modul -->
            <div class="w-full mt-10">
                @foreach ($modules as $index => $module)
                    <div class="collapse-item w-full mt-6 rounded-xl shadow border border-gray-200 p-4">
                        <!-- Header Collapse -->
                        <div class="mainHeading flex justify-between items-center cursor-pointer"
                            onclick="toggleCollapse(this)">
                            <p class="flex items-center font-medium text-gray-800 text-base">
                                <span class="mr-4 font-semibold text-xl">Modul {{ $index + 1 }}.</span>
                                {{ $module->title }}
                            </p>
                            <svg class="toggle-icon transition-transform duration-300 w-5 h-5 text-gray-500"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </div>

                        <!-- Isi Collapse -->
                        <div class="menu hidden mt-4">
                            <p class="text-base text-gray-600 leading-6">
                                {{ $module->content }}
                            </p>
                        </div>
                        <hr class="w-full mt-4" />
                    </div>
                @endforeach
            </div>
        </div>


        <div class="relative flex flex-col mb-6 bg-white shadow-soft-xl rounded-2xl p-6">
            <a href="{{ url('kursus/kuis/' . $course->id) }}"
                class="inline-block px-6 py-2 font-bold text-center text-size-lg text-fuchsia-500 border border-fuchsia-500 rounded-lg transition-all hover:scale-102 hover:opacity-80">
                Mengerjakan Kuis
            </a>
        </div>

    </div>
</div>

<script>
    function toggleCollapse(element) {
        const container = element.closest('.collapse-item');
        const content = container.querySelector('.menu');
        const icon = container.querySelector('.toggle-icon');

        content.classList.toggle('hidden');
        icon.classList.toggle('rotate-180');
    }
</script>
