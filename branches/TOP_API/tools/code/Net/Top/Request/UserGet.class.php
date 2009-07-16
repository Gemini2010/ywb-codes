<?php
class Net_Top_Request_UserGet extends Net_Top_Request
{
}

Net_Top_Metadata::add(
    'UserGet',
    array(
        'parameters' => array(
            'required' => array(
                'fields',
                'nick',
            ),
        ),
        'fields' => array(
            ':private' => array(
                'birthday',
                'type',
                'has_more_pic',
                'item_img_num',
                'item_img_size',
                'prop_img_num',
                'prop_img_size',
                'auto_repost',
                'promoted_type',
                'status',
                'alipay_bind',
                'consumer_protection',
                'location',
                'location.zip',
                'location.address',
            ),
            ':all' => array(
                'user_id',
                'nick',
                'sex',
                'buyer_credit',
                'seller_credit',
                'created',
                'last_visit',
                'location',
                'location.city',
                'location.state',
                'location.country',
                'location.district',
                'birthday',
                'type',
                'has_more_pic',
                'item_img_num',
                'item_img_size',
                'prop_img_num',
                'prop_img_size',
                'auto_repost',
                'promoted_type',
                'status',
                'alipay_bind',
                'consumer_protection',
                'location.zip',
                'location.address',
            ),
            ':public' => array(
                'user_id',
                'nick',
                'sex',
                'buyer_credit',
                'seller_credit',
                'created',
                'last_visit',
                'location',
                'location.city',
                'location.state',
                'location.country',
                'location.district',
            ),
        ),
        'api_type' => 'User',
        'method' => 'taobao.user.get',
        'class' => 'Net_Top_Request_UserGet',
    )
);
