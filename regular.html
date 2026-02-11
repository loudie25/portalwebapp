<?php
session_start();

// Handle project operations
if (isset($_GET['deleteProject']) && isset($_SESSION['saved_projects'][$_GET['deleteProject']])) {
    unset($_SESSION['saved_projects'][$_GET['deleteProject']]);
    header('Location: portal_method_updated.php');
    exit;
}

if (isset($_GET['clearAllProjects'])) {
    $_SESSION['saved_projects'] = [];
    header('Location: portal_method_updated.php');
    exit;
}

// Initialize projects array if not exists
if (!isset($_SESSION['saved_projects'])) {
    $_SESSION['saved_projects'] = [];
}

$newProjectName = isset($_GET['newProject']) ? $_GET['newProject'] : '';
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1" />
<title>Portal Method — Integrated Structural Analysis</title>
<!-- Add MathJax for LaTeX rendering -->
<script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
<script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
<!-- Font Awesome Icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<style>
:root {
    --primary: #1a73e8;
    --primary-dark: #0d47a1;
    --secondary: #6c757d;
    --success: #28a745;
    --warning: #ffc107;
    --danger: #dc3545;
    --light: #f8f9fa;
    --dark: #343a40;
    --gray: #6c757d;
    --gray-light: #e9ecef;
    --blue-light: #e3f2fd;
    --border-radius: 12px;
    --box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
    --box-shadow-hover: 0 8px 30px rgba(0, 0, 0, 0.12);
    --transition: all 0.3s ease;
}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    -webkit-tap-highlight-color: transparent;
}

body {
    font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
    background: linear-gradient(135deg, #f5f7fa 0%, #e4edf5 100%);
    color: var(--dark);
    line-height: 1.6;
    min-height: 100vh;
}

/* Typography */
h1, h2, h3, h4, h5, h6 {
    font-weight: 700;
    line-height: 1.3;
    margin-bottom: 1rem;
    color: var(--primary-dark);
}

h1 { font-size: 2.2rem; }
h2 { font-size: 1.8rem; }
h3 { font-size: 1.5rem; }
h4 { font-size: 1.2rem; }

p {
    margin-bottom: 1rem;
}

/* Layout */
.container {
    max-width: 1400px;
    margin: 0 auto;
    padding: 20px;
}

/* Navbar */
.navbar {
    background: linear-gradient(90deg, var(--primary-dark) 0%, var(--primary) 100%);
    color: white;
    padding: 16px 20px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    position: sticky;
    top: 0;
    z-index: 1000;
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
}

.brand {
    display: flex;
    align-items: center;
    gap: 12px;
    font-weight: 700;
    font-size: 1.3rem;
}

.brand-icon {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 40px;
    height: 40px;
    background: rgba(255, 255, 255, 0.1);
    border-radius: 8px;
}

.nav-links {
    display: flex;
    gap: 15px;
    align-items: center;
}

/* Buttons */
.btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    padding: 12px 20px;
    border-radius: 8px;
    font-weight: 600;
    text-decoration: none;
    border: none;
    cursor: pointer;
    transition: var(--transition);
    font-size: 16px;
    white-space: nowrap;
}

.btn-primary {
    background: var(--primary);
    color: white;
}

.btn-primary:hover {
    background: var(--primary-dark);
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(26, 115, 232, 0.3);
}

.btn-secondary {
    background: var(--secondary);
    color: white;
}

.btn-secondary:hover {
    background: #5a6268;
    transform: translateY(-2px);
}

.btn-success {
    background: var(--success);
    color: white;
}

.btn-success:hover {
    background: #218838;
    transform: translateY(-2px);
}

.btn-block {
    width: 100%;
    padding: 16px;
    font-size: 1.1rem;
}

.btn-group {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    margin-top: 20px;
}

/* Cards */
.card {
    background: white;
    border-radius: var(--border-radius);
    padding: 25px;
    margin-bottom: 25px;
    box-shadow: var(--box-shadow);
    border: 1px solid rgba(0, 0, 0, 0.05);
    transition: var(--transition);
}

.card:hover {
    box-shadow: var(--box-shadow-hover);
}

.card-header {
    display: flex;
    align-items: center;
    gap: 12px;
    margin-bottom: 20px;
    padding-bottom: 15px;
    border-bottom: 2px solid var(--gray-light);
}

.card-header i {
    color: var(--primary);
    font-size: 1.5rem;
}

/* Forms */
.form-group {
    margin-bottom: 20px;
}

.form-label {
    display: block;
    margin-bottom: 8px;
    font-weight: 600;
    color: var(--dark);
}

.form-input {
    width: 100%;
    padding: 14px 16px;
    border: 2px solid var(--gray-light);
    border-radius: 8px;
    font-size: 16px;
    transition: var(--transition);
    background: white;
}

.form-input:focus, .form-input:focus {
    outline: none;
    border-color: var(--primary);
    box-shadow: 0 0 0 3px rgba(26, 115, 232, 0.1);
}

.form-input.valid {
    border-color: var(--success);
}

.form-input.invalid {
    border-color: var(--danger);
}

.validation-msg {
    display: block;
    margin-top: 5px;
    color: var(--gray);
    font-size: 0.85rem;
}

.validation-msg.error {
    color: var(--danger);
}

.validation-msg.success {
    color: var(--success);
}

/* Grids */
.grid {
    display: grid;
    gap: 20px;
}

.grid-2 {
    grid-template-columns: repeat(2, 1fr);
}

.grid-3 {
    grid-template-columns: repeat(3, 1fr);
}

/* Tables */
.table-responsive {
    overflow-x: auto;
    margin: 20px 0;
    border-radius: 8px;
    border: 1px solid var(--gray-light);
}

table {
    width: 100%;
    border-collapse: collapse;
    min-width: 600px;
}

table th, table td {
    padding: 14px 16px;
    text-align: center;
    border: 1px solid var(--gray-light);
}

table th {
    background: var(--blue-light);
    font-weight: 600;
    color: var(--primary-dark);
    position: sticky;
    top: 0;
}

table tr:nth-child(even) {
    background: #f9f9f9;
}

table tr:hover {
    background: #f1f7ff;
}

/* Tabs */
.tabs {
    display: flex;
    gap: 8px;
    border-bottom: 2px solid #e2e8f0;
    margin-bottom: 20px;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
}

.tab {
    padding: 12px 16px;
    background: transparent;
    border: none;
    color: var(--gray);
    font-weight: 600;
    cursor: pointer;
    transition: var(--transition);
    border-bottom: 3px solid transparent;
    white-space: nowrap;
    font-size: 14px;
    min-height: 44px;
}

.tab:hover {
    color: var(--primary);
}

.tab.active {
    color: var(--primary);
    border-bottom-color: var(--primary);
}

.tab-content {
    display: none;
}

.tab-content.active {
    display: block;
    animation: fadeIn 0.3s ease-in;
}

@keyframes fadeIn {
    from { opacity: 0; transform: translateY(10px); }
    to { opacity: 1; transform: translateY(0); }
}

/* Result Cards */
.result-card {
    background: #f8fbff;
    padding: 20px;
    border-radius: 8px;
    margin: 15px 0;
    border: 1px solid #e1ecff;
}

.result-card h4 {
    margin-top: 0;
    color: var(--primary);
    display: flex;
    align-items: center;
    gap: 10px;
    margin-bottom: 15px;
}

/* Step-by-step */
.calculation-step {
    background: white;
    border-left: 4px solid var(--primary);
    padding: 16px;
    margin-bottom: 16px;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
}

.calculation-step .step-number {
    display: inline-block;
    background: var(--primary);
    color: white;
    width: 28px;
    height: 28px;
    border-radius: 50%;
    text-align: center;
    line-height: 28px;
    font-weight: 700;
    font-size: 14px;
    margin-right: 12px;
}

.calculation-step .step-title {
    font-weight: 600;
    color: var(--secondary);
    font-size: 16px;
    margin-bottom: 8px;
}

.calculation-step .step-equation {
    background: #f1f5f9;
    padding: 12px;
    border-radius: 6px;
    font-family: 'Courier New', monospace;
    font-size: 14px;
    margin: 8px 0;
    color: #334155;
    overflow-x: auto;
}

.calculation-step .step-work {
    margin: 8px 0;
    padding-left: 20px;
    color: var(--gray);
    font-size: 14px;
}

.calculation-step .step-result {
    background: linear-gradient(135deg, #dcfce7, #bbf7d0);
    padding: 10px 12px;
    border-radius: 6px;
    font-weight: 600;
    color: #166534;
    margin-top: 8px;
    display: inline-block;
}

.hidden {
    display: none !important;
}

/* Alerts */
.alert {
    padding: 18px 20px;
    border-radius: 8px;
    margin: 20px 0;
    display: flex;
    align-items: flex-start;
    gap: 12px;
}

.alert i {
    font-size: 1.3rem;
    flex-shrink: 0;
    margin-top: 2px;
}

.alert-info {
    background: #e8f4fd;
    border-bottom: 4px solid #002366;
    color: #0c5460;
}

.alert-error {
    background: #fdeaea;
    border-left: 4px solid var(--danger);
    color: #721c24;
}

.alert-success {
    background: #edf7ed;
    border-left: 4px solid var(--success);
    color: #155724;
}

/* Visualization - Updated from irregular.php */
.viz-container {
    width: 100%;
    overflow-x: auto;
    background: white;
    border: 1px solid var(--gray-light);
    border-radius: 8px;
    margin: 20px 0;
    padding: 15px;
    text-align: center;
}

#structureCanvas {
    background: white;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
    cursor: crosshair;
    max-width: 100%;
    height: auto;
}

.viz-controls {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    margin-bottom: 20px;
    justify-content: center;
}

.viz-btn {
    font-size: 14px;
    padding: 8px 16px;
    border: 2px solid var(--gray-light);
    background: white;
    border-radius: 20px;
    cursor: pointer;
    transition: var(--transition);
    display: flex;
    align-items: center;
    gap: 6px;
    font-weight: 500;
}

.viz-btn:hover {
    border-color: var(--primary);
    background: #f0f7ff;
}

.viz-btn.active {
    background: var(--primary);
    color: white;
    border-color: var(--primary);
}

