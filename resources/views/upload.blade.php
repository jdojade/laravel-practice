<form action="{{ route('uploads3.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="file" name="receipt">
    <input type="submit" value="Upload">
</form>
