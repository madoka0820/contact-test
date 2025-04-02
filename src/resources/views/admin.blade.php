@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@endsection

@section('content')
<div class="search__title">
    <h2>Admin</h2>
</div>
<form class="search-form">
    <div class="search-form__item">
        <input class="search-form__item-input" type="text" />
        <select class="search-form__item-select">
            <option value="">性別</option>
            <option value="1">男性</option>
            <option value="2">女性</option>
            <option value="3">その他</option>
        </select>
        <select class="search-form__item-select">
            <option value="">お問い合わせの種類</option>
            @foreach($categories as $category)
                <option value="{{$category['id']}}">{{$category['name']}}</option>
            @endforeach
        </select>
        <select class="search-form__item-select">
            <option value="">年/月/日</option>
        </select>
    </div>
    <div class="search-form__button">
        <button class="search-form__button-submit" type="submit">検索</button>
    </div>
</form>
<div class="admin-table">
    <table class="admin-table__inner">
        <tr class="admin-table__row">
            <th class="admin-table__header">お名前</th>
            <th class="admin-table__header">性別</th>
            <th class="admin-table__header">メールアドレス</th>
            <th class="admin-table__header">お問い合わせの種類</th>
            <th class="admin-table__header"></th>
        </tr>
        @foreach($contacts as $contact)
        <tr class="admin-table__header">
            <td class="admin-table__item">
                {{$contact['first_name']}}
                {{$contact['last_name']}}
            </td>
            <td class="admin-table__item">
                <?php
                    if ($contact['gender'] == '1'){
                        echo '男性';
                    }
                    else if ($contact['gender'] == '2') {
                        echo '女性';
                    }
                    else if ($contact['gender'] == '3') {
                        echo 'その他';
                    }
                ?>
            </td>
            <td class="admin-table__item">
                {{$contact['email']}}
            </td>
            <td class="admin-table__item">
                {{$contact['category']['name']}}
            </td>
            <td class="admin-table__item">
                <details>
                    <summery class="admin-table__button-submit">詳細</summery>
                    <div class="modal-content">
                        <table class="modal-table__inner">
                            <tr class="modal-content-row">
                                <th class="modal-table__header">お名前</th>
                                <td class="modal-table__item">
                                    {{$contact['first_name']}}
                                    {{$contact['last_name']}}</td>
                            </tr>
                            <tr class="modal-content-row">
                                <th class="modal-table__header">性別</th>
                                <td class="modal-table__item">
                                    <?php
                                        if ($contact['gender'] == '1'){
                                            echo '男性';
                                        }
                                        else if ($contact['gender'] == '2') {
                                            echo '女性';
                                        }
                                        else if ($contact['gender'] == '3') {
                                            echo 'その他';
                                        }
                                    ?>
                                </td>
                            </tr>
                            <tr class="modal-content-row">
                                <th class="modal-table__header">メールアドレス</th>
                                <td class="modal-table__item">
                                    {{$contact['email']}}</td>
                            </tr>
                            <tr class="modal-content-row">
                                <th class="modal-table__header">電話番号</th>
                                <td class="modal-table__item">
                                    {{$contact['tel']}}</td>
                            </tr>
                            <tr class="modal-content-row">
                                <th class="modal-table__header">住所</th>
                                <td class="modal-table__item">
                                    {{$contact['address']}}</td>
                            </tr>
                            <tr class="modal-content-row">
                                <th class="modal-table__header">建物名</th>
                                <td class="modal-table__item">
                                    {{$contact['building']}}</td>
                            </tr>
                            <tr class="modal-content-row">
                                <th class="modal-table__header">お名前</th>
                                <td class="modal-table__item">
                                    {{$contact['category']['name']}}</td>
                            </tr>
                            <tr class="modal-content-row">
                                <th class="modal-table__header">お名前</th>
                                <td class="modal-table__item">
                                    {{$contact['content']}}</td>
                            </tr>
                        </table>
                    </div>
                </details>
            </td>
        </tr>
        @endforeach
    </table>
</div>