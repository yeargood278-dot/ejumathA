<?php
// ==========================================
// 1. 基础配置与导航数据
// ==========================================
$chapterID = 3;
$chapterTitleJP = "第3章：図形と計量 (数学I)";
$chapterTitleCN = "第3章：图形与计量（数学I）";
// 配色方案：清新蓝绿/薄荷色 (Mint/Teal)
$colorTheme = "linear-gradient(135deg, #43e97b 0%, #38f9d7 100%)";
$primaryColor = "#00b894"; 
$totalChapters = 14;

// ==========================================
// 2. 丰富后的内容数据库 (PHP数组)
//    依据 EJU 考纲 第3章：三角比与图形
// ==========================================

// A. 考点清单
$exam_points = [
    ['jp' => '三角比の定義（鋭角・鈍角）と相互関係', 'cn' => '三角比的定义（锐角、钝角）及其相互关系'],
    ['jp' => '正弦定理（外接円の半径 $R$ との関係）', 'cn' => '正弦定理（与外接圆半径 $R$ 的关系）'],
    ['jp' => '余弦定理（辺と角の計算、三角形の形状決定）', 'cn' => '余弦定理（边与角的计算、三角形形状的判定）'],
    ['jp' => '三角形の面積公式（内接円の半径 $r$）', 'cn' => '三角形面积公式（内接圆半径 $r$）'],
    ['jp' => '空間図形の計量（正四面体・四角錐の体積・高さ）', 'cn' => '空间图形的计量（正四面体、四棱锥的体积与高度）'],
    ['jp' => '測量への応用（仰角・俯角）', 'cn' => '测量中的应用（仰角、俯角）']
];

// B. 重要概念
$concepts = [
    [
        'term_jp' => '単位円による定義',
        'desc_jp' => '原点 $O$ 中心、半径 $1$ の半円周上の点 $P(x,y)$ に対し、$\sin\theta=y, \cos\theta=x, \tan\theta=\frac{y}{x}$。',
        'desc_cn' => '对于以原点 $O$ 为中心、半径为 $1$ 的半圆周上的点 $P(x,y)$，定义 $\sin\theta=y, \cos\theta=x, \tan\theta=\frac{y}{x}$。'
    ],
    [
        'term_jp' => '鈍角の三角比',
        'desc_jp' => '$90^\circ < \theta \leqq 180^\circ$ のとき、$\cos\theta < 0, \tan\theta < 0$ となる。$\sin\theta$ は常に正。',
        'desc_cn' => '当 $90^\circ < \theta \leqq 180^\circ$ 时，$\cos\theta < 0, \tan\theta < 0$。$\sin\theta$ 始终为正。'
    ],
    [
        'term_jp' => '空間図形の切断',
        'desc_jp' => '空間図形の問題は、必要な平面（三角形）を切り出して、平面図形の問題に帰着させる。',
        'desc_cn' => '空间图形问题，通过截取所需的平面（三角形），将其转化为平面图形问题来解决。'
    ]
];

// C. 公式理论
$formulas = [
    [
        'name_jp' => '三角比の相互関係',
        'content_jp' => '$$ \tan\theta = \frac{\sin\theta}{\cos\theta} $$ $$ \sin^2\theta + \cos^2\theta = 1 $$ $$ 1 + \tan^2\theta = \frac{1}{\cos^2\theta} $$',
        'note_jp' => '$\sin, \cos, \tan$ のうち1つが分かれば他も求まる。',
        'note_cn' => '已知 $\sin, \cos, \tan$ 中的一个，即可求出其他两个。'
    ],
    [
        'name_jp' => '正弦定理 (Sine Rule)',
        'content_jp' => '$$ \frac{a}{\sin A} = \frac{b}{\sin B} = \frac{c}{\sin C} = 2R $$',
        'note_jp' => '$R$ は外接円の半径。向かい合う「辺と角」のペアに注目。',
        'note_cn' => '$R$ 为外接圆半径。关注相对的“边与角”对。'
    ],
    [
        'name_jp' => '余弦定理 (Cosine Rule)',
        'content_jp' => '$$ a^2 = b^2 + c^2 - 2bc \cos A $$ $$ \cos A = \frac{b^2 + c^2 - a^2}{2bc} $$',
        'note_jp' => '2辺とその間の角から対辺を求める、または3辺から角を求める。',
        'note_cn' => '已知两边及夹角求对边，或已知三边求角。'
    ]
];

// ==========================================
// 3. 动态题库 (PHP数组 -> JSON)
// ==========================================

