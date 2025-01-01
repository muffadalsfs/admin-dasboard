<!-- resources/views/form.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form with Image Upload</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Optional CSS -->
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Fill the Form</h1>
        <form action="form" method="POST" enctype="multipart/form-data">
            @csrf
            <!-- Name Field -->
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required>
                @error('name')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <!-- City Field -->
            <div class="mb-3">
                <label for="city" class="form-label">City</label>
                <input type="text" name="city" id="city" class="form-control" value="{{ old('city') }}" required>
                @error('city')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <!-- Image Upload Field -->
            <div class="mb-3">
                <label for="image" class="form-label">Upload Image</label>
                <input type="file" name="file" id="image" class="form-control" accept="image/*" required>
                @error('image')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>
