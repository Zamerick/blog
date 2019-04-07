@extends('app')
@section('content')
  <main class="w-3/5 mx-auto">
    @foreach ($posts as $post)
        @include('excerpt')
    @endforeach
    {{ $posts->links() }}
    @include('site-footer')
  </main>
@endsection
