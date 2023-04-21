@extends('master')
@section('title', 'МУП Комфорт')
@section('description',
    'Наша баня работает с 2010 года. У нас вы можете окунуться в настоящую русскую баньку,
    попариться и расслабиться. Также мы можем организовать для вас банный день или банный квест. Если вы хотите устроить
    праздник - обращайтесь к нам. Наши цены вас приятно удивят. Вы можете выбрать парную на свой вкус. Если вас двое, то мы
    предлагаем паровую баню. Мы поможем вам организовать праздник для детей и взрослых.')
@section('content')
    <main class="main">
        {{-- @include('../sections.hero') --}}
        <div class="mask mask1">
            {{-- @include('../sections.about') --}}
            {{-- @include('../sections.info') --}}
        </div>
        {{-- <div class="mask mask2">
            <div class="baths">
                <h2>НАШИ БАНИ</h2>
                @include('../sections.bath1')
                @include('../sections.bath2')
            </div>
        </div> --}}
        <div class="mask mask3">
            {{-- @include('../sections.rooms') --}}
        </div>
        <div class="mask mask4">
            {{-- @include('../sections.laundry')  --}}
            {{-- @include('../sections.documents') --}}
        </div>
        {{-- @include('../sections.contacts') --}}
    </main>
@endsection
