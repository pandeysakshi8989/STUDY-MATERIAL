<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Developer Dashboard</title>
    <link rel="stylesheet" href="developer_style.css">
</head>
<body>
    <div class="container">
        <h1>Developer Dashboard</h1>
        <h2>User Suggestions</h2>
        <table id="suggestionsTable">
            <thead>
                <tr>
                    <th>Suggestion</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="suggestionsBody">
                <!-- Suggestions will be populated here -->
            </tbody>
        </table>
        <h2>Add or Update Webpage Content</h2>
        <form id="updateForm">
            <textarea id="content" placeholder="Update webpage content here..." required></textarea>
            <button type="submit">Submit Update</button>
        </form>
    </div>
    <script src="developer_script.js"></script>
</body>
</html>
