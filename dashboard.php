<?php 
include('header.php'); 
include('navbar.php'); 
?>

<div class="container flex-grow-1 py-5">
    <div class="mb-4 d-flex justify-content-between align-items-center flex-wrap">
        <div>
            <h1 class="fw-bold">Welcome Back</h1>
            <p class="text-muted">Student's Current Semester Overview</p>
        </div>
        <div class="badge text-white font-monospace shadow-sm" style="background-color: #1e3a8a; padding: 10px; font-size: 13px;">
            Current Term: Mar 2026 - Aug 2026
        </div>
    </div>

    <div class="row g-4 mb-4">
        <div class="col-md-4">
            <div class="card p-3 shadow-sm border-0 h-100 bg-white">
                <span class="text-muted text-uppercase small fw-bold">Current CGPA</span>
                <div class="card-summary-val mt-2">3.65</div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-3 shadow-sm border-0 h-100 bg-white">
                <span class="text-muted text-uppercase small fw-bold">Enrolled Credits</span>
                <div class="card-summary-val mt-2">14 Hours</div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-3 shadow-sm border-0 h-100 bg-white">
                <span class="text-muted text-uppercase small fw-bold">Academic Status</span>
                <div class="text-success fs-2 fw-bold mt-2">Active</div>
            </div>
        </div>
    </div>

    <div class="row g-4 mb-4">
        
        <div class="col-lg-8">
            <div class="row g-4">
                <div class="col-md-7">
                    <div class="card p-3 shadow-sm border-0 h-100 bg-white">
                        <h6 class="fw-bold text-secondary mb-3">CGPA Trend Analysis (Semester 1 - 3)</h6>
                        <div style="position: relative; height:220px; width:100%">
                            <canvas id="cgpaChart"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="card p-3 shadow-sm border-0 h-100 bg-white">
                        <h6 class="fw-bold text-secondary mb-3">Current Assignments Tracker</h6>
                        <div style="position: relative; height:220px; width:100%">
                            <canvas id="taskChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card p-3 shadow-sm border-0 h-100 bg-white">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h6 class="fw-bold text-secondary m-0">Today's Timetable</h6>
                    <a href="schedule.php" class="btn btn-sm btn-outline-primary" style="font-size: 11px; color: #1e3a8a; border-color: #1e3a8a;">View Full</a>
                </div>
                
                <div class="list-group list-group-flush small">
                    <div class="list-group-item px-0 py-2 border-0 border-start border-3 border-primary ps-3 mb-2 bg-light rounded-end">
                        <div class="fw-bold text-dark">08:30 AM - 10:30 AM</div>
                        <div class="text-muted">IMS566 - Lab 3</div>
                    </div>
                    <div class="list-group-item px-0 py-2 border-0 border-start border-3 border-warning ps-3 bg-light rounded-end">
                        <div class="fw-bold text-dark">02:00 PM - 04:00 PM</div>
                        <div class="text-muted">IMS552 - Dewan BK2</div>
                    </div>
                </div>

                <h6 class="fw-bold text-secondary mt-4 mb-2">Campus Announcements</h6>
                <div class="p-2 border rounded border-secondary border-opacity-10 bg-light small">
                    <span class="badge bg-danger mb-1">Important</span>
                    <p class="m-0 fw-semibold text-dark">Final Exam Registration deadline is approaching next Friday.</p>
                </div>
            </div>
        </div>

    </div>
</div>

<script>
    const ctxCgpa = document.getElementById('cgpaChart').getContext('2d');
    new Chart(ctxCgpa, {
        type: 'line',
        data: {
            labels: ['Sem 1', 'Sem 2', 'Sem 3'],
            datasets: [{
                label: 'CGPA',
                data: [3.70, 3.68, 3.65],
                borderColor: '#1e3a8a', 
                backgroundColor: 'rgba(30, 58, 138, 0.08)',
                tension: 0.2,
                fill: true
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: { 
                y: { 
                    min: 3.5, 
                    max: 4.0 
                } 
            }
        }
    });

    const ctxTask = document.getElementById('taskChart').getContext('2d');
    new Chart(ctxTask, {
        type: 'doughnut',
        data: {
            labels: ['Completed', 'In-Progress', 'Pending'],
            datasets: [{
                data: [6, 3, 2],
                backgroundColor: ['#2e7d32', '#f9a825', '#c62828'],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: { position: 'bottom', labels: { boxWidth: 12 } }
            }
        }
    });
</script>

<?php include('footer.php'); ?>