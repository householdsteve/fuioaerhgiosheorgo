{% include 'inc/header.php' %}
<div class="row">
<section class="body">
  <div class="royalSlider rsDefault" id="main-gallery">
    {% for i in catalog %}
      <a class="rsImg" href="assets/img/catalog/{{ i[0] }}"><figure class="rsCaption">{{ i[3] }}</figure><img alt="{{ i[3] }}" src="assets/img/catalog/{{ i[1] }}/thumbs/{{ i[2] }}{{ i[3] }}.{{ i[4] }}" class="rsTmb" /></a>
    {% endfor %}
    
  </div>
</section>
</div>
{% include 'inc/footer.php' %}