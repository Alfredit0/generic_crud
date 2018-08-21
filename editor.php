<?php
    $my_file = '/opt/mail_files/invitacion_individual.html';    
    $handle = fopen($my_file, 'r');
    $data = '';
    if(filesize($my_file) > 0)
        $data = fread($handle,filesize($my_file));        
    //---
    fclose($handle);
?>
<!DOCTYPE html>
<html>
<?php
    include 'common/head.php'
?>
<head>
  <script src='js/tinymce.min.js'></script>
  <script>
  tinymce.init({
    selector: '#text_p'
  });
  </script>
  <script>
      $(function () {
        $('form').on('submit', function (e) {
          openModal();
          e.preventDefault();
          $.ajax({
            type: 'post',
            url: 'guardar_plantilla.php',
            data: $('form').serialize(),
            success: function () {
              closeModal();
              alert('Platilla Guardada Correctamente');
            }
          });
        });
      });
    </script>   
    <script>
        function openModal() {
            document.getElementById('modal').style.display = 'block';
            document.getElementById('fade').style.display = 'block';
        }
        function closeModal() {
            document.getElementById('modal').style.display = 'none';
            document.getElementById('fade').style.display = 'none';
        }
    </script>
    <style>
        #fade {
            display: none;
            position:absolute;
            top: 0%;
            left: 0%;
            width: 100%;
            height: 100%;
            background-color: #ababab;
            z-index: 1001;
            -moz-opacity: 0.8;
            opacity: .70;
            filter: alpha(opacity=80);
        }

        #modal {
            display: none;
            position: absolute;
            top: 45%;
            left: 45%;
            width: 64px;
            height: 64px;
            padding:30px 15px 0px;
            border: 3px solid #ababab;
            box-shadow:1px 1px 10px #ababab;
            border-radius:20px;
            background-color: white;
            z-index: 1002;
            text-align:center;
            overflow: auto;
        }
    </style>
</head>

<body>
<?php
    include 'common/header.php'
?>    
    <div id="fade"></div>
    <div id="modal">
        <img id="loader" src="images/loading.gif" />
    </div>
    <div class="container-fluid">
        <h1>Editor de plantilla</h1>
        <form>
            <textarea id="text_p" name="texto_plantilla" rows="30">
                <?php echo $data;?>
            </textarea>
            <button type="submit">Guardar</button>
        </form>
    </div>
  <?php
    include 'common/footer.php'
?>
</body>
</html>
