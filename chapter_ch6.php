<?php
// ==========================================
// 1. 基础配置与导航数据
// ==========================================
$chapterID = 6;
$chapterTitleJP = "第6章：図形の性質 (数学A)";
$chapterTitleCN = "第6章：图形的性质（数学A）";
// 配色方案：玫红/珊瑚色 (Rose/Coral)
$colorTheme = "linear-gradient(135deg, #f093fb 0%, #f5576c 100%)";
$primaryColor = "#e84393"; 
$totalChapters = 14;

// ==========================================
// 2. 内容数据库 (含 SVG 图形定义)
// ==========================================

// A. 考点清单
$exam_points = [
    ['jp' => '三角形の五心（重心・外心・内心・垂心・傍心）', 'cn' => '三角形的五心（重心、外心、内心、垂心、旁心）'],
    ['jp' => 'チェバの定理・メネラウスの定理', 'cn' => '塞瓦定理、梅涅劳斯定理'],
    ['jp' => '円周角の定理とその逆、円に内接する四角形', 'cn' => '圆周角定理及其逆定理、圆内接四边形'],
    ['jp' => '接弦定理と方べきの定理', 'cn' => '接弦定理与方幂定理（切割线定理）'],
    ['jp' => '2つの円の位置関係（共通接線）', 'cn' => '两圆的位置关系（公切线）'],
    ['jp' => '空間図形：直線と平面の位置関係', 'cn' => '空间图形：直线与平面的位置关系'],
    ['jp' => '多面体とオイラーの多面体定理', 'cn' => '多面体与欧拉多面体公式']
];

// B. 重要概念 (带 SVG 图示)
$concepts = [
    [
        'term_jp' => '三角形の重心 (Centroid)',
        'desc_jp' => '3本の中線の交点 $G$。中線を $2:1$ に内分する。',
        'desc_cn' => '三条中线的交点 $G$。将中线分为 $2:1$。',
        // SVG: 三角形与重心
        'svg' => '<svg viewBox="0 0 200 150" class="geo-svg">
                    <polygon points="100,10 10,140 190,140" fill="none" stroke="#e84393" stroke-width="2"/>
                    <line x1="100" y1="10" x2="100" y2="140" stroke="#ccc" stroke-dasharray="4"/>
                    <line x1="10" y1="140" x2="145" y2="75" stroke="#ccc" stroke-dasharray="4"/>
                    <line x1="190" y1="140" x2="55" y2="75" stroke="#ccc" stroke-dasharray="4"/>
                    <circle cx="100" cy="96" r="3" fill="#d63031"/>
                    <text x="105" y="96" font-size="12" fill="#d63031">G</text>
                    <text x="95" y="110" font-size="10" fill="#666">2:1</text>
                  </svg>'
    ],
    [
        'term_jp' => '円に内接する四角形',
        'desc_jp' => '対角の和は $180^\circ$ である。外角はそれと隣り合う内角の対角に等しい。',
        'desc_cn' => '对角之和为 $180^\circ$。外角等于内对角。',
        // SVG: 圆内接四边形
        'svg' => '<svg viewBox="0 0 200 150" class="geo-svg">
                    <circle cx="100" cy="75" r="60" fill="none" stroke="#0984e3" stroke-width="2"/>
                    <polygon points="60,25 140,25 155,90 45,90" fill="rgba(9,132,227,0.1)" stroke="#333"/>
                    <text x="50" y="40" font-size="12">A</text>
                    <text x="130" y="40" font-size="12">B</text>
                    <text x="100" y="75" font-size="10" fill="#666">A+C=180°</text>
                  </svg>'
    ],
    [
        'term_jp' => 'オイラーの多面体定理',
        'desc_jp' => '頂点の数 $V$、辺の数 $E$、面の数 $F$ について、常に $V - E + F = 2$ が成り立つ。',
        'desc_cn' => '对于顶点数 $V$、边数 $E$、面数 $F$，恒有 $V - E + F = 2$。'
    ]
];

