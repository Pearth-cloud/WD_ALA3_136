<?php include 'db.php';
$id = $_GET['id'];
$row = $conn->query("SELECT * FROM student WHERE id=$id")->fetch_assoc();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name']; $email = $_POST['email']; $phone = $_POST['phone'];
    $gender = $_POST['gender']; $dob = $_POST['dob']; $course = $_POST['course'];
    $conn->query("UPDATE student SET name='$name', email='$email', phone='$phone', gender='$gender', dob='$dob', course='$course' WHERE id=$id");
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h2>Edit Student</h2>
    <form method="POST">
        <div class="mb-3"><label>Name</label><input type="text" name="name" value="<?= $row['name'] ?>" class="form-control" required></div>
        <div class="mb-3"><label>Email</label><input type="email" name="email" value="<?= $row['email'] ?>" class="form-control" required></div>
        <div class="mb-3"><label>Phone</label><input type="text" name="phone" value="<?= $row['phone'] ?>" class="form-control"></div>
        <div class="mb-3"><label>Gender</label>
            <select name="gender" class="form-control" required>
                <option <?= $row['gender']=='Male'?'selected':'' ?>>Male</option>
                <option <?= $row['gender']=='Female'?'selected':'' ?>>Female</option>
                <option <?= $row['gender']=='Other'?'selected':'' ?>>Other</option>
            </select>
        </div>
        <div class="mb-3"><label>DOB</label><input type="date" name="dob" value="<?= $row['dob'] ?>" class="form-control"></div>
        <div class="mb-3"><label>Course</label><input type="text" name="course" value="<?= $row['course'] ?>" class="form-control"></div>
        <button class="btn btn-primary">Update</button>
        <a href="index.php" class="btn btn-secondary">Back</a>
    </form>
</div>
</body>
</html>
