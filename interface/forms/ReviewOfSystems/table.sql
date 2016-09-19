CREATE TABLE IF NOT EXISTS `form_ReviewOfSystems` (
id bigint(20) NOT NULL auto_increment,
date datetime default NULL,
pid bigint(20) default NULL,
user varchar(255) default NULL,
groupname varchar(255) default NULL,
authorized tinyint(4) default NULL,
activity tinyint(4) default NULL,

constitution__fatigue varchar(5),
constitution__weight_Change varchar(5),

skin__rash varchar(5),
skin__itching varchar(5),
skin__pain varchar(5),
skin__lesions varchar(5),

eent__vision_Change varchar(5),
eent__hearing_Loss varchar(5),
eent__hoarseness varchar(5),
eent__dysphagia varchar(5),

breast__pain varchar(5),
breast__discharge varchar(5),
breast__mass varchar(5),

cardiovascular__palpitations varchar(5),
cardiovascular__chest_pain varchar(5),

respiratory__shortness_of_breath varchar(5),
respiratory__wheezing varchar(5),
respiratory__cough varchar(5),
respiratory__pleuritic_Pain varchar(5),

Gastrointestinal__pain varchar(5),
Gastrointestinal__nausea varchar(5),
Gastrointestinal__vomiting varchar(5),
Gastrointestinal__diarrhea varchar(5),
Gastrointestinal__constipation varchar(5),
Gastrointestinal__bleeding varchar(5),

Genitourinary__dysuria varchar(5),
Genitourinary__frequency varchar(5),
Genitourinary__incontinence varchar(5),
Genitourinary__hematuria varchar(5),
Genitourinary__discharge varchar(5),
Genitourinary__itching varchar(5),
Genitourinary__odor varchar(5),
Genitourinary__burning varchar(5),
Genitourinary__irregular_Vaginal_Bleeding varchar(5),
Genitourinary__Pain_Or_Bleeding_After_Sex varchar(5),

Musculoskeletal__pain varchar(5),
Musculoskeletal__swelling varchar(5),
Musculoskeletal__tenderness varchar(5),

Neurological__weakness varchar(5),
Neurological__numbness varchar(5),
Neurological__tingling varchar(5),
Neurological__dizziness varchar(5),
Neurological__headache varchar(5),
Neurological__siezure varchar(5),

Psychological__mood varchar(5),
Psychological__insomnia varchar(5),
Psychological__crying varchar(5),
Psychological__irritability varchar(5),
Psychological__disordered_Thinking varchar(5),
Psychological__depression varchar(5),

Endocrine__polyuria varchar(5),
Endocrine__polydipsia varchar(5),
Endocrine__sweats varchar(5),
Endocrine__weight_Change varchar(5),

Family_History__breast_Cancer varchar(5),
Family_History__ovarian_Cancer varchar(5),
Family_History__prostate_Cancer varchar(5),
Family_History__colon_Cancer varchar(5),

additional_notes longtext,
PRIMARY KEY (id)
) ENGINE=MyISAM;