/* Mobile Responsiveness */
@media (max-width: 768px) {
    .container {
        padding: 15px;
    }
    
    .navbar {
        flex-direction: column;
        gap: 15px;
        padding: 15px;
    }
    
    .nav-links {
        width: 100%;
        justify-content: center;
    }
    
    h1 { font-size: 1.8rem; }
    h2 { font-size: 1.5rem; }
    h3 { font-size: 1.3rem; }
    
    .grid-2, .grid-3 {
        grid-template-columns: 1fr;
    }
    
    .card {
        padding: 20px;
    }
    
    .btn {
        padding: 10px 16px;
        font-size: 15px;
    }
    
    .btn-block {
        padding: 14px;
    }
    
    .table-responsive {
        margin: 15px -15px;
        border-radius: 0;
        border-left: none;
        border-right: none;
    }
    
    .tabs {
        flex-direction: column;
    }
    
    .tab {
        width: 100%;
        text-align: center;
    }
    
    .viz-controls {
        flex-direction: column;
        align-items: stretch;
    }
    
    .viz-btn {
        justify-content: center;
    }
}

@media (max-width: 480px) {
    .container {
        padding: 10px;
    }
    
    .card {
        padding: 15px;
    }
    
    .form-input {
        padding: 12px;
    }
    
    .btn-group {
        flex-direction: column;
    }
    
    .btn {
        width: 100%;
        justify-content: center;
    }
}

/* Animations */
@keyframes fadeIn {
    from { opacity: 0; transform: translateY(10px); }
    to { opacity: 1; transform: translateY(0); }
}

/* Print Styles */
@media print {
    .navbar, .btn-group, .viz-controls {
        display: none !important;
    }
    
    .card {
        box-shadow: none;
        border: 1px solid #ddd;
    }
}

/* Custom Scrollbar */
::-webkit-scrollbar {
    width: 8px;
    height: 8px;
}

::-webkit-scrollbar-track {
    background: #f1f1f1;
    border-radius: 10px;
}

::-webkit-scrollbar-thumb {
    background: #c1c1c1;
    border-radius: 10px;
}

::-webkit-scrollbar-thumb:hover {
    background: #a1a1a1;
}

/* Modal Styles */
.modal {
    display: none;
    position: fixed;
    z-index: 2000;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    backdrop-filter: blur(2px);
    animation: fadeIn 0.3s ease;
    overflow-y: auto;
}

.modal-content {
    background-color: white;
    margin: 5% auto;
    padding: 0;
    width: 90%;
    max-width: 700px;
    max-height: 85vh;
    border-radius: var(--border-radius);
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.2);
    animation: slideIn 0.3s ease;
    display: flex;
    flex-direction: column;
}

.modal-header {
    background: linear-gradient(90deg, var(--primary-dark) 0%, var(--primary) 100%);
    color: white;
    padding: 20px 25px;
    border-radius: var(--border-radius) var(--border-radius) 0 0;
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-shrink: 0;
}

.modal-header h3 {
    margin: 0;
    color: white;
    font-size: 1.4rem;
}

.modal-close {
    background: rgba(255, 255, 255, 0.2);
    border: none;
    color: white;
    font-size: 1.5rem;
    cursor: pointer;
    width: 36px;
    height: 36px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: var(--transition);
}

.modal-close:hover {
    background: rgba(255, 255, 255, 0.3);
    transform: rotate(90deg);
}

.modal-body {
    padding: 25px;
    line-height: 1.7;
    overflow-y: auto;
    flex: 1;
}

.modal-team {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 15px;
    margin: 20px 0;
}

.team-member {
    background: var(--light);
    padding: 15px;
    border-radius: 8px;
    border-bottom: 4px solid #002366;
    text-align: center;
}

.team-member i {
    color: var(--primary);
    font-size: 1.2rem;
    margin-bottom: 8px;
}

.project-title {
    background: var(--blue-light);
    padding: 15px;
    border-radius: 8px;
    margin: 20px 0;
    border: 1px solid #002366;
    font-style: italic;
    text-align: center;
}

.project-title strong {
    color: var(--primary-dark);
}

@keyframes slideIn {
    from { opacity: 0; transform: translateY(-30px); }
    to { opacity: 1; transform: translateY(0); }
}

/* Custom scrollbar for modal */
.modal-body::-webkit-scrollbar {
    width: 6px;
}

.modal-body::-webkit-scrollbar-track {
    background: #f1f1f1;
    border-radius: 10px;
}

.modal-body::-webkit-scrollbar-thumb {
    background: #c1c1c1;
    border-radius: 10px;
}

.modal-body::-webkit-scrollbar-thumb:hover {
    background: #a1a1a1;
}

/* Footer */
.footer {
    margin-top: 40px;
    padding: 20px;
    text-align: center;
    color: var(--gray);
    font-size: 14px;
    border-top: 1px solid var(--gray-light);
    background: white;
    border-radius: var(--border-radius);
}

/* Tooltip */
.tooltip {
    position: relative;
    display: inline-block;
}

.tooltip .tooltip-text {
    visibility: hidden;
    width: 200px;
    background-color: var(--dark);
    color: white;
    text-align: center;
    border-radius: 6px;
    padding: 8px;
    position: absolute;
    z-index: 1;
    bottom: 125%;
    left: 50%;
    transform: translateX(-50%);
    opacity: 0;
    transition: opacity 0.3s;
    font-size: 0.85rem;
    font-weight: normal;
}

.tooltip:hover .tooltip-text {
    visibility: visible;
    opacity: 1;
}

/* Loading Spinner */
.spinner {
    display: inline-block;
    width: 20px;
    height: 20px;
    border: 3px solid rgba(0, 0, 0, 0.1);
    border-radius: 50%;
    border-top-color: var(--primary);
    animation: spin 1s ease-in-out infinite;
}

@keyframes spin {
    to { transform: rotate(360deg); }
}

/* Export Button Styles */
.export-btn-group {
    display: flex;
    gap: 10px;
    margin-top: 15px;
    flex-wrap: wrap;
}

.export-btn {
    background: #6c757d;
    color: white;
    border: none;
    padding: 10px 16px;
    border-radius: 6px;
    cursor: pointer;
    display: flex;
    align-items: center;
    gap: 8px;
    font-size: 14px;
    transition: var(--transition);
}

.export-btn:hover {
    background: #5a6268;
    transform: translateY(-2px);
}

.export-btn.pdf {
    background: #dc3545;
}

.export-btn.pdf:hover {
    background: #c82333;
}

.export-btn.text {
    background: #28a745;
}

