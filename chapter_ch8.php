<?php
// ==========================================
// 1. 基础配置与导航数据
// ==========================================
$chapterID = 8;
$chapterTitleJP = "第8章：図形と方程式 (数学II)";
$chapterTitleCN = "第8章：图形与方程（数学II）";
// 配色方案：翡翠绿/森林绿 (Emerald/Forest)
$colorTheme = "linear-gradient(135deg, #11998e 0%, #38ef7d 100%)";
$primaryColor = "#00b894"; 
$totalChapters = 14;

// ==========================================
// 2. 内容数据库 (含 SVG 图形定义)
//    依据 EJU 考纲 第8章
// ==========================================

// A. 考点清单
$exam_points = [
    ['jp' => '点と直線の距離、内分点・外分点の座標', 'cn' => '点到直线的距离、内分点与外分点的坐标'],
    ['jp' => '直線の接線・平行・垂直条件', 'cn' => '直线的相切、平行、垂直条件'],
    ['jp' => '円の方程式（標準形・一般形）', 'cn' => '圆的方程（标准式、一般式）'],
    ['jp' => '円と直線の位置関係（判別式 $D$ または距離 $d$）', 'cn' => '圆与直线的位置关系（判别式 $D$ 或距离 $d$）'],
    ['jp' => '2つの円の交点を通る図形（円束）', 'cn' => '过两圆交点的图形（圆束）'],
    ['jp' => '軌跡の方程式（アポロニウスの円など）', 'cn' => '轨迹方程（阿波罗尼斯圆等）'],
    ['jp' => '不等式の表す領域と最大・最小問題', 'cn' => '不等式表示的区域与最大最小值问题']
];

// B. 重要概念 (带 SVG 图示)
$concepts = [
    [
        'term_jp' => '円と直線の位置関係',
        'desc_jp' => '円の中心と直線の距離を $d$、半径を $r$ とする。$d < r$ なら異なる2点で交わる、$d = r$ なら接する、$d > r$ なら共有点なし。',
        'desc_cn' => '设圆心到直线的距离为 $d$，半径为 $r$。$d < r$ 相交于两点，$d = r$ 相切，$d > r$ 相离。',
        // SVG: 圆与直线
        'svg' => '<svg viewBox="0 0 200 120" class="geo-svg">
                    <circle cx="60" cy="60" r="40" fill="none" stroke="#00b894" stroke-width="2"/>
                    <line x1="10" y1="40" x2="110" y2="40" stroke="#333" stroke-dasharray="4"/>
                    <text x="115" y="45" font-size="10" fill="#666">d < r</text>
                    <line x1="10" y1="100" x2="110" y2="100" stroke="#333" stroke-width="2"/>
                    <line x1="60" y1="60" x2="60" y2="100" stroke="red" stroke-width="1"/>
                    <text x="65" y="90" font-size="10" fill="red">d = r</text>
                  </svg>'
    ],
    [
        'term_jp' => '不等式の表す領域',
        'desc_jp' => '$y > f(x)$ はグラフの上側、$y < f(x)$ はグラフの下側を表す。円 $x^2+y^2 < r^2$ は円の内部。',
        'desc_cn' => '$y > f(x)$ 表示图像上方，$y < f(x)$ 表示图像下方。圆 $x^2+y^2 < r^2$ 表示圆的内部。',
        // SVG: 区域
        'svg' => '<svg viewBox="0 0 200 120" class="geo-svg">
                    <circle cx="100" cy="60" r="40" fill="rgba(0, 184, 148, 0.2)" stroke="#00b894" stroke-dasharray="4"/>
                    <text x="80" y="65" font-size="12" fill="#006266">x²+y² < r²</text>
                    <line x1="0" y1="120" x2="200" y2="0" stroke="#333" stroke-width="1"/>
                    <polygon points="0,120 200,0 200,120" fill="rgba(51, 51, 51, 0.1)"/>
                    <text x="140" y="100" font-size="10" fill="#666">y < -ax+b</text>
                  </svg>'
    ],
    [
        'term_jp' => '軌跡 (きせき)',
        'desc_jp' => 'ある条件を満たしながら動く点 $P(x, y)$ が描く図形。条件を $x, y$ の方程式で表す。',
        'desc_cn' => '满足特定条件的动点 $P(x, y)$ 描绘出的图形。将条件表示为 $x, y$ 的方程。'
    ]
];

