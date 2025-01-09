//show modal within form and set url to form, add callback for extended use,
// params modal harus dari instance new Bootstrap.Modal ex : new bootstrap.Modal('#addSubCpmkModal');

function showFormModal(modal, form, callback){

    if (modal) {
        modal._element.addEventListener('show.bs.modal', event => {

            const button = event.relatedTarget;
            if(button){

                const url = button.getAttribute('data-url');
                form.setAttribute('action', url);

                if(typeof callback == 'function'){

                    callback(button);
                }
            }

        })
    }
    
    if(form.getAttribute('data-error')){

        modal.show();
    }
}