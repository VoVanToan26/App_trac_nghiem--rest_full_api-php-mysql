const questionsElements = document.getElementById("title");
const scoreTitleElement = document.getElementById("total_score");
const answersElements = document.querySelectorAll(".the_answer");
const case_aElements = document.querySelector("#case_a");
const case_bElements = document.querySelector("#case_b");
const case_cElements = document.querySelector("#case_c");
const case_dElements = document.querySelector("#case_d");
const submitBtn = document.getElementById("submitBtn");
const container = document.getElementById("question_container");
const result = [];
let questionsIndex = 0;
let questionContents;
let score = 0;

// get data
async function load_answer() {
    return await fetch("http://localhost/rest_full_api/api/questions/read.php")
        .then((res) => res.json())
        .then((data) => {
            return data.questions;
            // show the questions
        })
        .catch((err) => {
            console.log(err);
            throw err;
        });
}
function getAnswer() {
    for (Element of answersElements) {
        if (Element.checked) return Element.value;
    }
}
function showQuestion(questionContent) {
    questionsElements.innerHTML = questionContent.title;
    case_aElements.parentElement.querySelector("label").innerHTML = questionContent.case_a;
    case_bElements.parentElement.querySelector("label").innerHTML = questionContent.case_b;
    case_cElements.parentElement.querySelector("label").innerHTML = questionContent.case_c;
    case_dElements.parentElement.querySelector("label").innerHTML = questionContent.case_d;
}

flash = true;
review = false;
submitBtn.addEventListener("click", async () => {
    if (!review) {
        if (flash) {
            questionContents = await load_answer();
            showQuestion(questionContents[0]);
            submitBtn.innerHTML = "Câu tiếp theo";
            container.classList.remove("d-none");
            flash = false;
        } else if (questionsIndex < questionContents.length - 1) {
            if (questionsIndex === questionContents.length - 2) submitBtn.innerHTML = "Submit";
            result.push(getAnswer());
            console.log(questionsIndex);
            showQuestion(questionContents[++questionsIndex]);
        } else {
            questionsIndex++;
            result.forEach((value, index) => {
                console.log(index, value, questionContents[index].answer);
                if (value === questionContents[index].answer) score++;
            });
            container.classList.add("d-none");
            scoreTitleElement.classList.remove("d-none");
            scoreTitleElement.innerHTML = "so diem cua ban là" + score;
            submitBtn.innerHTML = "Xem lai";
            review = true;
            questionsIndex = 0;
        }
    } else {
        if (questionsIndex < questionContents.length) {
            container.classList.remove("d-none");
            scoreTitleElement.classList.add("d-none");
            showQuestion(questionContents[++questionsIndex]);
            submitBtn.innerHTML = "Câu tiếp theo";
            document.querySelectorAll("label").forEach((Element) => Element.classList.remove("highlight"));
            document
                .getElementById("content_case_" + questionContents[questionsIndex].answer)
                .classList.add("highlight");
            flash = false;
        } else {
            container.classList.add("d-none");
            scoreTitleElement.classList.remove("d-none");
            scoreTitleElement.innerHTML = "so diem cua ban là: " + score;

            
            questionsIndex = 0;
            submitBtn.innerHTML = "Xem lai";
        }
    }
});
