<?php
// ==========================================
// 1. 基础配置与导航数据
// ==========================================
$chapterID = 12;
$chapterTitleJP = "第12章：数列 (数学B)";
$chapterTitleCN = "第12章：数列（数学B）";
// 配色方案：淡粉灰/紫藤色 (Lavender/Thistle)
$colorTheme = "linear-gradient(135deg, #fdcbf1 0%, #e6dee9 100%)";
$primaryColor = "#b33771"; // 深洋红色，保证文字可读性
$totalChapters = 14;

// ==========================================
// 2. 内容数据库 (含 SVG 图形定义)
//    依据 EJU 考纲 第12章
// ==========================================

// A. 考点清单
$exam_points = [
    ['jp' => '等差数列・等比数列の一般項と和', 'cn' => '等差数列、等比数列的通项与求和'],
    ['jp' => 'いろいろな数列の和（$\Sigma$ の計算、階差数列）', 'cn' => '各种数列的和（$\Sigma$ 的计算、阶差数列）'],
    ['jp' => '漸化式（基本形、特性方程式を利用する形）', 'cn' => '递推公式（基本型、利用特征方程的类型）'],
    ['jp' => '数学的帰納法（証明の手順）', 'cn' => '数学归纳法（证明步骤）'],
    ['jp' => '部分分数分解による和の計算', 'cn' => '利用裂项相消（部分分数分解）求和']
];

// B. 重要概念 (带 SVG 图示)
$concepts = [
    [
        'term_jp' => '等差 vs 等比 (AP vs GP)',
        'desc_jp' => '等差数列は「一定の数を足す（直線的）」、等比数列は「一定の数を掛ける（爆発的）」変化をする。',
        'desc_cn' => '等差数列是“加上常数（线性）”，等比数列是“乘以常数（爆发式）”变化。',
        // SVG: 等差 vs 等比
        'svg' => '<svg viewBox="0 0 240 140" class="geo-svg">
                    <line x1="20" y1="120" x2="220" y2="120" stroke="#666" stroke-width="1"/>
                    <line x1="20" y1="10" x2="20" y2="120" stroke="#666" stroke-width="1"/>
                    
                    <rect x="30" y="100" width="15" height="20" fill="#81ecec"/>
                    <rect x="50" y="80" width="15" height="40" fill="#81ecec"/>
                    <rect x="70" y="60" width="15" height="60" fill="#81ecec"/>
                    <rect x="90" y="40" width="15" height="80" fill="#81ecec"/>
                    <text x="50" y="135" font-size="10" fill="#00cec9">等差 (+d)</text>

                    <rect x="130" y="110" width="15" height="10" fill="#fd79a8"/>
                    <rect x="150" y="100" width="15" height="20" fill="#fd79a8"/>
                    <rect x="170" y="80" width="15" height="40" fill="#fd79a8"/>
                    <rect x="190" y="40" width="15" height="80" fill="#fd79a8"/>
                    <text x="150" y="135" font-size="10" fill="#e84393">等比 (×r)</text>
                  </svg>'
    ],
    [
        'term_jp' => '数学的帰納法 (Mathematical Induction)',
        'desc_jp' => 'ドミノ倒しの原理。① $n=1$ で成り立つ。② $n=k$ で成り立つと仮定すれば $n=k+1$ でも成り立つ。この2つで全ての自然数について証明する。',
        'desc_cn' => '多米诺骨牌原理。① $n=1$ 成立。② 假设 $n=k$ 成立则 $n=k+1$ 也成立。由此证明对所有自然数成立。',
        // SVG: 多米诺骨牌
        'svg' => '<svg viewBox="0 0 240 100" class="geo-svg">
                    <rect x="20" y="40" width="15" height="50" rx="2" fill="#a29bfe" transform="rotate(-15 27 90)"/>
                    <text x="20" y="30" font-size="10">n=1</text>
                    
                    <rect x="80" y="40" width="15" height="50" rx="2" fill="#a29bfe" transform="rotate(-15 87 90)"/>
                    <text x="80" y="30" font-size="10">n=k</text>
                    
                    <line x1="100" y1="65" x2="130" y2="65" stroke="#666" stroke-width="2" marker-end="url(#arrow)"/>
                    <text x="105" y="60" font-size="10" fill="#d63031">impiles</text>

                    <rect x="140" y="40" width="15" height="50" rx="2" fill="#a29bfe" transform="rotate(-15 147 90)"/>
                    <text x="135" y="30" font-size="10">n=k+1</text>
                    
                    <text x="180" y="80" font-size="20" fill="#666">...</text>
                  </svg>'
    ]
];