// C. 公式理论 (带 SVG 图示)
$formulas = [
    [
        'name_jp' => '点と直線の距離 (Distance Formula)',
        'content_jp' => '点 $(x_1, y_1)$ と直線 $ax+by+c=0$ の距離 $d$ は： $$ d = \frac{|ax_1 + by_1 + c|}{\sqrt{a^2 + b^2}} $$',
        'note_jp' => '分母は直線の法線ベクトルの大きさ。絶対値を忘れないこと。',
        'note_cn' => '分母是直线法向量的模。切记加绝对值。',
        // SVG: 点到直线距离
        'svg' => '<svg viewBox="0 0 200 100" class="geo-svg">
                    <line x1="20" y1="80" x2="180" y2="20" stroke="#333" stroke-width="2"/>
                    <circle cx="120" cy="80" r="3" fill="#d63031"/>
                    <text x="125" y="90" font-size="12">P(x₁, y₁)</text>
                    <line x1="120" y1="80" x2="98" y2="52" stroke="#d63031" stroke-width="1.5" stroke-dasharray="2"/>
                    <text x="110" y="65" font-size="12" fill="#d63031">d</text>
                    <text x="20" y="30" font-size="10" fill="#666">ax+by+c=0</text>
                  </svg>'
    ],
    [
        'name_jp' => '円の接線の方程式',
        'content_jp' => '円 $x^2+y^2=r^2$ 上の点 $(x_1, y_1)$ における接線は： $$ x_1 x + y_1 y = r^2 $$',
        'note_jp' => '接点が与えられた場合の公式。円外の点からの場合は使えないので注意。',
        'note_cn' => '这是已知切点的公式。如果是从圆外一点引切线则不能直接使用。'
    ],
    [
        'name_jp' => '2点間の距離',
        'content_jp' => '$$ AB = \sqrt{(x_2-x_1)^2 + (y_2-y_1)^2} $$',
        'note_jp' => '三平方の定理の応用。',
        'note_cn' => '勾股定理的应用。'
    ]
];

// ==========================================
// 3. 动态题库 (PHP数组 -> JSON)
// ==========================================

// 例题库
$pool_examples = [
    [
        'q_jp' => '円 $x^2+y^2=5$ と直線 $y=2x+k$ が接するとき、定数 $k$ の値を求めよ。',
        'q_cn' => '圆 $x^2+y^2=5$ 与直线 $y=2x+k$ 相切时，求常数 $k$ 的值。',
        'think_jp' => '円の中心 $(0,0)$ と直線の距離 $d$ が半径 $\sqrt{5}$ に等しいことを利用する。',
        'think_cn' => '利用圆心 $(0,0)$ 到直线的距离 $d$ 等于半径 $\sqrt{5}$。',
        'sol' => '直線の方程式を一般形に： $2x - y + k = 0$ <br> $d = \frac{|2(0) - (0) + k|}{\sqrt{2^2 + (-1)^2}} = \frac{|k|}{\sqrt{5}}$ <br> $d = r$ より $\frac{|k|}{\sqrt{5}} = \sqrt{5} \implies |k| = 5$ <br> $\therefore k = \pm 5$'
    ],
    [
        'q_jp' => '2点 $A(2,0), B(0,4)$ からの距離の比が $2:1$ である点 $P$ の軌跡を求めよ。',
        'q_cn' => '求到两点 $A(2,0), B(0,4)$ 距离之比为 $2:1$ 的点 $P$ 的轨迹。',
        'think_jp' => '点 $P(x,y)$ とし、$AP:BP=2:1 \iff AP=2BP \iff AP^2 = 4BP^2$ を式にする。',
        'think_cn' => '设 $P(x,y)$，由 $AP:BP=2:1 \iff AP^2 = 4BP^2$ 列式。',
        'sol' => '$(x-2)^2 + y^2 = 4\{x^2 + (y-4)^2\}$ <br> $x^2-4x+4+y^2 = 4(x^2+y^2-8y+16)$ <br> 整理すると $3x^2+3y^2+4x-32y+60=0$ <br> すなわち円 $(x+\frac{2}{3})^2 + (y-\frac{16}{3})^2 = \frac{40}{9}$'
    ]
];

// 技巧库
$pool_skills = [
    ['jp' => '円外の点からの接線を求める時は、「点と直線の距離」公式を使うと計算が楽（判別式 $D$ は計算が重くなる）。', 'cn' => '求过圆外一点的切线时，使用“点到直线距离”公式计算更简便（用判别式 $D$ 计算量大）。'],
    ['jp' => '領域における最大・最小問題（線形計画法）は、目的関数を $k$ と置き、直線の切片として視覚的に捉える。', 'cn' => '区域中的最值问题（线性规划），将目标函数设为 $k$，将其视为直线的截距进行可视化分析。'],
    ['jp' => '円の方程式 $x^2+y^2+lx+my+n=0$ は、平方完成して中心と半径を確認する。', 'cn' => '遇到圆的一般方程 $x^2+y^2+lx+my+n=0$，先配方确认圆心和半径。']
];

// 练习库
$pool_drills = [
    ['jp' => '点 $(2, -1)$ と直線 $3x-4y+5=0$ の距離は？', 'ans' => '$3$ ($\frac{|6+4+5|}{5}$)'],
    ['jp' => '円 $(x-1)^2+(y+2)^2=9$ の中心と半径は？', 'ans' => '中心 $(1, -2)$, 半径 $3$'],
    ['jp' => '直線 $y=3x+1$ に垂直な直線の傾きは？', 'ans' => '$-\frac{1}{3}$'],
    ['jp' => '原点を中心とする半径 $5$ の円上の点 $(3, 4)$ における接線は？', 'ans' => '$3x + 4y = 25$']
];

