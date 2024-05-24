<?php
// Function to fetch local users
function fetch_local_users() {
    return [
        ['username' => 'admin@email.com', 'name' => 'Firstname Lastname'],
        ['username' => 'Joshita@email.com', 'name' => 'Joshita Atmakuri'],
        ['username' => 'vamshi@email.com', 'name' => 'Vamshi Raj Nagula'],
        ['username' => 'Divya@email.com', 'name' => 'Divya Varshini Suravaram'],
        ['username' => 'Divyam@email.com', 'name' => 'Divyam Savsaviya'],
        // Add more local users as needed
    ];
}

// Function to fetch remote users from another company's server
function fetch_remote_users() {
    return [
        ['username' => 'testuser1@email.com', 'name' => 'Firstname Lastname'],
        ['username' => 'testuser2@email.com', 'name' => 'Firstname Lastname'],
        ['username' => 'testuser3@email.com', 'name' => 'Firstname Lastname'],
        ['username' => 'testuser4@email.com', 'name' => 'Firstname Lastname'],
        ['username' => 'testuser5@email.com', 'name' => 'Firstname Lastname'],
        ['username' => 'testuser6@email.com', 'name' => 'Firstname Lastname'],
        ['username' => 'testuser7@email.com', 'name' => 'Firstname Lastname'],
        ['username' => 'testuser8@email.com', 'name' => 'Firstname Lastname'],
        ['username' => 'testuser9@email.com', 'name' => 'Firstname Lastname'],
        ['username' => 'testuser1@email.com', 'name' => 'Firstname Lastname'],
        // Add more remote users as needed
    ];
}

// Fetch local users
$local_users = fetch_local_users();

// Fetch remote users
$remote_users_A = fetch_remote_users();
$remote_users_B = fetch_remote_users();

// Merge all users
$all_users = array_merge($local_users, $remote_users_A, $remote_users_B);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Users</title>
    <style>
        .users-container {
            display: flex;
            flex-direction: column;
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
        }

        .users-list {
            margin-top: 20px;
            margin-bottom: 5px;
        }

        .users-list li {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 10px;
        }

        .user-action-form {
            margin-top: 20px;
            padding: 10px 20px;
            border: none;
            background-color: #333;
            color: #fff;
            cursor: pointer;
        }

        .user-action-form label {
            margin-top: 20px;
            margin-bottom: 5px;
        }

        .user-action-form input[type="text"],
        .user-action-form input[type="email"],
        .user-action-form textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .user-action-form input[type="submit"] {
            margin-top: 20px;
            padding: 10px 20px;
            border: none;
            background-color: #333;
            color: #fff;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="users-container">
        <ul class="users-list">
            <?php foreach ($all_users as $user): ?>
                <li>
                    <p>Username: <?php echo $user['username']; ?></p>
                    <p>Name: <?php echo $user['name']; ?></p>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</body>
</html>