<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    <label for="title" class="control-label">{{ 'Title' }}</label>
    <input class="form-control" name="title" type="text" id="title" value="{{ isset($post->title) ? $post->title : ''}}" >
    {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('content') ? 'has-error' : ''}}">
    <label for="content" class="control-label">{{ 'Content' }}</label>
    <textarea class="form-control" rows="5" name="content" type="textarea" id="content" >{{ isset($post->content) ? $post->content : ''}}</textarea>
    {!! $errors->first('content', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('year') ? 'has-error' : ''}}">
    <label for="year" class="control-label">{{ 'Year' }}</label>
    <input class="form-control" name="year" type="number" id="year" value="{{ isset($post->year) ? $post->year : ''}}" >
    {!! $errors->first('year', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('price') ? 'has-error' : ''}}">
    <label for="price" class="control-label">{{ 'Price' }}</label>
    <input class="form-control" name="price" type="number" id="price" value="{{ isset($post->price) ? $post->price : ''}}" >
    {!! $errors->first('price', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('isbn') ? 'has-error' : ''}}">
    <label for="isbn" class="control-label">{{ 'Isbn' }}</label>
    <input class="form-control" name="isbn" type="text" id="isbn" value="{{ isset($post->isbn) ? $post->isbn : ''}}" >
    {!! $errors->first('isbn', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('author_id') ? 'has-error' : ''}}">
    <label for="author_id" class="control-label">{{ 'Author Id' }}</label>
    <input class="form-control" name="author_id" type="number" id="author_id" value="{{ isset($post->author_id) ? $post->author_id : ''}}" >
    {!! $errors->first('author_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('publisher_id') ? 'has-error' : ''}}">
    <label for="publisher_id" class="control-label">{{ 'Publisher Id' }}</label>
    <input class="form-control" name="publisher_id" type="number" id="publisher_id" value="{{ isset($post->publisher_id) ? $post->publisher_id : ''}}" >
    {!! $errors->first('publisher_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('photo') ? 'has-error' : ''}}">
    <label for="photo" class="control-label">{{ 'Photo' }}</label>
    <input class="form-control" name="photo" type="file" id="photo" value="{{ isset($post->photo) ? $post->photo : ''}}" >
    {!! $errors->first('photo', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
