$(document).on("click", ".item-delete", function () {
    const $button = $(this), $row = $(this).closest("tr");
    swal({
        title: "Are you sure?",
        icon: "warning",
        buttons: [
            'No',
            'Yes'
        ],
        dangerMode: true
    }).then(function (response) {
        if (response)
            $.ajax({
                "type": "POST",
                "url": $button.data("url"),
                "data": {_method: "DELETE"},
                "headers": {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                "success": function () {
                    $row.addClass("danger").fadeOut();
                },
                "error": function () {
                    swal({
                        title: "Delete Error!!",
                        icon: "error",
                        dangerMode: true
                    });
                }
            });
    });
});
