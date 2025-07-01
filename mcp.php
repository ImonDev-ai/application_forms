<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NMIS Application Form for Meat Cutting Plant</title>
    <style>
        @media print {

            body,
            .form-container,
            .header,
            .logo,
            .form-info,
            .instructions,
            .section-title,
            .meat-type-group,
            .production-table th,
            .storage-table th,
            .delivery-note,
            .certification,
            .nmis-section,
            .page-break,
            .signature-line,
            .labeling-section,
            .labeling-options,
            .payment-section,
            .payment-group,
            .delivery-options,
            .delivery-option {
                -webkit-print-color-adjust: exact !important;
                print-color-adjust: exact !important;
            }

            button {
                display: none !important;
            }
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            font-size: 11px;
            line-height: 1.2;
            background-color: white;
            padding: 20px;
        }

        .form-container {
            max-width: 800px;
            margin: 0 auto;
            background: white;
        }

        .header {
            display: flex;
            align-items: flex-start;
            margin-bottom: 20px;
            position: relative;
        }

        .logo {
            width: 120px;
            height: 120px;
            background-color: #228B22;
            border-radius: 50%;
            border: 1px solid blue;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
            /* margin-right: 2px; */
            flex-shrink: 0;
            margin-top: 70px;

        }

        .logo .a2 {
            font-size: 24px;
            line-height: 1;
        }

        .logo .nmcp {
            font-size: 10px;
            margin-top: 2px;
        }

        .title-section {
            flex: 1;
            text-align: center;
            padding-top: 12px;
        }

        .title {
            font-size: 20px;
            font-weight: bold;
            margin-top: 100px;
            margin-bottom: 5px;
        }

        .subtitle {
            font-size: 14px;
            font-weight: bold;
        }

        .form-info {
            position: absolute;
            top: 0;
            right: 0;
            border: 1px solid #666;
            padding: 10px;
            font-size: 12px;
            background: white;
        }

        .instructions {
            margin: 20px 0;
            padding: 10px 0;
            border-top: 2px solid black;
            border-bottom: 2px solid black;
        }

        .instructions h3 {
            font-size: 12px;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .instructions ol {
            margin-left: 20px;
        }

        .instructions li {
            margin-bottom: 3px;
            font-size: 12px;
            font-weight: bold;
        }

        .form-row {
            display: flex;
            margin-bottom: 15px;
            align-items: flex-start;
        }

        .form-group {
            flex: 1;
            margin-right: 20px;
        }

        .form-group:last-child {
            margin-right: 0;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            font-size: 11px;
        }

        .checkbox-group {
            display: flex;
            flex-direction: column;
            gap: 3px;
        }

        .checkbox-group label {
            font-weight: normal;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .checkbox-group input[type="checkbox"] {
            width: 12px;
            height: 12px;
        }

        .text-input {
            border: none;
            border-bottom: 1px solid black;
            padding: 2px 0;
            font-size: 11px;
            width: 100%;
            background: transparent;
        }

        .full-width {
            width: 100%;
        }

        .section-title {
            font-weight: bold;
            margin: 20px 0 10px 0;
            font-size: 11px;
        }

        .meat-types {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 10px;
            margin: 10px 0;
        }

        .meat-type-group {
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .meat-type-group input[type="checkbox"] {
            width: 12px;
            height: 12px;
        }

        .production-table {
            width: 100%;
            border-collapse: collapse;
            margin: 10px 0;
        }

        .production-table th,
        .production-table td {
            border: 1px solid black;
            padding: 5px;
            text-align: center;
            font-size: 10px;
        }

        .production-table th {
            background-color: #f0f0f0;
            font-weight: bold;
        }

        .production-table input {
            border: none;
            width: 100%;
            text-align: center;
            font-size: 10px;
        }

        .storage-table {
            width: 100%;
            border-collapse: collapse;
            margin: 10px 0;
        }

        .storage-table th,
        .storage-table td {
            border: 1px solid black;
            padding: 5px;
            text-align: center;
            font-size: 10px;
        }

        .storage-table th {
            background-color: #f0f0f0;
            font-weight: bold;
        }

        .storage-table input {
            border: none;
            width: 100%;
            text-align: center;
            font-size: 10px;
        }

        .labeling-section {
            margin: 15px 0;
        }

        .labeling-question {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 5px;
        }

        .labeling-question label {
            flex: 1;
            font-weight: normal;
        }

        .labeling-options {
            display: flex;
            gap: 15px;
        }

        .payment-section {
            display: flex;
            gap: 40px;
            margin: 15px 0;
        }

        .payment-group {
            flex: 1;
        }

        .payment-group h4 {
            font-weight: bold;
            margin-bottom: 5px;
        }

        .delivery-options {
            display: flex;
            gap: 30px;
            margin: 10px 0;
        }

        .delivery-option {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 5px;
        }

        .delivery-note {
            font-size: 9px;
            font-style: italic;
            text-align: center;
            margin-top: 5px;
        }

        .certification {
            margin: 20px 0;
            font-size: 10px;
        }

        .signature-section {
            display: flex;
            gap: 40px;
            margin: 20px 0;
        }

        .signature-group {
            flex: 1;
        }

        .signature-line {
            border-bottom: 1px solid black;
            height: 30px;
            margin-bottom: 5px;
        }

        .nmis-section {
            margin-top: 30px;
            text-align: center;
            font-style: italic;
        }

        .page-break {
            page-break-before: always;
        }

        @media print {
            body {
                padding: 0;
            }

            .form-container {
                max-width: none;
            }
        }

        .underline-input {
            border-bottom: 1px solid #222;
            height: 18px;
            flex: 1;
            margin-bottom: 2px;
        }

        .align-label-underline {
            display: flex;
            align-items: center;
            margin-bottom: 8px;
        }

        .label-left {
            min-width: 260px;
            font-weight: normal;
            font-size: 11px;
        }

        .input-underline {
            flex: 1;
            border-bottom: 1px solid #222;
            height: 1.2em;
            margin-left: 8px;
            display: block;
        }
    </style>
</head>

<body>
    <div class="form-container">
        <!-- Header -->
        <div class="header">
            <div class="logo">
                <div class="a2">A2</div>
                <div class="nmcp">NMCP</div>
            </div>
            <div class="title-section">
                <div class="title">APPLICATION FORM FOR MEAT CUTTING PLANT</div>
                <div class="subtitle">NMIS LICENSE TO OPERATE (LTO)</div>
            </div>
            <div class="form-info">
                NMIS-ARD-F-02<br>
                Version No. 5<br>
                Eff. Date: 25-Jul-2022
            </div>
        </div>

        <!-- Instructions -->
        <div class="instructions">
            <h3>INSTRUCTIONS:</h3>
            <ol>
                <li>Only authorized company representative is allowed to fill-up the application form. Photocopy of the valid ID of the applicant must be attached to this form.</li>
                <li>The information provided in the application form MUST be complete, true and correct.</li>
                <li>Tick (✓) mark the box that corresponds to the info. Please do not leave any spaces blank, indicate N/A if not applicable. Providing false information statements is punishable by law (RA10536).</li>
            </ol>
        </div>

        <!-- Form Fields -->
        <div class="form-row">
            <div class="form-group">
                <label>1. Type of Application</label>
                <div class="checkbox-group">
                    <label><input type="checkbox"> New</label>
                    <label><input type="checkbox"> Renewal</label>
                    <label><input type="checkbox"> Upgrading</label>
                </div>
            </div>
            <div class="form-group">
                <label>2. Product Description</label>
                <div class="checkbox-group">
                    <label><input type="checkbox"> Newly Slaughtered</label>
                    <label><input type="checkbox"> Chilled</label>
                    <label><input type="checkbox"> Frozen</label>
                </div>
            </div>
            <div class="form-group">
                <label>3. Company Tax Identification Number (TIN)</label>
                <input type="text" class="text-input">
                <label style="margin-top:10px;">4. NMIS LTO No.</label>
                <input type="text" class="text-input">
            </div>
        </div>

        <hr style="margin: 10px 0; border: 1px solid black;">

        <div class="form-row">
            <div class="form-group full-width">
                <label>5. Complete Company Name:</label>
                <input type="text" class="text-input">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group full-width">
                <label>Meat Establishment Address:</label>
                <input type="text" class="text-input">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label>Telephone no.:</label>
                <input type="text" class="text-input">
            </div>
            <div class="form-group">
                <label>Fax no. (including area code):</label>
                <input type="text" class="text-input">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label>6. Name of Applicant (Official Company Representative):</label>
                <input type="text" class="text-input">
            </div>
            <div class="form-group">
                <label>Designation:</label>
                <input type="text" class="text-input">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group full-width">
                <label>Address:</label>
                <input type="text" class="text-input">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label>Email address:</label>
                <input type="text" class="text-input">
            </div>
            <div class="form-group">
                <label>Telephone/Fax no.:</label>
                <input type="text" class="text-input">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label>7. Scope of Activity/Services:</label>
                <input type="text" class="text-input">
            </div>
            <div class="form-group">
                <label>8. No. of days/month operational:</label>
                <input type="text" class="text-input">
            </div>
            <div class="form-group">
                <label>9. No. of shift/day:</label>
                <input type="text" class="text-input">
            </div>
            <div class="form-group">
                <label>10. No. of hours/shift:</label>
                <input type="text" class="text-input">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label>11. Time of Operation Start:</label>
                <input type="text" class="text-input">
            </div>
            <div class="form-group">
                <label>Finished:</label>
                <input type="text" class="text-input">
            </div>
        </div>

        <hr style="margin: 10px 0; border: 1px solid black;">

        <div class="section-title">12. Prepared <em>(Meat Cutting Plant only)</em></div>
        <div class="form-row" style="align-items: flex-start;">
            <div style="display: flex; flex-direction: row; width: 100%;">
                <!-- Kind of Meat (two columns) -->
                <div style="flex: 0 0 260px; display: flex; flex-direction: row;">
                    <div style="flex: 1;">
                        <div class="meat-type-group"><input type="checkbox" id="pork"><label for="pork">Pork</label></div>
                        <div class="meat-type-group"><input type="checkbox" id="beef"><label for="beef">Beef</label></div>
                        <div class="meat-type-group"><input type="checkbox" id="carabeef"><label for="carabeef">Carabeef</label></div>
                        <div class="meat-type-group"><input type="checkbox" id="chevon"><label for="chevon">Chevon</label></div>
                        <div class="meat-type-group"><input type="checkbox" id="crocodile"><label for="crocodile">Crocodile meat</label></div>
                        <div class="meat-type-group"><input type="checkbox" id="chicken"><label for="chicken">Chicken</label></div>
                        <div class="meat-type-group"><input type="checkbox" id="horse"><label for="horse">Horse Meat</label></div>
                        <div class="meat-type-group"><input type="checkbox" id="culled"><label for="culled">Culled</label></div>
                        <div class="meat-type-group"><input type="checkbox" id="duck"><label for="duck">Duck meat</label></div>
                        <div class="meat-type-group"><input type="checkbox" id="ostrich"><label for="ostrich">Ostrich meat</label></div>
                        <div class="meat-type-group"><input type="checkbox" id="others"><label for="others">Others (Please specify)</label></div>
                    </div>
                    <div style="flex: 1; margin-left: 20px;">
                        <div class="meat-type-group"><input type="checkbox" id="cutting"><label for="cutting">Cutting</label></div>
                        <div class="meat-type-group"><input type="checkbox" id="deboning"><label for="deboning">Deboning</label></div>
                        <div class="meat-type-group"><input type="checkbox" id="fabrication"><label for="fabrication">Fabrication</label></div>
                    </div>
                </div>
                <!-- Average daily production -->
                <div style="flex: 1; margin-left: 30px;">
                    <div style="display: flex; font-weight: bold; margin-bottom: 2px;">
                        <div style="flex:1; text-align: center; font-size: 11px; font-style: italic;">Product</div>
                        <div style="flex:1; text-align: center; font-size: 11px; font-style: italic;">Volume</div>
                        <div style="flex:1; text-align: center; font-size: 11px; font-style: italic;">Brand name</div>
                    </div>
                    <!-- 11 rows for each kind of meat -->
                    <div style="display: flex; flex-direction: column; gap: 2px;">
                        <!-- 10 normal rows -->
                        <div style="display: flex; gap: 10px; margin-bottom: 2px;">
                            <div class="underline-input"></div>
                            <div class="underline-input"></div>
                            <div class="underline-input"></div>
                        </div>
                        <div style="display: flex; gap: 10px; margin-bottom: 2px;">
                            <div class="underline-input"></div>
                            <div class="underline-input"></div>
                            <div class="underline-input"></div>
                        </div>
                        <div style="display: flex; gap: 10px; margin-bottom: 2px;">
                            <div class="underline-input"></div>
                            <div class="underline-input"></div>
                            <div class="underline-input"></div>
                        </div>
                        <div style="display: flex; gap: 10px; margin-bottom: 2px;">
                            <div class="underline-input"></div>
                            <div class="underline-input"></div>
                            <div class="underline-input"></div>
                        </div>
                        <div style="display: flex; gap: 10px; margin-bottom: 2px;">
                            <div class="underline-input"></div>
                            <div class="underline-input"></div>
                            <div class="underline-input"></div>
                        </div>
                        <div style="display: flex; gap: 10px; margin-bottom: 2px;">
                            <div class="underline-input"></div>
                            <div class="underline-input"></div>
                            <div class="underline-input"></div>
                        </div>
                        <div style="display: flex; gap: 10px; margin-bottom: 2px;">
                            <div class="underline-input"></div>
                            <div class="underline-input"></div>
                            <div class="underline-input"></div>
                        </div>
                        <div style="display: flex; gap: 10px; margin-bottom: 2px;">
                            <div class="underline-input"></div>
                            <div class="underline-input"></div>
                            <div class="underline-input"></div>
                        </div>
                        <div style="display: flex; gap: 10px; margin-bottom: 2px;">
                            <div class="underline-input"></div>
                            <div class="underline-input"></div>
                            <div class="underline-input"></div>
                        </div>
                        <div style="display: flex; gap: 10px; margin-bottom: 2px;">
                            <div class="underline-input"></div>
                            <div class="underline-input"></div>
                            <div class="underline-input"></div>
                        </div>
                        <!-- Others row with long underline -->
                        <div style="display: flex; gap: 10px; margin-bottom: 2px;">
                            <div class="underline-input" style="width:100%;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <hr style="margin: 10px 0; border: 1px solid black;">

        <div class="section-title">13. Source of Meat</div>
        <div class="form-row align-label-underline">
            <label class="label-left">Slaughterhouse/Poultry Dressing Plant:</label>
            <span class="input-underline"></span>
        </div>
        <div class="form-row align-label-underline">
            <label class="label-left">Cold Storage Warehouse:</label>
            <span class="input-underline"></span>
        </div>
        <div class="form-row align-label-underline">
            <label class="label-left">Meat Cutting Plants:</label>
            <span class="input-underline"></span>
        </div>
        <hr style="margin: 10px 0; border: 1px solid black;">
        <div class="section-title">14. Destination/Distribution</div>
        <div class="form-row align-label-underline">
            <label class="label-left">Wet Markets</label>
            <span class="input-underline"></span>
        </div>
        <div class="form-row align-label-underline">
            <label class="label-left">Hotels/ Restaurants/Institutional Client</label>
            <span class="input-underline"></span>
        </div>
        <div class="form-row align-label-underline">
            <label class="label-left">Cold Storage</label>
            <span class="input-underline"></span>
        </div>
        <div class="form-row align-label-underline">
            <label class="label-left">Meat Shops</label>
            <span class="input-underline"></span>
        </div>
        <div class="form-row align-label-underline">
            <label class="label-left">Supermarkets</label>
            <span class="input-underline"></span>
        </div>
        <div class="form-row align-label-underline">
            <label class="label-left">Depot Centers</label>
            <span class="input-underline"></span>
        </div>

        <hr style="margin: 10px 0; border: 1px solid black;">

        <!-- Page 2 -->
        <div class="page-break">
            <div class="section-title">15. Storage Capacity</div>
            <table class="storage-table">
                <thead>
                    <tr>
                        <th></th>
                        <th>Area (cubic meters)</th>
                        <th>No. of Units</th>
                        <th>Capacity (MT)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Chiller</td>
                        <td><input type="text"></td>
                        <td><input type="text"></td>
                        <td><input type="text"></td>
                    </tr>
                    <tr>
                        <td>Blast Chiller</td>
                        <td><input type="text"></td>
                        <td><input type="text"></td>
                        <td><input type="text"></td>
                    </tr>
                    <tr>
                        <td>Holding Freezer</td>
                        <td><input type="text"></td>
                        <td><input type="text"></td>
                        <td><input type="text"></td>
                    </tr>
                    <tr>
                        <td>Other Cold Storage Use</td>
                        <td><input type="text"></td>
                        <td><input type="text"></td>
                        <td><input type="text"></td>
                    </tr>
                </tbody>
            </table>

            <hr style="margin: 10px 0; border: 1px solid black;">

            <div class="section-title">16. Contract/Toll Processor</div>
            <div class="form-row align-label-underline">
                <label class="label-left">Company Name:</label>
                <span class="input-underline"></span>
            </div>
            <div class="form-row align-label-underline">
                <label class="label-left">Address:</label>
                <span class="input-underline"></span>
            </div>
            <div class="form-row align-label-underline">
                <label class="label-left">Email address:</label>
                <span class="input-underline"></span>
            </div>
            <div class="form-row align-label-underline">
                <label class="label-left">Telephone/fax no.:</label>
                <span class="input-underline"></span>
            </div>

            <hr style="margin: 10px 0; border: 1px solid black;">

            <div class="section-title">17. Present status of Labeling</div>
            <div class="labeling-section">
                <div class="labeling-question">
                    <label>Are labeling/packaging materials provided to contract processor?</label>
                    <div class="labeling-options">
                        <label><input type="checkbox"> yes</label>
                        <label><input type="checkbox"> no</label>
                    </div>
                </div>
                <div class="labeling-question">
                    <label>Does the label indicate the contract toll processor?</label>
                    <div class="labeling-options">
                        <label><input type="checkbox"> yes</label>
                        <label><input type="checkbox"> no</label>
                    </div>
                </div>
            </div>

            <hr style="margin: 10px 0; border: 1px solid black;">

            <div class="section-title">18. Payment</div>
            <div class="payment-section">
                <div class="payment-group">
                    <h4>HACCP Certificate</h4>
                    <div class="form-row">
                        <div class="form-group">
                            <label>O.R No.:</label>
                            <input type="text" class="text-input">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label>Date issued:</label>
                            <input type="text" class="text-input">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label>Amount:</label>
                            <input type="text" class="text-input">
                        </div>
                    </div>
                </div>
                <div class="payment-group">
                    <h4>LTO Certificate</h4>
                    <div class="form-row">
                        <div class="form-group">
                            <label>O.R No.:</label>
                            <input type="text" class="text-input">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label>Date issued:</label>
                            <input type="text" class="text-input">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label>Amount:</label>
                            <input type="text" class="text-input">
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group full-width">
                    <label>Please check (✓) appropriate box of your preferred option for receipt or delivery of LTO certificate</label>
                </div>
            </div>

            <div class="delivery-options">
                <div class="delivery-option">
                    <label><input type="checkbox"> Pick up</label>
                    <div>____CO</div>
                    <div>____RTOC</div>
                </div>
                <div class="delivery-option">
                    <label><input type="checkbox"> Registered Mail</label>
                    <div class="delivery-note">May be receive after 7 days (minimum) upon mailing.</div>
                </div>
                <div class="delivery-option">
                    <label><input type="checkbox"> Courier</label>
                    <div class="delivery-note">May be receive after 3 days (minimum) upon mailing.</div>
                </div>
            </div>

            <div class="certification">
                <p><strong>I hereby certify that the above statements are true and correct to the best of my knowledge and documentary requirements submitted are complete and updated.</strong> <em>(Please attached photocopy (back-to-back) valid Company I.D)</em></p>
                <br>
                <p>By signing below, I am authorizing the NMIS to collect, processed and stored our data in accordance with the requirement of Republic Act 10173 (Data Privacy Act of 2012). I am also giving them consent to post to their website the information of our company as specified herewith; Name, Address, Number and Expiration Date of the License to Operate (LTO).</p>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label>Date Signed:</label>
                    <div class="signature-line"></div>
                </div>
            </div>

            <div class="signature-section">
                <div class="signature-group">
                    <div class="signature-line"></div>
                    <label>Name and Signature of applicant</label>
                </div>
                <div class="signature-group">
                    <div class="signature-line"></div>
                    <label>Position/Designation</label>
                </div>
            </div>

            <div class="nmis-section">
                <p><em>(This portion is to be filled-out by NMIS Authorized Representative)</em></p>
                <br>
                <div class="form-row">
                    <div class="form-group">
                        <label>Date of Application:</label>
                        <div class="signature-line"></div>
                    </div>
                    <div class="form-group">
                        <div class="signature-line"></div>
                        <label>(Signature over printed name)</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>