// 例题库
$pool_examples = [
    [
        'q_jp' => '$\triangle ABC$ において、$a=2, b=\sqrt{3}-1, C=30^\circ$ のとき、残りの辺 $c$ を求めよ。',
        'q_cn' => '在 $\triangle ABC$ 中，$a=2, b=\sqrt{3}-1, C=30^\circ$，求边 $c$。',
        'think_jp' => '2辺とその間の角が分かっているので、余弦定理を使う。',
        'think_cn' => '已知两边及其夹角，使用余弦定理。',
        'sol' => '$$ c^2 = a^2 + b^2 - 2ab \cos C $$ $$ = 4 + (\sqrt{3}-1)^2 - 2 \cdot 2 (\sqrt{3}-1) \frac{\sqrt{3}}{2} $$ $$ = 4 + (4-2\sqrt{3}) - 2(3-\sqrt{3}) $$ $$ = 8 - 2\sqrt{3} - 6 + 2\sqrt{3} = 2 $$ $$ c>0 \text{ より } c=\sqrt{2} $$'
    ],
    [
        'q_jp' => '円に内接する四角形 $ABCD$ において、$AB=2, BC=3, CD=4, DA=3$ のとき、$\cos A$ の値を求めよ。',
        'q_cn' => '圆内接四边形 $ABCD$ 中，$AB=2, BC=3, CD=4, DA=3$，求 $\cos A$。',
        'think_jp' => '対角線 $BD$ を2通りの余弦定理で表す。円に内接するため $C = 180^\circ - A$。',
        'think_cn' => '用两次余弦定理表示对角线 $BD$。因圆内接，故 $C = 180^\circ - A$。',
        'sol' => '$\triangle ABD$ で $BD^2 = 2^2+3^2-2\cdot2\cdot3\cos A = 13-12\cos A$ <br> $\triangle BCD$ で $BD^2 = 3^2+4^2-2\cdot3\cdot4\cos(180^\circ-A) = 25+24\cos A$ <br> $13-12\cos A = 25+24\cos A \implies 36\cos A = -12 \implies \cos A = -\frac{1}{3}$'
    ]
];

// 技巧库
$pool_skills = [
    ['jp' => '外接円の半径 $R$ が絡む問題は「正弦定理」、3辺が絡む問題は「余弦定理」を第一候補にする。', 'cn' => '涉及外接圆半径 $R$ 的问题首选“正弦定理”，涉及三边的问题首选“余弦定理”。'],
    ['jp' => '三角形の面積 $S$ が分かれば、内接円の半径 $r$ は $S = \frac{1}{2}r(a+b+c)$ から逆算できる。', 'cn' => '已知三角形面积 $S$，可通过 $S = \frac{1}{2}r(a+b+c)$ 反求内接圆半径 $r$。'],
    ['jp' => '空間図形で垂線の長さを求める時は、体積を2通りの方法（底面を変える）で表して方程式を作る（等積法）。', 'cn' => '求空间图形的垂线长时，可用两种方法（改变底面）表示体积建立方程（等积法）。']
];

// 练习库
$pool_drills = [
    ['jp' => '値を求めよ： $\sin 120^\circ$', 'ans' => '$\frac{\sqrt{3}}{2}$'],
    ['jp' => '値を求めよ： $\cos 135^\circ$', 'ans' => '$-\frac{1}{\sqrt{2}}$'],
    ['jp' => '値を求めよ： $\tan 150^\circ$', 'ans' => '$-\frac{1}{\sqrt{3}}$'],
    ['jp' => '計算せよ： $\sin^2 40^\circ + \sin^2 50^\circ$', 'ans' => '$1$ ($\sin 50^\circ=\cos 40^\circ$)']
];

