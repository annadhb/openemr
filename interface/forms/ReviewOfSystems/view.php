<?php
include_once("../../globals.php");
$returnurl = $GLOBALS['concurrent_layout'] ? 'encounter_top.php' : 'patient_encounter.php';
?>
<html><head>
<?php html_header_show();?>
<link rel="stylesheet" href="<?php echo $css_header;?>" type="text/css">
</head>
<body class="body_top">
<?php
include_once("$srcdir/api.inc");
$obj = formFetch("form_ReviewOfSystems", $_GET["id"]);
?>
<form method=post action="<?php echo $rootdir?>/forms/ReviewOfSystems/save.php?mode=update&id=<?php echo $_GET["id"];?>"
 name="my_form" onsubmit="return top.restoreSession()">
<span class="title"><?php xl('Review Of Systems','e'); ?></span><Br><br>

<table>
<tr>
<td valign=top>
<span class=bold><?php xl('Constitutional','e'); ?></span><br>
<input type=checkbox name="constitution__fatigue"  <?php if ($obj{"constitution__fatigue"} == "on") {echo "checked";};?>><span class=text><?php xl('fatigue','e'); ?></span><br>
<input type=checkbox name="constitution__weight_Change"  <?php if ($obj{"constitution__weight_Change"} == "on") {echo "checked";};?>><span class=text><?php xl('weight change','e'); ?></span><br>

<span class=bold><?php xl('Skin','e'); ?></span><br>
<input type=checkbox name="skin__rash"  <?php if ($obj{"skin__rash"} == "on") {echo "checked";};?>><span class=text><?php xl('rash','e'); ?></span><br>
<input type=checkbox name="skin__itching"  <?php if ($obj{"skin__itching"} == "on") {echo "checked";};?>><span class=text><?php xl('itching','e'); ?></span><br>
<input type=checkbox name="skin__pain"  <?php if ($obj{"skin__pain"} == "on") {echo "checked";};?>><span class=text><?php xl('pain','e'); ?></span><br>
<input type=checkbox name="skin__lesions"  <?php if ($obj{"skin__lesions"} == "on") {echo "checked";};?>><span class=text><?php xl('lesions','e'); ?></span><br>

<span class=bold><?php xl('EENT','e'); ?></span><br>
<input type=checkbox name="eent__vision_Change"  <?php if ($obj{"eent__vision_Change"} == "on") {echo "checked";};?>><span class=text><?php xl('vision change','e'); ?></span><br>
<input type=checkbox name="eent__hearing_Loss"  <?php if ($obj{"eent__hearing_Loss"} == "on") {echo "checked";};?>><span class=text><?php xl('hearing loss','e'); ?></span><br>
<input type=checkbox name="eent__hoarseness"  <?php if ($obj{"eent__hoarseness"} == "on") {echo "checked";};?>><span class=text><?php xl('hoarseness','e'); ?></span><br>
<input type=checkbox name="eent__dysphagia"  <?php if ($obj{"eent__dysphagia"} == "on") {echo "checked";};?>><span class=text><?php xl('dysphagia','e'); ?></span><br>

</td>
<td valign=top>

<span class=bold><?php xl('Breast','e'); ?></span><br>
<input type=checkbox name="breast__pain"  <?php if ($obj{"breast__pain"} == "on") {echo "checked";};?>><span class=text><?php xl('pain','e'); ?></span><br>
<input type=checkbox name="breast__discharge"  <?php if ($obj{"breast__discharge"} == "on") {echo "checked";};?>><span class=text><?php xl('discharge','e'); ?></span><br>
<input type=checkbox name="breast__mass"  <?php if ($obj{"breast__mass"} == "on") {echo "checked";};?>><span class=text><?php xl('mass','e'); ?></span><br>


<span class=bold><?php xl('Cardiovascular','e'); ?></span><br>
<input type=checkbox name="Cardiovascular__palpitations"  <?php if ($obj{"Cardiovascular__palpitations"} == "on") {echo "checked";};?>><span class=text><?php xl('palpitations','e'); ?></span><br>
<input type=checkbox name="Cardiovascular__chest_pain"  <?php if ($obj{"Cardiovascular__chest_pain"} == "on") {echo "checked";};?>><span class=text><?php xl('chest pain','e'); ?></span><br>

<span class=bold><?php xl('Respiratory','e'); ?></span><br>
<input type=checkbox name="Respiratory__shortness_of_breath"  <?php if ($obj{"Respiratory__shortness_of_breath"} == "on") {echo "checked";};?>><span class=text><?php xl('shortness of breath','e'); ?></span><br>
<input type=checkbox name="Respiratory__wheezing"  <?php if ($obj{"Respiratory__wheezing"} == "on") {echo "checked";};?>><span class=text><?php xl('wheezing','e'); ?></span><br>
<input type=checkbox name="Respiratory__cough"  <?php if ($obj{"Respiratory__cough"} == "on") {echo "checked";};?>><span class=text><?php xl('cough','e'); ?></span><br>
<input type=checkbox name="Respiratory__pleuritic_Pain"  <?php if ($obj{"Respiratory__pleuritic_Pain"} == "on") {echo "checked";};?>><span class=text><?php xl('pleuritic pain','e'); ?></span><br>

