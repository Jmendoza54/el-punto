class UISite{
    
    positionPoint(){
        const active = document.querySelector('nav .active');
        
        console.log(active.offsetWidth)
    }

    movePoint(){
        const left = this.calculateLeft();
        $('.point').css('left', left);
    }

    calculateLeft(){
        var eWidth = 0;
        var anchorWidths = 0;
        $('nav li .a-point').each(function(index, elem) {
            var active = $(elem).hasClass('active');
            if(active) {
              // Break out of the each function.
              eWidth = parseFloat($(this).innerWidth() / 2) ;
              anchorWidths = anchorWidths + eWidth;
              return false;
            }
      
            eWidth = parseFloat($(this).innerWidth());
            
      
            anchorWidths = anchorWidths + eWidth;
        });
        return anchorWidths - 5.5;
    }
}