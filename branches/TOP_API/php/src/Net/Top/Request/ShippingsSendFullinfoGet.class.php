<?php
class Net_Top_Request_ShippingsSendFullinfoGet extends Net_Top_Request
{
}

Net_Top_Metadata::add(
    'ShippingsSendFullinfoGet',
    array(
        'parameters' => array(
            'required' => array(
                'fields',
            ),
            'other' => array(
                'tid',
                'buyer_nick',
                'status',
                'seller_confirm',
                'receiver_name',
                'start_created',
                'end_created',
                'freight_payer',
                'type',
                'page_no',
                'page_size',
            ),
        ),
        'fields' => array(
            ':all' => array(
                'tid',
                'seller_nick',
                'buyer_nick',
                'delivery_start',
                'delivery_end',
                'out_sid',
                'item_title',
                'created',
                'modified',
                'status',
                'type',
                'freight_payer',
                'receiver_name',
                'receiver_mobile',
                'receiver_phone',
                'receiver_location',
            ),
        ),
        'api_type' => 'Delivery',
        'method' => 'taobao.shippings.send.fullinfo.get',
        'class' => 'Net_Top_Request_ShippingsSendFullinfoGet',
        'is_secure' => bless( do{\(my $o = 1)}, 'JSON::XS::Boolean' ),
    )
);
