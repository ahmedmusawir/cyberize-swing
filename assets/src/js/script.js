/**
 *
 * TESTING WP ADMIN SIDE SCRIPTS
 *
 */

// jQuery(document).ready(function($) {

//   var adminContent = $( 'body' );
//   console.log( adminContent );
//   alert(adminContent);

//   adminContent.click( function(){

//   	$( this ).css('border', '1rem solid red');

//   });
	
// });

/**
 *
 * TESTING ES6 SCRIPTS
 *
 */


// class App {
// 	constructor() {
// 		console.info( 'ES6 App Initialized!' );
// 	}
// }

// const app = new App();

/**
 *
 * MAKE DROPDOWN MENU PARENT CLICKABLE. TURNS 'CLICK TO DROP' TO 'HOVER TO DROP'
 *
 */

jQuery(function($) {
  if ($(window).width() > 769) {
    $('.navbar .dropdown').hover(function() {
      $(this).find('.dropdown-menu').first().stop(true, true).delay(250).slideDown();

    }, function() {
      $(this).find('.dropdown-menu').first().stop(true, true).delay(100).slideUp();

    });

    $('.navbar .dropdown > a').click(function() {
      location.href = this.href;
    });

  }
});