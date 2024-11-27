<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- Header Section -->
<div class="bg-warning text-center p-2">
    <p class="m-0">Summer Sale For All Swim Suits And Free Express Delivery - OFF 50%! <a href="#" class="text-dark fw-bold">ShopNow</a></p>
</div>

<div class="container mt-4">
    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">My Account</li>
        </ol>
    </nav>

    <!-- Profile Container -->
    <div class="row">
        <!-- Sidebar -->
        <div class="col-md-3 mb-4">
            <div class="card">
                <div class="card-header bg-primary text-white">Manage My Account</div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><a href="#">My Profile</a></li>
                    <li class="list-group-item"><a href="#">Address Book</a></li>
                    <li class="list-group-item"><a href="#">My Payment Options</a></li>
                </ul>
                <div class="card-header bg-primary text-white">My Orders</div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><a href="#">My Returns</a></li>
                    <li class="list-group-item"><a href="#">My Cancellations</a></li>
                </ul>
                <div class="card-header bg-primary text-white">My Wishlist</div>
            </div>
        </div>

        <!-- Content Area -->
        <div class="col-md-9">
            <h2>Edit Your Profile</h2>
            <?php
            // Xử lý form
            $firstName = $lastName = $email = $address = $newPassword = "";

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $firstName = htmlspecialchars($_POST['first-name']);
                $lastName = htmlspecialchars($_POST['last-name']);
                $email = htmlspecialchars($_POST['email']);
                $address = htmlspecialchars($_POST['address']);
                $newPassword = htmlspecialchars($_POST['new-password']);
                echo "<div class='alert alert-success'>Profile updated successfully!</div>";
            }
            ?>
            <form method="POST" class="row g-3">
                <div class="col-md-6">
                    <label for="first-name" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="first-name" name="first-name" value="<?= htmlspecialchars($firstName) ?>" required>
                </div>
                <div class="col-md-6">
                    <label for="last-name" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="last-name" name="last-name" value="<?= htmlspecialchars($lastName) ?>" required>
                </div>
                <div class="col-md-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?= htmlspecialchars($email) ?>" required>
                </div>
                <div class="col-md-6">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" class="form-control" id="address" name="address" value="<?= htmlspecialchars($address) ?>" required>
                </div>
                <div class="col-12">
                    <h4>Password Changes</h4>
                </div>
                <div class="col-md-4">
                    <label for="current-password" class="form-label">Current Password</label>
                    <input type="password" class="form-control" id="current-password" name="current-password">
                </div>
                <div class="col-md-4">
                    <label for="new-password" class="form-label">New Password</label>
                    <input type="password" class="form-control" id="new-password" name="new-password">
                </div>
                <div class="col-md-4">
                    <label for="confirm-password" class="form-label">Confirm New Password</label>
                    <input type="password" class="form-control" id="confirm-password" name="confirm-password">
                </div>
                <div class="col-12 text-end">
                    <button type="button" class="btn btn-secondary">Cancel</button>
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="bg-dark text-white mt-5 py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h5>Exclusive</h5>
                <p>Subscribe to get 10% off your first order</p>
                <input type="email" class="form-control" placeholder="Enter your email">
            </div>
            <div class="col-md-3">
                <h5>Support</h5>
                <p>111 Bijoy sarani, Dhaka, Bangladesh</p>
                <p>exclusive@gmail.com</p>
                <p>+88015-88888-9999</p>
            </div>
            <div class="col-md-3">
                <h5>Account</h5>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-white">My Account</a></li>
                    <li><a href="#" class="text-white">Login / Register</a></li>
                    <li><a href="#" class="text-white">Cart</a></li>
                    <li><a href="#" class="text-white">Wishlist</a></li>
                    <li><a href="#" class="text-white">Shop</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h5>Quick Links</h5>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-white">Privacy Policy</a></li>
                    <li><a href="#" class="text-white">Terms of Use</a></li>
                    <li><a href="#" class="text-white">FAQ</a></li>
                    <li><a href="#" class="text-white">Contact</a></li>
                </ul>
            </div>
        </div>
        <p class="text-center mt-4">© Copyright Rimel 2022. All rights reserved.</p>
    </div>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
