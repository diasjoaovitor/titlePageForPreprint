<?php

interface Tradutor {

    public function traduzir($chave, $locale);
    public function obterCheckListTraduzida($locale);
}