<div class="row mt-5">
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h3>{{ $title }}</h3>
        </div>
        <div class="float-right searchAndCreate">
            <form method="GET" action="#" class="form-inline">
                <input type="search"
                       name="{{ $name }}"
                       placeholder="Søg noget..."
                       aria-label="Search"
                       class="form-control form-control-sm mr-sm-2"
                       value="{{ request('search') }}" />
                <button class="btn btn-success btn-sm mr-sm-2" type="submit">Søg</button>

                <a class="btn btn-success btn-sm" href="{{ route($link) }}">Opret ny</a>
            </form>
        </div>
    </div>
</div>
