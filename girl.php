<div style="position:absolute; left:270px;">
 <h1>Girl</h1>
 <div id='noidung'> 
       <div class="tech_store_index_col_1 colection">
        <div class="row">
          <div class="col-xs-12 index_col_products">
 	<?php
	 $dt->select('select * from bangtin where idnhom = 3 order by ngaydang desc limit 1');
	 if ($r=$dt->fetch()){
		 $id=$r['idtin'];
		 $idn=$r['idnhom'];
		 $tieude=$r['tieude'];
		 $trichdan=$r['trichdan'];
	 	 $newest=$r['ngaydang'];
	 ?>
		 <a href="newsdetail.php?idn=$idn&id=$id"><img src="<?php echo $r['anhtrichdan']  ?>" width="480" height="240"  style="float:left;"/></a>
	<?php
		 echo "<b><big><a href = 'newsdetail.php?idn=$idn&id=$id'>$tieude</a></b></big>";
		 echo "<i><br><br>$trichdan<br><br></i>";
	 }
	 $dt->select("select * from bangtin where idnhom = 3 and ngaydang!='$newest' order by ngaydang desc limit 10");
			  ?>
        <div class="row">
          <div class="col-xs-12 index_col_products">
          <?php
	 while ($r=$dt->fetch()){
		 $id=$r['idtin'];
		 $idn=$r['idnhom'];
		 $tieude=$r['tieude'];
		 $trichdan=$r['trichdan'];
	 ?>
		 <a href="newsdetail.php?idn=$idn&id=$id"><img src="<?php echo $r['anhtrichdan']  ?>" width="240" height="120"  style="float:left;"/></a>
	<?php
		 echo "<b><a href = 'newsdetail.php?idn=$idn&id=$id'>$tieude</a></b>";
		 echo "<i><small><br><br>$trichdan<br><br></small></i>";
	 }
	 ?>
			</div>
			  </div>
			</div>
			  </div>
			</div>
	 </div>
	 </div>
	  </div>
	 <?php
	 include('right.php');
	 ?>
	  </div>
 </div>