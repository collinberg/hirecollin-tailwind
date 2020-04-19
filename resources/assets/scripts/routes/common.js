export default {
  init() {
    // JavaScript to be fired on all pages
    function searchToggle() {
      console.log('toggleSearch');
      const searchWrap =  document.querySelector('.search-wrap');

      if( $('.search-modal').hasClass('search-is-active') ) {
        $('.search-modal').removeClass('search-is-active');
        searchWrap.classList.remove('animated', 'bounceInDown');

        $('.close-search').toggleClass('hidden');
        $('.search-icon').toggleClass('hidden');
        $('body').toggleClass('overflow-hidden');
      } else {

        $('.search-modal').addClass('search-is-active');
        searchWrap.classList.add('animated', 'bounceInDown');
        $('.search-field').focus();

        $('.search-icon').toggleClass('hidden');
        $('.close-search').toggleClass('hidden');
        $('body').toggleClass('overflow-hidden');
      }


    }

    $('.search-toggle').click(searchToggle);
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
