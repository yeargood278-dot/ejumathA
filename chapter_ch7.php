<?php
// ==========================================
// 1. 基础配置与导航数据
// ==========================================
$chapterID = 7;
$chapterTitleJP = "第7章：いろいろな式 (数学II)";
$chapterTitleCN = "第7章：多种形式的代数式（数学II）";
// 配色方案：亮蓝/电光蓝 (Electric Blue)
$colorTheme = "linear-gradient(135deg, #4facfe 0%, #00f2fe 100%)";
$primaryColor = "#00c6ff"; 
$totalChapters = 14;

// ==========================================
// 2. 内容数据库 (含 SVG 图形定义)
//    依据 EJU 考纲 第7章
// ==========================================

// A. 考点清单
$exam_points = [
    ['jp' => '整式の除法と分数式（部分分数分解）', 'cn' => '整式除法与分式（部分分式分解）'],
    ['jp' => '二項定理とパスカルの三角形', 'cn' => '二项式定理与帕斯卡三角'],
    ['jp' => '恒等式の性質と未定係数法', 'cn' => '恒等式的性质与待定系数法'],
    ['jp' => '等式・不等式の証明（相加平均・相乗平均の関係）', 'cn' => '等式与不等式的证明（算术平均与几何平均的关系）'],
    ['jp' => '複素数の計算と共役複素数', 'cn' => '复数的计算与共轭复数'],
    ['jp' => '因数定理と剰余の定理', 'cn' => '因式定理与余数定理'],
    ['jp' => '高次方程式の解法（3次方程式の解と係数の関係）', 'cn' => '高次方程的解法（三次方程根与系数的关系）']
];

// B. 重要概念 (带 SVG 图示)
$concepts = [
    [
        'term_jp' => 'パスカルの三角形 (Pascal\'s Triangle)',
        'desc_jp' => '二項展開 $(a+b)^n$ の係数を並べたもの。上の2つの数の和が下の数になる。',
        'desc_cn' => '二项展开式 $(a+b)^n$ 系数的排列。上方两数之和等于下方之数。',
        // SVG: 帕斯卡三角
        'svg' => '<svg viewBox="0 0 240 140" class="geo-svg">
                    <text x="120" y="20" text-anchor="middle" font-weight="bold" fill="#333">1</text>
                    
                    <text x="100" y="50" text-anchor="middle" font-weight="bold" fill="#333">1</text>
                    <text x="140" y="50" text-anchor="middle" font-weight="bold" fill="#333">1</text>
                    
                    <text x="80" y="80" text-anchor="middle" font-weight="bold" fill="#333">1</text>
                    <text x="120" y="80" text-anchor="middle" font-weight="bold" fill="#0984e3">2</text>
                    <text x="160" y="80" text-anchor="middle" font-weight="bold" fill="#333">1</text>
                    
                    <text x="60" y="110" text-anchor="middle" font-weight="bold" fill="#333">1</text>
                    <text x="100" y="110" text-anchor="middle" font-weight="bold" fill="#0984e3">3</text>
                    <text x="140" y="110" text-anchor="middle" font-weight="bold" fill="#0984e3">3</text>
                    <text x="180" y="110" text-anchor="middle" font-weight="bold" fill="#333">1</text>

                    <path d="M 105 55 L 115 70" stroke="#ccc" stroke-width="1"/>
                    <path d="M 135 55 L 125 70" stroke="#ccc" stroke-width="1"/>
                    <text x="190" y="20" font-size="10" fill="#666">n=0</text>
                    <text x="190" y="50" font-size="10" fill="#666">n=1</text>
                    <text x="190" y="80" font-size="10" fill="#666">n=2</text>
                    <text x="190" y="110" font-size="10" fill="#666">n=3</text>
                  </svg>'
    ],
    [
        'term_jp' => '複素数平面 (Complex Plane)',
        'desc_jp' => '複素数 $z = a + bi$ を座標 $(a, b)$ に対応させた平面。横軸を実軸、縦軸を虚軸という。',
        'desc_cn' => '将复数 $z = a + bi$ 对应到坐标 $(a, b)$ 的平面。横轴为实轴，纵轴为虚轴。',
        // SVG: 复平面
        'svg' => '<svg viewBox="0 0 200 150" class="geo-svg">
                    <line x1="20" y1="130" x2="180" y2="130" stroke="#333" stroke-width="1.5"/> <line x1="30" y1="20" x2="30" y2="140" stroke="#333" stroke-width="1.5"/> <text x="170" y="145" font-size="10">Re (実軸)</text>
                    <text x="10" y="25" font-size="10">Im (虚軸)</text>
                    
                    <line x1="30" y1="130" x2="120" y2="50" stroke="#00c6ff" stroke-width="2" marker-end="url(#arrow)"/>
                    <circle cx="120" cy="50" r="3" fill="#00c6ff"/>
                    
                    <line x1="120" y1="50" x2="120" y2="130" stroke="#999" stroke-dasharray="4"/>
                    <line x1="120" y1="50" x2="30" y2="50" stroke="#999" stroke-dasharray="4"/>
                    
                    <text x="120" y="145" font-size="10">a</text>
                    <text x="15" y="55" font-size="10">bi</text>
                    <text x="125" y="45" font-size="12" font-weight="bold" fill="#00c6ff">z = a+bi</text>
                  </svg>'
    ],
    [
        'term_jp' => '因数定理 (Factor Theorem)',
        'desc_jp' => '整式 $P(x)$ について、$P(\alpha) = 0 \iff P(x)$ は $(x - \alpha)$ を因数にもつ。',
        'desc_cn' => '对于整式 $P(x)$，$P(\alpha) = 0 \iff P(x)$ 含有因式 $(x - \alpha)$。'
    ]
];

