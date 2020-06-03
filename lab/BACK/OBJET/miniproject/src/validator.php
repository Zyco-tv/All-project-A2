<?php
namespace User;
class Validator {
    private $errors = [];
    public function validate(array $validationRules)
    {
        foreach ($validationRules as $field => $rules) {
            $this->validateField($field, $rules);
        }
    }
    public function validateField($field, $rules)
    {
        foreach ($rules as $rule) {
            $this->$rule($field);
        }
    }
    public function errors(){
        return $this->errors;
    }
    public function required($field){
        if (empty($_POST[$field])) {
            $this->errors[$field] = "le champs est requis";
        }
    }
    public function alpha($field){
        if (!preg_match('#^[A-z]+$#', $_POST[$field])) {
            $this->errors[$field] = "Uniquement des lettres";
        }
    }
    public function alphaNum($field){
        if (!preg_match('#^[0-9]+$#', $_POST[$field])) {
            $this->errors[$field] = "Uniquement des lettres";
        }
    }
    public function alphaNumDash($field){
        if (!preg_match('#^[A-z0-9-_]+$#', $_POST[$field])) {
            $this->errors[$field] = "Uniquement des lettres, chiffres et tirets";
        }
    }
    public function email($field){
        if(!filter_var($_POST[$field], FILTER_VALIDATE_EMAIL)) {
            $this->errors[$field] = "L'adresse mail n'est pas valide";
        }
    }
    public function date($field){
        if (!preg_match('#^\d{4}(\/|-)(0[1-9]|[1-2][0-9]|3[0-1])(\/|-)(0[1-9]|1[0-2])(\/|-)(\d{d})$#', $_POST[$field])) {
            $this->errors[$field] = "La date n'est pas valide (JJ/MM/AAAA)";
        }
    }
    public function url($field){
        if (filter_var($_POST[$field], FILTER_VALIDATE_URL)){
            $this->errors[$field] = "La date n'est pas valide";
        }
    }
    public function numeric($field){
        if (!preg_match('#^[0-9]+(\.[0-9])$#')){
            $this->errors[$field] = "Le nombre n'est pas valide";
        }
    }
}
