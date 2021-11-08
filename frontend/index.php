<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/leftbar.css">
    <link rel="stylesheet" href="css/index.css">
    <title>Dashboard</title>
    
</head>
<body>
    <?php
        include ("leftbar.php")
    ?>

    <section class="home_section">
        <nav>
            <?php
                include("header.php")
            ?>
        </nav>

        <div class="home_content">
            <ul class="breadcrumb">
                <li><a href="index.php">Trang chủ</a></li>
            </ul>
            <div class="overview-boxes">
                <div class="box">
                    <div class="content-top">
                        <div class="box_topic">Students</div>
                        <div class="number" data-num="1500">1500</div>
                    </div>
                    <div class="image student"><img src="image/student-icon.png" class="obj_icon first"></div>
                </div>

                <div class="box">
                    <div class="content-top">
                        <div class="box_topic">Teachers</div>
                        <div class="number" data-num="150">150</div>
                    </div>
                    <div class="image teacher"><img src="image/teacher-icon.png" class="obj_icon second"></div>
                </div>

                <div class="box">
                    <div class="content-top">
                        <div class="box_topic">Parents</div>
                        <div class="number" data-num="3000">3000</div>
                    </div>
                    <div class="image parents"><img src="image/parent-icon.png" class="obj_icon third"></div>
                </div>

                <div class="box">
                    <div class="content-top">
                        <div class="box_topic">Classes</div>
                        <div class="number" data-num="45">45</div>
                    </div>
                    <div class="image parents"><img src="image/class-icon.png" class="obj_icon fourth"></div>
                </div>
            </div>

            <div class="content-box">
                <div class="calender">
                    <h2>Event Calender</h2>
                    <div id="cal">
                        <div id="header">
                          <div id="monthDisplay"></div>
                          <div>
                            <button id="backButton">Back</button>
                            <button id="nextButton">Next</button>
                          </div>
                        </div>
                  
                        <div id="weekdays">
                          <div>Sunday</div>
                          <div>Monday</div>
                          <div>Tueday</div>
                          <div>Wednesday</div>
                          <div>Thursday</div>
                          <div>Friday</div>
                          <div>Saturday</div>
                        </div>
                  
                        <div id="calendar"></div>
                      </div>
                  
                      <div id="newEventModal">
                        <h2>New Event</h2>
                  
                        <input id="eventTitleInput" placeholder="Event Title" />
                  
                        <button id="saveButton">Save</button>
                        <button id="cancelButton">Cancel</button>
                      </div>
                  
                      <div id="deleteEventModal">
                        <h2>Event</h2>
                  
                        <p id="eventText"></p>
                  
                        <button id="deleteButton">Delete</button>
                        <button id="closeButton">Close</button>
                      </div>
                  
                      <div id="modalBackDrop"></div>
                </div>
                <div class="sex_chart"> 
                    <span class="title">Học sinh</span>
                    <canvas id="myChart" style="margin-top: 40px;"></canvas>
                </div>
            </div>    
            
        </div>
    </section>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.6.0/chart.min.js" integrity="sha512-GMGzUEevhWh8Tc/njS0bDpwgxdCJLQBWG3Z2Ct+JGOpVnEmjvNx6ts4v6A2XJf1HOrtOsfhv3hBKpK9kE5z8AQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        let sidebar = document.querySelector('.navbar')
        let sidebarBtn = document.querySelector('.menu')
        var xValue = ["Nam", "Nữ"];
        var yValue = [940, 560];
        var barColor = ["#ff8070", "#1AF386"];

        $(document).ready(function () {
            $(sidebarBtn).click(function () { 
                $(sidebar).toggleClass("active");
            });

            $(".profile").click(function () { 
                $(".user_profile_item").slideToggle();
            
            });

            $(".subject").click(function () { 
                $('nav ul .sub_item').slideToggle();
                $('nav ul .first').toggleClass("rotate")
                // console.log('a')
            });

            $(".teacher").click(function () { 
                $('nav ul .teacher_item').slideToggle();
                $('nav ul .second').toggleClass("rotate")
                // console.log('a')

            });

            $(".student").click(function () { 
                $('nav ul .student_item').slideToggle();
                $('nav ul .third').toggleClass("rotate")
                console.log('a')
            });

        });

        new Chart("myChart", {
            type: "doughnut",
            data: {
            labels: xValue,
            datasets: [{
                backgroundColor: barColor,
                data: yValue
            }]
            },
            options: {
            title: {
                display: true,
                Text: "Học sinh"
            }
            }
        });

        let nav = 0;
        let clicked = null;
        let events = localStorage.getItem('events') ? JSON.parse(localStorage.getItem('events')) : [];

        const calendar = document.getElementById('calendar');
        const newEventModal = document.getElementById('newEventModal');
        const deleteEventModal = document.getElementById('deleteEventModal');
        const backDrop = document.getElementById('modalBackDrop');
        const eventTitleInput = document.getElementById('eventTitleInput');
        const weekdays = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];

        function openModal(date) {
        clicked = date;

        const eventForDay = events.find(e => e.date === clicked);

        if (eventForDay) {
            document.getElementById('eventText').innerText = eventForDay.title;
            deleteEventModal.style.display = 'block';
        } else {
            newEventModal.style.display = 'block';
        }

        backDrop.style.display = 'block';
        }

        function load() {
        const dt = new Date();

        if (nav !== 0) {
            dt.setMonth(new Date().getMonth() + nav);
        }

        const day = dt.getDate();
        const month = dt.getMonth();
        const year = dt.getFullYear();

        const firstDayOfMonth = new Date(year, month, 1);
        const daysInMonth = new Date(year, month + 1, 0).getDate();
        
        const dateString = firstDayOfMonth.toLocaleDateString('en-us', {
            weekday: 'long',
            year: 'numeric',
            month: 'numeric',
            day: 'numeric',
        });
        const paddingDays = weekdays.indexOf(dateString.split(', ')[0]);

        document.getElementById('monthDisplay').innerText = 
            `${dt.toLocaleDateString('en-us', { month: 'long' })} ${year}`;

        calendar.innerHTML = '';

        for(let i = 1; i <= paddingDays + daysInMonth; i++) {
            const daySquare = document.createElement('div');
            daySquare.classList.add('day');

            const dayString = `${month + 1}/${i - paddingDays}/${year}`;

            if (i > paddingDays) {
            daySquare.innerText = i - paddingDays;
            const eventForDay = events.find(e => e.date === dayString);

            if (i - paddingDays === day && nav === 0) {
                daySquare.id = 'currentDay';
            }

            if (eventForDay) {
                const eventDiv = document.createElement('div');
                eventDiv.classList.add('event');
                eventDiv.innerText = eventForDay.title;
                daySquare.appendChild(eventDiv);
            }

            daySquare.addEventListener('click', () => openModal(dayString));
            } else {
            daySquare.classList.add('padding');
            }

            calendar.appendChild(daySquare);    
        }
        }

        function closeModal() {
        eventTitleInput.classList.remove('error');
        newEventModal.style.display = 'none';
        deleteEventModal.style.display = 'none';
        backDrop.style.display = 'none';
        eventTitleInput.value = '';
        clicked = null;
        load();
        }

        function saveEvent() {
        if (eventTitleInput.value) {
            eventTitleInput.classList.remove('error');

            events.push({
            date: clicked,
            title: eventTitleInput.value,
            });

            localStorage.setItem('events', JSON.stringify(events));
            closeModal();
        } else {
            eventTitleInput.classList.add('error');
        }
        }

        function deleteEvent() {
        events = events.filter(e => e.date !== clicked);
        localStorage.setItem('events', JSON.stringify(events));
        closeModal();
        }

        function initButtons() {
        document.getElementById('nextButton').addEventListener('click', () => {
            nav++;
            load();
        });

        document.getElementById('backButton').addEventListener('click', () => {
            nav--;
            load();
        });

        document.getElementById('saveButton').addEventListener('click', saveEvent);
        document.getElementById('cancelButton').addEventListener('click', closeModal);
        document.getElementById('deleteButton').addEventListener('click', deleteEvent);
        document.getElementById('closeButton').addEventListener('click', closeModal);
        }

        initButtons();
        load();

    </script>
</body>
</html>