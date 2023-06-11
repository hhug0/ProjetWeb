var questions = [
    {
      question: "Quelle est l'une des œuvres dramatiques les plus célèbres ?",
      choices: ["Gone with the Wind", "The Lion King", "The Avengers", "Pulp Fiction"],
      correctAnswer: "Gone with the Wind"
    },
    {
      question: "Quel est l'un des personnages les plus emblématiques de Disney ?",
      choices: ["Mickey Mouse", "Superman", "Iron Man", "Batman"],
      correctAnswer: "Mickey Mouse"
    },
    {
      question: "Quelle est la méthode la plus couramment utilisée dans les films d'action ?",
      choices: ["Scènes de bataille", "Chansons musicales", "Monologues dramatiques", "Poursuites rapides en voiture"],
      correctAnswer: "poursuites en voiture rapide"
    }
    



  ];
  
  var currentQuestion = 0;
  var score = 0;
  var quizContainer = document.getElementById("quiz");
  
  function showQuestion() {
    var question = questions[currentQuestion];
    var questionHTML = "<h2>" + question.question + "</h2>";
  
    var choices = question.choices;
    for (var i = 0; i < choices.length; i++) {
      questionHTML += "<input type='radio' name='quiz-" + currentQuestion + "' value='" + choices[i] + "'>";
      questionHTML += choices[i] + "<br>";
    }
  
    quizContainer.innerHTML = questionHTML;
  }
  
  function submitQuiz() {
    var selectedOption = document.querySelector("input[name='quiz-" + currentQuestion + "']:checked");
    if (selectedOption) {
      if (selectedOption.value === questions[currentQuestion].correctAnswer) {
        score++;
      }
      currentQuestion++;
      if (currentQuestion < questions.length) {
        showQuestion();
      } else {
        quizContainer.innerHTML = "<h2>Quizz terminé!</h2>" +
                                  "<p>Score total: " + score + "</p>" +
                                  "<button onclick='restartQuiz()'>Recommencer</button>";
      }
    }
  }

  function restartQuiz() {
    currentQuestion = 0;
    score = 0;
    showQuestion();
  }
  
  showQuestion();
  