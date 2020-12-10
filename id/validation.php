<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'        => ':Attribute harus diterima.',
    'active_url'      => ':Attribute bukan tautan yang valid.',
    'after'           => ':Attribute harus tanggal setelah :date.',
    'after_or_equal'  => ':Attribute harus tanggal setelah atau sama dengan :date.',
    'alpha'           => ':Attribute hanya boleh berisi huruf.',
    'alpha_dash'      => ':Attribute hanya boleh berisi huruf, nomor, tanda penghubung dan garis bawah.',
    'alpha_num'       => ':Attribute hanya boleh berisi huruf dan nomor.',
    'array'           => ':Attribute harus array.',
    'before'          => ':Attribute harus tanggal sebelum tanggal :date.',
    'before_or_equal' => ':Attribute harus tanggal sebelum atau sama dengan :date.',
    'between'         => [
        'numeric' => ':Attribute harus antara :min dan :max.',
        'file'    => ':Attribute harus antara :min dan :max kilobyte.',
        'string'  => ':Attribute harus antara :min dan :max karakter.',
        'array'   => ':Attribute harus memiliki antara :min dan :max item.',
    ],
    'boolean'        => ':Attribute harus true atau false.',
    'confirmed'      => 'Konfirmasi :attribute tidak cocok.',
    'date'           => ':Attribute bukan tanggal yang valid.',
    'date_equals'    => ':Attribute harus tanggal yang sama dengan :date.',
    'date_format'    => ':Attribute tidak cocok dengan format :format.',
    'different'      => ':Attribute dan :other harus berbeda.',
    'digits'         => ':Attribute harus :digits digit.',
    'digits_between' => ':Attribute harus antara :min dan :max digit.',
    'dimensions'     => ':Attribute memiliki dimensi gambar yang tidak valid.',
    'distinct'       => ':Attribute memiliki duplikasi nilai.',
    'email'          => ':Attribute harus email yang valid.',
    'ends_with'      => ':Attribute harus diakhiri dengan: :values.',
    'exists'         => ':Attribute tidak valid.',
    'file'           => ':Attribute harus file.',
    'filled'         => ':Attribute harus memiliki isi.',
    'gt'             => [
        'numeric' => ':Attribute harus lebih besar dari :value.',
        'file'    => ':Attribute harus lebih besar dari :value kilobyte.',
        'string'  => ':Attribute harus lebih besar dari :value karakter.',
        'array'   => ':Attribute harus memiliki lebih dari :value item.',
    ],
    'gte' => [
        'numeric' => ':Attribute harus lebih besar atau sama dengan :value.',
        'file'    => ':Attribute harus lebih besar atau sama dengan :value kilobyte.',
        'string'  => ':Attribute harus lebih besar atau sama dengan :value karakter.',
        'array'   => ':Attribute harus memiliki :value item atau lebih.',
    ],
    'image'    => ':Attribute harus gambar.',
    'in'       => ':Attribute yang dipilih tidak valid.',
    'in_array' => ':Attribute tidak ditemukan di :other.',
    'integer'  => ':Attribute harus integer.',
    'ip'       => ':Attribute harus IP address yang valid.',
    'ipv4'     => ':Attribute harus IPv4 address yang valid.',
    'ipv6'     => ':Attribute harus IPv6 address yang valid.',
    'json'     => ':Attribute harus JSON string yang valid.',
    'lt'       => [
        'numeric' => ':Attribute harus lebih kecil dari :value.',
        'file'    => ':Attribute harus lebih kecil dari :value kilobyte.',
        'string'  => ':Attribute harus lebih kecil dari :value karakter.',
        'array'   => ':Attribute harus lebih kecil dari :value item.',
    ],
    'lte' => [
        'numeric' => ':Attribute harus lebih kecil atau sama dengan :value.',
        'file'    => ':Attribute harus lebih kecil atau sama dengan :value kilobyte.',
        'string'  => ':Attribute harus lebih kecil atau sama dengan :value karakter.',
        'array'   => ':Attribute tidak boleh lebih dari :value item.',
    ],
    'max' => [
        'numeric' => ':Attribute tidak boleh lebih besar dari :max.',
        'file'    => ':Attribute tidak boleh lebih besar dari :max kilobyte.',
        'string'  => ':Attribute tidak boleh lebih besar dari :max karakter.',
        'array'   => ':Attribute tidak boleh lebih dari :max item.',
    ],
    'mimes'     => ':Attribute harus file dengan tipe: :values.',
    'mimetypes' => ':Attribute harus file dengan tipe: :values.',
    'min'       => [
        'numeric' => ':Attribute setidaknya harus :min.',
        'file'    => ':Attribute setidaknya harus :min kilobyte.',
        'string'  => ':Attribute setidaknya harus :min karakter.',
        'array'   => ':Attribute setidaknya harus :min item.',
    ],
    'not_in'               => ':Attribute yang dipilih tidak valid.',
    'not_regex'            => 'Format :attribute tidak valid.',
    'numeric'              => ':Attribute harus sebuah nomor.',
    'password'             => 'Kata sandi salah.',
    'present'              => ':Attribute harus ada.',
    'regex'                => 'Format :attribute tidak valid.',
    'required'             => ':Attribute harus diisi.',
    'required_if'          => ':Attribute harus diisi jika :other adalah :value.',
    'required_unless'      => ':Attribute harus diisi kecuali jika :other salah satu dari :values.',
    'required_with'        => ':Attribute harus diisi jika ada :values.',
    'required_with_all'    => ':Attribute harus diisi jika ada :values.',
    'required_without'     => ':Attribute harus diisi jika tidak ada :values.',
    'required_without_all' => ':Attribute harus diisi jika tidak ada :values.',
    'same'                 => ':Attribute dan :other harus sama.',
    'size'                 => [
        'numeric' => ':Attribute harus :size.',
        'file'    => ':Attribute harus :size kilobyte.',
        'string'  => ':Attribute harus :size karakter.',
        'array'   => ':Attribute harus berisi :size item.',
    ],
    'starts_with' => ':Attribute harus dimulai dengan salah satu nilai berikut: :values.',
    'string'      => ':Attribute harus sebuah string.',
    'timezone'    => ':Attribute harus timezone yang valid.',
    'unique'      => ':Attribute sudah ada.',
    'uploaded'    => ':Attribute gagal diunggah.',
    'url'         => 'Format :attribute tidak valid.',
    'uuid'        => ':Attribute harus UUID yang valid.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],
];
