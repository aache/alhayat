<?php 
  $sql_select_contact = "select contact_id ,contact_name , contact_no from contacts where contact_grp = 'general'";
  $sql_test_select_contact = "select contact_id ,contact_name , contact_no from contacts where contact_grp = 'test'";
  $sql_select_all_contact = "select contact_no from contacts";
  $sql_select_popup = "select title , content , footer from popup";
  $sql_select_queries = "select queries_id , uname , email , question from queries";
  $sql_select_query_by_id = "select * from queries where queries_id = ";
?>