<?php

    namespace App\Services\BaselinkerApi\Requests;

    class AddOrderRequest
    {
        public $order_status_id;
        public $date_add;
        public $user_comments;
        public $admin_comments;
        public $phone;
        public $email;
        public $user_login;
        public $currency;
        public $payment_method;
        public $payment_method_cod;
        public $paid;
        public $delivery_method;
        public $delivery_price;
        public $delivery_fullname;
        public $delivery_company;
        public $delivery_address;
        public $delivery_city;
        public $delivery_state;
        public $delivery_postcode;
        public $delivery_country_code;
        public $invoice_fullname;
        public $invoice_company;
        public $invoice_nip;
        public $invoice_address;
        public $invoice_city;
        public $invoice_state;
        public $invoice_postcode;
        public $invoice_country_code;
        public $want_invoice;
        public $extra_field_1;
        public $extra_field_2;
        public $custom_extra_fields;
        public $products;

        public function __construct(array $data)
        {
            $this->order_status_id = $data['order_status_id'];
            $this->date_add = $data['date_add'];
            $this->user_comments = $data['user_comments'];
            $this->admin_comments = $data['admin_comments'];
            $this->phone = $data['phone'];
            $this->email = $data['email'];
            $this->user_login = $data['user_login'];
            $this->currency = $data['currency'];
            $this->payment_method = $data['payment_method'];
            $this->payment_method_cod = $data['payment_method_cod'];
            $this->paid = $data['paid'];
            $this->delivery_method = $data['delivery_method'];
            $this->delivery_price = $data['delivery_price'];
            $this->delivery_fullname = $data['delivery_fullname'];
            $this->delivery_company = $data['delivery_company'];
            $this->delivery_address = $data['delivery_address'];
            $this->delivery_city = $data['delivery_city'];
            $this->delivery_state = $data['delivery_state'];
            $this->delivery_postcode = $data['delivery_postcode'];
            $this->delivery_country_code = $data['delivery_country_code'];
            $this->invoice_fullname = $data['invoice_fullname'];
            $this->invoice_company = $data['invoice_company'];
            $this->invoice_nip = $data['invoice_nip'];
            $this->invoice_address = $data['invoice_address'];
            $this->invoice_city = $data['invoice_city'];
            $this->invoice_state = $data['invoice_state'];
            $this->invoice_postcode = $data['invoice_postcode'];
            $this->invoice_country_code = $data['invoice_country_code'];
            $this->want_invoice = $data['want_invoice'];
            $this->extra_field_1 = $data['extra_field_1'];
            $this->extra_field_2 = $data['extra_field_2'];
            $this->custom_extra_fields = $data['custom_extra_fields'];
            $this->products = $data['products'];
        }

        public function toArray()
        {
            return [
                'order_status_id' => $this->order_status_id,
                'date_add' => $this->date_add,
                'user_comments' => $this->user_comments,
                'admin_comments' => $this->admin_comments,
                'phone' => $this->phone,
                'email' => $this->email,
                'user_login' => $this->user_login,
                'currency' => $this->currency,
                'payment_method' => $this->payment_method,
                'payment_method_cod' => $this->payment_method_cod,
                'paid' => $this->paid,
                'delivery_method' => $this->delivery_method,
                'delivery_price' => $this->delivery_price,
                'delivery_fullname' => $this->delivery_fullname,
                'delivery_company' => $this->delivery_company,
                'delivery_address' => $this->delivery_address,
                'delivery_city' => $this->delivery_city,
                'delivery_state' => $this->delivery_state,
                'delivery_postcode' => $this->delivery_postcode,
                'delivery_country_code' => $this->delivery_country_code,
                'invoice_fullname' => $this->invoice_fullname,
                'invoice_company' => $this->invoice_company,
                'invoice_nip' => $this->invoice_nip,
                'invoice_address' => $this->invoice_address,
                'invoice_city' => $this->invoice_city,
                'invoice_state' => $this->invoice_state,
                'invoice_postcode' => $this->invoice_postcode,
                'invoice_country_code' => $this->invoice_country_code,
                'want_invoice' => $this->want_invoice,
                'extra_field_1' => $this->extra_field_1,
                'extra_field_2' => $this->extra_field_2,
                'custom_extra_fields' => $this->custom_extra_fields,
                'products' => $this->products,
            ];
        }
    }
