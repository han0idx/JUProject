<div id="footer">
	Footer content...
        <script>
            $(document).ready(function () {  
                var top = $('.scroller').offset().top - parseFloat($('.scroller').css('marginTop').replace(/auto/, 0));
                $(window).scroll(function (event) {
                  // what the y position of the scroll is
                  var y = $(this).scrollTop();

                  // whether that's below the form
                  if (y >= top) {
                    // if so, ad the fixed class
                    $('.scroller').addClass('fixed');
                  } else {
                    // otherwise remove it
                    $('.scroller').removeClass('fixed');
                  }
                });
              });
        </script>
</div>
</body>
</html>