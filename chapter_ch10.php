<?php
// ==========================================
// 1. 基础配置与导航数据
// ==========================================
$chapterID = 10;
$chapterTitleJP = "第10章：三角関数 (数学II)";
$chapterTitleCN = "第10章：三角函数（数学II）";
// 配色方案：深蓝紫/星夜色 (Deep Blue/Purple)
$colorTheme = "linear-gradient(135deg, #667eea 0%, #764ba2 100%)";
$primaryColor = "#6c5ce7"; 
$totalChapters = 14;

// ==========================================
// 2. 内容数据库 (含 SVG 图形定义)
//    依据 EJU 考纲 第10章
// ==========================================

// A. 考点清单
$exam_points = [
    ['jp' => '一般角と弧度法（ラジアンの定義と変換）', 'cn' => '一般角与弧度制（弧度的定义与转换）'],
    ['jp' => '三角関数のグラフと性質（周期、振幅、移動）', 'cn' => '三角函数的图像与性质（周期、振幅、平移）'],
    ['jp' => '加法定理（$\sin(\alpha\pm\beta)$ 等の展開）', 'cn' => '加法定理（$\sin(\alpha\pm\beta)$ 等的展开）'],
    ['jp' => '2倍角・半角の公式（加法定理からの導出）', 'cn' => '倍角、半角公式（由加法定理推导）'],
    ['jp' => '三角関数の合成（$a\sin\theta + b\cos\theta$）', 'cn' => '三角函数的合成（辅助角公式）'],
    ['jp' => '三角方程式・不等式の解法', 'cn' => '三角方程与不等式的解法']
];

// B. 重要概念 (带 SVG 图示)
$concepts = [
    [
        'term_jp' => '一般角と弧度法 (Radian Measure)',
        'desc_jp' => '半径 $r$、弧の長さ $l$ の扇形の中心角を $\theta = \frac{l}{r}$ (ラジアン) と定める。$180^\circ = \pi$ ラジアン。',
        'desc_cn' => '定义半径为 $r$、弧长为 $l$ 的扇形圆心角为 $\theta = \frac{l}{r}$ (弧度)。$180^\circ = \pi$ 弧度。',
        // SVG: 弧度制示意
        'svg' => '<svg viewBox="0 0 200 120" class="geo-svg">
                    <circle cx="60" cy="60" r="40" fill="none" stroke="#6c5ce7" stroke-width="1.5"/>
                    <line x1="60" y1="60" x2="100" y2="60" stroke="#333"/> <line x1="60" y1="60" x2="88" y2="32" stroke="#333"/> <path d="M 100 60 A 40 40 0 0 0 88 32" fill="none" stroke="#e84393" stroke-width="2"/>
                    <text x="105" y="50" font-size="10" fill="#e84393">弧長 l = r</text>
                    <text x="70" y="55" font-size="10">1 rad</text>
                    <text x="130" y="90" font-size="10" fill="#666">180° = π rad</text>
                  </svg>'
    ],
    [
        'term_jp' => '三角関数のグラフ',
        'desc_jp' => '単位円上の点の座標の動きをグラフにしたもの。周期性（同じ形が繰り返される）を持つ。',
        'desc_cn' => '将单位圆上点的坐标变化绘制成的图像。具有周期性。',
        // SVG: Sine Graph
        'svg' => '<svg viewBox="0 0 220 100" class="geo-svg">
                    <line x1="10" y1="50" x2="210" y2="50" stroke="#333" stroke-width="1"/>
                    <line x1="20" y1="10" x2="20" y2="90" stroke="#333" stroke-width="1"/>
                    <path d="M 20 50 Q 45 10 70 50 T 120 50 T 170 50" fill="none" stroke="#667eea" stroke-width="2"/>
                    <text x="70" y="65" font-size="10">π</text>
                    <text x="120" y="65" font-size="10">2π</text>
                    <text x="170" y="30" font-size="10" fill="#667eea">y = sin θ</text>
                  </svg>'
    ],
    [
        'term_jp' => '三角関数の合成',
        'desc_jp' => '$a\sin\theta + b\cos\theta = \sqrt{a^2+b^2}\sin(\theta + \alpha)$。点 $(a, b)$ をとって考える。',
        'desc_cn' => '$a\sin\theta + b\cos\theta = \sqrt{a^2+b^2}\sin(\theta + \alpha)$。通过取点 $(a, b)$ 来思考。'
    ]
];