.export-btn.text:hover {
    background: #218838;
}
</style>
</head>
<body>
  <!-- Updated Navbar from irregular.php -->
  <div class="navbar">
    <div class="brand">
      <div class="brand-icon">
        <i class="fas fa-building"></i>
      </div>
      <div>Portal Method Structural Analysis</div>
    </div>
    <div class="nav-links">
      <button class="btn btn-secondary" onclick="location.href='irregular.php'">
        <i class="fas fa-random"></i> Irregular Frame
      </button>
      <button class="btn btn-secondary" onclick="openAboutModal()">
        <i class="fas fa-info-circle"></i> About
      </button>
      <button class="btn btn-secondary" onclick="window.print()">
        <i class="fas fa-print"></i> Print
      </button>
      <div style="font-size: 13px; background: rgba(255,255,255,0.2); padding: 4px 10px; border-radius: 20px;">
        v4.5 | BSCE 4 – 2025
      </div>
    </div>
  </div>

  <div class="container">
    <!-- Tabs -->
    <div class="tabs">
      <button class="tab active" onclick="switchTab('portal')">
        <i class="fas fa-calculator"></i> Portal Method
      </button>
      <button class="tab" onclick="switchTab('shear')">
        <i class="fas fa-bolt"></i> Shear Forces (V)
      </button>
      <button class="tab" onclick="switchTab('axial')">
        <i class="fas fa-weight-hanging"></i> Axial Forces (F)
      </button>
      <button class="tab" onclick="switchTab('moment')">
        <i class="fas fa-sync-alt"></i> Moments (M)
      </button>
      <button class="tab" onclick="switchTab('visualization')">
        <i class="fas fa-project-diagram"></i> Visualization
      </button>
    </div>

    <!-- Portal Method Tab -->
    <div id="portalTab" class="tab-content active">
      <div class="card">
        <div class="card-header">
          <i class="fas fa-calculator"></i>
          <h2>Regular Frame Configuration</h2>
        </div>
        
        <div class="alert alert-info">
          <i class="fas fa-info-circle"></i>
          <div>
            <strong>Regular Frame Analysis</strong>
            <p style="margin: 5px 0 0 0; font-size: 14px;">
              This solver handles regular rectangular frames with consistent spans across all storeys.
              Enter number of storeys (1-5) and spans (1-5) to begin.
            </p>
          </div>
        </div>

        <div class="grid grid-2">
          <div class="form-group">
            <label for="nStories" class="form-label">
              <i class="fas fa-layer-group"></i> Number of Storeys (1-5)
            </label>
            <input type="number" id="nStories" class="form-input" min="1" max="5" 
                   oninput="handleStoriesChange()" placeholder="e.g. 3">
            <span id="storiesValidation" class="validation-msg"></span>
          </div>

          <div class="form-group">
            <label for="nSpans" class="form-label">
              <i class="fas fa-grip-lines"></i> Number of Spans (1-5)
            </label>
            <input type="number" id="nSpans" class="form-input" min="1" max="5" 
                   oninput="handleSpansChange()" placeholder="e.g. 3">
            <span id="spansValidation" class="validation-msg"></span>
          </div>
        </div>

        <!-- Storey Inputs -->
        <div id="storeyInputsContainer" class="card hidden">
          <div class="card-header">
            <i class="fas fa-ruler-vertical"></i>
            <h3>Storey Parameters</h3>
          </div>
          <div id="storeyInputs"></div>
        </div>

        <!-- Span Inputs -->
        <div id="spanInputsContainer" class="card hidden">
          <div class="card-header">
            <i class="fas fa-ruler-horizontal"></i>
            <h3>Span Lengths</h3>
          </div>
          <div id="spanInputs"></div>
        </div>

        <!-- Action Buttons -->
        <div class="btn-group">
          <button class="btn btn-success" id="solveBtn" onclick="solveFrame()" disabled>
            <i class="fas fa-calculator"></i> Solve Frame Analysis
          </button>
          <button class="btn btn-secondary" onclick="validateComprehensive()">
            <i class="fas fa-check-circle"></i> Validate Inputs
          </button>
          <button class="btn btn-warning" onclick="clearAll()">
            <i class="fas fa-trash-alt"></i> Clear All
          </button>
        </div>
      </div>

      <!-- Results Section -->
      <div id="outputs" class="card hidden">
        <div class="card-header">
          <i class="fas fa-chart-bar"></i>
          <h2>Analysis Results</h2>
        </div>
        
        <!-- Main Analysis Results Table -->
        <div id="tableArea"></div>
                   
                
        <div class="btn-group">
          <button class="btn btn-primary" onclick="exportToPDF()">
            <i class="fas fa-file-pdf"></i> Export PDF Report
          </button>
          <button class="btn btn-secondary" onclick="exportToCSV()">
            <i class="fas fa-file-csv"></i> Export CSV Data
          </button>
          <button class="btn btn-secondary" onclick="clearAll()">
            <i class="fas fa-redo"></i> New Analysis
          </button>
        </div>
      </div>

      <div id="noResults" class="card">
        <p style="text-align: center; color: var(--gray); padding: 40px 20px;">
          <i class="fas fa-arrow-up" style="font-size: 2rem; display: block; margin-bottom: 10px;"></i>
          Enter frame configuration and click "Solve Frame Analysis" to see results
        </p>
      </div>
    </div>

    <!-- Shear Forces Tab -->
    <div id="shearTab" class="tab-content">
      <div class="card">
        <div class="card-header">
          <i class="fas fa-bolt"></i>
          <h2>Shear Forces Analysis</h2>
        </div>
        
        <div class="alert alert-info">
          <i class="fas fa-info-circle"></i>
          <div>
            <strong>Note:</strong> Shear forces are automatically calculated when you solve the frame in the Portal Method tab.
            Click "Solve Frame Analysis" first to see results here.
          </div>
        </div>

        <div id="shearResults" class="hidden">
          <div class="result-card">
            <h4><i class="fas fa-bolt"></i> Shear Forces (V) Results</h4>
            <div id="shearResultsContent"></div>
          </div>

          <div class="card">
            <div class="card-header">
              <i class="fas fa-table"></i>
              <h3>Results Summary Table</h3>
            </div>
            <div class="table-responsive">
              <table>
                <thead>
                  <tr>
                    <th>Storey</th>
                    <th>Column</th>
                    <th>Shear Force (kN)</th>
                    <th>Equation</th>
                  </tr>
                </thead>
                <tbody id="shearTableBody"></tbody>
              </table>
            </div>
          </div>

          <div class="card">
            <div class="card-header">
              <i class="fas fa-list-ol"></i>
              <h3>Step-by-Step Solution</h3>
            </div>
            <div id="shearStepsContent"></div>
          </div>
        </div>

        <div id="noShearResults">
          <p style="text-align: center; color: var(--gray); padding: 40px 20px;">
            <i class="fas fa-exclamation-triangle" style="font-size: 2rem; display: block; margin-bottom: 10px;"></i>
            No shear force results yet. Please solve the frame in the Portal Method tab first.
          </p>
        </div>
      </div>
    </div>

    <!-- Axial Forces Tab -->
    <div id="axialTab" class="tab-content">
      <div class="card">
        <div class="card-header">
          <i class="fas fa-weight-hanging"></i>
          <h2>Axial Forces Analysis</h2>
        </div>
        
        <div class="alert alert-info">
          <i class="fas fa-info-circle"></i>
          <div>
            <strong>Note:</strong> Axial forces are automatically calculated when you solve the frame in the Portal Method tab.
            Click "Solve Frame Analysis" first to see results here.
          </div>
        </div>

        <div id="axialResults" class="hidden">
          <div class="result-card">
            <h4><i class="fas fa-weight-hanging"></i> Axial Forces (F) Results</h4>
            <div id="axialResultsContent"></div>
          </div>

          <div class="card">
            <div class="card-header">
              <i class="fas fa-table"></i>
              <h3>Results Summary Table</h3>
            </div>
            <div class="table-responsive">
              <table>
                <thead>
                  <tr>
                    <th>Member Type</th>
                    <th>Storey</th>
                    <th>Position</th>
                    <th>Axial Force (kN)</th>
                    <th>Type</th>
                  </tr>
                </thead>
                <tbody id="axialTableBody"></tbody>
              </table>
            </div>
          </div>

          <div class="card">
            <div class="card-header">
              <i class="fas fa-list-ol"></i>
              <h3>Step-by-Step Solution</h3>
            </div>
            <div id="axialStepsContent"></div>
          </div>
        </div>

        <div id="noAxialResults">
          <p style="text-align: center; color: var(--gray); padding: 40px 20px;">
            <i class="fas fa-exclamation-triangle" style="font-size: 2rem; display: block; margin-bottom: 10px;"></i>
            No axial force results yet. Please solve the frame in the Portal Method tab first.
          </p>
        </div>
      </div>
    </div>

    <!-- Moments Tab -->
    <div id="momentTab" class="tab-content">
      <div class="card">
        <div class="card-header">
          <i class="fas fa-sync-alt"></i>
          <h2>Bending Moments Analysis</h2>
        </div>
        
        <div class="alert alert-info">
          <i class="fas fa-info-circle"></i>
          <div>
            <strong>Note:</strong> Bending moments are automatically calculated when you solve the frame in the Portal Method tab.
            Click "Solve Frame Analysis" first to see results here.
          </div>
        </div>

        <div id="momentResults" class="hidden">
          <div class="result-card">
            <h4><i class="fas fa-sync-alt"></i> Bending Moments (M) Results</h4>
            <div id="momentResultsContent"></div>
          </div>

          <!-- Column Moments Table -->
          <div class="card">
            <div class="card-header">
              <i class="fas fa-columns"></i>
              <h3>Column Moments</h3>
            </div>
            <div class="table-responsive">
              <table>
                <thead>
                  <tr>
                    <th>Column ID</th>
                    <th>Storey</th>
                    <th>Position</th>
                    <th>Moment Top (kN·m)</th>
                    <th>Moment Bottom (kN·m)</th>
                    <th>Type</th>
                  </tr>
                </thead>
                <tbody id="columnMomentTableBody"></tbody>
              </table>
            </div>
          </div>

          <!-- Beam Moments Table -->
          <div class="card">
            <div class="card-header">
              <i class="fas fa-grip-lines"></i>
              <h3>Beam Moments</h3>
            </div>
            <div class="table-responsive">
              <table>
                <thead>
                  <tr>
                    <th>Beam ID</th>
                    <th>Storey</th>
                    <th>Span</th>
                    <th>Moment Left (kN·m)</th>
                    <th>Moment Right (kN·m)</th>
                    <th>Max Moment (kN·m)</th>
                  </tr>
                </thead>
                <tbody id="beamMomentTableBody"></tbody>
              </table>
            </div>
          </div>

          <div class="card">
            <div class="card-header">
              <i class="fas fa-list-ol"></i>
              <h3>Step-by-Step Solution</h3>
            </div>
            <div id="momentStepsContent"></div>
          </div>
        </div>

        <div id="noMomentResults">
          <p style="text-align: center; color: var(--gray); padding: 40px 20px;">
            <i class="fas fa-exclamation-triangle" style="font-size: 2rem; display: block; margin-bottom: 10px;"></i>
            No bending moment results yet. Please solve the frame in the Portal Method tab first.
          </p>
        </div>
      </div>
    </div>

    <!-- Visualization Tab - UPDATED -->
    <div id="visualizationTab" class="tab-content">
      <div class="card">
        <div class="card-header">
          <i class="fas fa-project-diagram"></i>
          <h2>Structural Visualization</h2>
        </div>
        
        <div class="alert alert-info">
          <i class="fas fa-info-circle"></i>
          <div>
            <strong>Interactive Diagram:</strong> Visualize the frame structure with color-coded forces.
            Hinges indicate points of contraflexure (zero moment). Hover over badges for values.
          </div>
        </div>

        <div id="visualizationResults" class="hidden">
          <div class="card">
            <div class="card-header">
              <i class="fas fa-sliders-h"></i>
              <h3>Visualization Controls</h3>
            </div>
            <div class="viz-controls">
              <button class="viz-btn active" onclick="toggleVizLayer('shears')">
                <i class="fas fa-arrows-alt-v"></i> Show Shear (V)
              </button>
              <button class="viz-btn active" onclick="toggleVizLayer('moments')">
                <i class="fas fa-redo-alt"></i> Show Moments (M)
              </button>
              <button class="viz-btn active" onclick="toggleVizLayer('axials')">
                <i class="fas fa-arrows-alt-h"></i> Show Axial (P/H)
              </button>
              <button class="viz-btn" onclick="toggleVizLayer('loads')">
                <i class="fas fa-weight-hanging"></i> Show Loads
              </button>
              <button class="btn btn-success" onclick="downloadVisualization()">
                <i class="fas fa-download"></i> Download Diagram
              </button>
            </div>
          </div>

          <div class="card">
            <div class="card-header">
              <i class="fas fa-drafting-compass"></i>
              <h3>Frame Diagram</h3>
            </div>
            <div class="viz-container">
              <canvas id="structureCanvas"></canvas>
            </div>
            
            <div style="margin-top: 15px; font-size: 13px; color: var(--gray); text-align: center; line-height: 1.6;">
              <div><i class="fas fa-circle" style="color: white; background: #333; border-radius: 50%; padding: 3px;"></i> White circles = Hinges (points of contraflexure)</div>
              <div><span style="color: #007bff;">🟦 Blue</span> = Shear forces | <span style="color: #28a745;">🟩 Green</span> = Axial forces | <span style="color: #6f42c1;">🟪 Purple</span> = Column shears</div>
            </div>
          </div>
        </div>

        <div id="noVisualizationResults">
          <p style="text-align: center; color: var(--gray); padding: 40px 20px;">
            <i class="fas fa-exclamation-triangle" style="font-size: 2rem; display: block; margin-bottom: 10px;"></i>
            No visualization data available. Please solve the frame in the Portal Method tab first.
          </p>
        </div>
      </div>
    </div>

    <div class="footer">
      <div>Developed by BSCE 4 – Portal Method Project (2025)</div>
      <div style="margin-top: 8px; font-size: 12px; color: var(--gray);">
        Enhanced Regular Frame Analysis - Version 4.5 | Professional Formulas with LaTeX
      </div>
      <div style="margin-top: 8px; font-size: 11px; color: var(--gray);">
        <i class="fas fa-mobile-alt"></i> Responsive Web App | <i class="fas fa-tablet-alt"></i> Mobile Optimized
      </div>
    </div>
  </div>

  <!-- ABOUT MODAL (from irregular.php) -->
  <div id="aboutModal" class="modal">
    <div class="modal-content">
      <div class="modal-header">
        <h3><i class="fas fa-info-circle"></i> About This Project</h3>
        <button class="modal-close" onclick="closeAboutModal()">&times;</button>
      </div>
      <div class="modal-body">
        <div class="project-title">
          <strong>DEVELOPMENT OF A WEB-BASED APPLICATION FOR STRUCTURAL ANALYSIS USING THE PORTAL METHOD</strong>
        </div>
        
        <p>This project is developed by BSCE 4th Year Students from the BiPSU School of Engineering Civil Engineering Department, 
        demonstrating the application of structural analysis principles through modern web technologies.</p>
        
        <h4>Project Team:</h4>
        <div class="modal-team">
          <div class="team-member">
            <i class="fas fa-user-graduate"></i>
            <div><strong>Lourd James Ando</strong></div>
            <div style="font-size: 14px; color: var(--gray);">Civil Engineering</div>
          </div>
          <div class="team-member">
            <i class="fas fa-user-graduate"></i>
            <div><strong>Jim Ariel Diezmo</strong></div>
            <div style="font-size: 14px; color: var(--gray);">Civil Engineering</div>
          </div>
          <div class="team-member">
            <i class="fas fa-user-graduate"></i>
            <div><strong>Karen Mangco</strong></div>
            <div style="font-size: 14px; color: var(--gray);">Civil Engineering</div>
          </div>
          <div class="team-member">
            <i class="fas fa-user-graduate"></i>
            <div><strong>Roma Grace Romero</strong></div>
            <div style="font-size: 14px; color: var(--gray);">Civil Engineering</div>
          </div>
        </div>
        
        <div style="margin-top: 25px; padding-top: 20px; border-top: 1px solid var(--gray-light);">
          <h4>Project Description:</h4>
          <p>This web application implements the Portal Method for analyzing regular building frames subjected to lateral loads. 
          It features step-by-step calculations, interactive visualizations, and comprehensive result reporting for educational 
          and professional use in structural engineering.</p>
          
          <div style="background: var(--light); padding: 15px; border-radius: 8px; margin-top: 15px;">
            <strong>Features:</strong>
            <ul style="margin: 10px 0 0 20px;">
              <li>Regular frame analysis with consistent spans</li>
              <li>Interactive step-by-step solution</li>
              <li>Visual representation of forces and moments</li>
              <li>Export capabilities for reports</li>
              <li>Mobile-responsive design</li>
              <li>LaTeX mathematical rendering</li>
            </ul>
          </div>
          
          <p style="margin-top: 20px; font-size: 14px; color: var(--gray); text-align: center;">
            <i class="fas fa-graduation-cap"></i> BSCE 4th Year Project • Academic Year 2025
          </p>
        </div>
      </div>
    </div>
  </div>

