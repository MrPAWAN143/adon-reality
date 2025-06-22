<div class="flex items-center justify-between gap-1 p-4 bg-white rounded-xl shadow-md hover:shadow-lg transition">
    <div class="text-txBlack text-start text-sm order-1">{{ $content }}</div>
   
    <div class="text-primary order-2">{{ $icon }}</div>
    {{ $slot }}
</div>

