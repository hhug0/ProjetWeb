var lesQuestions = [];

function ajouteruneQuestion() {
    var questionEntree = document.getElementById("question");
    var reponsesEntree = document.getElementById("reponses");
    var bonneReponseInput = document.getElementById("bonne_reponse");
    var textedelaQuestion = questionEntree.value;
    var ReponsesTexte = reponsesEntree.value;
    var bonneReponse = bonneReponseInput.value;

    if (textedelaQuestion.trim() !== "" && ReponsesTexte.trim() !== "" && bonneReponse.trim() !== "") {
        var reponses = ReponsesTexte.split("\n");

        if (reponses.includes(bonneReponse)) {
            lesQuestions.push({
                question: textedelaQuestion,
                reponses: reponses,
                bonneReponse: bonneReponse
            });

            questionEntree.value = "";
            reponsesEntree.value = "";
            bonneReponseInput.value = "";
            alert("Question ajoutée avec succès.");
        } else {
            alert("La bonne réponse doit être l'une des options de réponse.");
        }
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

        question.reponses.forEach(function (repondre) {
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