// C. 公式理论
$formulas = [
    [
        'name_jp' => '二項定理 (Binomial Theorem)',
        'content_jp' => '$$ (a+b)^n = \sum_{k=0}^{n} {}_nC_k a^{n-k} b^k $$',
        'note_jp' => '一般項 ${}_nC_k a^{n-k} b^k$ を利用して係数を求める問題が頻出。',
        'note_cn' => '利用通项 ${}_nC_k a^{n-k} b^k$ 求系数的问题经常出现。'
    ],
    [
        'name_jp' => '相加・相乗平均の関係',
        'content_jp' => '$a > 0, b > 0$ のとき、 $$ \frac{a+b}{2} \geqq \sqrt{ab} $$ 等号成立は $a=b$ のとき。',
        'note_jp' => '最大値・最小値の証明や、逆数和の最小値問題で使う。',
        'note_cn' => '用于最大最小值证明，或求倒数和的最小值问题。'
    ],
    [
        'name_jp' => '3次方程式の解と係数の関係',
        'content_jp' => '$ax^3+bx^2+cx+d=0$ の3解を $\alpha, \beta, \gamma$ とすると： $$ \alpha+\beta+\gamma = -\frac{b}{a} $$ $$ \alpha\beta+\beta\gamma+\gamma\alpha = \frac{c}{a} $$ $$ \alpha\beta\gamma = -\frac{d}{a} $$',
        'note_jp' => '対称式の値を求める際に必須。',
        'note_cn' => '求对称式的值时必须掌握。'
    ]
];

// ==========================================
// 3. 动态题库 (PHP数组 -> JSON)
// ==========================================

