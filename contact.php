<?php
// You can add PHP logic here if needed later
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CONTACT US</title>
  <style>
    body {
       font-family: 'Georgia', serif;
      background-color:white;
      color: #fff;
      margin: 0;
      padding: 0;
    }
    .contact-section {
      max-width: 1200px;
      margin: auto;
      padding: 40px 20px;
    }
    h1 {
      text-align: center;
      color: black;
      margin-bottom: 40px;
    }
    .contact-info {
      display: flex;
      justify-content: space-between;
      flex-wrap: wrap;
      margin-bottom: 40px;
    }
    .info-box {
      flex: 1;
      min-width: 250px;
      background: gray;
      margin: 10px;
      padding: 20px;
      border-radius: 8px;
      text-align: center;
    }
    .info-box h2 {
      color:black;
      margin-bottom: 15px;
    }
    .contact-form {
      background:gray;
      padding: 30px;
      border-radius: 8px;
      max-width: 600px;
      margin: auto;
    }
    .contact-form h2 {
      text-align: center;
      color: black;
      margin-bottom: 20px;
    }
    .contact-form label {
      display: block;
      margin-top: 15px;
      font-weight: bold;
    }
    .contact-form input,
    .contact-form textarea {
      width: 100%;
      padding: 10px;
      margin-top: 5px;
      border: none;
      border-radius: 4px;
    }
    .contact-form button {
      margin-top: 20px;
      width: 100%;
      padding: 12px;
      background-color: #ff3b3b;
      color: #fff;
      border: none;
      border-radius: 4px;
      font-size: 16px;
      cursor: pointer;
    }
    .contact-form button:hover {
      background-color: #cc2e2e;
    }
  </style>
</head>
<body>
  <section class="contact-section">
    <h1>CONTACT US</h1>
    <div class="contact-info">
      <div class="info-box">
        <h2>Address</h2>
        <p>123 Fitness Street<br>Binalbagan, Philippines<br>1607</p>
      </div>
      <div class="info-box">
        <h2>Phone & Email</h2>
        <p>Phone: +63 912 345 6789<br>Email: info@unessential.com</p>
      </div>
      <div class="info-box">
        <h2>Opening Hours</h2>
        <p>Mon - Fri: 5:00 AM - 10:00 PM<br>Saturday: 7:00 AM - 8:00 PM<br>Sunday: Rest</p>
      </div>
    </div>
    <div class="contact-form">
      <h2>Send Us a Message</h2>
      <form action="mailto:info@fitnessclub.com" method="post" enctype="text/plain">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>

        <label for="message">Message</label>
        <textarea id="message" name="message" rows="6" required></textarea>

        <button type="submit">Send Message</button>
      </form>
    </div>
  </section>
</body>
</html>