// C. 公式理论 (带 SVG 图示)
$formulas = [
    [
        'name_jp' => '加法定理 (Addition Formulas)',
        'content_jp' => '$$ \sin(\alpha \pm \beta) = \sin\alpha\cos\beta \pm \cos\alpha\sin\beta $$ $$ \cos(\alpha \pm \beta) = \cos\alpha\cos\beta \mp \sin\alpha\sin\beta $$',
        'note_jp' => '「咲いたコスモス コスモス咲いた」「コスモスコスモス 咲いた咲いた」などの語呂合わせで覚える。',
        'note_cn' => '注意符号：正弦同号，余弦异号。'
    ],
    [
        'name_jp' => '2倍角の公式 (Double Angle)',
        'content_jp' => '$$ \sin 2\theta = 2\sin\theta\cos\theta $$ $$ \cos 2\theta = \cos^2\theta - \sin^2\theta = 2\cos^2\theta - 1 $$',
        'note_jp' => '加法定理で $\beta = \alpha$ とすれば導ける。',
        'note_cn' => '在加法定理中令 $\beta = \alpha$ 即可导出。'
    ],
    [
        'name_jp' => '半角の公式 (Half Angle)',
        'content_jp' => '$$ \sin^2 \frac{\theta}{2} = \frac{1 - \cos\theta}{2}, \quad \cos^2 \frac{\theta}{2} = \frac{1 + \cos\theta}{2} $$',
        'note_jp' => '次数を下げる（2次 $\to$ 1次）ためによく使われる。',
        'note_cn' => '常用于降次（二次 $\to$ 一次）。'
    ]
];

// ==========================================
// 3. 动态题库 (PHP数组 -> JSON)
// ==========================================

// 例题库
$pool_examples = [
    [
        'q_jp' => '$\theta$ が第2象限の角で、$\sin\theta = \frac{3}{5}$ のとき、$\cos\theta$ と $\tan\theta$ の値を求めよ。',
        'q_cn' => '$\theta$ 是第二象限角，且 $\sin\theta = \frac{3}{5}$，求 $\cos\theta$ 和 $\tan\theta$。',
        'think_jp' => '相互関係 $\sin^2\theta + \cos^2\theta = 1$ を使う。第2象限なので $\cos\theta < 0$ に注意。',
        'think_cn' => '使用关系式 $\sin^2\theta + \cos^2\theta = 1$。注意第二象限 $\cos\theta < 0$。',
        'sol' => '$\cos^2\theta = 1 - (\frac{3}{5})^2 = \frac{16}{25}$ <br> 第2象限より $\cos\theta < 0$ なので、$\cos\theta = -\frac{4}{5}$ <br> $\tan\theta = \frac{\sin\theta}{\cos\theta} = \frac{3/5}{-4/5} = -\frac{3}{4}$'
    ],
    [
        'q_jp' => '関数 $y = \sin x + \sqrt{3}\cos x$ の最大値を求めよ。',
        'q_cn' => '求函数 $y = \sin x + \sqrt{3}\cos x$ 的最大值。',
        'think_jp' => '三角関数の合成公式を利用して、$r\sin(x+\alpha)$ の形にする。',
        'think_cn' => '利用三角函数合成公式，化为 $r\sin(x+\alpha)$ 的形式。',
        'sol' => '点 $(1, \sqrt{3})$ をとると、$r = \sqrt{1+3} = 2$、偏角は $\frac{\pi}{3}$ <br> よって $y = 2\sin(x + \frac{\pi}{3})$ <br> $\sin$ の最大値は 1 なので、$y$ の最大値は $2$'
    ]
];

// 技巧库
$pool_skills = [
    ['jp' => '$\sin\theta, \cos\theta$ の対称式（$\sin+\cos, \sin\cos$）の問題は、$t = \sin\theta + \cos\theta$ とおき両辺を2乗する。', 'cn' => '遇到 $\sin, \cos$ 的对称式问题，设 $t = \sin\theta + \cos\theta$ 并两边平方。'],
    ['jp' => '方程式 $\sin 2x = \sin x$ は、安易に割らずに移行して因数分解する（解の消失を防ぐ）。', 'cn' => '解 $\sin 2x = \sin x$ 时，不要随意约分，应移项因式分解（防止丢根）。'],
    ['jp' => '合成 $a\sin\theta + b\cos\theta$ の係数 $a, b$ は、座標平面上の点 $(a, b)$ に対応させて $r$ と $\alpha$ を探す。', 'cn' => '合成 $a\sin\theta + b\cos\theta$ 时，将系数 $a, b$ 对应为坐标平面上的点 $(a, b)$ 来寻找 $r$ 和 $\alpha$。']
];

// 练习库
$pool_drills = [
    ['jp' => '弧度法へ変換： $120^\circ$', 'ans' => '$\frac{2}{3}\pi$'],
    ['jp' => '値を求めよ： $\sin \frac{7}{6}\pi$', 'ans' => '$-\frac{1}{2}$'],
    ['jp' => '計算せよ： $\cos 75^\circ$', 'ans' => '$\frac{\sqrt{6}-\sqrt{2}}{4}$ (加法定理)'],
    ['jp' => '合成せよ： $\sin\theta - \cos\theta$', 'ans' => '$\sqrt{2}\sin(\theta - \frac{\pi}{4})$']
];

