<header class="banner fixed w-full top-0 lg:bg-white">
  <div class="w-full container mx-auto flex flex-row items-center justify-between mt-0 py-2">
    <div class='pl-4 flex items-center'>
      <a class="brand toggleColour text-black text-bold no-underline hover:no-underline font-bold text-2xl lg:text-4xl hover:no-decoration" href="{{ home_url('/') }}">
        {{ get_bloginfo('name', 'display') }}
      </a>
    </div>
    <div class='w-full flex-grow lg:flex lg:items-center lg:w-auto hidden lg:block mt-2 lg:mt-0 bg-white lg:bg-transparent text-black p-4 lg:p-0 z-20'>
      <nav class="nav-primary list-reset lg:flex justify-end flex-1 items-center">
        @if (has_nav_menu('primary_navigation'))
          {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
        @endif
      </nav>
    </div>
    <button id='searchToggle' class="desktop-search-toggle lg:border-l-2 border-primary lg:pl-2" data-menu-toggle="closed">
        <svg class="svg-icon mx-auto block search-icon" aria-hidden="true" role="img" focusable="false" width="23" height="23" viewBox="0 0 23 23">
          <path d="M38.710696,48.0601792 L43,52.3494831 L41.3494831,54 L37.0601792,49.710696 C35.2632422,51.1481185 32.9839107,52.0076499 30.5038249,52.0076499 C24.7027226,52.0076499 20,47.3049272 20,41.5038249 C20,35.7027226 24.7027226,31 30.5038249,31 C36.3049272,31 41.0076499,35.7027226 41.0076499,41.5038249 C41.0076499,43.9839107 40.1481185,46.2632422 38.710696,48.0601792 Z M36.3875844,47.1716785 C37.8030221,45.7026647 38.6734666,43.7048964 38.6734666,41.5038249 C38.6734666,36.9918565 35.0157934,33.3341833 30.5038249,33.3341833 C25.9918565,33.3341833 22.3341833,36.9918565 22.3341833,41.5038249 C22.3341833,46.0157934 25.9918565,49.6734666 30.5038249,49.6734666 C32.7048964,49.6734666 34.7026647,48.8030221 36.1716785,47.3875844 C36.2023931,47.347638 36.2360451,47.3092237 36.2726343,47.2726343 C36.3092237,47.2360451 36.347638,47.2023931 36.3875844,47.1716785 Z" transform="translate(-20 -31)"></path>
        </svg>
        <svg class="svg-icon mx-auto hidden close-search" aria-hidden="true" role="img" preserveAspectRatio="none" width="23" height="23" viewBox="0 0 48 48">
          <path d="M45.5 0L24 21.5L2.5 0L0 2.5L21.5 24L0 45.5L2.5 48L24 26.5L45.5 48L48 45.5L26.5 24L48 2.5L45.5 0Z"/>
        </svg>
        </button>
    <button id='menuToggle' class='lg:hidden relative' data-menu-state="closed">
      <span class='line'></span>
    </button>
  </div>
</header>
<!-- Mobile Menu -->
<section id="mobileMenu" class='animated z-40'>
  <i class="menu-background top"></i>
  <i class="menu-background middle"></i>
  <i class="menu-background bottom"></i>
  <div class='m-menu-wrap w-full h-full flex flex-col'>
  @if (has_nav_menu('primary_navigation'))
    {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
  @endif
  <nav class='social-nav p-0 w-full flex justify-center py-5 relative justify-between'>
    <a href="" class='text-white mx-4 text-3xl'><i class="fab fa-twitter"></i></a>
    <a href="" class='text-white mx-4 text-3xl'><i class="fab fa-instagram"></i></a>
    <a href="" class='text-white mx-4 text-3xl'><i class="fab fa-linkedin"></i></a>
    <a href="" class='text-white mx-4 text-3xl'><i class="fab fa-github"></i></a>
    <a href="" class='text-white mx-4 text-3xl'><i class="fab fa-codepen"></i></a>
  </nav>
</div>
</section>
<!-- Search Bar -->
<div class='search-modal flex flex-wrap justify-center flex-col z-50'>
  <div class='search-wrap'>
    @include('partials.searchform')
  </div>
</div>
