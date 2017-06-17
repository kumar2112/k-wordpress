<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>       
      <script type="text/javascript">     


$(document).ready(function() {
        $( ".element_2_heading > li" ).each(function( index ) {
          $('.element_2_topic_'+index).hover(function(){
            $('.element_2_sub_heading').css('display', 'none');
            $('.element_2_sub_topic_'+index).css('display', 'block');
          });
        });
        $( ".element_3_heading > li" ).each(function( index ) {
          $('.element_3_topic_'+index).hover(function(){
            $('.element_3_sub_heading').css('display', 'none');
            $('.element_3_sub_topic_'+index).css('display', 'block');
          });
        });
        $( ".element_4_heading > li" ).each(function( index ) {
          $('.element_4_topic_'+index).hover(function(){
            $('.element_4_sub_heading').css('display', 'none');
            $('.element_4_sub_topic_'+index).css('display', 'block');
          });
        });
        $( ".element_5_heading > li" ).each(function( index ) {
          $('.element_5_topic_'+index).hover(function(){
            $('.element_5_sub_heading').css('display', 'none');
            $('.element_5_sub_topic_'+index).css('display', 'block');
          });
        });
        $( ".element_6_heading > li" ).each(function( index ) {
          $('.element_6_topic_'+index).hover(function(){
            $('.element_6_sub_heading').css('display', 'none');
            $('.element_6_sub_topic_'+index).css('display', 'block');
          });
        });

        function toggle(){
          var mysidenavdiv = document.getElementById("mySidenav");
          var maindiv = document.getElementById("main");
          if (mysidenavdiv.style.width == '0px'){
            /* Set the width of the side navigation to 250px and the left margin of the page content to 250px */
            document.getElementById("mySidenav").style.width = "250px";
            document.getElementById("main").style.marginLeft = "250px";
            $("#main").css("width","100%");
            $("#mySidenav").css("box-shadow"," 0px 0px 4px 1px rgba(0, 0, 0, 0.5)");
            return;
          }else{
            /* Set the width of the side navigation to 0 and the left margin of the page content to 0 */
            document.getElementById("mySidenav").style.width = "0px";
            document.getElementById("main").style.marginLeft = "0px";
            $("#mySidenav").css("box-shadow","none")
            return;
          }      
        }

        function sidebar_menu_call(id){
          menu_option = id;
          if(menu_option == "element_2_xs_sm"){
            $("#menu_xs_sm").hide();
            $("#element_2_submenu").show();
            $("#mySidenav").css({"background-color": "#ffffff", "color": "#9b9b9b"})
          }else if(menu_option == "element_3_xs_sm"){
            $("#menu_xs_sm").hide();
            $("#element_3_submenu").show();
            $("#mySidenav").css({"background-color": "#ffffff", "color": "#9b9b9b"})
          }else if(menu_option == "element_4_xs_sm"){
            $("#menu_xs_sm").hide();
            $("#element_4_submenu").show();
            $("#mySidenav").css({"background-color": "#ffffff", "color": "#9b9b9b"})
          }else if(menu_option == "element_5_xs_sm"){
            $("#menu_xs_sm").hide();
            $("#element_5_submenu").show();
            $("#mySidenav").css({"background-color": "#ffffff", "color": "#9b9b9b"})
          }else if(menu_option == "element_6_xs_sm"){
            $("#menu_xs_sm").hide();
            $("#element_6_submenu").show();
            $("#mySidenav").css({"background-color": "#ffffff", "color": "#9b9b9b"})
          }else{
            $(".submenu_sm_xs").hide();
            $("#menu_xs_sm").show();
          }
        }

        function back_btn_xs_menu(){
          $(".submenu_sm_xs").hide();
          $("#menu_xs_sm").show();
          $("#mySidenav").css({"background-color": "#9ACEF6", "color": "#E2EEF7"})
        }

        $(document).ready(function(){
          if($(".loginuserdropdown").css('display') == 'none'){
            children = $("#like_icon").next();
            $(children).removeClass("menu_like_icon").addClass("menu_like_icon_notloggedin");
            $("#search_icon").next().removeClass("menu_search_icon").addClass("menu_search_icon_notloggedin");
          } else {
            $("#like_icon").next().removeClass("menu_like_icon_notloggedin").addClass("menu_like_icon");
            $("#search_icon").next().removeClass("menu_search_icon_notloggedin").addClass("menu_search_icon");
          }
        });  



        $(".click-this-gallery").on('click', function(){
            $('.click-this-gallery').removeClass('active');
            $(this).addClass('active');
            var src = $(this).attr('data-src');
            $('.key-gallery-full').addClass('hidden');
            $('#key-gallery-'+src).removeClass('hidden');
        })



         $(".click-for-more").on('click', function(){
            $('.click-for-more').parent().removeClass('active');
            $(this).parent().addClass('active');
            $('.course-main-change').addClass('hidden');
            $(this).removeClass('hidden');
            var src = $(this).attr('data-src');
            $('.course-main-change').addClass('hidden');
            $('#course-main-view-'+src).removeClass('hidden');
        })

          $(".related-groups-slider").owlCarousel({
        items : 3,
        itemsDesktop:[1199,2],
        itemsDesktopSmall:[991,2],
        itemsMobile : [600,1],
        pagination:true,
        autoPlay:false,
        navigation:false,
    });

         $(".owl-carousel-forward").on('click', function(){
           $(".related-groups-slider").data('owlCarousel').next();
         })


         $('#gpmodal').modal('show')  


         $(".click-network").on('click', function(){
            $('.click-network').removeClass('active');
            $(this).addClass('active');
            var src = $(this).attr('data');
            $('.sidebar-network').addClass('hidden');
            $('.'+src).removeClass('hidden');
        }); 



          $(".treding-videos-slider").owlCarousel({
              items : 1,
              itemsDesktop:[1199,1],
              itemsDesktopSmall:[991,1],
              itemsMobile : [600,1],
              pagination:true,
              autoPlay:false,
              navigation:false
          });

         $( "<span class='all-icons owl-prev-new-icon treding-videos-slider-prev'></span>" ).insertBefore(  $( ".treding-videos-slider" ).find('.owl-pagination') );
         $( "<span class='all-icons owl-next-new-icon treding-videos-slider-next'></span>" ).insertAfter(  $( ".treding-videos-slider" ).find('.owl-pagination') );
         
          
         $(".treding-videos-slider-next").on('click', function(){
           $(".treding-videos-slider").data('owlCarousel').next();
         });

         $(".treding-videos-slider-prev").on('click', function(){
           $(".treding-videos-slider").data('owlCarousel').prev();
         })

});


      </script>