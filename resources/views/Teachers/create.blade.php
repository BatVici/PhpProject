<form action="/teachers" method="post">
    {{csrf_field()}}
    <div class="form-group">
        {{csrf_field()}}
        <label for="name">Name:</label>
        <input type="text" class="form-control" name="Name" id="name" />
    </div>
    <div class="form-group">
        {{csrf_field()}}
        <label for="subject">Subject:</label>
        <input type="text" class="form-control" name="Subject" id="subject" />
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>