// 测试库 (10道题)
$pool_tests = [
    ['q' => '扇形の弧の長さ $l$ の公式は？ ($r$:半径, $\theta$:ラジアン)', 'a' => '$l = r\theta$'],
    ['q' => '$\sin^2 \theta + \cos^2 \theta = ?$', 'a' => '$1$'],
    ['q' => '$\tan\theta = \frac{1}{\sqrt{3}}$ ($0<\theta<\pi$) のとき $\theta$ は？', 'a' => '$\frac{\pi}{6}$'],
    ['q' => '$\sin 2\theta$ を $\sin, \cos$ で表すと？', 'a' => '$2\sin\theta\cos\theta$'],
    ['q' => '関数 $y = 3\sin 2x$ の周期は？', 'a' => '$\pi$ ($2\pi \div 2$)'],
    ['q' => '$\cos(\alpha + \beta)$ の展開式は？', 'a' => '$\cos\alpha\cos\beta - \sin\alpha\sin\beta$'],
    ['q' => '$\tan \theta = t$ とするとき、$\cos 2\theta$ を $t$ で表すと？', 'a' => '$\frac{1-t^2}{1+t^2}$'],
    ['q' => '$0 \leqq \theta < 2\pi$ で $\cos\theta = -\frac{1}{2}$ の解は？', 'a' => '$\frac{2}{3}\pi, \frac{4}{3}\pi$'],
    ['q' => '$\sin 15^\circ$ の値は？', 'a' => '$\frac{\sqrt{6}-\sqrt{2}}{4}$'],
    ['q' => '$y = \sin(x - \frac{\pi}{4})$ のグラフは $y=\sin x$ をどちらにずらしたもの？', 'a' => '右に $\frac{\pi}{4}$ ($+x$ direction)']
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
            --bg-color: #f3e5f5; /* 浅紫背景 */
            --card-bg: #ffffff;
            --text-main: #2d3436;
            --btn-gen: #6c5ce7; /* 按钮改为深紫色 */
            --btn-gen-hover: #574b90;
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
            box-shadow: 0 5px 15px rgba(108, 92, 231, 0.4);
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
            max-width: 220px;
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
        .btn-read { background: #6c5ce7; } 
        .btn-trans { background: #a29bfe; } 
        
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
        
        .dynamic-zone { margin-top: 20px; padding: 20px; background: #ede7f6; border: 2px dashed #b39ddb; border-radius: 10px; display: none; }
        .dynamic-zone.active { display: block; animation: popIn 0.5s; }
        @keyframes popIn { from { opacity:0; scale:0.95; } to { opacity:1; scale:1; } }

        /* 测试进度条 */
        .progress-bar {
            width: 100%; height: 10px; background: #e0e0e0; border-radius: 5px; margin: 15px 0; overflow: hidden;
        }
        .progress-fill {
            height: 100%; background: #6c5ce7; width: 0%; transition: width 0.3s;
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
                    <strong class="jp-text" style="color:#6c5ce7;"><?php echo $item['term_jp']; ?></strong>
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
                <h3 style="margin:0 0 5px 0; font-size:1.1rem; color:#574b90;"><?php echo $item['name_jp']; ?></h3>
                
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

    <div class="card" style="border-left-color: #a29bfe;">
        <div class="card-title" style="color: #6c5ce7;">
            <span>解法のテクニック (Technique)</span>
            <button class="btn-generate" style="background:#a29bfe;" onclick="generateSkill()">⚡ 生成技巧</button>
        </div>
        <div id="skill-dynamic" class="dynamic-zone" style="background:#f3e5f5; border-color:#d1c4e9;"></div>
    </div>

    <div class="card">
        <div class="card-title">
            <span>スキルアップ演習 (Drills)</span>
            <button class="btn-generate" style="background:#00b894;" onclick="generateDrill()">⚡ 生成练习</button>
        </div>
        <div id="drill-dynamic" class="dynamic-zone" style="background:#e0f2f1; border-color:#80cbc4;"></div>
    </div>

    <div class="card">
        <div class="card-title">
            <span>確認テスト (Final Test)</span>
            <button class="btn-generate" style="background:#6c5ce7;" onclick="startTest()">⚡ 开始挑战 (10問)</button>
        </div>

        <div id="test-scoreboard" style="display:none;">
            <div class="score-board">
                <span id="question-counter">Question: 1 / 10</span>
                <span id="score-counter" style="color:#6c5ce7;">Score: 0</span>
            </div>
            <div class="progress-bar"><div class="progress-fill" id="progress-fill"></div></div>
        </div>

        <div id="test-area" class="dynamic-zone" style="display:block; background:#ede7f6; border-color:#b39ddb;">
            <p style="text-align:center; color:#666;">点击“开始挑战”进行10道题的测试。<br>答对 6 道以上即过关！</p>
        </div>
    </div>

</div>

<div class="modal-overlay" id="resultModal">
    <div class="modal-content">
        <div id="modal-icon" style="font-size:4rem;">🎉</div>
        <h2 id="modal-title" style="color:#6c5ce7;">Result</h2>
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
            <div style="margin:10px 0; padding:10px; background:#fff; border-left:3px solid #6c5ce7;">
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
                <button class="btn-generate" style="background:#6c5ce7;" onclick="revealTestAnswer('${uid}')">👁️ 显示答案</button>
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
            title.style.color = "#6c5ce7";
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
