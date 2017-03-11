@extends('app')

@section('content')
    <h2 class="page-heading">@lang('docs-upcoming::main.title')</h2>

    @each('note.single', $notes, 'note', 'note.none')
@stop
