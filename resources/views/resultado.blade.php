@extends('layouts.default')

@section('title','Perfil Investidor')

@section('content')
    <div class="flex flex-col gap-6 py-12 px-2 lg:py-14 w-96 lg:px-20 h-auto lg:w-1000 lg:min-h-725 bg-white rounded-xl overflow-hidden lg:mt-12 lg:mb-24">

        <div class="flex flex-col gap-1.5 w-ful">
            <h3 class="sicoob-grey text-lg font-semibold">Você se enquadra no</h3>
            <h1 class="fadeIn sicoob-darkocean text-3xl font-semibold">{{$nome}}</h1>
            <h2 class="sicoob-quasiwhite text-sm font-regular">Confira nossos investimentos selecionados para você para que você conquiste '{{$objetivo}}' com segurança e qualidade!</h2>
        </div>

        <div class="flex flex-col gap-4">
            <div class="col-span-2 bg-sicoob-richgreen fadeIn_1s containerOpcao lg:min-h-64 w-full">
                <section class="title mb-4">
                   <h3 class="tracking-wide sicoob-hopegreen font-extralight text-xs font-semibold">Investimento mais alinhado ao seu Perfil</h3>
                   <h1 class="tracking-wide text-white text-3xl font-medium w-full">{{$investimentos[0]->NomeModalidade}}</h1>
                   <p class="tracking-wide text-white text-sm font-light w-full">{{$investimentos[0]->Descricao}}</p>
               </section>

                @if( isset($investimentos[1]) )
                        <section class="links flex flex-row gap-6">
                            <button class="tracking-wide transition rounded-lg bg-white py-1 px-4 text-sm font-medium sicoob-lightocean hover:scale-105 hover:bg-cyan-900 hover:text-white"><a href="/">Simular</a></button>
                            <button class="tracking-wide transition rounded-lg bg-sicoob-lightocean-fade py-1 px-4 text-sm font-medium text-white hover:scale-105 hover:bg-cyan-900"><a href="/">Refazer</a></button>
                        </section>
                </div>
                <div class="flex flex-col lg:flex-row gap-4">
                    <div class="bg-sicoob-lightocean fadeIn_2s containerOpcao lg:min-h-64 w-full">
                        <section class="title mb-4">
                            <h1 class="tracking-wide text-white text-3xl font-medium w-full">{{$investimentos[1]->NomeModalidade}}</h1>
                            <p class="text-white text-sm font-extralight w-full">{{$investimentos[1]->Descricao}}</p>
                        </section>

                        <section class="links flex flex-row gap-3">
                            <button class="tracking-wide transition rounded-lg bg-white py-1 px-4 text-sm font-medium sicoob-lightocean hover:scale-105 hover:bg-cyan-900 hover:text-white"><a href="/">Simular</a></button>
                        </section>
                    </div>
                    @if(isset($investimentos[2]))
                        <div class="bg-sicoob-darkocean fadeIn_3s containerOpcao lg:min-h-64 w-full">
                            <section class="title mb-4">
                                <h1 class="tracking-wide text-white text-3xl font-medium w-full">{{$investimentos[2]->NomeModalidade}}</h1>
                                <p class="text-white text-sm font-extralight w-full">{{$investimentos[2]->Descricao}}</p>
                            </section>

                            <section class="links flex flex-row gap-3">
                                <button class="tracking-wide transition rounded-lg bg-white py-1 px-4 text-sm font-medium sicoob-lightocean hover:scale-105 hover:bg-cyan-900 hover:text-white"><a href="/">Simular</a></button>
                            </section>
                        </div>
                    @endif
                @endif
            </div>
        </div>

    </div>
@endsection
