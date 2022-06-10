define([
   'jquery',
   'jquery/ui',
   'jquery/validate',
   'mage/translate'
], function($){
   'use strict';
   return function(param) {
       console.log(param);
       $.validator.addMethod(
           "aureatelabsvalidationrule",
           function(value, element) {
               //Perform your operation here and return the result true/false.
               console.log(value, element);
               return true/false;
           },
           $.mage.__("name is required")
       );
   }
});