<!DOCTYPE html>
<html lang="en">
<head>

<link rel="stylesheet" href="styl.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DataTables</title>

  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
</head>
<body>

  <table id="example" class="display" style="width:100%">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <?php
        for ($i = 1; $i <= 100; $i++) {
          echo "<tr>";
          echo "<td>{$i}</td>";
          echo "<td>Jakis koles {$i}</td>";
          echo "<td>jakis.koles{$i}@example.com</td>";
          echo "</tr>";
        }
      ?>
    </tbody>
  </table>

  <script>
    $(document).ready(function() {
      $('#example').DataTable({
        "paging": true,
        "ordering": true,
        "searching": true,
        "responsive": true,
      });
    });
  </script>

</body>
</html>