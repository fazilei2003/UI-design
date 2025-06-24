@extends('layouts.user')

@section('styles')
    @vite('resources/css/styles.css')
@endsection

@section('content')

<center>
    <div class="top-bar">
        <h2 class="navigation-title">e-Hayag</h2>
    </div>
    <div class="nav-line-separator"></div>
</center>

<div class="pane">
    <div class="right-side" style="display: flex; justify-content: center;">
        <form action="{{ route('freedomwall.store') }}" method="POST" class="form-example" style="width: 100%; max-width: 500px; text-align: center;">
            @csrf
            <div class="data-info-pane" style="display: flex; flex-direction: column; gap: 20px;">
                
                <div class="information name" style="text-align: left;">
                    <label class="type" for="postName">POST NAME <small>(Optional)</small></label>
                    <input type="text" id="postName" name="postName" class="content" style="width: 100%; padding: 10px;"/>
                </div>

                <div class="information" style="text-align: left;">
                    <label class="type" for="post">POST</label>
                    <textarea id="post" name="post" class="post" rows="4" style="width: 100%; padding: 10px;"></textarea>
                </div>

                <div>
                    <input class="add-button" type="submit" value="CONFIRM" style="padding: 10px 20px;"/>
                </div>
            </div>
        </form>
    </div>
</div>

<x-alert />

@endsection




