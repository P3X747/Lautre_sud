<?php
class Abstract_view
{

  protected $db_model;

  public function display_ligne_ElementCarte($i,$libelle,$description,$prix,$image)
  {
    if ($i%3==0)
    {
      echo '<div class="row box-2">';
    }
    echo '<div class="grid_4">
    <div class="img">
    <div class="lazy-img" style="padding-bottom: 76.21621621621622%;">
    <div class="container_elt_crte">
    <img data-src="'."$image".'"  alt="">
      <h3 class="prix_elt_crte">'.$prix.' € </h3>
  </div>
    </div>
    </div>

    <h3 class="elt_crte"><em>'.$libelle.'<em></h3>
    <br>
    <p class="elt_crte">'.$description.'</p>
    <br>

    </div>';
    if ($i%3==2)
    {
      echo '</div>';
    }
  }

}
?>
