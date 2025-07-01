<?php
require_once('vend.php');

class NMISApplicationForm extends TCPDF {
    
    public function Header() {
        // Header content will be handled in the main content
    }
    
    public function Footer() {
        // Footer content
        $this->SetY(-15);
        $this->SetFont('helvetica', 'I', 8);
        $this->Cell(0, 10, 'Page '.$this->getAliasNumPage().'/'.$this->getAliasNbPages(), 0, false, 'C', 0, '', 0, false, 'T', 'M');
    }
    
    public function createFormHeader() {
        // Logo circle
        $this->SetFillColor(34, 139, 34); // Forest Green
        $this->SetDrawColor(0, 0, 255); // Blue border
        $this->Circle(30, 30, 15, 0, 360, 'FD');
        
        // Logo text
        $this->SetTextColor(255, 255, 255);
        $this->SetFont('helvetica', 'B', 20);
        $this->SetXY(22, 22);
        $this->Cell(16, 8, 'A2', 0, 0, 'C');
        $this->SetFont('helvetica', 'B', 8);
        $this->SetXY(22, 30);
        $this->Cell(16, 8, 'NMCP', 0, 0, 'C');
        
        // Title
        $this->SetTextColor(0, 0, 0);
        $this->SetFont('helvetica', 'B', 16);
        $this->SetXY(60, 20);
        $this->Cell(100, 8, 'APPLICATION FORM FOR MEAT CUTTING PLANT', 0, 1, 'C');
        $this->SetFont('helvetica', 'B', 12);
        $this->SetXY(60, 28);
        $this->Cell(100, 8, 'NMIS LICENSE TO OPERATE (LTO)', 0, 1, 'C');
        
        // Form info box
        $this->SetXY(170, 15);
        $this->Rect(170, 15, 35, 20, 'D');
        $this->SetFont('helvetica', '', 10);
        $this->SetXY(172, 17);
        $this->Cell(31, 4, 'NMIS-ARD-F-02', 0, 1, 'L');
        $this->SetXY(172, 21);
        $this->Cell(31, 4, 'Version No. 5', 0, 1, 'L');
        $this->SetXY(172, 25);
        $this->Cell(31, 4, 'Eff. Date: 25-Jul-2022', 0, 1, 'L');
    }
    
    public function createInstructions() {
        // Instructions section
        $this->SetY(50);
        $this->SetDrawColor(0, 0, 0);
        $this->Line(10, 50, 200, 50);
        $this->Line(10, 75, 200, 75);
        
        $this->SetFont('helvetica', 'B', 10);
        $this->SetXY(10, 52);
        $this->Cell(0, 5, 'INSTRUCTIONS:', 0, 1, 'L');
        
        $this->SetFont('helvetica', 'B', 9);
        $instructions = array(
            '1. Only authorized company representative is allowed to fill-up the application form. Photocopy of the valid ID of the applicant must be attached to this form.',
            '2. The information provided in the application form MUST be complete, true and correct.',
            '3. Tick (✓) mark the box that corresponds to the info. Please do not leave any spaces blank, indicate N/A if not applicable. Providing false information statements is punishable by law (RA10536).'
        );
        
        $y = 57;
        foreach ($instructions as $instruction) {
            $this->SetXY(10, $y);
            $this->MultiCell(180, 4, $instruction, 0, 'L');
            $y += 6;
        }
    }
    
    public function createCheckboxField($x, $y, $width, $height, $label, $checked = false) {
        // Draw checkbox
        $this->Rect($x, $y, 3, 3, 'D');
        if ($checked) {
            $this->SetFont('helvetica', 'B', 8);
            $this->SetXY($x, $y-0.5);
            $this->Cell(3, 3, '✓', 0, 0, 'C');
        }
        
        // Label
        $this->SetFont('helvetica', '', 9);
        $this->SetXY($x + 5, $y);
        $this->Cell($width - 5, $height, $label, 0, 0, 'L');
    }
    
