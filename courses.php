<?php 
include('header.php'); 
include('navbar.php'); 

$courses = [
    ["code" => "IMS566", "title" => "Advanced Web Design Development & CMS", "credits" => 3, "lecturer" => "Ts. Dr. Ahmad Farhan"],
    ["code" => "IMS552", "title" => "Information Systems Management", "credits" => 3, "lecturer" => "Pn. Siti Aminah"],
    ["code" => "IMS605", "title" => "Database Systems & Analysis", "credits" => 4, "lecturer" => "En. Khairul Anwar"],
    ["code" => "MGT538", "title" => "Strategic Management Business Operations", "credits" => 4, "lecturer" => "Dr. Sarah Jane"]
];
?>

<div class="container flex-grow-1">
    <div class="mb-4">
        <h1 class="fw-bold">Current Registered Courses</h1>
        <p class="text-muted">Overview of subjects enrolled during the current semester block.</p>
    </div>

    <div class="table-responsive card shadow-sm border-0">
        <table class="table table-hover align-middle mb-0">
            <thead class="table-header-custom">
                <tr>
                    <th class="ps-4 py-3">Course Code</th>
                    <th class="py-3">Course Name</th>
                    <th class="text-center py-3">Credit Hours</th>
                    <th class="py-3">Lecturer Assigned</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($courses as $row): ?>
                    <tr>
                        <td class="ps-4 font-monospace fw-bold text-dark"><?php echo $row['code']; ?></td>
                        <td><?php echo $row['title']; ?></td>
                        <td class="text-center fw-semibold"><?php echo $row['credits']; ?></td>
                        <td class="text-secondary"><?php echo $row['lecturer']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<?php include('footer.php'); ?>