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
</head>

<body>
<?php
    include 'common/header.php'
?>
    <div class="container-fluid">

    <h1>Editor de plantilla</h1>
    <form method="post" action="guardar_plantilla.php">
        <textarea id="text_p" name="texto_plantilla" rows="30"><?php echo $data;?></textarea>
        <button type="submit">Guardar</button>
    </form>
    </div>
  <?php
    include 'common/footer.php'
?>
</body>
</html>