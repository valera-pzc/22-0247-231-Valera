<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .header, .footer {
            background-color: #4CAF50;
            color: white;
            text-align: center;
            padding: 10px 0;
        }
        .content {
            padding: 20px;
            text-align: center;
        }
        button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Welcome to My Website</h1>
    </div>
    <div class="content">
        <h2>Select an Activity</h2>
        <form action="activities.php">
            <button type="submit">Go to Activities</button>
        </form>
    </div>
    <div class="footer">
        <p>&copy; <?php echo date("Y"); ?> My Website. All rights reserved.</p>
    </div>
</body>
</html>
