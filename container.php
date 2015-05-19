<?php

$container = array(

	1 => array( 
 		'ID' => '001',
 		'Poid_Max' => '3',
 		'Poid_Reel' => '1',
 		'Type_Contenu' => 'Plastique',
),


	2 => array( 
 		'ID' => '002',
 		'Poid_Max' => '5',
 		'Poid_Reel' => '2',
 		'Type_Contenu' => 'Alu',
),


	3 => array( 
 		'ID' => '003',
 		'Poid_Max' => '2',
 		'Poid_Reel' => '1',
 		'Type_Contenu' => 'Verre',
),


	4 => array( 
 		'ID' => '004',
 		'Poid_Max' => '8',
 		'Poid_Reel' => '4',
 		'Type_Contenu' => 'Carton',
),


	5 => array( 
 		'ID' => '005',
 		'Poid_Max' => '3',
 		'Poid_Reel' => '2',
 		'Type_Contenu' => 'Organique',
),


	6 => array( 
 		'ID' => '006',
 		'Poid_Max' => '4',
 		'Poid_Reel' => '3',
 		'Type_Contenu' => 'Alu',
),
);

echo "Evaluation Maxime Butin";

function Pourcentage($Poid_Reel, $Poid_Max) {
$pourcent = $Poid_Reel * 100 / $Poid_Max;
$pourcent = ceil($pourcent).'%';
return $pourcent;
}
?>

<table>
		<tr>
			<th>Identifiant</th>	
			<th>Poids Max</th>	
			<th>Poids Reel</th>		
			<th>Type de contenu</th>
			<th>Taux</th>	
		</tr>
		<?php foreach ($container as $key => $value) { ?>
			<td><?php echo $value ["ID"];?></td>
			<td><?php echo $value ["Poid_Max"];?> </td>
			<td><?php echo $value ["Poid_Reel"];?></td>
			<td><?php echo $value ["Type_Contenu"];?></td>
			<td><?php echo Pourcentage ($value ["Poid_Reel"], $value ["Poid_Max"]);?></td>
		</tr>

<?php }
?>
</table>