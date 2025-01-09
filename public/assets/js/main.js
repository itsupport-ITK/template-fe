

// data table defaults
// $.extend( $.fn.dataTable.defaults, {
//     stateSave: true,
//     language: {
//         "loadingRecords": 'Sabar yaa.. <span class="spinner-border spinner-border-sm text-secondary" role="status" aria-hidden="true"></span>',
//         "emptyTable": "Belum ada data 😢",
//         "zeroRecords": "Tidak ketemu, coba keyword lain yuk 😉",
//         "search": "Cari disini:"
//     },
//     "autoWidth": false
// });

// dayjs
dayjs.locale('en');
dayjs.extend(window.dayjs_plugin_relativeTime);

//sidebar collapse
$('#sidebarCollapse').on('click', function () {
    $('#sidebar, #contentWrapper, #sideArrowLeft, .overlay').toggleClass('active');


    $('.overlay.active').on('click', function (e) {
        $('#sidebar, #contentWrapper, .overlay').removeClass('active');
    });
});

//number counter, onscroll event
$(document).ready(function(){


    const btnTop = document.querySelector('.btn-top');
    //container layout/app
    const container = document.querySelector('#contentWrapper');
    const footer = document.querySelector('#footerMain');

    //disable button saat submit form
    const formSimpan = document.querySelectorAll('form');

    for (const [index, form] of formSimpan.entries()) {

        form.addEventListener('submit', function(){

            const btnSubmit = form.querySelector("button[type='submit']") ;

            if(btnSubmit){
                btnSubmit.disabled = true;
            }
        });
    }

    container.onscroll = () => {
        scrollFunctionApp(container, btnTop, footer);
    };

    btnTop.addEventListener('click', () => {

        $('#contentWrapper').animate({
            scrollTop:0
        },500);
        return false;
    });

    let selectSearch = document.querySelectorAll('.select-search');

    for (const [index, select] of selectSearch.entries()) {
        new TomSelect(select,{
            plugins: ['remove_button'],
            create: true,
            sortField: {
            // field: "text", salah sortir
            field: "number",
            direction: "asc"
            }
        });
    }

    const globalDeleteModal = new bootstrap.Modal('#globalDeleteModal');
    const globalDeleteForm = document.querySelector('#globalDeleteForm');

    // modal delete data
    showFormModal(globalDeleteModal, globalDeleteForm, updateModalBody);

    function updateModalBody(button){

        const title = button.getAttribute('data-title');
        const body = button.getAttribute('data-body');

        globalDeleteModal._element.querySelector('.modal-title').querySelector('#modalTitle').innerText = title;
        globalDeleteModal._element.querySelector('.modal-body').querySelector('.delete-body').innerText = body;
    }

});

// scroll to top
const scrollFunctionApp = (appCont, btn, footer) =>  {
    if(appCont.scrollTop > 680){
        footer.style.display = 'block';
    }
    if (appCont.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        btn.style.visibility = 'visible';

    } else {
        btn.style.visibility = 'hidden';
    }
}
