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
            success: function (response) { 					  
					var r = JSON.parse(response);					
					if(r.status=="success"){
						showSuccessAlert(r.message);
					}else{
						showErrorAlert(r.message);
					}          								
					closeModal();
				}
            });
        });
    });
  </script>
</head>

<body>
<?php
    include 'common/header.php'
?>    
    <div class="container-fluid">
        <h1>Editor de plantilla</h1>
        <form>
            <div class="form-group">
            <textarea id="text_p" name="texto_plantilla" rows="25" class="form-control">
                <?php echo $data;?>
            </textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </form>
    </div>
  <?php
    include 'common/footer.php'
?>
</body>
</html>
