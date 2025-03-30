<x-app-layout>

    <div class="container py-24 px-6 mx-auto text-black dark:text-white">

        <section class="mx-auto grid gap-8 grid-cols-1 md:grid-cols-2">
            <div class="flex flex-col text-xl justify-center rounded-lg p-4">
                <div class="name">Hello</div>
                <div class="name flex">
                    <h1>I am </h1>
                    <h1 class="text-2xl font-[Harlow] px-4"> Pranto Biswas </h1>
                </div>
                <div class="name">Full Stack Developer</div>
                <div class="name">Transforming ideas into stunning digital experiences, from design to development.
                    Let's create something extraordinary together.</div>

                <div class="my-4 flex">
                    <div>
                        <a class="mr-2" href="https://github.com/prantobiswas51">
                            <i class="fa-solid fa-xl fa-brands fa-github"></i> </a>
                        <a class="mr-2" href="https://www.facebook.com/prantobd320/">
                            <i class="fa-solid fa-brands fa-xl fa-facebook"></i> </a>
                        <a class="mr-2" href="https://www.linkedin.com/in/prantobd320/">
                            <i class="fa-solid fa-brands fa-xl fa-linkedin"></i> </a>
                        <a class="mr-2" href="https://www.youtube.com/techland360">
                            <i class="fa-solid fa-brands fa-xl fa-youtube"></i> </a>
                    </div>

                    <div class="flex items-center">
                        <a class="mr-2" href="https://www.upwork.com/freelancers/prantobiswasdev">
                            <x-upwork />
                        </a>
                        <a class="mr-2" href="https://www.fiverr.com/users/sanjoy320">
                            <x-fiverr />
                        </a>
                    </div>

                </div>

                <div class="">
                    <a href="mailto:prantobd320@gmail.com">
                        <x-primary-button class="my-4 justify-center bg-sky-500 dark:text-gray-800">Hire Me Now!!</x-primary-button>
                    </a>
                    <a href="{{ asset('assets/images/prantoCV.pdf') }}">
                        <x-primary-button class="my-4 justify-center dark:text-gray-800 dark:bg-gray-200 bg-gray-800">
                            Download CV</x-primary-button>
                    </a>
                    <a href="{{ route('skills') }}">
                        <x-primary-button class="my-4 justify-center dark:bg-gray-200 dark:text-gray-800 bg-gray-800">
                            Check Works</x-primary-button>
                    </a>
                </div>
            </div>

            <div class="p-4 flex md:p-0 content-center z-0 self-center align-baseline rounded-lg  sm:px-16">
                <img class="avatar mx-auto floating" src="{{ asset('assets/images/pranto.png') }}" alt="Pranto">
            </div>

        </section>

        <div class="md:h-40"></div>

        <section class="text-black  dark:text-black">

            <div class="flex flex-col md:flex-row">
                <div
                    class="bg-gray-100 dark:bg-gray-800 dark:text-gray-50 p-4 shadow-lg border rounded-lg my-4 md:mx-4 w-full">
                    <p class="text-2xl">Languages I Speak</p>
                    <p>HTML5, CSS3, SCSS, SASS, PHP, Laravel, Vanila JS, Vue.js, jQuery,
                        Tailwindcss, Bootstrap</p>
                </div>

                <div
                    class="bg-gray-100 dark:bg-gray-800 dark:text-gray-50 p-4 shadow-lg border rounded-lg my-4 md:mx-4 w-full">
                    <p class="text-2xl">CMS I work on</p>
                    <p>WordPress, Laravel, Shopify, Webflow, Typedream</p>
                </div>
            </div>



            <div class="flex flex-col md:flex-row">
                <div
                    class="bg-gray-100 dark:bg-gray-800 dark:text-gray-50 p-4 shadow-lg border rounded-lg my-4 md:mx-4 w-full">
                    <p class="text-2xl">Profession</p>
                    <p>Web Designer, Web Developer, Graphic Designer, UI Designer</p>
                </div>
                <div
                    class="bg-gray-100 dark:bg-gray-800 dark:text-gray-50 p-4 shadow-lg border rounded-lg my-4 md:mx-4 w-full">
                    <p class="text-2xl">Other Skills</p>
                    <p>Personal Asistant, Graphic Designer, Photo editor, Canva designer, Domain - Hosting expert</p>
                </div>
            </div>

        </section>

        <section class="">
            <div class="flex flex-col md:flex-row">
                <div
                    class="bg-sky-100 dark:bg-sky-800 dark:text-gray-50 p-4 shadow-lg  rounded-lg my-4 md:mx-4 w-full">
                    <p class="text-2xl">My Skills</p>
                    <p>Check out my skills and get your favourite quotes</p>
                </div>
            </div>
            
            <div class="m-2 sm:flex sm:justify-center flex-wrap">
                <div class="flex min-w-[300px] flex-col m-2 rounded-lg bg-white dark:bg-gray-700 text-surface shadow-secondary-1 dark:bg-surface-dark dark:text-white sm:shrink-0 sm:grow sm:basis-0">
                    <img class="rounded-t-lg" src="./images/Web-design.jpg" alt="" />
                    <div class="p-6">
                        <h5 class="mb-2 text-xl font-medium leading-tight">Web Design</h5>
                        <p class="mb-4 text-base">
                            Get a design for your website or design your website with our help. This category includes WordPress design like Elementor, Newpaper (TagDiv Composer) etc designs too. Hire us for any
                            website design jobs.
                        </p>
                  </div>
                  <div class="mt-auto rounded-b-lg border-t-2 border-neutral-100 bg-sky-500 px-6 py-3 text-center text-surface/75 dark:border-white/10 dark:text-neutral-300">
                    <a href="mailto:prantobd320@gmail.com" class="text-black dark:text-white"><button class="">Get a quote Now</button></a>
                  </div>
                </div>
            
                <div class="flex min-w-[300px] flex-col m-2 rounded-lg bg-white dark:bg-gray-700 text-surface shadow-secondary-1 dark:bg-surface-dark dark:text-white sm:shrink-0 sm:grow sm:basis-0">
                    <img class="rounded-t-lg" src="./images/Web_development.png" alt="" />
                    <div class="p-6">
                        <h5 class="mb-2 text-xl font-medium leading-tight">Web Development</h5>
                        <p class="mb-4 text-base">
                        Develop your website's funtionality through us. It could be custom coding or funtionalities that could be gained through plugins or themes.
                        </p>
                  </div>
                  <div class="mt-auto rounded-b-lg border-t-2 border-neutral-100 bg-sky-500 px-6 py-3 text-center text-surface/75 dark:border-white/10 dark:text-neutral-300">
                    <a href="mailto:prantobd320@gmail.com" class="text-black dark:text-white"><button class="">Get a quote Now</button></a>
                  </div>
                </div>
            
                <div class="flex min-w-[300px] flex-col m-2 rounded-lg bg-white dark:bg-gray-700 text-surface shadow-secondary-1 dark:bg-surface-dark dark:text-white sm:shrink-0 sm:grow sm:basis-0">
                    <img class="rounded-t-lg" src="./images/Debugging-wp.png" alt="" />
                    <div class="p-6">
                        <h5 class="mb-2 text-xl font-medium leading-tight">WordPress Debugging</h5>
                        <p class="mb-4 text-base">
                        Debug or remove virus from your website with our help. We fix any design or funtionality related issues. Removing malware from website also includes in this category.
                        </p>
                  </div>
                  <div class="mt-auto rounded-b-lg border-t-2 border-neutral-100 bg-sky-500 px-6 py-3 text-center text-surface/75 dark:border-white/10 dark:text-neutral-300">
                    <a href="mailto:prantobd320@gmail.com" class="text-black dark:text-white"><button class="">Get a quote Now</button></a>
                  </div>
                </div>
            
                <div class="flex min-w-[300px] flex-col m-2 rounded-lg bg-white dark:bg-gray-700 text-surface shadow-secondary-1 dark:bg-surface-dark dark:text-white sm:shrink-0 sm:grow sm:basis-0">
                    <img class="rounded-t-lg" src="./images/wp-plugin-dev.png" alt="" />
                    <div class="p-6">
                        <h5 class="mb-2 text-xl font-medium leading-tight">WordPress Plugin Development</h5>
                        <p class="mb-4 text-base">
                            We Develop custom plugin to enchance your website's funtionality. Have a chat with us to understand if you need it or not!
                        </p>
                  </div>
                  <div class="mt-auto rounded-b-lg border-t-2 border-neutral-100 bg-sky-500 px-6 py-3 text-center text-surface/75 dark:border-white/10 dark:text-neutral-300">
                    <a href="mailto:prantobd320@gmail.com" class="text-black dark:text-white"><button class="">Get a quote Now</button></a>
                  </div>
                </div>
            
                <div class="flex min-w-[300px] flex-col m-2 rounded-lg bg-white dark:bg-gray-700 text-surface shadow-secondary-1 dark:bg-surface-dark dark:text-white sm:shrink-0 sm:grow sm:basis-0">
                    <img class="rounded-t-lg" src="./images/Laravel_Developer.png" alt="" />
                    <div class="p-6">
                        <h5 class="mb-2 text-xl font-medium leading-tight">Laravel Developer</h5>
                        <p class="mb-4 text-base">
                            Develop your website with Laravel Framework and enjoy it awesome services. If you want fully custom website then you can choose laravel framework to build one.
                        </p>
                  </div>
                  <div class="mt-auto rounded-b-lg border-t-2 border-neutral-100 bg-sky-500 px-6 py-3 text-center text-surface/75 dark:border-white/10 dark:text-neutral-300">
                    <a href="mailto:prantobd320@gmail.com" class="text-black dark:text-white"><button class="">Get a quote Now</button></a>
                  </div>
                </div>
            
                <div class="flex min-w-[300px] flex-col m-2 rounded-lg bg-white dark:bg-gray-700 text-surface shadow-secondary-1 dark:bg-surface-dark dark:text-white sm:shrink-0 sm:grow sm:basis-0">
                    <img class="rounded-t-lg" src="./images/graphics-design.jpg" alt="" />
                    <div class="p-6">
                        <h5 class="mb-2 text-xl font-medium leading-tight">Graphic Design</h5>
                        <p class="mb-4 text-base">
                        Design graphical content, photo edit, website images, banners, icons and so on. We use Photpshop, Illustrator, Xd and Figma as required. 
                        </p>
                  </div>
                  <div class="mt-auto rounded-b-lg border-t-2 border-neutral-100 bg-sky-500 px-6 py-3 text-center text-surface/75 dark:border-white/10 dark:text-neutral-300">
                    <a href="mailto:prantobd320@gmail.com" class="text-black dark:text-white"><button class="">Get a quote Now</button></a>
                  </div>
                </div>
            </div>
        </section>

        <section class="text-black  dark:text-black">

            <div class="flex flex-col md:flex-row">
                <div
                    class="bg-sky-100 dark:bg-sky-800 dark:text-gray-50 p-4 shadow-lg  rounded-lg my-4 md:mx-4 w-full">
                    <p class="text-2xl">Reviews</p>
                    <p>Please visit my Fiverr to verify the reviews</p>
                </div>
            </div>

            <div class="grid p-4 grid-cols-2 md:grid-cols-4 gap-4">
                <div class="grid gap-4">
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="{{ asset('assets/images/reviews/review1.png') }}"
                            alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="{{ asset('assets/images/reviews/review2.png') }}"
                            alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="{{ asset('assets/images/reviews/review3.png') }}"
                            alt="">
                    </div>
                </div>
                <div class="grid gap-4">
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="{{ asset('assets/images/reviews/review4.png') }}"
                            alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="{{ asset('assets/images/reviews/review5.png') }}"
                            alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="{{ asset('assets/images/reviews/review6.png') }}"
                            alt="">
                    </div>
                </div>
                <div class="grid gap-4">
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="{{ asset('assets/images/reviews/review7.png') }}"
                            alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="{{ asset('assets/images/reviews/review8.png') }}"
                            alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="{{ asset('assets/images/reviews/review9.png') }}"
                            alt="">
                    </div>
                </div>
                <div class="grid gap-4">
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="{{ asset('assets/images/reviews/review1.png') }}"
                            alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="{{ asset('assets/images/reviews/review7.png') }}"
                            alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="{{ asset('assets/images/reviews/review1.png') }}"
                            alt="">
                    </div>
                </div>
            </div>



        </section>

    </div>
</x-app-layout>