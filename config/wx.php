<?php

return [
    //  +---------------------------------
    //  微信相关配置
    //  +---------------------------------

    // 小程序app_id
    'app_id' => 'wx1c1a239592ffc8ba',
    // 小程序app_secret
    'app_secret' => '0f6ae27bfc2c80cf85be28acc6ec7af6',

    // 微信使用code换取用户openid及session_key的url地址
    'login_url' => "https://api.weixin.qq.com/sns/jscode2session?" .
        "appid=%s&secret=%s&js_code=%s&grant_type=authorization_code",

    // 微信获取access_token的url地址
    'access_token_url' => "https://api.weixin.qq.com/cgi-bin/token?" .
        "grant_type=client_credential&appid=%s&secret=%s",

];