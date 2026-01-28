<?php
// ==========================================
// 1. 基础配置与导航数据
// ==========================================
$chapterID = 11;
$chapterTitleJP = "第11章：微分・積分の考え (数学II)";
$chapterTitleCN = "第11章：微分与积分的思想（数学II）";
// 配色方案：天蓝/深空蓝 (Sky/Deep Sky)
$colorTheme = "linear-gradient(135deg, #89f7fe 0%, #66a6ff 100%)";
$primaryColor = "#0984e3"; 
$totalChapters = 14;

// ==========================================
// 2. 内容数据库 (含 SVG 图形定义)
//    依据 EJU 考纲 第11章
// ==========================================

// A. 考点清单
$exam_points = [
    ['jp' => '微分の定義と導関数の計算（$x^n$ の微分）', 'cn' => '微分的定义与导函数的计算（$x^n$ 的微分）'],
    ['jp' => '接線の方程式', 'cn' => '切线方程'],
    ['jp' => '関数の増減と極値、グラフの描画', 'cn' => '函数的增减与极值、图像的绘制'],
    ['jp' => '不定積分と定積分の計算', 'cn' => '不定积分与定积分的计算'],
    ['jp' => '定積分と面積（曲線と$x$軸、2曲線間の面積）', 'cn' => '定积分与面积（曲线与$x$轴、两曲线间的面积）']
];

// B. 重要概念 (带 SVG 图示)
$concepts = [
    [
        'term_jp' => '微分係数 (Derivative at a point)',
        'desc_jp' => '関数 $y=f(x)$ の $x=a$ における微分係数 $f\'(a)$ は、グラフ上の点 $(a, f(a))$ における接線の傾きを表す。',
        'desc_cn' => '函数 $y=f(x)$ 在 $x=a$ 处的导数 $f\'(a)$，表示图像上点 $(a, f(a))$ 处的切线斜率。',
        // SVG: 导数切线示意
        'svg' => '<svg viewBox="0 0 200 120" class="geo-svg">
                    <line x1="20" y1="100" x2="180" y2="100" stroke="#333" stroke-width="1"/>
                    <line x1="30" y1="10" x2="30" y2="110" stroke="#333" stroke-width="1"/>
                    
                    <path d="M 40 100 Q 100 100 160 20" fill="none" stroke="#0984e3" stroke-width="2"/>
                    
                    <line x1="60" y1="105" x2="160" y2="35" stroke="#ff7675" stroke-width="1.5" stroke-dasharray="4"/>
                    
                    <circle cx="110" cy="70" r="3" fill="#333"/>
                    <line x1="110" y1="70" x2="110" y2="100" stroke="#999" stroke-dasharray="2"/>
                    <text x="105" y="115" font-size="10">a</text>
                    
                    <text x="140" y="50" font-size="10" fill="#ff7675">Slope = f\'(a)</text>
                  </svg>'
    ],
    [
        'term_jp' => '定積分と面積 (Definite Integral & Area)',
        'desc_jp' => '区間 $a \leqq x \leqq b$ で常に $f(x) \geqq 0$ のとき、定積分 $\int_a^b f(x) dx$ は曲線と $x$ 軸で囲まれた部分の面積 $S$ となる。',
        'desc_cn' => '在区间 $a \leqq x \leqq b$ 上若恒有 $f(x) \geqq 0$，则定积分 $\int_a^b f(x) dx$ 即为曲线与 $x$ 轴围成的面积 $S$。',
        // SVG: 积分面积示意
        'svg' => '<svg viewBox="0 0 200 120" class="geo-svg">
                    <line x1="20" y1="100" x2="180" y2="100" stroke="#333" stroke-width="1"/>
                    <line x1="30" y1="10" x2="30" y2="110" stroke="#333" stroke-width="1"/>
                    
                    <path d="M 60 100 L 60 60 Q 100 20 140 60 L 140 100 Z" fill="rgba(9, 132, 227, 0.2)"/>
                    
                    <path d="M 40 80 Q 100 0 160 80" fill="none" stroke="#0984e3" stroke-width="2"/>
                    
                    <line x1="60" y1="100" x2="60" y2="60" stroke="#333" stroke-dasharray="2"/>
                    <line x1="140" y1="100" x2="140" y2="60" stroke="#333" stroke-dasharray="2"/>
                    
                    <text x="55" y="115" font-size="10">a</text>
                    <text x="135" y="115" font-size="10">b</text>
                    <text x="95" y="80" font-size="14" fill="#0984e3" font-weight="bold">S</text>
                  </svg>'
    ]
];