// 测试库 (10道题)
$pool_tests = [
    ['q' => '2点 $A(1,2), B(3,4)$ の中点の座標は？', 'a' => '$(2, 3)$'],
    ['q' => '点 $(1, 2)$ を通り、傾きが $3$ の直線の方程式は？', 'a' => '$y - 2 = 3(x - 1)$'],
    ['q' => '方程式 $x^2+y^2-4x-6y=0$ が表す図形は？', 'a' => '中心 $(2,3)$ 半径 $\sqrt{13}$ の円'],
    ['q' => '直線 $x+y-1=0$ と原点の距離は？', 'a' => '$\frac{1}{\sqrt{2}}$'],
    ['q' => '2直線が平行であるための傾き $m_1, m_2$ の条件は？', 'a' => '$m_1 = m_2$'],
    ['q' => '2直線が垂直であるための傾き $m_1, m_2$ の条件は？', 'a' => '$m_1 m_2 = -1$'],
    ['q' => '円 $x^2+y^2=4$ と直線 $y=x+k$ が接するときの $k^2$ の値は？', 'a' => '$8$ ($d^2=r^2 \implies \frac{k^2}{2}=4$)'],
    ['q' => '不等式 $y > x$ の表す領域は直線のどちら側？', 'a' => '上側 (Upper side)'],
    ['q' => '2点間の距離の公式の導出に使われる定理は？', 'a' => '三平方の定理 (Pythagorean theorem)'],
    ['q' => 'アポロニウスの円とは、2点からの距離の比がどうなる点の軌跡？', 'a' => '一定 ($m:n$, $m \neq n$)']
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
            --bg-color: #f0fff4; /* 浅绿背景 */
            --card-bg: #ffffff;
            --text-main: #2d3436;
            --btn-gen: #11998e; /* 按钮改为翡翠绿 */
            --btn-gen-hover: #0e857a;
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
            box-shadow: 0 5px 15px rgba(17, 153, 142, 0.4);
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
        .btn-read { background: #00b894; } 
        .btn-trans { background: #38ef7d; } 
        
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
        
        .dynamic-zone { margin-top: 20px; padding: 20px; background: #ecfdf5; border: 2px dashed #38ef7d; border-radius: 10px; display: none; }
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
                    <strong class="jp-text" style="color:#11998e;"><?php echo $item['term_jp']; ?></strong>
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
                <h3 style="margin:0 0 5px 0; font-size:1.1rem; color:#38ef7d;"><?php echo $item['name_jp']; ?></h3>
                
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

    <div class="card" style="border-left-color: #00b894;">
        <div class="card-title" style="color: #00b894;">
            <span>解法のテクニック (Technique)</span>
            <button class="btn-generate" style="background:#00b894;" onclick="generateSkill()">⚡ 生成技巧</button>
        </div>
        <div id="skill-dynamic" class="dynamic-zone" style="background:#f0fff4; border-color:#55efc4;"></div>
    </div>

    <div class="card">
        <div class="card-title">
            <span>スキルアップ演習 (Drills)</span>
            <button class="btn-generate" style="background:#00cec9;" onclick="generateDrill()">⚡ 生成练习</button>
        </div>
        <div id="drill-dynamic" class="dynamic-zone" style="background:#e0f7fa; border-color:#81ecec;"></div>
    </div>

    <div class="card">
        <div class="card-title">
            <span>確認テスト (Final Test)</span>
            <button class="btn-generate" style="background:#11998e;" onclick="startTest()">⚡ 开始挑战 (10問)</button>
        </div>

        <div id="test-scoreboard" style="display:none;">
            <div class="score-board">
                <span id="question-counter">Question: 1 / 10</span>
                <span id="score-counter" style="color:#11998e;">Score: 0</span>
            </div>
            <div class="progress-bar"><div class="progress-fill" id="progress-fill"></div></div>
        </div>

        <div id="test-area" class="dynamic-zone" style="display:block; background:#ecfdf5; border-color:#38ef7d;">
            <p style="text-align:center; color:#666;">点击“开始挑战”进行10道题的测试。<br>答对 6 道以上即过关！</p>
        </div>
    </div>

</div>

<div class="modal-overlay" id="resultModal">
    <div class="modal-content">
        <div id="modal-icon" style="font-size:4rem;">🎉</div>
        <h2 id="modal-title" style="color:#11998e;">Result</h2>
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
            <div style="margin:10px 0; padding:10px; background:#fff; border-left:3px solid #11998e;">
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
                <button class="btn-generate" style="background:#00b894;" onclick="revealTestAnswer('${uid}')">👁️ 显示答案</button>
            </div>
            <div id="${uid}" style="display:none; animation:fadeIn 0.5s;">
                <div class="math-block"><strong>正解：</strong> ${data.a}</div>
                <p style="text-align:center;">正解しましたか？</p>
                <div style="display:flex; justify-content:center; gap:20px;">
                    <button class="btn-generate" style="background:#11998e;" onclick="recordResult(true)">✅ Yes</button>
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
            title.style.color = "#11998e";
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
