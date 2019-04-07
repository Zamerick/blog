<section class="text-center p-4">
    <h1 class="text-blue-5 pb-4 text-4xl"> {{ $post->title }} </h1>
    <h2 class="text-grey-4 text-xl">Published by {{$post->author()->get()->first()->display_name}} on {{ Carbon\Carbon::parse($post->created_at)->format('F d, Y') }} </h2>
</section>
