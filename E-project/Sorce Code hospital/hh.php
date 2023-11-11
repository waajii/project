<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vaccination Schedule</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .schedule {
            border-collapse: collapse;
            width: 80%;
            margin: 20px auto;
        }
        .schedule th, .schedule td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }
        .schedule th {
            background-color: #f2f2f2;
        }
        .schedule tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .schedule tr:hover {
            background-color: #e0e0e0;
        }
    </style>
</head>
<body>
    <h1>Vaccination Schedule</h1>
    <table class="schedule">
        <tr>
            <th>Date</th>
            <th>Time Slot</th>
            <th>Vaccine Type</th>
            <th>Status</th>
        </tr>
        <tr>
            <td>2023-11-01</td>
            <td>10:00 AM - 11:00 AM</td>
            <td>Pfizer</td>
            <td>Available</td>
        </tr>
        <tr>
            <td>2023-11-02</td>
            <td>2:00 PM - 3:00 PM</td>
            <td>Moderna</td>
            <td>Booked</td>
        </tr>
        <tr>
            <td>2023-11-03</td>
            <td>9:00 AM - 10:00 AM</td>
            <td>Johnson & Johnson</td>
            <td>Available</td>
        </tr>
        <!-- Add more rows for other dates and times -->
    </table>
</body>
</html>