// 例题库
$pool_examples = [
    [
        'q_jp' => '整式 $P(x) = x^3 - 4x^2 + ax + b$ が $(x-1)$ と $(x+2)$ で割り切れるとき、定数 $a, b$ の値を求めよ。',
        'q_cn' => '整式 $P(x) = x^3 - 4x^2 + ax + b$ 能被 $(x-1)$ 和 $(x+2)$ 整除时，求常数 $a, b$。',
        'think_jp' => '因数定理より、$P(1)=0$ かつ $P(-2)=0$ となる連立方程式を解く。',
        'think_cn' => '根据因式定理，解 $P(1)=0$ 且 $P(-2)=0$ 的联立方程。',
        'sol' => '$P(1) = 1 - 4 + a + b = 0 \implies a+b=3$ <br> $P(-2) = -8 - 16 - 2a + b = 0 \implies -2a+b=24$ <br> これを解いて、 $a=-7, b=10$'
    ],
    [
        'q_jp' => '相加平均・相乗平均の関係を用いて、$x > 0$ のとき $x + \frac{4}{x}$ の最小値を求めよ。',
        'q_cn' => '利用均值不等式，求 $x > 0$ 时 $x + \frac{4}{x}$ 的最小值。',
        'think_jp' => '$x > 0, \frac{4}{x} > 0$ なので公式が使える。積が定数になることに注目。',
        'think_cn' => '因 $x > 0, \frac{4}{x} > 0$，可用公式。注意积为常数。',
        'sol' => '$$ x + \frac{4}{x} \geqq 2\sqrt{x \cdot \frac{4}{x}} = 2\sqrt{4} = 4 $$ 等号成立は $x = \frac{4}{x}$ すなわち $x^2=4, x>0$ より $x=2$ のとき。 <br> 最小値：4'
    ]
];

// 技巧库
$pool_skills = [
    ['jp' => '「$k$ の値に関係なく成り立つ」等の問題は、$k$ についての恒等式とみなし、$k$ で整理して係数=0とする。', 'cn' => '遇到“与 $k$ 值无关恒成立”等问题，视为关于 $k$ 的恒等式，按 $k$ 整理后令系数为0。'],
    ['jp' => '1の3乗根 $\omega$ の性質： $\omega^3=1, \omega^2+\omega+1=0$ は高次方程式の次数下げに役立つ。', 'cn' => '1的立方虚根 $\omega$ 的性质：$\omega^3=1, \omega^2+\omega+1=0$ 有助于高次方程的降次。'],
    ['jp' => '分数式の計算は、分子の次数を分母より低くする（帯分数化）と計算が楽になることが多い。', 'cn' => '分式计算中，将分子次数降得比分母低（带分数化），通常能简化计算。']
];

// 练习库
$pool_drills = [
    ['jp' => '計算せよ： $(1+i)^2$', 'ans' => '$2i$'],
    ['jp' => '展開せよ： $(x+y)^4$ の $x^3y$ の係数', 'ans' => '$4$ ($_4C_1$)'],
    ['jp' => '方程式 $x^3=1$ の虚数解を $\omega$ とするとき、$\omega^{100}$ は？', 'ans' => '$\omega$ ($100 = 3\times33 + 1$)'],
    ['jp' => '$P(x)=x^3-2x+1$ を $x-1$ で割った余りは？', 'ans' => '$0$ ($1-2+1=0$)']
];

