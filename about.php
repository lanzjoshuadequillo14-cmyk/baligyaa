<?php
// You can add PHP logic here if needed later
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="styles.css">

    <style>
        /* Reset */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Body */
body {
   
    background-color:white;
    color: #ddd;
    line-height: 1.6;
    font-family: 'Georgia', serif;
}

/* Section */
.about {
    width: 80%;
    margin: auto;
    padding: 40px 0;
}

/* Title */
.about h1 {
    text-align: center;
    color:black;
    margin-bottom: 30px;
}

/* Cards */
.card {
    background:gray;
    padding: 25px;
    margin-bottom: 25px;
    border-radius: 10px;
}

/* Headings */
.card h2 {
    color:black;
    margin-bottom: 15px;
}

.card p {
    margin-bottom: 10px;
}

/* List */
.card ul {
    padding-left: 20px;
}

.card ul li {
    margin-bottom: 8px;
}

/* Team */
.team-member {
    display: flex;
    align-items: center;
    margin-bottom: 20px;
}

/* Images */
.team-member img {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    margin-right: 20px;
    object-fit: cover;
}

/* Names */
.team-member h3 {
    color: #ff6b6b;
}

/* Role */
.team-member h4 {
    color:black;
    margin: 5px 0;
}

/* Responsive */
@media (max-width: 768px) {
    .about {
        width: 95%;
    }

    .team-member {
        flex-direction: column;
        text-align: center;
    }

    .team-member img {
        margin-bottom: 10px;
    }
}



    </style>

</head>
<body>

    <section class="about">
        <h1>About Us</h1>

        
        <div class="card">
            <h2>Our Mission</h2>
            <p>
                At <strong>UNESSENTIAL</strong>, our goal is to provide you a product that you might not use today but in future
            </p>
            <p>
                To provide users with a fun and engaging platform that showcases unique, creative, and non-essential products, making product discovery entertaining and enjoyable.
            </p>
        </div>

       
        <div class="card">
            <h2>Our Goal</h2>
            <p>To become a leading online destination where people explore and discover unusual, innovative, and interesting products that spark curiosity and creativity.</p>
            <ul>
                <li>To entertain and inspire users by sharing creative and uncommon products.</li>
                <li>To be the go-to website for discovering fun and unique non-essential items.</li>
                <li>To become a popular website where people go to discover fun, unique, and interesting products that make life more enjoyable.</li>
            </ul>
        </div>

       
        <div class="card">
            <h2>Meet Our Team</h2>

            <div class="team-member">
                <img src="PICS/jois.png" alt="jois">
                <div>
                    <h3>JOIS ANN APOLONIO</h3>
                    <h4>CEO</h4>
                    <p>Leader of the Business</p>
                </div>
            </div>

            <div class="team-member">
                <img src="PICS/sintos.png" alt="daryl">
                <div>
                    <h3>MELODY SINTOS</h3>
                    <h4>MANAGER</h4>
                    <p>Manager of the Business, planning, organizing, leading, and controlling the team operation. </p>
                </div>
            </div>

            <div class="team-member">
                <img src="PICS/permalan.png" alt="permalan">
                <div>
                    <h3>RICARDO PERMALAN III</h3>
                    <h4>ACCOUNTNG</h4>
                    <p>Expert in payment processes and manage account and budgets</p>
                </div>
            </div>

            <div class="team-member">
                <img src="PICS/togs.png" alt="SINTOS">
                <div>
                    <h3>DARYL GABUNAL</h3>
                    <h4>DEVELOPER</h4>
                    <p>Website Developer</p>
                </div>
            </div>

         <div class="team-member">
                <img src="PICS/lanz.png" alt="LANZ">
                <div>
                    <h3>LANZ DEQUILLO</h3>
                    <h4>ADMINISTRATIVE</h4>
                    <p>Handles office works, scheduling, and documentation</p>
                </div>
            </div>

             <div class="team-member">
                <img src="PICS/dave.png" alt="DAVE">
                <div>
                    <h3>DAVE GALLAZA</h3>
                    <h4>ON THE JOB TRAINING</h4>
                    <p>Learning role, temporary or probationary.</p>
                </div>
            </div>

        </div>

    </section>

</body>
</html>