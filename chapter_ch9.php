<?php
// ==========================================
// 1. 基础配置与导航数据
// ==========================================
$chapterID = 9;
$chapterTitleJP = "第9章：指数関数・対数関数 (数学II)";
$chapterTitleCN = "第9章：指数函数与对数函数（数学II）";
// 配色方案：日落橙/暖红 (Sunset/Warm Red)
$colorTheme = "linear-gradient(135deg, #fa709a 0%, #fee140 100%)";
$primaryColor = "#ff7675"; 
$totalChapters = 14;

// ==========================================
// 2. 内容数据库 (含 SVG 图形定义)
//    依据 EJU 考纲 第9章
// ==========================================

// A. 考点清单
$exam_points = [
    ['jp' => '指数の拡張（0の指数、負の指数、有理数の指数）', 'cn' => '指数的扩展（0指数、负指数、有理数指数）'],
    ['jp' => '指数関数のグラフと性質（単調増加・減少）', 'cn' => '指数函数的图像与性质（单调递增、递减）'],
    ['jp' => '対数の定義と性質（積・商・累乗の対数）', 'cn' => '对数的定义与性质（积、商、幂的对数）'],
    ['jp' => '底の変換公式の利用', 'cn' => '换底公式的应用'],
    ['jp' => '指数・対数方程式と不等式の解法', 'cn' => '指数、对数方程与不等式的解法'],
    ['jp' => '常用対数（桁数、小数首位の決定）', 'cn' => '常用对数（位数、首位非零小数的确定）']
];

// B. 重要概念 (带 SVG 图示)
$concepts = [
    [
        'term_jp' => '指数関数のグラフ (Exponential Function)',
        'desc_jp' => '$y = a^x$ のグラフ。$a > 1$ なら右上がり、$0 < a < 1$ なら右下がり。点 $(0, 1)$ を通り、$x$ 軸が漸近線。',
        'desc_cn' => '$y = a^x$ 的图像。$a > 1$ 时向右上升，$0 < a < 1$ 时向右下降。过点 $(0, 1)$，$x$ 轴为渐近线。',
        // SVG: 指数函数
        'svg' => '<svg viewBox="0 0 200 150" class="geo-svg">
                    <line x1="20" y1="130" x2="180" y2="130" stroke="#333" stroke-width="1"/>
                    <line x1="100" y1="20" x2="100" y2="140" stroke="#333" stroke-width="1"/>
                    <text x="185" y="135" font-size="10">x</text>
                    <text x="95" y="15" font-size="10">y</text>
                    
                    <path d="M 20 128 Q 100 125 150 20" fill="none" stroke="#ff7675" stroke-width="2"/>
                    <text x="155" y="30" font-size="10" fill="#ff7675">y=a^x (a>1)</text>
                    
                    <path d="M 180 128 Q 100 125 50 20" fill="none" stroke="#0984e3" stroke-width="2" stroke-dasharray="4"/>
                    <text x="10" y="30" font-size="10" fill="#0984e3">0<a<1</text>
                    
                    <circle cx="100" cy="90" r="3" fill="#333"/>
                    <text x="105" y="90" font-size="10">(0,1)</text>
                  </svg>'
    ],
    [
        'term_jp' => '対数関数のグラフ (Logarithmic Function)',
        'desc_jp' => '$y = \log_a x$ のグラフ。定義域は $x > 0$。$y = a^x$ と直線 $y=x$ に関して対称。',
        'desc_cn' => '$y = \log_a x$ 的图像。定义域为 $x > 0$。与 $y = a^x$ 关于直线 $y=x$ 对称。',
        // SVG: 对数函数
        'svg' => '<svg viewBox="0 0 200 150" class="geo-svg">
                    <line x1="20" y1="130" x2="180" y2="130" stroke="#333" stroke-width="1"/>
                    <line x1="30" y1="20" x2="30" y2="140" stroke="#333" stroke-width="1"/>
                    
                    <path d="M 35 140 Q 40 80 170 40" fill="none" stroke="#e17055" stroke-width="2"/>
                    <text x="160" y="35" font-size="10" fill="#e17055">y=log_a x</text>
                    
                    <circle cx="70" cy="130" r="3" fill="#333"/>
                    <text x="70" y="145" font-size="10">(1,0)</text>
                    
                    <line x1="30" y1="20" x2="30" y2="140" stroke="#666" stroke-width="3" stroke-opacity="0.2"/>
                    <text x="35" y="20" font-size="10" fill="#666">x=0 (漸近線)</text>
                  </svg>'
    ],
    [
        'term_jp' => '底の変換公式 (Change of Base)',
        'desc_jp' => '異なる底を持つ対数を計算する際に必須のツール。',
        'desc_cn' => '计算不同底数对数时必不可少的工具。'
    ]
];

