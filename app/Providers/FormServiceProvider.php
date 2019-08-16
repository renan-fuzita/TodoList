<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Form;                                #necessary

class FormServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        #EXISTE um diretorio em view/components chamado form, la existem 
        #blades p cada componente abaixo.

        #components/form/text.php
        #components/form/textArea.php
        #components/form/submit.php
        #components/form/hidden.php
        Form::component('bsText', 'components.form.text', ['name', 'value' => null, 'attributes' => []]);
        Form::component('bsTextArea', 'components.form.textarea', ['name', 'value' => null, 'attributes' => []]);
        Form::component('bsSubmit', 'components.form.submit', ['value' => 'Submit', 'attributes' => []]);
        Form::component('hidden', 'components.form.hidden', ['name', 'value' => null, 'attributes' => []]);
        # bs means Bootstrap. Because we`re not using boostrap with hidden, has no need for bs
    }

/*  view/components/form/....

    ['name', 'value' => null, 'attributes' => []]
                  equivalente a  
          [$name, $value, $attributes]

    Observe dentro do parenteses abaixo!!

    { {Form::hidden($name,$value,$attributes)}}
    { {Form::submit($value, $attributes)}}
    { {Form::label($name, null, ['class' => 'control-label'])}}
    { {Form::text($name, $value, array_merge(['class' => 'form-control'], $attributes)) }}
    { {Form::label($name, null, ['class' => 'control-label'])}}
    { {Form::textarea($name, $value, array_merge(['class' => 'form-control'], $attributes)) }}

    Inves de escrever p/ todos os form 
                  
                    Form::text('name',''[''=>''])

    simplifica no Service passando um default value como $variavel

                    Form::text($name,$value,$attributes)

    No blade final passa apenas o valor necessario

                    Form::bsText('body');

    */

    

}
