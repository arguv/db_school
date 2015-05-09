**Select and recieve datum about students.**
========================================
CREATE MySQL Database or import from forlder DB
-----------------------------------------------
host = "localhost"  
username = "root"  
password = ""  
db_name = "db_school"  

table "students"
----------------
columns:    
1."student_id"(PRIMARY KEY)  
2."student_fname"  
3."student_lname"  

table "classes"
---------------
columns:  
1."class_id"(PRIMARY KEY)  
2."class_name"  
3."student_id"(FOREIGN KEY)  

table "subjects"
----------------
columns:  
1."subject_id"(PRIMARY KEY)  
2."subject_name"  
3."student_id"(FOREIGN KEY)  