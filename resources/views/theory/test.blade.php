    @extends('layouts.app')

    @section('main')

    <div class="test">
        <div class="container">
            <div class="main_title">
                <p>
                    Тест на знание для сотрудников полиции
                </p>
            </div>

            <div id="questionContainer" class="scenario-description"></div>

            <div class="questionBtn">
                <button id="nextButton" style="display:none;">Далее</button>
            </div>
            <p id="result"></p>
        </div>
    </div>

    <script>
        const questions = [
            {
                question: "Какой закон регулирует деятельность полиции в Республике Казахстан?",
                options: ["Уголовный кодекс Республики Казахстан", "Закон о полиции", "Гражданский кодекс Республики Казахстан", "Кодекс об административных правонарушениях"],
                answer: "Закон о полиции"
            },
            {
                question: "Какой из ниже перечисленных документов должен быть у сотрудника полиции при задержании гражданина?",
                options: ["Протокол задержания", "Уведомление об аресте", "Постановление о возбуждении дела", "Предупреждение"],
                answer: "Протокол задержания"
            },
            {
                question: "Что является обязательным при проверке документов гражданина сотрудником полиции?",
                options: ["Уведомление об проверке", "Документ, удостоверяющий личность гражданина", "Письменное согласие гражданина", "Основание для проверки"],
                answer: "Документ, удостоверяющий личность гражданина"
            },
            {
                question: "Какой срок хранения протоколов об административных правонарушениях для сотрудников полиции?",
                options: ["1 год", "3 года", "5 лет", "10 лет"],
                answer: "3 года"
            },
            {
                question: "Какой из документов обязаны составить сотрудники полиции при получении сообщения о правонарушении?",
                options: ["Протокол осмотра места происшествия", "Служебная записка", "Отчет о происшествии", "Протокол допроса"],
                answer: "Протокол осмотра места происшествия"
            }
        ];

        let currentQuestionIndex = 0;
        let score = 0;
        const questionContainer = document.getElementById("questionContainer");
        const nextButton = document.getElementById("nextButton");

        function showQuestion() {
            const q = questions[currentQuestionIndex];
            questionContainer.innerHTML = `<p><strong>${currentQuestionIndex + 1}. ${q.question}</strong></p>`;
            
            q.options.forEach(option => {
                const optionDiv = document.createElement("div");
                optionDiv.classList.add("option");
                optionDiv.textContent = option;
                optionDiv.addEventListener("click", () => handleOptionClick(optionDiv, option));
                questionContainer.appendChild(optionDiv);
            });
            
            nextButton.style.display = "block";
        }

        function handleOptionClick(optionDiv, option) {
            const allOptions = document.querySelectorAll(".option");
            allOptions.forEach(opt => opt.classList.remove("selected"));
            
            optionDiv.classList.add("selected");
            optionDiv.dataset.selectedAnswer = option; 
            
            nextButton.disabled = false;
        }

        nextButton.addEventListener("click", () => {
            const selectedOptionDiv = document.querySelector(".option.selected");
            if (!selectedOptionDiv) {
                alert("Пожалуйста, выберите ответ перед продолжением!");
                return;
            }

            const selectedOption = selectedOptionDiv.dataset.selectedAnswer;

            if (selectedOption === questions[currentQuestionIndex].answer) {
                score++;
            }

            currentQuestionIndex++;
            if (currentQuestionIndex < questions.length) {
                showQuestion();
                nextButton.disabled = true;  
            } else {
                questionContainer.innerHTML = "<h2>Тест завершен!</h2>";
                nextButton.style.display = "none";
                document.getElementById("result").innerText = `Ваш результат: ${score} из ${questions.length}`;
            }
        });

        showQuestion();
    </script>

    @endsection
