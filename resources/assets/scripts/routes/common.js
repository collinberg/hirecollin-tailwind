export default {
  init() {
    // JavaScript to be fired on all pages
    function searchToggle() {
      const searchWrap =  document.querySelector('.search-wrap');
      const searchModal =  document.querySelector('.search-modal');
      let searchToggle = document.querySelector('#searchToggle');

      if( searchToggle.dataset.searchToggle == 'closed' ) {
        //Open Search
        searchToggle.dataset.searchToggle = 'open';

        // If Mobele Menu is already Open
        if($('body').hasClass('mobile-menu-open')) {
          console.log('Closing Menu');

          $('body').toggleClass('overflow-hidden');
          $('body').toggleClass('mobile-menu-open');

          $('#menuToggle').toggleClass('open');
          $('#mobileMenu').toggleClass('open');


        }



        searchModal.classList.remove('animated', 'bounceOutUp');
        searchModal.classList.add('search-is-active');

        searchWrap.classList.remove('animated', 'bounceOutUp');
        searchWrap.classList.add('animated', 'bounceInDown');

        setTimeout(function(){
          $('.search-field').focus();
        }, 500);
      } else {
        //Close Search
        searchToggle.dataset.searchToggle = 'closed';

        searchWrap.classList.remove('animated', 'bounceInDown');
        searchWrap.classList.add('animated', 'bounceOutUp');


        searchModal.classList.add('animated', 'bounceOutUp');

        setTimeout(function(){
                  searchModal.classList.remove('search-is-active');
        }, 500);

      }
      //Icon Change
      $('.close-search').toggleClass('hidden');
      $('.search-icon').toggleClass('hidden');
      //Body Change
      $('body').toggleClass('overflow-hidden');
      $('body').toggleClass('search-open');

    }

    function mobileMenuToggle() {
      let mobileMenu = document.querySelector('#mobileMenu');
      let mobileToggle = document.querySelector('#menuToggle');

      const searchModal =  document.querySelector('.search-modal');
      let searchToggle = document.querySelector('#searchToggle');

      if( searchToggle.dataset.searchToggle == 'open' ) {

        searchToggle.dataset.searchToggle = 'closed'
        searchModal.classList.add('animated', 'bounceOutUp');

        //Icon Change
        $('.close-search').toggleClass('hidden');
        $('.search-icon').toggleClass('hidden');
        //Body Change
        $('body').toggleClass('overflow-hidden');
        $('body').toggleClass('search-open');
      }

      mobileMenu.classList.toggle('open');
      mobileToggle.classList.toggle('open');

      $('body').toggleClass('overflow-hidden');
      $('body').toggleClass('mobile-menu-open');
    }

    $('#searchToggle').click(searchToggle);

    $('#menuToggle').click(mobileMenuToggle);
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