// 测试库 (10道题)
$pool_tests = [
    ['q' => '$(2x-1)^5$ の展開式における $x^4$ の係数は？', 'a' => '$-80$ ($_5C_1 \cdot (2x)^4 \cdot (-1)^1$)'],
    ['q' => '整式 $A$ を $B$ で割った商 $Q$、余り $R$ の関係式は？', 'a' => '$A = BQ + R$'],
    ['q' => '$i$ を虚数単位とするとき、$i^4$ の値は？', 'a' => '$1$'],
    ['q' => '等式 $(x+1)^2 = x^2+2x+1$ は方程式か恒等式か？', 'a' => '恒等式 (Identity)'],
    ['q' => '$x>0$ のとき $x + \frac{1}{x}$ の最小値は？', 'a' => '$2$'],
    ['q' => '複素数 $3-2i$ の共役複素数は？', 'a' => '$3+2i$'],
    ['q' => '$2x^3 - x^2 - 8x + 4 = 0$ の1つの解が $x=2$ のとき、他の解は？', 'a' => '$x = \frac{1}{2}, -2$'],
    ['q' => '因数定理：$P(k)=0$ ならば $P(x)$ は何で割り切れる？', 'a' => '$x-k$'],
    ['q' => '$\frac{1}{x(x+1)}$ を部分分数分解すると？', 'a' => '$\frac{1}{x} - \frac{1}{x+1}$'],
    ['q' => '$\sqrt{-3} \times \sqrt{-12}$ の値は？', 'a' => '$-6$ ($ \sqrt{3}i \times 2\sqrt{3}i = 6i^2 = -6 $)']
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
            --bg-color: #f0faff; /* 极浅蓝背景 */
            --card-bg: #ffffff;
            --text-main: #2d3436;
            --btn-gen: #00c6ff; /* 按钮改为亮蓝色 */
            --btn-gen-hover: #0072ff;
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
            box-shadow: 0 5px 15px rgba(0, 198, 255, 0.4);
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
        .btn-read { background: #00c6ff; } 
        .btn-trans { background: #0072ff; } 
        
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
        
        .dynamic-zone { margin-top: 20px; padding: 20px; background: #e0f7fa; border: 2px dashed #4dd0e1; border-radius: 10px; display: none; }
        .dynamic-zone.active { display: block; animation: popIn 0.5s; }
        @keyframes popIn { from { opacity:0; scale:0.95; } to { opacity:1; scale:1; } }

        /* 测试进度条 */
        .progress-bar {
            width: 100%; height: 10px; background: #e0e0e0; border-radius: 5px; margin: 15px 0; overflow: hidden;
        }
        .progress-fill {
            height: 100%; background: #00c6ff; width: 0%; transition: width 0.3s;
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
                    <strong class="jp-text" style="color:#00c6ff;"><?php echo $item['term_jp']; ?></strong>
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
                <h3 style="margin:0 0 5px 0; font-size:1.1rem; color:#0072ff;"><?php echo $item['name_jp']; ?></h3>
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

    <div class="card" style="border-left-color: #6c5ce7;">
        <div class="card-title" style="color: #6c5ce7;">
            <span>解法のテクニック (Technique)</span>
            <button class="btn-generate" style="background:#a29bfe;" onclick="generateSkill()">⚡ 生成技巧</button>
        </div>
        <div id="skill-dynamic" class="dynamic-zone" style="background:#f3e5f5; border-color:#e1bee7;"></div>
    </div>

    <div class="card">
        <div class="card-title">
            <span>スキルアップ演習 (Drills)</span>
            <button class="btn-generate" style="background:#00b894;" onclick="generateDrill()">⚡ 生成练习</button>
        </div>
        <div id="drill-dynamic" class="dynamic-zone" style="background:#e8f8f5; border-color:#a2d9ce;"></div>
    </div>

    <div class="card">
        <div class="card-title">
            <span>確認テスト (Final Test)</span>
            <button class="btn-generate" style="background:#00c6ff;" onclick="startTest()">⚡ 开始挑战 (10問)</button>
        </div>

        <div id="test-scoreboard" style="display:none;">
            <div class="score-board">
                <span id="question-counter">Question: 1 / 10</span>
                <span id="score-counter" style="color:#00c6ff;">Score: 0</span>
            </div>
            <div class="progress-bar"><div class="progress-fill" id="progress-fill"></div></div>
        </div>

        <div id="test-area" class="dynamic-zone" style="display:block; background:#e0f7fa; border-color:#4dd0e1;">
            <p style="text-align:center; color:#666;">点击“开始挑战”进行10道题的测试。<br>答对 6 道以上即过关！</p>
        </div>
    </div>

</div>

<div class="modal-overlay" id="resultModal">
    <div class="modal-content">
        <div id="modal-icon" style="font-size:4rem;">🎉</div>
        <h2 id="modal-title" style="color:#00c6ff;">Result</h2>
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
            <div style="margin:10px 0; padding:10px; background:#fff; border-left:3px solid #00c6ff;">
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
                <button class="btn-generate" style="background:#0072ff;" onclick="revealTestAnswer('${uid}')">👁️ 显示答案</button>
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
            title.style.color = "#00c6ff";
            msg.innerHTML = `你的得分: <b>${score} / 10</b><br>恭喜过关，繼續加油！`;
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
