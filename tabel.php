<html>
<head>
<title>Bootstrap Part 2 : Membuat table dengan Bootstrap</title>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body>
<h1>Cara Membuat table dengan Bootstrap | www.malasngoding.com</h1>
<table class="table">
<thead>
<tr>
<th>No</th>
<th>Makanan</th>
<th>Harga</th> 
</tr>
</thead>
<tbody>
<?php foreach($jadwal as $j) { ?>
                    <tr>
                        <td><?= $j['hari'] ?></td>
                        <td><?= $j['waktu'] ?></td>
                        <td><?= $j['makul'] ?></td>
                        <td><?= $j['dosen'] ?></td>
                        <td><?= $j['ruang'] ?></td>
                     </tr>
                    <?php } ?>

</tbody>
</table>
</body>
</html>
