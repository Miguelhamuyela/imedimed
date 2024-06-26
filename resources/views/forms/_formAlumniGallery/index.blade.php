@isset($alumniGallery)


    <div class="col-12 col-lg-12">
        <div class="row align-items-center my-4">
            <div class="col">
                <h2 class="page-title">Capa Actual</h2>
            </div>

        </div>
        <div class="card-deck mb-4">

            <div class="card border-0 bg-transparent">
                <div class="card-img-top img-fluid rounded"
                    style='background-image:url("/storage/{{ $alumniGallery->cover }}");background-position:center;background-size:cover;height:400px;width:500px;'>
                </div>

            </div> <!-- .card -->


        </div> <!-- .card-deck -->
    </div>
@endisset

<div class="col-md-12">
    <div class="form-group">
        <label for="name">Titulo da Galeria</label>
        <input type="text" name="name" id="name" value="{{ isset($alumniGallery->name) ? $alumniGallery->name : '' }}"
            class="form-control border-secondary" placeholder="Titulo da Galeria" required>
    </div>
</div> <!-- /.col -->

<div class="col-md-12">
    <div class="form-group">
        <label for="image">Capa a carregar</label>
        <div class="custom-file">
            <input value="{{ isset($alumniGallery->file) ? $alumniGallery->file : '' }}" class="form-control border-secondary"
                type="file" name="image" id="image" >

        </div>
    </div>
</div> <!-- /.col -->
