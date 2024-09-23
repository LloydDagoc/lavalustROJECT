<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container mt-5">
        <h2>Update User</h2>
        <form action="<?= site_url('user/update/'. segment(3));?>" method="POST">
    <div class="mb-3">
        <label for="ltmd_last_name">Last Name:</label>
        <input type="text" class="form-control" id="ltmd_last_name" placeholder="Last Name" name="ltmd_last_name" value = "<?= isset($p['ltmd_last_name']) ? $p['ltmd_last_name'] : ''; ?>">
    </div>
    <div class="mb-3">
        <label for="ltmd_first_name">First Name:</label>
        <input type="text" class="form-control" id="ltmd_first_name" placeholder="First Name" name="ltmd_first_name" value = "<?= isset($p['ltmd_first_name']) ? $p['ltmd_first_name'] : ''; ?>">
    </div>
    <div class="mb-3">
        <label for="ltmd_email">Email:</label>
        <input type="email" class="form-control" id="ltmd_email" placeholder="Email" name="ltmd_email" value = "<?= isset($p['ltmd_email']) ? $p['ltmd_email'] : ''; ?>">
    </div>
    <div class="mb-3">
        <label for="ltmd_gender">Gender:</label>
        <input type="text" class="form-control" id="ltmd_gender" placeholder="Gender" name="ltmd_gender" value = "<?= isset($p['ltmd_gender']) ? $p['ltmd_gender'] : ''; ?>">
    </div>
    <div class="mb-3">
        <label for="ltmd_address">Address:</label>
        <input type="text" class="form-control" id="ltmd_address" placeholder="Address" name="ltmd_address" value = "<?= isset($p['ltmd_address']) ? $p['ltmd_address'] : ''; ?>">
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>

    </div>
</body>
</html>
