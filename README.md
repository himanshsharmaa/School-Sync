<h1 align="center">📚 School Sync</h1>

<p align="center">
  School Sync is a comprehensive student management system designed for educational institutions. It offers seamless login, student record management, teacher-student interactions, and administrative control. The project is crafted with a modern tech stack, featuring HTML, PHP, JavaScript, and SQL, ensuring a polished and interactive UI.
</p>

<div align="center">
    <img src="https://github.com/himanshsharmaa/Examify/blob/main/assets/img/Examify.png?raw=true" alt=" Header" />
</div>

------

<p align="center">
  <img src="https://readme-typing-svg.herokuapp.com?font=Fira+Code&size=22&pause=1000&color=4CAF50&center=true&vCenter=true&width=435&lines=Manage+Students+Efficiently;Student+and+Teacher+Focused;Secure+and+User-Friendly" alt="Typing SVG">
</p>

<h2 align="left">🌟 Features</h2>
<ul>
  <li><strong>Secure Authentication</strong>: Role-based login for students, teachers, and admins.</li>
  <li><strong>Student Records Management</strong>: Store and manage student details including roll number, name, course enrolled, date of admission, and date of passing.</li>
  <li><strong>Teacher Dashboard</strong>: Teachers can view and manage student records.</li>
  <li><strong>Admin Dashboard</strong>: Administrators have full control over the system, including user management and site settings.</li>
  <li><strong>Interactive UI</strong>: Modern, responsive design using HTML, Tailwind CSS, and JavaScript.</li>
</ul>

<h2 align="left">🔧 Tech Stack</h2>
<p align="left">
  <a href="https://www.html.com/" target="_blank"><img src="https://img.shields.io/badge/HTML-E34C26?style=for-the-badge&logo=html5&logoColor=white"/></a>
  <a href="https://www.php.net/" target="_blank"><img src="https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white"/></a>
  <a href="https://www.javascript.com/" target="_blank"><img src="https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black"/></a>
  <a href="https://www.mysql.com/" target="_blank"><img src="https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white"/></a>
  <a href="https://tailwindcss.com/" target="_blank"><img src="https://img.shields.io/badge/Tailwind_CSS-06B6D4?style=for-the-badge&logo=tailwind-css&logoColor=white"/></a>
  <a href="https://github.com/" target="_blank"><img src="https://img.shields.io/badge/GitHub-181717?style=for-the-badge&logo=github&logoColor=white"/></a>
</p>

<h2 align="left">📂 Project Structure</h2>
<pre>
student-management-system/
├── .env
├── .gitignore
├── package.json
├── README.md
├── public/
│   ├── css/
│   ├── images/
│   ├── js/
│   └── index.html
├── src/
│   ├── app.js
│   ├── server.js
│   ├── config/
│   │   └── dbConfig.js
│   ├── controllers/
│   │   ├── adminController.js
│   │   ├── authController.js
│   │   ├── studentController.js
│   │   └── teacherController.js
│   ├── middlewares/
│   │   └── authMiddleware.js
│   ├── models/
│   │   ├── student.js
│   │   ├── teacher.js
│   │   └── user.js
│   ├── routes/
│   │   ├── adminRoutes.js
│   │   ├── authRoutes.js
│   │   ├── studentRoutes.js
│   │   └── teacherRoutes.js
│   ├── utils/
│   │   └── helpers.js
│   └── views/
│       ├── admin/
│       ├── auth/
│       ├── student/
│       └── teacher/
└── tests/
    ├── controllers/
    ├── models/
    ├── routes/
    └── views/
</pre>

<h2 align="left">🚀 Installation</h2>
<ol>
  <li>Clone the repository:
    <pre><code>git clone https://github.com/himanshsharmaa/School-Sync.git</code></pre>
  </li>
  <li>Navigate to the project directory:
    <pre><code>cd student-management-system</code></pre>
  </li>
  <li>Set up the web server (e.g., XAMPP, WAMP):
    <ul>
      <li>Ensure Apache and MySQL are running.</li>
      <li>Place the project directory in the web server's root directory (e.g., <code>C:/xampp/htdocs/</code>).</li>
    </ul>
  </li>
  <li>Set up the database:
    <ul>
      <li>Create a new MySQL database.</li>
      <li>Import the provided SQL file to set up the necessary tables.</li>
    </ul>
  </li>
  <li>Set up environment variables:
    <ul>
      <li>Create a <code>.env</code> file in the root directory and add the necessary environment variables (e.g., database credentials).</li>
    </ul>
  </li>
</ol>

<h2 align="left">💻 Usage</h2>
<ol>
  <li>Start the web server (e.g., XAMPP, WAMP).</li>
  <li>Open your browser and navigate to <code>http://localhost/student-management-system</code> to access the application.</li>
</ol>

<h2 align="left">⚙️ Configuration</h2>
<ul>
  <li><strong>Database Configuration</strong>: Update the database connection details in the <code>dbConfig.php</code> file in the <code>src/config</code> directory.</li>
  <li><strong>Environment Variables</strong>: Ensure all required environment variables are set in the <code>.env</code> file.</li>
</ul>

<h2 align="left">📁 File Descriptions</h2>
<ul>
  <li><code>public/</code>: Contains CSS, images, JavaScript files, and the main HTML file.</li>
  <li><code>src/config/</code>: Configuration files for the database and other settings.</li>
  <li><code>src/controllers/</code>: Controllers for handling requests and business logic.</li>
  <li><code>src/middlewares/</code>: Middleware functions for authentication and other purposes.</li>
  <li><code>src/models/</code>: Database models for students, teachers, and users.</li>
  <li><code>src/routes/</code>: Route definitions for different parts of the application.</li>
  <li><code>src/utils/</code>: Utility functions and helpers.</li>
  <li><code>src/views/</code>: Views and templates for rendering the UI.</li>
  <li><code>tests/</code>: Test files for various parts of the application.</li>
</ul>

<h2 align="left">🔮 Future Enhancements</h2>
<ul>
  <li><strong>Real-time Notifications</strong>: Implement real-time notifications for updates and alerts.</li>
  <li><strong>Advanced Analytics</strong>: Provide detailed analytics and reports for teachers and administrators.</li>
  <li><strong>Mobile App</strong>: Develop a mobile application for easier access and management.</li>
  <li><strong>Multi-language Support</strong>: Add support for multiple languages to cater to a diverse user base.</li>
  <li><strong>Integration with LMS</strong>: Integrate with popular Learning Management Systems (LMS) for seamless data exchange.</li>
</ul>

<h2 align="left">📝 License</h2>
<p align="left">This project is licensed under the <strong>Apache License</strong>. See the <a href="LICENSE">LICENSE</a> file for details.</p>

<h2 align="left">🤝 Contributing</h2>
<p>
  Contributions are welcome! Please open an issue or submit a pull request.
</p>

<h2 align="left">📬 Contact</h2>
<p align="left">For any inquiries or feedback, please contact <a href="mailto:talk.himanshsharma@gmail.com">talk.himanshsharma@gmail.com</a></p>

------

<p align="center">Made with ❤️ by <a href="https://github.com/himanshsharma">Himansh Sharma</a></p>
