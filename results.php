<?php 
include('header.php'); 
include('navbar.php'); 

//  Insert the important information that relates with examination results
$semester_results = [
    "Semester 1" => [
        "id" => "sem1",
        "gpa" => "3.70",
        "status" => "Pass",
        "image" => "docs/sem1-transcript.png",
        "courses" => [
            ["code" => "CTU552", "name" => "Philosophy and Current Issues", "credit" => 2, "grade" => "A"],
            ["code" => "IMC401", "name" => "Foundation of Information and Communications Technology", "credit" => 3, "grade" => "A"],
            ["code" => "IMC411", "name" => "Database Management System", "credit" => 3, "grade" => "B+"],
            ["code" => "IMC412", "name" => "Fundamentals of Information Science", "credit" => 3, "grade" => "A"],
            ["code" => "IMC413", "name" => "Information Storage & Retrieval Systems", "credit" => 3, "grade" => "A"],
            ["code" => "IMC414", "name" => "Digital Citizenship and Social Media", "credit" => 2, "grade" => "A-"],
            ["code" => "IMC451", "name" => "Organization of Information", "credit" => 3, "grade" => "B"]
        ]
    ],


    "Semester 2" => [
        "id" => "sem2",
        "gpa" => "3.64",
        "status" => "Pass",
        "image" => "docs/sem2-transcript.png",
        "courses" => [
            ["code" => "CTU554", "name" => "Values and Civilization II", "credit" => 2, "grade" => "A"],
            ["code" => "IMC452", "name" => "Introduction to Metadata", "credit" => 3, "grade" => "A-"],
            ["code" => "IMS450", "name" => "Problem Solving and Program Design 1", "credit" => 3, "grade" => "A-"],
            ["code" => "IMS457", "name" => "Multimedia for Information Professionals", "credit" => 3, "grade" => "A"],
            ["code" => "IMS458", "name" => "Web Design and Development", "credit" => 3, "grade" => "B+"]
        ]
    ],


    "Semester 3" => [
        "id" => "sem3",
        "gpa" => "3.58",
        "status" => "Pass",
        "image" => "docs/sem3-transcript.png",
        "courses" => [
            ["code" => "HGD344", "name" => "Integrity and Anti-Corruption", "credit" => 1, "grade" => "A"],
            ["code" => "IMC501", "name" => "Information Analytics", "credit" => 3, "grade" => "A-"],
            ["code" => "IMS511", "name" => "Program Solving and Program Design 2", "credit" => 3, "grade" => "A-"],
            ["code" => "IMS555", "name" => "Decision Theory", "credit" => 3, "grade" => "A-"],
            ["code" => "IMS562", "name" => "Information Security", "credit" => 3, "grade" => "B+"],
            ["code" => "LCC402", "name" => "English for Oral Reporting", "credit" => 2, "grade" => "B+"]
        ]
    ]
];
?>


<div class="container flex-grow-1 pb-5">
    <div class="mb-4">
        <h1 class="fw-bold">Academic Examination Results</h1>
        <p class="text-muted">Official past semesters examination grades & transcript slips.</p>
    </div>


    <?php foreach ($semester_results as $semName => $data): ?>
        <div class="card shadow-sm border-0 mb-5 bg-white scroll-margin" id="<?php echo $data['id']; ?>">
            <div class="card-header border-0 bg-light py-3 d-flex justify-content-between align-items-center flex-wrap gap-2">
                <div>
                    <h5 class="m-0 fw-bold text-dark"><?php echo $semName; ?> Summary</h5>
                </div>
                
                <div class="d-flex align-items-center gap-4">
                    <div class="small">
                        <span class="text-muted fw-bold">GPA:</span> 
                        <span class="font-monospace text-primary fw-bold" style="color: #1e3a8a !important;"><?php echo $data['gpa']; ?></span>
                    </div>
                    <div class="small">
                        <span class="text-muted fw-bold">Status:</span> 
                        <span class="badge bg-success py-1 px-2"><?php echo $data['status']; ?></span>
                    </div>
                    
                    <div class="text-center" style="border-left: 1px solid #dee2e6; padding-left: 15px;">
                        <a href="<?php echo $data['image']; ?>" target="_blank" title="Click to open full size slip image" class="d-inline-block text-decoration-none thumbnail-wrapper">
                            <div class="position-relative border border-2 border-secondary border-opacity-20 rounded" style="width: 42px; height: 50px; overflow: hidden; background-color: #f8f9fa;">
                                <img src="<?php echo $data['image']; ?>" alt="Slip Preview" style="width: 100%; height: 100%; object-fit: cover;">
                            </div>
                            <span class="d-block text-primary fw-bold font-monospace mt-1" style="font-size: 9px; letter-spacing: 0.5px; color: #1e3a8a !important;">VIEW SLIP</span>
                        </a>
                    </div>
                </div>
            </div>


            <div class="table-responsive p-3">
                <table class="table table-hover align-middle m-0" style="font-size: 14px;">
                    <thead class="table-header-custom">
                        <tr>
                            <th style="width: 15%;">Course Code</th>
                            <th style="width: 55%;">Course Name</th>
                            <th style="width: 15%;" class="text-center">Credit Hours</th>
                            <th style="width: 15%;" class="text-center">Grade</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data['courses'] as $course): ?>
                            <tr>
                                <td class="font-monospace fw-bold text-secondary"><?php echo $course['code']; ?></td>
                                <td class="text-dark fw-semibold"><?php echo $course['name']; ?></td>
                                <td class="text-center font-monospace"><?php echo $course['credit']; ?></td>
                                <td class="text-center font-monospace fw-bold 
                                    <?php 
                                        if ($course['grade'] == 'A' || $course['grade'] == 'A-') {
                                            echo 'text-success'; 
                                        } elseif ($course['grade'] == 'B+' || $course['grade'] == 'B') {
                                            echo 'text-primary'; 
                                        } else {
                                            echo 'text-secondary';
                                        }
                                    ?>">
                                    <?php echo $course['grade']; ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    <?php endforeach; ?>
</div>


<style>
    /* Prevent the "card" to be too close when shifting screen */
    .scroll-margin {
        scroll-margin-top: 90px;
    }
    .table-header-custom th {
        background-color: #eff6ff !important;
        color: #1e3a8a !important;
    }
    .thumbnail-wrapper:hover img {
        transform: scale(1.15);
        transition: all 0.2s ease-in-out;
    }
    .thumbnail-wrapper img {
        transition: all 0.2s ease-in-out;
    }
    .thumbnail-wrapper:hover div {
        border-color: #1e3a8a !important;
        box-shadow: 0 2px 5px rgba(30, 58, 138, 0.2);
    }
</style>

<?php include('footer.php'); ?>