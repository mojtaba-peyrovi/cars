
<!DOCTYPE html>
<html lang="en">
  <head>
      <meta name="_token" content="{{ csrf_token() }}" />
      <link rel="stylesheet" href="css/bootstrap.min.css" />
      <link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
      <link rel="stylesheet" href="css/fullcalendar.css" />
      <link rel="stylesheet" href="css/matrix-style.css" />
      <link rel="stylesheet" href="css/matrix-media.css" />
      <link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
      <link rel="stylesheet" href="css/jquery.gritter.css" />
      <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
      <link rel="stylesheet" href="/css/style.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
      <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

        <title>second hand cars</title>


  </head>

  <body>

  <div class="animsition">







            @yield('main')
        





          <script src="js/excanvas.min.js"></script>
          <script src="js/jquery.min.js"></script>
          <script src="js/jquery.ui.custom.js"></script>
          <script src="js/bootstrap.min.js"></script>
          <script src="js/jquery.flot.min.js"></script>
          <script src="js/jquery.flot.resize.min.js"></script>
          <script src="js/jquery.peity.min.js"></script>
          <script src="js/fullcalendar.min.js"></script>
          <script src="js/matrix.js"></script>
          <script src="js/matrix.dashboard.js"></script>
          <script src="js/jquery.gritter.min.js"></script>
          <script src="js/matrix.interface.js"></script>
          <script src="js/matrix.chat.js"></script>
          <script src="js/jquery.validate.js"></script>
          <script src="js/matrix.form_validation.js"></script>
          <script src="js/jquery.wizard.js"></script>
          <script src="js/jquery.uniform.js"></script>
          <script src="js/select2.min.js"></script>
          <script src="js/matrix.popover.js"></script>
          <script src="js/jquery.dataTables.min.js"></script>
          <script src="js/matrix.tables.js"></script>

          <script type="text/javascript">
            // This function is called from the pop-up menus to transfer to
            // a different page. Ignore if the value returned is a null string:
            function goPage (newURL) {

                // if url is empty, skip the menu dividers and reset the menu selection to default
                if (newURL != "") {

                    // if url is "-", it is this page -- reset the menu:
                    if (newURL == "-" ) {
                        resetMenu();
                    }
                    // else, send page to designated URL
                    else {
                      document.location.href = newURL;
                    }
                }
            }

          // resets the menu selection upon entry to this page:
          function resetMenu() {
             document.gomenu.selector.selectedIndex = 2;
          }
          </script>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
      <script src="/js/animsition.js" type="text/javascript"></script>
      <script src="/js/main.js" type="text/javascript"></script>

  </div>
  </body>
</html>
