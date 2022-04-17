@extends('base')

@section('content')

    <h3>Словарь Kajsada</h3>

    <div class="row">
        <form action="{{ url('add') }}" method="POST" class="form-vertical col">
            {{ csrf_field() }}

            <div class="input-group input-group-dark mb-2">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Слово: </span>
                </div>
                <input type="text" class="form-control form-control-dark" name="word" placeholder="Слово" aria-label="Слово" aria-describedby="basic-addon1">
            </div>

            <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon3">Описание: </span>
                </div>
                <input type="text" class="form-control" name="description" placeholder="Описание" aria-label="Описание" aria-describedby="basic-addon3">
            </div>


            <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon2">Код языка: </span>
                </div>
                <select type="text" class="form-control" name="language_code" placeholder="Код языка" aria-label="Код языка" aria-describedby="basic-addon2">
                    <option>ru</option>
                    <option>sh</option>
                </select>
            </div>

            <button class="btn btn-outline-light text-white mb-3" type="submit" id="button-addon1">Добавить слово:</button>
        </form>

        <div class="col-9">
            <ul>
                @foreach ($words as $word)
                    <li> {{$word['language_code']}}: {{$word['word']}} : {{$word['description_full']}}
                        <br>
                        {{$word['grammar']}}
                    </li>
                @endforeach
            </ul>
        </div>

    </div>

@endsection
