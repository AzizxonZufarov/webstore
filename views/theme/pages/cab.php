
<h2 align="center">Добро пожаловать, <?=$user['name']?></h2>


<table border="1" >

			<tr  align="center" width="500" height="50">
					<td align="center" width="200">Name</td>
					<td align="center" width="200">Password</td>
					<td align="center" width="200">Email</td>
					<td align="center" width="200">Image</td>

		          <td rowspan="2" width="200" > <a href="?view=editcab">edit</a></td>
		          <td rowspan="2" width="200">  <a href="?view=deletecab">delete</a></td>
		          <td rowspan="2" width="200">  <a href="?view=logout">Exit</a></td>
					</tr>
					<tr  align="center" width="500" height="50">
					<td align="center"><?=$user['name']?></td>
					<td align="center"><?=$user['password']?></td>
					<td align="center"><?=$user['email']?></td>
					<td align="center"> <img src="regupl/<?=$user['img']?>" width="100px" height="100px"/><br /></td>	
			</tr>
</table>
<br/>
<?

if($user['isAdmin'] =='1'){?>
	<a  href="admin/">Панель Администратора</a>
	<?}?>
