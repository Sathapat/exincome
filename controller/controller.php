<?php

    include('../model/class.php');
    

   
    // if(isset($_POST['search-btn'])){
    //     $date = $_POST['search-date'];
    //         if($date != ''){
    //             $search_date = new DB();
    //             $sql = $search_date->search_record($date);
    //         }else{
    //             $search_date = new DB();
    //             $sql = $search_date->fetch_record();
    //         }
    // }
    // if($sql){
    //     echo "<script>window.location.href = '../index.php'</script>";
    // }

    if(isset($_POST['insert-btn'])){
        $date = $_POST['date-txt'];
        $time = $_POST['time-txt'];
        $income = $_POST['income-txt'];
        $expense = $_POST['expense-txt'];

        $insert_record = new DB();
        $sql = $insert_record->insert_record($date, $time, $income, $expense);
    }


    if(isset($_GET['delete-id'])){
        $r_id = $_GET['delete-id'];

        $delete_record = new DB();
        $sql = $delete_record->delete_record($r_id);
    }

?>