<?php

class Billing extends CI_Model
{

    public function getBilling()
    {
        $query = $this->db->get("tbl_billing"); // Fetch data from tbl_billing
        return $query->result(); // Return fetched data
    }

    public function saveBilling($data)
    {

        $date = DateTime::createFromFormat('d-m-Y', $data['due_date']);

        if ($date !== false) {
            $formattedDate = $date->format('Y-m-d');
        }

        $data_sql = array(
            'bill_account_number ' => $data['account_number'],
            'bill_amount' => $data['amount'],
            'bill_due_date' => $formattedDate,
            'bill_period' => $data['period']
        );

        $check = $this->db->where($data_sql);
        $check = $this->db->get('t_billing');

        if ($check->num_rows() == 0) {
            $this->db->insert('t_billing', $data_sql);
        }
    }
}
