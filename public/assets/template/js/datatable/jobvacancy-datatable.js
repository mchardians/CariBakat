$(document).ready(function () {
    $("#jobvacancy-table").DataTable({
        ordering: true,
        serverSide: true,
        processing: true,
        responsive: true,
        ajax: {
            url: $("#jobvacancy-table").data("url"),
        },
        columns: [
            {
                data: "DT_RowIndex", name: "DT_RowIndex", width: "10px", orderable: false, searchable: false
            },
            {
                data: "title",
                name: "title"
            },
            {
                data: "department",
                name: "department"
            },
            {
                data: "type",
                name: "type"
            },
            {
                data: "created",
                name: "created"
            },
            {
                data: "expired",
                name: "expired"
            },
            {
                data: 'action',
                name: 'action'
            }
        ],
        columnDefs: []
    });
});