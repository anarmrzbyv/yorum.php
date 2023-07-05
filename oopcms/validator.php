<?php

class validator
{

    private $data;

    private $errors;

    private $validatin_rules;

    private $messages = [
        'required' => "This field is required",
        'number' => 'This field must be a number ',
        'email' => 'This field must be an email',
        'data' => 'This field must be a data'
    ];

    public function __construct($data, $validatin_rules)
    {
        $this->data = $data;
        $this->validatin_rules = $validatin_rules;

    }


    public function validate()
    {
        foreach ($this->data as $field => $rule) {

            // burda $key-$field $values -$rule beraberdi amma $field-rule datanin valiyusun nece tapir ???


            $field_value = $this->getfieldvalues($field);
//            var_dump($field_rule);
            $rule = ucfirst($rule);
            $metod_to_call = "validate is $rule";
//            echo "this is metod_to_call $metod_to_call" . '<br>';
            echo "This $field is values $field_value".'<br>';

        }
    }

    public function getfieldvalues($field)
    {
        return $this->validatin_rules[$field];


    }

    public function validaterequired($value)
    {
        return !empty($value);
    }

    public function validatenumber($value)
    {
        return is_numeric($value);
    }

    public function validateemail($value)
    {
        return filter_var($value, FILTER_VALIDATE_EMAIL);
    }

    public function validatedate($value)
    {
        $format = 'y-m-d';
        $d = DateTime::createFromFormat($format, $value);
        return $d && $d->format($format) === $value;
    }

}
