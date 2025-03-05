<!DOCTYPE html>
<html>
<head>
    <title>URL Shortener</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">URL Shortener</h1>
        <form method="POST" action="{{ route('shorten') }}" class="mt-4">
            @csrf
            <div class="mb-3">
                <input type="url" name="url" class="form-control" placeholder="Enter your URL" value="{{ old('url') }}">
                @error('url')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Shorten</button>
        </form>

        @if (session('short_url'))
            <div class="alert alert-success mt-3">
                Shortened URL: <a href="{{ session('short_url') }}" target="_blank">{{ session('short_url') }}</a>
            </div>
        @endif
    </div>
</body>
</html>
