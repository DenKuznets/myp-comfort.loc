@extends('master')
@section('title', 'МУП Комфорт')
@section('description', 'Наша баня работает с 2010 года. У нас вы можете окунуться в настоящую русскую баньку,
    попариться и расслабиться. Также мы можем организовать для вас банный день или банный квест. Если вы хотите устроить
    праздник - обращайтесь к нам. Наши цены вас приятно удивят. Вы можете выбрать парную на свой вкус. Если вас двое, то мы
    предлагаем паровую баню. Мы поможем вам организовать праздник для детей и взрослых.')
@section('content')
    <main class="main">
        {{-- @include('../sections.hero') --}}
        <div class="mask mask1">
            @include('../sections.about')
            @include('../sections.info')
        </div>
    </main>
@endsection
