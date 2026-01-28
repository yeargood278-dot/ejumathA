<?php
// ==========================================
// 1. 基础配置与导航数据
// ==========================================
$chapterID = 2;
$chapterTitleJP = "第2章：2次関数 (数学I)";
$chapterTitleCN = "第2章：二次函数（数学I）";
// 配色方案：紫罗兰色系 (区别于第1章的粉色)
$colorTheme = "linear-gradient(135deg, #a18cd1 0%, #fbc2eb 100%)";
$primaryColor = "#9b59b6"; 
$totalChapters = 14;

// ==========================================
// 2. 丰富后的内容数据库 (PHP数组)
//    依据 EJU 考纲 第2章：二次函数
// ==========================================

// A. 考点清单
$exam_points = [
    ['jp' => '2次関数のグラフと頂点（平方完成）', 'cn' => '二次函数的图像与顶点（配方法）'],
    ['jp' => '関数の値の変化、最大値・最小値（定義域の有無）', 'cn' => '函数值的变化、最大值与最小值（有无定义域）'],
    ['jp' => '2次関数の決定（頂点や通る3点が与えられた場合）', 'cn' => '二次函数的确定（给定顶点或经过的3点）'],
    ['jp' => '2次方程式の解法（因数分解、解の公式）', 'cn' => '二次方程的解法（因数分解、求根公式）'],
    ['jp' => '判別式 $D$ と実数解の個数', 'cn' => '判别式 $D$ 与实数解的个数'],
    ['jp' => '2次不等式の解法とグラフの位置関係', 'cn' => '二次不等式的解法与图像的位置关系'],
    ['jp' => '放物線と直線の共有点（接する条件など）', 'cn' => '抛物线与直线的交点（相切条件等）']
];

// B. 重要概念
$concepts = [
    [
        'term_jp' => '平方完成 (へいほうかんせい)',
        'desc_jp' => '$y=ax^2+bx+c$ を $y=a(x-p)^2+q$ の形に変形すること。頂点 $(p,q)$ がわかる。',
        'desc_cn' => '将 $y=ax^2+bx+c$ 变形为 $y=a(x-p)^2+q$ 的形式。由此可知顶点 $(p,q)$。'
    ],
    [
        'term_jp' => '判別式 (はんべつしき)',
        'desc_jp' => '$ax^2+bx+c=0$ において、$D=b^2-4ac$。$D>0$ なら異なる2つの実数解、$D=0$ なら重解、$D<0$ なら実数解なし。',
        'desc_cn' => '对于 $ax^2+bx+c=0$，判别式 $D=b^2-4ac$。$D>0$ 有两个不同实根，$D=0$ 有重根，$D<0$ 无实根。'
    ],
    [
        'term_jp' => '上に凸・下に凸',
        'desc_jp' => '$a>0$ のときグラフは下に凸（谷型）、$a<0$ のとき上に凸（山型）。',
        'desc_cn' => '当 $a>0$ 时图像开口向上（下凸/谷型），当 $a<0$ 时图像开口向下（上凸/山型）。'
    ]
];

// C. 公式理论
$formulas = [
    [
        'name_jp' => '2次方程式の解の公式',
        'content_jp' => '$$ x = \frac{-b \pm \sqrt{b^2 - 4ac}}{2a} $$',
        'note_jp' => '$b$ が偶数の場合の簡易公式も覚えておくと便利。',
        'note_cn' => '记住 $b$ 为偶数时的简化公式会很方便。'
    ],
    [
        'name_jp' => '放物線の平行移動',
        'content_jp' => '$x$ 軸方向に $p$、$y$ 軸方向に $q$ 平行移動すると： $$ y - q = f(x - p) $$',
        'note_jp' => '頂点の移動として考えるとわかりやすい。',
        'note_cn' => '将其看作顶点的移动会更容易理解。'
    ],
    [
        'name_jp' => '解と係数の関係',
        'content_jp' => '2解を $\alpha, \beta$ とすると： $$ \alpha + \beta = -\frac{b}{a}, \quad \alpha\beta = \frac{c}{a} $$',
        'note_jp' => '式の値を求める問題で頻出。',
        'note_cn' => '在求代数式值的问题中经常出现。'
    ]
];

// ==========================================
// 3. 动态题库 (PHP数组 -> JSON)
// ==========================================

// 例题库
$pool_examples = [
    [
        'q_jp' => '2次関数 $y = 2x^2 - 8x + 5$ の頂点を求めよ。',
        'q_cn' => '求二次函数 $y = 2x^2 - 8x + 5$ 的顶点。',
        'think_jp' => '平方完成を行う。$x$ の係数の半分の2乗を足して引く。',
        'think_cn' => '进行配方。加上并减去 $x$ 系数一半的平方。',
        'sol' => '$$ y = 2(x^2 - 4x) + 5 $$ $$ = 2\{(x-2)^2 - 4\} + 5 $$ $$ = 2(x-2)^2 - 8 + 5 $$ $$ = 2(x-2)^2 - 3 $$ <br> 頂点は $(2, -3)$'
    ],
    [
        'q_jp' => '$x$ の2次不等式 $x^2 - x - 6 < 0$ を解け。',
        'q_cn' => '解关于 $x$ 的二次不等式 $x^2 - x - 6 < 0$。',
        'think_jp' => '左辺を因数分解し、グラフが $x$ 軸より下にある範囲を求める。',
        'think_cn' => '将左边因式分解，找出图像位于 $x$ 轴下方的范围。',
        'sol' => '$$ (x-3)(x+2) < 0 $$ グラフを描くと $-2$ と $3$ の間なので、 $$ -2 < x < 3 $$'
    ]
];

