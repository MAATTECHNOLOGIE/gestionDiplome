<footer>
    <p>Copyright © 2021. Tous droits réservés diplome.iua.com</p>
  </footer>
  <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
  <script>
    // just for the demos, avoids form submit
    jQuery.validator.setDefaults({
      debug: true,
      success: function (label) {
        label.attr("id", "valid");
      },
    });
    $("#myform").validate({
      rules: {
        your_name: "required",
        comfirm_password: {
          equalTo: "#your_name",
        },

        your_key: "required",
        comfirm_key: {
          equalTo: "#your_key",
        },
      },
      messages: {
        your_name: {
          required: "Veuillez entrer votre nom",
        },
        your_key: {
          required: "Veuillez entrer votre clé de contrôle",
        },
      },
    });
  </script>
</body>


</html>