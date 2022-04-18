<?php
include "_dbconnect.php";

if($_POST['type']== "department"){
    $sql = "SELECT * FROM departments";
    $result = mysqli_query($conn, $sql) or die("Couldn't fetch data") ;

    $str = "";
    while($row = mysqli_fetch_assoc($result))
    {
        $str .= "<option value='{$row['deptt_name']}'>{$row['deptt_name']}</option>";
    }

}
else if($_POST['type']== 'courses'){
    $sql = "SELECT * FROM courses WHERE deptt_name = '{$_POST['id']}' ";
    $result = mysqli_query($conn, $sql) or die("Couldn't fetch data") ;

    $str = "";
    while($row = mysqli_fetch_assoc($result))
    {
        $str .= "<option value='{$row['course_name']}'>{$row['course_name']}</option>";
    }
}
else if($_POST['type']== 'coursesdept'){
    $sql = "SELECT * FROM courses WHERE deptt_name = '{$_POST['id']}' ";
    $result = mysqli_query($conn, $sql) or die("Couldn't fetch data") ;

    $str = "";
    while($row = mysqli_fetch_assoc($result))
    {
        $str .= "<option value='{$row['course_name']}'>{$row['course_name']}</option>";
    }
}
else if($_POST['type']== 'class'){
    $sql = "SELECT DISTINCT class FROM classes WHERE course_name = '{$_POST['id']}' ";
    $result = mysqli_query($conn, $sql) or die("Couldn't fetch data") ;

    $str = "";
    while($row = mysqli_fetch_assoc($result))
    {
        $str .= "<option value='{$row['class']}'>{$row['class']}</option>";
    }

    
}
else if($_POST['type']== 'classes'){
    $sql = "SELECT DISTINCT class,class_id FROM classes WHERE duration = '{$_POST['id']}' ";
    $result = mysqli_query($conn, $sql) or die("Couldn't fetch data") ;

    $str = "";
    while($row = mysqli_fetch_assoc($result))
    {
        $str .= "<option value='{$row['class_id']}'>{$row['class']}</option>";
    }

    
}
else if($_POST['type']== 'getclass'){
    $sql = "SELECT DISTINCT class,class_id FROM classes WHERE course_name = '{$_POST['id1']}' AND duration = '{$_POST['id2']}' ";
    $result = mysqli_query($conn, $sql) or die("Couldn't fetch data") ;

    $str = "";
    while($row = mysqli_fetch_assoc($result))
    {
        $str .= "<option value='{$row['class_id']}'>{$row['class']}</option>";
    }

    
}
else if($_POST['type']== 'subject'){
    $sql = "SELECT * FROM classes WHERE class_id = '{$_POST['id']}' ";
    $result = mysqli_query($conn, $sql) or die("Couldn't fetch data") ;

    $str = "";
    while($row = mysqli_fetch_assoc($result))
    {
        $str .= "<option value='{$row['subject_name']}'>{$row['subject_name']}</option>";
    }
}
else if($_POST['type']== 'teacher'){
    $sql = "SELECT teacher_name FROM teachers WHERE subject_name = '{$_POST['id']}' ";
    $result = mysqli_query($conn, $sql) or die("Couldn't fetch data") ;

    $str = "";
    while($row = mysqli_fetch_assoc($result))
    {
        $str .= "<option value='{$row['teacher_name']}'>{$row['teacher_name']}</option>";
    }
}
// for courses into admin panel
else if($_POST['type']== 'courseCode'){
    $sql = "SELECT course_code FROM courses WHERE course_name = '{$_POST['id1']}' AND duration ='{$_POST['id2']}'  ";
    $result = mysqli_query($conn, $sql) or die("Couldn't fetch data") ;

    $str = "";
    while($row = mysqli_fetch_assoc($result))
    {
        $str .= "<option value='{$row['course_code']}'>{$row['course_code']}</option>";
    }
}
else if($_POST['type']== 'courseDuration'){
    $sql2 = "SELECT duration FROM courses WHERE course_name = '{$_POST['id']}' ";
    $result2 = mysqli_query($conn, $sql2) or die("Couldn't fetch duration") ;

    $str = "";
    while($row2 = mysqli_fetch_assoc($result2))
    {
        $str .= "<option value='{$row2['duration']}'>{$row2['duration']}</option>";
    }
}
// else if($_POST['type']== 'session'){
//     $sql2 = "SELECT duration FROM courses WHERE course_name = '{$_POST['id']}' ";
//     $result2 = mysqli_query($conn, $sql2) or die("Couldn't fetch duration") ;

