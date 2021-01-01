
<?php

require_once('fpdf.php');
$pdf = new FPDF();
$pdf->AliasNbPages();
$pdf->AddPage();
//$pdf->header();	
$pdf->SetFont('Arial','B',10);
$pdf->Cell(5);
$pdf->Cell(0, 1, 'Tunis, Tunisie');
$pdf->Ln(8);
$pdf->Cell(5);
$pdf->Cell(0, 1, 'Telephone: 71234567');
$pdf->Cell(-60);
$pdf->Cell(0, 1, 'Date:',5);
//$pdf->Write($h, "Merci d'avoir choisi FitHub pour nos services \n");
$pdf->Ln(18);
$pdf->Cell(5);
$pdf->SetFont('Arial','B',12);
$pdf->Write(5,'Infos aditionnelles: ');
$pdf->Ln(5);
$pdf->Cell(5);
$pdf->SetFont('Arial','',9);
$pdf->Write(5,"Merci d'avoir choisi FitHub pour nos services. Service apres vente: Garantie 1 an.");

function entete_table($position_entete) {
	global $pdf;
	$pdf->SetDrawColor(183); // Couleur du fond RVB
	$pdf->SetFillColor(221); // Couleur des filets RVB
	$pdf->SetTextColor(0); // Couleur du texte noir
	$pdf->SetY($position_entete);
	// position de colonne 1 (10mm à gauche)	
	$pdf->SetX(10);
	$pdf->Cell(60,8,'Produit',1,0,'C',1);	// 60 >largeur colonne, 8 >hauteur colonne
	// position de la colonne 2 (70 = 10+60)
	$pdf->SetX(70); 
	$pdf->Cell(60,8,'Quantite',1,0,'C',1);
	// position de la colonne 3 (130 = 70+60)
	$pdf->SetX(130); 
	$pdf->Cell(30,8,'Prix',1,0,'C',1);

	$pdf->Ln(); // Retour à la ligne
}

$position_entete = 70;
// police des caractères
$pdf->SetFont('Helvetica','',9);
$pdf->SetTextColor(0);
// on affiche les en-têtes du tableau
entete_table($position_entete);
$position_detail = 78; // Position ordonnée = $position_entete+hauteur de la cellule d'en-tête (60+8)

	// position abcisse de la colonne 1 (10mm du bord)
	$pdf->SetY($position_detail);
	$pdf->SetX(10);
	$pdf->MultiCell(60,8,"bonj",1,'C');
    // position abcisse de la colonne 2 (70 = 10 + 60)	
	$pdf->SetY($position_detail);
	$pdf->SetX(70); 
	$pdf->MultiCell(60,8,"our",1,'C');
	// position abcisse de la colonne 3 (130 = 70+ 60)
	$pdf->SetY($position_detail);
	$pdf->SetX(130); 
	$pdf->MultiCell(30,8,"lol",1,'C');

	// on incrémente la position ordonnée de la ligne suivante (+8mm = hauteur des cellules)	
	$position_detail += 8; 




$pdf->Output();
$pdf->footer();
?>