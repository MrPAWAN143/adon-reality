
            <div class="development-partner-card ">
                <div class="p-4">
                    <div class="flex items-center gap-4 mb-4">
                        <img src="{{ $partnerLogo }}" alt="{{ $alt }}" class="w-16 h-16 rounded-full object-contain">
                        <div>
                            <h3>{{ $heading }}</h3>
                            <p class="development-partner-description">{{ $description }}</p>
                        </div>
                    </div>
                    <p class="text-lg font-semibold text-txBlack">Projects Partnered: <span class="font-normal">{{ $projectsPartnered }}</span></p>
                    <p class="text-lg text-txBlack mt-1">Presence: {{ $presence }}</p>
                </div>
                <div class="mt-6">
                    <a href="{{ $url }}" class="development-partner-button">
                        Explore Projects
                        <x-tabler-arrow-up-right class="ml-2" />
                    </a>
                </div>
            </div>