    public function createInputField($x, $y, $width, $height, $label = '', $value = '') {
        if ($label) {
            $this->SetFont('helvetica', 'B', 9);
            $this->SetXY($x, $y);
            $this->Cell($width, $height, $label, 0, 1, 'L');
            $y += 5;
        }
        
        // Input line
        $this->Line($x, $y + $height, $x + $width, $y + $height);
        if ($value) {
            $this->SetFont('helvetica', '', 9);
            $this->SetXY($x, $y);
            $this->Cell($width, $height, $value, 0, 0, 'L');
        }
    }
    
    public function createMainForm() {
        $y = 80;
        
        // Row 1: Type of Application, Product Description, TIN & NMIS LTO
        $this->SetFont('helvetica', 'B', 9);
        $this->SetXY(10, $y);
        $this->Cell(50, 5, '1. Type of Application', 0, 0, 'L');
        $this->SetXY(70, $y);
        $this->Cell(50, 5, '2. Product Description', 0, 0, 'L');
        $this->SetXY(130, $y);
        $this->Cell(50, 5, '3. Company Tax Identification Number (TIN)', 0, 0, 'L');
        
        $y += 7;
        $this->createCheckboxField(10, $y, 50, 4, 'New');
        $this->createCheckboxField(70, $y, 50, 4, 'Newly Slaughtered');
        $this->createInputField(130, $y, 65, 4);
        
        $y += 6;
        $this->createCheckboxField(10, $y, 50, 4, 'Renewal');
        $this->createCheckboxField(70, $y, 50, 4, 'Chilled');
        
        $y += 6;
        $this->createCheckboxField(10, $y, 50, 4, 'Upgrading');
        $this->createCheckboxField(70, $y, 50, 4, 'Frozen');
        
        $this->SetFont('helvetica', 'B', 9);
        $this->SetXY(130, $y);
        $this->Cell(50, 5, '4. NMIS LTO No.', 0, 0, 'L');
        $this->createInputField(130, $y + 5, 65, 4);
        
        $y += 15;
        
        // Horizontal line
        $this->Line(10, $y, 200, $y);
        $y += 5;
        
        // Complete Company Name
        $this->createInputField(10, $y, 185, 4, '5. Complete Company Name:');
        $y += 12;
        
        // Meat Establishment Address
        $this->createInputField(10, $y, 185, 4, 'Meat Establishment Address:');
        $y += 12;
        
        // Telephone and Fax
        $this->createInputField(10, $y, 90, 4, 'Telephone no.:');
        $this->createInputField(105, $y, 90, 4, 'Fax no. (including area code):');
        $y += 12;
        
        // Name of Applicant and Designation
        $this->createInputField(10, $y, 90, 4, '6. Name of Applicant (Official Company Representative):');
        $this->createInputField(105, $y, 90, 4, 'Designation:');
        $y += 12;
        
        // Address
        $this->createInputField(10, $y, 185, 4, 'Address:');
        $y += 12;
        
        // Email and Telephone/Fax
        $this->createInputField(10, $y, 90, 4, 'Email address:');
        $this->createInputField(105, $y, 90, 4, 'Telephone/Fax no.:');
        $y += 12;
        
        // Scope, Days, Shift, Hours
        $this->createInputField(10, $y, 40, 4, '7. Scope of Activity/Services:');
        $this->createInputField(55, $y, 40, 4, '8. No. of days/month operational:');
        $this->createInputField(100, $y, 40, 4, '9. No. of shift/day:');
        $this->createInputField(145, $y, 50, 4, '10. No. of hours/shift:');
        $y += 12;
        
        // Time of Operation
        $this->createInputField(10, $y, 90, 4, '11. Time of Operation Start:');
        $this->createInputField(105, $y, 90, 4, 'Finished:');
        $y += 15;
        
        // Horizontal line
        $this->Line(10, $y, 200, $y);
        $y += 5;
        
        // Section 12: Prepared (Meat Cutting Plant only)
        $this->SetFont('helvetica', 'B', 9);
        $this->SetXY(10, $y);
        $this->Cell(0, 5, '12. Prepared (Meat Cutting Plant only)', 0, 1, 'L');
        $y += 8;
        
        // Meat types - left column
        $meatTypes = ['Pork', 'Beef', 'Carabeef', 'Chevon', 'Crocodile meat', 'Chicken', 'Horse Meat', 'Culled', 'Duck meat', 'Ostrich meat', 'Others (Please specify)'];
        $processes = ['Cutting', 'Deboning', 'Fabrication'];
        
        $startY = $y;
        foreach ($meatTypes as $i => $meat) {
            $this->createCheckboxField(10, $y, 50, 4, $meat);
            $y += 5;
        }
        
        // Processes - middle column
        $y = $startY;
        foreach ($processes as $process) {
            $this->createCheckboxField(65, $y, 30, 4, $process);
            $y += 5;
        }
        
        // Product/Volume/Brand name headers
        $this->SetFont('helvetica', 'BI', 9);
        $this->SetXY(110, $startY);
        $this->Cell(25, 4, 'Product', 0, 0, 'C');
        $this->Cell(25, 4, 'Volume', 0, 0, 'C');
        $this->Cell(25, 4, 'Brand name', 0, 0, 'C');
        
        // Input lines for products
        for ($i = 0; $i < 11; $i++) {
            $lineY = $startY + 7 + ($i * 5);
            if ($i < 10) {
                $this->Line(110, $lineY, 130, $lineY);
                $this->Line(135, $lineY, 155, $lineY);
                $this->Line(160, $lineY, 180, $lineY);
            } else {
                // Others row - long line
                $this->Line(110, $lineY, 180, $lineY);
            }
        }
        
        $y = $startY + 60;
    }
    
