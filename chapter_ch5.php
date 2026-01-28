<?php
// ==========================================
// 1. 基础配置与导航数据
// ==========================================
$chapterID = 5;
$chapterTitleJP = "第5章：整数の性質 (数学A)";
$chapterTitleCN = "第5章：整数的性质（数学A）";
// 配色方案：天空蓝/蔚蓝 (Sky Blue/Azure)
$colorTheme = "linear-gradient(135deg, #89f7fe 0%, #66a6ff 100%)";
$primaryColor = "#0984e3"; 
$totalChapters = 14;

// ==========================================
// 2. 丰富后的内容数据库 (PHP数组)
//    依据 EJU 考纲 第5章：整数的性质
// ==========================================

// A. 考点清单
$exam_points = [
    ['jp' => '約数と倍数、素因数分解（約数の個数と総和）', 'cn' => '约数与倍数、质因数分解（约数个数与总和）'],
    ['jp' => '最大公約数 (GCD) と最小公倍数 (LCM) の関係', 'cn' => '最大公约数 (GCD) 与最小公倍数 (LCM) 的关系'],
    ['jp' => 'ユークリッドの互除法（最大公約数を求める手順）', 'cn' => '欧几里得互除法（求最大公约数的步骤）'],
    ['jp' => '1次不定方程式 $ax + by = c$ の整数解', 'cn' => '一次不定方程 $ax + by = c$ 的整数解'],
    ['jp' => '合同式（mod）の利用（余りの計算）', 'cn' => '同余式 (mod) 的应用（余数计算）'],
    ['jp' => '$n$ 進法の表し方と変換', 'cn' => '$n$ 进制的表示与转换']
];

// B. 重要概念
$concepts = [
    [
        'term_jp' => '互いに素 (たがいにそ)',
        'desc_jp' => '2つの整数 $a, b$ の最大公約数が $1$ であるとき、$a$ と $b$ は互いに素であるという。',
        'desc_cn' => '当两个整数 $a, b$ 的最大公约数为 $1$ 时，称 $a$ 和 $b$ 互质。'
    ],
    [
        'term_jp' => 'ユークリッドの互除法',
        'desc_jp' => '$a$ を $b$ で割った余りを $r$ とすると、$GCD(a, b) = GCD(b, r)$ が成り立つ。これを繰り返して最大公約数を求める。',
        'desc_cn' => '设 $a$ 除以 $b$ 的余数为 $r$，则 $GCD(a, b) = GCD(b, r)$ 成立。重复此步骤可求最大公约数。'
    ],
    [
        'term_jp' => '素数 (そすう)',
        'desc_jp' => '$1$ と自分自身以外に正の約数を持たない自然数。$1$ は素数ではない。',
        'desc_cn' => '除了 $1$ 和自身以外没有正约数的自然数。$1$ 不是质数。'
    ]
];

// C. 公式理论
$formulas = [
    [
        'name_jp' => 'GCDとLCMの関係',
        'content_jp' => '自然数 $a, b$ の最大公約数を $g$、最小公倍数を $l$ とすると： $$ ab = gl $$',
        'note_jp' => '2つの数の積は、最大公約数と最小公倍数の積に等しい。',
        'note_cn' => '两个数的积等于它们的最大公约数与最小公倍数的积。'
    ],
    [
        'name_jp' => '約数の個数と総和',
        'content_jp' => '素因数分解 $N = p^a q^b r^c \cdots$ のとき<br>個数：$(a+1)(b+1)(c+1)\cdots$ <br>総和：$(1+p+\cdots+p^a)(1+q+\cdots+q^b)\cdots$',
        'note_jp' => '組み合わせの原理に基づく。',
        'note_cn' => '基于组合原理。'
    ],
    [
        'name_jp' => '不定方程式の解',
        'content_jp' => '$ax + by = 1$ の特殊解 $(p, q)$ が見つかれば、一般解は $x = bk + p, y = -ak + q$ ($k$は整数)。',
        'note_jp' => '互除法を逆算して特殊解を見つけることが多い。',
        'note_cn' => '常通过倒推互除法来寻找特殊解。'
    ]
];

// ==========================================
// 3. 动态题库 (PHP数组 -> JSON)
// ==========================================

// 例题库
$pool_examples = [
    [
        'q_jp' => '不定方程式 $4x + 7y = 1$ の整数解をすべて求めよ。',
        'q_cn' => '求不定方程 $4x + 7y = 1$ 的所有整数解。',
        'think_jp' => 'まず特殊解を1つ見つける（例えば $x=2, y=-1$）。それを利用して一般解を導く。',
        'think_cn' => '先找到一个特殊解（例如 $x=2, y=-1$），利用它推导通解。',
        'sol' => '特殊解は $4(2) + 7(-1) = 1$。 <br> 元の式と引くと $4(x-2) + 7(y+1) = 0 \implies 4(x-2) = -7(y+1)$。<br> 4と7は互いに素なので、$x-2=7k, y+1=-4k$。<br> よって $x = 7k+2, y = -4k-1$ ($k$は整数)。'
    ],
    [
        'q_jp' => 'ユークリッドの互除法を用いて、$221$ と $143$ の最大公約数を求めよ。',
        'q_cn' => '利用欧几里得互除法求 $221$ 和 $143$ 的最大公约数。',
        'think_jp' => '大きい数を小さい数で割り、余りで割る操作を割り切れるまで繰り返す。',
        'think_cn' => '用大数除以小数，再用余数去除除数，重复直到余数为0。',
        'sol' => '$$ 221 = 143 \times 1 + 78 $$ $$ 143 = 78 \times 1 + 65 $$ $$ 78 = 65 \times 1 + 13 $$ $$ 65 = 13 \times 5 + 0 $$ 割り切れた時の除数が最大公約数なので、答えは $13$。'
    ]
];

