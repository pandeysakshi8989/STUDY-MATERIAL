<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service Provider Dashboard</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Service Provider Dashboard</h1>
        
        <h2>User Suggestions</h2>
        <table id="suggestionsTable">
            <thead>
                <tr>
                    <th>Suggestion</th>
                    <th>Status</th>
                    <th>Request Feature</th>
                </tr>
            </thead>
            <tbody id="suggestionsBody">
                <!-- Suggestions will be populated here -->
            </tbody>
        </table>

        <h2>Upload Files Related to Services</h2>
        <form id="uploadForm">
            <input type="file" id="fileInput" required />
            <textarea id="description" placeholder="Add a description..." required></textarea>
            <button type="submit">Upload</button>
        </form>
    </div>
    <script src="script.js"></script>
</body>
</html>
