<?php
/*

* script to save Review of Systems Form
*
*/ 
include_once("../../globals.php");
include_once("$srcdir/api.inc");
include_once("$srcdir/forms.inc");
foreach ($_POST as $k => $var) {
$_POST[$k] = add_escape_custom($var);
echo attr($var);
echo "\n";
}
if ($encounter == "")
$encounter = date("Ymd");
if ($_GET["mode"] == "new"){
$newid = formSubmit("form_ReviewOfSystems", $_POST, $_GET["id"], $userauthorized);
addForm($encounter, "Review of Systems", $newid, "ReviewOfSystems", $pid, $userauthorized);
}elseif ($_GET["mode"] == "update") {
sqlInsert("update form_ReviewOfSystems set pid = {$_SESSION["pid"]}
, groupname='".$_SESSION["authProvider"]."',user='".$_SESSION["authUser"]."',authorized=$userauthorized,activity=1, date = NOW()
, constitution__fatigue ='".$_POST["constitution__fatigue"]."'
, constitution__weight_Change ='".$_POST["constitution__weight_Change"]."'
, skin__rash ='".$_POST["skin__rash"]."'
, skin__itching ='".$_POST["skin__itching"]."'
, skin__pain ='".$_POST["skin__pain"]."'
, skin__lesions ='".$_POST["skin__lesions"]."'
, eent__vision_Change ='".$_POST["eent__vision_Change"]."'
, eent__hearing_Loss ='".$_POST["eent__hearing_Loss"]."'
, eent__hoarseness ='".$_POST["eent__hoarseness"]."'
, eent__dysphagia ='".$_POST["eent__dysphagia"]."'
, breast__pain ='".$_POST["breast__pain"]."'
, breast__discharge ='".$_POST["breast__discharge"]."'
, breast__mass ='".$_POST["breast__mass"]."'
, cardiovascular__palpitations ='".$_POST["cardiovascular__palpitations"]."'
, cardiovascular__chest_pain ='".$_POST["cardiovascular__chest_pain"]."'
, respiratory__shortness_of_breath ='".$_POST["respiratory__shortness_of_breath"]."'
, respiratory__wheezing ='".$_POST["respiratory__wheezing"]."'
, respiratory__cough ='".$_POST["respiratory__cough"]."'
, respiratory__pleuritic_Pain ='".$_POST["respiratory__pleuritic_Pain"]."'
, Gastrointestinal__pain ='".$_POST["Gastrointestinal__pain"]."'
, Gastrointestinal__nausea ='".$_POST["Gastrointestinal__nausea"]."'
, Gastrointestinal__vomiting ='".$_POST["Gastrointestinal__vomiting"]."'
, Gastrointestinal__diarrhea ='".$_POST["Gastrointestinal__diarrhea"]."'
, Gastrointestinal__constipation ='".$_POST["Gastrointestinal__constipation"]."'
, Gastrointestinal__bleeding ='".$_POST["Gastrointestinal__bleeding"]."'
, Genitourinary__dysuria ='".$_POST["Genitourinary__dysuria"]."'
, Genitourinary__frequency ='".$_POST["Genitourinary__frequency"]."'
, Genitourinary__incontinence ='".$_POST["Genitourinary__incontinence"]."'
, Genitourinary__hematuria ='".$_POST["Genitourinary__hematuria"]."'
, Genitourinary__discharge ='".$_POST["Genitourinary__discharge"]."'
, Genitourinary__itching ='".$_POST["Genitourinary__itching"]."'
, Genitourinary__odor ='".$_POST["Genitourinary__odor"]."'
, Genitourinary__burning ='".$_POST["Genitourinary__burning"]."'
, Genitourinary__irregular_Vaginal_Bleeding ='".$_POST["Genitourinary__irregular_Vaginal_Bleeding"]."'
, Genitourinary__Pain_Or_Bleeding_After_Sex ='".$_POST["Genitourinary__Pain_Or_Bleeding_After_Sex"]."'
, Musculoskeletal__pain ='".$_POST["Musculoskeletal__pain"]."'
, Musculoskeletal__swelling ='".$_POST["Musculoskeletal__swelling"]."'
, Musculoskeletal__tenderness ='".$_POST["Musculoskeletal__tenderness"]."'
, Neurological__weakness ='".$_POST["Neurological__weakness"]."'
, Neurological__numbness ='".$_POST["Neurological__numbness"]."'
, Neurological__tingling ='".$_POST["Neurological__tingling"]."'
, Neurological__dizziness ='".$_POST["Neurological__dizziness"]."'
, Neurological__headache ='".$_POST["Neurological__headache"]."'
, Neurological__siezure ='".$_POST["Neurological__siezure"]."'
, Psychological__mood ='".$_POST["Psychological__mood"]."'
, Psychological__insomnia ='".$_POST["Psychological__insomnia"]."'
, Psychological__crying ='".$_POST["Psychological__crying"]."'
, Psychological__irritability ='".$_POST["Psychological__irritability"]."'
, Psychological__disordered_Thinking ='".$_POST["Psychological__disordered_Thinking"]."'
, Psychological__depression ='".$_POST["Psychological__depression"]."'
, Endocrine__polyuria ='".$_POST["Endocrine__polyuria"]."'
, Endocrine__polydipsia ='".$_POST["Endocrine__polydipsia"]."'
, Endocrine__sweats ='".$_POST["Endocrine__sweats"]."'
, Endocrine__weight_Change ='".$_POST["Endocrine__weight_Change"]."'
, Family_History__breast_Cancer ='".$_POST["Family_History__breast_Cancer"]."'
, Family_History__ovarian_Cancer ='".$_POST["Family_History__ovarian_Cancer"]."'
, Family_History__prostate_Cancer ='".$_POST["Family_History__prostate_Cancer"]."'
, Family_History__colon_Cancer ='".$_POST["Family_History__colon_Cancer"]."'
, additional_notes='".$_POST["additional_notes"]."' where id=$id");
}
$_SESSION["encounter"] = $encounter;
formHeader("Redirecting....");
formJump();
formFooter();
?>
