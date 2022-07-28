<?php
include_once("super_person.php");

class administrator extends super_person
{
    // This function also changes the order_status from "Pending" to "InProgress"
    public function change_r_order_payment_status()
    {
        $order_id = $this->filter_data($_POST['order_id']);
        //trigger exception in a "try" block
        try {
            $q_result = $this->run_query("UPDATE order_tbl SET payment_status = 'Processed', order_status = 'InProgress'  WHERE order_id = '$order_id'");
            if (!$q_result) {
                throw new Exception("Error In Updating Payment Status");
            }
            $response = "Payment Status Updated Successfully";
        } catch (Exception $exc) {
            $response = $exc->getMessage();
        }
        return $response;
    }

    public function change_order_status()
    {
        $order_id = $this->filter_data($_POST['order_id']);
        //trigger exception in a "try" block
        try {
            $q_result = $this->run_query("UPDATE `order_tbl` SET order_status = 'Completed' WHERE order_id = $order_id ");
            if (!$q_result) {
                throw new Exception("Error In Marking The Order As Completed");
            }
            $response = "Order Marked As Completed Successfully";
        } catch (Exception $exc) {
            $response = $exc->getMessage();
        }
        return $response;
    }

    public function del_AvailableLeads_row()
    {
        $AvailableLeads_id = $this->filter_data($_POST['AvailableLeads_id']);
        //trigger exception in a "try" block
        try {
            $q_result = $this->run_query("DELETE FROM available_leads WHERE id = $AvailableLeads_id ");
            if (!$q_result) {
                throw new Exception("Error In Deleting Available Lead");
            }
            $response = "Available Lead Deleted Successfully";
        } catch (Exception $exc) {
            $response = $exc->getMessage();
        }
        return $response;
    }

    public function del_r_order()
    {
        $order_id = $this->filter_data($_POST['order_id']);
        //trigger exception in a "try" block
        try {
            $q_result = $this->run_query("DELETE FROM order_tbl WHERE order_id = '$order_id'");
            if (!$q_result) {
                throw new Exception("Error In Deleting Order");
            }
            $response = "Order Deleted Successfully";
        } catch (Exception $exc) {
            $response = $exc->getMessage();
        }
        return $response;
    }

    public function del_c_order()
    {
        $order_id = $this->filter_data($_POST['order_id']);
        //trigger exception in a "try" block
        try {
            $q_result = $this->run_query("DELETE FROM order_tbl WHERE order_id = '$order_id'");
            if (!$q_result) {
                throw new Exception("Error In Deleting Order");
            }
            $response = "Order Deleted Successfully";
        } catch (Exception $exc) {
            $response = $exc->getMessage();
        }
        return $response;
    }

    public function del_ip_order()
    {
        $order_id = $this->filter_data($_POST['order_id']);
        //trigger exception in a "try" block
        try {
            $q_result = $this->run_query("DELETE FROM order_tbl WHERE order_id = '$order_id'");
            if (!$q_result) {
                throw new Exception("Error In Deleting Order");
            }
            $response = "Order Deleted Successfully";
        } catch (Exception $exc) {
            $response = $exc->getMessage();
        }
        return $response;
    }

    public function del_sales_men()
    {
        $sales_men = $this->filter_array($_POST['sales_men']);
        //trigger exception in a "try" block
        try {
            for ($i = 0; $i < count($sales_men); $i++) {
                $q_result = $this->run_query("DELETE FROM users_tbl WHERE user_id = '$sales_men[$i]'");
                if (!$q_result) {
                    throw new Exception("Error In Deleting Sales Men");
                }
            }
            $response = "Sales Men Deleted Successfully";
        } catch (Exception $exc) {
            $response = $exc->getMessage();
        }
        return $response;
    }

    //Abstract functions must have a body in child classes otherwise a Fatal error would be generated
    public function update_data()
    {
    }
    public function insert_data()
    {
    }
    public function check_data()
    {
    }
    public function delete_data()
    {
    }
};
