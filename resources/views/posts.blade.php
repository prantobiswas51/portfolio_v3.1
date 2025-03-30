<x-app-layout>
    <section class="text-white  dark:text-black">
        
        <div class="flex flex-col md:flex-row">
            <div class=" dark:text-gray-50 shadow-lg rounded-lg my-4 md:mx-4 w-full">
                <div class="text-4xl">Posts</div>
            </div>
        </div>

        <div class="grid p-4 grid-cols-2 md:grid-cols-4 gap-4">

            @if ($posts)
                @foreach ($posts as $post)
                <div class="grid gap-4">
                    <div class="text-gray-200 bg-gray-800 p-2 rounded-md">
                        <img class="h-auto max-w-full rounded-lg" src="{{ asset('storage/' . $post->featured_image) }}" alt="">
                        <p class="text-2xl py-2">{{ $post->title }}</p>
                        <p class="pb-2">{!! Str::limit(strip_tags($post->content), 80, '...') !!}</p>
                        <a href="{{ route('single_post', $post->slug ?? 'not found' ) }}"><button class="p-2 px-4 bg-sky-700 rounded-md w-full">Read More</button></a>
                    </div>
                </div>
                @endforeach
            @endif

        </div>


    </section>
</x-app-layout>
