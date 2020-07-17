EAAQPSHw0sREBABn5ZBXIH6sxUERtOZBDughFmk9jxWZCbTIZBKuIbvP21qJ92h54HTwZAFVbz5nq4JBWZAIZB7rCuDKaUbG6F8beZB2DKr8hnwAz2L9oGDi5ZAnlVpZBsCpLB0b2iByCmtIwCNHSZBdvNiTUtFZAumaKVCvCFibP59elWyNeeugeKb2pTE9lDPxzQJZBRRfEf5TrxMnfQQmFUzmSD
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
