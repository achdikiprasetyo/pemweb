<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style scoped>
    header[data-type="main"] {
      background-color: #0077be;
      height: 60px;
      width: 100%;
    }

    header[data-type="main"] nav {
      display: flex;
      justify-content: space-between;
      align-items: center;
      height: 100%;
      margin: 0 auto;
      max-width: 1200px;
    }

    header[data-type="main"] .nav-left {
      color: #fff;
      font-size: 20px;
      padding-left: 20px;
    }

    header[data-type="main"] ul {
      display: flex;
      justify-content: center;
      align-items: center;
      list-style: none;
      margin: 0;
      padding: 0;
    }

    header[data-type="main"] li {
      margin-right: 20px;
    }

    header[data-type="main"] a {
      color: #fff;
      text-decoration: none;
      font-size: 18px;
      display: block;
      padding: 10px 20px;
      border-radius: 20px;
      transition: all 0.3s ease;
    }

    header[data-type="main"] a:hover {
      background-color: #fff;
      color: #0077be;
    }

    header[data-type="main"] ul ul {
      display: none;
      position: absolute;
      background-color: #0077be;
      border-radius: 5px;
      box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.3);
      margin-top: 0px;
    }

    header[data-type="main"] ul li:hover > ul {
      display: flex;
      flex-direction: column;
      align-items: flex-start;
    }

    header[data-type="main"] ul ul li {
      width: 200px;
    }

    header[data-type="main"] ul ul li a {
      font-size: 16px;
      padding: 8px 16px;
      border-radius: 0;
    }

    header[data-type="main"] ul ul li a:hover {
      background-color: #fff;
      color: #0077be;
    }

    header[data-type="main"] .nav-right {
      margin-right: 20px;
    }
  </style>
</head>
<body>
  <header data-type="main">
    <nav>
      <div class="nav-left">Trans UPN</div>
      <ul>
        <li><a href="index.php">Homepage</a></li>
        <li><a href="#">Gaji</a>
          <ul>
            <li><a href="gaji_kondektur.php">Gaji Kondektur</a></li>
            <li><a href="gaji_driver.php">Gaji Driver</a></li>
          </ul>
        </li>
        <li><a href="#">Daftar Tabel</a>
          <ul>
            <li><a href="bus.php">Bus</a></li>
            <li><a href="driver.php">Driver</a></li>
            <li><a href="index.php">Trans UPN</a></li>
            <li><a href="kondektur.php">Kondektur</a></li>
          </ul>
        </li>
        <li><a href="daftar_bus.php" class="nav-right">Data Bus</a></li>
      </ul>
    </nav>
</header>
</body>
</html>


