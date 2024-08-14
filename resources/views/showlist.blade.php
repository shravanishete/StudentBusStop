<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Bus Stop List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
        .action-buttons button {
            margin-right: 5px;
            padding: 5px 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .edit-button {
            background-color: #4CAF50;
            color: white;
        }
        .delete-student-button {
            background-color: #f44336;
            color: white;
        }
        .delete-stop-button {
            background-color: #f44336;
            color: white;
        }
        .show-report-button {
            background-color: #008CBA;
            color: white;
        }
    </style>
</head>
<body>
    <h2 style="text-align: center;">Student Bus Stop List</h2>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Student Name</th>
                <th>Contact</th>
                <th>Stop Name</th>
                <th>Fee (RS)</th>
                <th>Time</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <!-- Loop through your stops data here and populate the table rows -->
            @foreach ($stops as $stop)
            <tr>
                <td>{{ $stop->id }}</td>
                <td>{{ $stop->studentname }}</td>
                <td>{{ $stop->contact }}</td>
                <td>{{ $stop->stopname }}</td>
                <td>{{ $stop->fee }}</td>
                <td>{{ $stop->time }}</td> 
                <td class="action-buttons">
                    <button class="edit-button">Edit</button>
                    <button class="delete-student-button">Delete Student</button>
                    <button class="delete-stop-button">Delete Stop</button>
                    <button class="show-report-button">Show Report</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
