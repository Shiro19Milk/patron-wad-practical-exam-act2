<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
</head>
<body>
    <h1>Edit Student</h1>

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('students.update', $student) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Name:</label><br>
        <input type="text" name="name" value="{{ old('name', $student->name) }}" required><br><br>

        <label>Age:</label><br>
        <input type="number" name="age" value="{{ old('age', $student->age) }}" required><br><br>

        <label>Course:</label><br>
        <input type="text" name="course" value="{{ old('course', $student->course) }}" required><br><br>

        <button type="submit">Update</button>
    </form>

    <br>
    <a href="{{ route('students.index') }}">Back to List</a>
</body>
</html>