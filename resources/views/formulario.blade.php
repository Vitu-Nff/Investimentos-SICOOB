@extends('layouts.default')

@section('title','Perfil Investidor')

@section('content')
    <div class="w-screen h-auto lg:w-1000 lg:h-725 bg-white rounded-xl overflow-hidden flex lg:mt-12 lg:mb-24">
        <section  id="backgroundImg" class="bg-cover hidden h-full w-1/2 lg:block">
        </section>
        <section id="Form" class="flex justify-center items-start mt-12 mb-24 lg:items-center lg:mt-0 h-full w-full lg:w-1/2">
        <form class="w-80 mt-8"
              enctype="multipart/form-data"
              method="POST"
              action="{{ route('form.resultado') }}"
        >
            @csrf
            <fieldset id="formTitle">
            <h3 class="sicoob-grey text-lg font-semibold">Qual o seu</h3>
            <h1 class="sicoob-darkocean text-3xl font-semibold">Perfil de Investimentos?</h1>
            <h2 class="sicoob-quasiwhite text-sm font-regular">Responda ao formulário abaixo e confira nossas sugestões de investimento adequada à sua personalidade, capital e metas!</h2>
            </fieldset>

            <fieldset id="inputs" class="fadeIn mt-6 flex flex-col gap-4">
            <fieldset class="moneyInput">
            <label for="valorInvestido">Quanto deseja investir?</label>
            <input class="transition sicoob-input" name="valorInvestido" id="valorInvestido" value="{{ old('valorInvestido') }}" type="text">
                @error('valorInvestido')
                <p class="error">O valor deve ser um número em R$.</p>
                @enderror
            </fieldset>

            <fieldset class="fadeIn_1s">
            <label for="tipoRisco">O que você considera mais importante?</label>
                <fieldset class="dropdown">
                    <select name="tipoRisco" id="tipoRisco">
                        <option value=”” style="display:none" disabled selected>Escolha a sua alternativa...</option>
                        @foreach($tiposRiscos as $tipoRisco)
                        <option value="{{$tipoRisco->IdTipoRisco}}" name="{{$tipoRisco->IdTipoRisco}}">{{$tipoRisco->NomeTipoRisco}}</option>
                        @endforeach
                    </select>
                    @error('tipoRisco')
                    <p class="error">Selecione uma alternativa.</p>
                    @enderror
                </fieldset>
            </fieldset>

            <fieldset class="fadeIn_2s">
            <label for="tempoInvestimento">Por quanto tempo você deseja investir?</label>
                <fieldset class="dropdown">
                    <select name="tempoInvestimento" id="tempoInvestimento">
                        <option value=”” style="display:none" disabled selected>Escolha a sua alternativa...</option>
                        @foreach($tempoInvestimento as $tempo)
                            @if($tempo->BolAtivo)
                                <option value="{{$tempo->IdTempoInvestimento}}" name="{{$tempo->IdTempoInvestimento}}">{{$tempo->NomeTempoInvestimento}}</option>
                           @endif
                        @endforeach
                    </select>
                    @error('tempoInvestimento')
                    <p class="error">Selecione uma alternativa.</p>
                    @enderror
                </fieldset>
            </fieldset>

            <fieldset class="fadeIn_3s">
            <label for="objetivo">Qual o seu objetivo?</label>
                <fieldset class="dropdown">
                    <select name="objetivo" id="objetivo">
                        <option value=”” style="display:none" disabled selected>Escolha a sua alternativa...</option>
                        @foreach($objetivos as $objetivo)
                            @if($objetivo->BolAtivo)
                                <option value="{{$objetivo->IdObjetivo}}" name="{{$objetivo->IdObjetivo}}">{{$objetivo->NomeObjetivo}}</option>
                            @endif
                        @endforeach
                    </select>
                    @error('objetivo')
                    <p class="error">Selecione uma alternativa.</p>
                    @enderror
                </fieldset>
            </fieldset>

            <button type="submit" class="mt-4"><a class="buttonText"></a></button>
                <a class="block text-sm sicoob-quasiwhite w-full text-center">Precisa de ajuda? <span class="sicoob-lightocean">Toque aqui!</span></a>
            </fieldset>
        </form>
        </section>
    </div>
@endsection
