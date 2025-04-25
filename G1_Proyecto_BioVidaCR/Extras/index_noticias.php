<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container mt-4">
  <div class="row">
    <?php
    $queryString = http_build_query([
      'api_token' => 'dBSympb1N5lZRsaAJMCvUbjTzf9tafSIP9znU4dv',
      'search' => 'Costa Rica + (naturaleza | animal | conservacion | biodiversidad)',
      'language' => 'es',
    ]);

    $ch = curl_init(sprintf('%s?%s', 'https://api.thenewsapi.com/v1/news/all', $queryString));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $json = curl_exec($ch);

    curl_close($ch);

    $apiResult = json_decode($json, true);
    
    foreach ($apiResult['data'] as $item) {
      echo "
      <div class='col-md-4 mb-4'>
        <div class='card h-100'>
          <img src='{$item['image_url']}' class='card-img-top' alt='Gandoca-Manzanillo'>
          <div class='card-body'>
            <h5 class='card-title'>{$item['title']}</h5>
            <p class='card-text'>{$item['description']}</p>
            <a href='{$item['url']}' class='btn btn-success' target='_blank'>Ver</a>
          </div>
        </div>
      </div>
      ";
    }
    ?>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
