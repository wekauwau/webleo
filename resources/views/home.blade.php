<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto py-24 sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-home.welcome />
                <!--Kegiatan-->
                <x-home.publications-section publication-type-id="1" more="kegiatan" />
                <!--Wawasan-->
                <x-home.publications-section publication-type-id="2" more="wawasan" />
            </div>
        </div>
    </div>
</x-app-layout>
