{% include 'inc/header.php' %}
<div class="row">
<section class="body">
  <div class="royalSlider rsDefault" id="main-gallery">
        <a class="rsImg" href="assets/img/catalog/chairs/chairs.jpg"><img src="assets/img/catalog/chairs/thumbs/chairs.jpg" class="rsTmb" /></a>
    {% for i in range(1, 7) %}
        <a class="rsImg" href="assets/img/catalog/chairs/{{ i }}.jpg"><img src="assets/img/catalog/chairs/thumbs/{{ i }}.jpg" class="rsTmb" /></a>
    {% endfor %}
    
        <a class="rsImg" href="assets/img/catalog/tables/tables.jpg"><img src="assets/img/catalog/tables/thumbs/tables.jpg" class="rsTmb" /></a>
    {% for i in range(1, 15) %}
        <a class="rsImg" href="assets/img/catalog/tables/{{ i }}.jpg"><img src="assets/img/catalog/tables/thumbs/{{ i }}.jpg" class="rsTmb" /></a>
    {% endfor %}
  </div>
</section>
</div>
{% include 'inc/footer.php' %}