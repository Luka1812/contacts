@extends('web.layout.default')

@section('content')

    <ul class="list-group float-center" id="searchbox">
        <li class="list-group-item" >
            <input type="text" name="search" id="search" class="form-control" placeholder="search" v-model="search">
            <span class="text-muted font-size-sm mt-3">@{{ currentStatus }} </span>
        </li>

        <li v-for="models in models.data" class="list-group-item">
            @{{ models.firstname }} @{{ models.lastname }} , @{{ models.email }}
            <span class='float-right'>
                <span id="add"><i class="fas fa-plus-circle"></i></span>
                <i class="fas fa-edit"></i>
                <i class="fas fa-trash"></i>
            </span>
        </li>
    </ul>

@endsection

@section('footer')
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.10/lodash.min.js"></script>
<script src="{{ mix('js/web/page/search.min.js') }}"> </script>
@endsection




