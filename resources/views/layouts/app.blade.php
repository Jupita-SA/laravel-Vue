<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Add this to your HTML file -->
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
   <link href="https://cdn.jsdelivr.net/npm/vuetify@2.5.14/dist/vuetify.min.css" rel="stylesheet">

    <!-- Vuetify scripts -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vuetify@2.5.14/dist/vuetify.js"></script>


    <title>Your App Title</title>
    <!-- Add your stylesheets, scripts, etc. here -->
</head>
<body>
    <div id="app">
        <!-- Include the Navbar component -->
        <navbar></navbar>

        <!-- The rest of your layout content goes here -->
        @yield('content')
    </div>

</body>
</html>
