
/* make the API call */
FB.api(
    "/{113984427014056}/locations",
    "POST",
    {
        "main_page_id": "{113984427014056}",
        "store_number": "12345",
        "location_page_id": "{subpage-id}"
    },
    function (response) {
      if (response && !response.error) {
        /* handle the result */
      }
    }
);