</td>
<td valign=top>

<span class=bold><?php xl('Gastrointestinal','e'); ?></span><br>
<input type=checkbox name="Gastrointestinal__pain"  <?php if ($obj{"Gastrointestinal__pain"} == "on") {echo "checked";};?>><span class=text><?php xl('pain','e'); ?></span><br>
<input type=checkbox name="Gastrointestinal__nausea"  <?php if ($obj{"Gastrointestinal__nausea"} == "on") {echo "checked";};?>><span class=text><?php xl('nausea','e'); ?></span><br>
<input type=checkbox name="Gastrointestinal__vomiting"  <?php if ($obj{"Gastrointestinal__vomiting"} == "on") {echo "checked";};?>><span class=text><?php xl('vomiting','e'); ?></span><br>
<input type=checkbox name="Gastrointestinal__diarrhea"  <?php if ($obj{"Gastrointestinal__diarrhea"} == "on") {echo "checked";};?>><span class=text><?php xl('diarrhea','e'); ?></span><br>
<input type=checkbox name="Gastrointestinal__constipation"  <?php if ($obj{"Gastrointestinal__constipation"} == "on") {echo "checked";};?>><span class=text><?php xl('constipation','e'); ?></span><br>
<input type=checkbox name="Gastrointestinal__bleeding"  <?php if ($obj{"Gastrointestinal__bleeding"} == "on") {echo "checked";};?>><span class=text><?php xl('bleeding','e'); ?></span><br>

</td>
<td valign=top>

<span class=bold><?php xl('Genitourinary','e'); ?></span><br>
<input type=checkbox name="Genitourinary__dysuria"  <?php if ($obj{"Genitourinary__dysuria"} == "on") {echo "checked";};?>><span class=text><?php xl('dysuria','e'); ?></span><br>
<input type=checkbox name="Genitourinary__frequency"  <?php if ($obj{"Genitourinary__frequency"} == "on") {echo "checked";};?>><span class=text><?php xl('frequency','e'); ?></span><br>
<input type=checkbox name="Genitourinary__incontinence"  <?php if ($obj{"Genitourinary__incontinence"} == "on") {echo "checked";};?>><span class=text><?php xl('incontinence','e'); ?></span><br>
<input type=checkbox name="Genitourinary__hematuria"  <?php if ($obj{"Genitourinary__hematuria"} == "on") {echo "checked";};?>><span class=text><?php xl('hematuria','e'); ?></span><br>
<input type=checkbox name="Genitourinary__discharge"  <?php if ($obj{"Genitourinary__discharge"} == "on") {echo "checked";};?>><span class=text><?php xl('discharge','e'); ?></span><br>
<input type=checkbox name="Genitourinary__itching"  <?php if ($obj{"Genitourinary__itching"} == "on") {echo "checked";};?>><span class=text><?php xl('itching','e'); ?></span><br>
<input type=checkbox name="Genitourinary__odor"  <?php if ($obj{"Genitourinary__odor"} == "on") {echo "checked";};?>><span class=text><?php xl('odor','e'); ?></span><br>
<input type=checkbox name="Genitourinary__burning"  <?php if ($obj{"Genitourinary__burning"} == "on") {echo "checked";};?>><span class=text><?php xl('burning','e'); ?></span><br>
<input type=checkbox name="Genitourinary__irregular_Vaginal_Bleeding"  <?php if ($obj{"Genitourinary__irregular_Vaginal_Bleeding"} == "on") {echo "checked";};?>><span class=text><?php xl('irregular vaginal bleeding','e'); ?></span><br>
<input type=checkbox name="Genitourinary__Pain_Or_Bleeding_After_Sex"  <?php if ($obj{"Genitourinary__Pain_Or_Bleeding_After_Sex"} == "on") {echo "checked";};?>><span class=text><?php xl('pain or bleeding after sex','e'); ?></span><br>

</td>
<td valign=top>

<span class=bold><?php xl('Musculoskeletal','e'); ?></span><br>
<input type=checkbox name="Musculoskeletal__pain"  <?php if ($obj{"Musculoskeletal__pain"} == "on") {echo "checked";};?>><span class=text><?php xl('pain','e'); ?></span><br>
<input type=checkbox name="Musculoskeletal__swelling"  <?php if ($obj{"Musculoskeletal__swelling"} == "on") {echo "checked";};?>><span class=text><?php xl('swelling','e'); ?></span><br>
<input type=checkbox name="Musculoskeletal__tenderness"  <?php if ($obj{"Musculoskeletal__tenderness"} == "on") {echo "checked";};?>><span class=text><?php xl('tenderness','e'); ?></span><br>

