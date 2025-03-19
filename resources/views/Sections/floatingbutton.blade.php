<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Floating Button</title>
    <style>
        /* Floating Button Wrapper */
        .fab-container-unique {
            position: fixed;
            bottom: 20px;
            right: 95%;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        /* Main Floating Button */
        .fab-main-unique {
            width: 60px;
            height: 60px;
            background-color: #ff5722;
            border-radius: 50%;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.3);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 28px;
            cursor: pointer;
            transition: all 0.3s ease-in-out;
            position: relative;
            z-index: 2;
        }

        .fab-main-unique:hover {
            background-color: #e64a19;
            transform: scale(1.1);
        }

        /* Floating Menu */
        .fab-menu-unique {
            display: flex;
            flex-direction: column;
            align-items: center;
            position: absolute;
            bottom: 70px;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease-in-out;
        }

        .fab-menu-unique.active {
            opacity: 1;
            visibility: visible;
        }

        /* Individual Menu Items */
        .fab-item-unique {
            width: 50px;
            height: 50px;
            background-color: #2196f3;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            margin: 8px 0;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.3);
            cursor: pointer;
            transition: transform 0.2s;
        }

        .fab-item-unique:hover {
            transform: scale(1.1);
            background-color: #1976d2;
        }

        /* Icons inside the menu */
        .fab-icon-unique {
            font-size: 20px;
        }
    </style>
</head>
<body>

    <!-- Floating Button -->
    <div class="fab-container-unique">
        <div class="fab-main-unique" onclick="toggleFabMenuUnique()">+</div>
        <div class="fab-menu-unique">
            <div class="fab-item-unique" onclick="alert('Home Clicked!')">🏠</div>
            <div class="fab-item-unique" onclick="alert('Message Clicked!')">💬</div>
            <div class="fab-item-unique" onclick="alert('Settings Clicked!')">⚙️</div>
        </div>
    </div>

    <script>
        function toggleFabMenuUnique() {
            document.querySelector(".fab-menu-unique").classList.toggle("active");
        }
    </script>

</body>
</html>
