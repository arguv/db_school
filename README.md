
Select and recieve datum about students.

***CREATE MySQL Database or import from forlder DB***

host = "localhost";
username = "root";
password = "";
db_name = "db_school";

table "students"
column:
    "student_id"(PRIMARY KEY)
    "student_fname"
    "student_lname"
================
table "classes"
column:
    "class_id"(PRIMARY KEY)
    "class_name"
    "student_id"(FOREIGN KEY)
================
table "subjects"
column:
    "subject_id"(PRIMARY KEY)
    "subject_name"
    "student_id"(FOREIGN KEY)