<?php

global $wpdb;
$table_name = $wpdb->prefix . "cwp_dosr";

if (isset($_GET['trashid']) && is_numeric($_GET['trashid'])) {
    $id = $_GET['trashid'];
    $sql = "DELETE FROM $table_name WHERE id=$id";
    $wpdb->get_results($sql);
    echo '<div class="notice notice-success is-dismissible">
             <p>Successfully Deleted.</p>
         </div>';
}


$results = $wpdb->get_results("SELECT * FROM $table_name ORDER BY id DESC");

/*echo '<pre>';
print_r($results);
echo '</pre>';
exit;
*/


?>


<h3>DOSR SUBMISSIONS</h3>
<hr></br>
<div class="bootstrap-iso">
    <table class="table table-bordered">
        <thead>
        <tr>
            <th scope="col">Serial</th>
            <th scope="col">Supervisor</th>
            <th scope="col">Submitted</th>
            <th scope="col">Updated</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
            <?php
            foreach ($results as $result)
            {
                $val = $result->value;
                $id = $result->id;
                $created = $result->created;
                $modified = $result->updated;
                $data = json_decode(stripslashes($val), true);
                $supervisor = $data['shift_supervisor'];
                ?>
                <tr>
                    <td scope="row"><?=$id?></td>
                    <td><?=$supervisor?></td>
                    <td><?=$created?></td>
                    <td><?=$modified?></td>
                    <td><a href="?page=cwp-dosr&action=view&id=<?=$id?>">View</a>&nbsp;&nbsp;&nbsp;<a class="text-success" href="?page=cwp-dosr&action=edit&id=<?=$id?>">Edit</a>&nbsp;&nbsp;&nbsp;<a id="dosr-delete" url="<?=get_site_url()?>/wp-admin/admin.php?page=cwp-dosr&trashid=<?=$id?>" class="text-danger" href="#">Delete</a></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>
