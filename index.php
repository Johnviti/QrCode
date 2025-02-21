<?php
$redirectUrl = "https://sistemafiea.sharepoint.com/:b:/s/observatorioregional/EZQlu8keTPVCpaB3_50vvVABmjrqQqGcI_TWygTiLtTj7g?e=UpgKax";

echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redirecionando...</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #0C4DA2;
            color: white;
            font-family: Arial, sans-serif;
            text-align: center;
        }
    </style>
    <!-- Google Tag -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-SXXWDB6XEF"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag("js", new Date());
        gtag("config", "G-SXXWDB6XEF");

        // Redirecionar após a tag ser carregada
        setTimeout(function() {
            window.location.href = "' . $redirectUrl . '";
        }, 50); // Tempo para garantir o carregamento da tag
    </script>
</head>
<body>
    <p>Você está sendo redirecionado...</p>
</body>
</html>';
exit();
?>