<script>
// Utility Functions
function $(id) {
    return document.getElementById(id);
}

let analysisResults = {};
let shearForces = {};
let axialForces = {};
let bendingMoments = {};

// Visualization Settings
const vizSettings = {
  shears: true,
  moments: true,
  axials: true,
  loads: false
};

// Tab Switching
function switchTab(tab) {
    document.querySelectorAll('.tab').forEach(t => t.classList.remove('active'));
    document.querySelectorAll('.tab-content').forEach(c => c.classList.remove('active'));
    
    if (tab === 'portal') {
        document.querySelectorAll('.tab')[0].classList.add('active');
        $('portalTab').classList.add('active');
    } else if (tab === 'shear') {
        document.querySelectorAll('.tab')[1].classList.add('active');
        $('shearTab').classList.add('active');
        if (Object.keys(shearForces).length > 0 && shearForces.columns) {
            displayShearResults();
        }
    } else if (tab === 'axial') {
        document.querySelectorAll('.tab')[2].classList.add('active');
        $('axialTab').classList.add('active');
        if (Object.keys(axialForces).length > 0 && axialForces.columns) {
            displayAxialResults();
        }
    } else if (tab === 'moment') {
        document.querySelectorAll('.tab')[3].classList.add('active');
        $('momentTab').classList.add('active');
        if (Object.keys(bendingMoments).length > 0 && bendingMoments.columns) {
            displayMomentResults();
        }
    } else if (tab === 'visualization') {
        document.querySelectorAll('.tab')[4].classList.add('active');
        $('visualizationTab').classList.add('active');
        if (Object.keys(analysisResults).length > 0) {
            initVisualization();
        }
    }
}

// Portal Method Functions
function handleStoriesChange() {
    const n = parseInt($('nStories').value);
    const validation = $('storiesValidation');
    
    if (isNaN(n) || n < 1 || n > 5) {
        $('nStories').className = 'form-input invalid';
        validation.textContent = 'Enter 1-5 storeys';
        validation.className = 'validation-msg error';
        $('storeyInputsContainer').classList.add('hidden');
        updateSolveButton();
        return;
    }
    
    $('nStories').className = 'form-input valid';
    validation.textContent = '✓ Valid';
    validation.className = 'validation-msg success';
    
    generateStoreyInputs(n);
    updateSolveButton();
}

function handleSpansChange() {
    const n = parseInt($('nSpans').value);
    const validation = $('spansValidation');
    
    if (isNaN(n) || n < 1 || n > 5) {
        $('nSpans').className = 'form-input invalid';
        validation.textContent = 'Enter 1-5 spans';
        validation.className = 'validation-msg error';
        $('spanInputsContainer').classList.add('hidden');
        updateSolveButton();
        return;
    }
    
    $('nSpans').className = 'form-input valid';
    validation.textContent = '✓ Valid';
    validation.className = 'validation-msg success';
    
    generateSpanInputs(n);
    updateSolveButton();
}

function generateStoreyInputs(n) {
    let html = '<div class="grid grid-2">';
    for (let i = 0; i < n; i++) {
        html += `
            <div class="form-group">
                <label class="form-label">Storey ${i+1} - Height (m)</label>
                <input type="number" id="h${i}" class="form-input" min="2" max="10" 
                       step="0.1" placeholder="2.0 - 10.0" oninput="updateSolveButton()">
            </div>
            <div class="form-group">
                <label class="form-label">Storey ${i+1} - Load (kN)</label>
                <input type="number" id="P${i}" class="form-input" min="0" max="1000" 
                       step="0.1" placeholder="0 - 1000" oninput="updateSolveButton()">
            </div>
        `;
    }
    html += '</div>';
    $('storeyInputs').innerHTML = html;
    $('storeyInputsContainer').classList.remove('hidden');
}

function generateSpanInputs(n) {
    let html = '<div class="grid grid-3">';
    for (let i = 0; i < n; i++) {
        html += `
            <div class="form-group">
                <label class="form-label">Span ${i+1} - Length (m)</label>
                <input type="number" id="L${i}" class="form-input" min="3" max="15" 
                       step="0.1" placeholder="3.0 - 15.0" oninput="updateSolveButton()">
            </div>
        `;
    }
    html += '</div>';
    $('spanInputs').innerHTML = html;
    $('spanInputsContainer').classList.remove('hidden');
}

function updateSolveButton() {
    const nStories = parseInt($('nStories').value);
    const nSpans = parseInt($('nSpans').value);
    
    if (isNaN(nStories) || isNaN(nSpans)) {
        $('solveBtn').disabled = true;
        return;
    }
    
    let allValid = true;
    
    for (let i = 0; i < nStories; i++) {
        const h = parseFloat($(`h${i}`)?.value);
        const P = parseFloat($(`P${i}`)?.value);
        if (isNaN(h) || isNaN(P) || h < 2 || h > 10 || P < 0 || P > 1000) {
            allValid = false;
            break;
        }
    }
    
    for (let i = 0; i < nSpans; i++) {
        const L = parseFloat($(`L${i}`)?.value);
        if (isNaN(L) || L < 3 || L > 15) {
            allValid = false;
            break;
        }
    }
    
    $('solveBtn').disabled = !allValid;
}

function readInputs() {
    const nStories = parseInt($('nStories').value);
    const nSpans = parseInt($('nSpans').value);
    
    let heights = [];
    let loads = [];
    let spans = [];
    
    for (let i = 0; i < nStories; i++) {
        heights.push(parseFloat($(`h${i}`).value));
        loads.push(parseFloat($(`P${i}`).value));
    }
    
    for (let i = 0; i < nSpans; i++) {
        spans.push(parseFloat($(`L${i}`).value));
    }
    
    return { nStories, nSpans, heights, loads, spans };
}

// ==========================================
// CORE CALCULATION LOGIC
// ==========================================
function calculatePortalMethod(data) {
    const stories = data.nStories;
    const bays = data.nSpans;
    const h = data.heights;
    const L = data.spans;
    const P = data.loads;
    
    let cols = [];
    let beams = [];
    
    // --- Step 1: Calculate Total Story Shear ---
    let storyShear = new Array(stories).fill(0);
    let cumulativeLoad = 0;
    for (let i = stories - 1; i >= 0; i--) {
        cumulativeLoad += P[i];
        storyShear[i] = cumulativeLoad;
    }

    // --- Step 2: Calculate Column Shears and Moments ---
    for (let i = 0; i < stories; i++) {
        cols[i] = [];
        const V_total = storyShear[i];
        const numCols = bays + 1;
        const totalParts = 2 * bays;
        
        for (let j = 0; j < numCols; j++) {
            let factor = (j === 0 || j === numCols - 1) ? 1 : 2;
            let V_col = (V_total / totalParts) * factor;
            let M_col = V_col * (h[i] / 2);
            
            cols[i][j] = {
                shear: V_col,
                momentTop: M_col,
                momentBottom: M_col,
                axial: 0
            };
        }
    }

    // --- Step 3: Calculate Beam Moments and Shears ---
    for (let i = 0; i < stories; i++) {
        beams[i] = [];
        
        for (let j = 0; j < bays; j++) {
            // Left end moment
            let M_col_below_L = cols[i][j].momentTop;
            let M_col_above_L = (i < stories - 1) ? cols[i+1][j].momentBottom : 0;
            let M_beam_L = 0;
            
            if (j == 0) {
                M_beam_L = M_col_below_L + M_col_above_L;
            } else {
                M_beam_L = (M_col_below_L + M_col_above_L) / 2;
            }
            
            // Right end moment
            let M_col_below_R = cols[i][j+1].momentTop;
            let M_col_above_R = (i < stories - 1) ? cols[i+1][j+1].momentBottom : 0;
            
            let M_beam_R = 0;
            if (j == bays - 1) {
                M_beam_R = M_col_below_R + M_col_above_R;
            } else {
                M_beam_R = (M_col_below_R + M_col_above_R) / 2;
            }
            
            // Beam shear
            let V_beam = (M_beam_L + M_beam_R) / L[j];
            
            beams[i][j] = {
                momentLeft: M_beam_L,
                momentRight: M_beam_R,
                shear: V_beam,
                axial: 0
            };
        }
    }

    // --- Step 4: Calculate Column Axial Forces ---
    for (let i = stories - 1; i >= 0; i--) {
        for (let j = 0; j <= bays; j++) {
            let axial_above = (i == stories - 1) ? 0 : cols[i+1][j].axial;
            let V_beam_right = (j < bays) ? beams[i][j].shear : 0;
            let V_beam_left = (j > 0) ? beams[i][j-1].shear : 0;
            
            cols[i][j].axial = axial_above + V_beam_left - V_beam_right;
        }
    }

    // --- Step 5: Calculate Beam Axial Forces ---
    for (let i = stories - 1; i >= 0; i--) {
        let currentAxial = 0;
        
        for (let j = 0; j < bays; j++) {
            let Load = (j === 0) ? P[i] : 0;
            let Shear_Below = cols[i][j].shear;
            let Shear_Above = (i < stories - 1) ? cols[i+1][j].shear : 0;
            
            let beamAxial = currentAxial + Load + Shear_Above - Shear_Below;
            beams[i][j].axial = beamAxial;
            currentAxial = beamAxial;
        }
    }

    return { 
        columns: cols, 
        beams: beams,
        storyShear: storyShear,
        totalWidth: L.reduce((a, b) => a + b, 0)
    };
}

