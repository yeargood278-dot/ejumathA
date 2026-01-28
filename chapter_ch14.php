<?php
// ==========================================
// 1. 基础配置与导航数据
// ==========================================
$chapterID = 14;
$chapterTitleJP = "第14章：複素数 (数学II)";
$chapterTitleCN = "第14章：复数（数学II）";
// 配色方案：靛蓝/深海蓝 (Indigo/Deep Ocean)
$colorTheme = "linear-gradient(135deg, #48c6ef 0%, #6f86d6 100%)";
$primaryColor = "#4a69bd"; 
$totalChapters = 14;

// ==========================================
// 2. 内容数据库 (含 SVG 图形定义)
//    依据 EJU 考纲 第14章
// ==========================================

// A. 考点清单
$exam_points = [
    ['jp' => '虚数単位 $i$ の定義 ($i^2 = -1$) と複素数の計算', 'cn' => '虚数单位 $i$ 的定义 ($i^2 = -1$) 与复数计算'],
    ['jp' => '共役な複素数 $\bar{z}$ とその性質', 'cn' => '共轭复数 $\bar{z}$ 及其性质'],
    ['jp' => '複素数の相等条件 ($a+bi = c+di \iff a=c, b=d$)', 'cn' => '复数相等的条件 ($a+bi = c+di \iff a=c, b=d$)'],
    ['jp' => '負の数の平方根 ($\sqrt{-a} = \sqrt{a}i$)', 'cn' => '负数的平方根 ($\sqrt{-a} = \sqrt{a}i$)'],
    ['jp' => '2次方程式の解（判別式 $D<0$ の場合の虚数解）', 'cn' => '二次方程的解（判别式 $D<0$ 时的虚数解）'],
    ['jp' => '解と係数の関係（虚数解を含む場合）', 'cn' => '根与系数的关系（包含虚数解的情况）']
];

// B. 重要概念 (带 SVG 图示)
$concepts = [
    [
        'term_jp' => '複素数平面 (Complex Plane)',
        'desc_jp' => '複素数 $z = a + bi$ を座標平面上の点 $(a, b)$ に対応させたもの。$x$軸を実軸、$y$軸を虚軸と呼ぶ。',
        'desc_cn' => '将复数 $z = a + bi$ 对应到坐标平面上的点 $(a, b)$。$x$轴称为实轴，$y$轴称为虚轴。',
        // SVG: 复平面基础
        'svg' => '<svg viewBox="0 0 200 140" class="geo-svg">
                    <line x1="20" y1="120" x2="180" y2="120" stroke="#333" stroke-width="1.5"/>
                    <line x1="100" y1="20" x2="100" y2="130" stroke="#333" stroke-width="1.5"/>
                    <text x="170" y="135" font-size="10">Re (実)</text>
                    <text x="105" y="30" font-size="10">Im (虚)</text>
                    
                    <line x1="100" y1="120" x2="150" y2="60" stroke="#4a69bd" stroke-width="2" marker-end="url(#arrow)"/>
                    <circle cx="150" cy="60" r="3" fill="#4a69bd"/>
                    <text x="155" y="55" font-size="12" fill="#4a69bd" font-weight="bold">z = a+bi</text>
                    
                    <line x1="150" y1="60" x2="150" y2="120" stroke="#999" stroke-dasharray="3"/>
                    <line x1="150" y1="60" x2="100" y2="60" stroke="#999" stroke-dasharray="3"/>
                    <text x="145" y="135" font-size="10">a</text>
                    <text x="85" y="65" font-size="10">bi</text>
                  </svg>'
    ],
    [
        'term_jp' => '共役な複素数 (Conjugate)',
        'desc_jp' => '複素数 $z = a + bi$ に対し、虚部の符号を変えた $\bar{z} = a - bi$。実軸に関して対称となる。',
        'desc_cn' => '对于复数 $z = a + bi$，改变虚部符号得到 $\bar{z} = a - bi$。两者关于实轴对称。',
        // SVG: 共轭复数
        'svg' => '<svg viewBox="0 0 200 140" class="geo-svg">
                    <line x1="20" y1="70" x2="180" y2="70" stroke="#333" stroke-width="1"/>
                    <line x1="100" y1="10" x2="100" y2="130" stroke="#333" stroke-width="1"/>
                    
                    <circle cx="140" cy="40" r="3" fill="#4a69bd"/>
                    <text x="145" y="40" font-size="11">z = a+bi</text>
                    
                    <circle cx="140" cy="100" r="3" fill="#e55039"/>
                    <text x="145" y="105" font-size="11" fill="#e55039">z̄ = a-bi</text>
                    
                    <line x1="140" y1="40" x2="140" y2="100" stroke="#999" stroke-dasharray="3"/>
                    <text x="110" y="85" font-size="10" fill="#666">実軸対称</text>
                  </svg>'
    ]
];

