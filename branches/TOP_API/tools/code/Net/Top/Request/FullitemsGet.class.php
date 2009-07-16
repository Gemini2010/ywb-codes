<?php
class Net_Top_Request_FullitemsGet extends Net_Top_Request
{
}

Net_Top_Metadata::add(
    'FullitemsGet',
    array(
        'parameters' => array(
            'required' => array(
                'fields',
                'outer_id',
            ),
        ),
        'fields' => array(
            ':small' => array(
                'iid',
                'title',
                'nick',
                'type',
                'cid',
                'num',
                'price',
            ),
            ':image' => array(
                'pic_path',
                'itemimg',
                'propimg',
            ),
            ':all' => array(
                'iid',
                'title',
                'nick',
                'type',
                'cid',
                'num',
                'price',
                'post_fee',
                'express_fee',
                'ems_fee',
                'postage_id',
                'freight_payer',
                'props',
                'property_alias',
                'desc',
                'seller_cids',
                'valid_thru',
                'list_time',
                'delist_time',
                'stuff_status',
                'location',
                'modified',
                'sku',
                'approve_status',
                'product_id',
                'pic_path',
                'itemimg',
                'propimg',
                'increment',
                'has_discount',
                'has_invoice',
                'has_warranty',
                'has_showcase',
                'auto_repost',
                'auction_point',
            ),
            ':large' => array(
                'iid',
                'title',
                'nick',
                'type',
                'cid',
                'num',
                'price',
                'post_fee',
                'express_fee',
                'ems_fee',
                'postage_id',
                'freight_payer',
                'props',
                'property_alias',
                'desc',
                'seller_cids',
                'valid_thru',
                'list_time',
                'delist_time',
                'stuff_status',
                'location',
                'modified',
                'sku',
                'approve_status',
                'product_id',
            ),
            ':postage' => array(
                'post_fee',
                'express_fee',
                'ems_fee',
                'postage_id',
                'freight_payer',
            ),
        ),
        'api_type' => 'Item',
        'method' => 'taobao.fullitems.get',
        'class' => 'Net_Top_Request_FullitemsGet',
        'is_secure' => '1',
    )
);
