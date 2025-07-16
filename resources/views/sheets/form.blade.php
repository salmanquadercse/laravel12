<!DOCTYPE html>
<html>
<head>
    <title>Write to Google Sheet</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">
    <div class="container">
        <h2>Write Data to Google Sheet</h2>

        <form method="POST" action="{{ url('/sheet') }}">
            @csrf
            <div class="mb-3">
                <label>Name:</label>
                <input type="text" name="name" value="John Doe" class="form-control">
            </div>

            <div class="mb-3">
                <label>Email:</label>
                <input type="email" name="email" value="john@example.com" class="form-control">
            </div>
            <div class="mb-3">
                <label>Phone:</label>
                <input type="phone" name="phone" class="form-control">
            </div>
            <div class="mb-3">
                <label>Address:</label>
                <input type="text" name="address" class="form-control">
            </div>
            <div class="mb-3">
                <label>City:</label>
                <input type="text" name="city" class="form-control">
            </div>
            <div class="mb-3">
                <label>State:</label>
                <input type="text" name="state" class="form-control">
            </div>
            <div class="mb-3">
                <label>Zip:</label>
                <input type="text" name="zip" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Write to Sheet</button>
        </form>
    </div>
</body>
</html>
