<?php
// 定义章节数据数组，包含中文名称（来自文档）、日语名称（对应翻译）和链接ID
// 数据来源：文档《EJU数学考试大纲.2docx.docx》章节列表 
$chapters = [
    [
        'id' => 'ch1',
        'jp' => '第1章：数と式 (数学I)',
        'cn' => '第1章：数与式（数学I）',
        'color' => 'linear-gradient(135deg, #FF9A9E 0%, #FECFEF 100%)' // 暖粉色
    ],
    [
        'id' => 'ch2',
        'jp' => '第2章：2次関数 (数学I)',
        'cn' => '第2章：二次函数（数学I）',
        'color' => 'linear-gradient(135deg, #a18cd1 0%, #fbc2eb 100%)' // 紫粉色
    ],
    [
        'id' => 'ch3',
        'jp' => '第3章：図形と計量 (数学I)',
        'cn' => '第3章：图形与计量（数学I）',
        'color' => 'linear-gradient(135deg, #84fab0 0%, #8fd3f4 100%)' // 清新蓝绿
    ],
    [
        'id' => 'ch4',
        'jp' => '第4章：場合の数と確率 (数学A)',
        'cn' => '第4章：计数与概率（数学A）',
        'color' => 'linear-gradient(135deg, #fccb90 0%, #d57eeb 100%)' // 橙紫渐变
    ],
    [
        'id' => 'ch5',
        'jp' => '第5章：整数の性質',
        'cn' => '第5章：整数的性质',
        'color' => 'linear-gradient(135deg, #e0c3fc 0%, #8ec5fc 100%)' // 淡紫蓝
    ],
    [
        'id' => 'ch6',
        'jp' => '第6章：図形の性質',
        'cn' => '第6章：图形的性质',
        'color' => 'linear-gradient(135deg, #f093fb 0%, #f5576c 100%)' // 玫红色
    ],
    [
        'id' => 'ch7',
        'jp' => '第7章：いろいろな式 (数学II)',
        'cn' => '第7章：多种形式的代数式（数学II）',
        'color' => 'linear-gradient(135deg, #4facfe 0%, #00f2fe 100%)' // 亮蓝色
    ],
    [
        'id' => 'ch8',
        'jp' => '第8章：図形と方程式 (数学II)',
        'cn' => '第8章：图形与方程（数学II）',
        'color' => 'linear-gradient(135deg, #43e97b 0%, #38f9d7 100%)' // 翠绿色
    ],
    [
        'id' => 'ch9',
        'jp' => '第9章：指数関数・対数関数 (数学II)',
        'cn' => '第9章：指数函数与对数函数（数学II）',
        'color' => 'linear-gradient(135deg, #fa709a 0%, #fee140 100%)' // 橙红黄
    ],
    [
        'id' => 'ch10',
        'jp' => '第10章：三角関数 (数学II)',
        'cn' => '第10章：三角函数（数学II）',
        'color' => 'linear-gradient(135deg, #667eea 0%, #764ba2 100%)' // 深蓝紫
    ],
    [
        'id' => 'ch11',
        'jp' => '第11章：微分・積分の考え (数学II)',
        'cn' => '第11章：微分与积分的思想（数学II）',
        'color' => 'linear-gradient(135deg, #89f7fe 0%, #66a6ff 100%)' // 天蓝色
    ],
    [
        'id' => 'ch12',
        'jp' => '第12章：数列 (数学B)',
        'cn' => '第12章：数列（数学B）',
        'color' => 'linear-gradient(135deg, #fdcbf1 0%, #e6dee9 100%)' // 淡粉灰
    ],
    [
        'id' => 'ch13',
        'jp' => '第13章：ベクトル (数学II)', 
        'cn' => '第13章：向量（数学II）', 
        'color' => 'linear-gradient(135deg, #c471f5 0%, #fa71cd 100%)' // 紫红色
    ],
    [
        'id' => 'ch14',
        'jp' => '第14章：複素数 (数学II)',
        'cn' => '第14章：复数（数学II）', 
        'color' => 'linear-gradient(135deg, #48c6ef 0%, #6f86d6 100%)' // 蓝靛色
    ]
];
?>

<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJU文科数学 - 学习中心</title>
    <style>
        :root {
            --bg-color: #f4f8fb;
            --text-main: #333;
            --card-shadow: 0 10px 20px rgba(0,0,0,0.1);
            --card-hover-shadow: 0 15px 30px rgba(0,0,0,0.2);
        }

        body {
            font-family: "Hiragino Sans", "Hiragino Kaku Gothic ProN", "Microsoft YaHei", sans-serif;
            background-color: var(--bg-color);
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
        }

        header {
            text-align: center;
            margin: 40px 0 20px;
            padding: 0 20px;
        }

        h1 {
            color: #2c3e50;
            font-size: 2.5rem;
            margin-bottom: 10px;
            letter-spacing: 2px;
        }

        p.subtitle {
            color: #7f8c8d;
            font-size: 1.1rem;
        }

        /* 核心网格布局 */
        .grid-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 25px;
            width: 90%;
            max-width: 1200px;
            padding: 20px;
            margin-bottom: 30px; /* 减少底部边距，让位于 Footer */
        }

        /* 按钮卡片样式 */
        .chapter-card {
            display: block;
            text-decoration: none;
            border-radius: 15px;
            padding: 25px 20px;
            color: white;
            position: relative;
            overflow: hidden;
            box-shadow: var(--card-shadow);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            cursor: pointer;
            text-align: center;
        }

        /* 悬停动态效果 */
        .chapter-card:hover {
            transform: translateY(-8px) scale(1.02);
            box-shadow: var(--card-hover-shadow);
        }

        /* 按钮内部文字排版 */
        .jp-title {
            display: block;
            font-size: 1.4rem;
            font-weight: 700;
            margin-bottom: 8px;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.1);
        }

        .cn-title {
            display: block;
            font-size: 0.95rem;
            opacity: 0.9;
            font-weight: 400;
        }

        /* 装饰性：背景光泽 */
        .chapter-card::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(rgba(255,255,255,0.2), rgba(255,255,255,0));
            pointer-events: none;
        }

        /* 底部版权样式 */
        footer {
            margin-top: auto; /* 将页脚推到底部 */
            padding: 40px 20px;
            text-align: center;
            color: #95a5a6;
            font-size: 0.85rem;
            width: 100%;
            box-sizing: border-box;
        }

        footer p {
            margin: 5px 0;
            letter-spacing: 1px;
        }
        
        /* 响应式调整 */
        @media (max-width: 600px) {
            h1 { font-size: 1.8rem; }
            .grid-container { width: 95%; gap: 15px; }
            .jp-title { font-size: 1.2rem; }
        }
    </style>
</head>
<body>

    <header>
        <h1>EJU 文科数学</h1>
        <p class="subtitle">EJU Liberal Arts Mathematics Syllabus</p>
    </header>

    <div class="grid-container">
        <?php foreach ($chapters as $chapter): ?>
            <a href="chapter_<?php echo $chapter['id']; ?>.php" 
               class="chapter-card" 
               style="background: <?php echo $chapter['color']; ?>;">
                
                <span class="jp-title"><?php echo htmlspecialchars($chapter['jp']); ?></span>
                <span class="cn-title"><?php echo htmlspecialchars($chapter['cn']); ?></span>
                
            </a>
        <?php endforeach; ?>
    </div>

    <footer>
        <p>版权所有：春风创意工作室</p>
        <p lang="ja">著作権所有：春風クリエイティブスタジオ</p>
    </footer>

</body>
</html>
