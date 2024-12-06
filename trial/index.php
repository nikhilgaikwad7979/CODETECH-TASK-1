<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Upload File</h2>
        <form id="uploadForm" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="fileInput" class="form-label">Choose File</label>
                <input type="file" class="form-control" id="fileInput" name="file" required>
            </div>
            <button type="submit" class="btn btn-primary">Upload</button>
        </form>

        <div id="result"></div>

        <h3 class="mt-5">Uploaded Files</h3>
        <div id="fileList"></div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function () {
            // Handle the form submission with AJAX
            $("#uploadForm").submit(function (event) {
                event.preventDefault();

                var formData = new FormData(this);
                $.ajax({
                    url: 'upload.php',
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function (response) {
                        $('#result').html(response);
                        loadFiles(); // Reload the file list
                    },
                    error: function () {
                        $('#result').html('An error occurred.');
                    }
                });
            });

            // Load uploaded files
            function loadFiles() {
                $.ajax({
                    url: 'get_files.php',
                    type: 'GET',
                    success: function (response) {
                        $('#fileList').html(response);
                    },
                    error: function () {
                        $('#fileList').html('Failed to load files.');
                    }
                });
            }

            // Delete file when delete button is clicked
            $(document).on('click', '.delete-btn', function () {
                var fileId = $(this).data('id');
                $.ajax({
                    url: 'delete_file.php',
                    type: 'GET',
                    data: { id: fileId },
                    success: function (response) {
                        alert(response);
                        loadFiles(); // Reload the file list after deletion
                    },
                    error: function () {
                        alert('Failed to delete file.');
                    }
                });
            });

            // Load files on page load
            loadFiles();
        });
    </script>
</body>
</html>
