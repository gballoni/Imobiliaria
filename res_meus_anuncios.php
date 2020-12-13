<?php 

    require_once("conectDB.php");
    $property_owner ="tt";   
    $sql = 'select * from property where room = 1 ';
    $rs = mysqli_query($mysqli, $sql);

    $html = '';
    $has = mysqli_num_rows($rs);
    if($has>0){
        while($row = mysqli_fetch_assoc($rs)){
            echo '<div class="col-md-4 text-center">';
            echo '<img src="assets/img/property-1.jpg" alt="" class="img-fluid">';
            echo '<h2 class="section-t1">'.$row['neighborhood'].'</h2>';
            echo '<div>';
            echo '<div class="d-flex">';
            echo '<span class="preco-c">R$ '.$row['price'].'</span>';
            echo '</div>';
            echo '</div>';
            echo '<p class="section-t1">'.$row['announcement'].'</p>';
            echo '<p>Saiba mais!</p>';
            echo '<button id = "delete">Deletar</button>';
            echo '<a href="imovel.php?id='.$row['id'].'"><button >Editar</button></a>';
            echo '</div>';
        }
    }else{
        echo 'Não encontrado';
    }
    <html>
    
    <table>
	<thead>
		<tr>
			<th>id</th>
			<th>price</th>
			<th colspan="2">Action</th>
		</tr>
	</thead>
	
	<?php while ($row = mysqli_fetch_array($rs)) { ?>
		<tr>
			<td><?php echo $row['id']; ?></td>
			<td><?php echo $row['price']; ?></td>
			<td>
				<a href="index.php?edit=<?php echo $row['id']; ?>" class="edit_btn" >Edit</a>
			</td>
			<td>
				<a href="server.php?del=<?php echo $row['id']; ?>" class="del_btn">Delete</a>
			</td>
		</tr>
	<?php } ?>
</table>
 
    
    
    </html>


?>