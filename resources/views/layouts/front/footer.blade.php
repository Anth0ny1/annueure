<footer id="footer">




  <p>
  <label>
    Tapez le début d'un nom de ville ou d'un code postal puis appuyez sur <b>Entrée</b>.<br>
    <input id="ville" placeholder="Entrez un code postal ou une ville" autocomplete="off" size="50">
  </label>
</p>
<ul>
  <li data-vicopo="#ville">
    <strong data-vicopo-code-postal></strong>
    <span data-vicopo-ville></span>
  </li>
</ul>
  <script type="text/javascript">
  $('#input').vicopo(function (value) {
    $('#vicopo').text(JSON.stringify(value, null, 2));
  });
  $('#input').codePostal(function (value) {
    $('#code').text(JSON.stringify(value, null, 2));
  });
  $('#input').ville(function (value) {
    $('#ville').text(JSON.stringify(value, null, 2));
  });
  </script>




  <div class="footerPresentation"> <!-- footer -->
    <ul>
      <li><a href="#">plan du site</a></li>
      <li><a href="#">mentions-légales</a></li>
      <li><a href="#">liens utiles</a></li>
      <li><a href="#">partenaires</a></li>
    </ul>
    <div class="mapEure">
    <img src="admin/img/mapEure.png" alt="carte qui représente le département de l'eure" width="250px" />
    </div>
  </div> <!-- end footer -->



  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</footer>
