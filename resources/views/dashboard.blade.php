<div class= "bg-gradient-to-r from-[#F9FBE7] to-[#F0EDD4] border-b border-[#ECCDB4]; min-height: 100vh;">
   <x-layouts.app :title="__('Dashboard')">
        <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl p-6">
            
            <!-- Pengenalan Aplikasi -->
            <div class="bg-[#fbe9e7] text-pink-600 p-4 rounded-xl shadow-md dark:bg-blue-900 dark:text-white">
                <h2 class="text-xl font-semibold text-center">Welcome to PKL4SIJA Page!</h2>
                @if(auth()->check() && auth()->user()->hasRole('Siswa') && !auth()->user()->siswa)
                @else
                @endif
            </div>

            <!-- Langkah-Langkah Penggunaan Aplikasi -->
            <div class="bg-[#f3e7fb] text-purple-800 p-4 rounded-xl shadow-md dark:bg-green-800 dark:text-white">
                <h2 class="text-xl font-semibold text-center">Langkah-Langkah Penggunaan Aplikasi</h2>
                <ul class="mt-2 text-sm list-inside">
                    <li>1. Ganti email pada profil Anda dengan <b>email asli!</b> Karena akan memengaruhi proses administrasi.</li>
                    @if(auth()->check() && auth()->user()->hasRole('Siswa'))
                        <li>2. Lengkapi data siswa dan pilih tempat PKL yang sesuai.</li>
                    @else
                        <li>2. Lengkapi data guru pada halaman yang tersedia.</li>
                    @endif
                    <li>3. Periksa status PKL dan pastikan semua informasi valid.</li>
                    <li>4. Pilih tombol "Simpan" untuk mengajukan penempatan PKL.</li>
                    <li>5. Guru pembimbing dapat memantau dan status siswa langsung di dashboard.</li> 
                    <li>6. Cek laporan perkembangan siswa di bagian laporan.</li>
                    <br>
                    <li>Pastikan data yang diinputkan lengkap dan akurat agar proses penempatan PKL berjalan dengan lancar.
                    Periksa kembali data yang telah Anda masukkan sebelum menyimpan atau mengirimkan permohonan PKL. <li>
                </ul>
            </div>
        </div>
    </x-layouts.app>
</div>