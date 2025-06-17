<div class="flex flex-wrap -mx-3">
    <!-- Start Kursus -->
    <div class="flex-none w-full max-w-full px-3 mt-0">
        <div
            class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border">
            <div class="p-4 pb-0 mb-0 bg-white rounded-t-2xl">
                <p class="leading-normal text-size-sm">Berikut kursus yang tersedia</p>
            </div>

            <div class="flex-auto p-4">
                <div class="flex flex-col gap-6">
                    <!-- Kartu Kursus Dinamis -->
                    @foreach ($courses as $course)
                    <div class="w-full max-w-full px-3">
                        <div
                            class="relative flex flex-col md:flex-row min-w-0 break-words bg-white shadow-md rounded-2xl overflow-hidden">
                            <!-- Gambar -->
                            <div class="w-full md:w-1/3 h-60 md:h-auto">
                                <a class="block w-full h-full">
                                    <img src="../assets/img/{{ $course->name }}.jpg" alt="img-blur-shadow"
                                        class="w-full h-full object-cover shadow-soft-2xl" />
                                </a>
                            </div>
                            <!-- Konten -->
                            <div class="flex-auto p-6">
                                <a href="{{ url('kursus/modul/'.$course->id) }}">
                                    <h5 class="text-lg font-semibold">{{ $course->name }}</h5>
                                </a>
                                <p class="mb-4 text-size-sm text-gray-600">
                                    {{ $course->description }}
                                </p>
                                <a href="{{ url('kursus/modul/'.$course->id) }}"
                                    class="inline-block px-6 py-2 font-bold text-size-xs text-fuchsia-500 border border-fuchsia-500 rounded-lg transition-all hover:scale-105 hover:opacity-80">
                                    View Project
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- End Kartu Kursus Dinamis -->
                </div>
            </div>
        </div>
    </div>
</div>
