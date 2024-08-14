<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Student Bus Stop Form</title>
<style>
    body {
        margin-right: 52%;
        margin-top: 10%;
        padding: 10px;
        background-image: url('https://vectorain.com/wp-content/uploads/2017/02/Pr%20054%20-%20TRI%20-%2022_10_10%20-%20010.jpg'); /* Replace 'background.jpg' with your actual background image path */
        background-position: right center;
        background-size: 50%;
        background-repeat: no-repeat;
        font-family: Arial, sans-serif;
        display: flex;
        justify-content: flex-end;
        align-items: center;
        height: 70vh;
    }
    .container {
        margin-top: -90px;
        margin-right: 20px;
        width: 450px;
        background-color: rgba(255, 255, 255, 0.7);
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    }
    input[type="text"], input[type="number"] {
        width: calc(100% - 12px);
        margin-bottom: 10px;
        padding: 6px;
        font-size: 20px;
    }
    button {
        width: 100%;
        font-size: 18px;
        padding: 10px;
        background-color: rgb(223, 223, 20);
        color: rgb(58, 59, 4);
        border: none;
        border-radius: 20px;
        cursor: pointer;
    }
    button:hover {
        background-color: #c77f13;
        
    }
</style>
</head>
<body>
    <div class="container">
 
    <h2 style="text-align: center;font-style:Bernard MT Co; color:rgb(58, 59, 4); font-size:45px;text-shadow: 6px 6px rgb(235, 235, 144);">School Chale Hum!!</h2>
    <form id="busStopForm" action="{{route('stops.store')}}" method="POST">
    @csrf
        <label for="studentName">Student Name:</label>
        <input type="text" id="studentName" name="studentName" required>

        <label for="contact">Contact:</label>
        <input type="text" id="contact" name="contact" required>

        <label for="stopName">Stop Name:</label>
        <input type="text" id="stopName" name="stopName" required>

        <label for="fee">Fee (in RS):</label>
        <input type="number" id="fee" name="fee" required>

        <label for="time">Time :</label>
        <input type="text" id="time" name="time" required>

        <button type="submit">Submit</button>
    </form>
</div>

<script>
    document.getElementById("busStopForm").addEventListener("submit", function(event) {
        event.preventDefault();
        // You can handle form submission here, e.g., send form data to server
        alert("Form submitted successfully!");
        this.reset();
    });
</script>
</body>
</html>
