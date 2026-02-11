<?php
session_start();

// Initialize computation results
$results = null;
$error = null;
$jsonResults = 'null'; // For passing data to JS

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['compute'])) {
    try {
        // Get input data
        $numStoreys = intval($_POST['numStoreys']);
        $numSpans = intval($_POST['numSpans']);
        
        // Validate limits
        if ($numStoreys < 1 || $numStoreys > 5) {
            throw new Exception("Number of storeys must be between 1 and 5");
        }
        if ($numSpans < 1 || $numSpans > 6) {
            throw new Exception("Number of spans must be between 1 and 6");
        }
        
        // Get loads and heights for each storey
        $loads = [];
        $heights = [];
        for ($i = 1; $i <= $numStoreys; $i++) {
            if (!isset($_POST["load_$i"]) || $_POST["load_$i"] === '') throw new Exception("Please enter Load for Storey $i");
            if (!isset($_POST["height_$i"]) || $_POST["height_$i"] === '') throw new Exception("Please enter Height for Storey $i");

            $loads[$i] = floatval($_POST["load_$i"]);
            $heights[$i] = floatval($_POST["height_$i"]);
        }
        
        // Get span lengths and active status
        $spanLengths = [];
        $activeSpans = []; // activeSpans[storey][span] = 1 or 0
        for ($j = 1; $j <= $numSpans; $j++) {
            if (!isset($_POST["span_length_$j"]) || $_POST["span_length_$j"] === '') throw new Exception("Please enter Length for Span $j");
            
            $spanLengths[$j] = floatval($_POST["span_length_$j"]);
            for ($i = 1; $i <= $numStoreys; $i++) {
                $activeSpans[$i][$j] = isset($_POST["active_{$i}_{$j}"]) ? 1 : 0;
            }
        }
        
        // Perform Portal Method Analysis for Irregular Structure
        $results = computeIrregularPortalMethod($numStoreys, $numSpans, $loads, $heights, $spanLengths, $activeSpans);
        
        // Prepare data for Visualization
        $jsonResults = json_encode($results);
        
    } catch (Exception $e) {
        $error = $e->getMessage();
    }
}

