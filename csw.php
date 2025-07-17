<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSW Application Form - Cold Storage Warehouse</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Legal paper size: 8.5" x 14" */
        @media print {

            @page {
                size: legal;
                margin: 0.3in 0.5in;

            }

            body {
                font-size: 9pt;
                line-height: 1.1;
                font-family: Arial, sans-serif;
            }

            .page-break {
                page-break-before: always;
            }

            .no-print {
                display: none;
            }

            .form-control,
            .form-select {
                border: none !important;
                border-bottom: 1px solid #000 !important;
                font-size: 8pt;
                padding: 1px 2px;
                background: transparent !important;
                border-radius: 0 !important;
            }

            .table td,
            .table th {
                border: 1px solid #000 !important;
                padding: 2px;
                font-size: 8pt;
                vertical-align: middle;
            }

            .checkbox-print {
                width: 12px;
                height: 12px;
                border: 1px solid #000;
                display: inline-block;
                margin-right: 3px;
            }

            .header-wrapper {
                margin-bottom: 50px;
                margin-top: 50px;
                print-color-adjust: exact;
            }
        }

        .form-container {
            max-width: 8.5in;
            margin: 0 auto;
            background: white;
            padding: 15px;
            font-family: Arial, sans-serif;
            position: relative;
        }

        .header-wrapper {
            position: relative;
            margin-top: 50px;
            margin-bottom: 50px;
        }

        .logo-circle {
            width: 90px;
            height: 90px;
            background: #6B46C1;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
            font-size: 18px;
            position: absolute;
            left: 0;
            top: 0;
            text-align: center;
            line-height: 1.1;
        }

        .form-title {
            margin-left: 110px;
            text-align: center;
            padding-top: 15px;
        }

        .form-title h3 {
            font-size: 16px;
            font-weight: bold;
            margin: 0 0 5px 0;
            text-transform: uppercase;
        }

        .form-title h4 {
            font-size: 14px;
            font-weight: bold;
            margin: 0;
            text-transform: uppercase;
        }

        .form-number {
            position: absolute;
            top: 0;
            right: 0;
            border: 1px solid #000;
            padding: 8px;
            font-size: 10px;
            text-align: center;
            background: white;
        }

        .instructions-header {
            background: none;
            font-weight: bold;
            font-size: 12px;
            margin: 20px 0 5px 0;
            text-decoration: underline;
        }

        .instructions-list {
            font-size: 10px;
            line-height: 1.3;
            margin-bottom: 15px;
        }

        .section-row {
            display: flex;
            margin-bottom: 12px;
            align-items: flex-start;
        }

        .section-column {
            flex: 1;
            padding-right: 15px;
        }

        .section-column:last-child {
            padding-right: 0;
        }

        .section-label {
            font-weight: bold;
            font-size: 10px;
            margin-bottom: 5px;
        }

        .checkbox-group {
            display: flex;
            flex-direction: column;
            gap: 3px;
        }

        .checkbox-item {
            display: flex;
            align-items: center;
            gap: 5px;
            font-size: 10px;
        }

        .checkbox-item input[type="checkbox"] {
            width: 12px;
            height: 12px;
            margin-right: 5px;
        }

        .form-row {
            margin-bottom: 8px;
        }

        .underline-input {
            border: none;
            border-bottom: 1px solid #000;
            background: transparent;
            padding: 2px 5px;
            font-size: 10px;
            width: 100%;
        }

        .form-control {
            border: none;
            border-bottom: 1px solid #000;
            background: transparent;
            padding: 2px 5px;
            font-size: 10px;
            border-radius: 0;
        }

        .form-control:focus {
            border-bottom: 1px solid #000;
            box-shadow: none;
            background: transparent;
        }

        .table-section {
            margin: 15px 0;
        }

        .table {
            font-size: 9px;
            margin-bottom: 10px;
        }

        .table td,
        .table th {
            border: 1px solid #000;
            padding: 4px 2px;
            vertical-align: middle;
            text-align: center;
        }

        .table td:first-child,
        .table th:first-child {
            text-align: left;
            padding-left: 5px;
        }

        .table input[type="text"] {
            border: none;
            background: transparent;
            font-size: 8px;
            padding: 1px;
            width: 100%;
            text-align: center;
        }

        .table input[type="checkbox"] {
            width: 12px;
            height: 12px;
        }

        .signature-section {
            margin-top: 20px;
            padding-top: 15px;
        }

        .small-text {
            font-size: 9px;
            line-height: 1.2;
        }

        .signature-line {
            border-bottom: 1px solid #000;
            height: 40px;
            margin-bottom: 5px;
        }

        .inline-checkbox {
            display: inline-block;
            width: 12px;
            height: 12px;
            border: 1px solid #000;
            margin-right: 5px;
            vertical-align: middle;
        }

        .percentage-input {
            width: 50px;
            display: inline-block;
            margin-left: 5px;
        }
    </style>
