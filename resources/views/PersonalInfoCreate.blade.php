@extends('layouts.documentForm')
@section('requestPage')

<div class="container">
    <div class="card slide-in-right" id="page1">
        <div class="card-header">Этап 1</div>
        <div class="card-body">
            <form method="POST" action="{{route('request', $request_id)}}/personal_info" enctype="multipart/form-data" id="p_info">
            @csrf
            <h5 class="card-title">Информация о поступлении</h5> 

            <div class="form-group row">
                <label for="univercity_subdivision" class="col-md-4 col-form-label text-md-right">Выберите подразделение:</label>
                <div class="col-md-6">
                    <select class="browser-default custom-select selectionButton" id="univercity_subdivision" name= "univercity_subdivision" required>
                        <option disabled selected><p class="white-text"></p></option>
                        <option disabled selected></option>
                        <option value="1">ЧелГУ</option>
                        <option value="2">Миас</option>
                        <option value="3">Троицк</option>
                    </select>
                    @error('univercity_subdivision')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>


            
            <div class="form-group row">
                <label for="future_education_level" class="col-md-4 col-form-label text-md-right">Имя</label>
                <div class="col-md-6">
                    <select class="browser-default custom-select selectionButton" id="future_education_level" name= "future_education_level" required>
                        <option disabled selected><p class="white-text"></p></option>
                        <option value="1">Колледж</option>
                        <option value="2">Бакалавриат/Специалитет</option>
                        <option value="3">Магистратура</option>
                        <option value="4">Аспирантура</option>
                    </select>
                    @error('future_education_level')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>



            <br>
            <h5 class="card-title">Паспортные данные</h5>  


            <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">Имя</label>
                <div class="col-md-6">
                    <input id="name" 
                           type="text" 
                           class="form-control @error('name') is-invalid @enderror" 
                           name="name" value="{{ old('name') }}" 
                           autocomplete="name" 
                           autofocus>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>


            
            <div class="form-group row">
                <label for="surname" class="col-md-4 col-form-label text-md-right">Фамилия</label>
                <div class="col-md-6">
                    <input id="surname" 
                           type="text" 
                           class="form-control @error('surname') is-invalid @enderror" 
                           name="surname" value="{{ old('surname') }}" 
                           autocomplete="surname" 
                           autofocus>
                    @error('surname')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>


            <div class="form-group row">
                <label for="patronymic" class="col-md-4 col-form-label text-md-right">Отчество</label>
                <div class="col-md-6">
                    <input id="patronymic" 
                           type="text" 
                           class="form-control @error('patronymic') is-invalid @enderror" 
                           name="patronymic" value="{{ old('patronymic') }}" 
                           autocomplete="patronymic" 
                           autofocus>
                    @error('patronymic')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="birthdate" class="col-md-4 col-form-label text-md-right">Дата рождения</label>
                <div class="col-md-6">
                    <input id="birthdate" 
                           type="date" 
                           class="form-control @error('birthdate') is-invalid @enderror" 
                           name="birthdate" value="{{ old('birthdate') }}" 
                           autocomplete="birthdate" 
                           autofocus>
                    @error('birthdate')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="birthplace" class="col-md-4 col-form-label text-md-right">Место рождения</label>
                <div class="col-md-6">
                    <input id="birthplace" 
                           type="text" 
                           class="form-control @error('birthdate') is-invalid @enderror" 
                           name="birthplace" value="{{ old('birthplace') }}" 
                           autocomplete="birthdate" 
                           autofocus>
                    @error('birthplace')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            
            <div class="form-group row">
                <label for="gender" class="col-md-4 col-form-label text-md-right">Пол:</label>
                <div class="col-md-6">
                    <select class="browser-default custom-select selectionButton" id="gender" name= "gender" required>
                        <option disabled selected><p class="white-text"></p></option>
                        <option disabled selected></option>
                        <option value="1">Мужчина</option>
                        <option value="2">Женщина</option>
                    </select>
                    @error('gender')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <br>
            <h5 class="card-title">Данные связи</h5>  

            
            <div class="form-group row">
                <label for="response_email" class="col-md-4 col-form-label text-md-right">Почта</label>
                <div class="col-md-6">
                    <input id="response_email" 
                           type="email"
                           class="form-control @error('response_email') is-invalid @enderror" 
                           name="response_email" value="{{ old('response_email') }}" 
                           autocomplete="response_email" 
                           autofocus>
                    @error('response_email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for='phone_number' class="col-md-4 col-form-label text-md-right">Номер телефона</label>
                <div class="col-md-6">
                    <input id="phone_number" 
                           type="tel"
                           class="form-control @error('phone_number') is-invalid @enderror" 
                           name="phone_number" value="{{ old('phone_number') }}" 
                           autocomplete="phone_number" 
                           autofocus>
                    @error('phone_number')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>


            <button class="btn btn-primary">Далее</button>
        </div>
    </div>
    </form>
</div>
@endsection
