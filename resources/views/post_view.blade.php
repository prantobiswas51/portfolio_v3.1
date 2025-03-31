<x-app-layout>

    <section class="text-black px-6 dark:text-gray-100">

        <div class="mb-4 md:mb-0 w-full mx-auto relative ">
            <div class="px-4 pt-10 lg:px-0">
                <h2 class="text-4xl font-semibold  leading-tight">
                    {{ $post->title }}
                </h2>
                <p>{{ $post->created_at->format('d M Y') }}</p>
            </div>

        </div>

        <div class="flex flex-col lg:flex-row lg:space-x-12">
            <div class="px-4 lg:px-0 mt-4  text-lg leading-relaxed w-full lg:w-3/4">
                
                <img class="w-full mb-4 object-cover lg:rounded" src="{{ asset('storage/' . $post->featured_image) }}" style="height: 28em;" />

                <div class="py-4" id="desBox">
                    {!! $post->content !!}
                </div>
            </div>

            {{-- Author Box --}}
            <div class="w-full lg:w-1/4 m-auto mt-4 max-w-screen-sm">
                <div class="p-4 border-t border-b md:border md:rounded">
                    <div class="flex py-2">
                        <img src="{{ asset('assets/images/pranto.png') }}"
                            class="h-10 w-10 rounded-full mr-2 object-cover" />
                        <div>
                            <p class=" text-sm"> Pranto Biswas </p>
                            <p class=" text-sm"> Full-stack developer | Admin</p>
                        </div>
                    </div>
                    <p class=" py-3">
                        I am an full-stack developer, developing custom websites with laravel and Wordpress websites. Expert in Elementor pro, Newspaper, Astra theme and more. Building woo-commerce websites. Custom Landing pages or Product pages. I might do more if you just lemme know :)
                    </p>
                    <a href="https://facebook.com/prantobd320" target="_blank">
                        <button class="p-2 dark:text-gray-100 bg-sky-700 mb-2 flex w-full items-center justify-center rounded">
                            <img class="w-6 h-6 mr-1" src="{{ asset('assets/images/facebook.jpg') }}" alt=""> Inbox Now
                        </button>
                    </a>
                    <a href="https://wa.me/01823744169?text=Hello Developer?">
                        <button class="p-2 dark:text-gray-100 bg-green-700 mb-2 flex w-full items-center justify-center rounded">
                            <img class="w-6 h-6 mr-1" src="{{ asset('assets/images/whatsapp.webp') }}" alt=""> Whatsapp Now
                        </button>
                    </a>
                    <a href="mailto:prantobd320@gmail.com">
                        <button class="p-2 dark:text-gray-100 bg-sky-700 flex w-full items-center justify-center rounded">
                            <x-heroicon-s-envelope class="w-6 h-6 mr-1" /> Order a website Now
                        </button>
                    </a>
                </div>
            </div>


        </div>




    </section>
</x-app-layout>