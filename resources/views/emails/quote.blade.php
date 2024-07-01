<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color: #f9f9f9;
            padding: 20px;
        }

        p {
            margin-bottom: 10px;
        }

        strong {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <p><strong>Name:</strong> {{ $data['name'] }}</p>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    <p><strong>Phone:</strong> {{ $data['phone'] }}</p>
    <p><strong>Address:</strong> {{ $data['address'] }}</p>
    <p><strong>Street Address:</strong> {{ $data['street_address'] ?? '' }}</p>
    <p><strong>Address Line 2:</strong> {{ $data['address_line_2'] ?? '' }}</p>
    <p><strong>City:</strong> {{ $data['city'] ?? '' }}</p>
    <p><strong>State / Province / Region:</strong> {{ $data['state'] ?? '' }}</p>
    <p><strong>ZIP / Postal Code:</strong> {{ $data['zip_code'] ?? '' }}</p>
    <p><strong>Inquiry:</strong> {{ $data['inquiry'] }}</p>
</body>

</html>
