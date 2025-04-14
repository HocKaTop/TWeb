$(document).ready(function() {
    // Функция проверки викторины
    function checkQuiz() {
        let score = 0;
        
        if ($('input[name="q1"]:checked').val() === "Сена") {
            score++;
        }
        if ($('input[name="q2"]:checked').val() === "Версаль") {
            score++;
        }
        
        $("#result").text("Ваш результат: " + score + "/2");
    }
    
    // Назначаем обработчик на кнопку викторины
    $('.quiz button').on('click', checkQuiz);
    
    // Обработчик формы
    $('form').on('submit', function(e) {
        e.preventDefault();
        const notification = $('#notification');
        
        $.ajax({
            url: 'save.php',
            type: 'POST',
            data: $(this).serialize(),
            dataType: 'json',
            success: function(result) {
                notification.text(result.message)
                    .removeClass('error success')
                    .addClass(result.status)
                    .fadeIn()
                    .delay(3000)
                    .fadeOut();
            },
            error: function(xhr, status, error) {
                notification.text('❌ Ошибка: ' + error)
                    .removeClass('success')
                    .addClass('error')
                    .fadeIn()
                    .delay(3000)
                    .fadeOut();
            }
        });
    });
});