// C. 公式理论 (带 SVG 图示)
$formulas = [
    [
        'name_jp' => '方べきの定理 (Power of a Point)',
        'content_jp' => '$$ PA \cdot PB = PC \cdot PD $$',
        'note_jp' => '円の外部の点 $P$ から引いた2本の割線、または接線の場合 ($PA \cdot PB = PT^2$) も含む。',
        'note_cn' => '包括从圆外一点 $P$ 引出的两条割线，或切线的情况 ($PA \cdot PB = PT^2$)。',
        // SVG: 方幂定理
        'svg' => '<svg viewBox="0 0 200 120" class="geo-svg">
                    <circle cx="120" cy="60" r="40" fill="none" stroke="#6c5ce7" stroke-width="2"/>
                    <circle cx="20" cy="60" r="3" fill="#333"/>
                    <text x="10" y="65" font-size="12">P</text>
                    <line x1="20" y1="60" x2="160" y2="30" stroke="#333"/>
                    <text x="85" y="40" font-size="10">A</text>
                    <text x="155" y="25" font-size="10">B</text>
                    <line x1="20" y1="60" x2="150" y2="90" stroke="#333"/>
                    <text x="80" y="85" font-size="10">C</text>
                    <text x="145" y="100" font-size="10">D</text>
                  </svg>'
    ],
    [
        'name_jp' => '接弦定理',
        'content_jp' => '円の接線と弦の作る角は、その角の内部にある弧に対する円周角に等しい。',
        'note_jp' => '接点における三角形の角と接線の関係。',
        'note_cn' => '圆的切线与弦所夹的角，等于该角内部所对弧的圆周角。',
        // SVG: 接弦定理
        'svg' => '<svg viewBox="0 0 200 120" class="geo-svg">
                    <circle cx="100" cy="50" r="40" fill="none" stroke="#00b894" stroke-width="2"/>
                    <line x1="20" y1="90" x2="180" y2="90" stroke="#333" stroke-width="2"/> <polygon points="100,90 65,35 135,35" fill="none" stroke="#333"/>
                    <text x="95" y="105" font-size="10">接点</text>
                    <path d="M 120 90 A 10 10 0 0 0 115 80" fill="none" stroke="red"/>
                    <path d="M 75 40 A 10 10 0 0 0 85 40" fill="none" stroke="red"/>
                    <text x="150" y="80" font-size="10" fill="red">∠1 = ∠2</text>
                  </svg>'
    ],
    [
        'name_jp' => 'メネラウスの定理',
        'content_jp' => '$$ \frac{AF}{FB} \cdot \frac{BD}{DC} \cdot \frac{CE}{EA} = 1 $$',
        'note_jp' => '三角形と直線の図形で「一筆書き」のように覚える。',
        'note_cn' => '记忆为三角形与直线图形中的“一笔画”规律。'
    ]
];

// ==========================================
// 3. 动态题库 (PHP数组 -> JSON)
// ==========================================

// 例题库
$pool_examples = [
    [
        'q_jp' => '円 $O$ の外部の点 $P$ から円に引いた接線の長さを求めよ。$P$ と中心 $O$ の距離は $5$、円の半径は $3$ とする。',
        'q_cn' => '求从圆 $O$ 外部一点 $P$ 引出的切线长。已知 $P$ 到圆心 $O$ 距离为 $5$，半径为 $3$。',
        'think_jp' => '接線と半径は垂直になるので、直角三角形の三平方の定理を使う。',
        'think_cn' => '切线与半径垂直，利用直角三角形的勾股定理。',
        'sol' => '接点を $T$ とすると $\triangle PTO$ は $\angle T = 90^\circ$ の直角三角形。<br> $$ PT^2 + OT^2 = PO^2 $$ $$ PT^2 + 3^2 = 5^2 \implies PT^2 = 25 - 9 = 16 $$ $$ PT > 0 \text{ より } PT = 4 $$'
    ],
    [
        'q_jp' => '$\triangle ABC$ の辺 $AB$ を $2:1$ に内分する点を $D$、辺 $AC$ を $3:2$ に内分する点を $E$ とし、$BE$ と $CD$ の交点を $P$ とする。$AP$ の延長と $BC$ の交点 $F$ について、$BF:FC$ を求めよ。',
        'q_cn' => '$\triangle ABC$ 中，$D$ 分 $AB$ 为 $2:1$，$E$ 分 $AC$ 为 $3:2$，$P$ 为 $BE, CD$ 交点。求 $AP$ 延长线交 $BC$ 于 $F$ 时，$BF:FC$ 的比。',
        'think_jp' => 'チェバの定理 $\frac{AD}{DB} \cdot \frac{BF}{FC} \cdot \frac{CE}{EA} = 1$ を利用する。',
        'think_cn' => '利用塞瓦定理 $\frac{AD}{DB} \cdot \frac{BF}{FC} \cdot \frac{CE}{EA} = 1$。',
        'sol' => '$$ \frac{2}{1} \cdot \frac{BF}{FC} \cdot \frac{2}{3} = 1 $$ $$ \frac{4}{3} \cdot \frac{BF}{FC} = 1 \implies \frac{BF}{FC} = \frac{3}{4} $$ <br> 答え： $3:4$'
    ]
];

// 技巧库
$pool_skills = [
    ['jp' => '「接線」と「角度」の問題が出たら、まずは接弦定理を疑う。', 'cn' => '遇到“切线”和“角度”的问题，首先怀疑是否可用接弦定理。'],
    ['jp' => '円に内接する四角形が見つからない場合、4点が同一円周上にある条件（円周角の定理の逆）を探す。', 'cn' => '如果找不到圆内接四边形，寻找4点共圆的条件（圆周角定理的逆定理）。'],
    ['jp' => 'メネラウスの定理は「キツネ型」の図形を探すと見つけやすい。', 'cn' => '梅涅劳斯定理在图形中寻找“狐狸头型”更容易发现。']
];

