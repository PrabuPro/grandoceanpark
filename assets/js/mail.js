$(document).ready(function () {
    $('.form').on('submit', function (e) {
        e.preventDefault();
        $('.book-table__msg--red').empty();
        $('.book-table__msg--green').empty();
        $('.book-table__msg--white').css('display', 'block');

        $.ajax({
            type: 'POST',
            url: 'mailcontroller/makemessage',
            data: $('.form').serialize(),
            datatype: "html",
            success: function (data) {
                var text = data;
                if (text === "Succeessfully send the Message!") {
                    $('.book-table__msg--white').css('display', 'none');
                    $('.book-table__msg--green').append(data);
                    $('.book-table__msg--red').css('display', 'none');
                    $('.book-table__msg--green').css('display', 'block');
                    $('.name').val(' ');
                    $('.email').val(' ');
                    $('#message').val(' ');

                } else {
                    $('.book-table__msg--white').css('display', 'none');
                    $('.book-table__msg--red').append(data);
                    $('.book-table').css('height', '70rem');
                    $('.book-table__msg--green').css('display', 'none');
                    $('.book-table__msg--red').css('display', 'block');
                }
            }
        });
    });
});