// C. 公式理论 (带 SVG 图示)
$formulas = [
    [
        'name_jp' => '底の変換公式',
        'content_jp' => '$$ \log_a b = \frac{\log_c b}{\log_c a} $$',
        'note_jp' => '特に $c=10$（常用対数）や $c=e$（自然対数）に変換することが多い。',
        'note_cn' => '常转换为 $c=10$（常用对数）或 $c=e$（自然对数）。'
    ],
    [
        'name_jp' => '対数の性質',
        'content_jp' => '$$ \log_a MN = \log_a M + \log_a N $$ $$ \log_a \frac{M}{N} = \log_a M - \log_a N $$ $$ \log_a M^k = k \log_a M $$',
        'note_jp' => '積は和に、商は差に、累乗は係数になる。',
        'note_cn' => '积变和，商变差，幂变系数。'
    ],
    [
        'name_jp' => '常用対数と桁数',
        'content_jp' => '$N$ が $n$ 桁の整数 $\iff 10^{n-1} \leqq N < 10^n \iff n-1 \leqq \log_{10} N < n$',
        'note_jp' => '$\log_{10} N$ の整数部分 $+1$ が桁数になる。',
        'note_cn' => '$\log_{10} N$ 的整数部分 $+1$ 即为位数。'
    ]
];

// ==========================================
// 3. 动态题库 (PHP数组 -> JSON)
// ==========================================

// 例题库
$pool_examples = [
    [
        'q_jp' => '方程式 $4^x - 3 \cdot 2^{x+1} - 16 = 0$ を解け。',
        'q_cn' => '解方程 $4^x - 3 \cdot 2^{x+1} - 16 = 0$。',
        'think_jp' => '$2^x = t$ ($t>0$) とおいて、tの2次方程式にする。$4^x = (2^x)^2 = t^2$。',
        'think_cn' => '设 $2^x = t$ ($t>0$)，转化为关于 t 的二次方程。$4^x = (2^x)^2 = t^2$。',
        'sol' => '式変形すると $t^2 - 6t - 16 = 0$ <br> $(t-8)(t+2) = 0 \implies t = 8, -2$ <br> $t>0$ より $t=8$。 <br> $2^x = 8 = 2^3 \implies x=3$'
    ],
    [
        'q_jp' => '不等式 $\log_2 (x-1) + \log_2 (x-3) < 3$ を解け。',
        'q_cn' => '解不等式 $\log_2 (x-1) + \log_2 (x-3) < 3$。',
        'think_jp' => 'まず真数条件（$x-1>0$ かつ $x-3>0$）を確認し、対数をまとめる。',
        'think_cn' => '首先确认真数条件（$x-1>0$ 且 $x-3>0$），然后合并对数。',
        'sol' => '真数条件より $x>3$ ...① <br> $\log_2 \{(x-1)(x-3)\} < \log_2 2^3$ <br> 底 $2>1$ より不等号の向きはそのまま、$(x-1)(x-3) < 8$ <br> $x^2 - 4x - 5 < 0 \implies (x-5)(x+1) < 0$ <br> $-1 < x < 5$ ...② <br> ①②より、$3 < x < 5$'
    ]
];

// 技巧库
$pool_skills = [
    ['jp' => '対数不等式を解く際は、必ず最初に「真数条件 ($>0$)」と「底の条件 ($>0, \neq 1$)」を確認する。', 'cn' => '解对数不等式时，务必首先确认“真数条件 ($>0$)”和“底数条件 ($>0, \neq 1$)”。'],
    ['jp' => '指数の大小比較は、底をそろえるか、対数をとって比較する。', 'cn' => '比较指数大小时，统一底数，或者取对数进行比较。'],
    ['jp' => '底が文字の場合（例 $\log_x 4$）、底が1より大きいか小さいかで場合分けが必要。', 'cn' => '底数为字母时（如 $\log_x 4$），需根据底数是否大于1进行分类讨论。']
];

// 练习库
$pool_drills = [
    ['jp' => '値を求めよ： $\log_3 27$', 'ans' => '$3$ ($3^3=27$)'],
    ['jp' => '計算せよ： $8^{-\frac{2}{3}}$', 'ans' => '$\frac{1}{4}$ ($ (2^3)^{-2/3} = 2^{-2} $)'],
    ['jp' => '方程式 $\log_5 x = 2$ の解は？', 'ans' => '$25$ ($5^2$)'],
    ['jp' => '$\log_2 3 \cdot \log_3 4$ を簡単にせよ。', 'ans' => '$2$ ($\log_2 4$)']
];

