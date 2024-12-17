$(document).ready(function () {
    $("#department-table").DataTable({
        ordering: true,
        serverSide: true,
        processing: true,
        responsive: true,
        ajax: {
            url: $("#department-table").data("url"),
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
                data: "description",
                name: "description"
            },
            {
                data: 'action',
                name: 'action'
            }
        ],
        columnDefs: []
    });
});