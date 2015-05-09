<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (!empty($_POST['fname'])) {
        $fname = $_POST['fname'];
        $check_fname = '1';
    } else {
        $check_fname = '0';
    };

    if (!empty($_POST['lname'])) {
        $lname = $_POST['lname'];
        $check_lname = '1';
    } else {
        $check_lname = '0';
    };

    if (!empty($_POST['class'])) {
        $class = $_POST['class'];
        $check_class = '1';
    } else {
        $check_class = '0';
    };

    if (!empty($_POST['subject'])) {
        $sub = $_POST['subject'];
        $check_subject = '1';
    } else {
        $check_subject = '0';
    };

    $sum = $check_fname . $check_lname . $check_class . $check_subject;

    switch ($sum) {
        case '1000':
            $table1 = "students";
            $rows = "students.student_fname, students.student_lname";
            $table2 = null;
            $table3 = null;
            $where = "students.student_fname = '{$fname}' ";
            $group = null;
            break;
        case '0100':
            $table1 = "students";
            $rows = "students.student_lname, students.student_fname";
            $table2 = null;
            $table3 = null;
            $where = "students.student_lname = '{$lname}' ";
            $group = null;
            break;
        case '0010':
            $table1 = "classes";
            $rows = "classes.class_name, students.student_fname, students.student_lname";
            $table2 = "students";
            $table3 = null;
            $where = "classes.class_name = '{$class}' ";
            $group = null;
            break;
        case '0001':
            $table1 = "subjects";
            $rows = "subjects.subject_name, students.student_fname, students.student_lname";
            $table2 = "students";
            $table3 = null;
            $where = "subjects.subject_name = '{$sub}' ";
            $group = null;
            break;
        case '1100':
            $table1 = "students";
            $rows = "students.student_fname, students.student_lname, classes.class_name";
            $table2 = "classes";
            $table3 = null;
            $where = "students.student_fname = '{$fname}' AND students.student_lname = '{$lname}'";
            $group = null;
            break;
        case '1010':
            $table1 = "students";
            $rows = "students.student_fname, students.student_lname, classes.class_name";
            $table2 = "classes";
            $table3 = null;
            $where = "students.student_fname = '{$fname}' AND classes.class_name = '{$class}'";
            $group = null;
            break;
        case '1001':
            $table1 = "students";
            $rows = "students.student_fname, students.student_lname, subjects.subject_name";
            $table2 = "subjects";
            $table3 = null;
            $where = "students.student_fname = '{$fname}' AND subjects.subject_name = '{$sub}'";
            $group = null;
            break;
        case '0011':
            $table1 = "students";
            $rows = "students.student_fname, classes.class_name, subjects.subject_name";
            $table2 = "classes";
            $table3 = "subjects";
            $where = "classes.class_name = '{$class}' AND subjects.subject_name = '{$sub}'";
            $group = "classes.class_name";
            break;
        case '1110':
            $table1 = "students";
            $rows = "students.student_fname, students.student_lname, classes.class_name, subjects.subject_name";
            $table2 = "subjects";
            $table3 = "classes";
            $where = "students.student_fname = '{$fname}' AND students.student_lname = '{$lname}' AND classes.class_name = '{$class}'";
            $group = "subjects.subject_name";
            break;
        case '1101':
            $table1 = "students";
            $rows = "students.student_fname, students.student_lname, classes.class_name, subjects.subject_name";
            $table2 = "classes";
            $table3 = "subjects";
            $where = "students.student_fname = '{$fname}' AND students.student_lname = '{$lname}' AND subjects.subject_name = '{$sub}'";
            $group = "classes.class_name";
            break;
        case '1011':
            $table1 = "students";
            $rows = "students.student_fname, students.student_lname, classes.class_name, subjects.subject_name";
            $table2 = "subjects";
            $table3 = "classes";
            $where = "students.student_fname = '{$fname}' AND classes.class_name = '{$class}' AND subjects.subject_name = '{$sub}'";
            $group = "students.student_fname";
            break;
        default:
            $table1 = null;
            $rows = null;
            $table2 = null;
            $table3 = null;
            $where = null;
            $group = null;
            echo"CHECK ANOTHER SELECT";
;            break;
    };

    require_once("Database.php");

} else {
    echo "Please SELECT";
}