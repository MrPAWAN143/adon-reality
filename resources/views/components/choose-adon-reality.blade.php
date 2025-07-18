<div class="flex items-center justify-between gap-1 p-4 bg-white rounded-xl shadow-[0_2px_15px_rgba(0,0,0,0.15)] hover:shadow-[0_4px_20px_rgba(0,0,0,0.2)] transition">
    <div class="text-txBlack text-start text-sm order-1">{{ $content }}</div>
   
    <div class="text-primary order-2">{{ $icon }}</div>
    {{ $slot }}
</div>