// C. 公式理论
$formulas = [
    [
        'name_jp' => '複素数の四則演算',
        'content_jp' => '加減：実部同士、虚部同士で計算。<br>乗法：展開して $i^2=-1$ を適用。<br>除法：分母の共役複素数を分母・分子に掛けて実数化する（有理化に似た操作）。',
        'note_jp' => '$\frac{c+di}{a+bi} = \frac{(c+di)(a-bi)}{(a+bi)(a-bi)} = \frac{(ac+bd)+(ad-bc)i}{a^2+b^2}$',
        'note_cn' => '除法：分子分母同乘分母的共轭复数以实现分母实数化。'
    ],
    [
        'name_jp' => '共役複素数の性質',
        'content_jp' => '$$ \overline{z_1 \pm z_2} = \bar{z_1} \pm \bar{z_2} $$ $$ \overline{z_1 z_2} = \bar{z_1} \bar{z_2} $$ $$ z \bar{z} = |z|^2 = a^2 + b^2 $$',
        'note_jp' => '$z \bar{z}$ が実数（大きさの2乗）になる性質は重要。',
        'note_cn' => '$z \bar{z}$ 为实数（模的平方）这一性质非常重要。'
    ],
    [
        'name_jp' => '2次方程式の解の判別',
        'content_jp' => '$ax^2+bx+c=0$ ($a,b,c$は実数) で $D = b^2-4ac < 0$ のとき、<br> 異なる2つの虚数解をもつ。解は互いに共役となる。',
        'note_jp' => '実数係数の方程式で虚数解を持つなら、必ずペアで現れる。',
        'note_cn' => '实系数方程若有虚数解，必成对出现（互为共轭）。'
    ]
];

// ==========================================
// 3. 动态题库 (PHP数组 -> JSON)
// ==========================================

// 例题库
$pool_examples = [
    [
        'q_jp' => '2次方程式 $x^2 - 4x + 13 = 0$ を解け。',
        'q_cn' => '解二次方程 $x^2 - 4x + 13 = 0$。',
        'think_jp' => '解の公式を利用する。根号の中が負になるため、虚数単位 $i$ を使う。',
        'think_cn' => '利用求根公式。因根号内为负，需使用虚数单位 $i$。',
        'sol' => '解の公式より <br> $$ x = \frac{-(-4) \pm \sqrt{(-4)^2 - 4 \cdot 1 \cdot 13}}{2 \cdot 1} $$ $$ = \frac{4 \pm \sqrt{16 - 52}}{2} = \frac{4 \pm \sqrt{-36}}{2} $$ $$ = \frac{4 \pm 6i}{2} = 2 \pm 3i $$'
    ],
    [
        'q_jp' => '複素数 $\alpha = 3+2i, \beta = 1-i$ のとき、$\frac{\alpha}{\beta}$ を計算せよ。',
        'q_cn' => '已知复数 $\alpha = 3+2i, \beta = 1-i$，计算 $\frac{\alpha}{\beta}$。',
        'think_jp' => '分母の共役複素数 $1+i$ を分母と分子に掛ける。',
        'think_cn' => '分子分母同乘分母的共轭复数 $1+i$。',
        'sol' => '$$ \frac{3+2i}{1-i} = \frac{(3+2i)(1+i)}{(1-i)(1+i)} $$ $$ = \frac{3 + 3i + 2i + 2i^2}{1^2 - i^2} $$ $$ = \frac{3 + 5i - 2}{1 - (-1)} = \frac{1+5i}{2} = \frac{1}{2} + \frac{5}{2}i $$'
    ]
];

