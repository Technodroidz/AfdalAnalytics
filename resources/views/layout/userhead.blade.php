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
      <!--<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>-->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
      <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/jquery.inputmask.bundle.js"></script>
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
     <script>
        $('#cc').on('input propertychange', function() {
  var node = $('#cc')[0]; // vanilla javascript element
  var cursor = node.selectionStart; // store cursor position
  var lastValue = $('#cc').val(); // get value before formatting
  
  var formattedValue = formatCardNumber(lastValue);
  $('#cc').val(formattedValue); // set value to formatted
  
  // keep the cursor at the end on addition of spaces
  if(cursor === lastValue.length) {
    cursor = formattedValue.length;
    // decrement cursor when backspacing
    // i.e. "4444 |" => backspace => "4444|"
    if($('#cc').attr('data-lastvalue') && $('#cc').attr('data-lastvalue').charAt(cursor - 1) == " ") {
      cursor--;
    }
  }

  if (lastValue !== formattedValue) {
    // increment cursor when inserting character before a space
    // i.e. "1234| 6" => "5" typed => "1234 5|6"
    if(lastValue.charAt(cursor) == " " && formattedValue.charAt(cursor - 1) == " ") {
      cursor++;
    }
  }
  
  // set cursor position
  node.selectionStart = cursor;
  node.selectionEnd = cursor;
  // store last value
  $('#cc').attr('data-lastvalue', formattedValue);
});

function formatCardNumber(value) {
  // remove all non digit characters
  var value = value.replace(/\D/g, '');
  var formattedValue;
  var maxLength;
  // american express, 15 digits
  if ((/^3[47]\d{0,13}$/).test(value)) {
    formattedValue = value.replace(/(\d{4})/, '$1 ').replace(/(\d{4}) (\d{6})/, '$1 $2 ');
    maxLength = 17;
  } else if((/^3(?:0[0-5]|[68]\d)\d{0,11}$/).test(value)) { // diner's club, 14 digits
    formattedValue = value.replace(/(\d{4})/, '$1 ').replace(/(\d{4}) (\d{6})/, '$1 $2 ');
    maxLength = 16;
  } else if ((/^\d{0,16}$/).test(value)) { // regular cc number, 16 digits
    formattedValue = value.replace(/(\d{4})/, '$1 ').replace(/(\d{4}) (\d{4})/, '$1 $2 ').replace(/(\d{4}) (\d{4}) (\d{4})/, '$1 $2 $3 ');
    maxLength = 19;
  }
  
  $('#cc').attr('maxlength', maxLength);
  return formattedValue;
}


var app;