// 技巧库
$pool_skills = [
    ['jp' => '余りの計算（mod）は、足し算・引き算・掛け算・累乗ができる。割り算は注意が必要。', 'cn' => '同余运算（mod）支持加、减、乘、乘方。除法需特别小心。'],
    ['jp' => '「$n!$ の末尾に0がいくつ並ぶか」は、素因数 $5$ の個数を数えればよい（$2$ の個数は十分にあるため）。', 'cn' => '求“$n!$ 末尾有几个0”，只需统计质因数 $5$ 的个数（因为 $2$ 的个数通常足够）。'],
    ['jp' => '3つの数のGCDは、まず2つのGCDを求め、その結果と残り1つのGCDを求めればよい。', 'cn' => '求三个数的GCD，先求两个数的GCD，再求该结果与第三个数的GCD。']
];

// 练习库
$pool_drills = [
    ['jp' => '360 の正の約数の個数は？', 'ans' => '$24$ 個 ($360=2^3 \cdot 3^2 \cdot 5^1 \implies 4 \times 3 \times 2$)'],
    ['jp' => '$12$ と $18$ の最小公倍数(LCM)は？', 'ans' => '$36$'],
    ['jp' => '$7x + 3y = 1$ の特殊解 $(x, y)$ を1つ挙げよ。', 'ans' => '$(1, -2)$ など ($7(1)+3(-2)=1$)'],
    ['jp' => '$100!$ は素因数 $5$ で何回割り切れるか？', 'ans' => '$24$ 回 ($20+4$)']
];

// 测试库 (10道题)
$pool_tests = [
    ['q' => '$3x + 5y = 1$ の整数解 $(x,y)$ の一組は？', 'a' => '$(2, -1)$'],
    ['q' => '$12$ と $16$ の最大公約数 (GCD) は？', 'a' => '$4$'],
    ['q' => '$72$ の約数の個数は？', 'a' => '$12$ 個 ($72=2^3 \cdot 3^2$)'],
    ['q' => '互除法の原理：$GCD(a, b) = GCD(b, ?)$', 'a' => '$r$ (余り)'],
    ['q' => '$2025$ は $3$ の倍数か？', 'a' => 'はい ($2+0+2+5=9$)'],
    ['q' => '$n$ が偶数なら $n^2$ は $4$ の倍数である。真か偽か？', 'a' => '真 (True)'],
    ['q' => '$a, b$ が互いに素のとき、$GCD(a, b)$ は？', 'a' => '$1$'],
    ['q' => '$5$ 進法で $12_{(5)}$ を $10$ 進法で表すと？', 'a' => '$7$ ($1 \times 5 + 2$)'],
    ['q' => '自然数 $a, b$ について $ab = 24, GCD(a, b) = 2$ のとき $LCM(a, b)$ は？', 'a' => '$12$ ($24 \div 2$)'],
    ['q' => '合同式：$15 \equiv x \pmod{4}$ のとき $x$ は？', 'a' => '$3$ ($15 \div 4 = 3 \dots 3$)']
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
            --bg-color: #f0f8ff; /* AliceBlue 背景 */
            --card-bg: #ffffff;
            --text-main: #2d3436;
            --btn-gen: #0984e3; /* 按钮改为深蓝色 */
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

        /* 按钮 */
        .btn-mini {
            border: none; border-radius: 50%; width: 28px; height: 28px;
            cursor: pointer; color: white; margin-left: 5px; font-size: 12px;
            display: inline-flex; align-items: center; justify-content: center;
            transition: transform 0.2s;
        }
        .btn-mini:hover { transform: scale(1.1); }
        .btn-read { background: #00cec9; } 
        .btn-trans { background: #6c5ce7; } 
        
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
        
        .dynamic-zone { margin-top: 20px; padding: 20px; background: #eefbff; border: 2px dashed #81ecec; border-radius: 10px; display: none; }
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

    <div class="card" style="border-left-color: #00cec9;">
        <div class="card-title" style="color: #00b894;">
            <span>解法のテクニック (Technique)</span>
            <button class="btn-generate" style="background:#00cec9;" onclick="generateSkill()">⚡ 生成技巧</button>
        </div>
        <div id="skill-dynamic" class="dynamic-zone" style="background:#f0fffe; border-color:#b2f5ea;"></div>
    </div>

    <div class="card">
        <div class="card-title">
            <span>スキルアップ演習 (Drills)</span>
            <button class="btn-generate" style="background:#6c5ce7;" onclick="generateDrill()">⚡ 生成练习</button>
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

        <div id="test-area" class="dynamic-zone" style="display:block; background:#eefbff; border-color:#81ecec;">
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
            <div style="margin:10px 0; padding:10px; background:#fff; border-left:3px solid #00cec9;">
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
                    <button class="btn-generate" style="background:#00cec9;" onclick="recordResult(true)">✅ Yes</button>
                    <button class="btn-generate" style="background:#ff7675;" onclick="recordResult(false)">❌ No</button>
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
            title.style.color = "#00cec9";
            msg.innerHTML = `你的得分: <b>${score} / 10</b><br>恭喜过关，继续加油！`;
        } else {
            icon.innerText = "💪";
            title.innerText = "不合格... (Failed)";
            title.style.color = "#ff7675";
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