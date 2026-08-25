<x-layout :title="$title">
    <p>Welcome to the Home Page</p>

    <div class="mt-3 flex">
        @for ($i = 1; $i <= 10; $i++)
            @if ($i % 2 === 0)
                <div class="me-1 grid size-8 place-items-center bg-teal-500 text-xs text-white">
                    {{ $i }}
                </div>
            @endif
        @endfor
    </div>

</x-layout>