function computeIrregularPortalMethod($numStoreys, $numSpans, $loads, $heights, $spanLengths, $activeSpans) {
    $results = [
        'numStoreys' => $numStoreys,
        'numSpans' => $numSpans,
        'loads' => $loads,
        'heights' => $heights,
        'spanLengths' => $spanLengths,
        'activeSpans' => $activeSpans,
        'columnShears' => [],
        'beamShears' => [],
        'beamAxialForces' => [],
        'columnMoments' => [],
        'storeyShears' => [],
        'axialForces' => [],
        // NEW: Store intermediate calculation steps for step-by-step display
        'calculationSteps' => [],
        'exteriorCols' => [],
        'interiorCols' => [],
        'V_unit' => []
    ];
    
    // ==================== STEP 1: Storey Shear Forces ====================
    $storeyShear = 0;
    for ($i = $numStoreys; $i >= 1; $i--) {
        $storeyShear += $loads[$i];
        $results['storeyShears'][$i] = $storeyShear;
        
        // Store calculation step
        $results['calculationSteps'][$i]['storeyShear'] = [
            'formula' => 'V_{' . $i . '} = \sum_{j=' . $i . '}^{' . $numStoreys . '} P_j',
            'calculation' => 'Storey ' . $i . ': V = ' . $storeyShear . ' kN'
        ];
    }
    
    // ==================== STEP 2: Column Shear Forces (V & 2V Distribution) ====================
    for ($i = 1; $i <= $numStoreys; $i++) {
        // Determine active columns
        $activeColumns = [];
        for ($col = 0; $col <= $numSpans; $col++) {
            $leftSpanActive = ($col > 0 && isset($activeSpans[$i][$col]) && $activeSpans[$i][$col] == 1);
            $rightSpanActive = ($col < $numSpans && isset($activeSpans[$i][$col+1]) && $activeSpans[$i][$col+1] == 1);
            
            if ($leftSpanActive || $rightSpanActive) {
                $activeColumns[] = $col;
            }
        }
        
        // Classify columns
        $exteriorCols = [];
        $interiorCols = [];
        
        foreach ($activeColumns as $index => $col) {
            if ($index == 0 || $index == count($activeColumns)-1) {
                $exteriorCols[] = $col;
            } else {
                $interiorCols[] = $col;
            }
        }
        
        // Structural boundary check
        if (in_array(0, $activeColumns) && !in_array(0, $exteriorCols)) {
            $exteriorCols[] = 0;
            if (($key = array_search(0, $interiorCols)) !== false) unset($interiorCols[$key]);
        }
        if (in_array($numSpans, $activeColumns) && !in_array($numSpans, $exteriorCols)) {
            $exteriorCols[] = $numSpans;
            if (($key = array_search($numSpans, $interiorCols)) !== false) unset($interiorCols[$key]);
        }
        
        // Store column classifications
        $results['exteriorCols'][$i] = $exteriorCols;
        $results['interiorCols'][$i] = $interiorCols;
        
        // Calculate V
        $numExterior = count($exteriorCols);
        $numInterior = count($interiorCols);
        $totalUnits = $numExterior * 1 + $numInterior * 2;
        $V = ($totalUnits > 0) ? $results['storeyShears'][$i] / $totalUnits : 0;
        
        // Store V_unit for step-by-step display
        $results['V_unit'][$i] = $V;
        
        // Store calculation step with LaTeX formula
        $results['calculationSteps'][$i]['columnShearDistribution'] = [
            'formula' => 'V_{unit} = \frac{V_{storey}}{\sum units} = \frac{' . $results['storeyShears'][$i] . '}{' . $totalUnits . '}',
            'calculation' => 'V_{unit} = ' . round($V, 3) . ' kN',
            'details' => [
                'Exterior columns: ' . implode(', ', $exteriorCols) . ' → V = ' . round($V, 2) . ' kN',
                'Interior columns: ' . implode(', ', $interiorCols) . ' → V = ' . round(2 * $V, 2) . ' kN',
                'Active columns: ' . implode(', ', $activeColumns)
            ]
        ];
        
        foreach ($exteriorCols as $col) $results['columnShears'][$i][$col] = $V;
        foreach ($interiorCols as $col) $results['columnShears'][$i][$col] = 2 * $V;
    }
    
    // ==================== STEP 3: Column Moments ====================
    for ($i = 1; $i <= $numStoreys; $i++) {
        for ($col = 0; $col <= $numSpans; $col++) {
            if (isset($results['columnShears'][$i][$col])) {
                $results['columnMoments'][$i][$col] = $results['columnShears'][$i][$col] * ($heights[$i] / 2);
                
                // Store calculation step
                if (!isset($results['calculationSteps'][$i]['columnMoments'])) {
                    $results['calculationSteps'][$i]['columnMoments'] = [];
                }
                $results['calculationSteps'][$i]['columnMoments'][] = [
                    'formula' => 'M_{' . $i . ',' . $col . '} = V_{' . $i . ',' . $col . '} \times \frac{h_{' . $i . '}}{2}',
                    'calculation' => 'M = ' . round($results['columnShears'][$i][$col], 2) . ' × ' . round($heights[$i]/2, 2) . ' = ' . round($results['columnMoments'][$i][$col], 2) . ' kN·m'
                ];
            }
        }
    }
    
    // ==================== STEP 4: Beam Vertical Shears ====================
    for ($i = $numStoreys; $i >= 1; $i--) {
        for ($span = 1; $span <= $numSpans; $span++) {
            if (isset($activeSpans[$i][$span]) && $activeSpans[$i][$span] == 1) {
                $L = $spanLengths[$span];
                $leftCol = $span - 1;
                
                $sumColMoment = 0;
                if (isset($results['columnMoments'][$i][$leftCol])) $sumColMoment += $results['columnMoments'][$i][$leftCol];
                if ($i < $numStoreys && isset($results['columnMoments'][$i+1][$leftCol])) $sumColMoment += $results['columnMoments'][$i+1][$leftCol];
                
                $prevBeamMoment = 0;
                if ($span > 1 && isset($results['beamShears'][$i][$span-1])) {
                    $L_prev = $spanLengths[$span-1];
                    $prevBeamMoment = $results['beamShears'][$i][$span-1] * ($L_prev / 2);
                }
                
                $V_beam = ($sumColMoment - $prevBeamMoment) / ($L / 2);
                $results['beamShears'][$i][$span] = $V_beam;
                
                // Store calculation step
                if (!isset($results['calculationSteps'][$i]['beamShears'])) {
                    $results['calculationSteps'][$i]['beamShears'] = [];
                }
                $results['calculationSteps'][$i]['beamShears'][$span] = [
                    'formula' => 'V_{beam,' . $span . '} = \frac{\sum M_{columns} - M_{beam,prev}}{L/2}',
                    'calculation' => 'V = (' . round($sumColMoment, 2) . ' - ' . round($prevBeamMoment, 2) . ') / ' . round($L/2, 2) . ' = ' . round($V_beam, 2) . ' kN'
                ];
            }
        }
    }
    
    // ==================== STEP 5: Beam Axial Forces (Horizontal Shear) ====================
    for ($i = $numStoreys; $i >= 1; $i--) {
        for ($col = 0; $col < $numSpans; $col++) {
            $P_ext = ($col == 0) ? $loads[$i] : 0;
            
            $H_left = 0;
            if ($col > 0 && isset($results['beamAxialForces'][$i][$col])) {
                $H_left = $results['beamAxialForces'][$i][$col];
            }
            
            $V_top = 0;
            if ($i < $numStoreys && isset($results['columnShears'][$i+1][$col])) {
                $V_top = $results['columnShears'][$i+1][$col];
            }
            
            $V_bot = 0;
            if (isset($results['columnShears'][$i][$col])) {
                $V_bot = $results['columnShears'][$i][$col];
            }
            
            $rightSpanIndex = $col + 1;
            if (isset($activeSpans[$i][$rightSpanIndex]) && $activeSpans[$i][$rightSpanIndex] == 1) {
                $H_right = $P_ext + $H_left + $V_top - $V_bot;
                $results['beamAxialForces'][$i][$rightSpanIndex] = $H_right;
                
                // Store calculation step
                if (!isset($results['calculationSteps'][$i]['beamAxialForces'])) {
                    $results['calculationSteps'][$i]['beamAxialForces'] = [];
                }
                $results['calculationSteps'][$i]['beamAxialForces'][$rightSpanIndex] = [
                    'formula' => 'H_{' . $rightSpanIndex . '} = P_{ext} + H_{left} + V_{top} - V_{bottom}',
                    'calculation' => 'H = ' . round($P_ext, 2) . ' + ' . round($H_left, 2) . ' + ' . round($V_top, 2) . ' - ' . round($V_bot, 2) . ' = ' . round($H_right, 2) . ' kN'
                ];
            }
        }
    }
    
    // Calculate axial forces for columns (simplified approach)
    for ($i = 1; $i <= $numStoreys; $i++) {
        for ($col = 0; $col <= $numSpans; $col++) {
            $axial = 0;
            // Sum beam axial forces from above
            for ($k = $i + 1; $k <= $numStoreys; $k++) {
                if (isset($results['beamAxialForces'][$k][$col])) {
                    $axial += $results['beamAxialForces'][$k][$col];
                }
                if (isset($results['beamAxialForces'][$k][$col + 1])) {
                    $axial -= $results['beamAxialForces'][$k][$col + 1];
                }
            }
            $results['axialForces'][$i][$col] = $axial;
        }
    }
    
    return $results;
}
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1" />
<title>Portal Method – Enhanced Irregular Frame Solver</title>
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
    max-width: 1200px;
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

/* Forms */
.input-group {
    margin-bottom: 20px;
}

.input-group label {
    display: block;
    margin-bottom: 8px;
    font-weight: 600;
    color: var(--dark);
}

.input-group input, .input-group select {
    width: 100%;
    padding: 14px 16px;
    border: 2px solid var(--gray-light);
    border-radius: 8px;
    font-size: 16px;
    transition: var(--transition);
    background: white;
}

.input-group input:focus, .input-group select:focus {
    outline: none;
    border-color: var(--primary);
    box-shadow: 0 0 0 3px rgba(26, 115, 232, 0.1);
}

