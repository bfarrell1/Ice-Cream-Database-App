<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title> Personalities and Ice Cream </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
</head>
<body class="bg-light">
<div class="container-responsive col-md-6" id="container">
<h1>Personality and Ice Cream</h1>
<div id="iceCream">

<p>Welcome to my ice cream parlor. First, take a Myer-Briggs personality test <a href="https://www.truity.com/test/type-finder-personality-test-new"> here </a>. Fill out the form below with your results and ice cream preferences!</p>
<p> View full results <a href=results_update.php> here</a>.</p>
<form id="myform" method="post" action="" autocomplete="off">
<div class="questions" id="question1">
  <p> Question #1: Extraverted or Introverted?
<div class="form-check">
  <input class="form-check-input" type="radio" name="personality1" value="E">
  <label class="form-check-label">
    Extraverted
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="personality1" value="I">
  <label class="form-check-label">
    Introverted
  </label>
</div>
</div>
<p></p>

<div class="questions" id="question2">
  <p> Question #2: Sensing or Intuition?
<div class="form-check">
  <input class="form-check-input" type="radio" name="personality2" value="S">
  <label class="form-check-label">
    Sensing
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="personality2" value="N">
  <label class="form-check-label">
    iNtuition
  </label>
</div>
</div>
<p></p>


<div class="questions" id="question3">
  <p> Question #3: Thinking or Feeling?
<div class="form-check">
  <input class="form-check-input" type="radio" name="personality3"  value="T">
  <label class="form-check-label">
    Thinking
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="personality3" value="F">
  <label class="form-check-label">
    Feeling
  </label>
</div>
</div>
<p></p>

<div class="questions" id="question4">
  <p> Question #4: Judging or Perceiving?
<div class="form-check">
  <input class="form-check-input" type="radio" name="personality4"  value="J">
  <label class="form-check-label">
    Judging
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="personality4" value="P">
  <label class="form-check-label">
    Perceiving
  </label>
</div>
<p></p>
<div id="personalityType">
  <label for="question5">What was your personality type? (Hint: It's the first letter of each category that you scored higher in!)</label>
  <select name="personalityType" class="form-control" id="question5">
    <option>INFP</option>
    <option>INFJ</option>
    <option>ENFP</option>
    <option>ENFJ</option>
    <option>INTP</option>
    <option>INTJ</option>
    <option>ENTP</option>
    <option>ENTJ</option>
    <option>ISTP</option>
    <option>ISFP</option>
    <option>ISTJ</option>
    <option>ISFJ</option>
    <option>ESTP</option>
    <option>ESFP</option>
    <option>ESTJ</option>
    <option>ESFJ</option>
  </select>
</div>
</div>
<p> </p>
<p> Next, tell us your favorite ice cream flavor, toppings, and how you want it served! </p>
<div id="flavor">
  <label for="flavorChoice">Ice cream flavor</label>
  <input type="text" name="flavor" class="form-control" id="flavorChoice">
</div>
<p></p>
<div id="topping">
  <label for="toppingChoice">Toppings:</label>
  <input type="text" name="topping" class="form-control" id="toppingChoice">
</div>
<p></p>
<div id="medium">
  <label for="mediumChoice">How do you want it served?</label>
  <select name="medium" class="form-control" id="mediumChoice">
    <option>Small bowl</option>
    <option>Large bowl</option>
    <option>Waffle cone</option>
    <option>Chocolate-dipped waffle cone</option>
    <option>Sprinkle waffle cone</option>
  </select>
</div>
<p></p>

<input type="submit" value="Submit" class="btn btn-primary">
</form>
</div>
<div id="response">
</div>
<!-- close container -->
<script src="scripts/enter.js"></script>


</div>

</body>
</html>
