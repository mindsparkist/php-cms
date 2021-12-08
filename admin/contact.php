<?php
    $page = 'contact';
    include 'partials/header.php';
?>
<body class="content_body">
<div class="container" style="margin-top:25px;">
<div class="main-div">
        <h1>List of candidates</h1>
        <div class="center-div">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>DEGREE</th>
                        <th>MOBILE</th>
                        <th>EMAIL</th>
                        <th>REFER</th>
                        <th>POST</th>
                        <th colspan=2>OPERATION</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    include 'connection_admin.php';
                    $selectquery = "SELECT * FROM `contact`";
                    $query = mysqli_query($conn,$selectquery);
                    while ($res = mysqli_fetch_assoc($query)) {
                        ?>
                            <tr>
                                <td><?php echo $res['id']; ?></td>
                                <td><?php echo $res['name']; ?></td>
                                <td><?php echo $res['age']; ?></td>
                                <td><?php echo $res['email']; ?></td>
                                <td><?php echo $res['mobile']; ?></td>
                                <td><?php echo $res['symptoms']; ?></td>
                                <td><?php echo $res['comments']; ?></td>

                                <td>
                                    <a href="delete.php?id=<?php echo $res['id']; ?>" class="delete">
                                        <div class="tooltip ">Delete</div>
                                        <i class="far fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php
                    }
                ?>         
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php
    include 'partials/footer.php';
?> 