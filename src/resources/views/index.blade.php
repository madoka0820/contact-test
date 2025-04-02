@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="contact-form__content">
    <div class="contact-form__heading">
        <h2>Contact</h2>
    </div>

    <form class="form" action="/contacts/confirm" method="post">
        @csrf
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">お名前</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="text" name="first_name" placeholder="(例)山田" />
                    <input type="text" name="last_name" placeholder="(例)太郎" />
                </div>
                <div class="form__error">
                <!--バリデーション機能を実装したら記述します。-->
                </div>
            </div>

            <div class="form__group-title">
                <span class="form__label--item">性別</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--radio">
                    <label><input type="radio" name="gender" value="1"/>男性</label>
                    <label><input type="radio" name="gender" value="2"/>女性</label>
                    <label><input type="radio" name="gender" value="3"/>その他</label>
                </div>
                <div class="form__error">
                <!--バリデーション機能を実装したら記述します。-->
                </div>
            </div>

            <div class="form__group-title">
                <span class="form__label--item">メールアドレス</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="email" name="email" />
                </div>
                <div class="form__error">
                <!--バリデーション機能を実装したら記述します。-->
                </div>
            </div>

            <div class="form__group-title">
                <span class="form__label--item">電話番号</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="tel" name="tel" />
                </div>
                <div class="form__error">
                <!--バリデーション機能を実装したら記述します。-->
                </div>
            </div>

            <div class="form__group-title">
                <span class="form__label--item">住所</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="text" name="address" />
                </div>
                <div class="form__error">
                <!--バリデーション機能を実装したら記述します。-->
                </div>
            </div>

            <div class="form__group-title">
                <span class="form__label--item">建物名</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="text" name="building" />
                </div>
                <div class="form__error">
                <!--バリデーション機能を実装したら記述します。-->
                </div>
            </div>

            <div class="form__group-title">
                <span class="form__label--item">お問い合わせの種類</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <select class="form__input--select" name="category_id">
                    <option value="">選択してください</option>
                    @foreach($categories as $category)
                    <option value="{{$category['id']}}">{{$category['name']}}</option>
                    @endforeach
                </select>
                <div class="form__error">
                <!--バリデーション機能を実装したら記述します。-->
                </div>
            </div>

            <div class="form__group-title">
                <span class="form__label--item">お問い合わせ内容</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--textarea">
                    <textarea name="detail" cols="100" rows="10" placeholder="お問い合わせ内容をご記載ください"></textarea>
                </div>
                <div class="form__error">
                <!--バリデーション機能を実装したら記述します。-->
                </div>
            </div>
            <div class="form__button">
                <button class="form__button-submit" type="submit">確認画面</button>
            </div>
        </div>
    </form>
</div>
@endsection