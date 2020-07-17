/* PHP SDK v5.0.0 */
/* make the API call */
try {
  // Returns a `Facebook\FacebookResponse` object
  $response = $fb->post(
    '/{113984427014056}/locations',
    array (
      'main_page_id' => '{113984427014056}',
      'store_number' => '12345',
      'location_page_id' => '{subpage-id}',
    ),
    '{EAAQPSHw0sREBABn5ZBXIH6sxUERtOZBDughFmk9jxWZCbTIZBKuIbvP21qJ92h54HTwZAFVbz5nq4JBWZAIZB7rCuDKaUbG6F8beZB2DKr8hnwAz2L9oGDi5ZAnlVpZBsCpLB0b2iByCmtIwCNHSZBdvNiTUtFZAumaKVCvCFibP59elWyNeeugeKb2pTE9lDPxzQJZBRRfEf5TrxMnfQQmFUzmSD}'
  );
} catch(Facebook\Exceptions\FacebookResponseException $e) {
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}
$graphNode = $response->getGraphNode();
/* handle the result */
