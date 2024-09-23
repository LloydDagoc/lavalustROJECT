<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Display</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .table th, .table td {
            vertical-align: middle;
            text-align: center;
        }
        .pagination a {
            margin: 0 5px;
        }
        .container {
            margin-top: 20px;
        }
    </style>
</head>

<?php
include 'dbcon.php';

/*$search = $_GET['search'] ?? '';
$page = $_GET['page'] ?? 1;
$limit = 10;
$offset = ($page - 1) * $limit;

$total_stmt = $pdo->prepare("SELECT COUNT(*) FROM ltmd_users WHERE ltmd_last_name LIKE ? OR ltmd_first_name LIKE ?");
$total_stmt->execute(["%$search%", "%$search%"]);
$total_rows = $total_stmt->fetchColumn();

$stmt = $pdo->prepare("SELECT * FROM ltmd_users WHERE ltmd_last_name LIKE ? OR ltmd_first_name LIKE ? LIMIT ? OFFSET ?");
$stmt->execute(["%$search%", "%$search%", $limit, $offset]);
$user = $stmt->fetchAll();

$total_pages = ceil($total_rows / $limit);*/
$search = $_GET['search'] ?? '';
$page = $_GET['page'] ?? 1;
$limit = 10;
$offset = ($page - 1) * $limit;

$total_stmt = $pdo->prepare("SELECT COUNT(*) FROM aza_users WHERE aza_last_name LIKE ? OR aza_first_name LIKE ?");
$total_stmt->execute(["%$search%", "%$search%"]);
$total_rows = $total_stmt->fetchColumn();

$stmt = $pdo->prepare("SELECT * FROM aza_users WHERE aza_last_name LIKE ? OR aza_first_name LIKE ? LIMIT ? OFFSET ?");
$stmt->execute(["%$search%", "%$search%", $limit, $offset]);
$user = $stmt->fetchAll();

$total_pages = ceil($total_rows / $limit);
?>

<body>
    <div class="container">
        <form id="search-form">
            <div class="mb-3">
                <label for="search" class="form-label">Search First or Last Name</label>
                <div class="input-group">
                    <input type="text" name="search" id="search" placeholder="Type Last Name or First Name" class="form-control" value="<?php echo htmlspecialchars($search); ?>">
                </div>
            </div>
        </form>

        <div class="row mx-auto mt-3">
            <div class="col-md-8">
                <a class="btn btn-primary mb-2" role="button" href="<?=site_url('user/add');?>">Insert User</a>
                <table class="table table-bordered table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Last Name</th>
                            <th>First Name</th>
                            <th>Email</th>
                            <th>Gender</th>
                            <th>Address</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($user as $p): ?>
                        <tr>
                            <td><?= $p['id'];?></td>
                            <td><?= $p['ltmd_last_name'];?></td>
                            <td><?= $p['ltmd_first_name'];?></td>
                            <td><?= $p['ltmd_email'];?></td>
                            <td><?= $p['ltmd_gender'];?></td>
                            <td><?= $p['ltmd_address'];?></td>
                            <td>
                                <a href="<?=site_url('user/update/'.$p['id']);?>" class="btn btn-warning btn-sm">Update</a>
                                <a href="<?=site_url('user/delete/'.$p['id']);?>" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

                <div class="pagination">
                    <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                        <a href="?search=<?php echo htmlspecialchars($search); ?>&page=<?php echo $i; ?>" class="btn btn-sm btn-secondary"><?php echo $i; ?></a>
                    <?php endfor; ?>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('search').addEventListener('input', function() {
            document.getElementById('search-form').submit();
        });
    </script>
</body>
</html>
