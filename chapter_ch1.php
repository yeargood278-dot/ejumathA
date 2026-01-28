<?php
// ==========================================
// 1. 基础配置与导航数据
// ==========================================
$chapterID = 1;
$chapterTitleJP = "第1章：数と式 (数学I)";
$chapterTitleCN = "第1章：数与式（数学I）";
$colorTheme = "linear-gradient(135deg, #FF9A9E 0%, #FECFEF 100%)";
$primaryColor = "#ff758c";
$totalChapters = 14;

// ==========================================
// 2. 丰富后的内容数据库 (PHP数组)
//    注意：在PHP单引号中，$符号不需要转义，但反斜杠建议清晰
// ==========================================

// A. 考点清单
$exam_points = [
    ['jp' => '実数の分類（有理数、無理数）と循環小数', 'cn' => '实数的分类（有理数、无理数）与循环小数'],
    ['jp' => '整式の加法・減法・乗法と展開公式', 'cn' => '整式的加减乘法与展开公式'],
    ['jp' => '因数分解（たすき掛け、複二次式、3次の公式）', 'cn' => '因数分解（十字相乘、复二次式、三次公式）'],
    ['jp' => '実数の絶対値と平方根の性質（二重根号）', 'cn' => '实数的绝对值与平方根的性质（双重根号）'],
    ['jp' => '集合の演算（共通部分、和集合、補集合）とド・モルガンの法則', 'cn' => '集合的运算（交集、并集、补集）与德摩根定律'],
    ['jp' => '命題と条件（必要条件、十分条件、対偶）', 'cn' => '命题与条件（必要条件、充分条件、逆否命题）'],
    ['jp' => '一次不等式の解法と絶対値を含む不等式', 'cn' => '一次不等式的解法与包含绝对值的不等式']
];

// B. 重要概念
$concepts = [
    [
        'term_jp' => '有理数と無理数',
        'desc_jp' => '有理数は分数 $\frac{m}{n}$ ($m,n$は整数, $n \neq 0$) で表せる数。無理数は表せない数（例：$\pi, \sqrt{2}$）。',
        'desc_cn' => '有理数是可以用分数 $\frac{m}{n}$ 表示的数。无理数是不能表示为分数的数（如 $\pi, \sqrt{2}$）。'
    ],
    [
        'term_jp' => '絶対値の定義',
        'desc_jp' => '$|a| = a (a \geqq 0)$, $|a| = -a (a < 0)$。幾何学的には原点からの距離を表す。',
        'desc_cn' => '$|a| = a (a \geqq 0)$, $|a| = -a (a < 0)$。几何上表示到原点的距离。'
    ],
    [
        'term_jp' => '必要条件と十分条件',
        'desc_jp' => '命題 $p \Rightarrow q$ が真のとき、$p$ は $q$ の十分条件、$q$ は $p$ の必要条件。矢印の先が必要。',
        'desc_cn' => '当命题 $p \Rightarrow q$ 为真时，$p$ 是 $q$ 的充分条件，$q$ 是 $p$ 的必要条件。箭头指向的是必要条件。'
    ],
    [
        'term_jp' => '対偶 (たいぐう)',
        'desc_jp' => '命題 $p \Rightarrow q$ に対して、$\bar{q} \Rightarrow \bar{p}$ を対偶という。元の命題と対偶の真偽は一致する。',
        'desc_cn' => '对于命题 $p \Rightarrow q$，$\bar{q} \Rightarrow \bar{p}$ 称为逆否命题。原命题与逆否命题的真假一致。'
    ]
];

// C. 公式理论
$formulas = [
    [
        'name_jp' => '3乗の展開・因数分解',
        'content_jp' => '$$ (a+b)^3 = a^3 + 3a^2b + 3ab^2 + b^3 $$ $$ a^3+b^3 = (a+b)(a^2-ab+b^2) $$',
        'note_jp' => '符号違いの式も暗記すること。',
        'note_cn' => '符号相反的式子也要背诵。'
    ],
    [
        'name_jp' => '二重根号の外し方',
        'content_jp' => '$$ \sqrt{a+b + 2\sqrt{ab}} = \sqrt{a} + \sqrt{b} $$',
        'note_jp' => 'ただし、$a>0, b>0$。引き算の場合は大小関係 $a>b$ に注意。',
        'note_cn' => '其中 $a>0, b>0$。减法时需注意 $a>b$。'
    ],
    [
        'name_jp' => 'ド・モルガンの法則',
        'content_jp' => '$$ \overline{A \cup B} = \overline{A} \cap \overline{B} $$ $$ \overline{A \cap B} = \overline{A} \cup \overline{B} $$',
        'note_jp' => 'バー（否定）を切ると、カップとキャップが入れ替わる。',
        'note_cn' => '切断否定横线时，并集和交集符号互换。'
    ]
];

// ==========================================
// 3. 动态题库 (PHP数组 -> JSON)
// ==========================================

