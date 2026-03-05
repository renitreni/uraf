<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Request submitted – {{ config('app.name') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'DM Sans', system-ui, sans-serif;
            background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 1rem;
        }
        .success-card {
            max-width: 28rem;
            border: none;
            border-radius: 1rem;
            box-shadow: 0 4px 24px rgba(0,0,0,.08);
        }
        .success-icon {
            width: 4rem;
            height: 4rem;
            background: linear-gradient(135deg, #0d6efd 0%, #0a58ca 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1rem;
        }
        .success-icon svg {
            width: 2rem;
            height: 2rem;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="card success-card">
        <div class="card-body text-center p-4 p-md-5">
            <div class="success-icon">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                </svg>
            </div>
            <h1 class="h4 mb-2">Request submitted successfully</h1>
            <p class="text-muted mb-4">
                Thank you for submitting your request. We have received your information and will get back to you as soon as possible.
            </p>
            <p class="small text-muted mb-3">
                Reference: <strong>#{{ $urafRequest->id }}</strong>
            </p>
            <a href="{{ route('uraf.form') }}" class="btn btn-primary">Submit another request</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