// C. 公式理论
$formulas = [
    [
        'name_jp' => '等差・等比数列の公式',
        'content_jp' => '等差：$a_n = a+(n-1)d, \quad S_n = \frac{1}{2}n(a+l)$ <br> 等比：$a_n = ar^{n-1}, \quad S_n = \frac{a(1-r^n)}{1-r} \quad (r \neq 1)$',
        'note_jp' => '等比数列の和の公式は $r > 1$ か $r < 1$ かで使い分けると符号ミスが減る。',
        'note_cn' => '等比求和公式根据 $r$ 与 1 的大小选择形式，可减少符号错误。'
    ],
    [
        'name_jp' => 'シグマ($\Sigma$)の計算公式',
        'content_jp' => '$$ \sum_{k=1}^n k = \frac{1}{2}n(n+1) $$ $$ \sum_{k=1}^n k^2 = \frac{1}{6}n(n+1)(2n+1) $$',
        'note_jp' => '$k^2$ の公式の係数 $1/6$ と因数 $(2n+1)$ を特に忘れないように。',
        'note_cn' => '切记 $k^2$ 公式的系数 $1/6$ 和因式 $(2n+1)$。'
    ],
    [
        'name_jp' => '特性方程式を利用する漸化式',
        'content_jp' => '$a_{n+1} = p a_n + q$ 型は、$\alpha = p\alpha + q$ を解いて変形する：<br> $$ a_{n+1} - \alpha = p(a_n - \alpha) $$',
        'note_jp' => '数列 $\{a_n - \alpha\}$ は公比 $p$ の等比数列になる。',
        'note_cn' => '数列 $\{a_n - \alpha\}$ 构成公比为 $p$ 的等比数列。'
    ]
];

// ==========================================
// 3. 动态题库 (PHP数组 -> JSON)
// ==========================================

// 例题库
$pool_examples = [
    [
        'q_jp' => '次のように定義される数列 $\{a_n\}$ の一般項を求めよ。<br> $a_1 = 2, \quad a_{n+1} = 3a_n - 2$',
        'q_cn' => '求数列 $\{a_n\}$ 的通项：$a_1 = 2, \quad a_{n+1} = 3a_n - 2$。',
        'think_jp' => '特性方程式 $\alpha = 3\alpha - 2$ を解いて、等比数列の形に帰着させる。',
        'think_cn' => '解特征方程 $\alpha = 3\alpha - 2$，转化为等比数列形式。',
        'sol' => '$\alpha = 1$ より、$a_{n+1} - 1 = 3(a_n - 1)$。<br> 数列 $\{a_n - 1\}$ は初項 $a_1-1=1$、公比 $3$ の等比数列。<br> $a_n - 1 = 1 \cdot 3^{n-1} \implies a_n = 3^{n-1} + 1$'
    ],
    [
        'q_jp' => '和 $S_n = \sum_{k=1}^n (2k - 1)$ を計算せよ。',
        'q_cn' => '计算和 $S_n = \sum_{k=1}^n (2k - 1)$。',
        'think_jp' => 'シグマの線形性を利用して分解する。これは奇数の和でもある。',
        'think_cn' => '利用 $\Sigma$ 的线性性质拆分。这也是奇数之和。',
        'sol' => '$$ 2\sum_{k=1}^n k - \sum_{k=1}^n 1 $$ $$ = 2 \cdot \frac{1}{2}n(n+1) - n $$ $$ = n^2 + n - n = n^2 $$'
    ]
];

// 技巧库
$pool_skills = [
    ['jp' => '階差数列を利用するのは、数列の差をとると規則性（等差や等比）が見つかるとき。$n \geqq 2$ の条件を忘れない。', 'cn' => '当数列的差呈现规律（等差或等比）时利用阶差数列。别忘了 $n \geqq 2$ 的条件。'],
    ['jp' => '部分分数分解 $\frac{1}{k(k+1)} = \frac{1}{k} - \frac{1}{k+1}$ は、途中が消えて最初と最後だけ残るパターンが多い。', 'cn' => '裂项相消 $\frac{1}{k(k+1)} = \frac{1}{k} - \frac{1}{k+1}$ 常用于中间项抵消、只剩首尾的模式。'],
    ['jp' => '数学的帰納法で $n=k+1$ を示すときは、必ず「$n=k$ の仮定」を式変形のどこかで使う。', 'cn' => '在数学归纳法证明 $n=k+1$ 时，必然会在变形的某一步用到“$n=k$ 的假设”。']
];

// 练习库
$pool_drills = [
    ['jp' => '第5項が10、第10項が20の等差数列の公差は？', 'ans' => '$2$ ($5d=10$)'],
    ['jp' => '$\sum_{k=1}^5 k^2$ の値は？', 'ans' => '$55$ ($\frac{1}{6}\cdot5\cdot6\cdot11$)'],
    ['jp' => '初項3、公比2の等比数列の第5項は？', 'ans' => '$48$ ($3 \times 2^4 = 3 \times 16$)'],
    ['jp' => '漸化式 $a_{n+1} = a_n + 3$ はどんな数列？', 'ans' => '公差 3 の等差数列']
];

