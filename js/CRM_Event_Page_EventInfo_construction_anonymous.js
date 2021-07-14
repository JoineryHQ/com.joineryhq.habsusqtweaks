(function(ts) {
  CRM.$(function($) {

  // Note: This script is only included on construction-type events, when the user is not logged in.

  // Insert "must register" message before both action buttons.
  $('a.button.crm-register-button').closest('div.action-link.register_link-section')
    .before('<div class="habsusqtweaks-registration-required-message">' + ts('You must first register for an account prior to registering for an event.') +  '</div><br />');

  // Alter label and url for both action buttons.
  $('a.button.crm-register-button')
    .attr('href',  "/volunteer-with-habitat/construction-volunteers/introduction-to-construction-volunteer-registration/")
    .html(ts('Create Account'));

  });
}(CRM.ts('com.joineryhq.habsusqtweaks')));
