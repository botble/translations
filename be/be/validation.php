<?php

declare(strict_types=1);

return [
    'accepted'             => 'Вы павінны прыняць :attribute.',
    'accepted_if'          => ':Attribute трэба прыняць, калі :other роўна :value.',
    'active_url'           => 'Поле :attribute утрымлівае несапраўдны URL.',
    'after'                => 'У полі :attribute павінна быць дата пасля :date.',
    'after_or_equal'       => ':Attribute павінна быць датай пасля або роўнай :date.',
    'alpha'                => 'Поле :attribute можа мець толькі літары.',
    'alpha_dash'           => 'Поле :attribute можа мець толькі літары, лічбы і злучок.',
    'alpha_num'            => 'Поле :attribute можа мець толькі літары і лічбы.',
    'array'                => 'Поле :attribute павінна быць масівам.',
    'ascii'                => ':Attribute павінны ўтрымліваць толькі аднабайтавыя літары і сімвалы.',
    'before'               => 'У полі :attribute павінна быць дата да :date.',
    'before_or_equal'      => ':Attribute павінна быць датай да або роўнай :date.',
    'between'              => [
        'array'   => 'Колькасць элементаў у поле :attribute павінна быць паміж :min і :max.',
        'file'    => 'Памер файла ў поле :attribute павінен быць паміж :min і :max кілабайт.',
        'numeric' => 'Поле :attribute павінна быць паміж :min і :max.',
        'string'  => 'Колькасць сiмвалаў у поле :attribute павінна быць паміж :min і :max.',
    ],
    'boolean'              => 'Поле :attribute павінна мець значэнне лагічнага тыпу.',
    'can'                  => 'Поле :attribute змяшчае недазволенае значэнне.',
    'confirmed'            => 'Поле :attribute не супадае з пацвярджэннем.',
    'current_password'     => 'Пароль няправільны.',
    'date'                 => 'Поле :attribute не з\'яўляецца датай.',
    'date_equals'          => ':Attribute павінна быць датай, роўнай :date.',
    'date_format'          => 'Поле :attribute не адпавядае фармату :format.',
    'decimal'              => ':Attribute павінна мець :decimal знакаў пасля коскі.',
    'declined'             => ':Attribute трэба адхіліць.',
    'declined_if'          => ':Attribute трэба адхіляць, калі :other роўна :value.',
    'different'            => 'Палі :attribute і :other павінны адрознівацца.',
    'digits'               => 'Даўжыня лічбавага поля :attribute павінна быць :digits.',
    'digits_between'       => 'Даўжыня лічбавага поля :attribute павінна быць паміж :min і :max.',
    'dimensions'           => ':Attribute мае недапушчальныя памеры малюнка.',
    'distinct'             => 'Поле :attribute мае паўтаральнае значэнне.',
    'doesnt_end_with'      => ':Attribute не можа заканчвацца адным з наступнага: :values.',
    'doesnt_start_with'    => ':Attribute можа не пачынацца з аднаго з наступнага: :values.',
    'email'                => 'Поле :attribute павінна быць сапраўдным электронным адрасам.',
    'ends_with'            => ':Attribute павінен заканчвацца адным з наступных: :values.',
    'enum'                 => 'Выбраныя :attribute несапраўдныя.',
    'exists'               => 'Выбранае значэнне для :attribute некарэктна.',
    'extensions'           => 'Поле :attribute павінна мець адно з наступных пашырэнняў: :values.',
    'file'                 => ':Attribute павінен быць файлам.',
    'filled'               => 'Поле :attribute абавязкова для запаўнення.',
    'gt'                   => [
        'array'   => 'У :attribute павінна быць больш за :value прадметаў.',
        'file'    => ':Attribute павінны быць больш за :value кілабайт.',
        'numeric' => ':Attribute павінна быць больш, чым :value.',
        'string'  => ':Attribute павінна быць больш за :value сімвалаў.',
    ],
    'gte'                  => [
        'array'   => 'У :attribute павінна быць :value прадметаў і больш.',
        'file'    => ':Attribute павінны быць больш або роўныя :value кілабайтам.',
        'numeric' => ':Attribute павінна быць больш або роўна :value.',
        'string'  => ':Attribute павінна быць больш або роўна :value сімвалам.',
    ],
    'hex_color'            => 'Поле :attribute павінна мець правільны шаснаццатковы колер.',
    'image'                => 'Поле :attribute павінна быць малюнкам.',
    'in'                   => 'Выбранае значэнне для :attribute памылкова.',
    'in_array'             => 'Поле :attribute не існуе ў :other.',
    'integer'              => 'Поле :attribute павінна быць цэлым лікам.',
    'ip'                   => 'Поле :attribute дпавінна быць сапраўдным IP-адрасам.',
    'ipv4'                 => ':Attribute павінен быць сапраўдным IPv4-адрасам.',
    'ipv6'                 => ':Attribute павінен быць сапраўдным IPv6-адрасам.',
    'json'                 => 'Поле :attribute павінна быць JSON радком.',
    'lowercase'            => ':Attribute павінны быць малымі.',
    'lt'                   => [
        'array'   => 'У :attribute павінна быць менш за :value элементаў.',
        'file'    => ':Attribute павінны быць менш за :value кілабайт.',
        'numeric' => ':Attribute павінна быць менш за :value.',
        'string'  => ':Attribute павінна быць менш за :value сімвалаў.',
    ],
    'lte'                  => [
        'array'   => 'У :attribute не павінна быць больш за :value элементаў.',
        'file'    => ':Attribute павінны быць меншымі або роўнымі :value кілабайтам.',
        'numeric' => ':Attribute павінна быць менш або роўна :value.',
        'string'  => ':Attribute павінна быць менш або роўна :value сімвалам.',
    ],
    'mac_address'          => ':Attribute павінен быць сапраўдным MAC-адрасам.',
    'max'                  => [
        'array'   => 'Колькасць элементаў у поле :attribute не можа перавышаць :max.',
        'file'    => 'Памер файла ў поле :attribute не можа быць больш :max кілабайт).',
        'numeric' => 'Поле :attribute не можа быць больш :max.',
        'string'  => 'Колькасць сiмвалаў у поле :attribute не можа перавышаць :max.',
    ],
    'max_digits'           => ':Attribute не павінна мець больш за :max лічбаў.',
    'mimes'                => 'Поле :attribute павінна быць файлам аднаго з наступных тыпаў: :values.',
    'mimetypes'            => 'Поле :attribute павінна быць файлам аднаго з наступных тыпаў: :values.',
    'min'                  => [
        'array'   => 'Колькасць элементаў у поле :attribute павінна быць не менш :min.',
        'file'    => 'Памер файла ў полее :attribute павінен быць не менш :min кілабайт.',
        'numeric' => 'Поле :attribute павінна быць не менш :min.',
        'string'  => 'Колькасць сiмвалаў у поле :attribute павінна быць не менш :min.',
    ],
    'min_digits'           => 'Лік :attribute павінен мець не менш за :min лічбаў.',
    'missing'              => 'Поле :attribute павінна адсутнічаць.',
    'missing_if'           => 'Поле :attribute павінна адсутнічаць, калі :other роўна :value.',
    'missing_unless'       => 'Поле :attribute павінна адсутнічаць, калі :other не роўна :value.',
    'missing_with'         => 'Поле :attribute павінна адсутнічаць, калі прысутнічае :values.',
    'missing_with_all'     => 'Поле :attribute павінна адсутнічаць, калі прысутнічае :values.',
    'multiple_of'          => 'Лік :attribute павінна быць Кратна :value',
    'not_in'               => 'Выбранае значэнне для :attribute памылкова.',
    'not_regex'            => 'Фармат :attribute недапушчальны.',
    'numeric'              => 'Поле :attribute павінна быць лікам.',
    'password'             => [
        'letters'       => ':Attribute павінна ўтрымліваць хаця б адну літару.',
        'mixed'         => ':Attribute павінны змяшчаць як мінімум адну вялікую і адну малую літары.',
        'numbers'       => 'У :attribute павінна быць хаця б адна лічба.',
        'symbols'       => ':Attribute павінен утрымліваць хаця б адзін сімвал.',
        'uncompromised' => 'Дадзеныя :attribute з\'явіліся ў выніку ўцечкі дадзеных. Выберыце іншыя :attribute.',
    ],
    'present'              => 'Поле :attribute павінна прысутнічаць.',
    'present_if'           => 'Поле :attribute павінна прысутнічаць, калі :other роўна :value.',
    'present_unless'       => 'Павінна быць поле :attribute, калі :other не роўна :value.',
    'present_with'         => 'Поле :attribute павінна прысутнічаць, калі прысутнічае :values.',
    'present_with_all'     => 'Поле :attribute павінна прысутнічаць, калі прысутнічае :values.',
    'prohibited'           => 'Поле :attribute забаронена.',
    'prohibited_if'        => 'Поле :attribute забаронена, калі :other роўна :value.',
    'prohibited_unless'    => 'Поле :attribute забаронена, калі толькі :other не знаходзіцца ў :values.',
    'prohibits'            => 'Поле :attribute забараняе прысутнасць :other.',
    'regex'                => 'Поле :attribute мае памылковы фармат.',
    'required'             => 'Поле :attribute абавязкова для запаўнення.',
    'required_array_keys'  => 'Поле :attribute павінна змяшчаць запісы для: :values.',
    'required_if'          => 'Поле :attribute абавязкова для запаўнення, калі :other раўняецца :value.',
    'required_if_accepted' => 'Поле :attribute абавязковае, калі прымаецца :other.',
    'required_unless'      => 'Поле :attribute абавязкова для запаўнення, калі :other не раўняецца :values.',
    'required_with'        => 'Поле :attribute абавязкова для запаўнення, калі :values ўказана.',
    'required_with_all'    => 'Поле :attribute абавязкова для запаўнення, калі :values ўказана.',
    'required_without'     => 'Поле :attribute абавязкова для запаўнення, калі :values не ўказана.',
    'required_without_all' => 'Поле :attribute абавязкова для запаўнення, калі ні адно з :values не ўказана.',
    'same'                 => 'Значэнне :attribute павінна супадаць з :other.',
    'size'                 => [
        'array'   => 'Колькасць элементаў у поле :attribute павінна быць :size.',
        'file'    => 'Размер файла в поле :attribute павінен быць :size кілабайт.',
        'numeric' => 'Поле :attribute павінна быць :size.',
        'string'  => 'Колькасць сiмвалаў у поле :attribute павінна быць :size.',
    ],
    'starts_with'          => ':Attribute павінен пачынацца з аднаго з наступных значэнняў: :values.',
    'string'               => 'Поле :attribute павінна быць радком.',
    'timezone'             => 'Поле :attribute павінна быць сапраўдным гадзінным поясам.',
    'ulid'                 => ':Attribute павінен быць сапраўдным ULID.',
    'unique'               => 'Такое значэнне поля :attribute ўжо існуе.',
    'uploaded'             => ':Attribute не ўдалося загрузіць.',
    'uppercase'            => ':Attribute павінны быць вялікімі.',
    'url'                  => 'Поле :attribute мае памылковы фармат.',
    'uuid'                 => ':Attribute павінен быць сапраўдным UUID.',
    'attributes'           => [
        'address'                  => 'адрас',
        'age'                      => 'ўзрост',
        'amount'                   => 'сума',
        'area'                     => 'вобласці',
        'available'                => 'даступны',
        'birthday'                 => 'дзень нараджэння',
        'body'                     => 'цела',
        'city'                     => 'горад',
        'content'                  => 'змест',
        'country'                  => 'краіна',
        'created_at'               => 'створаны пры',
        'creator'                  => 'стваральнік',
        'current_password'         => 'бягучы пароль',
        'date'                     => 'дата',
        'date_of_birth'            => 'Дата нараджэння',
        'day'                      => 'дзень',
        'deleted_at'               => 'выдалены ў',
        'description'              => 'апісанне',
        'district'                 => 'раёна',
        'duration'                 => 'працягласць',
        'email'                    => 'электронная пошта',
        'excerpt'                  => 'урывак',
        'filter'                   => 'фільтр',
        'first_name'               => 'імя',
        'gender'                   => 'пол',
        'group'                    => 'група',
        'hour'                     => 'гадзіну',
        'image'                    => 'малюнак',
        'last_name'                => 'прозвішча',
        'lesson'                   => 'урок',
        'line_address_1'           => 'радок адрас 1',
        'line_address_2'           => 'радок адрас 2',
        'message'                  => 'паведамленне',
        'middle_name'              => 'імя па бацьку',
        'minute'                   => 'хвіліна',
        'mobile'                   => 'мабільны',
        'month'                    => 'месяц',
        'name'                     => 'імя',
        'national_code'            => 'нацыянальны код',
        'number'                   => 'лік',
        'password'                 => 'пароль',
        'password_confirmation'    => 'пацвярджэнне пароля',
        'phone'                    => 'тэлефон',
        'photo'                    => 'фота',
        'postal_code'              => 'паштовы індэкс',
        'price'                    => 'цана',
        'province'                 => 'правінцыя',
        'recaptcha_response_field' => 'поле адказу recaptcha',
        'remember'                 => 'запомніць',
        'restored_at'              => 'адноўлены ст',
        'result_text_under_image'  => 'выніковы тэкст пад малюнкам',
        'role'                     => 'ролю',
        'second'                   => 'другі',
        'sex'                      => 'сэкс',
        'short_text'               => 'кароткі тэкст',
        'size'                     => 'памер',
        'state'                    => 'стан',
        'street'                   => 'вуліца',
        'student'                  => 'студэнт',
        'subject'                  => 'прадметам',
        'teacher'                  => 'выкладчык',
        'terms'                    => 'тэрміны',
        'test_description'         => 'апісанне тэсту',
        'test_locale'              => 'тэставая мова',
        'test_name'                => 'імя тэсту',
        'text'                     => 'тэкст',
        'time'                     => 'час',
        'title'                    => 'назва',
        'updated_at'               => 'абноўлены на',
        'username'                 => 'імя карыстальніка',
        'year'                     => 'год',
    ],
];
