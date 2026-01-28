<?php
// ==========================================
// 1. 基础配置与导航数据
// ==========================================
$chapterID = 4;
$chapterTitleJP = "第4章：場合の数と確率 (数学A)";
$chapterTitleCN = "第4章：计数与概率（数学A）";
// 配色方案：暖橙/夕阳色 (Warm Orange/Sunset)
$colorTheme = "linear-gradient(135deg, #fccb90 0%, #d57eeb 100%)";
$primaryColor = "#e67e22"; 
$totalChapters = 14;

// ==========================================
// 2. 丰富后的内容数据库 (PHP数组)
//    依据 EJU 考纲 第4章：计数与概率
// ==========================================

// A. 考点清单
$exam_points = [
    ['jp' => '集合の要素の個数（和集合・共通部分・補集合）', 'cn' => '集合的元素个数（并集、交集、补集）'],
    ['jp' => '順列 $_nP_r$ と階乗 $n!$（円順列・重複順列含む）', 'cn' => '排列 $_nP_r$ 与阶乘 $n!$（含圆排列、重复排列）'],
    ['jp' => '組合せ $_nC_r$ とその性質', 'cn' => '组合 $_nC_r$ 及其性质'],
    ['jp' => '確率の定義と基本性質（和事象・余事象）', 'cn' => '概率的定义与基本性质（和事件、对立事件）'],
    ['jp' => '独立な試行の確率（反復試行の確率）', 'cn' => '独立试验的概率（独立重复试验/伯努利试验）'],
    ['jp' => '条件付き確率と確率の乗法定理', 'cn' => '条件概率与概率乘法公式']
];

// B. 重要概念
$concepts = [
    [
        'term_jp' => '順列と組合せの違い',
        'desc_jp' => '順列 (Permutation) は「並び順を区別する」。組合せ (Combination) は「選ぶだけで順序は関係ない」。',
        'desc_cn' => '排列 (P) “区分顺序”。组合 (C) “只管选择，与顺序无关”。'
    ],
    [
        'term_jp' => '余事象 (よじしょう)',
        'desc_jp' => '「少なくとも1つ〜」という問題では、全体から「〜が起こらない」確率を引くほうが早い場合が多い ($1 - P(\bar{A})$)。',
        'desc_cn' => '遇到“至少有一个~”的问题时，用整体减去“~不发生”的概率通常更快 ($1 - P(\bar{A})$)。'
    ],
    [
        'term_jp' => '条件付き確率',
        'desc_jp' => '事象 $A$ が起こったという条件のもとで、事象 $B$ が起こる確率。$P_A(B) = \frac{P(A \cap B)}{P(A)}$ で表す。',
        'desc_cn' => '在事件 $A$ 发生的条件下，事件 $B$ 发生的概率。表示为 $P_A(B) = \frac{P(A \cap B)}{P(A)}$。'
    ]
];

// C. 公式理论
$formulas = [
    [
        'name_jp' => '順列・組合せの公式',
        'content_jp' => '$$ _nP_r = n(n-1)\cdots(n-r+1) $$ $$ _nC_r = \frac{_nP_r}{r!} = \frac{n!}{r!(n-r)!} $$',
        'note_jp' => '$0! = 1$, $_nC_0 = 1$ も覚えておくこと。',
        'note_cn' => '记住 $0! = 1$, $_nC_0 = 1$。'
    ],
    [
        'name_jp' => '反復試行の確率',
        'content_jp' => '$$ _nC_k p^k (1-p)^{n-k} $$',
        'note_jp' => '確率 $p$ の事象が $n$ 回中ちょうど $k$ 回起こる確率。',
        'note_cn' => '概率为 $p$ 的事件在 $n$ 次试验中恰好发生 $k$ 次的概率。'
    ],
    [
        'name_jp' => '和集合の要素の個数',
        'content_jp' => '$$ n(A \cup B) = n(A) + n(B) - n(A \cap B) $$',
        'note_jp' => '重複している部分 $A \cap B$ を1回引くのを忘れない。',
        'note_cn' => '不要忘记减去重复的 $A \cap B$ 部分一次。'
    ]
];

// ==========================================
// 3. 动态题库 (PHP数组 -> JSON)
// ==========================================

// 例题库
$pool_examples = [
    [
        'q_jp' => '男子3人、女子2人が1列に並ぶとき、女子2人が隣り合う並び方は何通りか。',
        'q_cn' => '男生3人，女生2人排成一列，女生2人相邻的排法有多少种？',
        'think_jp' => '隣り合う女子2人を「1つのセット」とみなして、全体を並べ、その中で女子2人の並び替えを考える。',
        'think_cn' => '将相邻的2名女生看作“一个整体”，先排列整体，再考虑这2名女生内部的排列。',
        'sol' => '$$ (3+1)! \times 2! = 4! \times 2 = 24 \times 2 = 48 \text{ 通り} $$'
    ],
    [
        'q_jp' => '1個のサイコロを3回投げるとき、少なくとも1回は6の目が出る確率を求めよ。',
        'q_cn' => '投掷一颗骰子3次，求至少有一次掷出6点的概率。',
        'think_jp' => '「少なくとも〜」なので、余事象「3回とも6以外が出る」確率を全体から引く。',
        'think_cn' => '因为是“至少~”，所以用整体减去对立事件“3次都不是6”的概率。',
        'sol' => '6以外が出る確率は $\frac{5}{6}$。 <br> $$ 1 - \left(\frac{5}{6}\right)^3 = 1 - \frac{125}{216} = \frac{91}{216} $$'
    ]
];

