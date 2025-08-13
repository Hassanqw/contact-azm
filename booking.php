<?php 
include('php/dbcon.php');
include('components/header.php');

// Check if designer ID is passed
if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $stmt = $pdo->prepare("SELECT * FROM interioirdesigner WHERE Designer_id = ?");
    $stmt->execute([$id]);
    $designer = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$designer) {
        die("Designer not found!");
    }
} else {
    die("Invalid request!");
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $designer_id = $_POST['designer_id'];
    $name        = $_POST['name'];
    $email       = $_POST['email'];
    $phone       = $_POST['phone'];
    $service     = $_POST['service_type'];
    $date        = $_POST['date'];
    $time        = $_POST['time'];
    $notes       = $_POST['notes'];

    $sql = "INSERT INTO bookingdesigner 
            (`D_Name`, `D_Email`, `D_ContactNumber`, `Service_type`, `Preferred_Date`, `Preferred_Time`, `Additional_Notes`, `Designer_id`) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $success = $stmt->execute([$name, $email, $phone, $service, $date, $time, $notes, $designer_id]);

    if ($success) {
        echo "<script>
                alert('Appointment booked successfully!');
                window.location.href = 'home.php';
              </script>";
        exit; // stop further execution
    } else {
        echo "<script>
                alert('Error booking appointment!');
                window.history.back();
              </script>";
        exit;
    }
}
?>

<div class="container py-5">
    <!-- Designer Profile / Blog Section -->
    <div class="card mb-4 shadow-lg border-0">
        <div class="card-body text-center bg-dark text-light rounded-top">
            <img src="assets/images/service-image1.jpg" 
                 class="rounded-circle border border-3 border-warning mb-3" 
                 width="130" height="130" alt="Designer">

            <h2 class="fw-bold text-warning">
                <?= htmlspecialchars($designer['firstname'] . " " . $designer['lastname']) ?>
            </h2>

            <p class="mb-1">
                <i class="fa-solid fa-location-dot text-danger"></i> 
                <?= htmlspecialchars($designer['address']) ?>
            </p>

            <p class="mb-2">
                <i class="fa-solid fa-briefcase text-primary"></i> 
                <?= htmlspecialchars($designer['yearofexperience']) ?> Years Experience
            </p>

            <p class="fst-italic text-secondary">
                Passionate interior designer with expertise in modern, classic, and luxury styles. 
                Transforming spaces into personalized, functional, and stunning designs.
            </p>
        </div>
    </div>

    <!-- Booking Form -->
   <div class="card shadow-lg border-0">
    <div class="card-header bg-dark text-warning fw-bold fs-5">
        Book an Appointment
    </div>
    <div class="card-body" style="background-color: #1a1a1a; color: white;">
        <form action="" method="POST">
            <input type="hidden" name="designer_id" value="<?= $designer['Designer_id'] ?>">

            <div class="mb-3">
                <label class="form-label text-warning">Your Full Name</label>
                <input type="text" name="name" placeholder="Enter Your Name" class="form-control border-warning bg-dark text-white" required>
            </div>

            <div class="mb-3">
                <label class="form-label text-warning">Your Email</label>
                <input type="email" name="email"  placeholder="Enter Your Email" class="form-control border-warning bg-dark text-white" required>
            </div>

            <div class="mb-3">
                <label class="form-label text-warning">Phone Number</label>
                <input type="tel" name="phone" placeholder="Enter Your Contact Number"  class="form-control border-warning bg-dark text-white" required>
            </div>

            <div class="mb-3">
                <label class="form-label text-warning">Service Type</label>
                <select name="service_type" class="form-select border-warning bg-dark text-white" required>
                    <option value="">-- Select Service --</option>
                    <option value="Full Interior Design">Full Interior Design</option>
                    <option value="Room Makeover">Room Makeover</option>
                    <option value="Furniture Selection">Furniture Selection</option>
                    <option value="Consultation Only">Consultation Only</option>
                </select>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label text-warning">Preferred Date</label>
                    <input type="date" name="date" class="form-control border-warning bg-dark text-white" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label text-warning">Preferred Time</label>
                    <input type="time" name="time" class="form-control border-warning bg-dark text-white" required>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label text-warning">Additional Notes</label>
                <textarea name="notes" rows="3" class="form-control border-warning bg-dark text-white" placeholder="Any specific requirements or ideas?"></textarea>
            </div>

            <button type="submit" class="btn btn-warning fw-bold px-4 py-2 w-100">
                <i class="fa-solid fa-calendar-check me-1"></i> Book Now
            </button>
        </form>
    </div>
</div>

<?php 
include('components/footer.php');
?>
