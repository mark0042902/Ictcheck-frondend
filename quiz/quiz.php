<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../style.css?<?= time() ?>">
  <link rel="stylesheet" href="quiz.css?<?= time() ?>">
  <title>Quiz</title>
</head>

<body class="quiz">
  <div class="header">
    <div class="header-content">
      <h1>Ben jij ICT waardig?</h1>
      <ul class="links bottom">Wil jij meer weten over deze opleiding?<br> Klik dan zeker op een van de onderstaande linkjes!
        <li><a class="white" href="https://hoornbeeckict.nl/">Website</a>, <a class="white" href="https://www.instagram.com/hoornbeeckictamersfoort/">Instagram</a>, <a class="white" href="https://www.linkedin.com/company/hoornbeeck-ict-amersfoort/">Linkedin</a></li>
      </ul>
    </div>
  </div>
  <div class="center">
    <div class="content-box">
      <h2 class="question">Vraag</h2>
      <form onsubmit="submitAnswer(event)">
        <input class="answer" type="radio" name="answer" id="answer-1-input"><span id="answer-1"></span><br>
        <input class="answer" type="radio" name="answer" id="answer-2-input"><span id="answer-2"></span><br>
        <input class="answer" type="radio" name="answer" id="answer-3-input"><span id="answer-3"></span><br>
        <div class="submitAnswers">
          <input class="formSubmit next" type="submit" value="Volgende">
        </div>
      </form>

    </div>
  </div>

  <script src="../globalVariables.js"></script>

  <script>
    let questions = [];

    const givenAnswers = [];

    window.onload = async function() {
      questions = await getQuestions();
      nextQuestion();
    }

    let questionId = -1;

    async function getQuestions() {
      const res = await fetch(backendUrl + "/questions");
      const json = await res.json();

      return json;
    }

    async function getAnswers(id) {
      const res = await fetch(backendUrl + "/answers/" + id);
      const json = await res.json();

      return json;
    }

    async function nextQuestion() {
      questionId++;

      if (questionId < questions.length) {
        const question = questions[questionId];
        const text = question[1];

        const answers = await getAnswers(questionId + 1);

        document.querySelector(".question").innerHTML = text;

        document.querySelector("#answer-1").innerHTML = answers[0][1];
        document.querySelector("#answer-2").innerHTML = answers[1][1];
        document.querySelector("#answer-3").innerHTML = answers[2][1];

        document.querySelector("#answer-1-input").value = answers[0][3];
        document.querySelector("#answer-2-input").value = answers[1][3];
        document.querySelector("#answer-3-input").value = answers[2][3];
      } else {
        location.href = "../result/result.php";
      }
    }

    async function submitAnswer(e) {
      e.preventDefault();

      const answers = document.getElementsByName("answer");
      const selected = Array.from(answers).find(radio => radio.checked);
      const value = selected.value;

      if (value) {
        givenAnswers.push({
          question: questionId,
          category: questions[questionId][2],
          points: Number(value)
        });

        localStorage.setItem("givenAnswers", JSON.stringify(givenAnswers));

        await nextQuestion();
      } else {
        //Geef "niet ingevuld"-melding...
      }

      selected.checked = false;
    }
  </script>
</body>

</html>