var fluviarioDropMenuOpen = false;
var exposicaoDropMenuOpen = false;


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
    
    // Inicia o slider apenas nas páginas onde existir a <div id="slider-wrapper">...</div>
    if($("#slider-wrapper").length) {
        ImgSlider.init({duration: 3000});
        
        // Define a altura do slider de imagens
        $(window).load(function(){
            $("#slider-wrapper").height($("img.active-slider-img").height());
        });
    }
    
    // Menu para mobile e phablet
    if($(window).width() < 750)
    {        
        $(".dropSubMenu").on("click", function(){

            var subMenu = $(this).children("ul.drop-menu");
            var tituloMenu = $(this).children("p");
            var menuIrmao = $(this).siblings("li.dropSubMenu");
            var setaMenuIrmao = menuIrmao.children("p").children("span");

            if(subMenu.css("display") == "none") {
                subMenu.css("display", "block");
                menuIrmao.children("ul").css("display", "none");
                setaMenuIrmao.removeClass();
                setaMenuIrmao.addClass("right-drop-arrow");
            } else {
                subMenu.css("display", "none");
            }

            tituloMenu.children("span").toggleClass("right-drop-arrow down-drop-arrow");

        });


        $("#menu-toogle").on("click", function(){
            $("#overlay").show();
            $("#top-menu").css("right", "0px");
        });

        $("#close-drop-menu, #overlay").on("click", function(){

            var seta = $("#top-menu ul li p").children("span");

            $("#top-menu").css("right", "-200px");
            $("#overlay").hide();
            $("#top-menu ul li ul").css("display", "none");
            seta.removeClass();
            seta.addClass("right-drop-arrow");
        });
    } else {
        // Menu já é horizontal, remove as setas
        //$("#top-menu ul li p").children("span").remove();
    }

    
    // Menu Mobile das páginas das actividades
    if($("#menu-lateral").length){
        
        $("#menu-lateral .sub-menu").on("click", function(){
            
            var menu = $(this).children("ul");
            var menuIrmao = $(this).siblings();
            var setaMenuIrmao = menuIrmao.children("p").children("span");
            
            if(menu.css("display") == "none") {
                menu.css("display", "block");
                // Fecha o outro menu
                menuIrmao.children("ul").css("display", "none");
                setaMenuIrmao.removeClass();
                setaMenuIrmao.addClass("right-drop-arrow");
            } else {
                menu.css("display", "none");
            }
            
            // Mostra a seta para baixo
            $(this).children("p").children("span").toggleClass("right-drop-arrow down-drop-arrow");
            
        });
            
    }

});


var areas_clicaveis = $('#mapaExposicao svg g a');

$(areas_clicaveis).each(function(){
    
    $(this).children('rect').on({
        mouseenter: function() {
            $(this).css('fill', '#96c539');
            $(this).next().css('fill', '#ffffff');
        },
        mouseleave: function() {
            $(this).css('fill', '#e2e2e2');
            $(this).next().css('fill', '#333333');
        }
    });
    
    $(this).children('polygon').on({
        mouseenter: function() {
            $(this).css('fill', '#96c539');
            $(this).next().css('fill', '#ffffff');
        },
        mouseleave: function() {
            $(this).css('fill', '#e2e2e2');
            $(this).next().css('fill', '#333333');
        }
    });
    
    $(this).children('text').on({
        mouseenter: function() {
            $(this).css('fill', '#ffffff');
            $(this).prev().css('fill', '#96c539');
        },
        mouseleave: function() {
            $(this).css('fill', '#333333');
            $(this).prev().css('fill', '#e2e2e2');
        }
    });
    
});
