</head>

<body>
    <div class="form-container">
        <div class="form-number">
            NMIS-ARD-F-03<br>
            Version No. 6<br>
            Eff. Date: 25-Jul-2022
        </div>
        <!-- Header Section -->
        <div class="header-wrapper">
            <!-- Form Number -->


            <!-- Logo -->
            <div class="logo-circle">
                A.3<br>CSW
            </div>

            <!-- Title -->
            <div class="form-title">
                <h3>APPLICATION FORM FOR COLD STORAGE WAREHOUSE</h3>
                <h4>NMIS LICENSE TO OPERATE (LTO)</h4>
            </div>
        </div>

        <!-- Instructions -->
        <div class="instructions-header">INSTRUCTIONS:</div>
        <ol class="instructions-list">
            <li>Only authorized company representative is allowed to fill-up the application form.</li>
            <li>Photocopy of the valid ID of the applicant must be attached to this form.</li>
            <li>The information provided in the application form MUST be complete, true and correct.</li>
            <li>Tick (✓) mark the box that corresponds to the info. Please do not leave any spaces blank, indicate N/A if not applicable. Providing false information is punishable by law (RA10536).</li>
        </ol>

        <!-- Sections 1-4 -->
        <div class="section-row">
            <div class="section-column">
                <div class="section-label">1. Type of Application</div>
                <div class="checkbox-group">
                    <div class="checkbox-item">
                        <input type="checkbox" id="new" name="app_type" value="new">
                        <label for="new">New</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" id="renewal" name="app_type" value="renewal">
                        <label for="renewal">Renewal</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" id="upgrading" name="app_type" value="upgrading">
                        <label for="upgrading">Upgrading</label>
                    </div>
                </div>
            </div>
            <div class="section-column">
                <div class="section-label">2. Type of Cold Storage Warehouse</div>
                <div class="checkbox-group">
                    <div class="checkbox-item">
                        <input type="checkbox" id="private" name="warehouse_type" value="private">
                        <label for="private">Private/In-house facility</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" id="public" name="warehouse_type" value="public">
                        <label for="public">Public/Commercial facility</label>
                    </div>
                </div>
            </div>
            <div class="section-column">
                <div class="section-label">3. Company Tax Identification Number (TIN)</div>
                <input type="text" class="underline-input" name="tin">
                <br><br>
                <div class="section-label">4. NMIS LTO No.</div>
                <input type="text" class="underline-input" name="nmis_lto">
            </div>
        </div>

        <!-- Section 5: Company Information -->
        <div class="form-row">
            <label><strong>5. Complete Company Name</strong></label>
            <input type="text" class="form-control" name="company_name">
        </div>

        <div class="form-row">
            <label><strong>Head Establishment Address:</strong></label>
            <input type="text" class="form-control" name="head_address">
        </div>

        <div class="row form-row">
            <div class="col-md-4">
                <label><strong>Telephone no.</strong></label>
                <input type="text" class="form-control" name="telephone">
            </div>
            <div class="col-md-4">
                <label><strong>Fax no. (including area code)</strong></label>
                <input type="text" class="form-control" name="fax">
            </div>
            <div class="col-md-4">
                <label><strong>Website</strong></label>
                <input type="text" class="form-control" name="website">
            </div>
        </div>

        <!-- Section 6: Applicant Information -->
        <div class="form-row">
            <div class="row">
                <div class="col-md-6">
                    <label><strong>6. Name of Applicant (Official Company Representative):</strong></label>
                    <input type="text" class="form-control" name="applicant_name">
                </div>
                <div class="col-md-6">
                    <label><strong>Designation:</strong></label>
                    <input type="text" class="form-control" name="designation">
                </div>
            </div>
        </div>

        <div class="form-row">
            <label><strong>Address:</strong></label>
            <input type="text" class="form-control" name="applicant_address">
        </div>

        <div class="row form-row">
            <div class="col-md-6">
                <label><strong>Email address:</strong></label>
                <input type="email" class="form-control" name="email">
            </div>
            <div class="col-md-6">
                <label><strong>Telephone/Fax no.:</strong></label>
                <input type="text" class="form-control" name="applicant_phone">
            </div>
        </div>

        <!-- Section 7-11: Business Information -->
        <div class="row form-row">
            <div class="col-md-3">
                <label><strong>7. Scope of Activity/Services</strong></label>
                <textarea class="form-control" rows="2" name="scope_activity"></textarea>
                <small>(e.g. Storage of Frozen Meat)</small>
            </div>
            <div class="col-md-3">
                <label><strong>8. No. of days/month operational</strong></label>
                <input type="number" class="form-control" name="days_operational">
            </div>
            <div class="col-md-3">
                <label><strong>9. No. of shift/day</strong></label>
                <input type="number" class="form-control" name="shifts_day">
            </div>
            <div class="col-md-3">
                <label><strong>10. No. of hours/shift</strong></label>
                <input type="number" class="form-control" name="hours_shift">
            </div>
        </div>

        <div class="row form-row">
            <div class="col-md-6">
                <label><strong>11. Time of Operation Start</strong></label>
                <input type="time" class="form-control" name="operation_start">
            </div>
            <div class="col-md-6">
                <label><strong>Finished</strong></label>
                <input type="time" class="form-control" name="operation_end">
            </div>
        </div>

        <!-- Section 12: Product Storage -->
        <div class="section-header">12. Product Stored (at the time of application)</div>

        <div class="table-section">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th rowspan="2"></th>
                        <th colspan="2" class="text-center">Local</th>
                        <th colspan="2" class="text-center">Imported</th>
                    </tr>
                    <tr>
                        <th>Volume (MT)</th>
                        <th></th>
                        <th>Volume (MT)</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Meat and Meat Products</td>
                        <td><input type="checkbox" name="meat_local"></td>
                        <td><input type="text" class="form-control" name="meat_local_vol"></td>
                        <td><input type="checkbox" name="meat_imported"></td>
                        <td><input type="text" class="form-control" name="meat_imported_vol"></td>
                    </tr>
                    <tr>
                        <td>Fruits/Vegetables and products</td>
                        <td><input type="checkbox" name="fruits_local"></td>
                        <td><input type="text" class="form-control" name="fruits_local_vol"></td>
                        <td><input type="checkbox" name="fruits_imported"></td>
                        <td><input type="text" class="form-control" name="fruits_imported_vol"></td>
                    </tr>
                    <tr>
                        <td>Egg/Milk and products</td>
                        <td><input type="checkbox" name="egg_local"></td>
                        <td><input type="text" class="form-control" name="egg_local_vol"></td>
                        <td><input type="checkbox" name="egg_imported"></td>
                        <td><input type="text" class="form-control" name="egg_imported_vol"></td>
                    </tr>
                    <tr>
                        <td>Fish and Fish Products</td>
                        <td><input type="checkbox" name="fish_local"></td>
                        <td><input type="text" class="form-control" name="fish_local_vol"></td>
                        <td><input type="checkbox" name="fish_imported"></td>
                        <td><input type="text" class="form-control" name="fish_imported_vol"></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Additional Products Table -->
        <div class="table-section">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th rowspan="2"></th>
                        <th colspan="2" class="text-center">Local</th>
                        <th colspan="2" class="text-center">Imported</th>
                    </tr>
                    <tr>
                        <th>Volume (MT)</th>
                        <th></th>
                        <th>Volume (MT)</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Pork</td>
                        <td><input type="checkbox"></td>
                        <td><input type="text" class="form-control"></td>
                        <td><input type="checkbox"></td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Beef</td>
                        <td><input type="checkbox"></td>
                        <td><input type="text" class="form-control"></td>
                        <td><input type="checkbox"></td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Chevon</td>
                        <td><input type="checkbox"></td>
                        <td><input type="text" class="form-control"></td>
                        <td><input type="checkbox"></td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Poultry meat</td>
                        <td><input type="checkbox"></td>
                        <td><input type="text" class="form-control"></td>
                        <td><input type="checkbox"></td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Chocolate meat</td>
                        <td><input type="checkbox"></td>
                        <td><input type="text" class="form-control"></td>
                        <td><input type="checkbox"></td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Horse meat</td>
                        <td><input type="checkbox"></td>
                        <td><input type="text" class="form-control"></td>
                        <td><input type="checkbox"></td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Chicken</td>
                        <td><input type="checkbox"></td>
                        <td><input type="text" class="form-control"></td>
                        <td><input type="checkbox"></td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Quail</td>
                        <td><input type="checkbox"></td>
                        <td><input type="text" class="form-control"></td>
                        <td><input type="checkbox"></td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Duck meat</td>
                        <td><input type="checkbox"></td>
                        <td><input type="text" class="form-control"></td>
                        <td><input type="checkbox"></td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Ostrich meat</td>
                        <td><input type="checkbox"></td>
                        <td><input type="text" class="form-control"></td>
                        <td><input type="checkbox"></td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Others (Please specify)</td>
                        <td><input type="checkbox"></td>
                        <td><input type="text" class="form-control"></td>
                        <td><input type="checkbox"></td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- PAGE BREAK -->
        <div class="page-break"></div>

        <!-- Section 13: Destination/Distribution -->
        <div class="section-header">13. Destination/Distribution</div>
        <div class="form-row">
            <label><strong>Wet Markets</strong></label>
            <input type="text" class="form-control" name="wet_markets">
        </div>
        <div class="form-row">
            <label><strong>Hotels/Restaurants/Institutional Client</strong></label>
            <input type="text" class="form-control" name="hotels_restaurants">
        </div>
        <div class="form-row">
            <label><strong>Cold Storage</strong></label>
            <input type="text" class="form-control" name="cold_storage">
        </div>
        <div class="form-row">
            <label><strong>Meat Shops</strong></label>
            <input type="text" class="form-control" name="meat_shops">
        </div>
        <div class="form-row">
            <label><strong>Supermarkets</strong></label>
            <input type="text" class="form-control" name="supermarkets">
        </div>
        <div class="form-row">
            <label><strong>Depot Centers</strong></label>
            <input type="text" class="form-control" name="depot_centers">
        </div>

        <!-- Section 14: Storage Capacity -->
        <div class="section-header">14. Storage Capacity</div>
        <div class="table-section">
            <table class="table table-bordered">
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
                        <td><strong>Chiller</strong></td>
                        <td><input type="text" class="form-control"></td>
                        <td><input type="text" class="form-control"></td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Blast Chiller</td>
                        <td><input type="text" class="form-control"></td>
                        <td><input type="text" class="form-control"></td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Contact Plate Freezer</td>
                        <td><input type="text" class="form-control"></td>
                        <td><input type="text" class="form-control"></td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Holding Freezer</td>
                        <td><input type="text" class="form-control"></td>
                        <td><input type="text" class="form-control"></td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Dry Warehouse</td>
                        <td><input type="text" class="form-control"></td>
                        <td><input type="text" class="form-control"></td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Section 15: Percentage Capacity -->
        <div class="section-header">15. Percentage Capacity</div>
        <div class="table-section">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th></th>
                        <th>Local (%)</th>
                        <th>Imported (%)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Meat and Meat Products</td>
                        <td><input type="checkbox"> <input type="text" class="form-control d-inline" style="width: 60px;"></td>
                        <td><input type="checkbox"> <input type="text" class="form-control d-inline" style="width: 60px;"></td>
                    </tr>
                    <tr>
                        <td>Fruits/Vegetables and products</td>
                        <td><input type="checkbox"> <input type="text" class="form-control d-inline" style="width: 60px;"></td>
                        <td><input type="checkbox"> <input type="text" class="form-control d-inline" style="width: 60px;"></td>
                    </tr>
                    <tr>
                        <td>Egg/Milk and products</td>
                        <td><input type="checkbox"> <input type="text" class="form-control d-inline" style="width: 60px;"></td>
                        <td><input type="checkbox"> <input type="text" class="form-control d-inline" style="width: 60px;"></td>
                    </tr>
                    <tr>
                        <td>Fish and Fish Products</td>
                        <td><input type="checkbox"> <input type="text" class="form-control d-inline" style="width: 60px;"></td>
                        <td><input type="checkbox"> <input type="text" class="form-control d-inline" style="width: 60px;"></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Section 16: Present Status of Labeling -->
        <div class="section-header">16. Present status of Labeling</div>
        <div class="row form-row">
            <div class="col-md-6">
                <div class="checkbox-item">
                    <label>Are labeling/packaging materials provided to contract processor?</label>
                    <input type="checkbox" name="labeling_yes" value="yes"> Yes
                    <input type="checkbox" name="labeling_no" value="no"> No
                </div>
            </div>
            <div class="col-md-6">
                <div class="checkbox-item">
                    <label>Does the label indicate the control bill processor?</label>
                    <input type="checkbox" name="label_indicates_yes" value="yes"> Yes
                    <input type="checkbox" name="label_indicates_no" value="no"> No
                </div>
            </div>
        </div>

        <!-- Section 17: Payment -->
        <div class="section-header">17. Payment</div>
        <div class="row form-row">
            <div class="col-md-6">
                <div class="checkbox-item">
                    <input type="checkbox" name="haccp_cert" value="haccp">
                    <label>HACCP Certificate</label>
                </div>
                <div class="form-row">
                    <label>O.R No.:</label>
                    <input type="text" class="form-control" name="haccp_or_no">
                </div>
                <div class="form-row">
                    <label>Date Issued:</label>
                    <input type="date" class="form-control" name="haccp_date">
                </div>
                <div class="form-row">
                    <label>Amount:</label>
                    <input type="text" class="form-control" name="haccp_amount">
                </div>
            </div>
            <div class="col-md-6">
                <div class="checkbox-item">
                    <input type="checkbox" name="lto_cert" value="lto">
                    <label>LTO Certificate</label>
                </div>
                <div class="form-row">
                    <label>O.R No.:</label>
                    <input type="text" class="form-control" name="lto_or_no">
                </div>
                <div class="form-row">
                    <label>Date Issued:</label>
                    <input type="date" class="form-control" name="lto_date">
                </div>
                <div class="form-row">
                    <label>Amount:</label>
                    <input type="text" class="form-control" name="lto_amount">
                </div>
            </div>
        </div>

        <!-- Certification Statement -->
        <div class="signature-section">
            <p class="small-text">
                <strong>I hereby certify that the above statements are true and correct to the best of my knowledge and documentary requirements submitted are complete and updated. (Please attached photocopy (back-to-back) valid Company I.D.)</strong>
            </p>
            <p class="small-text">
                By signing below, I am authorizing the NMIS to collect, processed and stored our data in accordance with the requirement of Republic Act 10173 (Data Privacy Act of 2012). I am also giving them the consent to post their website information which will include the information of our company as specified herewith: Name, Address, Number and Expiration Date of the License to Operate (LTO).
            </p>
        </div>

        <!-- Signature Section -->
        <div class="row form-row" style="margin-top: 40px;">
            <div class="col-md-4">
                <label><strong>Date Signed:</strong></label>
                <input type="date" class="form-control" name="date_signed">
            </div>
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-6">
                        <div style="border-bottom: 1px solid #000; margin-bottom: 5px; height: 50px;"></div>
                        <label><strong>Name and Signature of applicant</strong></label>
                    </div>
                    <div class="col-md-6">
                        <div style="border-bottom: 1px solid #000; margin-bottom: 5px; height: 50px;"></div>
                        <label><strong>Position/Designation</strong></label>
                    </div>
                </div>
                <div style="margin-top: 20px;">
                    <div style="border-bottom: 1px solid #000; margin-bottom: 5px; height: 50px;"></div>
                    <label class="small-text"><strong>(This portion is to be filled-out by NMIS Authorized Representative)</strong></label>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <div class="row" style="margin-top: 40px;">
            <div class="col-md-6">
                <label><strong>Date of Application:</strong></label>
                <div style="border-bottom: 1px solid #000; margin-bottom: 5px; height: 30px;"></div>
            </div>
            <div class="col-md-6">
                <div style="border: 1px solid #000; padding: 20px; text-align: center;">
                    <strong>NMIS Authorized Representative<br>(Signature over printed name)</strong>
                </div>
            </div>
        </div>

        <!-- Print Button -->
        <div class="text-center mt-4 no-print">
            <button type="button" class="btn btn-primary" onclick="window.print()">Print Form</button>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>