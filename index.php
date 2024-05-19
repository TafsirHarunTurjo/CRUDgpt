<?php include "header.php"; ?>
<?php include "config.php"; ?>
<?php include "Database.php"; ?>

<?php
$db = new Database();
$query = "SELECT * FROM tbl_user";
$read = $db->select($query);
?>

<?php
if(isset($_GET['msg'])){
    echo "<span class='success'>" . $_GET['msg'] . "</span>";
}
?>

<table>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Skill</th>
        <th>Action</th>
    </tr>
    <?php if($read){ ?>
    <?php while($row = $read->fetch_assoc()){ ?>
    <tr>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['skill']; ?></td>
        <td>
            <a href="update.php?id=<?php echo urlencode($row['id']); ?>">Edit</a>
        </td>
    </tr>
    <?php } ?>
    <?php } else { ?>
    <p>Data is not available!!</p>
    <?php } ?>
</table>

<a href="create.php">Add New Data</a>

<?php include "footer.php"; ?>
