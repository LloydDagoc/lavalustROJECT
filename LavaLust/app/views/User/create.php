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
        <h2>Add User</h2>

        <!-- Display Flash Alert -->
        <?php flash_alert(); ?>

        <!-- Add User Form -->
        <form action="<?= site_url('user/add'); ?>" method="POST">
            <div class="mb-3">
                <label for="ltmd_last_name">Last Name:</label>
                <input type="text" class="form-control" id="ltmd_last_name" placeholder="Last Name" name="ltmd_last_name">
            </div>
            <div class="mb-3">
                <label for="ltmd_first_name">First Name:</label>
                <input type="text" class="form-control" id="ltmd_first_name" placeholder="First Name" name="ltmd_first_name">
            </div>
            <div class="mb-3">
                <label for="ltmd_email">Email:</label>
                <input type="email" class="form-control" id="ltmd_email" placeholder="Email" name="ltmd_email">
            </div>
            <div class="mb-3">
                <label for="ltmd_gender">Gender:</label>
                <input type="text" class="form-control" id="ltmd_gender" placeholder="Gender" name="ltmd_gender">
            </div>
            <div class="mb-3">
                <label for="ltmd_address">Address:</label>
                <input type="text" class="form-control" id="ltmd_address" placeholder="Address" name="ltmd_address">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a class="btn btn-primary mb-2" role="button" href="<?=site_url('user/display');?>">View</a>

        </form>
    </div>
</body>
</html>
