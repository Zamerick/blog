<section class="py-1 px-2 text-grey-4 bg-black">
    <div class="" >
        @foreach ($post->getTermsAttribute() as $tag)
            {{ implode(', ', $tag) }}
        @endforeach
    </>
    </div>
</section>
