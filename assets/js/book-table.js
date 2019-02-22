$(document).ready(function () {
    $('.form').on('submit', function (e) {
        e.preventDefault();
        $('.book-table__msg--red').empty();
        $('.book-table__msg--green').empty();
        $('.book-table__msg--white').css('display','block');

        $.ajax({
            type: 'POST',
            url: 'reservation/makereservation',
            data: $('.form').serialize(),
            datatype: "html",
            success: function (data) {
                var text = data;
                if (text === "Booking Successful") {
                    $('.book-table__msg--white').css('display', 'none');
                    $('.book-table__msg--green').append(data);
                    $('.book-table__msg--red').css('display', 'none');
                    $('.book-table__msg--green').css('display', 'block');
                    $('.datepicker').val(' ');
                    $('.name').val(' ');
                    $('.timepicker').val(' ');
                    $('.phone').val(' ');
                    $('.people').val('People');
                    $('.email').val(' ');
                    
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

    $('.form-2').on('submit', function (e) {
        e.preventDefault();
        $('.book-table__msg--red').empty();
        $('.book-table__msg--green').empty();
        $('.book-table__msg--white').css('display','block');

        $.ajax({
            type: 'POST',
            url: 'reservation/makereservation',
            data: $('.form-2').serialize(),
            datatype: "html",
            success: function (data) {
                var text = data;
                if (text === "Booking Successful") {
                    $('.book-table__msg--white').css('display', 'none');
                    $('.book-table__msg--green').append(data);
                    $('.book-table__msg--red').css('display', 'none');
                    $('.book-table__msg--green').css('display', 'block');
                    $('.datepicker').val(' ');
                    $('.name').val(' ');
                    $('.timepicker').val(' ');
                    $('.phone').val(' ');
                    $('.people').val('People');
                    $('.email').val(' ');
                    
                } else {
                    $('.book-table__msg--white').css('display', 'none');
                    $('.book-table__msg--red').append(data);
                    $('.section-reservation').css('height', '70rem');
                    $('.book-table__msg--green').css('display', 'none');
                    $('.book-table__msg--red').css('display', 'block');
                }
            }
        });
    });
});