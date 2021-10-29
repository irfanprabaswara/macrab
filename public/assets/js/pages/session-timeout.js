$(document).ready(function() {

    "use strict";
    $( document ).idleTimer( 60000 );
        $( document ).on( "idle.idleTimer", function(event, elem, obj) {
            $('#idle-modal').modal('show');
            $( document ).idleTimer( 5000 );
            var logOut = setTimeout(function() {
                window.location.href = "../logout";
            }, 60000);

            var sec = 60;
            var timer = setInterval(function() {
                $('#sessionSecondsRemaining').text(--sec);
                if (sec == 0) {
                    $('#hideMsg').fadeOut('fast');
                    clearInterval(timer);
                }
            }, 1000);
            document.querySelector('#extendSession').onclick = function(){
                clearTimeout(logOut);
                clearInterval(timer);
                setTimeout(function() {
                    $('#sessionSecondsRemaining').text(60);
                }, 5000);
            };
        });
});
