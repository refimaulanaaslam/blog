@extends('dashboard.layout.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Post</h1>
    </div>

    <div class="col-lg-8">
        <form method="post" action="/dashboard/posts/{{ $post->slug }}" enctype="multipart/form-data">
          @method('put')
            @csrf
            <div class="mb-3">
              <label for="slug" class="form-label" required>Slug</label>
              <input type="text" class="form-control  @error('slug') is-invalid @enderror" id="slug" name="slug" value="{{ old('slug', $post->slug) }}">
              @error('slug')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="slug" class="form-label">Category</label>
              <select class="form-select" name="category_id">
                @foreach ($categories as $category)
                @if (old('category_id', $post->category_id) == $category->id)
                  <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                @else 
                  <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endif
                @endforeach
              </select>
            </div>
            <div class="mb-3">
              <label for="image" class="form-label">Post Image</label>
              <input type="hidden" name="olgImage" value="{{ $post->image }}">
              @if ($post->image)
                  <img src="{{ asset('storage/' . $post->image) }}" alt="" class="img-preview img-fluid mb-3 col-sm-5 d-block">
              @else
                <img class="img-preview img-fluid my-3 col-sm-5" alt="">
              @endif
              <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
              @error('slug')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label">Body</label>
                @error('body')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
              <input id="body" type="hidden" name="body" value="{{ old('body', $post->body) }}">
                <trix-editor input="body" value="{{ old('slug') }}""></trix-editor>
            </div>
            
            <button type="submit" class="btn btn-primary">Update Post</button>
            <a href="/dashboard/posts" class="btn btn-warning"> Cancel</a>
          </form>
    </div>


    <script>
        document.addEventListener('trix-file-accept', function(e){
            e.preventDefault();
        })

        function previewImage(){
          const image = document.querySelector('#image');
          const imgPreview = document.querySelector('.img-preview');

          imgPreview.style.display = 'block';

          const oFReader = new FileReader();
          oFReader.readAsDataURL(image.files[0]);

          oFReader.onload = function(oFREvent){
            imgPreview.src = oFREvent.target.result;
          }
        }
    </script>
@endsection

{{-- Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, voluptates ea cum nobis rem, consequuntur ad doloremque sunt repellat eius iste, quas provident repudiandae. Saepe quo aperiam facere sunt quisquam.

Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia nihil cupiditate, tempora facilis minus aspernatur sit. Nesciunt placeat ex recusandae, inventore eaque illum, laboriosam minus cum reiciendis nulla tenetur! Facilis accusamus deleniti cumque laborum itaque aliquid delectus alias eos inventore odit, odio voluptates dolores esse eaque velit veritatis quas corrupti vel laboriosam voluptate dicta ad. Natus eaque fugit necessitatibus aspernatur autem accusantium voluptatem sint tempora quidem quasi voluptas, eum delectus! Modi debitis accusamus necessitatibus, quas enim neque vero dolore quisquam.

Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde libero necessitatibus aliquam! Ipsam beatae tenetur nesciunt atque, voluptas consectetur modi natus dolorum excepturi necessitatibus sed laboriosam rerum autem eos similique in soluta deleniti hic rem, dolor alias? Repellat unde odit eum suscipit sunt doloribus, accusantium pariatur repellendus, totam ex id omnis harum ullam ab atque quidem at rem laudantium nam? Sunt aperiam cumque, dolores sint deleniti molestiae praesentium, quo culpa expedita molestias quos dolore ut quae! Illo soluta sit excepturi laborum quia atque quae exercitationem porro, quidem sapiente maiores ex voluptatum ipsam illum eius similique, repellendus explicabo deleniti voluptatem delectus.

Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quia, est omnis nulla debitis dicta consequuntur esse assumenda cum recusandae cupiditate laborum? Itaque earum amet illum id similique magnam, rerum quod voluptate eaque officiis beatae nobis animi alias cum? Vero mollitia corporis excepturi? Corrupti earum quibusdam eaque tempore aut molestiae voluptatum? --}}