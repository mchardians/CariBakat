"use strict"

$(document).ready(function () {
    $("#create-criteria-form").submit(function (e) {
        e.preventDefault();

        const formData = $(this).serialize();

        $.ajaxSetup({
            "headers": {
                'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')
            }
        });

        $.ajax({
            type: "POST",
            url: $(this).attr("action"),
            data: formData,
            dataType: "JSON",
            success: function (response) {
                swal("Success!", response.message, {
                    icon : "success",
                    buttons: {
                        confirm: {
                            className : 'btn btn-success'
                        }
                    },
                });

                $("#create-criteria-form")[0].reset();
                $("#criteria-table").DataTable().ajax.reload();
                $(".close").click();
            }
        });
    });

    $("#create-button").click(function (e) {
        e.preventDefault();

        $("#create-criteria-form").submit();
    });

    $("#criteria-table").on("click", ".btn-warning", function (e) {
        e.preventDefault();

        const id = $(this).val();

        $.ajax({
            type: "GET",
            url: $(this).data("url").replace(":id", id),
            dataType: "JSON",
            success: function (response) {
                $("#edit-name").val(response.data.name);
                $("#edit-weight").val(response.data.weight);
                $("#edit-criteria-form").data("id", id);
            }
        });
    });

    $("#edit-criteria-form").submit(function (e) {
        e.preventDefault();

        const id = $(this).data("id");
        const formData = $(this).serialize();

        swal({
            title: 'Apakah anda yakin?',
            text: "Anda tidak dapat mengembalikan operasi ini!",
            type: 'warning',
            buttons:{
                cancel: {
                    visible: true,
                    text : 'Tidak, batal!',
                    className: 'btn btn-danger'
                },
                confirm: {
                    text : 'Simpan!',
                    className : 'btn btn-success'
                }
            }
        }).then((willDelete) => {
            if (willDelete) {
                $.ajaxSetup({
                    "headers": {
                        'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')
                    }
                });

                $.ajax({
                    type: "PUT",
                    url: $(this).data("url").replace(":id", id),
                    data: formData,
                    dataType: "JSON",
                    success: function (response) {
                        swal("Success!", response.message, {
                            icon : "success",
                            buttons: {
                                confirm: {
                                    className : 'btn btn-success'
                                }
                            },
                        });

                        $("#edit-criteria-form")[0].reset();
                        $("#criteria-table").DataTable().ajax.reload();
                        $(".close").click();
                    },
                    error: function (xhr, status, errorThrown) {
                        swal("Error!", "An unexpected error has occurred!", {
                            icon : "error",
                            buttons: {
                                confirm: {
                                    className : 'btn btn-danger'
                                }
                            },
                        });
                    }
                });
            } else {
                swal("Data kriteria tetap terjaga!", {
                    buttons : {
                        confirm : {
                            className: 'btn btn-success'
                        }
                    }
                });
            }
        });
    });

    $("#update-button").click(function (e) {
        e.preventDefault();

        $("#edit-criteria-form").submit();
    });

    $("#criteria-table").on("click", ".btn-danger", function (e) {
        e.preventDefault();

        const id = $(this).val();

        swal({
            title: 'Apakah anda yakin?',
            text: "Anda tidak dapat mengembalikan operasi ini!",
            type: 'warning',
            buttons:{
                cancel: {
                    visible: true,
                    text : 'Tidak, batal!',
                    className: 'btn btn-danger'
                },
                confirm: {
                    text : 'Ya, hapus saja!',
                    className : 'btn btn-success'
                }
            }
        }).then((willDelete) => {
            if (willDelete) {
                $.ajaxSetup({
                    "headers": {
                        'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')
                    }
                });

                $.ajax({
                    type: "DELETE",
                    url: $(this).data("url").replace(":id", id),
                    dataType: "JSON",
                    success: function (response) {
                        swal("Success!", response.message, {
                            icon : "success",
                            buttons: {
                                confirm: {
                                    className : 'btn btn-success'
                                }
                            },
                        });

                        $("#criteria-table").DataTable().ajax.reload();
                        $(".close").click();
                    },
                    error: function (xhr, status, errorThrown) {
                        swal("Error!", "An unexpected error has occurred!", {
                            icon : "error",
                            buttons: {
                                confirm: {
                                    className : 'btn btn-danger'
                                }
                            },
                        });
                    }
                });
            } else {
                swal("Data kriteria tetap terjaga!", {
                    buttons : {
                        confirm : {
                            className: 'btn btn-success'
                        }
                    }
                });
            }
        });
    });
});