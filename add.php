<?php include 'db.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name']; $email = $_POST['email']; $phone = $_POST['phone'];
    $gender = $_POST['gender']; $dob = $_POST['dob']; $course = $_POST['course'];
    $conn->query("INSERT INTO student (name, email, phone, gender, dob, course) VALUES ('$name', '$email', '$phone', '$gender', '$dob', '$course')");
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h2>Add Student</h2>
    <form method="POST">
        <div class="mb-3"><label>Name</label><input type="text" name="name" class="form-control" required></div>
        <div class="mb-3"><label>Email</label><input type="email" name="email" class="form-control" required></div>
        <div class="mb-3"><label>Phone</label><input type="text" name="phone" class="form-control"></div>
        <div class="mb-3"><label>Gender</label>
            <select name="gender" class="form-control" required>
                <option value="">Select</option>
                <option>Male</option>
                <option>Female</option>
                <option>Other</option>
            </select>
        </div>
        <div class="mb-3"><label>DOB</label><input type="date" name="dob" class="form-control"></div>
        <div class="mb-3"><label>Course</label><input type="text" name="course" class="form-control"></div>
        <button class="btn btn-success">Save</button>
        <a href="index.php" class="btn btn-secondary">Back</a>
    </form>
</div>
</body>
</html>
