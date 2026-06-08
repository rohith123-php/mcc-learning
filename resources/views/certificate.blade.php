<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Official Certificate | Madras Christian College</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,700;0,900;1,700&family=Great+Vibes&family=Montserrat:wght@400;600;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --maroon: #800000;
            --gold: #b8860b;
            --ivory: #fffdf5;
            --text: #2c3e50;
        }

        body {
            margin: 0;
            padding: 0;
            background: #d1d9e6;
            font-family: 'Montserrat', sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
        }

        /* 🛠️ Modern Toolbar */
        .toolbar {
            width: 100%;
            padding: 20px 0;
            background: rgba(255, 255, 255, 0.98);
            display: flex;
            justify-content: center;
            gap: 20px;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 4px 20px rgba(0,0,0,0.08);
        }

        .btn {
            padding: 12px 30px;
            border-radius: 10px;
            font-weight: 700;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            transition: 0.3s;
            cursor: pointer;
            border: none;
            font-size: 0.9rem;
        }

        .btn-maroon { background: var(--maroon); color: white; }
        .btn-maroon:hover { background: #5a0000; transform: translateY(-2px); }
        .btn-white { background: white; color: var(--text); border: 1px solid #e2e8f0; }
        .btn-white:hover { border-color: var(--maroon); color: var(--maroon); }

        /* 📜 The Certificate Canvas */
        .canvas-area {
            padding: 60px 20px;
        }

        .certificate-card {
            width: 1000px; /* Reduced width for better proportions */
            height: 750px;
            background: var(--ivory);
            background-image: radial-gradient(#00000005 1px, transparent 0);
            background-size: 20px 20px;
            position: relative;
            box-shadow: 0 40px 80px rgba(0,0,0,0.2);
            border: 20px solid var(--maroon); /* Thinner border for elegance */
            box-sizing: border-box;
            display: flex;
            flex-direction: column;
            padding: 10px;
        }

        .gold-border {
            border: 3px solid var(--gold);
            height: 100%;
            width: 100%;
            padding: 40px 60px; /* Increased vertical padding */
            box-sizing: border-box;
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        /* 🏰 Header Section - Improved Spacing */
        .cert-header {
            margin-bottom: 30px;
            width: 100%;
            position: relative;
        }

        .university-logo {
            font-size: 2.8rem;
            color: var(--maroon);
            margin-bottom: 15px;
            display: block;
        }

        .university-name {
            font-family: 'Playfair Display', serif;
            font-size: 2.8rem; /* Slightly smaller for proper fit */
            font-weight: 900;
            color: var(--maroon);
            margin: 0;
            line-height: 1.2;
            text-transform: uppercase;
        }

        .university-status {
            font-size: 0.9rem;
            color: var(--gold);
            font-weight: 800;
            letter-spacing: 5px;
            text-transform: uppercase;
            margin-top: 5px;
        }

        .ornate-divider {
            width: 200px;
            height: 1.5px;
            background: linear-gradient(to right, transparent, var(--gold), transparent);
            margin: 25px auto;
        }

        /* 🖋️ Body Section */
        .award-type {
            font-family: 'Playfair Display', serif;
            font-size: 2.4rem;
            font-style: italic;
            color: var(--text);
            margin-bottom: 20px;
            font-weight: 700;
        }

        .cert-intro {
            font-size: 1.1rem;
            color: #5d6d7e;
            margin-bottom: 10px;
            font-weight: 500;
        }

        .recipient-name {
            font-family: 'Great Vibes', cursive;
            font-size: 4.8rem;
            color: var(--maroon);
            margin: 10px 0;
        }

        .course-intro {
            font-size: 1rem;
            color: #5d6d7e;
            margin-bottom: 15px;
            line-height: 1.6;
            max-width: 600px;
        }

        .course-title {
            font-family: 'Playfair Display', serif;
            font-size: 1.8rem;
            font-weight: 900;
            color: var(--maroon);
            text-transform: uppercase;
            letter-spacing: 1px;
            padding: 5px 0;
            border-bottom: 1.5px solid var(--gold);
        }

        .grade-highlight {
            margin-top: 25px;
            font-size: 1.1rem;
            font-weight: 700;
            color: var(--text);
        }

        .grade-highlight span {
            color: var(--maroon);
            font-size: 1.4rem;
            margin-left: 5px;
        }

        /* 🛡️ Signature Section */
        .cert-footer {
            margin-top: auto; /* Push to bottom */
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
            padding-top: 40px;
        }

        .sig-container {
            width: 200px;
            text-align: center;
        }

        .sig-line {
            border-top: 1px solid var(--text);
            margin-bottom: 8px;
        }

        .sig-label {
            font-size: 0.75rem;
            font-weight: 700;
            color: #7f8c8d;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .gold-seal {
            width: 90px;
            height: 90px;
            background: var(--gold);
            border-radius: 50%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            color: white;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            border: 3px double white;
        }

        .seal-logo { font-size: 1.6rem; margin-bottom: 2px; }
        .seal-text { font-size: 0.5rem; font-weight: 900; letter-spacing: 1px; }

        .verification {
            margin-top: 30px;
            font-size: 0.7rem;
            color: #bdc3c7;
            font-family: monospace;
            letter-spacing: 1px;
        }

        /* 🖨️ Print Styles */
        @media print {
            .toolbar { display: none !important; }
            body { background: white !important; }
            .canvas-area { padding: 0 !important; }
            .certificate-card { 
                box-shadow: none !important; 
                width: 100vw !important; 
                height: 100vh !important; 
                border-width: 20px !important;
                margin: 0 !important;
            }
        }
    </style>
</head>
<body>

    <div class="toolbar no-print">
        <a href="{{ route('student.portal') }}" class="btn btn-white">
            <i class="fas fa-chevron-left me-2"></i> Back to Portal
        </a>
        <button onclick="window.print()" class="btn btn-maroon">
            <i class="fas fa-print me-2"></i> Print Official Certificate
        </button>
    </div>

    <div class="canvas-area">
        <div class="certificate-card">
            <div class="gold-border">
                
                <div class="cert-header">
                    <i class="fas fa-graduation-cap university-logo"></i>
                    <h1 class="university-name">Madras Christian College</h1>
                    <div class="university-status">(Autonomous)</div>
                    <div class="ornate-divider"></div>
                </div>

                <div class="cert-body">
                    <div class="award-type">Certificate of Achievement</div>
                    
                    <div class="cert-intro">This is to recognize that</div>
                    <div class="recipient-name">Alex Kumar</div>
                    
                    <div class="course-intro">
                        has demonstrated outstanding academic excellence and successfully completed 
                        the professional university program in
                    </div>
                    
                    <div class="course-title">{{ request('title', 'Excellence in Web Tech') }}</div>
                    
                    <div class="grade-highlight">
                        Cumulative Performance Grade: <span>{{ request('grade', 'A+') }}</span>
                    </div>
                </div>

                <div class="cert-footer">
                    <div class="sig-container">
                        <div class="sig-line"></div>
                        <div class="sig-label">Program Coordinator</div>
                    </div>

                    <div class="gold-seal">
                        <i class="fas fa-building-columns seal-logo"></i>
                        <div class="seal-text">OFFICIAL SEAL</div>
                    </div>

                    <div class="sig-container">
                        <div class="sig-line"></div>
                        <div class="sig-label">Academic Principal</div>
                    </div>
                </div>

                <div class="verification">
                    Certificate ID: MCC-{{ strtoupper(Str::random(12)) }} • Issued on {{ date('d M Y') }}
                </div>

            </div>
        </div>
    </div>

</body>
</html>
