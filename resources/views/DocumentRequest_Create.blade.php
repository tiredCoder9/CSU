@extends('layouts.documentForm')
@section('requestPage')

<div class="container">
    <div class="card-deck p-2 mb-3">
      <div class="float-right">
        <a href="{{route('request.store', $requestData->id)}}" 
           
           @if ($requestData->is_completed())
           class="btn btn-primary"
           @else
           class="btn btn-primary disabled"
           @endif
           >
           Отправить на проверку
          </a>
        </div>
        <div class="float-right ml-2">
          <a href="{{route('request.delete', $requestData->id)}}" class="btn btn-primary">Удалить</a>
        </div>
    </div>
    <div class="card-deck">
        <a href="{{ Request::url()}}/personal_info/create" class="custom-card">
            <div class="card" style="width: 18rem; height:28rem; display: inline-block">
              <img class="card-img-top" src="/img/eye.png" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title" >Персональные данные</h5>
                <p class="card-text" >Укажите свои личные данные для обработки</p>
                    <?
                    if($requestData->personal_info_ID==null) echo "<p class=\"card-text\" style=\"color: orange\"> Вы еще не заполнили эту форму!</p>";
                    else echo "<p class=\"card-text\" style=\"color:green\"> Ваши данные успешно сохранены!</p>";
                    ?>
              </div>
            </div>
          </a>
    
          <a href='{{ Request::url()}}/residence_info/create' class="custom-card">
            <div class="card" style="width: 18rem; height:28rem; display: inline-block">
              <img class="card-img-top" src="/img/bank.png" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title" >Место регистрации</h5>
                <p class="card-text" >Укажите данные места своей регистрации.</p>
                    <?
                    if($requestData->residence_info_ID==null) echo "<p class=\"card-text\" style=\"color: orange\"> Вы еще не заполнили эту форму!</p>";
                    else echo "<p class=\"card-text\" style=\"color:green\"> Ваши данные успешно сохранены!</p>";
                    ?>
              </div>
            </div>
          </a>
    
          <a href="{{ Request::url()}}/documentValid_info/create" class="custom-card">
            <div class="card" style="width: 18rem; height:28rem; display: inline-block">
              <img class="card-img-top" src="/img/card.png" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Документы</h5>
                <p class="card-text">Загрузите любой документ удостоверяющий вашу личность.</p>
                    <?
                    if($requestData->docValid_info_ID==null) echo "<p class=\"card-text\" style=\"color: orange\"> Вы еще не заполнили эту форму!</p>";
                    else echo "<p class=\"card-text\" style=\"color:green\"> Ваши данные успешно сохранены!</p>";
                    ?>
              </div>
            </div>
          </a>
        </div>
        <br>
        <div class="card-deck">
          <a href="{{ Request::url()}}/education_info/create"}} class="custom-card">
            <div class="card" style="width: 18rem; height:28rem; display: inline-block">
              <img class="card-img-top" src="/img/mountain.png" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Образование</h5>
                <p class="card-text">Информация о вашем образовании и подтверждающих его документов.</p>
                    <?
                    if($requestData->education_info_ID==null) echo "<p class=\"card-text\" style=\"color: orange\"> Вы еще не заполнили эту форму!</p>";
                    else echo "<p class=\"card-text\" style=\"color:green\"> Ваши данные успешно сохранены!</p>";
                    ?>
              </div>
            </div>
          </a>
        </div>
</div>

@endsection