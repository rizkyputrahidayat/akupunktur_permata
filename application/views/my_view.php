<!DOCTYPE html>
<html>
<head>
    <title>Input Data</title>
</head>
<body>
    <?php echo form_open_multipart('my_controller/save_data'); ?>
        <label for="name">Nama:</label>
        <input type="text" name="name" id="name"><br>
        
        <label for="photo">Foto:</label>
        <input type="file" name="photo" id="photo"><br>
        
        <input type="submit" value="Simpan">
    <?php echo form_close(); ?>
</body>
</html>