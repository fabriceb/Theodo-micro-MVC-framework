<html>

  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Example</title>
  </head>
  
  <body>
  
  <h1>Example of a micro MVC framework by Theodo</h1>
  
  <div>
    <?php echo $bonjour ?> <?php echo $nom ?>
  </div>
  
  <br />
  <br />
  <br />
  <br />
  
  <div>
    <a href="index.php?page=exemple&langue=fr">En français</a>
    <a href="index.php?page=exemple&langue=en">In English</a>
  </div>
  
  <br />
  <br />
  <br />
  <br />
  
  <div>
    <form method="get" action="index.php?page=exemple&langue=en">
      <div>
        <label for="input_name">Name :</label>
        <input type="text" name="nom" value="<?php echo $nom ?>" id="input_name"/>
      </div>
      <div>
        <label for="input_langue">Language :</label>
        <input type="text" name="langue" value="<?php echo $langue ?>" id="input_langue"/>
      </div>
      <div>
        <input type="hidden" name="page" value="exemple"/>
        <input type="submit" value="Submit" />
      </div>
    </form>
  </div>
  </body>
</html>