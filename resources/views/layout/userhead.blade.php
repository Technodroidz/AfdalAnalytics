<!DOCTYPE html>
<html lang="en" dir="rtl">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>{{__('User Panel')}}</title>
      <meta name="description" content="">
      <meta name="keywords" content="">
      <link rel="icon" type="image/png" href="">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
      <link href="{!!asset('public/assets/css/bootstrap.min.css')!!}" rel="stylesheet">
      <link href="{!!asset('public/assets/css/owl.carousel.min.css')!!}" rel="stylesheet">
      <link href="{!!asset('public/assets/css/owl.theme.default.min.css')!!}" rel="stylesheet">
      <link href="{!!asset('public/assets/css/mdb.min.css')!!}" rel="stylesheet">
      <link href="{!!asset('public/assets/css/style.css')!!}" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css" />

      
   </head>
   <body>

      


         @yield('content')
      

      

      <script type="text/javascript" src="{!!asset('public/assets/js/jquery-3.4.1.min.js')!!}"></script>
      <script type="text/javascript" src="{!!asset('public/assets/js/popper.min.js')!!}"></script>
      <script type="text/javascript" src="{!!asset('public/assets/js/bootstrap.min.js')!!}"></script>
      <script type="text/javascript" src="{!!asset('public/assets/js/mdb.min.js')!!}"></script>
      <script type="text/javascript" src="{!!asset('public/assets/js/owl.carousel.js')!!}"></script>
      <script type="text/javascript" src="{!!asset('public/assets/js/custom.js')!!}"></script>
      <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
      <script src="{!!asset('public/assets/js/chart.js')!!}"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>
      <script>
        $('input[type="checkbox"]').on('change', function(e){
           if(e.target.checked){
             $('#tempModal').modal();
           }
        });
    
    </script>
    <script>
        $('#one').click(function(){
           $('.one').show();
           $('.two, .three, .four, .five, .default').hide();
        });
        $('#two').click(function(){
           $('.two').show();
           $('.one, .three, .four, .five, .default').hide();
        });
        $('#three').click(function(){
           $('.three').show();
           $('.two, .one, .four, .five, .default').hide();
        });
        $('#four').click(function(){
           $('.four').show();
           $('.two, .three, .one, .five, .default').hide();
        });
        $('#five').click(function(){
           $('.five').show();
           $('.two, .three, .four, .one, .default').hide();
        });
        $('a.mt32').click(function(){
           $(this).addClass('active').siblings().removeClass('active'); 
        });
    </script>
      <script type="text/javascript">
         var options = {
          series: [{
          name: 'Organic Reach',
          data: [31, 40, 28, 51, 42, 109]
        }, {
          name: 'Paid Reach',
          data: [11, 32, 45, 32, 34, 52]
        },

        {
          name: 'Unfollows',
          data: [50, 32, 45, 32, 34, 52]
        }

        ],
          chart: {
          height: 200,
          type: 'area',
          toolbar: {
            show: false
          },
          zoom: {
            enabled: false
          }
        },
        dataLabels: {
          enabled: false
        },
        stroke: {
          curve: 'smooth'
        },
        legend: {
          position: 'bottom',
          offsetY: 200
        },
        fill: {
          
          opacity: 1,
          colors:['#fcddc1', '#ff9a41', '#f1f1f1']
        },
        xaxis: {
         
          categories: ["11/3", "12/3", "13/3", "14/3", "15/3", "16/3"]
        },
        tooltip: {
          x: {
            format: 'dd/MM/yy HH:mm'
          },
        },
        };

        var chart = new ApexCharts(document.querySelector("#areachart22"), options);
        chart.render();
      </script>
      <script>
        $(function() {
            $('.popup-youtube, .popup-vimeo').magnificPopup({
                disableOn: 700,
                type: 'iframe',
                mainClass: 'mfp-fade',
                removalDelay: 160,
                preloader: false,
                fixedContentPos: false
            });
        });
        
        // 
        $('.popup-youtube').click(function(){
           $('.modal, .modal-backdrop').removeClass('show'); 
           $('.modal, .modal-backdrop').css('display', 'none');
        });
     </script>
     <script>
         $('.dataList').click(function(){
            $(this).find('.dataMore').toggleClass('active'); 
         });
     </script>
</body>
</html>