// 技巧库
$pool_skills = [
    ['jp' => '最大・最小問題で定義域に文字が含まれる場合、軸と定義域の位置関係で「場合分け」をする。', 'cn' => '在含有参数定义域的最大最小问题中，根据对称轴与定义域的位置关系进行“分类讨论”。'],
    ['jp' => '「すべての実数 $x$ で成り立つ」不等式は、判別式 $D < 0$ かつ $a$ の符号（グラフの浮き沈み）を確認。', 'cn' => '“对所有实数 $x$ 成立”的不等式，需确认判别式 $D < 0$ 以及 $a$ 的符号（图像的悬浮状态）。']
];

// 练习库
$pool_drills = [
    ['jp' => '因数分解せよ： $2x^2 - 5x - 3$', 'ans' => '$(2x+1)(x-3)$'],
    ['jp' => '平方完成せよ： $x^2 + 6x$', 'ans' => '$(x+3)^2 - 9$'],
    ['jp' => '判別式を計算せよ： $x^2 + 4x + 5 = 0$', 'ans' => '$D = 16 - 20 = -4$']
];

// 测试库 (10道题)
$pool_tests = [
    ['q' => '$y=-(x-1)^2+2$ の頂点の座標は？', 'a' => '$(1, 2)$'],
    ['q' => '$2x^2+3x+1=0$ を解け。', 'a' => '$x = -1, -\frac{1}{2}$'],
    ['q' => '$x^2-9 > 0$ の解は？', 'a' => '$x < -3, 3 < x$'],
    ['q' => '$y=x^2-4x+3$ の最小値は？', 'a' => '$-1$ ($x=2$のとき)'],
    ['q' => '放物線 $y=x^2$ を $x$ 軸方向に $+2$ 平行移動した式は？', 'a' => '$y=(x-2)^2$'],
    ['q' => '$x^2+kx+9=0$ が重解を持つときの $k$ の値は？', 'a' => '$k = \pm 6$'],
    ['q' => '2次関数が決まるには、最低いくつの点が必要？', 'a' => '3点 (Three points)'],
    ['q' => '$y=-x^2$ のグラフは上に凸か下に凸か？', 'a' => '上に凸 (Concave down/山型)'],
    ['q' => '$x^2+x+1=0$ の判別式 $D$ の符号は？', 'a' => '負 ($D = 1-4 = -3 < 0$)'],
    ['q' => '放物線と $x$ 軸の共有点の個数は $D>0$ のときいくつか？', 'a' => '2個 (Two points)']
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
            --bg-color: #f3f0f7; /* 浅紫色背景 */
            --card-bg: #ffffff;
            --text-main: #2d3436;
            --btn-gen: #9b59b6; /* 按钮改为紫色系 */
            --btn-gen-hover: #8e44ad;
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
            box-shadow: 0 5px 15px rgba(155, 89, 182, 0.4);
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
        .btn-read { background: #3498db; } /* 蓝色读音按钮 */
        .btn-trans { background: #2ecc71; } /* 绿色翻译按钮 */
        
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
        
        .dynamic-zone { margin-top: 20px; padding: 20px; background: #fbf8ff; border: 2px dashed #dcd6f7; border-radius: 10px; display: none; }
        .dynamic-zone.active { display: block; animation: popIn 0.5s; }
        @keyframes popIn { from { opacity:0; scale:0.95; } to { opacity:1; scale:1; } }

        /* 测试进度条 */
        .progress-bar {
            width: 100%; height: 10px; background: #e0e0e0; border-radius: 5px; margin: 15px 0; overflow: hidden;
        }
        .progress-fill {
            height: 100%; background: #9b59b6; width: 0%; transition: width 0.3s;
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
                    <strong class="jp-text" style="color:#8e44ad;"><?php echo $item['term_jp']; ?></strong>
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
                <h3 style="margin:0 0 5px 0; font-size:1.1rem; color:#8e44ad;"><?php echo $item['name_jp']; ?></h3>
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
            <button class="btn-generate" style="background:#2ecc71;" onclick="generateDrill()">⚡ 生成练习</button>
        </div>
        <div id="drill-dynamic" class="dynamic-zone" style="background:#e8f8f5; border-color:#a2d9ce;"></div>
    </div>

    <div class="card">
        <div class="card-title">
            <span>確認テスト (Final Test)</span>
            <button class="btn-generate" style="background:#9b59b6;" onclick="startTest()">⚡ 开始挑战 (10問)</button>
        </div>

        <div id="test-scoreboard" style="display:none;">
            <div class="score-board">
                <span id="question-counter">Question: 1 / 10</span>
                <span id="score-counter" style="color:#9b59b6;">Score: 0</span>
            </div>
            <div class="progress-bar"><div class="progress-fill" id="progress-fill"></div></div>
        </div>

        <div id="test-area" class="dynamic-zone" style="display:block; background:#f5eef8; border-color:#d7bde2;">
            <p style="text-align:center; color:#666;">点击“开始挑战”进行10道题的测试。<br>答对 6 道以上即过关！</p>
        </div>
    </div>

</div>

<div class="modal-overlay" id="resultModal">
    <div class="modal-content">
        <div id="modal-icon" style="font-size:4rem;">🎉</div>
        <h2 id="modal-title" style="color:#9b59b6;">Result</h2>
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
                <button class="btn-generate" style="background:#8e44ad;" onclick="revealTestAnswer('${uid}')">👁️ 显示答案</button>
            </div>
            <div id="${uid}" style="display:none; animation:fadeIn 0.5s;">
                <div class="math-block"><strong>正解：</strong> ${data.a}</div>
                <p style="text-align:center;">正解しましたか？</p>
                <div style="display:flex; justify-content:center; gap:20px;">
                    <button class="btn-generate" style="background:#2ecc71;" onclick="recordResult(true)">✅ Yes</button>
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
            title.style.color = "#2ecc71";
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