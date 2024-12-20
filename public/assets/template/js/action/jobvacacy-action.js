"use strict"

$(document).ready(function () {
    $("#form-create-jobvacancy").submit(function (e) {
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
                }).then((willDirect) => {
                    if(willDirect) {
                        window.location.href = $("#form-create-jobvacancy").attr('action');
                    }
                });
            },
            error: function(xhr, status, errorThrown) {
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
    });

    $("#create-button").click(function (e) {
        e.preventDefault();

        $("#form-create-jobvacancy").submit();

    });

    $("#form-edit-jobvacancy").submit(function (e) {
        e.preventDefault();

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
        }).then((willUpdate) => {
            if (willUpdate) {
                $.ajaxSetup({
                    "headers": {
                        'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')
                    }
                });

                $.ajax({
                    type: "PUT",
                    url: $("#form-edit-jobvacancy").attr("action"),
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

                        window.location.href = $("#update-button").data("url");
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
                swal("Data lowongan tetap terjaga!", {
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

        $("#form-edit-jobvacancy").submit();
    });

    $("#jobvacancy-table").on("click", ".btn-danger", function (e) {
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

                        $("#jobvacancy-table").DataTable().ajax.reload();
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
                swal("Data lowongan tetap terjaga!", {
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