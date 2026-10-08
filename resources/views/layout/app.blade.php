<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f5f6fa;
            margin: 0;
            padding: 0;
        }

        nav {
            background: #2c3e50;
            color: white;
            padding: 15px;
            display: flex;
            justify-content: space-between;
        }

        nav a {
            color: white;
            margin-right: 15px;
            text-decoration: none;
        }

        .container {
            max-width: 1000px;
            margin: 20px auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background: #ecf0f1;
        }

        .btn {
            padding: 6px 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .btn-primary {
            background: #3498db;
            color: white;
        }

        .btn-danger {
            background: #e74c3c;
            color: white;
        }

        .btn-warning {
            background: #f39c12;
            color: white;
        }

        /* modal */
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.4);
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            width: 500px;
            max-width: 90%;
        }

        .modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .close {
            cursor: pointer;
            font-size: 22px;
            font-weight: bold;
        }

        .form-group {
            margin-bottom: 10px;
        }

        input,
        select {
            padding: 6px;
            width: 100%;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .alert {
            background: #2ecc71;
            color: white;
            padding: 8px;
            border-radius: 4px;
            margin-bottom: 10px;
            display: none;
        }
    </style>
</head>

<body>
    @include('layout.navbar')
    <div class="container">
        @yield('content')
    </div>

    <script>
        function openModal(id) {
            document.getElementById(id).style.display = 'flex';
        }
        function closeModal(id) {
            document.getElementById(id).style.display = 'none';
        }
        window.onclick = function (event) {
            document.querySelectorAll('.modal').forEach(modal => {
                if (event.target == modal) modal.style.display = 'none';
            });
        }
    </script>
</body>

</html>