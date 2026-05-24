<?php 
include('header.php'); 
include('navbar.php'); 

// PHP Multi-dimensional array that represents the overall weekly subject schedule
$timetable = [
    "Monday" => [
        ["time" => "08:30 AM - 10:30 AM", "code" => "IMS566", "subject" => "Advanced Web Design & CMS", "room" => "Lab 3"],
        ["time" => "02:00 PM - 04:00 PM", "code" => "IMS552", "subject" => "Information Systems Management", "room" => "Dewan BK2"]
    ],
    "Tuesday" => [
        ["time" => "10:30 AM - 01:30 PM", "code" => "IMS605", "subject" => "Database Systems & Analysis", "room" => "Computer Lab 1"]
    ],
    "Wednesday" => [
        ["time" => "08:30 AM - 11:30 AM", "code" => "MGT538", "subject" => "Strategic Management Operations", "room" => "Bilik Kuliah 5"]
    ],
    "Thursday" => [
        ["time" => "02:00 PM - 04:00 PM", "code" => "IMS566", "subject" => "Advanced Web Design (Lecture)", "room" => "Dewan Utama"]
    ],
    "Friday" => [
        // Empty array means no classes scheduled on Friday
    ]
];
?>

<div class="container flex-grow-1 pb-5">
    <div class="mb-4">
        <h1 class="fw-bold">Weekly Class Schedule</h1>
        <p class="text-muted">Current semester's weekly timetable.</p>
    </div>

    <div class="row g-4">
        <?php foreach ($timetable as $day => $classes): ?>
            <div class="col-md-6 col-lg-4">
                <div class="card shadow-sm border-0 h-100 bg-white">
                    <div class="card-header border-0 fw-bold text-white py-3" style="background-color: #1e3a8a;">
                        <?php echo $day; ?>
                    </div>
                    
                    <div class="card-body p-3">
                        <?php if (empty($classes)): ?>
                            <div class="text-center text-muted my-4 small">
                                <em>No classes scheduled</em>
                            </div>
                        <?php else: ?>
                            <?php foreach ($classes as $class): ?>
                                <div class="p-2 mb-2 border rounded border-secondary border-opacity-10 bg-light small">
                                    <div class="d-flex justify-content-between font-monospace fw-bold mb-1" style="color: #2563eb !important;">
                                        <span><?php echo $class['code']; ?></span>
                                        <span class="badge bg-secondary opacity-75"><?php echo $class['room']; ?></span>
                                    </div>
                                    <div class="fw-bold text-dark mb-1"><?php echo $class['subject']; ?></div>
                                    <div class="text-muted font-monospace" style="font-size: 11px;">
                                        ⏰ <?php echo $class['time']; ?>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?php include('footer.php'); ?>