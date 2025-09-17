<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <style>
        body {
            background: linear-gradient(135deg, #f8fafc 0%, #e0e7ff 100%);
            font-family: 'Segoe UI', Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 400px;
            margin: 60px auto;
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 4px 24px rgba(0,0,0,0.08);
            padding: 32px 24px;
            text-align: center;
        }
        h1 {
            color: #4f46e5;
            margin-bottom: 16px;
        }
        p {
            color: #64748b;
            margin-bottom: 24px;
        }
        a {
            display: inline-block;
            margin: 8px 0;
            padding: 10px 24px;
            background: #6366f1;
            color: #fff;
            text-decoration: none;
            border-radius: 8px;
            font-weight: 500;
            transition: background 0.2s;
        }
        a:hover {
            background: #4338ca;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>This is Admin Page</h1>
        <p>Welcome to the admin panel. Manage your dashboard and profile easily from here.</p>
        <a href="{{ route(name:'welcome') }}">Back to Home</a>
    </div>
</body>
</html>