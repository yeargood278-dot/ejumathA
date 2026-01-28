<?php
// ==========================================
// 1. 基础配置与导航数据
// ==========================================
$chapterID = 13;
$chapterTitleJP = "第13章：ベクトル (数学II)";
$chapterTitleCN = "第13章：向量（数学II）";
// 配色方案：紫罗兰/霓虹紫 (Violet/Neon)
$colorTheme = "linear-gradient(135deg, #c471f5 0%, #fa71cd 100%)";
$primaryColor = "#be2edd"; 
$totalChapters = 14;

// ==========================================
// 2. 内容数据库 (含 SVG 图形定义)
//    依据 EJU 考纲 第13章
// ==========================================

// A. 考点清单
$exam_points = [
    ['jp' => 'ベクトルの演算（加法・減法・実数倍）と成分表示', 'cn' => '向量的运算（加减、数乘）与坐标表示'],
    ['jp' => 'ベクトルの内積（定義と成分計算、なす角）', 'cn' => '向量的内积（定义、坐标计算、夹角）'],
    ['jp' => '垂直条件（内積＝0）と平行条件', 'cn' => '垂直条件（内积=0）与平行条件'],
    ['jp' => '位置ベクトルと分点の公式（内分・外分・重心）', 'cn' => '位置向量与分点公式（内分、外分、重心）'],
    ['jp' => '空間座標と空間ベクトル（成分、大きさ、内積）', 'cn' => '空间坐标与空间向量（坐标、模、内积）'],
    ['jp' => '球面の方程式', 'cn' => '球面的方程']
];

// B. 重要概念 (带 SVG 图示)
$concepts = [
    [
        'term_jp' => 'ベクトルの和 (Vector Addition)',
        'desc_jp' => '平行四辺形の法則、または三角形の法則で定義される。成分ごとの和と一致する。',
        'desc_cn' => '由平行四边形法则或三角形法则定义。等于各分量的和。',
        // SVG: 向量加法
        'svg' => '<svg viewBox="0 0 200 120" class="geo-svg">
                    <defs>
                        <marker id="arrow" markerWidth="10" markerHeight="10" refX="9" refY="3" orient="auto" markerUnits="strokeWidth">
                            <path d="M0,0 L0,6 L9,3 z" fill="#333" />
                        </marker>
                        <marker id="arrow_red" markerWidth="10" markerHeight="10" refX="9" refY="3" orient="auto" markerUnits="strokeWidth">
                            <path d="M0,0 L0,6 L9,3 z" fill="#be2edd" />
                        </marker>
                    </defs>
                    <line x1="20" y1="100" x2="90" y2="100" stroke="#333" stroke-width="2" marker-end="url(#arrow)"/>
                    <text x="50" y="115" font-size="12">a</text>
                    <line x1="90" y1="100" x2="140" y2="40" stroke="#333" stroke-width="2" marker-end="url(#arrow)"/>
                    <text x="120" y="70" font-size="12">b</text>
                    <line x1="20" y1="100" x2="135" y2="43" stroke="#be2edd" stroke-width="3" marker-end="url(#arrow_red)"/>
                    <text x="70" y="60" font-size="12" fill="#be2edd" font-weight="bold">a + b</text>
                    <line x1="20" y1="100" x2="70" y2="40" stroke="#ccc" stroke-dasharray="4"/>
                    <line x1="70" y1="40" x2="140" y2="40" stroke="#ccc" stroke-dasharray="4"/>
                  </svg>'
    ],
    [
        'term_jp' => '内積の幾何学的意味 (Dot Product)',
        'desc_jp' => '$\vec{a} \cdot \vec{b} = |\vec{a}| |\vec{b}| \cos \theta$。$\vec{a}$ の影の長さ（正射影）と $\vec{b}$ の長さの積。',
        'desc_cn' => '$\vec{a} \cdot \vec{b} = |\vec{a}| |\vec{b}| \cos \theta$。即 $\vec{a}$ 的投影长与 $\vec{b}$ 的长度之积。',
        // SVG: 内积投影
        'svg' => '<svg viewBox="0 0 200 120" class="geo-svg">
                    <line x1="20" y1="100" x2="180" y2="100" stroke="#333" stroke-width="2" marker-end="url(#arrow)"/>
                    <text x="170" y="115" font-size="12">b</text>
                    <line x1="20" y1="100" x2="100" y2="40" stroke="#333" stroke-width="2" marker-end="url(#arrow)"/>
                    <text x="50" y="60" font-size="12">a</text>
                    <line x1="100" y1="40" x2="100" y2="100" stroke="#999" stroke-dasharray="4"/>
                    <rect x="95" y="95" width="5" height="5" fill="none" stroke="#666"/>
                    <line x1="20" y1="100" x2="95" y2="100" stroke="#fa71cd" stroke-width="3"/>
                    <text x="40" y="95" font-size="10" fill="#fa71cd">|a|cosθ</text>
                    <path d="M 40 100 A 20 20 0 0 0 35 88" fill="none" stroke="#666"/>
                    <text x="45" y="90" font-size="10">θ</text>
                  </svg>'
    ],
    [
        'term_jp' => '空間座標 (Space Coordinates)',
        'desc_jp' => '$x, y, z$ の3つの軸で位置を決める。右手系（親指x, 人差指y, 中指z）が標準。',
        'desc_cn' => '由 $x, y, z$ 三轴确定位置。通常采用右手系。',
        // SVG: 3D 坐标系
        'svg' => '<svg viewBox="0 0 200 150" class="geo-svg">
                    <line x1="100" y1="10" x2="100" y2="80" stroke="#333" stroke-width="1.5"/>
                    <text x="90" y="20" font-size="12">z</text>
                    <line x1="100" y1="80" x2="180" y2="80" stroke="#333" stroke-width="1.5"/>
                    <text x="170" y="70" font-size="12">y</text>
                    <line x1="100" y1="80" x2="40" y2="130" stroke="#333" stroke-width="1.5"/>
                    <text x="30" y="125" font-size="12">x</text>
                    <circle cx="140" cy="40" r="3" fill="#be2edd"/>
                    <text x="145" y="40" font-size="12" fill="#be2edd">P(x,y,z)</text>
                    <line x1="140" y1="40" x2="140" y2="100" stroke="#ccc" stroke-dasharray="2"/>
                    <line x1="100" y1="80" x2="140" y2="100" stroke="#ccc" stroke-dasharray="2"/>
                    <circle cx="100" cy="80" r="2" fill="#333"/>
                    <text x="90" y="90" font-size="10">O</text>
                  </svg>'
    ]
];

