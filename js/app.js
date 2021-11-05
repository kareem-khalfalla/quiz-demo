let xhr = new XMLHttpRequest();
let questionId = 1;
const questionMints = 1;
let questionSeconds = questionMints * 60;

const timerElement = document.getElementById('timer');
const nextBtn = document.getElementById('next-btn');
const questionNumberElement = document.getElementById('question-number');

let countdown;

let isLast = false;
let correctAnswersCount = 0;
let correctAnswer = '';

const h1Element = document.getElementById('h1');

const inputs = document.querySelectorAll('input[type=checkbox]');
const questionsContainer = document.getElementById('questions-container');
const startBtn = document.getElementById('start-btn');

startBtn.addEventListener('click', () => {
    questionsContainer.classList.remove('hidden');
    updateTimer();
});


const fetchQuestion = () => {
    xhr.open('GET', `http://localhost/data.php?query=questions&id=${questionId}`);
    xhr.send();
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            let item = JSON.parse(xhr.responseText);
            if (item == null) {
                isLast = true;
                h1Element.innerHTML = `Correct Answers Count is ${correctAnswersCount} of ${questionId}`;
                return;
            }
            correctAnswer = item.answer;
            renderQuestionToDOM(item);
        }
    }
}

fetchQuestion();

const renderQuestionToDOM = (quiz) => {
    questionNumberElement.innerHTML = `question #${questionId}`;

    document.getElementById('question-label').innerHTML = quiz.question;

    let answerOneElement = document.getElementById('answer-one');
    answerOneElement.innerHTML = quiz.c1;
    answerOneElement.previousSibling.value = quiz.c1;
    let answerTwoElement = document.getElementById('answer-two');
    answerTwoElement.innerHTML = quiz.c2;
    answerTwoElement.previousSibling.value = quiz.c1;
    let answerThreeElement = document.getElementById('answer-three');
    answerThreeElement.innerHTML = quiz.c1;
    answerThreeElement.previousSibling.value = quiz.c3;
}

const validateInputs = () => {
    inputs.forEach((item) => {
        console.log(item);
    });
}

const resetInputsAndIncreaseCorrectAnswersCount = () => {
    inputs.forEach((item) => {
        if (item.checked) {
            console.log(item.value);
            console.log(correctAnswer);
            if (item.value.trim() == correctAnswer.trim()) {
                correctAnswersCount++;
                console.log(correctAnswersCount);
            }
        }
        item.checked = false;
    });
}


const updateTimer = () => countdown = setInterval(() => {
    let minutes = Math.floor(questionSeconds / 60);
    let seconds = questionSeconds % 60;
    seconds = seconds < 10
        ? `0${seconds}`
        : seconds;
    minutes = minutes < 10
        ? `0${minutes}`
        : minutes;
    timerElement.innerHTML = `${minutes}:${seconds}`;
    questionSeconds--;
    if (questionSeconds < 0) {
        clearInterval(countdown);
        nextBtn.click();
    }
}, 1000);

nextBtn.addEventListener('click', () => {
    // validateInputs();
    if (!isLast) {
        resetInputsAndIncreaseCorrectAnswersCount();
    }

    if (isLast) {
        nextBtn.classList.add('opacity-50', 'cursor-not-allowed');
        return;
    }

    questionSeconds = questionMints * 60;

    clearInterval(countdown);
    updateTimer();

    questionId++;
    fetchQuestion();
});


// theme ui
let toggleBtn = document.querySelector("#navbar-toggle");
let collapse = document.querySelector("#navbar-collapse");

toggleBtn.onclick = () => {
    collapse.classList.toggle("hidden");
    collapse.classList.toggle("flex");
};
