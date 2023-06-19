var lesQuestions = [];

function ajouteruneQuestion() {
    var questionForm = document.getElementById("questionForm");
    var questionInput = document.getElementById("questionInput");
    var correctAnswerInput = document.getElementById("correctAnswerInput");
    var incorrectAnswer1Input = document.getElementById("incorrectAnswer1Input");
    var incorrectAnswer2Input = document.getElementById("incorrectAnswer2Input");
    var incorrectAnswer3Input = document.getElementById("incorrectAnswer3Input");
    var question = questionInput.value;
    var correctAnswer = correctAnswerInput.value;
    var incorrectAnswer1 = incorrectAnswer1Input.value;
    var incorrectAnswer2 = incorrectAnswer2Input.value;
    var incorrectAnswer3 = incorrectAnswer3Input.value;

    if (question.trim() !== "" && correctAnswer.trim() !== "" && incorrectAnswer1.trim() !== "" && incorrectAnswer2.trim() !== "" && incorrectAnswer3.trim() !== "") {
        lesQuestions.push({
            question: question,
            reponses: [correctAnswer, incorrectAnswer1, incorrectAnswer2, incorrectAnswer3],
            bonneReponse: correctAnswer
        });

        questionInput.value = "";
        correctAnswerInput.value = "";
        incorrectAnswer1Input.value = "";
        incorrectAnswer2Input.value = "";
        incorrectAnswer3Input.value = "";
        alert("Question ajoutée avec succès.");
    } else {
        alert("Veuillez remplir tous les champs.");
    }
}

function questionsMontrer() {
    var listedeQuestions = document.getElementById("listedeQuestions");
    listedeQuestions.innerHTML = "";

    lesQuestions.forEach(function (question, index) {
        var li = document.createElement("li");
        li.innerHTML = "<strong>Question " + (index + 1) + " :</strong> " + question.question + "<br>";
        li.innerHTML += "Réponses : <br>";

        question.reponses.forEach(function (repondre, i) {
            li.innerHTML += "<input type='radio' name='repondre_" + index + "' value='" + repondre + "'>" + repondre + "<br>";
        });

        listedeQuestions.appendChild(li);
    });
}

function confirmerReponses() {
    var choix = document.querySelectorAll("input[type='radio']");
    var reponsesCorrectes = 0;

    choix.forEach(function (chois) {
        if (chois.checked && chois.value === lesQuestions[chois.name.split("_")[1]].bonneReponse) {
            reponsesCorrectes++;
        }
    });

    alert("Nombre de bonnes réponses : " + reponsesCorrectes);
}

function rafraichirlaPage() {
    location.reload();
}
