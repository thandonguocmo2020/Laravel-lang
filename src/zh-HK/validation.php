<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | such as the size rules. Feel free to tweak each of these messages.
    |
    */

    'accepted'             => '必須接受 :attribute。',
    'active_url'           => ':Attribute 並非一個有效的網址。',
    'after'                => ':Attribute 必須要在 :date 之後。',
    'alpha'                => ':Attribute 只能以字母組成。',
    'alpha_dash'           => ':Attribute 只能以字母、數字及斜線組成。',
    'alpha_num'            => ':Attribute 只能以字母及數字組成。',
    'array'                => ':Attribute 必須為陣列。',
    'before'               => ':Attribute 必須要在 :date 之前。',
    'between'              => [
        'numeric' => ':Attribute 必須介乎 :min 至 :max 之間。',
        'file'    => ':Attribute 必須介乎 :min 至 :max kb 之間。 ',
        'string'  => ':Attribute 必須介乎 :min 至 :max 個字符之間。',
        'array'   => ':Attribute: 必須有 :min 至 :max 個項目。',
    ],
    'boolean'              => ':Attribute 必須是布爾值。',
    'confirmed'            => ':Attribute 確認欄位的輸入並不相符。',
    'date'                 => ':Attribute 並非一個有效的日期。',
    'date_format'          => ':Attribute 與 :format 格式不相符。',
    'different'            => ':Attribute 與 :other 必須不同。',
    'digits'               => ':Attribute 必須是 :digits 位數字。',
    'digits_between'       => ':Attribute 必須介乎 :min 至 :max 位數字。',
    'distinct'             => ':Attribute 已經存在。',
    'email'                => ':Attribute 的格式無效。',
    'exists'               => ':Attribute 不存在。',
    'filled'               => ':Attribute 不能留空。',
    'image'                => ':Attribute 必須是一張圖片。',
    'in'                   => '所揀選的 :attribute 選項無效。',
    'in_array'             => ':Attribute 沒有在 :other 中。',
    'integer'              => ':Attribute 必須是一個整數。',
    'ip'                   => ':Attribute 必須是一個有效的 IP 地址。',
    'json'                 => ':Attribute 必須是正確的 JSON 格式。',
    'max'                  => [
        'numeric' => ':Attribute 不能大於 :max。',
        'file'    => ':Attribute 不能大於 :max kb。',
        'string'  => ':Attribute 不能多於 :max 個字符。',
        'array'   => ':Attribute 不能多於 :max 個項目。',
    ],
    'mimes'                => ':Attribute 必須為 :values 的檔案。',
    'min'                  => [
        'numeric' => ':Attribute 不能小於 :min。',
        'file'    => ':Attribute 不能小於 :min kb。',
        'string'  => ':Attribute 不能小於 :min 個字符。',
        'array'   => ':Attribute 不能小於 :min 個項目。',
    ],
    'not_in'               => '所揀選的 :attribute 選項無效。',
    'numeric'              => ':Attribute 必須為一個數字。',
    'present'              => ':Attribute 必須存在。',
    'regex'                => ':Attribute 的格式錯誤。',
    'required'             => ':Attribute 不能留空。',
    'required_if'          => '當 :other 是 :value 時 :attribute 不能留空。',
    'required_unless'      => '當 :other 不是 :value 時 :attribute 不能留空。',
    'required_with'        => '當 :values 出現時 :attribute 不能留空。',
    'required_with_all'    => '當 :values 出現時 :attribute 不能留空。',
    'required_without'     => '當 :values 留空時 :attribute field 不能留空。',
    'required_without_all' => '當 :values 都不出現時 :attribute 不能留空。',
    'same'                 => ':Attribute 與 :other 必須相同。',
    'size'                 => [
        'numeric' => ':Attribute 的大小必須是 :size。',
        'file'    => ':Attribute 的大小必須是 :size kb。',
        'string'  => ':Attribute 必須是 :size 個字符。',
        'array'   => ':Attribute 必須是 :size 個單元。',
    ],
    'string'               => ':Attribute 必須是一個字符串',
    'timezone'             => ':Attribute 必須是一個正確的時區值。',
    'unique'               => ':Attribute 已經存在。',
    'url'                  => ':Attribute 的格式錯誤。',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention 'attribute.rule' to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom'               => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of 'email'. This simply helps us make messages a little cleaner.
    |
    */

    'attributes'           => [
        'name'                  => '名稱',
        'username'              => '使用者名',
        'email'                 => '郵箱',
        'first_name'            => '名',
        'last_name'             => '姓',
        'password'              => '密碼',
        'password_confirmation' => '確認密碼',
        'city'                  => '城市',
        'country'               => '國家',
        'address'               => '地址',
        'phone'                 => '電話',
        'mobile'                => '手機',
        'age'                   => '年齡',
        'sex'                   => '性別',
        'gender'                => '性別',
        'day'                   => '天',
        'month'                 => '月',
        'year'                  => '年',
        'hour'                  => '時',
        'minute'                => '分',
        'second'                => '秒',
        'title'                 => '標題',
        'content'               => '內容',
        'description'           => '描述',
        'excerpt'               => '摘要',
        'date'                  => '日期',
        'time'                  => '時間',
        'available'             => '可用的',
        'size'                  => '大小',
    ],

];