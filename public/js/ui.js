class Interfaz{

    blockBtn(){
        $('button[type="submit"]').attr('disabled', 'disabled');
    }

    enableBtn(){
        $('button[type="submit"]').removeAttr('disabled');
    }

    showSpinner(vista){
        const spinner = $('.sk-cube-grid');
        const body = $('.body-cont');
        
        if(vista == 'visible'){
            body.addClass('hidden');
            spinner.removeClass('hidden');
        }else{
            body.removeClass('hidden');
            spinner.addClass('hidden');
        }
    }

    showModal(id, action){
        $(`#${id}`).modal(action);
    }
}