// 测试库 (10道题)
$pool_tests = [
    ['q' => '等差数列の和の公式 $S_n = \frac{1}{2}n(a + ?)$', 'a' => '$l$ (末項)'],
    ['q' => '無限等比級数が収束するための公比 $r$ の条件は？', 'a' => '$-1 < r < 1$'],
    ['q' => '$1+2+3+\cdots+10$ の値は？', 'a' => '$55$'],
    ['q' => '$a_{n+1} = 2a_n$ はどんな数列を表す？', 'a' => '等比数列 (Geometric progression)'],
    ['q' => '$\sum_{k=1}^n 1$ の値は？', 'a' => '$n$'],
    ['q' => '数列 $1, 4, 9, 16, \dots$ の一般項 $a_n$ は？', 'a' => '$n^2$'],
    ['q' => '数学的帰納法の第一段階で証明することは？', 'a' => '$n=1$ で成り立つこと'],
    ['q' => '特性方程式 $x = 2x + 1$ の解は？', 'a' => '$-1$'],
    ['q' => '$\frac{1}{1\cdot2} + \frac{1}{2\cdot3} + \cdots + \frac{1}{9\cdot10}$ の値は？', 'a' => '$\frac{9}{10}$ ($1 - \frac{1}{10}$)'],
    ['q' => '漸化式 $a_{n+1} - a_n = b_n$ において $b_n$ を何という？', 'a' => '階差数列 (Difference sequence)']
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
            --bg-color: #fff0f6; /* 极浅粉背景 */
            --card-bg: #ffffff;
            --text-main: #2d3436;
            --btn-gen: #b33771; /* 洋红色按钮 */
            --btn-gen-hover: #6d214f;
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
            padding: 40px 20px; border-radius: 15px; color: #333;
            box-shadow: 0 5px 15px rgba(179, 55, 113, 0.2);
        }
        .chapter-header h1 { margin: 0; font-size: 2rem; color: #6d214f; }
        .chapter-header p { margin: 10px 0 0; opacity: 0.8; color: #6d214f; }

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
        .btn-read { background: #fd79a8; } 
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
        
        .dynamic-zone { margin-top: 20px; padding: 20px; background: #fff5f8; border: 2px dashed #fd79a8; border-radius: 10px; display: none; }
        .dynamic-zone.active { display: block; animation: popIn 0.5s; }
        @keyframes popIn { from { opacity:0; scale:0.95; } to { opacity:1; scale:1; } }

        /* 测试进度条 */
        .progress-bar {
            width: 100%; height: 10px; background: #e0e0e0; border-radius: 5px; margin: 15px 0; overflow: hidden;
        }
        .progress-fill {
            height: 100%; background: #b33771; width: 0%; transition: width 0.3s;
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
                    <strong class="jp-text" style="color:#b33771;"><?php echo $item['term_jp']; ?></strong>
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
                <h3 style="margin:0 0 5px 0; font-size:1.1rem; color:#6d214f;"><?php echo $item['name_jp']; ?></h3>
                
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
            <button class="btn-generate" style="background:#b33771;" onclick="startTest()">⚡ 开始挑战 (10問)</button>
        </div>

        <div id="test-scoreboard" style="display:none;">
            <div class="score-board">
                <span id="question-counter">Question: 1 / 10</span>
                <span id="score-counter" style="color:#b33771;">Score: 0</span>
            </div>
            <div class="progress-bar"><div class="progress-fill" id="progress-fill"></div></div>
        </div>

        <div id="test-area" class="dynamic-zone" style="display:block; background:#fff5f8; border-color:#fd79a8;">
            <p style="text-align:center; color:#666;">点击“开始挑战”进行10道题的测试。<br>答对 6 道以上即过关！</p>
        </div>
    </div>

</div>

<div class="modal-overlay" id="resultModal">
    <div class="modal-content">
        <div id="modal-icon" style="font-size:4rem;">🎉</div>
        <h2 id="modal-title" style="color:#b33771;">Result</h2>
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
            <div style="margin:10px 0; padding:10px; background:#fff; border-left:3px solid #b33771;">
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
            title.style.color = "#b33771";
            msg.innerHTML = `你的得分: <b>${score} / 10</b><br>恭喜過關，繼續加油！`;
        } else {
            icon.innerText = "💪";
            title.innerText = "不合格... (Failed)";
            title.style.color = "#d63031";
            msg.innerHTML = `你的得分: <b>${score} / 10</b><br>還需努力，請重新挑戰！`;
        }
        modal.style.display = "flex";
    }

    function closeModal() {
        document.getElementById('resultModal').style.display = "none";
        document.getElementById('test-area').innerHTML = '<p style="text-align:center;">測試結束。點擊按鈕重新開始。</p>';
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