<span class=bold><?php xl('Neurological','e'); ?></span><br>
<input type=checkbox name="Neurological__weakness"  <?php if ($obj{"Neurological__weakness"} == "on") {echo "checked";};?>><span class=text><?php xl('weakness','e'); ?></span><br>
<input type=checkbox name="Neurological__numbness"  <?php if ($obj{"Neurological__numbness"} == "on") {echo "checked";};?>><span class=text><?php xl('numbness','e'); ?></span><br>
<input type=checkbox name="Neurological__tingling"  <?php if ($obj{"Neurological__tingling"} == "on") {echo "checked";};?>><span class=text><?php xl('tingling','e'); ?></span><br>
<input type=checkbox name="Neurological__headache"  <?php if ($obj{"Neurological__headache"} == "on") {echo "checked";};?>><span class=text><?php xl('headache','e'); ?></span><br>
<input type=checkbox name="Neurological__siezure"  <?php if ($obj{"Neurological__siezure"} == "on") {echo "checked";};?>><span class=text><?php xl('siezure','e'); ?></span><br>

</td>
<td valign=top>

<span class=bold><?php xl('Psychological','e'); ?></span><br>
<input type=checkbox name="Psychological__mood"  <?php if ($obj{"Psychological__mood"} == "on") {echo "checked";};?>><span class=text><?php xl('mood','e'); ?></span><br>
<input type=checkbox name="Psychological__insomnia"  <?php if ($obj{"Psychological__insomnia"} == "on") {echo "checked";};?>><span class=text><?php xl('insomnia','e'); ?></span><br>
<input type=checkbox name="Psychological__crying"  <?php if ($obj{"Psychological__crying"} == "on") {echo "checked";};?>><span class=text><?php xl('crying','e'); ?></span><br>
<input type=checkbox name="Psychological__irritability"  <?php if ($obj{"Psychological__irritability"} == "on") {echo "checked";};?>><span class=text><?php xl('irritability','e'); ?></span><br>
<input type=checkbox name="Psychological__disordered_Thinking"  <?php if ($obj{"Psychological__disorderedThinking"} == "on") {echo "checked";};?>><span class=text><?php xl('disordered thinking','e'); ?></span><br>
<input type=checkbox name="Psychological__depression"  <?php if ($obj{"Psychological__depression"} == "on") {echo "checked";};?>><span class=text><?php xl('depression','e'); ?></span><br>


<span class=bold><?php xl('Endocrine','e'); ?></span><br>
<input type=checkbox name="Endocrine__polyuria"  <?php if ($obj{"Endocrine__polyuria"} == "on") {echo "checked";};?>><span class=text><?php xl('polyuria','e'); ?></span><br>
<input type=checkbox name="Endocrine__polydipsia"  <?php if ($obj{"Endocrine__polydipsia"} == "on") {echo "checked";};?>><span class=text><?php xl('polydipsia','e'); ?></span><br>
<input type=checkbox name="Endocrine__sweats"  <?php if ($obj{"Endocrine__sweats"} == "on") {echo "checked";};?>><span class=text><?php xl('sweats','e'); ?></span><br>
<input type=checkbox name="Endocrine__weight_Change"  <?php if ($obj{"Endocrine__weight_Change"} == "on") {echo "checked";};?>><span class=text><?php xl('weight change','e'); ?></span><br>

</td>
<td valign=top>

<span class=bold><?php xl('Family History','e'); ?></span><br>
<input type=checkbox name="Family_History__breast_Cancer"  <?php if ($obj{"Family_History__breast_Cancer"} == "on") {echo "checked";};?>><span class=text><?php xl('breast cancer','e'); ?></span><br>
<input type=checkbox name="Family_History__ovarian_Cancer"  <?php if ($obj{"Family_History__ovarian_Cancer"} == "on") {echo "checked";};?>><span class=text><?php xl('ovarian cancer','e'); ?></span><br>
<input type=checkbox name="Family_History__prostat_eCancer"  <?php if ($obj{"Family_History__prostate_Cancer"} == "on") {echo "checked";};?>><span class=text><?php xl('prostate cancer','e'); ?></span><br>
<input type=checkbox name="Family_History__colon_Cancer"  <?php if ($obj{"Family_History__colon_Cancer"} == "on") {echo "checked";};?>><span class=text><?php xl('colon cancer','e'); ?></span><br>

</td>
</tr>
</table>

<span class=text><?php xl('Additional Notes: ','e'); ?></span><br><textarea cols=40 rows=8 wrap=virtual name="additional_notes" ><?php echo $obj{"additional_notes"};?></textarea><br>
<br>
<a href="javascript:top.restoreSession();document.my_form.submit();" class="link_submit">[<?php xl('Save','e'); ?>]</a>
<br>
<a href="<?php echo "$rootdir/patient_file/encounter/$returnurl";?>" class="link"
 onclick="top.restoreSession()">[<?php xl('Don\'t Save Changes','e'); ?>]</a>
</form>
<?php
formFooter();
?>