// C. 公式理论
$formulas = [
    [
        'name_jp' => '内積の成分計算',
        'content_jp' => '平面：$\vec{a}\cdot\vec{b} = x_1 x_2 + y_1 y_2$ <br> 空間：$\vec{a}\cdot\vec{b} = x_1 x_2 + y_1 y_2 + z_1 z_2$',
        'note_jp' => '角度 $\theta$ が分からなくても成分だけで計算できる重要公式。',
        'note_cn' => '即使不知道角度 $\theta$ 也能仅凭坐标计算的重要公式。'
    ],
    [
        'name_jp' => 'ベクトルの大きさ',
        'content_jp' => '$|\vec{a}| = \sqrt{x^2 + y^2 + z^2}$',
        'note_jp' => '原点からの距離（三平方の定理の拡張）と同じ。',
        'note_cn' => '即到原点的距离（勾股定理的扩展）。'
    ],
    [
        'name_jp' => '分点の位置ベクトル',
        'content_jp' => '線分ABを $m:n$ に内分する点 $\vec{p}$：<br> $$ \vec{p} = \frac{n\vec{a} + m\vec{b}}{m+n} $$',
        'note_jp' => 'クロスして掛けると覚える。外分は $n$ を $-n$ にする。',
        'note_cn' => '记忆口诀：交叉相乘。外分则是将 $n$ 改为 $-n$。'
    ]
];

// ==========================================
// 3. 动态题库 (PHP数组 -> JSON)
// ==========================================