//     $str = "";
//     while($row2 = mysqli_fetch_assoc($result2))
//     {
//         $str .= "<option value='{$row2['duration']}'>{$row2['duration']}</option>";
//     }
// }
// for all students page  in HOD section
else if($_POST['type']== 'get'){
    $sql = "SELECT * FROM students WHERE class = '{$_POST['id1']}' AND course_name ='{$_POST['id2']}' ";
    $result = mysqli_query($conn, $sql) or die("Couldn't fetch data") ;

    $str = "";
    $Count = 1;
    while($row = mysqli_fetch_assoc($result))
    {
       
        $str .= " <tr style='text-align:center;'>
                            <td >{$Count}</td>
                            <td>{$row['registration_no']}</td>
                            <td>{$row['class_roll_no']}</td>
                            <td>{$row['university_roll_no']}</td>
                            <td>{$row['name']}</td>
                            <td>{$row['phone_no']}</td>
                            <td>{$row['email']}</td>
                        </tr>";
                        $Count++;
    }
}

 // for students in faculty section
 else if($_POST['type']== 'getStudents'){

    echo $_POST['id4'];
    $sql = "SELECT * FROM students WHERE class = '{$_POST['id1']}' AND course_name ='{$_POST['id2']}' AND duration ='{$_POST['id3']}' AND deptt_name ='{$_POST['id4']}' ";
    $result = mysqli_query($conn, $sql) or die("Couldn't fetch data") ;

    $str = "";
    $Count = 1;
    while($row = mysqli_fetch_assoc($result))
    {
       
        $str .= " <tr style='text-align:center;'>
                            <td >{$Count}</td>
                            <td>{$row['registration_no']}</td>
                            <td>{$row['class_roll_no']}</td>
                            <td>{$row['university_roll_no']}</td>
                            <td>{$row['name']}</td>
                            
                        </tr>";
                        $Count++;
    }
}
// fetching students and their respective assessments
else if($_POST['type']== 'getAssignments'){
    //echo $_POST['id4'];
    $sql = "SELECT * FROM students s LEFT JOIN assignments a ON s.registration_no = a.registration_no  WHERE subject_name ='{$_POST['id5']}' AND class = '{$_POST['id1']}' AND course_name ='{$_POST['id2']}' AND duration ='{$_POST['id3']}' AND deptt_name ='{$_POST['id4']}' ";
    $result = mysqli_query($conn, $sql) or die("Couldn't fetch data") ;
    if($result)
    {
       echo '<thead style="background: ivory !important; text-decoration: underline;">  <tr style="text-align: center;">

                        <th scope="col" width="5%">Sno</th>
                        <th scope="col" width="20%" >Reg No</th>
                        <th scope="col" width="15%" >Class Roll No</th>
                        <th scope="col" width="15%" >Uni. Roll No</th>
                        <th scope="col" width="15%" >Name</th>
                        <th scope="col" width="8%" >Assignment 1</th>
                        <th scope="col" width="8%" >Assignment 2</th>
                        <th scope="col" width="8%" >Assignment total</th>
                        
                    </tr>
                    </thead>
                    <tbody>';
    }
    $str = "";
    $Count = 1;
    while($row = mysqli_fetch_assoc($result))
    {
        //echo $row['assignment_1'];
       
        $str .= " <tr class='rowData' style='text-align:center;'>
                            <td>{$Count}</td>
                            <td class='registration_no'>{$row['registration_no']}</td>
                            <td class='cls_roll_no'>{$row['class_roll_no']}</td>
                            <td class='uni_roll_no'>{$row['university_roll_no']}</td>
                            <td class='name'>{$row['name']}</td>
                            
                            <td  contenteditable='true'><input onchange='maxValCheck(this)' onKeyPress='if(this.value.length==1) return false;' maxlength = '1' type='number' pattern='[0-5]'  class='assignment_1 data'  name='assignment_1' min='0' max='5' value='{$row['assignment_1']}'></td>
                            <td  contenteditable='true'><input onchange='maxValCheck(this)' onKeyPress='if(this.value.length==1) return false;' maxlength = '1' type='number' pattern='[0-5]' class='assignment_2 data'  name='assignment_2' min='0' max='5' value='{$row['assignment_2']}'></td>
                            <td class='assignment_marks' id='totalMarks' style='background: #b1e7e7;'>{$row['assignment_marks']}</td>
                        </tr>"
                        ;
                        $Count++;
    }
    
       echo '</tbody>';
    
}
else if($_POST['type']== 'getSessional'){

    //echo $_POST['id4'];
    $sql = "SELECT * FROM students s LEFT JOIN sessional_test se ON s.registration_no = se.registration_no  WHERE subject_name ='{$_POST['id5']}' AND class = '{$_POST['id1']}' AND course_name ='{$_POST['id2']}' AND duration ='{$_POST['id3']}' AND deptt_name ='{$_POST['id4']}' ";
    $result = mysqli_query($conn, $sql) or die("Couldn't fetch data") ;
    if($result)
    {
       echo '<thead style="background: ivory !important; text-decoration: underline;">  <tr style="text-align: center; ">

                        <th scope="col" width="5%">Sno</th>
                        <th scope="col" width="20%">Reg No</th>
                        <th scope="col" width="15%">Class Roll No</th>
                        <th scope="col" width="15%">Uni. Roll No</th>
                        <th scope="col" width="15%">Name</th>
                        <th scope="col" width="8%">Test 1</th>
                        <th scope="col" width="8%">Test 2</th>
                        <th scope="col" width="8%">Sessional total</th>
                        
                    </tr>
                    </thead>
                    <tbody>';
    }
    $str = "";
    $Count = 1;
    while($row = mysqli_fetch_assoc($result))
    {
        //echo $row['sessional_1];
       
        $str .= " <tr class='rowData' style='text-align:center;'>
                            <td class='sno' >{$Count}</td>
                            <td class='registration_no'>{$row['registration_no']}</td>
                            <td class='cls_roll_no'>{$row['class_roll_no']}</td>
                            <td class='uni_roll_no'>{$row['university_roll_no']}</td>
                            <td class='name'>{$row['name']}</td>
                            
                            <td contenteditable='true'><input oninput='maxSessCheck(this)' onKeyPress='if(this.value.length==1) return false;' maxlength = '1' type='number' class='sessional_1 data' name='sessional_1' min='0' max='7' pattern='[0-7]' value='{$row['sessional_1']}'></td>
                            <td contenteditable='true'><input oninput='maxSessCheck(this)' onKeyPress='if(this.value.length==1) return false;' maxlength = '1' type='number' class='sessional_2 data' name='sessional_2' min='0' max='7' pattern='[0-7]' value='{$row['sessional_2']}'></td>
                            <td class='sessional_marks' id='totalMarks' style='background: #b1e7e7;' >{$row['sessional_marks']}</td>
                            
                        </tr>";
                        $Count++;
    }
    echo '</tbody>';
}
else if($_POST['type']== 'getAttendence'){

    //echo $_POST['id4'];
    $sql = "SELECT * FROM students s LEFT JOIN attendence a ON s.registration_no = a.registration_no  WHERE subject_name ='{$_POST['id5']}' AND class = '{$_POST['id1']}' AND course_name ='{$_POST['id2']}' AND duration ='{$_POST['id3']}' AND deptt_name ='{$_POST['id4']}' ";
    $result = mysqli_query($conn, $sql) or die("Couldn't fetch data") ;
    if($result)
    {
        $row1 = mysqli_fetch_assoc($result);

       echo '<thead style="background: ivory !important; text-decoration: underline;">';

       echo " <th class='grid_5' scope='col' width='5%'> Maximum Attendence <td contenteditable='true'><input onblur='maxAttCheck(this)' onKeyPress='if(this.value.length==2) return false;' maxlength = '2' type='number' class='max_attendence' id='max_attendence' name='max_attendence' min='0' max='99' pattern='[0-99]' value='{$row1['max_attendence']}' style='width:98%'></td></th>";
        
       echo '<tr style="text-align: center;">

                        <th scope="col" width="5%">Sno</th>
                        <th scope="col" width="20%">Reg No</th>
                        <th scope="col" width="15%">Class Roll No</th>
                        <th scope="col" width="15%">Uni. Roll No</th>
                        <th scope="col" width="15%">Name</th>
                        <th scope="col" width="8%" >Obtained Attendence</th>
                        <th scope="col" width="8%">Attendence total</th>
                        
                    </tr>
                    </thead>
                    <tbody>';
    
    $sql2 = "SELECT * FROM students s LEFT JOIN attendence a ON s.registration_no = a.registration_no  WHERE subject_name ='{$_POST['id5']}' AND class = '{$_POST['id1']}' AND course_name ='{$_POST['id2']}' AND duration ='{$_POST['id3']}' AND deptt_name ='{$_POST['id4']}' ";
    $result2 = mysqli_query($conn, $sql2) or die("Couldn't fetch data") ;

    $str = "";
    $Count = 1;
    while($row = mysqli_fetch_array($result2))
    {
        
       
        $str .= " <tr class='rowData' style='text-align:center;'>
                            <td class='sno'>{$Count}</td>
                            <td class='registration_no'>{$row['registration_no']}</td>
                            <td class='cls_no'>{$row['class_roll_no']}</td>
                            <td class='uni_roll_no'>{$row['university_roll_no']}</td>
                            <td class='name'>{$row['name']}</td>
                            
                            <td contenteditable='true'><input onblur='obtAttCheck(this)' onKeyPress='if(this.value.length==2) return false;' maxlength = '2' type='number' class='obt_attendence data2' id='' name='obt_attendence' min='0' max='99' pattern='[0-99]' value='{$row['obtained_attendence']}'></td>
                            <td class='attendence_marks' id='totalMarks' style='background: #b1e7e7;'>{$row['attendence_marks']}</td>
                            
                        </tr>";
                        $Count++;
    }
    echo '</tbody>';
}}
else if($_POST['type']== 'getAll'){

    
    $sql = "SELECT * FROM students s INNER JOIN assignments a ON s.registration_no = a.registration_no 
    INNER JOIN attendence att ON s.registration_no = att.registration_no INNER JOIN sessional_test st ON s.registration_no = st.registration_no  WHERE a.subject_name ='{$_POST['id5']}' AND st.subject_name ='{$_POST['id5']}' AND att.subject_name ='{$_POST['id5']}' AND class = '{$_POST['id1']}' AND course_name ='{$_POST['id2']}' AND duration ='{$_POST['id3']}' AND deptt_name ='{$_POST['id4']}' ";
    $result = mysqli_query($conn, $sql) or die("Couldn't fetch data") ;
    //echo $sql;
    if($result)
    {
       echo '
       <thead style="background: ivory !important; text-decoration: underline;"> 
       <tr style="text-align: center;">

                        <th scope="col" width="5%">Sno</th>
                        <th scope="col" width="20%">Reg No</th>
                        <th scope="col" width="15%">Class Roll No</th>
                        <th scope="col" width="15%">Uni. Roll No</th>
                        <th scope="col" width="15%">Name</th>
                        <th scope="col" width="8%">Assignment 1</th>
                        <th scope="col" width="8%">Assignment 2</th>
                        <th scope="col" width="8%">Assignment total</th>
                        <th scope="col" width="8%">Sessional 1</th>
                        <th scope="col" width="8%">Sessional 2</th>
                        <th scope="col" width="8%">Sessional total</th>
                        <th scope="col" width="8%">Max attendence</th>
                        <th scope="col" width="8%">Obtained attendence</th>
                        <th scope="col" width="8%">Attendence total</th>
                        <th scope="col" width="8%">Total</th>
                        
                        
                    </tr>
                    </thead>
                    <tbody>';
    }
    $str = "";
    $Count = 1;
    while($row = mysqli_fetch_assoc($result))
    {
       
        $str .= " <tr class='rowzz' style='text-align:center;'>
                            <td >{$Count}</td>
                            <td class='registration_no'>{$row['registration_no']}</td>
                            <td>{$row['class_roll_no']}</td>
                            <td>{$row['university_roll_no']}</td>
                            <td>{$row['name']}</td>
                            <td>{$row['assignment_1']}</td>
                            <td>{$row['assignment_2']}</td>
                            <td style='background: white;' id='val_1'>{$row['assignment_marks']}</td>
                            <td>{$row['sessional_1']}</td>
                            <td>{$row['sessional_2']}</td>
                            <td style='background: white;' id='val_2'>{$row['sessional_marks']}</td>
                            <td>{$row['max_attendence']}</td>
                            <td>{$row['obtained_attendence']}</td>
                            <td style='background: white;' id='val_3'>{$row['attendence_marks']}</td>
                            <td style='background: antiquewhite;color: black;font-size: 20px;font-weight: 400;'  class='assessment_marks'>Total</td>
                            
                        </tr>";
                        $Count++;
    }
     echo '</tbody>';
}

