<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Content</title>
    <link href="/css/content.css" rel="stylesheet">
</head>

<body>
            <div class="header__main">
                <div>
                    <nav>
                        <ul class="header__nav">
                            <li class="one"><a href="homepage">Home</a></li>
                            <li class="one"><a href="about">About</a></li>
                            <li class="one"><a href="content">Projects</a></li>
                        </ul>
                    </nav>
                </div>
            </div>

    <div class="container">
            
        <header>
            <h1>Project To-Do List</h1>
        </header>

        <section class="task-section">
            <input type="text" id="taskInput" placeholder="Add a new task">
            <button onclick="addTask()">Add Task</button>
            <ul id="taskList"></ul>
        </section>

        <section class="info-section">
            <h2>About</h2>
            <p>This is a simple To-Do List application built with JavaScript, allowing you to add, remove, and view tasks. Your tasks are stored in your browser's local storage, so they remain available even after a page refresh. Note: I employed thoughtful borrowing in creating this To-Do List.</p>
            </section>
    </div>

    <div class="project">
        <h2 class="project-title">My Projects</h2>
        <div class="project-gallery">
            
            <div class="project-card">
                <img src="{{ asset('/img/flora.png') }}" alt="Project 1">
                <div class="project-info">
                    <h3>FloraLingo</h3>
                    <p>HCI group Project - HTML CSS JS, prototype using paper and Figma</p>
                </div>
            </div>

            <div class="project-card">
                <img src="{{ asset('/img/javainventory.png') }}" alt="Project 2">
                <div class="project-info">
                    <h3>Java Beans Cafe Inventory</h3>
                    <p>Group Project in compliance for Object Oriented Programming - JAVA 'Lead Developer'</p>
                </div>
            </div>
            
            <div class="project-card">
                <img src="{{ asset('/img/hirayaDK.png') }}" alt="Project 3">
                <div class="project-info">
                    <h3>Hiraya De Kasuotan</h3>
                    <p>Group Project in  Compliance for Platform Technologies - HTML CSS JS</p>
                </div>
            </div>
           
            <div class="project-card">
                <img src="{{ asset('/img/dsa.png') }}" alt="Project 4">
                <div class="project-info">
                    <h3>Compiled Activities on DSA</h3>
                    <p>Individual Project Using C Language</p>
                </div>
            </div>

            <div class="project-card">
                <img src="{{ asset('/img/resume.png') }}" alt="Project 5">
                <div class="project-info">
                    <h3>Personal Resume</h3>
                    <p>Platform Technologies Individual Activity - HTML CSS JS  </p>
                </div>
            </div>
            
            <div class="project-card">
                <img src="{{ asset('/img/calcu.png') }}" alt="Project 6">
                <div class="project-info">
                    <h3>Calculator with Special Features</h3>
                    <p>Object Oriented Programming Individual Activitys</p>
                </div>
            </div>
            
            <div class="project-card">
                <img src="{{ asset('/img/db.png') }}" alt="Project 7">
                <div class="project-info">
                    <h3>Database for Dental Appointment System</h3>
                    <p>A Group Project for Web System Technologies and Information Management 1 - Backend Developer using SQL</p>
                </div>
            </div>

            <div class="project-card">
                <img src="{{ asset('/img/dental.png') }}" alt="Project 8">
                <div class="project-info">
                    <h3>Dental Appointment System</h3>
                    <p>A group project in compliance for Web System Technologies - Backend Developer using SQL and PHP  </p>
                </div>
            </div>
            
            <div class="project-card">
                <img src="{{ asset('/img/cats.png') }}" alt="Project 9">
                <div class="project-info">
                    <h3>Website Homepage</h3>
                    <p>Individual Activity for Platform Technologies - Developer</p>
                </div>
            </div>

            <div class="project-card">
                <img src="{{ asset('/img/pup.png') }}" alt="Project 10">
                <div class="project-info">
                    <h3>A Sample Website/Blog for Pups </h3>
                    <p>Individual Activity for Platform Technologies - Developer</p>
                </div>
            </div>
           
        </div>
    </div>




    </div>

    <script>
        // Wait until the DOM content is fully loaded before running any scripts
        document.addEventListener('DOMContentLoaded', () => {
            loadTasks(); // Load existing tasks from localStorage
        });

        // add task
        function addTask() {
            // get value
            const taskInput = document.getElementById('taskInput');
            const taskText = taskInput.value.trim();

            //empty txt field
            if (taskText === '') return;

            // ge the list
            const taskList = document.getElementById('taskList');
            // create new one
            const listItem = document.createElement('li');

            // Set the inner HTML of the new list item
            listItem.innerHTML = `
                ${taskText}
                <button onclick="removeTask(this)">Delete</button>
            `;
            // adds the listItem element to the end of the taskList,malalagay sa bottom yung new task
            taskList.appendChild(listItem);

            // Clear 
            taskInput.value = '';

            saveTasks();
        }

        // remove
        function removeTask(button) {
            // deletes the clicked child node (button.parentElement) from its parent node (taskList).
            const taskList = document.getElementById('taskList');
            taskList.removeChild(button.parentElement);

            saveTasks();
        }

       
        function saveTasks() {
            const tasks = [];

            document.querySelectorAll('#taskList li').forEach(li => {
                // Add the text content sa list of item sa tasks array
                tasks.push(li.innerText.replace('Delete', '').trim());
            });

            localStorage.setItem('tasks', JSON.stringify(tasks));
        }

        function loadTasks() {
            const tasks = JSON.parse(localStorage.getItem('tasks')) || [];

            // Iterate over each task in the tasks array
            tasks.forEach(taskText => {
                // Get the task list and create a new list item
                const taskList = document.getElementById('taskList');
                const listItem = document.createElement('li');

                listItem.innerHTML = `
                    ${taskText}
                    <button onclick="removeTask(this)">Delete</button>
                `;
                // Append the new list item to the task list
                taskList.appendChild(listItem);
            });
        }
    </script>

</body>

</html>
