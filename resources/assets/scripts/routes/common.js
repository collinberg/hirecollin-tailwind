export default {
  init() {
    // JavaScript to be fired on all pages
    function searchToggle() {
      const searchWrap =  document.querySelector('.search-wrap');
      const searchModal =  document.querySelector('.search-modal');
      let searchToggle = document.querySelector('#searchToggle');

      if( searchToggle.dataset.searchToggle == 'closed' ) {
        //Close Search
        searchToggle.dataset.searchToggle = 'open';

        searchWrap.classList.remove('animated', 'bounceInDown');
        searchWrap.classList.add('animated', 'bounceOutUp');

        searchModal.classList.add('animated', 'bounceOutUp');
      } else {
        //Open Search
        searchToggle.dataset.searchToggle = 'closed';

        searchModal.classList.remove('animated', 'bounceOutUp');
        searchModal.classList.add('search-is-active');

        searchWrap.classList.remove('animated', 'bounceOutUp');
        searchWrap.classList.add('animated', 'bounceInDown');

        $('.search-field').focus();
      }
      //Icon Change
      $('.close-search').toggleClass('hidden');
      $('.search-icon').toggleClass('hidden');
      //Body Change
      $('body').toggleClass('overflow-hidden');

    }

    let menuToggle =  document.querySelector('#menuToggle');

    function mobileMenuToggle() {
      let mobileMenu = document.querySelector('#mobileMenu');
      let menuToggle = document.querySelector('#menuToggle');

      if( menuToggle.dataset.menuState == 'closed' ) {
        console.log('Opening Menu');


        //icon
        menuToggle.dataset.menuState = 'open';
        menuToggle.classList.toggle('open');

        //Menu
        mobileMenu.classList.remove('open','bounceOutRight');
        mobileMenu.classList.add('open','bounceInRight');

      } else {
        console.log('Closing Menu');
        //icon
        menuToggle.dataset.menuState = 'closed';
        menuToggle.classList.toggle('open');

        mobileMenu.classList.remove('bounceInRight');
        mobileMenu.classList.add('bounceOutRight');
      }
    }

    $('#searchToggle').click(searchToggle);

    menuToggle.addEventListener('click', mobileMenuToggle)
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