// 测试库 (10道题)
$pool_tests = [
    ['q' => '$\triangle ABC$ で $a=10, A=30^\circ$ のとき、外接円の半径 $R$ は？', 'a' => '$10$ ($2R = \frac{10}{1/2} = 20$)'],
    ['q' => '$0^\circ \leqq \theta \leqq 180^\circ$ で $\cos\theta = -\frac{1}{2}$ のとき $\theta$ は？', 'a' => '$120^\circ$'],
    ['q' => '$\triangle ABC$ で $b=3, c=4, A=60^\circ$ のとき、面積 $S$ は？', 'a' => '$3\sqrt{3}$ ($S=\frac{1}{2}\cdot3\cdot4\cdot\frac{\sqrt{3}}{2}$)'],
    ['q' => '$3$ 辺の長さが $3, 4, 5$ の三角形は鋭角・直角・鈍角のどれ？', 'a' => '直角 ($3^2+4^2=5^2$)'],
    ['q' => '$\tan\theta = 2$ のとき、$\cos^2\theta$ の値は？', 'a' => '$\frac{1}{5}$ ($1+2^2 = \frac{1}{\cos^2\theta}$)'],
    ['q' => '正四面体の頂点から底面に下ろした垂線の足は、底面の三角形の何中心？', 'a' => '外心 (または重心)'],
    ['q' => '$3$ 辺が $4, 5, 6$ の三角形の $\cos A$ (最大角ではない) を求める式は？', 'a' => '余弦定理を利用'],
    ['q' => '$\sin(180^\circ - \theta)$ と等しいのは？', 'a' => '$\sin\theta$'],
    ['q' => '$\cos(90^\circ - \theta)$ と等しいのは？', 'a' => '$\sin\theta$'],
    ['q' => '$\triangle ABC$ で $a^2 > b^2 + c^2$ が成り立つとき、角 $A$ は？', 'a' => '鈍角 (Obtuse)']
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
            --bg-color: #e0f7fa; /* 浅青色背景 */
            --card-bg: #ffffff;
            --text-main: #2d3436;
            --btn-gen: #00b894; /* 按钮改为薄荷绿/青色 */
            --btn-gen-hover: #01a3a4;
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
            box-shadow: 0 5px 15px rgba(0, 184, 148, 0.4);
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

        /* 按钮 */
        .btn-mini {
            border: none; border-radius: 50%; width: 28px; height: 28px;
            cursor: pointer; color: white; margin-left: 5px; font-size: 12px;
            display: inline-flex; align-items: center; justify-content: center;
            transition: transform 0.2s;
        }
        .btn-mini:hover { transform: scale(1.1); }
        .btn-read { background: #0984e3; } 
        .btn-trans { background: #00b894; } 
        
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
        
        .dynamic-zone { margin-top: 20px; padding: 20px; background: #edfffa; border: 2px dashed #b2f5ea; border-radius: 10px; display: none; }
        .dynamic-zone.active { display: block; animation: popIn 0.5s; }
        @keyframes popIn { from { opacity:0; scale:0.95; } to { opacity:1; scale:1; } }

        /* 测试进度条 */
        .progress-bar {
            width: 100%; height: 10px; background: #e0e0e0; border-radius: 5px; margin: 15px 0; overflow: hidden;
        }
        .progress-fill {
            height: 100%; background: #00b894; width: 0%; transition: width 0.3s;
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
                    <strong class="jp-text" style="color:#00b894;"><?php echo $item['term_jp']; ?></strong>
                    <button class="btn-mini btn-read" onclick="readText(this, true)">🔊</button>
                </div>
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
                <h3 style="margin:0 0 5px 0; font-size:1.1rem; color:#00b894;"><?php echo $item['name_jp']; ?></h3>
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

    <div class="card" style="border-left-color: #f1c40f;">
        <div class="card-title" style="color: #d35400;">
            <span>解法のテクニック (Technique)</span>
            <button class="btn-generate" style="background:#f39c12;" onclick="generateSkill()">⚡ 生成技巧</button>
        </div>
        <div id="skill-dynamic" class="dynamic-zone" style="background:#fffaf0; border-color:#ffe0b2;"></div>
    </div>

    <div class="card">
        <div class="card-title">
            <span>スキルアップ演習 (Drills)</span>
            <button class="btn-generate" style="background:#0984e3;" onclick="generateDrill()">⚡ 生成练习</button>
        </div>
        <div id="drill-dynamic" class="dynamic-zone" style="background:#e3f2fd; border-color:#90caf9;"></div>
    </div>

    <div class="card">
        <div class="card-title">
            <span>確認テスト (Final Test)</span>
            <button class="btn-generate" style="background:#00b894;" onclick="startTest()">⚡ 开始挑战 (10問)</button>
        </div>

        <div id="test-scoreboard" style="display:none;">
            <div class="score-board">
                <span id="question-counter">Question: 1 / 10</span>
                <span id="score-counter" style="color:#00b894;">Score: 0</span>
            </div>
            <div class="progress-bar"><div class="progress-fill" id="progress-fill"></div></div>
        </div>

        <div id="test-area" class="dynamic-zone" style="display:block; background:#edfffa; border-color:#b2f5ea;">
            <p style="text-align:center; color:#666;">点击“开始挑战”进行10道题的测试。<br>答对 6 道以上即过关！</p>
        </div>
    </div>

</div>

<div class="modal-overlay" id="resultModal">
    <div class="modal-content">
        <div id="modal-icon" style="font-size:4rem;">🎉</div>
        <h2 id="modal-title" style="color:#00b894;">Result</h2>
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
            <div style="margin:10px 0; padding:10px; background:#fff; border-left:3px solid #f1c40f;">
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
                <button class="btn-generate" style="background:#0984e3;" onclick="revealTestAnswer('${uid}')">👁️ 显示答案</button>
            </div>
            <div id="${uid}" style="display:none; animation:fadeIn 0.5s;">
                <div class="math-block"><strong>正解：</strong> ${data.a}</div>
                <p style="text-align:center;">正解しましたか？</p>
                <div style="display:flex; justify-content:center; gap:20px;">
                    <button class="btn-generate" style="background:#00b894;" onclick="recordResult(true)">✅ Yes</button>
                    <button class="btn-generate" style="background:#e74c3c;" onclick="recordResult(false)">❌ No</button>
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
            title.style.color = "#00b894";
            msg.innerHTML = `你的得分: <b>${score} / 10</b><br>恭喜过关，继续加油！`;
        } else {
            icon.innerText = "💪";
            title.innerText = "不合格... (Failed)";
            title.style.color = "#e74c3c";
            msg.innerHTML = `你的得分: <b>${score} / 10</b><br>还需努力，请重新挑战！`;
        }
        modal.style.display = "flex";
    }

    function closeModal() {
        document.getElementById('resultModal').style.display = "none";
        document.getElementById('test-area').innerHTML = '<p style="text-align:center;">测试結束。点击按钮重新开始。</p>';
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