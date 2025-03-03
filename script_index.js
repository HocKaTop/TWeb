        function checkQuiz() {
            let score = 0;
            let answer1 = document.querySelector('input[name="q1"]:checked');
            let answer2 = document.querySelector('input[name="q2"]:checked');

            if (answer1 && answer1.value === "Сена") {
                score++;
            }
            if (answer2 && answer2.value === "Версаль") {
                score++;
            }

            document.getElementById("result").textContent = "Ваш результат: " + score + "/2";
        }
    