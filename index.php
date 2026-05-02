cat > /home/ubuntu/cicd/index.php << 'EOF'
<?php
echo '<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            background-color: #1a1a2e;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        h1 {
            color: #e94560;
            font-family: Arial, sans-serif;
            font-size: 3em;
            text-align: center;
            text-shadow: 2px 2px 8px #ff0000;
        }
    </style>
</head>
<body>';
echo "<h1>Hello CI/CD World</h1>";
echo "<h1>Hello CI/CD World!!!!</h1>";
echo '</body>
</html>';
?>
EOF
