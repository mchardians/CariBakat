$(document).ready(function () {
    $("#criteria-table").DataTable({
        ordering: true,
        serverSide: true,
        processing: true,
        responsive: true,
        ajax: {
            url: $("#criteria-table").data("url"),
        },
        columns: [
            {
                data: "DT_RowIndex", name: "DT_RowIndex", width: "10px", orderable: false, searchable: false
            },
            {
                data: "name",
                name: "name"
            },
            {
                data: "weight",
                name: "weight"
            },
            {
                data: 'action',
                name: 'action'
            }
        ],
        columnDefs: []
    });
});