// 测试库 (10道题)
$pool_tests = [
    ['q' => '$y=2^x$ と $y=(\frac{1}{2})^x$ のグラフの関係は？', 'a' => '$y$ 軸対称'],
    ['q' => '$\sqrt[3]{a^2}$ を指数で表すと？', 'a' => '$a^{\frac{2}{3}}$'],
    ['q' => '$3^{x+1} = 27$ の解は？', 'a' => '$x=2$'],
    ['q' => '$\log_{10} 2 = 0.3010$ のとき、$2^{10}$ は何桁？', 'a' => '$4$ 桁 ($10 \times 0.301 = 3.01 \to 3+1$)'],
    ['q' => '$\log_a 1$ の値は？', 'a' => '$0$'],
    ['q' => '$a>1$ のとき、$x_1 < x_2 \iff a^{x_1} \: ? \: a^{x_2}$', 'a' => '$<$ (増加関数)'],
    ['q' => '$0 < a < 1$ のとき、$\log_a x < \log_a y \implies x \: ? \: y$', 'a' => '$>$ (不等号反転)'],
    ['q' => '$\log_2 6 - \log_2 3$ の値は？', 'a' => '$1$ ($\log_2 2$)'],
    ['q' => '$x^0$ (ただし $x \neq 0$) の値は？', 'a' => '$1$'],
    ['q' => '$\log_a b = \frac{1}{\log_? a}$', 'a' => '$b$ (底の変換)']
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
            --bg-color: #fff5f5; /* 浅红背景 */
            --card-bg: #ffffff;
            --text-main: #2d3436;
            --btn-gen: #ff7675; /* 按钮改为暖红色 */
            --btn-gen-hover: #d63031;
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
            box-shadow: 0 5px 15px rgba(255, 118, 117, 0.4);
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
            max-width: 200px;
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
        .btn-read { background: #fab1a0; } 
        .btn-trans { background: #ff7675; } 
        
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
        
        .dynamic-zone { margin-top: 20px; padding: 20px; background: #fff8f8; border: 2px dashed #fab1a0; border-radius: 10px; display: none; }
        .dynamic-zone.active { display: block; animation: popIn 0.5s; }
        @keyframes popIn { from { opacity:0; scale:0.95; } to { opacity:1; scale:1; } }

        /* 测试进度条 */
        .progress-bar {
            width: 100%; height: 10px; background: #e0e0e0; border-radius: 5px; margin: 15px 0; overflow: hidden;
        }
        .progress-fill {
            height: 100%; background: #ff7675; width: 0%; transition: width 0.3s;
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
                    <strong class="jp-text" style="color:#ff7675;"><?php echo $item['term_jp']; ?></strong>
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
                <h3 style="margin:0 0 5px 0; font-size:1.1rem; color:#e17055;"><?php echo $item['name_jp']; ?></h3>
                
                <?php if (isset($item['svg'])) echo $item['svg']; ?>

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

    <div class="card" style="border-left-color: #fab1a0;">
        <div class="card-title" style="color: #e17055;">
            <span>解法のテクニック (Technique)</span>
            <button class="btn-generate" style="background:#fab1a0;" onclick="generateSkill()">⚡ 生成技巧</button>
        </div>
        <div id="skill-dynamic" class="dynamic-zone" style="background:#fffaf0; border-color:#ffe0b2;"></div>
    </div>

    <div class="card">
        <div class="card-title">
            <span>スキルアップ演習 (Drills)</span>
            <button class="btn-generate" style="background:#00b894;" onclick="generateDrill()">⚡ 生成练习</button>
        </div>
        <div id="drill-dynamic" class="dynamic-zone" style="background:#e0f7fa; border-color:#81ecec;"></div>
    </div>

    <div class="card">
        <div class="card-title">
            <span>確認テスト (Final Test)</span>
            <button class="btn-generate" style="background:#ff7675;" onclick="startTest()">⚡ 开始挑战 (10問)</button>
        </div>

        <div id="test-scoreboard" style="display:none;">
            <div class="score-board">
                <span id="question-counter">Question: 1 / 10</span>
                <span id="score-counter" style="color:#ff7675;">Score: 0</span>
            </div>
            <div class="progress-bar"><div class="progress-fill" id="progress-fill"></div></div>
        </div>

        <div id="test-area" class="dynamic-zone" style="display:block; background:#fff8f8; border-color:#fab1a0;">
            <p style="text-align:center; color:#666;">点击“开始挑战”进行10道题的测试。<br>答对 6 道以上即过关！</p>
        </div>
    </div>

</div>

<div class="modal-overlay" id="resultModal">
    <div class="modal-content">
        <div id="modal-icon" style="font-size:4rem;">🎉</div>
        <h2 id="modal-title" style="color:#ff7675;">Result</h2>
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
            <div style="margin:10px 0; padding:10px; background:#fff; border-left:3px solid #ff7675;">
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
                    <button class="btn-generate" style="background:#00b894;" onclick="recordResult(true)">✅ Yes</button>
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
            title.style.color = "#ff7675";
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
