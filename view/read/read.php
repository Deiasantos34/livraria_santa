<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  
  <link rel="stylesheet" href="css/read.css">
  <title>READ</title>
</head>
<?php
    require('../controler/getSession.php');
    require('../model/livro.php');
    $data = read();

    if(isset($_GET['id'])){
      echo delete($_GET['id']);
    }
?>
<body>

  <header>
    <div class="navigation">
      <ul>
        <li class="list active">
          <a href="#">
          <span class="icon"> <ion-icon name="tablet-portrait-outline"></ion-icon> </span>
          </a>
        </li>
        <li class="list">
          <a href="#">
            <span class="icon"><ion-icon name="create-outline"></ion-icon></span>
          </a>
        </li>
        <li class="list">
          <a href="#">
            <span class="icon"><ion-icon name="exit-outline"></ion-icon></span>
          </a>
        </li>
        <div class="indicador"></div>
      </ul>
    </div>
  </header>
  <!---->
  <table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Nome</th>
        <th scope="col">Paginas</th>
        <th scope="col">Autor</th>
        <th scope="col">Quantidade</th>
        <th scope="col">Preço</th>
        <th scope="col">Edit</th>
      </tr>
    </thead>

    <tbody>
    <?php foreach($data as $row){ ?>
      <tr>
        <th scope="row"><?php echo $row['id']; ?></th>
        <td><?php echo $row['nome']; ?></td>
        <td><?php echo $row['paginas']; ?></td>
        <td><?php echo $row['autor']; ?></td>
        <td><?php echo $row['quantidade']; ?></td>
        <td><?php echo $row['preco'];?></td>
        <td class="edit">
          <a href="read.php?id=<?php echo $row['id']; ?>">🗑️</a>
          <a href="update.php?id=<?php echo $row['id']; ?>">✏️</a>
        </td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
      <!-- <body>
<button type="submit" class="btn btn-primary" name='button'>🖊</button>
</body>-->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"> </script>
  <script nomodule src="https://unpkg .com/ionicons@5.5.2/dist/ionicons/ionicons.js"> </script>
</body>
</html>