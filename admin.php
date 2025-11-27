<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - SkillStream</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: #fefefe;
            color: #5a5a5a;
            line-height: 1.6;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        /* Login Page Styles */
        .login-page {
            background: #f8f5f0;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        .login-container {
            background: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 5px 25px rgba(139, 125, 107, 0.15);
            width: 100%;
            max-width: 400px;
        }
        
        .login-container h2 {
            text-align: center;
            color: #8b7d6b;
            margin-bottom: 30px;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        input {
            width: 100%;
            padding: 12px;
            border: 1px solid #c8b8a5;
            border-radius: 8px;
            font-size: 1rem;
            box-sizing: border-box;
        }
        
        .submit-btn {
            background: #c8b8a5;
            color: white;
            padding: 12px 30px;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            width: 100%;
            font-size: 1.1rem;
            transition: all 0.3s ease;
        }
        
        .submit-btn:hover {
            background: #a89987;
        }
        
        /* Dashboard Styles */
        .dashboard-page {
            display: none;
        }
        
        /* Header */
        header {
            background: linear-gradient(135deg, #f8f5f0 0%, #e8e0d5 100%);
            padding: 30px 0;
            border-bottom: 1px solid #e0d9d0;
        }
        
        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        header h1 {
            color: #8b7d6b;
            font-size: 2rem;
        }
        
        /* Navigation */
        nav {
            background: #fff;
            padding: 15px 0;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        
        .nav-links {
            display: flex;
            justify-content: center;
            list-style: none;
            flex-wrap: wrap;
            gap: 15px;
        }
        
        .nav-links a {
            text-decoration: none;
            color: #8b7d6b;
            padding: 10px 20px;
            border-radius: 25px;
            transition: all 0.3s ease;
        }
        
        .nav-links a:hover {
            background: #f8f5f0;
        }
        
        /* Admin Content */
        .admin-content {
            padding: 30px 0;
        }
        
        .admin-section {
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            margin-bottom: 25px;
        }
        
        .section-title {
            color: #8b7d6b;
            margin-bottom: 20px;
            font-size: 1.5rem;
        }
        
        /* Forms */
        .form-group {
            margin-bottom: 15px;
        }
        
        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
        }
        
        label {
            display: block;
            margin-bottom: 5px;
            color: #7a6f63;
            font-weight: 500;
        }
        
        input, select, textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #c8b8a5;
            border-radius: 5px;
            font-size: 1rem;
            box-sizing: border-box;
        }
        
        textarea {
            height: 100px;
            resize: vertical;
        }
        
        /* Buttons */
        .btn {
            display: inline-block;
            background: #c8b8a5;
            color: #fff;
            padding: 10px 20px;
            border-radius: 25px;
            text-decoration: none;
            font-weight: bold;
            transition: all 0.3s ease;
            border: 2px solid #c8b8a5;
            cursor: pointer;
            margin: 5px;
        }
        
        .btn:hover {
            background: transparent;
            color: #c8b8a5;
        }
        
        .btn-success {
            background: #27ae60;
            border-color: #27ae60;
        }
        
        .btn-success:hover {
            background: transparent;
            color: #27ae60;
        }
        
        .btn-danger {
            background: #e74c3c;
            border-color: #e74c3c;
        }
        
        .btn-danger:hover {
            background: transparent;
            color: #e74c3c;
        }
        
        /* Tables */
        .courses-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }
        
        .courses-table th,
        .courses-table td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #f0f0f0;
        }
        
        .courses-table th {
            background: #f8f5f0;
            color: #8b7d6b;
            font-weight: 600;
        }
        
        .courses-table tr:hover {
            background: #fcfaf7;
        }
        
        /* Search */
        .search-box {
            margin-bottom: 20px;
        }
        
        .search-box input {
            max-width: 400px;
        }
        
        /* Footer */
        footer {
            background: #8b7d6b;
            color: #f8f5f0;
            text-align: center;
            padding: 20px 0;
            margin-top: 50px;
        }
        
        .back-link {
            text-align: center;
            margin-top: 15px;
        }
        
        .back-link a {
            color: #8b7d6b;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <!-- Login Page -->
    <div id="loginPage" class="login-page">
        <div class="login-container">
            <h2>Admin Login</h2>
            <form id="adminLoginForm">
                <div class="form-group">
                    <input type="text" id="username" placeholder="Username" required>
                </div>
                <div class="form-group">
                    <input type="password" id="password" placeholder="Password" required>
                </div>
                <button type="submit" class="submit-btn">Login</button>
            </form>
            <div class="back-link">
                <a href="index.htm">← Back to Home</a>
            </div>
        </div>
    </div>

    <!-- Dashboard Page -->
    <div id="dashboardPage" class="dashboard-page">
        <!-- Header -->
        <header>
            <div class="container">
                <div class="header-content">
                    <h1>Admin Dashboard</h1>
                    <div>
                        <span>Welcome, Admin</span>
                        <a href="#" class="btn btn-danger" onclick="logout()" style="margin-left: 15px;">Logout</a>
                    </div>
                </div>
            </div>
        </header>

        <!-- Navigation -->
        <nav>
            <div class="container">
                <ul class="nav-links">
                    <li><a href="#courses">Manage Courses</a></li>
                    <li><a href="#add-course">Add New Course</a></li>
                    <li><a href="index.htm">Back to Site</a></li>
                </ul>
            </div>
        </nav>

        <!-- Admin Content -->
        <section class="admin-content">
            <div class="container">
                <!-- Add New Course Form -->
                <div class="admin-section" id="add-course">
                    <h2 class="section-title">Add New Course</h2>
                    <form id="courseForm">
                        <div class="form-row">
                            <div class="form-group">
                                <label for="courseTitle">Course Title *</label>
                                <input type="text" id="courseTitle" required>
                            </div>
                            <div class="form-group">
                                <label for="courseInstructor">Instructor *</label>
                                <input type="text" id="courseInstructor" required>
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label for="courseLevel">Level</label>
                                <select id="courseLevel">
                                    <option value="Beginner">Beginner</option>
                                    <option value="Intermediate">Intermediate</option>
                                    <option value="Advanced">Advanced</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="courseDuration">Duration (hours)</label>
                                <input type="number" id="courseDuration" min="1">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="courseDescription">Description</label>
                            <textarea id="courseDescription"></textarea>
                        </div>
                        
                        <button type="submit" class="btn btn-success">Add Course</button>
                        <button type="button" class="btn" onclick="clearForm()">Clear Form</button>
                    </form>
                </div>

                <!-- Search and Course List -->
                <div class="admin-section" id="courses">
                    <h2 class="section-title">Manage Courses</h2>
                    
                    <div class="search-box">
                        <input type="text" id="searchInput" placeholder="Search by course title or instructor..." onkeyup="searchCourses()">
                    </div>
                    
                    <table class="courses-table">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Instructor</th>
                                <th>Level</th>
                                <th>Duration</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody id="coursesTableBody">
                            <!-- Courses will be loaded here -->
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer>
            <div class="container">
                <p>&copy; 2025 SkillStream E-Learning Platform. All rights reserved.</p>
                <p>Admin Dashboard - Restricted Access</p>
            </div>
        </footer>
    </div>

    <script>
        // Check if user is already logged in
        if (localStorage.getItem('adminLoggedIn') === 'true') {
            showDashboard();
        } else {
            showLogin();
        }

        // Show login page
        function showLogin() {
            document.getElementById('loginPage').style.display = 'flex';
            document.getElementById('dashboardPage').style.display = 'none';
        }

        // Show dashboard page
        function showDashboard() {
            document.getElementById('loginPage').style.display = 'none';
            document.getElementById('dashboardPage').style.display = 'block';
            loadCourses();
        }

        // Login form handler
        document.getElementById('adminLoginForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const username = document.getElementById('username').value;
            const password = document.getElementById('password').value;
            
            // Simple authentication
            if (username === 'admin' && password === 'admin123') {
                localStorage.setItem('adminLoggedIn', 'true');
                showDashboard();
            } else {
                alert('Invalid credentials! Try: admin / admin123');
            }
        });

        // Sample courses data
        let courses = JSON.parse(localStorage.getItem('courses')) || [
            {
                id: 1,
                title: "Web Development Fundamentals",
                instructor: "Irfan",
                level: "Beginner",
                duration: 8,
                description: "Learn HTML, CSS, and JavaScript basics"
            },
            {
                id: 2,
                title: "JavaScript Web Applications",
                instructor: "Camelia",
                level: "Intermediate",
                duration: 12,
                description: "Build dynamic web applications"
            }
        ];

        // Save courses to localStorage
        function saveCourses() {
            localStorage.setItem('courses', JSON.stringify(courses));
        }

        // Load courses into table
        function loadCourses() {
            const tableBody = document.getElementById('coursesTableBody');
            tableBody.innerHTML = '';
            
            courses.forEach(course => {
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td>${course.title}</td>
                    <td>${course.instructor}</td>
                    <td>${course.level}</td>
                    <td>${course.duration} hours</td>
                    <td>
                        <button class="btn" onclick="editCourse(${course.id})">Edit</button>
                        <button class="btn btn-danger" onclick="deleteCourse(${course.id})">Delete</button>
                    </td>
                `;
                tableBody.appendChild(row);
            });
        }

        // Add new course
        document.getElementById('courseForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const newCourse = {
                id: Date.now(),
                title: document.getElementById('courseTitle').value,
                instructor: document.getElementById('courseInstructor').value,
                level: document.getElementById('courseLevel').value,
                duration: parseInt(document.getElementById('courseDuration').value) || 0,
                description: document.getElementById('courseDescription').value
            };
			
			console.log('Adding course:', newCourse);
            
            courses.push(newCourse);
            saveCourses();
            loadCourses();
            clearForm();
            alert('Course added successfully!');
        });

        // Edit course
        function editCourse(courseId) {
            const course = courses.find(c => c.id === courseId);
            if (course) {
                document.getElementById('courseTitle').value = course.title;
                document.getElementById('courseInstructor').value = course.instructor;
                document.getElementById('courseLevel').value = course.level;
                document.getElementById('courseDuration').value = course.duration;
                document.getElementById('courseDescription').value = course.description;
                
                // Change form to update mode
                const form = document.getElementById('courseForm');
                form.onsubmit = function(e) {
                    e.preventDefault();
                    updateCourse(courseId);
                };
                form.querySelector('button[type="submit"]').textContent = 'Update Course';
            }
        }

        // Update course
        function updateCourse(courseId) {
            const courseIndex = courses.findIndex(c => c.id === courseId);
            if (courseIndex !== -1) {
                courses[courseIndex] = {
                    id: courseId,
                    title: document.getElementById('courseTitle').value,
                    instructor: document.getElementById('courseInstructor').value,
                    level: document.getElementById('courseLevel').value,
                    duration: parseInt(document.getElementById('courseDuration').value) || 0,
                    description: document.getElementById('courseDescription').value
                };
                
                saveCourses();
                loadCourses();
                clearForm();
                alert('Course updated successfully!');
            }
        }

        // Delete course
        function deleteCourse(courseId) {
            if (confirm('Are you sure you want to delete this course?')) {
                courses = courses.filter(c => c.id !== courseId);
                saveCourses();
                loadCourses();
                alert('Course deleted successfully!');
            }
        }

        // Search courses
        function searchCourses() {
            const searchTerm = document.getElementById('searchInput').value.toLowerCase();
            const filteredCourses = courses.filter(course => 
                course.title.toLowerCase().includes(searchTerm) ||
                course.instructor.toLowerCase().includes(searchTerm)
            );
            
            const tableBody = document.getElementById('coursesTableBody');
            tableBody.innerHTML = '';
            
            filteredCourses.forEach(course => {
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td>${course.title}</td>
                    <td>${course.instructor}</td>
                    <td>${course.level}</td>
                    <td>${course.duration} hours</td>
                    <td>
                        <button class="btn" onclick="editCourse(${course.id})">Edit</button>
                        <button class="btn btn-danger" onclick="deleteCourse(${course.id})">Delete</button>
                    </td>
                `;
                tableBody.appendChild(row);
            });
        }

        // Clear form - SIMPLE & WORKING
        function clearForm() {
           document.getElementById('courseForm').reset();
           document.querySelector('#courseForm button[type="submit"]').textContent = 'Add Course';
        }

        // Logout
        function logout() {
            localStorage.removeItem('adminLoggedIn');
            showLogin();
        }

        // Initial load
        if (localStorage.getItem('adminLoggedIn') === 'true') {
            loadCourses();
        }
    </script>
</body>
</html>
