<?php include 'turf_header.php';
$turf_id=$_SESSION['turf_id']; 
extract($_GET); ?>
<div class="Modern-Slider">
          <div class="item">
                <img src="static/assets/images/slide-01.jpg" width="100%" height="70px">
                <div class="text-content"><br>
                </div></div></div>
                <br><br><center>

	<h1 style="font:400 35px 'Calibri','Arial';
  padding:20px;">CUSTOMERS REVIEW</h1>
	<table class="table" style="border-spacing: 1; 
  border-collapse: collapse;
  background:white; 
  border-radius:6px;
  overflow:hidden;
  max-width:800px; 
  width:100%;
  margin:0 auto;
  position:relative;">
		<tr>
			<th style="background:#00FA9A;">Sl.No</th>
			<th style="background:#00FA9A;">Customer Name</th>
			<th style="background:#00FA9A;">Rate</th>
			<th style="background:#00FA9A;">Review</th>			
		</tr>

		<?php
        $q = "select *,concat(first_name,' ',last_name)as name from ratings inner join users using(user_id) where turf_id='$turf_id' order by rate";
        $res = select($q);
        $sino = 1;

        foreach ($res as $row) {
            ?>
            <tr>
                <td><?php echo $sino++; ?></td>
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['rate'] ?></td>
                <td><?php echo $row['review'] ?></td>
            </tr>
        <?php
        }
        ?>
	</table>

</center><br><br>
<?php include 'footer.php'; ?>