// 技巧库
$pool_skills = [
    ['jp' => '「実数係数の」方程式が虚数解 $x = a+bi$ を持つならば、必ず $x = a-bi$ も解である。', 'cn' => '若“实系数”方程有一个虚数根 $x = a+bi$，则 $x = a-bi$ 必然也是其解。'],
    ['jp' => '$i$ の累乗は周期4で循環する：$i^1=i, i^2=-1, i^3=-i, i^4=1$。', 'cn' => '$i$ 的幂具有周期为4的循环性：$i^1=i, i^2=-1, i^3=-i, i^4=1$。'],
    ['jp' => '$\frac{1}{i} = -i$ は計算速度を上げる便利な変形。', 'cn' => '$\frac{1}{i} = -i$ 是提速计算的便捷变形。']
];

// 练习库
$pool_drills = [
    ['jp' => '計算せよ： $(2+i) + (3-4i)$', 'ans' => '$5 - 3i$'],
    ['jp' => '計算せよ： $(1+i)^2$', 'ans' => '$2i$ ($1 + 2i + i^2 = 1+2i-1$)'],
    ['jp' => '$x^2 + 9 = 0$ の解は？', 'ans' => '$x = \pm 3i$'],
    ['jp' => '$\sqrt{-5} \times \sqrt{-20}$ を計算せよ。', 'ans' => '$-10$ ($\sqrt{5}i \cdot 2\sqrt{5}i = 10i^2$)']
];

