<!-- loadingpage.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <style>
        body, html {
            margin: 0;
            height: 100%;
            overflow: hidden;
        }
        div {
            margin-top: 0.3%;
            margin-left: 85.5%;
            width: 18%;
            height: 18%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        video {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
</head>
<body>
    <!-- Your loading screen content -->
    <div>
        <video autoplay muted loop>
            <source src="assets/img/logos/LOADING_COMETAL.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>

    <script>
        setTimeout(function () {
            // Redirect to the specified path after 3 seconds (adjust as needed)
            window.location.href = '{{ $redirectPath }}';
        }, 5000); // 3000 milliseconds = 3 seconds
    </script>
</body>
</html>
