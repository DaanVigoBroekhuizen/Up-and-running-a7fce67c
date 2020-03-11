<h1>welkom op het netland beheerpaneel</h1>


<table>
    <h2>series</h2>
    <tr>
        <th>titel</th>
        <th>rating</th>
    </tr>
    <!--
    <tr>
        <td>ghjghj</td>
        <td>7</td>
    </tr>
    -->
<?php
 $host = '127.0.0.1';
 $db   = 'netland';
 $user = 'root';
 $pass = '';
 $charset = 'utf8mb4';
 
 $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
 $options = [
     PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
     PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
     PDO::ATTR_EMULATE_PREPARES   => false,
 ];
 try {
      $pdo = new PDO($dsn, $user, $pass, $options);
 } catch (\PDOException $e) {
      throw new \PDOException($e->getMessage(), (int)$e->getCode());
 }

 $stmt = $pdo->query('SELECT * FROM series');
 while ($row = $stmt->fetch())
 {
     ?>
    <tr>
        <td><?= $row['title']?></td>
        <td><?= $row['rating']?></td>
    </tr>
     <?php
     //echo $row['title']. $row['rating']. "\n";
 }
    ?>
</table>

<table>
    <h2>films</h2>
    <tr>
        <th>titel</th>
        <th>duur</th>
    </tr>

<?php
    $stmt = $pdo->query('SELECT * FROM movies');
 while ($row = $stmt->fetch())
 {
     ?>
    <tr>
        <td><?= $row['title']?></td>
        <td><?= $row['duur']?></td>
    </tr>
     <?php
     //echo $row['title']. $row['rating']. "\n";
 }
    ?>
</table>