$(function() {
    const ui = new Interfaz();
    var scene = document.getElementById('scene');
	var parallax = new Parallax(scene, {
        selector: '.layer'
    });

    $(document).on('submit', '#form-promo', function(e){
        e.preventDefault();
        ui.blockBtn();
        ui.showSpinner('visible');
        let data = $(this).serialize();
        $.ajax({
            url: "/promo/create",
            type: "POST",
            data: data,
            dataType: 'JSON',
            success: function(res){
                if(res.succes){
                    ui.enableBtn();
                    ui.showSpinner('hidden');
                    document.getElementById("form-promo").reset();
                    $('.overlay').css('display','flex');
                    $('#url-qr').attr('href', res.url);
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