function solveFrame() {
    const data = readInputs();
    const portalResults = calculatePortalMethod(data);
    
    analysisResults = {
        nStories: data.nStories,
        nSpans: data.nSpans,
        heights: data.heights,
        loads: data.loads,
        spans: data.spans,
        totalWidth: portalResults.totalWidth,
        V: portalResults.storyShear,
        columns: portalResults.columns,
        beams: portalResults.beams
    };
    
    calculateShearForces(portalResults);
    calculateAxialForces(portalResults);
    calculateBendingMoments(portalResults);
    
    displayResults();
    
    initVisualization();
    updateTabDisplay();
    
    showNotification('Frame solved successfully! Results available in all tabs.', 'success');
}

function displayResults() {
    let html = '<div class="table-responsive">';
    html += '<h4 style="color: var(--primary-dark); margin-bottom: 16px;">Frame Analysis Results</h4>';
    html += '<table>';
    html += '<thead><tr>';
    html += '<th>Storey</th>';
    html += '<th>Height (m)</th>';
    html += '<th>Load (kN)</th>';
    html += '<th>Story Shear (kN)</th>';
    html += '<th>Column Shears (kN)</th>';
    html += '<th>Beam Shears (kN)</th>';
    html += '</tr></thead><tbody>';
    
    for (let i = analysisResults.nStories - 1; i >= 0; i--) {
        html += '<tr>';
        html += `<td><strong>S${i+1}</strong></td>`;
        html += `<td>${analysisResults.heights[i].toFixed(2)}</td>`;
        html += `<td>${analysisResults.loads[i].toFixed(2)}</td>`;
        html += `<td>${analysisResults.V[i].toFixed(2)}</td>`;
        html += `<td>${analysisResults.columns[i].map(v => v.shear.toFixed(2)).join(', ')}</td>`;
        html += `<td>${analysisResults.beams[i].map(v => v.shear.toFixed(2)).join(', ')}</td>`;
        html += '</tr>';
    }
    
    html += '</tbody></table></div>';
    
    $('tableArea').innerHTML = html;
    $('outputs').classList.remove('hidden');
    $('noResults').classList.add('hidden');
}

function clearAll() {
    $('nStories').value = '';
    $('nSpans').value = '';
    $('nStories').className = 'form-input';
    $('nSpans').className = 'form-input';
    $('storiesValidation').innerHTML = '';
    $('spansValidation').innerHTML = '';
    $('storeyInputs').innerHTML = '';
    $('spanInputs').innerHTML = '';
    $('storeyInputsContainer').classList.add('hidden');
    $('spanInputsContainer').classList.add('hidden');
    $('outputs').classList.add('hidden');
    $('noResults').classList.remove('hidden');
    $('solveBtn').disabled = true;
    
    // Clear all results
    $('shearResults').classList.add('hidden');
    $('noShearResults').style.display = 'block';
    $('axialResults').classList.add('hidden');
    $('noAxialResults').style.display = 'block';
    $('momentResults').classList.add('hidden');
    $('noMomentResults').style.display = 'block';
    $('visualizationResults').classList.add('hidden');
    $('noVisualizationResults').style.display = 'block';
    
    analysisResults = {};
    shearForces = {};
    axialForces = {};
    bendingMoments = {};
    
    showNotification('All inputs cleared successfully.', 'info');
}

function validateComprehensive() {
    const data = readInputs();
    const totalHeight = data.heights.reduce((a, b) => a + b, 0);
    const totalWidth = data.spans.reduce((a, b) => a + b, 0);
    const aspectRatio = totalHeight / (totalWidth / data.spans.length);
    
    let warnings = [];
    
    if (aspectRatio > 4) {
        warnings.push('High aspect ratio - consider increasing span lengths');
    }
    
    if (aspectRatio < 0.5) {
        warnings.push('Low aspect ratio - frame may be too wide');
    }
    
    const totalLoad = data.loads.reduce((a, b) => a + b, 0);
    if (totalLoad > 500) {
        warnings.push('High lateral load - verify foundation capacity');
    }
    
    if (warnings.length > 0) {
        showNotification('Validation warnings: ' + warnings.join('. '), 'warning');
    } else {
        showNotification('All inputs validated successfully!', 'success');
    }
}

function exportToPDF() {
    showNotification('Opening print dialog for PDF export...', 'info');
    window.print();
}

function exportToCSV() {
    if (Object.keys(analysisResults).length === 0) {
        showNotification('No data to export! Please solve the frame first.', 'warning');
        return;
    }
    
    let csvContent = "data:text/csv;charset=utf-8,";
    
    csvContent += "Frame Configuration\n";
    csvContent += "Parameter,Value\n";
    csvContent += `Number of Storeys,${analysisResults.nStories}\n`;
    csvContent += `Number of Spans,${analysisResults.nSpans}\n`;
    csvContent += `Total Width,${analysisResults.totalWidth.toFixed(2)} m\n`;
    csvContent += "\n";
    
    csvContent += "Storey Analysis\n";
    csvContent += "Storey,Height (m),Load (kN),Story Shear (kN)\n";
    for (let i = 0; i < analysisResults.nStories; i++) {
        csvContent += `S${i+1},${analysisResults.heights[i].toFixed(2)},${analysisResults.loads[i].toFixed(2)},${analysisResults.V[i].toFixed(2)}\n`;
    }
    csvContent += "\n";
    
    if (Object.keys(axialForces).length > 0) {
        csvContent += "Axial Forces\n";
        csvContent += "Member,Force (kN),Type\n";
        for (const [key, data] of Object.entries(axialForces.columns)) {
            const type = data.type || (data.value < 0 ? "Compression" : "Tension");
            csvContent += `${key},${data.value.toFixed(1)},${type}\n`;
        }
    }
    
    if (Object.keys(bendingMoments).length > 0) {
        csvContent += "\nBending Moments\n";
        csvContent += "Member,Moment Top (kN·m),Moment Bottom (kN·m),Moment Left (kN·m),Moment Right (kN·m)\n";
        
        // Column moments
        for (const [key, data] of Object.entries(bendingMoments.columns)) {
            csvContent += `${key},${data.momentTop.toFixed(2)},${data.momentBottom.toFixed(2)},,\n`;
        }
        
        // Beam moments
        for (const [key, data] of Object.entries(bendingMoments.beams)) {
            csvContent += `${key},,,${data.momentLeft.toFixed(2)},${data.momentRight.toFixed(2)}\n`;
        }
    }
    
    const encodedUri = encodeURI(csvContent);
    const link = document.createElement("a");
    link.setAttribute("href", encodedUri);
    link.setAttribute("download", "frame_analysis.csv");
    document.body.appendChild(link);
    link.click();
    document.body.removeChild(link);
    
    showNotification('CSV data exported successfully!', 'success');
}

// Shear Force Calculations
function calculateShearForces(portalResults) {
    shearForces = {
        columns: {},
        beams: {}
    };
    
    const nStories = portalResults.columns.length;
    const nSpans = portalResults.beams[0]?.length || 0;
    
    for (let story = 0; story < nStories; story++) {
        for (let col = 0; col < nSpans + 1; col++) {
            const shearValue = portalResults.columns[story][col].shear;
            const key = `C${story+1}_${col+1}`;
            shearForces.columns[key] = {
                value: shearValue,
                story: story + 1,
                column: col + 1,
                eq: `V_${story+1}_${col+1} = Story Shear ${story+1} / (2 × n) × ${col === 0 || col === nSpans ? 1 : 2}`
            };
        }
    }
    
    for (let story = 0; story < nStories; story++) {
        for (let span = 0; span < nSpans; span++) {
            const shearValue = portalResults.beams[story][span].shear;
            const key = `B${story+1}_${span+1}`;
            shearForces.beams[key] = {
                value: shearValue,
                story: story + 1,
                span: span + 1,
                eq: `V_b${story+1}_${span+1} = (M_L + M_R) / L${span+1}`
            };
        }
    }
    
    displayShearResults();
}

function displayShearResults() {
    if (Object.keys(shearForces).length === 0 || !shearForces.columns) {
        $('shearResults').classList.add('hidden');
        $('noShearResults').style.display = 'block';
        return;
    }
    
    $('shearResults').classList.remove('hidden');
    $('noShearResults').style.display = 'none';
    
    let html = '<div class="grid grid-2">';
    
    html += '<div>';
    html += '<h4><i class="fas fa-columns"></i> Column Shear Forces</h4>';
    for (const [key, data] of Object.entries(shearForces.columns)) {
        html += `
            <div class="result-card" style="margin-bottom: 10px;">
                <h5>${key}</h5>
                <div style="font-size: 20px; font-weight: 700; color: var(--primary);">${data.value.toFixed(2)} kN</div>
                <div style="font-size: 12px; color: var(--gray); margin-top: 4px;">Storey ${data.story}, Column ${data.column}</div>
            </div>
        `;
    }
    html += '</div>';
    
    html += '<div>';
    html += '<h4><i class="fas fa-grip-lines"></i> Beam Shear Forces</h4>';
    for (const [key, data] of Object.entries(shearForces.beams)) {
        html += `
            <div class="result-card" style="margin-bottom: 10px;">
                <h5>${key}</h5>
                <div style="font-size: 20px; font-weight: 700; color: #f72585;">${data.value.toFixed(2)} kN</div>
                <div style="font-size: 12px; color: var(--gray); margin-top: 4px;">Storey ${data.story}, Span ${data.span}</div>
            </div>
        `;
    }
    html += '</div>';
    
    html += '</div>';
    $('shearResultsContent').innerHTML = html;
    
    let tableHTML = '';
    
    for (const [key, data] of Object.entries(shearForces.columns)) {
        tableHTML += `
            <tr>
                <td>Column ${key}</td>
                <td>Storey ${data.story}</td>
                <td>${data.value.toFixed(2)}</td>
                <td style="text-align: left; font-size: 12px; font-family: monospace;">${data.eq}</td>
            </tr>
        `;
    }
    
    for (const [key, data] of Object.entries(shearForces.beams)) {
        tableHTML += `
            <tr>
                <td>Beam ${key}</td>
                <td>Storey ${data.story}</td>
                <td>${data.value.toFixed(2)}</td>
                <td style="text-align: left; font-size: 12px; font-family: monospace;">${data.eq}</td>
            </tr>
        `;
    }
    
    $('shearTableBody').innerHTML = tableHTML;
    generateShearSteps();
}