// C. 公式理论
$formulas = [
    [
        'name_jp' => '導関数の公式',
        'content_jp' => '$y = x^n$ のとき、$y\' = nx^{n-1}$ ($n$は自然数)。<br>定数 $c$ の微分は $0$。',
        'note_jp' => '和・差・実数倍の微分もそのまま計算できる。',
        'note_cn' => '和、差、数乘的微分可直接计算。'
    ],
    [
        'name_jp' => '接線の方程式',
        'content_jp' => '曲線 $y=f(x)$ 上の点 $(a, f(a))$ における接線の方程式は：<br> $$ y - f(a) = f\'(a)(x - a) $$',
        'note_jp' => '傾き $m = f\'(a)$ と通る点 $(a, f(a))$ を使う。',
        'note_cn' => '利用斜率 $m = f\'(a)$ 和经过的点 $(a, f(a))$。'
    ],
    [
        'name_jp' => '積分の基本公式',
        'content_jp' => '$$ \int x^n dx = \frac{1}{n+1}x^{n+1} + C $$ ($C$は積分定数)',
        'note_jp' => '微分の逆演算。指数を1増やして、その数で割る。',
        'note_cn' => '微分的逆运算。指数加1，再除以该数。'
    ],
    [
        'name_jp' => '1/6公式 (面積の裏技)',
        'content_jp' => '放物線と直線で囲まれた面積：<br> $$ S = \frac{|a|}{6}(\beta - \alpha)^3 $$',
        'note_jp' => '交点の $x$ 座標が $\alpha, \beta$ のとき使える強力な公式。',
        'note_cn' => '当交点 $x$ 坐标为 $\alpha, \beta$ 时可用的强力公式。'
    ]
];

// ==========================================
// 3. 动态题库 (PHP数组 -> JSON)
// ==========================================

// 例题库
$pool_examples = [
    [
        'q_jp' => '関数 $y = x^3 - 3x$ の極値を求めよ。',
        'q_cn' => '求函数 $y = x^3 - 3x$ 的极值。',
        'think_jp' => '導関数 $y\'$ を求め、$y\'=0$ となる $x$ を探して増減表を書く。',
        'think_cn' => '求导数 $y\'$，找出 $y\'=0$ 的 $x$ 值并绘制增减表。',
        'sol' => '$y\' = 3x^2 - 3 = 3(x+1)(x-1)$ <br> $y\'=0 \implies x = \pm 1$ <br> 増減表より、<br> $x=-1$ で極大値 $2$ <br> $x=1$ で極小値 $-2$'
    ],
    [
        'q_jp' => '放物線 $y=x^2-2x$ と $x$ 軸で囲まれた部分の面積 $S$ を求めよ。',
        'q_cn' => '求抛物线 $y=x^2-2x$ 与 $x$ 轴围成的面积 $S$。',
        'think_jp' => 'グラフを書き、積分区間（交点）と上下関係を確認する。この場合 $x$ 軸の下側にあるのでマイナスをつける。',
        'think_cn' => '画图确认积分区间（交点）及上下位置。因在 $x$ 轴下方，需加负号。',
        'sol' => '交点は $x^2-2x=0 \implies x(x-2)=0 \implies x=0, 2$ <br> $0 \leqq x \leqq 2$ で $y \leqq 0$ なので <br> $S = \int_0^2 -(x^2-2x) dx = -[\frac{x^3}{3}-x^2]_0^2 = -(\frac{8}{3}-4) = \frac{4}{3}$'
    ]
];

