/**
 * Created by leelanarasimha on 29/04/17.
 */
$(document).ready(function() {

    $(document).on('click', '.show_password_modal', function(e) {
        e.preventDefault();
        $('.password_modal').modal('show');
    });

    $(document).on('submit', '.password_change_form', function(e) {
        var newPassword = $('.new_password').val();
        var confirmnewPassword = $('.confirm_new_password').val();
        if (newPassword == '') {
            alert('New Password is empty');
            e.preventDefault();
        }
    })

});