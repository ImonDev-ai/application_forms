<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>License to Operate - Bootstrap Version</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        @media print {
            @page {
                margin: 0.2in;
                size: 11in 8.5in;
            }
        }
        
        body {
            font-family: "Times New Roman", serif;
            font-size: 8px;
            line-height: 1.1;
            background-color: #f8f9fa;
            padding: 20px;
        }
        
        .document-container {
            background: white;
            max-width: 1000px;
            margin: 0 auto;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        
        .ornate-border {
            border: 3px double #8B4513;
            padding: 15px;
            background: repeating-linear-gradient(
                0deg,
                transparent,
                transparent 15px,
                rgba(139, 69, 19, 0.05) 15px,
                rgba(139, 69, 19, 0.05) 30px
            );
            min-height: 800px;
            position: relative;
        }
        
        .border-frame {
            border: 2px solid #000;
            padding: 15px;
            height: 100%;
            position: relative;
        }
        
        .date-issued {
            position: absolute;
            top: 15px;
            right: 15px;
            font-size: 9px;
            text-align: center;
            z-index: 10;
        }
        
        .logo-placeholder {
            border: 1px solid #000;
            width: 70px;
            height: 70px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 10px;
            text-align: center;
            font-weight: bold;
        }
        
        .department-info {
            text-align: center;
            font-size: 7px;
            line-height: 1.0;
        }
        
        .department-name {
            font-size: 8px;
            font-weight: bold;
            margin: 2px 0;
        }
        
        .service-name {
            font-size: 9px;
            font-weight: bold;
            margin: 2px 0;
        }
        
        .address {
            font-size: 6px;
            margin: 2px 0;
        }
        
        .checkboxes {
            font-size: 6px;
            text-align: left;
        }
        
        .checkbox-item {
            margin: 1px 0;
            white-space: nowrap;
        }
        
        .director-info {
            text-align: right;
            font-size: 10px;
            margin: 10px 0;
        }
        
        .license-title {
            text-align: center;
            font-size: 16px;
            font-weight: bold;
            margin: 15px 0 5px 0;
            letter-spacing: 2px;
        }
        
        .license-number {
            text-align: center;
            font-size: 13px;
            font-weight: bold;
            margin-bottom: 15px;
        }
        
        .certify-text {
            text-align: center;
            margin: 10px 0;
            font-size: 11px;
            font-style: italic;
        }
        
        .company-name {
            text-align: center;
            font-size: 18px;
            font-weight: bold;
            color: #dc3545;
            margin: 10px 0;
            letter-spacing: 1px;
        }
        
        .company-address {
            text-align: center;
            font-size: 12px;
            margin: 8px 0;
        }
        
        .tin-number {
            text-align: center;
            font-size: 12px;
            font-weight: bold;
            margin: 8px 0;
        }
        
        .license-text {
            margin: 10px 0;
            font-size: 10px;
            line-height: 1.2;
            text-align: justify;
        }
        
        .validity-text {
            margin: 10px 0;
            font-size: 10px;
            line-height: 1.2;
            text-align: justify;
        }
        
        .issued-date {
            margin: 15px 0;
            font-size: 11px;
        }
        
        .signature-section {
            margin-top: 20px;
            text-align: center;
        }
        
        .signature-line {
            border-bottom: 1px solid black;
            width: 280px;
            margin: 0 auto 5px auto;
            height: 25px;
        }
        
        .signature-title {
            font-size: 10px;
            font-style: italic;
        }
        
        .right-panel {
            font-size: 8px;
            padding-left: 10px;
        }
        
        .right-panel h5 {
            font-size: 9px;
            font-weight: bold;
            margin: 8px 0 4px 0;
            color: #000;
        }
        
        .right-panel ol {
            margin: 4px 0;
            padding-left: 15px;
        }
        
        .right-panel li {
            margin: 2px 0;
            line-height: 1.1;
            text-align: justify;
        }
        
        .signature-table {
            margin-top: 15px;
        }
        
        .signature-table td {
            border-bottom: 1px solid black;
            text-align: center;
            padding: 10px 5px;
            font-size: 8px;
        }
        
        .signature-table .label {
            font-size: 7px;
            padding-top: 3px;
        }
        
        .notary-section {
            margin-top: 10px;
            border: 1px solid black;
            padding: 8px;
            height: 60px;
        }
        
        .notary-title {
            text-align: center;
            font-weight: bold;
            margin-bottom: 5px;
            font-size: 8px;
        }
        
        .notary-fields {
            font-size: 7px;
            line-height: 1.3;
        }
        
        .form-number {
            position: absolute;
            bottom: 15px;
            left: 15px;
            font-size: 7px;
        }
        
        /* Responsive adjustments */
        @media (max-width: 768px) {
            .document-container {
                margin: 10px;
            }
            
            .ornate-border {
                padding: 10px;
            }
            
            .border-frame {
                padding: 10px;
            }
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="document-container">
            <div class="ornate-border">
                <div class="border-frame">
                    <!-- Date Issued -->
                    <div class="date-issued">
                        <strong>03 October 2024</strong><br>
                        Date
                    </div>
                    
                    <!-- Header Section -->
                    <div class="row mb-3">
                        <!-- Logo -->
                        <div class="col-2">
                            <div class="logo-placeholder">
                                LOGO
                            </div>
                        </div>
                        
                        <!-- Department Info -->
                        <div class="col-6">
                            <div class="department-info">
                                <div style="font-size: 9px;">Republic of the Philippines</div>
                                <div class="department-name">DEPARTMENT OF AGRICULTURE</div>
                                <div class="service-name">NATIONAL MEAT INSPECTION SERVICE</div>
                                <div class="address">
                                    No. 4 Visayas Avenue, Brgy. Vasra, Quezon City<br>
                                    Tel. Nos. (02) 8924-7980, (02) 8901-4473 Fax No. (02) 8924-7772<br>
                                    Website: www.nmis.gov.ph<br>
                                    e-mail: nmis@nmis.gov.ph
                                </div>
                            </div>
                        </div>
                        
                        <!-- Checkboxes -->
                        <div class="col-4">
                            <div class="checkboxes">
                                <div class="checkbox-item">☑ Good Operating Practices (GOP/GMP) DA AO No. 21 (2004)</div>
                                <div class="checkbox-item">☑ Hazard Analysis Critical Control Point (HACCP) DA AO No. 9 (2003)</div>
                                <div class="checkbox-item">☑ Meat Establishment Classification, E.O No. 137 (1993)</div>
                                <div class="checkbox-item">☑ Meat Establishment Accreditation, DA DC No. 1 (2014)</div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Director Info -->
                    <div class="row">
                        <div class="col-12">
                            <div class="director-info">
                                <strong>DR. MIGNON A. UMALI</strong><br>
                                Printed Name<br>
                                Chief, Accreditation and Registration Division (ARD)
                            </div>
                        </div>
                    </div>
                    
                    <!-- License Title -->
                    <div class="license-title">LICENSE TO OPERATE</div>
                    <div class="license-number">NMIS-CSW-0681-AAA</div>
                    
                    <!-- Main Content -->
                    <div class="row">
                        <!-- Left Panel -->
                        <div class="col-6">
                            <div class="certify-text">This is to certify that</div>
                            
                            <div class="company-name">BOUNTY PLUS INC.</div>
                            
                            <div class="company-address">
                                Brgy., Sto Cristo, Concepcion, Tarlac
                            </div>
                            
                            <div class="tin-number">TIN : 010-546-718-000</div>
                            
                            <div class="license-text">
                                Is hereby licensed to store <strong>Meat and Meat by-products</strong>, pursuant to Administrative Circular No. 1, series of 2021, amending Administrative Order (A.O) No. 23, series of 2013.
                            </div>
                            
                            <div class="validity-text">
                                This License to Operate shall be valid until <u><strong>April 04, 2026</strong></u> unless sooner revoked, cancelled or suspended for violation of the aforesaid A.C and other pertinent laws. This is non-transferable and shall not be used in any place other than the one stated above.
                            </div>
                            
                            <div class="issued-date">
                                Issued this <u><strong>4th</strong></u> day of <u><strong>October, 2024</strong></u> in Quezon City
                            </div>
                            
                            <div class="signature-section">
                                <div class="signature-line"></div>
                                <div class="signature-title">DR. ROBERTO S. UMALI<br>OIC, RTOC of the Executive Director</div>
                            </div>
                        </div>
                        
                        <!-- Right Panel -->
                        <div class="col-6">
                            <div class="right-panel">
                                <h5>AFFIDAVIT OF UNDERTAKING</h5>
                                
                                <h5>A. LICENSE TO OPERATE</h5>
                                <ol>
                                    <li>The LTO shall be signed by the owner and posted in a conspicuous place where establishment is located. A photocopy of this duly notarized affidavit of undertaking shall be submitted to the respective Regional Technical Operation Center for legal record-keeping and documentation purposes.</li>
                                    <li>The LTO shall be renewed within sixty (60) days before its expiration, upon compliance with relevant laws, rules and regulations and the payment fees.</li>
                                </ol>
                                
                                <h5>B. OPERATION</h5>
                                <ol>
                                    <li>The operator shall comply with the regulations relative to adoption of GOP/SOP/HACCP in the operation of the meat establishment (DA AO 21, s 2004 and DA AO no. 9, s 2003) and other pertinent laws and legal operation.</li>
                                    <li>The Operator shall have the obligatory responsibility to maintain meat establishment in good operating condition at all times and to comply with the meat hygiene and inspection regulations.</li>
                                    <li>The operator shall permit any duly person to withdraw and transfer any carcass or stored carcass, or any of its parts to other destinations without the corresponding Meat Inspection Certificate (MIC) for locally produced meat and Certificate of Meat Inspection (COMI) for imported meat issued by NMIS Meat Inspection Officer.</li>
                                    <li>The operator shall ensure that only valid registered Meat Transport Vehicle (MTV) is allowed to transport/distribute live and meat by-products nationwide and compliant to GOP/SOP/HACCP program of the meat establishment.</li>
                                </ol>
                                
                                <h5>C. RECORD KEEPING</h5>
                                <ol>
                                    <li>The Operator shall keep and maintain records, reports and information, and shall fully and correctly disclose all transactions in the operation of the establishment relating to meat safety and quality assurance. Such records and information shall be made available readily upon the request of the NMIS Technical Officers for regulatory monitoring.</li>
                                </ol>
                                
                                <h5>D. COORDINATION</h5>
                                <ol>
                                    <li>The Operator shall notify officially the concerned NMIS Regional Technical Operation Centers (RTOCs) regarding any plan or changes of facility or operations, business name for technical assistance and approval.</li>
                                    <li>The Operator shall maintain compliance to RA 9296, RA 10536, RA 10611 and other pertinent meat inspection laws, rules, and regulations of the Department of Agriculture and all other applicable laws.</li>
                                </ol>
                                
                                <h5>E. OTHERS</h5>
                                <ol>
                                    <li>The LTO shall be automatically cancelled should there be a violation with other concerned regulatory agencies.</li>
                                </ol>
                                
                                <h5 class="text-center">GROUNDS FOR SUSPENSION/REVOCATION</h5>
                                <ol>
                                    <li>Non-renewal of License to Operate (LTO) will result recall of NMIS Meat Inspection Officer and deactivatedancemark related to inspection and issuance of Certificate and Transport of meat and meat by-products beyond the city or municipality shall not be allowed.</li>
                                    <li>Failure by the Operator to comply with the above stated conditions and requirements shall result to suspension or revocation of the License to Operate (LTO) after due process.</li>
                                </ol>
                                
                                <table class="table table-bordered signature-table">
                                    <tr>
                                        <td>Affiant</td>
                                        <td>Date</td>
                                        <td>Place</td>
                                    </tr>
                                    <tr>
                                        <td class="label">Signature over printed Name</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </table>
                                
                                <div class="notary-section">
                                    <div class="notary-title">NOTARY PUBLIC</div>
                                    <div class="notary-fields">
                                        DATE: ________________________________<br>
                                        APPT: ________________________________<br>
                                        DOCUMENT NO: _________________________<br>
                                        BOOK NO.: _____________________________<br>
                                        SERIES OF: ____________________________
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Form Number -->
                    <div class="form-number">
                        (L.B No. 37500000 (Phg 250-06))<br>
                        Items: August 17, 2024
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
