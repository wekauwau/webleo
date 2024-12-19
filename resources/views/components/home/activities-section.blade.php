<section class="dark:bg-gray-800 dark:text-gray-100">
    <div class="container max-w-6xl p-6 mx-auto space-y-6 sm:space-y-12">
        <!--something removed-->
        <div class="grid justify-center grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ($publications as $post)
                <a rel="noopener noreferrer" href=""
                    class="max-w-sm mx-auto group hover:no-underline focus:no-underline dark:bg-gray-900">
                    <img role="presentation" class="object-cover w-full rounded h-44 dark:bg-gray-500"
                        src="{{ route('image', [$post->image->name]) }}">
                    <div class="p-6 space-y-2">
                        <h3 class="text-2xl font-semibold group-hover:underline group-focus:underline">
                            {{ $post->title }}
                        </h3>
                        <span class="text-xs dark:text-gray-400">
                            {{ $post->published_at }}
                        </span>
                        <p class="line-clamp-3 overflow-ellipsis">
                            {{ $post->content }}
                        </p>
                    </div>
                </a>
            @endforeach
        </div>
        <div class="flex justify-center">
            <a href=""
                class="px-6 py-3 text-sm rounded-md hover:underline dark:bg-gray-900 dark:text-gray-400">
                Lihat kegiatan lain
            </a>
        </div>
    </div>
</section>
