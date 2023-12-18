<?php

   namespace App\Kernel\Validator;

   class Validator implements ValidatorInterface
   {
      private array $errors = [];
      private array $data;

      public function validate(array $data, array $rules): bool
      {
         $this->errors = [];
         $this->data = $data;

         foreach ($rules as $key => $rule) {
            $rules = $rule;

            foreach ($rules as $rule) {
               $rule = explode(':', $rule);

               $ruleName = $rule[0];
               $ruleValue = $rule[1] ?? null;

               $error = $this->validateRule($key, $ruleName, $ruleValue);

               if ($error) {
                  $this->errors[$key][] = $error;
               }
            }
         }

         return empty($this->errors);
      }

      public function errors(): array
      {
         return $this->errors;
      }

      private function validateRule(string $key, string $ruleName, string $ruleValue = null): string|false
      {
         $value = $this->data[$key];

         switch ($ruleName) {
            case 'required':
               if (empty($value)) {
                  return "Заполните данное поле!!!";
               }
               break;
            case 'min':
               if (strlen($value) < $ruleValue) {
                  return "Должно быть не менее '{$ruleValue}' символов!!!";
               }
               break;
            case 'max':
               if (strlen($value) > $ruleValue) {
                  return "Должно быть не более '{$ruleValue}' символов!!!";
               }
               break;
            case 'email':
               if (! filter_var($value, filter: FILTER_VALIDATE_EMAIL)) {
                  return "Email-адрес должен быть действительным!!!";
               }
               break;
            case 'confirmed':
               //dd($value, $this->data["{$key}_confirmation"]);
               if ($value !== $this->data["{$key}_confirmation"]) {
                  return "Пароли не совпадают!!!";
               }
               break;
         }

         return false;
      }
   }
?>