// 例题库
$pool_examples = [
    [
        'q_jp' => '因数分解せよ： $x^4 - 8x^2 - 9$',
        'q_cn' => '分解因式：$x^4 - 8x^2 - 9$',
        'think_jp' => '$x^2 = t$ とおいて、$t$ の2次式として扱う。',
        'think_cn' => '设 $x^2 = t$，作为 $t$ 的二次式处理。',
        'sol' => '$$ (x^2-9)(x^2+1) = (x+3)(x-3)(x^2+1) $$'
    ],
    [
        'q_jp' => '$\sqrt{7+2\sqrt{10}}$ を簡単にせよ。',
        'q_cn' => '化简 $\sqrt{7+2\sqrt{10}}$。',
        'think_jp' => '足して7、掛けて10になる2つの数を見つける。',
        'think_cn' => '寻找和为7、积为10的两个数。',
        'sol' => '$$ 5+2=7, 5 \times 2 = 10 \implies \sqrt{5} + \sqrt{2} $$'
    ]
];

// 技巧库
$pool_skills = [
    ['jp' => '$\sqrt{A^2}=|A|$ の性質は、文字式の場合に符号ミスを防ぐ重要テクニック。', 'cn' => '$\sqrt{A^2}=|A|$ 是防止字母表达式符号错误的重要技巧。'],
    ['jp' => '「$p$ は $q$ であるための〜条件」問題は、矢印 $p \Rightarrow q$ が真なら十分、逆なら必要と覚える。', 'cn' => '“p是q的~条件”问题，箭头 $p \Rightarrow q$ 为真则是充分，反之则是必要。']
];

// 练习库
$pool_drills = [
    ['jp' => '展開せよ： $(a+b+c)^2$', 'ans' => '$a^2+b^2+c^2+2ab+2bc+2ca$'],
    ['jp' => '計算せよ： $|2-\sqrt{5}|$', 'ans' => '$\sqrt{5}-2$']
];

// 测试库 (10道题示例)
$pool_tests = [
    ['q' => '$|x-2| < 3$ を解け。', 'a' => '$-1 < x < 5$'],
    ['q' => '$x^2+xy-6y^2$ を因数分解せよ。', 'a' => '$(x+3y)(x-2y)$'],
    ['q' => '$\sqrt{4-2\sqrt{3}}$ を簡単にせよ。', 'a' => '$\sqrt{3}-1$'],
    ['q' => '$\frac{1}{\sqrt{2}+1}$ の有理化。', 'a' => '$\sqrt{2}-1$'],
    ['q' => '集合 $\{1,2\} \subset \{1,2,3\}$ は真か偽か。', 'a' => '真 (True)'],
    ['q' => '$x=0$ は $xy=0$ であるための何条件か？', 'a' => '十分条件 (Sufficient)'],
    ['q' => '$x^3-27$ を因数分解せよ。', 'a' => '$(x-3)(x^2+3x+9)$'],
    ['q' => '$0.\dot{1}$ を分数になおせ。', 'a' => '$\frac{1}{9}$'],
    ['q' => '$\sqrt{(-3)^2}$ の値は？', 'a' => '$3$'],
    ['q' => '命題「$x>1 \Rightarrow x>0$」の逆は？', 'a' => '$x>0 \Rightarrow x>1$ (偽)']
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
        inlineMath: [['$', '$'], ['\\(', '\\)']], // 允许使用 $...$
        displayMath: [['$$', '$$'], ['\\[', '\\]']] // 允许使用 $$...$$
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
            --bg-color: #f0f4f8;
            --card-bg: #ffffff;
            --text-main: #2d3436;
            --btn-gen: #6c5ce7; 
            --btn-gen-hover: #5649c0;
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
            box-shadow: 0 5px 15px rgba(255, 117, 140, 0.4);
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
        .btn-read { background: #4facfe; }
        .btn-trans { background: #43e97b; }
        
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
            font-size: 1.1rem; /* 增加公式字体大小以便阅读 */
        }
        
        .dynamic-zone { margin-top: 20px; padding: 20px; background: #fdf6ff; border: 2px dashed #dcd6f7; border-radius: 10px; display: none; }
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
                    <strong class="jp-text" style="color:#d63031;"><?php echo $item['term_jp']; ?></strong>
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
                <h3 style="margin:0 0 5px 0; font-size:1.1rem; color:#0984e3;"><?php echo $item['name_jp']; ?></h3>
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

    <div class="card" style="border-left-color: #fdcb6e;">
        <div class="card-title" style="color: #d35400;">
            <span>解法のテクニック (Technique)</span>
            <button class="btn-generate" style="background:#e17055;" onclick="generateSkill()">⚡ 生成技巧</button>
        </div>
        <div id="skill-dynamic" class="dynamic-zone" style="background:#fff4e6; border-color:#ffe0b2;"></div>
    </div>

    <div class="card">
        <div class="card-title">
            <span>スキルアップ演習 (Drills)</span>
            <button class="btn-generate" style="background:#00b894;" onclick="generateDrill()">⚡ 生成练习</button>
        </div>
        <div id="drill-dynamic" class="dynamic-zone" style="background:#e6fffa; border-color:#b2f5ea;"></div>
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

        <div id="test-area" class="dynamic-zone" style="display:block; background:#e3f2fd; border-color:#90caf9;">
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
            <div style="margin:10px 0; padding:10px; background:#fff; border-left:3px solid #fdcb6e;">
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
            title.style.color = "#00b894";
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