function generateShearSteps() {
    const nStories = analysisResults.nStories;
    const nSpans = analysisResults.nSpans;
    
    let stepsHTML = '';
    let stepNum = 1;
    
    stepsHTML += `
        <div class="calculation-step">
            <div>
                <span class="step-number">${stepNum++}</span>
                <span class="step-title">Calculate Story Shears</span>
            </div>
            <div class="step-work">`;
    
    for (let i = nStories - 1; i >= 0; i--) {
        let cumulativeLoad = 0;
        let loadsText = '';
        for (let j = nStories - 1; j >= i; j--) {
            cumulativeLoad += analysisResults.loads[j];
            loadsText += (j === nStories - 1 ? '' : ' + ') + analysisResults.loads[j].toFixed(1);
        }
        stepsHTML += `V${i+1} = ${loadsText} = ${cumulativeLoad.toFixed(1)} kN<br>`;
    }
    
    stepsHTML += `</div></div>`;
    
    stepsHTML += `
        <div class="calculation-step">
            <div>
                <span class="step-number">${stepNum++}</span>
                <span class="step-title">Calculate Column Shears (Portal Method)</span>
            </div>
            <div class="step-work">
                For each storey: Total parts = 2 × n = ${2 * nSpans}<br>
                Unit shear = Story Shear / Total parts<br>
                Exterior columns: 1 × unit shear<br>
                Interior columns: 2 × unit shear<br>
            </div>
        </div>`;
    
    stepsHTML += `
        <div class="calculation-step">
            <div>
                <span class="step-number">${stepNum++}</span>
                <span class="step-title">Calculate Beam Shears</span>
            </div>
            <div class="step-work">
                Beam shear = (M_left + M_right) / Span Length<br>
                Where M_left and M_right are beam end moments<br>
            </div>
        </div>`;
    
    $('shearStepsContent').innerHTML = stepsHTML;
}

// Axial Force Calculations
function calculateAxialForces(portalResults) {
    axialForces = {
        columns: {},
        beams: {}
    };
    
    const nStories = portalResults.columns.length;
    const nSpans = portalResults.beams[0]?.length || 0;
    
    for (let story = 0; story < nStories; story++) {
        for (let col = 0; col < nSpans + 1; col++) {
            const axialValue = portalResults.columns[story][col].axial;
            const key = `C${story+1}_${col+1}`;
            axialForces.columns[key] = {
                value: axialValue,
                story: story + 1,
                column: col + 1,
                type: Math.abs(axialValue) < 0.1 ? 'Negligible' : 
                      (axialValue < 0 ? 'Compression' : 'Tension')
            };
        }
    }
    
    for (let story = 0; story < nStories; story++) {
        for (let span = 0; span < nSpans; span++) {
            const axialValue = portalResults.beams[story][span].axial;
            const key = `B${story+1}_${span+1}`;
            axialForces.beams[key] = {
                value: axialValue,
                story: story + 1,
                span: span + 1,
                type: Math.abs(axialValue) < 0.1 ? 'Negligible' : 
                      (axialValue < 0 ? 'Compression' : 'Tension')
            };
        }
    }
    
    displayAxialResults();
}

function displayAxialResults() {
    if (Object.keys(axialForces).length === 0 || !axialForces.columns) {
        $('axialResults').classList.add('hidden');
        $('noAxialResults').style.display = 'block';
        return;
    }
    
    $('axialResults').classList.remove('hidden');
    $('noAxialResults').style.display = 'none';
    
    let html = '<div class="grid grid-2">';
    
    html += '<div>';
    html += '<h4><i class="fas fa-columns"></i> Column Axial Forces</h4>';
    for (const [key, data] of Object.entries(axialForces.columns)) {
        const typeClass = data.value < 0 ? 'compression' : 'tension';
        const forceType = data.type;
        
        html += `
            <div class="result-card" style="margin-bottom: 10px;">
                <h5>${key}</h5>
                <div style="font-size: 20px; font-weight: 700; color: ${data.value < 0 ? '#dc2626' : '#059669'};">${data.value.toFixed(2)} kN</div>
                <div style="font-size: 12px; color: var(--gray); margin-top: 4px;">
                    Storey ${data.story}, Column ${data.column} - <span class="${typeClass}">${forceType}</span>
                </div>
            </div>
        `;
    }
    html += '</div>';
    
    html += '<div>';
    html += '<h4><i class="fas fa-grip-lines"></i> Beam Axial Forces</h4>';
    for (const [key, data] of Object.entries(axialForces.beams)) {
        const typeClass = data.value < 0 ? 'compression' : 'tension';
        const forceType = data.type;
        
        html += `
            <div class="result-card" style="margin-bottom: 10px;">
                <h5>${key}</h5>
                <div style="font-size: 20px; font-weight: 700; color: ${data.value < 0 ? '#dc2626' : '#059669'};">${data.value.toFixed(2)} kN</div>
                <div style="font-size: 12px; color: var(--gray); margin-top: 4px;">
                    Storey ${data.story}, Span ${data.span} - <span class="${typeClass}">${forceType}</span>
                </div>
            </div>
        `;
    }
    html += '</div>';
    
    html += '</div>';
    $('axialResultsContent').innerHTML = html;
    
    let tableHTML = '';
    
    for (const [key, data] of Object.entries(axialForces.columns)) {
        const typeClass = data.value < 0 ? 'compression' : 'tension';
        
        tableHTML += `
            <tr>
                <td>Column</td>
                <td>${data.story}</td>
                <td>${key}</td>
                <td><span class="${typeClass}">${data.value.toFixed(2)}</span></td>
                <td><span class="${typeClass}">${data.type}</span></td>
            </tr>
        `;
    }
    
    for (const [key, data] of Object.entries(axialForces.beams)) {
        const typeClass = data.value < 0 ? 'compression' : 'tension';
        
        tableHTML += `
            <tr>
                <td>Beam</td>
                <td>${data.story}</td>
                <td>${key}</td>
                <td><span class="${typeClass}">${data.value.toFixed(2)}</span></td>
                <td><span class="${typeClass}">${data.type}</span></td>
            </tr>
        `;
    }
    
    $('axialTableBody').innerHTML = tableHTML;
    generateAxialSteps();
}

function generateAxialSteps() {
    let stepsHTML = '';
    let stepNum = 1;
    
    stepsHTML += `
        <div class="calculation-step">
            <div>
                <span class="step-number">${stepNum++}</span>
                <span class="step-title">Method: Portal Method Axial Force Analysis</span>
            </div>
            <div class="step-work">
                <strong>Portal Method Approach:</strong>
                <ol style="margin-left: 20px;">
                    <li>Calculate Beam Shears from Beam Moments</li>
                    <li>Calculate Column Axial Forces from Beam Shears (Vertical Equilibrium ΣF_v = 0)</li>
                    <li>Calculate Beam Axial Forces from Horizontal Equilibrium (ΣF_h = 0)</li>
                </ol>
            </div>
        </div>`;
    
    stepsHTML += `
        <div class="calculation-step">
            <div>
                <span class="step-number">${stepNum++}</span>
                <span class="step-title">Step 1: Calculate Column Axial Forces (Vertical Equilibrium)</span>
            </div>
            <div class="step-work">
                <strong>Formula for Column j at Storey i:</strong><br>
                F_col[i][j] = F_col[i+1][j] + V_beam_left - V_beam_right<br><br>
                
                <strong>Where:</strong><br>
                • F_col[i+1][j] = Axial force in column above (0 for top storey)<br>
                • V_beam_left = Shear in beam to the left of column (0 for left exterior)<br>
                • V_beam_right = Shear in beam to the right of column (0 for right exterior)<br>
            </div>
        </div>`;
    
    stepsHTML += `
        <div class="calculation-step">
            <div>
                <span class="step-number">${stepNum++}</span>
                <span class="step-title">Step 2: Calculate Beam Axial Forces (Horizontal Equilibrium)</span>
            </div>
            <div class="step-work">
                <strong>Formula for Beam j at Storey i:</strong><br>
                F_beam[i][j] = F_prev + Load + Shear_Above - Shear_Below<br><br>
                
                <strong>Where:</strong><br>
                • F_prev = Axial force from previous joint (0 for leftmost)<br>
                • Load = Lateral load at this joint (only at left exterior)<br>
                • Shear_Above = Column shear from storey above<br>
                • Shear_Below = Column shear at current storey<br>
            </div>
        </div>`;
    
    stepsHTML += `
        <div class="calculation-step">
            <div>
                <span class="step-number">${stepNum++}</span>
                <span class="step-title">Step 3: Force Type Determination</span>
            </div>
            <div class="step-work">
                <strong>Compression (C):</strong> Negative values (-) → Member is being pushed/shortened<br>
                <strong>Tension (T):</strong> Positive values (+) → Member is being pulled/lengthened<br>
                <strong>Negligible:</strong> Values near zero (|F| < 0.1 kN)<br>
            </div>
            <div class="step-result">
                ✓ Axial force analysis complete using Portal Method
            </div>
        </div>`;
    
    $('axialStepsContent').innerHTML = stepsHTML;
}

// Bending Moment Calculations
function calculateBendingMoments(portalResults) {
    bendingMoments = {
        columns: {},
        beams: {}
    };
    
    const nStories = portalResults.columns.length;
    const nSpans = portalResults.beams[0]?.length || 0;
    
    // Column moments
    for (let story = 0; story < nStories; story++) {
        for (let col = 0; col < nSpans + 1; col++) {
            const key = `C${story+1}_${col+1}`;
            const columnData = portalResults.columns[story][col];
            
            bendingMoments.columns[key] = {
                momentTop: columnData.momentTop,
                momentBottom: columnData.momentBottom,
                story: story + 1,
                column: col + 1,
                type: columnData.momentTop < 0 ? 'Negative (Clockwise)' : 'Positive (Counter-clockwise)'
            };
        }
    }
    
    // Beam moments
    for (let story = 0; story < nStories; story++) {
        for (let span = 0; span < nSpans; span++) {
            const key = `B${story+1}_${span+1}`;
            const beamData = portalResults.beams[story][span];
            
            const maxMoment = Math.max(Math.abs(beamData.momentLeft), Math.abs(beamData.momentRight));
            
            bendingMoments.beams[key] = {
                momentLeft: beamData.momentLeft,
                momentRight: beamData.momentRight,
                maxMoment: maxMoment,
                story: story + 1,
                span: span + 1,
                leftType: beamData.momentLeft < 0 ? 'Negative (Clockwise)' : 'Positive (Counter-clockwise)',
                rightType: beamData.momentRight < 0 ? 'Negative (Clockwise)' : 'Positive (Counter-clockwise)'
            };
        }
    }
    
    displayMomentResults();
}

