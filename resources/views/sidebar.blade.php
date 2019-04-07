 <aside class="bg-black w-1/5 h-screen justify-between flex flex-col">
      <div class="text-white p-4">
        <div class="hidden lg:block mx-auto bg-black w-1/2 mb-2 rounded-full border-solid border-grey-5 border-8">
          <a href="/">
            <img class="p-4 w-full mx-auto" src="{{ URL::to('/') }}/img/avatar.png">
          </a>
        </div>
          Hi there! I'm Alex Oxthorn. I spend most of my free time tinkering with, and blogging about, the Laravel and VueJS frameworks.
      </div>



    <div class="mb-8 text-center flex flex-col w-content">
        <ul id="social-block" class="list-reset mx-auto mb-8 text-center flex flex-row w-content" role="social media links">
            <li aria-label="Portfolio" class="mx-1"> <nav-icon href="https://www.alex-oxthorn.com" text="Portfolio">@svg('portfolio')</nav-icon></li>
            <li aria-label="Contact"   class="mx-1"> <nav-icon href="mailto:zamerick@alex-oxthorn.com" text="Contact">@svg('envelope')</nav-icon></li>
        </ul>
        <ul id="social-block" class="list-reset mx-auto mb-8 text-center flex flex-row w-content" role="social media links">
            <li aria-label="LinkedIn"  class="social-icon mx-1"> <nav-icon href="http://www.linkedin.com/in/alexoxthorn" icon="linkedin">@svg('linkedin')</nav-icon></li>
            <li aria-label="Twitter"   class="social-icon mx-1"> <nav-icon href="http://www.twitter.com/Zamerick">@svg('twitter')</nav-icon></li>
            <li aria-label="Gitlab"    class="social-icon mx-1"> <nav-icon href="http://gitlab.com/zamerick/">@svg('gitlab')</nav-icon></li>
            <li aria-label="Github"    class="social-icon mx-1"> <nav-icon href="http://github.com/zamerick/">@svg('github')</nav-icon></li>
        </ul>
    </div>
  </aside>
