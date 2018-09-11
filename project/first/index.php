<!doctype html>
<head>
  <title>PHP learning</title>
</head>
<body>
  <h1>Hello from a web Page</h1>
  <p>
  <?php
  echo "Hello, World!\n";
  $name = strtolower(getenv('USERNAME'));
  echo "Hello $name\n";
  $sum = 10 + 5;
  echo "The total is ", $sum, "\n";
  ?>
  </p>
  <p>Some more text here</p>
  <?php echo 'Some more php code here' ?>
  <footer>
    <p>&copy;
      <?php
        echo date('Y');
        echo ' Today is ';
        echo date("F d, Y");
      ?>
    </p>
  </footer>
</body>