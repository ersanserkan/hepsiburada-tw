<button {{ $attributes->merge(['type' => 'button', 'class' => 'flex items-center gap-2 px-2 py-1 text-xs transition-all duration-300 rounded-lg hover:bg-red-100 hover:text-red-500 text-gray-600']) }}>
    {{ $slot }}
</button>
