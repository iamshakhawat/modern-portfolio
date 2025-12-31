@php
    $socials = \App\Models\Social::where('status', 1)->get();
@endphp
<!-- 6. Footer -->
<footer
    class="bg-gray-100 dark:bg-gray-900 border-t border-gray-200 dark:border-gray-700/50 py-8 transition-colors duration-500">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">

        <!-- Profile Photo (Mini Size) -->
        <div class="mx-auto w-12 h-12 rounded-full overflow-hidden mb-2 border-2 border-indigo-500">
            @php
                $hero = \App\Models\Hero::first();
            @endphp
            @if ($hero && $hero->hero_img && !empty($hero->hero_img))
                <img src="{{ asset('storage/' . $hero->hero_img) }}" alt="Mini Photo" class="w-full h-full object-cover"
                    onerror="this.style.display='none'; this.closest('div').innerHTML='<i class=\'fa-solid fa-user text-2xl text-indigo-500\'></i>'">
            @else
                <img src="https://placehold.co/48x48/e5e7eb/1f2937?text=S" alt="Mini Photo"
                    class="w-full h-full object-cover"
                    onerror="this.style.display='none'; this.closest('div').innerHTML='<i class=\'fa-solid fa-user text-2xl text-indigo-500\'></i>'">
            @endif
        </div>

        <!-- Name -->
        <p class="text-xl font-bold text-gray-900 dark:text-white mb-3">{{ $user->name ?? 'Shakhawat Hosen' }}</p>

        <!-- Social Media Icons (Footer) -->
        <div class="flex justify-center space-x-6 text-xl text-gray-600 dark:text-gray-400 mb-4">
            @foreach ($socials as $social)
                <a href="{{ $social->url }}" target="_blank" style="transition: color 0.3s;"
                    onmouseover="this.style.color='{{ $social->color }}'" onmouseout="this.style.color=''"
                    title="{{ $social->name }}">
                    <i class="fab {{ $social->icon }}"></i>
                </a>
            @endforeach

        </div>

        <!-- Copyright Text -->
        <p class="text-sm text-gray-500">
            &copy; <span id="year"></span> Shakhawat Hosen. All rights reserved. <br class="sm:hidden">
            Designed and
            Developed with <i class="fa-solid fa-heart text-red-500"></i>.
        </p>
    </div>
</footer>


<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="{{ asset('web/js/app.js') }}"></script>
@session('success')
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Success',
            text: '{{ session('success') }}',
            timer: 3000,
            timerProgressBar: true,
            showConfirmButton: true,
        });
    </script>
@endsession



@session('error')
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: '{{ session('error') }}',
            timer: 3000,
            timerProgressBar: true,
            showConfirmButton: true,
        });
    </script>
@endsession
@stack('js')
</body>

</html>
