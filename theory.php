<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1" />
<title>Portal Method — Theory & References</title>
<style>
:root{--blue:#1f6fb2;--accent:#0f4c81;--muted:#6b7b8c;--nav:#0b3b5a}
body{margin:0;background:linear-gradient(180deg,#ffffff,#f6fbff);font-family:system-ui,-apple-system,Segoe UI,Roboto,Arial;color:#0b2540;line-height:1.6}
.navbar{display:flex;align-items:center;justify-content:space-between;padding:8px 18px;background:linear-gradient(90deg,#ffffff,#eef8ff);border-bottom:3px solid var(--nav)}
.brand{display:flex;gap:12px;align-items:center}
.container{max-width:900px;margin:0 auto;padding:20px}
.card{background:white;border-radius:10px;padding:24px;margin-bottom:20px;box-shadow:0 6px 18px rgba(16,84,130,0.06)}
.btn{display:inline-flex;align-items:center;gap:8px;padding:10px 14px;border-radius:8px;background:#1f6fb2;color:white;text-decoration:none;margin-top:16px}
.footer{margin-top:20px;padding:12px;text-align:center;color:var(--muted);font-size:13px}

/* Theory Styles */
.theory-section{margin-bottom:30px}
.theory-section h2{color:var(--accent);border-bottom:2px solid var(--blue);padding-bottom:8px}
.assumption-list{background:#f8fbff;padding:16px;border-radius:8px;margin:16px 0}
.assumption-item{margin:8px 0;padding-left:20px;position:relative}
.assumption-item:before{content:"•"; color:var(--blue); position:absolute; left:8px}
.formula{background:#f8f9fa;padding:16px;border-radius:6px;font-family:monospace;margin:16px 0;border-left:4px solid var(--blue)}
.reference-item{margin:12px 0;padding:12px;background:#f8fbff;border-radius:6px}
</style>
</head>
<body>
  <div class="navbar">
    <div class="brand">
      <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" role="img">
        <rect x="14" y="22" width="72" height="56" rx="6" fill="#ffffff" stroke="#1f6fb2" stroke-width="6"/>
        <line x1="50" y1="22" x2="50" y2="78" stroke="#1f6fb2" stroke-width="4" />
      </svg>
      <div style="font-weight:800;color:#0f4c81">Portal Method Structural Analysis</div>
    </div>
    <div style="font-size:13px;color:#6b7b8c">Theory & References</div>
  </div>

  <div class="container">
    <div class="card">
      <h1 style="margin-top:0;color:var(--accent)">Portal Method Theory & References</h1>
      
      <div class="theory-section">
        <h2>📐 Introduction to Portal Method</h2>
        <p>The <strong>Portal Method</strong> is an approximate analysis technique used for analyzing laterally loaded multi-storey frames. It is particularly useful for preliminary design and educational purposes.</p>
        
        <div class="assumption-list">
          <h3>Key Assumptions:</h3>
          <div class="assumption-item">Points of inflection occur at mid-height of columns</div>
          <div class="assumption-item">Points of inflection occur at mid-length of beams</div>
          <div class="assumption-item">The frame consists of individual portal units</div>
          <div class="assumption-item">Lateral loads are resisted by frame action</div>
          <div class="assumption-item">Axial deformation of members is neglected</div>
        </div>
      </div>

      <div class="theory-section">
        <h2>🧮 Method Procedure</h2>
        <h3>Step 1: Story Shear Distribution</h3>
        <p>The total lateral shear at each level is distributed to the columns based on their relative stiffness.</p>
        
        <div class="formula">
          V<sub>i</sub> = ΣP<sub>j</sub> (for j = i to n)<br>
          Where: V<sub>i</sub> = Story shear at level i<br>
          P<sub>j</sub> = Lateral load at level j<br>
          n = Total number of stories
        </div>

        <h3>Step 2: Column Shear Distribution</h3>
        <p>For regular frames, interior columns typically carry twice the shear of exterior columns:</p>
        
        <div class="formula">
          V<sub>exterior</sub> = V<sub>story</sub> / (2 + 2×(number of interior columns))<br>
          V<sub>interior</sub> = 2 × V<sub>exterior</sub>
        </div>

        <h3>Step 3: Moment Calculations</h3>
        <p>Column moments are calculated assuming points of inflection at mid-height:</p>
        
        <div class="formula">
          M<sub>column</sub> = V<sub>column</sub> × (h/2)<br>
          Where: h = Storey height
        </div>

        <p>Beam moments are determined from joint equilibrium:</p>
        
        <div class="formula">
          M<sub>beam</sub> = ΣM<sub>column</sub> (at the joint)
        </div>
      </div>

      <div class="theory-section">
        <h2>⚖️ Limitations and Applicability</h2>
        <div class="assumption-list">
          <h3>When to Use Portal Method:</h3>
          <div class="assumption-item">Low to medium-rise buildings (typically ≤ 10 stories)</div>
          <div class="assumption-item">Preliminary design stages</div>
          <div class="assumption-item">Educational purposes</div>
          <div class="assumption-item">Regular frame configurations</div>
        </div>

        <div class="assumption-list" style="background:#fff5f5">
          <h3>Limitations:</h3>
          <div class="assumption-item">Not suitable for high-rise buildings</div>
          <div class="assumption-item">Accuracy decreases with irregular geometries</div>
          <div class="assumption-item">Does not account for joint displacements</div>
          <div class="assumption-item">Conservative for interior columns</div>
        </div>
      </div>

      <div class="theory-section">
        <h2>📚 References & Further Reading</h2>
        
        <div class="reference-item">
          <strong>1. ASCE 7-10</strong><br>
          <em>Minimum Design Loads for Buildings and Other Structures</em><br>
          American Society of Civil Engineers
        </div>

        <div class="reference-item">
          <strong>2. NSCP 2015</strong><br>
          <em>National Structural Code of the Philippines</em><br>
          Association of Structural Engineers of the Philippines
        </div>

        <div class="reference-item">
          <strong>3. Structural Analysis</strong><br>
          <em>by R.C. Hibbeler</em><br>
          Pearson Education, 9th Edition
        </div>

        <div class="reference-item">
          <strong>4. Design of Concrete Structures</strong><br>
          <em>by Arthur H. Nilson, David Darwin, Charles W. Dolan</em><br>
          McGraw-Hill Education, 14th Edition
        </div>
      </div>

      <div class="theory-section">
        <h2>🎓 Educational Value</h2>
        <p>This tool enhances understanding of:</p>
        <div class="assumption-list">
          <div class="assumption-item">Lateral load distribution in frames</div>
          <div class="assumption-item">Moment and shear relationships</div>
          <div class="assumption-item">Approximate analysis methods</div>
          <div class="assumption-item">Structural behavior under lateral loads</div>
          <div class="assumption-item">Code compliance requirements</div>
        </div>
      </div>

      <div style="text-align:center;margin-top:30px">
        <a class="btn" href="regular.php">🚀 Try Regular Frame Solver</a>
        <a class="btn" href="index.php" style="background:#6c8aa6">🏠 Back to Home</a>
      </div>
    </div>

    <div class="footer">
      <div>Developed by BSCE 4 – Portal Method Project (2025)</div>
      <div style="margin-top:8px;font-size:11px">Educational Tool for Structural Engineering</div>
    </div>
  </div>
</body>
</html>