// 例题库
$pool_examples = [
    [
        'q_jp' => '2つのベクトル $\vec{a}=(1, \sqrt{3}), \vec{b}=(\sqrt{3}, 1)$ のなす角 $\theta$ を求めよ。',
        'q_cn' => '求两个向量 $\vec{a}=(1, \sqrt{3}), \vec{b}=(\sqrt{3}, 1)$ 的夹角 $\theta$。',
        'think_jp' => '内積の定義式 $\vec{a}\cdot\vec{b} = |\vec{a}||\vec{b}|\cos\theta$ を変形して $\cos\theta$ を求める。',
        'think_cn' => '变形内积定义式 $\vec{a}\cdot\vec{b} = |\vec{a}||\vec{b}|\cos\theta$ 求 $\cos\theta$。',
        'sol' => '内積：$1\cdot\sqrt{3} + \sqrt{3}\cdot1 = 2\sqrt{3}$ <br> 大きさ：$|\vec{a}| = \sqrt{1+3}=2, |\vec{b}|=\sqrt{3+1}=2$ <br> $\cos\theta = \frac{2\sqrt{3}}{2 \times 2} = \frac{\sqrt{3}}{2}$ <br> $0^\circ \leqq \theta \leqq 180^\circ$ より $\theta = 30^\circ$'
    ],
    [
        'q_jp' => '空間ベクトル $\vec{a}=(1, -2, 3)$ と $\vec{b}=(x, 2, 1)$ が垂直であるとき、$x$ の値を求めよ。',
        'q_cn' => '当空间向量 $\vec{a}=(1, -2, 3)$ 与 $\vec{b}=(x, 2, 1)$ 垂直时，求 $x$。',
        'think_jp' => '垂直条件は「内積＝0」。成分計算の方程式を解く。',
        'think_cn' => '垂直条件是“内积=0”。解坐标计算的方程。',
        'sol' => '$\vec{a} \cdot \vec{b} = 1(x) + (-2)(2) + 3(1) = 0$ <br> $x - 4 + 3 = 0$ <br> $x - 1 = 0 \implies x = 1$'
    ]
];

// 技巧库
$pool_skills = [
    ['jp' => '「垂直」$\to$ $\vec{a}\cdot\vec{b}=0$、「平行」$\to$ $\vec{a}=k\vec{b}$。これはベクトルの鉄則。', 'cn' => '“垂直”$\to$ 内积为0，“平行”$\to$ 数乘关系。这是向量的铁则。'],
    ['jp' => '三角形の面積公式 $S = \frac{1}{2}\sqrt{|\vec{a}|^2|\vec{b}|^2 - (\vec{a}\cdot\vec{b})^2}$ は成分計算で役立つ。', 'cn' => '三角形面积公式 $S = \frac{1}{2}\sqrt{|\vec{a}|^2|\vec{b}|^2 - (\vec{a}\cdot\vec{b})^2}$ 在坐标计算中很有用。'],
    ['jp' => '空間図形で「同一平面上にある点」は、$\vec{OP} = s\vec{OA} + t\vec{OB}$ のように表せる条件を使う。', 'cn' => '空间图形中“共面点”的问题，利用 $\vec{OP} = s\vec{OA} + t\vec{OB}$ 的条件。']
];

// 练习库
$pool_drills = [
    ['jp' => '$\vec{a}=(3, 4)$ の大きさ $|\vec{a}|$ は？', 'ans' => '$5$ ($\sqrt{9+16}$)'],
    ['jp' => '$\vec{a}=(2, 1), \vec{b}=(-1, 3)$ の内積は？', 'ans' => '$1$ ($2(-1)+1(3)$)'],
    ['jp' => '点 $A(1,2,3)$ と $B(4,5,6)$ の中点の座標は？', 'ans' => '$(\frac{5}{2}, \frac{7}{2}, \frac{9}{2})$'],
    ['jp' => '球 $(x-1)^2 + y^2 + (z+2)^2 = 9$ の中心と半径は？', 'ans' => '中心 $(1,0,-2)$, 半径 $3$']
];

