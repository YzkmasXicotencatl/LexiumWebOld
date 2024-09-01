<section class="container py-3 about_us">
    <h4 class="mb-5 text-center">La confianza se refleja en nuestra trayectoria
</h4>
    <div class="row text-center" style="margin: 0 auto!important;">
        <div class="col-12 col-md-3 col-lg-3">
            <span class="display-3 ym">+</span>
            <h2 class="timer count-title count-number display-3 ym" data-to="30" data-speed="1500">30</h2>
            <p class="count-text">Años de experiencia</p>
        </div>
        <div class="col-12 col-md-3 col-lg-3">
            <span class="display-3 ea">+</span>
            <h2 class="timer count-title count-number display-3 ea" data-to="5" data-speed="1500">5</h2>
            <span class="display-3 ea">M</span>
            <p class="count-text ">Evaluaciones aplicadas</p>
        </div>
    
        <div class="col-12 col-md-3 col-lg-3">
            <h2 class="timer count-title count-number display-3 paises" data-to="6" data-speed="1500">6</h2>
            <p class="count-text ">Países</p>
        </div>
        <div class="col-12 col-md-3 col-lg-3">
            <span class="display-3 ia">+</span>
            <h2 class="timer count-title count-number display-3 ia" data-to="1000" data-speed="1500">1,000</h2>
            <p class="count-text">Instituciones educativas</p>
        </div>

    </div>
</section>

<section class="better w-100 h-100 py-4">
         <div class="container better-content">
              <div class="row">
               <div class="col-md-8" id="better1">
                    <div id="scene">
                        <div class="bettext">
                            <h3>Lexium. Exploring learning for better people.</h3>
                            <p>Porque queremos detonar historias de éxito, en LEXIUM llevamos casi 30 años explorando la forma en la que aprenden las personas.</p>
                        </div>
                        <div class="better-layer" data-depth="0.2" style="width: 600px;"><img  src="./resources/images/parallax-mouse/better-bg-01.png"></div>
                        <div class="better-layer" data-depth="3.2"><img  src="./resources/images/parallax-mouse/better-bg-02.png"></div>
                        <div class="better-layer" data-depth="0.45"><img  src="./resources/images/parallax-mouse/better-bg-03.png"></div>
                    </div> 
                    
               </div>
               <div class="col-md-4" id="better2">
                    <iframe src="https://player.vimeo.com/video/465842191?title=0&byline=0" width="100%" height="360" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
               </div>
              </div>
         </div>
</section>

    
    <script type="text/javascript">
         var scene = document.getElementById('scene');
         var parallax = new Parallax(scene);

         relativeInput: true
    </script>


<script type="text/javascript">
    $(document).ready(function ($) {
        $.fn.countTo = function (options) {
            options = options || {};

            return $(this).each(function () {
                // set options for current element
                var settings = $.extend({}, $.fn.countTo.defaults, {
                    from:            $(this).data('from'),
                    to:              $(this).data('to'),
                    speed:           $(this).data('speed'),
                    refreshInterval: $(this).data('refresh-interval'),
                    decimals:        $(this).data('decimals')
                }, options);

                // how many times to update the value, and how much to increment the value on each update
                var loops = Math.ceil(settings.speed / settings.refreshInterval),
                    increment = (settings.to - settings.from) / loops;

                // references & variables that will change with each update
                var self = this,
                    $self = $(this),
                    loopCount = 0,
                    value = settings.from,
                    data = $self.data('countTo') || {};

                $self.data('countTo', data);

                // if an existing interval can be found, clear it first
                if (data.interval) {
                    clearInterval(data.interval);
                }
                data.interval = setInterval(updateTimer, settings.refreshInterval);

                // initialize the element with the starting value
                render(value);

                function updateTimer() {
                    value += increment;
                    loopCount++;

                    render(value);

                    if (typeof(settings.onUpdate) == 'function') {
                        settings.onUpdate.call(self, value);
                    }

                    if (loopCount >= loops) {
                        // remove the interval
                        $self.removeData('countTo');
                        clearInterval(data.interval);
                        value = settings.to;

                        if (typeof(settings.onComplete) == 'function') {
                            settings.onComplete.call(self, value);
                        }
                    }
                }

                function render(value) {
                    var formattedValue = settings.formatter.call(self, value, settings);
                    $self.html(formattedValue);
                }
            });
        };

        $.fn.countTo.defaults = {
            from: 0,               // the number the element should start at
            to: 0,                 // the number the element should end at
            speed: 1000,           // how long it should take to count between the target numbers
            refreshInterval: 100,  // how often the element should be updated
            decimals: 0,           // the number of decimal places to show
            formatter: formatter,  // handler for formatting the value before rendering
            onUpdate: null,        // callback method for every time the element is updated
            onComplete: null       // callback method for when the element finishes updating
        };

        function formatter(value, settings) {
            return value.toFixed(settings.decimals);
        }
    }(jQuery));

    jQuery(function ($) {
      // custom formatting example
      $('.count-number').data('countToOptions', {
        formatter: function (value, options) {
          return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
        }
      });

      // start all the timers
      $('.timer').each(count);

      function count(options) {
        var $this = $(this);
        options = $.extend({}, options || {}, $this.data('countToOptions') || {});
        $this.countTo(options);
      }
    });
</script>