function displayMomentResults() {
    if (Object.keys(bendingMoments).length === 0 || !bendingMoments.columns) {
        $('momentResults').classList.add('hidden');
        $('noMomentResults').style.display = 'block';
        return;
    }
    
    $('momentResults').classList.remove('hidden');
    $('noMomentResults').style.display = 'none';
    
    // Results content
    let html = '<div class="grid grid-2">';
    
    html += '<div>';
    html += '<h4><i class="fas fa-columns"></i> Column Moments</h4>';
    for (const [key, data] of Object.entries(bendingMoments.columns)) {
        const momentClass = data.momentTop < 0 ? 'moment-negative' : 'moment-positive';
        const sign = data.momentTop < 0 ? '(-)' : '(+)';
        
        html += `
            <div class="result-card" style="margin-bottom: 10px;">
                <h5>${key}</h5>
                <div style="font-size: 20px; font-weight: 700; color: ${data.momentTop < 0 ? '#dc2626' : '#1d4ed8'};">${Math.abs(data.momentTop).toFixed(2)} kN·m</div>
                <div style="font-size: 12px; color: var(--gray); margin-top: 4px;">
                    Storey ${data.story}, Column ${data.column} - <span class="${momentClass}">${sign} ${data.type}</span>
                </div>
            </div>
        `;
    }
    html += '</div>';
    
    html += '<div>';
    html += '<h4><i class="fas fa-grip-lines"></i> Beam Moments</h4>';
    for (const [key, data] of Object.entries(bendingMoments.beams)) {
        const leftClass = data.momentLeft < 0 ? 'moment-negative' : 'moment-positive';
        const rightClass = data.momentRight < 0 ? 'moment-negative' : 'moment-positive';
        const leftSign = data.momentLeft < 0 ? '(-)' : '(+)';
        const rightSign = data.momentRight < 0 ? '(-)' : '(+)';
        
        html += `
            <div class="result-card" style="margin-bottom: 10px;">
                <h5>${key}</h5>
                <div style="font-size: 20px; font-weight: 700; color: #f59e0b;">${data.maxMoment.toFixed(2)} kN·m</div>
                <div style="font-size: 12px; color: var(--gray); margin-top: 4px;">
                    Storey ${data.story}, Span ${data.span}<br>
                    Left: <span class="${leftClass}">${Math.abs(data.momentLeft).toFixed(2)} kN·m ${leftSign}</span><br>
                    Right: <span class="${rightClass}">${Math.abs(data.momentRight).toFixed(2)} kN·m ${rightSign}</span>
                </div>
            </div>
        `;
    }
    html += '</div>';
    
    html += '</div>';
    $('momentResultsContent').innerHTML = html;
    
    // Column moments table
    let columnTableHTML = '';
    for (const [key, data] of Object.entries(bendingMoments.columns)) {
        const momentClass = data.momentTop < 0 ? 'moment-negative' : 'moment-positive';
        
        columnTableHTML += `
            <tr>
                <td>${key}</td>
                <td>${data.story}</td>
                <td>Column ${data.column}</td>
                <td><span class="${momentClass}">${data.momentTop.toFixed(2)}</span></td>
                <td><span class="${momentClass}">${data.momentBottom.toFixed(2)}</span></td>
                <td><span class="${momentClass}">${data.type}</span></td>
            </tr>
        `;
    }
    $('columnMomentTableBody').innerHTML = columnTableHTML;
    
    // Beam moments table
    let beamTableHTML = '';
    for (const [key, data] of Object.entries(bendingMoments.beams)) {
        const leftClass = data.momentLeft < 0 ? 'moment-negative' : 'moment-positive';
        const rightClass = data.momentRight < 0 ? 'moment-negative' : 'moment-positive';
        
        beamTableHTML += `
            <tr>
                <td>${key}</td>
                <td>${data.story}</td>
                <td>${data.span}</td>
                <td><span class="${leftClass}">${data.momentLeft.toFixed(2)}</span></td>
                <td><span class="${rightClass}">${data.momentRight.toFixed(2)}</span></td>
                <td><strong>${data.maxMoment.toFixed(2)}</strong></td>
            </tr>
        `;
    }
    $('beamMomentTableBody').innerHTML = beamTableHTML;
    
    generateMomentSteps();
}

function generateMomentSteps() {
    let stepsHTML = '';
    let stepNum = 1;
    
    stepsHTML += `
        <div class="calculation-step">
            <div>
                <span class="step-number">${stepNum++}</span>
                <span class="step-title">Step 1: Calculate Column Moments</span>
            </div>
            <div class="step-work">
                <strong>Formula:</strong> M = V × (h/2)<br>
                Where V = column shear, h = storey height<br>
                Assumption: Inflection point at mid-height of column
            </div>
        </div>`;
    
    stepsHTML += `
        <div class="calculation-step">
            <div>
                <span class="step-number">${stepNum++}</span>
                <span class="step-title">Step 2: Calculate Beam Moments</span>
            </div>
            <div class="step-work">
                <strong>For exterior bays:</strong><br>
                M_beam = M_col_below + M_col_above<br><br>
                
                <strong>For interior bays:</strong><br>
                M_beam = (M_col_below + M_col_above) / 2<br><br>
                
                Where M_col_below and M_col_above are moments from adjacent columns
            </div>
        </div>`;
    
    stepsHTML += `
        <div class="calculation-step">
            <div>
                <span class="step-number">${stepNum++}</span>
                <span class="step-title">Step 3: Sign Convention</span>
            </div>
            <div class="step-work">
                <strong>Positive (+):</strong> Counter-clockwise moment<br>
                <strong>Negative (-):</strong> Clockwise moment<br><br>
                
                <strong>Column Moments:</strong> Top and bottom moments are equal due to inflection at mid-height<br>
                <strong>Beam Moments:</strong> Left and right moments may differ based on span and adjacent columns
            </div>
            <div class="step-result">
                ✓ Bending moment analysis complete using Portal Method
            </div>
        </div>`;
    
    $('momentStepsContent').innerHTML = stepsHTML;
}

// ================= VISUALIZATION FUNCTIONS =================
function initVisualization() {
    if (Object.keys(analysisResults).length === 0) {
        $('visualizationResults').classList.add('hidden');
        $('noVisualizationResults').style.display = 'block';
        return;
    }
    
    $('visualizationResults').classList.remove('hidden');
    $('noVisualizationResults').style.display = 'none';
    
    const canvas = document.getElementById('structureCanvas');
    const ctx = canvas.getContext('2d');
    
    // Dynamically calculate canvas dimensions based on structure size
    const padding = 80;
    const storeyHeightPixels = 100;
    const spanWidthPixels = 120;
    
    // Calculate required width and height
    const requiredWidth = (analysisResults.nSpans * spanWidthPixels) + (padding * 2);
    const requiredHeight = (analysisResults.nStories * storeyHeightPixels) + (padding * 2);
    
    // Set canvas dimensions with some extra space
    canvas.width = Math.max(800, requiredWidth);
    canvas.height = Math.max(500, requiredHeight);
    
    // Clear
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    
    // Calculate offsets for centering
    const centerX = canvas.width / 2;
    const structureWidth = analysisResults.nSpans * spanWidthPixels;
    const startX = centerX - (structureWidth / 2);
    
    drawStructure(ctx, canvas.width, canvas.height, startX, padding, storeyHeightPixels, spanWidthPixels);
}

