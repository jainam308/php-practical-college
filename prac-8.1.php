<h1> Vora Jainam(216090307030)</h1>
<h1>Employee Information Form</h1>
<form action="prac-8.2.php" method="POST">
    <label for="name">Name:</label>
    <input type="text" name="name"><br><br>
    <label for="email">Email:</label>
    <input type="email" name="email"><br><br>
    <label for="phone">Phone:</label>
    <input type="text" name="phone"><br><br>
    <label for="address">Address:</label>
    <textarea name="address"></textarea><br><br>
    <label for="department">Department:</label>
    <select name="department">
        <option value="hr">Human Resources</option>
        <option value="it">Information Technology</option>
        <option value="sales">Sales</option>
        <option value="finance">Finance</option>
    </select><br><br>

    <label for="salary">Salary:</label>
    <input type="number" name="salary"><br><br>
    <input type="submit" value="Submit">
</form>