    public function createSourceAndDestination() {
        $y = $this->GetY() + 5;
        
        // Horizontal line
        $this->Line(10, $y, 200, $y);
        $y += 5;
        
        // Section 13: Source of Meat
        $this->SetFont('helvetica', 'B', 9);
        $this->SetXY(10, $y);
        $this->Cell(0, 5, '13. Source of Meat', 0, 1, 'L');
        $y += 8;
        
        $sources = [
            'Slaughterhouse/Poultry Dressing Plant:',
            'Cold Storage Warehouse:',
            'Meat Cutting Plants:'
        ];
        
        foreach ($sources as $source) {
            $this->SetFont('helvetica', '', 9);
            $this->SetXY(10, $y);
            $this->Cell(60, 4, $source, 0, 0, 'L');
            $this->Line(70, $y + 3, 195, $y + 3);
            $y += 6;
        }
        
        $y += 5;
        
        // Horizontal line
        $this->Line(10, $y, 200, $y);
        $y += 5;
        
        // Section 14: Destination/Distribution
        $this->SetFont('helvetica', 'B', 9);
        $this->SetXY(10, $y);
        $this->Cell(0, 5, '14. Destination/Distribution', 0, 1, 'L');
        $y += 8;
        
        $destinations = [
            'Wet Markets',
            'Hotels/ Restaurants/Institutional Client',
            'Cold Storage',
            'Meat Shops',
            'Supermarkets',
            'Depot Centers'
        ];
        
        foreach ($destinations as $destination) {
            $this->SetFont('helvetica', '', 9);
            $this->SetXY(10, $y);
            $this->Cell(60, 4, $destination, 0, 0, 'L');
            $this->Line(70, $y + 3, 195, $y + 3);
            $y += 6;
        }
        
        $this->SetY($y);
    }
    
