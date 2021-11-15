@extends('_includes.blog_post_base')

@section('post::title', 'Publicação Teste de um blog')
@section('post::date', 'November 15, 2021')
@section('post::brief', 'Uma tentativa de escrever um blog com erador de sites estáticos em PHP, vamos ver no que da isso. OK?.')
@section('pageTitle')- @yield('post::title')@stop

@section('post_body')

    @markdown
    The easiest way to accomplish visual balance is to align elements and structure designs with a clear grid. It guides us in the right direction when placing elements and determine dimensions, and it makes it easier for the user to process the interface.

    > Design for change

    No design is ever finished or done. Don’t be afraid of throwing away work, features or designs, good design is always evolving and grows with the business. Design with change in mind will allow us to quickly adapt to new learnings and insights. Every feature or functionality that is introduced needs time to improve. Once something is launched, evaluating performance and iteration should be the focus.

    [Read the complete article on Medium](https://medium.com/@WdeB/digital-product-design-principles-8bc9eb6c080c)
    @endmarkdown

@stop