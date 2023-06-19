<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="dynamique.css">
    <meta charset="UTF-8">
    <title>Réponses aux Questions</title> 
</head>
<body>
    <h1>Réponses aux Questions</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $difficulte = $_POST["difficultyInput"];
        $question = $_POST["questionInput"];
        $correctAnswer = $_POST["correctAnswerInput"];
        $incorrectAnswer1 = $_POST["incorrectAnswer1Input"];
        $incorrectAnswer2 = $_POST["incorrectAnswer2Input"];
        $incorrectAnswer3 = $_POST["incorrectAnswer3Input"];
        
        
        echo "Réponses aux questions :";
        echo "<ul>";
        echo "<li>Difficulté: ". $difficulte . "</li>";
        echo "<li>Question : " . $question . "</li>";
        echo "<li>Bonne réponse : " . $correctAnswer . "</li>";
        echo "<li>Autre mauvaise réponse : " . $incorrectAnswer1 . "</li>";
        echo "<li>Autre mauvaise réponse : " . $incorrectAnswer2 . "</li>";
        echo "<li>Autre mauvaise réponse : " . $incorrectAnswer3 . "</li>";
        echo "</ul>";
    }
    ?>
    
    <button onclick="window.history.back()">Retour</button>

    <script src="dynamique.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
</body>
</html>
