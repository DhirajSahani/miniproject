( function( window, document ) {
  function real_estate_manager_keepFocusInMenu() {
    document.addEventListener( 'keydown', function( e ) {
      const real_estate_manager_nav = document.querySelector( '.sidenav' );
      if ( ! real_estate_manager_nav || ! real_estate_manager_nav.classList.contains( 'open' ) ) {
        return;
      }
      const elements = [...real_estate_manager_nav.querySelectorAll( 'input, a, button' )],
        real_estate_manager_lastEl = elements[ elements.length - 1 ],
        real_estate_manager_firstEl = elements[0],
        real_estate_manager_activeEl = document.activeElement,
        tabKey = e.keyCode === 9,
        shiftKey = e.shiftKey;
      if ( ! shiftKey && tabKey && real_estate_manager_lastEl === real_estate_manager_activeEl ) {
        e.preventDefault();
        real_estate_manager_firstEl.focus();
      }
      if ( shiftKey && tabKey && real_estate_manager_firstEl === real_estate_manager_activeEl ) {
        e.preventDefault();
        real_estate_manager_lastEl.focus();
      }
    } );
  }
  real_estate_manager_keepFocusInMenu();
} )( window, document );