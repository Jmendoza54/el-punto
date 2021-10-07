$(function() {
    const ui = new Interfaz();
    
    $(document).on('submit', '#form-apply', function(e){
        e.preventDefault();
        ui.blockBtn();
        ui.showSpinner('visible');
        let data = new FormData(this);
        $.ajax({
            url: "/promo/update",
            type: "POST",
            data: data,
            dataType: 'JSON',
            contentType: false,
            cache: false,
            processData: false,
            success: function(res){
                if(res.succes){
                    ui.enableBtn();
                    ui.showSpinner('hidden');
                    $('.overlay').css('display','flex');
                    console.log(res)
                }else{
                    alert(res.msg);
                    ui.enableBtn();
                    ui.showSpinner('hidden');
                }
            },
            error: function(jqXHR, textStatus, errorThrown){
                console.log(jqXHR.status);
                console.log(textStatus);
                console.log(errorThrown);
                ui.enableBtn();
                ui.showSpinner('hidden');
                alert('Error, intente más tarde!')
            }
        })
    });
}); //ready
