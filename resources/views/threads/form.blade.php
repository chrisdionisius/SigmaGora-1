<form action="/threads" method="post" enctype="multipart/form-data">
    @csrf
    <label for="title">Judul</label>
    <input type="text" name="title">
    <label for="content">Utas</label>
    <textarea name="content" id="" cols="30" rows="10"></textarea>
    <label for="image">Gambar</label>
    <input type="file" name="image" id="">
    <label for="category_id"></label>
    <select name="category_id" id="">
        <option value=1>Science</option>
        <option value=2>Politics</option>
    </select>
    <button type="submit" name="add" class="btn btn-primary float-right">Tambah Data</button>
</form>