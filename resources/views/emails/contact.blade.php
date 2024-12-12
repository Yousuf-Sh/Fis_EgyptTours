<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>HahsTag EgyptTours Contact Form Submission</title>
    <style>
        body {
            background-color: #f4f4f4;
        }
        .email-container {
            max-width: 600px;
            margin: 0 auto;
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }
        .logo {
            max-width: 200px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container py-5">
        <div class="email-container">
            <div class="text-center mb-4">
                <img src="{{asset('Frontend/images/logo.png')}}" alt="Website Logo" class="logo">
            </div>

            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h3 class="mb-0">Contact Inquiery Details:</h3>
                </div>
                <div class="card-body">
                    <p class="mb-2"><strong>First Name:</strong> {{ $first_name }}</p>
                    <p class="mb-2"><strong>Last Name:</strong> {{ $last_name }}</p>
                    <p class="mb-2"><strong>Email:</strong> {{ $email }}</p>
                    <p class="mb-2"><strong>Phone:</strong> {{ $phone ?? 'N/A' }}</p>
                    
                    <hr>
                        <h4 class="mt-3">Message:</h4>
                        <div class="alert alert-secondary" >
                            {{ $user_message }}
                        </div>
                    <hr>
                    
                </div>
                <div class="card-footer text-muted text-center">
                    Received: {{ now()->format('F d, Y H:i A') }}
                </div>
            </div>

            <div class="text-center mt-3 text-muted small">
                <p>&copy; {{ date('Y') }} <strong>Egypt Tours</strong> All rights reserved.</p>
            </div>
        </div>
    </div>
</body>
</html>