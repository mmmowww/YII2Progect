<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <!-- Latest compiled and minified CSS -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
   <title>Верстка формы обратной связи используя Bootstrap</title>
</head>
<body>
<div> </div>
<div class="container">
<div class="row">
<div class="col-md-4"> </div>
<div class="col-md-4">
   <h4>Форма обратной связи на Bootstrap</h4>
   <form action="./mail.php" method="post">
<div class="form-group">
   <label for="name">Ваше имя:</label>
   <input type="name" name="name" class="form-control" id="name" placeholder="Name">
</div>
<div class="form-group">
   <label for="email1">E-mail:</label>
   <input type="email" name="email" class="form-control" id="email1" placeholder="Email">
</div>
<div class="form-group">
   <label for="phone">Номер телефона:</label>
   <input type="phone" name="phone" class="form-control" id="phone" placeholder="Phone">
</div>
<div class="form-group">
   <label for="message">Сообщение:</label>
   <textarea class="form-control" name="message" rows="3"></textarea>
</div>
   <button type="submit" class="btn btn-info">Отправить сообщение</button>
</form>
</div>
<div class="col-md-4"> </div> </div>
</div>
</body>
</html>