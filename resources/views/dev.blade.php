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

        <section class="text-black  dark:text-black">

            <div class="flex flex-col md:flex-row">
                <div
                    class="bg-gray-100 dark:bg-gray-800 dark:text-gray-50 p-4 shadow-lg  rounded-lg my-4 md:mx-4 w-full">
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