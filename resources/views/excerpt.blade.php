<article class="bg-grey-7 my-8 shadow-lg ">
    <!-- Post Header -->
    @include('post-header')
    <!-- Post Content -->
    <section class="p-4">{!!$post->excerpt!!}</section>
    <section class="text-right w-full p-4"><a class="text-blue-5 " href=" {{ '/posts/' . $post->ID}} ">Read More</a></section>
    <!-- Post Footer -->
    @include('post-footer')
  </article>
