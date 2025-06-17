<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>راهنمای استفاده از V2Ray</title>
    <style>
        body {
            font-family: Tahoma, Arial, sans-serif;
            background: linear-gradient(120deg, #e0eafc 0%, #cfdef3 100%);
            color: #222;
            direction: rtl;
            margin: 0;
            padding: 0;
            min-height: 100vh;
        }
        .guide-container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 90vh;
            padding: 16px;
        }
        .guide-box {
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 4px 24px #b9d3f7;
            padding: 32px 40px;
            max-width: 520px;
            width: 100%;
            margin: 0 auto;
            transition: box-shadow 0.2s;
        }
        .guide-box:hover {
            box-shadow: 0 6px 36px #a3bfe8;
        }
        h2 {
            color: #2a7ae2;
            margin-bottom: 18px;
            font-size: 2rem;
            text-align: center;
        }
        .tips {
            background: #e3f2fd;
            border-right: 4px solid #2196f3;
            padding: 12px 20px;
            border-radius: 8px;
            margin-bottom: 24px;
            font-size: 1.08rem;
        }
        ol, ul {
            margin: 0 0 0 20px;
            padding: 0;
        }
        ol > li {
            margin-bottom: 18px;
            line-height: 1.8;
            font-size: 1.08rem;
        }
        ul {
            margin-top: 8px;
        }
        ul li {
            margin-bottom: 8px;
            font-size: 1rem;
        }
        .copy-section {
            margin-top: 32px;
            display: flex;
            flex-direction: column;
            align-items: stretch;
            gap: 10px;
        }
        .open-source-link {
            display: inline-block;
            margin: 30px 0 0 0;
            color: #1976d2;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.2s;
        }
        .open-source-link:hover {
            color: #0d47a1;
            text-decoration: underline;
        }
        .copy-btn {
            background: linear-gradient(90deg, #42a5f5 0%, #1976d2 100%);
            color: #fff;
            border: none;
            border-radius: 6px;
            padding: 12px 0;
            font-size: 1.08rem;
            cursor: pointer;
            font-family: inherit;
            transition: background 0.2s;
        }
        .copy-btn:hover {
            background: linear-gradient(90deg, #1976d2 0%, #42a5f5 100%);
        }
        @media (max-width: 600px) {
            .guide-box {
                padding: 16px 8px;
                max-width: 98vw;
            }
            h2 {
                font-size: 1.3rem;
            }
        }
    </style>
</head>
<body>
    <div class="guide-container">
        <div class="guide-box">
            <h2>راهنمای استفاده از V2Ray</h2>
            <div class="tips">
                برای فردایی بهتر به دور از جنگ، مراحل زیر را دنبال کنید:
            </div>
            <ol>
                <li>
                    <strong>دریافت کانفیگ:</strong>
                    <br>
                    روی <b>دریافت کانفیگ</b> کلیک کنید.
                </li>
                <li>
                    <strong>افزودن کانفیگ به V2Ray:</strong>
                    <ul>
                        <li>برنامه <b>V2Ray</b> را باز کنید.</li>
                        <li>روی علامت <b>+</b> بزنید.</li>
                        <li>گزینه دوم را انتخاب کنید.</li>
                        <li>کار تمام است.</li>
                    </ul>
                </li>
                <li>
                    <strong>حذف کانفیگ‌های اضافی:</strong>
                    <ul>
                        <li>روی سه نقطه بالا سمت چپ کلیک کنید.</li>
                        <li>سومین گزینه از پایین را انتخاب کنید.</li>
                        <li>چند لحظه صبر کنید.</li>
                        <li>چهارمین گزینه را انتخاب کنید.</li>
                    </ul>
                </li>
            </ol>
            <div class="copy-section">
                
                <input type="text" value="" hidden id="myInput">
                <button class="copy-btn" onclick="fetchAndCopyConfig()">دریافت و کپی کانفیگ</button>
            </div>
            <a href="https://github.com/mrmp98/v2ray-config" class="open-source-link" target="_blank" rel="noopener">مشاهده سورس پروژه در گیت‌هاب</a>
        </div>
    </div>
    <script>
       
        async function fetchAndCopyConfig() {
            const url = "https://raw.githubusercontent.com/barry-far/V2ray-config/main/All_Configs_Sub.txt";
            try {
                const response = await fetch(url);
                if (!response.ok) throw new Error('Fetch error');
                const text = await response.text();
                
                const input = document.getElementById("myInput");
                input.value = text.trim();
                input.type = "text"; 
                input.select();
                input.setSelectionRange(0, 9999999);
                await navigator.clipboard.writeText(input.value);
                input.type = "hidden";
                alert("کانفیگ با موفقیت کپی شد!");
            } catch (e) {
                alert("دریافت کانفیگ با خطا مواجه شد!");
            }
        }
    </script>
</body>
</html>