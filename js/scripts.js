$(function() {
   
    var ImgSlider = (function() {
        
        var pb = {};
        pb.el = $("#slider-images");
        pb.items = {
            panel: pb.el.find('img')
        }
        
        // Variáveis necessárias
        var sliderInterval,
            currentSlider = 0,
            nextSlider = 1,
            lengthSlider = pb.items.panel.length;
        
        // Inicialização
        pb.init = function(settings) {
            this.settings = settings || {duration: 8000}
            var output = '';
            
            // Activamos o Slider
            SliderInit();
            
            for(var i = 0; i < lengthSlider; i++) {
                if(i == 0)
                {
                    output += '<button class="active"></button>';  
                } else {
                    output += '<button></button>';
                }
            }
            
            // Controlos do Slider
            $('#image-bullets').html(output).on('click', 'button', function(e){
                var $this = $(this);
                if(currentSlider !== $this.index())
                {
                    changePanel($this.index());
                }
            });
        }
        
        var SliderInit = function() {
            sliderInterval = setInterval(pb.StartSlider, pb.settings.duration);
        }
        
        pb.StartSlider = function() {
            var panels = pb.items.panel,
                controls = $('#image-bullets button');
            
            if(nextSlider >= lengthSlider)
            {
                nextSlider = 0;
                currentSlider = lengthSlider-1;
            }
            
            // Efeitos
            controls.removeClass('active').eq(nextSlider).addClass('active');
            panels.eq(currentSlider).fadeOut('slow');
            panels.eq(nextSlider).fadeIn('slow');
            
            // Actualizar os dados
            currentSlider = nextSlider;
            nextSlider += 1;
        }
        
        // Função para os controladores
        var changePanel = function(id) {
            clearInterval(sliderInterval);
            var panels = pb.items.panel,
                controls = $('#image-bullets button');
            
            // Prova do ID
            if(id >= lengthSlider)
            {
                id = 0;  
            } else if(id < 0){
                id = lengthSlider - 1;   
            }
            
            // Efeitos
            controls.removeClass('active').eq(id).addClass('active');
            panels.eq(currentSlider).fadeOut('slow');
            panels.eq(id).fadeIn('slow');
            
            // Actualziamos os dados
            currentSlider = id;
            nextSlider = id+1;
            
            // Reactivar o Slider
            SliderInit();
        }
        
        return pb;
        
    }());
    
    ImgSlider.init({duration: 3000});
});