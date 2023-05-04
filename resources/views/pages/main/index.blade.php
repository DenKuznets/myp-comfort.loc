@extends('master')
@section('title', 'Русская Баня в Арзамасе')
@section('description','Настоящая русская парная! Банный день для всей семьи. ')
@section('keywords', 'русская баня, русская парная, снять баню, городская баня, график городской бани, городская баня адрес, городская баня арзамас, русская баня арзамас')
@section('content')
    <main class="main">
        @include('../sections.hero')
        <div class="mask mask1">
            @include('../sections.about')
            @include('../sections.info')
        </div>
        <div class="mask mask2">
            <div id="baths" class="baths">
                <h2>НАШИ БАНИ</h2>
                <div class="baths__container">
                    @include('../sections.bath2')
                    @include('../sections.bath3')
                </div>
            </div>
        </div>
        <div class="mask mask3">
            @include('../sections.rooms')
        </div>
        <div class="mask mask4">
            @include('../sections.laundry')
            @include('../sections.documents')
        </div>
        @include('../sections.contacts')
    </main>
@endsection
