<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skill-Skill yang Mempermudah Penggunaan Komputer - Nesaga Learning Community</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;700&family=Inter:wght@400;500;600&family=Fira+Code:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        /* SETUP & RESET */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            background-color: #0f172a;
            display: grid;
            gap: 32px;
            grid-template-columns: 1fr;
            margin: 0;
            min-height: 100vh;
            padding: 40px 0;
            place-items: center;
            font-family: 'Inter', sans-serif;
            color: #334155;
        }

        /* SLIDE CONTAINER (1280x720 Fixed Aspect Ratio) */
        .slide-container {
            align-items: flex-start;
            background-color: #ffffff;
            border-radius: 16px;
            box-shadow: 0 20px 30px -10px rgba(0, 0, 0, 0.4);
            display: flex;
            flex-direction: column;
            height: 720px;
            justify-content: flex-start;
            overflow: hidden;
            padding: 50px 60px;
            position: relative;
            width: 1280px;
        }

        /* BACKGROUND DECORATIVE PATTERN */
        .slide-container::before {
            content: '';
            position: absolute;
            top: -120px;
            right: -120px;
            width: 380px;
            height: 380px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(79, 70, 229, 0.08) 0%, rgba(255, 255, 255, 0) 70%);
            z-index: 0;
            pointer-events: none;
        }

        .slide-container > * {
            position: relative;
            z-index: 1;
        }

        /* TYPOGRAPHY */
        h1, h2, h3, h4 {
            font-family: 'Poppins', sans-serif;
            color: #0f172a;
        }

        p, li, td, th {
            color: #334155;
            font-size: 16px;
            line-height: 1.6;
        }

        .slide-title {
            font-size: 34px;
            font-weight: 700;
            color: #0f172a;
            margin-bottom: 24px;
            text-align: left;
            width: 100%;
            letter-spacing: -0.5px;
            border-bottom: 2px solid #e2e8f0;
            padding-bottom: 12px;
        }

        /* CONTENT AREA LAYOUT */
        .content-area {
            align-items: stretch;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
            justify-content: center;
            width: 100%;
        }

        /* TITLE SLIDE SPECIFIC */
        .title-layout {
            align-items: center;
            display: flex;
            flex-direction: column;
            height: 100%;
            justify-content: center;
            text-align: center;
            width: 100%;
        }

        .title-layout .badge {
            background-color: #e0e7ff;
            color: #4338ca;
            padding: 8px 20px;
            border-radius: 20px;
            font-size: 15px;
            font-weight: 600;
            margin-bottom: 24px;
            text-transform: uppercase;
            letter-spacing: 1.5px;
        }

        .title-layout h1 {
            font-size: 50px;
            line-height: 1.2;
            margin-bottom: 18px;
            color: #1e1b4b;
        }

        .title-layout p {
            max-width: 800px;
            font-size: 20px;
            color: #475569;
        }

        /* TWO COLUMN LAYOUTS */
        .two-column {
            display: grid;
            grid-template-columns: 1fr 1fr;
            ga
