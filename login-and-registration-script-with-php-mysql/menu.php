<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}


.column {
  float: left;
  width: 25%;
  padding: 0 10px;
}

.row {margin: 0 -5px;}


.row:after {
  content: "";
  display: table;
  clear: both;
}


@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}


.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  margin-top: 10px;
  text-align: center;
  background-color: #f1f1f1;
}
</style>
</head>
<body style="margin-left: 30px; margin-right: 30px;">

<h2 style="margin-left: 20px;">Instuments</h2>
<p> </p>

<div class="row">
  <a href=""></a>
  <div class="column">
    <div class="card" style="border-radius: 20px">
      <img src="card pics/keyboard.jpg">
      <h3 style="margin-top: 50px;">Keyboard</h3>
    </div>
  </div>

  <div class="column">
    <div class="card" style="border-radius: 20px">
      <img src="card pics/wind.jpg">
      <h3 style="margin-top: 50px;">WoodWind</h3>
      
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <h3>Card 3</h3>
      
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <h3>Card 4</h3>
      
    </div>
  </div>
</div>

<div class="row">
  <div class="column">
    <div class="card">
      <h3>Card 5</h3>
      
    </div>
  </div>

  </div>
</div>
</body>
</html>