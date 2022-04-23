<x-layouts.app previewify="858" :previewify-data="[
    'title' => 'Filament Tricks',
    'subtitle' => 'Tricks for Filament created by Filament users',
]">
    <x-header>
        Community Tricks
    </x-header>

    <x-section id="all-links">
        @livewire(\App\Http\Livewire\Tricks\SearchTricks::class)
    </x-section>

    <section class="bg-gray-900">
        <div class="relative lg:flex items-center space-y-16 max-w-7xl mx-auto px-8 py-32 lg:space-y-0 lg:space-x-16">
            <div class="flex-grow space-y-8">
                <div class="space-y-4">
                    <h2 class="font-heading font-bold text-primary-200 text-4xl">
                        Submit your own tricks 🚀
                    </h2>

                    <p class="text-xl text-white">
                        Visit the trick dashboard to publish your own tricks to our website!
                    </p>
                </div>

                <a
                        href="/admin/tricks"
                        target="_blank"
                        class="group inline-flex items-center justify-center px-6 text-lg sm:text-xl font-semibold tracking-tight text-white transition rounded-lg h-11 ring-2 ring-inset ring-white hover:bg-primary-200 hover:text-primary-800 hover:ring-primary-200 focus:ring-primary-200 focus:text-primary-800 focus:bg-primary-200 focus:outline-none"
                >
                    Go to trick dashboard
                </a>
            </div>

            <div class="hidden absolute right-0 top-12 mr-12 xl:block">
                <img
                        src="{{ asset('images/hands.svg') }}"
                        alt="Hands"
                        class="h-[8rem]"
                />
            </div>
        </div>
    </section>
</x-layouts.app>