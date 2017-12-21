<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<form class="" action="{{URL::to('photo-upload')}}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <p>Photo upload</p>
    <label for="photo">Select an image to upload:</label>
    <input type="file" name="file" id="file">
    <input type="submit" name="" value="Save Photo">
</form>