    public function createPage2() {
        $this->AddPage();
        $y = 20;
        
        // Section 15: Storage Capacity
        $this->SetFont('helvetica', 'B', 9);
        $this->SetXY(10, $y);
        $this->Cell(0, 5, '15. Storage Capacity', 0, 1, 'L');
        $y += 8;
        
        // Table headers
        $this->SetFont('helvetica', 'B', 8);
        $this->SetXY(10, $y);
        $this->Cell(40, 6, '', 1, 0, 'C', true);
        $this->Cell(40, 6, 'Area (cubic meters)', 1, 0, 'C', true);
        $this->Cell(40, 6, 'No. of Units', 1, 0, 'C', true);
        $this->Cell(40, 6, 'Capacity (MT)', 1, 0, 'C', true);
        $y += 6;
        
        $storageTypes = ['Chiller', 'Blast Chiller', 'Holding Freezer', 'Other Cold Storage Use'];
        
        foreach ($storageTypes as $type) {
            $this->SetFont('helvetica', '', 8);
            $this->SetXY(10, $y);
            $this->Cell(40, 6, $type, 1, 0, 'L');
            $this->Cell(40, 6, '', 1, 0, 'C');
            $this->Cell(40, 6, '', 1, 0, 'C');
            $this->Cell(40, 6, '', 1, 0, 'C');
            $y += 6;
        }
        
        $y += 5;
        
        // Horizontal line
        $this->Line(10, $y, 200, $y);
        $y += 5;
        
        // Section 16: Contract/Toll Processor
        $this->SetFont('helvetica', 'B', 9);
        $this->SetXY(10, $y);
        $this->Cell(0, 5, '16. Contract/Toll Processor', 0, 1, 'L');
        $y += 8;
        
        $contractFields = [
            'Company Name:',
            'Address:',
            'Email address:',
            'Telephone/fax no.:'
        ];
        
        foreach ($contractFields as $field) {
            $this->SetFont('helvetica', '', 9);
            $this->SetXY(10, $y);
            $this->Cell(50, 4, $field, 0, 0, 'L');
            $this->Line(60, $y + 3, 195, $y + 3);
            $y += 6;
        }
        
        $y += 5;
        
        // Horizontal line
        $this->Line(10, $y, 200, $y);
        $y += 5;
        
        // Section 17: Present status of Labeling
        $this->SetFont('helvetica', 'B', 9);
        $this->SetXY(10, $y);
        $this->Cell(0, 5, '17. Present status of Labeling', 0, 1, 'L');
        $y += 8;
        
        $labelingQuestions = [
            'Are labeling/packaging materials provided to contract processor?',
            'Does the label indicate the contract toll processor?'
        ];
        
        foreach ($labelingQuestions as $question) {
            $this->SetFont('helvetica', '', 9);
            $this->SetXY(10, $y);
            $this->Cell(130, 4, $question, 0, 0, 'L');
            $this->createCheckboxField(150, $y, 20, 4, 'yes');
            $this->createCheckboxField(170, $y, 20, 4, 'no');
            $y += 6;
        }
        
        $y += 5;
        
        // Horizontal line
        $this->Line(10, $y, 200, $y);
        $y += 5;
        
        // Section 18: Payment
        $this->SetFont('helvetica', 'B', 9);
        $this->SetXY(10, $y);
        $this->Cell(0, 5, '18. Payment', 0, 1, 'L');
        $y += 8;
        
        // HACCP Certificate
        $this->SetFont('helvetica', 'B', 9);
        $this->SetXY(10, $y);
        $this->Cell(80, 5, 'HACCP Certificate', 0, 0, 'L');
        
        // LTO Certificate
        $this->SetXY(110, $y);
        $this->Cell(80, 5, 'LTO Certificate', 0, 0, 'L');
        $y += 8;
        
        $paymentFields = ['O.R No.:', 'Date issued:', 'Amount:'];
        
        foreach ($paymentFields as $field) {
            $this->SetFont('helvetica', '', 9);
            $this->SetXY(10, $y);
            $this->Cell(30, 4, $field, 0, 0, 'L');
            $this->Line(40, $y + 3, 95, $y + 3);
            
            $this->SetXY(110, $y);
            $this->Cell(30, 4, $field, 0, 0, 'L');
            $this->Line(140, $y + 3, 195, $y + 3);
            $y += 6;
        }
        
        $y += 5;
        
        // Delivery options
        $this->SetFont('helvetica', '', 9);
        $this->SetXY(10, $y);
        $this->MultiCell(180, 4, 'Please check (✓) appropriate box of your preferred option for receipt or delivery of LTO certificate', 0, 'L');
        $y += 8;
        
        $this->createCheckboxField(10, $y, 30, 4, 'Pick up');
        $this->SetXY(45, $y);
        $this->Cell(20, 4, '____CO', 0, 0, 'L');
        $this->SetXY(45, $y + 4);
        $this->Cell(20, 4, '____RTOC', 0, 0, 'L');
        
        $this->createCheckboxField(80, $y, 40, 4, 'Registered Mail');
        $this->SetFont('helvetica', 'I', 8);
        $this->SetXY(80, $y + 4);
        $this->Cell(60, 4, 'May be receive after 7 days (minimum) upon mailing.', 0, 0, 'L');
        
        $this->createCheckboxField(150, $y, 30, 4, 'Courier');
        $this->SetXY(150, $y + 4);
        $this->Cell(60, 4, 'May be receive after 3 days (minimum) upon mailing.', 0, 0, 'L');
        
        $y += 15;
        
        // Certification text
        $this->SetFont('helvetica', 'B', 9);
        $this->SetXY(10, $y);
        $this->MultiCell(180, 4, 'I hereby certify that the above statements are true and correct to the best of my knowledge and documentary requirements submitted are complete and updated. (Please attached photocopy (back-to-back) valid Company I.D)', 0, 'L');
        $y += 15;
        
        $this->SetFont('helvetica', '', 9);
        $this->SetXY(10, $y);
        $this->MultiCell(180, 4, 'By signing below, I am authorizing the NMIS to collect, processed and stored our data in accordance with the requirement of Republic Act 10173 (Data Privacy Act of 2012). I am also giving them consent to post to their website the information of our company as specified herewith; Name, Address, Number and Expiration Date of the License to Operate (LTO).', 0, 'L');
        $y += 20;
        
        // Date Signed
        $this->SetFont('helvetica', '', 9);
        $this->SetXY(10, $y);
        $this->Cell(40, 4, 'Date Signed:', 0, 0, 'L');
        $this->Line(50, $y + 3, 100, $y + 3);
        $y += 15;
        
        // Signature section
        $this->Line(10, $y, 90, $y);
        $this->Line(110, $y, 190, $y);
        $this->SetXY(10, $y + 2);
        $this->Cell(80, 4, 'Name and Signature of applicant', 0, 0, 'C');
        $this->SetXY(110, $y + 2);
        $this->Cell(80, 4, 'Position/Designation', 0, 0, 'C');
        
        $y += 15;
        
        // NMIS section
        $this->SetFont('helvetica', 'I', 9);
        $this->SetXY(10, $y);
        $this->Cell(0, 5, '(This portion is to be filled-out by NMIS Authorized Representative)', 0, 1, 'C');
        $y += 10;
        
        $this->SetFont('helvetica', '', 9);
        $this->SetXY(10, $y);
        $this->Cell(50, 4, 'Date of Application:', 0, 0, 'L');
        $this->Line(60, $y + 3, 110, $y + 3);
        
        $this->Line(130, $y + 3, 190, $y + 3);
        $this->SetXY(130, $y + 5);
        $this->Cell(60, 4, '(Signature over printed name)', 0, 0, 'C');
    }
}

// Create PDF
$pdf = new NMISApplicationForm(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// Set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('NMIS');
$pdf->SetTitle('NMIS Application Form for Meat Cutting Plant');
$pdf->SetSubject('License to Operate Application');

// Set default header data
$pdf->SetHeaderData('', 0, '', '');

// Set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// Set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// Set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// Set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// Set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// Add first page
$pdf->AddPage();

// Create form content
$pdf->createFormHeader();
$pdf->createInstructions();
$pdf->createMainForm();
$pdf->createSourceAndDestination();

// Add second page
$pdf->createPage2();

// Output PDF
$pdf->Output('NMIS_Application_Form.pdf', 'I');
?>