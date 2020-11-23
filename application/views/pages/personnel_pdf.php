<?php
//============================================================+
// File name   : example_001.php
// Begin       : 2008-03-04
// Last Update : 2013-05-14
//
// Description : Example 001 for TCPDF class
//               Default Header and Footer
//
// Author: Nicola Asuni
//
// (c) Copyright:
//               Nicola Asuni
//               Tecnick.com LTD
//               www.tecnick.com
//               info@tecnick.com
//============================================================+

/**
 * Creates an example PDF TEST document using TCPDF
 * @package com.tecnick.tcpdf
 * @abstract TCPDF - Example: Default Header and Footer
 * @author Nicola Asuni
 * @since 2008-03-04
 */

// Include the main TCPDF library (search for installation path).
//require_once('tcpdf_include.php');

// create new PDF document
$pdf = new TCPDF('P','mm','A4');

// remove set default header data
$pdf->SetPrintHeader(false);
$pdf->SetPrintFooter(false);


$pdf->AddPage();

$logo = $pdf->Image(LOGO_MENETP, 80, 11, 32);


$pdf->SetFont('times', '', 10);


$htmlLogo = <<<EOD
<br><br><br><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
REPOBLIKAN'I MADAGASIKARA<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Fitiavana-Tanindrazana-Fandrosoana<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;
-----------
EOD;

$pdf->writeHTMLCell(0,0,'','',$htmlLogo,0,1,0,true,'',true);

$pdf->SetFont('times', '', 9);
foreach ($data as $infos ) {

$html =" 
<div>

<br><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;
  MINISTERE DE L'EDUCATION <br>
&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;
NATIONALE ET DE L'ENSEIGNEMENT <br>
&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;
TECHNIQUE ET PROFESSIONNEL 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;
----------
 <br>
&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;
SECRETARIAT GENERAL <br>
&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;
---------- <br>
&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;
DIRECTION DES TECHNOLOGIES <br>
&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;
 DE L'INFORMATION ET DE LA <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;
COMMUNICATION
&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;
---------- <br>
";
}
$pdf->writeHTMLCell(0,0,'','',$html,0,1,0,true,'',true);

$pdf->SetFont('times', '', 9);
$tete =<<<EOD
<br><br>
LISTE DE PERSONNEL DE LA DTIC <br>

EOD;
$pdf->writeHTMLCell(0,0,'','',$tete,0,1,0,true,'',true);
$table ='<table style="border:0.2 solid #000; padding: 6px;margin-left: -15%;">';
$table .='
<tr>
<th style="border: 0.1px solid #000; width: 9%;">Matricule</th>
<th style="border: 0.1px solid #000;width: 23%;">Nom et Prénom(s)</th>
<th style="border: 0.1px solid #000;">Corps</th>
<th style="border: 0.1px solid #000;width: 8%;">Grade</th>
<th style="border: 0.1px solid #000;width: 9%;">Direction</th>
<th style="border: 0.1px solid #000;width: 14%;">Lieu de Service</th>
<th style="border: 0.1px solid #000">Budget</th>
<th style="border: 0.1px solid #000">Chapitre Budgetaire</th>
</tr>';
$nbr = 0;
foreach ($data as $x) {
$table .='
<tr>
<td style="border: 0.1px solid #000">'.$x->im_perso.'</td>
<td style="border: 0.1px solid #000">'.$x->nomPre_perso.'</td>
<td style="border: 0.1px solid #000">'.$x->corps_perso.'</td>
<td style="border: 0.1px solid #000">'.$x->grade_perso.'</td>
<td style="border: 0.1px solid #000">'.$x->direction_perso.'</td>
<td style="border: 0.1px solid #000">'.$x->lieuService_perso.'</td>
<td style="border: 0.1px solid #000">'.$x->budget_perso.'</td>
<td style="border: 0.1px solid #000">'.$x->chapitreBudget_perso.'</td>
</tr>
';
$nbr++;
}
$table .='
<br>
Le nombre de personnel sont : '.$nbr.'.
</table>';
$pdf->writeHTMLCell(0,0,'','',$table,0,1,0,true,'',true);
// Add a page
// This method has several options, check the source code documentation for more information.
// Set some content to print
$pdf->Image('2019.jpg', 50, 140, 100, '', '', '', '', false, 300, '', true);
// ---------------------------------------------------------

// Close and output PDF document
// This method has several options, check the source code documentation for more information.
$pdf->Output('listePersonnel.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
