
<?php
include_once("../../globals.php");
include_once("$srcdir/api.inc");
formHeader("Form: ReviewOfSymptoms");
$returnurl = $GLOBALS['concurrent_layout'] ? 'encounter_top.php' : 'patient_encounter.php';
?>
<html><head>
<?php html_header_show();?>
<link rel="stylesheet" href="<?php echo $css_header;?>" type="text/css">
</head>
<body class="body_top">
<form method=post action="<?php echo $rootdir;?>/forms/ReviewOfSystems/save.php?mode=new"
 name="my_form" onsubmit="return top.restoreSession()">
<span class="title"><?php xl('Review of Systems','e'); ?></span><br><br>

<table><tr><td valign=top>

<span class=bold><?php xl('Constitutional','e'); ?></span><br>
<input type=checkbox name='const__fatigue'  ><span class=text><?php xl('fatigue','e'); ?></span><br>
<input type=checkbox name='const__weight_Change'  ><span class=text><?php xl('weight change','e'); ?></span><br>

<span class=bold><?php xl('Skin','e'); ?></span><br>

<input type=checkbox name='skin__rash'  ><span class=text><?php xl('rash','e'); ?></span><br>
<input type=checkbox name='skin__itching'  ><span class=text><?php xl('itching','e'); ?></span><br>
<input type=checkbox name='skin__pain'  ><span class=text><?php xl('pain','e'); ?></span><br>
<input type=checkbox name='skin__lesions'  ><span class=text><?php xl('lesions','e'); ?></span><br>

<span class=bold><?php xl('EENT','e'); ?></span><br>

<input type=checkbox name='eent__vision_Change'  ><span class=text><?php xl('vision change','e'); ?></span><br>
<input type=checkbox name='eent__hearing_Loss'  ><span class=text><?php xl('hearing loss','e'); ?></span><br>
<input type=checkbox name='eent__hoarseness'  ><span class=text><?php xl('hoarseness','e'); ?></span><br>
<input type=checkbox name='eent__dysphagia'  ><span class=text><?php xl('dysphagia','e'); ?></span><br>

</td><td valign=top>

<span class=bold><?php xl('Breast','e'); ?></span><br>

<input type=checkbox name='breast__pain'  ><span class=text><?php xl('pain','e'); ?></span><br>
<input type=checkbox name='breast__discharge'  ><span class=text><?php xl('discharge','e'); ?></span><br>
<input type=checkbox name='breast__mass'  ><span class=text><?php xl('mass','e'); ?></span><br>


<span class=bold><?php xl('Cardiovascular','e'); ?></span><br>

<input type=checkbox name='cardiovascular__palpitations'  ><span class=text><?php xl('palpitations','e'); ?></span><br>
<input type=checkbox name='cardiovascular__chest_pain'  ><span class=text><?php xl('chest pain','e'); ?></span><br>

<span class=bold><?php xl('Respiratory','e'); ?></span><br>

<input type=checkbox name='respiratory__shortness_of_breath'  ><span class=text><?php xl('sob','e'); ?></span><br>
<input type=checkbox name='respiratory__wheezing'  ><span class=text><?php xl('wheezing','e'); ?></span><br>
<input type=checkbox name='respiratory__cough'  ><span class=text><?php xl('cough','e'); ?></span><br>
<input type=checkbox name='respiratory__pleuritic_Pain'  ><span class=text><?php xl('pleuritic pain','e'); ?></span><br>

</td><td valign=top>

<span class=bold><?php xl('Gastrointestinal','e'); ?></span><br>

<input type=checkbox name='Gastrointestinal__pain'  ><span class=text><?php xl('pain','e'); ?></span><br>
<input type=checkbox name='Gastrointestinal__nausea'  ><span class=text><?php xl('nausea','e'); ?></span><br>
<input type=checkbox name='Gastrointestinal__vomiting'  ><span class=text><?php xl('vomiting','e'); ?></span><br>
<input type=checkbox name='Gastrointestinal__diarrhea'  ><span class=text><?php xl('diarrhea','e'); ?></span><br>
<input type=checkbox name='Gastrointestinal__constipation'  ><span class=text><?php xl('constipation','e'); ?></span><br>
<input type=checkbox name='Gastrointestinal__bleeding'  ><span class=text><?php xl('bleeding','e'); ?></span><br>

</td><td valign=top>

