
    
    
    
    
    <div class="form-group">
        <label for="titles">title</label>
        
        <input type="text"  id="titles" class="form-control" placeholder="Title"name="titles" value=""
        
    {{old('titles',optional($post ?? null)->titles)}}"></div>
    @error('titles')
        
           <div class="alert alert-danger"> {{ $message }} </div>
      
    @enderror

    <div class="form-group">
        <label for="content">contanet</label>
        
        <textarea name="content" id="content"  class="form-control"cols="30" 
        rows="10">{{ old('content',optional($post ?? null)->content) }}</textarea></div>

    @error('content')

    <span>
        {{ $message }}
    </span>


    @if($errors->any())

           <div class="mb-3">
            <ul class="list-group">
                @foreach($errors->all() as $error)
                <li class="list-group-item list-group-item-danger">{{ $error }}</li>
                @endforeach
            </ul>

           </div>

    @endif
    @enderror 