// fetching the students marks for individual student with the help of their registration number

else if($_POST['type']== 'getAtt'){

    //echo $_POST['id4'];
    $sql = "SELECT * FROM students s LEFT JOIN attendence a ON s.registration_no = a.registration_no  WHERE registration_no ='{$_POST['reg_no']}' AND deptt_name ='{$_POST['deptt_name']}' ";
    $result = mysqli_query($conn, $sql) or die("Couldn't fetch data") ;
    echo $sql;
    if($result)
    {
       echo ' <tr style="text-align: center;">

                        <th scope="col" width="5%">Sno</th>
                        <th scope="col" width="20%">Reg No</th>
                        <th scope="col" width="15%">Class Roll No</th>
                        <th scope="col" width="15%">Uni. Roll No</th>
                        <th scope="col" width="15%">Name</th>
                        <th scope="col" width="8%" >Max Attendence</th>
                        <th scope="col" width="8%" >Obtained Attendence</th>
                        <th scope="col" width="8%">Attendence total</th>
                        
                    </tr>';
    }
    $str = "";
    $Count = 1;
    while($row = mysqli_fetch_assoc($result))
    {
        //echo $row['assignment_1'];
       
        $str .= " <tr style='text-align:center;'>
                            <td class='sno'>{$Count}</td>
                            <td class='registration_no'>{$row['registration_no']}</td>
                            <td class='cls_no'>{$row['class_roll_no']}</td>
                            <td class='uni_roll_no'>{$row['university_roll_no']}</td>
                            <td class='name'>{$row['name']}</td>
                            <td contenteditable='true'><input type='number' class='max_attendence' id='' name='max_attendence' min='0' max='100' value='{$row['max_attendence']}'></td>
                            <td contenteditable='true'><input type='number' class='obt_attendence' id='' name='obt_attendence' min='0' max='100' value='{$row['obtained_attendence']}'></td>
                            <td class='attendence_marks' contenteditable='true'>{$row['attendence_marks']}</td>
                            
                        </tr>";
                        $Count++;
    }
}
else if($_POST['type'] == 'summary'){
            $deptt = $_POST['deptt'];
            $course = $_POST['course'];
            $courseDuration = $_POST['courseDuration'];
            $className = $_POST['className'];
            $subject = $_POST['subject'];
            //echo $deptt;
            //echo $course;

            //$Alert = 'Fetching data...';
            
            // header("Location: ../files/seeStdData.php?class=$className&course=$Course&deptt=$deptt&duration=$courseDuration&subject=$subject");
            $str = "../files/seeStdData.php?class=$className&course=$course&deptt=$deptt&duration=$courseDuration&subject=$subject";


}



echo $str;
?>