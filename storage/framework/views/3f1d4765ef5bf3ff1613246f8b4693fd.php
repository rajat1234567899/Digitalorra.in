
    <style>
        .bodycontainer {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: #f5f5f5;
            margin: 0;
        }

        .stats-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: linear-gradient(270deg, #290141, #6e1c79);
            color: white;
            padding: 20px 50px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            max-width: 800px;
            width: 100%;
            position: relative;
            overflow: hidden;
        }

        .stats-container::before {
            content: "";
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.2) 10%, transparent 50%);
            animation: animateBg 5s infinite linear;
        }

        @keyframes animateBg {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        }

        .stat-box {
            text-align: center;
            flex: 1;
            position: relative;
        }

        .stat-box:not(:last-child) {
            border-right: 2px solid rgba(255, 255, 255, 0.2);
        }

        .stat-icon {
            display: inline-block;
            width: 12px;
            height: 12px;
            background: #a043e7;
            border-radius: 3px;
            margin-bottom: 8px;
        }

        .counter {
            font-size: 24px;
            font-weight: bold;
        }

        .stat-text {
            font-size: 14px;
            opacity: 0.8;
        }

        .stats-container:hover {
            cursor: url('https://cur.cursors-4u.net/cursors/cur-2/cur136.cur'), auto;
        }
    </style>
<bodycontainer>

    <div class="stats-container">
        <div class="stat-box">
            <div class="stat-icon"></div>
            <div class="counter" data-target="10000">0</div>
            <div class="stat-text">Completed Projects</div>
        </div>

        <div class="stat-box">
            <div class="stat-icon">✔</div>
            <div class="counter" data-target="30">0</div>
            <div class="stat-text">Worldwide Branches</div>
        </div>

        <div class="stat-box">
            <div class="stat-icon"></div>
            <div class="counter" data-target="8">0</div>
            <div class="stat-text">Awards Winner</div>
        </div>
    </div>

    <script>
        function startCounter() {
            const counters = document.querySelectorAll('.counter');
            counters.forEach(counter => {
                counter.innerText = '0';
                const target = +counter.getAttribute('data-target');
                const increment = target / 100;

                const updateCounter = () => {
                    const current = +counter.innerText;
                    if (current < target) {
                        counter.innerText = Math.ceil(current + increment);
                        setTimeout(updateCounter, 20);
                    } else {
                        counter.innerText = target.toLocaleString();
                    }
                };

                updateCounter();
            });
        }

        window.onload = startCounter;
    </script>

</bodycontainer>
<?php /**PATH C:\xampp\htdocs\newdigitalorra\resources\views/Sections/counter.blade.php ENDPATH**/ ?>