// 测试库 (10道题)
$pool_tests = [
    ['q' => '$i^2$ の値は？', 'a' => '$-1$'],
    ['q' => '複素数 $z=a+bi$ の大きさを表す式は？', 'a' => '$\sqrt{a^2+b^2}$'],
    ['q' => '$3-2i$ の共役複素数は？', 'a' => '$3+2i$'],
    ['q' => '$z$ が実数であるための条件は？', 'a' => '$z = \bar{z}$ (または虚部が0)'],
    ['q' => '$i^{100}$ の値は？', 'a' => '$1$ ($100$は4の倍数)'],
    ['q' => '2次方程式の判別式 $D<0$ のとき、解の種類は？', 'a' => '異なる2つの虚数解'],
    ['q' => '$z \bar{z}$ は常にどのような数になるか？', 'a' => '実数 (0以上の実数)'],
    ['q' => '$\frac{1}{1+i}$ を $a+bi$ の形にすると？', 'a' => '$\frac{1}{2} - \frac{1}{2}i$'],
    ['q' => '方程式 $x^2+x+1=0$ の解の一つを $\omega$ とするとき、$\omega^3$ は？', 'a' => '$1$'],
    ['q' => '$\sqrt{-2}$ を虚数単位を用いて表すと？', 'a' => '$\sqrt{2}i$']
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
            --bg-color: #f0f8ff; /* 极浅蓝 */
            --card-bg: #ffffff;
            --text-main: #2d3436;
            --btn-gen: #4a69bd; /* 靛蓝按钮 */
            --btn-gen-hover: #1e3799;
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
            box-shadow: 0 5px 15px rgba(74, 105, 189, 0.4);
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
        .btn-read { background: #4a69bd; } 
        .btn-trans { background: #60a3bc; } 
        
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
        
        .dynamic-zone { margin-top: 20px; padding: 20px; background: #eaf2ff; border: 2px dashed #6f86d6; border-radius: 10px; display: none; }
        .dynamic-zone.active { display: block; animation: popIn 0.5s; }
        @keyframes popIn { from { opacity:0; scale:0.95; } to { opacity:1; scale:1; } }

        /* 测试进度条 */
        .progress-bar {
            width: 100%; height: 10px; background: #e0e0e0; border-radius: 5px; margin: 15px 0; overflow: hidden;
        }
        .progress-fill {
            height: 100%; background: #4a69bd; width: 0%; transition: width 0.3s;
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
                    <strong class="jp-text" style="color:#4a69bd;"><?php echo $item['term_jp']; ?></strong>
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
                <h3 style="margin:0 0 5px 0; font-size:1.1rem; color:#6f86d6;"><?php echo $item['name_jp']; ?></h3>
                
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

    <div class="card" style="border-left-color: #60a3bc;">
        <div class="card-title" style="color: #4a69bd;">
            <span>解法のテクニック (Technique)</span>
            <button class="btn-generate" style="background:#60a3bc;" onclick="generateSkill()">⚡ 生成技巧</button>
        </div>
        <div id="skill-dynamic" class="dynamic-zone" style="background:#f0fbff; border-color:#82ccdd;"></div>
    </div>

    <div class="card">
        <div class="card-title">
            <span>スキルアップ演習 (Drills)</span>
            <button class="btn-generate" style="background:#3c6382;" onclick="generateDrill()">⚡ 生成练习</button>
        </div>
        <div id="drill-dynamic" class="dynamic-zone" style="background:#eaf2ff; border-color:#a4b0be;"></div>
    </div>

    <div class="card">
        <div class="card-title">
            <span>確認テスト (Final Test)</span>
            <button class="btn-generate" style="background:#4a69bd;" onclick="startTest()">⚡ 开始挑战 (10問)</button>
        </div>

        <div id="test-scoreboard" style="display:none;">
            <div class="score-board">
                <span id="question-counter">Question: 1 / 10</span>
                <span id="score-counter" style="color:#4a69bd;">Score: 0</span>
            </div>
            <div class="progress-bar"><div class="progress-fill" id="progress-fill"></div></div>
        </div>

        <div id="test-area" class="dynamic-zone" style="display:block; background:#eaf2ff; border-color:#6f86d6;">
            <p style="text-align:center; color:#666;">点击“开始挑战”进行10道题的测试。<br>答对 6 道以上即过关！</p>
        </div>
    </div>

</div>

<div class="modal-overlay" id="resultModal">
    <div class="modal-content">
        <div id="modal-icon" style="font-size:4rem;">🎉</div>
        <h2 id="modal-title" style="color:#4a69bd;">Result</h2>
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
            <div style="margin:10px 0; padding:10px; background:#fff; border-left:3px solid #4a69bd;">
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
                <button class="btn-generate" style="background:#6f86d6;" onclick="revealTestAnswer('${uid}')">👁️ 显示答案</button>
            </div>
            <div id="${uid}" style="display:none; animation:fadeIn 0.5s;">
                <div class="math-block"><strong>正解：</strong> ${data.a}</div>
                <p style="text-align:center;">正解しましたか？</p>
                <div style="display:flex; justify-content:center; gap:20px;">
                    <button class="btn-generate" style="background:#4a69bd;" onclick="recordResult(true)">✅ Yes</button>
                    <button class="btn-generate" style="background:#e55039;" onclick="recordResult(false)">❌ No</button>
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
            title.style.color = "#4a69bd";
            msg.innerHTML = `你的得分: <b>${score} / 10</b><br>恭喜过关，继续加油！`;
        } else {
            icon.innerText = "💪";
            title.innerText = "不合格... (Failed)";
            title.style.color = "#e55039";
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