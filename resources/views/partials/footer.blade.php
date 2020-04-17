<footer class="content-info bg-grey-darkest">
  <div class="container max-w-6xl mx-auto flex items-center px-2 py-5">
    <div class="w-full flex flex-col md:flex-row">
      <p class="text-white text-2xl font-bold m-0 leading-none">&copy; @php echo Date("Y") @endphp  <a href="{{ home_url('/') }}" class='text-white'>{{ get_bloginfo('name', 'display') }}</a></p>
      <div class="pl-5 flex flex-wrap justify-end flex-1">
        <nav>
          <a href="" class='text-white mr-5 text-3xl'><i class="fab fa-twitter"></i></a>
          <a href="" class='text-white mr-5 text-3xl'><i class="fab fa-instagram"></i></a>
          <a href="" class='text-white mr-5 text-3xl'><i class="fab fa-linkedin"></i></a>
          <a href="" class='text-white mr-5 text-3xl'><i class="fab fa-github"></i></a>
          <a href="" class='text-white mr-5 text-3xl'><i class="fab fa-codepen"></i></a>
        </nav>

      </div>
    </div>
  </div>
</footer>