<span class=bold><?php xl('Genitourinary','e'); ?></span><br>
<input type=checkbox name='Genitourinary__dysuria'  ><span class=text><?php xl('dysuria','e'); ?></span><br>
<input type=checkbox name='Genitourinary__frequency'  ><span class=text><?php xl('frequency','e'); ?></span><br>
<input type=checkbox name='Genitourinary__incontinence'  ><span class=text><?php xl('incontinence','e'); ?></span><br>
<input type=checkbox name='Genitourinary__hematuria'  ><span class=text><?php xl('hematuria','e'); ?></span><br>
<input type=checkbox name='Genitourinary__discharge'  ><span class=text><?php xl('discharge','e'); ?></span><br>
<input type=checkbox name='Genitourinary__itching'  ><span class=text><?php xl('itching','e'); ?></span><br>
<input type=checkbox name='Genitourinary__odor'  ><span class=text><?php xl('odor','e'); ?></span><br>
<input type=checkbox name='Genitourinary__burning'  ><span class=text><?php xl('burning','e'); ?></span><br>
<input type=checkbox name='Genitourinary__irregular_Vaginal_Bleeding'  ><span class=text><?php xl('irregular vaginal bleeding','e'); ?></span><br>
<input type=checkbox name='Genitourinary__Pain_Or_Bleeding_After_Sex'  ><span class=text><?php xl('pain or bleeding after sex','e'); ?></span><br>

</td><td valign=top>

<span class=bold><?php xl('Musculoskeletal','e'); ?></span><br>
<input type=checkbox name='Musculoskeletal__pain'  ><span class=text><?php xl('pain','e'); ?></span><br>
<input type=checkbox name='Musculoskeletal__swelling'  ><span class=text><?php xl('swelling','e'); ?></span><br>
<input type=checkbox name='Musculoskeletal__tenderness'  ><span class=text><?php xl('tenderness','e'); ?></span><br>


<span class=bold><?php xl('Neurological','e'); ?></span><br>
<input type=checkbox name='Neurological__weakness'  ><span class=text><?php xl('weakness','e'); ?></span><br>
<input type=checkbox name='Neurological__numbness'  ><span class=text><?php xl('numbness','e'); ?></span><br>
<input type=checkbox name='Neurological__tingling'  ><span class=text><?php xl('tingling','e'); ?></span><br>
<input type=checkbox name='Neurological__headache'  ><span class=text><?php xl('headache','e'); ?></span><br>
<input type=checkbox name='Neurological__siezure'  ><span class=text><?php xl('siezure','e'); ?></span><br>

</td><td valign=top>

<span class=bold><?php xl('Psychological','e'); ?></span><br>
<input type=checkbox name='Psychological__mood'  ><span class=text><?php xl('mood','e'); ?></span><br>
<input type=checkbox name='Psychological__insomnia'  ><span class=text><?php xl('insomnia','e'); ?></span><br>
<input type=checkbox name='Psychological__crying'  ><span class=text><?php xl('crying','e'); ?></span><br>
<input type=checkbox name='Psychological__irritability'  ><span class=text><?php xl('irritability','e'); ?></span><br>
<input type=checkbox name='Psychological__disordered_Thinking'  ><span class=text><?php xl('disordered thinking','e'); ?></span><br>
<input type=checkbox name='Psychological__depression'  ><span class=text><?php xl('depression','e'); ?></span><br>


<span class=bold><?php xl('Endocrine','e'); ?></span><br>
<input type=checkbox name='Endocrine__polyuria'  ><span class=text><?php xl('polyuria','e'); ?></span><br>
<input type=checkbox name='Endocrine__polydipsia'  ><span class=text><?php xl('polydipsia','e'); ?></span><br>
<input type=checkbox name='Endocrine__sweats'  ><span class=text><?php xl('sweats','e'); ?></span><br>
<input type=checkbox name='Endocrine__weightChange'  ><span class=text><?php xl('weight change','e'); ?></span><br>

</td><td valign=top>

<span class=bold><?php xl('Family History','e'); ?></span><br>
<input type=checkbox name='Family_History__breast_Cancer'  ><span class=text><?php xl('breast cancer','e'); ?></span><br>
<input type=checkbox name='Family_History__ovarian_Cancer'  ><span class=text><?php xl('ovarian cancer','e'); ?></span><br>
<input type=checkbox name='Family_History__prostate_Cancer'  ><span class=text><?php xl('prostate cancer','e'); ?></span><br>
<input type=checkbox name='Family_History__colon_Cancer'  ><span class=text><?php xl('colon cancer','e'); ?></span><br>

</td>
</tr>
</table>

<span class=text><?php xl('Additional Notes: ','e'); ?></span><br><textarea cols=40 rows=8 wrap=virtual name="additional_notes" ></textarea><br>
<br>
<a href="javascript:top.restoreSession();document.my_form.submit();" class="link_submit">[<?php xl('Save','e');?>]</a>
<br>
<a href="<?php echo "$rootdir/patient_file/encounter/$returnurl";?>" class="link"
 onclick="top.restoreSession()">[<?php xl('Don\'t Save','e');?>]</a>
</form>
<?php
formFooter();
?>
