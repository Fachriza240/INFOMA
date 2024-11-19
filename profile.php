<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infoma - Profile</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <a href="index.php" class="back">Back to Home</a>
    </header>
    <main>
        <h2>User Profile</h2>
        <div class="profile-info">
            <p>Username: Mr.Prince240</p>
            <p>Email: nami@swangmail.com</p>
            <p>Phone: 0813-9608-7406</p>
        </div>
        <button onclick="openEditModal('Name')">Edit Name</button>
        <button onclick="openEditModal('Email')">Edit Email</button>
        <button onclick="openEditModal('Phone')">Edit Phone</button>
    </main>

    <div id="edit-modal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <h2>Edit <span id="edit-field"></span></h2>
            <input type="text" id="edit-input" placeholder="Enter new value">
            <button onclick="updateProfile()">Update</button>
        </div>
    </div>

    <script src="js/script.js"></script>
</body>
</html>