// 练习库
$pool_drills = [
    ['jp' => '正十二面体の面の形は？', 'ans' => '正五角形 (Regular pentagon)'],
    ['jp' => '正八面体の頂点の数 $V$ は？', 'ans' => '$6$ ($V-E+F=2 \to V-12+8=2$)'],
    ['jp' => '円周角が $60^\circ$ のとき、中心角は？', 'ans' => '$120^\circ$'],
    ['jp' => '三角形の内心とは何の交点？', 'ans' => '角の二等分線 (Angle bisectors)']
];

// 测试库 (10道题)
$pool_tests = [
    ['q' => '三角形の3本の中線の交点は？', 'a' => '重心 (Centroid)'],
    ['q' => '三角形の各頂点から対辺に下ろした3本の垂線の交点は？', 'a' => '垂心 (Orthocenter)'],
    ['q' => '円の外部の点Pから円に接線を引いた。接点Tまでの距離の2乗は？', 'a' => '$PA \cdot PB$ (方べきの定理)'],
    ['q' => '円に内接する四角形の対角の和は？', 'a' => '$180^\circ$'],
    ['q' => '正二十面体の辺の数 $E$ は？', 'a' => '$30$'],
    ['q' => '半円の弧に対する円周角は何度？', 'a' => '$90^\circ$'],
    ['q' => '2つの円が外接するとき、中心間の距離 $d$ と半径 $r_1, r_2$ の関係は？', 'a' => '$d = r_1 + r_2$'],
    ['q' => '空間内で、交わりもせず平行でもない2直線の関係を何という？', 'a' => 'ねじれの位置 (Skew lines)'],
    ['q' => 'チェバの定理が使えるのは、3直線がどこで交わるとき？', 'a' => '1点 (One point)'],
    ['q' => 'オイラーの多面体定理：$V - E + F = ?$', 'a' => '$2$']
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
            --bg-color: #fff0f5; /* 浅玫瑰色背景 */
            --card-bg: #ffffff;
            --text-main: #2d3436;
            --btn-gen: #e84393; /* 按钮改为玫红色 */
            --btn-gen-hover: #d63031;
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
            box-shadow: 0 5px 15px rgba(232, 67, 147, 0.4);
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
            margin: 10px 0;
            background: #fafafa;
            border-radius: 8px;
            border: 1px solid #eee;
            padding: 5px;
        }

        /* 按钮 */
        .btn-mini {
            border: none; border-radius: 50%; width: 28px; height: 28px;
            cursor: pointer; color: white; margin-left: 5px; font-size: 12px;
            display: inline-flex; align-items: center; justify-content: center;
            transition: transform 0.2s;
        }
        .btn-mini:hover { transform: scale(1.1); }
        .btn-read { background: #00b894; } 
        .btn-trans { background: #fd79a8; } 
        
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
        
        .dynamic-zone { margin-top: 20px; padding: 20px; background: #fff0f6; border: 2px dashed #fd79a8; border-radius: 10px; display: none; }
        .dynamic-zone.active { display: block; animation: popIn 0.5s; }
        @keyframes popIn { from { opacity:0; scale:0.95; } to { opacity:1; scale:1; } }

        /* 测试进度条 */
        .progress-bar {
            width: 100%; height: 10px; background: #e0e0e0; border-radius: 5px; margin: 15px 0; overflow: hidden;
        }
        .progress-fill {
            height: 100%; background: #e84393; width: 0%; transition: width 0.3s;
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
                    <strong class="jp-text" style="color:#e84393;"><?php echo $item['term_jp']; ?></strong>
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
                <h3 style="margin:0 0 5px 0; font-size:1.1rem; color:#fd79a8;"><?php echo $item['name_jp']; ?></h3>
                
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
            <button class="btn-generate" style="background:#e84393;" onclick="startTest()">⚡ 开始挑战 (10問)</button>
        </div>

        <div id="test-scoreboard" style="display:none;">
            <div class="score-board">
                <span id="question-counter">Question: 1 / 10</span>
                <span id="score-counter" style="color:#e84393;">Score: 0</span>
            </div>
            <div class="progress-bar"><div class="progress-fill" id="progress-fill"></div></div>
        </div>

        <div id="test-area" class="dynamic-zone" style="display:block; background:#fff0f6; border-color:#fd79a8;">
            <p style="text-align:center; color:#666;">点击“开始挑战”进行10道题的测试。<br>答对 6 道以上即过关！</p>
        </div>
    </div>

</div>

<div class="modal-overlay" id="resultModal">
    <div class="modal-content">
        <div id="modal-icon" style="font-size:4rem;">🎉</div>
        <h2 id="modal-title" style="color:#e84393;">Result</h2>
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
            <div style="margin:10px 0; padding:10px; background:#fff; border-left:3px solid #e84393;">
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
                <button class="btn-generate" style="background:#fd79a8;" onclick="revealTestAnswer('${uid}')">👁️ 显示答案</button>
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