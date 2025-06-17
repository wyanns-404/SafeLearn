<div>
    <!-- row 1 -->
    <div class="flex flex-wrap -mx-3">
        <div class="w-full px-3 mb-6 lg:mb-0 lg:w-7/12 lg:flex-none">
            <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                <div class="flex-auto p-4">
                    <div class="flex flex-wrap -mx-3">
                        <div class="max-w-full px-3 lg:flex-none">
                            <div class="flex flex-col h-full">
                                <h5 class="font-bold">KUIS</h5>
                                <div class="mb-12">
                                    <ul class="list-disc list-inside">
                                        <li>
                                            Kamu diberikan kesempatan untuk mengulang assignment apabila tidak mencapai nilai minimal yang ditentukan sebanyak <strong>3 kali</strong> (setiap <strong>24 jam</strong>).
                                        </li>
                                        <li>
                                            Nilai yang ditampilkan adalah <strong>nilai tertinggi</strong> yang berhasil kamu peroleh dari semua pengulangan.
                                        </li>
                                    </ul>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full max-w-full px-3 lg:w-5/12 lg:flex-none">
            <div class="border-black/12.5 shadow-soft-xl relative flex h-full min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border p-4">
                <div class="relative h-full overflow-hidden bg-cover rounded-xl">
                    <span
                        class="absolute top-0 left-0 w-full h-full bg-center bg-cover bg-gradient-dark-gray opacity-80"></span>
                    <div class="relative z-10 flex flex-col flex-auto h-full p-4 text-center align-center">
                        <h5 class="pt-2 mb-6 font-bold text-white">Nilai Kamu</h5>
                        <p class="text-white text-7">
                            {{ $score ?? 0 }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="flex flex-wrap -mx-3 mt-16">
        <!-- Start Kuis -->
        <div class="flex-none w-full max-w-full px-3 mt-0">
            <div class="relative flex flex-col mb-6 bg-white shadow-soft-xl rounded-2xl p-6">

                <!-- Box Deskripsi -->
                <div class="bg-gradient-fuchsia rounded-xl p-4 mb-6">
                    <p class="text-sm text-white text-center md:text-left">
                        Kerjakan soal dengan teliti!
                    </p>
                </div>

                <!-- Pesan sukses -->
                @if (session()->has('success'))
                    <div class="mb-4 p-3 bg-green-100 text-green-700 rounded">
                        {{ session('success') }}
                    </div>
                @endif

                <!-- Soal-Soal Kuis -->
                <form wire:submit.prevent="submit" class="space-y-8">
                    @foreach ($questions as $index => $question)
                        <div class="p-4 border border-gray-200 rounded-xl shadow">
                            <p class="mb-4 font-semibold text-gray-800 text-lg">
                                {{ $index + 1 }}. {{ $question->content }}
                            </p>
                            <div class="space-y-2">
                                @foreach ($question->choices as $choice)
                                    <label class="flex items-center space-x-2">
                                        <input
                                            type="radio"
                                            wire:model="answers.{{ $question->id }}"
                                            value="{{ $choice->id }}"
                                            class="form-radio text-fuchsia-600"
                                        >
                                        <span>{{ $choice->choice_text }}</span>
                                    </label>
                                @endforeach
                            </div>
                        </div>
                    @endforeach

                    <!-- Tombol Submit -->
                    <div class="mt-6 text-right">
                        <button type="submit" class="bg-fuchsia-600 text-white px-6 py-2 rounded-xl hover:bg-fuchsia-700">
                            Kumpulkan Jawaban
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>    

</div>