// 技巧库
$pool_skills = [
    ['jp' => '円順列は「1人を固定」して考える。$n$ 人の円順列は $(n-1)!$ 通り。', 'cn' => '圆排列思考方法是“固定1人”。$n$ 人的圆排列为 $(n-1)!$ 种。'],
    ['jp' => '条件付き確率は「分母が縮小される」とイメージする。全事象 $U$ ではなく、条件 $A$ が新しい全体になる。', 'cn' => '条件概率可想象为“分母缩小”。全事件不再是 $U$，条件 $A$ 变成了新的整体。'],
    ['jp' => '「$0,1,2,3$」から数字を作る問題では、最高位に $0$ が来ないことに注意。', 'cn' => '用“0,1,2,3”组成数字的问题，注意最高位不能是 0。']
];

// 练习库
$pool_drills = [
    ['jp' => '計算せよ： $_7C_2$', 'ans' => '$21$'],
    ['jp' => '計算せよ： $_5P_3$', 'ans' => '$60$'],
    ['jp' => '赤玉3個、白玉2個の袋から2個同時に取り出すとき、2個とも赤玉である確率は？', 'ans' => '$\frac{_3C_2}{_5C_2} = \frac{3}{10}$'],
    ['jp' => '異なる5冊の本から3冊選ぶ方法は？', 'ans' => '$_5C_3 = 10 \text{ 通り}$']
];

// 测试库 (10道题)
$pool_tests = [
    ['q' => '5人の生徒から委員長、副委員長を1人ずつ選ぶ方法は？', 'a' => '20通り ($_5P_2$)'],
    ['q' => '5人の生徒から掃除当番を2人選ぶ方法は？', 'a' => '10通り ($_5C_2$)'],
    ['q' => 'コインを5回投げるとき、表がちょうど3回出る確率は？', 'a' => '$\frac{5}{16}$ ($_5C_3 (\frac{1}{2})^5$)'],
    ['q' => '$A, B$ が互いに排反であるとき、$P(A \cap B)$ は？', 'a' => '$0$'],
    ['q' => '男子4人が円卓に座る座り方は何通り？', 'a' => '6通り ($(4-1)!$)'],
    ['q' => '10本のくじの中に当たりが3本。1本引いて当たる確率は？', 'a' => '$\frac{3}{10}$'],
    ['q' => '$_nC_r = _nC_?$ の $?$ に入る式は？', 'a' => '$n-r$'],
    ['q' => '事象 $A$ と $B$ が独立のとき、$P(A \cap B) = ?$ ', 'a' => '$P(A) \times P(B)$'],
    ['q' => '集合 $A=\{1,2\}, B=\{2,3\}$ のとき、$n(A \cup B)$ は？', 'a' => '$3$ ($1,2,3$)'],
    ['q' => '$0,1,2$ の3枚を並べてできる3桁の整数の個数は？', 'a' => '4個 ($2 \times 2 \times 1$)']
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
            --bg-color: #fff5eb; /* 浅橙色背景 */
            --card-bg: #ffffff;
            --text-main: #2d3436;
            --btn-gen: #e67e22; /* 按钮改为暖橙色 */
            --btn-gen-hover: #d35400;
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
            box-shadow: 0 5px 15px rgba(230, 126, 34, 0.4);
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
        .btn-read { background: #3498db; } 
        .btn-trans { background: #27ae60; } 
        
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
        
        .dynamic-zone { margin-top: 20px; padding: 20px; background: #fff8f0; border: 2px dashed #fad390; border-radius: 10px; display: none; }
        .dynamic-zone.active { display: block; animation: popIn 0.5s; }
        @keyframes popIn { from { opacity:0; scale:0.95; } to { opacity:1; scale:1; } }

        /* 测试进度条 */
        .progress-bar {
            width: 100%; height: 10px; background: #e0e0e0; border-radius: 5px; margin: 15px 0; overflow: hidden;
        }
        .progress-fill {
            height: 100%; background: #e67e22; width: 0%; transition: width 0.3s;
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
                    <strong class="jp-text" style="color:#e67e22;"><?php echo $item['term_jp']; ?></strong>
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
                <h3 style="margin:0 0 5px 0; font-size:1.1rem; color:#d35400;"><?php echo $item['name_jp']; ?></h3>
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

    <div class="card" style="border-left-color: #9b59b6;">
        <div class="card-title" style="color: #8e44ad;">
            <span>解法のテクニック (Technique)</span>
            <button class="btn-generate" style="background:#9b59b6;" onclick="generateSkill()">⚡ 生成技巧</button>
        </div>
        <div id="skill-dynamic" class="dynamic-zone" style="background:#f3e5f5; border-color:#e1bee7;"></div>
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
            <button class="btn-generate" style="background:#e67e22;" onclick="startTest()">⚡ 开始挑战 (10問)</button>
        </div>

        <div id="test-scoreboard" style="display:none;">
            <div class="score-board">
                <span id="question-counter">Question: 1 / 10</span>
                <span id="score-counter" style="color:#e67e22;">Score: 0</span>
            </div>
            <div class="progress-bar"><div class="progress-fill" id="progress-fill"></div></div>
        </div>

        <div id="test-area" class="dynamic-zone" style="display:block; background:#fff8f0; border-color:#ffe0b2;">
            <p style="text-align:center; color:#666;">点击“开始挑战”进行10道题的测试。<br>答对 6 道以上即过关！</p>
        </div>
    </div>

</div>

<div class="modal-overlay" id="resultModal">
    <div class="modal-content">
        <div id="modal-icon" style="font-size:4rem;">🎉</div>
        <h2 id="modal-title" style="color:#e67e22;">Result</h2>
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
            <div style="margin:10px 0; padding:10px; background:#fff; border-left:3px solid #9b59b6;">
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
                <button class="btn-generate" style="background:#9b59b6;" onclick="revealTestAnswer('${uid}')">👁️ 显示答案</button>
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