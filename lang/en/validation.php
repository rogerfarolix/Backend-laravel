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

    'accepted' => 'Le champ :attribute doit être accepté.',
    'accepted_if' => 'Le champ :attribute doit être accepté lorsque :other est :value.',
    'active_url' => 'Le champ :attribute nest pas une URL valide.',
    'after' => 'Le champ :attribute doit être une date après :date.',
    'after_or_equal' => 'Le champ :attribute doit être une date après ou égale à :date.',
    'alpha' => 'Le champ :attribute ne doit contenir que des lettres.',
    'alpha_dash' => 'Le champ :attribute ne doit contenir que des lettres, des chiffres, des tirets et des underscores.',
    'alpha_num' => 'Le champ :attribute ne doit contenir que des lettres et des chiffres.',
    'array' => 'Le champ :attribute doit être un tableau.',
    'ascii' => 'Le champ :attribute ne doit contenir que des caractères alphanumériques et des symboles sur un octet.',
    'before' => 'Le champ :attribute doit être une date avant :date.',
    'before_or_equal' => 'Le champ :attribute doit être une date avant ou égale à :date.',
    'between' => [
        'array' => 'Le champ :attribute doit avoir entre :min et :max éléments.',
        'file' => 'Le champ :attribute doit être entre :min et :max kilo-octets.',
        'numeric' => 'Le champ :attribute doit être entre :min et :max.',
        'string' => 'Le champ :attribute doit être entre :min et :max caractères.',
    ],
    'boolean' => 'Le champ :attribute doit être vrai ou faux.',
    'confirmed' => 'La confirmation du champ :attribute ne correspond pas.',
    'current_password' => 'Le mot de passe est incorrect.',
    'date' => 'Le champ :attribute nest pas une date valide.',
    'date_equals' => 'Le champ :attribute doit être une date égale à :date.',
    'date_format' => 'Le champ :attribute ne correspond pas au format :format.',
    'decimal' => 'Le champ :attribute doit avoir :decimal décimales.',
    'declined' => 'Le champ :attribute doit être refusé.',
    'declined_if' => 'Le champ :attribute doit être refusé lorsque :other est :value.',
    'different' => 'Le champ :attribute et :other doivent être différents.',
    'digits' => 'Le champ :attribute doit avoir :digits chiffres.',
    'digits_between' => 'Le champ :attribute doit être entre :min et :max chiffres.',
    'dimensions' => 'Le champ :attribute a des dimensions dimage non valides.',
    'distinct' => 'Le champ :attribute a une valeur en double.',
    'doesnt_end_with' => 'Le champ :attribute ne doit pas se terminer par lun des éléments suivants : :values.',
    'doesnt_start_with' => 'Le champ :attribute ne doit pas commencer par lun des éléments suivants : :values.',
    'email' => 'Le champ :attribute doit être une adresse e-mail valide.',
    'ends_with' => 'Le champ :attribute doit se terminer par lun des éléments suivants : :values.',
    'enum' => 'Le champ :attribute sélectionné nest pas valide.',
    'exists' => 'Le champ :attribute sélectionné nest pas valide.',
    'file' => 'Le champ :attribute doit être un fichier.',
    'filled' => 'Le champ :attribute doit avoir une valeur.',
    'gt' => [
        'array' => 'Le champ :attribute doit avoir plus de :value éléments.',
        'file' => 'Le champ :attribute doit être supérieur à :value kilo-octets.',
        'numeric' => 'Le champ :attribute doit être supérieur à :value.',
        'string' => 'Le champ :attribute doit être supérieur à :value caractères.',
    ],
    'gte' => [
        'array' => 'Le champ :attribute doit avoir :value éléments ou plus.',
        'file' => 'Le champ :attribute doit être supérieur ou égal à :value kilo-octets.',
        'numeric' => 'Le champ :attribute doit être supérieur ou égal à :value.',
        'string' => 'Le champ :attribute doit être supérieur ou égal à :value caractères.',
    ],
    'image' => 'Le champ :attribute doit être une image.',
    'in' => 'Le champ :attribute sélectionné nest pas valide.',
    'in_array' => 'Le champ :attribute nest pas présent dans :other.',
    'integer' => 'Le champ :attribute doit être un entier.',
    'ip' => 'Le champ :attribute doit être une adresse IP valide.',
    'ipv4' => 'Le champ :attribute doit être une adresse IPv4 valide.',
    'ipv6' => 'Le champ :attribute doit être une adresse IPv6 valide.',
    'json' => 'Le champ :attribute doit être une chaîne JSON valide.',
    'lowercase' => 'Le champ :attribute doit être en minuscules.',
    'lt' => [
        'array' => 'Le champ :attribute doit avoir moins de :value éléments.',
        'file' => 'Le champ :attribute doit être inférieur à :value kilo-octets.',
        'numeric' => 'Le champ :attribute doit être inférieur à :value.',
        'string' => 'Le champ :attribute doit être inférieur à :value caractères.',
    ],
    'lte' => [
        'array' => 'Le champ :attribute ne doit pas avoir plus de :value éléments.',
        'file' => 'Le champ :attribute doit être inférieur ou égal à :value kilo-octets.',
        'numeric' => 'Le champ :attribute doit être inférieur ou égal à :value.',
        'string' => 'Le champ :attribute doit être inférieur ou égal à :value caractères.',
    ],
    'mac_address' => 'Le champ :attribute doit être une adresse MAC valide.',
    'max' => [
        'array' => 'Le champ :attribute ne doit pas avoir plus de :max éléments.',
        'file' => 'Le champ :attribute ne doit pas dépasser :max kilo-octets.',
        'numeric' => 'Le champ :attribute ne doit pas être supérieur à :max.',
        'string' => 'Le champ :attribute ne doit pas dépasser :max caractères.',
    ],
    'max_digits' => 'Le champ :attribute ne doit pas avoir plus de :max chiffres.',
    'mimes' => 'Le champ :attribute doit être un fichier de type :values.',
    'mimetypes' => 'Le champ :attribute doit être un fichier de type :values.',
    'min' => [
        'array' => 'Le champ :attribute doit avoir au moins :min éléments.',
        'file' => 'Le champ :attribute doit faire au moins :min kilo-octets.',
        'numeric' => 'Le champ :attribute doit être au moins de :min.',
        'string' => 'Le champ :attribute doit être d\'au moins :min caractères.',
    ],
    'min_digits' => 'Le champ :attribute doit avoir au moins :min chiffres.',
    'missing' => 'Le champ :attribute doit être manquant.',
    'missing_if' => 'Le champ :attribute doit être manquant lorsque :other est :value.',
    'missing_unless' => 'Le champ :attribute doit être manquant à moins que :other ne soit :value.',
    'missing_with' => 'Le champ :attribute doit être manquant lorsque :values est présent.',
    'missing_with_all' => 'Le champ :attribute doit être manquant lorsque :values sont présents.',
    'multiple_of' => 'Le champ :attribute doit être un multiple de :value.',
    'not_in' => 'Le champ :attribute sélectionné n\'est pas valide.',
    'not_regex' => 'Le format du champ :attribute n\'est pas valide.',
    'numeric' => 'Le champ :attribute doit être un nombre.',
    'password' => [
        'letters' => 'Le champ :attribute doit contenir au moins une lettre.',
        'mixed' => 'Le champ :attribute doit contenir au moins une lettre majuscule et une lettre minuscule.',
        'numbers' => 'Le champ :attribute doit contenir au moins un chiffre.',
        'symbols' => 'Le champ :attribute doit contenir au moins un symbole.',
        'uncompromised' => 'Le champ :attribute a été compromis dans une fuite de données. Veuillez choisir un autre :attribute.',
    ],
    'present' => 'Le champ :attribute doit être présent.',
    'prohibited' => 'Le champ :attribute est interdit.',
    'prohibited_if' => 'Le champ :attribute est interdit lorsque :other est :value.',
    'prohibited_unless' => 'Le champ :attribute est interdit à moins que :other ne soit dans :values.',
    'prohibits' => 'Le champ :attribute interdit la présence de :other.',
    'regex' => 'Le format du champ :attribute n\'est pas valide.',
    'required' => 'Le champ :attribute est requis.',
    'required_array_keys' => 'Le champ :attribute doit contenir des entrées pour :values.',
    'required_if' => 'Le champ :attribute est requis lorsque :other est :value.',
    'required_if_accepted' => 'Le champ :attribute est requis lorsque :other est accepté.',
    'required_unless' => 'Le champ :attribute est requis sauf si :other est dans :values.',
    'required_with' => 'Le champ :attribute est requis lorsque :values est présent.',
    'required_with_all' => 'Le champ :attribute est requis lorsque :values sont présents.',
    'required_without' => 'Le champ :attribute est requis lorsque :values n\'est pas présent.',
    'required_without_all' => 'Le champ :attribute est requis lorsque aucun des :values n\'est présent.',
    'same' => 'Le champ :attribute et :other doivent correspondre.',
    'size' => [
        'array' => 'Le champ :attribute doit contenir :size éléments.',
        'file' => 'Le champ :attribute doit faire :size kilo-octets.',
        'numeric' => 'Le champ :attribute doit être :size.',
        'string' => 'Le champ :attribute doit être de :size caractères.',

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
