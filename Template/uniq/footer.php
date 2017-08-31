    <script type="text/javascript" src="assets/js/datepicker.js"></script>
    <script type="text/javascript" src="assets/js/timepicker.js"></script>
    <script type="text/javascript" src="assets/js/Chart.js-master/src/chart.js"></script>
    
    <script type="text/javascript">

        $(document).ready(function(e){
            $('.uniq-menu li a.menu-parent').click(function( ){
                $(this).toggleClass('rotate');
                $(this).parent().find('div span a.menu-sub-child').removeClass('show');
                $(this).parent().find('.menu-child').toggleClass('show');
                $(this).parent().find('.menu-child span div').removeClass('show');                
            });
            $('.uniq-menu li div span a.menu-sub-child').click(function( ){
                $(this).toggleClass('rotate');
                $(this).parent().find('div').toggleClass('show');
            });
            /*------------------------- HEADER RIGHT MENU START ---*/
            $('.header .container ul li#user').click(function( ){
                $('.header .container ul li#lang').removeClass('show');
                $('.header .container ul li#lang label.rotate').removeClass('rotate');
                $(this).toggleClass('show');
                $(this).children('label').toggleClass('rotate');
            });
            $('.header .container ul li#lang').click(function( ){
                $('.header .container ul li#user').removeClass('show');
                $('.header .container ul li#user label.rotate').removeClass('rotate');
                $(this).toggleClass('show');
                $(this).children('label').toggleClass('rotate');
            });
            /*------------------------- HEADER RIGHT MENU END ---*/
            $('.uniq-form ul li em input,.uniq-form ul li em select,.uniq-form ul li em textarea').focus(function( ){
                $(this).parent().addClass('focus');
            });
            $('.uniq-form ul li em input,.uniq-form ul li em select,.uniq-form ul li em textarea').blur(function( ){
                $(this).parent().removeClass('focus');
            });
            $('.uniq-message .container .button').click(function( ){
                $(this).parent().parent().removeClass('show');
            });
            $('#b-alert').click(function( ){
                $("#alert").addClass('show');
            });
            $('#b-delete').click(function( ){
                $("#delete").addClass('show');
            });
            $('#b-success').click(function( ){
                $("#success").addClass('show');
            });
            $('#b-error').click(function( ){
                $(".uniq-error span").toggleClass('show animated flash');
                if( $(".uniq-error span").hasClass('show')){
                    $(this).parent().parent().find('em').addClass('error');
                }
                else{
                    $('.uniq-form ul li em').removeClass('error');
                }
            });
            $('#b-loading').click(function( ){
                $("#loading").addClass('show');
            });
            $('#loading').click(function( ){
                $("#loading").removeClass('show');
            });
            $('#b-popup').click(function( ){
                $("#popup").addClass('show');
            });
            $('.uniq-popup .popup-header i').click(function( ){
                $("#popup").removeClass('show');
            });
            
            //-------------------------- mobile responsive            
            $('.header .container ul li a.fa').click(function( ){
                $(this).toggleClass('close');
                $("body").toggleClass('slide-menu');
            });
        });
    </script>


    </body>
</html>