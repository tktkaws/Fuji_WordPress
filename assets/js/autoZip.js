jQuery(function ($) {
  $(".zip-button").keyup(function () {
    AjaxZip3.zip2addr("zip", "", "pref", "city", "town");
  });
});
