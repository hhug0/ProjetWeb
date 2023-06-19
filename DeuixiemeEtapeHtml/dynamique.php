<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="dynamique.css">
    <meta charset="UTF-8">
    <title>Gestion des Questions</title> 
</head>
<body>
    <h1>Gestion des Questions</h1>
    
    <form action="afficher_reponses.php" method="POST">
        <label for="difficultyInput">Difficulté :</label>
        <select id="difficultyInput" name="difficultyInput">
            <option value="facile">Facile</option>
            <option value="normal">Normal</option>
            <option value="difficile">Difficile</option>
        </select>
        <br><br>
        
        <label for="questionInput">Question :</label>
        <input type="text" id="questionInput" name="questionInput" required>
        <br><br>
        <label for="correctAnswerInput">Bonne réponse :</label>
        <input type="text" id="correctAnswerInput" name="correctAnswerInput" required>
        <br><br>
        <label for="incorrectAnswer1Input">Autre mauvaise réponse :</label>
        <input type="text" id="incorrectAnswer1Input" name="incorrectAnswer1Input" required>
        <br><br>
        <label for="incorrectAnswer2Input">Autre mauvaise réponse :</label>
        <input type="text" id="incorrectAnswer2Input" name="incorrectAnswer2Input" required>
        <br><br>
        <label for="incorrectAnswer3Input">Autre mauvaise réponse :</label>
        <input type="text" id="incorrectAnswer3Input" name="incorrectAnswer3Input" required>
        <br><br>
        
        <button type="submit">Ajouter une Question</button>
    </form>

    <script src="dynamique.js"></script>
</body>
</html>