function drawStructure(ctx, w, h, startX, pad, sH, sW) {
    // Helper: map grid to coords
    const getX = (colIdx) => startX + (colIdx * sW);
    const getY = (storeyIdx) => h - pad - ((storeyIdx - 0) * sH); // Storey 0 is ground
    
    // Style config
    ctx.lineCap = 'round';
    ctx.lineJoin = 'round';
    
    // === DRAW GEOMETRY ===
    
    // Draw Columns with hinge indicators
    for (let i = 1; i <= analysisResults.nStories; i++) {
        for (let col = 0; col <= analysisResults.nSpans; col++) {
            const x = getX(col);
            const yTop = getY(i);
            const yBot = getY(i-1);
            
            // Draw column line
            ctx.beginPath();
            ctx.strokeStyle = '#333';
            ctx.lineWidth = 4;
            ctx.moveTo(x, yBot);
            ctx.lineTo(x, yTop);
            ctx.stroke();
            
            // Draw hinge indicator at mid-height (point of contraflexure)
            const midY = (yTop + yBot) / 2;
            ctx.beginPath();
            ctx.arc(x, midY, 6, 0, Math.PI * 2);
            ctx.fillStyle = 'white';
            ctx.fill();
            ctx.strokeStyle = '#333';
            ctx.lineWidth = 2;
            ctx.stroke();
            
            // Draw Support at base (Storey 0)
            if (i === 1) {
                drawSupport(ctx, x, yBot);
            }
        }
    }
    
    // Draw Beams with hinge indicators
    for (let i = 1; i <= analysisResults.nStories; i++) {
        for (let span = 1; span <= analysisResults.nSpans; span++) {
            const xLeft = getX(span - 1);
            const xRight = getX(span);
            const y = getY(i);
            
            // Draw beam line
            ctx.beginPath();
            ctx.strokeStyle = '#333';
            ctx.lineWidth = 4;
            ctx.moveTo(xLeft, y);
            ctx.lineTo(xRight, y);
            ctx.stroke();
            
            // Draw hinge indicator at mid-span (point of contraflexure)
            const midX = (xLeft + xRight) / 2;
            ctx.beginPath();
            ctx.arc(midX, y, 6, 0, Math.PI * 2);
            ctx.fillStyle = 'white';
            ctx.fill();
            ctx.strokeStyle = '#333';
            ctx.lineWidth = 2;
            ctx.stroke();
        }
    }
    
    // === DRAW LOADS (Layer) ===
    if (vizSettings.loads) {
        for (let i = 1; i <= analysisResults.nStories; i++) {
            const load = analysisResults.loads[i-1];
            const x = getX(0);
            const y = getY(i);
            drawArrow(ctx, x - 50, y, x - 5, y, '#dc3545');
            drawLabel(ctx, `${load} kN`, x - 55, y - 10, '#dc3545', 'right');
        }
    }
    
    // === DRAW RESULTS ===
    ctx.font = 'bold 12px sans-serif';
    
    // 1. BEAM RESULTS
    for (let i = 1; i <= analysisResults.nStories; i++) {
        for (let span = 1; span <= analysisResults.nSpans; span++) {
            const xMid = (getX(span-1) + getX(span)) / 2;
            const y = getY(i);
            
            // Vertical Shear (V) - Above Beam
            if (vizSettings.shears && analysisResults.beams[i-1] && analysisResults.beams[i-1][span-1]) {
                const val = analysisResults.beams[i-1][span-1].shear.toFixed(2);
                drawResultBadge(ctx, `V=${val}`, xMid, y - 25, '#007bff', '#ffffff');
            }
            
            // Horizontal Axial (H) - Below Beam
            if (vizSettings.axials && analysisResults.beams[i-1] && analysisResults.beams[i-1][span-1]) {
                const val = analysisResults.beams[i-1][span-1].axial.toFixed(2);
                drawResultBadge(ctx, `H=${val}`, xMid, y + 25, '#28a745', '#ffffff');
            }
        }
    }
    
    // 2. COLUMN RESULTS
    for (let i = 1; i <= analysisResults.nStories; i++) {
        for (let col = 0; col <= analysisResults.nSpans; col++) {
            const x = getX(col);
            const yMid = (getY(i) + getY(i-1)) / 2;
            
            // Column Shear (V) - Left of Column
            if (vizSettings.shears && analysisResults.columns[i-1] && analysisResults.columns[i-1][col]) {
               const val = analysisResults.columns[i-1][col].shear.toFixed(2);
               drawResultBadge(ctx, `V=${val}`, x - 30, yMid, '#6f42c1', '#ffffff');
            }
            
            // Column Axial (P) - Right of Column
            if (vizSettings.axials && analysisResults.columns[i-1] && analysisResults.columns[i-1][col]) {
               const raw = analysisResults.columns[i-1][col].axial;
               const val = Math.abs(raw).toFixed(2);
               const type = raw > 0 ? '(T)' : '(C)';
               drawResultBadge(ctx, `P=${val}${type}`, x + 30, yMid, '#fd7e14', '#ffffff');
            }
            
            // Moments (M) - Ends of Columns
            if (vizSettings.moments && analysisResults.columns[i-1] && analysisResults.columns[i-1][col]) {
               const val = analysisResults.columns[i-1][col].momentTop.toFixed(1);
               // Draw moment values at column ends
               drawMomentIndicator(ctx, x, getY(i), val, '#666');
               drawMomentIndicator(ctx, x, getY(i-1), val, '#666');
            }
        }
    }
}

// === DRAWING HELPERS ===
function drawSupport(ctx, x, y) {
    ctx.beginPath();
    ctx.moveTo(x - 10, y + 10);
    ctx.lineTo(x, y);
    ctx.lineTo(x + 10, y + 10);
    ctx.lineTo(x - 10, y + 10);
    ctx.fillStyle = '#6c757d';
    ctx.fill();
}

function drawArrow(ctx, fromX, fromY, toX, toY, color) {
    const headlen = 10;
    const dx = toX - fromX;
    const dy = toY - fromY;
    const angle = Math.atan2(dy, dx);
    ctx.strokeStyle = color;
    ctx.fillStyle = color;
    ctx.lineWidth = 2;
    
    ctx.beginPath();
    ctx.moveTo(fromX, fromY);
    ctx.lineTo(toX, toY);
    ctx.stroke();
    
    ctx.beginPath();
    ctx.moveTo(toX, toY);
    ctx.lineTo(toX - headlen * Math.cos(angle - Math.PI / 6), toY - headlen * Math.sin(angle - Math.PI / 6));
    ctx.lineTo(toX - headlen * Math.cos(angle + Math.PI / 6), toY - headlen * Math.sin(angle + Math.PI / 6));
    ctx.lineTo(toX, toY);
    ctx.fill();
}

function drawResultBadge(ctx, text, x, y, bgColor, textColor) {
    ctx.font = 'bold 11px sans-serif';
    const metrics = ctx.measureText(text);
    const width = metrics.width + 12;
    const height = 20;
    
    // Draw badge background with rounded corners
    ctx.beginPath();
    ctx.roundRect(x - width/2, y - height/2, width, height, 4);
    ctx.fillStyle = bgColor;
    ctx.fill();
    
    // Draw border
    ctx.strokeStyle = '#333';
    ctx.lineWidth = 1;
    ctx.stroke();
    
    // Draw text
    ctx.fillStyle = textColor;
    ctx.textAlign = 'center';
    ctx.textBaseline = 'middle';
    ctx.fillText(text, x, y);
}

function drawLabel(ctx, text, x, y, color, align) {
    ctx.font = 'bold 12px sans-serif';
    ctx.fillStyle = color;
    ctx.textAlign = align;
    ctx.fillText(text, x, y);
}

function drawMomentIndicator(ctx, x, y, value, color) {
    ctx.font = '10px sans-serif';
    ctx.fillStyle = color;
    ctx.textAlign = 'center';
    ctx.fillText(value, x + 8, y - 8);
}

function toggleVizLayer(layer) {
    vizSettings[layer] = !vizSettings[layer];
    
    // Update button state
    const btns = document.querySelectorAll('.viz-btn');
    Array.from(btns).forEach(btn => {
        if (btn.innerText.includes('Shear') && layer === 'shears') btn.classList.toggle('active');
        if (btn.innerText.includes('Moment') && layer === 'moments') btn.classList.toggle('active');
        if (btn.innerText.includes('Axial') && layer === 'axials') btn.classList.toggle('active');
        if (btn.innerText.includes('Loads') && layer === 'loads') btn.classList.toggle('active');
    });
    
    initVisualization(); // Redraw
}

function downloadVisualization() {
    const canvas = document.getElementById('structureCanvas');
    const link = document.createElement('a');
    link.download = 'frame-analysis-' + new Date().toISOString().slice(0,10) + '.png';
    link.href = canvas.toDataURL('image/png');
    document.body.appendChild(link);
    link.click();
    document.body.removeChild(link);
    showNotification('Diagram downloaded successfully!', 'success');
}

function updateTabDisplay() {
    if (Object.keys(shearForces).length > 0 && shearForces.columns) {
        $('shearResults').classList.remove('hidden');
        $('noShearResults').style.display = 'none';
    }
    
    if (Object.keys(axialForces).length > 0 && axialForces.columns) {
        $('axialResults').classList.remove('hidden');
        $('noAxialResults').style.display = 'none';
    }
    
    if (Object.keys(bendingMoments).length > 0 && bendingMoments.columns) {
        $('momentResults').classList.remove('hidden');
        $('noMomentResults').style.display = 'none';
    }
    
    if (Object.keys(analysisResults).length > 0) {
        $('visualizationResults').classList.remove('hidden');
        $('noVisualizationResults').style.display = 'none';
    }
}

// Notification System
function showNotification(message, type = 'info') {
    const existing = document.querySelectorAll('.notification');
    existing.forEach(n => n.remove());
    
    const notification = document.createElement('div');
    notification.className = 'notification';
    notification.style.cssText = `
        position: fixed;
        top: 20px;
        right: 20px;
        padding: 16px 24px;
        border-radius: 8px;
        color: white;
        font-weight: 600;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        z-index: 1000;
        transform: translateX(100%);
        opacity: 0;
        transition: all 0.3s ease;
    `;
    
    let bgColor;
    switch(type) {
        case 'success':
            bgColor = 'linear-gradient(135deg, #28a745, #218838)';
            break;
        case 'error':
            bgColor = 'linear-gradient(135deg, #dc3545, #c82333)';
            break;
        case 'warning':
            bgColor = 'linear-gradient(135deg, #ffc107, #e0a800)';
            break;
        default:
            bgColor = 'linear-gradient(135deg, #1a73e8, #0d47a1)';
    }
    
    notification.style.background = bgColor;
    notification.textContent = message;
    document.body.appendChild(notification);
    
    setTimeout(() => {
        notification.style.transform = 'translateX(0)';
        notification.style.opacity = '1';
    }, 10);
    
    setTimeout(() => {
        notification.style.transform = 'translateX(100%)';
        notification.style.opacity = '0';
        setTimeout(() => notification.remove(), 300);
    }, 4000);
}

// Modal Functions
function openAboutModal() {
    document.getElementById('aboutModal').style.display = 'block';
    document.body.style.overflow = 'hidden';
    
    const modalBody = document.querySelector('.modal-body');
    if (modalBody) {
        modalBody.scrollTop = 0;
    }
}

function closeAboutModal() {
    document.getElementById('aboutModal').style.display = 'none';
    document.body.style.overflow = 'auto';
}

window.onclick = function(event) {
    const modal = document.getElementById('aboutModal');
    if (event.target === modal) {
        closeAboutModal();
    }
}

document.addEventListener('keydown', function(event) {
    if (event.key === 'Escape') {
        closeAboutModal();
    }
});

// Initialize
document.addEventListener('DOMContentLoaded', function() {
    console.log('Portal Method Analysis Tool initialized');
    
    window.addEventListener('resize', function() {
        if ($('visualizationTab').classList.contains('active') && Object.keys(analysisResults).length > 0) {
            initVisualization();
        }
    });
    
    if (typeof MathJax !== 'undefined') {
        MathJax.typesetPromise();
    }
});

// Print styling
window.addEventListener('beforeprint', function() {
  document.querySelector('.navbar').style.display = 'none';
  document.querySelector('.viz-controls').style.display = 'none';
  document.querySelector('.btn-group').style.display = 'none';
});

window.addEventListener('afterprint', function() {
  document.querySelector('.navbar').style.display = 'flex';
  document.querySelector('.viz-controls').style.display = 'flex';
  document.querySelector('.btn-group').style.display = 'flex';
});

// Add roundedRect function to CanvasRenderingContext2D
if (!CanvasRenderingContext2D.prototype.roundRect) {
  CanvasRenderingContext2D.prototype.roundRect = function(x, y, width, height, radius) {
    if (width < 2 * radius) radius = width / 2;
    if (height < 2 * radius) radius = height / 2;
    this.beginPath();
    this.moveTo(x + radius, y);
    this.arcTo(x + width, y, x + width, y + height, radius);
    this.arcTo(x + width, y + height, x, y + height, radius);
    this.arcTo(x, y + height, x, y, radius);
    this.arcTo(x, y, x + width, y, radius);
    this.closePath();
    return this;
  }
}
</script>

</body>
</html>