// 测试库 (10道题)
$pool_tests = [
    ['q' => '$\vec{0}$ でない2つのベクトルが垂直であるための必要十分条件は？', 'a' => '内積が 0 ($\vec{a}\cdot\vec{b}=0$)'],
    ['q' => '$\vec{a}=(1,2), \vec{b}=(2,x)$ が平行になる $x$ は？', 'a' => '$4$ ($1:2 = 2:x$)'],
    ['q' => '位置ベクトル $\vec{g} = \frac{\vec{a}+\vec{b}+\vec{c}}{3}$ は三角形の何を表す？', 'a' => '重心 (Centroid)'],
    ['q' => '空間の2点間の距離公式は三平方の定理を何回使うイメージ？', 'a' => '2回 (平面で1回、高さでもう1回)'],
    ['q' => '$\vec{a}\cdot\vec{a}$ を大きさを用いて表すと？', 'a' => '$|\vec{a}|^2$'],
    ['q' => '単位ベクトルとは、大きさがいくつのベクトル？', 'a' => '$1$'],
    ['q' => '$\vec{a}=(1,0,0)$ と $\vec{b}=(0,1,0)$ のなす角は？', 'a' => '$90^\circ$ ($z$成分も0で軸同士)'],
    ['q' => '線分ABを $3:1$ に外分する点の公式の分母は？', 'a' => '$2$ ($3-1$)'],
    ['q' => '内積 $\vec{a}\cdot\vec{b}$ の結果はベクトルかスカラー（実数）か？', 'a' => 'スカラー (Scalar)'],
    ['q' => '空間で $x=0$ は何を表す？', 'a' => '$yz$ 平面']
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
            --bg-color: #f8f0fc; /* 浅紫背景 */
            --card-bg: #ffffff;
            --text-main: #2d3436;
            --btn-gen: #c471f5; /* 霓虹紫按钮 */
            --btn-gen-hover: #a14dd1;
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
            box-shadow: 0 5px 15px rgba(190, 46, 221, 0.4);
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
        .btn-read { background: #c471f5; } 
        .btn-trans { background: #fa71cd; } 
        
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
        
        .dynamic-zone { margin-top: 20px; padding: 20px; background: #fbf0ff; border: 2px dashed #fa71cd; border-radius: 10px; display: none; }
        .dynamic-zone.active { display: block; animation: popIn 0.5s; }
        @keyframes popIn { from { opacity:0; scale:0.95; } to { opacity:1; scale:1; } }

        /* 测试进度条 */
        .progress-bar {
            width: 100%; height: 10px; background: #e0e0e0; border-radius: 5px; margin: 15px 0; overflow: hidden;
        }
        .progress-fill {
            height: 100%; background: #be2edd; width: 0%; transition: width 0.3s;
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
                    <strong class="jp-text" style="color:#be2edd;"><?php echo $item['term_jp']; ?></strong>
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
                <h3 style="margin:0 0 5px 0; font-size:1.1rem; color:#fa71cd;"><?php echo $item['name_jp']; ?></h3>
                
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
            <button class="btn-generate" style="background:#fa71cd;" onclick="generateDrill()">⚡ 生成练习</button>
        </div>
        <div id="drill-dynamic" class="dynamic-zone" style="background:#fff0f6; border-color:#ffcaea;"></div>
    </div>

    <div class="card">
        <div class="card-title">
            <span>確認テスト (Final Test)</span>
            <button class="btn-generate" style="background:#be2edd;" onclick="startTest()">⚡ 开始挑战 (10問)</button>
        </div>

        <div id="test-scoreboard" style="display:none;">
            <div class="score-board">
                <span id="question-counter">Question: 1 / 10</span>
                <span id="score-counter" style="color:#be2edd;">Score: 0</span>
            </div>
            <div class="progress-bar"><div class="progress-fill" id="progress-fill"></div></div>
        </div>

        <div id="test-area" class="dynamic-zone" style="display:block; background:#fbf0ff; border-color:#e056fd;">
            <p style="text-align:center; color:#666;">点击“开始挑战”进行10道题的测试。<br>答对 6 道以上即过关！</p>
        </div>
    </div>

</div>

<div class="modal-overlay" id="resultModal">
    <div class="modal-content">
        <div id="modal-icon" style="font-size:4rem;">🎉</div>
        <h2 id="modal-title" style="color:#be2edd;">Result</h2>
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
            <div style="margin:10px 0; padding:10px; background:#fff; border-left:3px solid #c471f5;">
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
                    <button class="btn-generate" style="background:#be2edd;" onclick="recordResult(true)">✅ Yes</button>
                    <button class="btn-generate" style="background:#fa71cd;" onclick="recordResult(false)">❌ No</button>
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
            title.style.color = "#be2edd";
            msg.innerHTML = `你的得分: <b>${score} / 10</b><br>恭喜过关，继续加油！`;
        } else {
            icon.innerText = "💪";
            title.innerText = "不合格... (Failed)";
            title.style.color = "#fa71cd";
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
