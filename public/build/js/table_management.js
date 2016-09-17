/*
function conta() {
    var count = 0;
    for (var i = 1; i < 11; i++) {
        if (document.getElementById("par" + i).checked == false) {
            document.getElementById("para" + i).value = 0;
            count++;
        } else {
            document.getElementById("para" + i).value = document.getElementById("par" + i).value;
        }
    }
}
*/  
function SelectAll() {
    if ( document.getElementById("sel-all-btn").classList.contains('btn-success') ) {
        $('.checkbox').iCheck('check'); 
        document.getElementById("sel-all-btn").classList.remove('btn-success');    
        document.getElementById("sel-all-btn").classList.add('btn-danger');
        toggleTextOfButton("sel-all-btn");
    }else{
        $('.checkbox').iCheck('uncheck'); 
        document.getElementById("sel-all-btn").classList.remove('btn-danger');    
        document.getElementById("sel-all-btn").classList.add('btn-success');
        toggleTextOfButton("sel-all-btn");
    }
    
}

function toggleTextOfButton(button_id)  {
   var text = document.getElementById(button_id).childNodes[0].nodeValue;
   text = text == "Select All" ? "Unselect All" : "Select All";
}

/*
$(document).ready(function() {
    var handleDataTableButtons = function() {
        if ($("#datatable-buttons").length) {
            $("#datatable-buttons").DataTable({
                dom: "Bfrtip",
                buttons: [{
                    extend: "copy",
                    className: "btn-sm"
                }, {
                    extend: "csv",
                    className: "btn-sm"
                }, {
                    extend: "excel",
                    className: "btn-sm"
                }, {
                    extend: "pdfHtml5",
                    className: "btn-sm"
                }, {
                    extend: "print",
                    className: "btn-sm"
                }, ],
                responsive: true
            });
        }
    };

    TableManageButtons = function() {
        "use strict";
        return {
            init: function() {
                handleDataTableButtons();
            }
        };
    }();

    $('#datatable').dataTable();

    $('#datatable-keytable').DataTable({
        keys: true
    });

    $('#datatable-responsive').DataTable();

    $('#datatable-scroller').DataTable({
        ajax: "js/datatables/json/scroller-demo.json",
        deferRender: true,
        scrollY: 380,
        scrollCollapse: true,
        scroller: true
    });

    $('#datatable-fixed-header').DataTable({
        fixedHeader: true
    });

    var $datatable = $('#datatable-checkbox');

    $datatable.dataTable({
        'order': [
            [1, 'asc']
        ],
        'columnDefs': [{
            orderable: false,
            targets: [0]
        }]
    });
    $datatable.on('draw.dt', function() {
        $('input').iCheck({
            checkboxClass: 'icheckbox_flat-green'
        });
    });

    TableManageButtons.init();
});

*/