// 技巧库
$pool_skills = [
    ['jp' => '3次関数のグラフを描くときは、極値だけでなく「$y$ 切片」も打つと正確になる。', 'cn' => '绘制三次函数图像时，除极值外，标出“$y$ 截距”会更准确。'],
    ['jp' => '面積計算で $\int_\alpha^\beta (x-\alpha)(x-\beta) dx$ の形が出たら、迷わず $\frac{1}{6}$ 公式を使う。', 'cn' => '面积计算中若出现 $\int_\alpha^\beta (x-\alpha)(x-\beta) dx$ 形式，毫不犹豫使用 $\frac{1}{6}$ 公式。'],
    ['jp' => '「接する」$\iff$ 「重解を持つ」$\iff$ 「$D=0$」。微分では「接線の傾きが一致」かつ「$y$ 座標が一致」。', 'cn' => '“相切”$\iff$“有重根”$\iff$“$D=0$”。在微分中意味着“切线斜率相等”且“$y$ 坐标相等”。']
];

// 练习库
$pool_drills = [
    ['jp' => '微分せよ： $y = 2x^3 - 5x + 1$', 'ans' => '$y\' = 6x^2 - 5$'],
    ['jp' => '積分せよ： $\int (3x^2 + 2x) dx$', 'ans' => '$x^3 + x^2 + C$'],
    ['jp' => '曲線 $y=x^2$ 上の点 $(2,4)$ における接線の傾きは？', 'ans' => '$4$ ($y\'=2x \to 2\times 2$)'],
    ['jp' => '$\int_{-1}^1 x^3 dx$ の値は？（奇関数の積分）', 'ans' => '$0$']
];

// 测试库 (10道题)
$pool_tests = [
    ['q' => '$f(x)=x^n$ の導関数 $f\'(x)$ は？', 'a' => '$nx^{n-1}$'],
    ['q' => '傾きが $0$ になる点における関数の値を何という？', 'a' => '極値 (Local extremum)'],
    ['q' => '不定積分において忘れてはいけない定数 $C$ の名称は？', 'a' => '積分定数 (Constant of integration)'],
    ['q' => '$\int_1^2 2x dx$ の値は？', 'a' => '$3$ ($[x^2]_1^2 = 4-1$)'],
    ['q' => '関数が増加しているとき、導関数 $f\'(x)$ の符号は？', 'a' => '正 ($f\'(x) > 0$)'],
    ['q' => '放物線と直線が囲む面積を求める公式の係数は $1/3$ か $1/6$ か？', 'a' => '$1/6$'],
    ['q' => '$y=x^2$ と $y=x$ の交点の $x$ 座標は？', 'a' => '$0, 1$'],
    ['q' => '定積分 $\int_a^a f(x) dx$ の値は？', 'a' => '$0$'],
    ['q' => '接線の傾きを求めるために使う極限の式を何という？', 'a' => '微分の定義式'],
    ['q' => '偶関数（$y$軸対称）の $\int_{-a}^a f(x) dx$ は $\int_0^a f(x) dx$ の何倍？', 'a' => '$2$倍']
];

// JSON化
$jsonExamples = json_encode($pool_examples);
$jsonSkills = json_encode($pool_skills);
$jsonDrills = json_encode($pool_drills);
$jsonTests = json_encode($pool_tests);

?>

