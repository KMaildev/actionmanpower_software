<form action="{{ route('passport_import') }}" method="POST" enctype="multipart/form-data" id="import-form">
    @csrf
    <input type="file" name="file" class="form-control" accept=".xlsx, .csv">
    <br><br>
    <a href="{{ asset('data/simple.csv') }}" class="btn btn-primary text-white" download="">
        <i class="fa fa-download"></i>
        Simple File Download
    </a>
    <button type="submit" class="btn btn-success text-white">
        <i class="fa fa-check"></i>
        Save
    </button>
</form>