.input-group small {
    display: block;
    margin-top: 5px;
    color: var(--gray);
    font-size: 0.85rem;
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

/* Checkboxes */
.checkbox-group {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    margin: 10px 0;
}

.checkbox-label {
    display: flex;
    align-items: center;
    gap: 8px;
    padding: 8px 12px;
    background: white;
    border: 2px solid var(--gray-light);
    border-radius: 6px;
    cursor: pointer;
    transition: var(--transition);
}

.checkbox-label:hover {
    border-color: var(--primary);
    background: #f0f7ff;
}

.checkbox-label input[type="checkbox"] {
    width: 18px;
    height: 18px;
    cursor: pointer;
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
    border-buttom: 4px solid var(--primary);
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

/* Visualization */
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

/* Step-by-Step */
.step-container {
    margin: 25px 0;
    padding: 20px;
    background: var(--light);
    border-radius: 8px;
    border-left: 4px solid var(--primary);
    display: none;
}

.step-container.active {
    display: block;
    animation: fadeIn 0.5s ease;
}

.step-title {
    font-weight: 700;
    color: var(--primary);
    margin-bottom: 15px;
    display: flex;
    align-items: center;
    gap: 10px;
    font-size: 1.3rem;
}

.step-formula {
    background: white;
    padding: 20px;
    border-radius: 8px;
    margin: 15px 0;
    font-family: 'Times New Roman', serif;
    border: 1px solid var(--gray-light);
}

.step-details {
    margin-top: 15px;
    padding-left: 20px;
}

.step-details li {
    margin-bottom: 10px;
    padding: 8px 0;
    border-bottom: 1px dashed #eee;
}

.step-details li:last-child {
    border-bottom: none;
}

/* Results */
.results-section {
    margin-top: 30px;
}

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
    
    .viz-controls {
        flex-direction: column;
        align-items: stretch;
    }
    
    .viz-btn {
        justify-content: center;
    }
    
    .checkbox-group {
        flex-direction: column;
    }
    
    .step-formula {
        padding: 15px;
        overflow-x: auto;
    }
}

@media (max-width: 480px) {
    .container {
        padding: 10px;
    }
    
    .card {
        padding: 15px;
    }
    
    .input-group input, .input-group select {
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
    .navbar, .viz-controls, .btn-group, .footer {
        display: none !important;
    }
    
    .card {
        box-shadow: none;
        border: 1px solid #ddd;
    }
    
    .step-container {
        break-inside: avoid;
    }
    
    table {
        break-inside: avoid;
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
    overflow-y: auto; /* ADD THIS */
}

.modal-content {
    background-color: white;
    margin: 5% auto; /* CHANGED from 10% to 5% */
    padding: 0;
    width: 90%;
    max-width: 700px; /* CHANGED from 600px to 700px */
    max-height: 85vh; /* ADD THIS */
    border-radius: var(--border-radius);
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.2);
    animation: slideIn 0.3s ease;
    display: flex; /* ADD THIS */
    flex-direction: column; /* ADD THIS */
}

.modal-header {
    background: linear-gradient(90deg, var(--primary-dark) 0%, var(--primary) 100%);
    color: white;
    padding: 20px 25px;
    border-radius: var(--border-radius) var(--border-radius) 0 0;
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-shrink: 0; /* ADD THIS - prevents header from shrinking */
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
    overflow-y: auto; /* ADD THIS - makes body scrollable */
    flex: 1; /* ADD THIS - allows body to take remaining space */
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
  <div class="navbar">
    <div class="brand">
      <div class="brand-icon">
        <i class="fas fa-building"></i>
      </div>
      <div>Portal Method Structural Analysis</div>
    </div>
    <div class="nav-links">
      <button class="btn btn-secondary" onclick="location.href='index.php'">
        <i class="fas fa-home"></i> Home
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
    <div class="card">
      <div class="card-header">
        <i class="fas fa-building"></i>
        <h1>Enhanced Irregular Frame Solver</h1>
      </div>
      <p style="color: var(--gray); font-size: 16px; margin-bottom: 20px;">
        Advanced portal method analysis for irregular structures with variable spans and missing members.
        Enter the structure configuration below and click "Compute Analysis" to get results.
      </p>

      <div class="alert alert-info">
        <i class="fas fa-info-circle"></i>
        <div>
          <strong>Irregular Structure Analysis</strong>
          <p style="margin: 5px 0 0 0; font-size: 14px;">
            This solver handles irregular frames where some spans may be missing at certain storey levels. 
            Use the checkboxes to indicate which spans are active (present) at each storey.
            <strong>Enter number of storeys (1-5) and spans (1-6) to begin.</strong>
          </p>
        </div>
      </div>

      <?php if ($error): ?>
      <div class="alert alert-error">
        <i class="fas fa-exclamation-circle"></i>
        <div>
          <strong>Error:</strong> <?php echo htmlspecialchars($error); ?>
        </div>
      </div>
      <?php endif; ?>

      <form method="POST" id="irregularForm">
        <div class="grid grid-2">
          <div class="input-group">
            <label for="numStoreys">
              <i class="fas fa-layer-group"></i> Number of Storeys (1-5)
            </label>
            <input type="number" name="numStoreys" id="numStoreys" min="1" max="5" 
                   value="<?php echo isset($_POST['numStoreys']) ? $_POST['numStoreys'] : ''; ?>" 
                   required onchange="updateForm()" placeholder="e.g. 3">
            <small>Enter a number between 1 and 5</small>
          </div>
          <div class="input-group">
            <label for="numSpans">
              <i class="fas fa-grip-lines"></i> Number of Spans (1-6)
            </label>
            <input type="number" name="numSpans" id="numSpans" min="1" max="6" 
                   value="<?php echo isset($_POST['numSpans']) ? $_POST['numSpans'] : ''; ?>" 
                   required onchange="updateForm()" placeholder="e.g. 3">
            <small>Enter a number between 1 and 6</small>
          </div>
        </div>

        <div id="dynamicInputs">
          <!-- Dynamic inputs will be inserted here by JavaScript -->
        </div>

        <button type="submit" name="compute" class="btn btn-success btn-block">
          <i class="fas fa-calculator"></i> Compute Irregular Frame Analysis
        </button>
      </form>
    </div>

    <?php if ($results): ?>
    <div class="results-section">
      
      <!-- Step-by-Step Explanation -->
      <div class="card">
        <div class="card-header" style="justify-content: space-between; align-items: center;">
          <div style="display: flex; align-items: center; gap: 12px;">
            <i class="fas fa-list-ol"></i>
            <h2>Step-by-Step Solution</h2>
          </div>
          <div class="export-btn-group">
            <button class="export-btn text" onclick="exportStepsAsText()">
              <i class="fas fa-file-alt"></i> Export as Text
            </button>
            <button class="export-btn pdf" onclick="exportStepsAsPDF()">
              <i class="fas fa-file-pdf"></i> Export as PDF
            </button>
          </div>
        </div>
        <div class="viz-controls">
          <button class="viz-btn active" onclick="showStep('step1')">
            <i class="fas fa-1"></i> Storey Shears
          </button>
          <button class="viz-btn" onclick="showStep('step2')">
            <i class="fas fa-2"></i> Column Shears
          </button>
          <button class="viz-btn" onclick="showStep('step3')">
            <i class="fas fa-3"></i> Moments
          </button>
          <button class="viz-btn" onclick="showStep('step4')">
            <i class="fas fa-4"></i> Beam Shears
          </button>
          <button class="viz-btn" onclick="showStep('step5')">
            <i class="fas fa-5"></i> Axial Forces
          </button>
        </div>
        
        <div id="step1" class="step-container active">
          <div class="step-title">
            <i class="fas fa-calculator"></i>
            Step 1: Calculate Storey Shear Forces
          </div>
          <div class="step-formula">
            <p>$$V_i = \sum_{j=i}^{n} P_j$$</p>
            <p>Where \(V_i\) is the shear at storey \(i\), and \(P_j\) are the lateral loads.</p>
          </div>
          <ul class="step-details">
            <?php for ($i = $results['numStoreys']; $i >= 1; $i--): ?>
            <li>Storey <?php echo $i; ?>: \(V_{<?php echo $i; ?>} = <?php 
                $sum = 0;
                for ($j = $i; $j <= $results['numStoreys']; $j++) {
                    $sum += $results['loads'][$j];
                    echo number_format($results['loads'][$j], 2);
                    if ($j < $results['numStoreys']) echo ' + ';
                }
                ?> = <?php echo number_format($results['storeyShears'][$i], 2); ?> \text{ kN}\)</li>
            <?php endfor; ?>
          </ul>
        </div>
        
        <div id="step2" class="step-container">
          <div class="step-title">
            <i class="fas fa-columns"></i>
            Step 2: Distribute Column Shear Forces
          </div>
          <div class="step-formula">
            <p>$$V_{unit} = \frac{V_{storey}}{\sum units}$$</p>
            <p>Where \(\sum units = (\text{# exterior columns}) \times 1 + (\text{# interior columns}) \times 2\)</p>
          </div>
          <?php for ($i = 1; $i <= $results['numStoreys']; $i++): ?>
          <div style="margin-top: 15px; padding: 15px; background: white; border-radius: 8px; border: 1px solid var(--gray-light);">
            <strong>Storey <?php echo $i; ?>:</strong>
            <ul class="step-details">
              <li>Storey shear: \(V_{<?php echo $i; ?>} = <?php echo number_format($results['storeyShears'][$i], 2); ?> \text{ kN}\)</li>
              <li>Active columns: <?php 
                  $activeCols = [];
                  for ($col = 0; $col <= $results['numSpans']; $col++) {
                      if (isset($results['columnShears'][$i][$col])) {
                          $activeCols[] = $col;
                      }
                  }
                  echo implode(', ', $activeCols);
              ?></li>
              <li>Exterior columns (1V): <?php 
                  if (isset($results['exteriorCols'][$i])) {
                      echo implode(', ', $results['exteriorCols'][$i]);
                  }
              ?></li>
              <li>Interior columns (2V): <?php 
                  if (isset($results['interiorCols'][$i])) {
                      echo implode(', ', $results['interiorCols'][$i]);
                  }
              ?></li>
              <li>\(V_{unit} = \frac{<?php echo number_format($results['storeyShears'][$i], 2); ?>}{<?php 
                  $totalUnits = (isset($results['exteriorCols'][$i]) ? count($results['exteriorCols'][$i]) : 0) * 1 + 
                               (isset($results['interiorCols'][$i]) ? count($results['interiorCols'][$i]) : 0) * 2;
                  echo $totalUnits;
              ?>} = <?php echo number_format($results['V_unit'][$i], 3); ?> \text{ kN}\)</li>
            </ul>
          </div>
          <?php endfor; ?>
        </div>
        
        <div id="step3" class="step-container">
          <div class="step-title">
            <i class="fas fa-torii-gate"></i>
            Step 3: Calculate Column Moments
          </div>
          <div class="step-formula">
            <p>$$M_{col} = V_{col} \times \frac{h}{2}$$</p>
            <p>Assumes points of contraflexure at mid-height of columns.</p>
          </div>
          <ul class="step-details">
            <?php for ($i = 1; $i <= $results['numStoreys']; $i++): ?>
              <?php for ($col = 0; $col <= $results['numSpans']; $col++): ?>
                <?php if (isset($results['columnShears'][$i][$col])): ?>
                <li>Storey <?php echo $i; ?>, Column <?php echo $col; ?>: \(M = <?php echo number_format($results['columnShears'][$i][$col], 2); ?> \times \frac{<?php echo number_format($results['heights'][$i], 2); ?>}{2} = <?php echo number_format($results['columnMoments'][$i][$col], 2); ?> \text{ kN·m}\)</li>
                <?php endif; ?>
              <?php endfor; ?>
            <?php endfor; ?>
          </ul>
        </div>
        
        <div id="step4" class="step-container">
          <div class="step-title">
            <i class="fas fa-grip-lines"></i>
            Step 4: Calculate Beam Vertical Shears
          </div>
          <div class="step-formula">
            <p>$$V_{beam} = \frac{\sum M_{columns} - M_{beam,prev}}{L/2}$$</p>
            <p>Where moments are taken about beam-column joints.</p>
          </div>
          <ul class="step-details">
            <?php for ($i = $results['numStoreys']; $i >= 1; $i--): ?>
              <?php for ($span = 1; $span <= $results['numSpans']; $span++): ?>
                <?php if (isset($results['beamShears'][$i][$span])): ?>
                <li>Storey <?php echo $i; ?>, Span <?php echo $span; ?>: \(V = <?php echo number_format($results['beamShears'][$i][$span], 2); ?> \text{ kN}\)</li>
                <?php endif; ?>
              <?php endfor; ?>
            <?php endfor; ?>
          </ul>
        </div>
        
        <div id="step5" class="step-container">
          <div class="step-title">
            <i class="fas fa-arrows-alt-h"></i>
            Step 5: Calculate Beam Axial Forces (Horizontal Shears)
          </div>
          <div class="step-formula">
            <p>$$H_{right} = P_{ext} + H_{left} + V_{top} - V_{bottom}$$</p>
            <p>Horizontal equilibrium at beam-column joints.</p>
          </div>
          <ul class="step-details">
            <?php for ($i = $results['numStoreys']; $i >= 1; $i--): ?>
              <?php for ($span = 1; $span <= $results['numSpans']; $span++): ?>
                <?php if (isset($results['beamAxialForces'][$i][$span])): ?>
                <li>Storey <?php echo $i; ?>, Span <?php echo $span; ?>: \(H = <?php echo number_format($results['beamAxialForces'][$i][$span], 2); ?> \text{ kN}\)</li>
                <?php endif; ?>
              <?php endfor; ?>
            <?php endfor; ?>
          </ul>
        </div>
      </div>
      
      <!-- Visualization -->
      <div class="card">
        <div class="card-header">
          <i class="fas fa-project-diagram"></i>
          <h2>Structural Visualization</h2>
        </div>
        <p style="font-size: 14px; color: var(--gray); margin-bottom: 15px;">
          Interactive Diagram: Hinges indicate points of contraflexure (zero moment). Hover over badges for values.
        </p>
        
        <div class="viz-controls">
          <button class="viz-btn active" onclick="toggleLayer('shears')">
            <i class="fas fa-arrows-alt-v"></i> Show Shear (V)
          </button>
          <button class="viz-btn active" onclick="toggleLayer('moments')">
            <i class="fas fa-redo-alt"></i> Show Moments (M)
          </button>
          <button class="viz-btn active" onclick="toggleLayer('axials')">
            <i class="fas fa-arrows-alt-h"></i> Show Axial (P/H)
          </button>
          <button class="viz-btn" onclick="toggleLayer('loads')">
            <i class="fas fa-weight-hanging"></i> Show Loads
          </button>
          <button class="btn btn-secondary" onclick="downloadCanvas()">
            <i class="fas fa-download"></i> Download Diagram
          </button>
        </div>

        <div class="viz-container">
          <canvas id="structureCanvas"></canvas>
        </div>
        
        <div style="margin-top: 15px; font-size: 13px; color: var(--gray); text-align: center; line-height: 1.6;">
          <div><i class="fas fa-circle" style="color: white; background: #333; border-radius: 50%; padding: 3px;"></i> White circles = Hinges (points of contraflexure)</div>
          <div><span style="color: #007bff;">🟦 Blue</span> = Shear forces | <span style="color: #28a745;">🟩 Green</span> = Axial forces | <span style="color: #6f42c1;">🟪 Purple</span> = Column shears</div>
        </div>
      </div>

      <!-- Detailed Results -->
      <div class="card">
        <div class="card-header">
          <i class="fas fa-chart-bar"></i>
          <h2>Detailed Analysis Results</h2>
        </div>
        
        <div class="result-card">
          <h4><i class="fas fa-weight"></i> 1. Storey Shear Forces</h4>
          <div class="table-responsive">
            <table>
              <thead>
                <tr>
                  <th>Storey</th>
                  <th>Load (kN)</th>
                  <th>Height (m)</th>
                  <th>Cumulative Shear (kN)</th>
                </tr>
              </thead>
              <tbody>
                <?php for ($i = $results['numStoreys']; $i >= 1; $i--): ?>
                <tr>
                  <td>Storey <?php echo $i; ?></td>
                  <td><?php echo number_format($results['loads'][$i], 2); ?></td>
                  <td><?php echo number_format($results['heights'][$i], 2); ?></td>
                  <td><strong><?php echo number_format($results['storeyShears'][$i], 2); ?></strong></td>
                </tr>
                <?php endfor; ?>
              </tbody>
            </table>
          </div>
        </div>

        <div class="result-card">
          <h4><i class="fas fa-columns"></i> 2. Column Shear Forces (V & 2V Distribution)</h4>
          <div class="table-responsive">
            <table>
              <thead>
                <tr>
                  <th>Storey</th>
                  <?php for ($j = 0; $j <= $results['numSpans']; $j++): ?>
                  <th>Column <?php echo $j; ?></th>
                  <?php endfor; ?>
                </tr>
              </thead>
              <tbody>
                <?php for ($i = $results['numStoreys']; $i >= 1; $i--): ?>
                <tr>
                  <td>Storey <?php echo $i; ?></td>
                  <?php for ($j = 0; $j <= $results['numSpans']; $j++): ?>
                  <td>
                    <?php 
                    if (isset($results['columnShears'][$i][$j]) && $results['columnShears'][$i][$j] > 0) {
                      echo number_format($results['columnShears'][$i][$j], 2) . ' kN';
                      // Show classification
                      if (isset($results['exteriorCols'][$i]) && in_array($j, $results['exteriorCols'][$i])) {
                        echo '<br><small style="color: var(--gray);">(Exterior: 1V)</small>';
                      } elseif (isset($results['interiorCols'][$i]) && in_array($j, $results['interiorCols'][$i])) {
                        echo '<br><small style="color: var(--gray);">(Interior: 2V)</small>';
                      }
                    } else {
                      echo '<span style="color: #ccc;">—</span>';
                    }
                    ?>
                  </td>
                  <?php endfor; ?>
                </tr>
                <?php endfor; ?>
              </tbody>
            </table>
          </div>
        </div>

        <div class="result-card">
          <h4><i class="fas fa-redo-alt"></i> 3. Column Moments (kN·m)</h4>
          <div class="table-responsive">
            <table>
              <thead>
                <tr>
                  <th>Storey</th>
                  <th>Column</th>
                  <th>Moment (kN·m)</th>
                </tr>
              </thead>
              <tbody>
                <?php for ($i = $results['numStoreys']; $i >= 1; $i--): ?>
                  <?php for ($j = 0; $j <= $results['numSpans']; $j++): ?>
                    <?php if (isset($results['columnMoments'][$i][$j])): ?>
                    <tr>
                      <td>Storey <?php echo $i; ?></td>
                      <td>Column <?php echo $j; ?></td>
                      <td><?php echo number_format($results['columnMoments'][$i][$j], 2); ?></td>
                    </tr>
                    <?php endif; ?>
                  <?php endfor; ?>
                <?php endfor; ?>
              </tbody>
            </table>
          </div>
        </div>

        <div class="result-card">
          <h4><i class="fas fa-grip-lines"></i> 4. Beam Vertical Shear Forces (V) - kN</h4>
          <div class="table-responsive">
            <table>
              <thead>
                <tr>
                  <th>Storey</th>
                  <th>Span</th>
                  <th>Length (m)</th>
                  <th>Vertical Shear (V)</th>
                </tr>
              </thead>
              <tbody>
                <?php for ($i = $results['numStoreys']; $i >= 1; $i--): ?>
                  <?php for ($j = 1; $j <= $results['numSpans']; $j++): ?>
                    <?php if (isset($results['beamShears'][$i][$j])): ?>
                    <tr>
                      <td>Storey <?php echo $i; ?></td>
                      <td>Span <?php echo $j; ?></td>
                      <td><?php echo number_format($results['spanLengths'][$j], 2); ?></td>
                      <td><?php echo number_format($results['beamShears'][$i][$j], 2); ?></td>
                    </tr>
                    <?php else: ?>
                    <tr style="background: #f9f9f9; color: #999;">
                      <td>Storey <?php echo $i; ?></td>
                      <td>Span <?php echo $j; ?></td>
                      <td><?php echo number_format($results['spanLengths'][$j], 2); ?></td>
                      <td><em>Inactive</em></td>
                    </tr>
                    <?php endif; ?>
                  <?php endfor; ?>
                <?php endfor; ?>
              </tbody>
            </table>
          </div>
        </div>

        <div class="result-card">
          <h4><i class="fas fa-arrows-alt-h"></i> 5. Beam Axial Forces / Horizontal Shear (H) - kN</h4>
          <div class="table-responsive">
            <table>
              <thead>
                <tr>
                  <th>Storey</th>
                  <th>Span</th>
                  <th>Horizontal Shear (H)</th>
                </tr>
              </thead>
              <tbody>
                <?php for ($i = $results['numStoreys']; $i >= 1; $i--): ?>
                  <?php for ($j = 1; $j <= $results['numSpans']; $j++): ?>
                    <?php if (isset($results['beamAxialForces'][$i][$j])): ?>
                    <tr>
                      <td>Storey <?php echo $i; ?></td>
                      <td>Span <?php echo $j; ?></td>
                      <td><strong><?php echo number_format($results['beamAxialForces'][$i][$j], 2); ?> kN</strong></td>
                    </tr>
                    <?php else: ?>
                    <tr style="background: #f9f9f9; color: #999;">
                      <td>Storey <?php echo $i; ?></td>
                      <td>Span <?php echo $j; ?></td>
                      <td><em>Inactive</em></td>
                    </tr>
                    <?php endif; ?>
                  <?php endfor; ?>
                <?php endfor; ?>
              </tbody>
            </table>
          </div>
        </div>

        <div class="btn-group">
          <button onclick="window.print()" class="btn btn-primary">
            <i class="fas fa-print"></i> Print Results
          </button>
          <a href="irregular.php" class="btn btn-secondary">
            <i class="fas fa-sync-alt"></i> New Analysis
          </a>
          <a href="index.php" class="btn btn-secondary">
            <i class="fas fa-home"></i> Home
          </a>
        </div>
      </div>
    </div>
    <?php endif; ?>

    <div class="footer">
      <div>Developed by BSCE 4 – Portal Method Project (2025)</div>
      <div style="margin-top: 8px; font-size: 12px; color: var(--gray);">
        Enhanced Irregular Frame Analysis - Version 4.5 | Professional Formulas with LaTeX
      </div>
      <div style="margin-top: 8px; font-size: 11px; color: var(--gray);">
        <i class="fas fa-mobile-alt"></i> Responsive Web App | <i class="fas fa-tablet-alt"></i> Mobile Optimized
      </div>
    </div>
  </div>

  <!-- ABOUT MODAL -->
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
          <p>This web application implements the Portal Method for analyzing irregular building frames subjected to lateral loads. 
          It features step-by-step calculations, interactive visualizations, and comprehensive result reporting for educational 
          and professional use in structural engineering.</p>
          
          <div style="background: var(--light); padding: 15px; border-radius: 8px; margin-top: 15px;">
            <strong>Features:</strong>
            <ul style="margin: 10px 0 0 20px;">
              <li>Irregular frame analysis with missing members</li>
              <li>Interactive step-by-step solution</li>
              <li>Visual representation of forces and moments</li>
              <li>Export capabilities for reports</li>
              <li>Mobile-responsive design</li>
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
// Pass PHP values to JS
const phpValues = {
  loads: <?php echo isset($_POST['load_1']) ? json_encode($_POST) : 'null'; ?>,
  heights: <?php echo isset($_POST['height_1']) ? json_encode($_POST) : 'null'; ?>,
  spans: <?php echo isset($_POST['span_length_1']) ? json_encode($_POST) : 'null'; ?>,
  active: <?php echo isset($_POST['active_1_1']) ? json_encode($_POST) : 'null'; ?>
};

// Analysis Results passed from PHP for visualization
const analysisData = <?php echo $jsonResults; ?>;

// Visualization Settings
const vizSettings = {
  shears: true,
  moments: true,
  axials: true,
  loads: false
};

function updateForm() {
  const numStoreys = parseInt(document.getElementById('numStoreys').value) || 0;
  const numSpans = parseInt(document.getElementById('numSpans').value) || 0;
  
  let dynamicHTML = '';
  
  // If both values are provided, show the detailed form
  if (numStoreys > 0 && numSpans > 0) {
    // Storey inputs
    dynamicHTML += `
      <div class="card" style="background: var(--light);">
        <div class="card-header">
          <i class="fas fa-weight-hanging"></i>
          <h3>Storey Loads and Heights</h3>
        </div>
        <div class="grid grid-3" id="storeyInputs"></div>
      </div>
    `;
    
    // Span inputs
    dynamicHTML += `
      <div class="card" style="background: var(--light);">
        <div class="card-header">
          <i class="fas fa-ruler"></i>
          <h3>Span Lengths</h3>
        </div>
        <div class="grid grid-2" id="spanInputs"></div>
      </div>
    `;
    
    // Active spans table
    dynamicHTML += `
      <div class="card" style="background: #fff8e6; border-left: 4px solid var(--warning);">
        <div class="card-header">
          <i class="fas fa-check-circle"></i>
          <h3>Active Spans Configuration</h3>
        </div>
        <p style="color: var(--gray); font-size: 14px; margin-bottom: 15px;">
          Check the boxes to indicate which spans exist at each storey level. Unchecked spans are inactive.
        </p>
        <div id="activeSpansTable"></div>
      </div>
    `;
    
    // Update storey inputs
    let storeyHTML = '';
    for (let i = 1; i <= numStoreys; i++) {
      let loadVal = (phpValues.loads && phpValues.loads[`load_${i}`]) ? phpValues.loads[`load_${i}`] : '';
      let heightVal = (phpValues.heights && phpValues.heights[`height_${i}`]) ? phpValues.heights[`height_${i}`] : '';

      storeyHTML += `
        <div class="input-group">
          <label>Storey ${i} Load (kN)</label>
          <input type="number" step="0.01" name="load_${i}" value="${loadVal}" placeholder="e.g. 20" required>
        </div>
        <div class="input-group">
          <label>Storey ${i} Height (m)</label>
          <input type="number" step="0.01" name="height_${i}" value="${heightVal}" placeholder="e.g. 4.0" required>
        </div>
        <div></div>
      `;
    }
    
    // Update span inputs
    let spanHTML = '';
    for (let j = 1; j <= numSpans; j++) {
      let spanVal = (phpValues.spans && phpValues.spans[`span_length_${j}`]) ? phpValues.spans[`span_length_${j}`] : '';
      
      spanHTML += `
        <div class="input-group">
          <label>Span ${j} Length (m)</label>
          <input type="number" step="0.01" name="span_length_${j}" value="${spanVal}" placeholder="e.g. 5.0" required>
        </div>
      `;
    }
    
    // Update active spans table
    let tableHTML = '<div class="table-responsive"><table><thead><tr><th>Storey</th>';
    for (let j = 1; j <= numSpans; j++) {
      tableHTML += `<th>Span ${j}</th>`;
    }
    tableHTML += '</tr></thead><tbody>';
    
    for (let i = numStoreys; i >= 1; i--) {
      tableHTML += `<tr><td><strong>Storey ${i}</strong></td>`;
      for (let j = 1; j <= numSpans; j++) {
        let checked = '';
        if (phpValues.active) {
           if (phpValues.active[`active_${i}_${j}`]) checked = 'checked';
        } else {
           // Default: check all spans
           checked = 'checked';
        }
        tableHTML += `<td><label class="checkbox-label"><input type="checkbox" name="active_${i}_${j}" ${checked}></label></td>`;
      }
      tableHTML += '</tr>';
    }
    
    tableHTML += '</tbody></table></div>';
    
    // Update the DOM
    document.getElementById('dynamicInputs').innerHTML = dynamicHTML;
    setTimeout(() => {
      if (document.getElementById('storeyInputs')) {
        document.getElementById('storeyInputs').innerHTML = storeyHTML;
      }
      if (document.getElementById('spanInputs')) {
        document.getElementById('spanInputs').innerHTML = spanHTML;
      }
      if (document.getElementById('activeSpansTable')) {
        document.getElementById('activeSpansTable').innerHTML = tableHTML;
      }
    }, 10);
  } else {
    // Show placeholder message
    document.getElementById('dynamicInputs').innerHTML = `
      <div class="card" style="text-align: center; padding: 40px 20px; background: var(--light);">
        <i class="fas fa-arrow-up" style="font-size: 3rem; color: var(--primary); margin-bottom: 20px;"></i>
        <h3 style="color: var(--primary);">Enter Structure Configuration</h3>
        <p style="color: var(--gray); max-width: 500px; margin: 0 auto;">
          Please enter the number of storeys (1-5) and spans (1-6) above to configure your structure.
          The input form will appear here once valid numbers are entered.
        </p>
      </div>
    `;
  }
}

// ================= VISUALIZATION LOGIC =================

function initVisualization() {
  if (!analysisData) return;
  
  const canvas = document.getElementById('structureCanvas');
  const ctx = canvas.getContext('2d');
  
  // Dynamically calculate canvas dimensions based on structure size
  const padding = 80;
  const storeyHeightPixels = 100;
  const spanWidthPixels = 120;
  
  // Calculate required width and height
  const requiredWidth = (analysisData.numSpans * spanWidthPixels) + (padding * 2);
  const requiredHeight = (analysisData.numStoreys * storeyHeightPixels) + (padding * 2);
  
  // Set canvas dimensions with some extra space
  canvas.width = Math.max(800, requiredWidth);
  canvas.height = Math.max(500, requiredHeight);
  
  // Clear
  ctx.clearRect(0, 0, canvas.width, canvas.height);
  
  // Calculate offsets for centering
  const centerX = canvas.width / 2;
  const structureWidth = analysisData.numSpans * spanWidthPixels;
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
  for (let i = 1; i <= analysisData.numStoreys; i++) {
    for (let col = 0; col <= analysisData.numSpans; col++) {
      // Determine if column exists (if beam to left or right is active at this level)
      let leftActive = (col > 0 && analysisData.activeSpans[i][col] == 1);
      let rightActive = (col < analysisData.numSpans && analysisData.activeSpans[i][col+1] == 1);
      
      if (leftActive || rightActive) {
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
  }
  
  // Draw Beams with hinge indicators
  for (let i = 1; i <= analysisData.numStoreys; i++) {
    for (let span = 1; span <= analysisData.numSpans; span++) {
      if (analysisData.activeSpans[i][span] == 1) {
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
  }
  
  // === DRAW LOADS (Layer) ===
  if (vizSettings.loads) {
    for (let i = 1; i <= analysisData.numStoreys; i++) {
      const load = analysisData.loads[i];
      // Find leftmost column at this storey
      let firstCol = -1;
      for (let c = 0; c <= analysisData.numSpans; c++) {
         if ((c > 0 && analysisData.activeSpans[i][c] == 1) || (c < analysisData.numSpans && analysisData.activeSpans[i][c+1] == 1)) {
           firstCol = c;
           break;
         }
      }
      
      if (firstCol !== -1) {
        const x = getX(firstCol);
        const y = getY(i);
        drawArrow(ctx, x - 50, y, x - 5, y, '#dc3545');
        drawLabel(ctx, `${load} kN`, x - 55, y - 10, '#dc3545', 'right');
      }
    }
  }
  
  // === DRAW RESULTS ===
  ctx.font = 'bold 12px sans-serif';
  
  // 1. BEAM RESULTS
  for (let i = 1; i <= analysisData.numStoreys; i++) {
    for (let span = 1; span <= analysisData.numSpans; span++) {
      if (analysisData.activeSpans[i][span] == 1) {
        const xMid = (getX(span-1) + getX(span)) / 2;
        const y = getY(i);
        
        // Vertical Shear (V) - Above Beam
        if (vizSettings.shears && analysisData.beamShears[i] && analysisData.beamShears[i][span]) {
          const val = analysisData.beamShears[i][span].toFixed(2);
          drawResultBadge(ctx, `V=${val}`, xMid, y - 25, '#007bff', '#ffffff');
        }
        
        // Horizontal Axial (H) - Below Beam
        if (vizSettings.axials && analysisData.beamAxialForces[i] && analysisData.beamAxialForces[i][span]) {
          const val = analysisData.beamAxialForces[i][span].toFixed(2);
          drawResultBadge(ctx, `H=${val}`, xMid, y + 25, '#28a745', '#ffffff');
        }
      }
    }
  }
  
  // 2. COLUMN RESULTS
  for (let i = 1; i <= analysisData.numStoreys; i++) {
    for (let col = 0; col <= analysisData.numSpans; col++) {
      let leftActive = (col > 0 && analysisData.activeSpans[i][col] == 1);
      let rightActive = (col < analysisData.numSpans && analysisData.activeSpans[i][col+1] == 1);
      
      if (leftActive || rightActive) {
        const x = getX(col);
        const yMid = (getY(i) + getY(i-1)) / 2;
        
        // Column Shear (V) - Left of Column
        if (vizSettings.shears && analysisData.columnShears[i] && analysisData.columnShears[i][col]) {
           const val = analysisData.columnShears[i][col].toFixed(2);
           drawResultBadge(ctx, `V=${val}`, x - 30, yMid, '#6f42c1', '#ffffff');
        }
        
        // Column Axial (P) - Right of Column
        if (vizSettings.axials && analysisData.axialForces[i] && analysisData.axialForces[i][col]) {
           const raw = analysisData.axialForces[i][col];
           const val = Math.abs(raw).toFixed(2);
           const type = raw > 0 ? '(T)' : '(C)';
           drawResultBadge(ctx, `P=${val}${type}`, x + 30, yMid, '#fd7e14', '#ffffff');
        }
        
        // Moments (M) - Ends of Columns
        if (vizSettings.moments && analysisData.columnMoments[i] && analysisData.columnMoments[i][col]) {
           const val = analysisData.columnMoments[i][col].toFixed(1);
           // Draw moment values at column ends
           drawMomentIndicator(ctx, x, getY(i), val, '#666');
           drawMomentIndicator(ctx, x, getY(i-1), val, '#666');
        }
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

function showStep(stepId) {
  // Hide all steps
  const steps = document.querySelectorAll('.step-container');
  steps.forEach(step => step.classList.remove('active'));
  
  // Show selected step
  document.getElementById(stepId).classList.add('active');
  
  // Update button states
  const buttons = document.querySelectorAll('.viz-controls .viz-btn');
  buttons.forEach((btn, index) => {
    if (btn.textContent.includes(stepId.replace('step', 'Step'))) {
      btn.classList.add('active');
    } else {
      btn.classList.remove('active');
    }
  });
  
  // Render MathJax for the step
  if (typeof MathJax !== 'undefined') {
    MathJax.typesetPromise([`#${stepId}`]);
  }
}

function toggleLayer(layer) {
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

function downloadCanvas() {
  const canvas = document.getElementById('structureCanvas');
  const link = document.createElement('a');
  link.download = 'frame-analysis-' + new Date().toISOString().slice(0,10) + '.png';
  link.href = canvas.toDataURL('image/png');
  document.body.appendChild(link);
  link.click();
  document.body.removeChild(link);
}

// ================= MODAL FUNCTIONS =================

function openAboutModal() {
    document.getElementById('aboutModal').style.display = 'block';
    document.body.style.overflow = 'hidden'; // Prevent body scrolling
    
    // Reset modal scroll to top
    const modalBody = document.querySelector('.modal-body');
    if (modalBody) {
        modalBody.scrollTop = 0;
    }
}

function closeAboutModal() {
    document.getElementById('aboutModal').style.display = 'none';
    document.body.style.overflow = 'auto'; // Restore body scrolling
}

// Close modal when clicking outside
window.onclick = function(event) {
    const modal = document.getElementById('aboutModal');
    if (event.target === modal) {
        closeAboutModal();
    }
}

// Close modal with Escape key
document.addEventListener('keydown', function(event) {
    if (event.key === 'Escape') {
        closeAboutModal();
    }
});

// ================= EXPORT FUNCTIONS =================
function exportStepsAsText() {
    let exportContent = "PORTAL METHOD ANALYSIS - STEP-BY-STEP SOLUTION\n";
    exportContent += "==============================================\n\n";
    
    // Step 1
    exportContent += "STEP 1: STOREY SHEAR FORCES\n";
    exportContent += "Formula: V_i = Σ(P_j) from j=i to n\n";
    for (let i = analysisData.numStoreys; i >= 1; i--) {
        let sum = 0;
        let calc = '';
        for (let j = i; j <= analysisData.numStoreys; j++) {
            sum += analysisData.loads[j];
            calc += analysisData.loads[j].toFixed(2);
            if (j < analysisData.numStoreys) calc += ' + ';
        }
        exportContent += `Storey ${i}: V = ${calc} = ${analysisData.storeyShears[i].toFixed(2)} kN\n`;
    }
    exportContent += "\n";
    
    // Step 2
    exportContent += "STEP 2: COLUMN SHEAR DISTRIBUTION\n";
    exportContent += "Formula: V_unit = V_storey / Σ(units)\n";
    for (let i = 1; i <= analysisData.numStoreys; i++) {
        exportContent += `\nStorey ${i}:\n`;
        exportContent += `  Storey Shear: ${analysisData.storeyShears[i].toFixed(2)} kN\n`;
        exportContent += `  V_unit: ${analysisData.V_unit[i].toFixed(3)} kN\n`;
    }
    exportContent += "\n";
    
    // Step 3
    exportContent += "STEP 3: COLUMN MOMENTS\n";
    exportContent += "Formula: M_col = V_col × (h/2)\n";
    for (let i = 1; i <= analysisData.numStoreys; i++) {
        for (let col = 0; col <= analysisData.numSpans; col++) {
            if (analysisData.columnShears[i] && analysisData.columnShears[i][col]) {
                exportContent += `Storey ${i}, Column ${col}: M = ${analysisData.columnShears[i][col].toFixed(2)} × ${(analysisData.heights[i]/2).toFixed(2)} = ${analysisData.columnMoments[i][col].toFixed(2)} kN·m\n`;
            }
        }
    }
    
    // Create and download file
    const blob = new Blob([exportContent], { type: 'text/plain' });
    const url = URL.createObjectURL(blob);
    const a = document.createElement('a');
    a.href = url;
    a.download = `portal-method-steps-${new Date().toISOString().slice(0,10)}.txt`;
    document.body.appendChild(a);
    a.click();
    document.body.removeChild(a);
    URL.revokeObjectURL(url);
    
    // Show success message
    alert('Step-by-step solution exported as text file!');
}

function exportStepsAsPDF() {
    // This is a simplified version - in production you'd use a library like jsPDF
    alert('PDF export requires additional libraries. For now, please use the Print function (Ctrl+P) or Text Export.');
    
    // For a complete implementation, you would need to include jsPDF:
    // const { jsPDF } = window.jspdf;
    // const doc = new jsPDF();
    // doc.text(exportContent, 10, 10);
    // doc.save('portal-method-analysis.pdf');
}

// Initialize
document.addEventListener('DOMContentLoaded', () => {
  updateForm();
  if (analysisData) {
     initVisualization();
     // Initialize MathJax
     if (typeof MathJax !== 'undefined') {
       MathJax.typesetPromise();
     }
  }
});

// Re-draw on resize
window.addEventListener('resize', () => {
    if (analysisData) initVisualization();
});

// Print styling
window.addEventListener('beforeprint', function() {
  document.querySelector('.navbar').style.display = 'none';
  document.querySelector('form').style.display = 'none';
  document.querySelector('.viz-controls').style.display = 'none';
});

window.addEventListener('afterprint', function() {
  document.querySelector('.navbar').style.display = 'flex';
  document.querySelector('form').style.display = 'block';
  document.querySelector('.viz-controls').style.display = 'flex';
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