<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $chapterTitleCN; ?> - EJU Math</title>

    <script>
    window.MathJax = {
      tex: {
        inlineMath: [['$', '$'], ['\\(', '\\)']], 
        displayMath: [['$$', '$$'], ['\\[', '\\]']]
      },
      svg: {
        fontCache: 'global'
      }
    };
    </script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
    <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>

    <style>
        :root {
            --primary: <?php echo $primaryColor; ?>;
            --bg-color: #f0f8ff; /* AliceBlue */
            --card-bg: #ffffff;
            --text-main: #2d3436;
            --btn-gen: #0984e3; /* 深空蓝 */
            --btn-gen-hover: #74b9ff;
        }

        body {
            font-family: "Hiragino Sans", "Meiryo", "Microsoft YaHei", sans-serif;
            background: var(--bg-color);
            color: var(--text-main);
            margin: 0; padding: 0; padding-bottom: 80px;
        }

        /* 导航 */
        .compact-nav {
            background: #fff; padding: 10px 15px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            display: flex; flex-wrap: wrap; gap: 8px; justify-content: center;
            position: sticky; top: 0; z-index: 100;
        }
        .nav-item {
            text-decoration: none; color: #555; background: #eee;
            padding: 5px 12px; border-radius: 20px; font-size: 0.9rem;
            font-weight: bold; transition: 0.2s;
        }
        .nav-item:hover, .nav-item.active { background: var(--primary); color: white; }
        .nav-home { background: #2d3436; color: white; }

        .container { max-width: 900px; margin: 20px auto; padding: 0 15px; }

        .chapter-header {
            text-align: center; margin-bottom: 30px;
            background: <?php echo $colorTheme; ?>;
            padding: 40px 20px; border-radius: 15px; color: white;
            box-shadow: 0 5px 15px rgba(9, 132, 227, 0.4);
        }
        .chapter-header h1 { margin: 0; font-size: 2rem; }
        .chapter-header p { margin: 10px 0 0; opacity: 0.9; }

        /* 卡片 */
        .card {
            background: var(--card-bg); border-radius: 12px;
            padding: 25px; margin-bottom: 25px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.04);
            border-left: 5px solid var(--primary);
        }
        .card-title {
            font-size: 1.4rem; color: var(--primary);
            margin-bottom: 20px; border-bottom: 2px solid #f0f0f0;
            padding-bottom: 10px; display: flex; justify-content: space-between; align-items: center;
        }

        /* 列表行 */
        .item-row { margin-bottom: 15px; padding-bottom: 15px; border-bottom: 1px dashed #eee; }
        .item-row:last-child { border-bottom: none; }

        /* SVG 样式 */
        .geo-svg {
            max-width: 240px;
            height: auto;
            display: block;
            margin: 15px 0;
            background: #fafafa;
            border-radius: 8px;
            border: 1px solid #eee;
            padding: 10px;
        }

        /* 按钮 */
        .btn-mini {
            border: none; border-radius: 50%; width: 28px; height: 28px;
            cursor: pointer; color: white; margin-left: 5px; font-size: 12px;
            display: inline-flex; align-items: center; justify-content: center;
            transition: transform 0.2s;
        }
        .btn-mini:hover { transform: scale(1.1); }
        .btn-read { background: #74b9ff; } 
        .btn-trans { background: #55efc4; } 
        
        .btn-generate {
            background: var(--btn-gen); color: white; border: none;
            padding: 8px 16px; border-radius: 20px; font-size: 0.9rem; cursor: pointer;
            transition: transform 0.2s; display: inline-flex; align-items: center; gap: 5px;
        }
        .btn-generate:hover { background: var(--btn-gen-hover); transform: scale(1.05); }

        /* 内容 */
        .jp-box { display: flex; align-items: center; flex-wrap: wrap; gap: 5px; }
        .jp-text { font-weight: 600; font-size: 1.1rem; line-height: 1.6; color: #333; margin-right: 5px; }
        
        .cn-text { 
            display: none; color: #666; font-size: 0.95rem; 
            padding: 8px 10px; background: #f9f9f9; border-radius: 5px; 
            margin-top: 8px; width: 100%; box-sizing: border-box;
        }
        .cn-text.show { display: block; animation: fadeIn 0.4s; }
        @keyframes fadeIn { from { opacity:0; transform:translateY(-5px); } to { opacity:1; transform:translateY(0); } }

        .math-block { 
            background: #f8f9fa; padding: 12px; border-radius: 8px; 
            overflow-x: auto; margin: 10px 0; border: 1px solid #eee; 
            font-size: 1.1rem; 
        }
        
        .dynamic-zone { margin-top: 20px; padding: 20px; background: #e6f7ff; border: 2px dashed #74b9ff; border-radius: 10px; display: none; }
        .dynamic-zone.active { display: block; animation: popIn 0.5s; }
        @keyframes popIn { from { opacity:0; scale:0.95; } to { opacity:1; scale:1; } }

        /* 测试进度条 */
        .progress-bar {
            width: 100%; height: 10px; background: #e0e0e0; border-radius: 5px; margin: 15px 0; overflow: hidden;
        }
        .progress-fill {
            height: 100%; background: #0984e3; width: 0%; transition: width 0.3s;
        }
        .score-board {
            display: flex; justify-content: space-between; font-weight: bold; color: #555; margin-bottom: 5px;
        }

        /* 模态框 */
        .modal-overlay {
            position: fixed; top: 0; left: 0; width: 100%; height: 100%;
            background: rgba(0,0,0,0.5); z-index: 1000;
            display: none; justify-content: center; align-items: center;
        }
        .modal-content {
            background: white; padding: 40px; border-radius: 20px;
            text-align: center; max-width: 400px; animation: bounceIn 0.6s; box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        }
        @keyframes bounceIn { 0% { scale:0.3; opacity:0; } 50% { scale:1.05; } 100% { scale:1; opacity:1; } }
    </style>
</head>
<body>

<nav class="compact-nav">
    <a href="index.php" class="nav-item nav-home">主页</a>
    <?php for($i=1; $i<=$totalChapters; $i++): ?>
        <a href="chapter_ch<?php echo $i; ?>.php" class="nav-item <?php echo ($i==$chapterID) ? 'active' : ''; ?>">
            <?php echo $i; ?>
        </a>
    <?php endfor; ?>
</nav>

<div class="container">
    <header class="chapter-header">
        <h1><?php echo $chapterTitleJP; ?></h1>
        <p><?php echo $chapterTitleCN; ?></p>
    </header>

    <div class="card">
        <div class="card-title">学習のポイント (考点清单)</div>
        <?php foreach ($exam_points as $item): ?>
            <div class="item-row">
                <div class="jp-box">
                    <span class="jp-text"><?php echo $item['jp']; ?></span>
                    <button class="btn-mini btn-read" onclick="readText(this)">🔊</button>
                    <button class="btn-mini btn-trans" onclick="toggleTrans(this)">译</button>
                </div>
                <div class="cn-text"><?php echo $item['cn']; ?></div>
            </div>
        <?php endforeach; ?>
    </div>

    <div class="card">
        <div class="card-title">重要概念 (Concepts)</div>
        <?php foreach ($concepts as $item): ?>
            <div class="item-row">
                <div class="jp-box">
                    <strong class="jp-text" style="color:#0984e3;"><?php echo $item['term_jp']; ?></strong>
                    <button class="btn-mini btn-read" onclick="readText(this, true)">🔊</button>
                </div>
                <?php if (isset($item['svg'])) echo $item['svg']; ?>
                
                <p class="jp-text" style="font-weight:400; margin:5px 0 5px 0; width:100%;">
                    <?php echo $item['desc_jp']; ?>
                </p>
                <button style="font-size:0.8rem; padding:2px 8px; border:1px solid #ccc; background:#fff; border-radius:4px; cursor:pointer;" onclick="toggleTransNext(this)">查看中文释义</button>
                <div class="cn-text"><?php echo $item['desc_cn']; ?></div>
            </div>
        <?php endforeach; ?>
    </div>

    <div class="card">
        <div class="card-title">公式と定理 (Formulas)</div>
        <?php foreach ($formulas as $item): ?>
            <div class="item-row">
                <h3 style="margin:0 0 5px 0; font-size:1.1rem; color:#74b9ff;"><?php echo $item['name_jp']; ?></h3>
                <div class="math-block"><?php echo $item['content_jp']; ?></div>
                <div class="jp-box">
                    <span style="font-size:0.9rem; color:#666;">Note: <span class="jp-text"><?php echo $item['note_jp']; ?></span></span>
                    <button class="btn-mini btn-read" onclick="readText(this)">🔊</button>
                    <button class="btn-mini btn-trans" onclick="toggleTrans(this)">译</button>
                </div>
                <div class="cn-text"><?php echo $item['note_cn']; ?></div>
            </div>
        <?php endforeach; ?>
    </div>

    <div class="card">
        <div class="card-title">
            <span>例題解説 (Example)</span>
            <button class="btn-generate" onclick="generateExample()">⚡ 生成新题</button>
        </div>
        <div id="example-dynamic" class="dynamic-zone active">
            <p style="text-align:center; color:#888;">加载中...</p>
        </div>
    </div>

    <div class="card" style="border-left-color: #55efc4;">
        <div class="card-title" style="color: #00b894;">
            <span>解法のテクニック (Technique)</span>
            <button class="btn-generate" style="background:#55efc4;" onclick="generateSkill()">⚡ 生成技巧</button>
        </div>
        <div id="skill-dynamic" class="dynamic-zone" style="background:#f0fff4; border-color:#b2f5ea;"></div>
    </div>

    <div class="card">
        <div class="card-title">
            <span>スキルアップ演習 (Drills)</span>
            <button class="btn-generate" style="background:#a29bfe;" onclick="generateDrill()">⚡ 生成练习</button>
        </div>
        <div id="drill-dynamic" class="dynamic-zone" style="background:#f3e5f5; border-color:#d1c4e9;"></div>
    </div>

    <div class="card">
        <div class="card-title">
            <span>確認テスト (Final Test)</span>
            <button class="btn-generate" style="background:#0984e3;" onclick="startTest()">⚡ 开始挑战 (10問)</button>
        </div>

        <div id="test-scoreboard" style="display:none;">
            <div class="score-board">
                <span id="question-counter">Question: 1 / 10</span>
                <span id="score-counter" style="color:#0984e3;">Score: 0</span>
            </div>
            <div class="progress-bar"><div class="progress-fill" id="progress-fill"></div></div>
        </div>

        <div id="test-area" class="dynamic-zone" style="display:block; background:#e6f7ff; border-color:#74b9ff;">
            <p style="text-align:center; color:#666;">点击“开始挑战”进行10道题的测试。<br>答对 6 道以上即过关！</p>
        </div>
    </div>

</div>

<div class="modal-overlay" id="resultModal">
    <div class="modal-content">
        <div id="modal-icon" style="font-size:4rem;">🎉</div>
        <h2 id="modal-title" style="color:#0984e3;">Result</h2>
        <p id="modal-msg" style="font-size:1.2rem; color:#333;"></p>
        <button class="btn-generate" onclick="closeModal()">关闭</button>
    </div>
</div>

<script>
    // 注入 PHP 数据
    const poolExamples = <?php echo $jsonExamples; ?>;
    const poolSkills = <?php echo $jsonSkills; ?>;
    const poolDrills = <?php echo $jsonDrills; ?>;
    const poolTests = <?php echo $jsonTests; ?>;

    // 状态变量
    let currentTestQ = 0;
    let score = 0;
    let totalQuestions = 10;
    let isTestActive = false;

    // 工具函数：随机获取
    function getRandomItem(arr) { return arr[Math.floor(Math.random() * arr.length)]; }

    // ================== 内容生成逻辑 ==================

    function generateExample() {
        const data = getRandomItem(poolExamples);
        const el = document.getElementById('example-dynamic');
        el.innerHTML = `
            <div class="jp-box"><span class="jp-text">${data.q_jp}</span>
            <button class="btn-mini btn-read" onclick="readText(this)">🔊</button>
            <button class="btn-mini btn-trans" onclick="toggleTrans(this)">译</button></div>
            <div class="cn-text">${data.q_cn}</div>
            <div style="margin:10px 0; padding:10px; background:#fff; border-left:3px solid #0984e3;">
                <strong>考え方：</strong>${data.think_jp} <br> <span style="font-size:0.9rem; color:#888;">${data.think_cn}</span>
            </div>
            <div class="math-block"><strong>解答：</strong> ${data.sol}</div>
        `;
        renderMath();
    }

    function generateSkill() {
        const data = getRandomItem(poolSkills);
        const el = document.getElementById('skill-dynamic');
        el.innerHTML = `
            <div class="jp-box"><span class="jp-text">💡 ${data.jp}</span>
            <button class="btn-mini btn-read" onclick="readText(this)">🔊</button>
            <button class="btn-mini btn-trans" onclick="toggleTrans(this)">译</button></div>
            <div class="cn-text">${data.cn}</div>
        `;
        el.classList.add('active'); renderMath();
    }

    function generateDrill() {
        const data = getRandomItem(poolDrills);
        const el = document.getElementById('drill-dynamic');
        const uid = 'ans-' + Date.now();
        el.innerHTML = `
            <p><strong>Q.</strong> <span class="jp-text">${data.jp}</span> <button class="btn-mini btn-read" onclick="readText(this)">🔊</button></p>
            <button style="font-size:0.8rem; cursor:pointer;" onclick="document.getElementById('${uid}').style.display='block'">Check Answer</button>
            <div id="${uid}" style="display:none; color:green; margin-top:5px; font-weight:bold;">${data.ans}</div>
        `;
        el.classList.add('active'); renderMath();
    }

    // ================== 过关测试逻辑 (10题) ==================

    function startTest() {
        score = 0;
        currentTestQ = 0;
        isTestActive = true;
        document.getElementById('test-scoreboard').style.display = 'block';
        nextQuestion();
    }

    function nextQuestion() {
        if (currentTestQ >= totalQuestions) {
            finishTest();
            return;
        }
        currentTestQ++;
        updateScoreBoard();
        
        // 随机取题
        const data = getRandomItem(poolTests);
        const el = document.getElementById('test-area');
        const uid = 'test-ans-' + Date.now();

        el.innerHTML = `
            <div class="jp-box">
                <span class="jp-text">Q${currentTestQ}. ${data.q}</span>
                <button class="btn-mini btn-read" onclick="readText(this)">🔊</button>
            </div>
            <hr style="margin:15px 0; border:0; border-top:1px dashed #bbb;">
            <div id="action-${uid}">
                <button class="btn-generate" style="background:#74b9ff;" onclick="revealTestAnswer('${uid}')">👁️ 显示答案</button>
            </div>
            <div id="${uid}" style="display:none; animation:fadeIn 0.5s;">
                <div class="math-block"><strong>正解：</strong> ${data.a}</div>
                <p style="text-align:center;">正解しましたか？</p>
                <div style="display:flex; justify-content:center; gap:20px;">
                    <button class="btn-generate" style="background:#0984e3;" onclick="recordResult(true)">✅ Yes</button>
                    <button class="btn-generate" style="background:#d63031;" onclick="recordResult(false)">❌ No</button>
                </div>
            </div>
        `;
        renderMath();
    }

    function revealTestAnswer(id) {
        document.getElementById(id).style.display = 'block';
        document.getElementById('action-' + id).style.display = 'none';
    }

    function recordResult(isCorrect) {
        if (isCorrect) score++;
        nextQuestion();
    }

    function updateScoreBoard() {
        document.getElementById('question-counter').innerText = `Question: ${currentTestQ} / ${totalQuestions}`;
        document.getElementById('score-counter').innerText = `Score: ${score}`;
        const pct = (currentTestQ / totalQuestions) * 100;
        document.getElementById('progress-fill').style.width = pct + "%";
    }

    function finishTest() {
        isTestActive = false;
        const passed = score >= 6;
        const modal = document.getElementById('resultModal');
        const icon = document.getElementById('modal-icon');
        const title = document.getElementById('modal-title');
        const msg = document.getElementById('modal-msg');

        if (passed) {
            icon.innerText = "🏆";
            title.innerText = "合格！ (Passed)";
            title.style.color = "#0984e3";
            msg.innerHTML = `你的得分: <b>${score} / 10</b><br>恭喜过关，继续加油！`;
        } else {
            icon.innerText = "💪";
            title.innerText = "不合格... (Failed)";
            title.style.color = "#d63031";
            msg.innerHTML = `你的得分: <b>${score} / 10</b><br>还需努力，请重新挑战！`;
        }
        modal.style.display = "flex";
    }

    function closeModal() {
        document.getElementById('resultModal').style.display = "none";
        document.getElementById('test-area').innerHTML = '<p style="text-align:center;">测试结束。点击按钮重新开始。</p>';
        document.getElementById('test-scoreboard').style.display = 'none';
    }

    // ================== 基础功能 ==================

    function toggleTrans(btn) {
        const el = btn.closest('.jp-box').nextElementSibling;
        if (el && el.classList.contains('cn-text')) el.classList.toggle('show');
    }
    
    function toggleTransNext(btn) {
        const el = btn.nextElementSibling;
        if (el && el.classList.contains('cn-text')) el.classList.toggle('show');
    }

    // 渲染 LaTeX 公式
    function renderMath() {
        // 重置 MathJax，使其扫描新插入的内容
        if (window.MathJax) {
            MathJax.typesetPromise().catch((err) => console.log('MathJax typeset failed: ' + err.message));
        }
    }

    // 初始化
    window.onload = function() { 
        generateExample(); 
    };

    // ================== 语音逻辑 (强制日语) ==================
    let jpVoice = null;

    function initVoices() {
        const voices = window.speechSynthesis.getVoices();
        // 1. 优先找完全匹配
        jpVoice = voices.find(v => v.lang === 'ja-JP');
        // 2. 其次找名字里有 Japan 的
        if (!jpVoice) jpVoice = voices.find(v => v.name.includes('Japan') || v.name.includes('JP'));
        // 3. 最后找 lang 是 ja 开头的
        if (!jpVoice) jpVoice = voices.find(v => v.lang.startsWith('ja'));
    }

    if (window.speechSynthesis.onvoiceschanged !== undefined) {
        window.speechSynthesis.onvoiceschanged = initVoices;
    }
    initVoices();

    function readText(btn, readAllInBox = false) {
        window.speechSynthesis.cancel();
        
        let text = "";
        let parent = btn.closest('.jp-box');
        
        if (readAllInBox) {
            const nodes = parent.querySelectorAll('.jp-text');
            nodes.forEach(n => text += n.textContent + "。");
        } else {
            const prev = btn.previousElementSibling;
            if (prev && prev.classList.contains('jp-text')) {
                text = prev.textContent;
            } else {
                const find = parent.querySelector('.jp-text');
                if (find) text = find.textContent;
            }
        }

        if (!text) return;

        const u = new SpeechSynthesisUtterance(text);
        u.lang = 'ja-JP';
        if (jpVoice) u.voice = jpVoice;
        u.rate = 0.9;

        const original = btn.innerHTML;
        btn.innerHTML = '⏳';
        btn.disabled = true;

        u.onend = () => { btn.innerHTML = original; btn.disabled = false; };
        u.onerror = () => { btn.innerHTML = original; btn.disabled = false; };
        
        window.speechSynthesis.speak(u);
    }

</script>
</body>
</html>