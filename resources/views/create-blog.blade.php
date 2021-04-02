@extends("layouts.main")

@section('main')
    <div class="comments-form">
        <div class="comment-respond">
            <h3 class="comment-reply-title">Create blog</h3>

            <form action="{{ route('store-blog') }}"  method="post" class="comment-form" enctype="multipart/form-data">
                @csrf
                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}" id="title" placeholder="Title">
                @error('title')
                <div class="alert alert-danger mt-3">
                    {{ $message }}
                </div>
                @enderror
                <textarea rows="4" class="form-control @error('description') is-invalid @enderror" name="description" id="description" placeholder="description">{{ old('description') }}</textarea>
                @error('description')
                <div class="alert alert-danger mt-3">
                    {{ $message }}
                </div>
                @enderror
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" id="email" placeholder="Email">
                @error('email')
                <div class="alert alert-danger mt-3">
                    {{ $message }}
                </div>
                @enderror
                <input type="text" class="form-control @error('RL') is-invalid @enderror" name="RL" value="{{ old('RL') }}" id="RL" placeholder="R-or-L">
                @error('RL')
                <div class="alert alert-danger mt-3">
                    {{ $message }}
                </div>
                @enderror
                <br>
                <br>
                <input name="image" class="form-control @error('image') is-invalid @enderror" type="file" id="image" placeholder="blog-image">
                @error('image')
                <div class="alert alert-danger mt-3">
                    {{ $message }}
                </div>
                @enderror
                <br>
                <br>
                <select class="form-select mb-3" name="category"   aria-label="Default select example">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                    @endforeach
                </select>
                <br>

                <input type="submit" value="send message">


            </form><!-- .comment-form -->
        </div><!-- .comment-respond -->
    </div><!-- .comments-form -->
@endsection
