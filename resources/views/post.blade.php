<article class="bg-grey-7 my-8 ">
    <!-- Post Header -->
    @include('post-header')
    <!-- Post Content -->
    <section class="p-12 p">{!! $post->content !!}</section>
    <!-- Post Footer -->
    @include('post-footer')
  </article>
