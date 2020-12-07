<?php

    include('../model/class.php');
    

    // $search_date = new DB();
    // if(isset($_POST['search-btn'])){
    //     // $date = $_POST['search-date'];
    //     $text = $_POST['search-txt'];
    //     $search = '';
    //         if($text != ''){
    //             $search = 'search';
    //         }else{
    //             $search = 'not_search';
    //         }
    //     $sql = $search_date->fetch_record($text, $search);
    // }
    // if($sql){
    //     echo "<script>window.location.href = '../index.php'</script>";
    // }

    if(isset($_POST['submit'])){
        $date = $_POST['date-txt'];
        $time = $_POST['time-txt'];
        $income = $_POST['income-txt'];
        $expense = $_POST['expense-txt'];

        $insert_record = new DB();
        $sql = $insert_record->insert_record($date, $time, $income, $expense);
    }
    if($sql){
        echo "<script>window.location.href = '../index.php'</script>";
    }else{
        echo "<script>alert('บันทึกไม่สำเร็จ')</script>";
        echo "<script>window.location.href = '../index.php'</script>";
    }

?>