(function() {
  'use strict';
  
  app = {
    monthAndSlashRegex: /^\d\d \/ $/, // regex to match "MM / "
    monthRegex: /^\d\d$/, // regex to match "MM"
    
    el_cardNumber: '.ccFormatMonitor',
    el_expDate: '#inputExpDate',
    el_cvv: '.cvv',
    el_ccUnknown: 'cc_type_unknown',
    el_ccTypePrefix: 'cc_type_',
    el_monthSelect: '#monthSelect',
    el_yearSelect: '#yearSelect',
    
    cardTypes: {
      'American Express': {
        name: 'American Express',
        code: 'ax',
        security: 4,
        pattern: /^3[47]/,
        valid_length: [15],
        formats: {
          length: 15,
          format: 'xxxx xxxxxxx xxxx'
        }
      },
      'Visa': {
				name: 'Visa',
				code: 'vs',
        security: 3,
				pattern: /^4/,
				valid_length: [16],
				formats: {
						length: 16,
						format: 'xxxx xxxx xxxx xxxx'
					}
			},
      'Maestro': {
				name: 'Maestro',
				code: 'ma',
        security: 3,
				pattern: /^(50(18|20|38)|5612|5893|63(04|90)|67(59|6[1-3])|0604)/,
				valid_length: [16],
				formats: {
						length: 16,
						format: 'xxxx xxxx xxxx xxxx'
					}
			},
      'Mastercard': {
				name: 'Mastercard',
				code: 'mc',
        security: 3,
				pattern: /^5[1-5]/,
				valid_length: [16],
				formats: {
						length: 16,
						format: 'xxxx xxxx xxxx xxxx'
					}
			} 
    }
  };
  
  app.addListeners = function() {
      $(app.el_expDate).on('keydown', function(e) {
        app.removeSlash(e);
      });

      $(app.el_expDate).on('keyup', function(e) {
        app.addSlash(e);
      });

      $(app.el_expDate).on('blur', function(e) {
        app.populateDate(e);
      });

      $(app.el_cvv +', '+ app.el_expDate).on('keypress', function(e) {
        return e.charCode >= 48 && e.charCode <= 57;
      });  
  };
  
  app.addSlash = function (e) {
    var isMonthEntered = app.monthRegex.exec(e.target.value);
    if (e.key >= 0 && e.key <= 9 && isMonthEntered) {
      e.target.value = e.target.value + " / ";
    }
  };
  
  app.removeSlash = function(e) {
    var isMonthAndSlashEntered = app.monthAndSlashRegex.exec(e.target.value);
    if (isMonthAndSlashEntered && e.key === 'Backspace') {
      e.target.value = e.target.value.slice(0, -3);
    }
  };
  
  app.populateDate = function(e) {
    var month, year;
    
    if (e.target.value.length == 7) {
      month = parseInt(e.target.value.slice(0, -5));
      year = "20" + e.target.value.slice(5);
      
      if (app.checkMonth(month)) {
        $(app.el_monthSelect).val(month);
      } else {
        $(app.el_monthSelect).val(0);
      }
      
      if (app.checkYear(year)) {
        $(app.el_yearSelect).val(year);
      } else {
        $(app.el_yearSelect).val(0);
      }
      
    }
  };
  
  app.checkMonth = function(month) {
    if (month <= 12) {
      var monthSelectOptions = app.getSelectOptions($(app.el_monthSelect));
      month = month.toString();
      if (monthSelectOptions.includes(month)) {
        return true; 
      }
    }
  };
  
  app.checkYear = function(year) {
    var yearSelectOptions = app.getSelectOptions($(app.el_yearSelect));
    if (yearSelectOptions.includes(year)) {
      return true; 
    }
  };
          
  app.getSelectOptions = function(select) {
    var options = select.find('option');
    var optionValues = [];
    for (var i = 0; i < options.length; i++) {
      optionValues[i] = options[i].value;
    }
    return optionValues;
  };
  
  app.setMaxLength = function ($elem, length) {
    if($elem.length && app.isInteger(length)) {
      $elem.attr('maxlength', length);
    }else if($elem.length){
      $elem.attr('maxlength', '');
    }
  };
  
  app.isInteger = function(x) {
    return (typeof x === 'number') && (x % 1 === 0);
  };

  app.createExpDateField = function() {
    $(app.el_monthSelect +', '+ app.el_yearSelect).hide();
    $(app.el_monthSelect).parent().prepend('<input type="text" class="ccFormatMonitor">');
  };
  
  
  app.isValidLength = function(cc_num, card_type) {
    for(var i in card_type.valid_length) {
      if (cc_num.length <= card_type.valid_length[i]) {
        return true;
      }
    }
    return false;
  };

  app.getCardType = function(cc_num) {
    for(var i in app.cardTypes) {
      var card_type = app.cardTypes[i];
      if (cc_num.match(card_type.pattern) && app.isValidLength(cc_num, card_type)) {
        return card_type;
      }
    }
  };

  app.getCardFormatString = function(cc_num, card_type) {
    for(var i in card_type.formats) {
      var format = card_type.formats[i];
      if (cc_num.length <= format.length) {
        return format;
      }
    }
  };

  app.formatCardNumber = function(cc_num, card_type) {
    var numAppendedChars = 0;
    var formattedNumber = '';
    var cardFormatIndex = '';

    if (!card_type) {
      return cc_num;
    }

    var cardFormatString = app.getCardFormatString(cc_num, card_type);
    for(var i = 0; i < cc_num.length; i++) {
      cardFormatIndex = i + numAppendedChars;
      if (!cardFormatString || cardFormatIndex >= cardFormatString.length) {
        return cc_num;
      }

      if (cardFormatString.charAt(cardFormatIndex) !== 'x') {
        numAppendedChars++;
        formattedNumber += cardFormatString.charAt(cardFormatIndex) + cc_num.charAt(i);
      } else {
        formattedNumber += cc_num.charAt(i);
      }
    }

    return formattedNumber;
  };

  app.monitorCcFormat = function($elem) {
    var cc_num = $elem.val().replace(/\D/g,'');
    var card_type = app.getCardType(cc_num);
    $elem.val(app.formatCardNumber(cc_num, card_type));
    app.addCardClassIdentifier($elem, card_type);
  };

  app.addCardClassIdentifier = function($elem, card_type) {
    var classIdentifier = app.el_ccUnknown;
    if (card_type) {
      classIdentifier = app.el_ccTypePrefix + card_type.code;
      app.setMaxLength($(app.el_cvv), card_type.security);
    } else {
      app.setMaxLength($(app.el_cvv));
    }

    if (!$elem.hasClass(classIdentifier)) {
      var classes = '';
      for(var i in app.cardTypes) {
        classes += app.el_ccTypePrefix + app.cardTypes[i].code + ' ';
      }
      $elem.removeClass(classes + app.el_ccUnknown);
      $elem.addClass(classIdentifier);
    }
  };

  
  app.init = function() {

    $(document).find(app.el_cardNumber).each(function() {
      var $elem = $(this);
      if ($elem.is('input')) {
        $elem.on('input', function() {
          app.monitorCcFormat($elem);
        });
      }
    });
    
    app.addListeners();
    
  }();
  
})();
     </script>
</body>
</html>
