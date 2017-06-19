<?php

    $flag = 3;

    if($flag == 1){
        echo "{".
            "\"code\": \"2000\",".
            "\"data\": \"\",".
            "\"msg\": \"您的姓名/身份证号不一致，请核对后重新填写\"".
        "}";
    }elseif($flag == 2){
        echo "{".
            "\"code\": \"2000\",".
            "\"data\": \"81\",".
            "\"msg\": \"同盾>80分\"".
        "}";
    }elseif($flag == 3){
        echo "{".
            "\"code\": \"0000\",".
            "\"data\": \"https://zmopenapi.zmxy.com.cn/openapi.do?sign=P%2B2zoA4TTdJZnQr8vFbe%2BEditQdrE4aLHgfyc5x2PTYXulVOjYqXlijsVpGPMiurCxdhBi9odTF3%2Fplvo9kYZOrtZWxz%2FbzU3a%2F06mX8GXeDEzaphbHK57kSI%2FpzltOkup0KveUl19wN33Ecg6bM%2FUcJrYhhCfO1XlD3%2FenwK%2FU%3D&sign_type=RSA&charset=UTF-8&app_id=1003203&method=zhima.auth.info.authorize&channel=apppc&version=1.0&params=CCEvNG1ehBStxNGIX3ehU%2BCi4TYyZxQH2crIeO5RRr5loQ1TF%2FwxVcteLrnOj3mfxXzAALEayAp%2F3QxdS8uRKRsSoDxcWSekUzCT0J2CYMueB%2FNe3mb3m6yNxvHpaMlT8FAO9NUaVej1%2BoRqO6xDMwHtClGX%2FAwiBp94Ahl9g8pNXXubCJT%2B5tP2aXlhmw%2BV3rgdVbNOqtA4OAKHsUFtty0rJr1IMrpMLHYpB1HLSeKMaUsji3lShyRVfq0kH05RtvF4ki6Fk%2BfakrE%2FC3LuNBdnLbblILYeaqgS0ePUGAOfU5EQG467KhXvj7%2BNNXmRC5nofgcEVs%2B%2B0Q58DD%2Fk4VfJMHvpHg7XYhEXLJR%2F9qOzJtAKhgeGf9SMqdzyUGIJmRsTBUhmjNXLC8CLh05LU0OxjxSRyMUhg0unsbObZCb1GL2FLp091Mjsknxye2RN1OUTwIKGsHc%2FIr05tw0MzYu%2BdIjP7W%2BE9%2FwmyUKwu24VCyU9d0mrHaihLVuPw6q%2B\",".
            "\"msg\": \"请求成功\"".
        "}";
    }

?>