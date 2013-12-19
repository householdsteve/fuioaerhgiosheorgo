{% include 'inc/header.php' %}
<div class="row">
<section class="body">
  <video class="mejs-chromeless" width="852" height="480" poster="{{ pagevars.baseurl }}/assets/video/poster.jpg" preload autoplay>
      <!-- MP4 for Safari, IE9, iPhone, iPad, Android, and Windows Phone 7 -->
      <source type="video/mp4" src="{{ pagevars.baseurl }}/assets/video/introduction.mp4" />
      <!-- WebM/VP8 for Firefox4, Opera, and Chrome -->
      <source type="video/webm" src="{{ pagevars.baseurl }}/assets/video/introduction.webm" />
      <!-- Ogg/Vorbis for older Firefox and Opera versions -->
      <source type="video/ogg" src="{{ pagevars.baseurl }}/assets/video/introduction.ogv" />

      <!-- Flash fallback for non-HTML5 browsers without JavaScript -->
      <object width="320" height="240" type="application/x-shockwave-flash" data="{{ pagevars.baseurl }}/assets/swf/flashmediaelement.swf">
          <param name="movie" value="{{ pagevars.baseurl }}/assets/swf/flashmediaelement.swf" />
          <param name="flashvars" value="controls=true&file={{ pagevars.baseurl }}/assets/video/introduction.mp4" />
      </object>
  </video>
</section>
</div>
{% include 'inc/footer.php' %}