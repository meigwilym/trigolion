<form action="{{ route('dashboard.search') }}" method="GET" class="form-inline" >
    <div class="input-group mb-3">
        <label for="term" class="sr-only" >Chwilio: </label>
        <input type="text" id="term" name="term" class="form-control" placeholder="Enw neu gyfeiriad..." value="{{ $term }}" />
        <div class="input-group-append">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
