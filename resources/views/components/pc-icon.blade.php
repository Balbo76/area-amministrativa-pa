@props(['name', 'size' => ''])

<svg
    xmlns="http://w3.org"
    viewBox="0 0 24 24"
    fill="none"
    stroke="currentColor"
    stroke-width="2"
    stroke-linecap="round"
    stroke-linejoin="round"
    {{ $attributes->merge(['class' => 'icon align-middle ' . $size]) }}
>
    @switch($name)
        {{-- 1. ICONE AREE DI EMERGENZA --}}
        @case('area-attesa')
            <rect x="3" y="3" width="18" height="18" rx="2" />
            <path d="M12 7l-4 10M12 7l4 10M9.5 13h5" />
            @break

        @case('area-ricovero')
            <path d="M12 4L3 17v3h18v-3L12 4z" />
            <path d="M12 4v16" />
            <path d="M8 20l4-6 4 6" />
            @break

        @case('area-ammassamento')
            <rect x="2" y="2" width="20" height="20" rx="2" stroke-dasharray="3 3" />
            <path d="M6 14h8V9H6v5zM14 14h4l2-2V9h-6v5z" />
            <circle cx="8" cy="16" r="1.5" />
            <circle cx="16" cy="16" r="1.5" />
            @break

            {{-- 2. CENTRI DI COMANDO --}}
        @case('coc')
        @case('com')
            <path d="M3 21h18M5 21V10l7-5 7 5v11" />
            <path d="M9 21v-4h6v4M12 5V2m-3 1h6" />
            @break

        @case('sede-volontari')
            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
            <path d="M12 11a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5z" />
            @break

            {{-- 3. RISCHI AMBIENTALI --}}
        @case('rischio-idrogeologico')
            <path d="M2 12c4-4 6 4 10 0s6-4 10 0M2 17c4-4 6 4 10 0s6-4 10 0" />
            @break

        @case('rischio-meteo')
            <path d="M19 16.9A5 5 0 0 0 18 7h-1.26a8 8 0 1 0-11.62 8.58" />
            <path d="M13 11l-3 5h4l-2 5" />
            @break

        @case('rischio-sismico')
            <path d="M3 12h5l2-4 3 8 2-6 2 4h5" />
            <path d="M2 18h20M2 6h20" stroke-dasharray="2 2" />
            @break

        @case('rischio-incendi')
            <path d="M12 2c0 0 6 3.5 6 9.5a6 6 0 0 1-12 0C6 5.5 12 2 12 2z" />
            <path d="M12 7c0 0 3 2 3 5a3 3 0 0 1-6 0c0-3 3-5 3-5z" />
            @break

        @case('rischio-neve')
            <path d="M12 2v20M2 12h20M5 5l14 14M19 5L5 19M12 6l3 3M12 18l-3-3M6 12l3 3M18 12l-3-3" />
            @break

            {{-- 4. UTILITY WEB --}}
        @case('allerta-attiva')
            <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9M13.73 21a2 2 0 0 1-3.46 0" />
            @break

        @case('norme-comportamento')
            <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2zM22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z" />
            <path d="M12 8v5M12 17h.01" />
            @break

        @case('diventa-volontario')
            <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
            <circle cx="8.5" cy="7" r="4" />
            <line x1="20" y1="8" x2="20" y2="14" />
            <line x1="17" y1="11" x2="23" y2="11" />
            @break
    @endswitch
</svg>
