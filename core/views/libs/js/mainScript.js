/**
 * Created by Влад on 24.05.2017.
 */
$("document").ready(function () {
    $('#date').datepicker({
        monthNames: ["Январь", "Февраль", "Март", "Апрель", "Май", "Июнь", "Июль", "Август", "Сентябрь", "Октябрь", "Ноябрь", "Декабрь"],
        monthNamesShort: ["Янв", "Фев", "Мар", "Апр", "Май", "Июн", "Июл", "Авг", "Сен", "Окт", "Ноя", "Дек"],
        dayNames: ["Понедельник", "Вторник", "Среда", "Четверг", "Пятница", "Суббота", "Воскресение"],
        dayNamesMin: ["Пн", "Вт", "Ср", "Чт", "Пт", "Сб", "Вс"],
        changeMonth: true,
        changeYear: true,
        dateFormat:"yy-mm-dd"
    });
    $('#Login').keyup(function () {
        var val = $(this).val();
        $.ajax({
            type: 'post',
            url: '/checkName',
            data: {'checkName': val},
            success: function (data) {
                if (data) {
                    console.log(data);
                    $("#loginPole").addClass("has-error");
                    $("#errName").css({'display': 'block'});
                } else {
                    $("#loginPole").removeClass("has-error");
                    $("#errName").css({'display': 'none'});
                }
            }
        });
    })
});