<?php

   namespace App\Kernel\Validator;

   class Validator
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
                  return "Field '$key' is required (Поле '$key' обязательно к заполнению)";
               }
               break;
            case 'min':
               if (strlen($value) < $ruleValue) {
                  return "Field '$key' must be at least '{$ruleValue}' characters long (Поле '$key' должно содержать не менее '{$ruleValue}-х' символов)";
               }
               break;
            case 'max':
               if (strlen($value) > $ruleValue) {
                  return "Field '$key' must be at most '{$ruleValue}' characters long (Поле '$key' должно содержать не более '{$ruleValue}-ти' символов)";
               }
               break;
            case 'email':
               if (! filter_var($value, filter: FILTER_VALIDATE_EMAIL)) {
                  return 'Field "$key" must be a valid Email address (Поле "$key" должно быть с действительным Email-адресом)';
               }
               break;
         }

         return false;
      }
   }
?>