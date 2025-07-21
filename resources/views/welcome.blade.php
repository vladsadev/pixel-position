<x-layout>
    <div class="space-y-10">
        <section class="text-center pt-6">
           <h1 class="font-bold text-4xl">Let's Find Your next job</h1>

            <form action="" class="mt-4">
                <input type="text" placeholder="Web Developer..."
                       class="rounded-xl bg-white/5 border border-white/10 px-5 py-3 w-full max-w-xl" >
            </form>

        </section>

        <section class="pt-10">
            <x-section-heading> Feature Job</x-section-heading>
            {{-- cards container--}}
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 mt-6">
                <x-job-card />
                <x-job-card />
                <x-job-card />
            </div>
        </section>

        <section>
            <x-section-heading>Tags</x-section-heading>
            <div class="mt-6 space-x-1">
                <x-tag>Backend</x-tag>
                <x-tag>Frontend</x-tag>
                <x-tag>Big Data</x-tag>
                <x-tag>Cloud</x-tag>
            </div>

        </section>

        <section>
            <x-section-heading>Recent Jobs</x-section-heading>
            <div class="mt-6 space-y-3">
                <x-job-card-wide></x-job-card-wide>
                <x-job-card-wide></x-job-card-wide>
                <x-job-card-wide></x-job-card-wide>
            </div>
        </section>

        <section>
            <x-section-heading>Example section</x-section-heading>

            <div class="mt-4">
                <x-panel>
                    <h4 class="group-hover:text-red-500 text-4xl">super title</h4>
                </x-panel>
            </div>


        </section>


    </div>
</x-layout>
